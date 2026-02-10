<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'price',
        'stock',
        'active',
        'category_id',
    ];

    protected $hidden = [];

    protected $casts = [
        'price' => 'decimal:2',
        'active' => 'boolean',
    ];

    public function formattedPrice(): Attribute
    {
        return Attribute::make(
            get: fn () => number_format($this->price, 2, '.', ',').' €'
        );
    }

    public function name(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => [
                'name' => $value,
                'slug' => Str::slug($value),
            ]
        );
    }

    protected function stockStatus(): Attribute
    {
        return Attribute::make(
            get: function () {
                if ($this->stock > 5) {
                    return 'In Stock';
                } elseif ($this->stock < 1) {
                    return 'Out of Stock';
                }

                return 'Limited Stock';
            }
        );
    }
}
