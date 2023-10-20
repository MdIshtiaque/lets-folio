<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LET's Folio</title>

    @include('Admin.inc.style')

</head>

<body>
@include('Admin.partials.sidebar')

<!-- /.main-menu -->

@include('Admin.partials.header')

<!-- /.fixed-navbar -->

@include('Admin.partials.notifications')

<!-- /#notification-popup -->

@include('Admin.partials.messages')

<!-- /#message-popup -->

@include('Admin.partials.color-switcher')

<!-- #color-switcher -->

<div id="wrapper">
    <div class="main-content">

        @yield('content')

    </div>
    <!-- /.main-content -->
</div>

@include('Admin.inc.script')

</body>
</html>
