<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fc8d50b4ddaf604f422b05df6bd2514d63ecc83ac9533c9dcebb31515095dd1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ad73c71ea3c3b1218d6dd57463012dbe7905ebb8f3e2568cc0967fea2a6c325f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad73c71ea3c3b1218d6dd57463012dbe7905ebb8f3e2568cc0967fea2a6c325f->enter($__internal_ad73c71ea3c3b1218d6dd57463012dbe7905ebb8f3e2568cc0967fea2a6c325f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2112dfdb0efceba8c12f7037296741f9a5934c2f40c9116bf169fc875ab2f222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2112dfdb0efceba8c12f7037296741f9a5934c2f40c9116bf169fc875ab2f222->enter($__internal_2112dfdb0efceba8c12f7037296741f9a5934c2f40c9116bf169fc875ab2f222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad73c71ea3c3b1218d6dd57463012dbe7905ebb8f3e2568cc0967fea2a6c325f->leave($__internal_ad73c71ea3c3b1218d6dd57463012dbe7905ebb8f3e2568cc0967fea2a6c325f_prof);

        
        $__internal_2112dfdb0efceba8c12f7037296741f9a5934c2f40c9116bf169fc875ab2f222->leave($__internal_2112dfdb0efceba8c12f7037296741f9a5934c2f40c9116bf169fc875ab2f222_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c4f3763ee9fb1515e51c8b350b6d8fea1f8e70b2cb8b7cea6d0b43ac6e5d7ab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4f3763ee9fb1515e51c8b350b6d8fea1f8e70b2cb8b7cea6d0b43ac6e5d7ab5->enter($__internal_c4f3763ee9fb1515e51c8b350b6d8fea1f8e70b2cb8b7cea6d0b43ac6e5d7ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be0bb76c7fe24feda7675494236bc6377d6bd9287a80304300fbd29081c7aed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0bb76c7fe24feda7675494236bc6377d6bd9287a80304300fbd29081c7aed6->enter($__internal_be0bb76c7fe24feda7675494236bc6377d6bd9287a80304300fbd29081c7aed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_be0bb76c7fe24feda7675494236bc6377d6bd9287a80304300fbd29081c7aed6->leave($__internal_be0bb76c7fe24feda7675494236bc6377d6bd9287a80304300fbd29081c7aed6_prof);

        
        $__internal_c4f3763ee9fb1515e51c8b350b6d8fea1f8e70b2cb8b7cea6d0b43ac6e5d7ab5->leave($__internal_c4f3763ee9fb1515e51c8b350b6d8fea1f8e70b2cb8b7cea6d0b43ac6e5d7ab5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_150eaf8ca228859bb171ef21a18a5e391774438a99b66c11169f52d9dead5ea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_150eaf8ca228859bb171ef21a18a5e391774438a99b66c11169f52d9dead5ea8->enter($__internal_150eaf8ca228859bb171ef21a18a5e391774438a99b66c11169f52d9dead5ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4406ce9bba0af97d52c9dda2fb34baa76a1e31db2c016e29a19bf328ba17c883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4406ce9bba0af97d52c9dda2fb34baa76a1e31db2c016e29a19bf328ba17c883->enter($__internal_4406ce9bba0af97d52c9dda2fb34baa76a1e31db2c016e29a19bf328ba17c883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4406ce9bba0af97d52c9dda2fb34baa76a1e31db2c016e29a19bf328ba17c883->leave($__internal_4406ce9bba0af97d52c9dda2fb34baa76a1e31db2c016e29a19bf328ba17c883_prof);

        
        $__internal_150eaf8ca228859bb171ef21a18a5e391774438a99b66c11169f52d9dead5ea8->leave($__internal_150eaf8ca228859bb171ef21a18a5e391774438a99b66c11169f52d9dead5ea8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ae16afc0cce1405f988e4c45a116f85293206c27bcd9913cc4d635baa459b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae16afc0cce1405f988e4c45a116f85293206c27bcd9913cc4d635baa459b14->enter($__internal_6ae16afc0cce1405f988e4c45a116f85293206c27bcd9913cc4d635baa459b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7e3c9673f3978bba130dfa858c2acf801fbead6a938f18a2bafae33607ab783a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e3c9673f3978bba130dfa858c2acf801fbead6a938f18a2bafae33607ab783a->enter($__internal_7e3c9673f3978bba130dfa858c2acf801fbead6a938f18a2bafae33607ab783a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7e3c9673f3978bba130dfa858c2acf801fbead6a938f18a2bafae33607ab783a->leave($__internal_7e3c9673f3978bba130dfa858c2acf801fbead6a938f18a2bafae33607ab783a_prof);

        
        $__internal_6ae16afc0cce1405f988e4c45a116f85293206c27bcd9913cc4d635baa459b14->leave($__internal_6ae16afc0cce1405f988e4c45a116f85293206c27bcd9913cc4d635baa459b14_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/crud3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
