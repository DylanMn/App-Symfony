<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_79a99e70d48b11ec135143a7fa0b2ef4c66f0bf1c50044c5dd38790318530f2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1744a20101795eccc00a054051389a659ff6aea27471877258342f7dc0686409 = $this->env->getExtension("native_profiler");
        $__internal_1744a20101795eccc00a054051389a659ff6aea27471877258342f7dc0686409->enter($__internal_1744a20101795eccc00a054051389a659ff6aea27471877258342f7dc0686409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1744a20101795eccc00a054051389a659ff6aea27471877258342f7dc0686409->leave($__internal_1744a20101795eccc00a054051389a659ff6aea27471877258342f7dc0686409_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9fb1a3971cfb6ac84113ea02514bf71ad81b6b6bd46519f598c2e2a33b068433 = $this->env->getExtension("native_profiler");
        $__internal_9fb1a3971cfb6ac84113ea02514bf71ad81b6b6bd46519f598c2e2a33b068433->enter($__internal_9fb1a3971cfb6ac84113ea02514bf71ad81b6b6bd46519f598c2e2a33b068433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9fb1a3971cfb6ac84113ea02514bf71ad81b6b6bd46519f598c2e2a33b068433->leave($__internal_9fb1a3971cfb6ac84113ea02514bf71ad81b6b6bd46519f598c2e2a33b068433_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2ad9a1ab6df9abdbc128cad43db0c1b89655c500e37ebad7143a0e8aeccdd7e = $this->env->getExtension("native_profiler");
        $__internal_d2ad9a1ab6df9abdbc128cad43db0c1b89655c500e37ebad7143a0e8aeccdd7e->enter($__internal_d2ad9a1ab6df9abdbc128cad43db0c1b89655c500e37ebad7143a0e8aeccdd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d2ad9a1ab6df9abdbc128cad43db0c1b89655c500e37ebad7143a0e8aeccdd7e->leave($__internal_d2ad9a1ab6df9abdbc128cad43db0c1b89655c500e37ebad7143a0e8aeccdd7e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6f9238fbcfe070de022dbca6ec504521b1aeb0a6e68d8495663e972a6291652 = $this->env->getExtension("native_profiler");
        $__internal_d6f9238fbcfe070de022dbca6ec504521b1aeb0a6e68d8495663e972a6291652->enter($__internal_d6f9238fbcfe070de022dbca6ec504521b1aeb0a6e68d8495663e972a6291652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d6f9238fbcfe070de022dbca6ec504521b1aeb0a6e68d8495663e972a6291652->leave($__internal_d6f9238fbcfe070de022dbca6ec504521b1aeb0a6e68d8495663e972a6291652_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
