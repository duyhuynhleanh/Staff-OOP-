<?php

namespace Staff;


abstract class Employee {
	protected string $id;
	protected string $firstName;
	protected string $lastName;
	protected string $email;
	protected string $gender;
	protected int $age;
	protected float $salary;

	public function __construct(string $id, string $firstName,
        string $lastName, string $email, string $gender, int $age, float $salary) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->gender = $gender;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getInfo()
    {
        return [
            "id" => $this->id,
            "firstName" => $this->firstName,
            "lastName" => $this->lastName,
            "email" => $this->email,
            "gender" => $this->gender,
            "age" => $this->age,
            "salary" => $this->salary,
        ];
    }


    public abstract function statusCheck();
}

