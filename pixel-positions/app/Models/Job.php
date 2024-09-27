<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'salary',
        'location',
        'schedule',
        'url',
        'featured',
        'employer_id'
    ];

    public function tag(string $name)
    {
        $tag = Job::query()->firstOrCreate(['name' => $name]);
        return $tag;
    }

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
