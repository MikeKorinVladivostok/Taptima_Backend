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

/* @SonataAdmin/Menu/sonata_menu.html.twig */
class __TwigTemplate_6567a4d0220719af0d29fc0fee8b48426146027d045bbb9b087f4b18d730bd90 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'root' => [$this, 'block_root'],
            'item' => [$this, 'block_item'],
            'linkElement' => [$this, 'block_linkElement'],
            'spanElement' => [$this, 'block_spanElement'],
            'label' => [$this, 'block_label'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Menu/sonata_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Menu/sonata_menu.html.twig"));

        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Menu/sonata_menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_root($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "root"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "childrenAttributes", [], "any", false, false, false, 4), ["class" => "sidebar-menu", "data-widget" => "tree"]);
        // line 5
        $context["request"] = ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "extra", [0 => "request"], "method", false, false, false, 5)) ? (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "extra", [0 => "request"], "method", false, false, false, 5)) : (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5)));
        // line 6
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 10, $this->source); })()), "displayed", [], "any", false, false, false, 10)) {
            // line 12
            $context["display"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "extra", [0 => "roles"], "method", false, false, false, 12)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(twig_get_attribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 12, $this->source); })()), "getOption", [0 => "role_super_admin"], "method", false, false, false, 12))) || (1 === twig_compare(twig_length_filter($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "extra", [0 => "roles"], "method", false, false, false, 12), function ($__role__) use ($context, $macros) { $context["role"] = $__role__; return $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 12, $this->source); })())); })), 0)));
        }
        // line 15
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 15, $this->source); })()), "displayed", [], "any", false, false, false, 15) && (((isset($context["display"]) || array_key_exists("display", $context))) ? (_twig_default_filter((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new RuntimeError('Variable "display" does not exist.', 15, $this->source); })()))) : ("")))) {
            // line 16
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 16, $this->source); })()), ["branch_class" => "treeview", "currentClass" => "active", "ancestorClass" => "active"]);
            // line 17
            twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "setChildrenAttribute", [0 => "class", 1 => twig_trim_filter((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "childrenAttribute", [0 => "class"], "method", false, false, false, 17) . " active"))], "method", false, false, false, 17);
            // line 18
            twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "setChildrenAttribute", [0 => "class", 1 => twig_trim_filter((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "childrenAttribute", [0 => "class"], "method", false, false, false, 18) . " treeview-menu"))], "method", false, false, false, 18);
            // line 19
            $this->displayParentBlock("item", $context, $blocks);
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_linkElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkElement"));

        // line 24
        echo "    ";
        ob_start();
        // line 25
        $context["translation_domain"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), "extra", [0 => "label_catalogue", 1 => "messages"], "method", false, false, false, 25);
        // line 26
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "on_top"], "method", true, true, false, 26) &&  !twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 26, $this->source); })()), "extra", [0 => "on_top"], "method", false, false, false, 26))) {
            // line 27
            $context["icon"] = $this->extensions['Sonata\AdminBundle\Twig\Extension\IconExtension']->parseIcon(((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "icon"], "method", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "icon"], "method", false, false, false, 27), (((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 27, $this->source); })()), "level", [], "any", false, false, false, 27), 1))) ? ("fa fa-angle-double-right") : ("")))) : ((((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 27, $this->source); })()), "level", [], "any", false, false, false, 27), 1))) ? ("fa fa-angle-double-right") : ("")))));
        } else {
            // line 29
            $context["icon"] = $this->extensions['Sonata\AdminBundle\Twig\Extension\IconExtension']->parseIcon(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 29, $this->source); })()), "extra", [0 => "icon"], "method", false, false, false, 29));
        }
        // line 31
        $context["is_link"] = true;
        // line 32
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        $___internal_30b7de4400bf8615a24ddeceb60b03433c2cd3ad02bb4cb17684d7332a410aa2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        echo twig_spaceless($___internal_30b7de4400bf8615a24ddeceb60b03433c2cd3ad02bb4cb17684d7332a410aa2_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_spanElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spanElement"));

        // line 37
        echo "    ";
        ob_start();
        // line 38
        echo "        <a href=\"#\">";
        // line 39
        $context["translation_domain"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 39, $this->source); })()), "extra", [0 => "label_catalogue", 1 => "messages"], "method", false, false, false, 39);
        // line 40
        $context["icon"] = $this->extensions['Sonata\AdminBundle\Twig\Extension\IconExtension']->parseIcon(((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "icon"], "method", true, true, false, 40)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "icon"], "method", false, false, false, 40), "")) : ("")));
        // line 41
        echo (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 41, $this->source); })());
        echo "
            ";
        // line 42
        $this->displayParentBlock("spanElement", $context, $blocks);
        // line 43
        if (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "keep_open"], "method", true, true, false, 43) ||  !twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 43, $this->source); })()), "extra", [0 => "keep_open"], "method", false, false, false, 43))) {
            // line 44
            echo "<span class=\"pull-right-container\"><i class=\"fas pull-right fa-angle-left\"></i></span>";
        }
        // line 46
        echo "</a>
    ";
        $___internal_2bd28f490cc44154d1ba5855d059f13af7c0d1a1383515a3d7b7a99ec0a3411c_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        echo twig_spaceless($___internal_2bd28f490cc44154d1ba5855d059f13af7c0d1a1383515a3d7b7a99ec0a3411c_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        // line 51
        echo "    ";
        ob_start();
        // line 52
        if ((((isset($context["is_link"]) || array_key_exists("is_link", $context))) ? (_twig_default_filter((isset($context["is_link"]) || array_key_exists("is_link", $context) ? $context["is_link"] : (function () { throw new RuntimeError('Variable "is_link" does not exist.', 52, $this->source); })()), false)) : (false))) {
            // line 53
            echo $this->extensions['Sonata\AdminBundle\Twig\Extension\IconExtension']->parseIcon((((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 53, $this->source); })()), "")) : ("")));
        }
        // line 56
        $context["item_label"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "getLabel", [], "method", false, false, false, 56);
        // line 57
        if ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 57, $this->source); })()), "allow_safe_labels", [], "any", false, false, false, 57) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 57, $this->source); })()), "extra", [0 => "safe_label", 1 => false], "method", false, false, false, 57))) {
            // line 58
            echo (isset($context["item_label"]) || array_key_exists("item_label", $context) ? $context["item_label"] : (function () { throw new RuntimeError('Variable "item_label" does not exist.', 58, $this->source); })());
        } else {
            // line 60
            $context["translation_domain"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 60, $this->source); })()), "extra", [0 => "label_catalogue", 1 => "messages"], "method", false, false, false, 60);
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["item_label"]) || array_key_exists("item_label", $context) ? $context["item_label"] : (function () { throw new RuntimeError('Variable "item_label" does not exist.', 61, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 61, $this->source); })()), "extra", [0 => "label_translation_parameters", 1 => []], "method", false, false, false, 61), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 61, $this->source); })())), "html", null, true);
        }
        $___internal_759a7a70ef3c1363c31f897e9e403f15111880b98561b55fb49f415b825a7018_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        echo twig_spaceless($___internal_759a7a70ef3c1363c31f897e9e403f15111880b98561b55fb49f415b825a7018_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Menu/sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 51,  231 => 61,  229 => 60,  226 => 58,  224 => 57,  222 => 56,  219 => 53,  217 => 52,  214 => 51,  204 => 50,  194 => 37,  190 => 46,  187 => 44,  185 => 43,  183 => 42,  179 => 41,  177 => 40,  175 => 39,  173 => 38,  170 => 37,  160 => 36,  150 => 24,  145 => 32,  143 => 31,  140 => 29,  137 => 27,  135 => 26,  133 => 25,  130 => 24,  120 => 23,  109 => 19,  107 => 18,  105 => 17,  103 => 16,  101 => 15,  98 => 12,  96 => 10,  86 => 9,  76 => 6,  74 => 5,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'knp_menu.html.twig' %}

{% block root %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': 'sidebar-menu', 'data-widget': 'tree'}) -%}
    {%- set request        = item.extra('request') ?: app.request -%}
    {{ block('list') -}}
{% endblock %}

{% block item %}
    {%- if item.displayed -%}
        {#- check role of the group #}
        {%- set display = item.extra('roles') is empty or is_granted(sonata_config.getOption('role_super_admin')) or item.extra('roles')|filter(role => is_granted(role))|length > 0 -%}
    {%- endif -%}

    {%- if item.displayed and display|default -%}
        {%- set options = options|merge({branch_class: 'treeview', currentClass: \"active\", ancestorClass: \"active\"}) -%}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' active')|trim) -%}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' treeview-menu')|trim) -%}
        {{ parent() }}
    {%- endif -%}
{% endblock %}

{% block linkElement %}
    {% apply spaceless %}
        {%- set translation_domain = item.extra('label_catalogue', 'messages') -%}
        {%- if item.extra('on_top') is defined and not item.extra('on_top') -%}
            {%- set icon = item.extra('icon')|default(item.level > 1 ? 'fa fa-angle-double-right' : '')|parse_icon -%}
        {%- else -%}
            {%- set icon = item.extra('icon')|parse_icon -%}
        {%- endif -%}
        {%- set is_link = true -%}
        {{ parent() }}
    {% endapply %}
{% endblock %}

{% block spanElement %}
    {% apply spaceless %}
        <a href=\"#\">
            {%- set translation_domain = item.extra('label_catalogue', 'messages') -%}
            {%- set icon = item.extra('icon')|default('')|parse_icon -%}
            {{ icon|raw }}
            {{ parent() }}
            {%- if item.extra('keep_open') is not defined or not item.extra('keep_open') -%}
                <span class=\"pull-right-container\"><i class=\"fas pull-right fa-angle-left\"></i></span>
            {%- endif -%}
        </a>
    {% endapply %}
{% endblock %}

{% block label %}
    {% apply spaceless %}
        {%- if is_link|default(false) -%}
            {{ icon|default('')|parse_icon }}
        {%- endif -%}
        {# We use method accessor instead of \".label\" since `item` implements `ArrayAccess` and could have a property called \"label\". #}
        {%- set item_label = item.getLabel() -%}
        {%- if options.allow_safe_labels and item.extra('safe_label', false) -%}
            {{ item_label|raw }}
        {%- else -%}
            {%- set translation_domain = item.extra('label_catalogue', 'messages') -%}
            {{ item_label|trans(item.extra('label_translation_parameters', {}), translation_domain) }}
        {%- endif -%}
    {% endapply %}
{% endblock %}
", "@SonataAdmin/Menu/sonata_menu.html.twig", "W:\\domains\\Taptima_Backend\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\Menu\\sonata_menu.html.twig");
    }
}
