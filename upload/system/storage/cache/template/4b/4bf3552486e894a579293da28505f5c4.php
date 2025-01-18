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

/* extension/opencart/admin/view/template/dashboard/customer_info.twig */
class __TwigTemplate_1bc732ccb39554c9d1335fa365199432 extends Template
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
        echo "<a  href=\"";
        echo ($context["customer"] ?? null);
        echo "\" class=\" bg-primary-200 text-base font-bold p-4 rounded-lg tile tile-primary flex flex-col gap-2 \">

  <div class=\"tile-heading flex gap-4 items-center justify-between \">
    <div class=\"flex flex-row-reverse items-center gap-2 text-xl\">
      ";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "
      <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z\" />
      </svg>
      
    </div>
     <span hidden class=\"float-end bg-white px-4 py-2 rounded-full\">
    ";
        // line 12
        if ((($context["percentage"] ?? null) > 0)) {
            // line 13
            echo "      <i class=\"fa-solid fa-caret-up\"></i>
    ";
        } elseif ((        // line 14
($context["percentage"] ?? null) < 0)) {
            // line 15
            echo "      <i class=\"fa-solid fa-caret-down\"></i>
    ";
        }
        // line 17
        echo "      ";
        echo ($context["percentage"] ?? null);
        echo "%</span>
    </div>

  <div class=\"tile-body flex gap-4 justify-around\" >
  
    <h2 class=\"float-end text-3xl\">";
        // line 22
        echo ($context["total"] ?? null);
        echo "</h2>
  </div>

  <!-- <div class=\"tile-footer\"><a href=\"";
        // line 25
        echo ($context["customer"] ?? null);
        echo "\">";
        echo ($context["text_view"] ?? null);
        echo "</a></div> -->
</a>
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/admin/view/template/dashboard/customer_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  75 => 22,  66 => 17,  62 => 15,  60 => 14,  57 => 13,  55 => 12,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/admin/view/template/dashboard/customer_info.twig", "/opt/lampp/htdocs/moh/upload/extension/opencart/admin/view/template/dashboard/customer_info.twig");
    }
}
