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

/* @SonataAdmin/Block/block_admin_preview.html.twig */
class __TwigTemplate_e89058a25c52bebe97c6947be69e49c6434a755c9a685e3227b5c9d2133b08f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'block' => [$this, 'block_block'],
            'list_header' => [$this, 'block_list_header'],
            'table_header' => [$this, 'block_table_header'],
            'table_body' => [$this, 'block_table_body'],
            'table_footer' => [$this, 'block_table_footer'],
            'no_result_content' => [$this, 'block_no_result_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new RuntimeError('Variable "sonata_block" does not exist.', 12, $this->source); })()), "templates", [], "any", false, false, false, 12), "block_base", [], "any", false, false, false, 12), "@SonataAdmin/Block/block_admin_preview.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_admin_preview.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_admin_preview.html.twig"));

        // line 14
        $context["translation_domain"] = (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "translation_domain", [], "any", true, true, false, 14) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "translation_domain", [], "any", false, false, false, 14)))) ? (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "translation_domain", [], "any", false, false, false, 14)) : (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 14, $this->source); })()), "translationDomain", [], "any", false, false, false, 14)));
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block"));

        // line 17
        echo "    ";
        $context["inlineAnchor"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 17, $this->source); })()), "text", [], "any", false, false, false, 17), ["." => "_"]);
        // line 18
        echo "    ";
        $context["results_count"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 18, $this->source); })()), "datagrid", [], "any", false, false, false, 18), "pager", [], "any", false, false, false, 18), "countResults", [], "any", false, false, false, 18);
        // line 19
        echo "    <div class=\"box box-primary\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["inlineAnchor"]) || array_key_exists("inlineAnchor", $context) ? $context["inlineAnchor"] : (function () { throw new RuntimeError('Variable "inlineAnchor" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\">
        <div class=\"box-header with-border\">
            ";
        // line 21
        echo $this->extensions['Sonata\AdminBundle\Twig\Extension\IconExtension']->parseIcon(((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "icon", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "icon", [], "any", false, false, false, 21), "")) : ("")));
        echo "
            <h3 class=\"box-title\">
                <a href=\"#";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["inlineAnchor"]) || array_key_exists("inlineAnchor", $context) ? $context["inlineAnchor"] : (function () { throw new RuntimeError('Variable "inlineAnchor" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\">
                    ";
        // line 24
        if (((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 24, $this->source); })()) === false)) {
            // line 25
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 25, $this->source); })()), "text", [], "any", false, false, false, 25), "html", null, true);
            echo "
                    ";
        } else {
            // line 27
            echo "                        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 27, $this->source); })()), "text", [], "any", false, false, false, 27), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 27, $this->source); })())), "html", null, true);
            echo "
                    ";
        }
        // line 29
        echo "                </a>
            </h3>
        </div>
        <div class=\"box-body ";
        // line 32
        if ((1 === twig_compare((isset($context["results_count"]) || array_key_exists("results_count", $context) ? $context["results_count"] : (function () { throw new RuntimeError('Variable "results_count" does not exist.', 32, $this->source); })()), 0))) {
            echo "table-responsive no-padding";
        }
        echo "\">
            ";
        // line 33
        echo $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->renderEvent("sonata.admin.list.table.top", ["admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 33, $this->source); })())]);
        echo "

            ";
        // line 35
        $this->displayBlock('list_header', $context, $blocks);
        // line 36
        echo "
            ";
        // line 37
        if ((1 === twig_compare((isset($context["results_count"]) || array_key_exists("results_count", $context) ? $context["results_count"] : (function () { throw new RuntimeError('Variable "results_count" does not exist.', 37, $this->source); })()), 0))) {
            // line 38
            echo "                <table class=\"table table-bordered table-striped table-hover sonata-ba-list\">
                    ";
            // line 39
            $this->displayBlock('table_header', $context, $blocks);
            // line 65
            echo "
                    ";
            // line 66
            $this->displayBlock('table_body', $context, $blocks);
            // line 71
            echo "
                    ";
            // line 72
            $this->displayBlock('table_footer', $context, $blocks);
            // line 74
            echo "                </table>
                <div class=\"box-footer\">
                    ";
            // line 76
            if (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 76, $this->source); })()), "hasAccess", [0 => "list"], "method", false, false, false, 76)) {
                // line 77
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 77, $this->source); })()), "generateUrl", [0 => "list", 1 => ["filter" => twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 77, $this->source); })()), "filters", [], "any", false, false, false, 77)]], "method", false, false, false, 77), "html", null, true);
                echo "\" class=\"btn btn-primary btn-block\">
                            <i class=\"fas fa-list\" aria-hidden=\"true\"></i> ";
                // line 78
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("preview_view_more", [], "SonataAdminBundle"), "html", null, true);
                echo "
                        </a>
                    ";
            }
            // line 81
            echo "                </div>
            ";
        } else {
            // line 83
            echo "                ";
            $this->displayBlock('no_result_content', $context, $blocks);
            // line 90
            echo "            ";
        }
        // line 91
        echo "
            ";
        // line 92
        echo $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->renderEvent("sonata.admin.list.table.bottom", ["admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 92, $this->source); })())]);
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
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

    // line 39
    public function block_table_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_header"));

        // line 40
        echo "                        <thead>
                            <tr class=\"sonata-ba-list-field-header\">
                                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 42, $this->source); })()), "list", [], "any", false, false, false, 42), "getElements", [], "method", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 43
            echo "                                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["field_description"], "name", [], "any", false, false, false, 43), twig_constant("Sonata\\AdminBundle\\Datagrid\\ListMapper::NAME_SELECT")))) {
                // line 44
                echo "                                        <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                    ";
            } else {
                // line 46
                echo "                                        ";
                ob_start();
                // line 47
                echo "                                            <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field_description"], "type", [], "any", false, false, false, 47), "html", null, true);
                echo " ";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["field_description"], "option", [0 => "header_class"], "method", false, false, false, 47))) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field_description"], "option", [0 => "header_class"], "method", false, false, false, 47), "html", null, true);
                }
                echo "\"";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["field_description"], "option", [0 => "header_style"], "method", false, false, false, 47))) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field_description"], "option", [0 => "header_style"], "method", false, false, false, 47), "html", null, true);
                    echo "\"";
                }
                echo ">
                                                ";
                // line 48
                if (twig_get_attribute($this->env, $this->source, $context["field_description"], "option", [0 => "label_icon"], "method", false, false, false, 48)) {
                    // line 49
                    echo "                                                    <span class=\"sonata-ba-list-field-header-label-icon\">
                                                        ";
                    // line 50
                    echo $this->extensions['Sonata\AdminBundle\Twig\Extension\IconExtension']->parseIcon(twig_get_attribute($this->env, $this->source, $context["field_description"], "option", [0 => "label_icon"], "method", false, false, false, 50));
                    echo "
                                                    </span>
                                                ";
                }
                // line 53
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["field_description"], "translationDomain", [], "any", false, false, false, 53) === false)) {
                    // line 54
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field_description"], "label", [], "any", false, false, false, 54), "html", null, true);
                    echo "
                                                ";
                } else {
                    // line 56
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["field_description"], "label", [], "any", false, false, false, 56), [], twig_get_attribute($this->env, $this->source, $context["field_description"], "translationDomain", [], "any", false, false, false, 56)), "html", null, true);
                    echo "
                                                ";
                }
                // line 58
                echo "                                            </th>
                                        ";
                $___internal_7e6c09b32da6c3df9b11c45d5eb56417a64eb2a81f0688e53f8d893ac70569da_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 46
                echo twig_spaceless($___internal_7e6c09b32da6c3df9b11c45d5eb56417a64eb2a81f0688e53f8d893ac70569da_);
                // line 60
                echo "                                    ";
            }
            // line 61
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                            </tr>
                        </thead>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        // line 67
        echo "                        <tbody>
                            ";
        // line 68
        $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate(("outer_list_rows_" . twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 68, $this->source); })()), "getListMode", [], "method", false, false, false, 68)), twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 68, $this->source); })()), "code", [], "any", false, false, false, 68)), "@SonataAdmin/Block/block_admin_preview.html.twig", 68)->display($context);
        // line 69
        echo "                        </tbody>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_table_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_footer"));

        // line 73
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_no_result_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "no_result_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "no_result_content"));

        // line 84
        echo "                    <div class=\"info-box\">
                        <div class=\"info-box\">
                            <span class=\"info-box-text\">";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no_result", [], "SonataAdminBundle"), "html", null, true);
        echo "</span>
                        </div><!-- /.info-box-content -->
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Block/block_admin_preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 86,  363 => 84,  353 => 83,  343 => 73,  333 => 72,  322 => 69,  320 => 68,  317 => 67,  307 => 66,  295 => 62,  289 => 61,  286 => 60,  284 => 46,  280 => 58,  274 => 56,  268 => 54,  265 => 53,  259 => 50,  256 => 49,  254 => 48,  238 => 47,  235 => 46,  231 => 44,  228 => 43,  224 => 42,  220 => 40,  210 => 39,  192 => 35,  178 => 92,  175 => 91,  172 => 90,  169 => 83,  165 => 81,  159 => 78,  154 => 77,  152 => 76,  148 => 74,  146 => 72,  143 => 71,  141 => 66,  138 => 65,  136 => 39,  133 => 38,  131 => 37,  128 => 36,  126 => 35,  121 => 33,  115 => 32,  110 => 29,  104 => 27,  98 => 25,  96 => 24,  92 => 23,  87 => 21,  81 => 19,  78 => 18,  75 => 17,  65 => 16,  55 => 12,  53 => 14,  40 => 12,);
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

{% set translation_domain = settings.translation_domain ?? admin.translationDomain %}

{% block block %}
    {% set inlineAnchor = settings.text|replace({'.':'_'}) %}
    {% set results_count = admin.datagrid.pager.countResults %}
    <div class=\"box box-primary\" id=\"{{ inlineAnchor }}\">
        <div class=\"box-header with-border\">
            {{ settings.icon|default('')|parse_icon }}
            <h3 class=\"box-title\">
                <a href=\"#{{ inlineAnchor }}\">
                    {% if translation_domain is same as(false) %}
                        {{ settings.text }}
                    {% else %}
                        {{ settings.text|trans({}, translation_domain) }}
                    {% endif %}
                </a>
            </h3>
        </div>
        <div class=\"box-body {% if results_count > 0 %}table-responsive no-padding{% endif %}\">
            {{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}

            {% block list_header %}{% endblock %}

            {% if results_count > 0 %}
                <table class=\"table table-bordered table-striped table-hover sonata-ba-list\">
                    {% block table_header %}
                        <thead>
                            <tr class=\"sonata-ba-list-field-header\">
                                {% for field_description in admin.list.getElements() %}
                                    {% if field_description.name == constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\ListMapper::NAME_SELECT') %}
                                        <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                    {% else %}
                                        {% apply spaceless %}
                                            <th class=\"sonata-ba-list-field-header-{{ field_description.type}} {% if field_description.option('header_class') is not null %} {{ field_description.option('header_class') }}{% endif %}\"{% if field_description.option('header_style') is not null %} style=\"{{ field_description.option('header_style') }}\"{% endif %}>
                                                {% if field_description.option('label_icon') %}
                                                    <span class=\"sonata-ba-list-field-header-label-icon\">
                                                        {{ field_description.option('label_icon')|parse_icon }}
                                                    </span>
                                                {% endif %}
                                                {% if field_description.translationDomain is same as(false) %}
                                                    {{ field_description.label }}
                                                {% else %}
                                                    {{ field_description.label|trans({}, field_description.translationDomain) }}
                                                {% endif %}
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
                <div class=\"box-footer\">
                    {% if admin.hasAccess('list') %}
                        <a href=\"{{ admin.generateUrl('list', {filter: settings.filters}) }}\" class=\"btn btn-primary btn-block\">
                            <i class=\"fas fa-list\" aria-hidden=\"true\"></i> {{ 'preview_view_more'|trans({}, 'SonataAdminBundle') }}
                        </a>
                    {% endif %}
                </div>
            {% else %}
                {% block no_result_content %}
                    <div class=\"info-box\">
                        <div class=\"info-box\">
                            <span class=\"info-box-text\">{{ 'no_result'|trans({}, 'SonataAdminBundle') }}</span>
                        </div><!-- /.info-box-content -->
                    </div>
                {% endblock %}
            {% endif %}

            {{ sonata_block_render_event('sonata.admin.list.table.bottom', { 'admin': admin }) }}
        </div>
    </div>
{% endblock %}
", "@SonataAdmin/Block/block_admin_preview.html.twig", "W:\\domains\\Taptima_Backend\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\Block\\block_admin_preview.html.twig");
    }
}
