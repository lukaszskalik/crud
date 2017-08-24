<?php

/* user/index.html.twig */
class __TwigTemplate_152963886b26e86f766ecd1d57a9be99efb8f06022b0356dca3decd732230edf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_d74907994c26004e5e42b2f0b4f565bf567a106d7a7275ba6b54e0d0d7190f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d74907994c26004e5e42b2f0b4f565bf567a106d7a7275ba6b54e0d0d7190f5e->enter($__internal_d74907994c26004e5e42b2f0b4f565bf567a106d7a7275ba6b54e0d0d7190f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_25bc40cbc8bbb3986bf39480f0dafdf0b4bb29d6f64e4e86dd3b8ff7fe85fa41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25bc40cbc8bbb3986bf39480f0dafdf0b4bb29d6f64e4e86dd3b8ff7fe85fa41->enter($__internal_25bc40cbc8bbb3986bf39480f0dafdf0b4bb29d6f64e4e86dd3b8ff7fe85fa41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d74907994c26004e5e42b2f0b4f565bf567a106d7a7275ba6b54e0d0d7190f5e->leave($__internal_d74907994c26004e5e42b2f0b4f565bf567a106d7a7275ba6b54e0d0d7190f5e_prof);

        
        $__internal_25bc40cbc8bbb3986bf39480f0dafdf0b4bb29d6f64e4e86dd3b8ff7fe85fa41->leave($__internal_25bc40cbc8bbb3986bf39480f0dafdf0b4bb29d6f64e4e86dd3b8ff7fe85fa41_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e369f709e587a225a772d4a7bd46e3111f80029faaadc9a01dbe58c2680726f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e369f709e587a225a772d4a7bd46e3111f80029faaadc9a01dbe58c2680726f->enter($__internal_5e369f709e587a225a772d4a7bd46e3111f80029faaadc9a01dbe58c2680726f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_38fabaa61fbb3e2e29afe44fab03ed520b7ef7976732a9c47b17c84c34344b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38fabaa61fbb3e2e29afe44fab03ed520b7ef7976732a9c47b17c84c34344b4a->enter($__internal_38fabaa61fbb3e2e29afe44fab03ed520b7ef7976732a9c47b17c84c34344b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["user"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "created", array()), "d-m-Y H:i"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_38fabaa61fbb3e2e29afe44fab03ed520b7ef7976732a9c47b17c84c34344b4a->leave($__internal_38fabaa61fbb3e2e29afe44fab03ed520b7ef7976732a9c47b17c84c34344b4a_prof);

        
        $__internal_5e369f709e587a225a772d4a7bd46e3111f80029faaadc9a01dbe58c2680726f->leave($__internal_5e369f709e587a225a772d4a7bd46e3111f80029faaadc9a01dbe58c2680726f_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  112 => 35,  100 => 29,  94 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                <td>{{ user.username }}</td>
                <td>{{ user.password }}</td>
                <td>{% if user.created %}{{ user.created|date('d-m-Y H:i') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_show', { 'id': user.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", "user/index.html.twig", "/Applications/MAMP/htdocs/crud3/app/Resources/views/user/index.html.twig");
    }
}
