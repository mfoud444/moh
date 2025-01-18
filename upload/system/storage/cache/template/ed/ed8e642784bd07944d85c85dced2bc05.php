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

/* catalog/view/template/account/order_info.twig */
class __TwigTemplate_4dd63fe4d082f2ee67f4a7f3729d713f extends Template
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
<div id=\"account-order\" class=\"container my-2\">
  
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
            echo "      <a class=\"breadcrumb-child\" href=\"";
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
        echo "   </div>

  <div class=\"row\">";
        // line 22
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"\">";
        // line 23
        echo ($context["content_top"] ?? null);
        echo "

      <h1 class=\" heading-title pb-2\">";
        // line 25
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <h1 class=\" font-semibold bg-red-300 py-2 px-4 rounded-full text-primary-900 flex items-center gap-4\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" class=\"w-5 h-5\">
          <path fill-rule=\"evenodd\" d=\"M15.988 3.012A2.25 2.25 0 0118 5.25v6.5A2.25 2.25 0 0115.75 14H13.5V7A2.5 2.5 0 0011 4.5H8.128a2.252 2.252 0 011.884-1.488A2.25 2.25 0 0112.25 1h1.5a2.25 2.25 0 012.238 2.012zM11.5 3.25a.75.75 0 01.75-.75h1.5a.75.75 0 01.75.75v.25h-3v-.25z\" clip-rule=\"evenodd\" />
          <path fill-rule=\"evenodd\" d=\"M2 7a1 1 0 011-1h8a1 1 0 011 1v10a1 1 0 01-1 1H3a1 1 0 01-1-1V7zm2 3.25a.75.75 0 01.75-.75h4.5a.75.75 0 010 1.5h-4.5a.75.75 0 01-.75-.75zm0 3.5a.75.75 0 01.75-.75h4.5a.75.75 0 010 1.5h-4.5a.75.75 0 01-.75-.75z\" clip-rule=\"evenodd\" />
        </svg>
        
        ";
        // line 32
        echo ($context["text_order_detail"] ?? null);
        echo "</h1>
<div class=\" bg-red-100 py-2 px-4 mt-2  rounded-lg\">

<section>
<div class=\"flex justify-around items-center \">
  <h2 class=\" font-semibold  ml-5\">  ";
        // line 37
        echo ($context["text_order_id"] ?? null);
        echo "  </h2>
  <h3 class=\"ml-10\">";
        // line 38
        echo ($context["order_id"] ?? null);
        echo "</h3>
</div>
<div class=\"flex justify-around items-center\">
  <h2 class=\" font-semibold\">  ";
        // line 41
        echo ($context["text_date_added"] ?? null);
        echo " </h2>
  <h3>";
        // line 42
        echo ($context["date_added"] ?? null);
        echo "</h3>
</div>
";
        // line 44
        if (($context["payment_method"] ?? null)) {
            // line 45
            echo "<div class=\"flex justify-around items-center\">
  <h2 class=\" font-semibold\"> ";
            // line 46
            echo ($context["text_payment_method"] ?? null);
            echo "  </h2>
  <h3>";
            // line 47
            echo ($context["payment_method"] ?? null);
            echo "</h3>
</div>
";
        }
        // line 50
        if (($context["shipping_method"] ?? null)) {
            echo " 
<div class=\"flex justify-around items-center\">
  <h2 class=\" font-semibold\">  ";
            // line 52
            echo ($context["text_shipping_method"] ?? null);
            echo "  </h2>
  <h3>";
            // line 53
            echo ($context["shipping_method"] ?? null);
            echo "</h3>
</div>
";
        }
        // line 56
        echo "
";
        // line 57
        if (($context["shipping_address"] ?? null)) {
            // line 58
            echo "<div class=\"flex justify-around items-center\">
  <h2 class=\" font-semibold\">  ";
            // line 59
            echo ($context["text_shipping_address"] ?? null);
            echo " </h2>
  <h3>";
            // line 60
            echo ($context["shipping_address"] ?? null);
            echo "</h3>
</div>
";
        }
        // line 62
        echo " 
</section>








    



    


      <div class=\"table-responsive\">
        <table class=\"table-auto table-hover\">
          <thead>
            <tr class=\" border-b-2 border-primary-900\">
              <td class=\"text-start\">";
        // line 83
        echo ($context["column_name"] ?? null);
        echo "</td>
              <td class=\"text-start px-2\">";
        // line 84
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-center\">";
        // line 85
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-center\">";
        // line 86
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-center\">";
        // line 87
        echo ($context["column_total"] ?? null);
        echo "</td>
              ";
        // line 88
        if (($context["products"] ?? null)) {
            // line 89
            echo "                <td style=\"width: 20px;\"></td>
              ";
        }
        // line 90
        echo " </tr>
          </thead>
          <tbody>
            ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 94
            echo "              <tr class=\"border-b-2 border-primary-900\">
                <td class=\"text-start\">";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 95);
            echo "
                  ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 96));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 97
                echo "                    <br/>
                    &nbsp;
                    <small> -";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 99);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 99);
                echo "</small> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                <td class=\"text-start px-2\">";
            // line 100
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 100);
            echo "</td>
                <td class=\"text-center\"> <h4 class=\" bg-yellow-300 rounded-lg\">";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 101);
            echo "</h4></td>
                <td class=\"text-center \"><h4 class=\"bg-red-300 rounded-full px-2\">";
            // line 102
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 102);
            echo "</h4></td>
                <td class=\"text-center\">";
            // line 103
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 103);
            echo "</td>
                <td class=\"text-center\" style=\"white-space: nowrap;\">
                  ";
            // line 105
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 105)) {
                // line 106
                echo "                   <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 106);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_reorder"] ?? null);
                echo "\" class=\"rounded-full  h-8 w-8 flex justify-center items-center bg-primary-900 \">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" class=\"w-5 h-5 fill-white\">
                      <path fill-rule=\"evenodd\" d=\"M15.312 11.424a5.5 5.5 0 01-9.201 2.466l-.312-.311h2.433a.75.75 0 000-1.5H3.989a.75.75 0 00-.75.75v4.242a.75.75 0 001.5 0v-2.43l.31.31a7 7 0 0011.712-3.138.75.75 0 00-1.449-.39zm1.23-3.723a.75.75 0 00.219-.53V2.929a.75.75 0 00-1.5 0V5.36l-.31-.31A7 7 0 003.239 8.188a.75.75 0 101.448.389A5.5 5.5 0 0113.89 6.11l.311.31h-2.432a.75.75 0 000 1.5h4.243a.75.75 0 00.53-.219z\" clip-rule=\"evenodd\" />
                    </svg>
                    
                    
                  </a> 
                  ";
            }
            // line 114
            echo "
                  ";
            // line 118
            echo "                
                </td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 123
            echo "              <tr>
                <td class=\"text-center\">";
            // line 124
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 124);
            echo "</td>
                <td class=\"text-center\"></td>
                <td class=\"text-center\">1</td>
                <td class=\"text-center\">";
            // line 127
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 127);
            echo "</td>
                <td class=\"text-center\">";
            // line 128
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 128);
            echo "</td>
                ";
            // line 129
            if (($context["products"] ?? null)) {
                // line 130
                echo "                  <td></td>
                ";
            }
            // line 131
            echo " </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "          </tbody>
          <tfoot>
            ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 136
            echo "              <tr>
                <td colspan=\"3\" class=\"\"><b>";
            // line 137
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 137);
            echo "</b></td>
            <td colspan=\"3\" class=\"text-center\">";
            // line 138
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 138);
            echo "</td>
                ";
            // line 139
            if (($context["products"] ?? null)) {
                // line 140
                echo "                  <td></td>
                ";
            }
            // line 141
            echo " </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "          </tfoot>
        </table>
  
      </div>


      ";
        // line 149
        if (($context["comment"] ?? null)) {
            // line 150
            echo "        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-center\">";
            // line 153
            echo ($context["text_comment"] ?? null);
            echo "</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-center\">";
            // line 158
            echo ($context["comment"] ?? null);
            echo "</td>
            </tr>
          </tbody>
        </table>
      ";
        }
        // line 163
        echo "    </div>




      ";
        // line 168
        if (($context["histories"] ?? null)) {
            // line 169
            echo "        <h3 class=\" flex items-center font-bold text-primary-900 bg-red-300 py-2 rounded-full px-4 my-2 gap-2\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" class=\"w-5 h-5\">
            <path d=\"M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z\" />
            <path fill-rule=\"evenodd\" d=\"M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z\" clip-rule=\"evenodd\" />
          </svg>
          
          ";
            // line 175
            echo ($context["text_history"] ?? null);
            echo "


        </h3>
        <div class=\" bg-red-100 flex items-center justify-center rounded-lg p-2\">
        <table class=\" table-auto  w-full\">
          <thead class=\" font-semibold\">
            <tr  class=\"border-b-2 border-primary-900\">
              <td class=\"text-center px-2\">";
            // line 183
            echo ($context["column_date_added"] ?? null);
            echo "</td>
              <td class=\"text-center px-2\">";
            // line 184
            echo ($context["column_status"] ?? null);
            echo "</td>
              <td class=\"text-center px-2\">";
            // line 185
            echo ($context["column_comment"] ?? null);
            echo "</td>
            </tr>
          </thead>
          <tbody>
            ";
            // line 189
            if (($context["histories"] ?? null)) {
                // line 190
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 191
                    echo "                <tr  class=\"border-b-2 border-primary-900\">
                  <td class=\"text-center\">";
                    // line 192
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 192);
                    echo "</td>
                  <td class=\"text-center\">";
                    // line 193
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 193);
                    echo "</td>
                  <td class=\"text-center\">";
                    // line 194
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 194);
                    echo "</td>
                </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 197
                echo "            ";
            } else {
                // line 198
                echo "              <tr>
                <td colspan=\"3\" class=\"text-center\">";
                // line 199
                echo ($context["text_no_results"] ?? null);
                echo "</td>
              </tr>
            ";
            }
            // line 202
            echo "          </tbody>
        </table>
      </div>
      ";
        }
        // line 206
        echo "

      
       
          <a href=\"";
        // line 210
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn my-2 w-1/2 btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>
      
      


      ";
        // line 215
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    </div>
</div>
";
        // line 218
        echo ($context["footer"] ?? null);
        echo "




";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  509 => 218,  503 => 215,  493 => 210,  487 => 206,  481 => 202,  475 => 199,  472 => 198,  469 => 197,  460 => 194,  456 => 193,  452 => 192,  449 => 191,  444 => 190,  442 => 189,  435 => 185,  431 => 184,  427 => 183,  416 => 175,  408 => 169,  406 => 168,  399 => 163,  391 => 158,  383 => 153,  378 => 150,  376 => 149,  368 => 143,  361 => 141,  357 => 140,  355 => 139,  351 => 138,  347 => 137,  344 => 136,  340 => 135,  336 => 133,  329 => 131,  325 => 130,  323 => 129,  319 => 128,  315 => 127,  309 => 124,  306 => 123,  301 => 122,  292 => 118,  289 => 114,  275 => 106,  273 => 105,  268 => 103,  264 => 102,  260 => 101,  256 => 100,  245 => 99,  241 => 97,  237 => 96,  233 => 95,  230 => 94,  226 => 93,  221 => 90,  217 => 89,  215 => 88,  211 => 87,  207 => 86,  203 => 85,  199 => 84,  195 => 83,  172 => 62,  166 => 60,  162 => 59,  159 => 58,  157 => 57,  154 => 56,  148 => 53,  144 => 52,  139 => 50,  133 => 47,  129 => 46,  126 => 45,  124 => 44,  119 => 42,  115 => 41,  109 => 38,  105 => 37,  97 => 32,  87 => 25,  82 => 23,  78 => 22,  74 => 20,  56 => 11,  52 => 10,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/order_info.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/account/order_info.twig");
    }
}
