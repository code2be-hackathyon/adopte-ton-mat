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
                @foreach($errors as $categorie)
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{$categorie->label}}</h3>

{{--                                <p>{{ count($categorie->sousCategories) }}</p>--}}
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="{{ route('category.details', $categorie) }}" class="small-box-footer">Informations Supplémentaires <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                @endforeach
                <!-- ./col -->
            </div><!-- /.container-fluid -->
    </section>
@stop
