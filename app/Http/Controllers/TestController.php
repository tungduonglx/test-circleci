<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Illuminate\Support\Facades\Redis;

use App\Repositories\UserRepository;
use App\Models\User;

use App\Http\Requests\RegisterUser;

class TestController extends Controller
{

    protected $repository;

    public function __construct(UserRepository $repository){
        $this->repository = $repository;
    }

    public function index(RegisterUser $request)
    {
        switch($request->get('case')){

            case '1';
                break;

        }



        //dd($request->get('email'));

        //$validated  = $request->validated();
        //$validated = $request->validated();



        //dd('abc');

        //test model
//        $test   = new User();
//        $test->name     = 'hello';
//        $test->save();
//        exit;
        //test model

        //$test = new \App\Models\User();
        //$repo   = new UserRepositoryEloquent();



        //$post = $this->repository->create( ['name' => 'abcdef'] );

        //$post = $this->repository->create( $request->get() );

        dd($this->repository->all('email')->toArray());

       // exit();



        //----------------------------------------

        $key = "example_key";
        $token = array(
            "iss" => "http://example.org",
            "aud" => "http://example.com",
            "iat" => 1356999524,
            "nbf" => 1357000000
        );

        /**
         * IMPORTANT:
         * You must specify supported algorithms for your application. See
         * https://tools.ietf.org/html/draft-ietf-jose-json-web-algorithms-40
         * for a list of spec-compliant algorithms.
         */
        $jwt = JWT::encode($token, $key);

        $decoded = JWT::decode($jwt, $key, array('HS256'));

        dd($decoded);

        /*
         NOTE: This will now be an object instead of an associative array. To get
         an associative array, you will need to cast it as such:
        */

        //$decodedArray = (array) $decoded;

        /**
         * You can add a leeway to account for when there is a clock skew times between
         * the signing and verifying servers. It is recommended that this leeway should
         * not be bigger than a few minutes.
         *
         * Source: http://self-issued.info/docs/draft-ietf-oauth-json-web-token.html#nbfDef
         */
//        JWT::$leeway = 60; // $leeway in seconds
//        $decoded = JWT::decode($jwt, $key, array('HS256'));
//
//
//        dd($decoded->iss);





        /*$input = $request->only('email', 'password');
        $jwt_token = null;

        if (!$jwt_token = JWTAuth::attempt($input)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid Email or Password',
            ], 401);
        }

        return response()->json([
            'success' => true,
            'token' => $jwt_token,
        ]);*/
    }

    public function testRedis(Request $request){

 //       Redis::set('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9leGFtcGxlLm9yZyIsImV4cCI6MTUzNDQxMTA3MSwiY29udGV4dCI6eyJpZCI6NCwiZW1haWwiOiJ0dW5nQHBpenphaHV0LmlvIiwibmFtZSI6IlR1bmczIn19.WhQTXiVM_iZ2Xv-xiG-TVv08f1jBlLKUdChYyWEn_wI', '');
//        Redis::del('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9leGFtcGxlLm9yZyIsImV4cCI6MTUzNDQxMTA3MSwiY29udGV4dCI6eyJpZCI6NCwiZW1haWwiOiJ0dW5nQHBpenphaHV0LmlvIiwibmFtZSI6IlR1bmczIn19.WhQTXiVM_iZ2Xv-xiG-TVv08f1jBlLKUdChYyWEn_wI');
  //      exit;

        //$id         = $request->get('id', '');
        //$user       = Redis::get($id);

    }
}
