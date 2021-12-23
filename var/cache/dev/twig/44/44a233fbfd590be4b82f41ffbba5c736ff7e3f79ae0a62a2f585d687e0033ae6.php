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

/* @SonataAdmin/CRUD/base_edit_form_macro.html.twig */
class __TwigTemplate_1becc6efaf7ca3f9d4d635cc327fbf88fd13920576a61512d9f78a113357b0df extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_edit_form_macro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_edit_form_macro.html.twig"));

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_render_groups($__admin__ = null, $__form__ = null, $__groups__ = null, $__has_tab__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "admin" => $__admin__,
            "form" => $__form__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_groups"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 2
            echo "    <div class=\"row\">

    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 4, $this->source); })()), function ($__code__) use ($context, $macros) { $context["code"] = $__code__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formgroups", [], "any", false, true, false, 4), $context["code"], [], "array", true, true, false, 4); }));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 5
                echo "        ";
                $context["form_group"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 5, $this->source); })()), "formgroups", [], "any", false, false, false, 5), $context["code"], [], "array", false, false, false, 5);
                // line 6
                echo "
        <div class=\"";
                // line 7
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "class", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "class", [], "any", false, false, false, 7), "col-md-12")) : ("col-md-12")), "html", null, true);
                echo "\">
            <div class=\"";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 8, $this->source); })()), "box_class", [], "any", false, false, false, 8), "html", null, true);
                echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
                // line 11
                if ((twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [], "any", true, true, false, 11) && (twig_get_attribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 11, $this->source); })()), "translation_domain", [], "any", false, false, false, 11) === false))) {
                    // line 12
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 12, $this->source); })()), "label", [], "any", false, false, false, 12), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 14
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 14, $this->source); })()), "label", [], "any", false, false, false, 14), [], (((twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [], "any", true, true, false, 14) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [], "any", false, false, false, 14)))) ? (twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [], "any", false, false, false, 14)) : (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 14, $this->source); })()), "translationDomain", [], "any", false, false, false, 14)))), "html", null, true);
                    echo "
                        ";
                }
                // line 16
                echo "                    </h4>
                </div>
                <div class=\"box-body\">
                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                // line 20
                if (twig_get_attribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [], "any", true, true, false, 21) && (twig_get_attribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 21, $this->source); })()), "translation_domain", [], "any", false, false, false, 21) === false))) {
                        // line 22
                        echo "                                <p>";
                        echo twig_get_attribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22);
                        echo "</p>
                            ";
                    } else {
                        // line 24
                        echo "                                <p>";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), [], (((twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [], "any", true, true, false, 24) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [], "any", false, false, false, 24)))) ? (twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [], "any", false, false, false, 24)) : (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 24, $this->source); })()), "translationDomain", [], "any", false, false, false, 24))));
                        echo "</p>
                            ";
                    }
                    // line 26
                    echo "                        ";
                }
                // line 27
                echo "
                        ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 28, $this->source); })()), "fields", [], "any", false, false, false, 28), function ($__form_field_name__) use ($context, $macros) { $context["form_field_name"] = $__form_field_name__; return twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), $context["form_field_name"], [], "array", true, true, false, 28); }));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["form_field_name"]) {
                    // line 29
                    echo "                            ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), $context["form_field_name"], [], "array", false, false, false, 29), 'row');
                    echo "
                        ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 31
                    echo "                            ";
                    if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 31, $this->source); })()), "empty_message", [], "any", false, false, false, 31), false))) {
                        // line 32
                        echo "                                ";
                        if ((twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "empty_message_translation_domain", [], "any", true, true, false, 32) && (twig_get_attribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 32, $this->source); })()), "empty_message_translation_domain", [], "any", false, false, false, 32) === false))) {
                            // line 33
                            echo "                                    <em>";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 33, $this->source); })()), "empty_message", [], "any", false, false, false, 33), "html", null, true);
                            echo "</em>
                                ";
                        } else {
                            // line 35
                            echo "                                    <em>";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 35, $this->source); })()), "empty_message", [], "any", false, false, false, 35), [], (((twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "empty_message_translation_domain", [], "any", true, true, false, 35) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "empty_message_translation_domain", [], "any", false, false, false, 35)))) ? (twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "empty_message_translation_domain", [], "any", false, false, false, 35)) : (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 35, $this->source); })()), "translationDomain", [], "any", false, false, false, 35)))), "html", null, true);
                            echo "</em>
                                ";
                        }
                        // line 37
                        echo "                            ";
                    }
                    // line 38
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form_field_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "                    </div>
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit_form_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 44,  180 => 39,  174 => 38,  171 => 37,  165 => 35,  159 => 33,  156 => 32,  153 => 31,  145 => 29,  140 => 28,  137 => 27,  134 => 26,  128 => 24,  122 => 22,  119 => 21,  117 => 20,  111 => 16,  105 => 14,  99 => 12,  97 => 11,  91 => 8,  87 => 7,  84 => 6,  81 => 5,  77 => 4,  73 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro render_groups(admin, form, groups, has_tab) %}
    <div class=\"row\">

    {% for code in groups|filter(code => admin.formgroups[code] is defined) %}
        {% set form_group = admin.formgroups[code] %}

        <div class=\"{{ form_group.class|default('col-md-12') }}\">
            <div class=\"{{ form_group.box_class }}\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        {% if form_group.translation_domain is defined and form_group.translation_domain is same as(false) %}
                            {{ form_group.label }}
                        {% else %}
                            {{ form_group.label|trans({}, form_group.translation_domain ?? admin.translationDomain) }}
                        {% endif %}
                    </h4>
                </div>
                <div class=\"box-body\">
                    <div class=\"sonata-ba-collapsed-fields\">
                        {% if form_group.description %}
                            {% if form_group.translation_domain is defined and form_group.translation_domain is same as(false) %}
                                <p>{{ form_group.description|raw }}</p>
                            {% else %}
                                <p>{{ form_group.description|trans({}, form_group.translation_domain ?? admin.translationDomain)|raw }}</p>
                            {% endif %}
                        {% endif %}

                        {% for form_field_name in form_group.fields|filter(form_field_name => form[form_field_name] is defined) %}
                            {{ form_row(form[form_field_name]) }}
                        {% else %}
                            {% if form_group.empty_message != false %}
                                {% if form_group.empty_message_translation_domain is defined and form_group.empty_message_translation_domain is same as(false) %}
                                    <em>{{ form_group.empty_message }}</em>
                                {% else %}
                                    <em>{{ form_group.empty_message|trans({}, form_group.empty_message_translation_domain ?? admin.translationDomain) }}</em>
                                {% endif %}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}
    </div>
{% endmacro %}
", "@SonataAdmin/CRUD/base_edit_form_macro.html.twig", "W:\\domains\\Taptima_Backend\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\CRUD\\base_edit_form_macro.html.twig");
    }
}
