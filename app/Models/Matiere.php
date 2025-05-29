<?php
public function Notes() {
    return $this->hasMany(Note::class);
}
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    Schema::create('matieres', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->timestamps();
    });
}
