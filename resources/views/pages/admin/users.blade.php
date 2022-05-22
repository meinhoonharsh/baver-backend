@extends('layouts.admin')


@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-category">All Users List</h5>
                    <h4 class="card-title"> Manage Users</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Role
                                </th>
                                <th>
                                    Action
                                </th>
                                <th>
                                    Save
                                </th>
                            </thead>
                            <tbody>

                                @forelse ($users as $user)
                                    <tr>
                                        <form method="POST" action="/manage/users/updateuserrole">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                            <td>
                                                {{ $user->name }}
                                            </td>
                                            <td>
                                                {{ $user->email }}
                                            </td>
                                            <td>
                                                <select name="role" required style="padding:10px">
                                                    <option disabled selected>Select Role</option>

                                                </select>
                                            <td>
                                                {{-- Active Inactive State button --}}
                                                <a type="button" href="/manage/users/updateuserstatus/{{ $user->id }}"
                                                    class="btn  btn-sm 
                                                    {{ $user->active ? 'btn-success' : 'btn-secondary' }}
                                                
                                                ">
                                                    {{ $user->active ? 'Active' : 'InActive' }}
                                                </a>

                                                <a href="" class="btn btn-sm btn-danger">
                                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-sm btn-primary">
                                                    <i class="now-ui-icons ui-1_check"></i>
                                                </button>
                                            </td>
                                        </form>
                                    </tr>
                                @empty
                                    "No users found"
                                @endforelse



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
