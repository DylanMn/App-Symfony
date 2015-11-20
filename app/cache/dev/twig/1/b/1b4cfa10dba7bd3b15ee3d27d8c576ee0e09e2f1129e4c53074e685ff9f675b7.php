<?php

/* default/moderation.html.twig */
class __TwigTemplate_7a76a93e8ac7cbe12986b72d6a89a62f936f379a2cc9933893c49c8302b2e4d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/moderation.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb7f21a1215965e8317fd9fa412f28802703ccbd694434e01e11cad6b121bf48 = $this->env->getExtension("native_profiler");
        $__internal_cb7f21a1215965e8317fd9fa412f28802703ccbd694434e01e11cad6b121bf48->enter($__internal_cb7f21a1215965e8317fd9fa412f28802703ccbd694434e01e11cad6b121bf48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/moderation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb7f21a1215965e8317fd9fa412f28802703ccbd694434e01e11cad6b121bf48->leave($__internal_cb7f21a1215965e8317fd9fa412f28802703ccbd694434e01e11cad6b121bf48_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7f91bcb0c05c7b3a920cf72dcefe5603545f368e74147851c97f779fca7fe08 = $this->env->getExtension("native_profiler");
        $__internal_d7f91bcb0c05c7b3a920cf72dcefe5603545f368e74147851c97f779fca7fe08->enter($__internal_d7f91bcb0c05c7b3a920cf72dcefe5603545f368e74147851c97f779fca7fe08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Modération";
        
        $__internal_d7f91bcb0c05c7b3a920cf72dcefe5603545f368e74147851c97f779fca7fe08->leave($__internal_d7f91bcb0c05c7b3a920cf72dcefe5603545f368e74147851c97f779fca7fe08_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3d09cc912e2c53f6ce4ec93180b98b37a96761adcafeb5425a14e2d3445bca8 = $this->env->getExtension("native_profiler");
        $__internal_d3d09cc912e2c53f6ce4ec93180b98b37a96761adcafeb5425a14e2d3445bca8->enter($__internal_d3d09cc912e2c53f6ce4ec93180b98b37a96761adcafeb5425a14e2d3445bca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Modération de quote</h1>

";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quotes"]) ? $context["quotes"] : $this->getContext($context, "quotes")));
        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
            // line 7
            echo "<div class=\"div_quote\">
\t<ul>
\t\t<h2><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moderation", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\">Titre: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "title", array()), "html", null, true);
            echo "</h2>
\t\t<h3><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("author", array("author" => $this->getAttribute($context["quote"], "author", array()))), "html", null, true);
            echo "\">Auteur: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "author", array()), "html", null, true);
            echo "</a></h3>
\t\t<p>\" ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "content", array()), "html", null, true);
            echo " \"</p>
\t\t<h4>Publiée le: ";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quote"], "createdAt", array()), "d/m/y"), "html", null, true);
            echo "</h4>
    <ul>
       <li> <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publish", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\">Publier</a></li>
       <li> <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></li>
    </ul>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "<div class=\"pagerfanta\"> ";
        echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["quotes"]) ? $context["quotes"] : $this->getContext($context, "quotes")));
        echo "</div>
\t";
        
        $__internal_d3d09cc912e2c53f6ce4ec93180b98b37a96761adcafeb5425a14e2d3445bca8->leave($__internal_d3d09cc912e2c53f6ce4ec93180b98b37a96761adcafeb5425a14e2d3445bca8_prof);

    }

    public function getTemplateName()
    {
        return "default/moderation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 20,  90 => 15,  86 => 14,  81 => 12,  77 => 11,  71 => 10,  65 => 9,  61 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* 	{% block title %}Modération{% endblock %}*/
/* 	{% block body %}*/
/* <h1>Modération de quote</h1>*/
/* */
/* {% for quote in quotes %}*/
/* <div class="div_quote">*/
/* 	<ul>*/
/* 		<h2><a href="{{path("moderation",{id: quote.id})}}">Titre: {{quote.title}}</h2>*/
/* 		<h3><a href="{{path("author",{author: quote.author})}}">Auteur: {{quote.author}}</a></h3>*/
/* 		<p>" {{quote.content}} "</p>*/
/* 		<h4>Publiée le: {{ quote.createdAt|date('d/m/y') }}</h4>*/
/*     <ul>*/
/*        <li> <a href="{{ path('publish', {id: quote.id}) }}">Publier</a></li>*/
/*        <li> <a href="{{ path('remove', {id: quote.id}) }}">Supprimer</a></li>*/
/*     </ul>*/
/* </div>*/
/* */
/* {% endfor %}*/
/* <div class="pagerfanta"> {{ pagerfanta(quotes) }}</div>*/
/* 	{% endblock %}*/
/* */
