<?php


namespace App\Service;


use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Uid\Uuid;

class UserService
{
    private UserRepository $userRepository;
    public function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }

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
}