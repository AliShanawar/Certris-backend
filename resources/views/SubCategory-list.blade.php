@extends("layouts.app")

@section("style")
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section("wrapper")
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">Subcategories</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Subcategory  List</li>
					</ol>
				</nav>
			</div>

		</div>
		<!--end breadcrumb-->
		<div class="container">
			<div class="row">
				<div class="col-xl-9 mx-auto">
					<div class="card">
						<div class="card-body">
							@if (\Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {!! \Session::get('success') !!}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            @if (\Session::has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {!! \Session::get('error') !!}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
							<form action="{{ url('/') }}/get-subcategory" method='get'>
								<label for="validationCustom01" class="form-label">Category</label>
								<select name="category_id" class="form-select mb-2" onchange="this.form.submit()" aria-label="Default select example">
                                    <option selected value="null">Select Category</option>
                                    {{-- @foreach($categories as $categories)
                                    @if (request()->get('category_id') == $categorie->id)
                                    <option selected value=" {{ $categorie->id }}">{{ $categorie->name }}</option>
                                    @else
                                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                    @endif
                                    @endforeach --}}
								
								</select>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>


		<h6 class="mb-0 text-uppercase">Category</h6>
		<hr />
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="example2" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>SubCategory</th>
								<th>Category</th>
								<th>Actions</th>


							</tr>
						</thead>
						<tbody>
							@foreach ($subcategories as $subcategory)
							<tr>
								<td>{{ $subcategory->sub_categories_id }}</td>
								<td>{{ $subcategory->sub_categories_name }}</td>
								<td>{{ $subcategory->category->name }}</td>

								<td>
									{{-- <a href="{{"edit/".$subcategory['id']}}" class="btn btn-primary">Edit</a> --}}
									<a href="{{ url('/') }}/delete-subcategory/ {{ $subcategory->sub_categories_id }}" class="btn btn-danger">Delete</a>
								</td>
							</tr>

							@endforeach
						</tbody>




						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!--end page wrapper -->
	@endsection
	{{--
@section("script")
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script>
	$(document).ready(function() {
		$('#example').DataTable();
	  } );
</script>
<script>
	$(document).ready(function() {
		var table = $('#example2').DataTable( {
			lengthChange: false,
			buttons: [ 'copy', 'excel', 'pdf', 'print']
		} );
	 
		table.buttons().container()
			.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
	} );
</script>
@endsection --}}