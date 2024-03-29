@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
	<table id="film_desk" class='table table-bordered table-striped'>		
		<thead>
		<tr><th colspan='4'>Список урлов</th></tr>			
		<tr id="main_row"><td>Индекс</td><td>Длинный Url</td><td>Короткий Url</td><td>Удалить Url </td></tr>
		</thead>
		<tbody>
		@foreach ($data as $item)
			<tr><td> {{ $loop->index }} </td><td> {{$item->longurl}} </td><td>https://urlik.herokuapp.com/{{$item->hashname}}</td><td><a href='/delete/{{$item->id}}'>Удалить Url</a></td></tr>
		@endforeach
		</tbody>
	</table>
	<br>
	<br>
	<br>
	<br>
	<div class="links">
		<a href="/makebase">Make Base</a>
	</div> 
</div>
@endsection

