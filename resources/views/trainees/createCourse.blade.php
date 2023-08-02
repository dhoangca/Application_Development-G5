@include('layouts.header')

@include('layouts.sidebar')

@include('layouts.navbar')

<div class="content">
    <!-- Your create trainee form here -->
    <form action="{{ route('manageCourse.courses.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="categoryId">Category ID</label>
            <input type="number" name="categoryId" id="categoryId" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Course</button>
    </form>
</div>

@include('layouts.footer')

@include('layouts.js')
