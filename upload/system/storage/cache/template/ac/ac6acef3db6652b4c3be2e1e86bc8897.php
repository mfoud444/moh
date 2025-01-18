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

/* catalog/view/template/common/search.twig */
class __TwigTemplate_f780ffb597c1d8d02c80df0ec5d510a3 extends Template
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
        echo "<div id=\"search\" class=\"flex container items-center px-4 p-4 \">
\t<input
\t  type=\"text\"
\t  name=\"search\"
\t  value=\"";
        // line 5
        echo ($context["search"] ?? null);
        echo "\"
\t  placeholder=\"";
        // line 6
        echo ($context["text_search"] ?? null);
        echo "\"
\t  class=\"search-field rounded-r-full \"
\t/>
\t<button type=\"button\" data-lang=\"";
        // line 9
        echo ($context["language"] ?? null);
        echo "\"  class=\"hidden md:block p-2 ml-2 font-medium text-white bg-blue-700 rounded-l-full border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800\">
\t    <svg
      xmlns=\"http://www.w3.org/2000/svg\"
      fill=\"none\"
      viewBox=\"0 0 24 24\"
      stroke-width=\"1.5\"
      stroke=\"currentColor\"
      class=\"w-6 h-6\"
    >
      <path
        stroke-linecap=\"round\"
        stroke-linejoin=\"round\"
        d=\"M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z\"
      />
    </svg>
\t</button>

  <div id=\"cancleSearch\" class=\"cursor-pointer hidden text-white p-2  md:hidden font-medium  bg-red-700 rounded-l-full border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800\">
    <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
      <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\" />
    </svg>
    
  </div>
  </div>


<!-- ";
        // line 40
        echo " -->
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 40,  53 => 9,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/search.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/common/search.twig");
    }
}
