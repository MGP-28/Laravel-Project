@extends('master.main')

@section('content')
    @component('components.carousel.carousel',['images' => $imagesCarousel])
    @endcomponent
    @component('components.cards.cardBuilder',[
        'images' => $imagesCard,
        'titles' => $titles,
        'descriptions' => $descriptions
    ])
    @endcomponent
    @component('components.imageText.imageTextBuilder',[
        'images' => $imagesText,
        'texts' => $texts,
        'isTextLeftArray' => $isTextLeftArray
    ])
    @endcomponent
@endsection
