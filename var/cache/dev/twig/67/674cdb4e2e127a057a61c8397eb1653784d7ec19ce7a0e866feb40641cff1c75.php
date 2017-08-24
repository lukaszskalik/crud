<?php

/* user/edit.html.twig */
class __TwigTemplate_6e83ee46c66f0c29302b3e05ca4399810b36536b89537453dc9839080d362846 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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
        $__internal_e68c1fa71dd80e60b53a26ea2436beb060f9276be7be54904b875d5f962225d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e68c1fa71dd80e60b53a26ea2436beb060f9276be7be54904b875d5f962225d8->enter($__internal_e68c1fa71dd80e60b53a26ea2436beb060f9276be7be54904b875d5f962225d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_3f8cb2ed41070bf92eec9abb86e9748111b6c1cf930d19df777bedb4be9bda0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8cb2ed41070bf92eec9abb86e9748111b6c1cf930d19df777bedb4be9bda0d->enter($__internal_3f8cb2ed41070bf92eec9abb86e9748111b6c1cf930d19df777bedb4be9bda0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e68c1fa71dd80e60b53a26ea2436beb060f9276be7be54904b875d5f962225d8->leave($__internal_e68c1fa71dd80e60b53a26ea2436beb060f9276be7be54904b875d5f962225d8_prof);

        
        $__internal_3f8cb2ed41070bf92eec9abb86e9748111b6c1cf930d19df777bedb4be9bda0d->leave($__internal_3f8cb2ed41070bf92eec9abb86e9748111b6c1cf930d19df777bedb4be9bda0d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_92d11b55c163158eeae1f50faae533a1fad2cec0982f8bdf528df9d2aa99500e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92d11b55c163158eeae1f50faae533a1fad2cec0982f8bdf528df9d2aa99500e->enter($__internal_92d11b55c163158eeae1f50faae533a1fad2cec0982f8bdf528df9d2aa99500e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_17d9cfd71a06603dbfdb9105f1e1d46a2eb940ead6925b080827ccc939f8fcba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d9cfd71a06603dbfdb9105f1e1d46a2eb940ead6925b080827ccc939f8fcba->enter($__internal_17d9cfd71a06603dbfdb9105f1e1d46a2eb940ead6925b080827ccc939f8fcba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_17d9cfd71a06603dbfdb9105f1e1d46a2eb940ead6925b080827ccc939f8fcba->leave($__internal_17d9cfd71a06603dbfdb9105f1e1d46a2eb940ead6925b080827ccc939f8fcba_prof);

        
        $__internal_92d11b55c163158eeae1f50faae533a1fad2cec0982f8bdf528df9d2aa99500e->leave($__internal_92d11b55c163158eeae1f50faae533a1fad2cec0982f8bdf528df9d2aa99500e_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "user/edit.html.twig", "/Applications/MAMP/htdocs/crud3/app/Resources/views/user/edit.html.twig");
    }
}
