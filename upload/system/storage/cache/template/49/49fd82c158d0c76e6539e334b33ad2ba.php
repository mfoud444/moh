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

/* catalog/view/template/mail/order_alert.twig */
class __TwigTemplate_5eb8575a7b81ba6ba8637cef0540844b extends Template
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
        echo ($context["text_received"] ?? null);
        echo "<br/>
<br/>
";
        // line 3
        echo ($context["text_order_id"] ?? null);
        echo " ";
        echo ($context["order_id"] ?? null);
        echo "<br/>
";
        // line 4
        echo ($context["text_date_added"] ?? null);
        echo " ";
        echo ($context["date_added"] ?? null);
        echo "<br/>
";
        // line 5
        echo ($context["text_order_status"] ?? null);
        echo " ";
        echo ($context["order_status"] ?? null);
        echo "<br/>
<br/>
";
        // line 7
        echo ($context["text_product"] ?? null);
        echo "<br/>
<br/>
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 10);
            echo "x ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
            echo " (";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 10);
            echo ") ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 10);
            echo "<br/>
";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 11)) {
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 12));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 13
                    echo "\t- ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 13);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 13);
                    echo "<br/>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        if (($context["vouchers"] ?? null)) {
            // line 18
            echo "<br/>
";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 20
                echo "1x ";
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 20);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 20);
                echo "<br/>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 23
        echo "<br/>
";
        // line 24
        echo ($context["text_total"] ?? null);
        echo "<br/>
<br/>
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 27);
            echo ": ";
            echo twig_get_attribute($this->env, $this->source, $context["total"], "value", [], "any", false, false, false, 27);
            echo "<br/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "<br/>
";
        // line 30
        if (($context["comment"] ?? null)) {
            // line 31
            echo ($context["text_comment"] ?? null);
            echo "<br/>
<br/>
";
            // line 33
            echo ($context["comment"] ?? null);
            echo "<br/>
";
        }
        // line 35
        echo "<br/>
";
        // line 36
        echo ($context["store"] ?? null);
        echo "<br/>
";
        // line 37
        echo ($context["store_url"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/view/template/mail/order_alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 37,  163 => 36,  160 => 35,  155 => 33,  150 => 31,  148 => 30,  145 => 29,  135 => 27,  131 => 26,  126 => 24,  123 => 23,  111 => 20,  107 => 19,  104 => 18,  102 => 17,  86 => 13,  82 => 12,  80 => 11,  70 => 10,  66 => 9,  61 => 7,  54 => 5,  48 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/mail/order_alert.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/mail/order_alert.twig");
    }
}
