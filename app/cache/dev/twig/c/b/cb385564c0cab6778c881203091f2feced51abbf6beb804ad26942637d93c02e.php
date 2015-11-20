<?php

/* default/new.html.twig */
class __TwigTemplate_94e943aeb779a937f225058b36d81c47cfd20c07c91911f320e163227d707737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/new.html.twig", 1);
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
        $__internal_6fdf9e38640a5229923049de8cc94f51b1edcabf5d84a3173fe125db71fc74ea = $this->env->getExtension("native_profiler");
        $__internal_6fdf9e38640a5229923049de8cc94f51b1edcabf5d84a3173fe125db71fc74ea->enter($__internal_6fdf9e38640a5229923049de8cc94f51b1edcabf5d84a3173fe125db71fc74ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fdf9e38640a5229923049de8cc94f51b1edcabf5d84a3173fe125db71fc74ea->leave($__internal_6fdf9e38640a5229923049de8cc94f51b1edcabf5d84a3173fe125db71fc74ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f432a430f35d0692782f651bdbbf60739ffe817b896cfd4a5993e334c6352023 = $this->env->getExtension("native_profiler");
        $__internal_f432a430f35d0692782f651bdbbf60739ffe817b896cfd4a5993e334c6352023->enter($__internal_f432a430f35d0692782f651bdbbf60739ffe817b896cfd4a5993e334c6352023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-sm-4\"></div>

      <div class=\"col-sm-4\">


        <h2 class=\"text-center\">Créer une nouvelle quote</h2><br>

          <div class=\"backgroundblue\">
          <p><form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("create");
        echo "\" method=\"post\" novalidate>
          ";
        // line 15
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
</div>
          <div class=\"row\">
            <div class=\"col-sm-6\">
              </div>
            </div>
          </div>
      </div>

      <div class=\"col-sm-4\"></div>
    </div>



  </div>

";
        
        $__internal_f432a430f35d0692782f651bdbbf60739ffe817b896cfd4a5993e334c6352023->leave($__internal_f432a430f35d0692782f651bdbbf60739ffe817b896cfd4a5993e334c6352023_prof);

    }

    public function getTemplateName()
    {
        return "default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
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
/* */
/* */
/*         <h2 class="text-center">Créer une nouvelle quote</h2><br>*/
/* */
/*           <div class="backgroundblue">*/
/*           <p><form action="{{ path('create') }}" method="post" novalidate>*/
/*           {{ form_row(form.title) }} {{ form_row(form.content) }} {{ form_row(form.author) }} {{ form_row(form.categorie) }} <br> {{ form_widget(form.submit)  }}  {{ form_rest(form)  }} </form></p>*/
/* </div>*/
/*           <div class="row">*/
/*             <div class="col-sm-6">*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
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
