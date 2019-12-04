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

    </div>
{{--    <div class="card-body">--}}
{{--        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">--}}
{{--                        <thead>--}}
{{--                        <tr role="row"><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 367.433px;" aria-label="Browser: activate to sort column ascending">Association</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 322.7px;" aria-label="Platform(s): activate to sort column ascending">Nom du référent</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 239.05px;" aria-label="Engine version: activate to sort column ascending">Description</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 175.867px;" aria-label="CSS grade: activate to sort column ascending">Email</th></tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @foreach($associations as $association)--}}
{{--                        <tr role="row" class="odd">--}}
{{--                            <td class="sorting_1">{{$association->designation}}</td>--}}
{{--                            <td>{{$association->referent_name}}</td>--}}
{{--                            <td>{{$association->description}}</td>--}}
{{--                            <td>{{ \Illuminate\Support\Facades\DB::table('users')->find($association['user_id'])->email}}</td>--}}
{{--                        </tr>--}}
{{--                        @endforeach--}}
{{--                        </tbody>--}}
{{--                        <tfoot>--}}
{{--                        <tr><th rowspan="1" colspan="1">Association</th><th rowspan="1" colspan="1">Nom du référent</th><th rowspan="1" colspan="1">Description</th><th rowspan="1" colspan="1">Email</th></tr>--}}
{{--                        </tfoot>--}}
{{--                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>--}}
{{--    </div>--}}


    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                </div>
                <div class="box-body">
                    <table id="laravel_datatable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Association</th>
                            <th>Nom du référent</th>
                            <th>Description</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
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
    <script>
        $(document).ready( function () {
            $('associations').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('user-list') }}",
                columns: [
                    { data: 'Association', name: 'Association' },
                    { data: 'referent_name', name: 'Nom du référent' },
                    { data: 'description', name: 'description' },
                    { data: 'email', name: 'email' }
                ]
            });
        });
    </script>
@stop
