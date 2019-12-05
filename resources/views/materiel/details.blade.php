<style>
    conteneur{
        width: 300px;
        height: 300px;
        border: 1px #aaa solid;
        text-align: center;
    }
</style>
@extends('adminlte::page')

@section('title', 'AdopteTonMat')

@section('content_header')
    <h1>Materiels pour une catégorie</h1>
@stop

@section('content')

    @forelse($materiels as $materiel)

{{--        @if(\Illuminate\Support\Facades\DB::table('categories')->find(--}}
{{--    \Illuminate\Support\Facades\DB::table('sub_categories')->find(--}}
{{--        $materiel->sub_category_id)->category_id)->id == request('category'))@php($i = 0)--}}


        <section class="content">
            <div class="align-content-lg-center">

                    <!-- Widget: user widget style 1 -->
                    <div class="card card-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <center>
                        <div class=conteneur>
                            <img src="{{asset('img/'.request('subCategory').'/index.png')}} " alt="error 404"/>
                        </div>
                        </center>

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-6 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">Nom du matériel </h5>
                                        <span class="description-text">{{$materiel->label}}</span>
                                        <h5 class="description-header">Référence </h5>
                                        <span class="description-text">{{$materiel->reference}}</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-6">
                                    <div class="description-block">
                                        <h5 class="description-header">Nom de l'association </h5>
                                        <span class="description-text">{{\Illuminate\Support\Facades\DB::table('associations')->find($materiel['association_id'])->designation}}</span>
                                        <h5 class="description-header">Email de l'association </h5>
                                        <span class="description-text"><a href="mailto:{{\Illuminate\Support\Facades\DB::table('users')->find(\Illuminate\Support\Facades\DB::table('associations')->find($materiel['association_id'])->user_id)->email}}">{{\Illuminate\Support\Facades\DB::table('users')->find(\Illuminate\Support\Facades\DB::table('associations')->find($materiel['association_id'])->user_id)->email}}</a></span>
                                    </div>
                                </div>

                            </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.widget-user -->
        </section>
{{--        @else--}}
{{--           @php($i = 1)--}}
{{--        @endif--}}

    @empty
        <div class="text-center"><p>Il n'y a pas de materiel disponible dans cette catégorie</p></div>
    @endforelse


{{--    @if($i == 1)--}}
{{--        <div class="text-center"><p>Il n'y a pas de materiel disponible dans cette catégorie</p></div>--}}
{{--    @endif--}}


@stop
