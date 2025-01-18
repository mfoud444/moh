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

/* catalog/view/template/product/search.twig */
class __TwigTemplate_388123e93cb271ebf75f75d83e4c24e4 extends Template
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

<div id=\"product-search\" class=\"container my-2 \">

  

   <div class=\"breadcrumb\">
   <a href=\"";
        // line 8
        echo ($context["home"] ?? null);
        echo "\">
   <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 fill-secondary\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
            <path d=\"M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z\" />
        </svg>
      </a>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "     <a class=\"breadcrumb-child\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a>
     <span class=\"mx-2  dark:text-gray-300 rtl:-scale-x-100\">
     
        <svg xmlns=\"http://www.w3.org/2000/svg\" 
        class=\"w-5 h-5 fill-secondary\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
            <path fill-rule=\"evenodd\" d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\" clip-rule=\"evenodd\" />
        </svg>
    </span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  </div>


  <div class=\"row\">";
        // line 26
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"flex  flex-col my-2 gap-4\">
   
      ";
        // line 31
        echo "

     


<div class=\"flex flex-col gap-2  \">
     

      <div class=\"flex   flex-col gap-4\">
        
        <div class=\"relative\">
          <div
          class=\"flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none\"
        >
          <svg
            aria-hidden=\"true\"
            class=\"w-5 h-5 text-gray-500 dark:text-gray-400\"
            fill=\"currentColor\"
            viewBox=\"0 0 20 20\"
            xmlns=\"http://www.w3.org/2000/svg\"
          >
            <path
              fill-rule=\"evenodd\"
              d=\"M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z\"
              clip-rule=\"evenodd\"
            ></path>
          </svg>
        </div>
          <input type=\"text\" name=\"search\" 
          value=\"";
        // line 60
        echo ($context["search"] ?? null);
        echo "\"
           placeholder=\"";
        // line 61
        echo ($context["text_keyword"] ?? null);
        echo "\" 
           id=\"input-search\"
            class=\"search-field rounded-xl\"/>
        </div>
     

      </div>



        <div class=\"flex flex-col gap-2\">
          
          <select name=\"category_id\" id=\"input-category\"
           class=\"bg-gray-50 border
            border-gray-300
             text-gray-900
              rounded-full
               focus:ring-blue-500
                focus:border-blue-500 
                block w-full  pl-10 py-2.5 
                 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\">
            <option   value=\"0\">";
        // line 82
        echo ($context["text_category"] ?? null);
        echo "</option>
            ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 84
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 84);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 84) == ($context["category_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 84);
            echo "</option>
              ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 85));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 86
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 86);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 86) == ($context["category_id"] ?? null))) {
                    echo " selected";
                }
                echo ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 86);
                echo "</option>
                ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 87));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 88
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 88);
                    echo "\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 88) == ($context["category_id"] ?? null))) {
                        echo " selected";
                    }
                    echo ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 88);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "          </select> 
          <div class=\"form-check\">
            <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"input-description\" class=\"form-check-input\"";
        // line 94
        if (($context["description"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-description\" class=\"form-check-label\">";
        echo ($context["entry_description"] ?? null);
        echo "</label>
          </div>
          <div hidden class=\"form-check\">
            <input  type=\"checkbox\"  name=\"sub_category\" value=\"1\" id=\"input-sub-category\" class=\"form-check-input\"";
        // line 97
        if (($context["sub_category"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-sub-category\" class=\"form-check-label\">";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
          </div>
        </div>
        
      </div>

          <button type=\"button\" id=\"button-search\" 
          class=\"btn-primary mx-auto w-full md:w-1/2\">";
        // line 104
        echo ($context["button_search"] ?? null);
        echo "</button>

    
      


  </div>




      <hr/>

     
     <h2 class=\"text-center font-bold text-xl\">";
        // line 118
        echo ($context["text_search"] ?? null);
        echo "</h2>

      ";
        // line 120
        if (($context["products"] ?? null)) {
            // line 121
            echo "        <div id=\"display-control\" class=\"flex flex-col\">

          <!-- <div class=\"col-md-3\">
            <div class=\"mb-3\">
              <a href=\"";
            // line 125
            echo ($context["compare"] ?? null);
            echo "\" 
              id=\"compare-total\" 
              class=\"btn btn-primary d-block\">
              <i class=\"fa-solid fa-arrow-right-arrow-left\"></i> <span class=\"d-inline d-md-none d-lg-inline\">";
            // line 128
            echo ($context["text_compare"] ?? null);
            echo "</span></a>
            </div>
          </div> -->


          <!-- <div class=\"flex flex-col\">
            <div class=\"btn-group\">
              <button type=\"button\" id=\"button-list\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 135
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa-solid fa-table-list\"></i></button>
              <button type=\"button\" id=\"button-grid\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 136
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa-solid fa-table-cells\"></i></button>
            </div>
          </div> -->

<div class=\"flex  gap-4 my-4\">
         
           
              <div class=\"flex flex-col basis-1/2 \">
                <label for=\"input-sort\"
                 class=\"font-bold text-xl\">";
            // line 145
            echo ($context["text_sort"] ?? null);
            echo "</label>
                 <select id=\"input-sort\" 
                 class=\"bg-gray-50 border
                 border-gray-300
                  text-gray-900
                   rounded-lg
                    focus:ring-blue-500
                     focus:border-blue-500 
                     block w-full  pl-10 py-2.5 
                      dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\" onchange=\"location = this.value;\">
                  ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 156
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 156);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 156) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 156);
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "                </select>
              </div>
         
         


       
         
              <div class=\"flex flex-col basis-1/2 \">
                <label for=\"input-limit\" 
                class=\"font-bold text-xl\">";
            // line 168
            echo ($context["text_limit"] ?? null);
            echo "</label> 
                <select id=\"input-limit\"
                 class=\"bg-gray-50 border
                 border-gray-300
                  text-gray-900
                   rounded-lg
                    focus:ring-blue-500
                     focus:border-blue-500 
                     block w-full  pl-10 py-2.5 
                      dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\" onchange=\"location = this.value;\">
                  ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 179
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 179);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 179) == ($context["limit"] ?? null))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 179);
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "                </select>
              </div>
            </div>
        
   </div>    


     
        <div id=\"product-list1\" class=\"grid-product\">
        ";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 191
                echo "        ";
                echo $context["product"];
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo "       </div>





        <div class=\"pre\">
          <div class=\"\">";
            // line 200
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"\">";
            // line 201
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        } else {
            // line 204
            echo "
 
 <div class=\" shadow-lg 
 md:w-2/3 mx-auto
        rounded-3xl drop-shadow-xl bg-primary-200
        bg-puplar-400 mt-4
        flex  items-center 
        \" >
        <div class=\"basis-1/2 justify-center  flex  flex-row-reverse items-center  text-center \">
        <p class=\" text-xl \">";
            // line 213
            echo ($context["text_no_results"] ?? null);
            echo "
       

        </p>
         <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-[4rem] h-[4rem]\">
  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z\" />
</svg>
        </div>
        


<div
  class=\"relative  overflow-hidden justify-center
    basis-1/2 gap-4 w-full rounded-3xl  flex items-center p-10  flex-row-reverse  \"
>

<div class=\"mt-10 relative \">
    <div class=\"circle bg-primary-500 relative\">
      <div class=\"absolute rounded-full top-8 right-[1.5rem]  w-6 h-6 bg-white\"></div>
  <div class=\"absolute rounded-full top-8 left-[1.7em]  w-6 h-6 bg-white\"></div>
  <div class=\"absolute rounded-full rounded-b-xl  top-[4.7rem] left-[3.8rem]  w-8 h-8 bg-white\"></div>
    </div>

    <div
    class=\"container2  absolute top-[-6rem] right-1\"
  >
    <div class=\"pentagon-1\"></div>
    <div class=\"pentagon-2\"></div>
  </div>
  </div>








      </div>
      ";
        }
        // line 253
        echo "
      ";
        // line 254
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 255
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>



<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function () {
    url = 'index.php?route=product/search&language=";
        // line 262
        echo ($context["language"] ?? null);
        echo "';

    var search = \$('#input-search').prop('value');

    if (search) {
        url += '&search=' + encodeURIComponent(search);
    }

    var category_id = \$('#input-category').prop('value');

    if (category_id > 0) {
        url += '&category_id=' + encodeURIComponent(category_id);
    }

    var sub_category = \$('#input-sub-category:checked').prop('value');

    if (sub_category) {
        url += '&sub_category=1';
    }

    var filter_description = \$('#input-description:checked').prop('value');

    if (filter_description) {
        url += '&description=1';
    }

    location = url;
});

\$('#input-search').bind('keydown', function (e) {
    if (e.keyCode == 13) {
        \$('#button-search').trigger('click');
    }
});

\$('#input-category').on('change', function () {
    \$('#input-sub-category').prop('disabled', (this.value == '0' ? true : false));
});

\$('#input-category').trigger('change');
//--></script>
";
        // line 303
        echo ($context["footer"] ?? null);
        echo "


<!-- ";
        // line 400
        echo " -->";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  542 => 400,  536 => 303,  492 => 262,  482 => 255,  478 => 254,  475 => 253,  432 => 213,  421 => 204,  415 => 201,  411 => 200,  402 => 193,  393 => 191,  389 => 190,  378 => 181,  363 => 179,  359 => 178,  346 => 168,  334 => 158,  319 => 156,  315 => 155,  302 => 145,  290 => 136,  286 => 135,  276 => 128,  270 => 125,  264 => 121,  262 => 120,  257 => 118,  240 => 104,  226 => 97,  216 => 94,  212 => 92,  206 => 91,  200 => 90,  185 => 88,  181 => 87,  170 => 86,  166 => 85,  155 => 84,  151 => 83,  147 => 82,  123 => 61,  119 => 60,  88 => 31,  82 => 26,  77 => 23,  59 => 14,  55 => 13,  47 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/search.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/product/search.twig");
    }
}
