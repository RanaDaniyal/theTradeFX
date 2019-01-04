<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{url('images/slider_images/slider_img.jpg')}}" alt="First slide">
            <div class="carousel-caption">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                            <h1 style="color: #000000">
                                <strong >BEST LIQUIDITY PROVIDERS
                                </strong>
                            </h1>
                            <h1 style="color: #000000">
                                <strong> LOWEST SPREADS</strong>
                            </h1> <h1 style="color: #000000">
                                <strong>  START FROM ZERO PIPS</strong>
                            </h1>
                            <a href="" class="btn btn-lg  btn-outline-danger" role="button">Create a Live Account </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{url('images/slider_images/slider_img1.jpg')}}" alt="Second slide">
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