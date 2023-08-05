@include('layouts.header')

@include('layouts.sidebar')

@include('layouts.navbar')

<div class="content">
    <!-- Your create trainee form here -->
    <form action="{{ route('manageCourse.courses.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" class="form-control" required>
        </div>
        <label for="categoryId">Course_Categories:</label>
        <select name="categoryId">
            @foreach ($categories as $category)
                <option value="{{ $category->categoryId }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Create Topic</button>
    </form>
</div>

@include('layouts.footer')

@include('layouts.js')
