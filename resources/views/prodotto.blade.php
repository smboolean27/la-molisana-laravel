@extends('layouts.main')

@section('pageTitle')
	Prodotto
@endsection

@section('content')
	<div class="product">
		<div class="container">
			<h1>{{$pasta['titolo']}}</h1>
			<img src="{{$pasta['src-h']}}">
			<img src="{{$pasta['src-p']}}" alt="{{$pasta['titolo']}}">
			<p>
				{!!$pasta['descrizione']!!}
			</p>

			<div class="product-chevron left">
				<a href="{{route('prodotto', ['id' => $prevProdottoId])}}">
					<i class="fas fa-chevron-left"></i> 
				</a>
			</div>

			<div class="product-chevron right">
				<a href="{{route('prodotto', ['id' => $nextProdottoId])}}">
					<i class="fas fa-chevron-right"></i> 
				</a>
			</div>

		</div>
	</div>
@endsection