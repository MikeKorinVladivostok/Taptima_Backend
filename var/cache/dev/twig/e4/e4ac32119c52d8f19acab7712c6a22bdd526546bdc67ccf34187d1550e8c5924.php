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

/* @SonataAdmin/CRUD/base_list_field.html.twig */
class __TwigTemplate_0f0935011bbf40d9027f04c325d2eea6adc4fa8bb1aca1bab9eb442f16d4dada extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'field_span_attributes' => [$this, 'block_field_span_attributes'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_field.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_field.html.twig"));

        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 12, $this->source); })()), "type", [], "any", false, false, false, 12), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 12, $this->source); })()), "id", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 12, $this->source); })())], "method", false, false, false, 12), "html", null, true);
        echo "\"";
        if (twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 12, $this->source); })()), "option", [0 => "row_align"], "method", false, false, false, 12)) {
            echo " style=\"text-align:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 12, $this->source); })()), "option", [0 => "row_align"], "method", false, false, false, 12), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 13
        $context["route_name"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "option", [0 => "route"], "method", false, true, false, 13), "name", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "option", [0 => "route"], "method", false, true, false, 13), "name", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 13, $this->source); })()), "getOption", [0 => "default_admin_route"], "method", false, false, false, 13))) : (twig_get_attribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 13, $this->source); })()), "getOption", [0 => "default_admin_route"], "method", false, false, false, 13)));
        // line 14
        echo "    ";
        $context["route_parameters"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "option", [0 => "route"], "method", false, true, false, 14), "parameters", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "option", [0 => "route"], "method", false, true, false, 14), "parameters", [], "any", false, false, false, 14), [])) : ([]));
        // line 15
        echo "
    ";
        // line 16
        if (((twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 17, $this->source); })()), "option", [0 => "identifier", 1 => false], "method", false, false, false, 17) && twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 18, $this->source); })()), "hasRoute", [0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 18, $this->source); })())], "method", false, false, false, 18)) && twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 19, $this->source); })()), "hasAccess", [0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 19, $this->source); })()), 1 => ((twig_in_filter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 19, $this->source); })()), [0 => "show", 1 => "edit"])) ? ((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 19, $this->source); })())) : (null))], "method", false, false, false, 19))) {
            // line 21
            echo "        <a class=\"sonata-link-identifier\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 21, $this->source); })()), "generateObjectUrl", [0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 21, $this->source); })()), 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 21, $this->source); })()), 2 => (isset($context["route_parameters"]) || array_key_exists("route_parameters", $context) ? $context["route_parameters"] : (function () { throw new RuntimeError('Variable "route_parameters" does not exist.', 21, $this->source); })())], "method", false, false, false, 21), "html", null, true);
            echo "\">";
            // line 22
            $this->displayBlock('field', $context, $blocks);
            // line 35
            echo "</a>
    ";
        } else {
            // line 37
            echo "        ";
            $context["is_editable"] = (twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 37, $this->source); })()), "option", [0 => "editable", 1 => false], "method", false, false, false, 37) && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 37, $this->source); })()), "hasAccess", [0 => "edit", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 37, $this->source); })())], "method", false, false, false, 37));
            // line 38
            echo "        ";
            if ((((isset($context["is_editable"]) || array_key_exists("is_editable", $context) ? $context["is_editable"] : (function () { throw new RuntimeError('Variable "is_editable" does not exist.', 38, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 38, $this->source); })()), "option", [0 => "multiple", 1 => false], "method", false, false, false, 38)) && twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 38, $this->source); })())))) {
                // line 39
                echo "            ";
                // line 40
                echo "            ";
                // line 41
                echo "            ";
                $context["x_editable_type"] = "checklist";
                // line 42
                echo "        ";
            } else {
                // line 43
                echo "            ";
                $context["x_editable_type"] = $this->extensions['Sonata\AdminBundle\Twig\Extension\XEditableExtension']->getXEditableType(twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 43, $this->source); })()), "type", [], "any", false, false, false, 43));
                // line 44
                echo "        ";
            }
            // line 45
            echo "
        ";
            // line 46
            if (((isset($context["is_editable"]) || array_key_exists("is_editable", $context) ? $context["is_editable"] : (function () { throw new RuntimeError('Variable "is_editable" does not exist.', 46, $this->source); })()) && (isset($context["x_editable_type"]) || array_key_exists("x_editable_type", $context) ? $context["x_editable_type"] : (function () { throw new RuntimeError('Variable "x_editable_type" does not exist.', 46, $this->source); })()))) {
                // line 47
                echo "            ";
                $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_set_object_field_value", (((["_sonata_admin" => twig_get_attribute($this->env, $this->source,                 // line 50
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 50, $this->source); })()), "baseCodeRoute", [], "any", false, false, false, 50), "context" => "list", "field" => twig_get_attribute($this->env, $this->source,                 // line 52
(isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52), "objectId" => twig_get_attribute($this->env, $this->source,                 // line 53
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 53, $this->source); })()), "urlSafeIdentifier", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 53, $this->source); })())], "method", false, false, false, 53)] + ((twig_get_attribute($this->env, $this->source,                 // line 54
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 54, $this->source); })()), "hasRequest", [], "method", false, false, false, 54)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "attributes", [], "any", false, false, false, 54), "get", [0 => "_route_params", 1 => []], "method", false, false, false, 54)) : ([]))) + twig_get_attribute($this->env, $this->source,                 // line 55
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 55, $this->source); })()), "getPersistentParameters", [], "method", false, false, false, 55)) + ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 56
($context["app"] ?? null), "request", [], "any", false, true, false, 56), "query", [], "any", false, true, false, 56), "all", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 56), "query", [], "any", false, true, false, 56), "all", [], "any", false, false, false, 56), [])) : ([]))));
                // line 58
                echo "
            ";
                // line 59
                if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 59, $this->source); })()), "type", [], "any", false, false, false, 59), twig_constant("Sonata\\AdminBundle\\FieldDescription\\FieldDescriptionInterface::TYPE_DATE"))) &&  !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 59, $this->source); })())))) {
                    // line 60
                    echo "                ";
                    // line 61
                    echo "                ";
                    $context["data_value"] = twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 61, $this->source); })()), "Y-m-d", ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "timezone", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "timezone", [], "any", false, false, false, 61), null)) : (null)));
                    // line 62
                    echo "            ";
                } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 62, $this->source); })()), "type", [], "any", false, false, false, 62), twig_constant("Sonata\\AdminBundle\\FieldDescription\\FieldDescriptionInterface::TYPE_BOOLEAN"))) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 62, $this->source); })())))) {
                    // line 63
                    echo "                ";
                    $context["data_value"] = 0;
                    // line 64
                    echo "            ";
                } elseif (twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 64, $this->source); })()))) {
                    // line 65
                    echo "                ";
                    $context["data_value"] = json_encode((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 65, $this->source); })()));
                    // line 66
                    echo "            ";
                } else {
                    // line 67
                    echo "                ";
                    $context["data_value"] = (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 67, $this->source); })());
                    // line 68
                    echo "            ";
                }
                // line 69
                echo "
            <span ";
                // line 70
                $this->displayBlock('field_span_attributes', $context, $blocks);
                // line 84
                echo ">
                ";
                // line 85
                $this->displayBlock("field", $context, $blocks);
                echo "
            </span>
        ";
            } else {
                // line 88
                echo "            ";
                $this->displayBlock("field", $context, $blocks);
                echo "
        ";
            }
            // line 90
            echo "    ";
        }
        // line 91
        echo "</td>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 23
        echo "                ";
        ob_start();
        // line 24
        echo "                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 24, $this->source); })()), "option", [0 => "collapse"], "method", false, false, false, 24))) {
            // line 25
            echo "                        ";
            $context["collapse"] = twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 25, $this->source); })()), "option", [0 => "collapse"], "method", false, false, false, 25);
            // line 26
            echo "                        <div class=\"sonata-readmore\"
                              data-readmore-height=\"";
            // line 27
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "height", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "height", [], "any", false, false, false, 27), 40)) : (40)), "html", null, true);
            echo "\"
                              data-readmore-more=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "more", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "more", [], "any", false, false, false, 28), "read_more")) : ("read_more")), [], "SonataAdminBundle"), "html", null, true);
            echo "\"
                              data-readmore-less=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "less", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "less", [], "any", false, false, false, 29), "read_less")) : ("read_less")), [], "SonataAdminBundle"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "</div>
                    ";
        } else {
            // line 31
            echo "                        ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "
                    ";
        }
        // line 33
        echo "                ";
        $___internal_e23dd48e4a9a9654cc1424606c21828578ebb4fd6400ab42340d3d27aa123e70_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        echo twig_spaceless($___internal_e23dd48e4a9a9654cc1424606c21828578ebb4fd6400ab42340d3d27aa123e70_);
        // line 34
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_field_span_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field_span_attributes"));

        echo "class=\"x-editable\"
                  data-type=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["x_editable_type"]) || array_key_exists("x_editable_type", $context) ? $context["x_editable_type"] : (function () { throw new RuntimeError('Variable "x_editable_type" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "\"
                  data-value=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["data_value"]) || array_key_exists("data_value", $context) ? $context["data_value"] : (function () { throw new RuntimeError('Variable "data_value" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "\"
                  ";
        // line 73
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 73, $this->source); })()), "label", [], "any", false, false, false, 73) === false)) {
            // line 74
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 74, $this->source); })()), "translationDomain", [], "any", false, false, false, 74) === false)) {
                // line 75
                echo "                          data-title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 75, $this->source); })()), "label", [], "any", false, false, false, 75), "html", null, true);
                echo "\"
                      ";
            } else {
                // line 77
                echo "                          data-title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 77, $this->source); })()), "label", [], "any", false, false, false, 77), [], twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 77, $this->source); })()), "translationDomain", [], "any", false, false, false, 77)), "html", null, true);
                echo "\"
                      ";
            }
            // line 79
            echo "                  ";
        }
        // line 80
        echo "                  ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 80, $this->source); })()), "type", [], "any", false, false, false, 80), twig_constant("Sonata\\AdminBundle\\FieldDescription\\FieldDescriptionInterface::TYPE_DATE")))) {
            // line 81
            echo "                    data-format=\"yyyy-mm-dd\"
                  ";
        }
        // line 83
        echo "                  data-pk=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 83, $this->source); })()), "id", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 83, $this->source); })())], "method", false, false, false, 83), "html", null, true);
        echo "\"
                  data-url=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 84, $this->source); })()), "html", null, true);
        echo "\" ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 84,  289 => 83,  285 => 81,  282 => 80,  279 => 79,  273 => 77,  267 => 75,  264 => 74,  262 => 73,  258 => 72,  254 => 71,  242 => 70,  232 => 34,  230 => 23,  227 => 33,  221 => 31,  214 => 29,  210 => 28,  206 => 27,  203 => 26,  200 => 25,  197 => 24,  194 => 23,  184 => 22,  173 => 91,  170 => 90,  164 => 88,  158 => 85,  155 => 84,  153 => 70,  150 => 69,  147 => 68,  144 => 67,  141 => 66,  138 => 65,  135 => 64,  132 => 63,  129 => 62,  126 => 61,  124 => 60,  122 => 59,  119 => 58,  117 => 56,  116 => 55,  115 => 54,  114 => 53,  113 => 52,  112 => 50,  110 => 47,  108 => 46,  105 => 45,  102 => 44,  99 => 43,  96 => 42,  93 => 41,  91 => 40,  89 => 39,  86 => 38,  83 => 37,  79 => 35,  77 => 22,  73 => 21,  71 => 19,  70 => 18,  69 => 17,  68 => 16,  65 => 15,  62 => 14,  60 => 13,  48 => 12,  45 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<td class=\"sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }}\" objectId=\"{{ admin.id(object) }}\"{% if field_description.option('row_align') %} style=\"text-align:{{ field_description.option('row_align') }}\"{% endif %}>
    {% set route_name = field_description.option('route').name|default(sonata_config.getOption('default_admin_route')) %}
    {% set route_parameters = field_description.option('route').parameters|default([]) %}

    {% if
        field_description.option('identifier', false)
        and admin.hasRoute(route_name)
        and admin.hasAccess(route_name, route_name in ['show', 'edit'] ? object : null)
    %}
        <a class=\"sonata-link-identifier\" href=\"{{ admin.generateObjectUrl(route_name, object, route_parameters) }}\">
            {%- block field %}
                {% apply spaceless %}
                    {% if field_description.option('collapse') is not null %}
                        {% set collapse = field_description.option('collapse') %}
                        <div class=\"sonata-readmore\"
                              data-readmore-height=\"{{ collapse.height|default(40) }}\"
                              data-readmore-more=\"{{ collapse.more|default('read_more')|trans({}, 'SonataAdminBundle') }}\"
                              data-readmore-less=\"{{ collapse.less|default('read_less')|trans({}, 'SonataAdminBundle') }}\">{{ value }}</div>
                    {% else %}
                        {{ value }}
                    {% endif %}
                {% endapply %}
            {% endblock -%}
        </a>
    {% else %}
        {% set is_editable = field_description.option('editable', false) and admin.hasAccess('edit', object) %}
        {% if is_editable and field_description.option('multiple', false) and value is iterable %}
            {# multiple editable field should be real multiple #}
            {# https://vitalets.github.io/x-editable/docs.html#checklist #}
            {% set x_editable_type = 'checklist' %}
        {% else %}
            {% set x_editable_type = field_description.type|sonata_xeditable_type %}
        {% endif %}

        {% if is_editable and x_editable_type %}
            {% set url = path(
                'sonata_admin_set_object_field_value',
                {
                    '_sonata_admin': admin.baseCodeRoute,
                    'context': 'list',
                    'field': field_description.name,
                    'objectId': admin.urlSafeIdentifier(object)
                } + (admin.hasRequest() ? admin.request.attributes.get('_route_params', {}) : {})
                + admin.getPersistentParameters()
                + app.request.query.all|default({})
            ) %}

            {% if field_description.type == constant('Sonata\\\\AdminBundle\\\\FieldDescription\\\\FieldDescriptionInterface::TYPE_DATE') and value is not empty %}
                {# it is a x-editable format https://vitalets.github.io/x-editable/docs.html#date #}
                {% set data_value = value|date('Y-m-d', options.timezone|default(null)) %}
            {% elseif field_description.type == constant('Sonata\\\\AdminBundle\\\\FieldDescription\\\\FieldDescriptionInterface::TYPE_BOOLEAN') and value is empty %}
                {% set data_value = 0 %}
            {% elseif value is iterable %}
                {% set data_value = value|json_encode %}
            {% else %}
                {% set data_value = value %}
            {% endif %}

            <span {% block field_span_attributes %}class=\"x-editable\"
                  data-type=\"{{ x_editable_type }}\"
                  data-value=\"{{ data_value }}\"
                  {% if field_description.label is not same as(false) %}
                      {% if field_description.translationDomain is same as(false) %}
                          data-title=\"{{ field_description.label }}\"
                      {% else %}
                          data-title=\"{{ field_description.label|trans({}, field_description.translationDomain) }}\"
                      {% endif %}
                  {% endif %}
                  {% if field_description.type == constant('Sonata\\\\AdminBundle\\\\FieldDescription\\\\FieldDescriptionInterface::TYPE_DATE') %}
                    data-format=\"yyyy-mm-dd\"
                  {% endif %}
                  data-pk=\"{{ admin.id(object) }}\"
                  data-url=\"{{ url }}\" {% endblock %}>
                {{ block('field') }}
            </span>
        {% else %}
            {{ block('field') }}
        {% endif %}
    {% endif %}
</td>
", "@SonataAdmin/CRUD/base_list_field.html.twig", "W:\\domains\\Taptima_Backend\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\CRUD\\base_list_field.html.twig");
    }
}
