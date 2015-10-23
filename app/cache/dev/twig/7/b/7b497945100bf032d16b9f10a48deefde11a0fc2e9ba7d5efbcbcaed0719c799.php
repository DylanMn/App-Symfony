<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9d3b3ec6ab587469fea7f80c68205bda17e463464d04836c73835eaabdf18002 extends Twig_Template
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
        $__internal_ec4337a30182deff5541e5c30457ec09f54cd08e01e730dcb2d509191146f5c2 = $this->env->getExtension("native_profiler");
        $__internal_ec4337a30182deff5541e5c30457ec09f54cd08e01e730dcb2d509191146f5c2->enter($__internal_ec4337a30182deff5541e5c30457ec09f54cd08e01e730dcb2d509191146f5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec4337a30182deff5541e5c30457ec09f54cd08e01e730dcb2d509191146f5c2->leave($__internal_ec4337a30182deff5541e5c30457ec09f54cd08e01e730dcb2d509191146f5c2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a329f03cb39cb1631c7716e7c9d564dc60404cef179c1a444277477fe01d06d = $this->env->getExtension("native_profiler");
        $__internal_3a329f03cb39cb1631c7716e7c9d564dc60404cef179c1a444277477fe01d06d->enter($__internal_3a329f03cb39cb1631c7716e7c9d564dc60404cef179c1a444277477fe01d06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3a329f03cb39cb1631c7716e7c9d564dc60404cef179c1a444277477fe01d06d->leave($__internal_3a329f03cb39cb1631c7716e7c9d564dc60404cef179c1a444277477fe01d06d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6f6519c5442f2ed99c4896e07ff15d8b48efb61788ce1cf915acad6177f8c6f = $this->env->getExtension("native_profiler");
        $__internal_c6f6519c5442f2ed99c4896e07ff15d8b48efb61788ce1cf915acad6177f8c6f->enter($__internal_c6f6519c5442f2ed99c4896e07ff15d8b48efb61788ce1cf915acad6177f8c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c6f6519c5442f2ed99c4896e07ff15d8b48efb61788ce1cf915acad6177f8c6f->leave($__internal_c6f6519c5442f2ed99c4896e07ff15d8b48efb61788ce1cf915acad6177f8c6f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_439069b92b26918f58370f16e91a31f1a3f28454f8e36762fe49d792c7441d4a = $this->env->getExtension("native_profiler");
        $__internal_439069b92b26918f58370f16e91a31f1a3f28454f8e36762fe49d792c7441d4a->enter($__internal_439069b92b26918f58370f16e91a31f1a3f28454f8e36762fe49d792c7441d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_439069b92b26918f58370f16e91a31f1a3f28454f8e36762fe49d792c7441d4a->leave($__internal_439069b92b26918f58370f16e91a31f1a3f28454f8e36762fe49d792c7441d4a_prof);

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
