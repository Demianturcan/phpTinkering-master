<?php

namespace App\Models;

use Core\App;

class Actor
{
    protected static $table = 'actors'; // Taula d'actors

    // Funció per obtenir tots els actors
    public static function getAll()
    {
        $db = App::get('database');
        $statement = $db->getConnection()->prepare('SELECT * FROM ' . self::$table);
        $statement->execute();
        return $statement->fetchAll();
    }

    // Funció per buscar un actor per ID
    public static function find($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . self::$table . ' WHERE id = :id');
        $statement->execute(array('id' => $id));
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    // Funció per crear un nou actor
    public static function create($data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('INSERT INTO '. static::$table . " (name, birthday, nationality) VALUES (:name, :birthday, :nationality)");
        $statement->bindValue(':name', $data['name']);
        $statement->bindValue(':birthday', $data['birthday']);
        $statement->bindValue(':nationality', $data['nationality']);
        $statement->execute();
    }

    // Funció per actualitzar un actor existent
    public static function updateActor($id, $data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare("UPDATE ". static::$table . " SET name = :name, birthday = :birthday, nationality = :nationality WHERE id = :id");
        $statement->bindValue(':id', $id);
        $statement->bindValue(':name', $data['name']);
        $statement->bindValue(':birthday', $data['birthday']);
        $statement->bindValue(':nationality', $data['nationality']);
        $statement->execute();
    }

    // Funció per eliminar un actor
    public static function deleteActor($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM '. static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }
}

