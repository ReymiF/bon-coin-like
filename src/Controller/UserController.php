<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Service\UserService;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Uid\Uuid;


class UserController extends AbstractController
{
    private UserService $userService;

    public function __construct(UserService $userService){
        $this->userService = $userService;
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
        return $this->userService->add($request);
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

    /**
     * @Route("/api/user/getuser/{uuid}", name="get_user", methods={"GET"})
     */
    public function get($uuid) : JsonResponse{
        $user = $this->userRepository->findOneBy(['uuid'=>$uuid]);
        $data[] = [
            'firstname' => $user->getFirstname(),
            'lastname' => $user->getLastname(),
            'email' => $user->getEmail(),
            'tel' => $user->getTel(),
            'uuid' => $user->getUuid(),
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("/api/user/delete/{uuid}", name="delete_user", methods={"DELETE"})
     */
    public function deleteUser($uuid) : JsonResponse{
        $user = $this->userRepository->findOneBy(['uuid'=>$uuid]);
        $this->userRepository->DeleteUser($user);

        return new JsonResponse('Succesfully deleted', Response::HTTP_OK);
    }

}
