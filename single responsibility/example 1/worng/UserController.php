<?php

class UserController
{
    public function store(Request $request)
    {
        //validation
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        //user creation
        $user = User::create($validatedData);

        //some other logic
        $userNum = User::max('num') + 1;
        $user->num = $userNum;
        $user->save();

        return redirect('/users')->with('success', "User:{$user->name} created successfully!");
    }
}
