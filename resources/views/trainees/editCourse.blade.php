@include('layouts.header')

@include('layouts.sidebar')

@include('layouts.navbar')

<div class="content">
    <!-- Your edit trainee form here -->
    <form action="{{ route('manageCourse.courses.update', $course->courseId) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $course->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" class="form-control" value="{{ $course->description }}" required>
        </div>
        <label for="categoryId">Course_category:</label>
        <select name="categoryId">
            @foreach ($categories as $category)
                <option value="{{ $category->categoryId }}" @if($category->categoryId === $course->categoryId) selected @endif>{{ $category->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Update Course</button>
    </form>
</div>

@include('layouts.footer')

@include('layouts.js')
