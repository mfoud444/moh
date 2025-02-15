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

/* catalog/view/template/common/home.twig */
class __TwigTemplate_20a702ca0c08ea140bf550efc44873a3 extends Template
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
        echo ($context["header"] ?? null);
        echo "


<div class=\"flex flex-col justify-center  items-center md:flex-row-reverse \">

<div class=\" md:hidden bg-primary-900 basis-1/2 pr-1 mt-4 shadow-lg\">
  <img
    class=\"object-cover w-full\"
    src=\"catalog/view/image/bannar.png\"
    alt=\"\"
  />
</div>



<div 
  class=\"relative overflow-hidden hidden
   shadow-lg  gap-2 w-full  rounded-3xl drop-shadow-xl bg-primary-200 flex items-center md:mx-auto my-4  p-10  flex-row-reverse  justify-around\"
>

<div class=\"mt-10 relative \">
    <div class=\"circle\"><div class=\"wave\"></div></div>

    <div
    class=\"container2  absolute top-[-6rem] right-1\"
  >
    <div class=\"pentagon-1\"></div>
    <div class=\"pentagon-2\"></div>
  </div>
  </div>

  <div class=\" flex mt-8 mr-4 md:mt-6  items-center flex-col gap-4\">
      <p class=\"text-xl    md:text-4xl   \">
        عطرك دليل ذوقك 
        واناقتك       
    </p>
    <button hidden class=\" w-[10rem] bg-primary-900 text-white font-bold py-4  rounded-full \"> تسوق الان</button>
</div>

<div class=\"h-28 absolute  right-[-1.5rem] top-[-1.5rem] w-28 rounded-full bg-primary-900\"></div>
";
        // line 62
        echo "<div class=\"absolute  right-5 top-[1rem]\">

<?xml version=\"1.0\" encoding=\"utf-8\"?><svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\"
    xmlns:xlink=\"http://www.w3.org/1999/xlink\" class=\"w-12 fill-white h-12\" x=\"0px\" y=\"0px\" viewBox=\"0 0 121.22 122.88\"
    style=\"enable-background:new 0 0 121.22 122.88\" xml:space=\"preserve\">
    <g>
        <path
            d=\"M114.53,66.42c0.06,0.09,0.12,0.17,0.18,0.26c0.26,0.39,0.55,0.84,0.85,1.34c5.16,8.5,6.41,18.29,4.25,27.25 c-2.16,8.98-7.73,17.13-16.2,22.32c-6.54,4.01-13.86,5.67-20.97,5.22c-7.31-0.47-14.41-3.17-20.22-7.85 c-0.05-0.04-0.09-0.08-0.13-0.12c-5.61,3.93-12.44,6.33-19.49,6.5c-0.55,0.01-0.77,0.02-0.78,0.02c-9.72,0-18.52-4.01-24.89-10.5 c-6.36-6.48-10.3-15.42-10.3-25.29c0-0.3,0.01-0.75,0.03-1.36c0.02-0.55,0.04-1,0.07-1.36c0.02-0.24,0.06-0.46,0.13-0.68 c-0.97-2.38-1.62-4.93-1.92-7.58c-0.13-0.15-0.24-0.32-0.33-0.51C1.52,67.51,0,60.86,0,54.56c0-7.02,1.88-13.63,5.32-19.28 c3.43-5.64,8.41-10.3,14.62-13.4c2.18-1.09,4.5-1.99,6.96-2.67c0.08-0.3,0.21-0.59,0.39-0.86c3.75-5.62,8.86-10.27,14.86-13.48 C47.93,1.76,54.53,0,61.53,0c6.71,0,13.04,1.61,18.64,4.46c5.8,2.95,10.81,7.25,14.63,12.48l0.01,0.01 c6.77,0.94,12.83,4.08,17.44,8.69c5.55,5.55,8.98,13.21,8.98,21.67c0,6.71-2.16,12.92-5.82,17.97 C115.12,65.67,114.83,66.05,114.53,66.42L114.53,66.42z M34.75,17.82c1.19-0.1,2.41-0.15,3.65-0.15c2.97,0,5.88,0.34,8.7,0.98 c2.62,0.59,5.14,1.45,7.54,2.54c3.75-1.81,7.95-2.82,12.37-2.82c3.36,0,6.59,0.58,9.6,1.65c2.12-1.09,4.39-1.94,6.77-2.51 c1.32-0.32,2.67-0.55,4.03-0.7c-2.8-2.97-6.11-5.46-9.8-7.34c-4.82-2.45-10.29-3.84-16.08-3.84c-6.07,0-11.77,1.51-16.74,4.17 C40.97,11.86,37.57,14.58,34.75,17.82L34.75,17.82z M6.39,62.52c1.06-3.23,2.68-6.21,4.75-8.83c3.94-4.98,9.49-8.62,15.87-10.12 c0.1-0.02,0.19-0.04,0.29-0.05c0.7-0.92,1.45-1.78,2.26-2.6c3.19-3.19,7.23-5.52,11.75-6.62c1.86-3.68,4.46-6.91,7.62-9.48 c-0.99-0.33-2-0.61-3.04-0.84c-2.39-0.54-4.9-0.83-7.51-0.83c-6.03,0-11.43,1.3-16.02,3.6c-5.26,2.63-9.48,6.58-12.4,11.37 c-2.91,4.78-4.5,10.42-4.5,16.43C5.48,57.16,5.77,59.82,6.39,62.52L6.39,62.52z M47.88,33.6c2.04,0.05,4.04,0.36,5.97,0.88 c1.72,0.47,3.36,1.11,4.9,1.91c0.59-0.12,1.19-0.22,1.81-0.3c1.02-0.13,2.01-0.2,2.96-0.2c6.34,0,12.08,2.57,16.23,6.72 c4.15,4.15,6.72,9.89,6.72,16.23c0,0.74-0.04,1.48-0.1,2.2c0.44-0.64,0.85-1.31,1.23-2c1.87-3.41,2.94-7.35,2.94-11.55 c0-6.58-2.64-12.54-6.9-16.86c-4.26-4.3-10.14-6.97-16.63-6.97c-4.64,0-8.96,1.35-12.6,3.69C51.86,29,49.64,31.12,47.88,33.6 L47.88,33.6z M82.15,72.25c-0.52,0.73-1.09,1.42-1.69,2.08c0,0.06,0.01,0.12,0.01,0.18c0,5.46-1.59,10.56-4.34,14.85 c0.01,0.34,0.01,0.4,0.01,0.47c0,3.37-0.62,6.62-1.74,9.66c5.77-0.36,10.96-2.84,14.8-6.68c4.16-4.16,6.73-9.9,6.73-16.24 c0-3.14-0.62-6.12-1.75-8.82c-0.72-1.72-1.64-3.34-2.73-4.82c-2.32,3.74-5.47,6.92-9.18,9.27C82.23,72.21,82.19,72.23,82.15,72.25 L82.15,72.25z M94,57.7c2.11,2.35,3.83,5.05,5.06,8.01c0.61,1.46,1.1,2.98,1.46,4.55c4.14-1.8,7.7-4.68,10.32-8.29 c2.98-4.11,4.74-9.18,4.74-14.66c0-6.9-2.8-13.16-7.32-17.68c-4.52-4.52-10.78-7.32-17.68-7.32c-2.06,0-4.03,0.24-5.89,0.68 c-0.5,0.12-1,0.26-1.49,0.41c1.51,1.04,2.92,2.22,4.21,3.52c5.21,5.27,8.43,12.54,8.43,20.57C95.83,51.08,95.18,54.52,94,57.7 L94,57.7z M12.79,91.06c1.11,6.18,4.05,11.7,8.23,15.96c5.37,5.47,12.8,8.86,21,8.86c0.5,0,0.59,0,0.66,0 c7.31-0.17,14.34-3.19,19.54-7.96c3.46-3.17,6.11-7.12,7.46-11.51c-4.7,3.63-10.6,5.79-16.99,5.79c-4.49,0-8.74-1.06-12.49-2.95 c-0.94,0.22-1.92,0.4-2.92,0.53c-1.25,0.16-2.48,0.24-3.68,0.24c-7.9,0-15.05-3.2-20.23-8.38C13.16,91.45,12.97,91.26,12.79,91.06 L12.79,91.06z M33.7,94.73c-0.23-0.21-0.45-0.42-0.67-0.64c-5.04-5.02-8.15-11.94-8.15-19.58c0-0.75,0.04-1.58,0.12-2.47 c0.05-0.54,0.11-1.08,0.19-1.61c-1.89-3.52-2.96-7.54-2.96-11.81c0-2.91,0.5-5.71,1.41-8.31c-3.28,1.55-6.15,3.83-8.37,6.65 c-3.14,3.97-5.01,8.99-5.01,14.46c0,6.44,2.61,12.27,6.83,16.49c4.22,4.22,10.05,6.83,16.49,6.83L33.7,94.73L33.7,94.73z M30.31,77.03c0.58,5.18,2.93,9.83,6.44,13.32c4.07,4.05,9.7,6.56,15.92,6.56c6.22,0,11.85-2.51,15.92-6.56 c3.09-3.08,5.28-7.05,6.16-11.49c-3.32,1.87-7.15,2.93-11.23,2.93c-1.18,0-2.34-0.09-3.48-0.26c-0.65-0.1-1.28-0.23-1.92-0.38 c-1.58,0.76-3.26,1.37-5.01,1.79c-1.91,0.46-3.87,0.7-5.86,0.7C40.72,83.64,34.77,81.13,30.31,77.03L30.31,77.03z M52.27,77.72 c-4.94-0.12-9.41-2.18-12.67-5.43c-3.36-3.36-5.44-8-5.44-13.13c0-5.13,2.08-9.77,5.44-13.13c3.36-3.36,8-5.44,13.13-5.44 c1.06,0,2.11,0.09,3.12,0.26c-1.08-0.53-2.22-0.96-3.38-1.28c-1.64-0.45-3.38-0.69-5.22-0.69c-5.45,0-10.38,2.21-13.95,5.78 c-3.57,3.57-5.78,8.5-5.78,13.95c0,5.45,2.21,10.38,5.78,13.95c3.57,3.57,8.51,5.78,13.95,5.78c1.63,0,3.18-0.19,4.64-0.54 C52.02,77.79,52.14,77.75,52.27,77.72L52.27,77.72z M60.2,41.48c-0.22,0.16-0.46,0.28-0.71,0.37c2.41,0.94,4.58,2.37,6.38,4.17 c3.36,3.36,5.44,8,5.44,13.13c0,3.82-1.15,7.37-3.13,10.33c-0.15,0.34-0.37,0.65-0.64,0.9c-0.51,0.67-1.07,1.31-1.67,1.91 c-1.63,1.63-3.57,2.96-5.72,3.9c0.22,0.04,0.45,0.08,0.67,0.12c0.87,0.13,1.78,0.2,2.7,0.2c4.88,0,9.29-1.98,12.49-5.17 c3.2-3.2,5.17-7.61,5.17-12.49c0-4.88-1.98-9.29-5.17-12.49c-3.2-3.2-7.61-5.17-12.49-5.17c-0.83,0-1.6,0.05-2.3,0.14 C60.88,41.36,60.54,41.41,60.2,41.48L60.2,41.48z M101.22,76.05c0,0.17,0,0.34,0,0.51c0,7.8-3.16,14.87-8.28,19.98 c-5.11,5.11-12.18,8.28-19.98,8.28c-0.37,0-0.72-0.07-1.03-0.21c-1.44,2.38-3.2,4.58-5.21,6.55c4.75,3.58,10.43,5.64,16.28,6.02 c6,0.38,12.16-1.02,17.68-4.4c7.14-4.38,11.84-11.25,13.66-18.81c1.83-7.58,0.77-15.86-3.59-23.04c-0.07-0.12-0.15-0.24-0.23-0.36 C107.79,72.91,104.65,74.78,101.22,76.05L101.22,76.05z M61.74,49.39c-2.37-2.18-5.53-3.52-9.01-3.52c-3.38,0-6.46,1.26-8.8,3.33 c-0.02,0.22-0.03,0.46-0.03,0.7c0,2.46,1,4.69,2.61,6.31c1.61,1.61,3.85,2.61,6.31,2.61c2.46,0,4.69-1,6.31-2.61 c1.61-1.61,2.61-3.85,2.61-6.31C61.75,49.72,61.75,49.54,61.74,49.39L61.74,49.39z M39.88,55.78c-0.28,1.08-0.43,2.21-0.43,3.37 c0,3.67,1.49,6.99,3.89,9.39c2.4,2.4,5.72,3.89,9.39,3.89c2.32,0,4.5-0.59,6.4-1.64c-1.32-0.34-2.58-0.84-3.74-1.47 c-2.4-1.31-4.42-3.21-5.83-5.49c-0.02-0.04-0.04-0.07-0.06-0.11c-2.59-0.62-4.9-1.95-6.72-3.77 C41.58,58.76,40.59,57.35,39.88,55.78L39.88,55.78z M64.12,65.99c1.2-2,1.89-4.34,1.89-6.84c0-1.07-0.13-2.11-0.37-3.11 c-0.7,1.46-1.64,2.78-2.77,3.91c-1.77,1.77-4.01,3.08-6.51,3.72c0.48,0.38,0.99,0.72,1.54,1.02c1.55,0.84,3.35,1.32,5.29,1.32 C63.56,66.02,63.87,66.01,64.12,65.99L64.12,65.99z\" />
    </g>
</svg>

</div>

<div class=\"absolute  left-1 bottom-0\">
<?xml version=\"1.0\" encoding=\"utf-8\"?><svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\"
    xmlns:xlink=\"http://www.w3.org/1999/xlink\"
    class=\"w-12 h-12 \"
     x=\"0px\" y=\"0px\" viewBox=\"0 0 72.55 122.88\"
    style=\"enable-background:new 0 0 72.55 122.88\" xml:space=\"preserve\">
    <style type=\"text/css\">
        .st0 {
            fill-rule: evenodd;
            clip-rule: evenodd;
        }
    </style>
    <g>
        <path class=\"st0\"
            d=\"M39.33,38.96c6.08-3.59,12.57-6.74,18.96-9.56c4.59,14.86,4.17,27.07-4.35,34.87 c-5.52,3.91-10.57,6.23-15.1,6.83v51.78h-4.81V71.05c-0.61-0.1-1.22-0.24-1.81-0.42c-9.09-2.76-8.23-11.02-4.8-18.38 C30.77,45.07,32.84,42.8,39.33,38.96L39.33,38.96z M61.45,101.68c-7.47,1.67-14.52,4.97-20.75,10.49 c2.09-11.56,12.93-16.06,23.4-15.57c2.8,0.13,5.62,0.66,8.46,1.49c-2.02,4.36-4.5,8.09-7.52,11.1c-4.86,4.84-9.38,6.94-16.14,7.17 c-2.34,0.08-4.67-0.08-6.99-0.45C47.77,109.76,54.32,105.1,61.45,101.68L61.45,101.68z M11,90.45c7.42,1.88,14.37,5.38,20.45,11.07 C29.68,89.9,18.97,85.1,8.5,85.3C5.7,85.35,2.86,85.8,0,86.55c1.9,4.41,4.27,8.22,7.2,11.31c4.72,4.98,9.18,7.2,15.93,7.62 c2.33,0.15,4.67,0.05,7-0.26C24.44,98.91,18.02,94.07,11,90.45L11,90.45z M59.73,84.18c-1.34-6.42-4.08-10.73-8.09-14.06 c-3.04,2.09-6.07,4.69-10.08,4.01C45.23,80.44,56.51,78.68,59.73,84.18L59.73,84.18z M13.44,84.18c1.34-6.42,4.08-10.73,8.09-14.06 c3.04,2.09,6.07,4.69,10.08,4.01C27.94,80.44,16.66,78.68,13.44,84.18L13.44,84.18z M51.04,13.45c-1.33-4.12-3.94-6.1-7.84-8.06 c2.82-1.27,5.22-3.71,7.57-1.29C53.11,6.5,51.65,11.1,51.04,13.45L51.04,13.45z M36.46,10.64c2.33-5.19,10.87,0.29,10.66,4.87 l-0.08,1.7c-1.82,0.15-3.58,0.12-5.4-0.06C37.02,16.69,33.87,16.43,36.46,10.64L36.46,10.64z M16.69,5.3c-0.71,2.1-0.82,3.9-0.37,6 c1.11,5.1,6.14,9.51,10.32,12.28c2.22,1.47,4.57,2.62,7.07,3.38l7.97,0.05L29.9,40.22c-0.4-2.32-1.4-4.4-2.62-6.42 c-3.49-5.77-8.03-7.74-12.21-10.45C5.23,16.98,4.83,10.48,16.69,5.3L16.69,5.3z M31.37,13.22C33.57,6.35,37.36,2.7,43.26,0.6 C35-2.03,25.69,4.32,31.37,13.22L31.37,13.22z M26.92,0.55c-5.4,13.56,3.34,19.22,19.86,20.52c-2.87,1.09-5.69,1.6-8.46,1.55 c-4.83-0.08-12-2.35-15.08-6.25C18.86,10.8,18.49,1.91,26.92,0.55L26.92,0.55z M52.74,27.28c9.53-6.11,20.03-20.95,2.99-22.8 C65.18,15.48,23.76,45.86,52.74,27.28L52.74,27.28z M12.68,32.63c0.42-1.84,0.98-3.65,1.73-5.41c2.47,1.47,4.72,3.27,6.66,5.55 c1.62,1.9,3.04,4.13,4.19,6.77c0.64,1.47,0.9,2.87,0.75,4.19c-0.87,7.6-7.33,7.12-5.16,23.83c-2.26-1.41-4.35-3.53-6.18-6.81 C9.86,52.09,10.5,42.09,12.68,32.63L12.68,32.63z\" />
    </g>
</svg>
</div>

</div>


</div> 


   




<div id=\"common-home\" class=\"\">
  <div class=\"row\">
    ";
        // line 107
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">
      ";
        // line 109
        echo ($context["content_top"] ?? null);
        echo "
     
      ";
        // line 111
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 112
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>





";
        // line 294
        echo "
";
        // line 295
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 295,  152 => 294,  141 => 112,  137 => 111,  132 => 109,  127 => 107,  80 => 62,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/home.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/common/home.twig");
    }
}
