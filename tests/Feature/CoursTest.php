<?php

use App\Models\Cour;

it('creates a new course', function () {
    $cours = Cour::factory()->create();

    $this->assertDatabaseHas('cours', [
        'titre' => $cours->titre,
        'sub_title' => $cours->sub_title,
        'uuid' => $cours->uuid,
        'slug' => $cours->slug,
        'formateur_id' => $cours->formateur_id,
        'description' => $cours->description,
        'contenu' => $cours->contenu,
        'categorie_id' => $cours->categorie_id,
        'niveau' => $cours->niveau,
        'duree' => $cours->duree,
        'prix' => $cours->prix,
        'image_cours' => $cours->image_cours,
        'video_intro' => $cours->video_intro,
        'date_start' => \Carbon\Carbon::parse($cours->date_start)->format('Y-m-d H:i'),
        'date_end' => \Carbon\Carbon::parse($cours->date_end)->format('Y-m-d H:i'),

    ]);
});
