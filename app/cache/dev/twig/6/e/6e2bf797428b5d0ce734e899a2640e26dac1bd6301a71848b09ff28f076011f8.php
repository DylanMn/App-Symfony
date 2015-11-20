<?php

/* default/worst.html.twig */
class __TwigTemplate_d3227724c5039177d0e8b6b72b73035cbaa93a5720f75b98748df12eca96bbbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/worst.html.twig", 1);
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
        $__internal_b54ff7240b4dfac9d398f0e6feb9d21e896d941557decbf218706ede07d49216 = $this->env->getExtension("native_profiler");
        $__internal_b54ff7240b4dfac9d398f0e6feb9d21e896d941557decbf218706ede07d49216->enter($__internal_b54ff7240b4dfac9d398f0e6feb9d21e896d941557decbf218706ede07d49216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/worst.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b54ff7240b4dfac9d398f0e6feb9d21e896d941557decbf218706ede07d49216->leave($__internal_b54ff7240b4dfac9d398f0e6feb9d21e896d941557decbf218706ede07d49216_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8250ab46009d6e7cf42398e07c6d83e4859ef706cebbceae7eaee319d20cb8a7 = $this->env->getExtension("native_profiler");
        $__internal_8250ab46009d6e7cf42398e07c6d83e4859ef706cebbceae7eaee319d20cb8a7->enter($__internal_8250ab46009d6e7cf42398e07c6d83e4859ef706cebbceae7eaee319d20cb8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"row\">

  <div class=\"col-sm-1\"></div>

  <div class=\"col-sm-2\"></div>

  <div class=\"col-sm-4\">
    <h2 class=\"text-center\">Les moins bons Faker</h2><br>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["worstQuotes"]) ? $context["worstQuotes"] : $this->getContext($context, "worstQuotes")));
        foreach ($context['_seq'] as $context["_key"] => $context["worstQuote"]) {
            // line 12
            echo "      <h3 class=\"text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["worstQuote"], "title", array()), "html", null, true);
            echo "</h3>
      <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["worstQuote"], "content", array()), "html", null, true);
            echo "</p>
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <p class=\"pull-left\"> Author : ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["worstQuote"], "author", array()), "html", null, true);
            echo "</p>
        </div>
        <div class=\"col-sm-6\">
          <p class=\"pull-right\"> Date : ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["worstQuote"], "createdAt", array()), "d/m/Y"), "html", null, true);
            echo "</p>
        </div>
      </div>
      <div class=\"pull-right\">
        <div class=\"row\">
          <div class=\"col-sm-3\">
            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voteup", array("id" => $this->getAttribute($context["worstQuote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-up\"></i></a>
          </div>
          <div class=\"col-sm-3\">
            <p>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["worstQuote"], "upVote", array()), "html", null, true);
            echo "</p>
          </div>
          <div class=\"col-sm-3\">
            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("votedown", array("id" => $this->getAttribute($context["worstQuote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-down\"></i></a>
          </div>
          <div class=\"col-sm-3\">
            <p>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["worstQuote"], "downVote", array()), "html", null, true);
            echo "</p>
          </div>
        </div>
      </div>

      <br><br>
      <hr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['worstQuote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "  </div>

  <div class=\"col-sm-1\"></div>

</div>
";
        
        $__internal_8250ab46009d6e7cf42398e07c6d83e4859ef706cebbceae7eaee319d20cb8a7->leave($__internal_8250ab46009d6e7cf42398e07c6d83e4859ef706cebbceae7eaee319d20cb8a7_prof);

    }

    public function getTemplateName()
    {
        return "default/worst.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 42,  98 => 34,  92 => 31,  86 => 28,  80 => 25,  71 => 19,  65 => 16,  59 => 13,  54 => 12,  50 => 11,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <div class="row">*/
/* */
/*   <div class="col-sm-1"></div>*/
/* */
/*   <div class="col-sm-2"></div>*/
/* */
/*   <div class="col-sm-4">*/
/*     <h2 class="text-center">Les moins bons Faker</h2><br>*/
/*     {% for worstQuote in worstQuotes %}*/
/*       <h3 class="text-center">{{worstQuote.title}}</h3>*/
/*       <p>{{worstQuote.content}}</p>*/
/*       <div class="row">*/
/*         <div class="col-sm-6">*/
/*           <p class="pull-left"> Author : {{worstQuote.author}}</p>*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*           <p class="pull-right"> Date : {{worstQuote.createdAt|date("d/m/Y")}}</p>*/
/*         </div>*/
/*       </div>*/
/*       <div class="pull-right">*/
/*         <div class="row">*/
/*           <div class="col-sm-3">*/
/*             <a href="{{path("voteup", {id: worstQuote.id})}}"><i class="fa fa-thumbs-o-up"></i></a>*/
/*           </div>*/
/*           <div class="col-sm-3">*/
/*             <p>{{worstQuote.upVote}}</p>*/
/*           </div>*/
/*           <div class="col-sm-3">*/
/*             <a href="{{path("votedown", {id: worstQuote.id})}}"><i class="fa fa-thumbs-o-down"></i></a>*/
/*           </div>*/
/*           <div class="col-sm-3">*/
/*             <p>{{worstQuote.downVote}}</p>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <br><br>*/
/*       <hr>*/
/*     {% endfor %}*/
/*   </div>*/
/* */
/*   <div class="col-sm-1"></div>*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */
