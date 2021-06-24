
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    {{ __('You are logged in!') }}
                    <div class="list-group">
                        <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                          The current button
                        </button>
                        <button type="button" class="list-group-item list-group-item-action">A second item</button>
                        <button type="button" class="list-group-item list-group-item-action">A third button item</button>
                        <button type="button" class="list-group-item list-group-item-action">A fourth button item</button>
                        <button type="button" class="list-group-item list-group-item-action" disabled>A disabled button item</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
