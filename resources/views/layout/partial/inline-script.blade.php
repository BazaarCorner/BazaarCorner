<script type="text/javascript" 
        src="{{asset('assets/jquery/jquery.min.js')}}">
</script>
<script type="text/javascript"
        src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}">
</script>

<!--<script src="js/default.min.js"></script>-->
<script src="{{asset('js/jquery.default.reveal.min.js')}}"></script>
<!--<script src="js/jquery.default.forms.min.js"></script>-->

<script src="{{asset('js/jquery.hoverIntent.min.js')}}"></script>
<script type="text/javascript" charset="utf-8">
    //<![CDATA[
    $(document).ready(function() {

      function addMega(){
        $(this).addClass("hovering");
        }

      function removeMega(){
        $(this).removeClass("hovering");
        }

    var megaConfig = {
         interval: 100,
         sensitivity: 4,
         over: addMega,
         timeout: 100,
         out: removeMega
    };
    $("li.mega").hoverIntent(megaConfig)
    });
    //]]>
</script>

<!--VIDEO MODAL SCRIPT START-->
<script type="text/javascript">
    $(document).ready(function() {
      $("#buttonForModal").click(function() {
        $("#myModal").reveal();
      });
    });
</script>
<!--VIDEO MODAL SCRIPT END-->

@section('inline-script') @show

<!--<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>-->