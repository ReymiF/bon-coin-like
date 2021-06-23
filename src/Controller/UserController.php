<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class UserController extends AbstractController
{

    private $userRepository;
    public function __construc(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }

    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/UserController.php',
        ]);
    }

    /**
     * @Route("/api/user/add", name="add_user", methods={"POST"})
     */
    public function add(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $email = $data['email'];
        $tel = $data['tel'];
        $password = $data['password'];

        if (empty($firstname) || empty($lastname) || empty($email)) {
            throw new NotFoundHttpException('Expecting mandatory parameters!');
        }

        $this->userRepository->SaveUser($firstname, $lastname, $tel, $email, $password );

        return new JsonResponse(['status' => 'User created!'], Response::HTTP_CREATED);
    }

}
