@extends('layout.main')

@section('title', 'Contatos')

@section('content')

<h1>Pagina de contatos</h1>

@if($nome == 'Erley' && $idade == 25)
<h2>O nome do usuário é: {{ $nome }} e sua idade é {{ $idade }}</h2>
@else
<h2>O nome é outro {{ $nome }} e sua idade é {{$idade}}</h2>
@endif

@foreach($filmes as $filme)
<h2>{{$filme}}</h2>
@endforeach

@for($i = 0; $i < count($filmes); $i++)
<h2>{{$filmes[$i]}}</h2>
@endfor

@endsection