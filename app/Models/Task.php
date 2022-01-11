<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'completed'];

    public static function storeTask(array $data)
    {
        return self::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'completed' => $data['completed'],
        ]);
    }
}
