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

/* extension/opencart/catalog/view/template/total/reward.twig */
class __TwigTemplate_4f7c4fc9f2181f99893f62216369732d extends Template
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
        echo "<div class=\"border-dotted flex p-2 flex-col gap-2 border-2 border-primary-600\">

    
    <button type=\"button\" 
    class=\"flex  bg-red-300 rounded-full py-1 items-center gap-2 justify-center font-bold text-base\"
    data-bs-toggle=\"collapse\"
      data-bs-target=\"#collapse-reward\">
      <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" shape-rendering=\"geometricPrecision\" text-rendering=\"geometricPrecision\"
      image-rendering=\"optimizeQuality\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" viewBox=\"0 0 482 511.93\">
      <path fill-rule=\"nonzero\"
          d=\"m277.15 355.47-129.39-67.81L115.79 327c47.18 24.94 89.8 47.83 137 72.79l24.36-44.32zM191.5 208.38c4.84 0 8.77 3.92 8.77 8.76s-3.93 8.77-8.77 8.77-8.76-3.93-8.76-8.77 3.92-8.76 8.76-8.76zm185.52 9.13c4.84 0 8.76 3.92 8.76 8.76s-3.92 8.77-8.76 8.77c-4.85 0-8.77-3.93-8.77-8.77s3.92-8.76 8.77-8.76zm74.65-148.53c5.38 0 9.74 4.36 9.74 9.75 0 5.38-4.36 9.74-9.74 9.74s-9.74-4.36-9.74-9.74c0-5.39 4.36-9.75 9.74-9.75zm-274.01 9.88c6.35 0 11.49 5.15 11.49 11.5s-5.14 11.49-11.49 11.49c-6.35 0-11.5-5.14-11.5-11.49 0-6.35 5.15-11.5 11.5-11.5zm-34.45 89.91c7.17 0 12.98 5.81 12.98 12.98 0 7.16-5.81 12.97-12.98 12.97-7.16 0-12.97-5.81-12.97-12.97 0-7.17 5.81-12.98 12.97-12.98zM231.86 0l17.02 29.17 32.89-2.76-21 24.78 12.54 30.75-30.13-12.48-24.72 21.12 2.21-32.72-28.62-17.44 33.19-7.38L231.86 0zm118.07 161.29c4.84 0 8.77 3.92 8.77 8.77 0 4.84-3.93 8.76-8.77 8.76s-8.77-3.92-8.77-8.76c0-4.85 3.93-8.77 8.77-8.77zm82.72 38.11-1.25-.35c2.88-10.22 1.58-20.22-3.91-30-5.48-9.79-13.33-16.12-23.54-19l.35-1.25c10.22 2.88 20.21 1.58 30-3.93 9.79-5.5 16.13-13.34 18.99-23.52l1.26.35c-2.88 10.22-1.58 20.21 3.9 30 5.49 9.79 13.34 16.12 23.55 19l-.35 1.25c-10.22-2.88-20.22-1.58-30 3.9-9.79 5.49-16.12 13.34-19 23.55zm-61.45-98.38h-1.62c0-13.19-4.93-24.73-14.8-34.59-9.86-9.87-21.4-14.8-34.6-14.8v-1.62c13.2 0 24.74-4.93 34.6-14.82 9.87-9.89 14.8-21.42 14.8-34.58h1.62c0 13.2 4.93 24.73 14.8 34.6 9.87 9.87 21.4 14.8 34.6 14.8v1.62c-13.2 0-24.73 4.93-34.6 14.8-9.87 9.86-14.8 21.4-14.8 34.59zM68.87 128.06l-1.44.75c-6.12-11.69-15.84-19.62-29.16-23.78s-25.82-3.18-37.52 2.94L0 106.54c11.7-6.13 19.62-15.85 23.77-29.18 4.15-13.34 3.17-25.85-2.93-37.5l1.43-.75C28.4 50.8 38.12 58.73 51.44 62.89c13.31 4.16 25.82 3.18 37.51-2.94l.75 1.43C78.01 67.5 70.08 77.23 65.92 90.54c-4.16 13.32-3.18 25.83 2.95 37.52zM291.4 287.62a6.511 6.511 0 0 1-5.98 3.69c-1.08.75-2.4 1.17-3.81 1.14-.48-.01-.94-.07-1.39-.18a6.5 6.5 0 0 1-8.2-3.94c-14.91-41.24-38.21-76.53-67.05-105.6-31.26-31.53-69.05-55.8-109.73-72.53-3.32-1.36-4.9-5.16-3.54-8.48 1.37-3.32 5.17-4.9 8.48-3.54 42.24 17.37 81.5 42.6 114.01 75.38 20.91 21.08 39.03 45.29 53.37 72.53L244.59 98.46c-.55-3.55 1.88-6.87 5.42-7.41a6.495 6.495 0 0 1 7.41 5.42l22.67 145.62c2.81-14.15 6.76-28.09 11.66-41.7 10.98-30.51 26.68-59.38 44.9-85.52a6.495 6.495 0 0 1 9.06-1.63c2.96 2.05 3.68 6.11 1.63 9.06-17.66 25.35-32.83 53.21-43.36 82.47-7.01 19.47-11.99 39.6-14.31 60.05 10.23-15.34 25.53-33.46 45.01-50.01 20.18-17.15 44.95-32.73 73.34-41.94 3.42-1.11 7.09.76 8.2 4.18a6.507 6.507 0 0 1-4.18 8.2c-26.61 8.64-49.91 23.31-68.95 39.49-26 22.09-43.97 46.81-51.69 62.88zM187.97 261.3l-30.77 14.87 126.99 66.84 127.01-66.97-27.9-13.98c4.13-3.04 8.31-5.97 12.49-8.8l23.44 10.08 37.73-35.71-12.34-6.54c3.18-2.29 6.18-4.55 8.94-6.82l19.76 10.44c.44.24.85.54 1.22.92a4.982 4.982 0 0 1-.06 7.06l-44.81 44.02 43.4 51.94a5.015 5.015 0 0 1-.63 7.04c-.32.26-.66.49-1.02.66l-38.96 20.6v77.21a5.01 5.01 0 0 1-3.09 4.62l-140.86 71.5a4.97 4.97 0 0 1-3.7 1.65c-1.96 0-3.65-1.12-4.47-2.76l-141.13-70.55a4.984 4.984 0 0 1-2.76-4.46l-.02-76.83-39.69-20.98c-.36-.17-.69-.4-1.01-.66a4.997 4.997 0 0 1-.63-7.04l42.28-50.59-49.05-46.48c-1.82-2.07-1.6-5.22.47-7.04.31-.26.62-.49.96-.66l22.88-12.95c3.05 2.91 5.97 5.39 8.53 7.34l-15.75 8.8 41.39 37.97 36.57-17.7c1.5 4.72 3.04 9.43 4.59 13.96zm232.81 27.53-126.5 63.38 27.88 48.05 133.28-69.41-34.66-42.02z\" />
  </svg>
      ";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "
     
    </button>

  <div id=\"collapse-reward\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
    <div class=\"accordion-body\">
      <form id=\"form-reward\" action=\"";
        // line 19
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["list"] ?? null);
        echo "\"
        data-oc-target=\"#shopping-cart\">
        <div class=\"flex flex-col gap-2 items-center\">
          <label for=\"input-reward\" class=\"col-md-4 col-form-label\">";
        // line 22
        echo ($context["entry_reward"] ?? null);
        echo "</label>
          <div class=\"col-md-8\">
            <input type=\"text\" name=\"reward\" value=\"";
        // line 24
        echo ($context["reward"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_reward"] ?? null);
        echo "\" id=\"input-reward\"
              class=\"form-control\" />
          </div>
        </div>
        <div class=\"text-end mt-2\">
          <button type=\"submit\" class=\"btn btn-primary\">";
        // line 29
        echo ($context["button_reward"] ?? null);
        echo "</button>
      </form>
    </div>
  </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/total/reward.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 29,  73 => 24,  68 => 22,  60 => 19,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/total/reward.twig", "/opt/lampp/htdocs/moh/upload/extension/opencart/catalog/view/template/total/reward.twig");
    }
}
