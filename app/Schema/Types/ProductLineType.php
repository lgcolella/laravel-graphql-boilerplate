<?php

namespace App\Schema\Types;

use App\Schema\TypeRegistry;
use GraphQL\Type\Definition\ObjectType;

class ProductLineType extends ObjectType
{
    public function __construct()
    {
        parent::__construct([
            'description' => 'Product line info',
            'fields' => [
                'productLine' => TypeRegistry::id(),
                'textDescription' => TypeRegistry::string(),
                'htmlDescription' => TypeRegistry::string(),
            ]
        ]);
    }
}