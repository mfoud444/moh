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

/* catalog/view/template/account/account.twig */
class __TwigTemplate_1270af9a8d51b3ead203a0ddf4bee4d7 extends Template
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
<div id=\"account-account\" class=\"container my-2\">

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

  ";
        // line 22
        if (($context["success"] ?? null)) {
            // line 23
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 25
        echo "

  <div class=\"md:flex md:flex-row md:gap-4\">

    <div id=\"content\" class=\" mt-2 md:basis-2/3  flex flex-col gap-4\">";
        // line 29
        echo ($context["content_top"] ?? null);
        echo "

<div class=\"flex flex-col gap-2 border-dotted border-2 border-indigo-600\">
      <h2 class=\" flex flex-row-reverse items-center justify-end gap-2 font-bold text-xl\">";
        // line 32
        echo ($context["text_my_account"] ?? null);
        echo "
      <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z\" />
</svg>

      </h2>
      <ul class=\"list-disc mr-8\">
        <li><a class=\"link-all\" href=\"";
        // line 39
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
        <li><a class=\"link-all\" href=\"";
        // line 40
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
        <li><a class=\"link-all\" href=\"";
        // line 41
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
        ";
        // line 43
        echo "        <li><a class=\"link-all\" href=\"";
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
      </ul>
</div>

<div class=\"flex flex-col gap-2  border-dotted border-2 border-indigo-600\">
      <h2 class=\"flex flex-row-reverse items-center justify-end gap-2 font-bold text-xl\">
        ";
        // line 49
        echo ($context["text_my_orders"] ?? null);
        echo "
        <svg id=\"Layer_1\" class=\"w-6 h-6\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 101.57 122.88\">
    <title>my-orders</title>
    <path
        d=\"M4.7,28.93H26.13V24.56a24.57,24.57,0,0,1,49.13,0v4.37h21.6a4.7,4.7,0,0,1,3.33,1.38,4.76,4.76,0,0,1,1.38,3.32V106a16.93,16.93,0,0,1-16.88,16.88H16.88A16.93,16.93,0,0,1,0,106V33.63a4.71,4.71,0,0,1,4.7-4.7ZM20.37,63.87h9.41A1.24,1.24,0,0,1,31,65.1v9.41a1.23,1.23,0,0,1-1.23,1.23H20.37a1.23,1.23,0,0,1-1.23-1.23V65.1a1.24,1.24,0,0,1,1.23-1.23Zm24,9.68c-1.74,0-3.14-1.67-3.14-3.74s1.4-3.75,3.14-3.75h37c1.74,0,3.15,1.68,3.15,3.75a3.48,3.48,0,0,1-3.15,3.74ZM18.67,97.2a2,2,0,0,1,.39-2.93,2.32,2.32,0,0,1,3.13-.1l2.19,2.25,5.48-5.61a2,2,0,0,1,2.94.31A2.33,2.33,0,0,1,33,94.25l-7.26,7.45a2,2,0,0,1-2.94-.31l-.17-.2a2.16,2.16,0,0,1-.33-.27L18.67,97.2ZM44.11,100C42.38,100,41,98.32,41,96.26s1.41-3.75,3.14-3.75h37c1.73,0,3.14,1.68,3.14,3.75S82.87,100,81.14,100Zm-12-71.07H69.27V24.56a18.58,18.58,0,0,0-37.15,0v4.37Zm-6,11.61V34.91H6V106a10.93,10.93,0,0,0,10.89,10.89H84.69A11,11,0,0,0,95.58,106V34.91H75.26V40.6a6.84,6.84,0,1,1-6-.1V34.91H32.12v5.65a6.84,6.84,0,1,1-6,0Z\" />
</svg>
      </h2>
      <ul class=\"list-disc mr-8\">
        <li><a class=\"link-all\" href=\"";
        // line 57
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
        ";
        // line 60
        echo "        ";
        if (($context["reward"] ?? null)) {
            // line 61
            echo "          <li><a class=\"link-all\" href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
        ";
        }
        // line 63
        echo "        ";
        // line 64
        echo "        <li><a class=\"link-all\" href=\"";
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
      </ul>
 </div>     

      ";
        // line 87
        echo "

<div class=\"flex flex-col gap-2  border-dotted border-2 border-indigo-600\">
      <h2 class=\"flex flex-row-reverse items-center justify-end gap-2 font-bold text-xl\">
        ";
        // line 91
        echo ($context["text_my_newsletter"] ?? null);
        echo "
        <svg id=\"Layer_1\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" 
        viewBox=\"0 0 122.88 118.1\"
        class=\"w-6 h-6\">
    <title>newsletter</title>
    <path
        d=\"M115.17,33.29a3.8,3.8,0,0,1,2.49-.92,4.19,4.19,0,0,1,2.14.62,5.82,5.82,0,0,1,1.32,1.12,7.37,7.37,0,0,1,1.76,4.44v73.64a5.87,5.87,0,0,1-1.73,4.16h0A5.9,5.9,0,0,1,117,118.1H5.91a5.91,5.91,0,0,1-4.17-1.73h0A5.9,5.9,0,0,1,0,112.19V38.55a7.41,7.41,0,0,1,1.8-4.5A5.52,5.52,0,0,1,3.12,33a4.05,4.05,0,0,1,2.1-.6,3.68,3.68,0,0,1,2,.59l.2.17v-26a7.1,7.1,0,0,1,2.08-5h0a7.1,7.1,0,0,1,5-2.08h93.54a7.08,7.08,0,0,1,5,2.08,2.25,2.25,0,0,1,.21.24,7,7,0,0,1,1.87,4.77v26.2ZM70.85,43a3,3,0,0,1,0-6H83.64a3,3,0,0,1,0,6ZM39,43a3,3,0,0,1,0-6H51.77a3,3,0,0,1,0,6ZM54.2,60a3,3,0,0,1,0-6.05H68.42a3,3,0,0,1,0,6.05ZM27.86,26.07a3,3,0,0,1,0-6.05H42.29a3,3,0,0,1,0,6.05Zm52.48,0a3,3,0,0,1,0-6.05H94.77a3,3,0,0,1,0,6.05Zm-24.11,0a3,3,0,0,1,0-6.05h10a3,3,0,0,1,0,6.05ZM13.71,38.65,48.64,69.86l.15.14L60.84,80.76l48.08-42V7.09a.89.89,0,0,0-.17-.51l-.08-.08a.84.84,0,0,0-.59-.25H14.54A.84.84,0,0,0,14,6.5a.83.83,0,0,0-.24.59V38.65ZM114.56,41.4a3.09,3.09,0,0,1-1,.87L79.85,71.72l37.31,32.7h0V39.12l-2.6,2.28ZM58.92,86.68,46.81,75.86l-41.09,36v.33a.17.17,0,0,0,0,.13h0a.17.17,0,0,0,.13,0H117a.17.17,0,0,0,.13,0h0a.17.17,0,0,0,0-.13V112L75.52,75.5,62.7,86.7h0a2.85,2.85,0,0,1-3.78,0ZM42.52,72,5.72,39.15v65.13L42.52,72Z\" />
</svg>
      </h2>
      <ul class=\"list-disc mr-8\">
        <li><a class=\"link-all\" href=\"";
        // line 101
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
      </ul>
</div>


      ";
        // line 106
        echo ($context["content_bottom"] ?? null);
        echo "</div>
      <div class=\"md:basis-1/3 \"> ";
        // line 107
        echo ($context["column_right"] ?? null);
        echo "</div>
   </div>
</div>
";
        // line 110
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 110,  211 => 107,  207 => 106,  197 => 101,  184 => 91,  178 => 87,  168 => 64,  166 => 63,  158 => 61,  155 => 60,  149 => 57,  138 => 49,  126 => 43,  120 => 41,  114 => 40,  108 => 39,  98 => 32,  92 => 29,  86 => 25,  80 => 23,  78 => 22,  74 => 20,  56 => 11,  52 => 10,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/account.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/account/account.twig");
    }
}
