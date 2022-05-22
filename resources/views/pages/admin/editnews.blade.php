@extends('layouts.admin')

@section('content')
    <?php
    function getImagePath($image)
    {
        // If Image contains http
        if (strpos($image, 'http') !== false) {
            return $image;
        } else {
            return '/public/newsimages/' . $image;
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
                        <h3 class="card-title">{{ ucfirst($way) }} News</h3>
                    </div>
                    <form method="POST"
                        @if ($way == 'add') action="/admin/addnews" 
                        @else
                            action="/admin/editnews/{{ $news->id }}" @endif
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label>
                                    News Title
                                </label>
                                <input type="text" class="form-control" required name="title"
                                    value="{{ $news->title ?? '' }}" placeholder="Enter Title">
                            </div>

                            <div class="form-group">
                                <label>
                                    News Subtitle
                                </label>
                                <input type="text" class="form-control" required name="subtitle"
                                    value="{{ $news->subtitle ?? '' }}" placeholder="Enter Price">
                            </div>

                            <div class="form-group">
                                <label>
                                    Slug
                                </label>
                                <input type="text" class="form-control" required name="slug"
                                    value="{{ $news->slug ?? '' }}" placeholder="Enter Slug">
                            </div>

                            <div class="form-group">
                                <label>
                                    Active
                                </label>
                                <select class="form-control" name="active">
                                    <option value="1" @if (($news->active ?? 1) == 1) selected @endif>Yes</option>
                                    <option value="0" @if (($news->active ?? 1) == 0) selected @endif>No</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <textarea id="compose-textarea" required name="about" class="form-control" style="height: 300px">
                                    {{ $news->about ?? '' }}
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
                            @if ($news->image ?? null)
                                <div class="row">
                                    <div class="col-md-6 m-auto">
                                        <img src="{{ getImagePath($news->image) }}" alt="{{ $news->title }}"
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
