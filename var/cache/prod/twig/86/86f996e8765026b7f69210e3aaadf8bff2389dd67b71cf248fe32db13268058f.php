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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig */
class __TwigTemplate_50d3a0690a0309d607c986f147988add96a57e4d687f5d7f04429075319c7f9d extends \Twig\Template
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
";
        // line 26
        $context["isColumnLocationDisplayed"] = false;
        // line 27
        $context["isColumnRefundedDisplayed"] = false;
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "products", []), "products", []), 0, ($context["paginationNum"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 29
            echo "  ";
            if ( !twig_test_empty($this->getAttribute($context["product"], "location", []))) {
                // line 30
                echo "    ";
                $context["isColumnLocationDisplayed"] = true;
                // line 31
                echo "  ";
            }
            // line 32
            echo "  ";
            if (($this->getAttribute($context["product"], "quantityRefunded", []) > 0)) {
                // line 33
                echo "    ";
                $context["isColumnRefundedDisplayed"] = true;
                // line 34
                echo "  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "<div class=\"card\" id=\"orderProductsPanel\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
        echo " (<span id=\"orderProductsPanelCount\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "products", []), "products", [])), "html", null, true);
        echo "</span>)
    </h3>
  </div>

  <div class=\"card-body\">
    <div class=\"spinner-order-products-container\" id=\"orderProductsLoading\">
      <div class=\"spinner spinner-primary\"></div>
    </div>
    ";
        // line 47
        $context["formOptions"] = ["attr" => ["data-order-id" => $this->getAttribute(        // line 49
($context["orderForViewing"] ?? null), "id", []), "data-is-delivered" => $this->getAttribute(        // line 50
($context["orderForViewing"] ?? null), "isDelivered", []), "data-is-tax-included" => $this->getAttribute(        // line 51
($context["orderForViewing"] ?? null), "isTaxIncluded", []), "data-discounts-amount" => $this->getAttribute($this->getAttribute(        // line 52
($context["orderForViewing"] ?? null), "prices", []), "discountsAmountRaw", []), "data-price-specification" => twig_replace_filter(twig_jsonencode_filter(        // line 53
($context["priceSpecification"] ?? null)), "'", "&#39;")]];
        // line 56
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cancelProductForm"] ?? null), 'form_start', ($context["formOptions"] ?? null));
        echo "
    <table class=\"table\" id=\"orderProductsTable\" data-currency-precision=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderCurrency"] ?? null), "precision", []), "html", null, true);
        echo "\">
      <thead>
      <tr>
        <th>
          <p>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "Admin.Global"), "html", null, true);
        echo "</p>
        </th>
        <th></th>
        <th>
          <p class=\"mb-0\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price per unit", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</p>
          <small class=\"text-muted\">";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "taxMethod", []), "html", null, true);
        echo "</small>
        </th>
        <th>
          <p>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</p>
        </th>
        <th class=\"cellProductLocation";
        // line 71
        if ( !($context["isColumnLocationDisplayed"] ?? null)) {
            echo " d-none";
        }
        echo "\">
          <p>";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stock location", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</p>
        </th>
        <th class=\"cellProductRefunded";
        // line 74
        if ( !($context["isColumnRefundedDisplayed"] ?? null)) {
            echo " d-none";
        }
        echo "\">
          <p>";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Refunded", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</p>
        </th>
        <th ";
        // line 77
        if ( !($context["isAvailableQuantityDisplayed"] ?? null)) {
            echo "class=\"d-none\"";
        }
        echo ">
          <p>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Available", [], "Admin.Global"), "html", null, true);
        echo "</p>
        </th>
        <th>
          <p class=\"mb-0\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "</p>
          <small class=\"text-muted\">";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "taxMethod", []), "html", null, true);
        echo "</small>
        </th>
        ";
        // line 84
        if ($this->getAttribute(($context["orderForViewing"] ?? null), "hasInvoice", [], "method")) {
            // line 85
            echo "          <th>
            <p>";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice", [], "Admin.Global"), "html", null, true);
            echo "</p>
          </th>
        ";
        }
        // line 89
        echo "        ";
        if ( !$this->getAttribute(($context["orderForViewing"] ?? null), "delivered", [])) {
            // line 90
            echo "          <th class=\"text-right product_actions d-print-none\">
            <p>";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
            echo "</p>
          </th>
        ";
        }
        // line 94
        echo "        <th class=\"text-center cancel-product-element\">
          <p>";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Partial refund", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</p>
        </th>
      </tr>
      </thead>
      <tbody>
      ";
        // line 100
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/product_list.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", 100)->display($context);
        // line 101
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/add_product_row.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", 101)->display($context);
        // line 102
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/edit_product_row.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", 102)->display($context);
        // line 103
        echo "      </tbody>
    </table>

    <div class=\"row mb-3\">
      <div class=\"col-md-6 text-left d-print-none order-product-pagination\">
        <div class=\"form-group row\">
          <label for=\"paginator_select_page_limit\" class=\"col-form-label ml-3\">";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Items per page:", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
          <div class=\"col\">
            <select id=\"orderProductsTablePaginationNumberSelector\" class=\"pagination-link custom-select\">
              ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["paginationNumOptions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["numPageOption"]) {
            // line 113
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["numPageOption"], "html", null, true);
            echo "\"";
            if (($context["numPageOption"] == ($context["paginationNum"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["numPageOption"], "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numPageOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "            </select>
          </div>
        </div>
        ";
        // line 118
        $context["numPages"] = twig_round(max((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "products", []), "products", [])) / ($context["paginationNum"] ?? null)), 1), 0, "ceil");
        // line 119
        echo "        <nav aria-label=\"Products Navigation\"";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "products", []), "products", [])) <= ($context["paginationNum"] ?? null))) {
            echo " class=\"d-none\"";
        }
        echo " id=\"orderProductsNavPagination\">
          <ul class=\"pagination\" id=\"orderProductsTablePagination\" data-num-per-page=\"";
        // line 120
        echo twig_escape_filter($this->env, ($context["paginationNum"] ?? null), "html", null, true);
        echo "\" data-num-pages=\"";
        echo twig_escape_filter($this->env, ($context["numPages"] ?? null), "html", null, true);
        echo "\">
            <li class=\"page-item disabled\" id=\"orderProductsTablePaginationPrev\">
              <a class=\"page-link\" href=\"javascript:void(0);\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">&laquo;</span>
                <span class=\"sr-only\">Previous</span>
              </a>
            </li>
            ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["numPages"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["numPage"]) {
            // line 128
            echo "              <li class=\"page-item";
            if (($context["numPage"] == 1)) {
                echo " active";
            }
            echo "\"><span class=\"page-link\" data-order-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "id", []), "html", null, true);
            echo "\" data-page=\"";
            echo twig_escape_filter($this->env, $context["numPage"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["numPage"], "html", null, true);
            echo "</span></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "            <li class=\"page-item d-none\"><span class=\"page-link\" data-order-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "id", []), "html", null, true);
        echo "\" data-page=\"\"></span></li>
            <li class=\"page-item\" id=\"orderProductsTablePaginationNext\">
              <a class=\"page-link\" href=\"javascript:void(0);\" aria-label=\"Next\">
                <span aria-hidden=\"true\">&raquo;</span>
                <span class=\"sr-only\">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class=\"col-md-6 text-right discount-action\">
        ";
        // line 141
        if ( !$this->getAttribute(($context["orderForViewing"] ?? null), "delivered", [])) {
            // line 142
            echo "          <button type=\"button\" class=\"btn btn-outline-secondary js-product-action-btn mr-3\" id=\"addProductBtn\">
            <i class=\"material-icons\">add_circle_outline</i>
            ";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a product", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
          </button>
        ";
        }
        // line 147
        echo "        <button type=\"button\" class=\"btn btn-outline-secondary js-product-action-btn\" data-toggle=\"modal\" data-target=\"#addOrderDiscountModal\">
          <i class=\"material-icons\">confirmation_number</i>
          ";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a discount", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </button>
      </div>
    </div>

    ";
        // line 154
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", 154)->display(twig_array_merge($context, ["discounts" => $this->getAttribute($this->getAttribute(        // line 155
($context["orderForViewing"] ?? null), "discounts", []), "discounts", []), "orderId" => $this->getAttribute(        // line 156
($context["orderForViewing"] ?? null), "id", [])]));
        // line 158
        echo "
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"info-block\">
          <div class=\"row\">
            <div class=\"col-sm text-center\">
              <p class=\"text-muted mb-0\"><strong>";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
        echo "</strong></p>
              <strong id=\"orderProductsTotal\">";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "productsPriceFormatted", []), "html", null, true);
        echo "</strong>
            </div>

            <div id=\"order-discounts-total-container\" class=\"col-sm text-center";
        // line 168
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "discountsAmountRaw", []), "greaterThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
            echo " d-none";
        }
        echo "\">
              <p class=\"text-muted mb-0\"><strong>";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Discounts", [], "Admin.Global"), "html", null, true);
        echo "</strong></p>
              <strong id=\"orderDiscountsTotal\">-";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "discountsAmountFormatted", []), "html", null, true);
        echo "</strong>
            </div>

            ";
        // line 173
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "wrappingPriceRaw", []), "greaterThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
            // line 174
            echo "              <div class=\"col-sm text-center\">
                <p class=\"text-muted mb-0\"><strong>";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wrapping", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong></p>
                <strong id=\"orderWrappingTotal\">";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "wrappingPriceFormatted", []), "html", null, true);
            echo "</strong>
              </div>
            ";
        }
        // line 179
        echo "
            <div id=\"order-shipping-total-container\" class=\"col-sm text-center";
        // line 180
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "shippingPriceRaw", []), "greaterThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
            echo " d-none";
        }
        echo "\">
              <p class=\"text-muted mb-0\"><strong>";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</strong></p>
              <div class=\"shipping-price\">
                <strong id=\"orderShippingTotal\">";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "shippingPriceFormatted", []), "html", null, true);
        echo "</strong>
                <div class=\"cancel-product-element shipping-refund-amount";
        // line 184
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "shippingRefundableAmountRaw", []), "lowerOrEqualThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
            echo " hidden";
        }
        echo "\">
                  <div class=\"input-group\">
                    ";
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), "shipping_amount", []), 'widget');
        echo "
                    <div class=\"input-group-append\">
                      <div class=\"input-group-text\">";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderCurrency"] ?? null), "symbol", []), "html", null, true);
        echo "</div>
                    </div>
                  </div>
                  <p class=\"text-center\">(max ";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "shippingRefundableAmountFormatted", []), "html", null, true);
        echo " tax included)</p>
                </div>
              </div>
            </div>

            ";
        // line 196
        if ( !$this->getAttribute(($context["orderForViewing"] ?? null), "taxIncluded", [])) {
            // line 197
            echo "              <div class=\"col-sm text-center\">
                <p class=\"text-muted mb-0\"><strong>";
            // line 198
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Taxes", [], "Admin.Global"), "html", null, true);
            echo "</strong></p>
                <strong id=\"orderTaxesTotal\">";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "taxesAmountFormatted", []), "html", null, true);
            echo "</strong>
              </div>
            ";
        }
        // line 202
        echo "
            <div class=\"col-sm text-center\">
              <p class=\"text-muted mb-0\"><strong>";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "</strong></p>
              <span class=\"badge rounded badge-dark font-size-100\" id=\"orderTotal\">";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "totalAmountFormatted", []), "html", null, true);
        echo "</span>
            </div>

          </div>
        </div>
      </div>
      <div class=\"col-md-12\">
        <p class=\"mb-0 mt-1 text-center text-muted\">
          <small>
            ";
        // line 214
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("For this customer group, prices are displayed as: [1]%tax_method%[/1]", ["%tax_method%" => $this->getAttribute(        // line 215
($context["orderForViewing"] ?? null), "taxMethod", []), "[1]" => "<strong>", "[/1]" => "</strong>"], "Admin.Orderscustomers.Notification");
        // line 218
        echo ".

            ";
        // line 220
        if ( !$this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_ORDER_RETURN")) {
            // line 221
            echo "              <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Merchandise returns are disabled", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "</strong>
            ";
        }
        // line 223
        echo "          </small>
        </p>
        <div class=\"cancel-product-element refund-checkboxes-container\">
          <div class=\"cancel-product-element form-group restock-products\">
            ";
        // line 227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), "restock", []), 'widget');
        echo "
          </div>
          <div class=\"cancel-product-element form-group refund-credit-slip\">
            ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), "credit_slip", []), 'widget');
        echo "
          </div>
          <div class=\"cancel-product-element form-group refund-voucher\">
            ";
        // line 233
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), "voucher", []), 'widget');
        echo "
          </div>
          <div class=\"cancel-product-element shipping-refund";
        // line 235
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "shippingRefundableAmountRaw", []), "lowerOrEqualThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
            echo " hidden";
        }
        echo "\">
            <div class=\"form-group\">
              ";
        // line 237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), "shipping", []), 'widget');
        echo "
              <small class=\"shipping-refund-amount\">(";
        // line 238
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "shippingRefundableAmountFormatted", []), "html", null, true);
        echo ")</small>
            </div>
          </div>
          <div class=\"cancel-product-element form-group voucher-refund-type";
        // line 241
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "discountsAmountRaw", []), "lowerOrEqualThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
            echo " hidden";
        }
        echo "\">
            ";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This order has been partially paid by voucher. Choose the amount you want to refund:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
            ";
        // line 243
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), "voucher_refund_type", []), 'widget');
        echo "
            <div class=\"voucher-refund-type-negative-error\">
              ";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Error. You cannot refund a negative amount.", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      </div>
      <div class=\"cancel-product-element form-submit text-right\">
        ";
        // line 251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), "cancel", []), 'widget');
        echo "
        ";
        // line 252
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), "save", []), 'widget');
        echo "
      </div>
    </div>
    ";
        // line 255
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cancelProductForm"] ?? null), 'form_end');
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  547 => 255,  541 => 252,  537 => 251,  528 => 245,  523 => 243,  519 => 242,  513 => 241,  507 => 238,  503 => 237,  496 => 235,  491 => 233,  485 => 230,  479 => 227,  473 => 223,  467 => 221,  465 => 220,  461 => 218,  459 => 215,  458 => 214,  446 => 205,  442 => 204,  438 => 202,  432 => 199,  428 => 198,  425 => 197,  423 => 196,  415 => 191,  409 => 188,  404 => 186,  397 => 184,  393 => 183,  388 => 181,  382 => 180,  379 => 179,  373 => 176,  369 => 175,  366 => 174,  364 => 173,  358 => 170,  354 => 169,  348 => 168,  342 => 165,  338 => 164,  330 => 158,  328 => 156,  327 => 155,  326 => 154,  318 => 149,  314 => 147,  308 => 144,  304 => 142,  302 => 141,  287 => 130,  270 => 128,  266 => 127,  254 => 120,  247 => 119,  245 => 118,  240 => 115,  225 => 113,  221 => 112,  215 => 109,  207 => 103,  204 => 102,  201 => 101,  199 => 100,  191 => 95,  188 => 94,  182 => 91,  179 => 90,  176 => 89,  170 => 86,  167 => 85,  165 => 84,  160 => 82,  156 => 81,  150 => 78,  144 => 77,  139 => 75,  133 => 74,  128 => 72,  122 => 71,  117 => 69,  111 => 66,  107 => 65,  100 => 61,  93 => 57,  88 => 56,  86 => 53,  85 => 52,  84 => 51,  83 => 50,  82 => 49,  81 => 47,  68 => 39,  63 => 36,  56 => 34,  53 => 33,  50 => 32,  47 => 31,  44 => 30,  41 => 29,  37 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", "D:\\xampp\\htdocs\\prestashop_1.7.7.3\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\View\\products.html.twig");
    }
}
