@extends('layouts.app')

@section ('content')

    <div class="card">
        <div class="card-header bg-transparent border-bottom border-secondary border-opacity-25">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-title">{{ __('User')}}</h4>
                <a class="btn btn-sm btn-primary" href="{{ route('users.create') }}">
                    <i class="fas fa-plus me-1"></i>{{ __('Add New') }}</a>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Email') }}</th>
                        <th>{{ __('Action') }}</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <div class="d-flex gap-1">
                                    <a class="btn btn-sm btn-success"
                                        href="{{ route('users.edit', $user->id) }}">{{ __('Edit') }}</a>

                                    <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                                        @csrf
                                        @method ('DELETE')
    
                                        <button type="submit"
                                            class="btn btn-sm btn-danger"
                                            id="btn-submit" onclick="return confirm('Are you sure want to delete??')">{{ __('Delete') }}</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">
                                <span class="d-flex justify-content-center">{{ __('No user data found in the table.') }}</span>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="mt-3">
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
