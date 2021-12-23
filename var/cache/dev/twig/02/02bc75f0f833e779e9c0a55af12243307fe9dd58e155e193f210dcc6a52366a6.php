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

/* @SonataAdmin/CRUD/dashboard__action_create.html.twig */
class __TwigTemplate_0377c760897ff61be0481b970d389232c36be4eaefd313d559476274f52a9abb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/dashboard__action_create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/dashboard__action_create.html.twig"));

        // line 1
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 1, $this->source); })()), "subClasses", [], "any", false, false, false, 1))) {
            // line 2
            echo "    <a class=\"btn btn-link btn-flat\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 2, $this->source); })()), "url", [], "any", false, false, false, 2), "html", null, true);
            echo "\">
        ";
            // line 3
            echo $this->extensions['Sonata\AdminBundle\Twig\Extension\IconExtension']->parseIcon(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 3, $this->source); })()), "icon", [], "any", false, false, false, 3));
            echo "
        ";
            // line 4
            if ((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "translation_domain", [], "any", true, true, false, 4) && (twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 4, $this->source); })()), "translation_domain", [], "any", false, false, false, 4) === false))) {
                // line 5
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 5, $this->source); })()), "label", [], "any", false, false, false, 5), "html", null, true);
                echo "
        ";
            } else {
                // line 7
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 7, $this->source); })()), "label", [], "any", false, false, false, 7), [], ((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "translation_domain", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "translation_domain", [], "any", false, false, false, 7), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
                echo "
        ";
            }
            // line 9
            echo "    </a>
";
        } else {
            // line 11
            echo "    <a class=\"btn btn-link btn-flat dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        ";
            // line 12
            echo $this->extensions['Sonata\AdminBundle\Twig\Extension\IconExtension']->parseIcon(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 12, $this->source); })()), "icon", [], "any", false, false, false, 12));
            echo "
        ";
            // line 13
            if ((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "translation_domain", [], "any", true, true, false, 13) && (twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 13, $this->source); })()), "translation_domain", [], "any", false, false, false, 13) === false))) {
                // line 14
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 14, $this->source); })()), "label", [], "any", false, false, false, 14), "html", null, true);
                echo "
        ";
            } else {
                // line 16
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 16, $this->source); })()), "label", [], "any", false, false, false, 16), [], ((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "translation_domain", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "translation_domain", [], "any", false, false, false, 16), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
                echo "
        ";
            }
            // line 18
            echo "        <span class=\"caret\"></span>
    </a>
    <ul class=\"dropdown-menu\">
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 21, $this->source); })()), "subclasses", [], "any", false, false, false, 21)));
            foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                // line 22
                echo "            <li>
                <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 23, $this->source); })()), "generateUrl", [0 => "create", 1 => ["subclass" => $context["subclass"]]], "method", false, false, false, 23), "html", null, true);
                echo "\">
                    ";
                // line 24
                if ((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "translation_domain", [], "any", true, true, false, 24) && (twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 24, $this->source); })()), "translation_domain", [], "any", false, false, false, 24) === false))) {
                    // line 25
                    echo "                        ";
                    echo twig_escape_filter($this->env, $context["subclass"], "html", null, true);
                    echo "
                    ";
                } else {
                    // line 27
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["subclass"], [], ((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "translation_domain", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "translation_domain", [], "any", false, false, false, 27), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
                    echo "
                    ";
                }
                // line 29
                echo "                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    </ul>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/dashboard__action_create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 32,  123 => 29,  117 => 27,  111 => 25,  109 => 24,  105 => 23,  102 => 22,  98 => 21,  93 => 18,  87 => 16,  81 => 14,  79 => 13,  75 => 12,  72 => 11,  68 => 9,  62 => 7,  56 => 5,  54 => 4,  50 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if admin.subClasses is empty %}
    <a class=\"btn btn-link btn-flat\" href=\"{{ action.url }}\">
        {{ action.icon|parse_icon }}
        {% if action.translation_domain is defined and action.translation_domain is same as(false) %}
            {{ action.label }}
        {% else %}
            {{ action.label|trans({}, action.translation_domain|default('SonataAdminBundle')) }}
        {% endif %}
    </a>
{% else %}
    <a class=\"btn btn-link btn-flat dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        {{ action.icon|parse_icon }}
        {% if action.translation_domain is defined and action.translation_domain is same as(false) %}
            {{ action.label }}
        {% else %}
            {{ action.label|trans({}, action.translation_domain|default('SonataAdminBundle')) }}
        {% endif %}
        <span class=\"caret\"></span>
    </a>
    <ul class=\"dropdown-menu\">
        {% for subclass in admin.subclasses|keys %}
            <li>
                <a href=\"{{ admin.generateUrl('create', {'subclass': subclass}) }}\">
                    {% if action.translation_domain is defined and action.translation_domain is same as(false) %}
                        {{ subclass }}
                    {% else %}
                        {{ subclass|trans({}, action.translation_domain|default('SonataAdminBundle')) }}
                    {% endif %}
                </a>
            </li>
        {% endfor %}
    </ul>
{% endif %}
", "@SonataAdmin/CRUD/dashboard__action_create.html.twig", "W:\\domains\\Taptima_Backend\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\CRUD\\dashboard__action_create.html.twig");
    }
}
