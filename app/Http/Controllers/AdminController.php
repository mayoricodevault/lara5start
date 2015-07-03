<?php
/**
 * Created by PhpStorm.
 * User: carolasilvateran
 * Date: 7/3/15
 * Time: 12:39 PM
 */

namespace App\Http\Controllers;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Redirect;
use Sentry;
use Cartalyst\Sentry\Users\LoginRequiredException;
use Cartalyst\Sentry\Users\PasswordRequiredException;
use Cartalyst\Sentry\Users\UserExistsException;
use Cartalyst\Sentry\Users\UserNotFoundException;
use View;

class AdminController  extends Controller {

    /**
     * Message bag.
     *
     * @var MessageBag
     */
    protected $messageBag = null;

    /**
     * Initializer.
     *
     * @return void
     */
    public function __construct()
    {
        // CSRF Protection
        $this->beforeFilter('csrf', array('on' => 'post'));

        //
        $this->messageBag = new MessageBag;
    }

    public function showHome()
    {
        if(Sentry::check())
            return View::make('admin/index');
        else
            return Redirect::to('admin/login')->with('error', 'You must be logged in!');
    }

    public function showView($name=null)
    {

        if(View::exists('admin/'.$name))
        {
            if(Sentry::check())
                return View::make('admin/'.$name);
            else
                return Redirect::to('admin/login')->with('error', 'You must be logged in!');
        }
        else
        {
            return View::make('admin/404');
        }
    }

    public function showFrontEndView($name=null)
    {

        if(View::exists($name))
        {
            return View($name);
        }
        else
        {
            return View('404');
        }
    }


}