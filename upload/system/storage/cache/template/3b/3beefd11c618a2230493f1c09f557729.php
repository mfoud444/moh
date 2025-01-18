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

/* catalog/view/template/account/newsletter.twig */
class __TwigTemplate_04107f86b739cefbac39e5c0a0896bf3 extends Template
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
<div id=\"account-newsletter\" class=\"container my-2 \">

<div class=\"breadcrumb\">
   <a href=\"";
        // line 5
        echo ($context["home"] ?? null);
        echo "\">
   <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 fill-secondary\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
            <path d=\"M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z\" />
        </svg>
      </a>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "     <a class=\"breadcrumb-child\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
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
        // line 20
        echo "  </div>


   <div class=\"md:flex md:flex-row md:gap-4 \">

      <div id=\"content\" class=\"mt-2 md:basis-2/3 flex flex-col justify-center gap-4\">";
        // line 25
        echo ($context["content_top"] ?? null);
        echo "

      <h1 class=\"heading-title\">";
        // line 27
        echo ($context["heading_title"] ?? null);
        echo "</h1>

      <form id=\"form-newsletter\" action=\"";
        // line 29
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <div class=\"flex flex-col my-8\">
            <label class=\"text-2xl\">";
        // line 32
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>

            <div class=\"flex justify-center gap-12\">
              <div class=\"form-check form-check-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"1\" id=\"input-newsletter-yes\" class=\"form-check-input\"";
        // line 36
        if (($context["newsletter"] ?? null)) {
            echo " checked";
        }
        echo "/>
                <label for=\"input-newsletter-yes\" class=\"text-xl\">";
        // line 37
        echo ($context["text_yes"] ?? null);
        echo "</label>
              </div>

              <div class=\"form-check form-check-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"0\" id=\"input-newsletter-no\" class=\"form-check-input\"";
        // line 41
        if ( !($context["newsletter"] ?? null)) {
            echo " checked";
        }
        echo "/>
                <label for=\"input-newsletter-no\" class=\"text-xl\">";
        // line 42
        echo ($context["text_no"] ?? null);
        echo "</label>
              </div>
            </div>
          </div>
        </fieldset>


        <div class=\"flex flex-row-reverse gap-4\">
          <a class=\"btn-back\" href=\"";
        // line 50
        echo ($context["back"] ?? null);
        echo "\" >";
        echo ($context["button_back"] ?? null);
        echo "</a>
         
            <button type=\"submit\" class=\"btn-primary w-1/2\">";
        // line 52
        echo ($context["button_continue"] ?? null);
        echo "</button>
        
        </div>

      </form>
      ";
        // line 57
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
   <div class=\"md:basis-1/3 \"> ";
        // line 59
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 61
        echo ($context["footer"] ?? null);
        echo "


";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/newsletter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 61,  154 => 59,  149 => 57,  141 => 52,  134 => 50,  123 => 42,  117 => 41,  110 => 37,  104 => 36,  97 => 32,  91 => 29,  86 => 27,  81 => 25,  74 => 20,  56 => 11,  52 => 10,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/newsletter.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/account/newsletter.twig");
    }
}
