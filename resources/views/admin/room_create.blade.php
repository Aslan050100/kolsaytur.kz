@extends('layouts.app', ['title' => __('Room Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Добавить комнату')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Управление комнатами') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('room') }}" class="btn btn-sm btn-primary">{{ __('Назад') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('room.store') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            
                            <h6 class="heading-small text-muted mb-4">{{ __('Информация о номере') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Имя') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Имя') }}" value="{{ old('name') }}" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Цена') }}</label>
                                    <input type="text" name="price" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Цена') }}" value="{{ old('price') }}" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">{{ __('Тип номера') }}</label>
                                    <select name='room_type' class="browser-default custom-select">
                                      <option selected>Откройте это меню выбора</option>
                                      @foreach($room_types as $room_type)
                                      <option value="{{$room_type->id}}">{{$room_type->name}}</option>
                                      @endforeach
                                    </select>
                                 
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">{{ __('Продукт') }}</label>
                                    <select name='product' class="browser-default custom-select">
                                      <option selected>Откройте это меню выбора</option>
                                      @foreach($products as $product)
                                      <option value="{{$product->id}}">{{$product->name}}</option>
                                      @endforeach
                                    </select>
                                 
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Количество') }}</label>
                                    <input type="text" name="quantity" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Количество') }}" value="{{ old('quantity') }}" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">{{ __('Дети') }}</label>
                                    <select name='children' class="browser-default custom-select">
                                      <option selected>Откройте это меню выбора</option>
                                      <option value="1">Да</option>
                                      <option value="0">Нет</option>
                                    </select>
                                 
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">{{ __('Животное') }}</label>
                                    <select name='animal' class="browser-default custom-select">
                                      <option selected>Откройте это меню выбора</option>
                                      <option value="1">Да</option>
                                      <option value="0">Нет</option>
                                      
                                    </select>
                                 
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">{{ __('Дым') }}</label>
                                    <select name='smoke' class="browser-default custom-select">
                                      <option selected>Откройте это меню выбора</option>
                                      <option value="1">Да</option>
                                      <option value="0">Нет</option>
                                      
                                    </select>
                                 
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-map">{{ __('Фото') }}</label>
                                    <input type="file" name="image" id="input-map" class="form-control form-control-alternative" placeholder="{{ __('Фото') }}" value="{{ old('image') }}" required>
                                </div>

                               

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Сохранить') }}</button>
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