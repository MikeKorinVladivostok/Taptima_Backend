<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @SonataAdmin/CRUD/display_email.html.twig */
class __TwigTemplate_ea5d3ffca830195b3193e3d3200c83ecd32168310e9cddafa1fd787cbfea46ae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/display_email.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/display_email.html.twig"));

        // line 12
        ob_start();
        // line 13
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "&nbsp;";
        } elseif (((        // line 15
(isset($context["as_string"]) || array_key_exists("as_string", $context))) ? (_twig_default_filter((isset($context["as_string"]) || array_key_exists("as_string", $context) ? $context["as_string"] : (function () { throw new RuntimeError('Variable "as_string" does not exist.', 15, $this->source); })()), false)) : (false))) {
            // line 16
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 16, $this->source); })()), "html", null, true);
        } else {
            // line 18
            $context["parameters"] = [];
            // line 19
            echo "
        ";
            // line 20
            if ( !twig_test_empty((((isset($context["subject"]) || array_key_exists("subject", $context))) ? (_twig_default_filter((isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 20, $this->source); })()), null)) : (null)))) {
                // line 21
                echo "            ";
                $context["parameters"] = twig_array_merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 21, $this->source); })()), ["subject" => (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 21, $this->source); })())]);
                // line 22
                echo "        ";
            }
            // line 23
            echo "        ";
            if ( !twig_test_empty((((isset($context["body"]) || array_key_exists("body", $context))) ? (_twig_default_filter((isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 23, $this->source); })()), null)) : (null)))) {
                // line 24
                echo "            ";
                $context["parameters"] = twig_array_merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 24, $this->source); })()), ["body" => (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 24, $this->source); })())]);
                // line 25
                echo "        ";
            }
            // line 26
            echo "
        <a href=\"mailto:";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 27, $this->source); })()), "html", null, true);
            if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 27, $this->source); })())), 0))) {
                echo "?";
                echo twig_escape_filter($this->env, twig_urlencode_filter((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 27, $this->source); })())), "html", null, true);
            }
            echo "\">";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 28, $this->source); })()), "html", null, true);
            // line 29
            echo "</a>";
        }
        $___internal_7868326aea81885ccecf2e42202c309faae17a74bd4abc5bba80b7491780e61c_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo twig_spaceless($___internal_7868326aea81885ccecf2e42202c309faae17a74bd4abc5bba80b7491780e61c_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/display_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 12,  88 => 29,  86 => 28,  79 => 27,  76 => 26,  73 => 25,  70 => 24,  67 => 23,  64 => 22,  61 => 21,  59 => 20,  56 => 19,  54 => 18,  51 => 16,  49 => 15,  47 => 14,  45 => 13,  43 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{%- apply spaceless %}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif as_string|default(false) -%}
        {{ value }}
    {%- else -%}
        {% set parameters = {} %}

        {% if subject|default(null) is not empty %}
            {% set parameters = parameters|merge({'subject': subject}) %}
        {% endif %}
        {% if body|default(null) is not empty %}
            {% set parameters = parameters|merge({'body': body}) %}
        {% endif %}

        <a href=\"mailto:{{ value }}{% if parameters|length > 0 %}?{{- parameters|url_encode -}}{% endif %}\">
            {{- value -}}
        </a>
    {%- endif -%}
{% endapply -%}
", "@SonataAdmin/CRUD/display_email.html.twig", "W:\\domains\\Taptima_Backend\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\CRUD\\display_email.html.twig");
    }
}
