@extends('layouts.app')

@section('content')
<main>
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Checkout</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================Checkout Area =================-->
    <section class="checkout_area section_padding">
      <div class="container">


        <div class="billing_details">
          <div class="row">
            <div class="col-lg-8">
              <h3>Billing Details</h3>
            <form class="row contact_form" action="{{route('website.storeOrder')}}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="first" name="f_name" />
                  <span class="placeholder" data-placeholder="First name"></span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="last" name="l_name" />
                  <span class="placeholder" data-placeholder="Last name"></span>
                </div>
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" id="company" name="company_name" placeholder="Company name" />
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="number" name="phone" />
                  <span class="placeholder" data-placeholder="Phone number"></span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="email" name="email" />
                  <span class="placeholder" data-placeholder="Email Address"></span>
                </div>

                <div class="col-md-6 form-group p_star">
                    <input type="text" class="form-control" id="" name="country" />
                    <span class="placeholder" data-placeholder="country"></span>
                  </div>

                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control"  name="address1" />
                  <span class="placeholder" data-placeholder="Address line 01"></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control"  name="address2" />
                  <span class="placeholder" data-placeholder="Address line 02"></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control"  name="town" />
                  <span class="placeholder" data-placeholder="Town/City"></span>
                </div>

                <div class="col-md-12 form-group p_star">
                    <input type="text" class="form-control"  name="district" />
                    <span class="placeholder" data-placeholder="district"></span>
                  </div>

                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" id="zip" name="post_code" placeholder="Postcode/ZIP" />
                <input type="hidden" class="form-control" id="" name="totalPrice" value="{{$totalPrice}}"  />

                </div>

                <div class="col-md-12 form-group">

                  <textarea class="form-control" name="other_notes" id="message" rows="1"
                    placeholder="Order Notes"></textarea>
                </div>

                <div class="radion_btn">
                    <input type="radio" id="f-option5" name="payment_type" value="cash">
                    <label for="f-option5">Cash on Delivery</label>
                    <div class="check"></div>
                  </div>
                  <div class="radion_btn">
                    <input type="radio" id="f-option5" name="payment_type" value="card">
                    <label for="f-option5">Card</label>
                    <div class="check"></div>
                  </div>

                <button class="btn_3" type="submit">Proceed to order</button>
              </form>
            </div>
            <div class="col-lg-4">

            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Checkout Area =================-->
</main>
@endsection