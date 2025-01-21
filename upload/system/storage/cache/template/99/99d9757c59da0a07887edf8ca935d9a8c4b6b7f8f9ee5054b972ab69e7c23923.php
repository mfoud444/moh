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

/* catalog/view/template/information/contact.twig */
class __TwigTemplate_5d62eae3fa898ee796f820d253e0d8c7e36333acfef34df77ae9854650281c22 extends Template
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
<div id=\"information-contact\" class=\"container my-2 md:my-4\">


   <div class=\"breadcrumb\">
   <a href=\"";
        // line 6
        echo ($context["home"] ?? null);
        echo "\">
   <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 fill-secondary\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
            <path d=\"M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z\" />
        </svg>
      </a>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "     <a class=\"breadcrumb-child\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
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
        // line 21
        echo "  </div>


  <div class=\"\">
    ";
        // line 25
        echo ($context["column_left"] ?? null);
        echo "
         <h1 class=\"heading-title my-2\">";
        // line 26
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    <div id=\"content\" class=\" grid grid-cols-1 md:grid-cols-2 gap-2  \">
      ";
        // line 28
        echo ($context["content_top"] ?? null);
        echo "
     ";
        // line 98
        echo "  


";
        // line 102
        echo "       ";
        if (($context["locations"] ?? null)) {
            // line 103
            echo "     
      <div id=\"accordion\" class=\"card-group flex flex-col gap-4 \">
        <h3 class=\" font-bold text-xl p-2 rounded-lg bg-red-300 w-1/2\">";
            // line 105
            echo ($context["text_store"] ?? null);
            echo "</h3>
        ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 107
                echo "        <div class=\" \">

     <div id=\"map\"></div>
         
          <div class=\"card-header\">
            ";
                // line 112
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 112)) {
                    // line 113
                    echo "            <div 
            id = \"";
                    // line 114
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 114);
                    echo "\"
             class=\" h-44 bg-red-300 rounded-t-xl\"></div>
            ";
                }
                // line 117
                echo "            
<!-- 
            <h4 class=\"card-title pt-2\">
              <a
                href=\"#collapse-location-";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 121);
                echo "\"
                class=\"accordion-toggle\"
                data-bs-toggle=\"collapse\"
                data-bs-parent=\"#accordion\"
                >";
                // line 125
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 125);
                echo " <i class=\"fa-solid fa-caret-down\"></i
              ></a>
            </h4> -->

          </div>
        
          <div
            class=\"card-collapse rounded-b-xl pb-1 collapse\"
            id=\"collapse-location-";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 133);
                echo "\"
          >
            <div class=\"card-body bg-primary-200\">

              <div class=\"row flex flex-col px-2   gap-2\">

               

                <div class=\"col-sm-3 flex items-center justify-between \">
                  <div class=\"flex items-center \">
                  ";
                // line 143
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 143)) {
                    // line 144
                    echo "               
                     <img
                      src=\"";
                    // line 146
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 146);
                    echo "\"
                      alt=\"";
                    // line 147
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 147);
                    echo "\"
                      title=\"";
                    // line 148
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 148);
                    echo "\"
                      class=\"w-32 object-fill\"
                    /> 
               
                  ";
                }
                // line 153
                echo "                  <a
                  href=\"#collapse-location-";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 154);
                echo "\"
                  class=\" text-blue-800 font-bold text-xl\"
                  data-bs-toggle=\"collapse\"
                  data-bs-parent=\"#accordion\"
                  >";
                // line 158
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 158);
                echo " </a>
                
                </div>
                
               

                </div>

                <div class=\"col-sm-3 flex flex-col gap-1\">
                  <strong class=\"flex gap-2 items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5\">
                      <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z\" />
                    </svg>
                    
                    ";
                // line 172
                echo ($context["text_telephone"] ?? null);
                echo " 
                  </strong>
                  <a href=\"tel:";
                // line 174
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 174);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 174);
                echo "</a>
                  
                </div>
                                
<div class=\" flex flex-col gap-1 \">
 
  <strong class=\" flex  gap-2 items-center\">

    <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
      <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 10.5a3 3 0 11-6 0 3 3 0 016 0z\" />
      <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z\" />
    </svg>
    العنوان
  </strong>
  <address>
    ";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 189);
                echo "
  </address>
  ";
                // line 203
                echo "</div>
                

                <div class=\"col-sm-3  flex flex-col gap-1\">
                  ";
                // line 207
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 207)) {
                    // line 208
                    echo "                  <strong class=\" flex gap-2 items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
                      <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    
                    ";
                    // line 213
                    echo ($context["text_open"] ?? null);
                    echo "
                  </strong>
              
                  ";
                    // line 216
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 216);
                    echo "
             
                  ";
                }
                // line 219
                echo "                  
                </div>
                
                 <div class=\"col-sm-3  \">
                  ";
                // line 223
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 223)) {
                    // line 224
                    echo "                  <strong class=\" flex gap-2 items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
                      <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z\" />
                    </svg>
                    
                    ";
                    // line 229
                    echo ($context["text_comment"] ?? null);
                    echo "</strong>
              
                  <p class=\"mr-4\"> ";
                    // line 231
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 231);
                    echo " </p>
                  ";
                }
                // line 233
                echo "                 </div>


              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            echo "      </div>
      ";
        }
        // line 242
        echo " 



      <form
        id=\"form-contact\"
        action=\"";
        // line 248
        echo ($context["send"] ?? null);
        echo "\"
        method=\"post\"
        data-oc-toggle=\"ajax\"
        class=\"m-2 basis-1/2 p-2 border-dotted border-2  border-primary-600\"
      >
        <fieldset class=\"flex flex-col gap-2 \">
          <legend class=\"heading-title\">";
        // line 254
        echo ($context["text_contact"] ?? null);
        echo "</legend>
          <div class=\"required\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 256
        echo         // line 257
($context["entry_name"] ?? null);
        // line 258
        echo "</label>
            <div class=\"col-sm-10\">
              <input
                type=\"text\"
                name=\"name\"
                value=\"";
        // line 263
        echo ($context["name"] ?? null);
        echo "\"
                id=\"input-name\"
                class=\"form-control\"
              />
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>

          
          <div class=\"required\">
            <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 273
        echo         // line 274
($context["entry_email"] ?? null);
        // line 275
        echo "</label>

            <div class=\"relative\">
             <input
                type=\"text\"
                name=\"email\"
                value=\"";
        // line 281
        echo ($context["email"] ?? null);
        echo "\"
                id=\"input-email\"
                class=\"form-email\"
              />
            <svg
              xmlns=\"http://www.w3.org/2000/svg\"
              class=\" absolute inset-x-2 inset-y-3 w-6 h-6 text-black dark:text-gray-500\"
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
          </div>
             
             
              <div id=\"error-email\" class=\"invalid-feedback\"></div>
            </div>
          

          
          <div class=\"required\">
            <label for=\"input-enquiry\" class=\"col-form-label\">";
        // line 308
        echo         // line 309
($context["entry_enquiry"] ?? null);
        // line 310
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea
                name=\"enquiry\"
                rows=\"5\"
                id=\"input-enquiry\"
                class=\"form-textarea w-full rounded-xl\"
              ></textarea>
              <div id=\"error-enquiry\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          ";
        // line 321
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>

          <div class=\"text-center\">
            <button type=\"submit\" class=\"btn-primary w-1/3\">
              ";
        // line 326
        echo ($context["button_submit"] ?? null);
        echo "
            </button>
          </div>
      
      </form>
      ";
        // line 331
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 333
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 336
        echo ($context["footer"] ?? null);
        echo " 
<script async defer
  src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBEEJKDejOw7F4QK2_xllkgH4MeOgQvuuI&callback=initMap\">
</script>

<script type=\"text/javascript\"><!--
function initMap() {
  // The location of Uluru
  const uluru = { lat: -25.344, lng: 131.031 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById(\"map\"), {
    zoom: 4,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}

window.initMap = initMap;
// function initialize() {
//   // array of lat and lng locations
//   let locations = [{
//       lat: -33.91722,
//       lng: 151.23064,
//       markers: [{
//           lat: -33.91722,
//           lng: 151.23064,
//           info: \"this is a marker at -33.91722,151.23064\"
//         }, {
//           lat: -33.8722,
//           lng: 151.03064,
//           info: \"this is a marker at -33.8722,151.03064\"
//         },
//         {
//           lat: -33.5722,
//           lng: 151.03064,
//           info: \"this is a marker at -33.5722,151.03064\"
//         }
//       ]
//     },
//     {
//       lat: 22.3193,
//       lng: 114.1694,
//       markers: [{
//         lat: 22.3193,
//         lng: 114.1694,
//         info: \"this is a marker at 22.3193,114.1694\"
//       }]
//     },
    
//   ];

      
//   let elements = ['1', '2'];

//   window.addEventListener('load',
  
//     function() {
     
//       for (i = 0; i < elements.length; i++) {
//         initMap(locations[i], elements[i], new google.maps.InfoWindow());
//         console.log(elements[i]);
//         console.log(locations[i])
//       }
//     }, false);

//   function initMap(location, element, infowindow) {
//     console.log(location)
//     console.log(element)
//     map = new google.maps.Map(document.getElementById(element), {
//       zoom: 4,
//       center: location
//     });
//     if (location.markers) {
//       for (var i = 0; i < location.markers.length; i++) {
//         createMarker(location.markers[i], map, infowindow);
//       }
//     }
//   }

//   function createMarker(location, map, infowindow) {
//     let marker = new google.maps.Marker({
//       position: location,
//       map: map
//     });
//     google.maps.event.addListener(marker, 'click', function(evt) {
//       infowindow.setContent(location.info);
//       infowindow.open(map, marker);
//     })
//   }
// }

//--></script>




";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 336,  440 => 333,  435 => 331,  427 => 326,  419 => 321,  406 => 310,  404 => 309,  403 => 308,  373 => 281,  365 => 275,  363 => 274,  362 => 273,  349 => 263,  342 => 258,  340 => 257,  339 => 256,  334 => 254,  325 => 248,  317 => 242,  313 => 241,  300 => 233,  295 => 231,  290 => 229,  283 => 224,  281 => 223,  275 => 219,  269 => 216,  263 => 213,  256 => 208,  254 => 207,  248 => 203,  243 => 189,  223 => 174,  218 => 172,  201 => 158,  194 => 154,  191 => 153,  183 => 148,  179 => 147,  175 => 146,  171 => 144,  169 => 143,  156 => 133,  145 => 125,  138 => 121,  132 => 117,  126 => 114,  123 => 113,  121 => 112,  114 => 107,  110 => 106,  106 => 105,  102 => 103,  99 => 102,  94 => 98,  90 => 28,  85 => 26,  81 => 25,  75 => 21,  57 => 12,  53 => 11,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/information/contact.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/information/contact.twig");
    }
}
