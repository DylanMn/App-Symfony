<?php

/* default/editQuote.html.twig */
class __TwigTemplate_e3fcafde36e66e50e2ce44a7dcda6a14aaabb21ac364aa2608d1df3277045eb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/editQuote.html.twig", 1);
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
        $__internal_f81d1bc51d5bc31b4884b399b0b2f5c75658d211d5c14c0210c24c926e927463 = $this->env->getExtension("native_profiler");
        $__internal_f81d1bc51d5bc31b4884b399b0b2f5c75658d211d5c14c0210c24c926e927463->enter($__internal_f81d1bc51d5bc31b4884b399b0b2f5c75658d211d5c14c0210c24c926e927463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/editQuote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f81d1bc51d5bc31b4884b399b0b2f5c75658d211d5c14c0210c24c926e927463->leave($__internal_f81d1bc51d5bc31b4884b399b0b2f5c75658d211d5c14c0210c24c926e927463_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbde10bca995216d0df07f71bc154a127cf795a46a5a4f737eee02dcfd736dc2 = $this->env->getExtension("native_profiler");
        $__internal_bbde10bca995216d0df07f71bc154a127cf795a46a5a4f737eee02dcfd736dc2->enter($__internal_bbde10bca995216d0df07f71bc154a127cf795a46a5a4f737eee02dcfd736dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Editer la quote</h1>
​
<p><form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_quote", array("id" => $this->getAttribute((isset($context["quotes"]) ? $context["quotes"] : $this->getContext($context, "quotes")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" novalidate>
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'row');
        echo " <br> ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " </form></p>
</form>

​
";
        
        $__internal_bbde10bca995216d0df07f71bc154a127cf795a46a5a4f737eee02dcfd736dc2->leave($__internal_bbde10bca995216d0df07f71bc154a127cf795a46a5a4f737eee02dcfd736dc2_prof);

    }

    public function getTemplateName()
    {
        return "default/editQuote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <h1>Editer la quote</h1>*/
/* ​*/
/* <p><form action="{{ path('edit_quote',{id:quotes.id}) }}" method="post" novalidate>*/
/* {{ form_row(form.title) }} {{ form_row(form.content) }} {{ form_row(form.author) }} {{ form_row(form.categorie) }} <br> {{ form_widget(form.submit)  }}  {{ form_rest(form)  }} </form></p>*/
/* </form>*/
/* */
/* ​*/
/* {% endblock %}*/
/* */
