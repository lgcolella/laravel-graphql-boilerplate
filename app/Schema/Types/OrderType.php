<?php

namespace App\Schema\Types;

use App\Schema\FieldRegistry;
use App\Schema\TypeRegistry;
use GraphQL\Type\Definition\ObjectType;

class OrderType extends ObjectType
{
    public function __construct()
    {
        parent::__construct([
            'description' => 'Order info',
            'fields' => function () {
                return [
                    'orderNumber' => TypeRegistry::id(),
                    'orderDate' => TypeRegistry::string(),
                    'requiredDate' => TypeRegistry::string(),
                    'shippedDate' => TypeRegistry::string(),
                    'status' => TypeRegistry::string(),
                    'comments' => TypeRegistry::string(),
                    'customerNumber' => TypeRegistry::int(),
                    'orderDetails' => FieldRegistry::relation(TypeRegistry::listOf(TypeRegistry::orderDetail())),
                    'customer' => FieldRegistry::relation(TypeRegistry::customer()),
                ];
            },
        ]);
    }
}