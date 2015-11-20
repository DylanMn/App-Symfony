<?php

/* default/index.html.twig */
class __TwigTemplate_39bd736466d8262b23a56a45c756a1656e35cc0f9dace252632dd69d7d86973a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_3144514eddae5bf0d86245bffded640d78da91cd16dd0ae4b706397caa9dcf5a = $this->env->getExtension("native_profiler");
        $__internal_3144514eddae5bf0d86245bffded640d78da91cd16dd0ae4b706397caa9dcf5a->enter($__internal_3144514eddae5bf0d86245bffded640d78da91cd16dd0ae4b706397caa9dcf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3144514eddae5bf0d86245bffded640d78da91cd16dd0ae4b706397caa9dcf5a->leave($__internal_3144514eddae5bf0d86245bffded640d78da91cd16dd0ae4b706397caa9dcf5a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_06ef55e0f0a7f28ad174ba5e610f205e277fba9d5392e2ad67be9eb3f8bcbde5 = $this->env->getExtension("native_profiler");
        $__internal_06ef55e0f0a7f28ad174ba5e610f205e277fba9d5392e2ad67be9eb3f8bcbde5->enter($__internal_06ef55e0f0a7f28ad174ba5e610f205e277fba9d5392e2ad67be9eb3f8bcbde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-sm-4\"></div>

      <div class=\"col-sm-4\">
        <h2 class=\"text-center\">Quotes récentes</h2><br>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quotes"]) ? $context["quotes"] : $this->getContext($context, "quotes")));
        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
            // line 11
            echo "          <h3 class=\"text-center\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("id", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "title", array()), "html", null, true);
            echo "</a></h3>
          <div class=\"backgroundblue\">
          <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "content", array()), "html", null, true);
            echo "</p>
        </div>
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"infobulle\">
              <p class=\"pull-left\"> Author : <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("author", array("author" => $this->getAttribute($context["quote"], "author", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "author", array()), "html", null, true);
            echo "</a></p>

            </div>
            </div>
            <div class=\"col-sm-6\">
              <p class=\"pull-right\"> Date : ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quote"], "createdAt", array()), "d/m/Y H:i"), "html", null, true);
            echo "</p>
            </div>
          </div>
          <p class=\"pull-left\"> Catégorie : <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorie", array("categorie" => $this->getAttribute($context["quote"], "author", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "author", array()), "html", null, true);
            echo "</a></p>
          <div class=\"pull-right\">
            <div class=\"row\">
              <div class=\"col-sm-3\">
                ";
            // line 30
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => ("idQuote" . $this->getAttribute($context["quote"], "id", array()))), "method") == "voteUp")) {
                // line 31
                echo "        <i class=\"fa fa-thumbs-o-up\"
        style=\"color:silver;\"></i></a>
      ";
            } else {
                // line 34
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voteup", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-thumbs-o-up\"></i></a>
      ";
            }
            // line 36
            echo "              </div>
              <div class=\"col-sm-3\">
                <p>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "upVote", array()), "html", null, true);
            echo "</p>
              </div>
              <div class=\"col-sm-3\">
                ";
            // line 41
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => ("idQuote" . $this->getAttribute($context["quote"], "id", array()))), "method") == "voteDown")) {
                // line 42
                echo "                  <i class=\"fa fa-thumbs-o-down\" style=\"color:silver;\"</i></a>
                ";
            } else {
                // line 44
                echo "                  <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("votedown", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-thumbs-o-down\"></i></a>
                ";
            }
            // line 46
            echo "              </div>
              <div class=\"col-sm-3\">
                <p>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "downVote", array()), "html", null, true);
            echo "</p>
              </div>
            </div>
          </div>

          <br><br>
          <hr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["quotes"]) ? $context["quotes"] : $this->getContext($context, "quotes")), "twitter_bootstrap3_translated");
        echo "
      </div>

      <div class=\"col-sm-4\"></div>
    </div>



  </div>

";
        
        $__internal_06ef55e0f0a7f28ad174ba5e610f205e277fba9d5392e2ad67be9eb3f8bcbde5->leave($__internal_06ef55e0f0a7f28ad174ba5e610f205e277fba9d5392e2ad67be9eb3f8bcbde5_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 56,  132 => 48,  128 => 46,  122 => 44,  118 => 42,  116 => 41,  110 => 38,  106 => 36,  100 => 34,  95 => 31,  93 => 30,  84 => 26,  78 => 23,  68 => 18,  60 => 13,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*   <div class="container-fluid">*/
/*     <div class="row">*/
/*       <div class="col-sm-4"></div>*/
/* */
/*       <div class="col-sm-4">*/
/*         <h2 class="text-center">Quotes récentes</h2><br>*/
/*         {% for quote in quotes %}*/
/*           <h3 class="text-center"><a href="{{path("id", {id: quote.id})}}">{{quote.title}}</a></h3>*/
/*           <div class="backgroundblue">*/
/*           <p>{{quote.content}}</p>*/
/*         </div>*/
/*           <div class="row">*/
/*             <div class="col-sm-6">*/
/*               <div class="infobulle">*/
/*               <p class="pull-left"> Author : <a href="{{path("author", {author: quote.author})}}">{{quote.author}}</a></p>*/
/* */
/*             </div>*/
/*             </div>*/
/*             <div class="col-sm-6">*/
/*               <p class="pull-right"> Date : {{quote.createdAt|date("d/m/Y H:i")}}</p>*/
/*             </div>*/
/*           </div>*/
/*           <p class="pull-left"> Catégorie : <a href="{{path("categorie", {categorie: quote.author})}}">{{quote.author}}</a></p>*/
/*           <div class="pull-right">*/
/*             <div class="row">*/
/*               <div class="col-sm-3">*/
/*                 {% if app.session.get('idQuote' ~ quote.id) == 'voteUp' %}*/
/*         <i class="fa fa-thumbs-o-up"*/
/*         style="color:silver;"></i></a>*/
/*       {% else %}*/
/*         <a href="{{path("voteup", {id: quote.id})}}"><i class="fa fa-thumbs-o-up"></i></a>*/
/*       {% endif %}*/
/*               </div>*/
/*               <div class="col-sm-3">*/
/*                 <p>{{quote.upVote}}</p>*/
/*               </div>*/
/*               <div class="col-sm-3">*/
/*                 {% if app.session.get('idQuote' ~ quote.id) == 'voteDown' %}*/
/*                   <i class="fa fa-thumbs-o-down" style="color:silver;"</i></a>*/
/*                 {% else %}*/
/*                   <a href="{{path("votedown", {id: quote.id})}}"><i class="fa fa-thumbs-o-down"></i></a>*/
/*                 {% endif %}*/
/*               </div>*/
/*               <div class="col-sm-3">*/
/*                 <p>{{quote.downVote}}</p>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/* */
/*           <br><br>*/
/*           <hr>*/
/*         {% endfor %}*/
/* {{ pagerfanta(quotes, 'twitter_bootstrap3_translated') }}*/
/*       </div>*/
/* */
/*       <div class="col-sm-4"></div>*/
/*     </div>*/
/* */
/* */
/* */
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
