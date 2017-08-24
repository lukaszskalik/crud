<?php

/* base.html.twig */
class __TwigTemplate_42a4a1dc6b6ff71d8d79cf6382ba36fc18b265bfb50fe94e70c9087c6dab2dc6 extends Twig_Template
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
        $__internal_da6f0f14db6a6bd4e3d51917854c99f315ce50bdb0798a7eb4cea098e34ea9b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6f0f14db6a6bd4e3d51917854c99f315ce50bdb0798a7eb4cea098e34ea9b3->enter($__internal_da6f0f14db6a6bd4e3d51917854c99f315ce50bdb0798a7eb4cea098e34ea9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0bd462aebae271a176f99bd25f31fcc35037ad99962b694f6372a5324a9bea3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd462aebae271a176f99bd25f31fcc35037ad99962b694f6372a5324a9bea3c->enter($__internal_0bd462aebae271a176f99bd25f31fcc35037ad99962b694f6372a5324a9bea3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_da6f0f14db6a6bd4e3d51917854c99f315ce50bdb0798a7eb4cea098e34ea9b3->leave($__internal_da6f0f14db6a6bd4e3d51917854c99f315ce50bdb0798a7eb4cea098e34ea9b3_prof);

        
        $__internal_0bd462aebae271a176f99bd25f31fcc35037ad99962b694f6372a5324a9bea3c->leave($__internal_0bd462aebae271a176f99bd25f31fcc35037ad99962b694f6372a5324a9bea3c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_549e67fa1cc0dcd5b01695cde3cce1c3dfef923a4bda5b2fd9ea99f6e44867d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_549e67fa1cc0dcd5b01695cde3cce1c3dfef923a4bda5b2fd9ea99f6e44867d7->enter($__internal_549e67fa1cc0dcd5b01695cde3cce1c3dfef923a4bda5b2fd9ea99f6e44867d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a2f7523f1cbc3b704aee80f4362ff9b7ec0152798effa8cf60fb3841d252fa07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f7523f1cbc3b704aee80f4362ff9b7ec0152798effa8cf60fb3841d252fa07->enter($__internal_a2f7523f1cbc3b704aee80f4362ff9b7ec0152798effa8cf60fb3841d252fa07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a2f7523f1cbc3b704aee80f4362ff9b7ec0152798effa8cf60fb3841d252fa07->leave($__internal_a2f7523f1cbc3b704aee80f4362ff9b7ec0152798effa8cf60fb3841d252fa07_prof);

        
        $__internal_549e67fa1cc0dcd5b01695cde3cce1c3dfef923a4bda5b2fd9ea99f6e44867d7->leave($__internal_549e67fa1cc0dcd5b01695cde3cce1c3dfef923a4bda5b2fd9ea99f6e44867d7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_607effa09254454f74c3a94b20b100144fce2167c0e42b08026bbc777faa602c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_607effa09254454f74c3a94b20b100144fce2167c0e42b08026bbc777faa602c->enter($__internal_607effa09254454f74c3a94b20b100144fce2167c0e42b08026bbc777faa602c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6349b8ac925ba3f3f0c4bb7023dfc2d489cf8c3664e88e5c3b8c368e1302d3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6349b8ac925ba3f3f0c4bb7023dfc2d489cf8c3664e88e5c3b8c368e1302d3b8->enter($__internal_6349b8ac925ba3f3f0c4bb7023dfc2d489cf8c3664e88e5c3b8c368e1302d3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6349b8ac925ba3f3f0c4bb7023dfc2d489cf8c3664e88e5c3b8c368e1302d3b8->leave($__internal_6349b8ac925ba3f3f0c4bb7023dfc2d489cf8c3664e88e5c3b8c368e1302d3b8_prof);

        
        $__internal_607effa09254454f74c3a94b20b100144fce2167c0e42b08026bbc777faa602c->leave($__internal_607effa09254454f74c3a94b20b100144fce2167c0e42b08026bbc777faa602c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e00f978037d48c9c55e71fae1d7816f9dbb8dd40529d77b261c986ecd37de3e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00f978037d48c9c55e71fae1d7816f9dbb8dd40529d77b261c986ecd37de3e3->enter($__internal_e00f978037d48c9c55e71fae1d7816f9dbb8dd40529d77b261c986ecd37de3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d482895861b30ec625fc5a734ac71fe7870c46876e11046dd3318e7645f2ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d482895861b30ec625fc5a734ac71fe7870c46876e11046dd3318e7645f2ab2->enter($__internal_3d482895861b30ec625fc5a734ac71fe7870c46876e11046dd3318e7645f2ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3d482895861b30ec625fc5a734ac71fe7870c46876e11046dd3318e7645f2ab2->leave($__internal_3d482895861b30ec625fc5a734ac71fe7870c46876e11046dd3318e7645f2ab2_prof);

        
        $__internal_e00f978037d48c9c55e71fae1d7816f9dbb8dd40529d77b261c986ecd37de3e3->leave($__internal_e00f978037d48c9c55e71fae1d7816f9dbb8dd40529d77b261c986ecd37de3e3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c309f40b81f9338463e66c6a920646b1845c35102f6856afbdc70b82f33c615e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c309f40b81f9338463e66c6a920646b1845c35102f6856afbdc70b82f33c615e->enter($__internal_c309f40b81f9338463e66c6a920646b1845c35102f6856afbdc70b82f33c615e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_154ccd95398faae7cec3854baf1c48c68c07bf8062b6835bab56fab5ddfa465c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154ccd95398faae7cec3854baf1c48c68c07bf8062b6835bab56fab5ddfa465c->enter($__internal_154ccd95398faae7cec3854baf1c48c68c07bf8062b6835bab56fab5ddfa465c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_154ccd95398faae7cec3854baf1c48c68c07bf8062b6835bab56fab5ddfa465c->leave($__internal_154ccd95398faae7cec3854baf1c48c68c07bf8062b6835bab56fab5ddfa465c_prof);

        
        $__internal_c309f40b81f9338463e66c6a920646b1845c35102f6856afbdc70b82f33c615e->leave($__internal_c309f40b81f9338463e66c6a920646b1845c35102f6856afbdc70b82f33c615e_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/crud3/app/Resources/views/base.html.twig");
    }
}
