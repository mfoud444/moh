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

/* admin/view/template/catalog/review_form.twig */
class __TwigTemplate_f2ef11686e49cf8b91558dd7380b3ede extends Template
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
        <button type=\"submit\" form=\"form-review\" formaction=\"";
        // line 6
        echo ($context["save"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
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
        <form id=\"form-review\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label for=\"input-author\" class=\"col-sm-2 col-form-label\">";
        // line 22
        echo ($context["entry_author"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"author\" value=\"";
        // line 24
        echo ($context["author"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_author"] ?? null);
        echo "\" id=\"input-author\" class=\"form-control\"/>
              <div id=\"error-author\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 29
        echo ($context["entry_product"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 31
        echo ($context["product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" list=\"list-product\" class=\"form-control\"/>
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 32
        echo ($context["product_id"] ?? null);
        echo "\" id=\"input-product-id\"/>
              <datalist id=\"list-product\"></datalist>
              <div class=\"form-text\">";
        // line 34
        echo ($context["help_product"] ?? null);
        echo "</div>
              <div id=\"error-product\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-text\" class=\"col-sm-2 col-form-label\">";
        // line 39
        echo ($context["entry_text"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"text\" rows=\"8\" placeholder=\"";
        // line 41
        echo ($context["entry_text"] ?? null);
        echo "\" id=\"input-text\" class=\"form-control\">";
        echo ($context["text"] ?? null);
        echo "</textarea>
              <div id=\"error-text\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-rating\" class=\"col-sm-2 col-form-label\">";
        // line 46
        echo ($context["entry_rating"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div id=\"input-rating\">
                <div class=\"form-check form-check-inline\">
                  <input type=\"radio\" name=\"rating\" value=\"1\" id=\"input-rating-1\" class=\"form-check-input\"";
        // line 50
        if ((($context["rating"] ?? null) == 1)) {
            echo " checked";
        }
        echo "/> <label for=\"input-rating-1\" class=\"form-check-label\">1</label>
                </div>
                <div class=\"form-check form-check-inline\">
                  <input type=\"radio\" name=\"rating\" value=\"2\" id=\"input-rating-2\" class=\"form-check-input\"";
        // line 53
        if ((($context["rating"] ?? null) == 2)) {
            echo " checked";
        }
        echo "/> <label for=\"input-rating-2\" class=\"form-check-label\">2</label>
                </div>
                <div class=\"form-check form-check-inline\">
                  <input type=\"radio\" name=\"rating\" value=\"3\" id=\"input-rating-3\" class=\"form-check-input\"";
        // line 56
        if ((($context["rating"] ?? null) == 3)) {
            echo " checked";
        }
        echo "/> <label for=\"input-rating-3\" class=\"form-check-label\">3</label>
                </div>
                <div class=\"form-check form-check-inline\">
                  <input type=\"radio\" name=\"rating\" value=\"4\" id=\"input-rating-4\" class=\"form-check-input\"";
        // line 59
        if ((($context["rating"] ?? null) == 4)) {
            echo " checked";
        }
        echo "/> <label for=\"input-rating-4\" class=\"form-check-label\">4</label>
                </div>
                <div class=\"form-check form-check-inline\">
                  <input type=\"radio\" name=\"rating\" value=\"5\" id=\"input-rating-5\" class=\"form-check-input\"";
        // line 62
        if ((($context["rating"] ?? null) == 5)) {
            echo " checked";
        }
        echo "/> <label for=\"input-rating-5\" class=\"form-check-label\">5</label>
                </div>
              </div>
              <div id=\"error-rating\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-date-added\" class=\"col-sm-2 col-form-label\">";
        // line 69
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
            <div class=\"col-sm-10 col-md-4\">
              <div class=\"input-group\">
                <input type=\"text\" name=\"date_added\" value=\"";
        // line 72
        echo ($context["date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" id=\"input-date-added\" class=\"form-control datetime\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 78
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 82
        if (($context["status"] ?? null)) {
            echo " checked";
        }
        echo "/>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"review_id\" value=\"";
        // line 86
        echo ($context["review_id"] ?? null);
        echo "\" id=\"input-review-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-product').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product|autocomplete&user_token=";
        // line 96
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-product-id').val(item['value']);
    }
});
//--></script>
";
        // line 113
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/catalog/review_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 113,  246 => 96,  233 => 86,  224 => 82,  217 => 78,  206 => 72,  200 => 69,  188 => 62,  180 => 59,  172 => 56,  164 => 53,  156 => 50,  149 => 46,  139 => 41,  134 => 39,  126 => 34,  121 => 32,  115 => 31,  110 => 29,  100 => 24,  95 => 22,  90 => 20,  85 => 18,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/catalog/review_form.twig", "/opt/lampp/htdocs/moh/upload/admin/view/template/catalog/review_form.twig");
    }
}
