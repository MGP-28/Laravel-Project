<div class="container">
    <div class="container">
        <div class="row">
            @foreach($images as $image)
                @component('components.cards.card', [
                    'image' => $image,
                    'title' => $titles[$loop->index],
                    'description' => $descriptions[$loop->index]
                ])
                @endcomponent
            @endforeach
        </div>
    </div>
</div>
