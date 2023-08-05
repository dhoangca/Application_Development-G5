@include('layouts.header')

@include('layouts.sidebar')

@include('layouts.navbar')

<div class="content">
    <!-- Your edit trainee form here -->
    <form action="{{ route('MNGCourseCategories.course-categories.update', $category->categoryId) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" class="form-control" value="{{ $category->description }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Trainee</button>
    </form>
</div>

@include('layouts.footer')

@include('layouts.js')
