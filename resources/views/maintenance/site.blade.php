<!DOCTYPE html>
<html lang="en">
    <head>
        @include('maintenance.partial.head.meta')
        @include('maintenance.partial.head.link')
        @include('maintenance.partial.head.script')
    </head>
    <body>
        <div class="wrap">
            @yield('content')
        </div>
        
        <!-- Background overlay -->
	<div class="body-bg"></div>
        
        <!-- Loading... -->
	<div id="preload">
		<div id="preload-content">
			<div class="preload-spinner">
				<span class="bounce1"></span>
				<span class="bounce2"></span>
				<span class="bounce3"></span>
			</div>
			<div class="preload-text">
                            <img src="{{asset('site/images/loading.png')}}" />
                        </div>
		</div>
	</div>
        @include('maintenance.partial.inline.script')
    </body>
</html>