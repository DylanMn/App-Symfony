<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Fortune;
use AppBundle\Entity\Comment;
use AppBundle\Form\FortuneType;
use AppBundle\Form\CommentType;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList;
use Pagerfanta\Pagerfanta;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
      {
         $fortunes = new Pagerfanta($this->getDoctrine()->getRepository("AppBundle:Fortune")->findLasts());
         $fortunes->setMaxPerPage(1);
         $fortunes->setCurrentPage($request->get("page",1));
                //replace this example code with whatever you need
         return $this->render('default/index.html.twig', array(
             'quotes'=>$fortunes
         ));
     }

    }

    /**
     * @Route("/voteup/{id}", name="voteup")
     */
    public function voteUpAction(Request $request, $id)
    {
     if (!$this->get("session")->has("idQuote".$id)) {
       $quote = $this->getDoctrine()->getRepository("AppBundle:Fortune")->find($id);
       $quote->voteUp();
       $this->get("session")->set("idQuote".$id, "voteUp");
       $this->getDoctrine()->getManager()->Flush();
       return $this->redirect($this->getRequest()->headers->get('referer'));
     }
     else {
       return $this->redirect($this->getRequest()->headers->get('referer'));
     }
   }

    /**
     * @Route("/votedown/{id}", name="votedown")
     */
     public function voteDownAction(Request $request, $id)
    {
      if (!$this->get("session")->has("idQuote".$id)) {
        $quote = $this->getDoctrine()->getRepository("AppBundle:Fortune")->find($id);
        $quote->voteDown();
        $this->get("session")->set("idQuote".$id, "voteDown");
        $this->getDoctrine()->getManager()->Flush();
        return $this->redirect($this->getRequest()->headers->get('referer'));
      }
      else {
        return $this->redirect($this->getRequest()->headers->get('referer'));
      }
    }

    /**
     * @Route("/best", name="rated")
     */

    public function showRatedBest(Request $request)
    {
      return $this->render('default/best.html.twig', array(
          'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
          'bestQuotes' => $this->getDoctrine()->getRepository("AppBundle:Fortune")->bestRated(),

      ));
    }

    /**
     * @Route("/worst", name="rateds")
     */

    public function showRatedWorst(Request $request)
    {
      return $this->render('default/worst.html.twig', array(
          'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
          'worstQuotes' => $this->getDoctrine()->getRepository("AppBundle:Fortune")->worstRated(),
      ));
    }

    /**
     * @Route("/by_author/{author}", name="author")
     */

    public function showByAuthorAction(Request $request, $author)
    {
      return $this->render('default/author.html.twig', array(
          'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
          'quotes' => $this->getDoctrine()->getRepository("AppBundle:Fortune")->findLasts(),
          'authorQuotes' => $this->getDoctrine()->getRepository("AppBundle:Fortune")->findByAuthor($author),
      ));
    }

    /**
     * @Route("/new", name="create")
     */

    public function createAction(Request $request)
    {
          $form = $this->createForm(new Fortunetype, new Fortune());


          $form->handleRequest($request);
          if ($form->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($form->getdata());
          $em->flush();
          return $this->redirectToRoute('homepage');
          }
      return $this->render('default/new.html.twig', array('form'=>$form->createView()));

    }




    /**
     * @Route("/idquote/{id}", name="id")
     */

    public function showQuoteAction(Request $request, $id)
    {
      $form = $this->createForm(new CommentType, new Comment());

      $form->handleRequest($request);
      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $comment = $form->getdata();
        $fortune = $em->getRepository("AppBundle:Fortune")->find($id);
        $comment->setFortune($fortune);

        $em->persist($comment);
        $em->flush();
        return $this->redirectToRoute('id', ["id" => $id]);
      }

      return $this->render('default/idquote.html.twig', array(
      'quoteunique' => $this->getDoctrine()->getRepository("AppBundle:Fortune")->getQuoteId($id),
      'form'=> $form->createView()
    ));
    }

    /**
     * @Route("/categorie/{categorie}", name="categorie")
     */

    public function showCategorie(Request $request, $categorie)
    {
      return $this->render('default/categorie.html.twig', array(
          'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
          'laCategorie' => $this->getDoctrine()->getRepository("AppBundle:Fortune")->getCategorie($categorie),
//var_dump($this->getDoctrine()->getRepository("AppBundle:Fortune")->getQuoteId($id))
          //'quoteunique' => $this->getDoctrine()->getRepository("AppBundle:Fortune")->getQuoteId($id),
      ));
    }


    /**
     * @Route("/fresh", name="dailyquote")
     */
    public function showDailyQuote(Request $request)
    {

        return $this->render('default/fresh.html.twig', array(
            'quotes' => $this->getDoctrine()->getRepository("AppBundle:Fortune")->findDaily()

        ));
    }

    /**
    * @Route("/moderation", name="moderation")
    */
   public function moderationAction(Request $request)
   {
       $pagerfanta = new pagerfanta($this->getDoctrine()->getRepository("AppBundle:Fortune")->findUnpublished());
       $pagerfanta->setMaxPerPage(3);
       $pagerfanta->setCurrentPage($request->get("page", 1));
       // replace this example code with whatever you need
       return $this->render('default/moderation.html.twig', array(
               'quotes' => $pagerfanta,
               //'quotes' => $this->getDoctrine()->getRepository("AppBundle:Fortune")
           )
       );
   }


   /**
    * @Route("/publish/{id}", name="publish")
    */
   public function publishAction($id)
   {
       $quote = $this->getDoctrine()->getRepository("AppBundle:Fortune")->find($id);
       $quote->publish();
       $this->getDoctrine()->getManager()->flush();
       return $this->redirectToRoute("moderation");
   }
   /**
    * @Route("moderation/{id}/remove/", name="remove")
    */
   public function removeAction($id)
   {
       $quote = $this->getDoctrine()->getRepository("AppBundle:Fortune")->find($id);
       $em = $this->getDoctrine()->getManager();
       $em->remove($quote);
       $em->flush();
       return $this->redirectToRoute("moderation");
   }

   /**
     * @Route("/idquote/{id}/edit/", name="edit_quote")
     */
     public function editQuoteAction(Request $request, $id)
     {
               $quotes = $this->getDoctrine()->getRepository("AppBundle:Fortune")->find($id);
               dump($quotes);
               $form = $this->createForm(new FortuneType, $quotes);


               $form->handleRequest($request);

               if ($form->isValid()){
                 dump($quotes);
                   $em = $this->getDoctrine()->getManager();
                   $quote = $form->getData();
                   $em->persist($quote);
                   $em->flush();
                   //return $this->redirectToRoute('quotes', array ('id'=>$quotes->getId()));
               }
               dump($quotes->getId());
               return $this->render('default/editQuote.html.twig', array (
               'quotes' => $quotes,
               'form' => $form->createView()
                   ));
     }




}
