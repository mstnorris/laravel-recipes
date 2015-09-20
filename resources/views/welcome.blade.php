@extends('layouts.master')

@section('header')
<style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .btn-outline,
            .btn-outline:hover {
                background: none;
                padding: 6px 24px;
                color: #607d8b;
                border-color: #607d8b;
            }

            .btn-outline:hover {
                /*position: relative;*/
                top: -1px;
                box-shadow: 0 1px 5px #ccc;
            }

            .btn-outline:active {
                border-color: #455A64;
                background: none;
            }


        </style>
@endsection

@section('content')

    <div class="container">
        <div class="content">
            <h1>Laravel Recipes</h1>
            <a href="{{ route('all_recipes_path') }}" class="btn btn-outline btn-primary">View Recipes</a>
            <a href="{{ route('about_path') }}" class="btn btn-outline btn-primary">About</a>
        </div>
    </div>

@endsection
