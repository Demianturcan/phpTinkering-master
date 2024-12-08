<?php

namespace App\Controllers;

use App\Models\Actor;
use App\Models\Film;

// Canviem aquí per apuntar a Actor

class ActorController
{
    // Funció index per mostrar tots els actors
    public function actors()
    {
        // Obtenim tots els actors
        $actors = Actor::getAll();

        // Pasem els actors a la vista
        return view('actors/actors', ['actors' => $actors]);
    }


    // Funció per a la vista create
    public function createActor()
    {
        return view('actors/createActor');
    }

    // Funció per guardar les dades d'un nou actor
    public function storeActor($data)
    {
        // Cridem la funció create del model Actor
        Actor::create($data);
        // Retornar a la vista principal
        header('Location: /actors');
        exit;
    }

    // Funció per a la vista edit d'un actor
    public function editActor($id)
    {
        // Si no ens passen la ID fem redirect
        if ($id === null) {
            header('Location: /actors');
            exit;
        }

        // Busquem l'actor
        $actor = Actor::find($id);

        // Si no ens passen cap actor, mostrar 404
        if (!$actor) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        // Retornem la vista i li passem l'actor indicat
        return view('actors/editActor', ['actor' => $actor]);
    }

    // Funció update per a modificar l'actor a la base de dades
    public function updateActor($id, $data)
    {
        // Modifiquem l'actor
        Actor::updateActor($id, $data);

        // Retornem a la pàgina principal
        header('Location: /actors');
        exit;
    }

    // Funció per a la vista delete d'un actor
    public function deleteActor($id)
    {
        // Si no ens passen la ID fem redirect
        if ($id === null) {
            header('Location: /actors');
            exit;
        }

        // Busquem l'actor
        $actor = Actor::find($id);
        // Retornem la vista per confirmar l'eliminació
        return view('actors/deleteActor', ['actor' => $actor]);
    }

    // Funció per eliminar l'actor de la base de dades
    public function destroyActor($id)
    {
        // Utilitzem la funció delete del model Actor
        Actor::deleteActor($id);

        // Retornar a la vista
        header('Location: /actors');
        exit;
    }

    // Funció per mostrar un actor en concret
    public function showActor($id)
    {
        // Obtenim l'actor utilitzant el model Actor
        $actor = Actor::find($id);

        if (!$actor) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        // Pasem les dades de l'actor a la vista
        return view('actors/showActor', ['actor' => $actor]);
    }
}