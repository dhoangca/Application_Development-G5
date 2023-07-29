{{-- indexTstaff.blade.php --}}
@include('layouts.header')

@include('Layouts.sidebar')

@include('layouts.navbar')
{{-- start --}}
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Trainee Management</h4>
                    <a href="{{ route('trainees.create') }}" class="btn btn-primary">Add Trainee</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Date of Birth</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Address</th>
                                    <th>Education</th>
                                    <th>TOEIC Score</th>
                                    <th>Majors</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($trainees as $trainee)
                                <tr>
                                    <td>{{ $trainee->name }}</td>
                                    <td>{{ $trainee->age }}</td>
                                    <td>{{ $trainee->date_of_birth }}</td>
                                    <td>{{ $trainee->email }}</td>
                                    <td>{{ $trainee->telephone }}</td>
                                    <td>{{ $trainee->address }}</td>
                                    <td>{{ $trainee->education }}</td>
                                    <td>{{ $trainee->toeic_score }}</td>
                                    <td>{{ $trainee->majors }}</td>
                                    <td>
                                        <a href="{{ route('users.createTstaff') }}" class="btn btn-primary">Add</a>
                                        <a href="{{ route('users.editTstaff', ['user' => $trainee->id]) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('trainees.destroy', $trainee->id) }}" method="POST" style="display:inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this trainee?')">Delete</button>
                                        </form>
                                    </td>
                                    {{-- <a href="{{ route('users.create') }}" class="btn btn-primary">Add</a> --}}
                                    {{-- <a href="{{ route('users.editTstaff', ['user' => $user->id]) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                    </form> --}}

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end --}}
@include('layouts.footer')

@include('layouts.js')
