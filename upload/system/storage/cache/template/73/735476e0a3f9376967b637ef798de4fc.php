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

/* catalog/view/template/account/order_list.twig */
class __TwigTemplate_0bf8da08db3727ce785c341851ac9833 extends Template
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
<div id=\"account-order\" class=\"container  my-2 \">

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
     <span class=\"md:mx-2  dark:text-gray-300 rtl:-scale-x-100\">
     
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

    <div id=\"content\" class=\"mt-2 md:basis-2/3 flex flex-col gap-4\">";
        // line 24
        echo ($context["content_top"] ?? null);
        echo "


      <h1 class=\"heading-title\">";
        // line 27
        echo ($context["heading_title"] ?? null);
        echo "</h1>

      ";
        // line 29
        if (($context["orders"] ?? null)) {
            // line 30
            echo "      <div class=\"grid md:grid-cols-2 gap-4\">
      ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 32
                echo "<div class=\"bg-primary-300  flex flex-col gap-1 w-full md:w-80  text-sm rounded-lg p-2\">
  <div class=\"flex justify-between \">

  <div class=\"flex gap-2 items-center flex-row-reverse justify-end\">
    <div class=\" font-bold text-base\">";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 36);
                echo "</div>
    <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
      <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z\" />
    </svg> 
  </div>

  <div>";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 42);
                echo "</div>
</div>

<div class=\"flex justify-between items-center  \">
  <div class=\"flex tems-center flex-wrap gap-2\">\t
    <div>
      رقم الطلب\t
    </div>
<div class=\" bg-red-100 text-black px-4 rounded-md\">";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 50);
                echo "</div>
  </div>

  <div class=\"flex gap-2 items-center\">\t
    <div>
      عدد المنتجات
    </div>
<div class=\" bg-red-100 text-black px-2 rounded-full\">";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["order"], "products", [], "any", false, false, false, 57);
                echo "</div>
  </div>
</div>


<div class=\"flex justify-between items-center gap-2\">
  <div class=\"flex flex-col \">\t
    <div class=\"mr-2\">
     الاجمالي
    </div>
<div class=\" bg-red-100 text-black px-4 rounded-full\">";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 67);
                echo "</div>
  </div>

  <div class=\"flex flex-col \">\t
    <div class=\"mr-2\">
    حالة الطلب
    </div>
<div class=\" bg-red-100 text-center  text-black px-4 rounded-full\">";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 74);
                echo "</div>
  </div>
<a  href=\"";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 76);
                echo "\" data-bs-toggle=\"tooltip\"  class=\" bg-white self-end rounded-full p-1 cursor-pointer \">
  <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6 fill-white\">
    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z\" />
    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\" />
  </svg>
</a>
 
  
</div>

</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "</div>
  ";
        }
        // line 90
        echo "
  <div class=\"pre\">
    <div class=\"\">";
        // line 92
        echo ($context["pagination"] ?? null);
        echo "</div>
    <div class=\"\">";
        // line 93
        echo ($context["results"] ?? null);
        echo "</div>
  </div>





";
        // line 139
        echo "

       <a href=\"";
        // line 141
        echo ($context["continue"] ?? null);
        echo "\" class=\" text-center  btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>
    
      ";
        // line 143
        echo ($context["content_bottom"] ?? null);
        echo "
      
      </div>

     <div class=\"md:basis-1/3 \"> ";
        // line 147
        echo ($context["column_right"] ?? null);
        echo "</div>
    </div>


</div>

";
        // line 153
        echo ($context["footer"] ?? null);
        echo "










";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 153,  222 => 147,  215 => 143,  208 => 141,  204 => 139,  194 => 93,  190 => 92,  186 => 90,  182 => 88,  164 => 76,  159 => 74,  149 => 67,  136 => 57,  126 => 50,  115 => 42,  106 => 36,  100 => 32,  96 => 31,  93 => 30,  91 => 29,  86 => 27,  80 => 24,  74 => 20,  56 => 11,  52 => 10,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/order_list.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/account/order_list.twig");
    }
}
