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

/* @SonataAdmin/CRUD/display_choice.html.twig */
class __TwigTemplate_8f0df89888a97222e9e593ccde291842b3816349d73ca4b5f8a349abc6a0973c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/display_choice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/display_choice.html.twig"));

        // line 12
        ob_start();
        // line 13
        echo "    ";
        $context["choices"] = (((isset($context["choices"]) || array_key_exists("choices", $context))) ? (_twig_default_filter((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 13, $this->source); })()), [])) : ([]));
        // line 14
        echo "    ";
        if (((((isset($context["multiple"]) || array_key_exists("multiple", $context))) ? (_twig_default_filter((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 14, $this->source); })()), false)) : (false)) && twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 14, $this->source); })())))) {
            // line 15
            echo "
        ";
            // line 16
            $context["result"] = "";
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                // line 18
                echo "            ";
                if ( !twig_test_empty((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 18, $this->source); })()))) {
                    // line 19
                    echo "                ";
                    $context["result"] = ((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 19, $this->source); })()) . (((isset($context["delimiter"]) || array_key_exists("delimiter", $context))) ? (_twig_default_filter((isset($context["delimiter"]) || array_key_exists("delimiter", $context) ? $context["delimiter"] : (function () { throw new RuntimeError('Variable "delimiter" does not exist.', 19, $this->source); })()), ", ")) : (", ")));
                    // line 20
                    echo "            ";
                }
                // line 21
                echo "
            ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, ($context["choices"] ?? null), $context["val"], [], "array", true, true, false, 22)) {
                    // line 23
                    echo "                ";
                    $context["choice"] = twig_get_attribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 23, $this->source); })()), $context["val"], [], "array", false, false, false, 23);
                    // line 24
                    echo "            ";
                } else {
                    // line 25
                    echo "                ";
                    $context["choice"] = $context["val"];
                    // line 26
                    echo "            ";
                }
                // line 27
                echo "            ";
                if ((null === (((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context))) ? (_twig_default_filter((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 27, $this->source); })()), null)) : (null)))) {
                    // line 28
                    echo "                ";
                    $context["result"] = ((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 28, $this->source); })()) . (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 28, $this->source); })()));
                    // line 29
                    echo "            ";
                } else {
                    // line 30
                    echo "                ";
                    $context["result"] = ((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 30, $this->source); })()) . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 30, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 30, $this->source); })())));
                    // line 31
                    echo "            ";
                }
                // line 32
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "
        ";
            // line 34
            $context["value"] = (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 34, $this->source); })());
            // line 35
            echo "
    ";
        } elseif (twig_in_filter(        // line 36
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 36, $this->source); })()), twig_get_array_keys_filter((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 36, $this->source); })())))) {
            // line 37
            echo "        ";
            if ((null === (((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context))) ? (_twig_default_filter((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 37, $this->source); })()), null)) : (null)))) {
                // line 38
                echo "            ";
                $context["value"] = twig_get_attribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 38, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 38, $this->source); })()), [], "array", false, false, false, 38);
                // line 39
                echo "        ";
            } else {
                // line 40
                echo "            ";
                $context["value"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 40, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 40, $this->source); })()), [], "array", false, false, false, 40), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 40, $this->source); })()));
                // line 41
                echo "        ";
            }
            // line 42
            echo "    ";
        }
        // line 43
        echo "
    ";
        // line 44
        if ((((isset($context["safe"]) || array_key_exists("safe", $context))) ? (_twig_default_filter((isset($context["safe"]) || array_key_exists("safe", $context) ? $context["safe"] : (function () { throw new RuntimeError('Variable "safe" does not exist.', 44, $this->source); })()), false)) : (false))) {
            // line 45
            echo "        ";
            echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 45, $this->source); })());
            echo "
    ";
        } else {
            // line 47
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 47, $this->source); })()), "html", null, true);
            echo "
    ";
        }
        $___internal_b06f024a0aa08a9d967e5b823b9fb9b2d0757f1e4446d84a803a87e882c745c3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo twig_spaceless($___internal_b06f024a0aa08a9d967e5b823b9fb9b2d0757f1e4446d84a803a87e882c745c3_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/display_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 12,  147 => 47,  141 => 45,  139 => 44,  136 => 43,  133 => 42,  130 => 41,  127 => 40,  124 => 39,  121 => 38,  118 => 37,  116 => 36,  113 => 35,  111 => 34,  108 => 33,  102 => 32,  99 => 31,  96 => 30,  93 => 29,  90 => 28,  87 => 27,  84 => 26,  81 => 25,  78 => 24,  75 => 23,  73 => 22,  70 => 21,  67 => 20,  64 => 19,  61 => 18,  56 => 17,  54 => 16,  51 => 15,  48 => 14,  45 => 13,  43 => 12,);
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
    {% set choices = choices|default([]) %}
    {% if multiple|default(false) and value is iterable %}

        {% set result = '' %}
        {% for val in value %}
            {% if result is not empty %}
                {% set result = result ~ delimiter|default(', ') %}
            {% endif %}

            {% if choices[val] is defined %}
                {% set choice = choices[val] %}
            {% else %}
                {% set choice = val %}
            {% endif %}
            {% if translation_domain|default(null) is null %}
                {% set result = result ~ choice %}
            {% else %}
                {% set result = result ~ choice|trans({}, translation_domain) %}
            {% endif %}
        {% endfor %}

        {% set value = result %}

    {% elseif value in choices|keys %}
        {% if translation_domain|default(null) is null %}
            {% set value = choices[value] %}
        {% else %}
            {% set value = choices[value]|trans({}, translation_domain) %}
        {% endif %}
    {% endif %}

    {% if safe|default(false) %}
        {{ value|raw }}
    {% else %}
        {{ value }}
    {% endif %}
{% endapply -%}
", "@SonataAdmin/CRUD/display_choice.html.twig", "W:\\domains\\Taptima_Backend\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\CRUD\\display_choice.html.twig");
    }
}
