@extends('layout.master')

@section('content')

<div>
    <h2>Data Peminjam</h2>
    @if(!empty($Peminjam))
        <ul>
            @foreach ($Peminjam as $data)
            <li>{{ $data }}</li>
            @endforeach
        </ul>
    @else
    <p>Data Peminjam Kosong</p>
    @endif    
</div>

@endsection