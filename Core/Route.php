<?php
//Fitxer per gestionar les rutes
namespace Core;

use RuntimeException;

class Route
{
    //creem array en les rutes
    protected $routes = [];

    //creem funcio per afegir rutes a l'array
    public function register($route)
    {
        $this->routes[] = $route;
    }

    //funcio per rebre un array de rutes i assignar a la propietat routes
    public function define($route)
    {
        $this->routes = $route;
        return $this;
    }

    //funcio per redirigir la url solicitada a un controlador
    public function redirect($uri)
    {
        //partim la url
        $parts = explode('/', trim($uri, '/'));

        // Controlador per a films
        $filmController = 'App\Controllers\FilmController';
        // Controlador per a actors
        $actorController = 'App\Controllers\ActorController';

        // Inici
        if ($uri === '/') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $filmController();
            return $controllerInstance->index();
        }

        // --- Routes for Films ---
        // create
        if ($parts[0] === 'create') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $filmController();
            return $controllerInstance->create();
        }

        // store
        if ($parts[0] === 'store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $filmController();
            $data = $_POST;
            return $controllerInstance->store($data);
        }

        // delete
        if ($parts[0] === 'delete' && !empty($parts[1])) {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $filmController();
            return $controllerInstance->delete($parts[1]);
        }

        // destroy
        if ($parts[0] === 'destroy' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $filmController();
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->destroy($_POST['id']);
        }

        // edit
        if ($parts[0] === 'edit' && !empty($parts[1])) {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $filmController();
            return $controllerInstance->edit($parts[1]);
        }

        // update
        if ($parts[0] === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $filmController();
            $data = $_POST;
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->update($_POST['id'], $data);
        }

        // show
        if ($parts[0] === 'show' && !empty($parts[1])) {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $filmController();
            return $controllerInstance->show($parts[1]);
        }

        // Films listing
        if ($parts[0] === 'films') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $filmController();
            return $controllerInstance->films();
        }

        // --- Routes per Actors ---
        // index
        if ($parts[0] === 'actors') {
            require '../App/Controllers/ActorController.php';
            $controllerInstance = new $actorController();
            return $controllerInstance->actors();
        }

        // create
        if ($parts[0] === 'createActor') {
            require '../App/Controllers/ActorController.php';
            $controllerInstance = new $actorController();
            return $controllerInstance->createActor();
        }

        // store
        if ($parts[0] === 'storeActor' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/ActorController.php';
            $controllerInstance = new $actorController();
            $data = $_POST;
            return $controllerInstance->storeActor($data);
        }

        // delete
        if ($parts[0] === 'deleteActor' && !empty($parts[1])) {
            require '../App/Controllers/ActorController.php';
            $controllerInstance = new $actorController();
            return $controllerInstance->deleteActor($parts[1]);
        }

        // destroy
        if ($parts[0] === 'destroyActor' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/ActorController.php';
            $controllerInstance = new $actorController();
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->destroyActor($_POST['id']);
        }

        // edit
        if ($parts[0] === 'editActor' && !empty($parts[1])) {
            require '../App/Controllers/ActorController.php';
            $controllerInstance = new $actorController();
            return $controllerInstance->editActor($parts[1]);
        }

        // update
        if ($parts[0] === 'updateActor' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/ActorController.php';
            $controllerInstance = new $actorController();
            $data = $_POST;
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->updateActor($_POST['id'], $data);
        }

        // show
        if ($parts[0] === 'showActor' && !empty($parts[1])) {
            require '../App/Controllers/ActorController.php';
            $controllerInstance = new $actorController();
            return $controllerInstance->showActor($parts[1]);
        }

        // Si no es cap dels anteriors, retornem la vista 404
        return require '../resources/views/errors/404.blade.php';
    }
}