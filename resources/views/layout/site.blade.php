<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layout.partial.head.meta')
        @include('layout.partial.head.link')
        @include('layout.partial.head.script')
    </head>
    <body style="padding-top: 20px; width: 100%; height: 100%;">
        <div id="site" class="container">
            <div class="row" id="site-header"  style="padding-bottom: 10px;">
                @include('layout.partial.header')
            </div>
            <div class="row" id="site-content" style="border: 1px solid yellow; padding-bottom: 10px;">
                @yield('content')
            </div>
            <div class="divider"><hr></div>
            <div class="row" id="site-footer" style="padding-bottom: 10px;">
                @include('layout.partial.footer')
            </div>
            </section>
        </div>
        @include('layout.partial.inline.script')
    </body>
</html>