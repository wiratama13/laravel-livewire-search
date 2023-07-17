@extends('layouts.app')
@push('style')
    @livewireStyles()
@endpush

@push('script')
    @livewireScripts()
@endpush

@section('content')
    <div class="container">
        <h1>Produk</h1>
        <hr>
        @livewire('student-table')
    </div>
@endsection