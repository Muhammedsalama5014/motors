
<!-- footer start-->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright 2022 © Ahmed Karem </p>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<!-- latest jquery-->
<script src="{{asset('assetsadmin/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assetsadmin/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assetsadmin/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('assetsadmin/js/icons/feather-icon/feather-icon.js')}}"></script>
<script src="{{asset('assetsadmin/js/scrollbar/simplebar.js')}}"></script>
<script src="{{asset('assetsadmin/js/scrollbar/custom.js')}}"></script>
<script src="{{asset('assetsadmin/js/config.js')}}"></script>
<script src="{{asset('assetsadmin/js/sidebar-menu.js')}}"></script>
<script src="{{asset('assetsadmin/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assetsadmin/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assetsadmin/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
<script src="{{asset('assetsadmin/js/dropzone/dropzone.js')}}"></script>
<script src="{{asset('assetsadmin/js/dropzone/dropzone-script.js')}}"></script>
<script src="{{asset('assetsadmin/js/typeahead/handlebars.js')}}"></script>
<script src="{{asset('assetsadmin/js/typeahead/typeahead.bundle.js')}}"></script>
<script src="{{asset('assetsadmin/js/typeahead/typeahead.custom.js')}}"></script>
<script src="{{asset('assetsadmin/js/typeahead-search/handlebars.js')}}"></script>
<script src="{{asset('assetsadmin/js/typeahead-search/typeahead-custom.js')}}"></script>

<script src="{{asset('assetsadmin/js/script.js')}}"></script>
<script>
    setInterval(function time(){
        var d = new Date();
        var hours = 24 - d.getHours();
        var min = 60 - d.getMinutes();
        if((min + '').length == 1){
            min = '0' + min;
        }
        var sec = 60 - d.getSeconds();
        if((sec + '').length == 1){
            sec = '0' + sec;
        }
        jQuery('#the-final-countdown p').html(hours+':'+min+':'+sec)
    }, 1000);
</script>
</body>
</html>
