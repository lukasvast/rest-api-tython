<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends FOSRestController
{
    /**
     * @Rest\Get("/api/users")
     */
    public function getUsersAction(Request $request)
    {
        $data = ['getUsersAction' => 'not implemented yet'];
        $view = $this->view($data);
        return $view;
    }

    /**
     * @Rest\Get("/api/users/{userId}")
     */
    public function getUsersByIdAction(Request $request)
    {
        $userId = $request->get('userId');
        $data = ['getUsersByIdAction' => 'not implemented yet', 'userId' => $userId];
        $view = $this->view($data);
        return $view;
    }

    /**
     * @Rest\Post("/api/users")
     */
    public function postUsersAction(Request $request)
    {
        $data = ['postUsersAction' => 'not implemented yet'];
        $view = $this->view($data);
        return $view;
    }

    /**
     * @Rest\Put("/api/users")
     */
    public function putUsersAction(Request $request)
    {
        $data = ['putUsersAction' => 'not implemented yet'];
        $view = $this->view($data);
        return $view;
    }

    /**
     * @Rest\Delete("/api/users")
     */
    public function deleteUsersAction(Request $request)
    {
        $data = ['deleteUsersAction' => 'not implemented yet'];
        $view = $this->view($data);
        return $view;
    }
}
