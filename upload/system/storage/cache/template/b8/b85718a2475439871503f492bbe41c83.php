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

/* admin/view/template/sale/voucher_list.twig */
class __TwigTemplate_ba42cb6d5ca2ab11504f48f16a3ccee8 extends Template
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
        echo "<form id=\"form-voucher\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["action"] ?? null);
        echo "\" data-oc-target=\"#voucher\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
          <td class=\"text-start\"><a href=\"";
        // line 7
        echo ($context["sort_code"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "v.code")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_code"] ?? null);
        echo "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 8
        echo ($context["sort_from"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "v.from_name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_from"] ?? null);
        echo "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 9
        echo ($context["sort_to"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "v.to_name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_to"] ?? null);
        echo "</a></td>
          <td class=\"text-end\"><a href=\"";
        // line 10
        echo ($context["sort_amount"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "v.amount")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_amount"] ?? null);
        echo "</a></td>
          <td class=\"text-start d-none d-lg-table-cell\"><a href=\"";
        // line 11
        echo ($context["sort_theme"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "theme")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_theme"] ?? null);
        echo "</a></td>
          <td class=\"text-lef d-none d-lg-table-cellt\"><a href=\"";
        // line 12
        echo ($context["sort_status"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "v.status")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_status"] ?? null);
        echo "</a></td>
          <td class=\"text-start d-none d-lg-table-cell\"><a href=\"";
        // line 13
        echo ($context["sort_date_added"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "v.date_added")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_date_added"] ?? null);
        echo "</a></td>
          <td class=\"text-end\">";
        // line 14
        echo ($context["column_action"] ?? null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 18
        if (($context["vouchers"] ?? null)) {
            // line 19
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 20
                echo "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "voucher_id", [], "any", false, false, false, 21);
                echo "\" class=\"form-check-input\"/></td>
              <td class=\"text-start\">";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "code", [], "any", false, false, false, 22);
                echo "</td>
              <td class=\"text-start\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "from", [], "any", false, false, false, 23);
                echo "</td>
              <td class=\"text-start\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "to", [], "any", false, false, false, 24);
                echo "</td>
              <td class=\"text-end\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 25);
                echo "</td>
              <td class=\"text-start d-none d-lg-table-cell\">";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "theme", [], "any", false, false, false, 26);
                echo "</td>
              <td class=\"text-start d-none d-lg-table-cell\">";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "status", [], "any", false, false, false, 27);
                echo "</td>
              <td class=\"text-start d-none d-lg-table-cell\">";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "date_added", [], "any", false, false, false, 28);
                echo "</td>
              <td class=\"text-end\">
                ";
                // line 30
                if (twig_get_attribute($this->env, $this->source, $context["voucher"], "order", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "order", [], "any", false, false, false, 31);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_order"] ?? null);
                    echo "\" class=\"btn btn-info\"><i class=\"fa-solid fa-eye\"></i></a>
                ";
                }
                // line 33
                echo "                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "edit", [], "any", false, false, false, 33);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        ";
        } else {
            // line 37
            echo "          <tr>
            <td class=\"text-center\" colspan=\"9\">";
            // line 38
            echo ($context["text_no_results"] ?? null);
            echo "</td>
          </tr>
        ";
        }
        // line 41
        echo "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 45
        echo ($context["pagination"] ?? null);
        echo "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 46
        echo ($context["results"] ?? null);
        echo "</div>
  </div>
</form>";
    }

    public function getTemplateName()
    {
        return "admin/view/template/sale/voucher_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 46,  221 => 45,  215 => 41,  209 => 38,  206 => 37,  203 => 36,  191 => 33,  183 => 31,  181 => 30,  176 => 28,  172 => 27,  168 => 26,  164 => 25,  160 => 24,  156 => 23,  152 => 22,  148 => 21,  145 => 20,  140 => 19,  138 => 18,  131 => 14,  119 => 13,  107 => 12,  95 => 11,  83 => 10,  71 => 9,  59 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/sale/voucher_list.twig", "/opt/lampp/htdocs/moh/upload/admin/view/template/sale/voucher_list.twig");
    }
}
