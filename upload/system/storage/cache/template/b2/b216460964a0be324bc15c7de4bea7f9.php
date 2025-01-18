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

/* catalog/view/template/account/reward.twig */
class __TwigTemplate_21fcf8b9123fe50bd170cd518b1ba540 extends Template
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
<div id=\"account-reward\" class=\"container my-2 md:my-4\">
  <div class=\"breadcrumb\">
    <a href=\"";
        // line 4
        echo ($context["home"] ?? null);
        echo "\">
      <svg
        xmlns=\"http://www.w3.org/2000/svg\"
        class=\"w-5 h-5 fill-secondary\"
        viewBox=\"0 0 20 20\"
        fill=\"currentColor\"
      >
        <path
          d=\"M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z\"
        />
      </svg>
    </a>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
            echo "    <a class=\"breadcrumb-child\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source,             // line 18
$context["breadcrumb"], "text", [], "any", false, false, false, 18);
            // line 19
            echo "</a>
    <span class=\"mx-2 dark:text-gray-300 rtl:-scale-x-100\">
      <svg
        xmlns=\"http://www.w3.org/2000/svg\"
        class=\"w-5 h-5 fill-secondary\"
        viewBox=\"0 0 20 20\"
        fill=\"currentColor\"
      >
        <path
          fill-rule=\"evenodd\"
          d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\"
          clip-rule=\"evenodd\"
        />
      </svg>
    </span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  </div>

  <div class=\"md:flex md:flex-row md:gap-4\">
    <div id=\"content\" class=\"mt-2 md:basis-2/3 flex flex-col gap-4\">
      ";
        // line 39
        echo ($context["content_top"] ?? null);
        echo "

      <h1 class=\"heading-title\">";
        // line 41
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <div class=\"text-xl flex gap-2 items-center\">
        <p>";
        // line 43
        echo ($context["text_total"] ?? null);
        echo "</p>
        <p class=\"px-4 bg-red-200 rounded-full\">";
        // line 44
        echo ($context["total"] ?? null);
        echo "</p>
      </div>

      <table class=\"border-collapse border border-slate-400\">
        <thead>
          <tr>
            <th class=\"text-center border border-slate-400\">
              ";
        // line 51
        echo ($context["column_date_added"] ?? null);
        echo "
            </th>
            <th class=\"text-center border border-slate-400\">
              ";
        // line 54
        echo ($context["column_description"] ?? null);
        echo "
            </th>
            <th class=\"text-center border border-slate-400\">
              ";
        // line 57
        echo ($context["column_points"] ?? null);
        echo "
            </th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 62
        if (($context["rewards"] ?? null)) {
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rewards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reward"]) {
                // line 63
                echo "          <tr>
            <td class=\"text-center border border-slate-400\">
              ";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["reward"], "date_added", [], "any", false, false, false, 65);
                echo "
            </td>
            <td class=\"text-center border border-slate-400\">
              ";
                // line 68
                if (twig_get_attribute($this->env, $this->source, $context["reward"], "order_id", [], "any", false, false, false, 68)) {
                    // line 69
                    echo "              <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["reward"], "href", [], "any", false, false, false, 69);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["reward"], "description", [], "any", false, false, false, 69);
                    echo "</a> ";
                } else {
                    // line 71
                    echo "              ";
                    echo twig_get_attribute($this->env, $this->source, $context["reward"], "description", [], "any", false, false, false, 71);
                    echo "
              ";
                }
                // line 73
                echo "            </td>
            <td class=\"text-center border border-slate-400\">
              ";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["reward"], "points", [], "any", false, false, false, 75);
                echo "
            </td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reward'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo " ";
        } else {
            // line 79
            echo "          <tr>
            <td class=\"text-center\" colspan=\"3\">";
            // line 80
            echo ($context["text_no_results"] ?? null);
            echo "</td>
          </tr>
          ";
        }
        // line 83
        echo "        </tbody>
      </table>
      ";
        // line 91
        echo "
      <a href=\"";
        // line 92
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>

      ";
        // line 94
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    <div class=\"md:basis-1/3\">";
        // line 96
        echo ($context["column_right"] ?? null);
        echo "</div>
  </div>
</div>
";
        // line 99
        echo ($context["footer"] ?? null);
        echo "

";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/reward.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 99,  215 => 96,  210 => 94,  203 => 92,  200 => 91,  196 => 83,  190 => 80,  187 => 79,  184 => 78,  174 => 75,  170 => 73,  164 => 71,  157 => 69,  155 => 68,  149 => 65,  145 => 63,  139 => 62,  131 => 57,  125 => 54,  119 => 51,  109 => 44,  105 => 43,  100 => 41,  95 => 39,  89 => 35,  68 => 19,  66 => 18,  62 => 17,  58 => 16,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/reward.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/account/reward.twig");
    }
}
