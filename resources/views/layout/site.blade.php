<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layout.partial.head.meta')
        @include('layout.partial.head.link')
        @include('layout.partial.head.script')
    </head>
    <body>
        <section class="header row">
            @include('layout.partial.header')
        </section>
        <section class="content row" style="margin-bottom: 30px;">
            @yield('content')
        </section>
        <section class="footer row">
            @include('layout.partial.footer')
        </section>
        @include('layout.partial.inline.script')
    </body>
</html>