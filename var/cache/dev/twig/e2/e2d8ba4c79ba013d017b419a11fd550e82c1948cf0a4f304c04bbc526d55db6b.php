<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_beb21384708b7fce70142673076643bf4701a2536699ef3f1150a9b33abd0d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_831c4e69d12cdbfffd6c956a0a08f7f18fd144816d328017689a65e2ad980f1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831c4e69d12cdbfffd6c956a0a08f7f18fd144816d328017689a65e2ad980f1a->enter($__internal_831c4e69d12cdbfffd6c956a0a08f7f18fd144816d328017689a65e2ad980f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ede95e6065170993f0218dfc4c191d7de9c19562a413f49018f310d5d88a317d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede95e6065170993f0218dfc4c191d7de9c19562a413f49018f310d5d88a317d->enter($__internal_ede95e6065170993f0218dfc4c191d7de9c19562a413f49018f310d5d88a317d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_831c4e69d12cdbfffd6c956a0a08f7f18fd144816d328017689a65e2ad980f1a->leave($__internal_831c4e69d12cdbfffd6c956a0a08f7f18fd144816d328017689a65e2ad980f1a_prof);

        
        $__internal_ede95e6065170993f0218dfc4c191d7de9c19562a413f49018f310d5d88a317d->leave($__internal_ede95e6065170993f0218dfc4c191d7de9c19562a413f49018f310d5d88a317d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a88c9499fb25f6de149e9341801f3fc5b97d57d0a6e3c4a2dfa6178de6618eb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a88c9499fb25f6de149e9341801f3fc5b97d57d0a6e3c4a2dfa6178de6618eb2->enter($__internal_a88c9499fb25f6de149e9341801f3fc5b97d57d0a6e3c4a2dfa6178de6618eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_13bdd1c31286620730aea5b20bd17ca0d34b4deabd5568cadc203cbaaccf6e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13bdd1c31286620730aea5b20bd17ca0d34b4deabd5568cadc203cbaaccf6e41->enter($__internal_13bdd1c31286620730aea5b20bd17ca0d34b4deabd5568cadc203cbaaccf6e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_13bdd1c31286620730aea5b20bd17ca0d34b4deabd5568cadc203cbaaccf6e41->leave($__internal_13bdd1c31286620730aea5b20bd17ca0d34b4deabd5568cadc203cbaaccf6e41_prof);

        
        $__internal_a88c9499fb25f6de149e9341801f3fc5b97d57d0a6e3c4a2dfa6178de6618eb2->leave($__internal_a88c9499fb25f6de149e9341801f3fc5b97d57d0a6e3c4a2dfa6178de6618eb2_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ed741c092971e8e8f424eedf9395bddf5e09c730988e1ed5c99fdab0f4a17b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed741c092971e8e8f424eedf9395bddf5e09c730988e1ed5c99fdab0f4a17b5->enter($__internal_5ed741c092971e8e8f424eedf9395bddf5e09c730988e1ed5c99fdab0f4a17b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0f6fadb25f8b63de8926c4ceb86745a2f3ccfba68371ca644321adb6d15b1677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6fadb25f8b63de8926c4ceb86745a2f3ccfba68371ca644321adb6d15b1677->enter($__internal_0f6fadb25f8b63de8926c4ceb86745a2f3ccfba68371ca644321adb6d15b1677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0f6fadb25f8b63de8926c4ceb86745a2f3ccfba68371ca644321adb6d15b1677->leave($__internal_0f6fadb25f8b63de8926c4ceb86745a2f3ccfba68371ca644321adb6d15b1677_prof);

        
        $__internal_5ed741c092971e8e8f424eedf9395bddf5e09c730988e1ed5c99fdab0f4a17b5->leave($__internal_5ed741c092971e8e8f424eedf9395bddf5e09c730988e1ed5c99fdab0f4a17b5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef459f28ed9c2e94783049e3fbb1ea90dc6c3fb226ae7a94c272c87cd40827e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef459f28ed9c2e94783049e3fbb1ea90dc6c3fb226ae7a94c272c87cd40827e9->enter($__internal_ef459f28ed9c2e94783049e3fbb1ea90dc6c3fb226ae7a94c272c87cd40827e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd65fb6e9a3405b0298ba5b6399d72d7efb98366e987989cf8bfaae0f18d2524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd65fb6e9a3405b0298ba5b6399d72d7efb98366e987989cf8bfaae0f18d2524->enter($__internal_bd65fb6e9a3405b0298ba5b6399d72d7efb98366e987989cf8bfaae0f18d2524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bd65fb6e9a3405b0298ba5b6399d72d7efb98366e987989cf8bfaae0f18d2524->leave($__internal_bd65fb6e9a3405b0298ba5b6399d72d7efb98366e987989cf8bfaae0f18d2524_prof);

        
        $__internal_ef459f28ed9c2e94783049e3fbb1ea90dc6c3fb226ae7a94c272c87cd40827e9->leave($__internal_ef459f28ed9c2e94783049e3fbb1ea90dc6c3fb226ae7a94c272c87cd40827e9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/crud3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
