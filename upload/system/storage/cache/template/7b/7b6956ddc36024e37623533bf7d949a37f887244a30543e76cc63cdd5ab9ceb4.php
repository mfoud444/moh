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

/* extension/opencart/catalog/view/template/module/account.twig */
class __TwigTemplate_a7050782029b484665fffc41ad35c578a8fe1d93227063c9aaf269967bd6065a extends Template
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
        echo "<div class=\"flex flex-col hidden md:flex\">
  ";
        // line 2
        if ( !($context["logged"] ?? null)) {
            // line 3
            echo "  <a href=\"";
            echo ($context["login"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
  <a href=\"";
            // line 4
            echo ($context["register"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
  <a href=\"";
            // line 5
            echo ($context["forgotten"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_forgotten"] ?? null);
            echo "</a>
  ";
        }
        // line 7
        echo "  <a href=\"";
        echo ($context["account"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
  ";
        // line 8
        if (($context["logged"] ?? null)) {
            // line 9
            echo "  <a href=\"";
            echo ($context["edit"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_edit"] ?? null);
            echo "</a>
  <a href=\"";
            // line 10
            echo ($context["password"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
  ";
        }
        // line 12
        echo "  <a href=\"";
        echo ($context["address"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_address"] ?? null);
        echo "</a>
  <a href=\"";
        // line 13
        echo ($context["wishlist"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a>
  <a href=\"";
        // line 14
        echo ($context["order"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_order"] ?? null);
        echo "</a>
  ";
        // line 20
        echo "  <a href=\"";
        echo ($context["reward"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_reward"] ?? null);
        echo "</a>
  ";
        // line 22
        echo "  <a href=\"";
        echo ($context["transaction"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a>
  <a href=\"";
        // line 23
        echo ($context["newsletter"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a>
  ";
        // line 24
        if (($context["logged"] ?? null)) {
            // line 25
            echo "  <a href=\"";
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
  ";
        }
        // line 27
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/module/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 27,  126 => 25,  124 => 24,  118 => 23,  111 => 22,  104 => 20,  98 => 14,  92 => 13,  85 => 12,  78 => 10,  71 => 9,  69 => 8,  62 => 7,  55 => 5,  49 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/module/account.twig", "/opt/lampp/htdocs/moh/upload/extension/opencart/catalog/view/template/module/account.twig");
    }
}
