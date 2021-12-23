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

/* @SonataAdmin/Block/block_search_result.html.twig */
class __TwigTemplate_7288626230027a4daa5423d07ef543025be75f6c8321d4e17c82171629100122 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'block' => [$this, 'block_block'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new RuntimeError('Variable "sonata_block" does not exist.', 12, $this->source); })()), "templates", [], "any", false, false, false, 12), "block_base", [], "any", false, false, false, 12), "@SonataAdmin/Block/block_search_result.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_search_result.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_search_result.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        $context["results_count"] = (((isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 15, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 15, $this->source); })()), "countResults", [], "method", false, false, false, 15)) : (0));
        // line 16
        echo "    ";
        $context["has_results"] = (1 === twig_compare((isset($context["results_count"]) || array_key_exists("results_count", $context) ? $context["results_count"] : (function () { throw new RuntimeError('Variable "results_count" does not exist.', 16, $this->source); })()), 0));
        // line 17
        echo "    ";
        $context["current_page_results"] = (((isset($context["has_results"]) || array_key_exists("has_results", $context) ? $context["has_results"] : (function () { throw new RuntimeError('Variable "has_results" does not exist.', 17, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 17, $this->source); })()), "currentPageResults", [], "any", false, false, false, 17)) : ([]));
        // line 18
        echo "    ";
        $context["visibility_class"] = ("sonata-search-result-" . (((isset($context["has_results"]) || array_key_exists("has_results", $context) ? $context["has_results"] : (function () { throw new RuntimeError('Variable "has_results" does not exist.', 18, $this->source); })())) ? ("show") : ((isset($context["show_empty_boxes"]) || array_key_exists("show_empty_boxes", $context) ? $context["show_empty_boxes"] : (function () { throw new RuntimeError('Variable "show_empty_boxes" does not exist.', 18, $this->source); })()))));
        // line 19
        echo "
    <div class=\"col-lg-4 col-md-6 search-box-item ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["visibility_class"]) || array_key_exists("visibility_class", $context) ? $context["visibility_class"] : (function () { throw new RuntimeError('Variable "visibility_class" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\">
        <div class=\"box box-solid ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["visibility_class"]) || array_key_exists("visibility_class", $context) ? $context["visibility_class"] : (function () { throw new RuntimeError('Variable "visibility_class" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\">
            <div class=\"box-header with-border ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["visibility_class"]) || array_key_exists("visibility_class", $context) ? $context["visibility_class"] : (function () { throw new RuntimeError('Variable "visibility_class" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\">
                ";
        // line 23
        echo $this->extensions['Sonata\AdminBundle\Twig\Extension\IconExtension']->parseIcon(((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "icon", [], "any", true, true, false, 23)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "icon", [], "any", false, false, false, 23), "")) : ("")));
        echo "
                <h3 class=\"box-title\">
                    ";
        // line 25
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 25, $this->source); })()), "label", [], "any", false, false, false, 25))) {
            // line 26
            echo "                        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 26, $this->source); })()), "label", [], "any", false, false, false, 26), [], twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 26, $this->source); })()), "translationdomain", [], "any", false, false, false, 26)), "html", null, true);
            echo "
                    ";
        }
        // line 28
        echo "                </h3>

                <div class=\"box-tools pull-right\">
                    ";
        // line 31
        if ((isset($context["has_results"]) || array_key_exists("has_results", $context) ? $context["has_results"] : (function () { throw new RuntimeError('Variable "has_results" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "                        <span class=\"badge\">";
            echo twig_escape_filter($this->env, (isset($context["results_count"]) || array_key_exists("results_count", $context) ? $context["results_count"] : (function () { throw new RuntimeError('Variable "results_count" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "</span>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 33
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 33, $this->source); })()), "hasRoute", [0 => "create"], "method", false, false, false, 33) && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 33, $this->source); })()), "hasAccess", [0 => "create"], "method", false, false, false, 33))) {
            // line 34
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 34, $this->source); })()), "generateUrl", [0 => "create"], "method", false, false, false, 34), "html", null, true);
            echo "\" class=\"btn btn-box-tool\">
                            <i class=\"fas fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 38
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 38, $this->source); })()), "hasRoute", [0 => "list"], "method", false, false, false, 38) && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 38, $this->source); })()), "hasAccess", [0 => "list"], "method", false, false, false, 38))) {
            // line 39
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 39, $this->source); })()), "generateUrl", [0 => "list"], "method", false, false, false, 39), "html", null, true);
            echo "\" class=\"btn btn-box-tool\">
                            <i class=\"fas fa-list\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 43
        echo "                </div>

                <div class=\"matches\">
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["filter"]) {
            // line 47
            echo "                        <a class=\"label label-primary\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 47, $this->source); })()), "generateUrl", [0 => "list", 1 => ["filter" => [twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 47) => ["value" => (isset($context["term"]) || array_key_exists("term", $context) ? $context["term"] : (function () { throw new RuntimeError('Variable "term" does not exist.', 47, $this->source); })())]]]], "method", false, false, false, 47), "html", null, true);
            echo "\">
                            ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, $context["filter"], "option", [0 => "translation_domain"], "method", false, false, false, 48) === false)) {
                // line 49
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "option", [0 => "label"], "method", false, false, false, 49), "html", null, true);
                echo "
                            ";
            } else {
                // line 51
                echo "                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["filter"], "option", [0 => "label"], "method", false, false, false, 51), [], twig_get_attribute($this->env, $this->source, $context["filter"], "option", [0 => "translation_domain", 1 => twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 51, $this->source); })()), "translationDomain", [], "any", false, false, false, 51)], "method", false, false, false, 51)), "html", null, true);
                echo "
                            ";
            }
            // line 53
            echo "                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </div>
            </div>
            ";
        // line 57
        if ((isset($context["has_results"]) || array_key_exists("has_results", $context) ? $context["has_results"] : (function () { throw new RuntimeError('Variable "has_results" does not exist.', 57, $this->source); })())) {
            // line 58
            echo "                <div class=\"box-body no-padding\">
                    <ul class=\"nav nav-stacked sonata-search-result-list\">
                        ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["current_page_results"]) || array_key_exists("current_page_results", $context) ? $context["current_page_results"] : (function () { throw new RuntimeError('Variable "current_page_results" does not exist.', 60, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 61
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 61, $this->source); })()), "hasRoute", [0 => (isset($context["admin_route"]) || array_key_exists("admin_route", $context) ? $context["admin_route"] : (function () { throw new RuntimeError('Variable "admin_route" does not exist.', 61, $this->source); })())], "method", false, false, false, 61) && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 61, $this->source); })()), "hasAccess", [0 => (isset($context["admin_route"]) || array_key_exists("admin_route", $context) ? $context["admin_route"] : (function () { throw new RuntimeError('Variable "admin_route" does not exist.', 61, $this->source); })()), 1 => $context["result"]], "method", false, false, false, 61))) {
                    // line 62
                    echo "                                <li>
                                    <a href=\"";
                    // line 63
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 63, $this->source); })()), "generateObjectUrl", [0 => (isset($context["admin_route"]) || array_key_exists("admin_route", $context) ? $context["admin_route"] : (function () { throw new RuntimeError('Variable "admin_route" does not exist.', 63, $this->source); })()), 1 => $context["result"]], "method", false, false, false, 63), "html", null, true);
                    echo "\">
                                        ";
                    // line 64
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 64, $this->source); })()), "toString", [0 => $context["result"]], "method", false, false, false, 64), "html", null, true);
                    echo "
                                    </a>
                                </li>
                            ";
                } else {
                    // line 68
                    echo "                                <li><a>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 68, $this->source); })()), "toString", [0 => $context["result"]], "method", false, false, false, 68), "html", null, true);
                    echo "</a></li>
                            ";
                }
                // line 70
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                    </ul>
                </div>
            ";
        } else {
            // line 74
            echo "                <div class=\"box-body\">
                    <p>
                        <em>";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no_results_found", [], "SonataAdminBundle"), "html", null, true);
            echo "</em>
                    </p>
                </div>
            ";
        }
        // line 80
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Block/block_search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 80,  227 => 76,  223 => 74,  218 => 71,  212 => 70,  206 => 68,  199 => 64,  195 => 63,  192 => 62,  189 => 61,  185 => 60,  181 => 58,  179 => 57,  175 => 55,  168 => 53,  162 => 51,  156 => 49,  154 => 48,  149 => 47,  145 => 46,  140 => 43,  132 => 39,  129 => 38,  121 => 34,  119 => 33,  114 => 32,  112 => 31,  107 => 28,  101 => 26,  99 => 25,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  79 => 19,  76 => 18,  73 => 17,  70 => 16,  67 => 15,  57 => 14,  35 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    {% set results_count = pager ? pager.countResults() : 0 %}
    {% set has_results = results_count > 0 %}
    {% set current_page_results = has_results ? pager.currentPageResults : [] %}
    {% set visibility_class = 'sonata-search-result-' ~ (has_results ? 'show' : show_empty_boxes) %}

    <div class=\"col-lg-4 col-md-6 search-box-item {{ visibility_class }}\">
        <div class=\"box box-solid {{ visibility_class }}\">
            <div class=\"box-header with-border {{ visibility_class }}\">
                {{ settings.icon|default('')|parse_icon }}
                <h3 class=\"box-title\">
                    {% if admin.label is not empty %}
                        {{ admin.label|trans({}, admin.translationdomain) }}
                    {% endif %}
                </h3>

                <div class=\"box-tools pull-right\">
                    {% if has_results %}
                        <span class=\"badge\">{{ results_count }}</span>
                    {% elseif admin.hasRoute('create') and admin.hasAccess('create') %}
                        <a href=\"{{ admin.generateUrl('create') }}\" class=\"btn btn-box-tool\">
                            <i class=\"fas fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    {% endif %}
                    {% if admin.hasRoute('list') and admin.hasAccess('list') %}
                        <a href=\"{{ admin.generateUrl('list') }}\" class=\"btn btn-box-tool\">
                            <i class=\"fas fa-list\" aria-hidden=\"true\"></i>
                        </a>
                    {% endif %}
                </div>

                <div class=\"matches\">
                    {% for name, filter in filters %}
                        <a class=\"label label-primary\" href=\"{{ admin.generateUrl('list', {'filter': {(filter.formName): {'value': term}}}) }}\">
                            {% if filter.option('translation_domain') is same as(false) %}
                                {{ filter.option('label') }}
                            {% else %}
                                {{ filter.option('label')|trans({}, filter.option('translation_domain', admin.translationDomain)) }}
                            {% endif %}
                        </a>
                    {% endfor %}
                </div>
            </div>
            {% if has_results %}
                <div class=\"box-body no-padding\">
                    <ul class=\"nav nav-stacked sonata-search-result-list\">
                        {% for result in current_page_results %}
                            {% if admin.hasRoute(admin_route) and admin.hasAccess(admin_route, result) %}
                                <li>
                                    <a href=\"{{ admin.generateObjectUrl(admin_route, result) }}\">
                                        {{ admin.toString(result) }}
                                    </a>
                                </li>
                            {% else %}
                                <li><a>{{ admin.toString(result) }}</a></li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                </div>
            {% else %}
                <div class=\"box-body\">
                    <p>
                        <em>{{ 'no_results_found'|trans({}, 'SonataAdminBundle') }}</em>
                    </p>
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "@SonataAdmin/Block/block_search_result.html.twig", "W:\\domains\\Taptima_Backend\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\Block\\block_search_result.html.twig");
    }
}
