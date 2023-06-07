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
                            <h2>Watch Shop</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End-->
    <!-- Latest Products Start -->
    <section class="popular-items latest-padding">
        <div class="container">
            <div class="row product-btn justify-content-between mb-40">
                <div class="properties__button">
                    <!--Nav Button  -->
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            @foreach ($categories as $key => $category )
                                <a class="nav-item nav-link {{ $key == 0 ? 'active' : '' }}" id="{{ $category->id }}-tab" data-toggle="tab" href="#{{ $category->id }}" role="tab" aria-controls="nav-home" aria-selected="true">
                                    {{ $category->brand_name }}
                                </a>
                            @endforeach

                        </div>
                    </nav>
                    <!--End Nav Button  -->
                </div>
                <!-- Grid and List view -->
                <div class="grid-list-view">
                </div>
                <!-- Select items -->
                <div class="select-this">
                    <form action="#">
                        <div class="select-itms">
                            <select name="select" id="select1">
                                <option value="">40 per page</option>
                                <option value="">50 per page</option>
                                <option value="">60 per page</option>
                                <option value="">70 per page</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Nav Card -->
            <div class="tab-content" id="nav-tabContent">
                <!-- card one -->
                @foreach ($categories as $key => $cateItem )

                <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}" id="{{ $cateItem->id }}" role="tabpanel" aria-labelledby="{{ $cateItem->id }}-tab">
                    <div class="row">
                        @foreach ($cateItem->products as $productCate )

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">

                            <div class="single-popular-items mb-50 text-center">
                                <div class="popular-img">
                                    <img height="300px" src="{{ asset('images/'.$productCate->img) }}" alt="">
                                    <div class="img-cap">
                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                            {{-- {{ dd($productCate) }} --}}
                                            @csrf
                                            <input type="hidden" value="{{ $productCate->id }}" name="id">
                                            <input type="hidden" value="{{ $productCate->product_name }}" name="name">
                                            <input type="hidden" value="{{ $productCate->price }}" name="price">
                                            <input type="hidden" value="{{ $productCate->img }}"  name="image">
                                            <input type="hidden" value="1" name="quantity">
                                            <button class="p-4 w-100 py-2 text-white bg-blue-800 rounded btn btn-primary">Add To Cart</button>
                                        </form>
                                    </div>
                                    <div class="favorit-items">
                                        <span class="flaticon-heart"></span>
                                    </div>
                                </div>
                                <div class="popular-caption">
                                    <h3><a href="{{ route('product_details', $productCate->id ) }}"> {{ $productCate->product_name }} </a></h3>
                                    <span>${{ $productCate->price }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

                @endforeach

            </div>
            <!-- End Nav Card -->
        </div>
    </section>
    <!-- Latest Products End -->
    <!--? Shop Method Start-->
    <div class="shop-method-area">
        <div class="container">
            <div class="method-wrapper">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-package"></i>
                            <h6>Free Shipping Method</h6>
                            <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-unlock"></i>
                            <h6>Secure Payment System</h6>
                            <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-reload"></i>
                            <h6>Secure Payment System</h6>
                            <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Method End-->
</main>
@endsection
