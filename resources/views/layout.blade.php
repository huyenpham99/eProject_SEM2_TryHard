<!doctype html>
<html lang="en">
<html ... xmlns:fb="http://ogp.me/ns/fb#">
<head>
    <x-head/>
    <meta property="fb:app_id" content="{618524112104934}"/>
</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    <x-header/>
    <x-theme-ui-setting/>
    <div class="app-main">

        <x-aside/>
        <div class="app-main__outer">
            <div class="app-main__inner">
                <x-title/>
                @yield("content")
            </div>
        </div>
    </div>
    <x-footer/>
</div>
</body>
<script type="text/javascript" src="{{asset("./assets/scripts/main.js")}}"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'editor1', {
    filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
    filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
    filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
    filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
    filebrowserImageUploadUrl:'{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
    filebrowserFlashUploadUrl:'{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );
</script>
</html>

