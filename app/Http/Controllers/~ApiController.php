<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessPodcast;
use Illuminate\Http\Request;
use App\User;
use App\Menu;
use Firebase\JWT\JWT;
use Firebase\JWT\SignatureInvalidException;
use Firebase\JWT\ExpiredException;
use Illuminate\Support\Facades\Redis;

/**
 * Class ApiController
 * @package App\Http\Controllers
 */
class ApiController extends Controller
{
    public function login(Request $request)
    {
        $input = $request->only('email', 'password');

        //dd($input);

        $jwt_token = null;

        if (!$jwt_token = $this->_attempt($input)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid Email or Password',
            ], 401);
        }

        return response()->json([
            'success' => true,
            'token' => $jwt_token,
        ]);

    }

    public function logout(Request $request)
    {
        $token  = $request->header('token', '');

        //------- Delete token from Redis server
        $this->_deleteToken($token);

        return response()->json([
            'success' => true,
            'message' => 'You\'re logged out',
        ]);
    }

    public function getMenu(Request $request)
    {
        $token  = $request->header('token', '');
        $key    = config('app.jwt-key');

        $data = [];

        try{
            $decoded = JWT::decode($token, $key, array('HS256'));
            $decoded_array = (array) $decoded;

            //Get menu data
            $data = $this->_getMenuFromUser($decoded_array['context']->id);

        }catch(SignatureInvalidException $e){
            // Invalid token
            return response()->json([
                'success' => false,
                'data' => $e->getMessage(),
            ]);
        }catch(ExpiredException $e){
            // Expired token
            return response()->json([
                'success' => false,
                'data' => $e->getMessage(),
            ]);
        }

        return response()->json([
            'success' => true,
            'data' => $data,
        ]);

    }

    public function readToken(Request $request)
    {
        $token  = $request->header('token', '');
        $key    = config('app.jwt-key');

        $data = [];

        try{
            $decoded = JWT::decode($token, $key, array('HS256'));
            $decoded_array = (array) $decoded;

            //Get menu data
            $data = $decoded_array;

        }catch(SignatureInvalidException $e){
            // Invalid token
            return response()->json([
                'success' => false,
                'data' => $e->getMessage(),
            ], 301);
        }catch(ExpiredException $e){
            // Expired token
            return response()->json([
                'success' => false,
                'data' => $e->getMessage(),
            ]);
        }

        return response()->json([
            'success' => true,
            'data' => $data,
        ]);

    }

    public function addQueue(Request $request)
    {
        // Add to queue
        $token  = $request->header('token', '');
        // Do something....
        dispatch(new ProcessPodcast($token));

        return response()->json([
            'success' => true,
            'data' => 'Queue\'s added',
        ]);
    }

    public function uploadS3(Request $request)
    {
        $image = $request->file('image');
        $imageFileName = time() . '.' . $image->getClientOriginalExtension();

        $s3 = \Storage::disk('s3');
        $filePath = '/uploads/' . $imageFileName;
        $s3->put($filePath, file_get_contents($image), 'public');

        return response()->json([
            'success' => true,
            'data' => 'Image\'s uploaded',
        ]);
    }

    private function _attempt($input){

        $item   = User::where('email', $input['email'])
                        ->where('password', $input['password'])
                        ->first();

        if(!empty($item)){

            // Get expired datetime - Start
            $date = new \DateTime();
            date_add($date, date_interval_create_from_date_string('2 days'));
            $timestamp  = $date->getTimestamp();
            // Get expired datetime - End

            // Generate token value
            $key = config('app.jwt-key');
            $token = array(
                "iss" => "http://example.org",
                "exp" => $timestamp,
                "context"   => [
                    "id"    => $item->id,
                    "email" => $item->email,
                    "name"  => $item->name
                ]
            );

            $jwt = JWT::encode($token, $key);

            //------- Write token to Redis server
            $this->_insertToken($jwt);

            return $jwt;

        }else{
            return false;
        }


    }

    /**
     * @param $token
     * @author tung.duong@pizzahut.io
     *
     */
    private function _insertToken($token){
        // If token isn't existed.
        if(!(is_null(Redis::get($token)))){
            Redis::set($token, '');
        }
    }

    /**
     * @param $token
     * @author tung.duong@pizzahut.io
     */
    private function _deleteToken($token){
        Redis::del($token);
    }

    /**
     * @param $userId
     * @return mixed
     */
    private function _getMenuFromUser($userId){
        $result = Menu::where('user_id', $userId)->get();
        return $result->toArray();
    }
}
