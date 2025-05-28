
@include('head')

<body>
    @includeUnless(isset($hideHeaderFooter) && $hideHeaderFooter, 'header')
    <div class="{{ !isset($main_pannel)? 'main-content':'' }}">
        @yield('content-section')
    </div>
    @includeUnless(isset($hideHeaderFooter) && $hideHeaderFooter, 'footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>
</html>
