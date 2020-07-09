@extends('layouts.master')

@section('content')

<div class="main">
		<div class="main-content">
			<div class="container-fluid">
<h1>Put Your Question</h1>

<form action="/pertanyaan">
    <button type="submit"class="btn btn-primary">Back to Question List</button>
</form><br>

<form action='/pertanyaan/{{$pertanyaan->id}}/update' method="post">
{{ csrf_field() }}

    <div class="form-group">
		<label for="">Judul</label>
		<input type="text" class="form-control" name="judul" value="{{$pertanyaan->judul}}">
    </div>
    
    <div class="form-group">
		<label for="">Isi</label>
		<input type="text" class="form-control" name="isi" value="{{$pertanyaan->isi}}">
    </div>
    
    <div class="form-group">
		<label for="">Tag</label>
		<input type="text" class="form-control" name="tag" value="{{$pertanyaan->tag}}">
    </div>
    
    <div class="form-group">
				<label for="">ID Penanya</label>
				<input type="text" class="form-control" name="user_id" placeholder="Isi id penanya yang sudah terdaftar" value="{{$pertanyaan->user_id}}">
	</div>

    <div class="form-group">
		<input type="submit" class="btn btn-warning" value="Update">
	</div>


</form>
        </div>
		</div>
	</div>            

@endsection