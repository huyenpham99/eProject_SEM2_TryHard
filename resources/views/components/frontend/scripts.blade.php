<script type="text/javascript" src="{{asset("frontend/js/jquery.min.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/js/jquery-migrate.min.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/js/bootstrap.min.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/js/modernizr-2.7.1.min.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/js/owl.carousel.min.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/js/jquery.countdown.min.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/js/imagesloaded.pkgd.min.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/js/isotope.pkgd.min.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/js/jquery.isotope.init.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/js/script.js")}}"></script>

<script type="text/javascript" src="{{asset("frontend/js/jquery.themepunch.tools.min.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/js/jquery.themepunch.revolution.min.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/js/extensions/revolution.extension.video.min.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/js/extensions/revolution.extension.slideanims.min.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/js/extensions/revolution.extension.actions.min.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/js/extensions/revolution.extension.layeranimation.min.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/js/extensions/revolution.extension.kenburn.min.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/js/extensions/revolution.extension.navigation.min.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/js/extensions/revolution.extension.migration.min.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/js/extensions/revolution.extension.parallax.min.js")}}"></script>

<script type='text/javascript' src='{{asset("frontend/js/jquery.prettyPhoto.js")}}'></script>
<script type='text/javascript' src='{{asset("frontend/js/jquery.prettyPhoto.init.min.js")}}'></script>
<script type='text/javascript' src='{{asset("frontend/js/slick.min.js")}}'></script>

<script>
    var map;
    function initMap() {
        var address = {lat:21.0288772, lng: 105.7795577};
        map = new google.maps.Map(document.getElementById('map'), {
            center: address,
            zoom: 16
        });
        var maker = new google.maps.Marker({position: address, map: map, label: "FPT University"});
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?&callback=initMap" async defer></script>
<script type="text/javascript">
    function addToCart(productId) {
        $.ajax({
            url:"{{url("/cart/add")}}/"+productId,
            method: "POST",
            data: {
                qty:1,
                _token:"{{@csrf_token()}}"
            },
            success: function () {
                alertify.success("Add product to cart successfully");
            }
        });
    }
</script>
