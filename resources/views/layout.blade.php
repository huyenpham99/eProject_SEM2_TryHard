<!doctype html>
<html lang="en">
<head>
   <x-head/>
</head>
<body>
<x-header/>
<x-aside/>

<section id="main-content">
    @yield("content")
    <x-footer/>
</section>



</body>
<x-scripts/>
</html>
