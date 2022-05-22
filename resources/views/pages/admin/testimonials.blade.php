@extends('layouts.admin')

@section('content')
    <?php
    function getImagePath($image)
    {
        // If Image contains http
        if (strpos($image, 'http') !== false) {
            return $image;
        } else {
            return '/public/testimonialimages/' . $image;
        }
    }
    ?>

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Manage Testimonial</h3>

                        <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                            data-target="#addtestimonialModal">Add testimonial</button>


                        {{-- <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Sno.</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Position</th>
                                    <th>Active</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($testimonials as $testimonial)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $testimonial->name }}</td>
                                        <td>
                                            <img src="{{ getImagePath($testimonial->image) }}"
                                                alt="{{ $testimonial->name }}" class="img-fluid"
                                                style="width: 50px;border-radius:50%;">
                                        </td>
                                        <td>{{ $testimonial->position }}</td>
                                        <td>
                                            @if ($testimonial->active)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-secondary">Inactive</span>
                                            @endif

                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#modal-default{{ $loop->iteration }}">Edit</button>
                                            <form action="/admin/changetestimonialstatus" method="POST"
                                                class="d-inline-block">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $testimonial->id }}">

                                                {{-- Change Active Status --}}
                                                @if ($testimonial->active)
                                                    <input type="hidden" name="active" value="0">
                                                    <button type="submit"
                                                        class="btn btn-secondary btn-sm">Deactivate</button>
                                                @else
                                                    <input type="hidden" name="active" value="1">
                                                    <button type="submit" class="btn btn-success btn-sm">Activate</button>
                                                @endif
                                            </form>

                                    </tr>


                                    <div class="modal fade" id="modal-default{{ $loop->iteration }}">
                                        <form method="POST" action="/admin/updatetestimonial" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $testimonial->id }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit testimonial
                                                            "{{ $testimonial->name }}"
                                                        </h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">

                                                        {{-- name(text), position(text), review(textarea), star rating(number), image(file), --}}

                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text" name="name" class="form-control"
                                                                value="{{ $testimonial->name }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="position">Position</label>
                                                            <input type="text" name="position" class="form-control"
                                                                value="{{ $testimonial->position }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="review">Review</label>
                                                            <textarea name="review" id="review" cols="30" rows="3" class="form-control">{{ $testimonial->review }}</textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="rating">Rating</label>
                                                            <input type="number" name="star_rating" class="form-control"
                                                                value="{{ $testimonial->star_rating }}">
                                                        </div>

                                                        <div class="row">

                                                            <div class="col-9">

                                                                <div class="form-group">
                                                                    <label for="image">Image</label>
                                                                    <input type="file" name="image" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-3"
                                                                style="display: flex;justify-content:center;align-items:center">

                                                                <img src="{{ getImagePath($testimonial->image) }}"
                                                                    alt="{{ $testimonial->name }}" class="img-fluid"
                                                                    style="width: 50px;border-radius:50%;">
                                                            </div>

                                                        </div>




                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                        </form>
                                        <!-- /.modal-dialog -->
                                    </div>

                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No data</td>
                                    </tr>
                                @endforelse


                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->



    <div class="modal fade" id="addtestimonialModal">
        <form method="POST" action="/admin/addtestimonial" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add testimonial
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        {{-- name(text), position(text), review(textarea), star rating(number), image(file), --}}

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="position">Position</label>
                            <input type="text" name="position" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="review">Review</label>
                            <textarea name="review" id="review" cols="30" rows="3" class="form-control">Review here...</textarea>
                        </div>

                        <div class="form-group">
                            <label for="rating">Rating</label>
                            <input type="number" name="star_rating" class="form-control">
                        </div>


                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>




                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
        </form>
        <!-- /.modal-dialog -->
    </div>
@endsection
