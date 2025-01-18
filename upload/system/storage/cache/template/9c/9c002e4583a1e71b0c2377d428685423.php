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

/* admin/view/template/marketing/affiliate_report.twig */
class __TwigTemplate_9b4b7da11a02f74fc11878e62cc36b08 extends Template
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
\t<table class=\"table table-bordered table-hover\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<td class=\"text-start\">";
        // line 5
        echo ($context["column_ip"] ?? null);
        echo "</td>
\t\t\t\t<td class=\"text-end\">";
        // line 6
        echo ($context["column_account"] ?? null);
        echo "</td>
\t\t\t\t<td class=\"text-start\">";
        // line 7
        echo ($context["column_store"] ?? null);
        echo "</td>
\t\t\t\t<td class=\"text-start\">";
        // line 8
        echo ($context["column_country"] ?? null);
        echo "</td>
\t\t\t\t<td class=\"text-start\">";
        // line 9
        echo ($context["column_date_added"] ?? null);
        echo "</td>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 13
        if (($context["reports"] ?? null)) {
            // line 14
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reports"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                // line 15
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-start\"><a href=\"http://www.geoiptool.com/en/?IP=";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["report"], "ip", [], "any", false, false, false, 16);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["report"], "ip", [], "any", false, false, false, 16);
                echo "</a></td>
\t\t\t\t\t\t<td class=\"text-end\"><a href=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["report"], "filter_ip", [], "any", false, false, false, 17);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["report"], "account", [], "any", false, false, false, 17);
                echo "</a></td>
\t\t\t\t\t\t<td class=\"text-start\">";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["report"], "store", [], "any", false, false, false, 18);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-start\">";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["report"], "country", [], "any", false, false, false, 19);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-start\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["report"], "date_added", [], "any", false, false, false, 20);
                echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t\t";
        } else {
            // line 24
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\" colspan=\"5\">";
            // line 25
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 28
        echo "\t\t</tbody>
\t</table>
</div>
<div class=\"row\">
\t<div class=\"col-sm-6 text-start\">";
        // line 32
        echo ($context["pagination"] ?? null);
        echo "</div>
\t<div class=\"col-sm-6 text-end\">";
        // line 33
        echo ($context["results"] ?? null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/marketing/affiliate_report.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 33,  123 => 32,  117 => 28,  111 => 25,  108 => 24,  105 => 23,  96 => 20,  92 => 19,  88 => 18,  82 => 17,  76 => 16,  73 => 15,  68 => 14,  66 => 13,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/marketing/affiliate_report.twig", "/opt/lampp/htdocs/moh/upload/admin/view/template/marketing/affiliate_report.twig");
    }
}
