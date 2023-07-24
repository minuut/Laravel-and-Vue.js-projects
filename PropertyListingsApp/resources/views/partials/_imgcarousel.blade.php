
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="false">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <!-- Images -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-12">
                        <img src="{{ $listing->afbeelding ? asset('storage/' . $listing->afbeelding) : asset('/images/house.jpg') }}" class="img-fluid" alt="house image">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-12">
                        <img src="{{ $listing->afbeelding ? asset('storage/' . $listing->afbeelding) : asset('/images/house.jpg') }}" class="img-fluid" alt="house image">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-12">
                        <img src="{{ $listing->afbeelding ? asset('storage/' . $listing->afbeelding) : asset('/images/house.jpg') }}" class="img-fluid" alt="house image">
                    </div>
                </div>
            </div>
        </div>
        <!-- Prev/Next controls -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<script src="{{ asset('js/app.js') }}"></script>
