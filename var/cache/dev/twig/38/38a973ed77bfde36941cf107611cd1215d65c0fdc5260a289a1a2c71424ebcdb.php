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

/* @SonataAdmin/CRUD/base_list.html.twig */
class __TwigTemplate_7681be3226df0ed3ffcf608875c0890a9d344693007d6012593de7b7b9bb6be4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'actions' => [$this, 'block_actions'],
            'tab_menu' => [$this, 'block_tab_menu'],
            'title' => [$this, 'block_title'],
            'navbar_title' => [$this, 'block_navbar_title'],
            'list_table' => [$this, 'block_list_table'],
            'list_header' => [$this, 'block_list_header'],
            'table' => [$this, 'block_table'],
            'table_header' => [$this, 'block_table_header'],
            'table_body' => [$this, 'block_table_body'],
            'table_footer' => [$this, 'block_table_footer'],
            'no_result_content' => [$this, 'block_no_result_content'],
            'list_footer' => [$this, 'block_list_footer'],
            'batch' => [$this, 'block_batch'],
            'batch_javascript' => [$this, 'block_batch_javascript'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'pager_results' => [$this, 'block_pager_results'],
            'pager_links' => [$this, 'block_pager_links'],
            'list_filters_actions' => [$this, 'block_list_filters_actions'],
            'list_filters' => [$this, 'block_list_filters'],
            'sonata_list_filter_group_class' => [$this, 'block_sonata_list_filter_group_class'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new RuntimeError('Variable "base_template" does not exist.', 12, $this->source); })()), "@SonataAdmin/CRUD/base_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list.html.twig"));

        // line 34
        $context["datagrid_has_results"] = (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 34, $this->source); })()), "datagrid", [], "any", false, false, false, 34), "results", [], "any", false, false, false, 34)), 0));
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "@SonataAdmin/CRUD/base_list.html.twig", 15)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render(twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 19, $this->source); })()), "sidemenu", [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 19, $this->source); })())], "method", false, false, false, 19), ["currentClass" => "active", "template" => $this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getGlobalTemplate("tab_menu_template")], "twig");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 26
        echo "    ";
        (((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 26, $this->source); })()), "isChild", [], "any", false, false, false, 26) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 26, $this->source); })()), "parent", [], "any", false, false, false, 26), "subject", [], "any", false, false, false, 26))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_edit", ["%name%" => twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 26, $this->source); })()), "parent", [], "any", false, false, false, 26), "toString", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 26, $this->source); })()), "parent", [], "any", false, false, false, 26), "subject", [], "any", false, false, false, 26)], "method", false, false, false, 26)), "truncate", [0 => 15, 1 => "..."], "method", false, false, false, 26)], "SonataAdminBundle"), "html", null, true))) : (print ("")));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_navbar_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 30
        echo "    ";
        (((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 30, $this->source); })()), "isChild", [], "any", false, false, false, 30) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 30, $this->source); })()), "parent", [], "any", false, false, false, 30), "subject", [], "any", false, false, false, 30))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_edit", ["%name%" => twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 30, $this->source); })()), "parent", [], "any", false, false, false, 30), "toString", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 30, $this->source); })()), "parent", [], "any", false, false, false, 30), "subject", [], "any", false, false, false, 30)], "method", false, false, false, 30)), "truncate", [0 => 100, 1 => "..."], "method", false, false, false, 30)], "SonataAdminBundle"), "html", null, true))) : (print ("")));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_list_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_table"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_table"));

        // line 37
        echo "    <div class=\"col-xs-12 col-md-12\">
        ";
        // line 38
        $context["batchactions"] = twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 38, $this->source); })()), "batchactions", [], "any", false, false, false, 38);
        // line 39
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 39, $this->source); })()), "hasRoute", [0 => "batch"], "method", false, false, false, 39) && twig_length_filter($this->env, (isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new RuntimeError('Variable "batchactions" does not exist.', 39, $this->source); })())))) {
            // line 40
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 40, $this->source); })()), "generateUrl", [0 => "batch", 1 => ["filter" => twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 40, $this->source); })()), "filterParameters", [], "any", false, false, false, 40)]], "method", false, false, false, 40), "html", null, true);
            echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "\">
        ";
        }
        // line 43
        echo "
        ";
        // line 45
        echo "        <div class=\"box box-primary\"";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 45, $this->source); })()), "datagrid", [], "any", false, false, false, 45), "pager", [], "any", false, false, false, 45), "lastPage", [], "any", false, false, false, 45), 1))) {
            echo " style=\"margin-bottom: 100px;\"";
        }
        echo ">
            <div class=\"box-body";
        // line 46
        if ((isset($context["datagrid_has_results"]) || array_key_exists("datagrid_has_results", $context) ? $context["datagrid_has_results"] : (function () { throw new RuntimeError('Variable "datagrid_has_results" does not exist.', 46, $this->source); })())) {
            echo " table-responsive no-padding";
        }
        echo "\">
                ";
        // line 47
        echo $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->renderEvent("sonata.admin.list.table.top", ["admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 47, $this->source); })())]);
        echo "

                ";
        // line 49
        $this->displayBlock('list_header', $context, $blocks);
        // line 50
        echo "
                ";
        // line 51
        if ((isset($context["datagrid_has_results"]) || array_key_exists("datagrid_has_results", $context) ? $context["datagrid_has_results"] : (function () { throw new RuntimeError('Variable "datagrid_has_results" does not exist.', 51, $this->source); })())) {
            // line 52
            echo "                    ";
            $this->displayBlock('table', $context, $blocks);
            // line 115
            echo "                ";
        } else {
            // line 116
            echo "                    ";
            $this->displayBlock('no_result_content', $context, $blocks);
            // line 140
            echo "                ";
        }
        // line 141
        echo "
                ";
        // line 142
        echo $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->renderEvent("sonata.admin.list.table.bottom", ["admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 142, $this->source); })())]);
        echo "
            </div>
            ";
        // line 144
        $this->displayBlock('list_footer', $context, $blocks);
        // line 249
        echo "        </div>
        ";
        // line 250
        if ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 250, $this->source); })()), "hasRoute", [0 => "batch"], "method", false, false, false, 250) && twig_length_filter($this->env, (isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new RuntimeError('Variable "batchactions" does not exist.', 250, $this->source); })())))) {
            // line 251
            echo "            </form>
        ";
        }
        // line 253
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_list_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 53
        echo "                        <table class=\"table table-bordered table-striped table-hover sonata-ba-list\">
                        ";
        // line 54
        $this->displayBlock('table_header', $context, $blocks);
        // line 104
        echo "
                        ";
        // line 105
        $this->displayBlock('table_body', $context, $blocks);
        // line 110
        echo "
                        ";
        // line 111
        $this->displayBlock('table_footer', $context, $blocks);
        // line 113
        echo "                    </table>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_table_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_header"));

        // line 55
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 57, $this->source); })()), "list", [], "any", false, false, false, 57), "getElements", [], "method", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 58
            echo "                                        ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 58, $this->source); })()), "hasRoute", [0 => "batch"], "method", false, false, false, 58) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["field_description"], "name", [], "any", false, false, false, 58), twig_constant("Sonata\\AdminBundle\\Datagrid\\ListMapper::NAME_BATCH")))) && (1 === twig_compare(twig_length_filter($this->env, (isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new RuntimeError('Variable "batchactions" does not exist.', 58, $this->source); })())), 0)))) {
                // line 59
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 62
$context["field_description"], "name", [], "any", false, false, false, 62), twig_constant("Sonata\\AdminBundle\\Datagrid\\ListMapper::NAME_SELECT")))) {
                // line 63
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 64
$context["field_description"], "name", [], "any", false, false, false, 64), twig_constant("Sonata\\AdminBundle\\Datagrid\\ListMapper::NAME_ACTIONS"))) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "isXmlHttpRequest", [], "any", false, false, false, 64))) {
                // line 65
                echo "                                            ";
                // line 66
                echo "                                            ";
                // line 67
                echo "                                        ";
            } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["field_description"], "getOption", [0 => "ajax_hidden"], "method", false, false, false, 67), true)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, false, 67), "isXmlHttpRequest", [], "any", false, false, false, 67))) {
                // line 68
                echo "                                            ";
                // line 69
                echo "                                        ";
            } else {
                // line 70
                echo "                                            ";
                $context["sortable"] = false;
                // line 71
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, $context["field_description"], "option", [0 => "sortable", 1 => false], "method", false, false, false, 71)) {
                    // line 72
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 73
                    echo "                                                ";
                    $context["sort_parameters"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 73, $this->source); })()), "datagrid", [], "any", false, false, false, 73), "sortparameters", [0 => $context["field_description"]], "method", false, false, false, 73);
                    // line 74
                    echo "                                                ";
                    $context["current"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, true, false, 74), "values", [], "any", false, true, false, 74), twig_constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::SORT_BY"), [], "array", true, true, false, 74) && ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 75
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 75, $this->source); })()), "datagrid", [], "any", false, false, false, 75), "values", [], "any", false, false, false, 75), twig_constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::SORT_BY"), [], "array", false, false, false, 75), $context["field_description"])) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 76
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 76, $this->source); })()), "datagrid", [], "any", false, false, false, 76), "values", [], "any", false, false, false, 76), twig_constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::SORT_BY"), [], "array", false, false, false, 76), "name", [], "any", false, false, false, 76), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sort_parameters"]) || array_key_exists("sort_parameters", $context) ? $context["sort_parameters"] : (function () { throw new RuntimeError('Variable "sort_parameters" does not exist.', 76, $this->source); })()), "filter", [], "any", false, false, false, 76), twig_constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::SORT_BY"), [], "array", false, false, false, 76)))));
                    // line 77
                    echo "                                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 77, $this->source); })())) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 78
                    echo "                                                ";
                    $context["sort_by"] = (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 78, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 78, $this->source); })()), "datagrid", [], "any", false, false, false, 78), "values", [], "any", false, false, false, 78), twig_constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::SORT_ORDER"), [], "array", false, false, false, 78)) : (twig_get_attribute($this->env, $this->source, $context["field_description"], "option", [0 => twig_constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::SORT_ORDER"), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sort_parameters"]) || array_key_exists("sort_parameters", $context) ? $context["sort_parameters"] : (function () { throw new RuntimeError('Variable "sort_parameters" does not exist.', 78, $this->source); })()), "filter", [], "any", false, false, false, 78), twig_constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::SORT_ORDER"), [], "array", false, false, false, 78)], "method", false, false, false, 78)));
                    // line 79
                    echo "                                            ";
                }
                // line 80
                echo "
                                            ";
                // line 81
                ob_start();
                // line 82
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field_description"], "type", [], "any", false, false, false, 82), "html", null, true);
                if ((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 82, $this->source); })())) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 82, $this->source); })())), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) || array_key_exists("sort_active_class", $context) ? $context["sort_active_class"] : (function () { throw new RuntimeError('Variable "sort_active_class" does not exist.', 82, $this->source); })()), "html", null, true);
                }
                if (twig_get_attribute($this->env, $this->source, $context["field_description"], "option", [0 => "header_class"], "method", false, false, false, 82)) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field_description"], "option", [0 => "header_class"], "method", false, false, false, 82), "html", null, true);
                }
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["field_description"], "option", [0 => "header_style"], "method", false, false, false, 82)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field_description"], "option", [0 => "header_style"], "method", false, false, false, 82), "html", null, true);
                    echo "\"";
                }
                echo ">
                                                    ";
                // line 83
                if ((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 83, $this->source); })())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 83, $this->source); })()), "generateUrl", [0 => "list", 1 => twig_array_merge((isset($context["sort_parameters"]) || array_key_exists("sort_parameters", $context) ? $context["sort_parameters"] : (function () { throw new RuntimeError('Variable "sort_parameters" does not exist.', 83, $this->source); })()), ["_list_mode" => twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 83, $this->source); })()), "getListMode", [], "method", false, false, false, 83)])], "method", false, false, false, 83), "html", null, true);
                    echo "\">";
                }
                // line 84
                echo "                                                    ";
                if (twig_get_attribute($this->env, $this->source, $context["field_description"], "getOption", [0 => "label_icon"], "method", false, false, false, 84)) {
                    // line 85
                    echo "                                                        <span class=\"sonata-ba-list-field-header-label-icon\">
                                                            ";
                    // line 86
                    echo $this->extensions['Sonata\AdminBundle\Twig\Extension\IconExtension']->parseIcon(twig_get_attribute($this->env, $this->source, $context["field_description"], "getOption", [0 => "label_icon"], "method", false, false, false, 86));
                    echo "
                                                        </span>
                                                    ";
                }
                // line 89
                echo "                                                    ";
                if ( !(twig_get_attribute($this->env, $this->source, $context["field_description"], "label", [], "any", false, false, false, 89) === false)) {
                    // line 90
                    echo "                                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["field_description"], "translationDomain", [], "any", false, false, false, 90) === false)) {
                        // line 91
                        echo "                                                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field_description"], "label", [], "any", false, false, false, 91), "html", null, true);
                        echo "
                                                        ";
                    } else {
                        // line 93
                        echo "                                                            ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["field_description"], "label", [], "any", false, false, false, 93), [], twig_get_attribute($this->env, $this->source, $context["field_description"], "translationDomain", [], "any", false, false, false, 93)), "html", null, true);
                        echo "
                                                        ";
                    }
                    // line 95
                    echo "                                                    ";
                }
                // line 96
                echo "                                                    ";
                if ((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 96, $this->source); })())) {
                    echo "</a>";
                }
                // line 97
                echo "                                                </th>
                                            ";
                $___internal_ff72a085f59f3a318b76045a741a324bcdeaff5a57a96e918890cc55339e1352_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 81
                echo twig_spaceless($___internal_ff72a085f59f3a318b76045a741a324bcdeaff5a57a96e918890cc55339e1352_);
                // line 99
                echo "                                        ";
            }
            // line 100
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                                </tr>
                            </thead>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 105
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        // line 106
        echo "                            <tbody>
                                ";
        // line 107
        $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate(("outer_list_rows_" . twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 107, $this->source); })()), "getListMode", [], "method", false, false, false, 107)), twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 107, $this->source); })()), "code", [], "any", false, false, false, 107)), "@SonataAdmin/CRUD/base_list.html.twig", 107)->display($context);
        // line 108
        echo "                            </tbody>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_table_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_footer"));

        // line 112
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 116
    public function block_no_result_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "no_result_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "no_result_content"));

        // line 117
        echo "                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fas fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no_result", [], "SonataAdminBundle"), "html", null, true);
        echo "</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <div class=\"progress-description\">
                                    <ul class=\"list-inline\">";
        // line 126
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 126, $this->source); })()), "datagrid", [], "any", false, false, false, 126), "pager", [], "any", false, false, false, 126), "countResults", [], "method", false, false, false, 126), 0))) {
            // line 127
            echo "<li>
                                                <a href=\"";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 128, $this->source); })()), "generateUrl", [0 => "list", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 128, $this->source); })()), "datagrid", [], "any", false, false, false, 128), "getPaginationParameters", [0 => 1], "method", false, false, false, 128)], "method", false, false, false, 128), "html", null, true);
            echo "\">";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("go_to_the_first_page", [], "SonataAdminBundle"), "html", null, true);
            // line 130
            echo "</a>
                                            </li>";
        } elseif ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 132
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "request", [], "any", false, false, false, 132), "xmlHttpRequest", [], "any", false, false, false, 132)) {
            // line 133
            $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("button_create", twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 133, $this->source); })()), "code", [], "any", false, false, false, 133)), "@SonataAdmin/CRUD/base_list.html.twig", 133)->display($context);
        }
        // line 135
        echo "</ul>
                                </div>
                            </div><!-- /.info-box-content -->
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 144
    public function block_list_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_footer"));

        // line 145
        echo "                ";
        if ((isset($context["datagrid_has_results"]) || array_key_exists("datagrid_has_results", $context) ? $context["datagrid_has_results"] : (function () { throw new RuntimeError('Variable "datagrid_has_results" does not exist.', 145, $this->source); })())) {
            // line 146
            echo "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 148
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "request", [], "any", false, false, false, 148), "isXmlHttpRequest", [], "any", false, false, false, 148)) {
                // line 149
                echo "                                <div class=\"pull-left\">
                                    ";
                // line 150
                if ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 150, $this->source); })()), "hasRoute", [0 => "batch"], "method", false, false, false, 150) && (1 === twig_compare(twig_length_filter($this->env, (isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new RuntimeError('Variable "batchactions" does not exist.', 150, $this->source); })())), 0)))) {
                    // line 151
                    echo "                                        ";
                    $this->displayBlock('batch', $context, $blocks);
                    // line 205
                    echo "                                    ";
                }
                // line 206
                echo "                                </div>

                                <div class=\"pull-right\">
                                    ";
                // line 209
                if (((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 209, $this->source); })()), "hasRoute", [0 => "export"], "method", false, false, false, 209) && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 209, $this->source); })()), "hasAccess", [0 => "export"], "method", false, false, false, 209)) && twig_length_filter($this->env, (isset($context["export_formats"]) || array_key_exists("export_formats", $context) ? $context["export_formats"] : (function () { throw new RuntimeError('Variable "export_formats" does not exist.', 209, $this->source); })())))) {
                    // line 210
                    echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fas fa-share-square\" aria-hidden=\"true\"></i>
                                                ";
                    // line 213
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_export_download", [], "SonataAdminBundle"), "html", null, true);
                    echo "
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 217
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["export_formats"]) || array_key_exists("export_formats", $context) ? $context["export_formats"] : (function () { throw new RuntimeError('Variable "export_formats" does not exist.', 217, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                        // line 218
                        echo "                                                <li>
                                                    <a href=\"";
                        // line 219
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 219, $this->source); })()), "generateUrl", [0 => "export", 1 => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 219, $this->source); })()), "datagrid", [], "any", false, false, false, 219), "paginationparameters", [0 => 0], "method", false, false, false, 219) + ["format" => $context["format"]])], "method", false, false, false, 219), "html", null, true);
                        echo "\">
                                                        <i class=\"fas fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        ";
                        // line 221
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("export_format_" . $context["format"]), [], "SonataAdminBundle"), "html", null, true);
                        echo "
                                                    </a>
                                                </li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 225
                    echo "                                            </ul>
                                        </div>

                                        ";
                    // line 228
                    if ( !twig_test_empty(                    $this->renderBlock("pager_results", $context, $blocks))) {
                        // line 229
                        echo "                                            &nbsp;-&nbsp;
                                        ";
                    }
                    // line 231
                    echo "                                    ";
                }
                // line 232
                echo "
                                    ";
                // line 233
                $this->displayBlock('pager_results', $context, $blocks);
                // line 236
                echo "                                </div>
                            ";
            }
            // line 238
            echo "                        </div>

                        ";
            // line 240
            $this->displayBlock('pager_links', $context, $blocks);
            // line 246
            echo "                    </div>
                ";
        }
        // line 248
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 151
    public function block_batch($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch"));

        // line 152
        echo "                                            <script>
                                                ";
        // line 153
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 181
        echo "                                            </script>

                                        ";
        // line 183
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 202
        echo "
                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_batch", [], "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 153
    public function block_batch_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_javascript"));

        // line 154
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;

                                                            if (Admin.get_config('USE_ICHECK')) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 183
    public function block_batch_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 184
        echo "                                            <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 184, $this->source); })()), "uniqid", [], "any", false, false, false, 184), "html", null, true);
        echo "_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 185, $this->source); })()), "uniqid", [], "any", false, false, false, 185), "html", null, true);
        echo "_all_elements\">
                                                ";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("all_elements", [], "SonataAdminBundle"), "html", null, true);
        echo "
                                                (";
        // line 187
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 187, $this->source); })()), "datagrid", [], "any", false, false, false, 187), "pager", [], "any", false, false, false, 187), "countResults", [], "method", false, false, false, 187), "html", null, true);
        echo ")
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new RuntimeError('Variable "batchactions" does not exist.', 191, $this->source); })()));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 192
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">
                                                        ";
            // line 193
            if ((twig_get_attribute($this->env, $this->source, $context["options"], "translation_domain", [], "any", true, true, false, 193) && (twig_get_attribute($this->env, $this->source, $context["options"], "translation_domain", [], "any", false, false, false, 193) === false))) {
                // line 194
                echo "                                                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["options"], "label", [], "any", false, false, false, 194), "html", null, true);
                echo "
                                                        ";
            } else {
                // line 196
                echo "                                                            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["options"], "label", [], "any", false, false, false, 196), [], (((twig_get_attribute($this->env, $this->source, $context["options"], "translation_domain", [], "any", true, true, false, 196) &&  !(null === twig_get_attribute($this->env, $this->source, $context["options"], "translation_domain", [], "any", false, false, false, 196)))) ? (twig_get_attribute($this->env, $this->source, $context["options"], "translation_domain", [], "any", false, false, false, 196)) : (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 196, $this->source); })()), "translationDomain", [], "any", false, false, false, 196)))), "html", null, true);
                echo "
                                                        ";
            }
            // line 198
            echo "                                                    </option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "                                            </select>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 233
    public function block_pager_results($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pager_results"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pager_results"));

        // line 234
        echo "                                        ";
        $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("pager_results", twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 234, $this->source); })()), "code", [], "any", false, false, false, 234)), "@SonataAdmin/CRUD/base_list.html.twig", 234)->display($context);
        // line 235
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 240
    public function block_pager_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pager_links"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pager_links"));

        // line 241
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 241, $this->source); })()), "datagrid", [], "any", false, false, false, 241), "pager", [], "any", false, false, false, 241), "haveToPaginate", [], "method", false, false, false, 241)) {
            // line 242
            echo "                                <hr/>
                                ";
            // line 243
            $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("pager_links", twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 243, $this->source); })()), "code", [], "any", false, false, false, 243)), "@SonataAdmin/CRUD/base_list.html.twig", 243)->display($context);
            // line 244
            echo "                            ";
        }
        // line 245
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 256
    public function block_list_filters_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_filters_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_filters_actions"));

        // line 257
        echo "    ";
        $context["displayableFilters"] = twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 257, $this->source); })()), "datagrid", [], "any", false, false, false, 257), "filters", [], "any", false, false, false, 257), function ($__filter__) use ($context, $macros) { $context["filter"] = $__filter__; return  !(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 257, $this->source); })()), "option", [0 => "show_filter"], "method", false, false, false, 257) === false); });
        // line 258
        if (twig_length_filter($this->env, (isset($context["displayableFilters"]) || array_key_exists("displayableFilters", $context) ? $context["displayableFilters"] : (function () { throw new RuntimeError('Variable "displayableFilters" does not exist.', 258, $this->source); })()))) {
            // line 259
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fas fa-filter\" aria-hidden=\"true\"></i>
                    ";
            // line 264
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_filters", [], "SonataAdminBundle"), "html", null, true);
            echo "
                    <span class=\"badge sonata-filter-count\"></span>
                    <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu dropdown-menu-scrollable\" role=\"menu\">
                    ";
            // line 270
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["displayableFilters"]) || array_key_exists("displayableFilters", $context) ? $context["displayableFilters"] : (function () { throw new RuntimeError('Variable "displayableFilters" does not exist.', 270, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 271
                echo "                        ";
                $context["filterDisplayed"] = (twig_get_attribute($this->env, $this->source, $context["filter"], "isActive", [], "method", false, false, false, 271) || (twig_get_attribute($this->env, $this->source, $context["filter"], "option", [0 => "show_filter"], "method", false, false, false, 271) === true));
                // line 272
                echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 273
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 273, $this->source); })()), "uniqid", [], "any", false, false, false, 273), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 273), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 273, $this->source); })()), "uniqid", [], "method", false, false, false, 273), "html", null, true);
                echo "\">
                                <i class=\"far ";
                // line 274
                echo (((isset($context["filterDisplayed"]) || array_key_exists("filterDisplayed", $context) ? $context["filterDisplayed"] : (function () { throw new RuntimeError('Variable "filterDisplayed" does not exist.', 274, $this->source); })())) ? ("fa-check-square") : ("fa-square"));
                echo "\"></i>
                                ";
                // line 275
                if ( !(twig_get_attribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 275) === false)) {
                    // line 276
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 276) === false)) {
                        // line 277
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 277), "html", null, true);
                        echo "
                                    ";
                    } else {
                        // line 279
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 279), twig_get_attribute($this->env, $this->source, $context["filter"], "option", [0 => "label_translation_parameters", 1 => []], "method", false, false, false, 279), (((twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", true, true, false, 279) &&  !(null === twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 279)))) ? (twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 279)) : (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 279, $this->source); })()), "translationDomain", [], "any", false, false, false, 279)))), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 281
                    echo "                                ";
                }
                // line 282
                echo "                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "                </ul>
            </li>
        </ul>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 291
    public function block_list_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_filters"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_filters"));

        // line 292
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 292, $this->source); })()), "datagrid", [], "any", false, false, false, 292), "filters", [], "any", false, false, false, 292)) {
            // line 293
            echo "        ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 293, $this->source); })()), [0 => $this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("filter", twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 293, $this->source); })()), "code", [], "any", false, false, false, 293))], true);
            // line 294
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 295
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 295, $this->source); })()), "datagrid", [], "any", false, false, false, 295), "hasDisplayableFilters", [], "any", false, false, false, 295)) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 295, $this->source); })()), "uniqid", [], "method", false, false, false, 295), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form
                        class=\"sonata-filter-form form-horizontal ";
            // line 299
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 299, $this->source); })()), "isChild", [], "any", false, false, false, 299) && (0 === twig_compare(1, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 299, $this->source); })()), "datagrid", [], "any", false, false, false, 299), "filters", [], "any", false, false, false, 299)))))) ? ("hide") : (""));
            echo "\"
                        action=\"";
            // line 300
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 300, $this->source); })()), "generateUrl", [0 => "list"], "method", false, false, false, 300), "html", null, true);
            echo "\"
                        method=\"GET\"
                        role=\"form\"
                        data-default-values=\"";
            // line 303
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 303, $this->source); })()), "defaultFilterParameters", [], "any", false, false, false, 303)), "html", null, true);
            echo "\"
                    >
                        ";
            // line 305
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 305, $this->source); })()), 'errors');
            echo "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 309
            $context["withAdvancedFilter"] = false;
            // line 310
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 310, $this->source); })()), "datagrid", [], "any", false, false, false, 310), "filters", [], "any", false, false, false, 310));
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
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 311
                echo "                                    ";
                $context["filterDisplayed"] = (twig_get_attribute($this->env, $this->source, $context["filter"], "isActive", [], "method", false, false, false, 311) || (twig_get_attribute($this->env, $this->source, $context["filter"], "option", [0 => "show_filter"], "method", false, false, false, 311) === true));
                // line 312
                echo "                                    ";
                $context["filterCanBeDisplayed"] =  !(twig_get_attribute($this->env, $this->source, $context["filter"], "option", [0 => "show_filter"], "method", false, false, false, 312) === false);
                // line 313
                echo "                                    <div class=\"form-group ";
                $this->displayBlock('sonata_list_filter_group_class', $context, $blocks);
                echo "\" id=\"filter-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 313, $this->source); })()), "uniqid", [], "any", false, false, false, 313), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 313), "html", null, true);
                echo "\" sonata-filter=\"";
                echo (((isset($context["filterCanBeDisplayed"]) || array_key_exists("filterCanBeDisplayed", $context) ? $context["filterCanBeDisplayed"] : (function () { throw new RuntimeError('Variable "filterCanBeDisplayed" does not exist.', 313, $this->source); })())) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if ((isset($context["filterDisplayed"]) || array_key_exists("filterDisplayed", $context) ? $context["filterDisplayed"] : (function () { throw new RuntimeError('Variable "filterDisplayed" does not exist.', 313, $this->source); })())) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                        ";
                // line 314
                if ( !(twig_get_attribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 314) === false)) {
                    // line 315
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 315, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 315), [], "array", false, false, false, 315), "children", [], "any", false, false, false, 315), "value", [], "array", false, false, false, 315), "vars", [], "any", false, false, false, 315), "id", [], "any", false, false, false, 315), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">
                                                ";
                    // line 316
                    if ((twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 316) === false)) {
                        // line 317
                        echo "                                                    ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 317), "html", null, true);
                        echo "
                                                ";
                    } else {
                        // line 319
                        echo "                                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 319), twig_get_attribute($this->env, $this->source, $context["filter"], "option", [0 => "label_translation_parameters", 1 => []], "method", false, false, false, 319), (((twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", true, true, false, 319) &&  !(null === twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 319)))) ? (twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 319)) : (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 319, $this->source); })()), "translationDomain", [], "any", false, false, false, 319)))), "html", null, true);
                        echo "
                                                ";
                    }
                    // line 321
                    echo "                                            </label>
                                        ";
                }
                // line 323
                echo "                                        ";
                $context["attr"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 323), [], "array", false, true, false, 323), "children", [], "any", false, true, false, 323), "type", [], "array", false, true, false, 323), "vars", [], "any", false, true, false, 323), "attr", [], "any", true, true, false, 323)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 323), [], "array", false, true, false, 323), "children", [], "any", false, true, false, 323), "type", [], "array", false, true, false, 323), "vars", [], "any", false, true, false, 323), "attr", [], "any", false, false, false, 323), [])) : ([]));
                // line 324
                echo "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 326
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 326, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 326), [], "array", false, false, false, 326), "children", [], "any", false, false, false, 326), "type", [], "array", false, false, false, 326), 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 326, $this->source); })())]);
                echo "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 330
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 330, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 330), [], "array", false, false, false, 330), "children", [], "any", false, false, false, 330), "value", [], "array", false, false, false, 330), 'widget');
                echo "
                                        </div>

                                        ";
                // line 333
                if ((isset($context["filterCanBeDisplayed"]) || array_key_exists("filterCanBeDisplayed", $context) ? $context["filterCanBeDisplayed"] : (function () { throw new RuntimeError('Variable "filterCanBeDisplayed" does not exist.', 333, $this->source); })())) {
                    // line 334
                    echo "                                            <div class=\"col-sm-1\">
                                                <label class=\"control-label\">
                                                    <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 336
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 336, $this->source); })()), "uniqid", [], "any", false, false, false, 336), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 336), "html", null, true);
                    echo "\" filter-container=\"filter-container-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 336, $this->source); })()), "uniqid", [], "method", false, false, false, 336), "html", null, true);
                    echo "\">
                                                        <i class=\"fas fa-minus-circle\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </label>
                                            </div>
                                        ";
                }
                // line 342
                echo "                                    </div>

                                    ";
                // line 344
                if (twig_get_attribute($this->env, $this->source, $context["filter"], "option", [0 => "advanced_filter"], "method", false, false, false, 344)) {
                    // line 345
                    echo "                                        ";
                    $context["withAdvancedFilter"] = true;
                    // line 346
                    echo "                                    ";
                }
                // line 347
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 348
            echo "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[";
            // line 350
            echo twig_escape_filter($this->env, twig_constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::PAGE"), "html", null, true);
            echo "]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 352
            $context["foo"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 352, $this->source); })()), twig_constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::PAGE"), [], "array", false, false, false, 352), "setRendered", [], "method", false, false, false, 352);
            // line 353
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 353, $this->source); })()), 'rest');
            echo "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-filter\" aria-hidden=\"true\"></i> ";
            // line 357
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_filter", [], "SonataAdminBundle"), "html", null, true);
            echo "
                                    </button>

                                    <a class=\"btn btn-default\" href=\"";
            // line 360
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 360, $this->source); })()), "generateUrl", [0 => "list", 1 => ["filters" => "reset"]], "method", false, false, false, 360), "html", null, true);
            echo "\">
                                        ";
            // line 361
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_reset_filter", [], "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>

                                ";
            // line 365
            if ((isset($context["withAdvancedFilter"]) || array_key_exists("withAdvancedFilter", $context) ? $context["withAdvancedFilter"] : (function () { throw new RuntimeError('Variable "withAdvancedFilter" does not exist.', 365, $this->source); })())) {
                // line 366
                echo "                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fas fa-cogs\" aria-hidden=\"true\"></i>
                                            ";
                // line 369
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_advanced_filters", [], "SonataAdminBundle"), "html", null, true);
                echo "
                                        </a>
                                    </div>
                                ";
            }
            // line 373
            echo "                            </div>
                        </div>

                        ";
            // line 376
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 376, $this->source); })()), "persistentParameters", [], "any", false, false, false, 376));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 377
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 379
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 313
    public function block_sonata_list_filter_group_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1270 => 313,  1255 => 379,  1244 => 377,  1240 => 376,  1235 => 373,  1228 => 369,  1223 => 366,  1221 => 365,  1214 => 361,  1210 => 360,  1204 => 357,  1196 => 353,  1194 => 352,  1189 => 350,  1185 => 348,  1171 => 347,  1168 => 346,  1165 => 345,  1163 => 344,  1159 => 342,  1146 => 336,  1142 => 334,  1140 => 333,  1134 => 330,  1127 => 326,  1123 => 324,  1120 => 323,  1116 => 321,  1110 => 319,  1104 => 317,  1102 => 316,  1097 => 315,  1095 => 314,  1078 => 313,  1075 => 312,  1072 => 311,  1054 => 310,  1052 => 309,  1045 => 305,  1040 => 303,  1034 => 300,  1030 => 299,  1021 => 295,  1018 => 294,  1015 => 293,  1012 => 292,  1002 => 291,  988 => 285,  980 => 282,  977 => 281,  971 => 279,  965 => 277,  962 => 276,  960 => 275,  956 => 274,  948 => 273,  945 => 272,  942 => 271,  938 => 270,  929 => 264,  922 => 259,  920 => 258,  917 => 257,  907 => 256,  897 => 245,  894 => 244,  892 => 243,  889 => 242,  886 => 241,  876 => 240,  866 => 235,  863 => 234,  853 => 233,  842 => 200,  835 => 198,  829 => 196,  823 => 194,  821 => 193,  816 => 192,  812 => 191,  805 => 187,  801 => 186,  797 => 185,  792 => 184,  782 => 183,  746 => 154,  736 => 153,  724 => 203,  721 => 202,  719 => 183,  715 => 181,  713 => 153,  710 => 152,  700 => 151,  690 => 248,  686 => 246,  684 => 240,  680 => 238,  676 => 236,  674 => 233,  671 => 232,  668 => 231,  664 => 229,  662 => 228,  657 => 225,  647 => 221,  642 => 219,  639 => 218,  635 => 217,  628 => 213,  623 => 210,  621 => 209,  616 => 206,  613 => 205,  610 => 151,  608 => 150,  605 => 149,  603 => 148,  599 => 146,  596 => 145,  586 => 144,  572 => 135,  569 => 133,  567 => 132,  564 => 130,  562 => 129,  559 => 128,  556 => 127,  554 => 126,  546 => 120,  541 => 117,  531 => 116,  521 => 112,  511 => 111,  500 => 108,  498 => 107,  495 => 106,  485 => 105,  473 => 101,  467 => 100,  464 => 99,  462 => 81,  458 => 97,  453 => 96,  450 => 95,  444 => 93,  438 => 91,  435 => 90,  432 => 89,  426 => 86,  423 => 85,  420 => 84,  414 => 83,  393 => 82,  391 => 81,  388 => 80,  385 => 79,  382 => 78,  379 => 77,  377 => 76,  376 => 75,  374 => 74,  371 => 73,  368 => 72,  365 => 71,  362 => 70,  359 => 69,  357 => 68,  354 => 67,  352 => 66,  350 => 65,  348 => 64,  345 => 63,  343 => 62,  338 => 59,  335 => 58,  331 => 57,  327 => 55,  317 => 54,  306 => 113,  304 => 111,  301 => 110,  299 => 105,  296 => 104,  294 => 54,  291 => 53,  281 => 52,  263 => 49,  252 => 253,  248 => 251,  246 => 250,  243 => 249,  241 => 144,  236 => 142,  233 => 141,  230 => 140,  227 => 116,  224 => 115,  221 => 52,  219 => 51,  216 => 50,  214 => 49,  209 => 47,  203 => 46,  196 => 45,  193 => 43,  188 => 41,  183 => 40,  180 => 39,  178 => 38,  175 => 37,  165 => 36,  152 => 30,  142 => 29,  129 => 26,  119 => 25,  109 => 19,  99 => 18,  89 => 15,  79 => 14,  69 => 12,  67 => 34,  54 => 12,);
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

{%- block actions -%}
    {% include '@SonataAdmin/CRUD/action_buttons.html.twig' %}
{%- endblock -%}

{%- block tab_menu -%}
    {{ knp_menu_render(admin.sidemenu(action), {
        'currentClass': 'active',
        'template': get_global_template('tab_menu_template')
    }, 'twig') }}
{%- endblock -%}

{% block title %}
    {{ admin.isChild and admin.parent.subject ? 'title_edit'|trans({'%name%': admin.parent.toString(admin.parent.subject)|u.truncate(15, '...') }, 'SonataAdminBundle') : '' }}
{% endblock %}

{% block navbar_title %}
    {{ admin.isChild and admin.parent.subject ? 'title_edit'|trans({'%name%': admin.parent.toString(admin.parent.subject)|u.truncate(100, '...') }, 'SonataAdminBundle') : '' }}
{% endblock %}

{# Define the variable out of the block to prevent error if someone is overriding the list_table and not the list_footer #}
{% set datagrid_has_results = admin.datagrid.results|length > 0 %}

{% block list_table %}
    <div class=\"col-xs-12 col-md-12\">
        {% set batchactions = admin.batchactions %}
        {% if admin.hasRoute('batch') and batchactions|length %}
            <form action=\"{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">
        {% endif %}

        {# Add a margin if no pager to prevent dropdown cropping on window #}
        <div class=\"box box-primary\"{% if admin.datagrid.pager.lastPage == 1 %} style=\"margin-bottom: 100px;\"{% endif %}>
            <div class=\"box-body{% if datagrid_has_results %} table-responsive no-padding{% endif %}\">
                {{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}

                {% block list_header %}{% endblock %}

                {% if datagrid_has_results %}
                    {% block table %}
                        <table class=\"table table-bordered table-striped table-hover sonata-ba-list\">
                        {% block table_header %}
                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    {% for field_description in admin.list.getElements() %}
                                        {% if admin.hasRoute('batch') and field_description.name == constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\ListMapper::NAME_BATCH') and batchactions|length > 0 %}
                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        {% elseif field_description.name == constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\ListMapper::NAME_SELECT') %}
                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        {% elseif field_description.name == constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\ListMapper::NAME_ACTIONS') and app.request.isXmlHttpRequest %}
                                            {# NEXT_MAJOR: Remove this case in version 5 and recommend using the option `ajax_hidden` instead. #}
                                            {# Action buttons disabled in ajax view! #}
                                        {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}
                                            {# Disable fields with 'ajax_hidden' option set to true #}
                                        {% else %}
                                            {% set sortable = false %}
                                            {% if field_description.option('sortable', false) %}
                                                {% set sortable             = true %}
                                                {% set sort_parameters      = admin.datagrid.sortparameters(field_description) %}
                                                {% set current              = admin.datagrid.values[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::SORT_BY')] is defined
                                                    and (admin.datagrid.values[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::SORT_BY')] == field_description
                                                        or admin.datagrid.values[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::SORT_BY')].name == sort_parameters.filter[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::SORT_BY')]) %}
                                                {% set sort_active_class    = current ? 'sonata-ba-list-field-order-active' : '' %}
                                                {% set sort_by              = current ? admin.datagrid.values[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::SORT_ORDER')] : field_description.option(constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::SORT_ORDER'), sort_parameters.filter[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::SORT_ORDER')]) %}
                                            {% endif %}

                                            {% apply spaceless %}
                                                <th class=\"sonata-ba-list-field-header-{{ field_description.type }}{% if sortable %} sonata-ba-list-field-header-order-{{ sort_by|lower }} {{ sort_active_class }}{% endif %}{% if field_description.option('header_class') %} {{ field_description.option('header_class') }}{% endif %}\"{% if field_description.option('header_style') %} style=\"{{ field_description.option('header_style') }}\"{% endif %}>
                                                    {% if sortable %}<a href=\"{{ admin.generateUrl('list', sort_parameters|merge({_list_mode: admin.getListMode()})) }}\">{% endif %}
                                                    {% if field_description.getOption('label_icon') %}
                                                        <span class=\"sonata-ba-list-field-header-label-icon\">
                                                            {{ field_description.getOption('label_icon')|parse_icon }}
                                                        </span>
                                                    {% endif %}
                                                    {% if field_description.label is not same as(false) %}
                                                        {% if field_description.translationDomain is same as(false) %}
                                                            {{ field_description.label }}
                                                        {% else %}
                                                            {{ field_description.label|trans({}, field_description.translationDomain) }}
                                                        {% endif %}
                                                    {% endif %}
                                                    {% if sortable %}</a>{% endif %}
                                                </th>
                                            {% endapply %}
                                        {% endif %}
                                    {% endfor %}
                                </tr>
                            </thead>
                        {% endblock %}

                        {% block table_body %}
                            <tbody>
                                {% include get_admin_template('outer_list_rows_' ~ admin.getListMode(), admin.code) %}
                            </tbody>
                        {% endblock %}

                        {% block table_footer %}
                        {% endblock %}
                    </table>
                    {% endblock %}
                {% else %}
                    {% block no_result_content %}
                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fas fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">{{ 'no_result'|trans({}, 'SonataAdminBundle') }}</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <div class=\"progress-description\">
                                    <ul class=\"list-inline\">
                                        {%- if admin.datagrid.pager.countResults() > 0 -%}
                                            <li>
                                                <a href=\"{{ admin.generateUrl('list', admin.datagrid.getPaginationParameters(1)) }}\">
                                                    {{- 'go_to_the_first_page'|trans({}, 'SonataAdminBundle') -}}
                                                </a>
                                            </li>
                                        {%- elseif not app.request.xmlHttpRequest -%}
                                            {%- include get_admin_template('button_create', admin.code) -%}
                                        {%- endif -%}
                                    </ul>
                                </div>
                            </div><!-- /.info-box-content -->
                        </div>
                    {% endblock %}
                {% endif %}

                {{ sonata_block_render_event('sonata.admin.list.table.bottom', { 'admin': admin }) }}
            </div>
            {% block list_footer %}
                {% if datagrid_has_results %}
                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            {% if not app.request.isXmlHttpRequest %}
                                <div class=\"pull-left\">
                                    {% if admin.hasRoute('batch') and batchactions|length > 0 %}
                                        {% block batch %}
                                            <script>
                                                {% block batch_javascript %}
                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;

                                                            if (Admin.get_config('USE_ICHECK')) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                {% endblock %}
                                            </script>

                                        {% block batch_actions %}
                                            <label class=\"checkbox\" for=\"{{ admin.uniqid }}_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"{{ admin.uniqid }}_all_elements\">
                                                {{ 'all_elements'|trans({}, 'SonataAdminBundle') }}
                                                ({{ admin.datagrid.pager.countResults() }})
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                {% for action, options in batchactions %}
                                                    <option value=\"{{ action }}\">
                                                        {% if options.translation_domain is defined and options.translation_domain is same as(false) %}
                                                            {{ options.label }}
                                                        {% else %}
                                                            {{ options.label|trans({}, options.translation_domain ?? admin.translationDomain) }}
                                                        {% endif %}
                                                    </option>
                                                {% endfor %}
                                            </select>
                                        {% endblock %}

                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"{{ 'btn_batch'|trans({}, 'SonataAdminBundle') }}\">
                                        {% endblock %}
                                    {% endif %}
                                </div>

                                <div class=\"pull-right\">
                                    {% if admin.hasRoute('export') and admin.hasAccess('export') and export_formats|length %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fas fa-share-square\" aria-hidden=\"true\"></i>
                                                {{ \"label_export_download\"|trans({}, \"SonataAdminBundle\") }}
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                {% for format in export_formats %}
                                                <li>
                                                    <a href=\"{{ admin.generateUrl('export', admin.datagrid.paginationparameters(0) + {'format' : format}) }}\">
                                                        <i class=\"fas fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        {{ (\"export_format_\" ~ format)|trans({}, 'SonataAdminBundle') }}
                                                    </a>
                                                </li>
                                                {% endfor %}
                                            </ul>
                                        </div>

                                        {% if block('pager_results') is not empty %}
                                            &nbsp;-&nbsp;
                                        {% endif %}
                                    {% endif %}

                                    {% block pager_results %}
                                        {% include get_admin_template('pager_results', admin.code) %}
                                    {% endblock %}
                                </div>
                            {% endif %}
                        </div>

                        {% block pager_links %}
                            {% if admin.datagrid.pager.haveToPaginate() %}
                                <hr/>
                                {% include get_admin_template('pager_links', admin.code) %}
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
        {% if admin.hasRoute('batch') and batchactions|length %}
            </form>
        {% endif %}
    </div>
{% endblock %}

{% block list_filters_actions %}
    {% set displayableFilters = admin.datagrid.filters|filter(filter => filter.option('show_filter') is not same as (false)) %}
    {%- if displayableFilters|length %}
        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fas fa-filter\" aria-hidden=\"true\"></i>
                    {{ 'link_filters'|trans({}, 'SonataAdminBundle') }}
                    <span class=\"badge sonata-filter-count\"></span>
                    <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu dropdown-menu-scrollable\" role=\"menu\">
                    {% for filter in displayableFilters %}
                        {% set filterDisplayed = filter.isActive() or filter.option('show_filter') is same as (true) %}
                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" filter-container=\"filter-container-{{ admin.uniqid() }}\">
                                <i class=\"far {{ filterDisplayed ? 'fa-check-square' : 'fa-square' }}\"></i>
                                {% if filter.label is not same as(false) %}
                                    {% if filter.translationDomain is same as(false) %}
                                        {{ filter.label }}
                                    {% else %}
                                        {{ filter.label|trans(filter.option('label_translation_parameters', {}), filter.translationDomain ?? admin.translationDomain) }}
                                    {% endif %}
                                {% endif %}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </li>
        </ul>
    {% endif -%}
{% endblock %}

{% block list_filters %}
    {% if admin.datagrid.filters %}
        {% form_theme form get_admin_template('filter', admin.code) %}

        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: {{ admin.datagrid.hasDisplayableFilters ? 'block' : 'none' }}\" id=\"filter-container-{{ admin.uniqid() }}\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form
                        class=\"sonata-filter-form form-horizontal {{ admin.isChild and 1 == admin.datagrid.filters|length ? 'hide' : '' }}\"
                        action=\"{{ admin.generateUrl('list') }}\"
                        method=\"GET\"
                        role=\"form\"
                        data-default-values=\"{{ admin.defaultFilterParameters|json_encode }}\"
                    >
                        {{ form_errors(form) }}

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                {% set withAdvancedFilter = false %}
                                {% for filter in admin.datagrid.filters %}
                                    {% set filterDisplayed = filter.isActive() or filter.option('show_filter') is same as (true) %}
                                    {% set filterCanBeDisplayed = filter.option('show_filter') is not same as(false) %}
                                    <div class=\"form-group {% block sonata_list_filter_group_class %}{% endblock %}\" id=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" sonata-filter=\"{{ filterCanBeDisplayed ? 'true' : 'false' }}\" style=\"display: {% if filterDisplayed %}block{% else %}none{% endif %}\">
                                        {% if filter.label is not same as(false) %}
                                            <label for=\"{{ form[filter.formName].children['value'].vars.id }}\" class=\"col-sm-3 control-label\">
                                                {% if filter.translationDomain is same as(false) %}
                                                    {{ filter.label }}
                                                {% else %}
                                                    {{ filter.label|trans(filter.option('label_translation_parameters', {}), filter.translationDomain ?? admin.translationDomain) }}
                                                {% endif %}
                                            </label>
                                        {% endif %}
                                        {% set attr = form[filter.formName].children['type'].vars.attr|default({}) %}

                                        <div class=\"col-sm-4 advanced-filter\">
                                            {{ form_widget(form[filter.formName].children['type'], {'attr':  attr}) }}
                                        </div>

                                        <div class=\"col-sm-4\">
                                            {{ form_widget(form[filter.formName].children['value']) }}
                                        </div>

                                        {% if filterCanBeDisplayed %}
                                            <div class=\"col-sm-1\">
                                                <label class=\"control-label\">
                                                    <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" filter-container=\"filter-container-{{ admin.uniqid() }}\">
                                                        <i class=\"fas fa-minus-circle\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </label>
                                            </div>
                                        {% endif %}
                                    </div>

                                    {% if filter.option('advanced_filter') %}
                                        {% set withAdvancedFilter = true %}
                                    {% endif %}
                                {% endfor %}
                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[{{ constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::PAGE') }}]\" id=\"filter__page\" value=\"1\">

                                {% set foo = form[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::PAGE')].setRendered() %}
                                {{ form_rest(form) }}

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-filter\" aria-hidden=\"true\"></i> {{ 'btn_filter'|trans({}, 'SonataAdminBundle') }}
                                    </button>

                                    <a class=\"btn btn-default\" href=\"{{ admin.generateUrl('list', {filters: 'reset'}) }}\">
                                        {{ 'link_reset_filter'|trans({}, 'SonataAdminBundle') }}
                                    </a>
                                </div>

                                {% if withAdvancedFilter %}
                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fas fa-cogs\" aria-hidden=\"true\"></i>
                                            {{ 'btn_advanced_filters'|trans({}, 'SonataAdminBundle') }}
                                        </a>
                                    </div>
                                {% endif %}
                            </div>
                        </div>

                        {% for paramKey, paramValue in admin.persistentParameters %}
                            <input type=\"hidden\" name=\"{{ paramKey }}\" value=\"{{ paramValue }}\">
                        {% endfor %}
                    </form>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/base_list.html.twig", "W:\\domains\\Taptima_Backend\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\CRUD\\base_list.html.twig");
    }
}
