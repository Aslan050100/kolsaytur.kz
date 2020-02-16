@extends('layouts.app', ['title' => __('Comfort')])

@section('content')
    @include('users.partials.header', ['title' => __('Изменить Удобство')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Удобство') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('comfort') }}" class="btn btn-sm btn-primary">{{ __('Назад') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('comfort.update', $comfort->id) }}" autocomplete="off">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('Информация об удобство') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Имя') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Имя') }}" value="{{ $comfort->name }}" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-map">{{ __('Икона') }}</label>
                                    <input type="file" name="icon" id="input-map" class="form-control form-control-alternative" placeholder="{{ __('Icon') }}" value="{{ $comfort->icon }}">
                                </div>
                                
                                
                                <div class="form-group">
                                    <label class="form-control-label" for="input-description">{{ __('Описания') }}</label>
                                    <input class="form-control form-control-alternative" type="textarea" name="desc" placeholder="Enter text here..." value="{{ $comfort->description }}">
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