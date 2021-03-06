<?php

namespace App\Controllers;

use Slim\Views\Twig as View;
use App\Models\User;

class HomeController extends Controller
{

    public function index($request, $response){

        $data = [
            'admin' => $_SESSION['admin']
        ];

        return $this->view->render($response, 'home.twig', $data);
    }
}
