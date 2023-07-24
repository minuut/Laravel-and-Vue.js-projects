<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PropertyListing extends Model
{
    use HasFactory;

    protected $table = 'properties';

    protected $fillable =
    [
        'user_id',
        'title',
        'company',
        'location',
        'tags',
        'description',
        'price',
        'email',
        'website',
        'afbeelding',
    ];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $price = (int) request('search');
            $query->where(function ($q) use ($price) {
                $q->where('title', 'like', '%' . request('search') . '%')
                    ->orWhere('location', 'like', '%' . request('search') . '%')
                    ->orWhere('tags', 'like', '%' . request('search') . '%')
                    ->orWhere('company', 'like', '%' . request('search') . '%')
                    ->orWhere('description', 'like', '%' . request('search') . '%')
                    ->orWhereBetween('price', [$price - 50000, $price + 50000]);
            });
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
