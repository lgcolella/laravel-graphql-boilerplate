<?php

namespace App\Schema\Types;

use App\Schema\TypeRegistry;
use GraphQL\Type\Definition\ObjectType;

class EmployeeType extends ObjectType
{
    public function __construct()
    {
        parent::__construct([
            'name' => 'employee',
            'description' => 'Employee info',
            'fields' => [
                'employeeNumber' => TypeRegistry::id(),
                'lastName' => TypeRegistry::string(),
                'firstName' => TypeRegistry::string(),
                'extension' => TypeRegistry::string(),
                'email' => TypeRegistry::string(),
                'officeCode' => TypeRegistry::string(),
                'reportsTo' => TypeRegistry::int(),
                'jobTitle' => TypeRegistry::string(),
            ]
        ]);
    }
}