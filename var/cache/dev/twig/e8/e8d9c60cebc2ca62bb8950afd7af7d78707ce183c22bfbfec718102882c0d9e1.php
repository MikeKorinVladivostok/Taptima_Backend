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

/* @SonataAdmin/Breadcrumb/breadcrumb.html.twig */
class __TwigTemplate_96ffebbc51f942b87bc603e450ad03085310618e5d64235eb80739c4f0a0d06b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Breadcrumb/breadcrumb.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Breadcrumb/breadcrumb.html.twig"));

        // line 1
        ob_start();
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 2, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 3
            $context["translation_domain"] = twig_get_attribute($this->env, $this->source, $context["menu"], "extra", [0 => "translation_domain", 1 => "messages"], "method", false, false, false, 3);
            // line 5
            $context["label"] = twig_get_attribute($this->env, $this->source, $context["menu"], "getLabel", [], "method", false, false, false, 5);
            // line 6
            if ( !((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 6, $this->source); })()) === false)) {
                // line 7
                $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 7, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["menu"], "extra", [0 => "translation_params", 1 => []], "method", false, false, false, 7), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 7, $this->source); })()));
            }
            // line 10
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 10)) {
                // line 11
                echo "        <li>
            ";
                // line 12
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["menu"], "uri", [], "any", false, false, false, 12))) {
                    // line 13
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "uri", [], "any", false, false, false, 13), "html", null, true);
                    echo "\">
                    ";
                    // line 14
                    if (twig_get_attribute($this->env, $this->source, $context["menu"], "extra", [0 => "safe_label", 1 => true], "method", false, false, false, 14)) {
                        // line 15
                        echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 15, $this->source); })());
                    } else {
                        // line 17
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 17, $this->source); })())), "truncate", [0 => 100, 1 => "..."], "method", false, false, false, 17), "html", null, true);
                    }
                    // line 19
                    echo "                </a>
            ";
                } else {
                    // line 21
                    echo "                <span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 21, $this->source); })())), "truncate", [0 => 100, 1 => "..."], "method", false, false, false, 21), "html", null, true);
                    echo "</span>
            ";
                }
                // line 23
                echo "        </li>
    ";
            } else {
                // line 25
                echo "        <li class=\"active\"><span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 25, $this->source); })())), "truncate", [0 => 100, 1 => "..."], "method", false, false, false, 25), "html", null, true);
                echo "</span></li>
    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $___internal_2172615b34e4221a8aeb1e26a60efd64a0dd5aed449d4364e62bd81f2b5f8141_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_2172615b34e4221a8aeb1e26a60efd64a0dd5aed449d4364e62bd81f2b5f8141_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Breadcrumb/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 1,  105 => 25,  101 => 23,  95 => 21,  91 => 19,  88 => 17,  85 => 15,  83 => 14,  78 => 13,  76 => 12,  73 => 11,  71 => 10,  68 => 7,  66 => 6,  64 => 5,  62 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
{% for menu in items %}
    {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
    {# We use method accessor instead of \".label\" since `menu` implements `ArrayAccess` and could have a property called \"label\". #}
    {%- set label = menu.getLabel() -%}
    {%- if translation_domain is not same as(false) -%}
        {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
    {%- endif -%}

    {% if not loop.last %}
        <li>
            {% if menu.uri is not empty %}
                <a href=\"{{ menu.uri }}\">
                    {% if menu.extra('safe_label', true) %}
                        {{- label|raw -}}
                    {% else %}
                        {{- label|u.truncate(100, '...') -}}
                    {% endif %}
                </a>
            {% else %}
                <span>{{ label|u.truncate(100, '...') }}</span>
            {% endif %}
        </li>
    {% else %}
        <li class=\"active\"><span>{{ label|u.truncate(100, '...') }}</span></li>
    {% endif %}
{% endfor %}
{% endapply %}
", "@SonataAdmin/Breadcrumb/breadcrumb.html.twig", "W:\\domains\\Taptima_Backend\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\Breadcrumb\\breadcrumb.html.twig");
    }
}
