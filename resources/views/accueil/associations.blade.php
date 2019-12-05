@extends('adminlte::page')

@section('title', 'AdopteTonMat')

@section('content_header')
    <h1>Annuaire des associations</h1>
@stop

@section('content')
<div class="content">
    <div class="row-cols-2">
            <div class="card-header">
                <h3 class="card-title">Associations</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped datatable">
                    <thead>
                    <tr>
                        <th>Nom de l'association</th>
                        <th>Code Postal</th>
                        <th>Référent</th>
                        <th>Description</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($associations as $association)
                        <tr>
                            <td>{{$association->designation}} </td>
                            <td>{{\Illuminate\Support\Facades\DB::table('users')->find($association['user_id'])->postal_code}}</td>
                            <td>{{$association->referent_forename.' '.$association->referent_name}}</td>
                            <td>{{$association->description}}</td>
                            <td><a href="mailto:{{ \Illuminate\Support\Facades\DB::table('users')
                            ->find($association['user_id'])->email}}">
                                    {{ \Illuminate\Support\Facades\DB::table('users')
                            ->find($association['user_id'])->email}}</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
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

@section('js')
    @parent
    <script>
        $('.datatable').dataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json"
            }
        });
    </script>
@endsection
