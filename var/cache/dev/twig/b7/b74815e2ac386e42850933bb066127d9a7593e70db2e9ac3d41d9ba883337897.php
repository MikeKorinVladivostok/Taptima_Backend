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

/* @SonataAdmin/CRUD/base_array_macro.html.twig */
class __TwigTemplate_073c57ce1ef1a0b2d18b8d2a2c1408c1fc4a0b9894f600ffb27be4a86af82228 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_array_macro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_array_macro.html.twig"));

        // line 11
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function macro_render_array($__value__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_array"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_array"));

            // line 13
            echo "    ";
            $context["options"] = twig_array_merge(["inline" => false, "key_translation_domain" => false, "value_translation_domain" => false, "display" => "both"],             // line 18
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 18, $this->source); })()));
            // line 19
            ob_start();
            // line 20
            $macros["__internal_31dad7da189c7335e32cbab820761aa44ecb015e789adbd220a975ddb64261b4"] = $this;
            // line 22
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 22, $this->source); })()), "inline", [], "any", false, false, false, 22)) {
                // line 23
                echo "<ul>";
            } else {
                // line 25
                echo "[";
            }
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 28, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 29
                if ( !twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 29, $this->source); })()), "inline", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "<li>";
                }
                // line 33
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 33, $this->source); })()), "display", [], "any", false, false, false, 33), [0 => "both", 1 => "keys"])) {
                    // line 34
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 34, $this->source); })()), "key_translation_domain", [], "any", false, false, false, 34) === false)) {
                        // line 35
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    } else {
                        // line 37
                        if ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 37, $this->source); })()), "key_translation_domain", [], "any", false, false, false, 37) === true)) {
                            // line 38
                            $context["key_translation_domain"] = twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 38, $this->source); })()), "default_translation_domain", [], "any", false, false, false, 38);
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 39
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 39, $this->source); })()), "key_translation_domain", [], "any", false, false, false, 39) === null)) {
                            // line 40
                            $context["key_translation_domain"] = null;
                        } else {
                            // line 42
                            $context["key_translation_domain"] = twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 42, $this->source); })()), "key_translation_domain", [], "any", false, false, false, 42);
                        }
                        // line 45
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["key"], [], (isset($context["key_translation_domain"]) || array_key_exists("key_translation_domain", $context) ? $context["key_translation_domain"] : (function () { throw new RuntimeError('Variable "key_translation_domain" does not exist.', 45, $this->source); })())), "html", null, true);
                    }
                }
                // line 49
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 49, $this->source); })()), "display", [], "any", false, false, false, 49), "both"))) {
                    // line 50
                    echo "&nbsp;=>&nbsp;";
                }
                // line 53
                if (twig_test_iterable($context["val"])) {
                    // line 54
                    echo twig_call_macro($macros["__internal_31dad7da189c7335e32cbab820761aa44ecb015e789adbd220a975ddb64261b4"], "macro_render_array", [$context["val"], (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 54, $this->source); })())], 54, $context, $this->getSourceContext());
                } else {
                    // line 56
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 56, $this->source); })()), "display", [], "any", false, false, false, 56), [0 => "both", 1 => "values"])) {
                        // line 57
                        if ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 57, $this->source); })()), "value_translation_domain", [], "any", false, false, false, 57) === false)) {
                            // line 58
                            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        } else {
                            // line 60
                            if ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 60, $this->source); })()), "value_translation_domain", [], "any", false, false, false, 60) === true)) {
                                // line 61
                                $context["value_translation_domain"] = twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 61, $this->source); })()), "default_translation_domain", [], "any", false, false, false, 61);
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 62
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 62, $this->source); })()), "value_translation_domain", [], "any", false, false, false, 62) === null)) {
                                // line 63
                                $context["value_translation_domain"] = null;
                            } else {
                                // line 65
                                $context["value_translation_domain"] = twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 65, $this->source); })()), "value_translation_domain", [], "any", false, false, false, 65);
                            }
                            // line 68
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["val"], [], (isset($context["value_translation_domain"]) || array_key_exists("value_translation_domain", $context) ? $context["value_translation_domain"] : (function () { throw new RuntimeError('Variable "value_translation_domain" does not exist.', 68, $this->source); })())), "html", null, true);
                        }
                    }
                }
                // line 73
                if ( !twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 73, $this->source); })()), "inline", [], "any", false, false, false, 73)) {
                    // line 74
                    echo "</li>";
                }
                // line 77
                if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 77, $this->source); })()), "inline", [], "any", false, false, false, 77), true)) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 77))) {
                    // line 78
                    echo ",
            ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 82, $this->source); })()), "inline", [], "any", false, false, false, 82)) {
                // line 83
                echo "</ul>";
            } else {
                // line 85
                echo "]";
            }
            $___internal_5b13935892093722a73e714aa7ec4cc78c9bd11a7918102514f75a2652aa9d23_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 19
            echo twig_spaceless($___internal_5b13935892093722a73e714aa7ec4cc78c9bd11a7918102514f75a2652aa9d23_);
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_array_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 19,  197 => 85,  194 => 83,  192 => 82,  176 => 78,  174 => 77,  171 => 74,  169 => 73,  164 => 68,  161 => 65,  158 => 63,  156 => 62,  154 => 61,  152 => 60,  149 => 58,  147 => 57,  145 => 56,  142 => 54,  140 => 53,  137 => 50,  135 => 49,  131 => 45,  128 => 42,  125 => 40,  123 => 39,  121 => 38,  119 => 37,  116 => 35,  114 => 34,  112 => 33,  109 => 30,  107 => 29,  90 => 28,  87 => 25,  84 => 23,  82 => 22,  80 => 20,  78 => 19,  76 => 18,  74 => 13,  54 => 12,  43 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% macro render_array(value, options = []) %}
    {% set options = {
        'inline': false,
        'key_translation_domain': false,
        'value_translation_domain': false,
        'display': 'both'
    }|merge(options) %}
    {%- apply spaceless -%}
        {%- from _self import render_array -%}

        {%- if not options.inline -%}
            <ul>
        {%- else -%}
            [
        {%- endif -%}

        {%- for key, val in value -%}
            {%- if not options.inline -%}
                <li>
            {%- endif -%}

            {%- if options.display in ['both', 'keys'] -%}
                {%- if options.key_translation_domain is same as(false) -%}
                    {{- key -}}
                {%- else -%}
                    {%- if options.key_translation_domain is same as(true) -%}
                        {%- set key_translation_domain = options.default_translation_domain -%}
                    {%- elseif options.key_translation_domain is same as(null) -%}
                        {%- set key_translation_domain = null -%}
                    {%- else -%}
                        {%- set key_translation_domain = options.key_translation_domain -%}
                    {%- endif -%}

                    {{- key|trans({}, key_translation_domain) -}}
                {%- endif -%}
            {%- endif -%}

            {%- if options.display == 'both' -%}
                &nbsp;=>&nbsp;
            {%- endif -%}

            {%- if val is iterable -%}
                {{ render_array(val, options) }}
            {%- else -%}
                {%- if options.display in ['both', 'values'] -%}
                    {%- if options.value_translation_domain is same as(false) -%}
                        {{ val }}
                    {%- else -%}
                        {%- if options.value_translation_domain is same as(true) -%}
                            {%- set value_translation_domain = options.default_translation_domain -%}
                        {%- elseif options.value_translation_domain is same as(null) -%}
                            {%- set value_translation_domain = null -%}
                        {%- else -%}
                            {%- set value_translation_domain = options.value_translation_domain -%}
                        {%- endif -%}

                        {{- val|trans({}, value_translation_domain) -}}
                    {%- endif -%}
                {%- endif -%}
            {%- endif -%}

            {%- if not options.inline -%}
                </li>
            {%- endif -%}

            {%- if options.inline == true and not loop.last -%}
                ,
            {% endif -%}
        {%- endfor -%}

        {%- if not options.inline -%}
            </ul>
        {%- else -%}
            ]
        {%- endif -%}
    {%- endapply -%}
{% endmacro %}
", "@SonataAdmin/CRUD/base_array_macro.html.twig", "W:\\domains\\Taptima_Backend\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\CRUD\\base_array_macro.html.twig");
    }
}
