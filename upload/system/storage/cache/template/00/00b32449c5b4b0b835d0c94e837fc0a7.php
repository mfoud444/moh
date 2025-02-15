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

/* extension/opencart/admin/view/template/dashboard/sale_info.twig */
class __TwigTemplate_c7673bebe5532dae17e8af6c38b0a7ca extends Template
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
        echo "<a  href=\"";
        echo ($context["sale"] ?? null);
        echo "\" class=\" bg-primary-200 bg-purple-200 text-base font-bold p-4 rounded-lg tile tile-primary flex flex-col gap-2 \">

  <div class=\"tile-heading  flex gap-4 items-center justify-between \">
    <div class=\"flex flex-row-reverse items-center gap-2 text-xl\">
      ";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "
    
      <svg id=\"Layer_1\" data-name=\"Layer 1\" class=\"w-6 h-6\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 121.09 122.88\">
        <title>online-sales</title>
        <path
            d=\"M4,24.8a4.05,4.05,0,0,1,0-8.1H9.94a19,19,0,0,1,9.75,2.57C25.05,22.67,26,27.52,27.38,33h4.19v.51a41.08,41.08,0,0,0,.7,7.49H29.63l9.13,30.3h64.69L112,41h-.66a41.08,41.08,0,0,0,.69-7.49V33h5.1a4,4,0,0,1,4,4,5.26,5.26,0,0,1-.2,1.23L110.43,76.33a4,4,0,0,1-3.9,3.08H40.91c1.44,5.33,2.87,8.2,4.82,9.53,2.36,1.54,6.46,1.64,13.33,1.54h46.45a4,4,0,0,1,0,8H59.16c-8.51.1-13.74-.11-17.94-2.87s-6.57-7.8-8.82-16.72h0L18.66,31c0-.11,0-.11-.1-.21a7.15,7.15,0,0,0-3.08-4.61A10.36,10.36,0,0,0,9.84,24.8H4ZM95.78,51.86H87.11a51.6,51.6,0,0,1-4.87,6,73.19,73.19,0,0,1-5.79,5.48l.35-.06c.35-.05.71-.12,1.07-.19h0c1-.2,1.93-.44,2.87-.73a25.05,25.05,0,0,0,2.78-1c.93-.4,1.82-.83,2.68-1.29s1.7-1,2.5-1.51A27.55,27.55,0,0,0,91,56.78c.74-.6,1.44-1.25,2.13-1.93.53-.53,1-1.07,1.51-1.63s.76-.9,1.12-1.36ZM42.09,41.25,38.62,25.78h5l1.59,9.43h.11l1.77-9.43h4.85l1.84,9.35h.11l1.52-9.35h5L56.91,41.25H51.53l-2-8.3h-.14l-2,8.3Zm22.28,0L60.9,25.78h5l1.59,9.43h.1l1.78-9.43H74.2l1.85,9.35h.1l1.52-9.35h5L79.19,41.25H73.8l-2-8.3h-.14l-2,8.3Zm22.27,0L83.17,25.78h5l1.59,9.43h.11l1.77-9.43h4.85l1.84,9.35h.11L100,25.78h5l-3.47,15.47H96.08l-2-8.3H94l-2,8.3Zm-19.52,22a73,73,0,0,1-5.78-5.48,51.72,51.72,0,0,1-4.88-6H47.82c.36.46.73.92,1.11,1.36s1,1.1,1.52,1.63c.69.69,1.4,1.33,2.13,1.93a26,26,0,0,0,2.31,1.71c.79.54,1.62,1,2.48,1.51s1.76.89,2.69,1.29l.06,0,0,0c.9.37,1.8.71,2.73,1a27,27,0,0,0,2.85.72c.36.07.72.14,1.07.19l.32.06ZM47.79,15.18H57a59.19,59.19,0,0,1,4.79-5.95c1.68-1.84,3.56-3.69,5.62-5.55l-.48.07c-.4.06-.79.13-1.18.21h0c-1,.2-1.93.44-2.88.73a28,28,0,0,0-2.77,1c-.93.4-1.82.83-2.68,1.3a27.1,27.1,0,0,0-2.5,1.5c-.81.54-1.57,1.11-2.31,1.71a27.81,27.81,0,0,0-2.13,1.94c-.53.52-1,1.06-1.52,1.62s-.76.91-1.12,1.39ZM76.22,3.7c2.06,1.85,3.93,3.7,5.6,5.53a59,59,0,0,1,4.78,5.95h9.16c-.36-.47-.73-.93-1.12-1.37s-1-1.09-1.51-1.62c-.69-.69-1.4-1.34-2.13-1.94a27.55,27.55,0,0,0-2.31-1.71A26.77,26.77,0,0,0,86.21,7c-.87-.47-1.76-.9-2.7-1.3,0,0,0,0-.05,0l0,0q-1.35-.56-2.73-1A27,27,0,0,0,77.85,4h0q-.58-.12-1.17-.21l-.44-.07ZM65,.66A32.76,32.76,0,0,1,68.36.17C69.48.06,70.63,0,71.78,0s2.29.06,3.41.17a33.18,33.18,0,0,1,3.32.49,31.46,31.46,0,0,1,3.18.8,32.23,32.23,0,0,1,3.06,1.13l.07,0,.06,0c1,.42,1.94.89,2.87,1.39h0q1.44.78,2.79,1.68A32.23,32.23,0,0,1,95.5,9.79h0a31.85,31.85,0,0,1,2.14,2.36c.68.83,1.31,1.69,1.91,2.58a32.29,32.29,0,0,1,1.67,2.77c.16.3.32.6.47.9H41.85l.47-.91c.52-.95,1.08-1.87,1.67-2.76s1.22-1.73,1.89-2.55,1.42-1.64,2.17-2.4h0a31.84,31.84,0,0,1,2.35-2.15C51.25,7,52.11,6.32,53,5.73s1.82-1.16,2.77-1.68,1.94-1,2.94-1.42a31.51,31.51,0,0,1,3.12-1.15C62.89,1.16,64,.89,65,.66Zm36.67,48c-.15.31-.31.61-.48.91-.52.95-1.07,1.87-1.66,2.76a30,30,0,0,1-1.89,2.55c-.69.84-1.42,1.64-2.18,2.4h0a29.78,29.78,0,0,1-2.35,2.15,31.69,31.69,0,0,1-2.58,1.9c-.9.61-1.82,1.16-2.77,1.68s-1.94,1-2.94,1.42a33,33,0,0,1-9.65,2.47c-1.13.11-2.27.16-3.42.16s-2.29,0-3.41-.16a33.2,33.2,0,0,1-3.32-.5,31.46,31.46,0,0,1-3.18-.8,32.15,32.15,0,0,1-3.06-1.12l-.07,0-.06,0c-1-.43-1.94-.89-2.87-1.4S53.91,61.9,53,61.3a31,31,0,0,1-2.55-1.88c-.84-.69-1.64-1.42-2.4-2.18h0a29.78,29.78,0,0,1-2.14-2.36A30,30,0,0,1,44,52.3c-.6-.9-1.16-1.82-1.67-2.78-.17-.29-.32-.59-.47-.9h59.86ZM73.46,5.75v9.43h9a59.55,59.55,0,0,0-4-4.67c-1.5-1.58-3.15-3.16-5-4.76Zm0,46.11v9.56c1.91-1.59,3.66-3.18,5.25-4.79a54.88,54.88,0,0,0,4.23-4.77ZM70.1,61.42V51.86H60.61a54.71,54.71,0,0,0,4.22,4.77c1.59,1.6,3.34,3.2,5.27,4.79Zm0-46.24V5.75c-1.81,1.6-3.46,3.18-5,4.76a61.54,61.54,0,0,0-4,4.67Zm23.41,88A9.85,9.85,0,1,1,83.67,113a9.85,9.85,0,0,1,9.84-9.85Zm-43.17,0A9.85,9.85,0,1,1,40.5,113a9.85,9.85,0,0,1,9.84-9.85Z\" />
      </svg>
      
    </div>
     <span hidden class=\"float-end  bg-white px-4 py-2 rounded-full\">
    ";
        // line 15
        if ((($context["percentage"] ?? null) > 0)) {
            // line 16
            echo "      <i class=\"fa-solid fa-caret-up\"></i>
    ";
        } elseif ((        // line 17
($context["percentage"] ?? null) < 0)) {
            // line 18
            echo "      <i class=\"fa-solid fa-caret-down\"></i>
    ";
        }
        // line 20
        echo "      ";
        echo ($context["percentage"] ?? null);
        echo "%</span>
    </div>

  <div class=\"tile-body flex gap-4 justify-around\" >
  
    <h2 class=\"float-end text-3xl\">";
        // line 25
        echo ($context["total"] ?? null);
        echo "</h2>
  </div>

  <!-- <div class=\"tile-footer\"><a href=\"";
        // line 28
        echo ($context["customer"] ?? null);
        echo "\">";
        echo ($context["text_view"] ?? null);
        echo "</a></div> -->
</a>


<!-- <div class=\"tile tile-primary\">
  <div class=\"tile-heading\">";
        // line 33
        echo ($context["heading_title"] ?? null);
        echo " <span class=\"float-end\">
    ";
        // line 34
        if ((($context["percentage"] ?? null) > 0)) {
            // line 35
            echo "      <i class=\"fa-solid fa-caret-up\"></i>
    ";
        } elseif ((        // line 36
($context["percentage"] ?? null) < 0)) {
            // line 37
            echo "      <i class=\"fa-solid fa-caret-down\"></i>
    ";
        }
        // line 39
        echo "      ";
        echo ($context["percentage"] ?? null);
        echo "%</span></div>
  <div class=\"tile-body\"><i class=\"fa-solid fa-credit-card\"></i>
    <h2 class=\"float-end\">";
        // line 41
        echo ($context["total"] ?? null);
        echo "</h2>
  </div>
  <div class=\"tile-footer\"><a href=\"";
        // line 43
        echo ($context["sale"] ?? null);
        echo "\">";
        echo ($context["text_view"] ?? null);
        echo "</a></div>
</div> -->


";
    }

    public function getTemplateName()
    {
        return "extension/opencart/admin/view/template/dashboard/sale_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 43,  115 => 41,  109 => 39,  105 => 37,  103 => 36,  100 => 35,  98 => 34,  94 => 33,  84 => 28,  78 => 25,  69 => 20,  65 => 18,  63 => 17,  60 => 16,  58 => 15,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/admin/view/template/dashboard/sale_info.twig", "/opt/lampp/htdocs/moh/upload/extension/opencart/admin/view/template/dashboard/sale_info.twig");
    }
}
