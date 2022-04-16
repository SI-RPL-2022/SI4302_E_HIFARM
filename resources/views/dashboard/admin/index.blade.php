@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <x-sidebar-navigation/>

        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    {{ __('Selamat datang Admin') }}
                </div>
            </div>
        </div>
    </div>

</div>
@endsection