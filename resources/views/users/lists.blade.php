@include('layouts.header')

@include('Layouts.sidebar')

@include('layouts.navbar')
{{-- start --}}

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">User Management</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>id</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Creation date</th>
                                <th>Updated date</th>
                                <th class="text-right">Role</th>
                                <th class="text-right">Action</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>{{ $user->updated_at }}</td>
                                        <td class="text-right">{{ $user->role }}</td>
                                        <td class="text-right">
                                            <a href="{{ route('users.edit', ['user' => $user->id]) }}"
                                                class="btn btn-primary">Edit</a>
                                            <form action="{{ route('users.destroy', ['user' => $user->id]) }}"
                                                method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ asset('/users/create') }}" class="btn btn-primary">Create</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end --}}

@include('layouts.footer')

@include('layouts.js')
