<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Vacancy extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = ['title', 'salary', 'employer_id'];

    public function employer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'tag_vacancy', 'vacancy_id', 'tag_id');
    }

}
