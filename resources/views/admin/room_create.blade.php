@extends('layouts.app', ['title' => __('Room Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Add Room')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Room Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('room') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('room.store') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            
                            <h6 class="heading-small text-muted mb-4">{{ __('Room information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Price') }}</label>
                                    <input type="text" name="price" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Price') }}" value="{{ old('price') }}" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">{{ __('Room type') }}</label>
                                    <select name='room_type' class="browser-default custom-select">
                                      <option selected>Open this select menu</option>
                                      @foreach($room_types as $room_type)
                                      <option value="{{$room_type->id}}">{{$room_type->name}}</option>
                                      @endforeach
                                    </select>
                                 
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">{{ __('Product') }}</label>
                                    <select name='product' class="browser-default custom-select">
                                      <option selected>Open this select menu</option>
                                      @foreach($products as $product)
                                      <option value="{{$product->id}}">{{$product->name}}</option>
                                      @endforeach
                                    </select>
                                 
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Quantity') }}</label>
                                    <input type="text" name="quantity" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Quantity') }}" value="{{ old('quantity') }}" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">{{ __('Children') }}</label>
                                    <select name='children' class="browser-default custom-select">
                                      <option selected>Open this select menu</option>
                                      <option value="1">Yes</option>
                                      <option value="0">No</option>
                                    </select>
                                 
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">{{ __('Animal') }}</label>
                                    <select name='animal' class="browser-default custom-select">
                                      <option selected>Open this select menu</option>
                                      <option value="1">Yes</option>
                                      <option value="0">No</option>
                                      
                                    </select>
                                 
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">{{ __('Smoke') }}</label>
                                    <select name='smoke' class="browser-default custom-select">
                                      <option selected>Open this select menu</option>
                                      <option value="1">Yes</option>
                                      <option value="0">No</option>
                                      
                                    </select>
                                 
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-map">{{ __('Image') }}</label>
                                    <input type="file" name="image" id="input-map" class="form-control form-control-alternative" placeholder="{{ __('Image') }}" value="{{ old('image') }}" required>
                                </div>

                               

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
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