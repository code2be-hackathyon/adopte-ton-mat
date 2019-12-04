@extends('adminlte::page')

@section('title', 'AdopteTonMat')

@section('content_header')
    <h1>Materiels pour une catégorie</h1>
@stop

@section('content')

    @if(!empty($materiels))

    @foreach($materiels as $materiel)
        <section class="content">
            <div class="container-fluid">
        <div class="col-md-5">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header " style="background: url('../img/index.png') center;">

                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-6 border-right">
                            <div class="description-block">
                                <h5 class="description-header">{{$materiel->label}}</h5>
                                <span class="description-text">{{$materiel->reference}}</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6 ">
                            <div class="description-block">
                                <h5 class="description-header">{{\Illuminate\Support\Facades\DB::table('associations')->find($materiels['0']['association_id'])->designation}}</h5>
                                <span class="description-text">{{\Illuminate\Support\Facades\DB::table('users')->find(\Illuminate\Support\Facades\DB::table('associations')->find($materiels['0']['association_id'])->user_id)->email}}</span>
                            </div>
                        </div>


                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>

            <!-- /.widget-user -->
            </div>
        </section>
    @endforeach
    @else
        <div class="text-center"><p>Il n'y a pas de materiel disponible dans cette catégorie</p></div>
    @endif
@stop
