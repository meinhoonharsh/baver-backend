@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Manage News</h3>

                        <a href="/admin/addnews" class="btn btn-primary float-right">Add News</a>

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
                                    <th>Title</th>
                                    <th>Last Updated</th>
                                    <th>Active</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($newss as $news)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $news->title }}</td>
                                        <td>{{ $news->updated_at->diffForHumans() }}</td>
                                        <td>
                                            @if ($news->active)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-secondary">Inactive</span>
                                            @endif

                                        </td>
                                        <td>
                                            <a href="/admin/editnews/{{ $news->id }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <form action="/admin/changenewsstatus" method="POST" class="d-inline-block">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $news->id }}">
                                                {{-- Change Active Status --}}
                                                @if ($news->active)
                                                    <input type="hidden" name="active" value="0">
                                                    <button type="submit"
                                                        class="btn btn-secondary btn-sm">Deactivate</button>
                                                @else
                                                    <input type="hidden" name="active" value="1">
                                                    <button type="submit" class="btn btn-success btn-sm">Activate</button>
                                                @endif
                                            </form>

                                    </tr>
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
@endsection
