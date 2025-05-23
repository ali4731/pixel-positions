<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    // protected $fillable = [
    //     'name',

    // ];
    protected $fillable = ['name', 'logo', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jobs(){
        return $this->hasMany(Job::class);
    }
}
