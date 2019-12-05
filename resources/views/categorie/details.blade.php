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
                @foreach($sub_categories as $sub_category)
                    <div class="col-lg-6 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <center>
                                    <h3>{{$sub_category->label}}</h3>
                                </center>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="{{ route('materiel.getThisBySubCategoryId',['category' => request('category'),'subCategory'=>$sub_category]) }}" class="small-box-footer">Informations Supplémentaires <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
            @endforeach
            <!-- ./col -->
            </div><!-- /.container-fluid -->
    </section>
@stop
