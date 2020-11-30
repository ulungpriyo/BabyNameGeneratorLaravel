
    @extends('layout.main')

    @section('content')

	<section style="padding-top: 120px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							All Post <br> <a href="/addname" class="btn btn-success"> Add New Name</a>
						</div>
						<div class="card-body">
							@if(Session::has('post_deleted'))
							<div class="alert alert-success" role="alert">
								{{Session::get('post_deleted')}}
							</div>
							@endif
							<table class="table table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nama</th>
										<th>Asal Nama</th>
										<th>Personality</th>
										<th>Jenis Kelamin</th>
										<th>Arti Nama</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($posts as $post)
									<tr>
										<td>{{$post->id}}</td>
										<td>{{$post->nama}}</td>
										<td>{{$post->asal_nama}}</td>
										<td>{{$post->personality}}</td>
										<td>{{$post->jenis_kelamin}}</td>
										<td>{{$post->arti_nama}}</td>
										<td>
											<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Details</button>
											<a href="/delete-post/{{$post->id}}" class="btn btn-danger">Delete</a>
											<a href="/edit-post/{{$post->id}}" class="btn btn-success">Edit</a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>

		<div class="modal" id="myModal" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">Details Information</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body" align="center">
		        <p>Nama : {{$post->nama}}</p>
		        <p>Arti Nama : {{$post->asal_nama}}</p>
		        <p>Personality : {{$post->personality}}</p>
		        <p>Jenis Kelamin : {{$post->jenis_kelamin}}</p>
		        <p>Arti Nama : {{$post->arti_nama}}</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	@endsection