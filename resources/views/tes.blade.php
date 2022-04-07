@extends('layouts.app')


@section('content')
<h1> INI HALAMAN KHUSUS VENDOR, KLO KMU USER, SEHARUSNYA TULISAN INI GA BISA DIBACA </h1>
<form action="{{ route('vendor.edit', Auth::user()->id)}}" method="GET" enctype="multipart/form-data"> 
  @csrf
<button type='submit'> Edit </button>
</form>
@endsection