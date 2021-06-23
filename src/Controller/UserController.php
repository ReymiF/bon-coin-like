<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Uid\Uuid;


class UserController extends AbstractController
{

    private UserRepository $userRepository;
    public function __construct(UserRepository $userRepository){
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
        $uuid = Uuid::v4();

        if (empty($firstname) || empty($lastname) || empty($email)) {
            throw new NotFoundHttpException('Expecting mandatory parameters!');
        }

        $this->userRepository->SaveUser($firstname, $lastname, $tel, $email, $password, $uuid );

        return new JsonResponse(['status' => 'User created!'], Response::HTTP_CREATED);
    }

    /**
     * @Route("/api/user/update/{uuid}", name="update_user", methods={"PUT"})
     */
    public function EditUser($uuid, Request $request): JsonResponse
    {
        $user = $this->userRepository->findOneBy(['uuid' => $uuid]);
        $data = json_decode($request->getContent(), true);

        empty($data['firstname']) ? true : $user->setFirstname($data['firstname']);
        empty($data['lastname']) ? true : $user->setLastname($data['lastname']);
        empty($data['email']) ? true : $user->setEmail($data['email']);
        empty($data['tel']) ? true : $user->setTel($data['tel']);
        empty($data['password']) ? true : $user->setPassword($data['password']);


        $updateUser = $this->userRepository->UpdateUser($user);

        return new JsonResponse($updateUser->toArray(), Response::HTTP_OK);
    }

    /**
     * @Route("/api/user/getusers/", name="get_users", methods={"GET"})
     */
    public function FindAll() : JsonResponse{
        $users = $this->userRepository->findAll();
        $data = [];
        foreach ($users as $user)
        {
            $data[] = [
                'firstname' => $user->getFirstname(),
                'lastname' => $user->getLastname(),
                'email' => $user->getEmail(),
                'tel' => $user->getTel(),
                'uuid' => $user->getUuid(),
            ];
        }
            return new JsonResponse($data, Response::HTTP_OK);
    }

}
