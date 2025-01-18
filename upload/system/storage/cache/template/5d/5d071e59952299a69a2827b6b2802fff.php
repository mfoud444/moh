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

/* extension/opencart/admin/view/template/report/product_viewed.twig */
class __TwigTemplate_cd597c4e1014c39f3a1e01bb6a479ea2 extends Template
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
        echo "<div class=\"card\">
  <div class=\"card-header\">
    <i class=\"fa-solid fa-filter\"></i> ";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "
    <div class=\"float-end\">
      <button type=\"button\" id=\"button-generate\" class=\"btn btn-warning btn-sm\"><i class=\"fa-solid fa-rotate\"></i> ";
        // line 5
        echo ($context["button_generate"] ?? null);
        echo "</button>
    </div>
  </div>
  <div id=\"product-viewed\" class=\"card-body\">";
        // line 8
        echo ($context["list"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#product-viewed').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#product-viewed').load(this.href);
});

\$('#button-generate').on('click', function () {
    var element = this;

    var next = 'index.php?route=extension/opencart/report/product_viewed|generate&user_token=";
        // line 20
        echo ($context["user_token"] ?? null);
        echo "';

    var send = function () {
        return \$.ajax({
            url: next,
            dataType: 'json',
            beforeSend: function () {
                \$('#button-generate').prop('disabled', true).addClass('loading');
            },
            complete: function () {
                \$('#button-generate').prop('disabled', false).removeClass('loading');
            },
            success: function (json) {
                console.log(json);

                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#product-viewed').load('index.php?route=extension/opencart/report/product_viewed|list&user_token=";
        // line 44
        echo ($context["user_token"] ?? null);
        echo "');
                }

                if (json['text']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['text'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['next']) {
                    next = json['next'];

                    chain.attach(send);
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    };

    chain.attach(send);
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "extension/opencart/admin/view/template/report/product_viewed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 44,  67 => 20,  52 => 8,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/admin/view/template/report/product_viewed.twig", "/opt/lampp/htdocs/moh/upload/extension/opencart/admin/view/template/report/product_viewed.twig");
    }
}
