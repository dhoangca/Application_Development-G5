@include('layouts.header')

@include('layouts.sidebar')

@include('layouts.navbar')

<div class="content">
    <div class="card-header">
        <h5 class="card-title">Create Topic</h5>
        <p class="card-category" style="padding: 10px">Create a new topic.</p>
    </div>
    <hr>
    <!-- Your create trainee form here -->
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('MngTopic.topics.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name"
                                    value="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" placeholder="Description" name="description"
                                    value="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Course</label>
                                <select class="form-control" name="courseId">
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->courseId }}">{{ $course->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')

@include('layouts.js')
