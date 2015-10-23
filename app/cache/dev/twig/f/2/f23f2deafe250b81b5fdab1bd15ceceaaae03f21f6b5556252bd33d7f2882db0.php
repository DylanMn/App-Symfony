<?php

/* base.html.twig */
class __TwigTemplate_533118d709339f204fad6616d088a05f112be14d316c0edcbe17cbe797a6a07c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad63190e31d320c246edcec221338a80edb850a3c3800bb18181cef645a4c1f7 = $this->env->getExtension("native_profiler");
        $__internal_ad63190e31d320c246edcec221338a80edb850a3c3800bb18181cef645a4c1f7->enter($__internal_ad63190e31d320c246edcec221338a80edb850a3c3800bb18181cef645a4c1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>



        <div class=\"bs-component\">
                      <nav class=\"navbar navbar-inverse\">
                        <div class=\"container-fluid\">
                          <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-2\">
                              <span class=\"sr-only\">Toggle navigation</span>
                              <span class=\"icon-bar\"></span>
                              <span class=\"icon-bar\"></span>
                              <span class=\"icon-bar\"></span>
                            </button>
                            <a class=\"navbar-brand\" href=\"/\">Quotes</a>
                          </div>

                          <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-2\">
                            <ul class=\"nav navbar-nav\">
                              <li><a href=\"/fresh\">Daily</a></li>
                              <li><a href=\"/best\">Meilleures</a></li>
                              <li><a href=\"/worst\">Pires</a></li>
                              <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Catégories <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                  <li><a href=\"/categorie/Humour\">Humour</a></li>
                                  <li><a href=\"/categorie/Animaux\">Animaux</a></li>
                                  <li><a href=\"/categorie/Argent\">Argent</a></li>
                                  <li><a href=\"/categorie/Enfants\">Enfants</a></li>
                                  <li><a href=\"/categorie/Travail\">Travail</a></li>
                                  <li><a href=\"/categorie/Santé\">Santé</a></li>
                                  <li class=\"divider\"></li>
                                  <li><a href=\"/categorie/Inclassable\">Inclassable</a></li>
                                </ul>
                              </li>
                            </ul>

                            <ul class=\"nav navbar-nav navbar-right\">
                              <li><a href=\"/new\"><i class=\"fa fa-pencil-square-o fa-1x\"></i> Poster une quote</a></li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                    </div>





        <!-- JQUERY -->
        <script src=\"//code.jquery.com/jquery-1.11.3.min.js\"></script>
        <script src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
        <!-- BOOTSTRAP -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cosmo/bootstrap.min.css\">
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
        <!-- CSS  -->
          <link rel=\"stylesheet\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

        <!-- FONTAWESOME -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
        <!-- SOCIAL -->
        <script type=\"text/javascript\">var switchTo5x=true;</script>
<script type=\"text/javascript\" src=\"http://w.sharethis.com/button/buttons.js\"></script>
<script type=\"text/javascript\">stLight.options({publisher: \"6044b5d0-9aa6-4ca5-9938-76baae7906eb\", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>


        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 76
        echo "    </body>
</html>
";
        
        $__internal_ad63190e31d320c246edcec221338a80edb850a3c3800bb18181cef645a4c1f7->leave($__internal_ad63190e31d320c246edcec221338a80edb850a3c3800bb18181cef645a4c1f7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cefd2ef7c0974194e843d1c982e1a93e927bf037597c712b1f25094e4f1a280 = $this->env->getExtension("native_profiler");
        $__internal_3cefd2ef7c0974194e843d1c982e1a93e927bf037597c712b1f25094e4f1a280->enter($__internal_3cefd2ef7c0974194e843d1c982e1a93e927bf037597c712b1f25094e4f1a280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3cefd2ef7c0974194e843d1c982e1a93e927bf037597c712b1f25094e4f1a280->leave($__internal_3cefd2ef7c0974194e843d1c982e1a93e927bf037597c712b1f25094e4f1a280_prof);

    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5e14181b2755c3fc11b3a90bf459f2e8f5a5a3aaf7d6dd6b600f58fdd22620c = $this->env->getExtension("native_profiler");
        $__internal_b5e14181b2755c3fc11b3a90bf459f2e8f5a5a3aaf7d6dd6b600f58fdd22620c->enter($__internal_b5e14181b2755c3fc11b3a90bf459f2e8f5a5a3aaf7d6dd6b600f58fdd22620c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b5e14181b2755c3fc11b3a90bf459f2e8f5a5a3aaf7d6dd6b600f58fdd22620c->leave($__internal_b5e14181b2755c3fc11b3a90bf459f2e8f5a5a3aaf7d6dd6b600f58fdd22620c_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_81ec962d42b0e9caf56f21dee67038487bf6285b2ca9784ef25398278b928121 = $this->env->getExtension("native_profiler");
        $__internal_81ec962d42b0e9caf56f21dee67038487bf6285b2ca9784ef25398278b928121->enter($__internal_81ec962d42b0e9caf56f21dee67038487bf6285b2ca9784ef25398278b928121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_81ec962d42b0e9caf56f21dee67038487bf6285b2ca9784ef25398278b928121->leave($__internal_81ec962d42b0e9caf56f21dee67038487bf6285b2ca9784ef25398278b928121_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 75,  135 => 74,  123 => 5,  114 => 76,  111 => 75,  109 => 74,  103 => 71,  90 => 61,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/* */
/* */
/*         <div class="bs-component">*/
/*                       <nav class="navbar navbar-inverse">*/
/*                         <div class="container-fluid">*/
/*                           <div class="navbar-header">*/
/*                             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">*/
/*                               <span class="sr-only">Toggle navigation</span>*/
/*                               <span class="icon-bar"></span>*/
/*                               <span class="icon-bar"></span>*/
/*                               <span class="icon-bar"></span>*/
/*                             </button>*/
/*                             <a class="navbar-brand" href="/">Quotes</a>*/
/*                           </div>*/
/* */
/*                           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">*/
/*                             <ul class="nav navbar-nav">*/
/*                               <li><a href="/fresh">Daily</a></li>*/
/*                               <li><a href="/best">Meilleures</a></li>*/
/*                               <li><a href="/worst">Pires</a></li>*/
/*                               <li class="dropdown">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Catégories <span class="caret"></span></a>*/
/*                                 <ul class="dropdown-menu" role="menu">*/
/*                                   <li><a href="/categorie/Humour">Humour</a></li>*/
/*                                   <li><a href="/categorie/Animaux">Animaux</a></li>*/
/*                                   <li><a href="/categorie/Argent">Argent</a></li>*/
/*                                   <li><a href="/categorie/Enfants">Enfants</a></li>*/
/*                                   <li><a href="/categorie/Travail">Travail</a></li>*/
/*                                   <li><a href="/categorie/Santé">Santé</a></li>*/
/*                                   <li class="divider"></li>*/
/*                                   <li><a href="/categorie/Inclassable">Inclassable</a></li>*/
/*                                 </ul>*/
/*                               </li>*/
/*                             </ul>*/
/* */
/*                             <ul class="nav navbar-nav navbar-right">*/
/*                               <li><a href="/new"><i class="fa fa-pencil-square-o fa-1x"></i> Poster une quote</a></li>*/
/*                             </ul>*/
/*                           </div>*/
/*                         </div>*/
/*                       </nav>*/
/*                     </div>*/
/* */
/* */
/* */
/* */
/* */
/*         <!-- JQUERY -->*/
/*         <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>*/
/*         <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>*/
/*         <!-- BOOTSTRAP -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cosmo/bootstrap.min.css">*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/*         <!-- CSS  -->*/
/*           <link rel="stylesheet" href="{{ asset("css/style.css") }}">*/
/* */
/*         <!-- FONTAWESOME -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*         <!-- SOCIAL -->*/
/*         <script type="text/javascript">var switchTo5x=true;</script>*/
/* <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>*/
/* <script type="text/javascript">stLight.options({publisher: "6044b5d0-9aa6-4ca5-9938-76baae7906eb", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>*/
/* */
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
