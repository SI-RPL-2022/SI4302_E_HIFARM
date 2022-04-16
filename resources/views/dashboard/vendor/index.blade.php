@extends('layouts.app')

@section('title', 'Dashboard Vendor')

@section('content')
<div class="container">
    <div class="row">
        <x-sidebar-navigation/>

        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    {{ __('Selamat datang Vendor') }}
                </div>
            </div>
        </div>
    </div>

</div>
@endsection