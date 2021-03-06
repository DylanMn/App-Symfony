<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bbbb6cf5b8121d0551445e9f84e3c9c8567548bd6b7bd0b2c1796a68302256bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_920bcc9a23216f00d6de93814405d48a7009a4379a20f572f6d1eb5d7ca18e26 = $this->env->getExtension("native_profiler");
        $__internal_920bcc9a23216f00d6de93814405d48a7009a4379a20f572f6d1eb5d7ca18e26->enter($__internal_920bcc9a23216f00d6de93814405d48a7009a4379a20f572f6d1eb5d7ca18e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_920bcc9a23216f00d6de93814405d48a7009a4379a20f572f6d1eb5d7ca18e26->leave($__internal_920bcc9a23216f00d6de93814405d48a7009a4379a20f572f6d1eb5d7ca18e26_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_db9a718b0d2b51554a880866f7e5bd7da9f55ed1f98c8509a65a821ce6e05f87 = $this->env->getExtension("native_profiler");
        $__internal_db9a718b0d2b51554a880866f7e5bd7da9f55ed1f98c8509a65a821ce6e05f87->enter($__internal_db9a718b0d2b51554a880866f7e5bd7da9f55ed1f98c8509a65a821ce6e05f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_db9a718b0d2b51554a880866f7e5bd7da9f55ed1f98c8509a65a821ce6e05f87->leave($__internal_db9a718b0d2b51554a880866f7e5bd7da9f55ed1f98c8509a65a821ce6e05f87_prof);

    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        $__internal_18918cef9c41be8cf4fc789462eccd54b3d295a9bbe040cef920e55484fe8569 = $this->env->getExtension("native_profiler");
        $__internal_18918cef9c41be8cf4fc789462eccd54b3d295a9bbe040cef920e55484fe8569->enter($__internal_18918cef9c41be8cf4fc789462eccd54b3d295a9bbe040cef920e55484fe8569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"32\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 32 32\" enable-background=\"new 0 0 32 32\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15 2c-1.1 0-2 0.9-2 2v25c0 1.1 0.9 2 2 2s2-0.9 2-2V4C17 2.9 16.1 2 15 2z\"/><path fill=\"#3F3F3F\" d=\"M30.7 8.2l-2.9-2.9C27.6 5.1 27.3 5 27 5h0h0h-9v8h9c0.3 0 0.6-0.1 0.8-0.3l2.9-2.9 C31.1 9.4 31.1 8.6 30.7 8.2z\"/><path fill=\"#3F3F3F\" d=\"M5 8L5 8C4.7 8 4.4 8.1 4.2 8.3l-2.9 2.9c-0.4 0.4-0.4 1.1 0 1.6l2.9 2.9C4.4 15.9 4.7 16 5 16h7V8H5L5 8z\"/><path fill=\"#3F3F3F\" d=\"M24.8 16.2c-0.2-0.2-0.3-0.2-0.5-0.2h0h0H18v6h6.2c0.2 0 0.4-0.1 0.5-0.2l2-2.2c0.3-0.3 0.3-0.9 0-1.2 L24.8 16.2z\"/></g></svg></span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_18918cef9c41be8cf4fc789462eccd54b3d295a9bbe040cef920e55484fe8569->leave($__internal_18918cef9c41be8cf4fc789462eccd54b3d295a9bbe040cef920e55484fe8569_prof);

    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a4da35902dde1193057b2bf7b12eb7f8e5d71a2ac620845434ab04419a0e62d = $this->env->getExtension("native_profiler");
        $__internal_7a4da35902dde1193057b2bf7b12eb7f8e5d71a2ac620845434ab04419a0e62d->enter($__internal_7a4da35902dde1193057b2bf7b12eb7f8e5d71a2ac620845434ab04419a0e62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7a4da35902dde1193057b2bf7b12eb7f8e5d71a2ac620845434ab04419a0e62d->leave($__internal_7a4da35902dde1193057b2bf7b12eb7f8e5d71a2ac620845434ab04419a0e62d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  64 => 13,  53 => 7,  47 => 6,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon"><svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve"><g><path fill="#3F3F3F" d="M15 2c-1.1 0-2 0.9-2 2v25c0 1.1 0.9 2 2 2s2-0.9 2-2V4C17 2.9 16.1 2 15 2z"/><path fill="#3F3F3F" d="M30.7 8.2l-2.9-2.9C27.6 5.1 27.3 5 27 5h0h0h-9v8h9c0.3 0 0.6-0.1 0.8-0.3l2.9-2.9 C31.1 9.4 31.1 8.6 30.7 8.2z"/><path fill="#3F3F3F" d="M5 8L5 8C4.7 8 4.4 8.1 4.2 8.3l-2.9 2.9c-0.4 0.4-0.4 1.1 0 1.6l2.9 2.9C4.4 15.9 4.7 16 5 16h7V8H5L5 8z"/><path fill="#3F3F3F" d="M24.8 16.2c-0.2-0.2-0.3-0.2-0.5-0.2h0h0H18v6h6.2c0.2 0 0.4-0.1 0.5-0.2l2-2.2c0.3-0.3 0.3-0.9 0-1.2 L24.8 16.2z"/></g></svg></span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', {'token': token})) }}*/
/* {% endblock %}*/
/* */
