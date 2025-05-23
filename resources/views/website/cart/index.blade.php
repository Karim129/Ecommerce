@extends('website.layouts.master')

@section('title')
    {{ trans('website_trans.category') }}
@endsection

@section('content')
    <section class="h-100" style="background-color: #eee;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100" id="cart_div">
                <div class="col-10">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                        <div>
                            {{-- <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
                                class="text-body">price <i --}} {{-- class="fas fa-angle-down mt-1"></i></a></p> --}}
                        </div>
                    </div>

                    @php $total_price = 0; @endphp
                    @forelse($cart_products as $product_cart)
                        <div class="card rounded-3 mb-4">
                            <div class="card-body p-4">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img src="{{ asset($product_cart->Product->image) }}" class="img-fluid rounded-3"
                                            alt="Cotton T-shirt">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead fw-normal mb-2">{{ $product_cart->Product->name }}</p>
                                        {{-- <p><span class="text-muted">Size: </span>M <span class="text-muted">Color:
                                    </span>Grey</p> --}}
                                    </div>
                                    @if ($product_cart->Product->qty > $product_cart->qty)
                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                            <button class="btn btn-link px-2"
                                                onclick="decreaseQTY({{ $product_cart->id }}); updateCart({{ $product_cart->id }})">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <input type="hidden" value="{{ $product_cart->product->qty }}" id="total_qty">

                                            <input id="qty_{{ $product_cart->id }}" min="0" name="qty"
                                                value="{{ $product_cart->qty }}" type="text"
                                                class="form-control form-control-sm qty_{{ $product_cart->id }}" />

                                            <button class="btn btn-link px-2"
                                                onclick="increaseQTY({{ $product_cart->id }}); updateCart({{ $product_cart->id }})">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    @else
                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">

                                            <span class="text-danger">{{ trans('website_trans.out_of_stock') }}</span>
                                        </div>
                                    @endif

                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h5 class="mb-0">
                                            @php
                                                $product_total = isset($product_cart->Product)
                                                    ? $product_cart->Product->selling_price * $product_cart->qty
                                                    : 0;
                                            @endphp
                                            {{ $product_total }}
                                        </h5>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        {{-- <a href="" class="text-danger"><i class="fas fa-trash fa-lg"></i></a> --}}
                                        @include('website.includes.delete_modal', [
                                            'type' => 'cart',
                                            'data' => $product_cart,
                                            'routes' => 'cart.destroy',
                                        ])
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php $total_price += $product_total ; @endphp

                    @empty
                        <h6>there are no products</h6>
                    @endforelse
                </div>
                <div class="row justify-content-center">
                    <div class="col-4">
                        <h3 id="total_price">{{ $total_price }}</h3>

                    </div>
                    <div class="col-4">
                        <a href="{{ route('checkout.index') }}"
                            class="btn btn-success ">{{ trans('website_trans.checkout') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        var qty = $('#total_qty').val();

        function increaseQTY(id) {
            var value = parseInt($('#qty_' + id).val());

            value = isNaN(value) ? 0 : value;

            if (value < qty) {

                value++

                $('#qty_' + id).val(value)

            }

        }

        function decreaseQTY(id) {
            var value = parseInt($('#qty_' + id).val());

            value = isNaN(value) ? 0 : value;

            if (value > 1) {
                value--;
                $('#qty_' + id).val(value)
            }

        }

        function showLoading() {
            const loadingDiv = document.createElement('div');
            loadingDiv.id = 'loading-indicator';
            loadingDiv.style.position = 'fixed';
            loadingDiv.style.top = '50%';
            loadingDiv.style.left = '50%';
            loadingDiv.style.transform = 'translate(-50%, -50%)';
            loadingDiv.style.zIndex = '9999';
            loadingDiv.innerHTML =
                '<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>';
            document.body.appendChild(loadingDiv);
        }

        function hideLoading() {
            const loadingDiv = document.getElementById('loading-indicator');
            if (loadingDiv) {
                loadingDiv.remove();
            }
        }

        function updateCart(id) {
            var qty = $('.qty_' + id).val();

            showLoading();

            $.ajax({
                method: 'POST',
                url: "{{ route('cart.update') }}",
                dataType: 'json',
                data: {
                    id: id,
                    qty: qty
                },
                success: function(response) {
                    console.log(response.msg);
                    $('#cart_div').load(location.href + " #cart_div", function() {
                        hideLoading();
                    });
                    $('#total_price').text(response.total_price);
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                    hideLoading();
                    alert('An error occurred while updating the cart.');
                }
            });
        }
    </script>
@endsection
