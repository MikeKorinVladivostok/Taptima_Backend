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

/* @SonataAdmin/Form/form_admin_fields.html.twig */
class __TwigTemplate_7622b53be7222d39e69c970e841ea63403ccee9ae563b0204e13a2a53b36971c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_errors' => [$this, 'block_form_errors'],
            'form_help' => [$this, 'block_form_help'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'form_label' => [$this, 'block_form_label'],
            'checkbox_label' => [$this, 'block_checkbox_label'],
            'radio_label' => [$this, 'block_radio_label'],
            'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'form_row' => [$this, 'block_form_row'],
            'checkbox_row' => [$this, 'block_checkbox_row'],
            'radio_row' => [$this, 'block_radio_row'],
            'sonata_type_native_collection_widget_row' => [$this, 'block_sonata_type_native_collection_widget_row'],
            'sonata_type_native_collection_widget' => [$this, 'block_sonata_type_native_collection_widget'],
            'sonata_type_immutable_array_widget' => [$this, 'block_sonata_type_immutable_array_widget'],
            'sonata_type_immutable_array_widget_row' => [$this, 'block_sonata_type_immutable_array_widget_row'],
            'sonata_type_model_autocomplete_widget' => [$this, 'block_sonata_type_model_autocomplete_widget'],
            'sonata_type_choice_field_mask_widget' => [$this, 'block_sonata_type_choice_field_mask_widget'],
            'sonata_type_choice_multiple_sortable' => [$this, 'block_sonata_type_choice_multiple_sortable'],
            'sonata_type_model_autocomplete_select2_options_js' => [$this, 'block_sonata_type_model_autocomplete_select2_options_js'],
            'sonata_type_model_list_widget' => [$this, 'block_sonata_type_model_list_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Form/form_admin_fields.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Form/form_admin_fields.html.twig"));

        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "@SonataAdmin/Form/form_admin_fields.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 15
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 15, $this->source); })())), 0))) {
            // line 16
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "parent", [], "any", false, false, false, 16)) {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 17
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "                    <li><i class=\"fas fa-exclamation-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 19), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </ul>
        ";
            // line 22
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "parent", [], "any", false, false, false, 22)) {
                echo "</div>";
            }
            // line 23
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        // line 27
        if (((isset($context["sonata_admin_translation_domain"]) || array_key_exists("sonata_admin_translation_domain", $context)) && (null === (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 27, $this->source); })())))) {
            // line 28
            echo "        ";
            $context["translation_domain"] = (isset($context["sonata_admin_translation_domain"]) || array_key_exists("sonata_admin_translation_domain", $context) ? $context["sonata_admin_translation_domain"] : (function () { throw new RuntimeError('Variable "sonata_admin_translation_domain" does not exist.', 28, $this->source); })());
            // line 29
            echo "    ";
        }
        // line 30
        echo "    ";
        if ( !twig_test_empty((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 30, $this->source); })()))) {
            // line 31
            echo "        ";
            $context["help_attr"] = twig_array_merge((isset($context["help_attr"]) || array_key_exists("help_attr", $context) ? $context["help_attr"] : (function () { throw new RuntimeError('Variable "help_attr" does not exist.', 31, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 31), "")) : ("")) . " help-block sonata-ba-field-help")]);
            // line 32
            echo "        ";
            $this->displayParentBlock("form_help", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 37
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 37, $this->source); })()), "text")) : ("text"));
        // line 38
        echo "    ";
        if ((0 !== twig_compare((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 38, $this->source); })()), "file"))) {
            // line 39
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 39, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 39), "")) : ("")) . " form-control")]);
            // line 40
            echo "    ";
        }
        // line 41
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 45
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 45, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 45), "")) : ("")) . " form-control")]);
        // line 46
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        // line 50
        if ((0 === twig_compare((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 50, $this->source); })()), "{{ widget }}"))) {
            // line 51
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 53
            echo "        ";
            $context["currencySymbol"] = twig_trim_filter(twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 53, $this->source); })()), ["{{ widget }}" => ""]));
            // line 54
            echo "        ";
            if (preg_match("/^{{ widget }}/", (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 54, $this->source); })()))) {
                // line 55
                echo "            <div class=\"input-group\">";
                // line 56
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 57
                echo "<span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) || array_key_exists("currencySymbol", $context) ? $context["currencySymbol"] : (function () { throw new RuntimeError('Variable "currencySymbol" does not exist.', 57, $this->source); })()), "html", null, true);
                echo "</span>
            </div>
        ";
            } elseif (preg_match("/{{ widget }}\$/",             // line 59
(isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 59, $this->source); })()))) {
                // line 60
                echo "            <div class=\"input-group\">
                <span class=\"input-group-addon\">";
                // line 61
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) || array_key_exists("currencySymbol", $context) ? $context["currencySymbol"] : (function () { throw new RuntimeError('Variable "currencySymbol" does not exist.', 61, $this->source); })()), "html", null, true);
                echo "</span>";
                // line 62
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 63
                echo "</div>
        ";
            }
            // line 65
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 69
        echo "    ";
        ob_start();
        // line 70
        echo "        ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 70, $this->source); })()), "text")) : ("text"));
        // line 71
        echo "        <div class=\"input-group\">
            ";
        // line 72
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
    ";
        $___internal_856000c68f7e45311f5fb0768930d956f24290a0561e74ee0d852e797f2585a0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        echo twig_spaceless($___internal_856000c68f7e45311f5fb0768930d956f24290a0561e74ee0d852e797f2585a0_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 79
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 79, $this->source); })()), "")) : (""));
        // line 80
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 80, $this->source); })()))) {
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 83
            echo "<div class=\"checkbox\">";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 85
            echo "</div>";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 90
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 90, $this->source); })()), "")) : (""));
        // line 91
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 91, $this->source); })()))) {
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 94
            echo "<div class=\"radio\">";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 96
            echo "</div>";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 102
        ob_start();
        // line 103
        echo "    ";
        if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 103, $this->source); })()) === false) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 103, $this->source); })()), "options", [], "any", false, false, false, 103), "form_type", [], "array", false, false, false, 103), "horizontal")))) {
            // line 104
            echo "        ";
            $context["label_class"] = "col-sm-3";
            // line 105
            echo "    ";
        }
        // line 106
        echo "
    ";
        // line 107
        $context["label_class"] = ((((isset($context["label_class"]) || array_key_exists("label_class", $context))) ? (_twig_default_filter((isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 107, $this->source); })()), "")) : ("")) . " control-label");
        // line 108
        echo "
    ";
        // line 109
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 109, $this->source); })()) === false)) {
            // line 110
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 110, $this->source); })()), ["class" => ((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 110)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 110), "")) : ("")) . " ") . (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 110, $this->source); })()))]);
            // line 111
            echo "
        ";
            // line 112
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 112, $this->source); })())) {
                // line 113
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 113, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 113, $this->source); })())]);
                // line 114
                echo "        ";
            }
            // line 115
            echo "        ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 115, $this->source); })())) {
                // line 116
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 116, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 116)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 116), "")) : ("")) . " required"))]);
                // line 117
                echo "        ";
            }
            // line 118
            echo "
        ";
            // line 119
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 119, $this->source); })()))) {
                // line 120
                if (((isset($context["label_format"]) || array_key_exists("label_format", $context)) &&  !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 120, $this->source); })())))) {
                    // line 121
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 121, $this->source); })()), ["%name%" =>                     // line 122
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 122, $this->source); })()), "%id%" =>                     // line 123
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 123, $this->source); })())]);
                } else {
                    // line 126
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 126, $this->source); })()));
                }
            }
            // line 129
            echo "
        <label";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 130, $this->source); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 131
            if (((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 131, $this->source); })()) === false)) {
                // line 132
                echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 132, $this->source); })()), "html", null, true);
            } elseif ( !twig_get_attribute($this->env, $this->source,             // line 133
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 133, $this->source); })()), "admin", [], "any", false, false, false, 133)) {
                // line 134
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 134, $this->source); })()), (isset($context["label_translation_parameters"]) || array_key_exists("label_translation_parameters", $context) ? $context["label_translation_parameters"] : (function () { throw new RuntimeError('Variable "label_translation_parameters" does not exist.', 134, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 134, $this->source); })())), "html", null, true);
            } else {
                // line 136
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 136, $this->source); })()), (isset($context["label_translation_parameters"]) || array_key_exists("label_translation_parameters", $context) ? $context["label_translation_parameters"] : (function () { throw new RuntimeError('Variable "label_translation_parameters" does not exist.', 136, $this->source); })()), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true, false, 136), "translationDomain", [], "any", true, true, false, 136)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true, false, 136), "translationDomain", [], "any", false, false, false, 136), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 136, $this->source); })()), "admin", [], "any", false, false, false, 136), "translationDomain", [], "any", false, false, false, 136))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 136, $this->source); })()), "admin", [], "any", false, false, false, 136), "translationDomain", [], "any", false, false, false, 136)))), "html", null, true);
            }
            // line 138
            echo "</label>
    ";
        }
        $___internal_e26bfd2a6ea7a081792ca0cb5309699f01b1c7b14c9880a12b8c28ca4a2796e0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        echo twig_spaceless($___internal_e26bfd2a6ea7a081792ca0cb5309699f01b1c7b14c9880a12b8c28ca4a2796e0_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 143
    public function block_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 144
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 147
    public function block_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_label"));

        // line 148
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 151
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 152
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 152, $this->source); })()), "admin", [], "any", false, false, false, 152)) {
            // line 153
            echo "        ";
            $context["translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 153, $this->source); })()), "field_description", [], "any", false, false, false, 153), "translationDomain", [], "any", false, false, false, 153);
            // line 154
            echo "    ";
        }
        // line 155
        echo "    ";
        // line 156
        echo "    ";
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 157
            echo "        ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 157, $this->source); })())) {
                // line 158
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 158, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 158)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 158), "")) : ("")) . " required"))]);
                // line 159
                echo "        ";
            }
            // line 160
            echo "        ";
            if ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) {
                // line 161
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 161, $this->source); })()), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 161)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 161), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 161, $this->source); })())))]);
                // line 162
                echo "        ";
            }
            // line 163
            echo "        ";
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 163, $this->source); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 163, $this->source); })())))) {
                // line 164
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 164, $this->source); })()));
                // line 165
                echo "        ";
            }
            // line 166
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 166, $this->source); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 167
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 167, $this->source); })());
            // line 168
            if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 168, $this->source); })()) === false)) {
                // line 169
                echo "<span class=\"control-label__text\">
                    ";
                // line 170
                if (((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 170, $this->source); })()) === false)) {
                    // line 171
                    echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 171, $this->source); })()), "html", null, true);
                } else {
                    // line 173
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 173, $this->source); })()), (isset($context["label_translation_parameters"]) || array_key_exists("label_translation_parameters", $context) ? $context["label_translation_parameters"] : (function () { throw new RuntimeError('Variable "label_translation_parameters" does not exist.', 173, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 173, $this->source); })())), "html", null, true);
                }
                // line 175
                echo "</span>";
            }
            // line 177
            echo "</label>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 181
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 182
        ob_start();
        // line 183
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 183, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 183)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 183), "")) : ("")) . " list-unstyled")]);
        // line 184
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 186
            echo "        <li>
            ";
            // line 187
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["horizontal" => false, "horizontal_input_wrapper_class" => "", "translation_domain" =>             // line 190
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 190, $this->source); })())]);
            // line 191
            echo " ";
            // line 192
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "    </ul>
";
        $___internal_0b0958937734d0b2487ff8ffc2c256ff038469e565f8fbc823aefa79938ebf8e_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 182
        echo twig_spaceless($___internal_0b0958937734d0b2487ff8ffc2c256ff038469e565f8fbc823aefa79938ebf8e_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 198
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 199
        ob_start();
        // line 200
        echo "    ";
        if ((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 200, $this->source); })()) && (isset($context["placeholder"]) || array_key_exists("placeholder", $context))) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 200, $this->source); })())))) {
            // line 201
            echo "        ";
            $context["required"] = false;
            // line 202
            echo "    ";
        } elseif (((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 202, $this->source); })()) && (isset($context["empty_value"]) || array_key_exists("empty_value", $context))) && (isset($context["empty_value_in_choices"]) || array_key_exists("empty_value_in_choices", $context))) && (null === (isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new RuntimeError('Variable "empty_value" does not exist.', 202, $this->source); })()))) &&  !(isset($context["empty_value_in_choices"]) || array_key_exists("empty_value_in_choices", $context) ? $context["empty_value_in_choices"] : (function () { throw new RuntimeError('Variable "empty_value_in_choices" does not exist.', 202, $this->source); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 202, $this->source); })()))) {
            // line 203
            echo "        ";
            $context["required"] = false;
            // line 204
            echo "    ";
        }
        // line 205
        echo "
    ";
        // line 206
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 206, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 206)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 206), "")) : ("")) . " form-control")]);
        // line 207
        echo "    ";
        if ((((isset($context["sortable"]) || array_key_exists("sortable", $context)) && (isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 207, $this->source); })())) && (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 207, $this->source); })()))) {
            // line 208
            echo "        ";
            $this->displayBlock("sonata_type_choice_multiple_sortable", $context, $blocks);
            echo "
    ";
        } else {
            // line 210
            echo "        ";
            $context["data_placeholder"] = (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 210, $this->source); })());
            // line 211
            echo "        ";
            if ((0 !== twig_compare((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 211, $this->source); })()), ""))) {
                // line 212
                echo "            ";
                if ( !twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 212, $this->source); })()), "admin", [], "any", false, false, false, 212)) {
                    // line 213
                    echo "                ";
                    $context["data_placeholder"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 213, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 213, $this->source); })()));
                    // line 214
                    echo "            ";
                } else {
                    // line 215
                    echo "                ";
                    $context["data_placeholder"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 215, $this->source); })()), [], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 215, $this->source); })()), "field_description", [], "any", false, false, false, 215), "translationDomain", [], "any", false, false, false, 215));
                    // line 216
                    echo "            ";
                }
                // line 217
                echo "        ";
            }
            // line 218
            echo "
        ";
            // line 219
            $context["use_select2"] = ((isset($context["sonata_config"]) || array_key_exists("sonata_config", $context)) && twig_get_attribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 219, $this->source); })()), "getOption", [0 => "use_select2"], "method", false, false, false, 219));
            // line 220
            echo "
        <select ";
            // line 221
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 221, $this->source); })())) {
                echo " multiple=\"multiple\"";
            }
            if ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context)) &&  !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 221, $this->source); })()))) && (isset($context["use_select2"]) || array_key_exists("use_select2", $context) ? $context["use_select2"] : (function () { throw new RuntimeError('Variable "use_select2" does not exist.', 221, $this->source); })()))) {
                echo " data-placeholder=\"";
                echo twig_escape_filter($this->env, (isset($context["data_placeholder"]) || array_key_exists("data_placeholder", $context) ? $context["data_placeholder"] : (function () { throw new RuntimeError('Variable "data_placeholder" does not exist.', 221, $this->source); })()), "html", null, true);
                echo "\"";
            }
            echo ">
            ";
            // line 222
            if (((isset($context["empty_value"]) || array_key_exists("empty_value", $context)) &&  !(null === (isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new RuntimeError('Variable "empty_value" does not exist.', 222, $this->source); })())))) {
                // line 223
                echo "                <option value=\"\"";
                if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 223, $this->source); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 223, $this->source); })())))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 224
                if ((0 !== twig_compare((isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new RuntimeError('Variable "empty_value" does not exist.', 224, $this->source); })()), ""))) {
                    // line 225
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 225, $this->source); })()), "admin", [], "any", false, false, false, 225)) {
                        // line 226
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new RuntimeError('Variable "empty_value" does not exist.', 226, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 226, $this->source); })())), "html", null, true);
                    } else {
                        // line 228
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new RuntimeError('Variable "empty_value" does not exist.', 228, $this->source); })()), [], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 228, $this->source); })()), "field_description", [], "any", false, false, false, 228), "translationDomain", [], "any", false, false, false, 228)), "html", null, true);
                    }
                    // line 230
                    echo "                    ";
                }
                // line 231
                echo "                </option>
            ";
            } elseif ((            // line 232
(isset($context["placeholder"]) || array_key_exists("placeholder", $context)) &&  !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 232, $this->source); })())))) {
                // line 233
                echo "                <option value=\"\"";
                if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 233, $this->source); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 233, $this->source); })())))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["data_placeholder"]) || array_key_exists("data_placeholder", $context) ? $context["data_placeholder"] : (function () { throw new RuntimeError('Variable "data_placeholder" does not exist.', 233, $this->source); })()), "html", null, true);
                echo "</option>
            ";
            }
            // line 235
            echo "            ";
            if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new RuntimeError('Variable "preferred_choices" does not exist.', 235, $this->source); })())), 0))) {
                // line 236
                echo "                ";
                $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new RuntimeError('Variable "preferred_choices" does not exist.', 236, $this->source); })());
                // line 237
                echo "                ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                ";
                // line 238
                if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 238, $this->source); })())), 0))) {
                    // line 239
                    echo "                    <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new RuntimeError('Variable "separator" does not exist.', 239, $this->source); })()), "html", null, true);
                    echo "</option>
                ";
                }
                // line 241
                echo "            ";
            }
            // line 242
            echo "            ";
            $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 242, $this->source); })());
            // line 243
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
        </select>
    ";
        }
        $___internal_7dcbe8eb64d74558762eef79802e03ab1751cbea309f4100c8b4dae3bb64a3c1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 199
        echo twig_spaceless($___internal_7dcbe8eb64d74558762eef79802e03ab1751cbea309f4100c8b4dae3bb64a3c1_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 249
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 250
        ob_start();
        // line 251
        echo "    ";
        if ((0 === twig_compare((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 251, $this->source); })()), "single_text"))) {
            // line 252
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 254
            echo "        ";
            if (( !(isset($context["row"]) || array_key_exists("row", $context)) || (0 === twig_compare((isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 254, $this->source); })()), true)))) {
                // line 255
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 255, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 255)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 255), "")) : ("")) . " row")]);
                // line 256
                echo "        ";
            }
            // line 257
            echo "        ";
            $context["input_wrapper_class"] = (((isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context))) ? (_twig_default_filter((isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new RuntimeError('Variable "input_wrapper_class" does not exist.', 257, $this->source); })()), "col-sm-4")) : ("col-sm-4"));
            // line 258
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 259
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new RuntimeError('Variable "date_pattern" does not exist.', 259, $this->source); })()), ["{{ year }}" => (((("<div class=\"" .             // line 260
(isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new RuntimeError('Variable "input_wrapper_class" does not exist.', 260, $this->source); })())) . "\">") . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 260, $this->source); })()), "year", [], "any", false, false, false, 260), 'widget')) . "</div>"), "{{ month }}" => (((("<div class=\"" .             // line 261
(isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new RuntimeError('Variable "input_wrapper_class" does not exist.', 261, $this->source); })())) . "\">") . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), "month", [], "any", false, false, false, 261), 'widget')) . "</div>"), "{{ day }}" => (((("<div class=\"" .             // line 262
(isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new RuntimeError('Variable "input_wrapper_class" does not exist.', 262, $this->source); })())) . "\">") . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 262, $this->source); })()), "day", [], "any", false, false, false, 262), 'widget')) . "</div>")]);
            // line 263
            echo "
        </div>
    ";
        }
        $___internal_93be43f3c8bf7c0cd908199b6c4507d36af3c4c9ef525ecc5d3844324859f4c0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 250
        echo twig_spaceless($___internal_93be43f3c8bf7c0cd908199b6c4507d36af3c4c9ef525ecc5d3844324859f4c0_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 269
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        // line 270
        ob_start();
        // line 271
        echo "    ";
        if ((0 === twig_compare((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 271, $this->source); })()), "single_text"))) {
            // line 272
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 274
            echo "        ";
            if (( !(isset($context["row"]) || array_key_exists("row", $context)) || (0 === twig_compare((isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 274, $this->source); })()), true)))) {
                // line 275
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 275, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 275)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 275), "")) : ("")) . " row")]);
                // line 276
                echo "        ";
            }
            // line 277
            echo "        ";
            $context["input_wrapper_class"] = (((isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context))) ? (_twig_default_filter((isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new RuntimeError('Variable "input_wrapper_class" does not exist.', 277, $this->source); })()), "col-sm-6")) : ("col-sm-6"));
            // line 278
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"";
            // line 279
            echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new RuntimeError('Variable "input_wrapper_class" does not exist.', 279, $this->source); })()), "html", null, true);
            echo "\">
                ";
            // line 280
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "hour", [], "any", false, false, false, 280), 'widget');
            echo "
            </div>
            ";
            // line 282
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new RuntimeError('Variable "with_minutes" does not exist.', 282, $this->source); })())) {
                // line 283
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new RuntimeError('Variable "input_wrapper_class" does not exist.', 283, $this->source); })()), "html", null, true);
                echo "\">
                    ";
                // line 284
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 284, $this->source); })()), "minute", [], "any", false, false, false, 284), 'widget');
                echo "
                </div>
            ";
            }
            // line 287
            echo "            ";
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 287, $this->source); })())) {
                // line 288
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new RuntimeError('Variable "input_wrapper_class" does not exist.', 288, $this->source); })()), "html", null, true);
                echo "\">
                    ";
                // line 289
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 289, $this->source); })()), "second", [], "any", false, false, false, 289), 'widget');
                echo "
                </div>
            ";
            }
            // line 292
            echo "        </div>
    ";
        }
        $___internal_cc5187b37c75604ece5bacfdd881daf194ae9a51a1b8b7249391495146c3f739_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 270
        echo twig_spaceless($___internal_cc5187b37c75604ece5bacfdd881daf194ae9a51a1b8b7249391495146c3f739_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 297
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 298
        ob_start();
        // line 299
        echo "    ";
        if ((0 === twig_compare((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 299, $this->source); })()), "single_text"))) {
            // line 300
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 302
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 302, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 302)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 302), "")) : ("")) . " row")]);
            // line 303
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 304
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 304, $this->source); })()), "date", [], "any", false, false, false, 304), 'errors');
            echo "
            ";
            // line 305
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 305, $this->source); })()), "time", [], "any", false, false, false, 305), 'errors');
            echo "

            ";
            // line 307
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 307, $this->source); })()), "date", [], "any", false, false, false, 307), "vars", [], "any", false, false, false, 307), "widget", [], "any", false, false, false, 307), "single_text"))) {
                // line 308
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 309
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 309, $this->source); })()), "date", [], "any", false, false, false, 309), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 312
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 312, $this->source); })()), "date", [], "any", false, false, false, 312), 'widget', ["row" => false, "input_wrapper_class" => "col-sm-2"]);
                echo "
            ";
            }
            // line 314
            echo "
            ";
            // line 315
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 315, $this->source); })()), "time", [], "any", false, false, false, 315), "vars", [], "any", false, false, false, 315), "widget", [], "any", false, false, false, 315), "single_text"))) {
                // line 316
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 317
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 317, $this->source); })()), "time", [], "any", false, false, false, 317), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 320
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 320, $this->source); })()), "time", [], "any", false, false, false, 320), 'widget', ["row" => false, "input_wrapper_class" => "col-sm-2"]);
                echo "
            ";
            }
            // line 322
            echo "        </div>
    ";
        }
        $___internal_895bf57680d349fa6045cae93b6e3b767ca5d1658746fac52b16644f0242f3a8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 298
        echo twig_spaceless($___internal_895bf57680d349fa6045cae93b6e3b767ca5d1658746fac52b16644f0242f3a8_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 327
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 328
        echo "    ";
        $context["show_label"] = (($context["show_label"]) ?? (true));
        // line 329
        echo "    ";
        $context["row_id"] = ("sonata-ba-field-container-" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 329, $this->source); })()));
        // line 330
        echo "    ";
        $context["row_class"] = twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 330)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 330), "")) : ("")) . " form-group") . (((1 === twig_compare(twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 330, $this->source); })())), 0))) ? (" has-error") : (""))));
        // line 331
        echo "    <div";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context;
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ["attr" => twig_array_merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 331, $this->source); })()), ["id" => (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 331, $this->source); })()), "class" => (isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 331, $this->source); })())])];
        if (!twig_test_iterable($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 331, $this->getSourceContext());
        }
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_to_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4;
        echo ">
        ";
        // line 332
        $context["div_class"] = "sonata-ba-field";
        // line 333
        echo "
        ";
        // line 334
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 334, $this->source); })()) === false)) {
            // line 335
            echo "            ";
            $context["div_class"] = ((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new RuntimeError('Variable "div_class" does not exist.', 335, $this->source); })()) . " sonata-collection-row-without-label");
            // line 336
            echo "        ";
        }
        // line 337
        echo "
        ";
        // line 338
        if (((isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 338, $this->source); })()), "options", [], "any", false, false, false, 338), "form_type", [], "array", false, false, false, 338), "horizontal")))) {
            // line 339
            echo "            ";
            // line 340
            echo "            ";
            if ((((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 340, $this->source); })()) === false) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 340), "checked", [], "any", true, true, false, 340))) {
                // line 341
                echo "                ";
                if (twig_in_filter("collection", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 341, $this->source); })()), "parent", [], "any", false, false, false, 341), "vars", [], "any", false, false, false, 341), "block_prefixes", [], "any", false, false, false, 341))) {
                    // line 342
                    echo "                    ";
                    $context["div_class"] = ((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new RuntimeError('Variable "div_class" does not exist.', 342, $this->source); })()) . " col-sm-12");
                    // line 343
                    echo "                ";
                } else {
                    // line 344
                    echo "                    ";
                    $context["div_class"] = ((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new RuntimeError('Variable "div_class" does not exist.', 344, $this->source); })()) . " col-sm-9 col-sm-offset-3");
                    // line 345
                    echo "                ";
                }
                // line 346
                echo "            ";
            } else {
                // line 347
                echo "                ";
                $context["div_class"] = ((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new RuntimeError('Variable "div_class" does not exist.', 347, $this->source); })()) . " col-sm-9");
                // line 348
                echo "            ";
            }
            // line 349
            echo "        ";
        }
        // line 350
        echo "
        ";
        // line 351
        if ((isset($context["show_label"]) || array_key_exists("show_label", $context) ? $context["show_label"] : (function () { throw new RuntimeError('Variable "show_label" does not exist.', 351, $this->source); })())) {
            // line 352
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 352, $this->source); })()), 'label', (twig_test_empty($_label_ = (((isset($context["label"]) || array_key_exists("label", $context))) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 352, $this->source); })()), null)) : (null))) ? [] : ["label" => $_label_]));
            echo "
        ";
        }
        // line 354
        echo "
        ";
        // line 355
        if (((isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context)) && (isset($context["sonata_admin_enabled"]) || array_key_exists("sonata_admin_enabled", $context) ? $context["sonata_admin_enabled"] : (function () { throw new RuntimeError('Variable "sonata_admin_enabled" does not exist.', 355, $this->source); })()))) {
            // line 356
            echo "            ";
            $context["div_class"] = (((((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new RuntimeError('Variable "div_class" does not exist.', 356, $this->source); })()) . " sonata-ba-field-") . twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 356, $this->source); })()), "edit", [], "any", false, false, false, 356)) . "-") . twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 356, $this->source); })()), "inline", [], "any", false, false, false, 356));
            // line 357
            echo "        ";
        }
        // line 358
        echo "
        ";
        // line 359
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 359, $this->source); })())), 0))) {
            // line 360
            echo "            ";
            $context["div_class"] = ((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new RuntimeError('Variable "div_class" does not exist.', 360, $this->source); })()) . " sonata-ba-field-error");
            // line 361
            echo "        ";
        }
        // line 362
        echo "
        <div class=\"";
        // line 363
        echo twig_escape_filter($this->env, (isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new RuntimeError('Variable "div_class" does not exist.', 363, $this->source); })()), "html", null, true);
        echo "\">
            ";
        // line 364
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 364, $this->source); })()), 'widget', ["horizontal" => false, "horizontal_input_wrapper_class" => ""]);
        echo " ";
        // line 365
        echo "
            ";
        // line 366
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 366, $this->source); })())), 0))) {
            // line 367
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 368
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 368, $this->source); })()), 'errors');
            echo "
                </div>
            ";
        }
        // line 371
        echo "
            ";
        // line 372
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 372, $this->source); })()), 'help');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 377
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 378
        $context["show_label"] = false;
        // line 379
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 382
    public function block_radio_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_row"));

        // line 383
        $context["show_label"] = false;
        // line 384
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 387
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget_row"));

        // line 388
        ob_start();
        // line 389
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 390
        if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 390, $this->source); })())) {
            // line 391
            echo "            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fas fa-minus-circle\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        ";
        }
        // line 399
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 399, $this->source); })()), 'row', ["label" => false]);
        echo "
        ";
        // line 400
        if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 400, $this->source); })())) {
            // line 401
            echo "                </div>
            </div>
        ";
        }
        // line 404
        echo "    </div>
";
        $___internal_8260874faca928fa46a3c841b05053298e72e293367424d263f5d1ae1b401230_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 388
        echo twig_spaceless($___internal_8260874faca928fa46a3c841b05053298e72e293367424d263f5d1ae1b401230_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 408
    public function block_sonata_type_native_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget"));

        // line 409
        ob_start();
        // line 410
        echo "    ";
        if ((isset($context["prototype"]) || array_key_exists("prototype", $context))) {
            // line 411
            echo "        ";
            $context["child"] = (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 411, $this->source); })());
            // line 412
            echo "        ";
            $context["allow_delete_backup"] = (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 412, $this->source); })());
            // line 413
            echo "        ";
            $context["allow_delete"] = true;
            // line 414
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 414, $this->source); })()), ["data-prototype" =>             $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 414, $this->source); })()), "vars", [], "any", false, false, false, 414), "name", [], "any", false, false, false, 414), "class" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 414)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 414), "")) : (""))]);
            // line 415
            echo "        ";
            $context["allow_delete"] = (isset($context["allow_delete_backup"]) || array_key_exists("allow_delete_backup", $context) ? $context["allow_delete_backup"] : (function () { throw new RuntimeError('Variable "allow_delete_backup" does not exist.', 415, $this->source); })());
            // line 416
            echo "    ";
        }
        // line 417
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 418
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 418, $this->source); })()), 'errors');
        echo "
        ";
        // line 419
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 419, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 420
            echo "            ";
            $this->displayBlock("sonata_type_native_collection_widget_row", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 422
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 422, $this->source); })()), 'rest');
        echo "
        ";
        // line 423
        if ((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new RuntimeError('Variable "allow_add" does not exist.', 423, $this->source); })())) {
            // line 424
            echo "            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fas fa-plus-circle\" aria-hidden=\"true\"></i></a></div>
        ";
        }
        // line 426
        echo "    </div>
";
        $___internal_55ce0298771803e0b3751ab4d0384745da7252b56199a154da32993f251c6ff4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 409
        echo twig_spaceless($___internal_55ce0298771803e0b3751ab4d0384745da7252b56199a154da32993f251c6ff4_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 430
    public function block_sonata_type_immutable_array_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget"));

        // line 431
        echo "    ";
        ob_start();
        // line 432
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 433
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 433, $this->source); })()), 'errors');
        echo "

            ";
        // line 435
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 435, $this->source); })()));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 436
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 438
        echo "
            ";
        // line 439
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 439, $this->source); })()), 'rest');
        echo "
        </div>
    ";
        $___internal_b152c2a2bb355a9f85a491fc8502c768acdfad3d122f300fdf9476a781d7bb46_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 431
        echo twig_spaceless($___internal_b152c2a2bb355a9f85a491fc8502c768acdfad3d122f300fdf9476a781d7bb46_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 444
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget_row"));

        // line 445
        echo "    ";
        ob_start();
        // line 446
        echo "        <div class=\"form-group";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 446, $this->source); })()), "vars", [], "any", false, false, false, 446), "errors", [], "any", false, false, false, 446)), 0))) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 446, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 446, $this->source); })()), "html", null, true);
        echo "\">

            ";
        // line 448
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 448, $this->source); })()), 'label');
        echo "

            ";
        // line 450
        $context["div_class"] = "";
        // line 451
        echo "            ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 451, $this->source); })()), "options", [], "any", false, false, false, 451), "form_type", [], "array", false, false, false, 451), "horizontal"))) {
            // line 452
            echo "                ";
            $context["div_class"] = "col-sm-9";
            // line 453
            echo "            ";
        }
        // line 454
        echo "
            <div class=\"";
        // line 455
        echo twig_escape_filter($this->env, (isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new RuntimeError('Variable "div_class" does not exist.', 455, $this->source); })()), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 455, $this->source); })()), "edit", [], "any", false, false, false, 455), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 455, $this->source); })()), "inline", [], "any", false, false, false, 455), "html", null, true);
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 455, $this->source); })()), "vars", [], "any", false, false, false, 455), "errors", [], "any", false, false, false, 455)), 0))) {
            echo " sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 456
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 456, $this->source); })()), 'widget', ["horizontal" => false, "horizontal_input_wrapper_class" => ""]);
        echo " ";
        // line 457
        echo "            </div>

            ";
        // line 459
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 459, $this->source); })()), "vars", [], "any", false, false, false, 459), "errors", [], "any", false, false, false, 459)), 0))) {
            // line 460
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 461
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 461, $this->source); })()), 'errors');
            echo "
                </div>
            ";
        }
        // line 464
        echo "        </div>
    ";
        $___internal_0fdc62c6b73ae4764e224b6c8117e17dca30ce37ea4e4e62f57ce72ea5d4d15c_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 445
        echo twig_spaceless($___internal_0fdc62c6b73ae4764e224b6c8117e17dca30ce37ea4e4e62f57ce72ea5d4d15c_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 468
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        // line 469
        echo "    ";
        $this->loadTemplate((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 469, $this->source); })()), "@SonataAdmin/Form/form_admin_fields.html.twig", 469)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 472
    public function block_sonata_type_choice_field_mask_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_choice_field_mask_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_choice_field_mask_widget"));

        // line 473
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 475
        echo "    ";
        $context["main_form_name"] = twig_slice($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 475, $this->source); })()), 0, ((twig_length_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 475, $this->source); })())) - twig_length_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 475, $this->source); })()))) - 1));
        // line 476
        echo "    ";
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new RuntimeError('Variable "expanded" does not exist.', 476, $this->source); })())) {
            // line 477
            echo "        ";
            $context["js_selector"] = (((("#" . (isset($context["main_form_name"]) || array_key_exists("main_form_name", $context) ? $context["main_form_name"] : (function () { throw new RuntimeError('Variable "main_form_name" does not exist.', 477, $this->source); })())) . "_") . (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 477, $this->source); })())) . " input");
            // line 478
            echo "        ";
            $context["js_event"] = "ifChecked";
            // line 479
            echo "    ";
        } else {
            // line 480
            echo "        ";
            $context["js_selector"] = ((("#" . (isset($context["main_form_name"]) || array_key_exists("main_form_name", $context) ? $context["main_form_name"] : (function () { throw new RuntimeError('Variable "main_form_name" does not exist.', 480, $this->source); })())) . "_") . (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 480, $this->source); })()));
            // line 481
            echo "        ";
            $context["js_event"] = "change";
            // line 482
            echo "    ";
        }
        // line 483
        echo "    <script>
        jQuery(document).ready(function() {
            var allFields = ";
        // line 485
        echo json_encode((isset($context["all_fields"]) || array_key_exists("all_fields", $context) ? $context["all_fields"] : (function () { throw new RuntimeError('Variable "all_fields" does not exist.', 485, $this->source); })()));
        echo ",
                map = ";
        // line 486
        echo json_encode((isset($context["map"]) || array_key_exists("map", $context) ? $context["map"] : (function () { throw new RuntimeError('Variable "map" does not exist.', 486, $this->source); })()));
        echo ",
                showMaskChoiceEl = jQuery(\"";
        // line 487
        echo twig_escape_filter($this->env, (isset($context["js_selector"]) || array_key_exists("js_selector", $context) ? $context["js_selector"] : (function () { throw new RuntimeError('Variable "js_selector" does not exist.', 487, $this->source); })()), "html", null, true);
        echo "\");

            showMaskChoiceEl.on(\"";
        // line 489
        echo twig_escape_filter($this->env, (isset($context["js_event"]) || array_key_exists("js_event", $context) ? $context["js_event"] : (function () { throw new RuntimeError('Variable "js_event" does not exist.', 489, $this->source); })()), "html", null, true);
        echo "\", function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val) {
                var controlGroupIdFunc = function (field) {
                    // Most of fields are named with an underscore
                    var defaultFieldId = '#sonata-ba-field-container-";
        // line 496
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) || array_key_exists("main_form_name", $context) ? $context["main_form_name"] : (function () { throw new RuntimeError('Variable "main_form_name" does not exist.', 496, $this->source); })()), "html", null, true);
        echo "_' + field;

                    // Some fields may be named with a dash (like keys of immutable array form type)
                    if (jQuery(defaultFieldId).length === 0) {
                        return '#sonata-ba-field-container-";
        // line 500
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) || array_key_exists("main_form_name", $context) ? $context["main_form_name"] : (function () { throw new RuntimeError('Variable "main_form_name" does not exist.', 500, $this->source); })()), "html", null, true);
        echo "-' + field;
                    }

                    return defaultFieldId;
                };

                jQuery.each(allFields, function (i, field) {
                    var fieldContainer = controlGroupIdFunc(field);
                    jQuery(fieldContainer).hide();
                    jQuery(fieldContainer).find('[required=\"required\"]').attr('data-required', 'required').removeAttr(\"required\");
                });

                if (map[val]) {
                    jQuery.each(map[val], function (i, field) {
                        var fieldContainer = controlGroupIdFunc(field);
                        jQuery(fieldContainer).show();
                        jQuery(fieldContainer).find('[data-required=\"required\"]').attr(\"required\", \"required\");
                    });
                }
            }

            ";
        // line 521
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 521, $this->source); })()))) {
            // line 522
            echo "                choice_field_mask_show(showMaskChoiceEl.val());
            ";
        } else {
            // line 524
            echo "                choice_field_mask_show('";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 524, $this->source); })()), "js"), "html", null, true);
            echo "');
            ";
        }
        // line 526
        echo "        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 531
    public function block_sonata_type_choice_multiple_sortable($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_choice_multiple_sortable"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_choice_multiple_sortable"));

        // line 532
        echo "    <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 532, $this->source); })()), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 532, $this->source); })()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 532, $this->source); })()), ","), "html", null, true);
        echo "\" />

    <script>
        jQuery(document).ready(function() {
            var options = {};

            ";
        // line 538
        $this->displayBlock('sonata_type_model_autocomplete_select2_options_js', $context, $blocks);
        // line 539
        echo "
            Admin.setup_sortable_select2(jQuery('#";
        // line 540
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 540, $this->source); })()), "html", null, true);
        echo "'), ";
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 540, $this->source); })()), "vars", [], "any", false, false, false, 540), "choices", [], "any", false, false, false, 540));
        echo ", options);
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 538
    public function block_sonata_type_model_autocomplete_select2_options_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_select2_options_js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_select2_options_js"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 545
    public function block_sonata_type_model_list_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_list_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_list_widget"));

        // line 546
        echo "    <div id=\"field_container_";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 546, $this->source); })()), "html", null, true);
        echo "\" class=\"field-container\">
        <span id=\"field_widget_";
        // line 547
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 547, $this->source); })()), "html", null, true);
        echo "\" class=\"field-short-description\">
            ";
        // line 548
        if ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 548, $this->source); })()), "value", [], "any", false, false, false, 548) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 548, $this->source); })()), "field_description", [], "any", false, false, false, 548), "associationadmin", [], "any", false, false, false, 548), "urlSafeIdentifier", [0 => twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 548, $this->source); })()), "value", [], "any", false, false, false, 548)], "method", false, false, false, 548)))) {
            // line 549
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_short_object_information", ((["_sonata_admin" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 550
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 550, $this->source); })()), "field_description", [], "any", false, false, false, 550), "associationadmin", [], "any", false, false, false, 550), "baseCodeRoute", [], "any", false, false, false, 550), "objectId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 551
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 551, $this->source); })()), "field_description", [], "any", false, false, false, 551), "associationadmin", [], "any", false, false, false, 551), "urlSafeIdentifier", [0 => twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 551, $this->source); })()), "value", [], "any", false, false, false, 551)], "method", false, false, false, 551), "uniqid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 552
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 552, $this->source); })()), "field_description", [], "any", false, false, false, 552), "associationadmin", [], "any", false, false, false, 552), "uniqid", [], "any", false, false, false, 552), "linkParameters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 553
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 553, $this->source); })()), "field_description", [], "any", false, false, false, 553), "option", [0 => "link_parameters", 1 => []], "method", false, false, false, 553)] + ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 555
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 555, $this->source); })()), "field_description", [], "any", false, false, false, 555), "associationadmin", [], "any", false, false, false, 555), "hasRequest", [], "method", false, false, false, 555)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 556
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 556, $this->source); })()), "field_description", [], "any", false, false, false, 556), "associationadmin", [], "any", false, false, false, 556), "request", [], "any", false, false, false, 556), "attributes", [], "any", false, false, false, 556), "get", [0 => "_route_params", 1 => []], "method", false, false, false, 556)) : ([]))) + ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 558
($context["app"] ?? null), "request", [], "any", false, true, false, 558), "query", [], "any", false, true, false, 558), "all", [], "any", true, true, false, 558)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 558), "query", [], "any", false, true, false, 558), "all", [], "any", false, false, false, 558), [])) : ([])))));
            // line 559
            echo "
            ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 560
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 560, $this->source); })()), "field_description", [], "any", false, false, false, 560), "option", [0 => "placeholder", 1 => "short_object_description_placeholder"], "method", false, false, false, 560)) {
            // line 561
            echo "                <span class=\"inner-field-short-description\">
                    ";
            // line 562
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 562, $this->source); })()), "field_description", [], "any", false, false, false, 562), "option", [0 => "placeholder", 1 => "short_object_description_placeholder"], "method", false, false, false, 562), [], "SonataAdminBundle"), "html", null, true);
            echo "
                </span>
            ";
        }
        // line 565
        echo "        </span>
        <span id=\"field_actions_";
        // line 566
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 566, $this->source); })()), "html", null, true);
        echo "\" class=\"field-actions\">
            <span class=\"btn-group\">
                ";
        // line 568
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 568, $this->source); })()), "field_description", [], "any", false, false, false, 568), "associationadmin", [], "any", false, false, false, 568), "hasroute", [0 => "list"], "method", false, false, false, 568) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 568, $this->source); })()), "field_description", [], "any", false, false, false, 568), "associationadmin", [], "any", false, false, false, 568), "hasAccess", [0 => "list"], "method", false, false, false, 568)) && (isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new RuntimeError('Variable "btn_list" does not exist.', 568, $this->source); })()))) {
            // line 569
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 569, $this->source); })()), "field_description", [], "any", false, false, false, 569), "associationadmin", [], "any", false, false, false, 569), "generateUrl", [0 => "list", 1 => ["select" => true]], "method", false, false, false, 569), "html", null, true);
            echo "\"
                       onclick=\"return start_field_dialog_form_list_";
            // line 570
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 570, $this->source); })()), "html", null, true);
            echo "(this);\"
                       class=\"btn btn-info btn-sm sonata-ba-action\"
                       title=\"";
            // line 572
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new RuntimeError('Variable "btn_list" does not exist.', 572, $this->source); })()), [], (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 572, $this->source); })())), "html", null, true);
            echo "\"
                    >
                        <i class=\"fas fa-list\"></i>
                        ";
            // line 575
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new RuntimeError('Variable "btn_list" does not exist.', 575, $this->source); })()), [], (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 575, $this->source); })())), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 578
        echo "
                ";
        // line 579
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 579, $this->source); })()), "field_description", [], "any", false, false, false, 579), "associationadmin", [], "any", false, false, false, 579), "hasroute", [0 => "create"], "method", false, false, false, 579) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 580
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 580, $this->source); })()), "field_description", [], "any", false, false, false, 580), "associationadmin", [], "any", false, false, false, 580), "hasAccess", [0 => "create"], "method", false, false, false, 580)) &&         // line 581
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 581, $this->source); })()))) {
            // line 583
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 583, $this->source); })()), "field_description", [], "any", false, false, false, 583), "associationadmin", [], "any", false, false, false, 583), "generateUrl", [0 => "create"], "method", false, false, false, 583), "html", null, true);
            echo "\"
                       onclick=\"return start_field_dialog_form_add_";
            // line 584
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 584, $this->source); })()), "html", null, true);
            echo "(this);\"
                       class=\"btn btn-success btn-sm sonata-ba-action\"
                       title=\"";
            // line 586
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 586, $this->source); })()), [], (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 586, $this->source); })())), "html", null, true);
            echo "\"
                    >
                        <i class=\"fas fa-plus-circle\"></i>
                        ";
            // line 589
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 589, $this->source); })()), [], (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 589, $this->source); })())), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 592
        echo "                ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 592, $this->source); })()), "field_description", [], "any", false, false, false, 592), "associationadmin", [], "any", false, false, false, 592), "hasroute", [0 => "edit"], "method", false, false, false, 592) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 593
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 593, $this->source); })()), "field_description", [], "any", false, false, false, 593), "associationadmin", [], "any", false, false, false, 593), "hasAccess", [0 => "edit"], "method", false, false, false, 593)) &&         // line 594
(isset($context["btn_edit"]) || array_key_exists("btn_edit", $context) ? $context["btn_edit"] : (function () { throw new RuntimeError('Variable "btn_edit" does not exist.', 594, $this->source); })()))) {
            // line 596
            echo "                    <a href=\"";
            // line 597
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 596
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 596, $this->source); })()), "value", [], "any", false, false, false, 596), null))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 596, $this->source); })()), "field_description", [], "any", false, false, false, 596), "associationadmin", [], "any", false, false, false, 596), "generateUrl", [0 => "edit", 1 => [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 597
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 597, $this->source); })()), "field_description", [], "any", false, false, false, 597), "associationadmin", [], "any", false, false, false, 597), "idParameter", [], "any", false, false, false, 597) => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 597, $this->source); })()), "field_description", [], "any", false, false, false, 597), "associationadmin", [], "any", false, false, false, 597), "urlSafeIdentifier", [0 => twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 597, $this->source); })()), "value", [], "any", false, false, false, 597)], "method", false, false, false, 597)]], "method", false, false, false, 596), "html", null, true))));
            // line 598
            echo "\"
                       onclick=\"return start_field_dialog_form_edit_";
            // line 599
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 599, $this->source); })()), "html", null, true);
            echo "(this);\"
                       class=\"btn btn-warning btn-sm sonata-ba-action ";
            // line 600
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 600, $this->source); })()), "value", [], "any", false, false, false, 600), null))) {
                echo "hidden";
            }
            echo "\"
                       title=\"";
            // line 601
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_edit"]) || array_key_exists("btn_edit", $context) ? $context["btn_edit"] : (function () { throw new RuntimeError('Variable "btn_edit" does not exist.', 601, $this->source); })()), [], (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 601, $this->source); })())), "html", null, true);
            echo "\"
                    >
                        <i class=\"fas fa-pencil-alt\"></i>
                        ";
            // line 604
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_edit"]) || array_key_exists("btn_edit", $context) ? $context["btn_edit"] : (function () { throw new RuntimeError('Variable "btn_edit" does not exist.', 604, $this->source); })()), [], (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 604, $this->source); })())), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 607
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 610
        if ((isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new RuntimeError('Variable "btn_delete" does not exist.', 610, $this->source); })())) {
            // line 611
            echo "                    <button
                        onclick=\"return remove_selected_element_";
            // line 612
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 612, $this->source); })()), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-danger btn-sm sonata-ba-action\"
                        title=\"";
            // line 614
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new RuntimeError('Variable "btn_delete" does not exist.', 614, $this->source); })()), [], (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 614, $this->source); })())), "html", null, true);
            echo "\"
                    >
                        <i class=\"fas fa-minus-circle\"></i>
                        ";
            // line 617
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new RuntimeError('Variable "btn_delete" does not exist.', 617, $this->source); })()), [], (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 617, $this->source); })())), "html", null, true);
            echo "
                    </button>
                ";
        }
        // line 620
        echo "            </span>
        </span>

        <span style=\"display: none\" >
            ";
        // line 625
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 625, $this->source); })()), 'widget', ["required" => false]);
        echo "
        </span>

        ";
        // line 628
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 628, $this->source); })()), 'help');
        echo "

        <div class=\"modal fade\" id=\"field_dialog_";
        // line 630
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 630, $this->source); })()), "html", null, true);
        echo "\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\"></h4>
                    </div>
                    <div class=\"modal-body\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 644
        $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_many_script.html.twig", "@SonataAdmin/Form/form_admin_fields.html.twig", 644)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Form/form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2028 => 644,  2011 => 630,  2006 => 628,  1999 => 625,  1993 => 620,  1987 => 617,  1981 => 614,  1976 => 612,  1973 => 611,  1971 => 610,  1966 => 607,  1960 => 604,  1954 => 601,  1948 => 600,  1944 => 599,  1941 => 598,  1939 => 597,  1938 => 596,  1937 => 597,  1935 => 596,  1933 => 594,  1932 => 593,  1930 => 592,  1924 => 589,  1918 => 586,  1913 => 584,  1908 => 583,  1906 => 581,  1905 => 580,  1904 => 579,  1901 => 578,  1895 => 575,  1889 => 572,  1884 => 570,  1879 => 569,  1877 => 568,  1872 => 566,  1869 => 565,  1863 => 562,  1860 => 561,  1858 => 560,  1855 => 559,  1853 => 558,  1852 => 556,  1851 => 555,  1850 => 553,  1849 => 552,  1848 => 551,  1847 => 550,  1845 => 549,  1843 => 548,  1839 => 547,  1834 => 546,  1824 => 545,  1806 => 538,  1790 => 540,  1787 => 539,  1785 => 538,  1771 => 532,  1761 => 531,  1748 => 526,  1742 => 524,  1738 => 522,  1736 => 521,  1712 => 500,  1705 => 496,  1695 => 489,  1690 => 487,  1686 => 486,  1682 => 485,  1678 => 483,  1675 => 482,  1672 => 481,  1669 => 480,  1666 => 479,  1663 => 478,  1660 => 477,  1657 => 476,  1654 => 475,  1649 => 473,  1639 => 472,  1628 => 469,  1618 => 468,  1608 => 445,  1604 => 464,  1598 => 461,  1595 => 460,  1593 => 459,  1589 => 457,  1586 => 456,  1575 => 455,  1572 => 454,  1569 => 453,  1566 => 452,  1563 => 451,  1561 => 450,  1556 => 448,  1544 => 446,  1541 => 445,  1531 => 444,  1521 => 431,  1515 => 439,  1512 => 438,  1495 => 436,  1478 => 435,  1473 => 433,  1468 => 432,  1465 => 431,  1455 => 430,  1445 => 409,  1441 => 426,  1437 => 424,  1435 => 423,  1430 => 422,  1413 => 420,  1396 => 419,  1392 => 418,  1387 => 417,  1384 => 416,  1381 => 415,  1378 => 414,  1375 => 413,  1372 => 412,  1369 => 411,  1366 => 410,  1364 => 409,  1354 => 408,  1344 => 388,  1340 => 404,  1335 => 401,  1333 => 400,  1328 => 399,  1318 => 391,  1316 => 390,  1313 => 389,  1311 => 388,  1301 => 387,  1290 => 384,  1288 => 383,  1278 => 382,  1267 => 379,  1265 => 378,  1255 => 377,  1241 => 372,  1238 => 371,  1232 => 368,  1229 => 367,  1227 => 366,  1224 => 365,  1221 => 364,  1217 => 363,  1214 => 362,  1211 => 361,  1208 => 360,  1206 => 359,  1203 => 358,  1200 => 357,  1197 => 356,  1195 => 355,  1192 => 354,  1186 => 352,  1184 => 351,  1181 => 350,  1178 => 349,  1175 => 348,  1172 => 347,  1169 => 346,  1166 => 345,  1163 => 344,  1160 => 343,  1157 => 342,  1154 => 341,  1151 => 340,  1149 => 339,  1147 => 338,  1144 => 337,  1141 => 336,  1138 => 335,  1136 => 334,  1133 => 333,  1131 => 332,  1118 => 331,  1115 => 330,  1112 => 329,  1109 => 328,  1099 => 327,  1089 => 298,  1084 => 322,  1078 => 320,  1072 => 317,  1069 => 316,  1067 => 315,  1064 => 314,  1058 => 312,  1052 => 309,  1049 => 308,  1047 => 307,  1042 => 305,  1038 => 304,  1033 => 303,  1030 => 302,  1024 => 300,  1021 => 299,  1019 => 298,  1009 => 297,  999 => 270,  994 => 292,  988 => 289,  983 => 288,  980 => 287,  974 => 284,  969 => 283,  967 => 282,  962 => 280,  958 => 279,  953 => 278,  950 => 277,  947 => 276,  944 => 275,  941 => 274,  935 => 272,  932 => 271,  930 => 270,  920 => 269,  910 => 250,  904 => 263,  902 => 262,  901 => 261,  900 => 260,  899 => 259,  894 => 258,  891 => 257,  888 => 256,  885 => 255,  882 => 254,  876 => 252,  873 => 251,  871 => 250,  861 => 249,  851 => 199,  843 => 243,  840 => 242,  837 => 241,  831 => 239,  829 => 238,  824 => 237,  821 => 236,  818 => 235,  808 => 233,  806 => 232,  803 => 231,  800 => 230,  797 => 228,  794 => 226,  791 => 225,  789 => 224,  782 => 223,  780 => 222,  768 => 221,  765 => 220,  763 => 219,  760 => 218,  757 => 217,  754 => 216,  751 => 215,  748 => 214,  745 => 213,  742 => 212,  739 => 211,  736 => 210,  730 => 208,  727 => 207,  725 => 206,  722 => 205,  719 => 204,  716 => 203,  713 => 202,  710 => 201,  707 => 200,  705 => 199,  695 => 198,  685 => 182,  681 => 194,  674 => 192,  672 => 191,  670 => 190,  669 => 187,  666 => 186,  662 => 185,  657 => 184,  654 => 183,  652 => 182,  642 => 181,  630 => 177,  627 => 175,  624 => 173,  621 => 171,  619 => 170,  616 => 169,  614 => 168,  612 => 167,  597 => 166,  594 => 165,  591 => 164,  588 => 163,  585 => 162,  582 => 161,  579 => 160,  576 => 159,  573 => 158,  570 => 157,  567 => 156,  565 => 155,  562 => 154,  559 => 153,  556 => 152,  546 => 151,  536 => 148,  526 => 147,  516 => 144,  506 => 143,  496 => 102,  491 => 138,  488 => 136,  485 => 134,  483 => 133,  481 => 132,  479 => 131,  465 => 130,  462 => 129,  458 => 126,  455 => 123,  454 => 122,  453 => 121,  451 => 120,  449 => 119,  446 => 118,  443 => 117,  440 => 116,  437 => 115,  434 => 114,  431 => 113,  429 => 112,  426 => 111,  423 => 110,  421 => 109,  418 => 108,  416 => 107,  413 => 106,  410 => 105,  407 => 104,  404 => 103,  402 => 102,  392 => 101,  381 => 96,  379 => 95,  377 => 94,  374 => 92,  372 => 91,  370 => 90,  360 => 89,  349 => 85,  347 => 84,  345 => 83,  342 => 81,  340 => 80,  338 => 79,  328 => 78,  318 => 69,  311 => 72,  308 => 71,  305 => 70,  302 => 69,  292 => 68,  281 => 65,  277 => 63,  275 => 62,  272 => 61,  269 => 60,  267 => 59,  261 => 57,  259 => 56,  257 => 55,  254 => 54,  251 => 53,  248 => 51,  246 => 50,  236 => 49,  223 => 46,  220 => 45,  210 => 44,  197 => 41,  194 => 40,  191 => 39,  188 => 38,  185 => 37,  175 => 36,  161 => 32,  158 => 31,  155 => 30,  152 => 29,  149 => 28,  147 => 27,  137 => 26,  126 => 23,  122 => 22,  119 => 21,  110 => 19,  106 => 18,  103 => 17,  98 => 16,  96 => 15,  86 => 14,  63 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'form_div_layout.html.twig' %}

{% block form_errors -%}
    {% if errors|length > 0 %}
        {% if not form.parent %}<div class=\"alert alert-danger\">{% endif %}
            <ul class=\"list-unstyled\">
                {% for error in errors %}
                    <li><i class=\"fas fa-exclamation-circle\" aria-hidden=\"true\"></i> {{ error.message }}</li>
                {% endfor %}
            </ul>
        {% if not form.parent %}</div>{% endif %}
    {% endif %}
{%- endblock form_errors %}

{% block form_help -%}
    {% if sonata_admin_translation_domain is defined and translation_domain is null %}
        {% set translation_domain = sonata_admin_translation_domain %}
    {% endif %}
    {% if help is not empty %}
        {% set help_attr = help_attr|merge({class: (help_attr.class|default('') ~ ' help-block sonata-ba-field-help')}) %}
        {{ parent() }}
    {% endif %}
{%- endblock form_help %}

{% block form_widget_simple %}
    {% set type = type|default('text') %}
    {% if type != 'file' %}
        {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {% endif %}
    {{ parent() }}
{% endblock form_widget_simple %}

{% block textarea_widget %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {{ parent() }}
{% endblock textarea_widget %}

{% block money_widget -%}
    {% if money_pattern == '{{ widget }}' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set currencySymbol = money_pattern|replace({'{{ widget }}': ''})|trim %}
        {% if money_pattern matches '/^{{ widget }}/' %}
            <div class=\"input-group\">
                {{- block('form_widget_simple') -}}
                <span class=\"input-group-addon\">{{ currencySymbol }}</span>
            </div>
        {% elseif money_pattern matches '/{{ widget }}\$/' %}
            <div class=\"input-group\">
                <span class=\"input-group-addon\">{{ currencySymbol }}</span>
                {{- block('form_widget_simple') -}}
            </div>
        {% endif %}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget %}
    {% apply spaceless %}
        {% set type = type|default('text') %}
        <div class=\"input-group\">
            {{ block('form_widget_simple') }}
            <span class=\"input-group-addon\">%</span>
        </div>
    {% endapply %}
{% endblock percent_widget %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default('') -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}
{% block form_label %}
{% apply spaceless %}
    {% if label is not same as(false) and sonata_admin.options['form_type'] == 'horizontal' %}
        {% set label_class = 'col-sm-3' %}
    {% endif %}

    {% set label_class = label_class|default('') ~ ' control-label' %}

    {% if label is not same as(false) %}
        {% set label_attr = label_attr|merge({'class': label_attr.class|default('') ~ ' ' ~ label_class }) %}

        {% if not compound %}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {% endif %}
        {% if required %}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}

        {% if label is empty %}
            {%- if label_format is defined and label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}

        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {%- if translation_domain is same as(false) -%}
                {{- label -}}
            {%- elseif not sonata_admin.admin -%}
                {{- label|trans(label_translation_parameters, translation_domain) -}}
            {%- else -%}
                {{- label|trans(label_translation_parameters, sonata_admin.field_description.translationDomain|default(sonata_admin.admin.translationDomain)) -}}
            {%- endif -%}
        </label>
    {% endif %}
{% endapply %}
{% endblock form_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {% if sonata_admin.admin %}
        {% set translation_domain = sonata_admin.field_description.translationDomain %}
    {% endif %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {%- if label is not same as(false) -%}
                <span class=\"control-label__text\">
                    {% if translation_domain is same as(false) %}
                        {{- label -}}
                    {% else %}
                        {{- label|trans(label_translation_parameters, translation_domain) -}}
                    {%- endif -%}
                </span>
            {%- endif -%}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{% block choice_widget_expanded %}
{% apply spaceless %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' list-unstyled'}) %}
    <ul {{ block('widget_container_attributes') }}>
    {% for child in form %}
        <li>
            {{ form_widget(child, {
                'horizontal': false,
                'horizontal_input_wrapper_class': '',
                'translation_domain': choice_translation_domain
            }) }} {# 'horizontal' values are needed to avoid MopaBootstrapBundle messing with the DOM #}
        </li>
    {% endfor %}
    </ul>
{% endapply %}
{% endblock choice_widget_expanded %}

{% block choice_widget_collapsed %}
{% apply spaceless %}
    {% if required and placeholder is defined and placeholder is none %}
        {% set required = false %}
    {% elseif required and empty_value is defined and empty_value_in_choices is defined and empty_value is none and not empty_value_in_choices and not multiple %}
        {% set required = false %}
    {% endif %}

    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {% if (sortable is defined) and sortable and multiple %}
        {{ block('sonata_type_choice_multiple_sortable') }}
    {% else %}
        {% set data_placeholder = placeholder %}
        {% if placeholder != '' %}
            {% if not sonata_admin.admin %}
                {% set data_placeholder = placeholder|trans({}, translation_domain) %}
            {% else %}
                {% set data_placeholder = placeholder|trans({}, sonata_admin.field_description.translationDomain) %}
            {% endif %}
        {% endif %}

        {% set use_select2 = sonata_config is defined and sonata_config.getOption('use_select2') %}

        <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}{% if placeholder is defined and placeholder is not none and use_select2 %} data-placeholder=\"{{ data_placeholder }}\"{% endif %}>
            {% if empty_value is defined and empty_value is not none %}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>
                    {% if empty_value != '' %}
                        {% if not sonata_admin.admin %}
                            {{- empty_value|trans({}, translation_domain) -}}
                        {% else %}
                            {{- empty_value|trans({}, sonata_admin.field_description.translationDomain) -}}
                        {% endif %}
                    {% endif %}
                </option>
            {% elseif placeholder is defined and placeholder is not none %}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ data_placeholder }}</option>
            {% endif %}
            {% if preferred_choices|length > 0 %}
                {% set options = preferred_choices %}
                {{ block('choice_widget_options') }}
                {% if choices|length > 0 %}
                    <option disabled=\"disabled\">{{ separator }}</option>
                {% endif %}
            {% endif %}
            {% set options = choices %}
            {{ block('choice_widget_options') }}
        </select>
    {% endif %}
{% endapply %}
{% endblock choice_widget_collapsed %}

{% block date_widget %}
{% apply spaceless %}
    {% if widget == 'single_text' %}
        {{ block('form_widget_simple') }}
    {% else %}
        {% if row is not defined or row == true %}
            {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}
        {% endif %}
        {% set input_wrapper_class = input_wrapper_class|default('col-sm-4') %}
        <div {{ block('widget_container_attributes') }}>
            {{ date_pattern|replace({
                '{{ year }}':  '<div class=\"'~ input_wrapper_class ~ '\">' ~ form_widget(form.year) ~ '</div>',
                '{{ month }}': '<div class=\"'~ input_wrapper_class ~ '\">' ~ form_widget(form.month) ~ '</div>',
                '{{ day }}':   '<div class=\"'~ input_wrapper_class ~ '\">' ~ form_widget(form.day) ~ '</div>',
            })|raw }}
        </div>
    {% endif %}
{% endapply %}
{% endblock date_widget %}

{% block time_widget %}
{% apply spaceless %}
    {% if widget == 'single_text' %}
        {{ block('form_widget_simple') }}
    {% else %}
        {% if row is not defined or row == true %}
            {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}
        {% endif %}
        {% set input_wrapper_class = input_wrapper_class|default('col-sm-6') %}
        <div {{ block('widget_container_attributes') }}>
            <div class=\"{{ input_wrapper_class }}\">
                {{ form_widget(form.hour) }}
            </div>
            {% if with_minutes %}
                <div class=\"{{ input_wrapper_class }}\">
                    {{ form_widget(form.minute) }}
                </div>
            {% endif %}
            {% if with_seconds %}
                <div class=\"{{ input_wrapper_class }}\">
                    {{ form_widget(form.second) }}
                </div>
            {% endif %}
        </div>
    {% endif %}
{% endapply %}
{% endblock time_widget %}

{% block datetime_widget %}
{% apply spaceless %}
    {% if widget == 'single_text' %}
        {{ block('form_widget_simple') }}
    {% else %}
        {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}
        <div {{ block('widget_container_attributes') }}>
            {{ form_errors(form.date) }}
            {{ form_errors(form.time) }}

            {% if form.date.vars.widget == 'single_text' %}
                <div class=\"col-sm-2\">
                    {{ form_widget(form.date) }}
                </div>
            {% else %}
                {{ form_widget(form.date, {'row': false, 'input_wrapper_class': 'col-sm-2'}) }}
            {% endif %}

            {% if form.time.vars.widget == 'single_text' %}
                <div class=\"col-sm-2\">
                    {{ form_widget(form.time) }}
                </div>
            {% else %}
                {{ form_widget(form.time, {'row': false, 'input_wrapper_class': 'col-sm-2'}) }}
            {% endif %}
        </div>
    {% endif %}
{% endapply %}
{% endblock datetime_widget %}

{% block form_row %}
    {% set show_label = show_label ?? true %}
    {% set row_id = 'sonata-ba-field-container-'~id %}
    {% set row_class = (row_attr.class|default('') ~ ' form-group' ~ (errors|length > 0 ? ' has-error'))|trim %}
    <div{% with {attr: row_attr|merge({id: row_id, class: row_class})} %}{{ block('attributes') }}{% endwith %}>
        {% set div_class = 'sonata-ba-field' %}

        {% if label is same as(false) %}
            {% set div_class = div_class ~ ' sonata-collection-row-without-label' %}
        {% endif %}

        {% if sonata_admin is defined and sonata_admin.options['form_type'] == 'horizontal' %}
            {# Add an offset if no label or is a checkbox/radio #}
            {% if label is same as(false) or form.vars.checked is defined %}
                {% if 'collection' in form.parent.vars.block_prefixes %}
                    {% set div_class = div_class ~ ' col-sm-12' %}
                {% else %}
                    {% set div_class = div_class ~ ' col-sm-9 col-sm-offset-3' %}
                {% endif %}
            {% else %}
                {% set div_class = div_class ~ ' col-sm-9' %}
            {% endif %}
        {% endif %}

        {% if show_label %}
            {{ form_label(form, label|default(null)) }}
        {% endif %}

        {% if sonata_admin is defined and sonata_admin_enabled %}
            {% set div_class = div_class ~ ' sonata-ba-field-' ~ sonata_admin.edit ~ '-' ~ sonata_admin.inline %}
        {% endif %}

        {% if errors|length > 0 %}
            {% set div_class = div_class ~ ' sonata-ba-field-error' %}
        {% endif %}

        <div class=\"{{ div_class }}\">
            {{ form_widget(form, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}

            {% if errors|length > 0 %}
                <div class=\"help-block sonata-ba-field-error-messages\">
                    {{ form_errors(form) }}
                </div>
            {% endif %}

            {{ form_help(form) }}
        </div>
    </div>
{% endblock form_row %}

{% block checkbox_row -%}
    {% set show_label = false %}
    {{ block('form_row') }}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {% set show_label = false %}
    {{ block('form_row') }}
{%- endblock radio_row %}

{% block sonata_type_native_collection_widget_row %}
{% apply spaceless %}
    <div class=\"sonata-collection-row\">
        {% if allow_delete %}
            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fas fa-minus-circle\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        {% endif %}
            {{ form_row(child, { label: false }) }}
        {% if allow_delete %}
                </div>
            </div>
        {% endif %}
    </div>
{% endapply %}
{% endblock sonata_type_native_collection_widget_row %}

{% block sonata_type_native_collection_widget %}
{% apply spaceless %}
    {% if prototype is defined %}
        {% set child = prototype %}
        {% set allow_delete_backup = allow_delete %}
        {% set allow_delete = true %}
        {% set attr = attr|merge({'data-prototype': block('sonata_type_native_collection_widget_row'), 'data-prototype-name': prototype.vars.name, 'class': attr.class|default('') }) %}
        {% set allow_delete = allow_delete_backup %}
    {% endif %}
    <div {{ block('widget_container_attributes') }}>
        {{ form_errors(form) }}
        {% for child in form %}
            {{ block('sonata_type_native_collection_widget_row') }}
        {% endfor %}
        {{ form_rest(form) }}
        {% if allow_add %}
            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fas fa-plus-circle\" aria-hidden=\"true\"></i></a></div>
        {% endif %}
    </div>
{% endapply %}
{% endblock sonata_type_native_collection_widget %}

{% block sonata_type_immutable_array_widget %}
    {% apply spaceless %}
        <div {{ block('widget_container_attributes') }}>
            {{ form_errors(form) }}

            {% for key, child in form %}
                {{ block('sonata_type_immutable_array_widget_row') }}
            {% endfor %}

            {{ form_rest(form) }}
        </div>
    {% endapply %}
{% endblock sonata_type_immutable_array_widget %}

{% block sonata_type_immutable_array_widget_row %}
    {% apply spaceless %}
        <div class=\"form-group{% if child.vars.errors|length > 0 %} has-error{% endif %}\" id=\"sonata-ba-field-container-{{ id }}-{{ key }}\">

            {{ form_label(child) }}

            {% set div_class = \"\" %}
            {% if sonata_admin.options['form_type'] == 'horizontal' %}
                {% set div_class = 'col-sm-9' %}
            {% endif %}

            <div class=\"{{ div_class }} sonata-ba-field sonata-ba-field-{{ sonata_admin.edit }}-{{ sonata_admin.inline }}{% if child.vars.errors|length > 0 %} sonata-ba-field-error{% endif %}\">
                {{ form_widget(child, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}
            </div>

            {% if child.vars.errors|length > 0 %}
                <div class=\"help-block sonata-ba-field-error-messages\">
                    {{ form_errors(child) }}
                </div>
            {% endif %}
        </div>
    {% endapply %}
{% endblock %}

{% block sonata_type_model_autocomplete_widget %}
    {% include template %}
{% endblock sonata_type_model_autocomplete_widget %}

{% block sonata_type_choice_field_mask_widget %}
    {{ block('choice_widget') }}
    {# Taking the form name excluding ending field glue character #}
    {% set main_form_name = id|slice(0, (id|length - name|length)-1) %}
    {% if expanded %}
        {% set js_selector = '#' ~ main_form_name ~ '_' ~ name ~ ' input' %}
        {% set js_event = 'ifChecked' %}
    {% else %}
        {% set js_selector = '#' ~ main_form_name ~ '_' ~ name %}
        {% set js_event = 'change' %}
    {% endif %}
    <script>
        jQuery(document).ready(function() {
            var allFields = {{ all_fields|json_encode|raw }},
                map = {{ map|json_encode|raw }},
                showMaskChoiceEl = jQuery(\"{{ js_selector }}\");

            showMaskChoiceEl.on(\"{{ js_event }}\", function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val) {
                var controlGroupIdFunc = function (field) {
                    // Most of fields are named with an underscore
                    var defaultFieldId = '#sonata-ba-field-container-{{ main_form_name }}_' + field;

                    // Some fields may be named with a dash (like keys of immutable array form type)
                    if (jQuery(defaultFieldId).length === 0) {
                        return '#sonata-ba-field-container-{{ main_form_name }}-' + field;
                    }

                    return defaultFieldId;
                };

                jQuery.each(allFields, function (i, field) {
                    var fieldContainer = controlGroupIdFunc(field);
                    jQuery(fieldContainer).hide();
                    jQuery(fieldContainer).find('[required=\"required\"]').attr('data-required', 'required').removeAttr(\"required\");
                });

                if (map[val]) {
                    jQuery.each(map[val], function (i, field) {
                        var fieldContainer = controlGroupIdFunc(field);
                        jQuery(fieldContainer).show();
                        jQuery(fieldContainer).find('[data-required=\"required\"]').attr(\"required\", \"required\");
                    });
                }
            }

            {% if value is empty %}
                choice_field_mask_show(showMaskChoiceEl.val());
            {% else %}
                choice_field_mask_show('{{ value|e('js') }}');
            {% endif %}
        });

    </script>
{% endblock %}

{% block sonata_type_choice_multiple_sortable %}
    <input type=\"hidden\" name=\"{{ full_name }}\" id=\"{{ id }}\" value=\"{{ value|join(',') }}\" />

    <script>
        jQuery(document).ready(function() {
            var options = {};

            {% block sonata_type_model_autocomplete_select2_options_js %}{% endblock %}

            Admin.setup_sortable_select2(jQuery('#{{ id }}'), {{ form.vars.choices|json_encode|raw }}, options);
        });
    </script>
{% endblock %}

{% block sonata_type_model_list_widget %}
    <div id=\"field_container_{{ id }}\" class=\"field-container\">
        <span id=\"field_widget_{{ id }}\" class=\"field-short-description\">
            {% if sonata_admin.value and sonata_admin.field_description.associationadmin.urlSafeIdentifier(sonata_admin.value) is not null %}
                {{ render(path('sonata_admin_short_object_information', {
                    '_sonata_admin': sonata_admin.field_description.associationadmin.baseCodeRoute,
                    'objectId': sonata_admin.field_description.associationadmin.urlSafeIdentifier(sonata_admin.value),
                    'uniqid': sonata_admin.field_description.associationadmin.uniqid,
                    'linkParameters': sonata_admin.field_description.option('link_parameters', {})
                } + (
                    sonata_admin.field_description.associationadmin.hasRequest()
                    ? sonata_admin.field_description.associationadmin.request.attributes.get('_route_params', {})
                    : {}
                ) + app.request.query.all|default({})
                )) }}
            {% elseif sonata_admin.field_description.option('placeholder', 'short_object_description_placeholder') %}
                <span class=\"inner-field-short-description\">
                    {{ sonata_admin.field_description.option('placeholder', 'short_object_description_placeholder')|trans({}, 'SonataAdminBundle') }}
                </span>
            {% endif %}
        </span>
        <span id=\"field_actions_{{ id }}\" class=\"field-actions\">
            <span class=\"btn-group\">
                {% if sonata_admin.field_description.associationadmin.hasroute('list') and sonata_admin.field_description.associationadmin.hasAccess('list') and btn_list %}
                    <a href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('list', {select: true}) }}\"
                       onclick=\"return start_field_dialog_form_list_{{ id }}(this);\"
                       class=\"btn btn-info btn-sm sonata-ba-action\"
                       title=\"{{ btn_list|trans({}, btn_catalogue) }}\"
                    >
                        <i class=\"fas fa-list\"></i>
                        {{ btn_list|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}

                {% if sonata_admin.field_description.associationadmin.hasroute('create')
                    and sonata_admin.field_description.associationadmin.hasAccess('create')
                    and btn_add
                %}
                    <a href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('create') }}\"
                       onclick=\"return start_field_dialog_form_add_{{ id }}(this);\"
                       class=\"btn btn-success btn-sm sonata-ba-action\"
                       title=\"{{ btn_add|trans({}, btn_catalogue) }}\"
                    >
                        <i class=\"fas fa-plus-circle\"></i>
                        {{ btn_add|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}
                {% if sonata_admin.field_description.associationadmin.hasroute('edit')
                    and sonata_admin.field_description.associationadmin.hasAccess('edit')
                    and btn_edit
                %}
                    <a href=\"{{ sonata_admin.value == null ? '' : sonata_admin.field_description.associationadmin.generateUrl('edit', {
                        (sonata_admin.field_description.associationadmin.idParameter) : sonata_admin.field_description.associationadmin.urlSafeIdentifier(sonata_admin.value)})
                    }}\"
                       onclick=\"return start_field_dialog_form_edit_{{ id }}(this);\"
                       class=\"btn btn-warning btn-sm sonata-ba-action {% if sonata_admin.value == null %}hidden{% endif %}\"
                       title=\"{{ btn_edit|trans({}, btn_catalogue) }}\"
                    >
                        <i class=\"fas fa-pencil-alt\"></i>
                        {{ btn_edit|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}
            </span>

            <span class=\"btn-group\">
                {% if btn_delete %}
                    <button
                        onclick=\"return remove_selected_element_{{ id }}(this);\"
                        class=\"btn btn-danger btn-sm sonata-ba-action\"
                        title=\"{{ btn_delete|trans({}, btn_catalogue) }}\"
                    >
                        <i class=\"fas fa-minus-circle\"></i>
                        {{ btn_delete|trans({}, btn_catalogue) }}
                    </button>
                {% endif %}
            </span>
        </span>

        <span style=\"display: none\" >
            {# Hidden text input cannot be required, because browser will throw error \"An invalid form control with name='' is not focusable\"  #}
            {{ form_widget(form, {'required':false}) }}
        </span>

        {{ form_help(form) }}

        <div class=\"modal fade\" id=\"field_dialog_{{ id }}\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\"></h4>
                    </div>
                    <div class=\"modal-body\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {% include '@SonataAdmin/CRUD/Association/edit_many_script.html.twig' %}
{% endblock %}
", "@SonataAdmin/Form/form_admin_fields.html.twig", "W:\\domains\\Taptima_Backend\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\Form\\form_admin_fields.html.twig");
    }
}
