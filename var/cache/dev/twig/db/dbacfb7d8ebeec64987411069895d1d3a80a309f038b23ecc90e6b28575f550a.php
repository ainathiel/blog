<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8adb51330a0a8646b236371438b4a22f38a50c9cef9796598cf183bf1d570c22 extends Twig_Template
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
        $__internal_5aa8f5ef15a49c3b43d62841b00aa07fc411ea96e4b66c6c69a51adce7fc00a2 = $this->env->getExtension("native_profiler");
        $__internal_5aa8f5ef15a49c3b43d62841b00aa07fc411ea96e4b66c6c69a51adce7fc00a2->enter($__internal_5aa8f5ef15a49c3b43d62841b00aa07fc411ea96e4b66c6c69a51adce7fc00a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5aa8f5ef15a49c3b43d62841b00aa07fc411ea96e4b66c6c69a51adce7fc00a2->leave($__internal_5aa8f5ef15a49c3b43d62841b00aa07fc411ea96e4b66c6c69a51adce7fc00a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2bce9cb05e44296610e31ea63dd65c2939356f021dc4f469fdd195069cfaaf8e = $this->env->getExtension("native_profiler");
        $__internal_2bce9cb05e44296610e31ea63dd65c2939356f021dc4f469fdd195069cfaaf8e->enter($__internal_2bce9cb05e44296610e31ea63dd65c2939356f021dc4f469fdd195069cfaaf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2bce9cb05e44296610e31ea63dd65c2939356f021dc4f469fdd195069cfaaf8e->leave($__internal_2bce9cb05e44296610e31ea63dd65c2939356f021dc4f469fdd195069cfaaf8e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a594c1bf76bb6d12afff9930836f87caf98d6c5740173dc229bb99f8b48ddef9 = $this->env->getExtension("native_profiler");
        $__internal_a594c1bf76bb6d12afff9930836f87caf98d6c5740173dc229bb99f8b48ddef9->enter($__internal_a594c1bf76bb6d12afff9930836f87caf98d6c5740173dc229bb99f8b48ddef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a594c1bf76bb6d12afff9930836f87caf98d6c5740173dc229bb99f8b48ddef9->leave($__internal_a594c1bf76bb6d12afff9930836f87caf98d6c5740173dc229bb99f8b48ddef9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8c2959c975f9426cabd2e34f18897f8eb4bb2de656acc81df485282492d11e05 = $this->env->getExtension("native_profiler");
        $__internal_8c2959c975f9426cabd2e34f18897f8eb4bb2de656acc81df485282492d11e05->enter($__internal_8c2959c975f9426cabd2e34f18897f8eb4bb2de656acc81df485282492d11e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8c2959c975f9426cabd2e34f18897f8eb4bb2de656acc81df485282492d11e05->leave($__internal_8c2959c975f9426cabd2e34f18897f8eb4bb2de656acc81df485282492d11e05_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
