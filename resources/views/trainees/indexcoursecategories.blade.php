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
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td class="text-center">{{ $category->name }}</td>
                    <td class="text-center">{{ $category->description }}</td>
                    <td class="text-center">
                        <a href="{{ route('MNGCourseCategories.course-categories.edit', $category->categoryId) }}"
                            class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('MNGCourseCategories.course-categories.delete', $category->categoryId) }}" method="post"
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
    <a href="{{ route('MNGCourseCategories.course-categories.create') }}" class="btn btn-primary">Add</a>
</div>

@include('layouts.footer')

@include('layouts.js')
