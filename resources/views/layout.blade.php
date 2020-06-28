<!doctype html>
<html lang="en">
<head>
    <x-head/>
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
<script src={{ url('ckeditor/ckeditor.js') }}></script>
<script>
    CKEDITOR.replace( 'editor1', {
        filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',

    } );
</script>
@include('ckfinder::setup')
</html>

