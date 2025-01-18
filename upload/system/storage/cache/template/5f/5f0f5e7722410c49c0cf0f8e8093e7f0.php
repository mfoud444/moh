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

/* catalog/view/template/product/review.twig */
class __TwigTemplate_a04764336cfb289141203dee22b46e25 extends Template
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
        echo "<form id=\"form-review\" class=\"text-black flex flex-col\">
  <div id=\"review\" class=\" text-xl\">";
        // line 2
        echo ($context["list"] ?? null);
        echo "</div>

  ";
        // line 4
        if (($context["review_guest"] ?? null)) {
            // line 5
            echo "  <div class=\"bg-blue-100 flex flex-col my-4 gap-4  p-4\">
    <h2 class=\"text-center font-bold  text-2xl\">";
            // line 6
            echo ($context["text_write"] ?? null);
            echo "</h2>
    <div class=\"flex flex-col\">
      <label for=\"input-name\" 
      class=\"text-xl\">";
            // line 9
            echo ($context["entry_name"] ?? null);
            echo "</label>
      <input type=\"text\" name=\"name\" value=\"";
            // line 10
            echo ($context["customer_name"] ?? null);
            echo "\" id=\"input-name\"
       class=\"border rounded-md block\"/>
      <div id=\"error-name\" class=\"invalid-feedback\"></div>
    </div>
    <div class=\"flex flex-col\">
      <label for=\"input-text\" 
      class=\"text-xl\">";
            // line 16
            echo ($context["entry_review"] ?? null);
            echo "</label>
      <textarea name=\"text\" rows=\"5\" id=\"input-text\" class=\"form-textarea border rounded-md block\"></textarea>
      <div id=\"error-text\" class=\"invalid-feedback\"></div>
      <!--";
            // line 19
            echo "-->
    </div>
 <div class=\" flex gap-4 items-center\">
  <span> التقييم</span>
  <div class=\"rating\" id=\"input-rating\">
    <input type=\"radio\" id=\"star5\" name=\"rating\" value=\"5\" />
    <label for=\"star5\"> <svg aria-hidden=\"true\" class=\"w-8 h-8 \" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><title>Fifth star</title><path d=\"M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z\"></path></svg></label>
    <input type=\"radio\" id=\"star4\" name=\"rating\" value=\"4\" />
    <label for=\"star4\"><svg aria-hidden=\"true\" class=\"w-8 h-8 \" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><title>Fifth star</title><path d=\"M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z\"></path></svg></label>
    <input type=\"radio\" id=\"star3\" name=\"rating\" value=\"3\" />
    <label for=\"star3\"><svg aria-hidden=\"true\" class=\"w-8 h-8 \" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><title>Fifth star</title><path d=\"M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z\"></path></svg></label>
    <input type=\"radio\" id=\"star2\" name=\"rating\" value=\"2\" />
    <label for=\"star2\"><svg aria-hidden=\"true\" class=\"w-8 h-8 \" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><title>Fifth star</title><path d=\"M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z\"></path></svg></label>
    <input type=\"radio\" id=\"star1\" name=\"rating\" value=\"1\" />
    <label for=\"star1\"><svg aria-hidden=\"true\" class=\"w-8 h-8 \" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><title>Fifth star</title><path d=\"M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z\"></path></svg></label>
    <div id=\"error-rating\" class=\"invalid-feedback\"></div>
</div>
 </div>
  
      <!-- ";
            // line 53
            echo "-->
    ";
            // line 54
            echo ($context["captcha"] ?? null);
            echo "
  
      <div class=\"text-end\">
        <button type=\"submit\"
         id=\"button-review\" 
         class=\"btn-primary w-28 rounded-full\">";
            // line 59
            echo ($context["button_continue"] ?? null);
            echo "</button>
      </div>
     </div>

  ";
        } else {
            // line 64
            echo "    ";
            echo ($context["text_login"] ?? null);
            echo "
  ";
        }
        // line 66
        echo "</form>



<script type=\"text/javascript\"><!--
\$('#review').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#review').load(this.href);
});

// Forms
\$('#form-review').on('submit', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=product/review|write&language=";
        // line 84
        echo ($context["language"] ?? null);
        echo "&review_token=";
        echo ($context["review_token"] ?? null);
        echo "&product_id=";
        echo ($context["product_id"] ?? null);
        echo "',
        type: 'post',
        data: \$('#form-review').serialize(),
        dataType: 'json',
        cache: false,
        contentType: 'application/x-www-form-urlencoded',
        processData: false,
        beforeSend: function () {
            \$('#button-review').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-review').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();
            \$('#form-review').find('.is-invalid').removeClass('is-invalid');
            \$('#form-review').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
              if (json['error']['warning']) {
                  \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
              }

              for (key in json['error']) {
                  \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                  \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
              }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#input-text').val('');
                \$('#input-rating input[type=\\'radio\\']').prop('checked', false);
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 84,  121 => 66,  115 => 64,  107 => 59,  99 => 54,  96 => 53,  75 => 19,  69 => 16,  60 => 10,  56 => 9,  50 => 6,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/review.twig", "/opt/lampp/htdocs/moh/upload/catalog/view/template/product/review.twig");
    }
}
