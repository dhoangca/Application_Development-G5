@include('layouts.header')

@include('layouts.sidebar')

@include('layouts.navbar')

<div class="content">
    <!-- Your create trainee form here -->
    <form action="{{ route('managetrainee.trainees.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        @if ($errors->has('name'))
            <p>{{ $errors->first('name') }}</p>
        @endif

        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" class="form-control" required>
        </div>
        @if ($errors->has('age'))
            <p>{{ $errors->first('age') }}</p>
        @endif

        <div class="form-group">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" required>
        </div>
        @if ($errors->has('date_of_birth'))
            <p>{{ $errors->first('adate_of_birthge') }}</p>
        @endif

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        @if ($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
        @endif

        <div class="form-group">
            <label for="telephone">Telephone:</label>
            <input type="tel" name="telephone" id="telephone" class="form-control" required>
        </div>
        @if ($errors->has('telephone'))
            <p>{{ $errors->first('telephone') }}</p>
        @endif

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" class="form-control" required>
        </div>
        @if ($errors->has('address'))
            <p>{{ $errors->first('address') }}</p>
        @endif

        <div class="form-group">
            <label for="education">Education:</label>
            <input type="text" name="education" id="education" class="form-control" required>
        </div>
        @if ($errors->has('education'))
            <p>{{ $errors->first('education') }}</p>
        @endif

        <div class="form-group">
            <label for="toeic_score">TOEIC Score:</label>
            <input type="text" name="toeic_score" id="toeic_score" class="form-control" required>
        </div>
        @if ($errors->has('toeic_score'))
            <p>{{ $errors->first('toeic_score') }}</p>
        @endif

        <div class="form-group">
            <label for="majors">Majors:</label>
            <input type="text" name="majors" id="majors" class="form-control" required>
        </div>
        @if ($errors->has('majors'))
            <p>{{ $errors->first('majors') }}</p>
        @endif

        <button type="submit" class="btn btn-primary">Create Trainee</button>
    </form>
</div>

@include('layouts.footer')

@include('layouts.js')
