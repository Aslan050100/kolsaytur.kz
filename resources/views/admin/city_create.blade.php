@extends('layouts.app', ['title' => __('City Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Добавить город')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Город') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('city') }}" class="btn btn-sm btn-primary">{{ __('Назад') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('city.store') }}" autocomplete="off">
                            @csrf
                            
                            <h6 class="heading-small text-muted mb-4">{{ __('Информация о городе') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Имя') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Имя') }}" value="{{ old('name') }}" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-map">{{ __('Seo Title') }}</label>
                                    <input type="text" name="seo_title" id="input-map" class="form-control form-control-alternative" placeholder="{{ __('Seo title') }}" value="{{ old('seo_title') }}" required>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label class="form-control-label" for="input-description">{{ __('Seo Description') }}</label>
                                    <input class="form-control form-control-alternative" type="textarea" name="seo_desc" placeholder="Enter text here...">
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