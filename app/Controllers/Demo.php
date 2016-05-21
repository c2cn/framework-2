<?php
namespace App\Controllers;

use Core\View;
use Core\Controller;
use Helpers\Password;
use Helpers\Url;

use Event;
use Validator;
use Input;
use Request;

use App\Models\ORM\User;


/*
*
* Demo controller
*/
class Demo extends Controller
{
    /**
     * Call the parent construct
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Define Index method
     */
    public function index()
    {
        echo 'hello';
    }

    public function password($password)
    {
        echo Password::make($password);
    }

    public function test($param1 = '', $param2 = '', $param3 = '', $param4 = '')
    {
        $params = array(
            'param1' => $param1,
            'param2' => $param2,
            'param3' => $param3,
            'param4' => $param4
        );

        echo '<h3>Action parameters</h3>';

        echo '<pre>' .var_export($params, true) .'</pre>';
    }

    public function request($param1 = '', $param2 = '', $param3 = '', $param4 = '')
    {
        echo '<h3>Request</h3>';

        echo '<pre>' .var_export(Request::root(), true).'</pre>';

        echo '<pre>' .var_export(Request::url(), true).'</pre>';

        echo '<pre>' .var_export(Request::path(), true).'</pre>';

        echo '<pre>' .var_export(Request::segments(), true).'</pre>';

        echo '<pre>' .var_export(Request::segment(1), true).'</pre>';

        echo '<pre>' .var_export(Request::isGet(), true).'</pre>';
        echo '<pre>' .var_export(Request::isPost(), true).'</pre>';

        echo '<pre>' .var_export(Input::all(), true).'</pre>';
    }

    public function events()
    {
        echo '<h3>Events dispatching</h3>';

        // Prepare the Event payload.
        $payload = array(
            'Hello, this is Event sent from ' .str_replace('::', '@', __METHOD__)
        );

        // Fire the Event 'test' and store the results.
        $results = Event::fire('test', $payload);

        // Print out the non-empty results returned by Event firing.
        echo implode('', array_filter($results, 'strlen')) .'<br>';

        // Fire the Event 'test' and echo the result.
        echo Event::until('test', $payload);
    }

    public function database()
    {
        $user = User::find(1);

        echo '<pre>' .var_export($user, true) .'</pre>';
    }

    public function validate()
    {
        $data = array(
            'username' => 'michael',
            'password' => 'password',
            'email'    => 'michael@novaframework.dev'
        );

        $rules = array(
            'username' => 'required|min:3|max:50|alpha_dash|unique:users',
            'password' => 'required|between:4,30',
            'email'    => 'required|email|max:100|unique:users',
        );

        $validator = Validator::make($data, $rules);

        if ($validator->passes()) {
            echo '<h3>Data validated with success!</h3>';

            echo '<pre>' .var_export($data, true) .'</pre>';
        } else {
            $errors = $validator->errors()->all();

            echo '<pre>' .var_export($errors, true) .'</pre>';
        }
    }
}
