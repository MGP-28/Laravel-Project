<!-- elements, fields, title -->

<div class="container">
    @component('components.title.title',['text' => $title])
    @endcomponent
    <table class="table">
        @component('components.table.tableHeader',['fields' => [ 'ID','Name','Birth date', 'Address', 'Cars', 'Created', 'Updated', '' ]])
        @endcomponent
        @foreach($players as $player)
            <tr>
                <td>{{$player->id}}</td>
                <td>{{$player->name}}</td>
                <td>{{$player->birthdate}}</td>
                <td>
                    <p>{{$player->address->address}}</p>
                    <p>{{$player->address->postalCode}}</p>
                    <p>{{$player->address->country->name}}</p>
                </td>
                <td>
                    @foreach($player->cars as $car)
                        <p>{{$car->name}}</p>
                    @endforeach
                </td>
                <td>{{$player->address->created_at}}</td>
                <td>{{$player->address->created_at}}</td>
                <td><a href="{{asset('players/' .$player->id)}}">-></a></td>
            </tr>
        @endforeach
    </table>
</div>
