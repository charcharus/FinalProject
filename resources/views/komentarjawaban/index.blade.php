@extends('layouts.master')

@section('content')

<div class="main">
		<div class="main-content">
			<div class="container-fluid">
<h1>Put Your Comments</h1><br>

<h3>Jawaban</h3>

<p>{{$jawaban->isi}}</p>

<form action="/jawaban/{pertanyaan_id}">
    <button type="submit"class="btn btn-primary">Back to Answer List</button>
</form><br>

<form action='/komentarjawaban/{$jawaban_id}' method="post">
{{ csrf_field() }}
<div class="form-group">
<h1>Tulis Komentar</h1>

    <div class="form-group">
		<label for="">ID Komenter</label>
		<input type="text" class="form-control" name="user_id" value="{{$jawaban->user_id}}" placeholder="Isi id komenter yang sudah terdaftar">
	</div>

    <div class="form-group">
		<label for="">ID Jawaban</label>
		<input type="text" class="form-control" name="jawaban_id" value="{{$jawaban->id}}">
	</div>

    <div class="form-group">
		<label for="">Isi</label>
		<input type="text" class="form-control" name="isi">
    </div>

    <div class="form-group">
				<input type="submit" class="btn btn-primary" value="Save">
			</div>
</div>
</form>
<div class="panel-body">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Komentar</th>
                <th scope="col">Dibuat</th>
                <th scope="col">Update</th>
            </tr>
        </thead>

        <tbody>
        @foreach($komentarjawaban as $komentarjawaban)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$komentarjawaban->isi}}</td>
            <td>{{$komentarjawaban->created_at}}</td>
            <td>{{$komentarjawaban->updated_at}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
            </div>
		</div>
	</div>
</div>
@endsection