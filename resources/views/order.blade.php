@extends('master')
@section('title', 'Корзина')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Checkout</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body checkout-tab">

                        <form action="{{route('basket-confirm')}}" method="post">


                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="pills-bill-info" role="tabpanel" aria-labelledby="pills-bill-info-tab">
                                    <div>
                                        <h5 class="mb-1">Информаиця о заказе</h5>
                                        <p class="text-muted mb-4">Please fill all information below</p>
                                    </div>

                                    <div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="billinginfo-firstName" class="form-label">Имя</label>
                                                    <input type="text" class="form-control"  name="your_name" placeholder="Ваше имя">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="billinginfo-firstName" class="form-label">Телефон</label>
                                                    <input type="text" class="form-control"  name="phone" placeholder="Ваш Телефон">
                                                </div>
                                            </div>
                                        </div>



@csrf
                                        <div class="d-flex align-items-start gap-3 mt-3">
                                            <input type="submit" class="btn btn-primary btn-label right ms-auto nexttab" value="Оформить заказ" >
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab pane -->

                                <div class="tab-pane fade" id="pills-bill-address" role="tabpanel" aria-labelledby="pills-bill-address-tab">
                                    <div>
                                        <h5 class="mb-1">Shipping Information</h5>
                                        <p class="text-muted mb-4">Please fill all information below</p>
                                    </div>

                                    <div class="mt-4">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-14 mb-0">Saved Address</h5>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-sm btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addAddressModal">
                                                    Add Address
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row gy-3">
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="form-check card-radio">
                                                    <input name="name" type="radio" class="form-check-input" checked="">
                                                    <label class="form-check-label" for="shippingAddress01">
                                                        <span class="mb-4 fw-semibold d-block text-muted text-uppercase">Home Address</span>

                                                        <span class="fs-14 mb-2 d-block">Marcus Alfaro</span>
                                                        <span class="text-muted fw-normal text-wrap mb-1 d-block">4739 Bubby Drive Austin, TX 78729</span>
                                                        <span class="text-muted fw-normal d-block">Mo. 012-345-6789</span>
                                                    </label>
                                                </div>
                                                <div class="d-flex flex-wrap p-2 py-1 bg-light rounded-bottom border mt-n1">
                                                    <div>
                                                        <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#addAddressModal"><i class="ri-pencil-fill text-muted align-bottom me-1"></i> Edit</a>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="form-check card-radio">
                                                    <input id="shippingAddress02" name="shippingAddress" type="radio" class="form-check-input">
                                                    <label class="form-check-label" for="shippingAddress02">
                                                        <span class="mb-4 fw-semibold d-block text-muted text-uppercase">Office Address</span>

                                                        <span class="fs-14 mb-2 d-block">James Honda</span>
                                                        <span class="text-muted fw-normal text-wrap mb-1 d-block">1246 Virgil Street Pensacola, FL 32501</span>
                                                        <span class="text-muted fw-normal d-block">Mo. 012-345-6789</span>
                                                    </label>
                                                </div>
                                                <div class="d-flex flex-wrap p-2 py-1 bg-light rounded-bottom border mt-n1">
                                                    <div>
                                                        <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#addAddressModal"><i class="ri-pencil-fill text-muted align-bottom me-1"></i> Edit</a>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                </div>
                            </div>
                            <!-- end tab content -->
                        </form>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <h5 class="card-title mb-0">Order Summary</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-card">
                            <table class="table table-borderless align-middle mb-0">
                                <thead class="table-light text-muted">
                                <tr>
                                    <th style="width: 90px;" scope="col">Product</th>
                                    <th scope="col">Product Info</th>
                                    <th scope="col" class="text-end">Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="avatar-md bg-light rounded p-1">
                                            <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block">
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="fs-14"><a href="apps-ecommerce-product-details.html" class="text-body">Sweatshirt for Men (Pink)</a></h5>
                                        <p class="text-muted mb-0">$ 119.99 x 2</p>
                                    </td>
                                    <td class="text-end">$ 239.98</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="avatar-md bg-light rounded p-1">
                                            <img src="assets/images/products/img-7.png" alt="" class="img-fluid d-block">
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="fs-14"><a href="apps-ecommerce-product-details.html" class="text-body">Noise Evolve Smartwatch</a></h5>
                                        <p class="text-muted mb-0">$ 94.99 x 1</p>
                                    </td>
                                    <td class="text-end">$ 94.99</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="avatar-md bg-light rounded p-1">
                                            <img src="assets/images/products/img-3.png" alt="" class="img-fluid d-block">
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="fs-14"><a href="apps-ecommerce-product-details.html" class="text-body">350 ml Glass Grocery Container</a></h5>
                                        <p class="text-muted mb-0">$ 24.99 x 1</p>
                                    </td>
                                    <td class="text-end">$ 24.99</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold" colspan="2">Всего :</td>
                                    <td class="fw-semibold text-end">{{$order->getFullPrice()}} руб.</td>
                                </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div>

@endsection



