@include('layouts.header')

@include('layouts.sidebar')

@include('layouts.navbar')

<div class="content">
    <!-- Your edit trainee form here -->
    <form action="{{ route('manageCourse.courses.update', $trainee->traineeId) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $course->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" class="form-control" value="{{ $course->description }}" required>
        </div>

        <div class="form-group">
            <label for="categoryId">Category ID</label>
            <input type="number" name="categoryId" id="categoryId" class="form-control" value="{{ $course->category_id }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Course</button>
    </form>
</div>

@include('layouts.footer')

@include('layouts.js')
