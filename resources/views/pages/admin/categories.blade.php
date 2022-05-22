@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Manage Categories</h3>

                        <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                            data-target="#addCategoryModal">Add Category</button>


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
                                    <th>Slug</th>
                                    <th>Active</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($categories as $category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>
                                            @if ($category->active)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-secondary">Inactive</span>
                                            @endif

                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#modal-default{{ $loop->iteration }}">Edit</button>
                                            <form action="/admin/changecategorystatus" method="POST" class="d-inline-block">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $category->id }}">

                                                {{-- Change Active Status --}}
                                                @if ($category->active)
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
                                        <form method="POST" action="/admin/updatecategory">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $category->id }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit Category "{{ $category->name }}"
                                                        </h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text" name="name" class="form-control"
                                                                value="{{ $category->name }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="slug">Slug</label>
                                                            <input type="text" name="slug" class="form-control"
                                                                value="{{ $category->slug }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="active">Active</label>
                                                            <select name="active" class="form-control">
                                                                <option value="1"
                                                                    @if ($category->active) selected @endif>Yes
                                                                </option>
                                                                <option value="0"
                                                                    @if (!$category->active) selected @endif>No
                                                                </option>
                                                            </select>
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



    <div class="modal fade" id="addCategoryModal">
        <form method="POST" action="/admin/addcategory">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Category
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="active">Active</label>
                            <select name="active" class="form-control">
                                <option value="1" selected>Yes
                                </option>
                                <option value="0">No
                                </option>
                            </select>
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
