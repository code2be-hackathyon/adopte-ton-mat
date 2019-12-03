@extends('adminlte::page')

@section('title', 'AdopteTonMat')

@section('content_header')
    <h1>Annuaire des associations</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header border-0">
            <h3 class="card-title">Associations</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                <tr>
                    <th>Nom de la association</th>
                    <th>Nom du référent</th>
                    <th>Description</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>nom Association </td>
                    <td>nom référent</td>
                    <td>description</td>
                    <td>email</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card -->

    {{--    <div class="row">--}}
{{--        <div class="col-md-12">--}}
{{--            <!-- USERS LIST -->--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">--}}
{{--                    <h3 class="card-title">Latest Members</h3>--}}

{{--                    <div class="card-tools">--}}
{{--                        <span class="badge badge-danger">8 New Members</span>--}}
{{--                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>--}}
{{--                        </button>--}}
{{--                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- /.card-header -->--}}
{{--                <div class="card-body p-0">--}}
{{--                    <ul class="users-list clearfix">--}}
{{--                        <li>--}}
{{--                            <img src="dist/img/user1-128x128.jpg" alt="User Image">--}}
{{--                            <a class="users-list-name" href="{{$associations['1']->designation}}</a>--}}
{{--                            <a class="users-list-text" href="{{$associations['1']->referent_name}}</a>--}}
{{--                            <a class="users-list-descriptif" href="{{$associations['1']->description}}</a>--}}
{{--                            <a class="users-list-text" href="{{$associations['1']->email}}</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <!-- /.users-list -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--/.card -->--}}
{{--        </div>--}}
{{--        <!-- /.col -->--}}
{{--    </div>--}}

@stop
