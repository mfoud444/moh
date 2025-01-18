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

/* extension/opencart/catalog/view/template/total/shipping.twig */
class __TwigTemplate_8931ce6b266ba86c006823586e876137 extends Template
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
        echo "<div class=\"border-dotted hidden flex p-2 flex-col gap-2 border-2 border-primary-600\">
  
    <button
      type=\"button\"
      class=\"flex  bg-red-300 rounded-full py-1 items-center gap-2 justify-center font-bold text-base\"
      data-bs-toggle=\"collapse\"
      data-bs-target=\"#collapse-shipping\"
    >
    <?xml version=\"1.0\" encoding=\"utf-8\"?><svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\"
    xmlns:xlink=\"http://www.w3.org/1999/xlink\" class=\"h-8 w-8\" x=\"0px\" y=\"0px\" viewBox=\"0 0 122.88 76.76\"
    style=\"enable-background:new 0 0 122.88 76.76\" xml:space=\"preserve\">
    <style type=\"text/css\">
        .st0 {
            fill-rule: evenodd;
            clip-rule: evenodd;
        }
    </style>
    <g>
        <path class=\"st0\"
            d=\"M110.7,64.75c0,3.31-1.1,6.15-3.34,8.49c-2.21,2.34-4.91,3.52-8.06,3.52c-3.17,0-5.86-1.18-8.08-3.52 c-2.21-2.34-3.33-5.18-3.33-8.49c0-3.32,1.12-6.15,3.33-8.49c2.22-2.36,4.91-3.52,8.08-3.52c3.15,0,5.84,1.16,8.06,3.52 C109.6,58.59,110.7,61.43,110.7,64.75L110.7,64.75z M100.12,20.9h22.76v17.79h-22.76V20.9L100.12,20.9z M95.95,20.9H73.19v17.79 h22.76V20.9L95.95,20.9z M69.02,20.9H46.26v17.79h22.76V20.9L69.02,20.9z M100.12,17.79h22.76V0h-22.76V17.79L100.12,17.79z M95.95,17.79H73.19V0h22.76V17.79L95.95,17.79z M69.02,17.79H46.26V0h22.76V17.79L69.02,17.79z M99.76,60.92 c2.11,0,3.83,1.71,3.83,3.83c0,2.11-1.71,3.83-3.83,3.83c-2.11,0-3.83-1.71-3.83-3.83C95.94,62.63,97.65,60.92,99.76,60.92 L99.76,60.92z M27.18,60.92c2.11,0,3.83,1.71,3.83,3.83c0,2.11-1.71,3.83-3.83,3.83c-2.11,0-3.83-1.71-3.83-3.83 C23.35,62.63,25.07,60.92,27.18,60.92L27.18,60.92z M38.52,64.75c0,3.31-1.1,6.15-3.33,8.49c-2.22,2.34-4.91,3.52-8.06,3.52 c-3.17,0-5.86-1.18-8.08-3.52c-2.22-2.34-3.33-5.18-3.33-8.49c0-3.32,1.12-6.15,3.33-8.49c2.22-2.36,4.91-3.52,8.08-3.52 c3.15,0,5.84,1.16,8.06,3.52C37.42,58.59,38.52,61.43,38.52,64.75L38.52,64.75z M122.36,70.98h-8.47c0.74-1.91,1.11-3.99,1.11-6.23 c0-4.53-1.5-8.4-4.55-11.59c-3.02-3.22-6.7-4.8-11-4.8c-4.33,0-8,1.58-11.03,4.8c-3.02,3.2-4.55,7.07-4.55,11.59 c0,2.24,0.37,4.32,1.12,6.23H45.62V42.84h76.73V70.98L122.36,70.98z M42.71,53.87l-2.82,1.4c-0.51-0.74-1.09-1.45-1.74-2.14 c-3.03-3.23-6.71-4.82-11.01-4.82c-4.33,0-8.02,1.59-11.05,4.82c-3.03,3.2-4.56,7.08-4.56,11.61c0,1.53,0.52,4.86,0.87,6.24 L0,70.98c0-11.61,0-23.22,0-34.84c0-4.53,2.89-6.8,8.69-6.8l3.26,0l8.36-17.41c1.16-2.78,3.26-4.16,6.23-4.16h16.17V53.87 L42.71,53.87z M37.37,37.34V17.27H22.97l-7.62,20.08H37.37L37.37,37.34L37.37,37.34z\" />
    </g>
</svg>
      ";
        // line 23
        echo ($context["heading_title"] ?? null);
        echo "
    </button>

  <div
    id=\"collapse-shipping\"
    class=\"accordion-collapse collapse\"
    data-bs-parent=\"#accordion\"
  >
    <div class=\"accordion-body\">
      <form id=\"form-quote\">
        <p class=\"\">";
        // line 33
        echo ($context["text_destination"] ?? null);
        echo "</p>

        <div class=\"row mb-3 required\">
            <label for=\"input-country\" hidden class=\"col-md-4 col-form-label\">";
        // line 36
        echo ($context["entry_country"] ?? null);
        echo "</label>
            <div class=\"col-md-8\">
              <select name=\"country_id\" hidden id=\"input-country\" class=\"form-select\">
                <option value=\"\">";
        // line 39
        echo ($context["text_select"] ?? null);
        echo "</option>
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 41
            echo "                  <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 41);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 41) == ($context["country_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 41);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "              </select>
              <div id=\"error-country\" class=\"invalid-feedback\"></div>
            </div>
          </div>

        <div class=\"row mb-3 required\">
          <label for=\"input-zone\" class=\"col-md-4 col-form-label\">";
        // line 49
        echo         // line 50
($context["entry_zone"] ?? null);
        // line 51
        echo "</label>
          <div class=\"col-md-8\">
            <select name=\"zone_id\" id=\"input-zone\" class=\"form-select\"></select>
            <div id=\"error-zone\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"row mb-3 required\">
          <label for=\"input-postcode\" hidden class=\"col-md-4 col-form-label\">";
        // line 58
        echo         // line 59
($context["entry_postcode"] ?? null);
        // line 60
        echo "</label>
          <div class=\"col-md-8\">
            <input
              type=\"text\"
              name=\"postcode\"
              hidden
              value=\"";
        // line 66
        echo ($context["postcode"] ?? null);
        echo "\"
              placeholder=\"";
        // line 67
        echo ($context["entry_postcode"] ?? null);
        echo "\"
              id=\"input-postcode\"
              class=\"w-full form-control\"
            />
            <div id=\"error-postcode\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"text-end\">
          <button type=\"submit\" id=\"button-quote\" class=\"w-1/2 btn-primary\">
            ";
        // line 76
        echo ($context["button_quote"] ?? null);
        echo "
          </button>
        </div>
      </form>
    </div>
  </div>
  <script type=\"text/javascript\">
    <!--
      \$('#form-quote').on('submit', function (e) {
          e.preventDefault();

          \$.ajax({
              url: 'index.php?route=extension/opencart/total/shipping|quote&language=";
        // line 88
        echo ($context["language"] ?? null);
        echo "',
              type: 'post',
              data: \$('#form-quote').serialize(),
              dataType: 'json',
              beforeSend: function () {
                  \$('#button-quote').prop('disabled', true).addClass('loading');
              },
              complete: function () {
                  \$('#button-quote').prop('disabled', false).removeClass('loading');
              },
              success: function (json) {
                  \$('.alert-dismissible').remove();
                  \$('#form-shipping').find('.is-invalid').removeClass('is-invalid');
                  \$('#form-shipping').find('.invalid-feedback').removeClass('d-block');

                  if (json['error']) {
                      if (json['error']['warning']) {
                          \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                      }

                      for (key in json['error']) {
                          \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                          \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                      }
                  }

                  if (json['shipping_method']) {
                      \$('#modal-shipping').remove();

                      html = '<div id=\"modal-shipping\" class=\"modal\">';
                      html += '  <div class=\"modal-dialog\">';
                      html += '    <div class=\"modal-content\">';
                      html += '      <div class=\"modal-header\">';
                      html += '        <h4 class=\"modal-title\">";
        // line 121
        echo ($context["text_shipping_method"] ?? null);
        echo "</h4>';
                      html += '        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
                      html += '      </div>';
                      html += '      <div class=\"modal-body\">';
                      html += '        <form id=\"form-shipping\">';
                      html += '          <p>";
        // line 126
        echo ($context["text_estimate"] ?? null);
        echo "</p>';

                      for (i in json['shipping_method']) {
                          html += '<p><strong>' + json['shipping_method'][i]['title'] + '</strong></p>';

                          if (!json['shipping_method'][i]['error']) {
                              for (j in json['shipping_method'][i]['quote']) {
                                  html += '<div class=\"form-check\">';

                                  if (json['shipping_method'][i]['quote'][j]['code'] == '";
        // line 135
        echo ($context["shipping_method"] ?? null);
        echo "') {
                                      html += '<input type=\"radio\" name=\"shipping_method\" value=\"' + json['shipping_method'][i]['quote'][j]['code'] + '\" id=\"input-shipping-method-' + i + '-' + j.replaceAll('_', '-') + '\" checked/>';
                                  } else {
                                      html += '<input type=\"radio\" name=\"shipping_method\" value=\"' + json['shipping_method'][i]['quote'][j]['code'] + '\" id=\"input-shipping-method-' + i + '-' + j.replaceAll('_', '-') + '\"/>';
                                  }

                                  html += '  <label for=\"input-shipping-method-' + i + '\">' + json['shipping_method'][i]['quote'][j]['title'] + ' - ' + json['shipping_method'][i]['quote'][j]['text'] + '</label>';
                                  html += '</div>';
                              }
                          } else {
                              html += '<div class=\"alert alert-danger alert-dismissible\">' + json['shipping_method'][i]['error'] + '</div>';
                          }
                      }

                      html += '          <div class=\"text-end\">';
                      html += '            <button type=\"submit\" id=\"button-shipping\" class=\"btn btn-primary\">";
        // line 150
        echo ($context["button_shipping"] ?? null);
        echo "</button>';
                      html += '          </div>';
                      html += '        </form>';
                      html += '      </div>';
                      html += '    </div>';
                      html += '  </div>';
                      html += '</div>';

                      \$('body').append(html);

                      \$('#modal-shipping').modal('show');
                  }
              },
              error: function (xhr, ajaxOptions, thrownError) {
                  console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
              }
          });
      });

      \$(document).on('submit', '#form-shipping', function (e) {
          e.preventDefault();

          \$.ajax({
              url: 'index.php?route=extension/opencart/total/shipping|save&language=";
        // line 173
        echo ($context["language"] ?? null);
        echo "',
              type: 'post',
              data: \$('#form-shipping').serialize(),
              dataType: 'json',
              contentType: 'application/x-www-form-urlencoded',
              beforeSend: function () {
                  \$('#button-shipping').prop('disabled', true).addClass('loading');
              },
              complete: function () {
                  \$('#button-shipping').prop('disabled', false).removeClass('loading');
              },
              success: function (json) {
                  \$('.alert-dismissible').remove();

                  if (json['error']) {
                      \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                  }

                  if (json['success']) {
                      \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                      \$('#shopping-cart').load('index.php?route=checkout/cart|list&language=";
        // line 194
        echo ($context["language"] ?? null);
        echo "');

                      var modal = bootstrap.Modal.getInstance(document.querySelector('#modal-shipping'));

                      modal.hide();
                  }
              },
              error: function (xhr, ajaxOptions, thrownError) {
                  console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
              }
          });
      });

      \$('#input-country').on('change', function () {
          var element = this;

          \$.ajax({
              url: 'index.php?route=localisation/country&country_id=' + this.value + '&language=";
        // line 211
        echo ($context["language"] ?? null);
        echo "',
              dataType: 'json',
              beforeSend: function () {
                  \$(element).prop('disabled', true);
              },
              complete: function () {
                  \$(element).prop('disabled', false);
              },
              success: function (json) {
                  if (json['postcode_required'] == '1') {
                      \$('#input-postcode').parent().parent().addClass('required');
                  } else {
                      \$('#input-postcode').parent().parent().removeClass('required');
                  }

                  html = '<option value=\"\">";
        // line 226
        echo ($context["text_select"] ?? null);
        echo "</option>';

                  if (json['zone'] && json['zone'] != '') {
                      for (i = 0; i < json['zone'].length; i++) {
                          html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                          if (json['zone'][i]['zone_id'] == '";
        // line 232
        echo ($context["zone_id"] ?? null);
        echo "') {
                              html += ' selected=\"selected\"';
                          }

                          html += '>' + json['zone'][i]['name'] + '</option>';
                      }
                  } else {
                      html += '<option value=\"0\" selected=\"selected\">";
        // line 239
        echo ($context["text_none"] ?? null);
        echo "</option>';
                  }

                  \$('#input-zone').html(html);
              },
              error: function (xhr, ajaxOptions, thrownError) {
                  console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
              }
          });
      });

      \$('#input-country').trigger('change');
      //-->
  </script>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/total/shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 239,  342 => 232,  333 => 226,  315 => 211,  295 => 194,  271 => 173,  245 => 150,  227 => 135,  215 => 126,  207 => 121,  171 => 88,  156 => 76,  144 => 67,  140 => 66,  132 => 60,  130 => 59,  129 => 58,  120 => 51,  118 => 50,  117 => 49,  109 => 43,  94 => 41,  90 => 40,  86 => 39,  80 => 36,  74 => 33,  61 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/total/shipping.twig", "/opt/lampp/htdocs/moh/upload/extension/opencart/catalog/view/template/total/shipping.twig");
    }
}
