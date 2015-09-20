@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1>About</h1>

            @can('edit_forum')
                <a href="#">Edit Forum</a>
            @endcan
        </div>
    </div>
</div>

@endsection