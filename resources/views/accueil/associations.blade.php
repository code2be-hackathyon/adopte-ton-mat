@extends('adminlte::page')

@section('title', 'AdopteTonMat')

@section('content_header')
    <h1>Annuaire des associations</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- USERS LIST -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Latest Members</h3>

                    <div class="card-tools">
                        <span class="badge badge-danger">8 New Members</span>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <ul class="users-list clearfix">
                        <li>
                            <img src="dist/img/user1-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="{{ route('associations.index', $associations) }}">{{$associations->designation}}</a>
                            <a class="users-list-name" href="{{ route('associations.index', $associations) }}">{{$associations->nomReferent}}</a>
                            <a class="users-list-descriptif" href="{{ route('associations.index', $associations) }}">{{$associations->descriptif}}</a>
                            <a class="users-list-email" href="{{ route('associations.index', $associations) }}">{{$associations->mail}}</a>
                        </li>
                    </ul>
                    <!-- /.users-list -->
                </div>
            </div>
            <!--/.card -->
        </div>
        <!-- /.col -->
    </div>

@stop
