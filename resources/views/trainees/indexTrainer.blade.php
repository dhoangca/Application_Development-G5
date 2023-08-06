{{-- @include('layouts.header')

@include('layouts.sidebar')

@include('layouts.navbar')

<div class="content">
    <!-- Your trainee listing table here -->
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">First Name</th>
                <th class="text-center">Last Name</th>
                <th class="text-center">Age</th>
                <th class="text-center">Telephone</th>
                <th class="text-center">Email</th>
                <th class="text-center">Date of Birth</th>
                <th class="text-center">Type</th>
                <th class="text-center">Working Place</th>
                <th class="text-center">Address</th>
                <th class="text-center">About</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trainers as $trainer)
                <tr>
                    <td class="text-center">{{ $trainer->fname }}</td>
                    <td class="text-center">{{ $trainer->lname }}</td>
                    <td class="text-center">{{ $trainer->age }}</td>
                    <td class="text-center">{{ $trainer->telephone }}</td>
                    <td class="text-center">{{ $trainer->email }}</td>
                    <td class="text-center">{{ $trainer->date_of_birth }}</td>
                    <td class="text-center">{{ $trainer->type }}</td>
                    <td class="text-center">{{ $trainer->working_place }}</td>
                    <td class="text-center">{{ $trainer->address }}</td>
                    <td class="text-center">{{ $trainer->about }}</td>
                    <td class="text-center">
                        <a href="{{ route('managetrainer.trainers.edit', $trainer->trainerId) }}"
                            class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('managetrainer.trainers.destroy', $trainer->trainerId) }}"
                            method="post" style="display: inline-block">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('managetrainer.trainers.create') }}" class="btn btn-primary">Add Trainer</a>
</div>

@include('layouts.footer')

@include('layouts.js') --}}


{{-- hi --}}

@include('layouts.header')

@include('Layouts.sidebar')

@include('layouts.navbar')
{{-- start --}}

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <h4 class="card-title" style="margin-right: 10px;">Trainers Management</h4>
                    <div class="search-bar"
                        style="display: flex; align-items: center; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                        <i class="fas fa-search search-icon" style="margin-right: 5px;"></i>
                        <input type="text" class="search-input"
                            style="border: none; outline: none; background: transparent;" placeholder="Search...">
                    </div>
                </div>
                <hr>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th class="text-center">First Name</th>
                                <th class="text-center">Last Name</th>
                                <th class="text-center">Age</th>
                                <th class="text-center">Telephone</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Date of Birth</th>
                                <th class="text-center">Type</th>
                                <th class="text-center">Working Place</th>
                                <th class="text-center">Address</th>
                                <th class="text-center">About</th>
                                <th class="text-center">Action</th>
                            </thead>
                            <tbody>
                                @foreach ($trainers as $trainer)
                                    <tr>
                                        <td class="text-center">{{ $trainer->fname }}</td>
                                        <td class="text-center">{{ $trainer->lname }}</td>
                                        <td class="text-center">{{ $trainer->age }}</td>
                                        <td class="text-center">{{ $trainer->telephone }}</td>
                                        <td class="text-center">{{ $trainer->email }}</td>
                                        <td class="text-center">{{ $trainer->date_of_birth }}</td>
                                        <td class="text-center">{{ $trainer->type }}</td>
                                        <td class="text-center">{{ $trainer->working_place }}</td>
                                        <td class="text-center">{{ $trainer->address }}</td>
                                        <td class="text-center">{{ $trainer->about }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('managetrainer.trainers.edit', $trainer->trainerId) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('managetrainer.trainers.destroy', $trainer->trainerId) }}"
                                                method="post" style="display: inline-block">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Pagination -->
                        {{-- @if ($pagination->hasPages())
                            @include('Layouts.pagination', ['paginator' => $pagination])
                        @endif --}}
                        <div class="create-button">
                            <a href="{{ route('managetrainer.trainers.create') }}" class="btn btn-primary">Add Trainer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end --}}

@include('layouts.footer')

@include('layouts.js')
