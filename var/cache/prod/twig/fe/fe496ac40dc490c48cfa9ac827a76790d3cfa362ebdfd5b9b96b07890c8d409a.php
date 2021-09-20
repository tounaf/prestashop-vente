<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig */
class __TwigTemplate_51875358eb355250cfdc886a65c9697103aa6021ac59873ea8209c355df8e321 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
<div id=\"customerCard\" class=\"customer card\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", [], "Admin.Global"), "html", null, true);
        echo "
    </h3>
  </div>

  <div class=\"card-body\">
    <div id=\"customerInfo\" class=\"info-block\">
      <div class=\"row\">
        ";
        // line 36
        if ( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", []))) {
            // line 37
            echo "        <div class=\"col-md-6\">
          <h2 class=\"mb-0\">
            <i class=\"material-icons\">account_box</i>

            ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "gender", []), "html", null, true);
            echo "
            ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "firstName", []), "html", null, true);
            echo "
            ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "lastName", []), "html", null, true);
            echo "

            <strong class=\"text-muted ml-2\">#";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", []), "html", null, true);
            echo "</strong>
          </h2>
          ";
            // line 47
            if ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "isGuest", [])) {
                // line 48
                echo "            <strong class=\"text-muted\">Guest</strong>
          ";
            }
            // line 50
            echo "        </div>
        <div id=\"viewFullDetails\" class=\"col-md-6 text-right\">
          <a class=\"d-print-none\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_view", ["customerId" => $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", [])]), "html", null, true);
            echo "\">
            ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View full details", [], "Admin.Actions"), "html", null, true);
            echo "
          </a>
        </div>
        ";
        } else {
            // line 57
            echo "        <div class=\"col\">
          <h2 class=\"mb-0\">";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleted customer", [], "Admin.Global"), "html", null, true);
            echo "</h2>
        </div>
        ";
        }
        // line 61
        echo "      </div>
    </div>
    ";
        // line 63
        if ( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", []))) {
            // line 64
            echo "    <div class=\"row mt-3\">
      <div id=\"customerEmail\" class=\"col-md-6\">
        <p class=\"mb-1\">
          <strong>";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email:", [], "Admin.Global"), "html", null, true);
            echo "</strong>
        </p>
        <p>
          <a href=\"mailto:";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "email", []), "html", null, true);
            echo "\">
            ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "email", []), "html", null, true);
            echo "
          </a>
        </p>

        ";
            // line 75
            if (($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "isGuest", []) === false)) {
                // line 76
                echo "          <p class=\"mb-1\">
            <strong>";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account registered:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
          </p>
          <p>";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatFull($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "accountRegistrationDate", [])), "html", null, true);
                echo "</p>
        ";
            }
            // line 81
            echo "
        ";
            // line 82
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "siret", []))) {
                // line 83
                echo "          <p class=\"mb-1\">
            <strong>";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SIRET", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
          </p>
          <p>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "siret", []), "html", null, true);
                echo "</p>
        ";
            }
            // line 88
            echo "
        ";
            // line 89
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "ape", []))) {
                // line 90
                echo "          <p class=\"mb-1 d-block d-md-none\">
            <strong>";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("APE", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
          </p>
          <p class=\"d-block d-md-none\">";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "ape", []), "html", null, true);
                echo "</p>
        ";
            }
            // line 95
            echo "      </div>
      <div id=\"validatedOrders\" class=\"col-md-6\">
        <p class=\"mb-1\">
          <strong>";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Validated orders placed:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>
        </p>
        <p>
          <span class=\"badge rounded badge-dark\">";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "validOrdersPlaced", []), "html", null, true);
            echo "</span>
        </p>

        ";
            // line 104
            if (($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "isGuest", []) === false)) {
                // line 105
                echo "          <p class=\"mb-1\">
            <strong>";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total spent since registration:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
          </p>
          <p>
            <span class=\"badge rounded badge-dark\">";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "totalSpentSinceRegistration", []), "html", null, true);
                echo "</span>
          </p>
        ";
            }
            // line 112
            echo "
        ";
            // line 113
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "ape", []))) {
                // line 114
                echo "          <p class=\"mb-1 d-none d-md-block\">
            <strong>";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("APE", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
          </p>
          <p class=\"d-none d-md-block\">";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "ape", []), "html", null, true);
                echo "</p>
        ";
            }
            // line 119
            echo "      </div>
    </div>
    ";
        }
        // line 122
        echo "    <div class=\"info-block mt-2\">
      <div class=\"row\">
        ";
        // line 124
        if (($this->getAttribute(($context["orderForViewing"] ?? null), "virtual", []) === false)) {
            // line 125
            echo "        <div id=\"addressShipping\" class=\"info-block-col col-xl-6\">
          <div class=\"row justify-content-between no-gutters\">
            <strong>";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping address", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>
            ";
            // line 128
            if ( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", []))) {
                // line 129
                echo "            <a class=\"tooltip-link d-print-none\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"material-icons\">more_vert</i>
            </a>

            <div class=\"dropdown-menu dropdown-menu-right\">
              <a class=\"dropdown-item\" id=\"js-delivery-address-edit-btn\"
                 href=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_addresses_edit", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", []), "addressType" => "delivery", "liteDisplaying" => 1, "submitFormAjax" => 1]), "html", null, true);
                echo "\"
              >
                ";
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit existing address", [], "Admin.Actions"), "html", null, true);
                echo "
              </a>

              <a href=\"#\"
                class=\"dropdown-item js-update-customer-address-modal-btn\"
                data-toggle=\"modal\"
                data-target=\"#updateCustomerAddressModal\"
                data-address-type=\"shipping\"
              >
                ";
                // line 146
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select another address", [], "Admin.Actions"), "html", null, true);
                echo "
              </a>
            </div>
            ";
            }
            // line 150
            echo "          </div>

          <p class=\"mb-0\">";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "fullName", []), "html", null, true);
            echo "</p>
          ";
            // line 153
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "companyName", []))) {
                // line 154
                echo "            <p class=\"mb-0\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "companyName", []), "html", null, true);
                echo "</p>
          ";
            }
            // line 156
            echo "          ";
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "vatNumber", []))) {
                // line 157
                echo "            <p class=\"mb-0\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "vatNumber", []), "html", null, true);
                echo "</p>
          ";
            }
            // line 159
            echo "          <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "address1", []), "html", null, true);
            echo "</p>
          ";
            // line 160
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "address2", []))) {
                // line 161
                echo "            <p class=\"mb-0\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "address2", []), "html", null, true);
                echo "</p>
          ";
            }
            // line 163
            echo "          <p class=\"mb-0\">
            ";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "cityName", []), "html", null, true);
            echo ",
            ";
            // line 165
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "stateName", []))) {
                // line 166
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "stateName", []), "html", null, true);
                echo "
            ";
            }
            // line 168
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "postCode", []), "html", null, true);
            echo "
          </p>
          <p class=\"mb-0\">";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "countryName", []), "html", null, true);
            echo "</p>
          ";
            // line 171
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "dni", []))) {
                // line 172
                echo "            <p class=\"mb-0\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "dni", []), "html", null, true);
                echo "</p>
          ";
            }
            // line 174
            echo "          <p>
            ";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "phoneNumber", []), "html", null, true);
            echo "
            ";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "mobilePhoneNumber", []), "html", null, true);
            echo "
          </p>
        </div>
        ";
        }
        // line 180
        echo "        <div id=\"addressInvoice\" class=\"info-block-col ";
        if ($this->getAttribute(($context["orderForViewing"] ?? null), "virtual", [])) {
            echo "col-md-12";
        } else {
            echo "col-md-6";
        }
        echo "\">
          <div class=\"row justify-content-between no-gutters\">
            <strong>";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice address", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>

            ";
        // line 184
        if ( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", []))) {
            // line 185
            echo "            <a class=\"tooltip-link d-print-none\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"material-icons\">more_vert</i>
            </a>

            <div class=\"dropdown-menu dropdown-menu-right\">
              <a class=\"dropdown-item\" id=\"js-invoice-address-edit-btn\"
                 href=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_addresses_edit", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", []), "addressType" => "invoice", "liteDisplaying" => 1, "submitFormAjax" => 1]), "html", null, true);
            echo "\"
              >
                ";
            // line 193
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit existing address", [], "Admin.Actions"), "html", null, true);
            echo "
              </a>

              <a href=\"#\"
                class=\"dropdown-item js-update-customer-address-modal-btn\"
                data-toggle=\"modal\"
                data-target=\"#updateCustomerAddressModal\"
                data-address-type=\"invoice\"
              >
                ";
            // line 202
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select another address", [], "Admin.Actions"), "html", null, true);
            echo "
              </a>
            </div>
            ";
        }
        // line 206
        echo "          </div>

          <p class=\"mb-0\">";
        // line 208
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "fullName", []), "html", null, true);
        echo "</p>
          ";
        // line 209
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "companyName", []))) {
            // line 210
            echo "            <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "companyName", []), "html", null, true);
            echo "</p>
          ";
        }
        // line 212
        echo "          ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "vatNumber", []))) {
            // line 213
            echo "            <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "vatNumber", []), "html", null, true);
            echo "</p>
          ";
        }
        // line 215
        echo "          <p class=\"mb-0\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "address1", []), "html", null, true);
        echo "</p>
          ";
        // line 216
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "address2", []))) {
            // line 217
            echo "            <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "address2", []), "html", null, true);
            echo "</p>
          ";
        }
        // line 219
        echo "          <p class=\"mb-0\">
            ";
        // line 220
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "cityName", []), "html", null, true);
        echo ",
            ";
        // line 221
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "stateName", []))) {
            // line 222
            echo "              ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "stateName", []), "html", null, true);
            echo "
            ";
        }
        // line 224
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "postCode", []), "html", null, true);
        echo "
          </p>
          <p class=\"mb-0\">";
        // line 226
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "countryName", []), "html", null, true);
        echo "</p>
          ";
        // line 227
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "dni", []))) {
            // line 228
            echo "            <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "dni", []), "html", null, true);
            echo "</p>
          ";
        }
        // line 230
        echo "          <p>
            ";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "phoneNumber", []), "html", null, true);
        echo "
            ";
        // line 232
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "mobilePhoneNumber", []), "html", null, true);
        echo "
          </p>
        </div>
      </div>
    </div>
    ";
        // line 237
        if ( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", []))) {
            // line 238
            echo "    <div id=\"privateNote\" class=\"mt-2 info-block\">
      <div class=\"row\">
        ";
            // line 240
            $context["isPrivateNoteOpen"] =  !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "privateNote", []));
            // line 241
            echo "
        <div class=\"col-md-6\">
          <h3 class=\"mb-0";
            // line 243
            echo (( !($context["isPrivateNoteOpen"] ?? null)) ? (" d-print-none") : (""));
            echo "\">
            ";
            // line 244
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Private note", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
          </h3>
        </div>
        <div class=\"col-md-6 text-right d-print-none\">
          <a href=\"#\"
             class=\"float-right tooltip-link js-private-note-toggle-btn ";
            // line 249
            if (($context["isPrivateNoteOpen"] ?? null)) {
                echo "is-opened";
            }
            echo "\"
          >
            ";
            // line 251
            if (($context["isPrivateNoteOpen"] ?? null)) {
                // line 252
                echo "              <i class=\"material-icons\">remove</i>
            ";
            } else {
                // line 254
                echo "              <i class=\"material-icons\">add</i>
            ";
            }
            // line 256
            echo "          </a>
        </div>

        <div class=\"col-md-12 mt-3 js-private-note-block ";
            // line 259
            if ( !($context["isPrivateNoteOpen"] ?? null)) {
                echo "d-none";
            }
            echo "\">
          ";
            // line 260
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["privateNoteForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_set_private_note", ["customerId" => $this->getAttribute($this->getAttribute(            // line 262
($context["orderForViewing"] ?? null), "customer", []), "id", []), "back" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_view", ["orderId" => $this->getAttribute(            // line 263
($context["orderForViewing"] ?? null), "id", [])])])]);
            // line 265
            echo "

          ";
            // line 267
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["privateNoteForm"] ?? null), "note", []), 'widget');
            echo "
            <div class=\"d-none\">
              ";
            // line 269
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["privateNoteForm"] ?? null), 'rest');
            echo "
            </div>

            <div class=\"mt-2 text-right\">
              <button type=\"submit\"
                      class=\"btn btn-primary btn-sm js-private-note-btn\"
                      ";
            // line 275
            if (twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "privateNote", []))) {
                echo "disabled";
            }
            // line 276
            echo "              >
                ";
            // line 277
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
            echo "
              </button>
            </div>
          ";
            // line 280
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["privateNoteForm"] ?? null), 'form_end');
            echo "
        </div>
      </div>
    </div>
    ";
        }
        // line 285
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  601 => 285,  593 => 280,  587 => 277,  584 => 276,  580 => 275,  571 => 269,  566 => 267,  562 => 265,  560 => 263,  559 => 262,  558 => 260,  552 => 259,  547 => 256,  543 => 254,  539 => 252,  537 => 251,  530 => 249,  522 => 244,  518 => 243,  514 => 241,  512 => 240,  508 => 238,  506 => 237,  498 => 232,  494 => 231,  491 => 230,  485 => 228,  483 => 227,  479 => 226,  473 => 224,  467 => 222,  465 => 221,  461 => 220,  458 => 219,  452 => 217,  450 => 216,  445 => 215,  439 => 213,  436 => 212,  430 => 210,  428 => 209,  424 => 208,  420 => 206,  413 => 202,  401 => 193,  396 => 191,  388 => 185,  386 => 184,  381 => 182,  371 => 180,  364 => 176,  360 => 175,  357 => 174,  351 => 172,  349 => 171,  345 => 170,  339 => 168,  333 => 166,  331 => 165,  327 => 164,  324 => 163,  318 => 161,  316 => 160,  311 => 159,  305 => 157,  302 => 156,  296 => 154,  294 => 153,  290 => 152,  286 => 150,  279 => 146,  267 => 137,  262 => 135,  254 => 129,  252 => 128,  248 => 127,  244 => 125,  242 => 124,  238 => 122,  233 => 119,  228 => 117,  223 => 115,  220 => 114,  218 => 113,  215 => 112,  209 => 109,  203 => 106,  200 => 105,  198 => 104,  192 => 101,  186 => 98,  181 => 95,  176 => 93,  171 => 91,  168 => 90,  166 => 89,  163 => 88,  158 => 86,  153 => 84,  150 => 83,  148 => 82,  145 => 81,  140 => 79,  135 => 77,  132 => 76,  130 => 75,  123 => 71,  119 => 70,  113 => 67,  108 => 64,  106 => 63,  102 => 61,  96 => 58,  93 => 57,  86 => 53,  82 => 52,  78 => 50,  74 => 48,  72 => 47,  67 => 45,  62 => 43,  58 => 42,  54 => 41,  48 => 37,  46 => 36,  36 => 29,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig", "D:\\xampp\\htdocs\\prestashop_1.7.7.3\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\View\\customer.html.twig");
    }
}
