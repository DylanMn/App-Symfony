<?php

/* base.html.twig */
class __TwigTemplate_87785e21ae589cd7a6bbe13735a1287c374744c785d4e079b9bf1ad7af047ce3 extends Twig_Template
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
        $__internal_fc64056381cfe3875cf1148b74d1a8baf8d82b0fb958dddf01ab7fb33fd8a72b = $this->env->getExtension("native_profiler");
        $__internal_fc64056381cfe3875cf1148b74d1a8baf8d82b0fb958dddf01ab7fb33fd8a72b->enter($__internal_fc64056381cfe3875cf1148b74d1a8baf8d82b0fb958dddf01ab7fb33fd8a72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_fc64056381cfe3875cf1148b74d1a8baf8d82b0fb958dddf01ab7fb33fd8a72b->leave($__internal_fc64056381cfe3875cf1148b74d1a8baf8d82b0fb958dddf01ab7fb33fd8a72b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_386ba7834123e16e10b4da02b6643e1ade972f21cf61b91933914da84fbf7378 = $this->env->getExtension("native_profiler");
        $__internal_386ba7834123e16e10b4da02b6643e1ade972f21cf61b91933914da84fbf7378->enter($__internal_386ba7834123e16e10b4da02b6643e1ade972f21cf61b91933914da84fbf7378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_386ba7834123e16e10b4da02b6643e1ade972f21cf61b91933914da84fbf7378->leave($__internal_386ba7834123e16e10b4da02b6643e1ade972f21cf61b91933914da84fbf7378_prof);

    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        $__internal_39c8b95172853b4e52ce0eabd5a0d36aaf8f17210ac9f02c35a28737b4777a45 = $this->env->getExtension("native_profiler");
        $__internal_39c8b95172853b4e52ce0eabd5a0d36aaf8f17210ac9f02c35a28737b4777a45->enter($__internal_39c8b95172853b4e52ce0eabd5a0d36aaf8f17210ac9f02c35a28737b4777a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_39c8b95172853b4e52ce0eabd5a0d36aaf8f17210ac9f02c35a28737b4777a45->leave($__internal_39c8b95172853b4e52ce0eabd5a0d36aaf8f17210ac9f02c35a28737b4777a45_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_38550dca39578edca3d3e7cc39f1cb56203a9da5bec0c874cc762f3377b2b536 = $this->env->getExtension("native_profiler");
        $__internal_38550dca39578edca3d3e7cc39f1cb56203a9da5bec0c874cc762f3377b2b536->enter($__internal_38550dca39578edca3d3e7cc39f1cb56203a9da5bec0c874cc762f3377b2b536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_38550dca39578edca3d3e7cc39f1cb56203a9da5bec0c874cc762f3377b2b536->leave($__internal_38550dca39578edca3d3e7cc39f1cb56203a9da5bec0c874cc762f3377b2b536_prof);

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
