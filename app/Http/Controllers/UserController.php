<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterUser;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Services\Helper;

class UserController extends Controller
{
    protected $repository;

    public function __construct(UserRepository $repository){
        $this->repository = $repository;
    }

    public function register(RegisterUser $request)
    {

        try{

            $param  = [
                'email'      => $request->get('email'),
                'name'       => $request->get('name'),
                'password'   => Hash::make($request->get('password')),
            ];

            $this->repository->create($param);

            Log::info(
                __('user.log_register') . ' - ' . __('user.register_success'),
                         ['data' => $param]
            );

            return Helper::jsonOK(__('user.register_success'));

//            return response()->json([
//                'success' => true,
//                'message' => __('user.register_success'),
//            ]);

        }catch(\Exception $e){

            Log::info(
                __('user.log_register') . ' - ' . __('common.err_code'),
                ['data' => $e->getMessage()]
            );

            return Helper::jsonNG(__('common.err_code'));

//            return response()->json([
//                'success' => false,
//                'message' => __('common.err_code'),
//            ]);

        }

    }
}
