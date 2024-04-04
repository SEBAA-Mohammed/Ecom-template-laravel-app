@extends('layouts.app')
@section('content')
    @if (session('message'))
        <div>{{ session('message') }}</div>
    @endif
    <div class="page-contain category-page no-sidebar">
        <div class="container">
            <div class="row">
                <livewire:products />
            </div>
        </div>
    </div>
@endsection
