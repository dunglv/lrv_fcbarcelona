@include('partials.header')
<header>
   @include('partials.navtop')
   @include('partials.matches')
</header>
<main>
    @yield('content')
</main>
@include('partials.footer')