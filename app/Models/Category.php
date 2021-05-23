<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

/**
 * @method static self find(int $id)
 * @property string $name
 * @property Collection|Item[] $items
 */
class Category extends Model
{
    use HasFactory;

    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }
}
