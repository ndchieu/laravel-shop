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
                          <h2>Cart List</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--================Cart Area =================-->

  <section class="cart_area section_padding">
      <div class="container">
        <div class="cart_inner">
          <div class="table-responsive">
            <table class="table" cellspacing="0">
                <thead>
                  <tr class="h-12 uppercase">
                    <th class="hidden md:table-cell">Image</th>
                    <th class="text-left">Name</th>
                    <th class="pl-5 text-left lg:text-right lg:pl-0">
                      <span class="lg:hidden" title="Quantity">Qtd</span>
                      <span class="hidden lg:inline">Quantity</span>
                    </th>
                    <th class="hidden text-right md:table-cell"> price</th>
                    <th class="hidden text-right md:table-cell"> Remove </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $item)
                  <tr>
                    <td class="hidden pb-4 md:table-cell">
                      <a href="#">
                        <img width="150px" height="150px" src="images/{{ $item->attributes->image }}" class="w-20 rounded" alt="Thumbnail">
                      </a>
                    </td>
                    <td>
                      <a href="#">
                        <p class="mb-2 md:ml-4">{{ $item->name }}</p>
                      </a>
                    </td>
                    <td class="justify-center mt-6 md:justify-end md:flex">
                      <div class="h-10 w-28">
                        <div class="relative flex flex-row w-full h-8">

                          <form action="{{ route('cart.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id}}" >
                            <input type="number" name="quantity" value="{{ $item->quantity }}"
                            class="w-6 text-center bg-gray-300" />
                            <button type="submit" class="ml-3 btn btn-primary">update</button>
                          </form>
                        </div>
                      </div>
                    </td>
                    <td class="hidden text-right md:table-cell">
                      <span class="text-sm font-medium lg:text-base">
                          ${{ $item->price }}
                      </span>
                    </td>
                    <td class="hidden text-right md:table-cell">
                      <form action="{{ route('cart.remove') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" name="id">
                        <button class="btn btn-danger">x</button>
                    </form>

                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
              Total: ${{ Cart::getTotal() }}
            <div class="checkout_btn_inner float-right">
            <a class="btn_1 checkout_btn_1" href="{{route('website.checkout')}}">Proceed to checkout</a>
            </div>
          </div>
        </div>
    </section>



  <!--================End Cart Area =================-->
</main>
@endsection
