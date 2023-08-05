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
                    <h5 class="card-title">Assign trainee to courses</h5>
                    <p class="card-category"> assign trainee to a courses.</p>
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
                        <form method="post" action="{{ route('AssignC.assignTraineeToCourse') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Select a courses:</label>
                                        <select class="form-control" name="courseId" id="courseId">
                                            @foreach ($Courses as $Course)
                                                <option value="{{ $Course->courseId }}">{{ $Course->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Select a trainee:</label>
                                        <select class="form-control" name="traineeId" id="traineeId">
                                            @foreach ($Trainees as $Trainee)
                                                <option value="{{ $Trainee->traineeId }}">
                                                    {{ $trainer->fname }}{{ $Trainee->lname }}</option>
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
