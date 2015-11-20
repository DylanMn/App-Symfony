<?php

/* default/best.html.twig */
class __TwigTemplate_9ce428135015465d0d93ae56bc0782b7f7370ae3c53929c7cee521c5d247c2c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/best.html.twig", 1);
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
        $__internal_08616eeeaf4882fe865d1b20fba53d00187eeef13f1d7b9a12e0566fe1ad3eec = $this->env->getExtension("native_profiler");
        $__internal_08616eeeaf4882fe865d1b20fba53d00187eeef13f1d7b9a12e0566fe1ad3eec->enter($__internal_08616eeeaf4882fe865d1b20fba53d00187eeef13f1d7b9a12e0566fe1ad3eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/best.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08616eeeaf4882fe865d1b20fba53d00187eeef13f1d7b9a12e0566fe1ad3eec->leave($__internal_08616eeeaf4882fe865d1b20fba53d00187eeef13f1d7b9a12e0566fe1ad3eec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a85ac6ad69dae6604a6ee9b66a80877047a352e7df2fe035d2b9d15912be632f = $this->env->getExtension("native_profiler");
        $__internal_a85ac6ad69dae6604a6ee9b66a80877047a352e7df2fe035d2b9d15912be632f->enter($__internal_a85ac6ad69dae6604a6ee9b66a80877047a352e7df2fe035d2b9d15912be632f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"row\">
  <div class=\"col-sm-1\"></div>
  <div class=\"col-sm-4\">
    <h2 class=\"text-center\">Les meilleurs Faker</h2><br>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bestQuotes"]) ? $context["bestQuotes"] : $this->getContext($context, "bestQuotes")));
        foreach ($context['_seq'] as $context["_key"] => $context["bestQuote"]) {
            // line 9
            echo "      <h3 class=\"text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bestQuote"], "title", array()), "html", null, true);
            echo "</h3>
      <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["bestQuote"], "content", array()), "html", null, true);
            echo "</p>
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <p class=\"pull-left\"> Author : ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["bestQuote"], "author", array()), "html", null, true);
            echo "</p>
        </div>
        <div class=\"col-sm-6\">
          <p class=\"pull-right\"> Date : ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["bestQuote"], "createdAt", array()), "d/m/Y"), "html", null, true);
            echo "</p>
        </div>
      </div>
      <div class=\"pull-right\">
        <div class=\"row\">
          <div class=\"col-sm-3\">
            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voteup", array("id" => $this->getAttribute($context["bestQuote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-up\"></i></a>
          </div>
          <div class=\"col-sm-3\">
            <p>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["bestQuote"], "upVote", array()), "html", null, true);
            echo "</p>
          </div>
          <div class=\"col-sm-3\">
            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("votedown", array("id" => $this->getAttribute($context["bestQuote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-o-down\"></i></a>
          </div>
          <div class=\"col-sm-3\">
            <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["bestQuote"], "downVote", array()), "html", null, true);
            echo "</p>
          </div>
        </div>
      </div>

      <br><br>
      <hr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bestQuote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "  </div>


  </div>

  <div class=\"col-sm-1\"></div>

</div>
";
        
        $__internal_a85ac6ad69dae6604a6ee9b66a80877047a352e7df2fe035d2b9d15912be632f->leave($__internal_a85ac6ad69dae6604a6ee9b66a80877047a352e7df2fe035d2b9d15912be632f_prof);

    }

    public function getTemplateName()
    {
        return "default/best.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 39,  94 => 31,  88 => 28,  82 => 25,  76 => 22,  67 => 16,  61 => 13,  55 => 10,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="row">*/
/*   <div class="col-sm-1"></div>*/
/*   <div class="col-sm-4">*/
/*     <h2 class="text-center">Les meilleurs Faker</h2><br>*/
/*     {% for bestQuote in bestQuotes %}*/
/*       <h3 class="text-center">{{bestQuote.title}}</h3>*/
/*       <p>{{bestQuote.content}}</p>*/
/*       <div class="row">*/
/*         <div class="col-sm-6">*/
/*           <p class="pull-left"> Author : {{bestQuote.author}}</p>*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*           <p class="pull-right"> Date : {{bestQuote.createdAt|date("d/m/Y")}}</p>*/
/*         </div>*/
/*       </div>*/
/*       <div class="pull-right">*/
/*         <div class="row">*/
/*           <div class="col-sm-3">*/
/*             <a href="{{path("voteup", {id: bestQuote.id})}}"><i class="fa fa-thumbs-o-up"></i></a>*/
/*           </div>*/
/*           <div class="col-sm-3">*/
/*             <p>{{bestQuote.upVote}}</p>*/
/*           </div>*/
/*           <div class="col-sm-3">*/
/*             <a href="{{path("votedown", {id: bestQuote.id})}}"><i class="fa fa-thumbs-o-down"></i></a>*/
/*           </div>*/
/*           <div class="col-sm-3">*/
/*             <p>{{bestQuote.downVote}}</p>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <br><br>*/
/*       <hr>*/
/*     {% endfor %}*/
/*   </div>*/
/* */
/* */
/*   </div>*/
/* */
/*   <div class="col-sm-1"></div>*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */
