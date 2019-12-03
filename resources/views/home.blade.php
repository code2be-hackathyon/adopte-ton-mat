@extends('adminlte::page')

@section('title', 'AdopteTonMat')

@section('content_header')
    <h1>Trouver un matériel</h1>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                    @foreach($categories as $categorie)
                        <div class="col-lg-6 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <center>
                                    <h3>{{$categorie->label}}</h3>
                                    </center>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="{{ route('materiel.details', $categorie) }}" class="small-box-footer">Informations Supplémentaires <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    @endforeach
                <!-- ./col -->
            </div><!-- /.container-fluid -->
    </section>
@stop
