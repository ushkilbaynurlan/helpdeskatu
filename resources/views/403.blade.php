@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body p-4">
                <div class="page-error">
                    <div class="page-inner">
                        <h1>403</h1>
                        <div class="page-description">
                            {{ __('Ондай бет жоқ') }}
                        </div>
                        <div class="page-search">
                            <p class="text-muted mt-3">{{ __("ҚАТЕ.")}}</p>
                            <div class="mt-3">
                                <a class="btn-return-home badge-blue" href="{{route('admin.dashboard')}}"><i class="fas fa-reply"></i> {{ __('Return Home')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
