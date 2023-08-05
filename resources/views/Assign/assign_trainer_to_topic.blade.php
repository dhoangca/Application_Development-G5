@include('Layouts.header')

<!-- sidebar -->
@include('Layouts.sidebar')

<!-- navbar -->
@include('Layouts.navbar')

{{-- start contents --}}
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Assign Trainer to Topic</h5>
                    <p class="card-category"> assign trainer to a topic.</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        @if (session('message'))
                            <p>{{ session('message') }}</p>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-danger">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form method="post" action="{{ route('Assign.assignTrainerToTopic') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Select a Topic:</label>
                                        <select class="form-control" name="topicId" id="topicId">
                                            @foreach ($topics as $topic)
                                                <option value="{{ $topic->topicId }}">{{ $topic->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Select a Trainer:</label>
                                        <select class="form-control" name="trainerId" id="trainerId">
                                            @foreach ($trainers as $trainer)
                                                <option value="{{ $trainer->trainerId }}">
                                                    {{ $trainer->fname }}{{ $trainer->lname }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" class="btn btn-primary btn-round">Assign Trainer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

{{-- end contents --}}

<!-- footer -->
@include('Layouts.footer')

<!-- js -->
@include('Layouts.js')
