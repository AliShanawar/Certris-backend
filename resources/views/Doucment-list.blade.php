@extends("layouts.app")

@section('wrapper')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Doucment</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Doucment-list</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->
            <div class="container">
                <div class="row m-2">
                    <form action="">
                        {{-- <div class="form-group row">
                            <label for="date" class="col-from-label col-sm-2">From</label>
                            <div class="col-sm-3">
                                <input type="date" class="form-control" id="fromdate" name="date" required>
                            </div>  
                        </div>
                        <div class="form-group row">
                          <label for="date" class="col-from-label col-sm-2">To</label>
                          <div class="col-sm-3">
                              <input type="date" class="form-control" id="todate" name="date" required>
                          </div>  
                      </div> --}}
                        <div class="form-group">
                            <input type="search" name="search" id="" class="form-control" placeholder="Search">
                        </div>
                        <button   style="margin-top: 20px;" class="btn btn-primary">Search</button>
                    </form>

                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Client Name</th>
                                        <th>Category</th>
                                        <th>SubCategory</th>
                                        <th>Document</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($documents as $document)
                                        <tr>
                                            <th>{{ $document->id }}</th>
                                            <th>{{ $document->client->name }}</th>
                                            <th>{{ $document->category->name }}</th>
                                            <th>{{ $document->subcategory->sub_categories_name }}</th>
                                            <th><a href="{{ asset('storage/documents/' . $document->name) }}"
                                                    target="_blank" class="btn btn-primary"> View Document </a>
                                            </th>
                                        </tr>
                                    @endforeach



                                </tbody>




                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <!--end row-->
    </div>
    </div>
@endsection

@section('script')
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
@endsection
