@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <x-sidebar-navigation />

        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">{{ __('JurnalKu') }}</div>

                <div class="m-3">
                    @if (session()->has('success-add'))
                    <x-alert type="success" message="{{ session('success-add') }}" />
                    @endif

                    @if (session()->has('success-update'))
                    <x-alert type="success" message="{{ session('success-update') }}" />
                    @endif

                    @if (session()->has('success-remove'))
                    <x-alert type="success" message="{{ session('success-remove') }}" />
                    @endif
                </div>

                <div class="px-3 mb-3">
                    <form action="{{ route('vendor.journal.index') }}" method="POST">
                        @csrf
                        <input type="hidden" name="vendor_id" value="{{ auth()->user()->id }}">

                        <div class="row justify-content-md-center">
                            <div class="col">
                                <div class="mb-3 row">
                                    <label for="note"
                                        class="col-sm-4 col-form-label">{{ __('Keterangan Transaksi') }}</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="note" name="note">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="amount"
                                        class="col-sm-4 col-form-label">{{ __('Nominal Transaksi') }}</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="amount" name="amount" min=0>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="category"
                                        class="col-sm-4 col-form-label">{{ __('Jenis Transaksi') }}</label>
                                    <div class="col-sm-8">

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="category"
                                                id="inlineRadio1" value="Pemasukan">
                                            <label class="form-check-label"
                                                for="inlineRadio1">{{ __('Pemasukan') }}</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="category"
                                                id="inlineRadio2" value="Pengeluaran">
                                            <label class="form-check-label"
                                                for="inlineRadio2">{{ __('Pengeluaran') }}</label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3 row">
                                    <label for="date"
                                        class="col-sm-4 col-form-label">{{ __('Tanggal Transaksi') }}</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="date" name="date">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">{{ __('Submit') }}</button>
                    </form>
                </div>
                <hr class="px-3">

                <p class="px-3 fw-bold">Detail Jurnal</p>
                <div class="px-3">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Pemasukan</th>
                                <th scope="col">Pengeluaran</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total_pemasukan = 0;
                                $total_pengeluaran = 0;
                            @endphp
                            @foreach ($data as $key)
                            @can('view', $key)
                            <tr>
                                <td>{{ $key->date }}</td>
                                <td>{{ $key->note }}</td>
                                @if ($key->category == 'Pemasukan')
                                @php
                                    $total_pemasukan += $key->amount;
                                @endphp
                                <td>@currency($key->amount)</td>
                                <td>@currency(0)</td>
                                @else
                                @php
                                    $total_pengeluaran += $key->amount;
                                @endphp
                                <td>@currency(0)</td>
                                <td>@currency($key->amount)</td>
                                @endif
                                <td class="d-flex flex-wrap">
                                    <button class="btn btn-sm btn-warning me-1 mb-1" type="button" data-bs-toggle="modal"
                                        data-bs-target="#confirmationEdit{{ $key->id }}">Edit</button>
                                    <button class="btn btn-sm btn-danger me-1 mb-1" type="button" data-bs-toggle="modal"
                                        data-bs-target="#confirmationDelete{{ $key->id }}">Delete</button>
                                </td>
                            </tr>

                            <div class="modal fade" id="confirmationEdit{{ $key->id }}" tabindex="-1"
                                aria-labelledby="confirmationEditLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Transaksi Jurnal</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="/vendor/journal/edit/{{ $key->id }}" method="post">
                                            @csrf
                                            {{-- <input type="hidden" name="_method" value="POST"> --}}
                                            <input type="hidden" name="id" value="{{ $key->id }}">
                                            <input type="hidden" name="vendor_id" value="{{ auth()->user()->id }}">
                                            <div class="modal-body">
                                                <div class="mb-3 row">
                                                    <label for="note"
                                                        class="col-sm-4 col-form-label">{{ __('Keterangan Transaksi') }}</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="note" name="note"
                                                            value="{{ $key->note }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="date"
                                                        class="col-sm-4 col-form-label">{{ __('Tanggal Transaksi') }}</label>
                                                    <div class="col-sm-8">
                                                        <input type="date" class="form-control" id="date" name="date"
                                                            value={{ $key->date }}>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="amount"
                                                        class="col-sm-4 col-form-label">{{ __('Nominal Transaksi') }}</label>
                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control" id="amount"
                                                            name="amount" min=0 value={{ $key->amount }}>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="category"
                                                        class="col-sm-4 col-form-label">{{ __('Jenis Transaksi') }}</label>
                                                    <div class="col-sm-8">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="category"
                                                                id="inlineRadio1" value="Pemasukan" @if($key->category == 'Pemasukan') checked @endif>
                                                            <label class="form-check-label"
                                                                for="inlineRadio1">{{ __('Pemasukan') }}</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="category"
                                                                id="inlineRadio2" value="Pengeluaran" @if($key->category == 'Pengeluaran') checked @endif>
                                                            <label class="form-check-label"
                                                                for="inlineRadio2">{{ __('Pengeluaran') }}</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="confirmationDelete{{ $key->id }}" tabindex="-1"
                                aria-labelledby="confirmationDeleteLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Transaksi Jurnal</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ __('Apakah Anda Yakin untuk Menghapus Transaksi?') }}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form action="/vendor/journal/{{ $key->id }}" method="post">
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
                            <tr>
                                <td colspan="2" class="fw-bold">Total</td>
                                <td>@currency($total_pemasukan)</td>
                                <td>@currency($total_pengeluaran)</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection