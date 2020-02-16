@extends('layouts.app', ['title' => __('Room')])

@section('content')
    @include('users.partials.header', ['title' => __('Edit Room')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Комната') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('room') }}" class="btn btn-sm btn-primary">{{ __('Назад') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('room.update', $room->id) }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('Информация о номере') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Имя') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Name') }}" value="{{ $room->name }}" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Цена') }}</label>
                                    <input type="text" name="price" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Price') }}" value="{{ $room->price }}" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">{{ __('Тип номера') }}</label>
                                    <select name='room_type' class="browser-default custom-select">
                                      <option selected value="{{ $room->room_type_id }}">{{ $room_type_name }}</option>
                                      @foreach($room_types as $room_type)
                                      <option value="{{$room_type->id}}">{{$room_type->name}}</option>
                                      @endforeach
                                    </select>
                                 
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">{{ __('Продукт') }}</label>
                                    <select name='product' class="browser-default custom-select">
                                      <option selected value="{{ $room->pro_id }}">{{ $pro_name }}</option>
                                      @foreach($products as $product)
                                      <option value="{{$product->id}}">{{$product->name}}</option>
                                      @endforeach
                                    </select>
                                 
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Количество') }}</label>
                                    <input type="text" name="quantity" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Количество') }}" value="{{ $room->quantity }}" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">{{ __('Дети') }}</label>
                                    <select name='children' class="browser-default custom-select">
                                      <option selected value="{{ $room->children }}">{{ $room->children }}</option>
                                      <option value="1">Yes</option>
                                      <option value="0">No</option>
                                    </select>
                                 
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">{{ __('Животное') }}</label>
                                    <select name='animal' class="browser-default custom-select">
                                      <option selected value="{{ $room->animal }}">{{ $room->animal }}</option>
                                      <option value="1">Yes</option>
                                      <option value="0">No</option>
                                      
                                    </select>
                                 
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">{{ __('Дым') }}</label>
                                    <select name='smoke' class="browser-default custom-select">
                                      <option selected value="{{ $room->smoke }}">{{ $room->smoke }}</option>
                                      <option value="1">Yes</option>
                                      <option value="0">No</option>
                                      
                                    </select>
                                 
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-map">{{ __('Фото') }}</label>
                                    <input type="file" name="image" id="input-map" class="form-control form-control-alternative" placeholder="{{ __('Image') }}" value="{{ $room->image }}">
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