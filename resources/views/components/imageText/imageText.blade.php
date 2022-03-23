<div class="container">
    <div class="row pb-5">
            @if($isTextLeft)
                <div class="col-6 d-flex align-items-center">
                    <p>{{$text}}</p>
                </div>
                <div class="col-6">
                    <img class="w-100" src="{{$image}}" alt="">
                </div>
            @else
                <div class="col-6">
                    <img class="w-100" src="{{$image}}" alt="">
                </div>
                <div class="col-6  d-flex align-items-center">
                    <p>{{$text}}</p>
                </div>
            @endif
    </div>
</div>
