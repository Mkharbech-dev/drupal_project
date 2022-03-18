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

/* themes/custom/formation/templates/layout/page.html.twig */
class __TwigTemplate_7d27690e53c92c7cf09c6df9ff8b7c1f7520b21fc55880f0e3caaf43701ede68 extends \Twig\Template
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
        // line 43
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
<div class=\"container\" id=\"page-wrapper\">
  <header class=\"header\">
    ";
        // line 47
        $this->loadTemplate("@panache/includes/header.html.twig", "themes/custom/formation/templates/layout/page.html.twig", 47)->display($context);
        // line 48
        echo "
    ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_navigation", [], "any", false, false, true, 49)) {
            // line 50
            echo "      ";
            $this->loadTemplate("@panache/includes/header-navigation.html.twig", "themes/custom/formation/templates/layout/page.html.twig", 50)->display($context);
            // line 51
            echo "    ";
        }
        // line 52
        echo "  </header>
<div class=\"row m-3\">
  <div class=\" col-1 themeContainer\">
    <div class=\"theme\" id=\"dark\"></div>
    <div class=\"theme\" id=\"salmon\"></div>
    <div class=\"theme\" id=\"yellow\"></div>
  </div>
  <div class=\"text text-align-center col-11\">
    <p class=\"once p-1 m-2\">clique moi pour agrandir la taille de police</p>
  </div>
</div>
  <main class=\"main-wrapper\">
    ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_slideshow", [], "any", false, false, true, 64)) {
            // line 65
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_slideshow", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 67
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["panache"] ?? null), "display_sample_blocks", [], "any", false, false, true, 67)) {
            // line 68
            echo "      ";
            if (($context["is_front"] ?? null)) {
                // line 69
                echo "        ";
                $this->loadTemplate("@panache/includes/banner-slideshow.html.twig", "themes/custom/formation/templates/layout/page.html.twig", 69)->display($context);
                // line 70
                echo "        ";
                $this->loadTemplate("@panache/includes/sample-introductory-block--block-content.html.twig", "themes/custom/formation/templates/layout/page.html.twig", 70)->display($context);
                // line 71
                echo "        ";
                $this->loadTemplate("@panache/includes/testimonials.html.twig", "themes/custom/formation/templates/layout/page.html.twig", 71)->display($context);
                // line 72
                echo "      ";
            }
            // line 73
            echo "    ";
        }
        // line 74
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 74)) {
            // line 75
            echo "      <section class=\"panache-page-title\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      </section>
    ";
        }
        // line 85
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "left_sidebar", [], "any", false, false, true, 85) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 85))) {
            // line 86
            echo "      <section class=\"container sidebar left-sidebar\">
        <div class=\"row\">
          <div class=\"col-md-5 col-lg-4\">
            ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "left_sidebar", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "
          </div>
          <div class=\"col-md-7 col-lg-8\">
            ";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </section>
    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 96
($context["page"] ?? null), "right_sidebar", [], "any", false, false, true, 96) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 96))) {
            // line 97
            echo "      <section class=\"container sidebar right-sidebar\">
        <div class=\"row\">
          <div class=\"col-md-7 col-lg-8\">
            ";
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo "
          </div>
          <div class=\"col-md-5 col-lg-4\">
            ";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "right_sidebar", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </section>
    ";
        } else {
            // line 108
            echo "      <section class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            ";
            // line 111
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </section>
    ";
        }
        // line 116
        echo "  </main>
  <footer>
    ";
        // line 118
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 118)) {
            // line 119
            echo "      <div class=\"panache-footer\">
        <div class=\"container\">
          ";
            // line 121
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 125
        echo "    ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 125))) {
            // line 126
            echo "      <div class=\"panache-footer\">
        ";
            // line 127
            $this->loadTemplate("@panache/includes/footer.html.twig", "themes/custom/formation/templates/layout/page.html.twig", 127)->display($context);
            // line 128
            echo "      </div>
    ";
        }
        // line 130
        echo "  </footer>
</div>
<div>";
        // line 132
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["formation"] ?? null), "salah_var", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
        echo "</div>
<script>
  //fonction once jquery
  \$(document).ready(function(){
    \$(\".once\").one(\"click\", function(){
      \$(this).animate({fontSize: \"+=14px\"});
    });
  });

  const theme  = document.querySelectorAll('.theme');
  const once = document.querySelector('.once');

  theme.forEach((item) => {
    item.addEventListener('click', ()=>{
      // au debut tu enleve les classe suivantes s'elles exisitent deja
      once.classList.remove(\"darkTheme\",\"salmonTheme\",\"yellowTheme\");
      console.log(item.id);
      // je fais un switch
      switch (item.id) {
        case \"dark\":
          once.classList.add(\"darkTheme\");
          break;
        case \"salmon\":
          once.classList.add(\"salmonTheme\");
          break;
        case \"yellow\":
          once.classList.add(\"yellowTheme\");
        default:
          null;
      }
    })
  })

</script>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/formation/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 132,  203 => 130,  199 => 128,  197 => 127,  194 => 126,  191 => 125,  184 => 121,  180 => 119,  178 => 118,  174 => 116,  166 => 111,  161 => 108,  153 => 103,  147 => 100,  142 => 97,  140 => 96,  133 => 92,  127 => 89,  122 => 86,  119 => 85,  110 => 79,  104 => 75,  101 => 74,  98 => 73,  95 => 72,  92 => 71,  89 => 70,  86 => 69,  83 => 68,  80 => 67,  74 => 65,  72 => 64,  58 => 52,  55 => 51,  52 => 50,  50 => 49,  47 => 48,  45 => 47,  39 => 43,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header_left: Items for the header left region.
 * - page.header_center: Items for the header center region.
 * - page.header_right: Items for the header right region.
 * - page.banner_slideshow: Items for the banner slideshow region.
 * - page.page_title: Items for the pagetitle region.
 * - page.content: The main content of the current page.
 * - page.left_sidebar: Items for the left sidebar.
 * - page.right_second: Items for the right sidebar.
 * - page.footer: Items Footer bottom region.
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
<div class=\"container\" id=\"page-wrapper\">
  <header class=\"header\">
    {% include '@panache/includes/header.html.twig' %}

    {% if page.header_navigation %}
      {% include '@panache/includes/header-navigation.html.twig' %}
    {% endif %}
  </header>
<div class=\"row m-3\">
  <div class=\" col-1 themeContainer\">
    <div class=\"theme\" id=\"dark\"></div>
    <div class=\"theme\" id=\"salmon\"></div>
    <div class=\"theme\" id=\"yellow\"></div>
  </div>
  <div class=\"text text-align-center col-11\">
    <p class=\"once p-1 m-2\">clique moi pour agrandir la taille de police</p>
  </div>
</div>
  <main class=\"main-wrapper\">
    {% if page.banner_slideshow %}
      {{ page.banner_slideshow }}
    {% endif %}
    {% if panache.display_sample_blocks %}
      {% if is_front %}
        {% include '@panache/includes/banner-slideshow.html.twig' %}
        {% include '@panache/includes/sample-introductory-block--block-content.html.twig' %}
        {% include '@panache/includes/testimonials.html.twig' %}
      {% endif %}
    {% endif %}
    {% if page.page_title %}
      <section class=\"panache-page-title\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ page.page_title }}
            </div>
          </div>
        </div>
      </section>
    {% endif %}
    {% if page.left_sidebar and page.content %}
      <section class=\"container sidebar left-sidebar\">
        <div class=\"row\">
          <div class=\"col-md-5 col-lg-4\">
            {{ page.left_sidebar }}
          </div>
          <div class=\"col-md-7 col-lg-8\">
            {{ page.content }}
          </div>
        </div>
      </section>
    {% elseif page.right_sidebar and page.content %}
      <section class=\"container sidebar right-sidebar\">
        <div class=\"row\">
          <div class=\"col-md-7 col-lg-8\">
            {{ page.content }}
          </div>
          <div class=\"col-md-5 col-lg-4\">
            {{ page.right_sidebar }}
          </div>
        </div>
      </section>
    {% else %}
      <section class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            {{ page.content }}
          </div>
        </div>
      </section>
    {% endif %}
  </main>
  <footer>
    {% if page.footer %}
      <div class=\"panache-footer\">
        <div class=\"container\">
          {{ page.footer }}
        </div>
      </div>
    {% endif %}
    {% if page.footer is empty %}
      <div class=\"panache-footer\">
        {% include '@panache/includes/footer.html.twig' %}
      </div>
    {% endif %}
  </footer>
</div>
<div>{{ formation.salah_var }}</div>
<script>
  //fonction once jquery
  \$(document).ready(function(){
    \$(\".once\").one(\"click\", function(){
      \$(this).animate({fontSize: \"+=14px\"});
    });
  });

  const theme  = document.querySelectorAll('.theme');
  const once = document.querySelector('.once');

  theme.forEach((item) => {
    item.addEventListener('click', ()=>{
      // au debut tu enleve les classe suivantes s'elles exisitent deja
      once.classList.remove(\"darkTheme\",\"salmonTheme\",\"yellowTheme\");
      console.log(item.id);
      // je fais un switch
      switch (item.id) {
        case \"dark\":
          once.classList.add(\"darkTheme\");
          break;
        case \"salmon\":
          once.classList.add(\"salmonTheme\");
          break;
        case \"yellow\":
          once.classList.add(\"yellowTheme\");
        default:
          null;
      }
    })
  })

</script>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
", "themes/custom/formation/templates/layout/page.html.twig", "C:\\wamp64\\www\\recettes\\web\\themes\\custom\\formation\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 47, "if" => 49);
        static $filters = array("escape" => 65);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
