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

/* catalog/view/template/common/menu.twig */
class __TwigTemplate_91d4d2844b3abfa23cc9e5610dbee19f44d816ab825dcc6180bb0c3f3201f10d extends Template
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
        echo "
";
        // line 2
        if (($context["categories"] ?? null)) {
            // line 3
            echo "<div class=\"\">
  ";
            // line 7
            echo "
  <ul class=\"flex flex-col md:items-center md:flex-row gap-2\">



    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo " ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "
    <div x-data=\"{ isOpen: false }\" class=\"relative inline-block\">
      <!-- Dropdown toggle button -->
      <button
        @click=\"isOpen = !isOpen\"
        class=\"w-full md:w-28  gap-1 p-2 flex md:justify-center items-center text-gray-700  border  rounded-full\"
      >
        <svg
          class=\"w-5 h-5 text-gray-800 dark:text-white\"
          xmlns=\"http://www.w3.org/2000/svg\"
          viewBox=\"0 0 20 20\"
          fill=\"currentColor\"
        >
          <path
 3           fill-rule=\"evenodd\"
            d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\"
            clip-rule=\"evenodd\"
          />
        </svg>
        <div>";
                    // line 32
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 32);
                    echo "</div>
      </button>

      <!-- Dropdown menu -->
      <div
        x-show=\"isOpen\"
        @click.away=\"isOpen = false\"
       
        class=\"absolute right-0 z-20 w-48 py-2 mt-2 bg-white rounded-md shadow-xl dark:bg-gray-800\"
      >
        ";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 42), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 42)) / twig_round(twig_get_attribute($this->env, $this->source,                     // line 43
$context["category"], "column", [], "any", false, false, false, 43), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        echo " ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 44
                            echo "        <a
          href=\"";
                            // line 45
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 45);
                            echo "\"
          class=\"block px-4 py-3 text-sm capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white\"
        >
          ";
                            // line 48
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 48);
                            echo "
        </a>

        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 51
                        echo " ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 52
                    echo "
        <a href=\"";
                    // line 53
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 53);
                    echo "\" class=\"text-center text-blue-900\"
          >";
                    // line 54
                    echo ($context["text_all"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 54);
                    echo "</a
        >
      </div>
    </div>

    ";
                } else {
                    // line 60
                    echo "    <li class=\"text-md font-bold\">
      <a href=\"";
                    // line 61
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 61);
                    echo "\" class=\"nav-link\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 61);
                    echo "</a>
    </li>
    ";
                }
                // line 63
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "  </ul>
</div>
";
        }
        // line 67
        echo "















<!-- 
";
        // line 115
        echo " -->
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 115,  166 => 67,  161 => 64,  155 => 63,  147 => 61,  144 => 60,  133 => 54,  129 => 53,  126 => 52,  120 => 51,  110 => 48,  104 => 45,  101 => 44,  94 => 43,  92 => 42,  79 => 32,  58 => 13,  52 => 12,  45 => 7,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/menu.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/common/menu.twig");
    }
}
