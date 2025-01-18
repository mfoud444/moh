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

/* admin/view/template/sale/order_invoice.twig */
class __TwigTemplate_90c919ad451303e6b92a28d423692814 extends Template
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
            echo ($context["text_invoice"] ?? null);
            echo " #";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 17);
            echo "</h1>
      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4\">
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 21
            echo ($context["text_invoice"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 23)) {
                // line 24
                echo "                ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 24);
                echo "
              ";
            } else {
                // line 26
                echo "                &nbsp;
              ";
            }
            // line 28
            echo "            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 33
            echo ($context["text_order_id"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 35
            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 35);
            echo "
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 41
            echo ($context["text_date_added"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 43);
            echo "
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 49
            echo ($context["text_store"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_name", [], "any", false, false, false, 51);
            echo "
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 57
            echo ($context["text_store_address"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_address", [], "any", false, false, false, 59);
            echo "
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 65
            echo ($context["text_store_telephone"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_telephone", [], "any", false, false, false, 67);
            echo "
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 73
            echo ($context["text_store_email"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_email", [], "any", false, false, false, 75);
            echo "
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 81
            echo ($context["text_payment_method"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 83
            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 83);
            echo "
            </div>
          </div>
        </div>
        ";
            // line 87
            if (twig_get_attribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 87)) {
                // line 88
                echo "          <div class=\"col\">
            <div class=\"form-control-plaintext p-0 border rounded mb-3\">
              <div class=\"lead p-2\"><strong>";
                // line 90
                echo ($context["text_shipping_method"] ?? null);
                echo "</strong>
                <br/>
                ";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 92);
                echo "
              </div>
            </div>
          </div>
        ";
            }
            // line 97
            echo "      </div>

      <div class=\"row\">
        ";
            // line 100
            if (twig_get_attribute($this->env, $this->source, $context["order"], "payment_address", [], "any", false, false, false, 100)) {
                // line 101
                echo "          <div class=\"col\">
            <div class=\"form-control-plaintext p-0 border rounded mb-3\">
              <div class=\"lead p-2\"><strong>";
                // line 103
                echo ($context["text_payment_address"] ?? null);
                echo "</strong>
                <br/>
                ";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_address", [], "any", false, false, false, 105);
                echo "
              </div>
            </div>
          </div>
        ";
            }
            // line 110
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["order"], "shipping_address", [], "any", false, false, false, 110)) {
                // line 111
                echo "          <div class=\"col\">
            <div class=\"form-control-plaintext p-0 border rounded mb-3\">
              <div class=\"lead p-2\"><strong>";
                // line 113
                echo ($context["text_shipping_address"] ?? null);
                echo "</strong>
                <br/>
                ";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_address", [], "any", false, false, false, 115);
                echo "
              </div>
            </div>
          </div>
        ";
            }
            // line 120
            echo "      </div>

      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td><b>";
            // line 125
            echo ($context["column_product"] ?? null);
            echo "</b></td>
            <td><b>";
            // line 126
            echo ($context["column_model"] ?? null);
            echo "</b></td>
            <td class=\"text-end\"><b>";
            // line 127
            echo ($context["column_quantity"] ?? null);
            echo "</b></td>
            <td class=\"text-end\"><b>";
            // line 128
            echo ($context["column_price"] ?? null);
            echo "</b></td>
            <td class=\"text-end\"><b>";
            // line 129
            echo ($context["column_total"] ?? null);
            echo "</b></td>
          </tr>
        </thead>
        <tbody>
          ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "product", [], "any", false, false, false, 133));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 134
                echo "            <tr>
              <td>";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 135);
                echo "
                ";
                // line 136
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 136));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 137
                    echo "                  <br/>
                  <small> - ";
                    // line 138
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 138);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 138);
                    echo "</small>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 140
                echo "
                ";
                // line 141
                if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 141)) {
                    // line 142
                    echo "                  <br/>
                  <small> - ";
                    // line 143
                    echo ($context["text_points"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 143);
                    echo "</small>
                ";
                }
                // line 145
                echo "
                ";
                // line 146
                if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 146)) {
                    // line 147
                    echo "                  <br/>
                  <small> - ";
                    // line 148
                    echo ($context["text_subscription"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 148);
                    echo " </small>
                ";
                }
                // line 150
                echo "
              </td>
              <td>";
                // line 152
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 152);
                echo "</td>
              <td class=\"text-end\">";
                // line 153
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 153);
                echo "</td>
              <td class=\"text-end\">";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 154);
                echo "</td>
              <td class=\"text-end\">";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 155);
                echo "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "voucher", [], "any", false, false, false, 158));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 159
                echo "            <tr>
              <td>";
                // line 160
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 160);
                echo "</td>
              <td></td>
              <td class=\"text-end\">1</td>
              <td class=\"text-end\">";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 163);
                echo "</td>
              <td class=\"text-end\">";
                // line 164
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 164);
                echo "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 167));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 168
                echo "            <tr>
              <td class=\"text-end\" colspan=\"4\"><b>";
                // line 169
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 169);
                echo "</b></td>
              <td class=\"text-end\">";
                // line 170
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 170);
                echo "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "        </tbody>
      </table>
      ";
            // line 175
            if (twig_get_attribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 175)) {
                // line 176
                echo "        <div class=\"row\">
          <div class=\"col\">
            <div class=\"form-control-plaintext p-0 border rounded mb-3\">
              <div class=\"lead p-2\"><strong>";
                // line 179
                echo ($context["text_comment"] ?? null);
                echo "</strong>
                <br/>
                ";
                // line 181
                echo twig_get_attribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 181);
                echo "
              </div>
            </div>
          </div>
        </div>
      ";
            }
            // line 187
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/sale/order_invoice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 189,  464 => 187,  455 => 181,  450 => 179,  445 => 176,  443 => 175,  439 => 173,  430 => 170,  426 => 169,  423 => 168,  418 => 167,  409 => 164,  405 => 163,  399 => 160,  396 => 159,  391 => 158,  382 => 155,  378 => 154,  374 => 153,  370 => 152,  366 => 150,  359 => 148,  356 => 147,  354 => 146,  351 => 145,  344 => 143,  341 => 142,  339 => 141,  336 => 140,  326 => 138,  323 => 137,  319 => 136,  315 => 135,  312 => 134,  308 => 133,  301 => 129,  297 => 128,  293 => 127,  289 => 126,  285 => 125,  278 => 120,  270 => 115,  265 => 113,  261 => 111,  258 => 110,  250 => 105,  245 => 103,  241 => 101,  239 => 100,  234 => 97,  226 => 92,  221 => 90,  217 => 88,  215 => 87,  208 => 83,  203 => 81,  194 => 75,  189 => 73,  180 => 67,  175 => 65,  166 => 59,  161 => 57,  152 => 51,  147 => 49,  138 => 43,  133 => 41,  124 => 35,  119 => 33,  112 => 28,  108 => 26,  102 => 24,  100 => 23,  95 => 21,  86 => 17,  83 => 16,  79 => 15,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/sale/order_invoice.twig", "/opt/lampp/htdocs/moh/upload/admin/view/template/sale/order_invoice.twig");
    }
}
