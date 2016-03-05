<?php

/* base.html.twig */
class __TwigTemplate_b2a0cf5524718e2db99ecd328e0f652c949226a69654e2d0626df493dcd5506a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc43d66c6ad7120aa1c28f661a6d6868f424b1d16601d36c156ca8f7f09dba62 = $this->env->getExtension("native_profiler");
        $__internal_cc43d66c6ad7120aa1c28f661a6d6868f424b1d16601d36c156ca8f7f09dba62->enter($__internal_cc43d66c6ad7120aa1c28f661a6d6868f424b1d16601d36c156ca8f7f09dba62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cc43d66c6ad7120aa1c28f661a6d6868f424b1d16601d36c156ca8f7f09dba62->leave($__internal_cc43d66c6ad7120aa1c28f661a6d6868f424b1d16601d36c156ca8f7f09dba62_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_408f3563b0b305f2325d3fd3ae103d6bb0b67a2d36bcde584a01ee8fd947081f = $this->env->getExtension("native_profiler");
        $__internal_408f3563b0b305f2325d3fd3ae103d6bb0b67a2d36bcde584a01ee8fd947081f->enter($__internal_408f3563b0b305f2325d3fd3ae103d6bb0b67a2d36bcde584a01ee8fd947081f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_408f3563b0b305f2325d3fd3ae103d6bb0b67a2d36bcde584a01ee8fd947081f->leave($__internal_408f3563b0b305f2325d3fd3ae103d6bb0b67a2d36bcde584a01ee8fd947081f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_70284a467cc9f8b4cf9ae837d1c888dbe46380a97bbf02f4667a5b01ff48aac6 = $this->env->getExtension("native_profiler");
        $__internal_70284a467cc9f8b4cf9ae837d1c888dbe46380a97bbf02f4667a5b01ff48aac6->enter($__internal_70284a467cc9f8b4cf9ae837d1c888dbe46380a97bbf02f4667a5b01ff48aac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_70284a467cc9f8b4cf9ae837d1c888dbe46380a97bbf02f4667a5b01ff48aac6->leave($__internal_70284a467cc9f8b4cf9ae837d1c888dbe46380a97bbf02f4667a5b01ff48aac6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d11203f3f2513b60e06d630328159d12f0b69afe92d30effef57f46dbf794ca = $this->env->getExtension("native_profiler");
        $__internal_7d11203f3f2513b60e06d630328159d12f0b69afe92d30effef57f46dbf794ca->enter($__internal_7d11203f3f2513b60e06d630328159d12f0b69afe92d30effef57f46dbf794ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7d11203f3f2513b60e06d630328159d12f0b69afe92d30effef57f46dbf794ca->leave($__internal_7d11203f3f2513b60e06d630328159d12f0b69afe92d30effef57f46dbf794ca_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b4c0704929342fc656fc52c128b50f36c918961cfaf451185e8929f55a09c3d4 = $this->env->getExtension("native_profiler");
        $__internal_b4c0704929342fc656fc52c128b50f36c918961cfaf451185e8929f55a09c3d4->enter($__internal_b4c0704929342fc656fc52c128b50f36c918961cfaf451185e8929f55a09c3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b4c0704929342fc656fc52c128b50f36c918961cfaf451185e8929f55a09c3d4->leave($__internal_b4c0704929342fc656fc52c128b50f36c918961cfaf451185e8929f55a09c3d4_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
