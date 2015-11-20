<?php

/* default/categorie.html.twig */
class __TwigTemplate_822496c4b40f5901543fddec6df128d70dbcb0d91d44978d6db2ecf0133675ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/categorie.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13955a6f3e2f9aea04df81e4f6e61225486bf45fba7d3588440d06bfde3d1cf3 = $this->env->getExtension("native_profiler");
        $__internal_13955a6f3e2f9aea04df81e4f6e61225486bf45fba7d3588440d06bfde3d1cf3->enter($__internal_13955a6f3e2f9aea04df81e4f6e61225486bf45fba7d3588440d06bfde3d1cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13955a6f3e2f9aea04df81e4f6e61225486bf45fba7d3588440d06bfde3d1cf3->leave($__internal_13955a6f3e2f9aea04df81e4f6e61225486bf45fba7d3588440d06bfde3d1cf3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d3edceb56e042bdd3e0f800263391e65a70543e393ed82fd0440a7eefe6af50 = $this->env->getExtension("native_profiler");
        $__internal_8d3edceb56e042bdd3e0f800263391e65a70543e393ed82fd0440a7eefe6af50->enter($__internal_8d3edceb56e042bdd3e0f800263391e65a70543e393ed82fd0440a7eefe6af50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">

  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-sm-4\"></div>
      <div class=\"col-sm-4\">
      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["laCategorie"]) ? $context["laCategorie"] : $this->getContext($context, "laCategorie")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
            // line 10
            echo "
        <h2 class=\"text-center\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "categorie", array()), "html", null, true);
            echo "</h2><br>
          <h3 class=\"text-center\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "title", array()), "html", null, true);
            echo "</h3>
          <div class=\"backgroundblue\">
          <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "content", array()), "html", null, true);
            echo "</p>
        </div>
          <div class=\"row\">
            <div class=\"col-sm-6\">
            <p class=\"pull-left\"> Author : ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "author", array()), "html", null, true);
            echo "</p>
            </div>
            <div class=\"col-sm-6\">
              <p class=\"pull-right\"> Date : ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quote"], "createdAt", array()), "d/m/Y H:i"), "html", null, true);
            echo "</p>
            </div>
          </div>
          <div class=\"pull-right\">
            <div class=\"row\">
              <div class=\"col-sm-3\">
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voteup", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-up\"></i></a>
              </div>
              <div class=\"col-sm-3\">
                <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "upVote", array()), "html", null, true);
            echo "</p>
              </div>
              <div class=\"col-sm-3\">
                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("votedown", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-down\"></i></a>
              </div>
              <div class=\"col-sm-3\">
                <p>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "downVote", array()), "html", null, true);
            echo "</p>
              </div>
            </div>
          </div>

          <br><br>
          <hr>
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "          <h2>Aucune quote pour l'instant :(</h2>
          <p class=\"bs-component\">
            <a href=\"/new\" class=\"btn btn-primary btn-md\"><i class=\"fa fa-pencil-square-o fa-1x\"></i> Créer une quote</a>
            <a href=\"/\" class=\"btn btn-primary btn-md\">Retour</a>
          </p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "


      </div>

      <div class=\"col-sm-4\"></div>
    </div>





  </div>
  ";
        
        $__internal_8d3edceb56e042bdd3e0f800263391e65a70543e393ed82fd0440a7eefe6af50->leave($__internal_8d3edceb56e042bdd3e0f800263391e65a70543e393ed82fd0440a7eefe6af50_prof);

    }

    public function getTemplateName()
    {
        return "default/categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 50,  118 => 44,  105 => 36,  99 => 33,  93 => 30,  87 => 27,  78 => 21,  72 => 18,  65 => 14,  60 => 12,  56 => 11,  53 => 10,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/* */
/*   <div class="container-fluid">*/
/*     <div class="row">*/
/*       <div class="col-sm-4"></div>*/
/*       <div class="col-sm-4">*/
/*       {% for quote in laCategorie %}*/
/* */
/*         <h2 class="text-center">{{quote.categorie}}</h2><br>*/
/*           <h3 class="text-center">{{quote.title}}</h3>*/
/*           <div class="backgroundblue">*/
/*           <p>{{quote.content}}</p>*/
/*         </div>*/
/*           <div class="row">*/
/*             <div class="col-sm-6">*/
/*             <p class="pull-left"> Author : {{quote.author}}</p>*/
/*             </div>*/
/*             <div class="col-sm-6">*/
/*               <p class="pull-right"> Date : {{quote.createdAt|date("d/m/Y H:i")}}</p>*/
/*             </div>*/
/*           </div>*/
/*           <div class="pull-right">*/
/*             <div class="row">*/
/*               <div class="col-sm-3">*/
/*                 <a href="{{path("voteup", {id: quote.id})}}"><i class="fa fa-thumbs-o-up"></i></a>*/
/*               </div>*/
/*               <div class="col-sm-3">*/
/*                 <p>{{quote.upVote}}</p>*/
/*               </div>*/
/*               <div class="col-sm-3">*/
/*                 <a href="{{path("votedown", {id: quote.id})}}"><i class="fa fa-thumbs-o-down"></i></a>*/
/*               </div>*/
/*               <div class="col-sm-3">*/
/*                 <p>{{quote.downVote}}</p>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/* */
/*           <br><br>*/
/*           <hr>*/
/*           {% else %}*/
/*           <h2>Aucune quote pour l'instant :(</h2>*/
/*           <p class="bs-component">*/
/*             <a href="/new" class="btn btn-primary btn-md"><i class="fa fa-pencil-square-o fa-1x"></i> Créer une quote</a>*/
/*             <a href="/" class="btn btn-primary btn-md">Retour</a>*/
/*           </p>*/
/*             {% endfor %}*/
/* */
/* */
/* */
/*       </div>*/
/* */
/*       <div class="col-sm-4"></div>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/* */
/*   </div>*/
/*   {% endblock %}*/
/* */
