{{-- editTstaff.blade.php --}}
@include('layouts.header')

@include('Layouts.sidebar')

@include('layouts.navbar')
{{-- start --}}
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Trainee</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('trainees.update', $trainee->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $trainee->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" name="age" id="age" class="form-control" value="{{ $trainee->age }}" required>
                        </div>
                        <div class="form-group">
                            <label for="date_of_birth">Date of Birth</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="{{ $trainee->date_of_birth }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $trainee->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="telephone">Telephone</label>
                            <input type="text" name="telephone" id="telephone" class="form-control" value="{{ $trainee->telephone }}" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control" value="{{ $trainee->address }}" required>
                        </div>
                        <div class="form-group">
                            <label for="education">Education</label>
                            <input type="text" name="education" id="education" class="form-control" value="{{ $trainee->education }}" required>
                        </div>
                        <div class="form-group">
                            <label for="toeic_score">TOEIC Score</label>
                            <input type="text" name="toeic_score" id="toeic_score" class="form-control" value="{{ $trainee->toeic_score }}" required>
                        </div>
                        <div class="form-group">
                            <label for="majors">Majors</label>
                            <input type="text" name="majors" id="majors" class="form-control" value="{{ $trainee->majors }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end --}}


@include('layouts.footer')

@include('layouts.js')
