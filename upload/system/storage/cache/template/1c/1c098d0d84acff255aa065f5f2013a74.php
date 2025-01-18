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

/* admin/view/template/customer/customer_approval_list.twig */
class __TwigTemplate_992c558b1629a75f59eddebfec408f23 extends Template
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
        echo "<form id=\"form-customer-approval\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["action"] ?? null);
        echo "\" data-oc-target=\"#customer-approval\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
          <td class=\"text-start\">";
        // line 7
        echo ($context["column_customer"] ?? null);
        echo "</td>
          <td class=\"text-start\">";
        // line 8
        echo ($context["column_email"] ?? null);
        echo "</td>
          <td class=\"text-start\">";
        // line 9
        echo ($context["column_customer_group"] ?? null);
        echo "</td>
          <td class=\"text-start\">";
        // line 10
        echo ($context["column_type"] ?? null);
        echo "</td>
          <td class=\"text-start\">";
        // line 11
        echo ($context["column_date_added"] ?? null);
        echo "</td>
          <td class=\"text-end\">";
        // line 12
        echo ($context["column_action"] ?? null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 16
        if (($context["customer_approvals"] ?? null)) {
            // line 17
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_approvals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_approval"]) {
                // line 18
                echo "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["customer_approval"], "customer_approval_id", [], "any", false, false, false, 19);
                echo "\" class=\"form-check-input\"/></td>
              <td class=\"text-start\"><a href=\"";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["customer_approval"], "edit", [], "any", false, false, false, 20);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_approval"], "customer", [], "any", false, false, false, 20);
                echo "</a></td>
              <td class=\"text-start\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["customer_approval"], "email", [], "any", false, false, false, 21);
                echo "</td>
              <td class=\"text-start\">";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["customer_approval"], "customer_group", [], "any", false, false, false, 22);
                echo "</td>
              <td class=\"text-start\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["customer_approval"], "type", [], "any", false, false, false, 23);
                echo "</td>
              <td class=\"text-start\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["customer_approval"], "date_added", [], "any", false, false, false, 24);
                echo "</td>
              <td class=\"text-end\" style=\"min-width: 103px;\"><button type=\"button\" value=\"";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["customer_approval"], "approve", [], "any", false, false, false, 25);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_approve"] ?? null);
                echo "\" class=\"btn btn-success\"><i class=\"fa-solid fa-thumbs-up\"></i></button>
                  <button type=\"button\" value=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["customer_approval"], "deny", [], "any", false, false, false, 26);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_deny"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-thumbs-down\"></i></button></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_approval'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
        } else {
            // line 30
            echo "          <tr>
            <td class=\"text-center\" colspan=\"7\">";
            // line 31
            echo ($context["text_no_results"] ?? null);
            echo "</td>
          </tr>
        ";
        }
        // line 34
        echo "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 38
        echo ($context["pagination"] ?? null);
        echo "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 39
        echo ($context["results"] ?? null);
        echo "</div>
  </div>
</form>";
    }

    public function getTemplateName()
    {
        return "admin/view/template/customer/customer_approval_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 39,  145 => 38,  139 => 34,  133 => 31,  130 => 30,  127 => 29,  116 => 26,  110 => 25,  106 => 24,  102 => 23,  98 => 22,  94 => 21,  88 => 20,  84 => 19,  81 => 18,  76 => 17,  74 => 16,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  51 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/customer/customer_approval_list.twig", "/opt/lampp/htdocs/moh/upload/admin/view/template/customer/customer_approval_list.twig");
    }
}
