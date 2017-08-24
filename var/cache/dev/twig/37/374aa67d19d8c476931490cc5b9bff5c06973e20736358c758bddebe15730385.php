<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26ccac28e93129ff9e6e9e9adb3ed8294de69de07b64920873d38af5a8edd929 extends Twig_Template
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
        $__internal_86e7402552e840403fccd28bd6fe0f2694a46d46a80d62c7aa1f864fea84a445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86e7402552e840403fccd28bd6fe0f2694a46d46a80d62c7aa1f864fea84a445->enter($__internal_86e7402552e840403fccd28bd6fe0f2694a46d46a80d62c7aa1f864fea84a445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_24aadaefc5218e10f2b7589049754c282e89135f0e22412e28a971f571dca40e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24aadaefc5218e10f2b7589049754c282e89135f0e22412e28a971f571dca40e->enter($__internal_24aadaefc5218e10f2b7589049754c282e89135f0e22412e28a971f571dca40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86e7402552e840403fccd28bd6fe0f2694a46d46a80d62c7aa1f864fea84a445->leave($__internal_86e7402552e840403fccd28bd6fe0f2694a46d46a80d62c7aa1f864fea84a445_prof);

        
        $__internal_24aadaefc5218e10f2b7589049754c282e89135f0e22412e28a971f571dca40e->leave($__internal_24aadaefc5218e10f2b7589049754c282e89135f0e22412e28a971f571dca40e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cbbd064f557c2ed1dea4ab3e1c97fb88b5b26b9c2f4a0a1d9cf455bb47ee745f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbbd064f557c2ed1dea4ab3e1c97fb88b5b26b9c2f4a0a1d9cf455bb47ee745f->enter($__internal_cbbd064f557c2ed1dea4ab3e1c97fb88b5b26b9c2f4a0a1d9cf455bb47ee745f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a020bac66f3e874f897b75c848b61b7377d1dff9fb84f0e4a2d213d9818f7657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a020bac66f3e874f897b75c848b61b7377d1dff9fb84f0e4a2d213d9818f7657->enter($__internal_a020bac66f3e874f897b75c848b61b7377d1dff9fb84f0e4a2d213d9818f7657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a020bac66f3e874f897b75c848b61b7377d1dff9fb84f0e4a2d213d9818f7657->leave($__internal_a020bac66f3e874f897b75c848b61b7377d1dff9fb84f0e4a2d213d9818f7657_prof);

        
        $__internal_cbbd064f557c2ed1dea4ab3e1c97fb88b5b26b9c2f4a0a1d9cf455bb47ee745f->leave($__internal_cbbd064f557c2ed1dea4ab3e1c97fb88b5b26b9c2f4a0a1d9cf455bb47ee745f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_74d948fa5ba229f109b08dae95bd59844870fdaabe5696bfde9d436692067bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d948fa5ba229f109b08dae95bd59844870fdaabe5696bfde9d436692067bc4->enter($__internal_74d948fa5ba229f109b08dae95bd59844870fdaabe5696bfde9d436692067bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b0a22eb8d553dedaf0971fc8d372f4ae8231528c9c8c12ab627b6a4b784bdd2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a22eb8d553dedaf0971fc8d372f4ae8231528c9c8c12ab627b6a4b784bdd2c->enter($__internal_b0a22eb8d553dedaf0971fc8d372f4ae8231528c9c8c12ab627b6a4b784bdd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b0a22eb8d553dedaf0971fc8d372f4ae8231528c9c8c12ab627b6a4b784bdd2c->leave($__internal_b0a22eb8d553dedaf0971fc8d372f4ae8231528c9c8c12ab627b6a4b784bdd2c_prof);

        
        $__internal_74d948fa5ba229f109b08dae95bd59844870fdaabe5696bfde9d436692067bc4->leave($__internal_74d948fa5ba229f109b08dae95bd59844870fdaabe5696bfde9d436692067bc4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6f131236cb8fb03c8a93b971247b1d1a4fee8284d93da138886198ec50633b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f131236cb8fb03c8a93b971247b1d1a4fee8284d93da138886198ec50633b9->enter($__internal_e6f131236cb8fb03c8a93b971247b1d1a4fee8284d93da138886198ec50633b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9cb8704f33ac3eceb84b8091722bef1c852337cbb510d11676ddc1a03cc0727b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb8704f33ac3eceb84b8091722bef1c852337cbb510d11676ddc1a03cc0727b->enter($__internal_9cb8704f33ac3eceb84b8091722bef1c852337cbb510d11676ddc1a03cc0727b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9cb8704f33ac3eceb84b8091722bef1c852337cbb510d11676ddc1a03cc0727b->leave($__internal_9cb8704f33ac3eceb84b8091722bef1c852337cbb510d11676ddc1a03cc0727b_prof);

        
        $__internal_e6f131236cb8fb03c8a93b971247b1d1a4fee8284d93da138886198ec50633b9->leave($__internal_e6f131236cb8fb03c8a93b971247b1d1a4fee8284d93da138886198ec50633b9_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/crud3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
