@include('layouts.header')

<div id="layoutSidenav">
    @include('layouts.sidebar')
    <div id="layoutSidenav_content">
        <main>
            @include('layouts.breadcrumb')
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="assets/demo/chart-pie-demo.js"></script>
</body>
</html>
