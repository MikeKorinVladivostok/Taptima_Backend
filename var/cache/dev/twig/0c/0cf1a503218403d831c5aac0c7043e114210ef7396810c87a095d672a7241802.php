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

/* @SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig */
class __TwigTemplate_933f910b6e00f08eb2ded839809c207760cf87eef293ab149ab6be338c7d97a7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'sonata_mosaic_background' => [$this, 'block_sonata_mosaic_background'],
            'sonata_mosaic_default_view' => [$this, 'block_sonata_mosaic_default_view'],
            'sonata_mosaic_hover_view' => [$this, 'block_sonata_mosaic_hover_view'],
            'sonata_mosaic_description' => [$this, 'block_sonata_mosaic_description'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig"));

        // line 11
        echo "
<!--
This template can be customized to match your needs. You should only extends the template and used the different blocks to customize the view:
    - sonata_mosaic_default_view
    - sonata_mosaic_hover_view
    - sonata_mosaic_description
-->

<tr>
    ";
        // line 21
        echo "    <td colspan=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "isXmlHttpRequest", [], "any", false, false, false, 22)) ? (((twig_length_filter($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 23, $this->source); })()), "list", [], "any", false, false, false, 23), "getElements", [], "method", false, false, false, 23), function ($__element__) use ($context, $macros) { $context["element"] = $__element__; return (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 23, $this->source); })()), "getOption", [0 => "ajax_hidden"], "method", false, false, false, 23), true)); })) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 24
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 24, $this->source); })()), "list", [], "any", false, false, false, 24), "has", [0 => twig_constant("Sonata\\AdminBundle\\Datagrid\\ListMapper::NAME_ACTIONS")], "method", false, false, false, 24)) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 25, $this->source); })()), "list", [], "any", false, false, false, 25), "has", [0 => twig_constant("Sonata\\AdminBundle\\Datagrid\\ListMapper::NAME_BATCH")], "method", false, false, false, 25))) : (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 26, $this->source); })()), "list", [], "any", false, false, false, 26), "getElements", [], "method", false, false, false, 26)))), "html", null, true);
        // line 27
        echo "\">
        <div class=\"row\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 29, $this->source); })()), "datagrid", [], "any", false, false, false, 29), "results", [], "any", false, false, false, 29));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 30
            echo "                ";
            $context["meta"] = twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 30, $this->source); })()), "getObjectMetadata", [0 => $context["object"]], "method", false, false, false, 30);
            // line 31
            echo "                ";
            ob_start();
            // line 32
            echo "                    <div class=\"mosaic-box-outter\">
                        <div class=\"mosaic-inner-box\">
                            ";
            // line 37
            echo "
                            <div class=\"mosaic-inner-box-default\">
                                ";
            // line 39
            $this->displayBlock('sonata_mosaic_background', $context, $blocks);
            // line 46
            echo "                                ";
            $this->displayBlock('sonata_mosaic_default_view', $context, $blocks);
            // line 49
            echo "                            </div>

                            ";
            // line 55
            echo "                            <div class=\"mosaic-inner-box-hover\">
                                ";
            // line 56
            $this->displayBlock('sonata_mosaic_hover_view', $context, $blocks);
            // line 60
            echo "                            </div>
                        </div>

                        <div class=\"mosaic-inner-text\">
                            ";
            // line 64
            if (((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 64, $this->source); })()), "hasRoute", [0 => "batch"], "method", false, false, false, 64) && (1 === twig_compare(twig_length_filter($this->env, (isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new RuntimeError('Variable "batchactions" does not exist.', 64, $this->source); })())), 0))) || ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 64, $this->source); })()), "hasRoute", [0 => "export"], "method", false, false, false, 64) && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 64, $this->source); })()), "hasAccess", [0 => "export"], "method", false, false, false, 64)) && twig_length_filter($this->env, (isset($context["export_formats"]) || array_key_exists("export_formats", $context) ? $context["export_formats"] : (function () { throw new RuntimeError('Variable "export_formats" does not exist.', 64, $this->source); })()))))) {
                // line 65
                echo "                                <input type=\"checkbox\" name=\"idx[]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 65, $this->source); })()), "id", [0 => $context["object"]], "method", false, false, false, 65), "html", null, true);
                echo "\">
                            ";
            } else {
                // line 67
                echo "                                &nbsp;
                            ";
            }
            // line 69
            echo "
                            ";
            // line 70
            $this->displayBlock('sonata_mosaic_description', $context, $blocks);
            // line 73
            echo "                        </div>
                    </div>
                ";
            $context["mosaic_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 76
            echo "                <div class=\"col-xs-6 col-sm-3 mosaic-box sonata-ba-list-field-batch sonata-ba-list-field\"
                     objectId=\"";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 77, $this->source); })()), "id", [0 => $context["object"]], "method", false, false, false, 77), "html", null, true);
            echo "\">
                    ";
            // line 78
            if ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 78, $this->source); })()), "hasAccess", [0 => "edit", 1 => $context["object"]], "method", false, false, false, 78) && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 78, $this->source); })()), "hasRoute", [0 => "edit"], "method", false, false, false, 78))) {
                // line 79
                echo "                        <a class=\"mosaic-inner-link\"
                           href=\"";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 80, $this->source); })()), "generateObjectUrl", [0 => "edit", 1 => $context["object"]], "method", false, false, false, 80), "html", null, true);
                echo "\">
                            ";
                // line 81
                echo twig_escape_filter($this->env, (isset($context["mosaic_content"]) || array_key_exists("mosaic_content", $context) ? $context["mosaic_content"] : (function () { throw new RuntimeError('Variable "mosaic_content" does not exist.', 81, $this->source); })()), "html", null, true);
                echo "
                        </a>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 83
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 83, $this->source); })()), "hasAccess", [0 => "show", 1 => $context["object"]], "method", false, false, false, 83) && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 83, $this->source); })()), "hasRoute", [0 => "show"], "method", false, false, false, 83))) {
                // line 84
                echo "                        <a class=\"mosaic-inner-link\"
                           href=\"";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 85, $this->source); })()), "generateObjectUrl", [0 => "show", 1 => $context["object"]], "method", false, false, false, 85), "html", null, true);
                echo "\">
                            ";
                // line 86
                echo twig_escape_filter($this->env, (isset($context["mosaic_content"]) || array_key_exists("mosaic_content", $context) ? $context["mosaic_content"] : (function () { throw new RuntimeError('Variable "mosaic_content" does not exist.', 86, $this->source); })()), "html", null, true);
                echo "
                        </a>
                    ";
            } else {
                // line 89
                echo "                        ";
                echo twig_escape_filter($this->env, (isset($context["mosaic_content"]) || array_key_exists("mosaic_content", $context) ? $context["mosaic_content"] : (function () { throw new RuntimeError('Variable "mosaic_content" does not exist.', 89, $this->source); })()), "html", null, true);
                echo "
                    ";
            }
            // line 91
            echo "                </div>

                ";
            // line 93
            if ((0 === twig_compare((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 93) % 4), 0))) {
                // line 94
                echo "                    <div class=\"clearfix hidden-xs\"></div>
                ";
            }
            // line 96
            echo "                ";
            if ((0 === twig_compare((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 96) % 2), 0))) {
                // line 97
                echo "                    <div class=\"clearfix visible-xs\"></div>
                ";
            }
            // line 99
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "        </div>
    </td>
</tr>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block_sonata_mosaic_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_mosaic_background"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_mosaic_background"));

        // line 40
        echo "                                    ";
        $context["metaImage"] = (((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "isImageAvailable", [], "any", true, true, false, 40) &&  !twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 40, $this->source); })()), "isImageAvailable", [], "any", false, false, false, 40))) ? (twig_get_attribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 40, $this->source); })()), "getOption", [0 => "mosaic_background"], "method", false, false, false, 40)) : (twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 40, $this->source); })()), "image", [], "any", false, false, false, 40)));
        // line 41
        echo "                                    ";
        if ( !(is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (isset($context["metaImage"]) || array_key_exists("metaImage", $context) ? $context["metaImage"] : (function () { throw new RuntimeError('Variable "metaImage" does not exist.', 41, $this->source); })())) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "data:") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
            // line 42
            echo "                                        ";
            $context["metaImage"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["metaImage"]) || array_key_exists("metaImage", $context) ? $context["metaImage"] : (function () { throw new RuntimeError('Variable "metaImage" does not exist.', 42, $this->source); })()));
            // line 43
            echo "                                    ";
        }
        // line 44
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["metaImage"]) || array_key_exists("metaImage", $context) ? $context["metaImage"] : (function () { throw new RuntimeError('Variable "metaImage" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 44, $this->source); })()), "title", [], "any", false, false, false, 44), "html", null, true);
        echo "\" />
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_sonata_mosaic_default_view($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_mosaic_default_view"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_mosaic_default_view"));

        // line 47
        echo "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 47, $this->source); })()), "id", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 47, $this->source); })())], "method", false, false, false, 47), "html", null, true);
        echo "</span>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_sonata_mosaic_hover_view($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_mosaic_hover_view"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_mosaic_hover_view"));

        // line 57
        echo "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 57, $this->source); })()), "id", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 57, $this->source); })())], "method", false, false, false, 57), "html", null, true);
        echo "</span>
                                    ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 58, $this->source); })()), "description", [], "any", false, false, false, 58), "html", null, true);
        echo "
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_sonata_mosaic_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_mosaic_description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_mosaic_description"));

        // line 71
        echo "                                ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 71, $this->source); })()), "title", [], "any", false, false, false, 71)), "truncate", [0 => 40], "method", false, false, false, 71), "html", null, true);
        echo "
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 71,  316 => 70,  304 => 58,  299 => 57,  289 => 56,  276 => 47,  266 => 46,  251 => 44,  248 => 43,  245 => 42,  242 => 41,  239 => 40,  229 => 39,  216 => 100,  202 => 99,  198 => 97,  195 => 96,  191 => 94,  189 => 93,  185 => 91,  179 => 89,  173 => 86,  169 => 85,  166 => 84,  164 => 83,  159 => 81,  155 => 80,  152 => 79,  150 => 78,  146 => 77,  143 => 76,  138 => 73,  136 => 70,  133 => 69,  129 => 67,  123 => 65,  121 => 64,  115 => 60,  113 => 56,  110 => 55,  106 => 49,  103 => 46,  101 => 39,  97 => 37,  93 => 32,  90 => 31,  87 => 30,  70 => 29,  66 => 27,  64 => 26,  63 => 25,  62 => 24,  61 => 23,  60 => 22,  58 => 21,  47 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<!--
This template can be customized to match your needs. You should only extends the template and used the different blocks to customize the view:
    - sonata_mosaic_default_view
    - sonata_mosaic_hover_view
    - sonata_mosaic_description
-->

<tr>
    {# NEXT_MAJOR: Remove the NAME_ACTIONS check in version 5 and recommend using the option `ajax_hidden` instead. #}
    <td colspan=\"{{
        app.request.isXmlHttpRequest
            ? admin.list.getElements()|filter(element => element.getOption('ajax_hidden') != true)|length
                - admin.list.has(constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\ListMapper::NAME_ACTIONS'))
                - admin.list.has(constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\ListMapper::NAME_BATCH'))
            : admin.list.getElements()|length
    }}\">
        <div class=\"row\">
            {% for object in admin.datagrid.results %}
                {% set meta = admin.getObjectMetadata(object) %}
                {% set mosaic_content %}
                    <div class=\"mosaic-box-outter\">
                        <div class=\"mosaic-inner-box\">
                            {#
                                This box will be display when the mouse is not on the box
                            #}

                            <div class=\"mosaic-inner-box-default\">
                                {% block sonata_mosaic_background %}
                                    {% set metaImage = meta.isImageAvailable is defined and not meta.isImageAvailable ? sonata_config.getOption('mosaic_background') : meta.image %}
                                    {% if not (metaImage starts with 'data:') %}
                                        {% set metaImage = asset(metaImage) %}
                                    {% endif %}
                                    <img src=\"{{ metaImage }}\" alt=\"{{ meta.title }}\" />
                                {% endblock %}
                                {% block sonata_mosaic_default_view %}
                                    <span class=\"mosaic-box-label label label-primary pull-right\">#{{ admin.id(object) }}</span>
                                {% endblock %}
                            </div>

                            {#
                                This box will be display when the mouse is on the box
                                You can add more description
                            #}
                            <div class=\"mosaic-inner-box-hover\">
                                {% block sonata_mosaic_hover_view %}
                                    <span class=\"mosaic-box-label label label-primary pull-right\">#{{ admin.id(object) }}</span>
                                    {{ meta.description }}
                                {% endblock %}
                            </div>
                        </div>

                        <div class=\"mosaic-inner-text\">
                            {% if (admin.hasRoute('batch') and batchactions|length > 0) or (admin.hasRoute('export') and admin.hasAccess('export') and export_formats|length) %}
                                <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
                            {% else %}
                                &nbsp;
                            {% endif %}

                            {% block sonata_mosaic_description %}
                                {{ meta.title|u.truncate(40) }}
                            {% endblock %}
                        </div>
                    </div>
                {% endset %}
                <div class=\"col-xs-6 col-sm-3 mosaic-box sonata-ba-list-field-batch sonata-ba-list-field\"
                     objectId=\"{{ admin.id(object) }}\">
                    {% if admin.hasAccess('edit', object) and admin.hasRoute('edit') %}
                        <a class=\"mosaic-inner-link\"
                           href=\"{{ admin.generateObjectUrl('edit', object) }}\">
                            {{ mosaic_content }}
                        </a>
                    {% elseif admin.hasAccess('show', object) and admin.hasRoute('show') %}
                        <a class=\"mosaic-inner-link\"
                           href=\"{{ admin.generateObjectUrl('show', object) }}\">
                            {{ mosaic_content }}
                        </a>
                    {% else %}
                        {{ mosaic_content }}
                    {% endif %}
                </div>

                {% if loop.index % 4 == 0 %}
                    <div class=\"clearfix hidden-xs\"></div>
                {% endif %}
                {% if loop.index % 2 == 0 %}
                    <div class=\"clearfix visible-xs\"></div>
                {% endif %}
            {% endfor %}
        </div>
    </td>
</tr>
", "@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig", "W:\\domains\\Taptima_Backend\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\CRUD\\list_outer_rows_mosaic.html.twig");
    }
}
