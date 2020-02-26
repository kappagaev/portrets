
@extends('layouts.app')

@section('title', 'Add Portret')

@section('content')
<h1>Add Portret</h1>
    <form action="/portret/store" method="post" enctype="multipart/form-data">
    	@csrf
    	<input name="image" type="file" placeholder="image"><br>
    	<select id="cars" name="writer_id">
            @foreach ($writers as $writer)
                <option value="{{$writer->id}}">{{$writer->name}} {{$writer->surname}}</option>
            @endforeach
		</select>
    	<input type="submit" value="submit">
    </form>
@endsection