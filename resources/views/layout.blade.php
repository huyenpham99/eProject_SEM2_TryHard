@include('ckfinder::setup')
<!doctype html>
<html lang="en">
<html ... xmlns:fb="http://ogp.me/ns/fb#">
<head>
    <x-head/>
    <meta property="fb:app_id" content="{618524112104934}"/>
    <script src="{{asset("assets/scripts/jquery.js")}}"></script>
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
<script src="{{asset("https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js")}}"></script>
<script type="text/javascript" src="{{asset("./assets/scripts/main.js")}}"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'editor1', {
        filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
    } );
</script>
</html>

