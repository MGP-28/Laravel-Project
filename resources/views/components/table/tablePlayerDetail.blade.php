<div class="container">
    @component('components.title.title',['text' => 'Player'])
    @endcomponent
    <table class="table">
        <tr><td class="bg-dark text-white">ID</td>              <td>{{$player->id}}</td></tr>
        <tr><td class="bg-dark text-white">Name</td>            <td>{{$player->name}}</td></tr>
        <tr><td class="bg-dark text-white">Date of Birth</td>   <td>{{$player->birthdate}}</td></tr>
        <tr><td class="bg-dark text-white">Address</td>         <td>
                                                                    <p>{{$player->address->address}}</p>
                                                                    <p>{{$player->address->postalCode}}</p>
                                                                    <p>{{$player->address->country->name}}</p>
                                                                </td></tr>


        <tr><td class="bg-dark text-white">Cars</td>              <td>
                                                                    @foreach($player->cars as $car)
                                                                        <p>{{$car->name}}</p>
                                                                    @endforeach
                                                                  </td></tr>
        <tr><td class="bg-dark text-white">Created</td><td>{{$player->address->created_at}}</td></tr>
        <tr><td class="bg-dark text-white">Updated</td><td>{{$player->address->created_at}}</td></tr>
    </table>
</div>
