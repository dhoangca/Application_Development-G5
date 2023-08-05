@include('layouts.header')

@include('layouts.sidebar')

@include('layouts.navbar')

<div class="content">
    <!-- Your trainee listing table here -->
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">description</th>
                <th class="text-center">courseId</th>
                <th class="text-center">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($topics as $topic)
                <tr>
                    <td class="text-center">{{ $topic->name }}</td>
                    <td class="text-center">{{ $topic->description }}</td>
                    <td class="text-center">{{ $topic->courseId }}</td>
                    <td class="text-center">
                        <a href="{{ route('MngTopic.topics.edit', $topic->topicId) }}"
                            class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('MngTopic.topics.destroy', $topic->topicId) }}" method="post"
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
    <a href="{{ route('MngTopic.topics.create') }}" class="btn btn-primary">Add</a>
</div>

@include('layouts.footer')

@include('layouts.js')
