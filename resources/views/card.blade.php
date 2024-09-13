<tr class="gridjs-tr">
<td data-column-id="#" class="gridjs-td">
    <span>
        <div  class="form-check checkbox-product-list">
            <a href="{{ route('products') }}/{{ $products->code }}" class="text-body">{{ $products->id }}</a>
        </div>
    </span>
</td>
<td data-column-id="product" class="gridjs-td">
    <span>
        <div class="d-flex align-items-center">
            <div class="flex-shrink-0 me-3">
                <div class="avatar-sm bg-light rounded p-1">
                    <img src="assets/images/products/img-1.png" alt="" class="img-fluid d-block">
                </div>
            </div>
            <div class="flex-grow-1">
                <h5 class="fs-14 mb-1">
                    <a href="{{ route('products') }}/{{ $products->code }}" class="text-body">{{ $products->name }}</a>
                </h5>
                <p class="text-muted mb-0">Категория : <span class="fw-medium">{{$products->category->name}}</span></p>
            </div>
        </div>
    </span>
</td>
<td data-column-id="stock" class="gridjs-td">12</td>
<td data-column-id="price" class="gridjs-td">
    <span>{{ $products->price }} руб.</span>
</td>
    <td data-column-id="price" class="gridjs-td">
        <span>{{ $products->price }} руб.</span>
    </td>
<td data-column-id="orders" class="gridjs-td">48</td>
<td data-column-id="rating" class="gridjs-td">
    <span>
        <span class="badge bg-light text-body fs-12 fw-medium">
            <form action="{{ route('basket-add',$products) }}" method="post">
                @csrf
                <button type="submit" class="" role="button">В корзину</button>
            </form>

        </span>
    </span>
</td>
<td data-column-id="published" class="gridjs-td">
    <span>12 Oct, 2021<small class="text-muted ms-1">10:05 AM</small>
    </span></td>
<td data-column-id="action" class="gridjs-td">
    <span><div class="dropdown">
            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ri-more-fill"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="apps-ecommerce-product-details.html">
                        <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                        View
                    </a>
                </li>
                <li>
                    <a class="dropdown-item edit-list" data-edit-id="1" href="apps-ecommerce-add-product.html">
                        <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                        Edit</a>
                </li>
                <li class="dropdown-divider"></li>
                <li>
                        <form action="{{ route('products.delete', $products->code) }}" method="POST" style="display:inline;">
                        @csrf
                            @method('DELETE')
                        <button class="dropdown-item remove-list" type="submit" onclick="return confirm('Are you sure you want to delete this product?');">

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
