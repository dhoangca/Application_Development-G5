@include('layouts.header')

@include('layouts.sidebar')

@include('layouts.navbar')

<div class="content">
    <!-- Your create trainee form here -->
    <form action="{{ route('managetrainee.trainees.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="fname">Fname:</label>
            <input type="text" name="fname" id="fname" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lname">Fname:</label>
            <input type="text" name="lname" id="lname" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="telephone">Telephone:</label>
            <input type="tel" name="telephone" id="telephone" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" name="type" id="type" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="working_place">Working Place:</label>
            <input type="text" name="working_place" id="working_place" class="form-control" required>
        </div>	
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="about">About:</label>
            <input type="text" name="about" id="about" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="text" name="image" id="image" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Trainee</button>
    </form>
</div>

@include('layouts.footer')

@include('layouts.js')
