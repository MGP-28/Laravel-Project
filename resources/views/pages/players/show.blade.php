@extends('master.main')

@section('content')
    @component('components.table.tablePlayers',['players' => $players, 'title' => 'Players'])
    @endcomponent
@endsection
