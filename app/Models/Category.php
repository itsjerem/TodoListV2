<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'color'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    // Méthode pour déterminer la couleur du texte en fonction de la couleur de fond de la catégorie
    public function getTextColor()
    {
        $r = hexdec(substr($this->color, 1, 2));
        $g = hexdec(substr($this->color, 3, 2));
        $b = hexdec(substr($this->color, 5, 2));
        $luma = 0.2126 * $r + 0.7152 * $g + 0.0722 * $b; // per ITU-R BT.709
        return $luma > 128 ? 'text-black' : 'text-white';
    }
}
