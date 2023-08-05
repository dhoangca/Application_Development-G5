{{-- create.blade.php --}}
@include('layouts.header')

@include('layouts.sidebar')

@include('layouts.navbar')
{{-- start --}}
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create User</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('Users.users.postCreate') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                        @if ($errors->has('username'))
                            <p>{{ $errors->first('username') }}</p>
                        @endif
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        @if ($errors->has('email'))
                            <p>{{ $errors->first('email') }}</p>
                        @endif
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        @if ($errors->has('password'))
                            <p>{{ $errors->first('password') }}</p>
                        @endif
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select name="role" id="role" class="form-control" required>
                                <option value="admin">Admin</option>
                                <option value="training">Training Staff</option>
                                <option value="trainer">Trainer</option>
                            </select>
                        </div>
                        @if ($errors->has('role'))
                            <p>{{ $errors->first('role') }}</p>
                        @endif
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end --}}
@include('layouts.footer')

@include('layouts.js')
