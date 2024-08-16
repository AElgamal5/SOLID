<?php

class UserController
{
    public function store(StoreUserRequest $request, UserService $userService)
    {
        $user = $userService->store($request->name, $request->email, $request->password);

        return redirect('/users')->with('success', "User:{$user->name} created successfully!");
    }
}
