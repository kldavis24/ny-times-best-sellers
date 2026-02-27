<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

class UsersController extends Controller
{
    public function index(): JsonResource
    {
        $this->authorize('viewUsers', User::class);

        $users = User::query()
            ->with('roles')
            ->orderBy('id')
            ->get();

        return UserResource::collection($users);
    }

    public function show(User $user): JsonResource
    {
        $this->authorize('viewUsers', User::class);

        $user->load('roles');

        return UserResource::make($user);
    }

    public function store(CreateUserRequest $request): JsonResource
    {
        $validated = $request->validated();

        $userData = $request->safe()->except(['roles']);

        $user = User::create($userData);

        if (isset($validated['roles'])) {
            $user->syncRoles($validated['roles']);
        }

        $user->load('roles');

        return UserResource::make($user);
    }

    public function update(UpdateUserRequest $request, User $user): JsonResource
    {
        $validated = $request->validated();

        $userData = $request->safe()->except(['roles']);

        $user->update($userData);

        if (isset($validated['roles'])) {
            $user->syncRoles($validated['roles']);
        }

        $user->load('roles');

        return UserResource::make($user);
    }

    public function destroy(User $user): Response
    {
        $this->authorize('deleteUser', User::class);

        $user->delete();

        return response()->noContent();
    }
}
