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

/* admin/view/template/localisation/geo_zone_form.twig */
class __TwigTemplate_48f1c3c0a8800eee6a84b67ccebd95d1 extends Template
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
        <button type=\"submit\" form=\"form-geo-zone\" formaction=\"";
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
        <form id=\"form-geo-zone\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 22
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 24
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-description\" class=\"col-sm-2 col-form-label\">";
        // line 29
        echo ($context["entry_description"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"description\" value=\"";
        // line 31
        echo ($context["description"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_description"] ?? null);
        echo "\" id=\"input-description\" class=\"form-control\"/>
              <div id=\"error-description\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <fieldset>
            <legend>";
        // line 36
        echo ($context["text_geo_zone"] ?? null);
        echo "</legend>
            <table id=\"zone-to-geo-zone\" class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-start\">";
        // line 40
        echo ($context["entry_country"] ?? null);
        echo "</td>
                  <td class=\"text-start\">";
        // line 41
        echo ($context["entry_zone"] ?? null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 46
        $context["zone_to_geo_zone_row"] = 0;
        // line 47
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["zone_to_geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["zone_to_geo_zone"]) {
            // line 48
            echo "                  <tr id=\"zone-to-geo-zone-row-";
            echo ($context["zone_to_geo_zone_row"] ?? null);
            echo "\">
                    <td class=\"text-start\"><select name=\"zone_to_geo_zone[";
            // line 49
            echo ($context["zone_to_geo_zone_row"] ?? null);
            echo "][country_id]\" class=\"form-select\" data-zone-to-geo-zone-row=\"";
            echo ($context["zone_to_geo_zone_row"] ?? null);
            echo "\" data-zone-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["zone_to_geo_zone"], "zone_id", [], "any", false, false, false, 49);
            echo "\" disabled>
                        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 51
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 51);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 51) == twig_get_attribute($this->env, $this->source, $context["zone_to_geo_zone"], "country_id", [], "any", false, false, false, 51))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 51);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                      </select></td>
                    <td class=\"text-start\"><select name=\"zone_to_geo_zone[";
            // line 54
            echo ($context["zone_to_geo_zone_row"] ?? null);
            echo "][zone_id]\" class=\"form-select\" disabled></select></td>
                    <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#zone-to-geo-zone-row-";
            // line 55
            echo ($context["zone_to_geo_zone_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 57
            $context["zone_to_geo_zone_row"] = (($context["zone_to_geo_zone_row"] ?? null) + 1);
            // line 58
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone_to_geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-end\"><button type=\"button\" id=\"button-geo-zone\" data-bs-toggle=\"tooltip\" title=\"";
        // line 63
        echo ($context["button_geo_zone_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <input type=\"hidden\" name=\"geo_zone_id\" value=\"";
        // line 68
        echo ($context["geo_zone_id"] ?? null);
        echo "\" id=\"input-geo-zone-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var zone_to_geo_zone_row = ";
        // line 75
        echo ($context["zone_to_geo_zone_row"] ?? null);
        echo ";

\$('#button-geo-zone').on('click', function () {
    html = '<tr id=\"zone-to-geo-zone-row-' + zone_to_geo_zone_row + '\">';
    html += '  <td class=\"text-start\"><select name=\"zone_to_geo_zone[' + zone_to_geo_zone_row + '][country_id]\" class=\"form-select\" data-zone-to-geo-zone-row=\"' + zone_to_geo_zone_row + '\" disabled>';
  ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 81
            echo "    html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 81);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 81), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "    html += '  </select></td>';
    html += '  <td class=\"text-start\"><select name=\"zone_to_geo_zone[' + zone_to_geo_zone_row + '][zone_id]\" class=\"form-select\" disabled><option value=\"0\">";
        // line 84
        echo ($context["text_all_zones"] ?? null);
        echo "</option></select></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#zone-to-geo-zone-row-' + zone_to_geo_zone_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 85
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#zone-to-geo-zone tbody').append(html);

    \$('select[name=\\'zone_to_geo_zone[' + zone_to_geo_zone_row + '][country_id]\\']').trigger('change');

    zone_to_geo_zone_row++;
});

var zone = [];

\$('#zone-to-geo-zone').on('change', 'select[name\$=\\'[country_id]\\']', function () {
    var element = this;

    \$(element).prop('disabled', true);

    \$('select[name=\\'zone_to_geo_zone[' + \$(element).attr('data-zone-to-geo-zone-row') + '][zone_id]\\']').prop('disabled', false);

    if (!zone[\$(element).val()]) {
        \$.ajax({
            url: 'index.php?route=localisation/country|country&user_token=";
        // line 106
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function () {
                \$('button[form=\\'form-geo-zone\\']').prop('disabled', true);
            },
            complete: function () {
                \$('button[form=\\'form-geo-zone\\']').prop('disabled', false);
            },
            success: function (json) {
                zone[\$(element).val()] = json;

                html = '<option value=\"0\">";
        // line 117
        echo ($context["text_all_zones"] ?? null);
        echo "</option>';

                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == \$(element).attr('data-zone-id')) {
                        html += ' selected=\"selected\"';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }

                \$('#zone-to-geo-zone select[name=\\'zone_to_geo_zone[' + \$(element).attr('data-zone-to-geo-zone-row') + '][zone_id]\\']').html(html);

                \$('#zone-to-geo-zone select[name=\\'zone_to_geo_zone[' + \$(element).attr('data-zone-to-geo-zone-row') + '][zone_id]\\']').prop('disabled', false);

                \$(element).prop('disabled', false);

                \$('#zone-to-geo-zone select[name\$=\\'[country_id]\\']:disabled:first').trigger('change');
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    } else {
        html = '<option value=\"0\">";
        // line 142
        echo ($context["text_all_zones"] ?? null);
        echo "</option>';

        for (i = 0; i < zone[\$(element).val()]['zone'].length; i++) {
            html += '<option value=\"' + zone[element.value]['zone'][i]['zone_id'] + '\"';

            if (zone[\$(element).val()]['zone'][i]['zone_id'] == \$(element).attr('data-zone-id')) {
                html += ' selected=\"selected\"';
            }

            html += '>' + zone[\$(element).val()]['zone'][i]['name'] + '</option>';
        }

        \$('#zone-to-geo-zone select[name=\\'zone_to_geo_zone[' + \$(element).attr('data-zone-to-geo-zone-row') + '][zone_id]\\']').html(html);

        \$(element).prop('disabled', false);

        \$('#zone-to-geo-zone select[name\$=\\'[country_id]\\']:disabled:first').trigger('change');
    }
});

\$('#zone-to-geo-zone select[name\$=\\'[country_id]\\']:first').trigger('change');
//--></script>
";
        // line 164
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/localisation/geo_zone_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 164,  325 => 142,  297 => 117,  283 => 106,  259 => 85,  255 => 84,  252 => 83,  241 => 81,  237 => 80,  229 => 75,  219 => 68,  211 => 63,  205 => 59,  199 => 58,  197 => 57,  190 => 55,  186 => 54,  183 => 53,  168 => 51,  164 => 50,  156 => 49,  151 => 48,  146 => 47,  144 => 46,  136 => 41,  132 => 40,  125 => 36,  115 => 31,  110 => 29,  100 => 24,  95 => 22,  90 => 20,  85 => 18,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/localisation/geo_zone_form.twig", "/opt/lampp/htdocs/moh/upload/admin/view/template/localisation/geo_zone_form.twig");
    }
}
