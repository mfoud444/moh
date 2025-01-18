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

/* catalog/view/template/checkout/cart_list.twig */
class __TwigTemplate_2bd9a1403527d7887d9b13742b58ad29 extends Template
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
        echo "<div class=\"p-2 flex items-center flex-col gap-2\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 3
            echo "  <div
    class=\"grid grid-cols-3 gap-1 grid-row-3 w-full shadow-md p-2 rounded-lg bg-purple-200  ";
            // line 4
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 4)) {
                echo " bg-red-500 ";
            }
            echo "\"
  >
    <div class=\"flex col-span-1 row-span-2 justify-center items-center\">
      ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 7)) {
                // line 8
                echo "      <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 8);
                echo "\">
        <img
          src=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 10);
                echo "\"
          alt=\"";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11);
                echo "\"
          title=\"";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
                echo "\"
          class=\"object-cover rounded-md shadow-md h-20 w-20\"
        />
      </a>
      ";
            }
            // line 17
            echo "    </div>

    <div class=\"col-span-2 row-span-2 flex flex-col justify-between pr-2\">
      ";
            // line 21
            echo "      <div class=\" \">
        <a href=\"";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
            echo "\" class=\"font-bold\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
            echo "</a>
        ";
            // line 23
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 23)) {
                // line 24
                echo "        <span class=\"text-red-600\">***</span>
        ";
            }
            // line 25
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 25)) {
                echo " 
        ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 26));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 27
                    echo "        <br />
        <small> ";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 28);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 28);
                    echo "</small>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo " ";
            }
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 29)) {
                // line 30
                echo "        <br />
        <small>";
                // line 31
                echo ($context["text_points"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 31);
                echo "</small>
        ";
            }
            // line 32
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 32)) {
                // line 33
                echo "        <br />
        <small>";
                // line 34
                echo ($context["text_subscription"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 34);
                echo "</small>
        ";
            }
            // line 36
            echo "      </div>

      <div>
        <span class=\"text-sm font-bold\">";
            // line 39
            echo ($context["column_model"] ?? null);
            echo " :</span>

        ";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 41);
            echo "
      </div>

      <div>
        <span class=\"text-sm font-bold\">";
            // line 45
            echo ($context["column_price"] ?? null);
            echo " :</span>
        ";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 46);
            echo "
      </div>
    </div>

    <div class=\"col-span-1 ml-2 flex gap-1 flex-col\">
      <span class=\"font-bold text-sm pr-4\"> الإجمالي </span>
      <div class=\"overflow-auto bg-red-100 px-3 py-1 rounded-full text-center\">
        ";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 53);
            echo "
      </div>
    </div>

    <form
      method=\"post\"
      data-oc-target=\"#shopping-cart\"
      class=\"col-span-2 row-span-1 grid grid-cols-5 items-end gap-2 justify-between\"
    >
      <div class=\"flex col-span-3 items-center gap-1\">
        <button
          type=\"button\"
          class=\"w-6 h-6 flex justify-center rounded-full cursor-pointer text-white font-bold bg-primary-900\"
          data-quantity=\"plus\"
          data-field=\"";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 67);
            echo "\"
        >
          +
        </button>

        <input
          class=\"rounded-full w-14 h-8\"
          type=\"number\"
          name=\"quantity\"
          id=\"";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 76);
            echo "\"
          value=\"";
            // line 77
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 77);
            echo "\"
          size=\"1\"
        />
        <button
          type=\"button\"
          class=\"w-6 h-6 flex justify-center text-white font-bold cursor-pointer rounded-full bg-red-500\"
          data-quantity=\"minus\"
          data-field=\"";
            // line 84
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 84);
            echo "\"
        >
          -
        </button>
      </div>

      <input type=\"hidden\" name=\"key\" value=\"";
            // line 90
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 90);
            echo "\" />

      <div class=\"flex gap-2 col-span-2 place-content-center\">
        <button
          type=\"submit\"
          formaction=\"";
            // line 95
            echo ($context["product_edit"] ?? null);
            echo "\"
          data-bs-toggle=\"tooltip\"
          name=\"";
            // line 97
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 97);
            echo "\"
          class=\"p-2 hidden rounded-full bg-primary-200\"
        >
          <svg
            xmlns=\"http://www.w3.org/2000/svg\"
            fill=\"none\"
            viewBox=\"0 0 24 24\"
            stroke-width=\"1.5\"
            stroke=\"currentColor\"
            class=\"w-4 h-4\"
          >
            <path
              stroke-linecap=\"round\"
              stroke-linejoin=\"round\"
              d=\"M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99\"
            />
          </svg>
        </button>

        <button
          type=\"submit\"
          formaction=\"";
            // line 118
            echo ($context["product_remove"] ?? null);
            echo "\"
          data-bs-toggle=\"tooltip\"
          class=\"bg-red-700 p-2 rounded-full\"
        >
          <svg
            xmlns=\"http://www.w3.org/2000/svg\"
            fill=\"none\"
            viewBox=\"0 0 24 24\"
            stroke-width=\"1.5\"
            stroke=\"currentColor\"
            class=\"w-4 h-4 text-white\"
          >
            <path
              stroke-linecap=\"round\"
              stroke-linejoin=\"round\"
              d=\"M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0\"
            />
          </svg>
        </button>
      </div>
    </form>

    <!-- end col 3 -->
  </div>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "</div>

<div
  class=\"flex items-center fixed h-[6rem] bottom-0 w-1/2 md:rounded-b-0 md:rounded-t-xl right-0 md:relative shadow-lg justify-around rounded-tr-xl py-1 bg-primary-200\"
>
  ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 149) == 1)) {
                // line 150
                echo "  <div class=\"flex flex-col gap-2 items-center\">
    <span class=\"text-sm font-bold\">";
                // line 151
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 151);
                echo " :</span>
 
    <div class=\"px-4 py-2  bg-white inline rounded-full w-32 text-center\">
      ";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 154);
                echo "
    </div>
  </div>
  ";
            }
            // line 157
            echo " ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "</div>


<script type=\"text/javascript\"><!--
\$(document).ready(function () {
  
  // This button will increment the value
  \$('[data-quantity=\"plus\"]').on('click' , function(e){
  
     // Stop acting like a button
    e.preventDefault();
     // Get the field name
     fieldName = \$(this).attr('data-field');
    // alert(\$('#'+fieldName).val());
     // Get its current value
     var currentVal = parseInt(\$('#'+fieldName).val());
    
     // If is not undefined
     if (!isNaN(currentVal)) {
         // Increment
        \$('#'+fieldName).val(currentVal + 1);
     } else {
         // Otherwise put a 0 there
        \$('#'+fieldName).val(0);
     }
   \$('button[name='+fieldName+']').click();
 });
 // This button will decrement the value till 0
 \$('[data-quantity=\"minus\"]').on('click' , function(e) {
   //alert(\"gg\");
     // Stop acting like a button
    e.preventDefault();
     // Get the field name
     fieldName = \$(this).attr('data-field');
     // Get its current value
     var currentVal = parseInt(\$('#'+fieldName).val());
     // If it isn't undefined or its greater than 0
     if (!isNaN(currentVal) && currentVal > 0) {
         // Decrement one
         \$('#'+fieldName).val(currentVal - 1);
     } else {
         // Otherwise put a 0 there
         \$('#'+fieldName).val(0);
     }
   \$('button[name='+fieldName+']').click();
   
 });
});

//--></script>




";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/cart_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 158,  343 => 157,  336 => 154,  330 => 151,  327 => 150,  308 => 149,  301 => 144,  269 => 118,  245 => 97,  240 => 95,  232 => 90,  223 => 84,  213 => 77,  209 => 76,  197 => 67,  180 => 53,  170 => 46,  166 => 45,  159 => 41,  154 => 39,  149 => 36,  142 => 34,  139 => 33,  136 => 32,  129 => 31,  126 => 30,  121 => 29,  111 => 28,  108 => 27,  104 => 26,  99 => 25,  95 => 24,  93 => 23,  87 => 22,  84 => 21,  79 => 17,  71 => 12,  67 => 11,  63 => 10,  57 => 8,  55 => 7,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/cart_list.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/checkout/cart_list.twig");
    }
}
