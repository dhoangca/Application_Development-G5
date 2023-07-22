@include('Layouts.logheader')

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            {{-- @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif --}}
            <form class="login100-form validate-form" method="POST" action="{{ route('Vip.postRegister') }}">
                @csrf
                <span class="login100-form-title p-b-43">
                    Register an account
                </span>

                <div class="wrap-input100 validate-input" data-validate="ID is required">
                    <input class="input100" type="text" name="id" value="{{ old('id') }}" required>
                    <span class="focus-input100"></span>
                    <span class="label-input100">ID</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <input class="input100" type="text" name="name" value="{{ old('name') }}" required>
                    <span class="focus-input100"></span>
                    <span class="label-input100">Name</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Email is required">
                    <input class="input100" type="text" name="email" value="{{ old('email') }}" required>
                    <span class="focus-input100"></span>
                    <span class="label-input100">Email</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password" required>
                    <span class="focus-input100"></span>
                    <span class="label-input100">Password</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Confirm Password is required">
                    <input class="input100" type="password" name="password_confirmation" required>
                    <span class="focus-input100"></span>
                    <span class="label-input100">Confirm Password</span>
                </div>

                <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" id="role" class="form-control" required>
                        <option value="admin" {{ old('role') === 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="Training Staff" {{ old('role') === 'Training Staff' ? 'selected' : '' }}>Training Staff</option>
                        <option value="Trainer" {{ old('role') === 'Trainer' ? 'selected' : '' }}>Trainer</option>
                    </select>
                </div>
                <!-- Add any additional fields you want to include in the registration form -->

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Register
                    </button>
                </div>
                
                <div class="text-center p-t-46 p-b-20">
                    <span class="txt2">
                        or sign up using
                    </span>
                </div>

                <div class="login100-form-social flex-c-m">
                    <a href="/" class="login100-form-social-item flex-c-m bg1 m-r-5">
                        <i class="fa fa-facebook-f" aria-hidden="true"></i>
                    </a>

                    <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </div>
            </form>

            <div class="login100-more" style="background-image: url('{{ asset('login/images/bg-01.jpg') }}');">
            </div>
        </div>
    </div>
</div>

@include('Layouts.logjs')
