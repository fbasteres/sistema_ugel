<body>
    @include ('layouts.components.sidebar')
    <main>
    @include('layouts.components.navbar')
    <div>
    @yield('content')
    </div>
    </main>
    
</body>