@extends('layouts.master')

@section('content')

<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">

						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Questions</h3>									
                                </div>
                                <form action="/pertanyaan/create">
                                    <button type="submit" class="btn btn-primary">Let's Ask!</button>
                                </form><br>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th scope="col">No</th>
												<th>Judul</th>
												<th>Tag</th>
												
												<th>Dibuat</th>
                                                <th>Update</th>
                                                <th>Action</th>
                                                <th></th>
											</tr>
										</thead>
										<tbody>
											@foreach($pertanyaan as $pertanyaan)
												<tr>
													<th scope="row">{{$loop->iteration}}</th>
													<td>{{$pertanyaan->judul}}</td>
													<td>{{$pertanyaan->tag}}</td>
													
                                                    <td>{{$pertanyaan->created_at}}</td>
                                                    <td>{{$pertanyaan->updated_at}}</td>
													<td><a href="/jawaban/{{$pertanyaan_id = $pertanyaan->id}}" class="btn btn-success btn-xs">Jawab</a></td>
													<td><a href="/komentarpertanyaan/{{$pertanyaan_id = $pertanyaan->id}}" class="btn btn-info btn-xs">Komentar</a></td>
													<td><a href="/pertanyaan/{{$pertanyaan->id}}/edit" class="btn btn-warning btn-xs">Edit</a></td>
													<td><a href="/pertanyaan/{{$pertanyaan->id}}/delete" class="btn btn-danger btn-xs delete" pertanyaan-id="{{$pertanyaan->id}}">Delete</a></td>
												</tr>
												@endforeach
										</tbody>
									</table>
								</div>
							</div>

					</div>
				</div>
			</div>
		</div>
	</div>    

@endsection

@push('scripts')

<script src="{{asset('/sbadmin2/js/swal.min.js')}}"></script>

<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>

@endpush