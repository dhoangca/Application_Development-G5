@include('layouts.header')

@include('Layouts.sidebar')

@include('layouts.navbar')
{{-- start --}}

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <h4 class="card-title" style="margin-right: 10px;">User Management</h4>
                    <div class="search-bar"
                        style="display: flex; align-items: center; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                        <i class="fas fa-search search-icon" style="margin-right: 5px;"></i>
                        <input type="text" class="search-input"
                            style="border: none; outline: none; background: transparent;" placeholder="Search...">
                    </div>
                </div>
                <hr>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>id</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Role</th>
                                <th>Creation date</th>
                                <th>Updated date</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->status }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>{{ $user->updated_at }}</td>
                                        <td>
                                            {{-- <a href="{{ route('users.edit', ['user' => $user->id]) }}"
                                                class="btn btn-primary">Edit</a> --}}
                                            <form action="{{ route('Users.users.toggleStatus', ['user' => $user->id]) }}"
                                                method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit"
                                                    class="btn btn-{{ $user->status === 'active' ? 'danger' : 'success' }}">
                                                    {{ $user->status === 'active' ? 'Block' : 'Unblock' }}
                                                </button>
                                            </form>
                                            <form action="{{ route('Users.users.delete', ['user' => $user->id]) }}"
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
                        <!-- Pagination -->
                        @if ($pagination->hasPages())
                            @include('Layouts.pagination', ['paginator' => $pagination])
                        @endif
                        <div class="create-button">
                            <a href="{{ asset('/Users/users/create') }}" class="btn btn-primary">Create</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end --}}

@include('layouts.footer')

@include('layouts.js')
