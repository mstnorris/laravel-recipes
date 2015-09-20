@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <h1>All Ingredients</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

                @foreach ( $ingredients as $ingredient )

                    <div class="row">
                        <div class="col-xs-12">

                            <div class="panel panel-default">
                                <div class="panel-body">

                                    <img class="img-responsive" src="{{ $ingredient->image_path }}">
                                    <div class="card-block">
                                        <h4 class="card-title">{{ $ingredient->name }}</h4>
                                        <p class="card-text">{{ $ingredient->description }}</p>
                                        @if ( $ingredient->is_vegetarian )
                                            <span class="label label-success">Vegetarian</span>
                                        @endif
                                        @if ( $ingredient->is_vegan )
                                            <span class="label label-success">Vegan</span>
                                        @endif
                                    </div>

                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <p class="text-center"><a href="#"><i class="fa fa-fw fa-spoon"></i></a></p>
                                                </div>
                                                <div class="col-xs-3">
                                                    <p class="text-center"><a href="#"><i class="fa fa-fw fa-cutlery"></i></a></p>
                                                </div>
                                                <div class="col-xs-3">
                                                    <p class="text-center"><a href="#"><i class="fa fa-fw fa-coffee"></i></a></p>
                                                </div>
                                                <div class="col-xs-3">
                                                    <p class="text-center"><a href="#"><i class="fa fa-fw fa-glass"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                @endforeach



            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                {!! $ingredients->render() !!}
            </div>
        </div>
    </div>
@endsection