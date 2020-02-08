@extends('layouts.app', ['title' => __('Order Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Add Order')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Order Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('order') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('order.store') }}" autocomplete="off"  enctype="multipart/form-data">
                            @csrf
                            
                            <h6 class="heading-small text-muted mb-4">{{ __('Order information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autofocus accept=".png, .jpg, .jpeg">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-map">{{ __('Email') }}</label>
                                    <input type="email" name="icon" id="input-map" class="form-control form-control-alternative" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label class="form-control-label" for="input-description">{{ __('Description') }}</label>
                                    <input class="form-control form-control-alternative" type="textarea" name="desc" placeholder="Enter text here...">
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