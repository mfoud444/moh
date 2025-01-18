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

/* catalog/view/template/information/sitemap.twig */
class __TwigTemplate_46d12b217b11d7f1819939c6935db89f extends Template
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
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"information-sitemap\" class=\"container my-2 md:my-4\">


   <div class=\"breadcrumb\">
   <a href=\"";
        // line 6
        echo ($context["home"] ?? null);
        echo "\">
   <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 fill-secondary\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
            <path d=\"M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z\" />
        </svg>
      </a>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "     <a class=\"breadcrumb-child\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a>
     <span class=\"mx-2  dark:text-gray-300 rtl:-scale-x-100\">
     
        <svg xmlns=\"http://www.w3.org/2000/svg\" 
        class=\"w-5 h-5 fill-secondary\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
            <path fill-rule=\"evenodd\" d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\" clip-rule=\"evenodd\" />
        </svg>
    </span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  </div>


  <div class=\"row\">";
        // line 24
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 25
        echo ($context["content_top"] ?? null);
        echo "
      <h1 class=\"heading-title my-2\">";
        // line 26
        echo ($context["heading_title"] ?? null);
        echo "</h1>

      <div class=\"flex \">


        <div class=\"  basis-1/2\">
          <ul class=\"list-disc list-inside \">
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 34
            echo "              <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "href", [], "any", false, false, false, 34);
            echo "\"
               class=\" text-xl font-bold  text-blue-500 hover:underline hover:text-blue-800\">
              ";
            // line 36
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 36);
            echo "</a>
                ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 37)) {
                // line 38
                echo "                  <ul class=\"space-y-1 pr-5 mt-2  list-decimal list-inside \">
                    ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 39));
                foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                    // line 40
                    echo "                      <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "href", [], "any", false, false, false, 40);
                    echo "\"
                       class=\" hover:underline  text-primary-500\">
                      ";
                    // line 42
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 42);
                    echo "</a>
                        ";
                    // line 43
                    if (twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 43)) {
                        // line 44
                        echo "                          <ul class=\"pr-10 space-y-1 list-disc \">
                            ";
                        // line 45
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 45));
                        foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                            // line 46
                            echo "                              <li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category_3"], "href", [], "any", false, false, false, 46);
                            echo "\"
                                             class=\" text-sm hover:underline text-blue-800 hover:text-blue-800\">
                              ";
                            // line 48
                            echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 48);
                            echo "</a></li>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 50
                        echo "                          </ul>
                        ";
                    }
                    // line 52
                    echo "                      </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "                  </ul>
                ";
            }
            // line 56
            echo "              </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "          </ul>
        </div>


        <div class=\" basis-1/2\">
          <ul class=\"list-disc list-inside \">
            <li><a class=\" text-xl font-bold  text-blue-500 hover:underline hover:text-blue-800\" href=\"";
        // line 64
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
            <li><a class=\" text-xl font-bold  text-blue-500 hover:underline hover:text-blue-800\" href=\"";
        // line 65
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
              <ul class=\"space-y-1 pr-5 mt-2  list-decimal list-inside\">
                <li><a  class=\" hover:underline  text-primary-500\" href=\"";
        // line 67
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
                <li><a  class=\" hover:underline  text-primary-500\" href=\"";
        // line 68
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
                <li><a  class=\" hover:underline  text-primary-500\" href=\"";
        // line 69
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
                <li><a  class=\" hover:underline  text-primary-500\" href=\"";
        // line 70
        echo ($context["history"] ?? null);
        echo "\">";
        echo ($context["text_history"] ?? null);
        echo "</a></li>
              ";
        // line 72
        echo "              </ul>
            </li>
            <li><a class=\" text-xl font-bold  text-blue-500 hover:underline hover:text-blue-800\" href=\"";
        // line 74
        echo ($context["history"] ?? null);
        echo "\">";
        echo ($context["text_cart"] ?? null);
        echo "</a></li>
            <li><a class=\" text-xl font-bold  text-blue-500 hover:underline hover:text-blue-800\" href=\"";
        // line 75
        echo ($context["checkout"] ?? null);
        echo "\">";
        echo ($context["text_checkout"] ?? null);
        echo "</a></li>
            <li><a class=\" text-xl font-bold  text-blue-500 hover:underline hover:text-blue-800\" href=\"";
        // line 76
        echo ($context["search"] ?? null);
        echo "\">";
        echo ($context["text_search"] ?? null);
        echo "</a></li>
            <li>";
        // line 77
        echo ($context["text_information"] ?? null);
        echo "
              <ul class=\"space-y-1 pr-5 mt-2  list-decimal list-inside\">
                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 80
            echo "                  <li><a  class=\" hover:underline  text-primary-500\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 80);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 80);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                <li><a  class=\" hover:underline  text-primary-500\" href=\"";
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
              </ul>
            </li>
          </ul>
        </div>


      </div>
      ";
        // line 90
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 91
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 93
        echo ($context["footer"] ?? null);
        echo "



";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/information/sitemap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 93,  281 => 91,  277 => 90,  263 => 82,  252 => 80,  248 => 79,  243 => 77,  237 => 76,  231 => 75,  225 => 74,  221 => 72,  215 => 70,  209 => 69,  203 => 68,  197 => 67,  190 => 65,  184 => 64,  176 => 58,  169 => 56,  165 => 54,  158 => 52,  154 => 50,  146 => 48,  140 => 46,  136 => 45,  133 => 44,  131 => 43,  127 => 42,  121 => 40,  117 => 39,  114 => 38,  112 => 37,  108 => 36,  102 => 34,  98 => 33,  88 => 26,  84 => 25,  80 => 24,  75 => 21,  57 => 12,  53 => 11,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/information/sitemap.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/information/sitemap.twig");
    }
}
