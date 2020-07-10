@extends('layouts.master')

@section('content')

<div class="main">
		<div class="main-content">
			<div class="container-fluid">
<h1>Put Your Answer</h1><br>

<h3>Pertanyaan</h3>

<p>{{$pertanyaan->isi}}</p>

<form action="/pertanyaan">
    <button type="submit"class="btn btn-primary">Back to Question List</button>
</form><br>

<form action='/jawaban/{$pertanyaan_id}' method="post">
{{ csrf_field() }}
<div class="form-group">
<h1>Tulis Jawaban</h1>

    <div class="form-group">
		<label for="">ID Penjawab</label>
		<input type="text" class="form-control" name="user_id" placeholder="Isi id penjawab yang sudah terdaftar">
	</div>

    <div class="form-group">
		<label for="">ID Pertanyaan</label>
		<input type="text" class="form-control" name="pertanyaan_id" value="{{$pertanyaan->id}}">
	</div>

    <div class="form-group">
		<label for="">Isi</label>
		<textarea id="konten" class="form-control" name="isi" rows="10" cols="50"></textarea>
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
                <th scope="col">Jawaban</th>
            </tr>
        </thead>

        <tbody>
        @foreach($jawaban as $jawaban)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$jawaban->isi}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
            </div>
		</div>
	</div>
</div>
@endsection

@push('scripts')

<script src="{{asset('/ckeditor/ckeditor.js')}}"></script>

<script>
  var konten = document.getElementById("konten");
    CKEDITOR.replace(konten,{
    language:'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script>

@endpush