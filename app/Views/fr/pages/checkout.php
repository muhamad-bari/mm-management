<?= $this->extend('fr/layout/base1') ?>
<?= $this->section('content') ?>

<section class="pt40 pb0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="main-title">
          <h2 class="title">Checkout</h2>
          <p class="text mb-0">Lanjutkan Transaksi</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Shop Checkout Area -->
<section class="shop-checkout pt-0">
  <div class="container">
    <div class="row wow fadeInUp" data-wow-delay="300ms">
      <div class="col-md-7 col-lg-8">
        <div class="checkout_form">
          <h4 class="title mb30">Billing details</h4>
          <div class="checkout_coupon">
            <form class="form2" id="coupon_form" name="contact_form" method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="mb25">
                    <h6 class="mb15">First Name</h6>
                    <input class="form-control" type="text" placeholder="Ali">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb25">
                    <h6 class="mb15">Last Name</h6>
                    <input class="form-control" type="text" placeholder="Tufan">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="mb25">
                    <h6 class="mb15">Company Name</h6>
                    <input class="form-control" type="text" placeholder="Ali">
                  </div>
                </div>
                <!-- <div class="col-lg-12">
                      <div class="mb25">
                        <h6 class="mb15">Country / Region *</h6>
                        <div class="bootselect-multiselect">
                          <select class="selectpicker">
                            <option>Select</option>
                            <option>Turkey</option>
                            <option>United Kingdom</option>
                            <option>United State</option>
                            <option>Ukraine</option>
                            <option>Uruguay</option>
                            <option>UK</option>
                            <option>Uzbekistan</option>
                          </select>
                        </div>
                      </div>
                    </div> -->
                <div class="col-sm-12">
                  <div class="mb25">
                    <h6 class="mb15">House number and street name</h6>
                    <input class="form-control" type="text" placeholder="Ali">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="mb25">
                    <h6 class="mb15">Apartment, suite, unit, etc. (optional)</h6>
                    <input class="form-control" type="text" placeholder="Ali">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="mb25">
                    <h6 class="mb15">Country / Region *</h6>
                    <div class="bootselect-multiselect">
                      <select class="selectpicker">
                        <option>Turkey</option>
                        <option>United Kingdom</option>
                        <option>United State</option>
                        <option>Ukraine</option>
                        <option>Uruguay</option>
                        <option>UK</option>
                        <option>Uzbekistan</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="mb25">
                    <h6 class="mb15">Town / City *</h6>
                    <div class="bootselect-multiselect">
                      <select class="selectpicker">
                        <option data-tokens="California">California</option>
                        <option data-tokens="Chicago">Chicago</option>
                        <option data-tokens="LosAngeles">Los Angeles</option>
                        <option data-tokens="Manhattan">Manhattan</option>
                        <option data-tokens="NewJersey">New Jersey</option>
                        <option data-tokens="NewYork">New York</option>
                        <option data-tokens="SanDiego">San Diego</option>
                        <option data-tokens="SanFrancisco">San Francisco</option>
                        <option data-tokens="Texas">Texas</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="mb25">
                    <h6 class="mb15">State *</h6>
                    <input class="form-control" type="text" placeholder="Ali">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="mb25">
                    <h6 class="mb15">ZIP *</h6>
                    <input class="form-control" type="text" placeholder="Ali">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="mb25">
                    <h6 class="mb15">Phone *</h6>
                    <input class="form-control" type="text" placeholder="Ali">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="mb25">
                    <h6 class="mb15">Email Address</h6>
                    <input class="form-control" type="email" placeholder="Ali">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="mb25">
                    <h4 class="mb15" class="mb15">Additional information</h4>
                    <h6>Order Notes (optional)</h6>
                    <textarea name="form_message" class="" rows="7" placeholder="Description"></textarea>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-lg-4">
        <div class="shop-sidebar ms-md-auto">
          <div class="order_sidebar_widget mb30 default-box-shadow1">
            <h4 class="title">Your Order</h4>
            <ul class="p-0 mb-0">
              <li class="bdrb1 mb20">
                <h6>Product <span class="float-end">Subtotal</span></h6>
              </li>
              <li class="mb20">
                <p class="body-color"><?= lang('service.house') ?> x2 <span class="float-end">SAR 12.000.000</span></p>
              </li>
              <li class="mb20">
                <p class="body-color">Seo Books x 1 <span class="float-end">$67.00</span></p>
              </li>
              <li class=" bdrb1 mb15">
                <h6>Subtotal <span class="float-end">$178.00</span></h6>
              </li>
              <li class=" bdrb1 mb15">
                <h6>Shipping <span class="float-end">$178.00</span></h6>
              </li>
              <li>
                <h6>Total <span class="float-end">$9,218.00</span></h6>
              </li>
            </ul>
          </div>
          <div class="payment_widget default-box-shadow1">
            <h4 class="title">Payment</h4>
            <div class="radio-element">
              <div class="form-check d-flex align-items-center mb15">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked="checked">
                <label class="form-check-label" for="flexRadioDefault1">Direct bank transfer</label>
              </div>
              <div class="pw-details">
                <p class="fz13 mb30">Make your payment directly into our bank account. Please use your Order ID as the payment reference.Your order will not be shipped until the funds have cleared in our account.</p>
              </div>
              <div class="form-check d-flex align-items-center mb15">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">Check payments</label>
              </div>
              <div class="form-check d-flex align-items-center mb15">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                <label class="form-check-label" for="flexRadioDefault3">Cash on delivery</label>
              </div>
              <div class="form-check d-flex align-items-center">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                <label class="form-check-label" for="flexRadioDefault4">PayPal</label>
              </div>
            </div>
          </div>
          <div class="d-grid default-box-shadow2">
            <button class="ud-btn btn-thm">Place Order<i class="fal fa-arrow-right-long"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>