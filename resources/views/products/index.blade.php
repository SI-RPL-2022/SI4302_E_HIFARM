@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <x-sidebar-navigation/>

        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">{{ __('Daftar Produk') }}</div>

                <div class="m-3">
                    <a class="btn btn-sm btn-primary mb-2 fw-bold" href="{{ route('product.create') }}">
                        <span><i class="bi bi-plus-lg fw-bold"></i>
                        </span>{{ __('Add Product') }}
                    </a>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Berat</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        {{-- @foreach () --}}
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="d-flex flex-wrap">
                                    <a class="btn btn-sm btn-info me-1 mb-1 text-white" href=""> {{ __('View') }} </a>
                                    <a class="btn btn-sm btn-primary me-1 mb-1" href="{{ route('product.edit') }}"> {{ __('Edit') }} </a>
                                    <button class="btn btn-sm btn-danger me-1 mb-1" type="button" data-bs-toggle="modal" data-bs-target="#confirmationDelete">Delete</button>
                                </td>
                            </tr>

                            <div class="modal fade" id="confirmationDelete" tabindex="-1" aria-labelledby="confirmationDeleteLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Item Produk</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        {{ __('Apakah Anda Yakin untuk Melakukan Hapus Produk dari toko?') }}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
