<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 25.04.2018
 * Time: 15:47
 */
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
{{--<script type="text/javascript" src="{{ asset('assets/js/jquery-1.11.0.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('assets/js/jquery-scrolltofixed.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('assets/js/jquery.nav.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('assets/js/jquery.easing.1.3.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('assets/js/jquery.isotope.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('assets/js/wow.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('assets/js/custom.js')}}"></script>--}}


{{--<script type="text/javascript" src="<?php echo e(asset('assets/js/jquery-1.11.0.min.js')); ?>"></script>--}}
{{--<script type="text/javascript" src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>--}}
{{--<script type="text/javascript" src="<?php echo e(asset('assets/js/jquery-scrolltofixed.js')); ?>"></script>--}}
{{--<script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.nav.js')); ?>"></script>--}}
{{--<script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.easing.1.3.js')); ?>"></script>--}}
{{--<script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.isotope.js')); ?>"></script>--}}
{{--<script type="text/javascript" src="<?php echo e(asset('assets/js/wow.js')); ?>"></script>--}}
{{--<script type="text/javascript" src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>--}}



$(document).ready(function(){
$(".btn-slide").click(function(){
$("#panel").slideToggle("slow");
$(this).toggleClass("active");
});
});

$(document).ready(function(){
var myQuote = $('#my_quote');
myQuote.hide();
jQuery('.button').click(function(){
myQuote.show(500);
});
});

{{--<html>--}}
{{--"jQuery"--}}
   {{--jQuery.ajaxSetup({--}}
   {{--url: "2.php", // адрес страинце на сервере--}}
   {{--global: false //--}}
   {{--}); // тип запроса--}}

{{--$("#load1").click(function(){--}}
    {{--$.ajax({ // первый запрос--}}
   {{--type: "POST",--}}
   {{--dataType: "json", // тип данных--}}

   {{--data: "name=John&location=Boston",--}}
   {{--success: function(msg){--}}
        {{--$("#load").replaceWith('<div id="load">' + msg.name + 'Первый запрос jquery</div>');--}}
        {{--$("#load").fadeOut("slow");--}}
    {{--}--}}
{{--});--}}
{{--$.ajax({ // второй запрос--}}
  {{--async: false,--}}
  {{--success: function(){--}}
        {{--$("#load2").replaceWith('<div id="load2">Второй запрос jquery</div>');--}}
        {{--$("#load2").fadeOut("slow");--}}
    {{--}--}}
{{--});--}}
{{--});--}}

{{--</html>--}}