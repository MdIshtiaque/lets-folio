@extends('Admin.master')

@section('content')
    <div class="row small-spacing">
        <div class="col-xs-12">
            <div class="box-content">
                <h4 class="box-title">Template List</h4>
                <!-- /.box-title -->
                {{--                <div class="dropdown js__drop_down">--}}
                {{--                    <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>--}}
                {{--                    <ul class="sub-menu">--}}
                {{--                        <li><a href="#">Action</a></li>--}}
                {{--                        <li><a href="#">Another action</a></li>--}}
                {{--                        <li><a href="#">Something else there</a></li>--}}
                {{--                        <li class="split"></li>--}}
                {{--                        <li><a href="#">Separated link</a></li>--}}
                {{--                    </ul>--}}
                {{--                    <!-- /.sub-menu -->--}}
                {{--                </div>--}}
                <!-- /.dropdown js__dropdown -->
                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Preview</th>
                        <th class="text-center">Create</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Preview</th>
                        <th class="text-center">Create</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                        @foreach($templates as $template)
                            <tr>
                                <td>{{ $template->name }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.templateView', ['path' => $template->path]) }}" target="_blank" type="button" class="btn btn-success btn-xs waves-effect waves-light"><i
                                            class="mdi mdi-eye" style="padding-right: 10px"></i>View
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('information.entry', ['template' => $template->id]) }}" type="button" class="btn btn-primary btn-xs waves-effect waves-light"><i
                                            class="mdi mdi-plus-circle-multiple-outline" style="padding-right: 10px"></i>Information
                                        Entry
                                    </a>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-warning btn-xs waves-effect waves-light"><i
                                            class="mdi mdi-comment-alert" style="padding-right: 10px"></i>Report
                                    </button>
                                    <button type="button" class="btn btn-danger btn-xs waves-effect waves-light"><i
                                            class="mdi mdi-delete" style="padding-right: 10px"></i>Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-content -->
        </div>
    </div>
@endsection
