<?php

/* user/show.html.twig */
class __TwigTemplate_d545a1eebb79279002cf3950e4ecb56dc375acfc1bae8781f147293d03374984 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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
        $__internal_9c1500701928486fe547b2ed497a3973e0a57c50aed44e11cd2aa13d0a2e42fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c1500701928486fe547b2ed497a3973e0a57c50aed44e11cd2aa13d0a2e42fb->enter($__internal_9c1500701928486fe547b2ed497a3973e0a57c50aed44e11cd2aa13d0a2e42fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_94f526e0fa9c125f8c128918382f1180054953f6217f69f5040d6b4c4fee11bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f526e0fa9c125f8c128918382f1180054953f6217f69f5040d6b4c4fee11bc->enter($__internal_94f526e0fa9c125f8c128918382f1180054953f6217f69f5040d6b4c4fee11bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c1500701928486fe547b2ed497a3973e0a57c50aed44e11cd2aa13d0a2e42fb->leave($__internal_9c1500701928486fe547b2ed497a3973e0a57c50aed44e11cd2aa13d0a2e42fb_prof);

        
        $__internal_94f526e0fa9c125f8c128918382f1180054953f6217f69f5040d6b4c4fee11bc->leave($__internal_94f526e0fa9c125f8c128918382f1180054953f6217f69f5040d6b4c4fee11bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d06d5f19d2e7e6e3a19e4da9c68a71c0e59914352473c9cc2f36d0ef837fd64b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d06d5f19d2e7e6e3a19e4da9c68a71c0e59914352473c9cc2f36d0ef837fd64b->enter($__internal_d06d5f19d2e7e6e3a19e4da9c68a71c0e59914352473c9cc2f36d0ef837fd64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62271c00ef6592da8a14b442425971a77010b713c0e8fa5a6badf64ecfe8a41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62271c00ef6592da8a14b442425971a77010b713c0e8fa5a6badf64ecfe8a41e->enter($__internal_62271c00ef6592da8a14b442425971a77010b713c0e8fa5a6badf64ecfe8a41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_62271c00ef6592da8a14b442425971a77010b713c0e8fa5a6badf64ecfe8a41e->leave($__internal_62271c00ef6592da8a14b442425971a77010b713c0e8fa5a6badf64ecfe8a41e_prof);

        
        $__internal_d06d5f19d2e7e6e3a19e4da9c68a71c0e59914352473c9cc2f36d0ef837fd64b->leave($__internal_d06d5f19d2e7e6e3a19e4da9c68a71c0e59914352473c9cc2f36d0ef837fd64b_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 37,  102 => 35,  96 => 32,  90 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>{{ user.username }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ user.password }}</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>{% if user.created %}{{ user.created|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "user/show.html.twig", "/Applications/MAMP/htdocs/crud3/app/Resources/views/user/show.html.twig");
    }
}
