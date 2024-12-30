<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bill extends Model
{
    /** @use HasFactory<\Database\Factories\BillFactory> */
    use HasFactory;
    protected $fillable = [
        'date',
        'price',
        'usage',
        'status',
        
    ];

    public function customer():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
