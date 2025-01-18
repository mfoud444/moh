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

/* catalog/view/template/account/transaction.twig */
class __TwigTemplate_c7fe2a6ca28bf792ed28a5fb844fb663 extends Template
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
<div id=\"account-transaction\" class=\"container my-2 md:my-4\">


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


    <div class=\"md:flex md:flex-row md:gap-4 \">

    <div id=\"content\" class=\"mt-2 md:basis-2/3 flex flex-col gap-4\">";
        // line 26
        echo ($context["content_top"] ?? null);
        echo "


      <h1 class=\"heading-title\">";
        // line 29
        echo ($context["heading_title"] ?? null);
        echo "</h1>

      <p class=\"text-xl\"> ";
        // line 31
        echo ($context["text_total"] ?? null);
        echo " <b>";
        echo ($context["total"] ?? null);
        echo "</b>.</p>


      <table class=\"border-collapse border border-slate-400\">
        <thead >
          <tr>
            <td class=\"text-center border border-slate-400\">";
        // line 37
        echo ($context["column_date_added"] ?? null);
        echo "</td>
            <td class=\"text-center  border border-slate-400\">";
        // line 38
        echo ($context["column_description"] ?? null);
        echo "</td>
            <td class=\"text-center  border border-slate-400\">";
        // line 39
        echo ($context["column_amount"] ?? null);
        echo "</td>
          </tr>
        </thead>
        <tbody class=\" border border-slate-400\">
          ";
        // line 43
        if (($context["transactions"] ?? null)) {
            // line 44
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["transactions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 45
                echo "              <tr>
                <td class=\"text-center \">";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["transaction"], "date_added", [], "any", false, false, false, 46);
                echo "</td>
                <td class=\"text-center \">";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["transaction"], "description", [], "any", false, false, false, 47);
                echo "</td>
                <td class=\"text-center \">";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 48);
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "          ";
        } else {
            // line 52
            echo "            <tr>
              <td class=\"text-center\" colspan=\"5\">";
            // line 53
            echo ($context["text_no_results"] ?? null);
            echo "</td>
            </tr>
          ";
        }
        // line 56
        echo "        </tbody>
      </table>

      <div class=\"row\">
        <div class=\"col-sm-6 text-center \">";
        // line 60
        echo ($context["pagination"] ?? null);
        echo "</div>
        <div class=\"col-sm-6 text-center \">";
        // line 61
        echo ($context["results"] ?? null);
        echo "</div>
      </div>
      
       <a href=\"";
        // line 64
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>
   
      ";
        // line 66
        echo ($context["content_bottom"] ?? null);
        echo "</div>
   <div class=\"md:basis-1/3 \"> ";
        // line 67
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 69
        echo ($context["footer"] ?? null);
        echo "




";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/transaction.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 69,  185 => 67,  181 => 66,  174 => 64,  168 => 61,  164 => 60,  158 => 56,  152 => 53,  149 => 52,  146 => 51,  137 => 48,  133 => 47,  129 => 46,  126 => 45,  121 => 44,  119 => 43,  112 => 39,  108 => 38,  104 => 37,  93 => 31,  88 => 29,  82 => 26,  75 => 21,  57 => 12,  53 => 11,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/transaction.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/account/transaction.twig");
    }
}
