@extends('Admin.master')
@push('css')
    <!-- Dropify -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/dropify/css/dropify.min.css') }}">
    <!-- Form Wizard -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/form-wizard/prettify.css') }}">
    <!-- Datepicker -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/datepicker/css/bootstrap-datepicker.min.css') }}">
@endpush
@section('content')

    <div class="box-content card white">
            <div id="rootwizard-progress">
                <div class="tab-header">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <ul>
                                <li><a href="#tab-progress-1" data-toggle="tab">First</a></li>
                                <li><a href="#tab-progress-2" data-toggle="tab">Second</a></li>
                                <li><a href="#tab-progress-3" data-toggle="tab">Third</a></li>
                                <li><a href="#tab-progress-4" data-toggle="tab">Forth</a></li>
                                <li><a href="#tab-progress-5" data-toggle="tab">Fifth</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="bar" class="progress">
                        <div class="progress-bar active progress-bar-success progress-bar-striped bar"></div>
                    </div>
                    <div class="tab-pane" id="tab-progress-1">
                        @include('Admin.pages.template.informations.basic')
                    </div>
                    <div class="tab-pane" id="tab-progress-2">
                        <p>Howdy, I'm in Section 2.</p>
                    </div>
                    <div class="tab-pane" id="tab-progress-3">
                        3
                    </div>
                    <div class="tab-pane" id="tab-progress-4">
                        4
                    </div>
                    <div class="tab-pane" id="tab-progress-5">
                        5
                    </div>
                    <ul class="pager wizard">
                        <li class="previous"><a href="javascript:void(0)">Previous</a></li>
                        <li class="next"><a href="javascript:void(0)" id="next" >Next</a></li>
                    </ul>
                </div>

        </div>
    </div>

@endsection
@push('js')
    <!-- Dropify -->
    <script src="{{ asset('assets/plugin/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/fileUpload.demo.min.js') }}"></script>
    <!-- Form Wizard -->
    <script src="{{ asset('assets/plugin/form-wizard/prettify.js') }}"></script>
    <script src="{{ asset('assets/plugin/form-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/form.wizard.init.min.js') }}"></script>
    <!-- Datepicker -->
    <script src="{{ asset('assets/plugin/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
@endpush
