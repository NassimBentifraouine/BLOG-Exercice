<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    // Les champs pouvant être remplis en masse
    protected $fillable = [
        'title',
        'content',
        'user_id'
    ];

    // Les champs protégés contre l'assignation en masse
    protected $guarded = [
        'id'
    ];

    // protected $attributes = [
    //     'password' => 'password'
    // ];


    // relation entre l'article et l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Getter et Setter personnalisés

    // accesseur 
    public function getTitleContentAttribute()
    {
        return "{$this->title} {$this->content}";
    }

    // mutateur
    public function setTitleContentAttribute($title, $content)
    {
        $this->title - $title;
        $this->content - $content;
        $this->save();
    }

}
