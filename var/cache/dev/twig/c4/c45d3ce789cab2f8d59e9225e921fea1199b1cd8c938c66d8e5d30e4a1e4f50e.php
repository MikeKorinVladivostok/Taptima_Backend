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

/* @SonataAdmin/CRUD/base_show_field.html.twig */
class __TwigTemplate_80f6f952cbef8eb06a7c4a4ff85b3803b1e1fdb1109a97ff07530eae459b0130 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'name' => [$this, 'block_name'],
            'field' => [$this, 'block_field'],
            'field_value' => [$this, 'block_field_value'],
            'field_compare' => [$this, 'block_field_compare'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_field.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if ((((isset($context["is_diff"]) || array_key_exists("is_diff", $context))) ? (_twig_default_filter((isset($context["is_diff"]) || array_key_exists("is_diff", $context) ? $context["is_diff"] : (function () { throw new RuntimeError('Variable "is_diff" does not exist.', 12, $this->source); })()), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        // line 13
        $this->displayBlock('name', $context, $blocks);
        // line 24
        echo "</th>
<td>";
        // line 26
        $this->displayBlock('field', $context, $blocks);
        // line 43
        echo "</td>";
        // line 45
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "name"));

        // line 14
        ob_start();
        // line 15
        echo "            ";
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 15, $this->source); })()), "label", [], "any", false, false, false, 15) === false)) {
            // line 16
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 16, $this->source); })()), "translationDomain", [], "any", false, false, false, 16) === false)) {
                // line 17
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 17, $this->source); })()), "label", [], "any", false, false, false, 17), "html", null, true);
                echo "
                ";
            } else {
                // line 19
                echo "                    ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 19, $this->source); })()), "label", [], "any", false, false, false, 19), [], twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 19, $this->source); })()), "translationDomain", [], "any", false, false, false, 19)), "html", null, true);
                echo "
                ";
            }
            // line 21
            echo "            ";
        }
        // line 22
        echo "        ";
        $___internal_2869d43ac594d46cc3132964c55d5ba3c381aee08d78e700c3f066a33f14149b_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        echo twig_spaceless($___internal_2869d43ac594d46cc3132964c55d5ba3c381aee08d78e700c3f066a33f14149b_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 27
        ob_start();
        // line 28
        echo "            ";
        $context["collapse"] = twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 28, $this->source); })()), "option", [0 => "collapse"], "method", false, false, false, 28);
        // line 29
        echo "            ";
        if ((isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "                <div class=\"sonata-readmore\"
                      data-readmore-height=\"";
            // line 31
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "height", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "height", [], "any", false, false, false, 31), 40)) : (40)), "html", null, true);
            echo "\"
                      data-readmore-more=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "more", [], "any", true, true, false, 32)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "more", [], "any", false, false, false, 32), "read_more")) : ("read_more")), [], "SonataAdminBundle"), "html", null, true);
            echo "\"
                      data-readmore-less=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "less", [], "any", true, true, false, 33)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "less", [], "any", false, false, false, 33), "read_less")) : ("read_less")), [], "SonataAdminBundle"), "html", null, true);
            echo "\">
                    ";
            // line 34
            $this->displayBlock('field_value', $context, $blocks);
            // line 37
            echo "                </div>
            ";
        } else {
            // line 39
            echo "                ";
            $this->displayBlock("field_value", $context, $blocks);
            echo "
            ";
        }
        // line 41
        echo "        ";
        $___internal_ee8867a73ca58a565d1bb6911ed98a65ec095f181dafc5d8429ff3dddceda0b1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo twig_spaceless($___internal_ee8867a73ca58a565d1bb6911ed98a65ec095f181dafc5d8429ff3dddceda0b1_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field_value"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field_value"));

        // line 35
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 35, $this->source); })()), "option", [0 => "safe", 1 => false], "method", false, false, false, 35)) {
            echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 35, $this->source); })());
        } else {
            echo nl2br(twig_escape_filter($this->env, (((isset($context["value"]) || array_key_exists("value", $context))) ? (_twig_default_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 35, $this->source); })()), "")) : ("")), "html", null, true));
        }
        // line 36
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_field_compare($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field_compare"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field_compare"));

        // line 46
        ob_start();
        // line 47
        echo "        ";
        if ((isset($context["value_compare"]) || array_key_exists("value_compare", $context))) {
            // line 48
            echo "            ";
            $context["value"] = (isset($context["value_compare"]) || array_key_exists("value_compare", $context) ? $context["value_compare"] : (function () { throw new RuntimeError('Variable "value_compare" does not exist.', 48, $this->source); })());
            // line 49
            echo "            ";
            $context["object"] = (isset($context["object_compare"]) || array_key_exists("object_compare", $context) ? $context["object_compare"] : (function () { throw new RuntimeError('Variable "object_compare" does not exist.', 49, $this->source); })());
            // line 50
            echo "            <td>";
            $this->displayBlock("field", $context, $blocks);
            echo "</td>
        ";
        }
        // line 52
        echo "    ";
        $___internal_4172e0c8f968d2bf3f51c32060c2afa096ae20161a6ee7cbe3dacaa51b83275f_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo twig_spaceless($___internal_4172e0c8f968d2bf3f51c32060c2afa096ae20161a6ee7cbe3dacaa51b83275f_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 46,  232 => 52,  226 => 50,  223 => 49,  220 => 48,  217 => 47,  215 => 46,  205 => 45,  195 => 36,  188 => 35,  178 => 34,  168 => 27,  165 => 41,  159 => 39,  155 => 37,  153 => 34,  149 => 33,  145 => 32,  141 => 31,  138 => 30,  135 => 29,  132 => 28,  130 => 27,  120 => 26,  110 => 14,  107 => 22,  104 => 21,  98 => 19,  92 => 17,  89 => 16,  86 => 15,  84 => 14,  74 => 13,  64 => 45,  62 => 43,  60 => 26,  57 => 24,  55 => 13,  50 => 12,  47 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<th{% if(is_diff|default(false)) %} class=\"diff\"{% endif %}>
    {%- block name -%}
        {% apply spaceless %}
            {% if field_description.label is not same as(false) %}
                {% if field_description.translationDomain is same as(false) %}
                    {{ field_description.label }}
                {% else %}
                    {{ field_description.label|trans({}, field_description.translationDomain) }}
                {% endif %}
            {% endif %}
        {% endapply %}
    {%- endblock -%}
</th>
<td>
    {%- block field -%}
        {% apply spaceless %}
            {% set collapse = field_description.option('collapse') %}
            {% if collapse %}
                <div class=\"sonata-readmore\"
                      data-readmore-height=\"{{ collapse.height|default(40) }}\"
                      data-readmore-more=\"{{ collapse.more|default('read_more')|trans({}, 'SonataAdminBundle') }}\"
                      data-readmore-less=\"{{ collapse.less|default('read_less')|trans({}, 'SonataAdminBundle') }}\">
                    {% block field_value %}
                        {% if field_description.option('safe', false) %}{{ value|raw }}{% else %}{{ value|default('')|nl2br }}{% endif %}
                    {% endblock %}
                </div>
            {% else %}
                {{ block('field_value') }}
            {% endif %}
        {% endapply %}
    {%- endblock -%}
</td>

{%- block field_compare -%}
    {% apply spaceless %}
        {% if value_compare is defined %}
            {% set value = value_compare %}
            {% set object = object_compare %}
            <td>{{ block('field') }}</td>
        {% endif %}
    {% endapply %}
{%- endblock -%}
", "@SonataAdmin/CRUD/base_show_field.html.twig", "W:\\domains\\Taptima_Backend\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\CRUD\\base_show_field.html.twig");
    }
}
