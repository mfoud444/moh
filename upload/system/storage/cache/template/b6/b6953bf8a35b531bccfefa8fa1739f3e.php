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

/* admin/view/template/sale/order_shipping.twig */
class __TwigTemplate_b6f74ad539373a0c1d0824a19336fb86 extends Template
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
  <meta charset=\"UTF-8\"/>
  <title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
  <base href=\"";
        // line 6
        echo ($context["base"] ?? null);
        echo "\"/>
  <link href=\"";
        // line 7
        echo ($context["bootstrap_css"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"";
        // line 8
        echo ($context["icons"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  <script src=\"";
        // line 9
        echo ($context["jquery"] ?? null);
        echo "\" type=\"text/javascript\"></script>
  <script src=\"";
        // line 10
        echo ($context["bootstrap_js"] ?? null);
        echo "\" type=\"text/javascript\"></script>
  <link href=\"";
        // line 11
        echo ($context["stylesheet"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
</head>
<body>
<div class=\"container\">
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 16
            echo "    <div style=\"page-break-after: always;\">
      <h1>";
            // line 17
            echo ($context["text_picklist"] ?? null);
            echo " #";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 17);
            echo "</h1>

      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4\">
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 22
            echo ($context["text_invoice"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 24)) {
                // line 25
                echo "                ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 25);
                echo "
              ";
            } else {
                // line 27
                echo "                &nbsp;
              ";
            }
            // line 29
            echo "            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 35
            echo ($context["text_order_id"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 37);
            echo "
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 44
            echo ($context["text_date_added"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 46);
            echo "
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 53
            echo ($context["text_store"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_name", [], "any", false, false, false, 55);
            echo "
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 62
            echo ($context["text_store_telephone"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_telephone", [], "any", false, false, false, 64);
            echo "
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 71
            echo ($context["text_store_email"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_email", [], "any", false, false, false, 73);
            echo "
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 80
            echo ($context["text_website"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 82
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_url", [], "any", false, false, false, 82);
            echo "
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 89
            echo ($context["text_shipping_method"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 91
            echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 91);
            echo "
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 98
            echo ($context["text_customer_email"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 100
            if (twig_get_attribute($this->env, $this->source, $context["order"], "email", [], "any", false, false, false, 100)) {
                // line 101
                echo "                ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "email", [], "any", false, false, false, 101);
                echo "
              ";
            } else {
                // line 103
                echo "                &nbsp;
              ";
            }
            // line 105
            echo "
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 112
            echo ($context["text_customer_telephone"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 114
            if (twig_get_attribute($this->env, $this->source, $context["order"], "telephone", [], "any", false, false, false, 114)) {
                // line 115
                echo "                ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "telephone", [], "any", false, false, false, 115);
                echo "
              ";
            } else {
                // line 117
                echo "                &nbsp;
              ";
            }
            // line 119
            echo "            </div>
          </div>
        </div>

      </div>

      <div class=\"row row-cols-1 row-cols-sm-2\">
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 128
            echo ($context["text_shipping_address"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 130
            if (twig_get_attribute($this->env, $this->source, $context["order"], "shipping_address", [], "any", false, false, false, 130)) {
                // line 131
                echo "                ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_address", [], "any", false, false, false, 131);
                echo "
              ";
            } else {
                // line 133
                echo "                &nbsp;
              ";
            }
            // line 135
            echo "            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 140
            echo ($context["text_store_address"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 142
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_address", [], "any", false, false, false, 142);
            echo "
            </div>
          </div>
        </div>
      </div>

      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td><b>";
            // line 151
            echo ($context["column_location"] ?? null);
            echo "</b></td>
            <td><b>";
            // line 152
            echo ($context["column_reference"] ?? null);
            echo "</b></td>
            <td><b>";
            // line 153
            echo ($context["column_product"] ?? null);
            echo "</b></td>
            <td><b>";
            // line 154
            echo ($context["column_weight"] ?? null);
            echo "</b></td>
            <td><b>";
            // line 155
            echo ($context["column_model"] ?? null);
            echo "</b></td>
            <td class=\"text-end\"><b>";
            // line 156
            echo ($context["column_quantity"] ?? null);
            echo "</b></td>
          </tr>
        </thead>
        <tbody>
          ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "product", [], "any", false, false, false, 160));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 161
                echo "            <tr>
              <td>";
                // line 162
                echo twig_get_attribute($this->env, $this->source, $context["product"], "location", [], "any", false, false, false, 162);
                echo "</td>
              <td>
                ";
                // line 164
                if (twig_get_attribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 164)) {
                    // line 165
                    echo "                  ";
                    echo ($context["text_sku"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 165);
                    echo "
                  <br/>
                ";
                }
                // line 168
                echo "
                ";
                // line 169
                if (twig_get_attribute($this->env, $this->source, $context["product"], "upc", [], "any", false, false, false, 169)) {
                    // line 170
                    echo "                  ";
                    echo ($context["text_upc"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "upc", [], "any", false, false, false, 170);
                    echo "
                  <br/>
                ";
                }
                // line 173
                echo "
                ";
                // line 174
                if (twig_get_attribute($this->env, $this->source, $context["product"], "ean", [], "any", false, false, false, 174)) {
                    // line 175
                    echo "                  ";
                    echo ($context["text_ean"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "ean", [], "any", false, false, false, 175);
                    echo "
                  <br/>
                ";
                }
                // line 178
                echo "
                ";
                // line 179
                if (twig_get_attribute($this->env, $this->source, $context["product"], "jan", [], "any", false, false, false, 179)) {
                    // line 180
                    echo "                  ";
                    echo ($context["text_jan"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "jan", [], "any", false, false, false, 180);
                    echo "
                  <br/>
                ";
                }
                // line 183
                echo "
                ";
                // line 184
                if (twig_get_attribute($this->env, $this->source, $context["product"], "isbn", [], "any", false, false, false, 184)) {
                    // line 185
                    echo "                  ";
                    echo ($context["text_isbn"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "isbn", [], "any", false, false, false, 185);
                    echo "
                  <br/>
                ";
                }
                // line 188
                echo "
                ";
                // line 189
                if (twig_get_attribute($this->env, $this->source, $context["product"], "mpn", [], "any", false, false, false, 189)) {
                    // line 190
                    echo "                  ";
                    echo ($context["text_mpn"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "mpn", [], "any", false, false, false, 190);
                    echo "
                  <br/>
                ";
                }
                // line 193
                echo "              </td>
              <td>";
                // line 194
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 194);
                echo "

                ";
                // line 196
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 196));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 197
                    echo "                  <br/>
                  <small> - ";
                    // line 198
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 198);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 198);
                    echo "</small>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 200
                echo "
                ";
                // line 201
                if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 201)) {
                    // line 202
                    echo "                  <br/>
                  <small> - ";
                    // line 203
                    echo ($context["text_points"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 203);
                    echo "</small>
                ";
                }
                // line 205
                echo "
                ";
                // line 206
                if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 206)) {
                    // line 207
                    echo "                  <br/>
                  <small> - ";
                    // line 208
                    echo ($context["text_subscription"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 208);
                    echo " </small>
                ";
                }
                // line 210
                echo "
              </td>
              <td>";
                // line 212
                echo twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 212);
                echo "</td>
              <td>";
                // line 213
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 213);
                echo "</td>
              <td class=\"text-end\">";
                // line 214
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 214);
                echo "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "        </tbody>
      </table>
      ";
            // line 219
            if (twig_get_attribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 219)) {
                // line 220
                echo "        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td><b>";
                // line 223
                echo ($context["text_comment"] ?? null);
                echo "</b></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>";
                // line 228
                echo twig_get_attribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 228);
                echo "</td>
            </tr>
          </tbody>
        </table>
      ";
            }
            // line 233
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/sale/order_shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 235,  543 => 233,  535 => 228,  527 => 223,  522 => 220,  520 => 219,  516 => 217,  507 => 214,  503 => 213,  499 => 212,  495 => 210,  488 => 208,  485 => 207,  483 => 206,  480 => 205,  473 => 203,  470 => 202,  468 => 201,  465 => 200,  455 => 198,  452 => 197,  448 => 196,  443 => 194,  440 => 193,  432 => 190,  430 => 189,  427 => 188,  418 => 185,  416 => 184,  413 => 183,  404 => 180,  402 => 179,  399 => 178,  390 => 175,  388 => 174,  385 => 173,  376 => 170,  374 => 169,  371 => 168,  362 => 165,  360 => 164,  355 => 162,  352 => 161,  348 => 160,  341 => 156,  337 => 155,  333 => 154,  329 => 153,  325 => 152,  321 => 151,  309 => 142,  304 => 140,  297 => 135,  293 => 133,  287 => 131,  285 => 130,  280 => 128,  269 => 119,  265 => 117,  259 => 115,  257 => 114,  252 => 112,  243 => 105,  239 => 103,  233 => 101,  231 => 100,  226 => 98,  216 => 91,  211 => 89,  201 => 82,  196 => 80,  186 => 73,  181 => 71,  171 => 64,  166 => 62,  156 => 55,  151 => 53,  141 => 46,  136 => 44,  126 => 37,  121 => 35,  113 => 29,  109 => 27,  103 => 25,  101 => 24,  96 => 22,  86 => 17,  83 => 16,  79 => 15,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/sale/order_shipping.twig", "/opt/lampp/htdocs/moh/upload/admin/view/template/sale/order_shipping.twig");
    }
}
