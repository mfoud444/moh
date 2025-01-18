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

/* catalog/view/template/common/header.twig */
class __TwigTemplate_eb758aaf7ecd028fa69b30193f5b0952 extends Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>";
        // line 7
        echo ($context["title"] ?? null);
        echo "</title>
    <base href=\"";
        // line 8
        echo ($context["base"] ?? null);
        echo "\" />
    ";
        // line 9
        if (($context["description"] ?? null)) {
            // line 10
            echo "    <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
    ";
        }
        // line 11
        echo " ";
        if (($context["keywords"] ?? null)) {
            // line 12
            echo "    <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
    ";
        }
        // line 14
        echo "    <script src=\"";
        echo ($context["jquery"] ?? null);
        echo "\" type=\"text/javascript\"></script>
    <!-- ";
        // line 24
        echo " -->
    <link href=\"";
        // line 25
        echo ($context["stylesheet"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <script
      type=\"text/javascript\"
      src=\"catalog/view/javascript/jquery/datetimepicker/moment.min.js\"
    ></script>
    <script
      type=\"text/javascript\"
      src=\"catalog/view/javascript/jquery/datetimepicker/moment-with-locales.min.js\"
    ></script>
    <script
      type=\"text/javascript\"
      src=\"catalog/view/javascript/jquery/datetimepicker/daterangepicker.js\"
    ></script>
    ";
        // line 43
        echo "    <script
      src=\"catalog/view/javascript/common.js\"
      type=\"text/javascript\"
    ></script>
    <!-- ";
        // line 52
        echo " -->
    <!-- <script
      src=\"catalog/view/javascript/disy.js\"
      type=\"text/javascript\"
    ></script> -->
    <script
      src=\"catalog/view/javascript/airplan.js\"
      type=\"text/javascript\"
    ></script>
    <!-- <script
      src=\"catalog/view/javascript/vanilla.js\"
      type=\"text/javascript\"
    ></script> -->
    <!-- ";
        // line 72
        echo " -->
    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 74
            echo "    <script src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 74);
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 76
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 76);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 76);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 78
            echo "    ";
            echo             // line 79
$context["analytic"];
            // line 80
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "
 
  </head>
  <body dir=\"rtl\" class=\"font-serif\">
   
    <nav
      x-data=\"{ isOpen: false }\"
      class=\" relative text-md font-bold bg-white shadow dark:bg-gray-800\"
    >
      <div
        class=\"container py-4 md:py-2 mx-auto md:flex md:justify-between md:items-center\"
      >
        <div class=\"flex  items-center justify-between\">
          <div class=\"flex items-end  gap-4 md:gap-2\">
            <div id=\"logo\" class=\"flex gap-2 items-center\">
              ";
        // line 97
        if (($context["logo"] ?? null)) {
            // line 98
            echo "              <a href=\"";
            echo ($context["home"] ?? null);
            echo "\"
                >
                ";
            // line 106
            echo "              </a>
                <a
                class=\"text-2xl font-bold text-gray-800 transition-colors duration-300 transform dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300\"
                href=\"";
            // line 109
            echo ($context["home"] ?? null);
            echo "\"
                >";
            // line 110
            echo ($context["name"] ?? null);
            echo "</a>
              ";
        } else {
            // line 112
            echo "              <a
                class=\"text-2xl font-bold text-gray-800 transition-colors duration-300 transform dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300\"
                href=\"";
            // line 114
            echo ($context["home"] ?? null);
            echo "\"
                >";
            // line 115
            echo ($context["name"] ?? null);
            echo "</a>
              ";
        }
        // line 117
        echo "            </div>

            <div class=\"flex justify-center md:block\">
              <a
                class=\"relative text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-300\"
                href=\"";
        // line 122
        echo ($context["shopping_cart"] ?? null);
        echo "\"
                title=\"";
        // line 123
        echo ($context["text_shopping_cart"] ?? null);
        echo "\"
              >
                <svg
                  class=\"w-8 h-8\"
                  viewbox=\"0 0 24 24\"
                  fill=\"none\"
                  xmlns=\"http://www.w3.org/2000/svg\"
                >
                  <path
                    d=\"M3 3H5L5.4 5M7 13H17L21 5H5.4M7 13L5.4 5M7 13L4.70711 15.2929C4.07714 15.9229 4.52331 17 5.41421 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM9 19C9 20.1046 8.10457 21 7 21C5.89543 21 5 20.1046 5 19C5 17.8954 5.89543 17 7 17C8.10457 17 9 17.8954 9 19Z\"
                    stroke=\"currentColor\"
                    stroke-width=\"2\"
                    stroke-linecap=\"round\"
                    stroke-linejoin=\"round\"
                  />
                </svg>

                ";
        // line 143
        echo "              </a>
            </div>

            ";
        // line 147
        echo "            <a
              href=\"";
        // line 148
        echo ($context["wishlist"] ?? null);
        echo "\"
              id=\"wishlist-total\"
              title=\"";
        // line 150
        echo ($context["text_wishlist"] ?? null);
        echo "\"
            >
              <div class=\" flex relative\">
                <svg
                  xmlns=\"http://www.w3.org/2000/svg\"
                  fill=\"none\"
                  viewbox=\"0 0 24 24\"
                  stroke-width=\"1.5\"
                  stroke=\"currentColor\"
                  class=\"w-8 h-8\"
                >
                  <path
                    stroke-linecap=\"round\"
                    stroke-linejoin=\"round\"
                    d=\"M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z\"
                  />
                </svg>
                <span
                class=\"absolute top-[-0.7rem] right-[-0.5rem] px-2 py-1 flex justify-center items-center text-xs text-white bg-blue-500 rounded-full\"
              >";
        // line 169
        echo ($context["text_wishlist"] ?? null);
        echo "</span>
               
              </div>
            </a>

            ";
        // line 175
        echo "           
              <div id=\"searchingIcon\"
               class=\"cursor-pointer lg:hidden \">
                <svg
                  xmlns=\"http://www.w3.org/2000/svg\"
                  fill=\"none\"
                  viewBox=\"0 0 24 24\"
                  stroke-width=\"1.5\"
                  stroke=\"currentColor\"
                  class=\"w-8 h-8\"
                >
                  <path
                    stroke-linecap=\"round\"
                    stroke-linejoin=\"round\"
                    d=\"M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z\"
                  />
                </svg>
              </div>
          
          </div>

          <!-- Mobile menu button -->
          <div class=\"flex  md:hidden\">
            <button
              x-cloak
              @click=\"isOpen = !isOpen\"
              type=\"button\"
              class=\"text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400\"
              aria-label=\"toggle menu\"
            >

            <svg 
            x-show=\"!isOpen\"
            xmlns=\"http://www.w3.org/2000/svg\"
             fill=\"none\" viewBox=\"0 0 24 24\"
              stroke-width=\"1.5\" 
              stroke=\"currentColor\" 
              class=\"w-8 h-8\">
              <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5\" />
            </svg>
            
           

              <svg
                x-show=\"isOpen\"
                xmlns=\"http://www.w3.org/2000/svg\"
                class=\"w-6 h-6\"
                fill=\"none\"
                viewbox=\"0 0 24 24\"
                stroke=\"currentColor\"
                stroke-width=\"2\"
              >
                <path
                  stroke-linecap=\"round\"
                  stroke-linejoin=\"round\"
                  d=\"M6 18L18 6M6 6l12 12\"
                />
              </svg>
            </button>
          </div>
        </div>

        
        <header class=\"flex-auto \">
          <div id=\"searchingBody\" class=\"hidden md:w-2/3 lg:block\">";
        // line 239
        echo ($context["search"] ?? null);
        echo "</div>
        </header>

        <!-- Mobile Menu open: \"block\", Menu closed: \"hidden\" -->
        <div
          x-cloak
          :class=\"[isOpen ? 'translate-x-0 opacity-100 ' : 'hidden -translate-x-full']\"
          class=\"absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-gray-800 md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center\"
        >
          <div
            class=\"flex md:items-center md:max-w-[40rem] gap-2 flex-col md:flex-row  md:content-center md:mx-6\"
          >
       <div class=\"md:hidden\">";
        // line 251
        echo ($context["menu"] ?? null);
        echo "</div>    

             ";
        // line 264
        echo "  
            ";
        // line 265
        if ( !($context["logged"] ?? null)) {
            // line 266
            echo "            <div class=\"flex flex-col md:flex-row gap-2\">
              <a
                href=\"";
            // line 268
            echo ($context["register"] ?? null);
            echo "\"
                class=\"text-white text-md font-bold rounded-full bg-purple-700 hover:bg-purple-800 focus:outline-none  focus:ring-purple-300 px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900\"
                >";
            // line 270
            echo ($context["text_register"] ?? null);
            echo "</a
              >
              <a
                href=\"";
            // line 273
            echo ($context["login"] ?? null);
            echo "\"
                class=\"text-white text-md font-bold rounded-full bg-purple-700 hover:bg-purple-800 focus:outline-none  focus:ring-purple-300 px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900\"
                >";
            // line 275
            echo ($context["text_login"] ?? null);
            echo "</a
              >
            </div>
            ";
        } else {
            // line 279
            echo "<div class=\"flex flex-col gap-4 md:flex-row\">

            <a
              class=\" btn-with-icon\"
              href=\"";
            // line 283
            echo ($context["account"] ?? null);
            echo "\"
              >";
            // line 284
            echo ($context["text_account"] ?? null);
            echo "

                 <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z\" />
</svg>  
              
              </a>


         



            <a
              class=\" btn-with-icon\"
              href=\"";
            // line 299
            echo ($context["order"] ?? null);
            echo "\"
              >";
            // line 300
            echo ($context["text_order"] ?? null);
            echo "
              
                 <svg id=\"Layer_1\" class=\"w-6 h-6\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 101.57 122.88\">
    <title>my-orders</title>
    <path
        d=\"M4.7,28.93H26.13V24.56a24.57,24.57,0,0,1,49.13,0v4.37h21.6a4.7,4.7,0,0,1,3.33,1.38,4.76,4.76,0,0,1,1.38,3.32V106a16.93,16.93,0,0,1-16.88,16.88H16.88A16.93,16.93,0,0,1,0,106V33.63a4.71,4.71,0,0,1,4.7-4.7ZM20.37,63.87h9.41A1.24,1.24,0,0,1,31,65.1v9.41a1.23,1.23,0,0,1-1.23,1.23H20.37a1.23,1.23,0,0,1-1.23-1.23V65.1a1.24,1.24,0,0,1,1.23-1.23Zm24,9.68c-1.74,0-3.14-1.67-3.14-3.74s1.4-3.75,3.14-3.75h37c1.74,0,3.15,1.68,3.15,3.75a3.48,3.48,0,0,1-3.15,3.74ZM18.67,97.2a2,2,0,0,1,.39-2.93,2.32,2.32,0,0,1,3.13-.1l2.19,2.25,5.48-5.61a2,2,0,0,1,2.94.31A2.33,2.33,0,0,1,33,94.25l-7.26,7.45a2,2,0,0,1-2.94-.31l-.17-.2a2.16,2.16,0,0,1-.33-.27L18.67,97.2ZM44.11,100C42.38,100,41,98.32,41,96.26s1.41-3.75,3.14-3.75h37c1.73,0,3.14,1.68,3.14,3.75S82.87,100,81.14,100Zm-12-71.07H69.27V24.56a18.58,18.58,0,0,0-37.15,0v4.37Zm-6,11.61V34.91H6V106a10.93,10.93,0,0,0,10.89,10.89H84.69A11,11,0,0,0,95.58,106V34.91H75.26V40.6a6.84,6.84,0,1,1-6-.1V34.91H32.12v5.65a6.84,6.84,0,1,1-6,0Z\" />
</svg>
              
              </a>

 



            <a
              class=\" btn-with-icon\"
              href=\"";
            // line 316
            echo ($context["transaction"] ?? null);
            echo "\"
              >";
            // line 317
            echo ($context["text_transaction"] ?? null);
            echo "
              
                          <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"w-6 h-6\">
  <path d=\"M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z\" />
  <path fill-rule=\"evenodd\" d=\"M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z\" clip-rule=\"evenodd\" />
</svg>
              
              </a
            >




";
            // line 342
            echo "




         
            <a
              class=\" btn-with-icon\"
              href=\"";
            // line 350
            echo ($context["logout"] ?? null);
            echo "\"
              >";
            // line 351
            echo ($context["text_logout"] ?? null);
            echo "
              
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" 
            class=\"w-6 h-6 \">
  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75\" />
</svg>

              </a
            >
  
        
</div>
            ";
        }
        // line 364
        echo "          </div>
        </div>
      </div>
    </nav>
 
         
    
 

    <!-- ";
        // line 467
        echo "  -->

    <!-- ";
        // line 495
        echo " -->
    <main class=\"container min-h-[75vh]\">
     
      <div id=\"alert\" class=\"fixed top-4 right-0\"></div>

";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 495,  524 => 467,  513 => 364,  497 => 351,  493 => 350,  483 => 342,  467 => 317,  463 => 316,  444 => 300,  440 => 299,  422 => 284,  418 => 283,  412 => 279,  405 => 275,  400 => 273,  394 => 270,  389 => 268,  385 => 266,  383 => 265,  380 => 264,  375 => 251,  360 => 239,  294 => 175,  286 => 169,  264 => 150,  259 => 148,  256 => 147,  251 => 143,  231 => 123,  227 => 122,  220 => 117,  215 => 115,  211 => 114,  207 => 112,  202 => 110,  198 => 109,  193 => 106,  187 => 98,  185 => 97,  168 => 82,  161 => 80,  159 => 79,  157 => 78,  152 => 77,  141 => 76,  136 => 75,  127 => 74,  123 => 73,  120 => 72,  105 => 52,  99 => 43,  83 => 25,  80 => 24,  75 => 14,  69 => 12,  66 => 11,  60 => 10,  58 => 9,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/header.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/common/header.twig");
    }
}
