<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Services\UserService;

class UserController extends Controller
{
    protected $users;

    public function __construct(UserService $users)
    {
        $this->users = $users;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['users'] = $this->users->query()->latest()->paginate(10);

        return view('users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        $validated = $request->validated();
        $this->users->create($validated);

        return redirect()->route('users.create')->withSuccess('User has been created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['user'] = $this->users->find($id);

        return view('users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, string $id)
    {
        $validated = $request->validated();
        $this->users->update($id, $validated);

        return redirect()->route('users.edit', $id)->withSuccess('User has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->users->delete($id);

        return redirect()->route('users.index')->withSuccess('User has been deleted successfully.');
    }
}
