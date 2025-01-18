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

/* admin/view/template/localisation/tax_rate_list.twig */
class __TwigTemplate_cfa54124fcbc779200975f82086eed4a extends Template
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
        echo "<form id=\"form-tax-rate\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["action"] ?? null);
        echo "\" data-oc-target=\"#tax-rate\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
          <td class=\"text-start\"><a href=\"";
        // line 7
        echo ($context["sort_name"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "tr.name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_name"] ?? null);
        echo "</a></td>
          <td class=\"text-end\"><a href=\"";
        // line 8
        echo ($context["sort_rate"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "tr.rate")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_rate"] ?? null);
        echo "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 9
        echo ($context["sort_type"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "tr.type")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_type"] ?? null);
        echo "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 10
        echo ($context["sort_geo_zone"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "gz.name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_geo_zone"] ?? null);
        echo "</a></td>
          <td class=\"text-left d-none d-lg-table-cell\"><a href=\"";
        // line 11
        echo ($context["sort_date_added"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "tr.date_added")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_date_added"] ?? null);
        echo "</a></td>
          <td class=\"text-left d-none d-lg-table-cell\"><a href=\"";
        // line 12
        echo ($context["sort_date_modified"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "tr.date_modified")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_date_modified"] ?? null);
        echo "</a></td>
          <td class=\"text-end\">";
        // line 13
        echo ($context["column_action"] ?? null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 17
        if (($context["tax_rates"] ?? null)) {
            // line 18
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tax_rates"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tax_rate"]) {
                // line 19
                echo "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["tax_rate"], "tax_rate_id", [], "any", false, false, false, 20);
                echo "\" class=\"form-check-input\"/></td>
              <td class=\"text-start\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["tax_rate"], "name", [], "any", false, false, false, 21);
                echo "</td>
              <td class=\"text-end\">";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["tax_rate"], "rate", [], "any", false, false, false, 22);
                echo "</td>
              <td class=\"text-start\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["tax_rate"], "type", [], "any", false, false, false, 23);
                echo "</td>
              <td class=\"text-start\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["tax_rate"], "geo_zone", [], "any", false, false, false, 24);
                echo "</td>
              <td class=\"text-left d-none d-lg-table-cell\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["tax_rate"], "date_added", [], "any", false, false, false, 25);
                echo "</td>
              <td class=\"text-left d-none d-lg-table-cell\">";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["tax_rate"], "date_modified", [], "any", false, false, false, 26);
                echo "</td>
              <td class=\"text-end\"><a href=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["tax_rate"], "edit", [], "any", false, false, false, 27);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_rate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
        } else {
            // line 31
            echo "          <tr>
            <td class=\"text-center\" colspan=\"9\">";
            // line 32
            echo ($context["text_no_results"] ?? null);
            echo "</td>
          </tr>
        ";
        }
        // line 35
        echo "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-left\">";
        // line 39
        echo ($context["pagination"] ?? null);
        echo "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 40
        echo ($context["results"] ?? null);
        echo "</div>
  </div>
</form>";
    }

    public function getTemplateName()
    {
        return "admin/view/template/localisation/tax_rate_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 40,  193 => 39,  187 => 35,  181 => 32,  178 => 31,  175 => 30,  164 => 27,  160 => 26,  156 => 25,  152 => 24,  148 => 23,  144 => 22,  140 => 21,  136 => 20,  133 => 19,  128 => 18,  126 => 17,  119 => 13,  107 => 12,  95 => 11,  83 => 10,  71 => 9,  59 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/localisation/tax_rate_list.twig", "/opt/lampp/htdocs/moh/upload/admin/view/template/localisation/tax_rate_list.twig");
    }
}
