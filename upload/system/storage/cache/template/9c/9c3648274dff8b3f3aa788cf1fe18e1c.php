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

/* admin/view/template/sale/subscription.twig */
class __TwigTemplate_9cb70d0087da455f4aa8a3678faba2fe extends Template
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
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-subscription').toggleClass('d-none');\" class=\"btn btn-light d-md-none\"><i class=\"fa-solid fa-filter\"></i></button>
      </div>
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
    <div class=\"row\">
      <div id=\"filter-subscription\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 20
        echo ($context["text_filter"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"mb-3\">
              <label for=\"input-subscription-id\" class=\"form-label\">";
        // line 23
        echo ($context["entry_subscription_id"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_subscription_id\" value=\"";
        echo ($context["filter_subscription_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_subscription_id"] ?? null);
        echo "\" id=\"input-subscription-id\" class=\"form-control\"/>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-order-id\" class=\"form-label\">";
        // line 26
        echo ($context["entry_order_id"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_order_id\" value=\"";
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\"/>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-customer\" class=\"form-label\">";
        // line 29
        echo ($context["entry_customer"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_customer\" value=\"";
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" list=\"list-customer\" class=\"form-control\"/>
              <datalist id=\"list-customer\"></datalist>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-status\" class=\"form-label\">";
        // line 33
        echo ($context["entry_subscription_status"] ?? null);
        echo "</label> <select name=\"filter_subscription_status_id\" id=\"input-subscription-status\" class=\"form-select\">
                <option value=\"\"></option>
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 36
            echo "                  <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 36);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 36) == ($context["filter_subscription_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 36);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "              </select></select>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-date-from\" class=\"form-label\">";
        // line 41
        echo ($context["entry_date_from"] ?? null);
        echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"filter_date_from\" value=\"";
        // line 43
        echo ($context["filter_date_from"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_from"] ?? null);
        echo "\" id=\"input-date-from\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-date-to\" class=\"form-label\">";
        // line 48
        echo ($context["entry_date_to"] ?? null);
        echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"filter_date_to\" value=\"";
        // line 50
        echo ($context["filter_date_to"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_to"] ?? null);
        echo "\" id=\"input-date-to\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
            </div>
            <div class=\"text-end\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 55
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 62
        echo ($context["text_list"] ?? null);
        echo "</div>
          <div id=\"subscription\" class=\"card-body\">";
        // line 63
        echo ($context["list"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#subscription').on('click', 'thead a, .pagination a', function (e) {
    e.preventDefault();

    \$('#subscription').load(this.href);
});

\$('#button-filter').on('click', function () {
    url = '';

    var filter_subscription_id = \$('#input-subscription-id').val();

    if (filter_subscription_id) {
        url += '&filter_subscription_id=' + filter_subscription_id;
    }

    var filter_order_id = \$('#input-order_id').val();

    if (filter_order_id) {
        url += '&filter_order_id=' + filter_order_id;
    }

    var filter_customer = \$('#input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_subscription_status_id = \$('#input-subscription-status').val();

    if (filter_subscription_status_id !== '') {
        url += '&filter_subscription_status_id=' + filter_subscription_status_id;
    }

    var filter_date_from = \$('#input-date-from').val();

    if (filter_date_from) {
        url += '&filter_date_from=' + encodeURIComponent(filter_date_from);
    }

    var filter_date_to = \$('#input-date-to').val();

    if (filter_date_to) {
        url += '&filter_date_to=' + encodeURIComponent(filter_date_to);
    }

    \$('#subscription').load('index.php?route=sale/subscription|list&user_token=";
        // line 115
        echo ($context["user_token"] ?? null);
        echo "' + url);
});

\$('#input-customer').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer|autocomplete&user_token=";
        // line 121
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
    }
});
//--></script>
";
        // line 137
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/sale/subscription.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 137,  254 => 121,  245 => 115,  190 => 63,  186 => 62,  176 => 55,  166 => 50,  161 => 48,  151 => 43,  146 => 41,  141 => 38,  126 => 36,  122 => 35,  117 => 33,  106 => 29,  96 => 26,  86 => 23,  80 => 20,  71 => 13,  60 => 11,  56 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/sale/subscription.twig", "/opt/lampp/htdocs/moh/upload/admin/view/template/sale/subscription.twig");
    }
}
