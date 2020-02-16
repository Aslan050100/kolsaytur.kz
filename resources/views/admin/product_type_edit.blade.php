@extends('layouts.app', ['title' => __('Product type')])

@section('content')
    @include('users.partials.header', ['title' => __('Изменить тип продукта')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Тип продукта') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('product_type') }}" class="btn btn-sm btn-primary">{{ __('Назад') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('product_type.update', $product_type->id) }}" autocomplete="off">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('Информация о типе продукта') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Имя') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Name') }}" value="{{ $product_type->name }}" required autofocus>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label" for="input-description">{{ __('Описания') }}</label>
                                    <input class="form-control form-control-alternative" type="textarea" name="desc"  value="{{ $product_type->description }}">
                                </div>
                                
                                
                                

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Изменить') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection