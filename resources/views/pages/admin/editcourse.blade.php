@extends('layouts.admin')

@section('content')
    <?php
    function getImagePath($image)
    {
        // If Image contains http
        if (strpos($image, 'http') !== false) {
            return $image;
        } else {
            return '/public/courseimages/' . $image;
        }
    }
    ?>
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8 m-auto">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">{{ ucfirst($way) }} Course</h3>
                    </div>
                    <form method="POST"
                        @if ($way == 'add') action="/admin/addcourse" 
                        @else
                            action="/admin/editcourse/{{ $course->id }}" @endif
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label>
                                    Course Title
                                </label>
                                <input type="text" class="form-control" required name="title"
                                    value="{{ $course->title ?? '' }}" placeholder="Enter Title">
                            </div>

                            <div class="form-group">
                                <label>
                                    Course Price
                                </label>
                                <input type="number" class="form-control" required name="price"
                                    value="{{ $course->price ?? '' }}" placeholder="Enter Price">

                            </div>

                            <div class="form-group">
                                <label>
                                    Active
                                </label>
                                <div class="toggle-switch toggle-switch-info">
                                    <label for="active" class="ts-label">
                                        <input id="active" name="active" type="checkbox"
                                            {{ $course->active ?? null ? 'checked' : '' }}>
                                        <span class="ts-helper"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                {{-- Categories --}}
                                <label>
                                    Categories
                                </label>
                                <select class="form-control" data-placeholder="Select a Category" style="width: 100%;"
                                    name="category">
                                    <option value="" disabled>Select a Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == ($course->category ?? '') ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>
                                    Instructor
                                </label>
                                <select class="form-control" required name="instructor_id">
                                    <option value="">Select Instructor</option>
                                    <option value="1" selected>Dummy Instructor</option>
                                    {{-- @foreach ($instructors as $instructor)
                                        <option value="{{ $instructor->id }}"
                                            {{ $course->instructor_id == $instructor->id ? 'selected' : '' }}>
                                            {{ $instructor->name }}
                                        </option>
                                    @endforeach --}}
                                </select>
                            </div>


                            <div class="form-group">
                                <textarea id="compose-textarea" required name="about" class="form-control" style="height: 300px">
                                    {{ $course->about ?? '' }}
                                </textarea>
                            </div>







                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            @if ($course->image ?? null)
                                <div class="row">
                                    <div class="col-md-6 m-auto">
                                        <img src="{{ getImagePath($course->image) }}" alt="{{ $course->title }}"
                                            class="img-thumbnail">
                                    </div>
                                </div>
                            @endif

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->


            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
