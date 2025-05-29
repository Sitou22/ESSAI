<?php
public function Notes() {
    return $this->hasMany(Note::class);
}
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    Schema::create('eleves', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->string('prenom');
        $table->timestamps();
    });
}
