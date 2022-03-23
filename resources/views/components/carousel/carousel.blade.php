<div id="carouselExampleCaptions" class="carousel slide p-5" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($images as $image)
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="@if($loop->first) active @endif "></li>
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach($images as $image)
            @component('components.carousel.carouselblock', [
                'image' => $image ,
                'isActive' => ($loop->first)
                ])
            @endcomponent
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div>
