@extends('layouts.app')

@section('title', 'BlogKu')

@section('content')
<div class="container">
    <div class="row">
        <x-sidebar-navigation/>

        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">{{ __('Daftar Blog') }}</div>

                <div class="m-3">
                    @if (session()->has('success-add'))
                        <x-alert type="success" message="{{ session('success-add') }}"/>
                    @endif

                    @if (session()->has('success-update'))
                        <x-alert type="success" message="{{ session('success-update') }}"/>
                    @endif
                    
                    @if (session()->has('success-remove'))
                        <x-alert type="success" message="{{ session('success-remove') }}"/>
                    @endif

                    <a class="btn btn-sm btn-primary mb-2 fw-bold" href="{{ route('vendor.blog.create') }}">
                        <span><i class="bi bi-plus-lg fw-bold text-white"></i>
                        </span>{{ __('Add Blog') }}
                    </a>

                    <form class="mb-2 d-flex input-group" action="/vendor/blog">
                        <input class="form-control" type="text" placeholder="Search" name="search" aria-label="Search" value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </form>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Updated</th>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $key)
                        @can('view', $key)
                            <tr>
                                <td>{{ $key->id }}</td>
                                <td>{{ $key->updated_at }}</td>
                                <td>{{ $key->title }}</td>
                                <td>{{ $key->status }}</td>
                                <td class="d-flex flex-wrap">
                                    <a class="btn btn-sm btn-info me-1 mb-1 text-white" href="/dashboard/vendor/blog/show/{{ $key->id }}"> {{ __('View') }} </a>
                                    <a class="btn btn-sm btn-primary me-1 mb-1" href="{{ route('vendor.blog.edit',$key->id) }}"> {{ __('Edit') }} </a>
                                    <button class="btn btn-sm btn-danger me-1 mb-1" type="button" data-bs-toggle="modal" data-bs-target="#confirmationDelete{{ $key->id }}">Delete</button>
                                </td>
                            </tr>

                            <div class="modal fade" id="confirmationDelete{{ $key->id }}" tabindex="-1" aria-labelledby="confirmationDeleteLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Item Produk</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        {{ __('Apakah Anda Yakin untuk Melakukan Hapus Blog?') }}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            
                                            <form action="{{ route('vendor.blog.destroy',$key->id) }}" method="post">
                                                @csrf

                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-danger">Delete</button>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endcan
                        @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-end">
                        {{ $data->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
