@extends('layouts.app')


@section('content')
    <div class="container">
        @foreach ($details as $detail)
            <div class="d-flex">
                <div class="p-2">
                    ID : 
                    {{ $detail['id'] }}

                </div>
                <div class="p-2">
                    INDIRIZZO :
                    {{ $detail['address'] }}
                </div>
                <div class="p-2">
                    CITTA' :
                    {{ $detail['city'] }}
                </div>
            </div>
        @endforeach
    </div>
@endsection
