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

        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="telephone">Telephone:</label>
            <input type="tel" name="telephone" id="telephone" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="education">Education:</label>
            <input type="text" name="education" id="education" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="toeic_score">TOEIC Score:</label>
            <input type="text" name="toeic_score" id="toeic_score" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="majors">Majors:</label>
            <input type="text" name="majors" id="majors" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Trainee</button>
    </form>
</div>

@include('layouts.footer')

@include('layouts.js')
