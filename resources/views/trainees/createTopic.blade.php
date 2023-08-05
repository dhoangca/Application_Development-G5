@include('layouts.header')

@include('layouts.sidebar')

@include('layouts.navbar')

<div class="content">
    <!-- Your create trainee form here -->
    <form action="{{ route('MngTopic.topics.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" class="form-control" required>
        </div>
        <label for="courseId">Course:</label>
        <select name="courseId">
            @foreach ($courses as $course)
                <option value="{{ $course->courseId }}">{{ $course->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Create Topic</button>
    </form>
</div>

@include('layouts.footer')

@include('layouts.js')
