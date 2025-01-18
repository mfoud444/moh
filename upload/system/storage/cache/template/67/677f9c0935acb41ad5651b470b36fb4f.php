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

/* admin/view/template/user/api_form.twig */
class __TwigTemplate_b2218f67358001eac801353d6ac7d26b extends Template
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
        <button type=\"submit\" form=\"form-api\" data-bs-toggle=\"tooltip\" title=\"";
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
        <form id=\"form-api\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 22
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-ip\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 23
        echo ($context["tab_ip"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-session\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 24
        echo ($context["tab_session"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"row mb-3 required\">
                <label for=\"input-username\" class=\"col-sm-2 col-form-label\">";
        // line 29
        echo ($context["entry_username"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"username\" value=\"";
        // line 31
        echo ($context["username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_username"] ?? null);
        echo "\" id=\"input-username\" class=\"form-control\"/>
                  <div id=\"error-username\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-key\" class=\"col-sm-2 col-form-label\">";
        // line 36
        echo ($context["entry_key"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"key\" placeholder=\"";
        // line 38
        echo ($context["entry_key"] ?? null);
        echo "\" rows=\"5\" id=\"input-key\" class=\"form-control mb-1\">";
        echo ($context["key"] ?? null);
        echo "</textarea>
                  <button type=\"button\" id=\"button-generate\" class=\"btn btn-primary\"><i class=\"fa-solid fa-rotate\"></i> ";
        // line 39
        echo ($context["button_generate"] ?? null);
        echo "</button>
                  <div id=\"error-key\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 44
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"status\" value=\"0\"/>
                    <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 48
        if (($context["status"] ?? null)) {
            echo " checked";
        }
        echo "/>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"tab-ip\" class=\"tab-pane\">
              <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 54
        echo ($context["text_ip"] ?? null);
        echo "</div>
              <div class=\"table-responsive\">
                <table id=\"ip\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 59
        echo ($context["entry_ip"] ?? null);
        echo "</td>
                      <td class=\"text-end\"></td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 64
        $context["ip_row"] = 0;
        // line 65
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["api_ips"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api_ip"]) {
            // line 66
            echo "                      <tr id=\"ip-row-";
            echo ($context["ip_row"] ?? null);
            echo "\">
                        <td class=\"text-start\"><input type=\"text\" name=\"api_ip[]\" value=\"";
            // line 67
            echo $context["api_ip"];
            echo "\" placeholder=\"";
            echo ($context["entry_ip"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#ip-row-";
            // line 68
            echo ($context["ip_row"] ?? null);
            echo "').remove()\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 70
            $context["ip_row"] = (($context["ip_row"] ?? null) + 1);
            // line 71
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api_ip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-ip\" data-bs-toggle=\"tooltip\" title=\"";
        // line 76
        echo ($context["button_ip_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div id=\"tab-session\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"session\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 87
        echo ($context["column_token"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 88
        echo ($context["column_ip"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 89
        echo ($context["column_date_added"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 90
        echo ($context["column_date_modified"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 91
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 95
        if (($context["api_sessions"] ?? null)) {
            // line 96
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["api_sessions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["api_session"]) {
                // line 97
                echo "                        <tr>
                          <td class=\"text-start\">";
                // line 98
                echo twig_get_attribute($this->env, $this->source, $context["api_session"], "session_id", [], "any", false, false, false, 98);
                echo "</td>
                          <td class=\"text-start\">";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["api_session"], "ip", [], "any", false, false, false, 99);
                echo "</td>
                          <td class=\"text-start\">";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["api_session"], "date_added", [], "any", false, false, false, 100);
                echo "</td>
                          <td class=\"text-start\">";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["api_session"], "date_modified", [], "any", false, false, false, 101);
                echo "</td>
                          <td class=\"text-end\"><button type=\"button\" value=\"";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["api_session"], "api_session_id", [], "any", false, false, false, 102);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api_session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "                    ";
        } else {
            // line 106
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"5\">";
            // line 107
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                      </tr>
                    ";
        }
        // line 110
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"api_id\" value=\"";
        // line 115
        echo ($context["api_id"] ?? null);
        echo "\" id=\"input-api-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-generate').on('click', function () {
    rand = '';

    string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

    for (i = 0; i < 256; i++) {
        rand += string[Math.floor(Math.random() * (string.length - 1))];
    }

    \$('#input-key').val(rand);
});
//--></script>
<script type=\"text/javascript\"><!--
var ip_row = ";
        // line 135
        echo ($context["ip_row"] ?? null);
        echo ";

\$('#button-ip').on('click', function () {
    html = '<tr id=\"ip-row-' + ip_row + '\">';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"api_ip[]\" value=\"\" placeholder=\"";
        // line 139
        echo ($context["entry_ip"] ?? null);
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#ip-row-' + ip_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 140
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#ip tbody').append(html);

    ip_row++;
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#session button').on('click', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=user/api|deletesession&user_token=";
        // line 155
        echo ($context["user_token"] ?? null);
        echo "&api_session_id=' + \$(element).val(),
        type: 'post',
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(element).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#tab-session').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#tab-session').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$(element).parent().parent().remove();
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 183
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "admin/view/template/user/api_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 183,  361 => 155,  343 => 140,  339 => 139,  332 => 135,  309 => 115,  302 => 110,  296 => 107,  293 => 106,  290 => 105,  279 => 102,  275 => 101,  271 => 100,  267 => 99,  263 => 98,  260 => 97,  255 => 96,  253 => 95,  246 => 91,  242 => 90,  238 => 89,  234 => 88,  230 => 87,  216 => 76,  210 => 72,  204 => 71,  202 => 70,  195 => 68,  189 => 67,  184 => 66,  179 => 65,  177 => 64,  169 => 59,  161 => 54,  150 => 48,  143 => 44,  135 => 39,  129 => 38,  124 => 36,  114 => 31,  109 => 29,  101 => 24,  97 => 23,  93 => 22,  88 => 20,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/user/api_form.twig", "/opt/lampp/htdocs/moh/upload/admin/view/template/user/api_form.twig");
    }
}
