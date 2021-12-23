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

/* @SonataAdmin/CRUD/dashboard__action.html.twig */
class __TwigTemplate_ae1c48dcdede27b5d04de9feb41ef9516552dfd1d54809aab8bc2a661a942c79 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/dashboard__action.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/dashboard__action.html.twig"));

        // line 1
        echo "<a class=\"btn btn-link btn-flat\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 1, $this->source); })()), "url", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
    ";
        // line 2
        echo $this->extensions['Sonata\AdminBundle\Twig\Extension\IconExtension']->parseIcon(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 2, $this->source); })()), "icon", [], "any", false, false, false, 2));
        echo "
    ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "translation_domain", [], "any", true, true, false, 3) && (twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 3, $this->source); })()), "translation_domain", [], "any", false, false, false, 3) === false))) {
            // line 4
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 4, $this->source); })()), "label", [], "any", false, false, false, 4), "html", null, true);
            echo "
    ";
        } else {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 6, $this->source); })()), "label", [], "any", false, false, false, 6), [], ((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "translation_domain", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "translation_domain", [], "any", false, false, false, 6), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
            echo "
    ";
        }
        // line 8
        echo "</a>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/dashboard__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 8,  60 => 6,  54 => 4,  52 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a class=\"btn btn-link btn-flat\" href=\"{{ action.url }}\">
    {{ action.icon|parse_icon }}
    {% if action.translation_domain is defined and action.translation_domain is same as(false) %}
        {{ action.label }}
    {% else %}
        {{ action.label|trans({}, action.translation_domain|default('SonataAdminBundle')) }}
    {% endif %}
</a>
", "@SonataAdmin/CRUD/dashboard__action.html.twig", "W:\\domains\\Taptima_Backend\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\CRUD\\dashboard__action.html.twig");
    }
}
