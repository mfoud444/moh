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

/* admin/view/template/tool/backup_history.twig */
class __TwigTemplate_c8b7090bfcf6ee709f04e1dc075024ea extends Template
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
        echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <td>";
        // line 5
        echo ($context["column_filename"] ?? null);
        echo "</td>
        <td>";
        // line 6
        echo ($context["column_size"] ?? null);
        echo "</td>
        <td class=\"d-none d-lg-table-cell\">";
        // line 7
        echo ($context["column_date_added"] ?? null);
        echo "</td>
        <td class=\"text-end\">";
        // line 8
        echo ($context["column_action"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 12
        if (($context["histories"] ?? null)) {
            // line 13
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 14
                echo "          <tr>
            <td>";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["history"], "filename", [], "any", false, false, false, 15);
                echo "</td>
            <td>";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["history"], "size", [], "any", false, false, false, 16);
                echo "</td>
            <td class=\"d-none d-lg-table-cell\">";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 17);
                echo "</td>
            <td class=\"text-end\">
              <button type=\"button\" value=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["history"], "filename", [], "any", false, false, false, 19);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_restore"] ?? null);
                echo "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-rotate\"></i></button>
              <button type=\"button\" onclick=\"location = '";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["history"], "download", [], "any", false, false, false, 20);
                echo "';\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_download"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa-solid fa-download\"></i></button>
              <button type=\"button\" value=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["history"], "filename", [], "any", false, false, false, 21);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "      ";
        } else {
            // line 26
            echo "        <tr>
          <td colspan=\"4\" class=\"text-center\">";
            // line 27
            echo ($context["text_no_results"] ?? null);
            echo "</td>
        </tr>
      ";
        }
        // line 30
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 34
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 35
        echo ($context["results"] ?? null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/tool/backup_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 35,  127 => 34,  121 => 30,  115 => 27,  112 => 26,  109 => 25,  97 => 21,  91 => 20,  85 => 19,  80 => 17,  76 => 16,  72 => 15,  69 => 14,  64 => 13,  62 => 12,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/tool/backup_history.twig", "/opt/lampp/htdocs/moh/upload/admin/view/template/tool/backup_history.twig");
    }
}
