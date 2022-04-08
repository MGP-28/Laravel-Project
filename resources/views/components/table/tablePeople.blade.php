<div class="container">
    <table class="table">
        @component('components.table.tableHeader',['fields' => $fields])
        @endcomponent
        @foreach($elements as $element)
            <tr>
                @foreach($fields as $field)
                    <th>{{$element[$field]}}</th>
                    @endforeach
            </tr>
        @endforeach
    </table>
</div>
