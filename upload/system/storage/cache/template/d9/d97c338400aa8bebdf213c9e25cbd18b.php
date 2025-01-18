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

/* admin/view/template/catalog/option_form.twig */
class __TwigTemplate_1b814e8a9a30aef760fa08b3eb60a213 extends Template
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
        <button type=\"submit\" form=\"form-option\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
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
        <form id=\"form-option\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <fieldset>
            <legend>";
        // line 22
        echo ($context["text_option"] ?? null);
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
                    <input type=\"text\" name=\"option_description[";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29);
            echo "][name]\" value=\"";
            echo (((($__internal_compile_0 = ($context["option_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["option_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29)] ?? null) : null), "name", [], "any", false, false, false, 29)) : (""));
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
              <label for=\"input-type\" class=\"col-sm-2 col-form-label\">";
        // line 36
        echo ($context["entry_type"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"type\" id=\"input-type\" class=\"form-select\">
                  <optgroup label=\"";
        // line 39
        echo ($context["text_choose"] ?? null);
        echo "\">
                    <option value=\"select\"";
        // line 40
        if ((($context["type"] ?? null) == "select")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_select"] ?? null);
        echo "</option>
                    <option value=\"radio\"";
        // line 41
        if ((($context["type"] ?? null) == "radio")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_radio"] ?? null);
        echo "</option>
                    <option value=\"checkbox\"";
        // line 42
        if ((($context["type"] ?? null) == "checkbox")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_checkbox"] ?? null);
        echo "</option>
                  </optgroup>
                  <optgroup label=\"";
        // line 44
        echo ($context["text_input"] ?? null);
        echo "\">
                    <option value=\"text\"";
        // line 45
        if ((($context["type"] ?? null) == "text")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_text"] ?? null);
        echo "</option>
                    <option value=\"textarea\"";
        // line 46
        if ((($context["type"] ?? null) == "textarea")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_textarea"] ?? null);
        echo "</option>
                  </optgroup>
                  <optgroup label=\"";
        // line 48
        echo ($context["text_file"] ?? null);
        echo "\">
                    <option value=\"file\"";
        // line 49
        if ((($context["type"] ?? null) == "file")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_file"] ?? null);
        echo "</option>
                  </optgroup>
                  <optgroup label=\"";
        // line 51
        echo ($context["text_date"] ?? null);
        echo "\">
                    <option value=\"date\"";
        // line 52
        if ((($context["type"] ?? null) == "date")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_date"] ?? null);
        echo "</option>
                    <option value=\"time\"";
        // line 53
        if ((($context["type"] ?? null) == "time")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_time"] ?? null);
        echo "</option>
                    <option value=\"datetime\"";
        // line 54
        if ((($context["type"] ?? null) == "datetime")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_datetime"] ?? null);
        echo "</option>
                  </optgroup>
                </select>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 60
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"sort_order\" value=\"";
        // line 62
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 67
        echo ($context["text_value"] ?? null);
        echo "</legend>
            <table id=\"option-value\" class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-start required\">";
        // line 71
        echo ($context["entry_option_value"] ?? null);
        echo "</td>
                  <td class=\"text-center\">";
        // line 72
        echo ($context["entry_image"] ?? null);
        echo "</td>
                  <td class=\"text-end\">";
        // line 73
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 78
        $context["option_value_row"] = 0;
        // line 79
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["option_values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
            // line 80
            echo "                  <tr id=\"option-value-row-";
            echo ($context["option_value_row"] ?? null);
            echo "\">
                    <td class=\"text-center\"><input type=\"hidden\" name=\"option_value[";
            // line 81
            echo ($context["option_value_row"] ?? null);
            echo "][option_value_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 81);
            echo "\"/>
                      ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 83
                echo "                        <div class=\"input-group\">
                          <div class=\"input-group-text\"><img src=\"";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 84);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 84);
                echo "\"/></div>
                          <input type=\"text\" name=\"option_value[";
                // line 85
                echo ($context["option_value_row"] ?? null);
                echo "][option_value_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85);
                echo "][name]\" value=\"";
                echo (((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_description", [], "any", false, false, false, 85)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_description", [], "any", false, false, false, 85)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85)] ?? null) : null), "name", [], "any", false, false, false, 85)) : (""));
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-option-value-";
                echo ($context["option_value_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85);
                echo "\" class=\"form-control\"/>
                        </div>
                        <div id=\"error-option-value-";
                // line 87
                echo ($context["option_value_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
                echo "\" class=\"invalid-feedback\"></div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "</td>
                    <td class=\"text-center\">
                      <div class=\"card image\">
                        <img src=\"";
            // line 91
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "thumb", [], "any", false, false, false, 91);
            echo "\" alt=\"\" title=\"\" id=\"thumb-image-";
            echo ($context["option_value_row"] ?? null);
            echo "\" data-oc-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"option_value[";
            echo ($context["option_value_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 91);
            echo "\" id=\"input-image-";
            echo ($context["option_value_row"] ?? null);
            echo "\"/>
                        <div class=\"card-body\">
                          <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image-";
            // line 93
            echo ($context["option_value_row"] ?? null);
            echo "\" data-oc-thumb=\"#thumb-image-";
            echo ($context["option_value_row"] ?? null);
            echo "\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
            echo ($context["button_edit"] ?? null);
            echo "</button>
                          <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image-";
            // line 94
            echo ($context["option_value_row"] ?? null);
            echo "\" data-oc-thumb=\"#thumb-image-";
            echo ($context["option_value_row"] ?? null);
            echo "\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
            echo ($context["button_clear"] ?? null);
            echo "</button>
                        </div>
                      </div>
                    </td>
                    <td class=\"text-end\"><input type=\"text\" name=\"option_value[";
            // line 98
            echo ($context["option_value_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "sort_order", [], "any", false, false, false, 98);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\"/></td>
                    <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#option-value-row-";
            // line 99
            echo ($context["option_value_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 101
            $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
            // line 102
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"3\"></td>
                  <td class=\"text-end\"><button type=\"button\" onclick=\"addOptionValue();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 107
        echo ($context["button_option_value_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <input type=\"hidden\" name=\"option_id\" value=\"";
        // line 112
        echo ($context["option_id"] ?? null);
        echo "\" id=\"input-option-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-type').on('change', function() {
    if (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox' || this.value == 'image') {
        \$('#option-value').parent().show();
    } else {
        \$('#option-value').parent().hide();
    }
});

\$('#input-type').trigger('change');

var option_value_row = ";
        // line 129
        echo ($context["option_value_row"] ?? null);
        echo ";

function addOptionValue() {
    html = '<tr id=\"option-value-row-' + option_value_row + '\">';
    html += '  <td class=\"text-start\"><input type=\"hidden\" name=\"option_value[' + option_value_row + '][option_value_id]\" value=\"\" />';
  ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 135
            echo "    html += '    <div class=\"input-group\">';
    html += '      <div class=\"input-group-text\"><img src=\"";
            // line 136
            echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 136);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 136);
            echo "\" /></div>';
    html += '      <input type=\"text\" name=\"option_value[' + option_value_row + '][option_value_description][";
            // line 137
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 137);
            echo "][name]\" value=\"\" placeholder=\"";
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-option-value-' + option_value_row + '-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 137);
            echo "\" class=\"form-control\"/>';
    html += '    </div>';
    html += '    <div id=\"error-option-value-' + option_value_row + '-";
            // line 139
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 139);
            echo "\" class=\"invalid-feedback\"></div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "    html += '  </td>';
    html += '  <td class=\"text-center\">';
    html += '    <div class=\"card image\">';
    html += '      <img src=\"";
        // line 144
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image-' + option_value_row + '\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/>';
    html += '      <input type=\"hidden\" name=\"option_value[' + option_value_row + '][image]\" value=\"\" id=\"input-image-' + option_value_row + '\"/>';
    html += '      <div class=\"card-body\">';
    html += '        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image-' + option_value_row + '\" data-oc-thumb=\"#thumb-image-' + option_value_row + '\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 147
        echo ($context["button_edit"] ?? null);
        echo "</button>';
    html += '        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image-' + option_value_row + '\" data-oc-thumb=\"#thumb-image-' + option_value_row + '\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 148
        echo ($context["button_clear"] ?? null);
        echo "</button>';
    html += '      </div>';
    html += '    </div>';
    html += '  </td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"option_value[' + option_value_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 152
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#option-value-row-' + option_value_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 153
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#option-value tbody').append(html);

    option_value_row++;
}
//--></script>
";
        // line 161
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "admin/view/template/catalog/option_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  509 => 161,  498 => 153,  494 => 152,  487 => 148,  483 => 147,  475 => 144,  470 => 141,  462 => 139,  453 => 137,  447 => 136,  444 => 135,  440 => 134,  432 => 129,  412 => 112,  404 => 107,  398 => 103,  392 => 102,  390 => 101,  383 => 99,  375 => 98,  364 => 94,  356 => 93,  341 => 91,  336 => 88,  326 => 87,  311 => 85,  305 => 84,  302 => 83,  298 => 82,  292 => 81,  287 => 80,  282 => 79,  280 => 78,  272 => 73,  268 => 72,  264 => 71,  257 => 67,  247 => 62,  242 => 60,  229 => 54,  221 => 53,  213 => 52,  209 => 51,  200 => 49,  196 => 48,  187 => 46,  179 => 45,  175 => 44,  166 => 42,  158 => 41,  150 => 40,  146 => 39,  140 => 36,  135 => 33,  127 => 31,  116 => 29,  110 => 28,  107 => 27,  103 => 26,  98 => 24,  93 => 22,  88 => 20,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/catalog/option_form.twig", "/opt/lampp/htdocs/moh/upload/admin/view/template/catalog/option_form.twig");
    }
}
