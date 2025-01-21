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

/* catalog/view/template/account/wishlist_list.twig */
class __TwigTemplate_fa521b6f569f12afe45a647704551b1bb4b3c7ac8d0920fc55e85a37b49f733e extends Template
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
        if (($context["products"] ?? null)) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 3
                echo "<form
  method=\"post\"  
  data-oc-toggle=\"ajax\"
  data-oc-load=\"";
                // line 6
                echo ($context["wishlist"] ?? null);
                echo "\"
  data-oc-target=\"#wishlist\" 
  class=\"max-h-[25rem] w-11/12 flex flex-col md:max-h-[26rem] shadow-lg rounded-xl p-2 bg-primary-100\"
>

<input type=\"hidden\" name=\"product_id\" value=\"";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 11);
                echo "\"/> 
<input type=\"hidden\" name=\"quantity\" value=\"";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 12);
                echo "\"/>
 
  <div class=\"flex items-center gap-2\">
    ";
                // line 16
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "    <a href=\"";
                    echo ($context["href"] ?? null);
                    echo "\">
      <img
      src=\"";
                    // line 19
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 19);
                    echo "\" 
        alt=\"";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
                    echo "\" 
        title=\"";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
                    echo "
        class=\"w-full object-none h-48\"
      />
    </a>
    ";
                }
                // line 26
                echo "    ";
                // line 27
                echo "    <div class=\"flex flex-col font-bold w-full\">
      <a
        class=\"text-xl cursor-pointer text-gray-900 hover:text-purple-500 truncate dark:text-white\"
        href=\"";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 30);
                echo "\"
        >";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                echo "</a
      >
    </div>
  </div>
 
  <div class=\"grow flex flex-col justify-between\">
   


  

    ";
                // line 42
                echo "  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 42)) {
                    // line 43
                    echo "    <div class=\"flex flex-none gap-4 content-end\">
      ";
                    // line 44
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 44)) {
                        // line 45
                        echo "      <span class=\"text-xl font-bold text-gray-900 dark:text-white\">";
                        echo twig_get_attribute($this->env, $this->source,                         // line 46
$context["product"], "price", [], "any", false, false, false, 46);
                        // line 47
                        echo "</span>
      ";
                    } else {
                        // line 49
                        echo "      <span class=\"text-xl font-bold text-gray-900 dark:text-white\">";
                        echo twig_get_attribute($this->env, $this->source,                         // line 50
$context["product"], "special", [], "any", false, false, false, 50);
                        // line 51
                        echo "</span>
      <span
        class=\"text-xl line-through font-bold text-red-900 dark:text-white\"
        >";
                        // line 54
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 54);
                        echo "</span
      >
      ";
                    }
                    // line 56
                    echo " ";
                    // line 61
                    echo "    </div>
    ";
                }
                // line 62
                echo " ";
                // line 63
                echo "    <div class=\"flex-none font-bold flex gap-2 items-center\">
      <button
        type=\"submit\"
        formaction=\"";
                // line 66
                echo ($context["add_to_cart"] ?? null);
                echo "\"
        data-bs-toggle=\"tooltip\"
        class=\"btn-order bg-whatsapp hover:bg-#2bb826 focus:ring-blue-300\"
      >
        <?xml version=\"1.0\"?><svg
          fill=\"#fff\"
          xmlns=\"http://www.w3.org/2000/svg\"
          viewBox=\"0 0 24 24\"
          width=\"24px\"
          height=\"24px\"
        >
          <path
            d=\"M 12.011719 2 C 6.5057187 2 2.0234844 6.478375 2.0214844 11.984375 C 2.0204844 13.744375 2.4814687 15.462563 3.3554688 16.976562 L 2 22 L 7.2324219 20.763672 C 8.6914219 21.559672 10.333859 21.977516 12.005859 21.978516 L 12.009766 21.978516 C 17.514766 21.978516 21.995047 17.499141 21.998047 11.994141 C 22.000047 9.3251406 20.962172 6.8157344 19.076172 4.9277344 C 17.190172 3.0407344 14.683719 2.001 12.011719 2 z M 12.009766 4 C 14.145766 4.001 16.153109 4.8337969 17.662109 6.3417969 C 19.171109 7.8517969 20.000047 9.8581875 19.998047 11.992188 C 19.996047 16.396187 16.413812 19.978516 12.007812 19.978516 C 10.674812 19.977516 9.3544062 19.642812 8.1914062 19.007812 L 7.5175781 18.640625 L 6.7734375 18.816406 L 4.8046875 19.28125 L 5.2851562 17.496094 L 5.5019531 16.695312 L 5.0878906 15.976562 C 4.3898906 14.768562 4.0204844 13.387375 4.0214844 11.984375 C 4.0234844 7.582375 7.6067656 4 12.009766 4 z M 8.4765625 7.375 C 8.3095625 7.375 8.0395469 7.4375 7.8105469 7.6875 C 7.5815469 7.9365 6.9355469 8.5395781 6.9355469 9.7675781 C 6.9355469 10.995578 7.8300781 12.182609 7.9550781 12.349609 C 8.0790781 12.515609 9.68175 15.115234 12.21875 16.115234 C 14.32675 16.946234 14.754891 16.782234 15.212891 16.740234 C 15.670891 16.699234 16.690438 16.137687 16.898438 15.554688 C 17.106437 14.971687 17.106922 14.470187 17.044922 14.367188 C 16.982922 14.263188 16.816406 14.201172 16.566406 14.076172 C 16.317406 13.951172 15.090328 13.348625 14.861328 13.265625 C 14.632328 13.182625 14.464828 13.140625 14.298828 13.390625 C 14.132828 13.640625 13.655766 14.201187 13.509766 14.367188 C 13.363766 14.534188 13.21875 14.556641 12.96875 14.431641 C 12.71875 14.305641 11.914938 14.041406 10.960938 13.191406 C 10.218937 12.530406 9.7182656 11.714844 9.5722656 11.464844 C 9.4272656 11.215844 9.5585938 11.079078 9.6835938 10.955078 C 9.7955938 10.843078 9.9316406 10.663578 10.056641 10.517578 C 10.180641 10.371578 10.223641 10.267562 10.306641 10.101562 C 10.389641 9.9355625 10.347156 9.7890625 10.285156 9.6640625 C 10.223156 9.5390625 9.737625 8.3065 9.515625 7.8125 C 9.328625 7.3975 9.131125 7.3878594 8.953125 7.3808594 C 8.808125 7.3748594 8.6425625 7.375 8.4765625 7.375 z\"
          />
        </svg>

        <p class=\"text-xs\">طلب المنتج</p>
      </button>

      <button
      type=\"submit\"
       formaction=\"";
                // line 87
                echo ($context["add_to_cart"] ?? null);
                echo "\"
        data-bs-toggle=\"tooltip\"
        class=\"btn-order bg-primary-800 hover:bg-#2bb826\"
      >
        <svg
          aria-hidden=\"true\"
          class=\"w-5 h-5\"
          fill=\"currentColor\"
          viewBox=\"0 0 20 20\"
          xmlns=\"http://www.w3.org/2000/svg\"
        >
          <path
            d=\"M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z\"
          ></path>
        </svg>
        <p class=\"text-xs\">أضف للسلة</p>
      </button>

      <button
      type=\"submit\"
       formaction=\"";
                // line 107
                echo ($context["remove"] ?? null);
                echo "\"
        data-bs-toggle=\"tooltip\"
        class=\"transition ease-in duration-300 bg-white flex items-center justify-center hover:text-purple-500 shadow hover:shadow-md text-gray-500 rounded-full w-10 h-10 text-center p-1\"
      >
        <svg
          xmlns=\"http://www.w3.org/2000/svg\"
          class=\"h-8 w-8 fill-red-700 text-red-700\"
          fill=\"none\"
          viewBox=\"0 0 24 24\"
          stroke=\"currentColor\"
        >
          <path
            stroke-linecap=\"round\"
            stroke-linejoin=\"round\"
            stroke-width=\"2\"
            d=\"M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z\"
          />
        </svg>
      </button>
    </div>
  </div>

 
</form>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 133
            echo "  <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
";
        }
        // line 135
        echo "


";
        // line 211
        echo "



























";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/wishlist_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 211,  245 => 135,  239 => 133,  207 => 107,  184 => 87,  160 => 66,  155 => 63,  153 => 62,  149 => 61,  147 => 56,  141 => 54,  136 => 51,  134 => 50,  132 => 49,  128 => 47,  126 => 46,  124 => 45,  122 => 44,  119 => 43,  116 => 42,  102 => 31,  98 => 30,  93 => 27,  91 => 26,  83 => 21,  79 => 20,  75 => 19,  69 => 17,  66 => 16,  60 => 12,  56 => 11,  48 => 6,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/wishlist_list.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/account/wishlist_list.twig");
    }
}
