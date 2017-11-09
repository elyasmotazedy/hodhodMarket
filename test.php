<html>

<head>
    <title>فروشگاه هدهد</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" type="text/css" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">


</head>
<body style="background-color: #9d5e44">
<div style="width: 70%;background-color: #9fcdff">
<section class="regular slider ">
    <div>
        <img class="bg-success" src="http://placehold.it/350x300?text=1">
    </div>
    <div>
        <img src="http://placehold.it/350x300?text=2">
    </div>
    <div>
        <img src="http://placehold.it/350x300?text=3">
    </div>
    <div>
        <img src="http://placehold.it/350x300?text=4">
    </div>
    <div>
        <img src="http://placehold.it/350x300?text=5">
    </div>
    <div>
        <img src="http://placehold.it/350x300?text=6">
    </div>
</section>

<section class="variable slider">
    <div>
        <img src="http://placehold.it/350x300?text=1">
    </div>
    <div>
        <img src="http://placehold.it/200x300?text=2">
    </div>
    <div>
        <img src="http://placehold.it/100x300?text=3">
    </div>
    <div>
        <img src="http://placehold.it/200x300?text=4">
    </div>
    <div>
        <img src="http://placehold.it/350x300?text=5">
    </div>
    <div>
        <img src="http://placehold.it/300x300?text=6">
    </div>
</section>

</div>
<footer style="background-color: #444; color:#fff">
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>


<script type="text/javascript" src="slick/slick.js"></script>

<script>
    $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoPlay:true
    });


    $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
    });
</script>

</body>
</html>
