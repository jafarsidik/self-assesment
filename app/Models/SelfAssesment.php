<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Permission\Traits\HasRoles;

class SelfAssesment extends Model
{
    use HasFactory;
    use HasRoles;
    public function patients(): HasMany
    {
        return $this->hasMany(ProfilPerawat::class);
    }
    protected $casts = [
        'record_self_assesment' => 'array',
    ];
}
