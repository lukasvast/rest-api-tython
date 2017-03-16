<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends FOSRestController
{
    /**
     * @Rest\Get("/admin")
     */
    public function adminGetAction(Request $request)
    {
        $data = ['adminGetAction' => 'not implemented yet'];
        $view = $this->view($data);
        return $view;
    }

    /**
     * @Rest\Post("/admin")
     */
    public function adminPostAction(Request $request)
    {
        $data = ['adminPostAction' => 'not implemented yet'];
        $view = $this->view($data);
        return $view;
    }

    /**
     * @Rest\Put("/admin")
     */
    public function adminPutAction(Request $request)
    {
        $data = ['adminPutAction' => 'not implemented yet'];
        $view = $this->view($data);
        return $view;
    }

    /**
     * @Rest\Delete("/admin")
     */
    public function adminDeleteAction(Request $request)
    {
        $data = ['adminDeleteAction' => 'not implemented yet'];
        $view = $this->view($data);
        return $view;
    }
}
