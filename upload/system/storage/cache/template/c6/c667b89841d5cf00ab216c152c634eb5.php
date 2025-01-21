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

/* admin/view/template/common/forgotten.twig */
class __TwigTemplate_f6c479c7771ab14bdb2a0bf757ef4091 extends Template
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
        echo "
<div id=\"content\">
  <div class=\"container-fluid\">
    <br/>
    <br/>
    <div class=\"row justify-content-sm-center\">
      <div class=\"col-sm-10 col-md-8 col-lg-5\">
        <div class=\"card\">
          <div class=\"card-header\">
            <i class=\"fa-solid fa-redo\"></i> ";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "
          </div>
          <div class=\"card-body\">
            <form id=\"form-forgotten\" action=\"";
        // line 13
        echo ($context["confirm"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
              <p>";
        // line 14
        echo ($context["text_email"] ?? null);
        echo "</p>
              <div class=\"mb-3\">
                <label for=\"input-email\" class=\"form-label\">";
        // line 16
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"input-group\">
                  <div class=\"input-group-text\"><i class=\"fa-solid fa-envelope\"></i></div>
                  <input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 19
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 23
        echo ($context["button_reset"] ?? null);
        echo "</button>
                <a href=\"";
        // line 24
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 33
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/common/forgotten.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  81 => 24,  77 => 23,  70 => 19,  64 => 16,  59 => 14,  55 => 13,  49 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/common/forgotten.twig", "/opt/lampp/htdocs/moh/upload/admin/view/template/common/forgotten.twig");
    }
}
