@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <livewire:contact-index></livewire:contact-index>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
