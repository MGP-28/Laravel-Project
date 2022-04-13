<!-- elements, fields, title -->

<div class="container">
    @component('components.title.title',['text' => $title])
    @endcomponent
    <table class="table">
        @component('components.table.tableHeader',['fields' => $fields])
        @endcomponent
        @foreach($elements as $element)
            <tr>
                @foreach($fields as $field)
                    <td>
                    @if($field == 'cars')
                        @foreach($element->cars as $car)
                            <p>{{$car->name}}</p>
                        @endforeach
                    @else
                        {{$element[$field]}}
                    @endif
                    </td>
                @endforeach
            </tr>
        @endforeach
    </table>
</div>
