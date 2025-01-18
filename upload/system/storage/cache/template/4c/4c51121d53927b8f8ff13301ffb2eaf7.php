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

/* extension/opencart/admin/view/template/report/customer_transaction.twig */
class __TwigTemplate_caf3855bb51e565ee45746442c66969a extends Template
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
        echo "<div class=\"row\">
\t<div id=\"filter-report\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 4
        echo ($context["text_filter"] ?? null);
        echo "</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label for=\"input-customer\" class=\"form-label\">";
        // line 7
        echo ($context["entry_customer"] ?? null);
        echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"filter_customer\" value=\"";
        // line 8
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" list=\"list-customer\" class=\"form-control\"/>
\t\t\t\t\t<datalist id=\"list-customer\"></datalist>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label for=\"input-date-start\" class=\"form-label\">";
        // line 12
        echo ($context["entry_date_start"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"filter_date_start\" value=\"";
        // line 14
        echo ($context["filter_date_start"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_start"] ?? null);
        echo "\" id=\"input-date-start\" class=\"form-control date\"/>
\t\t\t\t\t\t<div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label for=\"input-date-end\" class=\"form-label\">";
        // line 19
        echo ($context["entry_date_end"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"filter_date_end\" value=\"";
        // line 21
        echo ($context["filter_date_end"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_end"] ?? null);
        echo "\" id=\"input-date-end\" class=\"form-control date\"/>
\t\t\t\t\t\t<div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t<button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 26
        echo ($context["button_filter"] ?? null);
        echo "</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col col-lg-9 col-md-12\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\"><i class=\"fa-solid fa-chart-bar\"></i> ";
        // line 33
        echo ($context["heading_title"] ?? null);
        echo "</div>
\t\t\t<div id=\"customer-transaction\" class=\"card-body\">";
        // line 34
        echo ($context["list"] ?? null);
        echo "</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$('#customer-transaction').on('click', '.pagination a', function (e) {
\te.preventDefault();

\t\$('#customer-transaction').load(this.href);
});

\$('#button-filter').on('click', function () {
    var url = '';

    var filter_customer = \$('#input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_date_start = \$('#input-date-start').val();

    if (filter_date_start) {
        url += '&filter_date_start=' + encodeURIComponent(filter_date_start);
    }

    var filter_date_end = \$('#input-date-end').val();

    if (filter_date_end) {
        url += '&filter_date_end=' + encodeURIComponent(filter_date_end);
    }

\t\t\$('#customer-transaction').load('index.php?route=extension/opencart/report/customer_transaction|list&user_token=";
        // line 66
        echo ($context["user_token"] ?? null);
        echo "' + url);
});

\$('#input-customer').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer|autocomplete&user_token=";
        // line 72
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-customer').val(item['label']);
    }
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/admin/view/template/report/customer_transaction.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 72,  140 => 66,  105 => 34,  101 => 33,  91 => 26,  81 => 21,  76 => 19,  66 => 14,  61 => 12,  52 => 8,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/admin/view/template/report/customer_transaction.twig", "/opt/lampp/htdocs/moh/upload/extension/opencart/admin/view/template/report/customer_transaction.twig");
    }
}
