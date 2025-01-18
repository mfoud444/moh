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

/* admin/view/template/user/user_group_form.twig */
class __TwigTemplate_eb65e5dce31055eebba02740e8e958ab extends Template
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
        <button type=\"submit\" form=\"form-user-group\" data-bs-toggle=\"tooltip\" title=\"";
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
        <form id=\"form-user-group\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 22
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 24
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 29
        echo ($context["entry_permission"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div id=\"user-group-permission\" class=\"form-control\" style=\"height: 250px; overflow: auto;\">
                <table class=\"table table-borderless table-striped\">
                  <thead>
                    <tr>
                      <td class=\"w-50\"></td>
                      <td class=\"text-center\">";
        // line 36
        echo ($context["text_access"] ?? null);
        echo "</label></td>
                      <td class=\"text-center\">";
        // line 37
        echo ($context["text_modify"] ?? null);
        echo "</label></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><strong>";
        // line 42
        echo ($context["text_all"] ?? null);
        echo "</strong></td>
                      <td class=\"text-center\"><input type=\"checkbox\" id=\"input-permission-access\" class=\"form-check-input\" onchange=\"\$('#user-group-permission input[name^=\\'permission[access]\\']').prop('checked', \$(this).prop('checked'));\"/></td>
                      <td class=\"text-center\"><input type=\"checkbox\" id=\"input-permission-modify\" class=\"form-check-input\" onchange=\"\$('#user-group-permission input[name^=\\'permission[modify]\\']').prop('checked', \$(this).prop('checked'));\"/></td>
                    </tr>
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["permissions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 47
            echo "                      <tr>
                        <td><label>";
            // line 48
            echo $context["permission"];
            echo "</label></td>
                        <td class=\"text-center\"><input type=\"checkbox\" name=\"permission[access][]\" value=\"";
            // line 49
            echo $context["permission"];
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter($context["permission"], ($context["access"] ?? null))) {
                echo " checked";
            }
            echo "/></td>
                        <td class=\"text-center\"><input type=\"checkbox\" name=\"permission[modify][]\" value=\"";
            // line 50
            echo $context["permission"];
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter($context["permission"], ($context["modify"] ?? null))) {
                echo " checked";
            }
            echo "/></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 59
        echo ($context["entry_extension"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div id=\"user-group-extension\" class=\"form-control\" style=\"height: 250px; overflow: auto;\">
                <table class=\"table table-borderless table-striped\">
                  <thead>
                    <tr>
                      <td class=\"w-50\"></td>
                      <td class=\"text-center\">";
        // line 66
        echo ($context["text_access"] ?? null);
        echo "</td>
                      <td class=\"text-center\">";
        // line 67
        echo ($context["text_modify"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><strong>";
        // line 72
        echo ($context["text_all"] ?? null);
        echo "</strong></td>
                      <td class=\"text-center\"><input type=\"checkbox\" id=\"input-permission-access\" class=\"form-check-input\" onchange=\"\$('#user-group-extension input[name^=\\'permission[access]\\']').prop('checked', \$(this).prop('checked'));\"/></td>
                      <td class=\"text-center\"><input type=\"checkbox\" id=\"input-permission-modify\" class=\"form-check-input\" onchange=\"\$('#user-group-extension input[name^=\\'permission[modify]\\']').prop('checked', \$(this).prop('checked'));\"/></td>
                    </tr>
                    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 77
            echo "                      <tr>
                        <td><label>";
            // line 78
            echo $context["extension"];
            echo "</label></td>
                        <td class=\"text-center\"><input type=\"checkbox\" name=\"permission[access][]\" value=\"";
            // line 79
            echo $context["extension"];
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter($context["extension"], ($context["access"] ?? null))) {
                echo " checked";
            }
            echo "/></td>
                        <td class=\"text-center\"><input type=\"checkbox\" name=\"permission[modify][]\" value=\"";
            // line 80
            echo $context["extension"];
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter($context["extension"], ($context["modify"] ?? null))) {
                echo " checked";
            }
            echo "/></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"user_group_id\" value=\"";
        // line 88
        echo ($context["user_group_id"] ?? null);
        echo "\" id=\"input-user-group-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('table tbody label').on('click', function () {
    var checked = \$(this).parent().parent().find(':checkbox:first').prop('checked');

    \$(this).parent().parent().find(':checkbox').prop('checked', !checked);
    \$(this).parent().parent().find(':checkbox').prop('checked', !checked);
});
//--></script>
";
        // line 102
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "admin/view/template/user/user_group_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 102,  245 => 88,  238 => 83,  225 => 80,  217 => 79,  213 => 78,  210 => 77,  206 => 76,  199 => 72,  191 => 67,  187 => 66,  177 => 59,  169 => 53,  156 => 50,  148 => 49,  144 => 48,  141 => 47,  137 => 46,  130 => 42,  122 => 37,  118 => 36,  108 => 29,  98 => 24,  93 => 22,  88 => 20,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/user/user_group_form.twig", "/opt/lampp/htdocs/moh/upload/admin/view/template/user/user_group_form.twig");
    }
}
