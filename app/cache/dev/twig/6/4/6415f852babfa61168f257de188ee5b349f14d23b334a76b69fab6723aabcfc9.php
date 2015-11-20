<?php

/* default/idquote.html.twig */
class __TwigTemplate_5ec9da34142b1ed407894ad5448e2cbeec215ac632d240a734e384b781929d74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/idquote.html.twig", 1);
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
        $__internal_a04194686528904347309ebf0ee5f33ffb03ded9148abc7d9a35179ca0853e38 = $this->env->getExtension("native_profiler");
        $__internal_a04194686528904347309ebf0ee5f33ffb03ded9148abc7d9a35179ca0853e38->enter($__internal_a04194686528904347309ebf0ee5f33ffb03ded9148abc7d9a35179ca0853e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/idquote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a04194686528904347309ebf0ee5f33ffb03ded9148abc7d9a35179ca0853e38->leave($__internal_a04194686528904347309ebf0ee5f33ffb03ded9148abc7d9a35179ca0853e38_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_77f7dad59b608e0692c9176a822f2decf042099964eaee70107afdbc2e468dd4 = $this->env->getExtension("native_profiler");
        $__internal_77f7dad59b608e0692c9176a822f2decf042099964eaee70107afdbc2e468dd4->enter($__internal_77f7dad59b608e0692c9176a822f2decf042099964eaee70107afdbc2e468dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">

  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-sm-4\"></div>

      <div class=\"col-sm-4\">

      ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quoteunique"]) ? $context["quoteunique"] : $this->getContext($context, "quoteunique")));
        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
            // line 12
            echo "        <h2 class=\"text-center\">Quote par : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "author", array()), "html", null, true);
            echo "</h2><br>
          <h3 class=\"text-center\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "title", array()), "html", null, true);
            echo "</h3>
          <div class=\"backgroundblue\">
          <p>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "content", array()), "html", null, true);
            echo "</p>
        </div>
        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_quote", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil\"></i> Editer</a>
          <div class=\"row\">
            <div class=\"col-sm-6\">
            <p class=\"pull-left\"> Author : ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "author", array()), "html", null, true);
            echo "</p>
            </div>
            <div class=\"col-sm-6\">
              <p class=\"pull-right\"> Date : ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quote"], "createdAt", array()), "d/m/Y H:i"), "html", null, true);
            echo "</p>
            </div>
          </div>
          <div class=\"pull-right\">
            <div class=\"row\">
              <div class=\"col-sm-3\">
                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voteup", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-up\"></i></a>
              </div>
              <div class=\"col-sm-3\">
                <p>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "upVote", array()), "html", null, true);
            echo "</p>
              </div>
              <div class=\"col-sm-3\">
                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("votedown", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-down\"></i></a>
              </div>
              <div class=\"col-sm-3\">
                <p>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "downVote", array()), "html", null, true);
            echo "</p>
              </div>

            </div>
          </div>
          <br><br>
          <hr>
          <span class='st_facebook_large' displayText='Facebook'></span>
          <span class='st_twitter_large' displayText='Tweet'></span>
          <span class='st_email_large' displayText='Email'></span>
          <p><form action=\"\" method=\"post\" novalidate>
          ";
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'row');
            echo " ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row');
            echo " <br> ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
            echo "  ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo " </form></p>
          ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["quote"], "comments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 51
                echo "          <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                  <h3 class=\"panel-title\">Par : ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "author", array()), "html", null, true);
                echo " le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "date", array()), "d/m/Y H:i"), "html", null, true);
                echo "</h3>
                </div>

                <div class=\"panel-body\">
                  ";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
                echo "
                </div>
              </div>

          <hr>


        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "      </div>

      <div class=\"col-sm-4\"></div>
    </div>



  </div>
  ";
        
        $__internal_77f7dad59b608e0692c9176a822f2decf042099964eaee70107afdbc2e468dd4->leave($__internal_77f7dad59b608e0692c9176a822f2decf042099964eaee70107afdbc2e468dd4_prof);

    }

    public function getTemplateName()
    {
        return "default/idquote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 67,  163 => 65,  149 => 57,  140 => 53,  136 => 51,  132 => 50,  122 => 49,  108 => 38,  102 => 35,  96 => 32,  90 => 29,  81 => 23,  75 => 20,  69 => 17,  64 => 15,  59 => 13,  54 => 12,  50 => 11,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/* */
/*   <div class="container-fluid">*/
/*     <div class="row">*/
/*       <div class="col-sm-4"></div>*/
/* */
/*       <div class="col-sm-4">*/
/* */
/*       {% for quote in quoteunique %}*/
/*         <h2 class="text-center">Quote par : {{quote.author}}</h2><br>*/
/*           <h3 class="text-center">{{quote.title}}</h3>*/
/*           <div class="backgroundblue">*/
/*           <p>{{quote.content}}</p>*/
/*         </div>*/
/*         <a href="{{path("edit_quote", {id: quote.id})}}"><i class="fa fa-pencil"></i> Editer</a>*/
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
/* */
/*             </div>*/
/*           </div>*/
/*           <br><br>*/
/*           <hr>*/
/*           <span class='st_facebook_large' displayText='Facebook'></span>*/
/*           <span class='st_twitter_large' displayText='Tweet'></span>*/
/*           <span class='st_email_large' displayText='Email'></span>*/
/*           <p><form action="" method="post" novalidate>*/
/*           {{ form_row(form.comment) }} {{ form_row(form.author) }} <br> {{ form_widget(form.submit)  }}  {{ form_rest(form)  }} </form></p>*/
/*           {% for comment in quote.comments %}*/
/*           <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/*                   <h3 class="panel-title">Par : {{ comment.author }} le {{comment.date|date("d/m/Y H:i")}}</h3>*/
/*                 </div>*/
/* */
/*                 <div class="panel-body">*/
/*                   {{ comment.comment}}*/
/*                 </div>*/
/*               </div>*/
/* */
/*           <hr>*/
/* */
/* */
/*         {% endfor %}*/
/* */
/*         {% endfor %}*/
/*       </div>*/
/* */
/*       <div class="col-sm-4"></div>*/
/*     </div>*/
/* */
/* */
/* */
/*   </div>*/
/*   {% endblock %}*/
/* */
