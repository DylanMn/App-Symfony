<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4511aaeef994af7b613b08434c3d4ad739c442fd8ffb593b8230d8433f9f13e4 extends Twig_Template
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
        $__internal_e41a30b5e2a5806139923c243e97840e2488d326d050c28fdf6b7eb94249494e = $this->env->getExtension("native_profiler");
        $__internal_e41a30b5e2a5806139923c243e97840e2488d326d050c28fdf6b7eb94249494e->enter($__internal_e41a30b5e2a5806139923c243e97840e2488d326d050c28fdf6b7eb94249494e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e41a30b5e2a5806139923c243e97840e2488d326d050c28fdf6b7eb94249494e->leave($__internal_e41a30b5e2a5806139923c243e97840e2488d326d050c28fdf6b7eb94249494e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d06b963eb6a262f2f59fd67df1395da59ed8aaae46ce376eecd9175ae5668288 = $this->env->getExtension("native_profiler");
        $__internal_d06b963eb6a262f2f59fd67df1395da59ed8aaae46ce376eecd9175ae5668288->enter($__internal_d06b963eb6a262f2f59fd67df1395da59ed8aaae46ce376eecd9175ae5668288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d06b963eb6a262f2f59fd67df1395da59ed8aaae46ce376eecd9175ae5668288->leave($__internal_d06b963eb6a262f2f59fd67df1395da59ed8aaae46ce376eecd9175ae5668288_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9096058487f96d900709faf8d37aecc57b010ccf773dfb5f95c344b9f52882a = $this->env->getExtension("native_profiler");
        $__internal_e9096058487f96d900709faf8d37aecc57b010ccf773dfb5f95c344b9f52882a->enter($__internal_e9096058487f96d900709faf8d37aecc57b010ccf773dfb5f95c344b9f52882a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e9096058487f96d900709faf8d37aecc57b010ccf773dfb5f95c344b9f52882a->leave($__internal_e9096058487f96d900709faf8d37aecc57b010ccf773dfb5f95c344b9f52882a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ab41e56d5ef5d17c68f0389e0d001d66fc5d0ce40ed49097469cdb80b31e826 = $this->env->getExtension("native_profiler");
        $__internal_1ab41e56d5ef5d17c68f0389e0d001d66fc5d0ce40ed49097469cdb80b31e826->enter($__internal_1ab41e56d5ef5d17c68f0389e0d001d66fc5d0ce40ed49097469cdb80b31e826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1ab41e56d5ef5d17c68f0389e0d001d66fc5d0ce40ed49097469cdb80b31e826->leave($__internal_1ab41e56d5ef5d17c68f0389e0d001d66fc5d0ce40ed49097469cdb80b31e826_prof);

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
