
@include('layout.header')

@include('layout.navbar')
@include('layout.sidebar')      
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>{{ $title }}</h1>
        </div>

        <div class="section-body">
            @yield('content')
    </section>
</div>
@include('layout.footer')