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

/* catalog/view/template/common/pagination.twig */
class __TwigTemplate_24a264f51abc7be6364c21739ee4c40a extends Template
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
        echo "<div class=\"pagination flex flex-row-reverse gap-4  justify-end \">
  ";
        // line 2
        if (($context["first"] ?? null)) {
            // line 3
            echo "   <a href=\"";
            echo ($context["first"] ?? null);
            echo "\" class=\"page-item \">
   <svg class=\"h-6 w-6\" xmlns=\"http://www.w3.org/2000/svg\" shape-rendering=\"geometricPrecision\" text-rendering=\"geometricPrecision\"
    image-rendering=\"optimizeQuality\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" viewBox=\"0 0 512 512\">
    <path fill-rule=\"nonzero\"
        d=\"M256.01 512c-70.68 0-134.7-28.66-181.03-74.98C28.66 390.7 0 326.69 0 256.01c0-70.69 28.66-134.7 74.98-181.03C121.31 28.66 185.33 0 256.01 0S390.7 28.66 437.02 74.98C483.34 121.31 512 185.33 512 256.01s-28.66 134.69-74.98 181.01C390.7 483.34 326.69 512 256.01 512zm-11.55-242.2c-10.29-9.17-10.01-17.33 0-26.62l82.3-76.78c11.21-7.03 22.9-2.9 22.59 11.73l-.43 154.47c-.98 15.86-10.02 20.21-23.38 12.87l-81.08-75.67zm-41.69 78.99h-29.85c-5.65 0-10.27-4.65-10.27-10.28V173.47c0-5.62 4.65-10.27 10.27-10.27h29.85c5.63 0 10.28 4.62 10.28 10.27v165.04c0 5.66-4.62 10.28-10.28 10.28zM99.26 412.75c40.1 40.1 95.54 64.92 156.75 64.92 61.21 0 116.63-24.82 156.74-64.92 40.1-40.11 64.92-95.53 64.92-156.74 0-61.21-24.82-116.65-64.92-156.76-40.11-40.1-95.53-64.92-156.74-64.92-61.21 0-116.65 24.82-156.75 64.92-40.11 40.11-64.93 95.53-64.93 156.76 0 61.21 24.82 116.63 64.93 156.74z\" />
</svg>
   </a>
  ";
        }
        // line 11
        echo "  ";
        if (($context["prev"] ?? null)) {
            // line 12
            echo "   <a href=\"";
            echo ($context["prev"] ?? null);
            echo "\" class=\"page-item \">
   
   <svg class=\"h-6 w-6\" xmlns=\"http://www.w3.org/2000/svg\" shape-rendering=\"geometricPrecision\" text-rendering=\"geometricPrecision\"
    image-rendering=\"optimizeQuality\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" viewBox=\"0 0 512 512\">
    <path
        d=\"M0 256c0 70.69 28.66 134.7 74.98 181.02C121.3 483.34 185.32 512 256 512c70.69 0 134.7-28.66 181.02-74.98C483.34 390.7 512 326.69 512 256c0-70.69-28.66-134.69-74.98-181.02C390.7 28.66 326.69 0 256 0 185.32 0 121.3 28.66 74.98 74.98 28.66 121.31 0 185.31 0 256zm227.91-109.04L336.94 256 227.91 365.04l-40.52-40.51 68.51-68.52-68.52-68.52 40.53-40.53z\" />
</svg>
   </a>
  ";
        }
        // line 21
        echo "  
  ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 23
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 23) == ($context["page"] ?? null))) {
                // line 24
                echo "      <div class=\"page-item bg-primary-400\">";
                echo twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 24);
                echo "</div>
    ";
            } else {
                // line 26
                echo "     <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 26);
                echo "\" class=\"page-item \">";
                echo twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 26);
                echo "</a>
    ";
            }
            // line 28
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
  ";
        // line 30
        if (($context["next"] ?? null)) {
            // line 31
            echo "   <a href=\"";
            echo ($context["next"] ?? null);
            echo "\" class=\"page-item \">
    <?xml version=\"1.0\" encoding=\"utf-8\"?><svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\"
    xmlns:xlink=\"http://www.w3.org/1999/xlink\" class=\"h-6 w-6\" x=\"0px\" y=\"0px\" viewBox=\"0 0 122.88 122.88\"
    style=\"enable-background:new 0 0 122.88 122.88\" xml:space=\"preserve\">
    <g>
        <path
            d=\"M37.95,4.66C45.19,1.66,53.13,0,61.44,0c16.96,0,32.33,6.88,43.44,18c5.66,5.66,10.22,12.43,13.34,19.95 c3,7.24,4.66,15.18,4.66,23.49c0,16.96-6.88,32.33-18,43.44c-5.66,5.66-12.43,10.22-19.95,13.34c-7.24,3-15.18,4.66-23.49,4.66 c-8.31,0-16.25-1.66-23.49-4.66c-7.53-3.12-14.29-7.68-19.95-13.34C12.34,99.22,7.77,92.46,4.66,84.93C1.66,77.69,0,69.75,0,61.44 c0-8.31,1.66-16.25,4.66-23.49C7.77,30.42,12.34,23.66,18,18C23.65,12.34,30.42,7.77,37.95,4.66L37.95,4.66z M43.11,67.76 c-3.54-0.03-6.38-2.92-6.35-6.46c0.03-3.54,2.92-6.38,6.46-6.35l21.63,0.13l-7.82-7.95c-2.48-2.52-2.45-6.58,0.07-9.05 c2.52-2.48,6.57-2.45,9.05,0.08l18.67,18.97c2.45,2.5,2.45,6.49,0,8.98L66.52,84.72c-2.48,2.52-6.53,2.55-9.05,0.08 c-2.52-2.48-2.55-6.53-0.08-9.05l7.73-7.85L43.11,67.76L43.11,67.76z M42.86,16.55c-5.93,2.46-11.28,6.07-15.76,10.55 c-4.48,4.48-8.09,9.83-10.55,15.76c-2.37,5.71-3.67,11.99-3.67,18.58c0,6.59,1.31,12.86,3.67,18.58 c2.46,5.93,6.07,11.28,10.55,15.76c4.48,4.48,9.83,8.09,15.76,10.55c5.72,2.37,11.99,3.67,18.58,3.67c6.59,0,12.86-1.31,18.58-3.67 c5.93-2.46,11.28-6.07,15.76-10.55c4.48-4.48,8.09-9.82,10.55-15.76c2.37-5.71,3.67-11.99,3.67-18.58c0-6.59-1.31-12.86-3.67-18.58 c-2.46-5.93-6.07-11.28-10.55-15.76c-4.48-4.48-9.83-8.09-15.76-10.55c-5.71-2.37-11.99-3.67-18.58-3.67S48.58,14.19,42.86,16.55 L42.86,16.55z\" />
    </g>
</svg>
    </a>
  ";
        }
        // line 42
        echo "

  ";
        // line 44
        if (($context["last"] ?? null)) {
            // line 45
            echo "   <a href=\"";
            echo ($context["last"] ?? null);
            echo "\" class=\"page-item \">
    
    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" shape-rendering=\"geometricPrecision\" text-rendering=\"geometricPrecision\"
    image-rendering=\"optimizeQuality\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" viewBox=\"0 0 512 512\">
    <path fill-rule=\"nonzero\"
        d=\"M255.99 0c70.68 0 134.7 28.66 181.02 74.98C483.33 121.3 512 185.31 512 256c0 70.68-28.67 134.69-74.99 181.01C390.69 483.33 326.67 512 255.99 512S121.3 483.33 74.98 437.01C28.66 390.69 0 326.68 0 256c0-70.67 28.66-134.7 74.98-181.02C121.3 28.66 185.31 0 255.99 0zm53.25 163.2h29.85c5.65 0 10.27 4.66 10.27 10.28v165.04c0 5.62-4.65 10.28-10.27 10.28h-29.85c-5.63 0-10.28-4.63-10.28-10.28V173.48c0-5.65 4.63-10.28 10.28-10.28zm-41.69 106.6c10.29-9.17 10.01-17.33 0-26.62l-82.3-76.78c-11.21-7.03-22.9-2.9-22.59 11.73l.44 154.47c.97 15.86 10.01 20.21 23.37 12.87l81.08-75.67zM412.74 99.25c-40.1-40.1-95.54-64.92-156.75-64.92-61.21 0-116.63 24.82-156.74 64.92-40.1 40.11-64.92 95.54-64.92 156.75 0 61.22 24.82 116.64 64.92 156.74 40.11 40.11 95.53 64.93 156.74 64.93 61.21 0 116.65-24.82 156.75-64.93 40.11-40.1 64.93-95.52 64.93-156.74 0-61.22-24.82-116.64-64.93-156.75z\" />
</svg>
    </a>
  ";
        }
        // line 54
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/pagination.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 54,  126 => 45,  124 => 44,  120 => 42,  105 => 31,  103 => 30,  100 => 29,  94 => 28,  86 => 26,  80 => 24,  77 => 23,  73 => 22,  70 => 21,  57 => 12,  54 => 11,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/pagination.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/common/pagination.twig");
    }
}
