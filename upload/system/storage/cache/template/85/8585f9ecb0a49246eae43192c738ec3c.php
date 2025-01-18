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

/* admin/view/template/localisation/tax_class_form.twig */
class __TwigTemplate_5a78a1dfe65bd56315bca4e4d624c20b extends Template
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
        <button type=\"submit\" form=\"form-tax-class\" formaction=\"";
        // line 6
        echo ($context["save"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 18
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-tax-class\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <fieldset>
            <legend>";
        // line 22
        echo ($context["text_tax_class"] ?? null);
        echo "</legend>
            <div class=\"row mb-3 required\">
              <label for=\"input-title\" class=\"col-sm-2 col-form-label\">";
        // line 24
        echo ($context["entry_title"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"title\" value=\"";
        // line 26
        echo ($context["title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" id=\"input-title\" class=\"form-control\"/>
                <div id=\"error-title\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <div class=\"row mb-3 required\">
              <label for=\"input-description\" class=\"col-sm-2 col-form-label\">";
        // line 31
        echo ($context["entry_description"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"description\" value=\"";
        // line 33
        echo ($context["description"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_description"] ?? null);
        echo "\" id=\"input-description\" class=\"form-control\"/>
                <div id=\"error-description\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 39
        echo ($context["text_tax_rate"] ?? null);
        echo "</legend>
            <table id=\"tax-rule\" class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-start\">";
        // line 43
        echo ($context["entry_rate"] ?? null);
        echo "</td>
                  <td class=\"text-start\">";
        // line 44
        echo ($context["entry_based"] ?? null);
        echo "</td>
                  <td class=\"text-start\">";
        // line 45
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 50
        $context["tax_rule_row"] = 0;
        // line 51
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_rules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_rule"]) {
            // line 52
            echo "                  <tr id=\"tax-rule-row-";
            echo ($context["tax_rule_row"] ?? null);
            echo "\">
                    <td class=\"text-start\"><select name=\"tax_rule[";
            // line 53
            echo ($context["tax_rule_row"] ?? null);
            echo "][tax_rate_id]\" class=\"form-select\">
                        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tax_rates"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tax_rate"]) {
                // line 55
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_rate"], "tax_rate_id", [], "any", false, false, false, 55);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["tax_rate"], "tax_rate_id", [], "any", false, false, false, 55) == twig_get_attribute($this->env, $this->source, $context["tax_rule"], "tax_rate_id", [], "any", false, false, false, 55))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_rate"], "name", [], "any", false, false, false, 55);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_rate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                      </select></td>
                    <td class=\"text-start\"><select name=\"tax_rule[";
            // line 58
            echo ($context["tax_rule_row"] ?? null);
            echo "][based]\" class=\"form-select\">
                        ";
            // line 59
            if ((twig_get_attribute($this->env, $this->source, $context["tax_rule"], "based", [], "any", false, false, false, 59) == "shipping")) {
                // line 60
                echo "                          <option value=\"shipping\" selected=\"selected\">";
                echo ($context["text_shipping"] ?? null);
                echo "</option>
                        ";
            } else {
                // line 62
                echo "                          <option value=\"shipping\">";
                echo ($context["text_shipping"] ?? null);
                echo "</option>
                        ";
            }
            // line 64
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_rule"], "based", [], "any", false, false, false, 64) == "payment")) {
                // line 65
                echo "                          <option value=\"payment\" selected=\"selected\">";
                echo ($context["text_payment"] ?? null);
                echo "</option>
                        ";
            } else {
                // line 67
                echo "                          <option value=\"payment\">";
                echo ($context["text_payment"] ?? null);
                echo "</option>
                        ";
            }
            // line 69
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_rule"], "based", [], "any", false, false, false, 69) == "store")) {
                // line 70
                echo "                          <option value=\"store\" selected=\"selected\">";
                echo ($context["text_store"] ?? null);
                echo "</option>
                        ";
            } else {
                // line 72
                echo "                          <option value=\"store\">";
                echo ($context["text_store"] ?? null);
                echo "</option>
                        ";
            }
            // line 74
            echo "                      </select></td>
                    <td class=\"text-start\"><input type=\"text\" name=\"tax_rule[";
            // line 75
            echo ($context["tax_rule_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["tax_rule"], "priority", [], "any", false, false, false, 75);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                    <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#tax-rule-row-";
            // line 76
            echo ($context["tax_rule_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 78
            $context["tax_rule_row"] = (($context["tax_rule_row"] ?? null) + 1);
            // line 79
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_rule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"3\"></td>
                  <td class=\"text-end\"><button type=\"button\" id=\"button-tax-rule\" data-bs-toggle=\"tooltip\" title=\"";
        // line 84
        echo ($context["button_rule_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <input type=\"hidden\" name=\"tax_class_id\" value=\"";
        // line 89
        echo ($context["tax_class_id"] ?? null);
        echo "\" id=\"input-tax-class-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var tax_rule_row = ";
        // line 96
        echo ($context["tax_rule_row"] ?? null);
        echo ";

\$('#button-tax-rule').on('click', function() {
    html = '<tr id=\"tax-rule-row-' + tax_rule_row + '\">';
    html += '  <td class=\"text-start\"><select name=\"tax_rule[' + tax_rule_row + '][tax_rate_id]\" class=\"form-select\">';
  ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_rates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_rate"]) {
            // line 102
            echo "    html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["tax_rate"], "tax_rate_id", [], "any", false, false, false, 102);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tax_rate"], "name", [], "any", false, false, false, 102), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_rate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "    html += '  </select></td>';
    html += '  <td class=\"text-start\"><select name=\"tax_rule[' + tax_rule_row + '][based]\" class=\"form-select\">';
    html += '    <option value=\"shipping\">";
        // line 106
        echo ($context["text_shipping"] ?? null);
        echo "</option>';
    html += '    <option value=\"payment\">";
        // line 107
        echo ($context["text_payment"] ?? null);
        echo "</option>';
    html += '    <option value=\"store\">";
        // line 108
        echo ($context["text_store"] ?? null);
        echo "</option>';
    html += '  </select></td>';
    html += '  <td class=\"text-start\"><input type=\"text\" name=\"tax_rule[' + tax_rule_row + '][priority]\" value=\"\" placeholder=\"";
        // line 110
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#tax-rule-row-' + tax_rule_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 111
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#tax-rule tbody').append(html);

    tax_rule_row++;
});
//--></script>
";
        // line 119
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "admin/view/template/localisation/tax_class_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 119,  334 => 111,  330 => 110,  325 => 108,  321 => 107,  317 => 106,  313 => 104,  302 => 102,  298 => 101,  290 => 96,  280 => 89,  272 => 84,  266 => 80,  260 => 79,  258 => 78,  251 => 76,  243 => 75,  240 => 74,  234 => 72,  228 => 70,  225 => 69,  219 => 67,  213 => 65,  210 => 64,  204 => 62,  198 => 60,  196 => 59,  192 => 58,  189 => 57,  174 => 55,  170 => 54,  166 => 53,  161 => 52,  156 => 51,  154 => 50,  146 => 45,  142 => 44,  138 => 43,  131 => 39,  120 => 33,  115 => 31,  105 => 26,  100 => 24,  95 => 22,  90 => 20,  85 => 18,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/localisation/tax_class_form.twig", "/opt/lampp/htdocs/moh/upload/admin/view/template/localisation/tax_class_form.twig");
    }
}
