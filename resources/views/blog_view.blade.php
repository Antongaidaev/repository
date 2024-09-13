@extends('master')
@section('title', ' '.$blog->name)
@section('content')
    <div class="col-12">
        <div class="main__title">
            <h2>Редактирование товара {{$blog->name}}</h2>
        </div>
    </div>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
            <div class="col-12">
                <div class="row">
                    <!-- details form -->
                    <div class="col-12 col-lg-12">
                        <form  method="post" action="update_product.php" class="form form--profile"   enctype="multipart/form-data">
                            <div class="row row--form">
                                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="form__group">
                                        <label class="form__label" for="username">Наименование</label>
                                        {{$blog->text}}
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
