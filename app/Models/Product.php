<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'products';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'productCode';

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that should be casted to native types.
     * 
     * @var array
     */
    protected $casts = [
        'productName' => 'string',
        'productLine' => 'string',
        'productScale' => 'string',
        'productVendor' => 'string',
        'productDescription' => 'string',
        'quantityInStock' => 'integer',
        'buyPrice' => 'float',
        'MSRP' => 'float',
    ];

    /**
     * Get the order detail record associated with the product.
     * 
     * @return HasOne
     */
    public function orderDetail(): HasOne
    {
        return $this->hasOne(OrderDetail::class, 'productCode', 'productCode');
    }

    /**
     * Get the productLine record associated with the product.
     * 
     * @return HasOne
     */
    public function line(): HasOne
    {
        return $this->hasOne(ProductLine::class, 'productLine', 'productLine');
    }
}
