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

    public function addTags(array $tags)
    {
        foreach ($tags as $tag) {
            $newTag = Tag::firstOrCreate(['name' => $tag]);

            $this->tags()->attach($newTag);
        }
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
