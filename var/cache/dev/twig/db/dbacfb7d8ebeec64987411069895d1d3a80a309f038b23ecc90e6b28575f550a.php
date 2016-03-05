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
        $__internal_e0213b384fca716d4cb5faddffdf828742b3c8733776229ba4e0613fbc20581e = $this->env->getExtension("native_profiler");
        $__internal_e0213b384fca716d4cb5faddffdf828742b3c8733776229ba4e0613fbc20581e->enter($__internal_e0213b384fca716d4cb5faddffdf828742b3c8733776229ba4e0613fbc20581e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0213b384fca716d4cb5faddffdf828742b3c8733776229ba4e0613fbc20581e->leave($__internal_e0213b384fca716d4cb5faddffdf828742b3c8733776229ba4e0613fbc20581e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac05edc075e39c903e74d3d2d70322f858182294a48dffd06d031bdd067af421 = $this->env->getExtension("native_profiler");
        $__internal_ac05edc075e39c903e74d3d2d70322f858182294a48dffd06d031bdd067af421->enter($__internal_ac05edc075e39c903e74d3d2d70322f858182294a48dffd06d031bdd067af421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ac05edc075e39c903e74d3d2d70322f858182294a48dffd06d031bdd067af421->leave($__internal_ac05edc075e39c903e74d3d2d70322f858182294a48dffd06d031bdd067af421_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7e7a1dd3aec781ecef3a9c8f8d6c950602f76a6f635d3488f7243055c867e5c5 = $this->env->getExtension("native_profiler");
        $__internal_7e7a1dd3aec781ecef3a9c8f8d6c950602f76a6f635d3488f7243055c867e5c5->enter($__internal_7e7a1dd3aec781ecef3a9c8f8d6c950602f76a6f635d3488f7243055c867e5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7e7a1dd3aec781ecef3a9c8f8d6c950602f76a6f635d3488f7243055c867e5c5->leave($__internal_7e7a1dd3aec781ecef3a9c8f8d6c950602f76a6f635d3488f7243055c867e5c5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_268ae8f810d79bde0d9a1823ae1325b76a3f4ab7fb02a7bd4ebe92321ba6a2df = $this->env->getExtension("native_profiler");
        $__internal_268ae8f810d79bde0d9a1823ae1325b76a3f4ab7fb02a7bd4ebe92321ba6a2df->enter($__internal_268ae8f810d79bde0d9a1823ae1325b76a3f4ab7fb02a7bd4ebe92321ba6a2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_268ae8f810d79bde0d9a1823ae1325b76a3f4ab7fb02a7bd4ebe92321ba6a2df->leave($__internal_268ae8f810d79bde0d9a1823ae1325b76a3f4ab7fb02a7bd4ebe92321ba6a2df_prof);

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
