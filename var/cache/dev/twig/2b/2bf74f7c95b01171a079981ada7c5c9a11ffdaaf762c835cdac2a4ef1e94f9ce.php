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

/* @SonataAdmin/CRUD/display_url.html.twig */
class __TwigTemplate_4e029f60e0374b68e52784426314c7fa94177fa373f3952bcc7044543d17575f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/display_url.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/display_url.html.twig"));

        // line 12
        ob_start();
        // line 13
        echo "    ";
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "        &nbsp;
    ";
        } else {
            // line 16
            echo "        ";
            if ((((isset($context["url"]) || array_key_exists("url", $context))) ? (_twig_default_filter((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 16, $this->source); })()), null)) : (null))) {
                // line 17
                echo "            ";
                // line 18
                echo "            ";
                $context["url_address"] = (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 18, $this->source); })());
                // line 19
                echo "        ";
            } elseif (( !(null === (((isset($context["route"]) || array_key_exists("route", $context))) ? (_twig_default_filter((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 19, $this->source); })()), null)) : (null))) && !twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), [0 => "edit", 1 => "show"]))) {
                // line 20
                echo "            ";
                // line 21
                echo "            ";
                $context["parameters"] = ((twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "parameters", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "parameters", [], "any", false, false, false, 21), [])) : ([]));
                // line 22
                echo "
            ";
                // line 23
                if (((twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "absolute", [], "any", true, true, false, 23)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "absolute", [], "any", false, false, false, 23), false)) : (false))) {
                    // line 24
                    echo "                ";
                    $context["url_address"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 24, $this->source); })()));
                    // line 25
                    echo "            ";
                } else {
                    // line 26
                    echo "                ";
                    $context["url_address"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 26, $this->source); })()));
                    // line 27
                    echo "            ";
                }
                // line 28
                echo "        ";
            } else {
                // line 29
                echo "            ";
                // line 30
                echo "            ";
                $context["url_address"] = (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 30, $this->source); })());
                // line 31
                echo "        ";
            }
            // line 32
            echo "
        ";
            // line 33
            if ((((isset($context["hide_protocol"]) || array_key_exists("hide_protocol", $context))) ? (_twig_default_filter((isset($context["hide_protocol"]) || array_key_exists("hide_protocol", $context) ? $context["hide_protocol"] : (function () { throw new RuntimeError('Variable "hide_protocol" does not exist.', 33, $this->source); })()), false)) : (false))) {
                // line 34
                echo "            ";
                $context["value"] = twig_replace_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 34, $this->source); })()), ["http://" => "", "https://" => ""]);
                // line 35
                echo "        ";
            }
            // line 36
            echo "
        <a
            href=\"";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["url_address"]) || array_key_exists("url_address", $context) ? $context["url_address"] : (function () { throw new RuntimeError('Variable "url_address" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "\"";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((((isset($context["attributes"]) || array_key_exists("attributes", $context))) ? (_twig_default_filter((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 39, $this->source); })()), [])) : ([])));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 40
                echo "            ";
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html_attr");
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo ">";
            // line 43
            if ((((isset($context["safe"]) || array_key_exists("safe", $context))) ? (_twig_default_filter((isset($context["safe"]) || array_key_exists("safe", $context) ? $context["safe"] : (function () { throw new RuntimeError('Variable "safe" does not exist.', 43, $this->source); })()), false)) : (false))) {
                // line 44
                echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 44, $this->source); })());
            } else {
                // line 46
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 46, $this->source); })()), "html", null, true);
            }
            // line 48
            echo "</a>
    ";
        }
        $___internal_ba05dce5a9d6d02d443114911e74d486274f0aa51a58a0946b3bb65a0348297a_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo twig_spaceless($___internal_ba05dce5a9d6d02d443114911e74d486274f0aa51a58a0946b3bb65a0348297a_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/display_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 12,  138 => 48,  135 => 46,  132 => 44,  130 => 43,  128 => 42,  118 => 40,  114 => 39,  111 => 38,  107 => 36,  104 => 35,  101 => 34,  99 => 33,  96 => 32,  93 => 31,  90 => 30,  88 => 29,  85 => 28,  82 => 27,  79 => 26,  76 => 25,  73 => 24,  71 => 23,  68 => 22,  65 => 21,  63 => 20,  60 => 19,  57 => 18,  55 => 17,  52 => 16,  48 => 14,  45 => 13,  43 => 12,);
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
    {% if value is empty %}
        &nbsp;
    {% else %}
        {% if url|default(null) %}
            {# target url is string #}
            {% set url_address = url %}
        {% elseif route|default(null) is not null and route.name not in ['edit', 'show'] %}
            {# target url is Symfony route #}
            {% set parameters = route.parameters|default([]) %}

            {% if route.absolute|default(false) %}
                {% set url_address = url(route.name, parameters) %}
            {% else %}
                {% set url_address = path(route.name, parameters) %}
            {% endif %}
        {% else %}
            {# value is url #}
            {% set url_address = value %}
        {% endif %}

        {% if hide_protocol|default(false) %}
            {% set value = value|replace({'http://': '', 'https://': ''}) %}
        {% endif %}

        <a
            href=\"{{ url_address }}\"
        {%- for attribute, value in attributes|default([]) %}
            {{ attribute }}=\"{{ value|escape('html_attr') }}\"
        {%- endfor -%}
        >
        {%- if safe|default(false) -%}
            {{- value|raw -}}
        {%- else -%}
            {{- value -}}
        {%- endif -%}
        </a>
    {% endif %}
{% endapply -%}
", "@SonataAdmin/CRUD/display_url.html.twig", "W:\\domains\\Taptima_Backend\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\CRUD\\display_url.html.twig");
    }
}
