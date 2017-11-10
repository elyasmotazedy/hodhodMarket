

<footer style="background-color: #444; color:#fff">
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


<script type="text/javascript" src="slick/slick.js"></script>

<script>
    $('.carousel').carousel({
        interval: 5000,
        keyboard: true,
        pause:'hover',
        wrap:true
    });
    $(".center").slick({
        infinite: true,
        lazyLoad: 'ondemand',
        slidesToShow: 3,
        slidesToScroll: 1,
        rtl:true,
    });


</script>

</body>
</html>