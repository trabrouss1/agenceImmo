<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Property extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'surface',
        'rooms',
        'bedrooms',
        'floor',
        'price',
        'postal_code',
        'city',
        'address',
        'sold',
    ];

    public function options(): BelongsToMany
    {
        return $this->belongsToMany(Options::class);
    }


    public function getSlug(): string
    {
        return Str::slug($this->title);
    }

    public function getFormatedPrice(?float $currencyValue, ?string $currency = "F CFA", int $decimals = 2): string
    {
        return number_format($currencyValue ?? 0, $decimals, ",", " ") . " $currency";
    }
}