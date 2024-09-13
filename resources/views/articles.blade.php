@extends('master')
@section('title', 'Статьи')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                <h4 class="mb-sm-0">Товары</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Главная</a></li>
                        <li class="breadcrumb-item active">Товары</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div>
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row g-4">
                            <div class="col-sm-auto">
                                <div>
                                    <a href="apps-ecommerce-add-product.html" class="btn btn-success"
                                       id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i>Добавить статью</a>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="d-flex justify-content-sm-end">
                                    <div class="search-box ms-2">
                                        <input type="text" class="form-control" id="searchProductList"
                                               placeholder="Search Products...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                    <li class="nav-item">
                                        Все <span
                                            class="badge bg-danger-subtle text-danger align-middle rounded-pill ms-1">11111</span>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-auto">
                                <div id="selection-element">
                                    <div class="my-n1 d-flex align-items-center text-muted">
                                        Select
                                        <div id="select-content" class="text-body fw-semibold px-1"></div>
                                        Result
                                        <button type="button"
                                                class="btn btn-link link-danger p-0 ms-3 material-shadow-none"
                                                data-bs-toggle="modal" data-bs-target="#removeItemModal">Remove
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card header -->
                    <div class="card-body" style="overflow-x: scroll">

                        <div class="tab-content text-muted">
                            <div class="tab-pane active" id="productnav-all" role="tabpanel">
                                <div id="table-product-list-all" class="table-card gridjs-border-none">
                                    <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                        <div class="gridjs-wrapper" style="height: auto;">
                                            <table role="grid" class="gridjs-table" style="height: auto;">
                                                <thead class="gridjs-thead">
                                                <tr class="gridjs-tr">
                                                    <th data-column-id="#" class="gridjs-th gridjs-th-sort text-muted"
                                                        tabindex="0" style="width: 40px;">
                                                        <div class="gridjs-th-content">#</div>
                                                    </th>
                                                    <th data-column-id="product"
                                                        class="gridjs-th gridjs-th-sort text-muted" tabindex="0"
                                                        style="width: 360px;">
                                                        <div class="gridjs-th-content">Статья</div>
                                                    </th>
                                                    <th data-column-id="stock"
                                                        class="gridjs-th gridjs-th-sort text-muted" tabindex="0"
                                                        style="width: 94px;">
                                                        <div class="gridjs-th-content">Дата публикации</div>
                                                    </th>
                                                    <th data-column-id="price"
                                                        class="gridjs-th gridjs-th-sort text-muted" tabindex="0"
                                                        style="width: 101px;">
                                                        <div class="gridjs-th-content">Просмотров</div>
                                                    </th>
                                                    <th data-column-id="action"
                                                        class="gridjs-th gridjs-th-sort text-muted" tabindex="0"
                                                        style="width: 80px;">
                                                        <div class="gridjs-th-content">Action</div>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="gridjs-tbody">
                                                @foreach($articles as $article)
                                                <tr class="gridjs-tr">
                                                    <td data-column-id="#" class="gridjs-td">
                                                        <span>
                                                            <div class="form-check checkbox-product-list">

                                                                <a href="/articles/{{ $article->code }}" class="text-body">{{ $article->id }}</a>
                                                            </div>
                                                        </span>
                                                    </td>
                                                    <td data-column-id="#" class="gridjs-td">
                                                        <span>
                                                            <div class="form-check checkbox-product-list">
                                                                <a href="/articles/{{ $article->code }}" class="text-body">{{ $article->name }}</a>
                                                            </div>
                                                        </span>
                                                    </td>
                                                    <td data-column-id="#" class="gridjs-td">
                                                        <span>
                                                            <div class="form-check checkbox-product-list">

                                                                <a href="/articles/{{ $article->code }}" class="text-body">{{ $article->created_at }}</a>

                                                            </div>
                                                        </span>
                                                    </td>
                                                    <td data-column-id="#" class="gridjs-td">
                                                        <span>
                                                            <div class="form-check checkbox-product-list">

                                                            </div>
                                                        </span>
                                                    </td>


                                                    <td data-column-id="action" class="gridjs-td">
                                                        <span><div class="dropdown">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                    <i class="ri-more-fill"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li>
                                                                        <a class="dropdown-item"
                                                                           href="apps-ecommerce-product-details.html">
                                                                            <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                            View
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item edit-list"
                                                                           data-edit-id="1"
                                                                           href="apps-ecommerce-add-product.html">
                                                                            <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                            Edit</a>
                                                                    </li>
                                                                    <li class="dropdown-divider"></li>
                                                                    <li>
                                                                            <form
                                                                                action=""
                                                                                method="POST" style="display:inline;">

                                                                            <button class="dropdown-item remove-list"
                                                                                    type="submit"
                                                                                    onclick="return confirm('Are you sure you want to delete this product?');">

                                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                Удалить</button>
                                                                        </form>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </span>
                                                    </td>
                                                </tr>
                                                @endforeach


                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="gridjs-footer">
                                            <div class="gridjs-pagination">
                                                <div role="status" aria-live="polite" class="gridjs-summary"
                                                     title="Page 1 of 2">Showing <b>1</b> to <b>10</b> of <b>12</b>
                                                    results
                                                </div>
                                                <div class="gridjs-pages">
                                                    <button tabindex="0" role="button" disabled="" title="Previous"
                                                            aria-label="Previous" class="">Previous
                                                    </button>
                                                    <button tabindex="0" role="button" class="gridjs-currentPage"
                                                            title="Page 1" aria-label="Page 1">1
                                                    </button>
                                                    <button tabindex="0" role="button" class="" title="Page 2"
                                                            aria-label="Page 2">2
                                                    </button>
                                                    <button tabindex="0" role="button" title="Next" aria-label="Next"
                                                            class="">Next
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="gridjs-temp" class="gridjs-temp"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->

                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
        </div>
    </div>
@endsection
