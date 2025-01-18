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

/* admin/view/template/common/column_left.twig */
class __TwigTemplate_c14761acf80bb37bcc8bba85d2001542 extends Template
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
        echo "<nav id=\"column-left\" class=\"flex-none hidden md:block bg-red-200  w-64 p-2 md:p-4 font-bold text-[1rem]  \">
\t<!-- <div id=\"navigation\"><span class=\"fa-solid fa-bars px-2 py-4\"></span> ";
        // line 2
        echo ($context["text_navigation"] ?? null);
        echo "</div> -->
\t<ul id=\"menu\" class=\"flex  flex-col gap-2\">
\t\t";
        // line 4
        $context["i"] = 0;
        // line 5
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 6
            echo "\t\t\t<li id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 6);
            echo "\" x-data=\"{ isOpen: false }\">
\t\t\t\t";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 7)) {
                // line 8
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 8);
                echo "\" @click=\"isOpen = !isOpen\" class=\"flex  gap-2 rounded-lg  pr-8 py-2 flex-row bg-primary-900 hover:bg-primary-300 text-white cursor-pointer   items-center\"><i class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 8);
                echo "\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 8);
                echo "</a>
\t\t\t\t";
            } else {
                // line 10
                echo "\t\t\t\t\t<div @click=\"isOpen = !isOpen\" class=\" flex gap-2 rounded-lg bg-purple-900 p-2  hover:bg-primary-300 text-white cursor-pointer  flex-row-reverse justify-end items-center \">
\t\t\t\t\t\t<div class=\"flex gap-2 items-center\"><i class=\"";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 11);
                echo "\"></i>";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 11);
                echo "</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-4 h-4\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 19.5L8.25 12l7.5-7.5\" />
\t\t\t\t\t\t  </svg>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 18)) {
                // line 19
                echo "\t\t\t\t\t<ul id=\"collapse-";
                echo ($context["i"] ?? null);
                echo "\" class=\"px-4 py-2 flex flex-col gap-2\"  x-show=\"isOpen\" 
\t\t\t\t\t@click.away=\"isOpen = false\"
\t\t\t\t\tx-transition:enter=\"transition ease-out duration-100\"
\t\t\t\t\tx-transition:enter-start=\"opacity-0 scale-90\"
\t\t\t\t\tx-transition:enter-end=\"opacity-100 scale-100\"
\t\t\t\t\tx-transition:leave=\"transition ease-in duration-100\"
\t\t\t\t\tx-transition:leave-start=\"opacity-100 scale-100\"
\t\t\t\t\tx-transition:leave-end=\"opacity-0 scale-90\" >
\t\t\t\t\t\t";
                // line 27
                $context["j"] = 0;
                // line 28
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["children_1"]) {
                    // line 29
                    echo "\t\t\t\t\t\t\t<li x-data=\"{ isOpen: false }\" class=\"text-white bg-purple-700  rounded-lg \">
\t\t\t\t\t\t\t\t";
                    // line 30
                    if (twig_get_attribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 30)) {
                        // line 31
                        echo "\t\t\t\t\t\t\t\t\t<a @click=\"isOpen = !isOpen\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 31);
                        echo "\" class=\"pr-4 p-2 block hover:bg-yellow-300  \">";
                        echo twig_get_attribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 31);
                        echo "</a>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 33
                        echo "\t\t\t\t\t\t\t\t\t<div @click=\"isOpen = !isOpen\" class=\" cursor-pointer p-2 hover:bg-yellow-300 flex flex-row-reverse justify-end  items-center \">";
                        echo twig_get_attribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 33);
                        echo " 
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-4 h-4\">
\t\t\t\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 19.5L8.25 12l7.5-7.5\" />
\t\t\t\t\t\t\t\t\t  </svg>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 39
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["children_1"], "children", [], "any", false, false, false, 39)) {
                        // line 40
                        echo "\t\t\t\t\t\t\t\t\t<ul id=\"collapse-";
                        echo ($context["i"] ?? null);
                        echo "-";
                        echo ($context["j"] ?? null);
                        echo "\" class=\"pr-8 px-4 py-2 flex flex-col gap-2\" x-show=\"isOpen\" 
\t\t\t\t\t\t\t\t\t@click.away=\"isOpen = false\"
\t\t\t\t\t\t\t\t\tx-transition:enter=\"transition ease-out duration-100\"
\t\t\t\t\t\t\t\t\tx-transition:enter-start=\"opacity-0 scale-90\"
\t\t\t\t\t\t\t\t\tx-transition:enter-end=\"opacity-100 scale-100\"
\t\t\t\t\t\t\t\t\tx-transition:leave=\"transition ease-in duration-100\"
\t\t\t\t\t\t\t\t\tx-transition:leave-start=\"opacity-100 scale-100\"
\t\t\t\t\t\t\t\t\tx-transition:leave-end=\"opacity-0 scale-90\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 48
                        $context["k"] = 0;
                        // line 49
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["children_1"], "children", [], "any", false, false, false, 49));
                        foreach ($context['_seq'] as $context["_key"] => $context["children_2"]) {
                            // line 50
                            echo "\t\t\t\t\t\t\t\t\t\t\t<li  class=\"text-white bg-purple-500 p-1   rounded-lg\">";
                            if (twig_get_attribute($this->env, $this->source, $context["children_2"], "href", [], "any", false, false, false, 50)) {
                                // line 51
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["children_2"], "href", [], "any", false, false, false, 51);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["children_2"], "name", [], "any", false, false, false, 51);
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 53
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#collapse-";
                                echo ($context["i"] ?? null);
                                echo "-";
                                echo ($context["j"] ?? null);
                                echo "-";
                                echo ($context["k"] ?? null);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["children_2"], "name", [], "any", false, false, false, 53);
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 55
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["children_2"], "children", [], "any", false, false, false, 55)) {
                                // line 56
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<ul id=\"collapse-";
                                echo ($context["i"] ?? null);
                                echo "-";
                                echo ($context["j"] ?? null);
                                echo "-";
                                echo ($context["k"] ?? null);
                                echo "\" class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 57
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["children_2"], "children", [], "any", false, false, false, 57));
                                foreach ($context['_seq'] as $context["_key"] => $context["children_3"]) {
                                    // line 58
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["children_3"], "href", [], "any", false, false, false, 58);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["children_3"], "name", [], "any", false, false, false, 58);
                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_3'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 60
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 61
                            echo "</li>
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 62
                            $context["k"] = (($context["k"] ?? null) + 1);
                            // line 63
                            echo "\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 64
                        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
                    }
                    // line 66
                    echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    // line 67
                    $context["j"] = (($context["j"] ?? null) + 1);
                    // line 68
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "\t\t\t\t\t</ul>
\t\t\t\t";
            }
            // line 71
            echo "\t\t\t</li>
\t\t\t";
            // line 72
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 73
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "\t</ul>

";
        // line 103
        echo "</nav>
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/common/column_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 103,  248 => 74,  242 => 73,  240 => 72,  237 => 71,  233 => 69,  227 => 68,  225 => 67,  222 => 66,  218 => 64,  212 => 63,  210 => 62,  207 => 61,  203 => 60,  192 => 58,  188 => 57,  179 => 56,  176 => 55,  164 => 53,  156 => 51,  153 => 50,  148 => 49,  146 => 48,  132 => 40,  129 => 39,  119 => 33,  111 => 31,  109 => 30,  106 => 29,  101 => 28,  99 => 27,  87 => 19,  84 => 18,  72 => 11,  69 => 10,  59 => 8,  57 => 7,  52 => 6,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/common/column_left.twig", "/opt/lampp/htdocs/moh/upload/admin/view/template/common/column_left.twig");
    }
}
