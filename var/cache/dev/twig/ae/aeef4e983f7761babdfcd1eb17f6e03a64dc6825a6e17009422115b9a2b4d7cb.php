<?php

/* user/new.html.twig */
class __TwigTemplate_84c2a76c9da94fdab9b1d448a231d38a862333f8ad56440447529754b95b817c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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
        $__internal_748efc7b8b57ad61ce9aec0b140f25a73f54eb9cdcc1bca1081e3a2798505a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_748efc7b8b57ad61ce9aec0b140f25a73f54eb9cdcc1bca1081e3a2798505a25->enter($__internal_748efc7b8b57ad61ce9aec0b140f25a73f54eb9cdcc1bca1081e3a2798505a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_ad246ceaedf13e26b4a040ebcdab55df2dceb8a66d7c8c0ea863014c04bbb277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad246ceaedf13e26b4a040ebcdab55df2dceb8a66d7c8c0ea863014c04bbb277->enter($__internal_ad246ceaedf13e26b4a040ebcdab55df2dceb8a66d7c8c0ea863014c04bbb277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_748efc7b8b57ad61ce9aec0b140f25a73f54eb9cdcc1bca1081e3a2798505a25->leave($__internal_748efc7b8b57ad61ce9aec0b140f25a73f54eb9cdcc1bca1081e3a2798505a25_prof);

        
        $__internal_ad246ceaedf13e26b4a040ebcdab55df2dceb8a66d7c8c0ea863014c04bbb277->leave($__internal_ad246ceaedf13e26b4a040ebcdab55df2dceb8a66d7c8c0ea863014c04bbb277_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c76e04fdf971a80005a8d24b9d435c4005525c80be922002da1ff7a432727e92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c76e04fdf971a80005a8d24b9d435c4005525c80be922002da1ff7a432727e92->enter($__internal_c76e04fdf971a80005a8d24b9d435c4005525c80be922002da1ff7a432727e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a610e91b85ae35d7dd9de9b2bdf5f51a34a84d63909d186b41e66b5acea5a718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a610e91b85ae35d7dd9de9b2bdf5f51a34a84d63909d186b41e66b5acea5a718->enter($__internal_a610e91b85ae35d7dd9de9b2bdf5f51a34a84d63909d186b41e66b5acea5a718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a610e91b85ae35d7dd9de9b2bdf5f51a34a84d63909d186b41e66b5acea5a718->leave($__internal_a610e91b85ae35d7dd9de9b2bdf5f51a34a84d63909d186b41e66b5acea5a718_prof);

        
        $__internal_c76e04fdf971a80005a8d24b9d435c4005525c80be922002da1ff7a432727e92->leave($__internal_c76e04fdf971a80005a8d24b9d435c4005525c80be922002da1ff7a432727e92_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "user/new.html.twig", "/Applications/MAMP/htdocs/crud3/app/Resources/views/user/new.html.twig");
    }
}
