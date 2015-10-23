<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_61b5012dc83b21f99887520e53f1ef543d4d08a95bcd02bf205c628863f3347e extends Twig_Template
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
        $__internal_0465abe7c8c1a08b4714c1db88749599973613840dffe5d0c8ac27cd99eae68e = $this->env->getExtension("native_profiler");
        $__internal_0465abe7c8c1a08b4714c1db88749599973613840dffe5d0c8ac27cd99eae68e->enter($__internal_0465abe7c8c1a08b4714c1db88749599973613840dffe5d0c8ac27cd99eae68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0465abe7c8c1a08b4714c1db88749599973613840dffe5d0c8ac27cd99eae68e->leave($__internal_0465abe7c8c1a08b4714c1db88749599973613840dffe5d0c8ac27cd99eae68e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f01d92b622cfca0c02050cfa674f07ea9ec61bed2eed5ee4b274ca4d9d06290 = $this->env->getExtension("native_profiler");
        $__internal_3f01d92b622cfca0c02050cfa674f07ea9ec61bed2eed5ee4b274ca4d9d06290->enter($__internal_3f01d92b622cfca0c02050cfa674f07ea9ec61bed2eed5ee4b274ca4d9d06290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3f01d92b622cfca0c02050cfa674f07ea9ec61bed2eed5ee4b274ca4d9d06290->leave($__internal_3f01d92b622cfca0c02050cfa674f07ea9ec61bed2eed5ee4b274ca4d9d06290_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_461264813a982ee9b94f39c8729c68588d3e926df4b54ad3f7c5ed86ab7dba9c = $this->env->getExtension("native_profiler");
        $__internal_461264813a982ee9b94f39c8729c68588d3e926df4b54ad3f7c5ed86ab7dba9c->enter($__internal_461264813a982ee9b94f39c8729c68588d3e926df4b54ad3f7c5ed86ab7dba9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_461264813a982ee9b94f39c8729c68588d3e926df4b54ad3f7c5ed86ab7dba9c->leave($__internal_461264813a982ee9b94f39c8729c68588d3e926df4b54ad3f7c5ed86ab7dba9c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b65963dce7c1ef8140fc862a3ff9d5a19df03d335c2c3e1984d3e34f2f2f6ba = $this->env->getExtension("native_profiler");
        $__internal_2b65963dce7c1ef8140fc862a3ff9d5a19df03d335c2c3e1984d3e34f2f2f6ba->enter($__internal_2b65963dce7c1ef8140fc862a3ff9d5a19df03d335c2c3e1984d3e34f2f2f6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2b65963dce7c1ef8140fc862a3ff9d5a19df03d335c2c3e1984d3e34f2f2f6ba->leave($__internal_2b65963dce7c1ef8140fc862a3ff9d5a19df03d335c2c3e1984d3e34f2f2f6ba_prof);

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
