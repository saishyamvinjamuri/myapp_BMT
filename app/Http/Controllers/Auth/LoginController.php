<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login. testing
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /*** connect to database ***/
    /*** mysql hostname ***/
    protected  $mysql_hostname = 'localhost';

    /*** mysql username ***/
    protected $mysql_username = 'root';

    /*** mysql password ***/
    protected $mysql_password = 'rootroot';

    /*** database name ***/
    protected $mysql_dbname = 'mysql';

    protected $user_name;
    protected $password;
    protected $conn;

    function _construct(){
        $this->user_name = $_POST['uname'];
        $this->password = $_POST['pword'];
    }

    public function checkLogin(Request $request)
    {
        $data=array(
            'name'=>$request->get('uname'),
            'password'=>$request->get('pword')
        );

        if(Auth::attempt($data))
        {
            return redirect::intended('home');
        }
        else
        {
            return redirect('date/login');
        }

    }

}
