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

/* @SonataAdmin/CRUD/base_show.html.twig */
class __TwigTemplate_96c072e0e210517e934dbce946db04c2a02363cf5f5f0cae02231e3cc203313f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'navbar_title' => [$this, 'block_navbar_title'],
            'actions' => [$this, 'block_actions'],
            'tab_menu' => [$this, 'block_tab_menu'],
            'show' => [$this, 'block_show'],
            'show_groups' => [$this, 'block_show_groups'],
            'field_row' => [$this, 'block_field_row'],
            'show_title' => [$this, 'block_show_title'],
            'show_field' => [$this, 'block_show_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new RuntimeError('Variable "base_template" does not exist.', 12, $this->source); })()), "@SonataAdmin/CRUD/base_show.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_show", ["%name%" => twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 15, $this->source); })()), "toString", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 15, $this->source); })())], "method", false, false, false, 15)), "truncate", [0 => 15, 1 => "..."], "method", false, false, false, 15)], "SonataAdminBundle"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_navbar_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 19
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_show", ["%name%" => twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 19, $this->source); })()), "toString", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 19, $this->source); })())], "method", false, false, false, 19)), "truncate", [0 => 100, 1 => "..."], "method", false, false, false, 19)], "SonataAdminBundle"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 23
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "@SonataAdmin/CRUD/base_show.html.twig", 23)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_tab_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 27
        echo "    ";
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render(twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 27, $this->source); })()), "sidemenu", [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 27, $this->source); })())], "method", false, false, false, 27), ["currentClass" => "active", "template" => $this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getGlobalTemplate("tab_menu_template")], "twig");
        // line 30
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_show($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show"));

        // line 34
        echo "    <div class=\"sonata-ba-view\">

        ";
        // line 36
        echo $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->renderEvent("sonata.admin.show.top", ["admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 36, $this->source); })()), "object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 36, $this->source); })())]);
        echo "

        ";
        // line 38
        $context["showtabs"] = twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 38, $this->source); })()), "getshowtabs", [], "method", false, false, false, 38);
        // line 39
        echo "        ";
        $context["has_tab"] = (((0 === twig_compare(twig_length_filter($this->env, (isset($context["showtabs"]) || array_key_exists("showtabs", $context) ? $context["showtabs"] : (function () { throw new RuntimeError('Variable "showtabs" does not exist.', 39, $this->source); })())), 1)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_array_keys_filter((isset($context["showtabs"]) || array_key_exists("showtabs", $context) ? $context["showtabs"] : (function () { throw new RuntimeError('Variable "showtabs" does not exist.', 39, $this->source); })())), 0, [], "array", false, false, false, 39), "default"))) || (1 === twig_compare(twig_length_filter($this->env, (isset($context["showtabs"]) || array_key_exists("showtabs", $context) ? $context["showtabs"] : (function () { throw new RuntimeError('Variable "showtabs" does not exist.', 39, $this->source); })())), 1)));
        // line 40
        echo "
        ";
        // line 41
        if ((isset($context["has_tab"]) || array_key_exists("has_tab", $context) ? $context["has_tab"] : (function () { throw new RuntimeError('Variable "has_tab" does not exist.', 41, $this->source); })())) {
            // line 42
            echo "            ";
            $context["tab_prefix"] = ((("tab_" . twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 42, $this->source); })()), "uniqid", [], "any", false, false, false, 42)) . "_") . twig_random($this->env));
            // line 43
            echo "            ";
            $context["tab_query_index"] = twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "query", [], "any", false, false, false, 43), "get", [0 => "_tab", 1 => 0], "method", false, false, false, 43), "_"));
            // line 44
            echo "            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["showtabs"]) || array_key_exists("showtabs", $context) ? $context["showtabs"] : (function () { throw new RuntimeError('Variable "showtabs" does not exist.', 46, $this->source); })()));
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
            foreach ($context['_seq'] as $context["name"] => $context["show_tab"]) {
                // line 47
                echo "                        ";
                $context["_tab_name"] = (((isset($context["tab_prefix"]) || array_key_exists("tab_prefix", $context) ? $context["tab_prefix"] : (function () { throw new RuntimeError('Variable "tab_prefix" does not exist.', 47, $this->source); })()) . "_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 47));
                // line 48
                echo "                        <li";
                if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "query", [], "any", false, false, false, 48), "has", [0 => "_tab"], "method", false, false, false, 48) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 48), 1))) || (0 === twig_compare((isset($context["tab_query_index"]) || array_key_exists("tab_query_index", $context) ? $context["tab_query_index"] : (function () { throw new RuntimeError('Variable "tab_query_index" does not exist.', 48, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 48))))) {
                    echo " class=\"active\"";
                }
                echo ">
                            <a href=\"#";
                // line 49
                echo twig_escape_filter($this->env, (isset($context["_tab_name"]) || array_key_exists("_tab_name", $context) ? $context["_tab_name"] : (function () { throw new RuntimeError('Variable "_tab_name" does not exist.', 49, $this->source); })()), "html", null, true);
                echo "\" class=\"changer-tab\" aria-controls=\"";
                echo twig_escape_filter($this->env, (isset($context["_tab_name"]) || array_key_exists("_tab_name", $context) ? $context["_tab_name"] : (function () { throw new RuntimeError('Variable "_tab_name" does not exist.', 49, $this->source); })()), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                ";
                // line 50
                if ((twig_get_attribute($this->env, $this->source, $context["show_tab"], "translation_domain", [], "any", true, true, false, 50) && (twig_get_attribute($this->env, $this->source, $context["show_tab"], "translation_domain", [], "any", false, false, false, 50) === false))) {
                    // line 51
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["show_tab"], "label", [], "any", false, false, false, 51), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 53
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["show_tab"], "label", [], "any", false, false, false, 53), [], (((twig_get_attribute($this->env, $this->source, $context["show_tab"], "translation_domain", [], "any", true, true, false, 53) &&  !(null === twig_get_attribute($this->env, $this->source, $context["show_tab"], "translation_domain", [], "any", false, false, false, 53)))) ? (twig_get_attribute($this->env, $this->source, $context["show_tab"], "translation_domain", [], "any", false, false, false, 53)) : (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 53, $this->source); })()), "translationDomain", [], "any", false, false, false, 53)))), "html", null, true);
                    echo "
                                ";
                }
                // line 55
                echo "                            </a>
                        </li>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                </ul>

                <div class=\"tab-content\">
                    ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["showtabs"]) || array_key_exists("showtabs", $context) ? $context["showtabs"] : (function () { throw new RuntimeError('Variable "showtabs" does not exist.', 61, $this->source); })()));
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
            foreach ($context['_seq'] as $context["code"] => $context["show_tab"]) {
                // line 62
                echo "                        ";
                $context["_tab_name"] = (((isset($context["tab_prefix"]) || array_key_exists("tab_prefix", $context) ? $context["tab_prefix"] : (function () { throw new RuntimeError('Variable "tab_prefix" does not exist.', 62, $this->source); })()) . "_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 62));
                // line 63
                echo "                        <div
                            class=\"tab-pane fade";
                // line 64
                if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "query", [], "any", false, false, false, 64), "has", [0 => "_tab"], "method", false, false, false, 64) && twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 64)) || (0 === twig_compare((isset($context["tab_query_index"]) || array_key_exists("tab_query_index", $context) ? $context["tab_query_index"] : (function () { throw new RuntimeError('Variable "tab_query_index" does not exist.', 64, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 64))))) {
                    echo " in active";
                }
                echo "\"
                            id=\"";
                // line 65
                echo twig_escape_filter($this->env, (isset($context["_tab_name"]) || array_key_exists("_tab_name", $context) ? $context["_tab_name"] : (function () { throw new RuntimeError('Variable "_tab_name" does not exist.', 65, $this->source); })()), "html", null, true);
                echo "\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 69
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["show_tab"], "description", [], "any", false, false, false, 69), false))) {
                    // line 70
                    echo "                                        <p>";
                    echo twig_get_attribute($this->env, $this->source, $context["show_tab"], "description", [], "any", false, false, false, 70);
                    echo "</p>
                                    ";
                }
                // line 72
                echo "
                                    ";
                // line 73
                $context["groups"] = twig_get_attribute($this->env, $this->source, $context["show_tab"], "groups", [], "any", false, false, false, 73);
                // line 74
                echo "                                    ";
                $this->displayBlock("show_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        </div>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                </div>
            </div>
        ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 81
($context["showtabs"] ?? null), "default", [], "array", true, true, false, 81)) {
            // line 82
            echo "            ";
            $context["groups"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["showtabs"]) || array_key_exists("showtabs", $context) ? $context["showtabs"] : (function () { throw new RuntimeError('Variable "showtabs" does not exist.', 82, $this->source); })()), "default", [], "array", false, false, false, 82), "groups", [], "any", false, false, false, 82);
            // line 83
            echo "            ";
            $this->displayBlock("show_groups", $context, $blocks);
            echo "
        ";
        }
        // line 85
        echo "
    </div>

    ";
        // line 88
        echo $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->renderEvent("sonata.admin.show.bottom", ["admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 88, $this->source); })()), "object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 88, $this->source); })())]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_show_groups($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show_groups"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show_groups"));

        // line 92
        echo "    <div class=\"row\">
        ";
        // line 93
        $this->displayBlock('field_row', $context, $blocks);
        // line 129
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_field_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field_row"));

        // line 94
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 94, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 95
            echo "                ";
            $context["show_group"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 95, $this->source); })()), "showgroups", [], "any", false, false, false, 95), $context["code"], [], "array", false, false, false, 95);
            // line 96
            echo "
                <div class=\"";
            // line 97
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["show_group"] ?? null), "class", [], "any", true, true, false, 97)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["show_group"] ?? null), "class", [], "any", false, false, false, 97), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo (((((isset($context["no_padding"]) || array_key_exists("no_padding", $context))) ? (_twig_default_filter((isset($context["no_padding"]) || array_key_exists("no_padding", $context) ? $context["no_padding"] : (function () { throw new RuntimeError('Variable "no_padding" does not exist.', 97, $this->source); })()), false)) : (false))) ? ("nopadding") : (""));
            echo "\">
                    <div class=\"";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new RuntimeError('Variable "show_group" does not exist.', 98, $this->source); })()), "box_class", [], "any", false, false, false, 98), "html", null, true);
            echo "\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                ";
            // line 101
            $this->displayBlock('show_title', $context, $blocks);
            // line 108
            echo "                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new RuntimeError('Variable "show_group" does not exist.', 113, $this->source); })()), "fields", [], "any", false, false, false, 113));
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
            foreach ($context['_seq'] as $context["_key"] => $context["show_field_name"]) {
                // line 114
                echo "                                    ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 121
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['show_field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_show_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show_title"));

        // line 102
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["show_group"] ?? null), "translation_domain", [], "any", true, true, false, 102) && (twig_get_attribute($this->env, $this->source, (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new RuntimeError('Variable "show_group" does not exist.', 102, $this->source); })()), "translation_domain", [], "any", false, false, false, 102) === false))) {
            // line 103
            echo "                                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new RuntimeError('Variable "show_group" does not exist.', 103, $this->source); })()), "label", [], "any", false, false, false, 103), "html", null, true);
            echo "
                                    ";
        } else {
            // line 105
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new RuntimeError('Variable "show_group" does not exist.', 105, $this->source); })()), "label", [], "any", false, false, false, 105), [], (((twig_get_attribute($this->env, $this->source, ($context["show_group"] ?? null), "translation_domain", [], "any", true, true, false, 105) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["show_group"] ?? null), "translation_domain", [], "any", false, false, false, 105)))) ? (twig_get_attribute($this->env, $this->source, ($context["show_group"] ?? null), "translation_domain", [], "any", false, false, false, 105)) : (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 105, $this->source); })()), "translationDomain", [], "any", false, false, false, 105)))), "html", null, true);
            echo "
                                    ";
        }
        // line 107
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 114
    public function block_show_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show_field"));

        // line 115
        echo "                                        <tr class=\"sonata-ba-view-container\">
                                            ";
        // line 116
        if (twig_get_attribute($this->env, $this->source, ($context["elements"] ?? null), (isset($context["show_field_name"]) || array_key_exists("show_field_name", $context) ? $context["show_field_name"] : (function () { throw new RuntimeError('Variable "show_field_name" does not exist.', 116, $this->source); })()), [], "array", true, true, false, 116)) {
            // line 117
            echo "                                                ";
            echo $this->extensions['Sonata\AdminBundle\Twig\Extension\RenderElementExtension']->renderViewElement($this->env, twig_get_attribute($this->env, $this->source, (isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 117, $this->source); })()), (isset($context["show_field_name"]) || array_key_exists("show_field_name", $context) ? $context["show_field_name"] : (function () { throw new RuntimeError('Variable "show_field_name" does not exist.', 117, $this->source); })()), [], "array", false, false, false, 117), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 117, $this->source); })()));
            echo "
                                            ";
        }
        // line 119
        echo "                                        </tr>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  564 => 119,  558 => 117,  556 => 116,  553 => 115,  543 => 114,  533 => 107,  527 => 105,  521 => 103,  518 => 102,  508 => 101,  498 => 128,  479 => 122,  465 => 121,  462 => 114,  445 => 113,  438 => 108,  436 => 101,  430 => 98,  424 => 97,  421 => 96,  418 => 95,  400 => 94,  390 => 93,  378 => 129,  376 => 93,  373 => 92,  363 => 91,  351 => 88,  346 => 85,  340 => 83,  337 => 82,  335 => 81,  331 => 79,  311 => 74,  309 => 73,  306 => 72,  300 => 70,  298 => 69,  291 => 65,  285 => 64,  282 => 63,  279 => 62,  262 => 61,  257 => 58,  241 => 55,  235 => 53,  229 => 51,  227 => 50,  221 => 49,  214 => 48,  211 => 47,  194 => 46,  190 => 44,  187 => 43,  184 => 42,  182 => 41,  179 => 40,  176 => 39,  174 => 38,  169 => 36,  165 => 34,  155 => 33,  144 => 30,  141 => 27,  131 => 26,  121 => 23,  111 => 22,  98 => 19,  88 => 18,  75 => 15,  65 => 14,  43 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block title %}
    {{ 'title_show'|trans({'%name%': admin.toString(object)|u.truncate(15, '...') }, 'SonataAdminBundle') }}
{% endblock %}

{% block navbar_title %}
    {{ 'title_show'|trans({'%name%': admin.toString(object)|u.truncate(100, '...') }, 'SonataAdminBundle') }}
{% endblock %}

{%- block actions -%}
    {% include '@SonataAdmin/CRUD/action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {{ knp_menu_render(admin.sidemenu(action), {
        'currentClass' : 'active',
        'template': get_global_template('tab_menu_template')
    }, 'twig') }}
{% endblock %}

{% block show %}
    <div class=\"sonata-ba-view\">

        {{ sonata_block_render_event('sonata.admin.show.top', { 'admin': admin, 'object': object }) }}

        {% set showtabs = admin.getshowtabs() %}
        {% set has_tab = (showtabs|length == 1 and showtabs|keys[0] != 'default') or showtabs|length > 1 %}

        {% if has_tab %}
            {% set tab_prefix = 'tab_' ~ admin.uniqid ~ '_' ~ random() %}
            {% set tab_query_index = app.request.query.get('_tab', 0)|split(\"_\")|last %}
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    {% for name, show_tab in showtabs %}
                        {% set _tab_name = tab_prefix ~ '_' ~ loop.index %}
                        <li{% if (not app.request.query.has('_tab') and loop.index == 1) or (tab_query_index == loop.index) %} class=\"active\"{% endif %}>
                            <a href=\"#{{ _tab_name }}\" class=\"changer-tab\" aria-controls=\"{{ _tab_name }}\" data-toggle=\"tab\">
                                {% if show_tab.translation_domain is defined and show_tab.translation_domain is same as(false) %}
                                    {{ show_tab.label }}
                                {% else %}
                                    {{ show_tab.label|trans({}, show_tab.translation_domain ?? admin.translationDomain) }}
                                {% endif %}
                            </a>
                        </li>
                    {% endfor %}
                </ul>

                <div class=\"tab-content\">
                    {% for code, show_tab in showtabs %}
                        {% set _tab_name = tab_prefix ~ '_' ~ loop.index %}
                        <div
                            class=\"tab-pane fade{% if (not app.request.query.has('_tab') and loop.first) or (tab_query_index == loop.index) %} in active{% endif %}\"
                            id=\"{{ _tab_name }}\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    {% if show_tab.description != false %}
                                        <p>{{ show_tab.description|raw }}</p>
                                    {% endif %}

                                    {% set groups = show_tab.groups %}
                                    {{ block('show_groups') }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        {% elseif showtabs['default'] is defined %}
            {% set groups = showtabs['default'].groups %}
            {{ block('show_groups') }}
        {% endif %}

    </div>

    {{ sonata_block_render_event('sonata.admin.show.bottom', { 'admin': admin, 'object': object }) }}
{% endblock %}

{% block show_groups %}
    <div class=\"row\">
        {% block field_row %}
            {% for code in groups %}
                {% set show_group = admin.showgroups[code] %}

                <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding|default(false) ? 'nopadding' }}\">
                    <div class=\"{{ show_group.box_class }}\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                {% block show_title %}
                                    {% if show_group.translation_domain is defined and show_group.translation_domain is same as(false) %}
                                        {{ show_group.label }}
                                    {% else %}
                                        {{ show_group.label|trans({}, show_group.translation_domain ?? admin.translationDomain) }}
                                    {% endif %}
                                {% endblock %}
                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                {% for show_field_name in show_group.fields %}
                                    {% block show_field %}
                                        <tr class=\"sonata-ba-view-container\">
                                            {% if elements[show_field_name] is defined %}
                                                {{ elements[show_field_name]|render_view_element(object) }}
                                            {% endif %}
                                        </tr>
                                    {% endblock %}
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% endblock %}

    </div>
{% endblock %}
", "@SonataAdmin/CRUD/base_show.html.twig", "W:\\domains\\Taptima_Backend\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\CRUD\\base_show.html.twig");
    }
}
