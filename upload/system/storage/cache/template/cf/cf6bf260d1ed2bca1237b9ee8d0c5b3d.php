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

/* catalog/view/template/account/wishlist.twig */
class __TwigTemplate_7141ff7837aa044a551349f720432a54 extends Template
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
<div id=\"account-wishlist\" class=\"container my-2 md:my-4\">
  
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

    <div id=\"content\" class=\" flex flex-col gap-2\">";
        // line 22
        echo ($context["content_top"] ?? null);
        echo "

      <h1 class=\"heading-title \" >";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo "</h1>

      <div id=\"wishlist\" class=\"grid-product\">";
        // line 26
        echo ($context["list"] ?? null);
        echo "</div>
    
        <a href=\"";
        // line 28
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>
   
     </div>
 ";
        // line 32
        echo "</div>
";
        // line 33
        echo ($context["footer"] ?? null);
        echo "



";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/wishlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 33,  101 => 32,  93 => 28,  88 => 26,  83 => 24,  78 => 22,  74 => 20,  56 => 11,  52 => 10,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/wishlist.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/account/wishlist.twig");
    }
}
