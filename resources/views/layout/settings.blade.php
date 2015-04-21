<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layout.partial.head.meta')
        @include('layout.partial.head.link')
        @include('layout.partial.head.script')
    </head>
    <body>
        @include('layout.partial.header')
        <div id="site" class="container">
            <div class="row" id="site-content">
                <div class="col-md-2">
                    @include('auth.navigation.sidebar')
                </div>
                <div class="col-md-10">
                    @yield('content')                    
                </div>                
            </div>
            <div class="row" id="site-footer">
                @include('layout.partial.footer')
            </div>
            <div class="row footer-border-bottom"></div>
        </div>
        @include('layout.partial.inline.script')
    </body>
</html>
