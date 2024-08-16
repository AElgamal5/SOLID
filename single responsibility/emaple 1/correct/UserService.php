<?php

class UserService
{
    public function store(string $name, string $email, string $password): User
    {
        return User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'num' => $this->getUserNumber()
        ]);
    }

    public function getUserNumber(): int
    {
        return User::max('num') + 1;
    }
}
