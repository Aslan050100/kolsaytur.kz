@extends('layouts.app', ['title' => __('City')])

@section('content')
    @include('users.partials.header', ['title' => __('Edit City')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('City') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('city') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('city.update', $city->id) }}" autocomplete="off">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('City information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Name') }}" value="{{ $city->name }}" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-map">{{ __('Seo Title') }}</label>
                                    <input type="text" name="seo_title" id="input-map" class="form-control form-control-alternative" placeholder="{{ __('Seo title') }}" value="{{ $city->seo_title }}" required>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label class="form-control-label" for="input-description">{{ __('Seo Description') }}</label>
                                    <input class="form-control form-control-alternative" type="textarea" name="seo_desc" placeholder="Enter text here..." value="{{ $city->seo_desc }}">
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