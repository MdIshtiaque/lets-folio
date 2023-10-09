<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webstrot Admin : Creative Admin Dashboard</title>
    <!-- ================= STYLES ================== -->
    @include('Admin.inc.style')
</head>

<body>

<!-- ================= Sidebar ================== -->
@include('Admin.partials.sidebar')

<!-- ================= Header ================== -->
@include('Admin.partials.header')


<div class="content-wrap">
    <div class="main">
        @yield('content')
    </div>
</div>

<div id="search">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>


<!-- ================= SCRIPTS ================== -->
@include('Admin.inc.script')

</body>

</html>
