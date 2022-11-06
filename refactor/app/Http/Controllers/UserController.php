<?php

use App\Interfaces\ThrottlesRepositoryInterface ;

class UserController extends Controller
{

    function __construct(private ThrottlesRepositoryInterface $throttlesRepository)
    {

    }

    public function userLoginFailed()
    {
        $throttles = $this->throttlesRepository->where('ignore', 0)->with('user')->paginate(15);

        return ['throttles' => $throttles];
    }

}