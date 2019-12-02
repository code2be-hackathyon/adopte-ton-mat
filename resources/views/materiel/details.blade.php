@extends('adminlte::page')

@section('title', 'AdopteTonMat')

@section('content_header')
    <h1>Materiels pour une catégorie</h1>
@stop

@section('content')
{{--    @foreach($materiels as $materiel)--}}
{{--        <div class="col-md-5">--}}
{{--            <!-- Widget: user widget style 1 -->--}}
{{--            <div class="card card-widget widget-user">--}}
{{--                <!-- Add the bg color to the header using any of the bg-* classes -->--}}
{{--                <div class="widget-user-header text-white" style="background: url('../dist/img/photo1.png') center center;">--}}
{{--                    <h5 class="widget-user-username text-center">{{$materiels->label}}</h5>--}}
{{--                </div>--}}
{{--                <div class="card-footer">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-4 border-right">--}}
{{--                            <div class="description-block">--}}
{{--                                <h5 class="description-header">{{$materiels->label}}</h5>--}}
{{--                                <span class="description-text">{{$materiels->reference}}</span>--}}
{{--                            </div>--}}
{{--                            <!-- /.description-block -->--}}
{{--                        </div>--}}
{{--                        <!-- /.col -->--}}
{{--                        <div class="col-sm-4 border-right">--}}
{{--                            <div class="description-block">--}}
{{--                                <h5 class="description-header">{{$materiels->association_id}}</h5>--}}
{{--                                <span class="description-text">{{$associations->mail}}</span>--}}
{{--                            </div>--}}
{{--                            <!-- /.description-block -->--}}
{{--                        </div>--}}
{{--                        <!-- /.col -->--}}
{{--                    </div>--}}
{{--                    <!-- /.row -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- /.widget-user -->--}}
{{--        </div>--}}
{{--    @endforeach--}}

@stop
