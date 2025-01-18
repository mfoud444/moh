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

/* admin/view/template/customer/gdpr_list.twig */
class __TwigTemplate_a12d8100c2f5dc0e34c3e4a12795604c extends Template
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
        echo "<form id=\"form-gdpr\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["action"] ?? null);
        echo "\" data-oc-target=\"#gdpr\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
          <td class=\"text-start\">";
        // line 7
        echo ($context["column_email"] ?? null);
        echo "</td>
          <td class=\"text-start\">";
        // line 8
        echo ($context["column_request"] ?? null);
        echo "</td>
          <td class=\"text-start\">";
        // line 9
        echo ($context["column_status"] ?? null);
        echo "</td>
          <td class=\"text-start d-none d-lg-table-cell\">";
        // line 10
        echo ($context["column_date_added"] ?? null);
        echo "</td>
          <td class=\"text-end\">";
        // line 11
        echo ($context["column_action"] ?? null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 15
        if (($context["gdprs"] ?? null)) {
            // line 16
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["gdprs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["gdpr"]) {
                // line 17
                echo "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["gdpr"], "gdpr_id", [], "any", false, false, false, 18);
                echo "\" class=\"form-check-input\"/></td>
              <td class=\"text-start\">
                ";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["gdpr"], "edit", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["gdpr"], "edit", [], "any", false, false, false, 21);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["gdpr"], "email", [], "any", false, false, false, 21);
                    echo "</a>
                ";
                } else {
                    // line 23
                    echo "                  ";
                    echo twig_get_attribute($this->env, $this->source, $context["gdpr"], "email", [], "any", false, false, false, 23);
                    echo "
                ";
                }
                // line 25
                echo "              </td>
              <td class=\"text-start\">";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["gdpr"], "action", [], "any", false, false, false, 26);
                echo "</td>
              <td class=\"text-start\">
                ";
                // line 28
                if ((twig_get_attribute($this->env, $this->source, $context["gdpr"], "status", [], "any", false, false, false, 28) == "-1")) {
                    // line 29
                    echo "                  <span class=\"badge bg-danger\">";
                    echo ($context["text_denied"] ?? null);
                    echo "</span>
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 30
$context["gdpr"], "status", [], "any", false, false, false, 30) == "0")) {
                    // line 31
                    echo "                  <span class=\"badge bg-secondary\">";
                    echo ($context["text_unverified"] ?? null);
                    echo "</span>
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 32
$context["gdpr"], "status", [], "any", false, false, false, 32) == "1")) {
                    // line 33
                    echo "                  <span class=\"badge bg-warning\">";
                    echo ($context["text_pending"] ?? null);
                    echo "</span>
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 34
$context["gdpr"], "status", [], "any", false, false, false, 34) == "2")) {
                    // line 35
                    echo "                  <span class=\"badge bg-info\">";
                    echo ($context["text_processing"] ?? null);
                    echo "</span>
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 36
$context["gdpr"], "status", [], "any", false, false, false, 36) == "3")) {
                    // line 37
                    echo "                  <span class=\"badge bg-success\">";
                    echo ($context["text_complete"] ?? null);
                    echo "</span>
                ";
                }
                // line 38
                echo "</td>
              <td class=\"text-start d-none d-lg-table-cell\">";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["gdpr"], "date_added", [], "any", false, false, false, 39);
                echo "</td>
              <td class=\"text-end\"><button type=\"button\" value=\"";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["gdpr"], "approve", [], "any", false, false, false, 40);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["text_approve"] ?? null);
                echo "\" class=\"btn btn-success\"><i class=\"fa-solid fa-check\"></i></button>
                <button type=\"button\" value=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["gdpr"], "deny", [], "any", false, false, false, 41);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["text_deny"] ?? null);
                echo "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
                <button type=\"button\" value=\"";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["gdpr"], "delete", [], "any", false, false, false, 42);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["text_delete"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gdpr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        ";
        } else {
            // line 46
            echo "          <tr>
            <td class=\"text-center\" colspan=\"6\">";
            // line 47
            echo ($context["text_no_results"] ?? null);
            echo "</td>
          </tr>
        ";
        }
        // line 50
        echo "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 54
        echo ($context["pagination"] ?? null);
        echo "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 55
        echo ($context["results"] ?? null);
        echo "</div>
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/customer/gdpr_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 55,  193 => 54,  187 => 50,  181 => 47,  178 => 46,  175 => 45,  164 => 42,  158 => 41,  152 => 40,  148 => 39,  145 => 38,  139 => 37,  137 => 36,  132 => 35,  130 => 34,  125 => 33,  123 => 32,  118 => 31,  116 => 30,  111 => 29,  109 => 28,  104 => 26,  101 => 25,  95 => 23,  87 => 21,  85 => 20,  80 => 18,  77 => 17,  72 => 16,  70 => 15,  63 => 11,  59 => 10,  55 => 9,  51 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/customer/gdpr_list.twig", "/opt/lampp/htdocs/moh/upload/admin/view/template/customer/gdpr_list.twig");
    }
}
