<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    public function vacancy(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
return $this->hasMany(Vacancy::class);
    }
}
