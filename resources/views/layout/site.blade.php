<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layout.partial.head.meta')
        @include('layout.partial.head.link')
        @include('layout.partial.head.script')
    </head>
    <body>
        <div id="site" class="container">
            <div class="row" id="site-header">
                @include('layout.partial.header')
            </div>
            <div class="row" id="site-content">
                @yield('content')
            </div>
            <div class="row" id="site-footer">
                @include('layout.partial.footer')
            </div>
            <div class="row footer-border-bottom"></div>
        </div>
        @include('layout.partial.inline.script')
    </body>
</html>