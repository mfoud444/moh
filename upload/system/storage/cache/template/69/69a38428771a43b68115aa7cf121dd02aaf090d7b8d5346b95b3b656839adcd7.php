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

/* catalog/view/template/checkout/cart.twig */
class __TwigTemplate_4c5fabf245c405083157c7c305540356a263111220b6459ab8285219ad3689d7 extends Template
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
<div id=\"checkout-cart\" class=\"container  my-2 md:my-4\">

  <div class=\"breadcrumb\">
   <a href=\"";
        // line 5
        echo ($context["home"] ?? null);
        echo "\">
   <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 fill-secondary\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
            <path d=\"M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z\" />
        </svg>
      </a>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "     <a class=\"breadcrumb-child\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a>
     <span class=\"mx-0  dark:text-gray-300 rtl:-scale-x-100\">
     
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
        // line 20
        echo "  </div>


  ";
        // line 23
        if (($context["attention"] ?? null)) {
            // line 24
            echo "    <div class=\"alert alert-info my-1 min-w-[10rem] \"><i class=\"fa-solid fa-circle-info\"></i> ";
            echo ($context["attention"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 26
        echo "

  ";
        // line 28
        if (($context["success"] ?? null)) {
            // line 29
            echo "    <div class=\"alert alert-success alert-dismissible my-1 min-w-[10rem]\"><i class=\"fa-solid fa-circle-check\"></i> ";
            echo ($context["success"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 31
        echo "

  ";
        // line 33
        if (($context["error_warning"] ?? null)) {
            // line 34
            echo "    <div class=\"alert alert-danger alert-dismissible my-1  min-w-[10rem]\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 36
        echo "

  <div class=\"row\"> 
  ";
        // line 39
        echo ($context["column_left"] ?? null);
        echo "
  <h1 class=\"text-center font-bold text-xl\">";
        // line 40
        echo ($context["heading_title"] ?? null);
        if (($context["weight"] ?? null)) {
            echo " (";
            echo ($context["weight"] ?? null);
            echo ")";
        }
        echo "</h1>

    <div id=\"content\" class=\"grid  md:grid-cols-2 gap-2 \">";
        // line 42
        echo ($context["content_top"] ?? null);
        echo "

      <div  class=\"  pb-2\">
        <div id=\"shopping-cart\">";
        // line 45
        echo ($context["list"] ?? null);
        echo "</div> 
        <div class=\"flex items-center  bg-primary-200 fixed md:relative rounded-tl-xl  md:rounded-b-lg md:rounded-t-0 md:rounded-tl-0  bottom-0  h-[6rem] py-2   left-0 w-1/2 flex-row-reverse gap-4\">
       ";
        // line 48
        echo "     
          <a href=\"";
        // line 49
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn-primary mx-2 mt-6 w-full \">";
        echo ($context["button_checkout"] ?? null);
        echo "</a>
        </div>
      </div>

      ";
        // line 53
        if (($context["modules"] ?? null)) {
            // line 54
            echo "      <div>
        <h2 class=\"font-bold mb-1\">";
            // line 55
            echo ($context["text_next"] ?? null);
            echo "</h2>
     ";
            // line 57
            echo "        <div id=\"accordion\" class=\"grid md:grid-cols-2 gap-2\">
          ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 59
                echo "            ";
                echo $context["module"];
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "        </div>
      </div>
      ";
        }
        // line 64
        echo "     
      
     

    </div>
      ";
        // line 69
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 70
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>


<script type=\"text/javascript\"><!--
\$('#shopping-cart').on('submit', 'form', function (e) {
    e.preventDefault();

    var element = this;

    if (e.originalEvent !== undefined && e.originalEvent.submitter !== undefined) {
        var button = e.originalEvent.submitter;
    } else {
        var button = '';
    }

    \$.ajax({
        url: \$(button).attr('formaction'),
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$(button).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(button).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            console.log(json);

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
              
              //  \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            \$('#shopping-cart').load('index.php?route=checkout/cart|list&language=";
        // line 113
        echo ($context["language"] ?? null);
        echo "', {}, function () {
                \$('#header-cart').load('index.php?route=common/cart|info&language=";
        // line 114
        echo ($context["language"] ?? null);
        echo "');
            });
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 123
        echo ($context["footer"] ?? null);
        echo "



";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 123,  244 => 114,  240 => 113,  194 => 70,  190 => 69,  183 => 64,  178 => 61,  169 => 59,  165 => 58,  162 => 57,  158 => 55,  155 => 54,  153 => 53,  144 => 49,  141 => 48,  136 => 45,  130 => 42,  120 => 40,  116 => 39,  111 => 36,  105 => 34,  103 => 33,  99 => 31,  93 => 29,  91 => 28,  87 => 26,  81 => 24,  79 => 23,  74 => 20,  56 => 11,  52 => 10,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/cart.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/checkout/cart.twig");
    }
}
