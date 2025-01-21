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

/* catalog/view/template/common/footer.twig */
class __TwigTemplate_332c82ecce01256bf5c203a13f26610f4cc08954f634d0f18e3b73019a24fedc extends Template
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
        echo "</main>
<svg id=\"wave\" style=\"transform:rotate(0deg); transition: 0.3s\" viewBox=\"0 0 1440 230\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><defs><linearGradient id=\"sw-gradient-0\" x1=\"0\" x2=\"0\" y1=\"1\" y2=\"0\"><stop stop-color=\"rgba(126, 34, 206, 1)\" offset=\"0%\"></stop><stop stop-color=\"rgba(126, 34, 206, 1)\" offset=\"100%\"></stop></linearGradient></defs><path style=\"transform:translate(0, 0px); opacity:1\" fill=\"url(#sw-gradient-0)\" d=\"M0,46L40,49.8C80,54,160,61,240,88.2C320,115,400,161,480,164.8C560,169,640,130,720,130.3C800,130,880,169,960,161C1040,153,1120,100,1200,72.8C1280,46,1360,46,1440,57.5C1520,69,1600,92,1680,84.3C1760,77,1840,38,1920,23C2000,8,2080,15,2160,26.8C2240,38,2320,54,2400,69C2480,84,2560,100,2640,122.7C2720,146,2800,176,2880,191.7C2960,207,3040,207,3120,187.8C3200,169,3280,130,3360,122.7C3440,115,3520,138,3600,153.3C3680,169,3760,176,3840,172.5C3920,169,4000,153,4080,134.2C4160,115,4240,92,4320,103.5C4400,115,4480,161,4560,161C4640,161,4720,115,4800,99.7C4880,84,4960,100,5040,111.2C5120,123,5200,130,5280,118.8C5360,107,5440,77,5520,80.5C5600,84,5680,123,5720,141.8L5760,161L5760,230L5720,230C5680,230,5600,230,5520,230C5440,230,5360,230,5280,230C5200,230,5120,230,5040,230C4960,230,4880,230,4800,230C4720,230,4640,230,4560,230C4480,230,4400,230,4320,230C4240,230,4160,230,4080,230C4000,230,3920,230,3840,230C3760,230,3680,230,3600,230C3520,230,3440,230,3360,230C3280,230,3200,230,3120,230C3040,230,2960,230,2880,230C2800,230,2720,230,2640,230C2560,230,2480,230,2400,230C2320,230,2240,230,2160,230C2080,230,2000,230,1920,230C1840,230,1760,230,1680,230C1600,230,1520,230,1440,230C1360,230,1280,230,1200,230C1120,230,1040,230,960,230C880,230,800,230,720,230C640,230,560,230,480,230C400,230,320,230,240,230C160,230,80,230,40,230L0,230Z\"></path><defs><linearGradient id=\"sw-gradient-1\" x1=\"0\" x2=\"0\" y1=\"1\" y2=\"0\"><stop stop-color=\"rgba(107, 33, 168, 1)\" offset=\"0%\"></stop><stop stop-color=\"rgba(88, 28, 135, 1)\" offset=\"100%\"></stop></linearGradient></defs><path style=\"transform:translate(0, 50px); opacity:0.9\" fill=\"url(#sw-gradient-1)\" d=\"M0,46L40,69C80,92,160,138,240,130.3C320,123,400,61,480,61.3C560,61,640,123,720,122.7C800,123,880,61,960,46C1040,31,1120,61,1200,69C1280,77,1360,61,1440,72.8C1520,84,1600,123,1680,118.8C1760,115,1840,69,1920,46C2000,23,2080,23,2160,42.2C2240,61,2320,100,2400,103.5C2480,107,2560,77,2640,61.3C2720,46,2800,46,2880,38.3C2960,31,3040,15,3120,38.3C3200,61,3280,123,3360,153.3C3440,184,3520,184,3600,164.8C3680,146,3760,107,3840,80.5C3920,54,4000,38,4080,26.8C4160,15,4240,8,4320,23C4400,38,4480,77,4560,84.3C4640,92,4720,69,4800,72.8C4880,77,4960,107,5040,134.2C5120,161,5200,184,5280,164.8C5360,146,5440,84,5520,84.3C5600,84,5680,146,5720,176.3L5760,207L5760,230L5720,230C5680,230,5600,230,5520,230C5440,230,5360,230,5280,230C5200,230,5120,230,5040,230C4960,230,4880,230,4800,230C4720,230,4640,230,4560,230C4480,230,4400,230,4320,230C4240,230,4160,230,4080,230C4000,230,3920,230,3840,230C3760,230,3680,230,3600,230C3520,230,3440,230,3360,230C3280,230,3200,230,3120,230C3040,230,2960,230,2880,230C2800,230,2720,230,2640,230C2560,230,2480,230,2400,230C2320,230,2240,230,2160,230C2080,230,2000,230,1920,230C1840,230,1760,230,1680,230C1600,230,1520,230,1440,230C1360,230,1280,230,1200,230C1120,230,1040,230,960,230C880,230,800,230,720,230C640,230,560,230,480,230C400,230,320,230,240,230C160,230,80,230,40,230L0,230Z\"></path></svg>


<footer class=\"px-4 text-white\" style=\"background:rgba(107, 33, 168, 1)\">

\t<!-- ";
        // line 34
        echo " -->

\t<!-- ";
        // line 56
        echo " -->


\t\t<div class=\"container   flex flex-col justify-between  mx-auto space-y-8 lg:flex-row lg:space-y-0\">
\t\t\t<div class=\"lg:w-1/3\">
\t\t\t\t<a rel=\"noopener noreferrer\" href=\"#\" class=\"flex justify-center space-x-3 lg:justify-start\">
\t\t\t\t\t<div class=\"flex items-center justify-center w-12 h-12 rounded-full dark:bg-violet-400\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 32 32\" fill=\"currentColor\"
\t\t\t\t\t\t\tclass=\"flex-shrink-0 w-5 h-5 rounded-full dark:text-gray-900\">
\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\td=\"M18.266 26.068l7.839-7.854 4.469 4.479c1.859 1.859 1.859 4.875 0 6.734l-1.104 1.104c-1.859 1.865-4.875 1.865-6.734 0zM30.563 2.531l-1.109-1.104c-1.859-1.859-4.875-1.859-6.734 0l-6.719 6.734-6.734-6.734c-1.859-1.859-4.875-1.859-6.734 0l-1.104 1.104c-1.859 1.859-1.859 4.875 0 6.734l6.734 6.734-6.734 6.734c-1.859 1.859-1.859 4.875 0 6.734l1.104 1.104c1.859 1.859 4.875 1.859 6.734 0l21.307-21.307c1.859-1.859 1.859-4.875 0-6.734z\">
\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"self-center text-3xl font-semibold\">

\t\t\t\t\t\tمتجر خيال للعطور
\t\t\t\t\t</span>

\t\t\t\t\t

\t\t\t\t
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"grid grid-cols-2  text-lg 
\t\t\t\t\t\t gap-x-6 gap-y-8  lg:w-2/3 sm:grid-cols-4\">
\t\t\t\t<div class=\" \">
\t\t\t\t\t<h3 class=\"tracking-wide text-xl uppercase font-bold dark:text-gray-50\">";
        // line 83
        echo ($context["text_account"] ?? null);
        echo "</h3>
\t\t\t\t\t<ul class=\"pr-4\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a rel=\"noopener noreferrer\" href=\"";
        // line 86
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a rel=\"noopener noreferrer\" href=\"";
        // line 89
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a rel=\"noopener noreferrer\" href=\"";
        // line 92
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a rel=\"noopener noreferrer\" href=\"";
        // line 95
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t";
        // line 100
        if (($context["informations"] ?? null)) {
            // line 101
            echo "\t\t\t\t<div class=\" \">
\t\t\t\t\t<h3 class=\"uppercase font-bold dark:text-gray-50\">";
            // line 102
            echo ($context["text_information"] ?? null);
            echo "</h3>
\t\t\t\t\t<ul class=\"pr-4\">
\t\t\t\t\t\t";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 105
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a rel=\"noopener noreferrer\" href=\"";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 106);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 106);
                echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 112
        echo "

\t\t\t\t<div class=\"\">
\t\t\t\t\t<h3 class=\"tracking-wide uppercase font-bold dark:text-gray-50\">";
        // line 115
        echo ($context["text_service"] ?? null);
        echo "</h3>
\t\t\t\t\t<ul class=\"pr-4\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a rel=\"noopener noreferrer\" href=\"";
        // line 118
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 123
        echo "\t\t\t\t\t\t";
        // line 128
        echo " 
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"\">
\t\t\t\t\t<h3 class=\"uppercase font-bold dark:text-gray-50\">";
        // line 132
        echo ($context["text_extra"] ?? null);
        echo "</h3>
\t\t\t\t\t<ul class=\"pr-4 \">
\t\t\t\t\t<!--";
        // line 144
        echo " -->
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a rel=\"noopener noreferrer\" href=\"";
        // line 146
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t

\t\t\t</div>
\t\t</div>
\t\t<div class=\"py-4 mt-4 text-[1.1rem] text-center dark:text-gray-400\">";
        // line 155
        echo ($context["powered"] ?? null);
        echo "</div>
</footer>




 ";
        // line 209
        echo " 


";
        // line 212
        echo ($context["cookie"] ?? null);
        echo "
<script src=\"";
        // line 213
        echo ($context["bootstrap"] ?? null);
        echo "\" type=\"text/javascript\"></script>
";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 215
            echo "<script src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 215);
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 216,  226 => 215,  222 => 214,  218 => 213,  214 => 212,  209 => 209,  200 => 155,  186 => 146,  182 => 144,  177 => 132,  171 => 128,  169 => 123,  162 => 118,  156 => 115,  151 => 112,  146 => 109,  135 => 106,  132 => 105,  128 => 104,  123 => 102,  120 => 101,  118 => 100,  108 => 95,  100 => 92,  92 => 89,  84 => 86,  78 => 83,  49 => 56,  45 => 34,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/footer.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/common/footer.twig");
    }
}
