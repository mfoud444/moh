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

/* catalog/view/template/account/login.twig */
class __TwigTemplate_4ff5f84f546be545f88489bc1e5cca90 extends Template
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

<section
  class=\"flex   flex-col md:items-center
   md:flex-row md:justify-evenly
    my-4 dark:bg-gray-900\"
>
  <div class=\"basis-1/2 text-3xl py-2\" >

    <div class=\"flex gap-6 flex-col  text-center justify-center\">


          <h1
        class=\"text-2xl text-center\"
      >
        تسجيل الدخول لحسابك
      </h1>
    
    </div>
  </div>

  <div class=\"basis-1/2\">
    <div class=\"p-4 bg-purple-200  md:max-w-sm rounded-md shadow-xl dark:bg-gray-800\">

    <div class=\"flex flex-row-reverse items-center justify-center gap-2\">
      <h1 class=\"text-3xl font-semibold \">مرحبا بعودتك</h1>
  <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-8 h-8\">
  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z\" />
</svg>
      </div>

    <div class=\"flex mt-4 flex-row-reverse items-center justify-center gap-2\">
      <h1
        class=\"text-2xl font-semibold text-center text-gray-700 dark:text-white\"
      >
        خيال العطور
      </h1>
<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-8 h-8\">
  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z\" />
</svg>

 </div>
      <form
        class=\"mt-6 flex flex-col gap-4\"
        id=\"form-login\"
        action=\"";
        // line 46
        echo ($context["login"] ?? null);
        echo "\"
        method=\"post\"
        data-oc-toggle=\"ajax\"
      >
      <div class=\"flex flex-col gap-1\">
      <h4 class=\"mr-2\">";
        // line 51
        echo ($context["entry_email"] ?? null);
        echo "</h4>
        <div class=\"relative flex items-center\">
          <span class=\"absolute\">
            <svg
              xmlns=\"http://www.w3.org/2000/svg\"
              class=\"w-6 h-6 mx-3 text-gray-300 dark:text-gray-500\"
              fill=\"none\"
              viewBox=\"0 0 24 24\"
              stroke=\"currentColor\"
              stroke-width=\"2\"
            >
              <path
                stroke-linecap=\"round\"
                stroke-linejoin=\"round\"
                d=\"M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\"
              />
            </svg>
          </span>

          <input
            type=\"email\"
            name=\"email\"
            value=\"";
        // line 73
        echo ($context["email"] ?? null);
        echo "\"
            placeholder=\"";
        // line 74
        echo ($context["entry_email"] ?? null);
        echo "\"
            id=\"input-email\"
            class=\"form-email\"
           
            required
          />
        </div>
                  <span class=\" hidden text-sm text-red-700\">invalied email</span>
        </div>
        
 <div class=\"flex  flex-col gap-2\">
      <h4 class=\"mr-2\">";
        // line 85
        echo ($context["entry_password"] ?? null);
        echo "</h4>
        <div class=\"relative flex items-center \">
          
          <span class=\"absolute\">
            <svg
              xmlns=\"http://www.w3.org/2000/svg\"
              class=\"w-6 h-6 mx-3 text-gray-300 dark:text-gray-500\"
              fill=\"none\"
              viewBox=\"0 0 24 24\"
              stroke=\"currentColor\"
              stroke-width=\"2\"
            >
              <path
                stroke-linecap=\"round\"
                stroke-linejoin=\"round\"
                d=\"M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z\"
              />
            </svg>
          </span>

          <input
            type=\"password\"
            name=\"password\"
            value=\"";
        // line 108
        echo ($context["password"] ?? null);
        echo "\"
            placeholder=\"";
        // line 109
        echo ($context["entry_password"] ?? null);
        echo "\"
            id=\"input-password\"
            class=\"block w-full px-10 py-3 text-gray-700 bg-white border rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40\"
          />
<span id=\"showPass\" class=\"absolute cursor-pointer left-0\">


          <svg xmlns=\"http://www.w3.org/2000/svg\" 
          fill=\"none\" 
          stroke=\"currentColor\" 
          viewBox=\"0 0 24 24\" 
          class=\"w-8 text-gray-500 h-8 mx-3 line-through dark:text-gray-500\"><path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 5l16 16M11.148 9.123a3 3 0 013.722 3.752M8.41 6.878C12.674 4.762 17.267 6.47 21 12c-1.027 1.521-2.119 2.753-3.251 3.696m-2.509 1.59C11.076 19.142 6.631 17.38 3 12c1.01-1.496 2.083-2.713 3.196-3.65\"/></svg>

          <svg xmlns=\"http://www.w3.org/2000/svg\" 
          fill=\"none\" stroke=\"currentColor\" 
          viewBox=\"0 0 24 24\" 
          class=\"w-8 hidden text-gray-500 h-8 mx-3 line-through dark:text-gray-500\"><path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"currentColor\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12c5.4-8 12.6-8 18 0-5.4 8-12.6 8-18 0z\"/><path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"currentColor\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/></svg>

  </span> 
         </div>
           <span class=\"hidden text-sm text-red-700\">Password must be 8 characters</span>
         <a
          href=\"";
        // line 131
        echo ($context["forgotten"] ?? null);
        echo "\"
          class=\"text-sm mr-2  dark:text-gray-200 hover:text-gray-500\"
          >";
        // line 133
        echo ($context["text_forgotten"] ?? null);
        echo "</a
        >
    </div>


       


          <button
            type=\"submit\"
            class=\"btn-primary  w-full \"
          >
            ";
        // line 145
        echo ($context["button_login"] ?? null);
        echo "
          </button>
      

        ";
        // line 149
        if (($context["redirect"] ?? null)) {
            // line 150
            echo "        <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
        ";
        }
        // line 152
        echo "      </form>

      <div class=\"flex items-center justify-between mt-4\">
        <span class=\"w-1/5 border-b dark:border-gray-600 lg:w-1/5\"></span>

        <p
          class=\"text-md text-center text-gray-500 uppercase dark:text-gray-400\"
        >
          أو 
        </p>

        <span class=\"w-1/5 border-b dark:border-gray-400 lg:w-1/5\"></span>
      </div>
<div hidden class=\"hidden\">


      <a
        href=\"#\"
        class=\"flex items-center justify-center px-6 py-3 mt-4  transition-colors duration-300 transform border bg-gray-50 rounded-lg dark:border-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600\"
      >
        <svg class=\"w-6 h-6 mx-2\" viewBox=\"0 0 40 40\">
          <path
            d=\"M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z\"
            fill=\"#FFC107\"
          />
          <path
            d=\"M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z\"
            fill=\"#FF3D00\"
          />
          <path
            d=\"M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z\"
            fill=\"#4CAF50\"
          />
          <path
            d=\"M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z\"
            fill=\"#1976D2\"
          />
        </svg>

        <span class=\"mx-2\"> المتابعة باستخدام جوجل </span>
      </a>

      <!-- <a
      href=\"#\"
      class=\"flex items-center
       justify-center px-6 py-3 mt-4
       text-white
         bg-[#3b5998] transition-colors 
        duration-300 transform border rounded-lg
        \"
    >
    <svg
    class=\"mr-2 -ml-1 w-4 h-4\"
    aria-hidden=\"true\"
    focusable=\"false\"
    data-prefix=\"fab\"
    data-icon=\"facebook-f\"
    role=\"img\"
    xmlns=\"http://www.w3.org/2000/svg\"
    viewBox=\"0 0 320 512\"
  >
    <path
      fill=\"currentColor\"
      d=\"M279.1 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.4 0 225.4 0c-73.22 0-121.1 44.38-121.1 124.7v70.62H22.89V288h81.39v224h100.2V288z\"
    ></path>
  </svg>

      <span class=\"mx-2\"> المتابعة باستخدام فيسبوك </span>
    </a> -->


    </div>

      <p class=\"mt-4 text-md text-center text-gray-700\">
        لا تمتلك حساب بعد؟
        <a
          href=\"";
        // line 228
        echo ($context["register"] ?? null);
        echo "\"
          class=\"text-md text-purple-400 dark:text-gray-200 hover:underline\"
          >إنشى حسابك</a
        >
      </p>
    </div>
  </div>
</section>


";
        // line 238
        echo ($context["footer"] ?? null);
        echo "
<script>




\$(document).ready(function(){
  
   \$('#showPass').on('click', function(){
      var passInput=\$(\"#input-password\");
      if(passInput.attr('type')==='password')
        {
      \$(\"#showPass\").children(\":first\").addClass(\"hidden\");
      \$(\"#showPass\").children(\":last\").removeClass(\"hidden\");
          passInput.attr('type','text');
      }else{
            \$(\"#showPass\").children(\":first\").removeClass(\"hidden\");
            \$(\"#showPass\").children(\":last\").addClass(\"hidden\");
         passInput.attr('type','password');
      }
  })
})
</script>


<!-- ";
        // line 358
        echo " -->";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 358,  317 => 238,  304 => 228,  226 => 152,  220 => 150,  218 => 149,  211 => 145,  196 => 133,  191 => 131,  166 => 109,  162 => 108,  136 => 85,  122 => 74,  118 => 73,  93 => 51,  85 => 46,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/login.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/account/login.twig");
    }
}
