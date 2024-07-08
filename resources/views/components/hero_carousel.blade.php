<style>
    body {
        font-family: Arial, sans-serif;
    }
    .hero_slider {
        width: 100%;
        margin: auto;

    }
    .hero_slider .slide {
        position: relative;
        text-align: center;
        color: white;
    }
    .hero_slider .slide img {
        width: 100%;
        height: auto;
    }
</style>
</head>
<body>
<div class="hero_slider">
    @foreach($hero_carousels as $slide)
        <div class="slide">
            <img src="{{ asset($slide->image) }}" alt="{{ $slide->title }}">
        </div>
    @endforeach
</div>

<script>
    $(document).ready(function(){
        $('.hero_slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    });
</script>
</body>
</html>
