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
        return $this->userService->EditUser($uuid, $request);
    }

    /**
     * @Route("/api/user/getusers/", name="get_users", methods={"GET"})
     */
    public function FindAll() : JsonResponse{

        return $this->userService->FindAll();
    }

    /**
     * @Route("/api/user/getuser/{uuid}", name="get_user", methods={"GET"})
     */
    public function get($uuid) : JsonResponse{
        return $this->userService->getOneUser($uuid);
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
