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

/* catalog/view/template/product/review_list.twig */
class __TwigTemplate_11748d5d0a13912a23d5ee23d4c5db1bcbe6e2df753dda3190a3895d120ea28a extends Template
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
        echo "<div class=\"\">
";
        // line 2
        if (($context["reviews"] ?? null)) {
            // line 3
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 4
                echo "    <table class=\"mb-4  table-auto   border-2 border-solid w-full \">
      <tr class=\"flex items-center px-4 rounded-b-lg   bg-primary-200 justify-between w-full\">
        <td class=\"\">
        <div class=\"flex flex-col\">
      <div class=\"flex flex-row-reverse justify-end gap-2 items-center\">
        <h1>";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 9);
                echo "</h1>
        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z\" />
</svg>
        </div>
        <div>";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 14);
                echo "</div>
</div>
        
        
        </td >
        <td class=\"text-end\">
        
         <div class=\"flex flex-row-reverse justify-center items-center \">
          ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 23
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 23) < $context["i"])) {
                        // line 24
                        echo "          <svg
            xmlns=\"http://www.w3.org/2000/svg\"
            class=\"w-6 h-6\"
            fill=\"none\"
            viewBox=\"0 0 24 24\"
            stroke-width=\"1.5\"
            stroke=\"currentColor\"
          >
            <path
              stroke-linecap=\"round\"
              stroke-linejoin=\"round\"
              d=\"M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z\"
            />
          </svg>

         

            ";
                    } else {
                        // line 42
                        echo "               <svg
            xmlns=\"http://www.w3.org/2000/svg\"
            class=\"w-6 h-6 text-yellow-300 fill-yellow-300\"
            fill=\"none\"
            viewBox=\"0 0 24 24\"
            stroke-width=\"1.5\"
            stroke=\"currentColor\"
          >
            <path
              stroke-linecap=\"round\"
              stroke-linejoin=\"round\"
              d=\"M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z\"
            />
          </svg>

          
               ";
                    }
                    // line 59
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "   
          </div>

        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"px-2\"><p class=\" overflow-auto max-h-32\">";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 65);
                echo "</p>
     
        </td>
      </tr>
    </table>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "  <div class=\"pre\">";
            echo ($context["pagination"] ?? null);
            echo "</div>
";
        } else {
            // line 73
            echo "  <p class=\"text-center\">";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
";
        }
        // line 75
        echo "</div>  



 



















";
        // line 127
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/review_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 127,  156 => 75,  150 => 73,  144 => 71,  132 => 65,  119 => 59,  100 => 42,  80 => 24,  77 => 23,  73 => 22,  62 => 14,  54 => 9,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/review_list.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/product/review_list.twig");
    }
}
