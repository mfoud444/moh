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

/* catalog/view/template/product/product.twig */
class __TwigTemplate_79f4ea7e3a0db3055df15726b8f82a954f1b5c984513a760ca48233e3287523d extends Template
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
  <div id=\"product-info\" class= \"py-2\" x-data=\"{ tab: 'tab-description' }\">


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
  

<div class=\"grid lg:pt-2 grid-cols-1 lg:grid-cols-10  gap-4\" >



<div class=\" lg:col-span-3 my-2 self-center md:self-start\" >
   ";
        // line 29
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 30
            echo "            <div class=\"magnific-popup flex flex-col gap-4 items-center\">
              ";
            // line 31
            if (($context["thumb"] ?? null)) {
                // line 32
                echo "                <a href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
                <img src=\"";
                // line 33
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"  
                     class=\"md:h-96 h-60 drop-shadow-lg object-cover \"/>
                </a>
              ";
            }
            // line 37
            echo "              ";
            if (($context["images"] ?? null)) {
                // line 38
                echo "                <div class=\"flex flex-row gap-4\">
                  ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 40
                    echo "                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 40);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\">
                    <img src=\"";
                    // line 41
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 41);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" 
                    alt=\"";
                    // line 42
                    echo ($context["heading_title"] ?? null);
                    echo "\" 
                    class=\"drop-shadow-lg\"/></a>&nbsp;
                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                </div>
              ";
            }
            // line 47
            echo "            </div>
          ";
        }
        // line 49
        echo "      
</div>



<div  class=\"lg:col-span-3\">

     
     <div class=\"flex pl-4 gap-4  justify-between\">
      <h1 class=\"text-gray-900 overflow-auto text-3xl  font-bold \">";
        // line 58
        echo ($context["heading_title"] ?? null);
        echo "</h1>         
     </div> 

";
        // line 61
        if (($context["review_status"] ?? null)) {
            // line 62
            echo "     <div hidden  class=\"flex flex-row-reverse  justify-end gap-2\">
       <p>
           <div class=\"flex flex-row-reverse justify-center items-center \">
";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 66
                echo "   ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 67
                    echo "<svg
 xmlns=\"http://www.w3.org/2000/svg\"
 class=\"w-5 h-5\"
 fill=\"none\"
 viewBox=\"0 0 24 24\"
 stroke-width=\"1.5\"
 stroke=\"currentColor\"
>
 <path
   stroke-linecap=\"round\"
   stroke-linejoin=\"round\"
   d=\"M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z\"
 />
</svg>



 ";
                } else {
                    // line 85
                    echo "    <svg
 xmlns=\"http://www.w3.org/2000/svg\"
 class=\"w-5 h-5 text-yellow-300 fill-yellow-300\"
 fill=\"none\"
 viewBox=\"0 0 24 24\"
 stroke-width=\"1.5\"
 stroke=\"currentColor\"
>
 <path
   stroke-linecap=\"round\"
   stroke-linejoin=\"round\"
   d=\"M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z\"
 />
</svg>


    ";
                }
                // line 102
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "   
</div>
</div>
";
        }
        // line 105
        echo "   

 ";
        // line 108
        echo " ";
        if (($context["price"] ?? null)) {
            // line 109
            echo "   <div class=\"flex text-2xl gap-4 mb-1\">
     ";
            // line 110
            if ( !($context["special"] ?? null)) {
                // line 111
                echo "     <span class=\" font-bold text-gray-900 dark:text-white\">";
                echo ($context["price"] ?? null);
                echo "</span>
       ";
            } else {
                // line 113
                echo "       <span class=\" font-bold text-gray-900 dark:text-white\">";
                echo ($context["special"] ?? null);
                echo "</span> 
       <span class=\" line-through font-bold text-red-900 dark:text-white\">";
                // line 114
                echo ($context["price"] ?? null);
                echo "</span>
       ";
            }
            // line 116
            echo "      ";
            if (($context["tax"] ?? null)) {
                // line 117
                echo "       <span class=\" font-bold text-gray-900 dark:text-white\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</span>
     ";
            }
            // line 118
            echo " 
   </div>
  
   ";
            // line 121
            if (($context["points"] ?? null)) {
                // line 122
                echo "   <span class=\"text-xl font-bold text-gray-900 dark:text-white\">";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</span>
 ";
            }
            // line 124
            echo "
 ";
            // line 125
            if (($context["discounts"] ?? null)) {
                // line 126
                echo "   <ul>
   ";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 128
                    echo "     <li class=\"text-xl  text-gray-900 dark:text-white\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 128);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 128);
                    echo "</li>
   ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "   </ul>
 ";
            }
            // line 132
            echo "   ";
        }
        // line 133
        echo "
 
  
   <div id=\"product\">
    <form id=\"form-product\" class=\"flex flex-col gap-2\">
      ";
        // line 138
        if (($context["options"] ?? null)) {
            // line 139
            echo "  
      <h3 class=\"text-xl\">";
            // line 140
            echo ($context["text_option"] ?? null);
            echo "</h3>
      <div>
        ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 143
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 143) == "select")) {
                    // line 144
                    echo "            <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 144)) {
                        echo " required";
                    }
                    echo "\">
              <label for=\"input-option-";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 145);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 145);
                    echo "</label> 
              <select name=\"option[";
                    // line 146
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 146);
                    echo "]\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 146);
                    echo "\" class=\" form-control \">
                <option value=\"\" >";
                    // line 147
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 148
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 148));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 149
                        echo "                  <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 149);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 149);
                        echo "
                    ";
                        // line 150
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 150)) {
                            // line 151
                            echo "                      (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 151);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 151);
                            echo ")
                    ";
                        }
                        // line 152
                        echo "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 154
                    echo "              </select>
              <div id=\"error-option-";
                    // line 155
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 155);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 158
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 158) == "radio")) {
                    // line 159
                    echo "            <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 159)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"form-label\">";
                    // line 160
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 160);
                    echo "</label>
              <div id=\"input-option-";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 161);
                    echo "\">
                ";
                    // line 162
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 162));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 163
                        echo "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"option[";
                        // line 164
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 164);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 164);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 164);
                        echo "\" class=\"form-check-input\"/> <label for=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 164);
                        echo "\" class=\"form-check-label\">";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 164)) {
                            echo "<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 164);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 164);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 164)) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 164);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 164);
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 165
                        echo "                      ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 165);
                        echo "
                      ";
                        // line 166
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 166)) {
                            // line 167
                            echo "                        (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 167);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 167);
                            echo ")
                      ";
                        }
                        // line 169
                        echo "                    </label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 172
                    echo "              </div>
              <div id=\"error-option-";
                    // line 173
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 173);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 176
                echo "  
  
          ";
                // line 178
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 178) == "checkbox")) {
                    // line 179
                    echo "            <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 179)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"form-label font-semibold\">";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 180);
                    echo "</label>
              <div id=\"input-option-";
                    // line 181
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 181);
                    echo "\" class=\"flex gap-2 flex-wrap \">
  
                ";
                    // line 183
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 183));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 184
                        echo "                  <div class=\"form-check bg-yellow-300 py-1 px-2 flex  justify-center rounded-lg\">
                    <input type=\"checkbox\" name=\"option[";
                        // line 185
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 185);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 185);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 185);
                        echo "\" class=\"form-check-input\"/> <label for=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 185);
                        echo "\" class=\"form-check-label\">
                      ";
                        // line 186
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 186)) {
                            // line 187
                            echo "                        <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 187);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 187);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 187)) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 187);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 187);
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 188
                        echo "                      ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 188);
                        echo "
                      ";
                        // line 189
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 189)) {
                            // line 190
                            echo "                        <div>(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 190);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 190);
                            echo ")</div>
                      ";
                        }
                        // line 191
                        echo "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 194
                    echo "              </div>
              <div id=\"error-option-";
                    // line 195
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 195);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 198
                echo "  
  
          
          ";
                // line 201
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 201) == "text")) {
                    // line 202
                    echo "            <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 202)) {
                        echo " required";
                    }
                    echo "\">
              <label for=\"input-option-";
                    // line 203
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 203);
                    echo "</label> <input type=\"text\" name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 203);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 203);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                    echo "\" class=\"form-control\"/>
              <div id=\"error-option-";
                    // line 204
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 204);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 207
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 207) == "textarea")) {
                    // line 208
                    echo "            <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 208)) {
                        echo " required";
                    }
                    echo "\">
              <label for=\"input-option-";
                    // line 209
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 209);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 209);
                    echo "</label> <textarea name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 209);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 209);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 209);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 209);
                    echo "</textarea>
              <div id=\"error-option-";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 210);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 213
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 213) == "file")) {
                    // line 214
                    echo "            <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 214)) {
                        echo " required";
                    }
                    echo "\">
              <label for=\"button-upload-";
                    // line 215
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 215);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 215);
                    echo "</label>
              <div>
                <button type=\"button\" id=\"button-upload-";
                    // line 217
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 217);
                    echo "\" data-oc-toggle=\"upload\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" data-oc-url=\"";
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 217);
                    echo "\" class=\"btn btn-light btn-block\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                <input type=\"hidden\" name=\"option[";
                    // line 218
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 218);
                    echo "]\" value=\"\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 218);
                    echo "\"/>
              </div>
              <div id=\"error-option-";
                    // line 220
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 220);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 223
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 223) == "date")) {
                    // line 224
                    echo "            <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 224)) {
                        echo " required";
                    }
                    echo "\">
              <label for=\"input-option-";
                    // line 225
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 225);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 225);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"date\" name=\"option[";
                    // line 227
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 227);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 227);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 227);
                    echo "\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-option-";
                    // line 230
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 230);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 233
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 233) == "datetime")) {
                    // line 234
                    echo "            <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 234)) {
                        echo " required";
                    }
                    echo "\">
              <label for=\"input-option-";
                    // line 235
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 235);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 235);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"datetime-local\" name=\"option[";
                    // line 237
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 237);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 237);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 237);
                    echo "\" class=\"form-control datetime\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-option-";
                    // line 240
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 240);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 243
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 243) == "time")) {
                    // line 244
                    echo "            <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 244)) {
                        echo " required";
                    }
                    echo "\">
              <label for=\"input-option-";
                    // line 245
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 245);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 245);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"time\" name=\"option[";
                    // line 247
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 247);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 247);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 247);
                    echo "\" class=\"form-control time\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-option-";
                    // line 250
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 250);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 253
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 254
            echo "        ";
        }
        // line 255
        echo "        ";
        if (($context["subscription_plans"] ?? null)) {
            // line 256
            echo "          <hr/>
          <h3>";
            // line 257
            echo ($context["text_subscription"] ?? null);
            echo "</h3>
          <div class=\"mb-3 required\">
            <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\">
              <option value=\"\">";
            // line 260
            echo ($context["text_select"] ?? null);
            echo "</option>
              ";
            // line 261
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 262
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 262);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 262);
                echo "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 264
            echo "            </select>
            ";
            // line 265
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 266
                echo "              <div id=\"subscription-description-";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 266);
                echo "\" class=\"form-text subscription d-none\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "description", [], "any", false, false, false, 266);
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 268
            echo "            <div id=\"error-subscription\" class=\"invalid-feedback\"></div>
          </div>
        ";
        }
        // line 271
        echo "        <div class=\"my-3 flex gap-4 items-center\">
  
          <label for=\"input-quantity\" class=\"form-label font-semibold\">";
        // line 273
        echo ($context["entry_qty"] ?? null);
        echo "</label> 
          
          <!-- <input type=\"number\" name=\"quantity\" value=\"";
        // line 275
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/>  -->
       
          <div id=\"error-quantity\" class=\"form-text\"></div>
       
  
          <div class=\"flex col-span-3 items-center gap-1\">
            <button
              type=\"button\"
              class=\"w-6 h-6 flex justify-center rounded-full cursor-pointer text-white font-bold bg-primary-900\"
              data-quantity=\"plus\"
              data-field=\"";
        // line 285
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cart_id", [], "any", false, false, false, 285);
        echo "\"
            >
              +
            </button>
    
            <input
            type=\"number\"
             name=\"quantity\"
              value=\"";
        // line 293
        echo ($context["minimum"] ?? null);
        echo "\" 
              size=\"2\" 
              id=\"input-quantity\" 
              class=\"rounded-full w-14 h-8\"
            
            />
            <button
              type=\"button\"
              class=\"w-6 h-6 flex justify-center text-white font-bold cursor-pointer rounded-full bg-red-500\"
              data-quantity=\"minus\"
              data-field=\"";
        // line 303
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cart_id", [], "any", false, false, false, 303);
        echo "\"
            >
              -
            </button>
            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 307
        echo ($context["product_id"] ?? null);
        echo "\" id=\"input-product-id\"/>
          </div>
    
        </div>
  
  
        ";
        // line 313
        if ((($context["minimum"] ?? null) > 1)) {
            // line 314
            echo "          <div class=\"bg-primary-700\"><i class=\"fa-solid fa-circle-info\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
        ";
        }
        // line 316
        echo "  
      </div>
  
  
  
  
  
          ";
        // line 323
        echo " 
     
     <div class=\"flex gap-4 justify-between items-center\">
          <button
          type=\"submit\"
          id=\"button-cart\"
          class=\"btn-order  bg-primary-800 hover:bg-#2bb826\"
        >
          <svg
            aria-hidden=\"true\"
            class=\"w-5 h-5\"
            fill=\"currentColor\"
            viewBox=\"0 0 20 20\"
            xmlns=\"http://www.w3.org/2000/svg\"
          >
            <path
              d=\"M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z\"
            ></path>
          </svg>
          <p class=\"text-xs font-bold\">أضف للسلة</p>
        </button>
    </form>
  
    <form method=\"post\"  data-oc-toggle=\"ajax\" data-oc-load=\"";
        // line 346
        echo ($context["wishlist"] ?? null);
        echo "\" data-oc-target=\"#wishlist\">
      <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 347
        echo ($context["product_id"] ?? null);
        echo "\"/>
      <input type=\"hidden\" name=\"quantity\" value=\"";
        // line 348
        echo ($context["minimum"] ?? null);
        echo "\" />
     
      ";
        // line 350
        $context["foo"] = false;
        // line 351
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["faf"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["fafs"]) {
            // line 352
            echo "        ";
            if (($context["fafs"] == ($context["product_id"] ?? null))) {
                // line 353
                echo "        ";
                $context["foo"] = true;
                // line 354
                echo "        ";
            }
            // line 355
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fafs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
  
        <button
        type=\"submit\"
        formaction=\"";
        // line 359
        echo ($context["add_to_wishlist"] ?? null);
        echo "\"
        title=\"";
        // line 360
        echo ($context["button_wishlist"] ?? null);
        echo "\"
        data-q=\"";
        // line 361
        echo ($context["product_id"] ?? null);
        echo "\"
        class=\"transition ";
        // line 362
        if ((($context["foo"] ?? null) == 1)) {
            echo " hidden  ";
        }
        echo " ease-in duration-300 bg-white flex items-center justify-center hover:text-purple-500 shadow hover:shadow-md text-gray-500 rounded-full w-10 h-10 text-center p-1\"
      >
        <svg
          xmlns=\"http://www.w3.org/2000/svg\"
          class=\"h-8 w-8\"
          fill=\"none\"
          viewBox=\"0 0 24 24\"
          stroke=\"currentColor\"
        >
          <path
            stroke-linecap=\"round\"
            stroke-linejoin=\"round\"
            stroke-width=\"2\"
            d=\"M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z\"
          />
        </svg>
      </button>
      
      
        <button
        type=\"submit\" formaction=\"";
        // line 382
        echo ($context["remove"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" 
          data-q=\"";
        // line 383
        echo ($context["product_id"] ?? null);
        echo "\"
          class=\"transition ";
        // line 384
        if ((($context["foo"] ?? null) != 1)) {
            echo " hidden  ";
        }
        echo " ease-in duration-300 bg-white flex items-center justify-center hover:text-purple-500 shadow hover:shadow-md text-gray-500 rounded-full w-10 h-10 text-center p-1\"
        >
          <svg
            xmlns=\"http://www.w3.org/2000/svg\"
            class=\"h-8 w-8 fill-red-700 text-red-700\"
            fill=\"none\"
            viewBox=\"0 0 24 24\"
            stroke=\"currentColor\"
          >
            <path
              stroke-linecap=\"round\"
              stroke-linejoin=\"round\"
              stroke-width=\"2\"
              d=\"M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z\"
            />
          </svg>
        </button>
     
  </form>
  </div>

</div>

 






<div class=\" lg:col-span-4\">

     ";
        // line 417
        echo "      <div   
       class=\"flex font-semibold justify-evenly md:justify-around border-b mb-4 border-gray-200 dark:border-gray-700\">

    <button @click.prevent=\"tab = 'tab-description'\"   data-bs-toggle=\"tab\" 
    class=\"flex items-center py-2 t   text-center\"
    :class=\"{ ' text-blue-500 border-b-2   border-blue-500 ' : tab === 'tab-description' }\"
    >
       <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\"   :class=\"{ ' fill-blue-500' : tab === 'tab-description' }\" shape-rendering=\"geometricPrecision\" text-rendering=\"geometricPrecision\"
    image-rendering=\"optimizeQuality\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" viewBox=\"0 0 419 511.67\">
    <path
        d=\"M93 39.4h46.13C141.84 17.18 159.77 0 181.52 0c21.61 0 39.45 16.95 42.33 38.94l46.77.46c2.61 0 4.7 2.1 4.7 4.71v51.84a4.69 4.69 0 0 1-4.7 4.71H93.05c-2.56 0-4.71-2.1-4.71-4.71V44.11A4.644 4.644 0 0 1 93 39.4zm221.97 264.22c57.47 0 104.03 46.58 104.03 104.02 0 57.47-46.59 104.03-104.03 104.03-57.47 0-104.02-46.58-104.02-104.03 0-57.47 46.58-104.02 104.02-104.02zm16.14 53.2c6.21 6.21 3.92 15.81-2.55 21.1-6.24 5.03-17.54 7.47-23.99 1.54-6.5-6.06-3.92-15.79 2.31-21.12 6.01-5.06 17.89-7.84 24.23-1.52zM294.4 438.4h5.3v-34.56h-10.05c0-13.7 25.14-4.81 43.65-9.47v44.03h7v14.71h-45.9V438.4zM41.73 59.28h23.93v24.37H41.73c-4.77 0-9.12 1.97-12.25 5.1-3.14 3.14-5.1 7.48-5.1 12.24v315.53c0 4.74 1.96 9.09 5.1 12.23 3.15 3.15 7.51 5.12 12.25 5.12h142.61c1.69 8.44 4.17 16.6 7.37 24.38H41.73c-11.45 0-21.9-4.71-29.47-12.28C4.72 438.43 0 427.98 0 416.52V100.99c0-11.48 4.7-21.91 12.25-29.46 7.55-7.55 17.99-12.25 29.48-12.25zm297.54 217.35V100.99c0-4.77-1.96-9.11-5.09-12.26a17.377 17.377 0 0 0-12.26-5.08H298V59.28h23.92c11.45 0 21.86 4.71 29.41 12.25 7.61 7.61 12.32 18.04 12.32 29.46V283.6c-7.79-3.07-15.95-5.42-24.38-6.97zm-206.74-8.06c-7.13 0-12.92-5.79-12.92-12.92s5.79-12.93 12.92-12.93h142.82c7.13 0 12.92 5.8 12.92 12.93s-5.79 12.92-12.92 12.92H132.53zM89.5 241.21c7.97 0 14.44 6.47 14.44 14.45 0 7.98-6.47 14.43-14.44 14.43s-14.44-6.45-14.44-14.43c0-7.98 6.47-14.45 14.44-14.45zm0 78.62c7.97 0 14.44 6.47 14.44 14.45 0 7.97-6.47 14.43-14.44 14.43s-14.44-6.46-14.44-14.43c0-7.98 6.47-14.45 14.44-14.45zm43.04 27.37c-7.13 0-12.93-5.8-12.93-12.93s5.8-12.93 12.93-12.93h80.96a133.376 133.376 0 0 0-17.26 25.86h-63.7zM89.5 162.61c7.97 0 14.44 6.46 14.44 14.43 0 7.98-6.47 14.44-14.44 14.44s-14.44-6.46-14.44-14.44c0-7.97 6.47-14.43 14.44-14.43zm43.03 27.35c-7.13 0-12.92-5.79-12.92-12.92s5.79-12.93 12.92-12.93h142.82c7.13 0 12.92 5.8 12.92 12.93s-5.79 12.92-12.92 12.92H132.53zm48.5-169.8c12.3 0 22.26 9.96 22.26 22.27 0 12.29-9.96 22.26-22.26 22.26s-22.26-9.97-22.26-22.26c0-12.31 9.96-22.27 22.26-22.27z\" />
</svg>

        <span class=\"mx-1 \">
         ";
        // line 431
        echo ($context["tab_description"] ?? null);
        echo "
        </span>
    </button>

 ";
        // line 435
        if (($context["attribute_groups"] ?? null)) {
            // line 436
            echo "    <button @click.prevent=\"tab = 'tab-specification'\"    data-bs-toggle=\"tab\" 
    class=\"flex items-center py-2   text-center\"
    :class=\"{ ' text-blue-500 border-b-2   border-blue-500 ' : tab === 'tab-specification' }\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" :class=\"{ ' fill-blue-500' : tab === 'tab-specification' }\" class=\"w-5 h-5 mx-1 sm:w-6 sm:h-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z\" />
        </svg>

        <span class=\"mx-1 \">
         ";
            // line 444
            echo ($context["tab_attribute"] ?? null);
            echo "
        </span>
    </button>
  ";
        }
        // line 448
        echo "

  ";
        // line 450
        if (($context["review_status"] ?? null)) {
            // line 451
            echo "
    <button    @click.prevent=\"tab = 'tab-review'\"    data-bs-toggle=\"tab\" 
    class=\"flex items-center py-2   text-center\"
    :class=\"{ ' text-blue-500 border-b-2   border-blue-500 ' : tab === 'tab-review' }\">
      <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" 
      :class=\"{ ' fill-blue-500' : tab === 'tab-review' }\"
      shape-rendering=\"geometricPrecision\" text-rendering=\"geometricPrecision\"
    image-rendering=\"optimizeQuality\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" viewBox=\"0 0 475 511.95\">
    <path fill-rule=\"nonzero\"
        d=\"M112.09 29.97 88.85 84.39a8.82 8.82 0 0 1-7.86 5.37l-58.42 5.25 44.58 38.93a8.82 8.82 0 0 1 2.79 8.61l-13.18 57.69 50.8-30.37a8.855 8.855 0 0 1 9.22.1l24.28 14.52-4.13 18.08-24.84-14.85-53.02 31.69c-1.51.94-3.2 1.59-4.96 1.91-1.85.32-3.76.29-5.64-.13-3.84-.87-6.96-3.22-8.89-6.28-1.94-3.09-2.71-6.93-1.83-10.74l13.81-60.43-46.17-40.31c-.48-.36-.92-.77-1.32-1.22-.8-.81-1.51-1.73-2.09-2.72l-.44-.76C.81 97.29.31 95.7.11 94.01l-.08-.83c-.24-3.75 1.03-7.29 3.31-10.01 2.26-2.71 5.54-4.57 9.27-5l62.06-5.54L99 15.66c.73-1.7 1.74-3.25 3.02-4.52 1.07-1.05 2.34-1.97 3.78-2.68l.72-.34c3.61-1.54 7.51-1.48 10.9-.11 3.35 1.36 6.21 4.01 7.74 7.61l20.06 46.98-18.48 1.65-14.65-34.28zm103.82 340.37c0 4.65-3.78 8.43-8.43 8.43s-8.43-3.78-8.43-8.43v-15.58c-.45-.24-.88-.52-1.29-.85l-16.23-13.16-21.88-17.95c-4.07-3.36-8.68-5.68-13-6.54-2.77-.55-5.33-.49-7.33.33-1.62.66-3.02 1.97-3.96 4.06-1.23 2.71-1.8 6.6-1.46 11.82.3 4.64 1.92 9.74 4.06 14.6 3.17 7.2 7.49 13.8 10.67 18.05l64.53 97.63a8.297 8.297 0 0 1 1.33 3.66c1.28 10.54 3.52 18.44 6.82 23.39 2.4 3.59 5.51 5.41 9.38 5.31 32.71 0 68.2-1.35 100.56 0 6.21-.1 11.9-1.93 17.04-5.47 5.74-3.96 10.99-10.11 15.73-18.4l1.21-2.07c12.44-21.44 24.51-42.25 25.78-66.96l-.64-28.65-.09-1.26.09-6.75c.23-20.97.59-53.07-16.85-56.21h-11.3c.34 8.96-.18 18.22-.65 26.63-.28 4.96-.54 9.57-.54 13.85 0 4.65-3.78 8.43-8.44 8.43-4.65 0-8.43-3.78-8.43-8.43 0-3.97.3-9.18.62-14.78 1.18-20.89 2.75-48.83-11.84-51.6h-11.06c-.73 0-1.45-.09-2.13-.27.69 10.06.09 20.72-.45 30.26-.28 4.97-.54 9.58-.54 13.86 0 4.65-3.78 8.43-8.43 8.43-4.66 0-8.44-3.78-8.44-8.43 0-3.97.3-9.18.62-14.78 1.18-20.89 2.75-48.83-11.84-51.59h-11.06c-.76 0-1.5-.1-2.2-.29v43.5c0 4.66-3.78 8.43-8.43 8.43-4.66 0-8.43-3.77-8.43-8.43V216.6c0-14.66-5.99-23.92-13.63-27.78-2.8-1.41-5.82-2.13-8.8-2.13-2.96 0-5.96.7-8.75 2.11-7.55 3.84-13.46 13.14-13.46 28.15v153.39zm-16.86-37.04V229.48l-35.3 21.1a6.87 6.87 0 0 1-9.41-2.37 6.836 6.836 0 0 1-.8-5.06h-.01l19.15-83.76-64.73-56.52c-2.85-2.49-3.14-6.82-.64-9.68a6.844 6.844 0 0 1 4.8-2.34l85.32-7.65 33.75-79.01c1.49-3.5 5.52-5.13 9.01-3.64 1.72.73 2.99 2.08 3.65 3.68l33.73 78.97 85.55 7.68c3.77.32 6.57 3.65 6.24 7.42a6.814 6.814 0 0 1-2.32 4.57l-64.71 56.52 19.14 83.76a6.874 6.874 0 0 1-10.46 7.29l-33.6-20.09v13.99c.7-.19 1.44-.28 2.2-.28h11.62c.67 0 1.31.07 1.93.22 13.96 2.23 20.92 11.53 24.21 23.61 1.3-.83 2.86-1.31 4.51-1.31h11.62c.67 0 1.31.08 1.93.22 14.86 2.38 21.78 12.76 24.8 25.98.71-.19 1.46-.3 2.23-.3h11.63c.66 0 1.31.08 1.93.23 31.9 5.1 31.44 46.2 31.14 73-.04 12.4.52 24.74.65 37.13-1.42 28.91-14.53 51.5-28.03 74.77l-1.14 2c-5.98 10.44-12.91 18.42-20.81 23.86-7.99 5.49-16.83 8.32-26.5 8.43l-100.44.04c-10.03.17-17.81-4.22-23.53-12.79-4.61-6.91-7.67-16.58-9.32-28.76l-62.94-95.25c-3.71-4.97-8.77-12.71-12.55-21.29-2.84-6.45-5-13.45-5.45-20.32-.53-8.13.61-14.69 2.92-19.8 2.87-6.35 7.45-10.5 12.98-12.75 5.16-2.1 11-2.41 16.88-1.24 7.04 1.4 14.31 4.98 20.5 10.09l28.67 23.47zM342 396.57c0-3.8 3.09-6.89 6.89-6.89 3.79 0 6.88 3.09 6.88 6.89v31.48a6.886 6.886 0 0 1-13.77 0v-31.48zm-40.68-13.92c0-3.79 3.08-6.88 6.88-6.88s6.88 3.09 6.88 6.88v45.39c0 3.8-3.08 6.89-6.88 6.89s-6.88-3.09-6.88-6.89v-45.39zm74.67-366.99 24.34 56.97 62.06 5.54c3.73.43 7 2.29 9.27 5 2.28 2.71 3.55 6.26 3.31 10.01l-.08.83c-.2 1.69-.7 3.28-1.43 4.72l-.45.77c-.57.98-1.27 1.89-2.06 2.69-.4.45-.85.87-1.34 1.24l-46.17 40.31 13.81 60.43c.88 3.81.1 7.66-1.83 10.74a14.198 14.198 0 0 1-8.89 6.28c-1.88.42-3.8.45-5.64.13a14.41 14.41 0 0 1-4.96-1.91l-53.02-31.69-24.75 14.8-4.19-18.05 24.25-14.5a8.855 8.855 0 0 1 9.22-.1l50.8 30.37-13.19-57.69c-.69-3.07.28-6.41 2.8-8.61l44.58-38.93-58.42-5.25a8.82 8.82 0 0 1-7.86-5.37l-23.24-54.42-14.65 34.3-18.49-1.66 20.07-46.99c1.53-3.6 4.38-6.24 7.75-7.6 3.38-1.38 7.28-1.44 10.89.1l.7.33c1.44.71 2.73 1.64 3.79 2.7 1.29 1.26 2.29 2.81 3.02 4.51z\" />
</svg>

        <span class=\"mx-1 \">
          ";
            // line 464
            echo ($context["text_reviews"] ?? null);
            echo "
        </span>
    </button>
  ";
        }
        // line 468
        echo "
  
</div>
 ";
        // line 472
        echo "


 ";
        // line 476
        echo " <div class=\"tab-content\">

";
        // line 479
        echo " <div id=\"tab-description\"  x-show=\"tab === 'tab-description'\" class=\"tabcontent  \">

          ";
        // line 482
        echo "<div class=\"overflow-x-auto   relative  sm:rounded-lg\">
    <table class=\"w-full text-sm h-12  text-gray-500 dark:text-gray-400\">
";
        // line 484
        if (($context["manufacturer"] ?? null)) {
            echo "   
            <tr class=\" bg-gray-50 dark:bg-gray-800\">
                <th scope=\"col\" class=\"py-3 px-3\">
                 ";
            // line 487
            echo ($context["text_manufacturer"] ?? null);
            echo "
                </th>
                <td class=\" px-6\">
                 <a  href=\"";
            // line 490
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a>
                </td>
            </tr>
 ";
        }
        // line 494
        echo "
                <tr>
                <th scope=\"col\" class=\"py-3 px-6\">
                 ";
        // line 497
        echo ($context["text_model"] ?? null);
        echo "
                </th>
                <td class=\" px-6\">
                   ";
        // line 500
        echo ($context["model"] ?? null);
        echo "
                </td>
              </tr>

 ";
        // line 504
        if (($context["reward"] ?? null)) {
            // line 505
            echo "              <tr class=\" bg-gray-50 dark:bg-gray-800\">
                <th scope=\"col\" class=\"py-3 px-6\">
                   ";
            // line 507
            echo ($context["text_reward"] ?? null);
            echo " 
                </th>
                 <td class=\" px-6\">
                  ";
            // line 510
            echo ($context["reward"] ?? null);
            echo "
                </td>
                </tr>

 ";
        }
        // line 515
        echo "                <tr>
                <th scope=\"col\" class=\"py-3 px-6\">
                  ";
        // line 517
        echo ($context["text_stock"] ?? null);
        echo "
                </th>
               <td class=\" px-6\">
                   ";
        // line 520
        echo ($context["stock"] ?? null);
        echo "
                </td>
                </tr>
            
      

    </table>
</div>
        ";
        // line 529
        echo "
        <div class=\"\">
         <h1 class=\" text-xl font-bold\">الوصف</h1>
         <div class=\" break-all max-h-48 rounded-md py-2 px-4   bg-primary-100 overflow-x-auto\">  ";
        // line 532
        echo ($context["description"] ?? null);
        echo " </div>
        </div>

</div>
 ";
        // line 537
        echo "

 ";
        // line 540
        echo "          ";
        if (($context["attribute_groups"] ?? null)) {
            // line 541
            echo "            <div id=\"tab-specification\" x-show=\"tab === 'tab-specification'\" class=\"tabcontent w-full\">
              
                <table class=\"w-full\">
                  ";
            // line 544
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 545
                echo "                    <thead class=\"font-semibold \">
                      <tr>
                        <th colspan=\"2\" class=\"text-center py-1 border-primary-400 bg-red-300  border-y-2 w-1/2 \"><strong class=\"  text-primary-700  rounded-lg\">";
                // line 547
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 547);
                echo "</strong></th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
                // line 551
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 551));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 552
                    echo "                        <tr>
                          <td class=\"  font-semibold pr-4 \">";
                    // line 553
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 553);
                    echo "</td>
                          <td>";
                    // line 554
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 554);
                    echo "</td>
                        </tr>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 557
                echo "                    </tbody>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 559
            echo "                </table>
          
            </div>
          ";
        }
        // line 563
        echo "
 ";
        // line 565
        echo "

 ";
        // line 568
        echo "   ";
        if (($context["review_status"] ?? null)) {
            // line 569
            echo "          
            <div id=\"tab-review\" x-show=\"tab === 'tab-review'\" class=\"tabcontent \">
<div>
            ";
            // line 572
            echo ($context["review"] ?? null);
            echo "
             </div>
         
            </div>
           
          ";
        }
        // line 578
        echo " ";
        // line 579
        echo "
</div>
 ";
        // line 582
        echo "




      

      </div>
   </div>

  </div>

  ";
        // line 594
        if (($context["products"] ?? null)) {
            // line 595
            echo "   <h3 class=\"text-xl font-bold  my-2 bg-red-300 text-primary-700 w-full md:w-1/2 rounded-lg border-3 py-2 pr-2 border-red-600\">
        ";
            // line 596
            echo ($context["text_related"] ?? null);
            echo "</h3>

  <div class=\"grid-product\">

          ";
            // line 600
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 601
                echo "           ";
                echo $context["product"];
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 602
            echo "  
      ";
        }
        // line 604
        echo "

      ";
        // line 606
        if (($context["tags"] ?? null)) {
            // line 607
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
          ";
            // line 608
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 609
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 609);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 609);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "end", [], "any", false, false, false, 609)) {
                    echo ",";
                }
                // line 610
                echo "          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 611
            echo "        </p>
        </div>
      ";
        }
        // line 614
        echo "    </div>
   
 

</div>

</div>









<script type=\"text/javascript\"><!--


function open_whatsapp(){
  var isMobile = {
Android: function() {
return navigator.userAgent.match(/Android/i);
},
BlackBerry: function() {
return navigator.userAgent.match(/BlackBerry/i);
},
iOS: function() {
return navigator.userAgent.match(/iPhone|iPad|iPod/i);
},
Opera: function() {
return navigator.userAgent.match(/Opera Mini/i);
},
Windows: function() {
return navigator.userAgent.match(/IEMobile/i);
},
any: function() {
return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
}
};
if( isMobile.any() ) {
  
var text = \$(this).attr(\"data-text\");
var url = \$(this).attr(\"data-link\");
var message = encodeURIComponent(text) + \" - \" + encodeURIComponent(url);
var whatsapp_url = \"whatsapp://send?phone=00967714589027?text=\" + message;
window.location.href = whatsapp_url;
} else {
alert(\"Please share this article in mobile device\");
}
}

 function open_messanger(){

  var isMobile = {
Android: function() {
return navigator.userAgent.match(/Android/i);
},
BlackBerry: function() {
return navigator.userAgent.match(/BlackBerry/i);
},
iOS: function() {
return navigator.userAgent.match(/iPhone|iPad|iPod/i);
},
Opera: function() {
return navigator.userAgent.match(/Opera Mini/i);
},
Windows: function() {
return navigator.userAgent.match(/IEMobile/i);
},
any: function() {
return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
}
};
if( isMobile.any() ) {
  
var text = \$(this).attr(\"data-text\");
var url = \$(this).attr(\"data-link\");
var message = encodeURIComponent(text) + \" - \" + encodeURIComponent(url);
var fp_messangerurl = 'fb-messenger://share?link=' + message;
 window.open('fb-messenger://share?link=' + encodeURIComponent(url) + '&app_id=' + encodeURIComponent(app_id));
} else {
alert(\"Please share this article in mobile device\");
}

 }


/*
function changeTab(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName(\"tabcontent\");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].classList.add(\"hidden\");
  }
  tablinks = document.getElementsByClassName(\"tablinks\");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(\"active\", \"\");
    tablinks[i].className = tablinks[i].className.replace(\"text-blue-600 bg-transparent border-b-2 border-blue-500\",\"\");
   
  }
  
  document.getElementById(cityName).classList.remove(\"hidden\");

  evt.currentTarget.className += \"active\";

}
*/


\$('#input-subscription').on('change', function (e) {
    var element = this;

    \$('.subscription').addClass('d-none');

    \$('#subscription-description-' + \$(element).val()).removeClass('d-none');
});

\$('#form-product').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=checkout/cart|add&language=";
        // line 736
        echo ($context["language"] ?? null);
        echo "',
        type: 'post',
        data: \$('#form-product').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        cache: false,
        processData: false,
        beforeSend: function () {
            \$('#button-cart').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-cart').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('#form-product').find('.is-invalid').removeClass('is-invalid');
            \$('#form-product').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#header-cart').load('index.php?route=common/cart|info');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).ready(function () {
    // \$('.magnific-popup').magnificPopup({
    //     type: 'image',
    //     delegate: 'a',
    //     gallery: {
    //         enabled: true
    //     }
    // });

   
  
  // This button will increment the value
  \$('[data-quantity=\"plus\"]').on('click' , function(e){
  
     // Stop acting like a button
    e.preventDefault();
   
     // Get the field name
     fieldName = \$(this).attr('data-field');
     fieldName2 = 'input-quantity';
    // alert(\$('#'+fieldName).val());
     // Get its current value
     var currentVal = parseInt(\$('#'+fieldName2).val());
    
     // If is not undefined
     if (!isNaN(currentVal)) {
         // Increment
        \$('#'+fieldName2).val(currentVal + 1);
     } else {
         // Otherwise put a 0 there
        \$('#'+fieldName2).val(0);
     }
  // \$('button[name='+fieldName+']').click();
 });
 // This button will decrement the value till 0
 \$('[data-quantity=\"minus\"]').on('click' , function(e) {
   //alert(\"gg\");
     // Stop acting like a button
    e.preventDefault();
     // Get the field name
     fieldName = \$(this).attr('data-field');
     fieldName2 = 'input-quantity';
     // Get its current value
     var currentVal = parseInt(\$('#'+fieldName2).val());
     // If it isn't undefined or its greater than 0
     if (!isNaN(currentVal) && currentVal > 0) {
         // Decrement one
         \$('#'+fieldName2).val(currentVal - 1);
     } else {
         // Otherwise put a 0 there
         \$('#'+fieldName2).val(0);
     }
   //\$('button[name='+fieldName+']').click();
   
 });


});
//--></script> 
";
        // line 831
        echo ($context["footer"] ?? null);
        echo "  































";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1652 => 831,  1554 => 736,  1430 => 614,  1425 => 611,  1411 => 610,  1402 => 609,  1385 => 608,  1380 => 607,  1378 => 606,  1374 => 604,  1370 => 602,  1361 => 601,  1357 => 600,  1350 => 596,  1347 => 595,  1345 => 594,  1331 => 582,  1327 => 579,  1325 => 578,  1316 => 572,  1311 => 569,  1308 => 568,  1304 => 565,  1301 => 563,  1295 => 559,  1288 => 557,  1279 => 554,  1275 => 553,  1272 => 552,  1268 => 551,  1261 => 547,  1257 => 545,  1253 => 544,  1248 => 541,  1245 => 540,  1241 => 537,  1234 => 532,  1229 => 529,  1218 => 520,  1212 => 517,  1208 => 515,  1200 => 510,  1194 => 507,  1190 => 505,  1188 => 504,  1181 => 500,  1175 => 497,  1170 => 494,  1161 => 490,  1155 => 487,  1149 => 484,  1145 => 482,  1141 => 479,  1137 => 476,  1132 => 472,  1127 => 468,  1120 => 464,  1105 => 451,  1103 => 450,  1099 => 448,  1092 => 444,  1082 => 436,  1080 => 435,  1073 => 431,  1057 => 417,  1020 => 384,  1016 => 383,  1012 => 382,  987 => 362,  983 => 361,  979 => 360,  975 => 359,  964 => 355,  961 => 354,  958 => 353,  955 => 352,  950 => 351,  948 => 350,  943 => 348,  939 => 347,  935 => 346,  910 => 323,  901 => 316,  895 => 314,  893 => 313,  884 => 307,  877 => 303,  864 => 293,  853 => 285,  840 => 275,  835 => 273,  831 => 271,  826 => 268,  815 => 266,  811 => 265,  808 => 264,  797 => 262,  793 => 261,  789 => 260,  783 => 257,  780 => 256,  777 => 255,  774 => 254,  768 => 253,  762 => 250,  752 => 247,  745 => 245,  738 => 244,  735 => 243,  729 => 240,  719 => 237,  712 => 235,  705 => 234,  702 => 233,  696 => 230,  686 => 227,  679 => 225,  672 => 224,  669 => 223,  663 => 220,  656 => 218,  642 => 217,  635 => 215,  628 => 214,  625 => 213,  619 => 210,  605 => 209,  598 => 208,  595 => 207,  589 => 204,  575 => 203,  568 => 202,  566 => 201,  561 => 198,  555 => 195,  552 => 194,  544 => 191,  537 => 190,  535 => 189,  530 => 188,  517 => 187,  515 => 186,  505 => 185,  502 => 184,  498 => 183,  493 => 181,  489 => 180,  482 => 179,  480 => 178,  476 => 176,  470 => 173,  467 => 172,  459 => 169,  452 => 167,  450 => 166,  445 => 165,  423 => 164,  420 => 163,  416 => 162,  412 => 161,  408 => 160,  401 => 159,  398 => 158,  392 => 155,  389 => 154,  382 => 152,  375 => 151,  373 => 150,  366 => 149,  362 => 148,  358 => 147,  352 => 146,  346 => 145,  339 => 144,  336 => 143,  332 => 142,  327 => 140,  324 => 139,  322 => 138,  315 => 133,  312 => 132,  308 => 130,  297 => 128,  293 => 127,  290 => 126,  288 => 125,  285 => 124,  277 => 122,  275 => 121,  270 => 118,  262 => 117,  259 => 116,  254 => 114,  249 => 113,  243 => 111,  241 => 110,  238 => 109,  235 => 108,  231 => 105,  220 => 102,  201 => 85,  181 => 67,  178 => 66,  174 => 65,  169 => 62,  167 => 61,  161 => 58,  150 => 49,  146 => 47,  142 => 45,  133 => 42,  127 => 41,  120 => 40,  116 => 39,  113 => 38,  110 => 37,  99 => 33,  92 => 32,  90 => 31,  87 => 30,  85 => 29,  75 => 21,  57 => 12,  53 => 11,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/product.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/product/product.twig");
    }
}
