@extends('layouts.app', ['title' => __('Order')])

@section('content')
    @include('layouts.headers.cards1')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Orders') }}</h3>
                            </div>
                           
                        </div>
                    </div>
                    
                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('Name') }}</th>
                                    <th scope="col">{{ __('Email') }}</th>
                                    <th scope="col">{{ __('Phone number') }}</th>
                                    <th scope="col">{{ __('Adults') }}</th>
                                     <th scope="col">{{ __('Children') }}</th>
                                     <th scope="col">{{ __('Room type') }}</th>
                                    <th scope="col">{{ __('Creation Date') }}</th>
                                    <th scope="col">{{ __('Update Date') }}</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->name }}</td>
                                        <td>
                                            <a>{{ $order->email }}</a>
                                        </td>
                                    <td>{{ $order->phone_number}}</td>
                                    <td>{{ $order->adults}}</td>
                                    <td>{{ $order->children}}</td>
                                    <td>{{ $order->room_type}}</td>
                                        <td>{{ $order->created_at}}</td>
                                        <td>{{ $order->updated_at}}</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">                                                   
                                                        <form action="{{ route('order.destroy', $order->id) }}" method="post">
                                                            @csrf
                                                           
                                                            <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                                {{ __('Delete') }}
                                                            </button>
                                                        </form>    
                                                   
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $orders->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
            
        @include('layouts.footers.auth')
    </div>
@endsection