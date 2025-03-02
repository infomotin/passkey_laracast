<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Passkey extends Model
{
    use HasFactory;

    protected function casts()
    {
        return [
            'data' => 'json',
        ];
    }
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
