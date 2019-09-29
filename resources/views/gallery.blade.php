@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            @include('layouts/menu')
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div id="flick-img">
                        <p>Select a category from the left to see images here.</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection