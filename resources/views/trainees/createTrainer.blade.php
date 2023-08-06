@include('layouts.header')

@include('layouts.sidebar')

@include('layouts.navbar')

<div class="content">
    <!-- Your create trainee form here -->
    <form action="{{ route('managetrainer.trainers.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" class="form-control" required>
        </div>
        @if ($errors->has('fname'))
            <p>{{ $errors->first('fname') }}</p>
        @endif
        <div class="form-group">
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname" class="form-control" required>
        </div>
        @if ($errors->has('lname'))
            <p>{{ $errors->first('lname') }}</p>
        @endif
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" class="form-control" required>
        </div>
        @if ($errors->has('age'))
            <p>{{ $errors->first('age') }}</p>
        @endif
        <div class="mb-3">
            <label for="image">Image:</label>
            <div class="input-group">
                <label class="input-group-text" for="imageInput"><input type="file" name="image"
                        id="image"></label>
            </div>
        </div>
        @if ($errors->has('image'))
            <p>{{ $errors->first('image') }}</p>
        @endif
        <div class="form-group">
            <label for="telephone">Telephone:</label>
            <input type="tel" name="telephone" id="telephone" class="form-control" required>
        </div>
        @if ($errors->has('telephone'))
            <p>{{ $errors->first('telephone') }}</p>
        @endif
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        @if ($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
        @endif
        <div class="form-group">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" required>
        </div>
        @if ($errors->has('date_of_birth'))
            <p>{{ $errors->first('date_of_birth') }}</p>
        @endif
        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" name="type" id="type" class="form-control" required>
        </div>
        @if ($errors->has('type'))
            <p>{{ $errors->first('type') }}</p>
        @endif
        <div class="form-group">
            <label for="working_place">Working Place:</label>
            <input type="text" name="working_place" id="working_place" class="form-control" required>
        </div>
        @if ($errors->has('working_place'))
            <p>{{ $errors->first('working_place') }}</p>
        @endif
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" class="form-control" required>
        </div>
        @if ($errors->has('address'))
            <p>{{ $errors->first('address') }}</p>
        @endif
        <div class="form-group">
            <label for="about">About:</label>
            <input type="text" name="about" id="about" class="form-control" required>
        </div>
        @if ($errors->has('about'))
            <p>{{ $errors->first('about') }}</p>
        @endif

        <button type="submit" class="btn btn-primary">Create Trainer</button>
    </form>

</div>

@include('layouts.footer')

@include('layouts.js')
