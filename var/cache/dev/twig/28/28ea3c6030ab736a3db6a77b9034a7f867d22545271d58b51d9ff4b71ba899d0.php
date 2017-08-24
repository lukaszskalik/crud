<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_b2c423cb681f50696787f603d22e47d550c0816f30f04c27a3251a289c2f46f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e077d13b50ddd01aad999707a37e95b3b9269b0bb24541028aa6040afcd5656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e077d13b50ddd01aad999707a37e95b3b9269b0bb24541028aa6040afcd5656->enter($__internal_6e077d13b50ddd01aad999707a37e95b3b9269b0bb24541028aa6040afcd5656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_125cc04946998135ed14de0213c67120ec52966f0bdd582e1fbbe7f09ada6c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_125cc04946998135ed14de0213c67120ec52966f0bdd582e1fbbe7f09ada6c5d->enter($__internal_125cc04946998135ed14de0213c67120ec52966f0bdd582e1fbbe7f09ada6c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_6e077d13b50ddd01aad999707a37e95b3b9269b0bb24541028aa6040afcd5656->leave($__internal_6e077d13b50ddd01aad999707a37e95b3b9269b0bb24541028aa6040afcd5656_prof);

        
        $__internal_125cc04946998135ed14de0213c67120ec52966f0bdd582e1fbbe7f09ada6c5d->leave($__internal_125cc04946998135ed14de0213c67120ec52966f0bdd582e1fbbe7f09ada6c5d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Applications/MAMP/htdocs/crud3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
