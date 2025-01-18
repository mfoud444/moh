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

/* admin/view/template/customer/custom_field_form.twig */
class __TwigTemplate_0f6b6c72466dad40f052637556e8a0a8 extends Template
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
<div id=\"content\" class=\"\">
  <div class=\"page-header\">
    <div class=\"container-fluid container-top-all\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-custom-field\" formaction=\"";
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
        <form id=\"form-custom-field\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <fieldset>
            <legend>";
        // line 22
        echo ($context["text_custom_field"] ?? null);
        echo "</legend>
            <div class=\"row mb-3 required\">
              <label class=\"col-sm-2 col-form-label\">";
        // line 24
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 27
            echo "                  <div class=\"input-group\">
                    <div class=\"input-group-text\"><img src=\"";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 28);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 28);
            echo "\"/></div>
                    <input type=\"text\" name=\"custom_field_description[";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29);
            echo "][name]\" value=\"";
            echo (((($__internal_compile_0 = ($context["custom_field_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["custom_field_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29)] ?? null) : null), "name", [], "any", false, false, false, 29)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29);
            echo "\" class=\"form-control\"/>
                  </div>
                  <div id=\"error-name-";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 31);
            echo "\" class=\"invalid-feedback\"></div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-location\" class=\"col-sm-2 col-form-label\">";
        // line 36
        echo ($context["entry_location"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"location\" id=\"input-location\" class=\"form-select\">
                  <option value=\"account\"";
        // line 39
        if ((($context["location"] ?? null) == "account")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_account"] ?? null);
        echo "</option>
                  <option value=\"address\"";
        // line 40
        if ((($context["location"] ?? null) == "address")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_address"] ?? null);
        echo "</option>
                  <option value=\"affiliate\"";
        // line 41
        if ((($context["location"] ?? null) == "affiliate")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_affiliate"] ?? null);
        echo "</option>
                </select>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-type\" class=\"col-sm-2 col-form-label\">";
        // line 46
        echo ($context["entry_type"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"type\" id=\"input-type\" class=\"form-select\">
                  <optgroup label=\"";
        // line 49
        echo ($context["text_choose"] ?? null);
        echo "\">
                    <option value=\"select\"";
        // line 50
        if ((($context["type"] ?? null) == "select")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_select"] ?? null);
        echo "</option>
                    <option value=\"radio\"";
        // line 51
        if ((($context["type"] ?? null) == "radio")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_radio"] ?? null);
        echo "</option>
                    <option value=\"checkbox\"";
        // line 52
        if ((($context["type"] ?? null) == "checkbox")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_checkbox"] ?? null);
        echo "</option>
                  </optgroup>
                  <optgroup label=\"";
        // line 54
        echo ($context["text_input"] ?? null);
        echo "\">
                    <option value=\"text\"";
        // line 55
        if ((($context["type"] ?? null) == "text")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_text"] ?? null);
        echo "</option>
                    <option value=\"textarea\"";
        // line 56
        if ((($context["type"] ?? null) == "textarea")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_textarea"] ?? null);
        echo "</option>
                  </optgroup>
                  <optgroup label=\"";
        // line 58
        echo ($context["text_file"] ?? null);
        echo "\">
                    <option value=\"file\"";
        // line 59
        if ((($context["type"] ?? null) == "file")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_file"] ?? null);
        echo "</option>
                  </optgroup>
                  <optgroup label=\"";
        // line 61
        echo ($context["text_date"] ?? null);
        echo "\">
                    <option value=\"date\"";
        // line 62
        if ((($context["type"] ?? null) == "date")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_date"] ?? null);
        echo "</option>
                    <option value=\"time\"";
        // line 63
        if ((($context["type"] ?? null) == "time")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_time"] ?? null);
        echo "</option>
                    <option value=\"datetime\"";
        // line 64
        if ((($context["type"] ?? null) == "datetime")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_datetime"] ?? null);
        echo "</option>
                  </optgroup>
                </select>
              </div>
            </div>
            <div class=\"row mb-3\" id=\"display-value\">
              <label for=\"input-value\" class=\"col-sm-2 col-form-label\">";
        // line 70
        echo ($context["entry_value"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"value\" value=\"";
        // line 72
        echo ($context["value"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"row mb-3\" id=\"display-validation\">
              <label for=\"input-validation\" class=\"col-sm-2 col-form-label\">";
        // line 76
        echo ($context["entry_validation"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"validation\" id=\"input-validation\" value=\"";
        // line 78
        echo ($context["validation"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_regex"] ?? null);
        echo "\" class=\"form-control\"/>
                <div class=\"form-text\">";
        // line 79
        echo ($context["help_regex"] ?? null);
        echo "</div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\">";
        // line 83
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                  ";
        // line 86
        $context["customer_group_row"] = 0;
        // line 87
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 88
            echo "                    <div class=\"form-check\">
                      <input type=\"checkbox\" name=\"custom_field_customer_group[";
            // line 89
            echo ($context["customer_group_row"] ?? null);
            echo "][customer_group_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 89);
            echo "\" id=\"input-customer-group-";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 89);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 89), ($context["custom_field_customer_group"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-customer-group-";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 89);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 89);
            echo "</label>
                    </div>
                    ";
            // line 91
            $context["customer_group_row"] = (($context["customer_group_row"] ?? null) + 1);
            // line 92
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\">";
        // line 96
        echo ($context["entry_required"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                  ";
        // line 99
        $context["customer_group_row"] = 0;
        // line 100
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 101
            echo "                    <div class=\"form-check\">
                      <input type=\"checkbox\" name=\"custom_field_customer_group[";
            // line 102
            echo ($context["customer_group_row"] ?? null);
            echo "][required]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 102);
            echo "\" id=\"input-required-";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 102);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 102), ($context["custom_field_required"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-required-";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 102);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 102);
            echo "</label>
                    </div>
                    ";
            // line 104
            $context["customer_group_row"] = (($context["customer_group_row"] ?? null) + 1);
            // line 105
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                </div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 110
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"form-check form-switch form-switch-lg\">
                  <input type=\"hidden\" name=\"status\" value=\"0\"/>
                  <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 114
        if (($context["status"] ?? null)) {
            echo " checked";
        }
        echo "/>
                </div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 119
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"sort_order\" value=\"";
        // line 121
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                <div class=\"form-text\">";
        // line 122
        echo ($context["help_sort_order"] ?? null);
        echo "</div>
              </div>
            </div>
          </fieldset>
          <br/>
          <div id=\"custom-field-value\">
            <fieldset>
              <legend>";
        // line 129
        echo ($context["text_value"] ?? null);
        echo "</legend>
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <td class=\"text-start required\">";
        // line 133
        echo ($context["entry_custom_value"] ?? null);
        echo "</td>
                    <td class=\"text-end\">";
        // line 134
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 139
        $context["custom_field_value_row"] = 0;
        // line 140
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_field_values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
            // line 141
            echo "                    <tr id=\"custom-field-value-row-";
            echo ($context["custom_field_value_row"] ?? null);
            echo "\">
                      <td class=\"text-start\" style=\"width: 70%;\"><input type=\"hidden\" name=\"custom_field_value[";
            // line 142
            echo ($context["custom_field_value_row"] ?? null);
            echo "][custom_field_value_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 142);
            echo "\"/>
                        ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 144
                echo "                          <div class=\"input-group\">
                            <div class=\"input-group-text\"><img src=\"";
                // line 145
                echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 145);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 145);
                echo "\"/></div>
                            <input type=\"text\" name=\"custom_field_value[";
                // line 146
                echo ($context["custom_field_value_row"] ?? null);
                echo "][custom_field_value_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 146);
                echo "][name]\" value=\"";
                echo (((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_description", [], "any", false, false, false, 146)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 146)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_description", [], "any", false, false, false, 146)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 146)] ?? null) : null), "name", [], "any", false, false, false, 146)) : (""));
                echo "\" id=\"input-custom-field-";
                echo ($context["custom_field_value_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 146);
                echo "\" placeholder=\"";
                echo ($context["entry_custom_value"] ?? null);
                echo "\" class=\"form-control\"/>
                          </div>
                          <div id=\"error-custom-field-";
                // line 148
                echo ($context["custom_field_value_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 148);
                echo "\" class=\"invalid-feedback\"></div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</td>
                      <td class=\"text-end\"><input type=\"text\" name=\"custom_field_value[";
            // line 150
            echo ($context["custom_field_value_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "sort_order", [], "any", false, false, false, 150);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\"/></td>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#custom-field-value-row-";
            // line 151
            echo ($context["custom_field_value_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                    </tr>
                    ";
            // line 153
            $context["custom_field_value_row"] = (($context["custom_field_value_row"] ?? null) + 1);
            // line 154
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                </tbody>
                <tfoot>
                  <tr>
                    <td colspan=\"2\"></td>
                    <td class=\"text-end\"><button type=\"button\" onclick=\"addCustomFieldValue();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 159
        echo ($context["button_custom_field_value_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                  </tr>
                </tfoot>
              </table>
            </fieldset>
          </div>
          <input type=\"hidden\" name=\"custom_field_id\" value=\"";
        // line 165
        echo ($context["custom_field_id"] ?? null);
        echo "\" id=\"input-custom-field-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-type').on('change', function () {
    if (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox') {
        \$('#custom-field-value').show();
        \$('#display-value, #display-validation').hide();
    } else {
        \$('#custom-field-value').hide();
        \$('#display-value, #display-validation').show();
    }

    if (this.value == 'date') {
        \$('#display-value > div').html('<div class=\"input-group\"><input type=\"text\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 182
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div>');
    } else if (this.value == 'time') {
        \$('#display-value > div').html('<div class=\"input-group\"><input type=\"text\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 184
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control time\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div>');
    } else if (this.value == 'datetime') {
        \$('#display-value > div').html('<div class=\"input-group\"><input type=\"text\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 186
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control datetime\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div>');
    } else if (this.value == 'textarea') {
        \$('#display-value > div').html('<textarea name=\"value\" placeholder=\"";
        // line 188
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control\">' + \$('#input-value').val() + '</textarea>');
    } else {
        \$('#display-value > div').html('<input type=\"text\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 190
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control\"/>');
    }
});

\$('#input-type').trigger('change');

var custom_field_value_row = ";
        // line 196
        echo ($context["custom_field_value_row"] ?? null);
        echo ";

function addCustomFieldValue() {
    html = '<tr id=\"custom-field-value-row-' + custom_field_value_row + '\">';
    html += '  <td class=\"text-start\" style=\"width: 70%;\"><input type=\"hidden\" name=\"custom_field_value[' + custom_field_value_row + '][custom_field_value_id]\" value=\"\" />';
  ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 202
            echo "    html += '    <div class=\"input-group\">';
    html += '      <div class=\"input-group-text\"><img src=\"";
            // line 203
            echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 203);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 203);
            echo "\" /></div>';
    html += '      <input type=\"text\" name=\"custom_field_value[' + custom_field_value_row + '][custom_field_value_description][";
            // line 204
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 204);
            echo "][name]\" value=\"\" placeholder=\"";
            echo ($context["entry_custom_value"] ?? null);
            echo "\" id=\"input-custom-field-";
            echo ($context["custom_field_value_row"] ?? null);
            echo "-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 204);
            echo "\" class=\"form-control\"/>';
    html += '    </div>';
    html += '    <div id=\"error-custom-field-value-";
            // line 206
            echo ($context["custom_field_value_row"] ?? null);
            echo "-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 206);
            echo "\" class=\"invalid-feedback\"></div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "    html += '  </td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"custom_field_value[' + custom_field_value_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 209
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#custom-field-value-row-' + custom_field_value_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 210
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#custom-field-value tbody').append(html);

    custom_field_value_row++;
}
//--></script>
";
        // line 218
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/customer/custom_field_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  666 => 218,  655 => 210,  651 => 209,  648 => 208,  638 => 206,  627 => 204,  621 => 203,  618 => 202,  614 => 201,  606 => 196,  597 => 190,  592 => 188,  587 => 186,  582 => 184,  577 => 182,  557 => 165,  548 => 159,  542 => 155,  536 => 154,  534 => 153,  527 => 151,  519 => 150,  516 => 149,  506 => 148,  491 => 146,  485 => 145,  482 => 144,  478 => 143,  472 => 142,  467 => 141,  462 => 140,  460 => 139,  452 => 134,  448 => 133,  441 => 129,  431 => 122,  425 => 121,  420 => 119,  410 => 114,  403 => 110,  397 => 106,  391 => 105,  389 => 104,  372 => 102,  369 => 101,  364 => 100,  362 => 99,  356 => 96,  345 => 92,  343 => 91,  326 => 89,  323 => 88,  318 => 87,  316 => 86,  310 => 83,  303 => 79,  297 => 78,  292 => 76,  283 => 72,  278 => 70,  265 => 64,  257 => 63,  249 => 62,  245 => 61,  236 => 59,  232 => 58,  223 => 56,  215 => 55,  211 => 54,  202 => 52,  194 => 51,  186 => 50,  182 => 49,  176 => 46,  164 => 41,  156 => 40,  148 => 39,  142 => 36,  137 => 33,  129 => 31,  118 => 29,  112 => 28,  109 => 27,  105 => 26,  100 => 24,  95 => 22,  90 => 20,  85 => 18,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/customer/custom_field_form.twig", "/opt/lampp/htdocs/moh/upload/admin/view/template/customer/custom_field_form.twig");
    }
}
