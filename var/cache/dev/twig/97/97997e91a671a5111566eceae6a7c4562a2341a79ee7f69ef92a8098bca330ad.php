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

/* @SonataAdmin/CRUD/Association/edit_one_to_many_inline_table.html.twig */
class __TwigTemplate_41f53fd2a208b01491ce3e4cb1a7c4a9100731233f090b2b66839507d18405c6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/edit_one_to_many_inline_table.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/edit_one_to_many_inline_table.html.twig"));

        // line 11
        echo "<table class=\"table table-bordered\">
    <thead>
        <tr>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "children", [], "any", false, false, false, 14)), "children", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
            // line 15
            echo "                ";
            if ((0 === twig_compare($context["field_name"], "_delete"))) {
                // line 16
                echo "                    <th>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_delete", [], "SonataAdminBundle"), "html", null, true);
                echo "</th>
                ";
            } else {
                // line 18
                echo "                    <th
                        ";
                // line 19
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 19), "required", [], "array", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 19), "required", [], "array", false, false, false, 19), false)) : (false))) {
                    // line 20
                    echo "                            class=\"required\"
                        ";
                }
                // line 22
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 22), "attr", [], "array", false, true, false, 22), "hidden", [], "array", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 22), "attr", [], "array", false, true, false, 22), "hidden", [], "array", false, false, false, 22), false)) : (false))) {
                    // line 23
                    echo "                            style=\"display:none;\"
                        ";
                }
                // line 25
                echo "                    >
                        ";
                // line 26
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, false, false, 26), "translation_domain", [], "any", false, false, false, 26) === false)) {
                    // line 27
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, false, false, 27), "label", [], "any", false, false, false, 27), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 29
                    echo "                            ";
                    $context["translationDomain"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 29), "translation_domain", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 29), "translation_domain", [], "any", false, false, false, 29), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 29), "sonata_admin", [], "array", false, true, false, 29), "admin", [], "any", false, true, false, 29), "translationDomain", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 29), "sonata_admin", [], "array", false, true, false, 29), "admin", [], "any", false, true, false, 29), "translationDomain", [], "any", false, false, false, 29), null)) : (null)))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 29), "sonata_admin", [], "array", false, true, false, 29), "admin", [], "any", false, true, false, 29), "translationDomain", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 29), "sonata_admin", [], "array", false, true, false, 29), "admin", [], "any", false, true, false, 29), "translationDomain", [], "any", false, false, false, 29), null)) : (null))));
                    // line 30
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, false, false, 30), "label", [], "any", false, false, false, 30), [], (isset($context["translationDomain"]) || array_key_exists("translationDomain", $context) ? $context["translationDomain"] : (function () { throw new RuntimeError('Variable "translationDomain" does not exist.', 30, $this->source); })())), "html", null, true);
                    echo "
                        ";
                }
                // line 32
                echo "                    </th>
                ";
            }
            // line 34
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tr>
    </thead>
    <tbody class=\"sonata-ba-tbody\">
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "children", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
            // line 39
            echo "            <tr>
                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["nested_group_field"], "children", [], "any", false, false, false, 40));
            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                // line 41
                echo "                    <td class=\"
                        sonata-ba-td-";
                // line 42
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 42, $this->source); })()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                echo "
                        form-group
                        control-group
                        ";
                // line 45
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 45), "errors", [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 45), "errors", [], "any", false, false, false, 45), false)) : (false))) {
                    echo " error has-error sonata-ba-field-error";
                }
                // line 46
                echo "                        \"
                        ";
                // line 47
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 47), "attr", [], "array", false, true, false, 47), "hidden", [], "array", true, true, false, 47)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 47), "attr", [], "array", false, true, false, 47), "hidden", [], "array", false, false, false, 47), false)) : (false))) {
                    // line 48
                    echo "                            style=\"display:none;\"
                        ";
                }
                // line 50
                echo "                    >
                        ";
                // line 51
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true, false, 51), "associationadmin", [], "any", false, true, false, 51), "formfielddescriptions", [], "any", false, true, false, 51), $context["field_name"], [], "array", true, true, false, 51)) {
                    // line 52
                    echo "                            ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'widget');
                    echo "

                            ";
                    // line 54
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'help');
                    echo "

                            ";
                    // line 56
                    $context["dummy"] = twig_get_attribute($this->env, $this->source, $context["nested_group_field"], "setrendered", [], "any", false, false, false, 56);
                    // line 57
                    echo "                        ";
                } else {
                    // line 58
                    echo "                            ";
                    if ((0 === twig_compare($context["field_name"], "_delete"))) {
                        // line 59
                        echo "                                ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'widget', ["label" => false]);
                        echo "
                            ";
                    } else {
                        // line 61
                        echo "                                ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'widget');
                        echo "
                            ";
                    }
                    // line 63
                    echo "                        ";
                }
                // line 64
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 64), "errors", [], "any", true, true, false, 64)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 64), "errors", [], "any", false, false, false, 64), false)) : (false))) {
                    // line 65
                    echo "                            <div class=\"help-block help-inline sonata-ba-field-error-messages\">
                                ";
                    // line 66
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'errors');
                    echo "
                            </div>
                        ";
                }
                // line 69
                echo "                    </td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "    </tbody>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/Association/edit_one_to_many_inline_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 73,  205 => 71,  198 => 69,  192 => 66,  189 => 65,  186 => 64,  183 => 63,  177 => 61,  171 => 59,  168 => 58,  165 => 57,  163 => 56,  158 => 54,  152 => 52,  150 => 51,  147 => 50,  143 => 48,  141 => 47,  138 => 46,  134 => 45,  126 => 42,  123 => 41,  119 => 40,  116 => 39,  112 => 38,  107 => 35,  101 => 34,  97 => 32,  91 => 30,  88 => 29,  82 => 27,  80 => 26,  77 => 25,  73 => 23,  70 => 22,  66 => 20,  64 => 19,  61 => 18,  55 => 16,  52 => 15,  48 => 14,  43 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<table class=\"table table-bordered\">
    <thead>
        <tr>
            {% for field_name, nested_field in form.children|first.children %}
                {% if field_name == '_delete' %}
                    <th>{{ 'action_delete'|trans({}, 'SonataAdminBundle') }}</th>
                {% else %}
                    <th
                        {% if nested_field.vars['required']|default(false) %}
                            class=\"required\"
                        {% endif %}
                        {% if nested_field.vars['attr']['hidden']|default(false) %}
                            style=\"display:none;\"
                        {% endif %}
                    >
                        {% if nested_field.vars.translation_domain is same as(false) %}
                            {{ nested_field.vars.label }}
                        {% else %}
                            {% set translationDomain = nested_field.vars.translation_domain|default(nested_field.vars['sonata_admin'].admin.translationDomain|default(null)) %}
                            {{ nested_field.vars.label|trans({}, translationDomain) }}
                        {% endif %}
                    </th>
                {% endif %}
            {% endfor %}
        </tr>
    </thead>
    <tbody class=\"sonata-ba-tbody\">
        {% for nested_group_field_name, nested_group_field in form.children %}
            <tr>
                {% for field_name, nested_field in nested_group_field.children %}
                    <td class=\"
                        sonata-ba-td-{{ id }}-{{ field_name }}
                        form-group
                        control-group
                        {% if nested_field.vars.errors|default(false) %} error has-error sonata-ba-field-error{% endif %}
                        \"
                        {% if nested_field.vars['attr']['hidden']|default(false) %}
                            style=\"display:none;\"
                        {% endif %}
                    >
                        {% if sonata_admin.field_description.associationadmin.formfielddescriptions[field_name] is defined %}
                            {{ form_widget(nested_field) }}

                            {{ form_help(nested_field) }}

                            {% set dummy = nested_group_field.setrendered %}
                        {% else %}
                            {% if field_name == '_delete' %}
                                {{ form_widget(nested_field, { label: false }) }}
                            {% else %}
                                {{ form_widget(nested_field) }}
                            {% endif %}
                        {% endif %}
                        {% if nested_field.vars.errors|default(false) %}
                            <div class=\"help-block help-inline sonata-ba-field-error-messages\">
                                {{ form_errors(nested_field) }}
                            </div>
                        {% endif %}
                    </td>
                {% endfor %}
            </tr>
        {% endfor %}
    </tbody>
</table>
", "@SonataAdmin/CRUD/Association/edit_one_to_many_inline_table.html.twig", "W:\\domains\\Taptima_Backend\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\CRUD\\Association\\edit_one_to_many_inline_table.html.twig");
    }
}
