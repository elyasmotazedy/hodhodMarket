

<footer style="background-color: #444; color:#fff">
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<!--<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.js"></script>-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<script src="http://code.gijgo.com/1.6.1/js/gijgo.js" type="text/javascript"></script>

<script src="/hodhodMarket/js/flickity.pkgd.js"></script>
<script>
    $('.carousel').carousel({
        interval: 5000,
        keyboard: true,
        pause:'hover',
        wrap:true
    });

    $('.main-carousel').flickity({
        cellAlign: 'right',
        contain: true,
        pageDots: false,
        arrowShape: {
            x0: 10,
            x1: 45, y1: 20,
            x2: 70, y2: 40,
            x3: 60
        }
        });

    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome'
    });


    $( "#searchBtn" ).click(function() {
            $('#searchProduct').toggleClass( "searchToggle" );

    });


</script>

</body>
</html>