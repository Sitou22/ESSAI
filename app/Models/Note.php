<?php
public function Eleve() {
    return $this->belongsTo(Eleve::class);
}

public function Matiere() {
    return $this->belongsTo(Matiere::class);
}
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    Schema::create('notes', function (Blueprint $table) {
        $table->id();
        $table->foreignId('eleve_id')->constrained()->onDelete('cascade');
        $table->foreignId('matiere_id')->constrained()->onDelete('cascade');
        $table->float('valeur');
        $table->timestamps();
    });
}
