@include('layouts.header')

@include('layouts.sidebar')

@include('layouts.navbar')

<div class="content">
    <!-- Your edit trainee form here -->
    <form action="{{ route('MngTopic.topics.update', $topic->topicId) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $topic->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" class="form-control" value="{{ $topic->description }}" required>
        </div>
        <label for="courseId">Course:</label>
        <select name="courseId">
            @foreach ($courses as $course)
                <option value="{{ $course->courseId }}" @if($course->courseId === $topic->courseId) selected @endif>{{ $course->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Update Topic</button>
    </form>
</div>

@include('layouts.footer')

@include('layouts.js')
