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

/* admin/view/template/catalog/download_form.twig */
class __TwigTemplate_5cf869f520eb3270e7c08eccebd6b666 extends Template
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
        <button type=\"submit\" form=\"form-download\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 19
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-download\" action=\"";
        // line 21
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 23
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-report\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 24
        echo ($context["tab_report"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"row mb-3 required\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 32
            echo "                    <div class=\"input-group\">
                      <div class=\"input-group-text\"><img src=\"";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 33);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 33);
            echo "\"/></div>
                      <input type=\"text\" name=\"download_description[";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 34);
            echo "][name]\" value=\"";
            echo (((($__internal_compile_0 = ($context["download_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 34)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["download_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 34)] ?? null) : null), "name", [], "any", false, false, false, 34)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 34);
            echo "\" class=\"form-control\"/>
                    </div>
                    <div id=\"error-name-";
            // line 36
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 36);
            echo "\" class=\"invalid-feedback\"></div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-filename\" class=\"col-sm-2 col-form-label\">";
        // line 41
        echo ($context["entry_filename"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <button type=\"button\" id=\"button-upload\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
        // line 44
        echo ($context["button_upload"] ?? null);
        echo "</button>
                    <input type=\"text\" name=\"filename\" value=\"";
        // line 45
        echo ($context["filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_filename"] ?? null);
        echo "\" id=\"input-filename\" class=\"form-control\"/>
                    <button type=\"button\" id=\"button-download\" class=\"btn btn-outline-secondary\"";
        // line 46
        if ( !($context["filename"] ?? null)) {
            echo " disabled";
        }
        echo "><i class=\"fa-solid fa-download\"></i> ";
        echo ($context["button_download"] ?? null);
        echo "</button>
                  </div>
                  <div class=\"form-text\">";
        // line 48
        echo ($context["help_filename"] ?? null);
        echo "</div>
                  <div id=\"error-filename\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-mask\" class=\"col-sm-2 col-form-label\">";
        // line 53
        echo ($context["entry_mask"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"mask\" value=\"";
        // line 55
        echo ($context["mask"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mask"] ?? null);
        echo "\" id=\"input-mask\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 56
        echo ($context["help_mask"] ?? null);
        echo "</div>
                  <div id=\"error-mask\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            </div>
            <div id=\"tab-report\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 63
        echo ($context["text_report"] ?? null);
        echo "</legend>
                <div id=\"report\">";
        // line 64
        echo ($context["report"] ?? null);
        echo "</div>
              </fieldset>
            </div>
          </div>
          <input type=\"hidden\" name=\"download_id\" value=\"";
        // line 68
        echo ($context["download_id"] ?? null);
        echo "\" id=\"input-download-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#report').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#report').load(this.href);
});

\$('#button-upload').on('click', function () {
    var element = this;

    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\"/></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    \$('#form-upload input[name=\\'file\\']').on('change', function () {
        if ((this.files[0].size / 1024) > ";
        // line 91
        echo ($context["config_file_max_size"] ?? null);
        echo ") {
            alert('";
        // line 92
        echo ($context["error_upload_size"] ?? null);
        echo "');

            \$(this).val('');
        }
    });

    if (typeof timer !== 'undefined') {
        clearInterval(timer);
    }

    var timer = setInterval(function () {
        if (\$('#form-upload input[name=\\'file\\']').val() !== '') {
            clearInterval(timer);

            \$.ajax({
                url: 'index.php?route=catalog/download|upload&user_token=";
        // line 107
        echo ($context["user_token"] ?? null);
        echo "',
                type: 'post',
                dataType: 'json',
                data: new FormData(\$('#form-upload')[0]),
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    \$(element).prop('disabled', true).addClass('loading');
                },
                complete: function () {
                    \$(element).prop('disabled', false).removeClass('loading');
                },
                success: function (json) {
                    if (json['error']) {
                        alert(json['error']);
                    }

                    if (json['success']) {
                        alert(json['success']);

                        \$('#input-filename').val(json['filename']);
                        \$('#input-mask').val(json['mask']);

                        \$('#button-download').prop('disabled', false);
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        }
    }, 500);
});

\$('#input-filename').on('change', function (e) {
    var value = \$(this).val();

    if (value != '') {
        \$('#button-download').prop('disabled', false);
    } else {
        \$('#button-download').prop('disabled', true);
    }
});

\$('#button-download').on('click', function (e) {
    e.preventDefault();
    
    location = 'index.php?route=catalog/download|download&user_token=' + getURLVar('user_token') + '&filename=' + \$('#input-filename').val();
});
//--></script>
";
        // line 158
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/catalog/download_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 158,  261 => 107,  243 => 92,  239 => 91,  213 => 68,  206 => 64,  202 => 63,  192 => 56,  186 => 55,  181 => 53,  173 => 48,  164 => 46,  158 => 45,  154 => 44,  148 => 41,  143 => 38,  135 => 36,  124 => 34,  118 => 33,  115 => 32,  111 => 31,  106 => 29,  98 => 24,  94 => 23,  89 => 21,  84 => 19,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/catalog/download_form.twig", "/opt/lampp/htdocs/moh/upload/admin/view/template/catalog/download_form.twig");
    }
}
