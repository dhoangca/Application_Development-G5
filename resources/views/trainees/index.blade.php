@include('layouts.header')

@include('layouts.sidebar')

@include('layouts.navbar')

<div class="content">
    <!-- Your trainee listing table here -->
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Age</th>
                <th class="text-center">Date of Birth</th>
                <th class="text-center">Email</th>
                <th class="text-center">Telephone</th>
                <th class="text-center">Address</th>
                <th class="text-center">Education</th>
                <th class="text-center">TOEIC Score</th>
                <th class="text-center">Majors</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trainees as $trainee)
                <tr>
                    <td class="text-center">{{ $trainee->name }}</td>
                    <td class="text-center">{{ $trainee->age }}</td>
                    <td class="text-center">{{ $trainee->date_of_birth }}</td>
                    <td class="text-center">{{ $trainee->email }}</td>
                    <td class="text-center">{{ $trainee->telephone }}</td>
                    <td class="text-center">{{ $trainee->address }}</td>
                    <td class="text-center">{{ $trainee->education }}</td>
                    <td class="text-center">{{ $trainee->toeic_score }}</td>
                    <td class="text-center">{{ $trainee->majors }}</td>
                    <td class="text-center">
                        <a href="{{ route('managetrainee.trainees.edit', $trainee->traineeId) }}"
                            class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('managetrainee.trainees.delete', $trainee->traineeId) }}" method="post"
                            style="display: inline-block">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('managetrainee.trainees.create') }}" class="btn btn-primary">Add</a>
</div>

@include('layouts.footer')

@include('layouts.js')
