<!doctype html>
<html lang="en">
<head>
   <x-frontend.head/>
</head>
<body>
<body class="home-page home-version1-page">
<!-- loader image before page load starts -->
<div class="se-pre-con"></div>
<!-- loader image before page load ends -->
<!-- main wrapper of the site starts -->
<div class="wrapper">

    <x-frontend.header/>

    @yield("content")

    <x-frontend.footer/>
</div>
<!-- main wrapper of the site ends -->

</body>
</body>
    <x-frontend.script/>
</html>
