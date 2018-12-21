<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{url('images/slider_images/slider_img.jpg')}}" alt="First slide">
            <div class="carousel-caption d-none d-md-inline-block">
                <div style="float: right">
                    <h1 style="color: #000000">
                        <strong >BEST LIQUIDITY PROVIDERS <br>
                            LOWEST SPREAODS<br>
                            START FOR ZERO PIPS
                        </strong>
                    </h1>
                    <a  type="button" href="" class="btn btn-lg  btn-outline-danger" role="button">Create a Live Account </a>
                </div>

            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{url('images/slider_images/slider_img2.jpg')}}" alt="Second slide">
        </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<script>
    $('.carousel').carousel({
        interval: 1000
    })
</script>