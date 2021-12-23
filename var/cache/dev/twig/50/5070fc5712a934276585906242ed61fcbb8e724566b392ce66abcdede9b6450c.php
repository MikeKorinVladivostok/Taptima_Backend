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

/* @SonataAdmin/Core/add_block.html.twig */
class __TwigTemplate_666351c2efb3303d50539fbb5653117dd2900026e6bb7be47b25c8c455256103 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/add_block.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/add_block.html.twig"));

        // line 1
        $context["items_per_column"] = twig_get_attribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 1, $this->source); })()), "getOption", [0 => "dropdown_number_groups_per_colums"], "method", false, false, false, 1);
        // line 2
        echo "
";
        // line 3
        $context["groups"] = $this->extensions['Sonata\AdminBundle\Twig\Extension\GroupExtension']->getDashboardGroupsWithCreatableAdmins();
        // line 4
        echo "
";
        // line 5
        $context["column_count"] = twig_round((twig_length_filter($this->env, (isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 5, $this->source); })())) / (isset($context["items_per_column"]) || array_key_exists("items_per_column", $context) ? $context["items_per_column"] : (function () { throw new RuntimeError('Variable "items_per_column" does not exist.', 5, $this->source); })())), 0, "ceil");
        // line 6
        echo "
<div class=\"dropdown-menu multi-column dropdown-add\"
    ";
        // line 8
        if ((1 === twig_compare((isset($context["column_count"]) || array_key_exists("column_count", $context) ? $context["column_count"] : (function () { throw new RuntimeError('Variable "column_count" does not exist.', 8, $this->source); })()), 1))) {
            echo "style=\"width: ";
            echo twig_escape_filter($this->env, ((isset($context["column_count"]) || array_key_exists("column_count", $context) ? $context["column_count"] : (function () { throw new RuntimeError('Variable "column_count" does not exist.', 8, $this->source); })()) * 140), "html", null, true);
            echo "px;\"";
        }
        // line 9
        echo ">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 10, $this->source); })())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 11
            echo "        ";
            $context["display"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["group"], "roles", [], "any", false, false, false, 11)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(twig_get_attribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 11, $this->source); })()), "getOption", [0 => "role_admin"], "method", false, false, false, 11))) || (1 === twig_compare(twig_length_filter($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "roles", [], "any", false, false, false, 11), function ($__role__) use ($context, $macros) { $context["role"] = $__role__; return $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 11, $this->source); })())); })), 0)));
            // line 12
            echo "
        ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 13)) {
                // line 14
                echo "            ";
                $context["render_first_element"] = true;
                // line 15
                echo "        ";
            }
            // line 16
            echo "
        ";
            // line 17
            if ((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new RuntimeError('Variable "display" does not exist.', 17, $this->source); })())) {
                // line 18
                echo "            ";
                if (((isset($context["render_first_element"]) || array_key_exists("render_first_element", $context) ? $context["render_first_element"] : (function () { throw new RuntimeError('Variable "render_first_element" does not exist.', 18, $this->source); })()) || (0 === twig_compare((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 18) % (isset($context["items_per_column"]) || array_key_exists("items_per_column", $context) ? $context["items_per_column"] : (function () { throw new RuntimeError('Variable "items_per_column" does not exist.', 18, $this->source); })())), 0)))) {
                    // line 19
                    echo "                ";
                    if ((isset($context["render_first_element"]) || array_key_exists("render_first_element", $context) ? $context["render_first_element"] : (function () { throw new RuntimeError('Variable "render_first_element" does not exist.', 19, $this->source); })())) {
                        // line 20
                        echo "                    <div class=\"container-fluid\">
                        <div class=\"row\">
                    ";
                        // line 22
                        $context["render_first_element"] = false;
                        // line 23
                        echo "                ";
                    } else {
                        // line 24
                        echo "                    </ul>
                ";
                    }
                    // line 26
                    echo "                <ul class=\"dropdown-menu";
                    if ((1 === twig_compare((isset($context["column_count"]) || array_key_exists("column_count", $context) ? $context["column_count"] : (function () { throw new RuntimeError('Variable "column_count" does not exist.', 26, $this->source); })()), 1))) {
                        echo " col-md-";
                        echo twig_escape_filter($this->env, twig_round((12 / (isset($context["column_count"]) || array_key_exists("column_count", $context) ? $context["column_count"] : (function () { throw new RuntimeError('Variable "column_count" does not exist.', 26, $this->source); })()))), "html", null, true);
                    }
                    echo "\">
            ";
                }
                // line 28
                echo "            ";
                if ((0 !== twig_compare((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 28) % (isset($context["items_per_column"]) || array_key_exists("items_per_column", $context) ? $context["items_per_column"] : (function () { throw new RuntimeError('Variable "items_per_column" does not exist.', 28, $this->source); })())), 0))) {
                    // line 29
                    echo "                <li role=\"presentation\" class=\"divider\"></li>
            ";
                }
                // line 31
                echo "            <li role=\"presentation\" class=\"dropdown-header\">
                ";
                // line 32
                echo $this->extensions['Sonata\AdminBundle\Twig\Extension\IconExtension']->parseIcon(twig_get_attribute($this->env, $this->source, $context["group"], "icon", [], "any", false, false, false, 32));
                echo "
                ";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["group"], "label", [], "any", false, false, false, 33), [], twig_get_attribute($this->env, $this->source, $context["group"], "label_catalogue", [], "any", false, false, false, 33)), "html", null, true);
                echo "
            </li>

            ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "items", [], "any", false, false, false, 36));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 37
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["admin"], "hasRoute", [0 => "create"], "method", false, false, false, 37) && twig_get_attribute($this->env, $this->source, $context["admin"], "hasAccess", [0 => "create"], "method", false, false, false, 37))) {
                        // line 38
                        echo "                    ";
                        if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["admin"], "subClasses", [], "any", false, false, false, 38))) {
                            // line 39
                            echo "                        <li role=\"presentation\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                            // line 40
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "generateUrl", [0 => "create"], "method", false, false, false, 40), "html", null, true);
                            echo "\">
                                ";
                            // line 41
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["admin"], "label", [], "any", false, false, false, 41))) {
                                // line 42
                                echo "                                    ";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["admin"], "label", [], "any", false, false, false, 42), [], twig_get_attribute($this->env, $this->source, $context["admin"], "translationdomain", [], "any", false, false, false, 42)), "html", null, true);
                                echo "
                                ";
                            }
                            // line 44
                            echo "                            </a>
                        </li>
                    ";
                        } else {
                            // line 47
                            echo "                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, $context["admin"], "subclasses", [], "any", false, false, false, 47)));
                            foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                                // line 48
                                echo "                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                                // line 49
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "generateUrl", [0 => "create", 1 => ["subclass" => $context["subclass"]]], "method", false, false, false, 49), "html", null, true);
                                echo "\">
                                    ";
                                // line 50
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["subclass"], [], twig_get_attribute($this->env, $this->source, $context["admin"], "translationdomain", [], "any", false, false, false, 50)), "html", null, true);
                                echo "
                                </a>
                            </li>
                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 54
                            echo "                    ";
                        }
                        // line 55
                        echo "                ";
                    }
                    // line 56
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 57) &&  !(isset($context["render_first_element"]) || array_key_exists("render_first_element", $context) ? $context["render_first_element"] : (function () { throw new RuntimeError('Variable "render_first_element" does not exist.', 57, $this->source); })()))) {
                    // line 58
                    echo "                </ul>
                </div>
                </div>
            ";
                }
                // line 62
                echo "        ";
            }
            // line 63
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/add_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 64,  228 => 63,  225 => 62,  219 => 58,  216 => 57,  210 => 56,  207 => 55,  204 => 54,  194 => 50,  190 => 49,  187 => 48,  182 => 47,  177 => 44,  171 => 42,  169 => 41,  165 => 40,  162 => 39,  159 => 38,  156 => 37,  152 => 36,  146 => 33,  142 => 32,  139 => 31,  135 => 29,  132 => 28,  123 => 26,  119 => 24,  116 => 23,  114 => 22,  110 => 20,  107 => 19,  104 => 18,  102 => 17,  99 => 16,  96 => 15,  93 => 14,  91 => 13,  88 => 12,  85 => 11,  68 => 10,  65 => 9,  59 => 8,  55 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set items_per_column = sonata_config.getOption('dropdown_number_groups_per_colums') %}

{% set groups = get_sonata_dashboard_groups_with_creatable_admins() %}

{% set column_count = (groups|length / items_per_column)|round(0, 'ceil') %}

<div class=\"dropdown-menu multi-column dropdown-add\"
    {% if column_count > 1 %}style=\"width: {{ column_count*140 }}px;\"{% endif %}
>
    {% for group in groups|reverse %}
        {% set display = group.roles is empty or is_granted(sonata_config.getOption('role_admin')) or group.roles|filter(role => is_granted(role))|length > 0 %}

        {% if loop.first %}
            {% set render_first_element = true %}
        {% endif %}

        {% if display %}
            {% if render_first_element or loop.index0 % items_per_column == 0 %}
                {% if render_first_element %}
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                    {% set render_first_element = false %}
                {% else %}
                    </ul>
                {% endif %}
                <ul class=\"dropdown-menu{% if column_count > 1 %} col-md-{{ (12/column_count)|round }}{% endif %}\">
            {% endif %}
            {% if loop.index0 % items_per_column != 0 %}
                <li role=\"presentation\" class=\"divider\"></li>
            {% endif %}
            <li role=\"presentation\" class=\"dropdown-header\">
                {{ group.icon|parse_icon }}
                {{ group.label|trans({}, group.label_catalogue) }}
            </li>

            {% for admin in group.items %}
                {% if admin.hasRoute('create') and admin.hasAccess('create') %}
                    {% if admin.subClasses is empty %}
                        <li role=\"presentation\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"{{ admin.generateUrl('create') }}\">
                                {% if admin.label is not empty %}
                                    {{ admin.label|trans({}, admin.translationdomain) }}
                                {% endif %}
                            </a>
                        </li>
                    {% else %}
                        {% for subclass in admin.subclasses|keys %}
                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"{{ admin.generateUrl('create', {'subclass': subclass}) }}\">
                                    {{ subclass|trans({}, admin.translationdomain) }}
                                </a>
                            </li>
                        {% endfor %}
                    {% endif %}
                {% endif %}
            {% endfor %}
            {% if loop.last and not render_first_element %}
                </ul>
                </div>
                </div>
            {% endif %}
        {% endif %}
    {% endfor %}
</div>
", "@SonataAdmin/Core/add_block.html.twig", "W:\\domains\\Taptima_Backend\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\Core\\add_block.html.twig");
    }
}
