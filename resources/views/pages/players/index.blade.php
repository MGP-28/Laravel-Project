@extends('master.main')

@section('content')
    @component('components.table.tablePeople',['elements' => $players,'fields' => $fields])
    @endcomponent
@endsection
