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

/* admin/view/template/marketing/coupon_form.twig */
class __TwigTemplate_bb96f2d9098f6db9b33d98e3212b651b extends Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">

      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-coupon\" formaction=\"";
        // line 7
        echo ($context["save"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 8
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>

      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 21
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-coupon\" action=\"";
        // line 23
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 25
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 26
        echo ($context["tab_history"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"row mb-3 required\">
                <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 31
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"name\" value=\"";
        // line 33
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                  <div id=\"error-name\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-code\" class=\"col-sm-2 col-form-label\">";
        // line 38
        echo ($context["entry_code"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"code\" value=\"";
        // line 40
        echo ($context["code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 41
        echo ($context["help_code"] ?? null);
        echo "</div>
                  <div id=\"error-code\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-type\" class=\"col-sm-2 col-form-label\">";
        // line 46
        echo ($context["entry_type"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"type\" id=\"input-type\" class=\"form-select\">
                    ";
        // line 49
        if ((($context["type"] ?? null) == "P")) {
            // line 50
            echo "                      <option value=\"P\" selected=\"selected\">";
            echo ($context["text_percent"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 52
            echo "                      <option value=\"P\">";
            echo ($context["text_percent"] ?? null);
            echo "</option>
                    ";
        }
        // line 54
        echo "                    ";
        if ((($context["type"] ?? null) == "F")) {
            // line 55
            echo "                      <option value=\"F\" selected=\"selected\">";
            echo ($context["text_amount"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 57
            echo "                      <option value=\"F\">";
            echo ($context["text_amount"] ?? null);
            echo "</option>
                    ";
        }
        // line 59
        echo "                  </select>
                  <div class=\"form-text\">";
        // line 60
        echo ($context["help_type"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-discount\" class=\"col-sm-2 col-form-label\">";
        // line 64
        echo ($context["entry_discount"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"discount\" value=\"";
        // line 66
        echo ($context["discount"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_discount"] ?? null);
        echo "\" id=\"input-discount\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-total\" class=\"col-sm-2 col-form-label\">";
        // line 70
        echo ($context["entry_total"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"total\" value=\"";
        // line 72
        echo ($context["total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 73
        echo ($context["help_total"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 77
        echo ($context["entry_logged"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"logged\" value=\"0\"/>
                    <input type=\"checkbox\" name=\"logged\" value=\"1\" id=\"input-logged\" class=\"form-check-input\"";
        // line 81
        if (($context["logged"] ?? null)) {
            echo " checked";
        }
        echo "/>
                  </div>
                  <div class=\"form-text\">";
        // line 83
        echo ($context["help_logged"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 87
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"shipping\" value=\"0\"/>
                    <input type=\"checkbox\" name=\"shipping\" value=\"1\" id=\"input-shipping\" class=\"form-check-input\"";
        // line 91
        if (($context["shipping"] ?? null)) {
            echo " checked";
        }
        echo "/>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 96
        echo ($context["entry_product"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 98
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" list=\"list-product\" class=\"form-control\"/>
                  <datalist id=\"list-product\"></datalist>
                  <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                    <table id=\"coupon-product\" class=\"table table-sm m-0\">
                      <tbody>
                        ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["coupon_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_product"]) {
            // line 104
            echo "                          <tr id=\"coupon-product-";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "product_id", [], "any", false, false, false, 104);
            echo "\">
                            <td>";
            // line 105
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "name", [], "any", false, false, false, 105);
            echo "<input type=\"hidden\" name=\"coupon_product[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "product_id", [], "any", false, false, false, 105);
            echo "\"/></td>
                            <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                          </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                      </tbody>
                    </table>
                  </div>
                  <div class=\"form-text\">";
        // line 112
        echo ($context["help_product"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 116
        echo ($context["entry_category"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 118
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" list=\"list-category\" class=\"form-control\"/>
                  <datalist id=\"list-category\"></datalist>
                  <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                    <table id=\"coupon-category\" class=\"table table-sm m-0\">
                      <tbody>
                        ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["coupon_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_category"]) {
            // line 124
            echo "                          <tr id=\"coupon-category-";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "category_id", [], "any", false, false, false, 124);
            echo "\">
                            <td>";
            // line 125
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "name", [], "any", false, false, false, 125);
            echo "<input type=\"hidden\" name=\"coupon_category[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "category_id", [], "any", false, false, false, 125);
            echo "\"/></td>
                            <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                          </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                      </tbody>
                    </table>
                  </div>
                  <div class=\"form-text\">";
        // line 132
        echo ($context["help_category"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-date-start\" class=\"col-sm-2 col-form-label\">";
        // line 136
        echo ($context["entry_date_start"] ?? null);
        echo "</label>
                <div class=\"col-sm-10 col-md-4\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"date_start\" value=\"";
        // line 139
        echo ($context["date_start"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_start"] ?? null);
        echo "\" id=\"input-date-start\" class=\"form-control date\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-date-end\" class=\"col-sm-2 col-form-label\">";
        // line 145
        echo ($context["entry_date_end"] ?? null);
        echo "</label>
                <div class=\"col-sm-10 col-md-4\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"date_end\" value=\"";
        // line 148
        echo ($context["date_end"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_end"] ?? null);
        echo "\" id=\"input-date-end\" class=\"form-control date\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-uses-total\" class=\"col-sm-2 col-form-label\">";
        // line 154
        echo ($context["entry_uses_total"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"uses_total\" value=\"";
        // line 156
        echo ($context["uses_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_uses_total"] ?? null);
        echo "\" id=\"input-uses-total\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 157
        echo ($context["help_uses_total"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-uses-customer\" class=\"col-sm-2 col-form-label\">";
        // line 161
        echo ($context["entry_uses_customer"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"uses_customer\" value=\"";
        // line 163
        echo ($context["uses_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_uses_customer"] ?? null);
        echo "\" id=\"input-uses-customer\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 164
        echo ($context["help_uses_customer"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 168
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"status\" value=\"0\"/>
                    <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 172
        if (($context["status"] ?? null)) {
            echo " checked";
        }
        echo "/>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"tab-history\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 179
        echo ($context["text_coupon"] ?? null);
        echo "</legend>
                <div id=\"history\">";
        // line 180
        echo ($context["history"] ?? null);
        echo "</div>
              </fieldset>
            </div>
          </div>
          <input type=\"hidden\" name=\"coupon_id\" value=\"";
        // line 184
        echo ($context["coupon_id"] ?? null);
        echo "\" id=\"input-coupon-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-product').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product|autocomplete&user_token=";
        // line 194
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-product').val('');

        \$('#coupon-product-' + item['value']).remove();

        html = '<tr id=\"coupon-product-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"coupon_product[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#coupon-product tbody').append(html);
    }
});

\$('#coupon-product').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
});

// Category
\$('#input-category').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category|autocomplete&user_token=";
        // line 228
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-category').val('');

        \$('#coupon-category-' + item['value']).remove();

        html = '<tr id=\"coupon-category-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"coupon_category[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#coupon-category tbody').append(html);
    }
});

\$('#coupon-category').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
});

\$('#history').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#history').load(this.href);
});
//--></script>
";
        // line 264
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/marketing/coupon_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 264,  501 => 228,  464 => 194,  451 => 184,  444 => 180,  440 => 179,  428 => 172,  421 => 168,  414 => 164,  408 => 163,  403 => 161,  396 => 157,  390 => 156,  385 => 154,  374 => 148,  368 => 145,  357 => 139,  351 => 136,  344 => 132,  339 => 129,  327 => 125,  322 => 124,  318 => 123,  310 => 118,  305 => 116,  298 => 112,  293 => 109,  281 => 105,  276 => 104,  272 => 103,  264 => 98,  259 => 96,  249 => 91,  242 => 87,  235 => 83,  228 => 81,  221 => 77,  214 => 73,  208 => 72,  203 => 70,  194 => 66,  189 => 64,  182 => 60,  179 => 59,  173 => 57,  167 => 55,  164 => 54,  158 => 52,  152 => 50,  150 => 49,  144 => 46,  136 => 41,  130 => 40,  125 => 38,  115 => 33,  110 => 31,  102 => 26,  98 => 25,  93 => 23,  88 => 21,  81 => 16,  70 => 14,  66 => 13,  61 => 11,  53 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/marketing/coupon_form.twig", "/opt/lampp/htdocs/moh/upload/admin/view/template/marketing/coupon_form.twig");
    }
}
