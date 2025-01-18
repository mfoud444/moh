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

/* admin/view/template/tool/backup.twig */
class __TwigTemplate_ef858f7557de2fd2d7e16f2c9ae380d8 extends Template
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
      <div class=\"float-end\"><button type=\"button\" id=\"button-upload\" data-bs-toggle=\"tooltip\" title=\"";
        // line 5
        echo ($context["button_upload"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i></button></div>
      <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-exchange-alt\"></i> ";
        // line 16
        echo ($context["heading_title"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <fieldset>
          <legend>";
        // line 19
        echo ($context["text_progress"] ?? null);
        echo "</legend>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 21
        echo ($context["entry_progress"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div id=\"progress-backup\" class=\"progress\">
                <div id=\"progress-bar\" class=\"progress-bar\"></div>
              </div>
              <div id=\"progress-text\"></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 31
        echo ($context["text_option"] ?? null);
        echo "</legend>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 33
        echo ($context["entry_export"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                <div class=\"form-check\">
                  <input type=\"checkbox\" class=\"form-check-input\" id=\"input-backup-all\" onchange=\"\$(this).parent().parent().find(':checkbox').not(this).prop('checked', \$(this).prop('checked'));\"/>
                  <label for=\"input-backup-all\" class=\"form-check-label\">";
        // line 38
        echo ($context["text_all"] ?? null);
        echo "</label>
                </div>
                ";
        // line 40
        $context["table_row"] = 0;
        // line 41
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tables"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            // line 42
            echo "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"backup[]\" value=\"";
            // line 43
            echo $context["table"];
            echo "\" id=\"input-backup-";
            echo ($context["table_row"] ?? null);
            echo "\" class=\"form-check-input\" checked/> <label for=\"input-backup-";
            echo ($context["table_row"] ?? null);
            echo "\" class=\"form-check-label\">";
            echo $context["table"];
            echo "</label>
                  </div>
                  ";
            // line 45
            $context["table_row"] = (($context["table_row"] ?? null) + 1);
            // line 46
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <div class=\"offset-sm-2 col-sm-10 text-end\">
              <button type=\"button\" id=\"button-backup\" class=\"btn btn-success\"><i class=\"fa-solid fa-download\"></i> ";
        // line 52
        echo ($context["button_backup"] ?? null);
        echo "</button>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 57
        echo ($context["text_history"] ?? null);
        echo "</legend>
          <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
        // line 58
        echo ($context["text_import"] ?? null);
        echo "</div>
          <div id=\"history\">";
        // line 59
        echo ($context["history"] ?? null);
        echo "</div>
        </fieldset>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-backup').on('click', function () {
    var element = this;

    \$('#progress-bar').css('width', '0%');
    \$('#progress-bar').removeClass('bg-danger bg-success');

    var next = 'index.php?route=tool/backup|backup&user_token=";
        // line 72
        echo ($context["user_token"] ?? null);
        echo "&table=' + \$('input[name^=\\'backup\\']:checked').first().val();

    var backup = function () {
        return \$.ajax({
            url: next,
            type: 'post',
            data: \$('input[name^=\\'backup\\']:checked'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-backup').prop('disabled', true).addClass('loading');
                \$('#button-upload, #history .btn').prop('disabled', true);
            },
            success: function (json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#progress-bar').addClass('bg-danger');
                    \$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');

                    \$('#history').load('index.php?route=tool/backup|history&user_token=";
        // line 91
        echo ($context["user_token"] ?? null);
        echo "');

                    \$('#button-backup').prop('disabled', false).removeClass('loading');
                    \$('#button-upload, #history .btn').prop('disabled', false);
                }

                if (json['success']) {
                    \$('#progress-bar').css('width', '100%').addClass('bg-success');
                    \$('#progress-text').html('<div class=\"text-success\">' + json['success'] + '</div>');

                    \$('#history').load('index.php?route=tool/backup|history&user_token=";
        // line 101
        echo ($context["user_token"] ?? null);
        echo "');

                    \$('#button-backup').prop('disabled', false).removeClass('loading');
                    \$('#button-upload, #history .btn').prop('disabled', false);
                }

                if (json['progress']) {
                    \$('#progress-bar').css('width', json['progress'] + '%');
                }

                if (json['text']) {
                    \$('#progress-text').html(json['text']);
                }

                if (json['next']) {
                    next = json['next'];

                    chain.attach(backup);
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$('#button-backup').prop('disabled', false).removeClass('loading');
                \$('#button-upload, #history .btn').prop('disabled', false);
            }
        });
    };

    chain.attach(backup);
});

// Restore
\$('#history').on('click', '.btn-warning', function () {
    var element = this;

    \$('#progress-bar').css('width', '0%');
    \$('#progress-bar').removeClass('bg-danger bg-success');

    var next = 'index.php?route=tool/backup|restore&user_token=";
        // line 140
        echo ($context["user_token"] ?? null);
        echo "&filename=' + encodeURIComponent(\$(this).val());

    var restore = function () {
        return \$.ajax({
            url: next,
            type: 'post',
            dataType: 'json',
            beforeSend: function () {
                \$(element).prop('disabled', true).addClass('loading');

                \$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false).removeClass('loading');
            },
            success: function (json) {
                \$('.alert-dismissible').remove();

                if (json['progress']) {
                    \$('#progress-bar').css('width', json['progress'] + '%');
                }

                if (json['error']) {
                    \$('#progress-bar').addClass('bg-danger');
                    \$('#progress-text').html('<div class=\"invalid-feedback\">' + json['error'] + '</div>');

                    \$('#history').load('index.php?route=tool/backup|history&user_token=";
        // line 166
        echo ($context["user_token"] ?? null);
        echo "');

                    \$(element).prop('disabled', false).removeClass('loading');

                    \$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', false);
                }

                if (json['success']) {
                    \$('#progress-bar').css('width', '100%').addClass('bg-success');
                    \$('#progress-text').html('<div class=\"text-success\">' + json['success'] + '</div>');

                    \$('#history').load('index.php?route=tool/backup|history&user_token=";
        // line 177
        echo ($context["user_token"] ?? null);
        echo "');

                    \$(element).prop('disabled', false).removeClass('loading');

                    \$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', false);
                }

                if (json['text']) {
                    \$('#progress-text').html(json['text']);
                }

                if (json['next']) {
                    next = json['next'];

                    chain.attach(restore);
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$(element).prop('disabled', false).removeClass('loading');

                \$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', false);
            }
        });
    }

    chain.attach(restore);
});

// Upload
\$('#button-upload').on('click', function () {
    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"upload\" /></form>');

    \$('#form-upload input[name=\\'upload\\']').trigger('click');

    \$('#form-upload input[name=\\'upload\\']').on('change', function () {
        if ((this.files[0].size) > ";
        // line 216
        echo ($context["config_file_max_size"] ?? null);
        echo ") {
            alert('";
        // line 217
        echo ($context["error_upload_size"] ?? null);
        echo "');

            \$(this).val('');
        }
    });

    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }

    timer = setInterval(function () {
        if (\$('#form-upload input[name=\\'upload\\']').val() !== '') {
            clearInterval(timer);

            \$.ajax({
                url: 'index.php?route=tool/backup|upload&user_token=";
        // line 232
        echo ($context["user_token"] ?? null);
        echo "',
                type: 'post',
                dataType: 'json',
                data: new FormData(\$('#form-upload')[0]),
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    \$('#button-upload').prop('disabled', true).addClass('loading');
                },
                complete: function () {
                    \$('#button-upload').prop('disabled', false).removeClass('loading');
                },
                success: function (json) {
                    \$('.alert-dismissible').remove();

                    if (json['error']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    if (json['success']) {
                        \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                        \$('#history').load('index.php?route=tool/backup|history&user_token=";
        // line 255
        echo ($context["user_token"] ?? null);
        echo "');
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        }
    }, 500);
});

// Delete
\$('#history').on('click', '.btn-danger', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=tool/backup|delete&user_token=";
        // line 271
        echo ($context["user_token"] ?? null);
        echo "&filename=' + encodeURIComponent(\$(element).val()),
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
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=tool/backup|history&user_token=";
        // line 290
        echo ($context["user_token"] ?? null);
        echo "');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 299
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/tool/backup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 299,  437 => 290,  415 => 271,  396 => 255,  370 => 232,  352 => 217,  348 => 216,  306 => 177,  292 => 166,  263 => 140,  221 => 101,  208 => 91,  186 => 72,  170 => 59,  166 => 58,  162 => 57,  154 => 52,  147 => 47,  141 => 46,  139 => 45,  128 => 43,  125 => 42,  120 => 41,  118 => 40,  113 => 38,  105 => 33,  100 => 31,  87 => 21,  82 => 19,  76 => 16,  69 => 11,  58 => 9,  54 => 8,  49 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/tool/backup.twig", "/opt/lampp/htdocs/moh/upload/admin/view/template/tool/backup.twig");
    }
}
