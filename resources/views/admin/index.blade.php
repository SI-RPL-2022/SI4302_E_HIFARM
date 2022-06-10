@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <x-sidebar-navigation-admin/>

        <div class="col-lg-10">
            <div class="card">
                <div class="card-header" style="font-weight:bolder">{{ __('Daftar Request') }}</div>

                <!-- {{-- @if (session()->has('success-add'))
                    <div class="mx-3 my-2 alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success-add') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif --}}
                <div class="m-3">
                    @if (session()->has('success-add'))
                        <x-alert type="success" message="{{ session('success-add') }}"/>
                    @endif -->

                    @if (session()->has('success-update'))
                    <div class="mx-3 my-2 alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success-update') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif 
                    
                    

                    <!-- <a class="btn btn-sm btn-primary mb-2 fw-bold" href="{{ route('vendor.product.create') }}">
                        <span><i class="bi bi-plus-lg fw-bold"></i>
                        </span>{{ __('Add Product') }}
                    </a> -->
                    <div class='m-3'>
                    <form class="mb-2 d-flex input-group" action="/admin/request">
                        <input class="form-control" type="text" placeholder="Search" name="search" aria-label="Search" value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </form>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Id</th>
                                <th scope="col">Title</th>
                                <th scope="col">Subtitle</th>
                                <th scope="col">Content</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Status</th>
                                <th scope="col" width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php
                        $x=1;
                        
                        @endphp
                        @foreach ($request as $key)
                        
                            <tr>
                            
                        <td>{{ $x }}</td>
                                <td>{{ $key->id }}</td>
                                @php
                        $x++;
                        
                        @endphp
                                <td>{{ $key->title }}</td>
                                <td>{{ Str::limit($key->subtitle, 40) }}</td>
                                <td>{{ Str::limit($key->content, 100) }}</td>
                                <td>{{ $key->category }}</td>
                                <td>{{ $key->status }}</td>
                                <td class="d-flex flex-wrap">
                                    <a class="btn btn-sm btn-info me-1 mb-1 text-white" href="/admin/request/show/{{ $key->id }}"> {{ __('View') }} </a>
                                    <form action="{{ route('admin.acc',$key->id)}}" method="post">
                                        @csrf
                                        
                                        <button class='btn btn-sm btn-primary me-1 mb-1' type="submit">Accept</button>
                                    </form>
                                    
                                    <form action="{{ route('admin.deny',$key->id)}}" method="post">
                                        @csrf
                                    <button class='btn btn-sm btn-danger me-1 mb-1' type="submit">Deny</button>
                                    </form>
                                   
                                </td>
                            </tr>
                        
                        @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        {{ $request->links() }}
                    </div>
                </div>
                </div>
                </br>
                    <div class="card">
                <div class="card-header" style="font-weight:bolder">{{ __('History') }}</div>
                    <!-- HISTORY -->
                    <form class="mb-2 d-flex input-group" action="/admin/request">
                        <input class="form-control" type="text" placeholder="Search" name="search2" aria-label="Search" value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </form>
                <div class="m-3">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th scope="col">No.</th>
                                <th scope="col">Id</th>
                                <th scope="col">Title</th>
                                <th scope="col">Subtitle</th>
                                <th scope="col">Content</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Status</th>
                                <th scope="col">Verifikasi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php
                        $x=1;
                        
                        @endphp
                        @foreach ($history as $key)
                        
                            <tr>
                            <td>{{ $x }}</td>
                                @php
                        $x++;
                        
                        @endphp
                                <td>{{ $key->id }}</td>
                                <td>{{ $key->title }}</td>
                                <td>{{ Str::limit($key->subtitle, 40) }}</td>
                                <td>{{ Str::limit($key->content, 100) }}</td>
                                <td>{{ $key->category }}</td>
                                <td>{{ $key->status }}</td>
                                <td>{{ $key->updated_at }}</td>
                            </tr>
                        
                        @endforeach
                    </tbody>
                    </table>
                    
                    <div class="d-flex justify-content-end">
                        {{ $history->links() }}
                    </div>
                    

                </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection