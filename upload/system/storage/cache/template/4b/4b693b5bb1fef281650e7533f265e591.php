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

/* admin/view/template/catalog/filter_form.twig */
class __TwigTemplate_56dfa2894769b77ed2de7ecc8c6e49b5 extends Template
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
        <button type=\"submit\" form=\"form-filter\" data-bs-toggle=\"tooltip\" title=\"";
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
        <form id=\"form-filter\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <fieldset>
            <legend>";
        // line 22
        echo ($context["text_group"] ?? null);
        echo "</legend>
            <div class=\"row mb-3 required\">
              <label class=\"col-sm-2 col-form-label\">";
        // line 24
        echo ($context["entry_group"] ?? null);
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
                    <input type=\"text\" name=\"filter_group_description[";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29);
            echo "][name]\" value=\"";
            echo (((($__internal_compile_0 = ($context["filter_group_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["filter_group_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29)] ?? null) : null), "name", [], "any", false, false, false, 29)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_group"] ?? null);
            echo "\" id=\"input-group-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29);
            echo "\" class=\"form-control\"/>
                  </div>
                  <div id=\"error-group-";
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
              <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 36
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"sort_order\" value=\"";
        // line 38
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 43
        echo ($context["text_value"] ?? null);
        echo "</legend>
            <table id=\"filter\" class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-start required\">";
        // line 47
        echo ($context["entry_name"] ?? null);
        echo "</td>
                  <td class=\"text-end\">";
        // line 48
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 53
        $context["filter_row"] = 0;
        // line 54
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 55
            echo "                  <tr id=\"filter-row-";
            echo ($context["filter_row"] ?? null);
            echo "\">
                    <td class=\"text-start\" style=\"width: 70%;\"><input type=\"hidden\" name=\"filter[";
            // line 56
            echo ($context["filter_row"] ?? null);
            echo "][filter_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 56);
            echo "\"/>
                      ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 58
                echo "                        <div class=\"input-group\">
                          <div class=\"input-group-text\"><img src=\"";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 59);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 59);
                echo "\"/></div>
                          <input type=\"text\" name=\"filter[";
                // line 60
                echo ($context["filter_row"] ?? null);
                echo "][filter_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60);
                echo "][name]\" value=\"";
                echo (((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["filter"], "filter_description", [], "any", false, false, false, 60)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["filter"], "filter_description", [], "any", false, false, false, 60)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60)] ?? null) : null), "name", [], "any", false, false, false, 60)) : (""));
                echo "\" placeholder=\"";
                echo ($context["entry_name"] ?? null);
                echo "\" id=\"input-filter-";
                echo ($context["filter_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60);
                echo "\" class=\"form-control\"/>
                        </div>
                        <div id=\"error-filter-";
                // line 62
                echo ($context["filter_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62);
                echo "\" class=\"invalid-feedback\"></div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "</td>
                    <td class=\"text-end\"><input type=\"text\" name=\"filter[";
            // line 64
            echo ($context["filter_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["filter"], "sort_order", [], "any", false, false, false, 64);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" id=\"input-sort-order\" class=\"form-control\"/></td>
                    <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#filter-row-";
            // line 65
            echo ($context["filter_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 67
            $context["filter_row"] = (($context["filter_row"] ?? null) + 1);
            // line 68
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-end\"><button type=\"button\" id=\"button-filter\" data-bs-toggle=\"tooltip\" title=\"";
        // line 73
        echo ($context["button_filter_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <input type=\"hidden\" name=\"filter_group_id\" value=\"";
        // line 78
        echo ($context["filter_group_id"] ?? null);
        echo "\" id=\"input-filter-group-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var filter_row = ";
        // line 85
        echo ($context["filter_row"] ?? null);
        echo ";

\$('#button-filter').on('click', function () {
    html = '<tr id=\"filter-row-' + filter_row + '\">';
    html += '  <td class=\"text-start\" style=\"width: 70%;\"><input type=\"hidden\" name=\"filter[' + filter_row + '][filter_id]\" value=\"\"/>';
  ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 91
            echo "    html += '  <div class=\"input-group\">';
    html += '    <div class=\"input-group-text\"><img src=\"";
            // line 92
            echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 92);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 92);
            echo "\" /></div>';
    html += '    <input type=\"text\" name=\"filter[' + filter_row + '][filter_description][";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93);
            echo "][name]\" value=\"\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-filter-' + filter_row + '-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93);
            echo "\" class=\"form-control\"/>';
    html += '  </div>';
    html += '  <div id=\"error-filter-' + filter_row + '-";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 95);
            echo "\" class=\"invalid-feedback\"></div>';

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    html += '  </td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"filter[' + filter_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 99
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#filter-row-' + filter_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 100
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#filter tbody').append(html);

    filter_row++;
});
//--></script>
";
        // line 108
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "admin/view/template/catalog/filter_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 108,  326 => 100,  322 => 99,  319 => 98,  310 => 95,  301 => 93,  295 => 92,  292 => 91,  288 => 90,  280 => 85,  270 => 78,  262 => 73,  256 => 69,  250 => 68,  248 => 67,  241 => 65,  233 => 64,  230 => 63,  220 => 62,  205 => 60,  199 => 59,  196 => 58,  192 => 57,  186 => 56,  181 => 55,  176 => 54,  174 => 53,  166 => 48,  162 => 47,  155 => 43,  145 => 38,  140 => 36,  135 => 33,  127 => 31,  116 => 29,  110 => 28,  107 => 27,  103 => 26,  98 => 24,  93 => 22,  88 => 20,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/catalog/filter_form.twig", "/opt/lampp/htdocs/moh/upload/admin/view/template/catalog/filter_form.twig");
    }
}
