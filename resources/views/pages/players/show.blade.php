@extends('master.main')

@section('content')
    @component('components.table.tablePlayerDetail',['player' => $player])
    @endcomponent
@endsection
