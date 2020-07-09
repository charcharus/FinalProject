@extends('layouts.master')

@section('content')

<div class="main">
		<div class="main-content">
			<div class="container-fluid">
<h1>Put Your Question</h1>

<form action="/pertanyaan">
    <button type="submit"class="btn btn-primary">Back to Question List</button>
</form><br>

<form action='/pertanyaan' method="post">
{{ csrf_field() }}

    <div class="form-group">
		<label for="">Judul</label>
		<input type="text" class="form-control" name="judul">
    </div>
    
    <div class="form-group">
		<label for="">Isi</label>
		<input type="text" class="form-control" name="isi">
    </div>
    
    <div class="form-group">
		<label for="">Tag</label>
		<input type="text" class="form-control" name="tag">
    </div>
    
    <div class="form-group">
				<label for="">ID Penanya</label>
				<input type="text" class="form-control" name="user_id" placeholder="Isi id penanya yang sudah terdaftar">
	</div>

    <div class="form-group">
		<input type="submit" class="btn btn-primary" value="Save">
	</div>


</form>
        </div>
		</div>
	</div>

@endsection