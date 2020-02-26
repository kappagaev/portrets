
@extends('layouts.app')

@section('title', 'Add Writer')

@section('content')
<h1>Add Writer</h1>
    <form action="/writer/store" method="post" enctype="multipart/form-data">
    	@csrf
    	<input name="name" type="text" placeholder="name"><br>
    	<input name="surname" type="text" placeholder="surname"><br>
    	<select id="cars" name="sex">
		  <option value="m">Male</option>
		  <option value="f">Female</option>
		</select>
        <input type="file" name="image">
    	<input type="submit" value="submit">
    </form>
@endsection