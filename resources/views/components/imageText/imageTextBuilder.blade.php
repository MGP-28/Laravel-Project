<div class="container py-5">
    @foreach($images as $image)
        @component('components.imageText.imageText', [
            'image' => $image,
            'text' => $texts[$loop->index],
            'isTextLeft' => $isTextLeftArray[$loop->index]
        ])
        @endcomponent
    @endforeach
</div>
