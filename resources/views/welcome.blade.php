@extends('layouts.template')

@section('title', $breadcrumb->title)

@section('breadcrumb')
    <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Halo, Admin</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        Selamat datang all.
    </div>
</div>
@endsection
