@include('layouts.header')

@include('layouts.sidebar')

@include('layouts.navbar')

<div class="content">
    <!-- Your trainee listing table here -->
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Name</th>
                <th class="text-center">Description</th>
                <th class="text-center">Category ID</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td class="text-center">{{ $course->name }}</td>
                    <td class="text-center">{{ $course->description }}</td>
                    <td class="text-center">{{ $course->categoryId }}</td>
                    <td class="text-center">
                        <a href="{{ route('manageCourse.courses.edit', $course->courseId) }}"
                            class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('manageCourse.courses.delete', $course->courseId) }}" method="post"
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
    <a href="{{ route('manageCourse.courses.create') }}" class="btn btn-primary">Add</a>
</div>

@include('layouts.footer')

@include('layouts.js')
