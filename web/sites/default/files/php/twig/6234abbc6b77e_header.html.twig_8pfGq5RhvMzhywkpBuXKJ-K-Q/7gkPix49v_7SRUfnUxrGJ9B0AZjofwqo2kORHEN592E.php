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

/* @panache/includes/header.html.twig */
class __TwigTemplate_f257ad4cf79ecdfd29b3ccf60940e871dddcd73bc291db5f0b3b8f847b7a847d extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_left", [], "any", false, false, true, 1) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_center", [], "any", false, false, true, 1)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 1))) {
            // line 2
            echo "  <div class=\"panache-header\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12 col-lg-4\">
          ";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_left", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "
        </div>
        <div class=\"col-sm-12 col-lg-4\">
          ";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_center", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "
        </div>
        <div class=\"col-sm-12 col-lg-4\">
          ";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  </div>
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 17
($context["page"] ?? null), "header_left", [], "any", false, false, true, 17) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_center", [], "any", false, false, true, 17))) {
            // line 18
            echo "  <div class=\"panache-header  panache-header__left-center\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 col-lg-4\">
          ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_left", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "
        </div>
        <div class=\"col-md-12 col-lg-4\">
          ";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_center", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "
        </div>
        <div class=\"col-md-12 col-lg-4\">
          ";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  </div>
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 33
($context["page"] ?? null), "header_center", [], "any", false, false, true, 33) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 33))) {
            // line 34
            echo "
  <div class=\"panache-header panache-header__center-right\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 col-lg-4\">
          ";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_left", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "
        </div>
        <div class=\"col-md-12 col-lg-4\">
          ";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_center", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "
        </div>
        <div class=\"col-md-12 col-lg-4\">
          ";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  </div>

";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 51
($context["page"] ?? null), "header_left", [], "any", false, false, true, 51) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 51))) {
            // line 52
            echo "  <div class=\"panache-header panache-header__left-right\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 col-lg-6\">
          ";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_center", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "
        </div>
        <div class=\"col-md-12 col-lg-6\">
          ";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  </div>
";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 64
($context["page"] ?? null), "header_left", [], "any", false, false, true, 64)) {
            // line 65
            echo "  <div class=\"panache-header panache-header__left\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\" col-lg-12\">
          ";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_left", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  </div>
";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 74
($context["page"] ?? null), "header_center", [], "any", false, false, true, 74)) {
            // line 75
            echo "  <div class=\"panache-header panache-header__center\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\" col-lg-12\">
          ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_center", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  </div>
";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 84
($context["page"] ?? null), "header_right", [], "any", false, false, true, 84)) {
            // line 85
            echo "  <div class=\"panache-header panache-header__right\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\" col-lg-12\">
          ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@panache/includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 89,  181 => 85,  179 => 84,  171 => 79,  165 => 75,  163 => 74,  155 => 69,  149 => 65,  147 => 64,  139 => 59,  133 => 56,  127 => 52,  125 => 51,  116 => 45,  110 => 42,  104 => 39,  97 => 34,  95 => 33,  87 => 28,  81 => 25,  75 => 22,  69 => 18,  67 => 17,  59 => 12,  53 => 9,  47 => 6,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if page.header_left and page.header_center and page.header_right %}
  <div class=\"panache-header\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12 col-lg-4\">
          {{ page.header_left }}
        </div>
        <div class=\"col-sm-12 col-lg-4\">
          {{ page.header_center }}
        </div>
        <div class=\"col-sm-12 col-lg-4\">
          {{ page.header_right }}
        </div>
      </div>
    </div>
  </div>
{% elseif page.header_left and page.header_center %}
  <div class=\"panache-header  panache-header__left-center\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 col-lg-4\">
          {{ page.header_left }}
        </div>
        <div class=\"col-md-12 col-lg-4\">
          {{ page.header_center }}
        </div>
        <div class=\"col-md-12 col-lg-4\">
          {{ page.header_right }}
        </div>
      </div>
    </div>
  </div>
{% elseif page.header_center and page.header_right %}

  <div class=\"panache-header panache-header__center-right\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 col-lg-4\">
          {{ page.header_left }}
        </div>
        <div class=\"col-md-12 col-lg-4\">
          {{ page.header_center }}
        </div>
        <div class=\"col-md-12 col-lg-4\">
          {{ page.header_right }}
        </div>
      </div>
    </div>
  </div>

{% elseif page.header_left and page.header_right %}
  <div class=\"panache-header panache-header__left-right\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 col-lg-6\">
          {{ page.header_center }}
        </div>
        <div class=\"col-md-12 col-lg-6\">
          {{ page.header_right }}
        </div>
      </div>
    </div>
  </div>
{% elseif page.header_left %}
  <div class=\"panache-header panache-header__left\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\" col-lg-12\">
          {{ page.header_left }}
        </div>
      </div>
    </div>
  </div>
{% elseif page.header_center %}
  <div class=\"panache-header panache-header__center\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\" col-lg-12\">
          {{ page.header_center }}
        </div>
      </div>
    </div>
  </div>
{% elseif page.header_right %}
  <div class=\"panache-header panache-header__right\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\" col-lg-12\">
          {{ page.header_right }}
        </div>
      </div>
    </div>
  </div>
{% endif %}", "@panache/includes/header.html.twig", "C:\\wamp64\\www\\recettes\\web\\themes\\contrib\\panache\\templates\\includes\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
