@extends ('layouts.app')

@section ('content')

    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach

    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @method ('PUT')
        @csrf
        
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">{{ __('User Detail') }}</h5>
            </div>
    
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('Name') }}</label>
    
                    <input type="text"
                        class="form-control @error('name') is-invalid @enderror"
                        name="name"
                        id="name"
                        value="{{ $user->name }}"
                        required>
    
                    @error ('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
    
                    <input type="text"
                        class="form-control @error('email') is-invalid @enderror"
                        name="email"
                        id="email"
                        value="{{ $user->email }}"
                        required>
    
                    @error ('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="card-footer">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a class="btn btn-sm btn-secondary" href="{{ URL::previous() }}">{{ __('Back') }}</a>

                    <button type="submit" class="btn btn-sm btn-primary" id="btn-submit">{{ __('Change & Submit') }}</button>
                </div>
            </div>
        </div>
    </form>
@endsection
