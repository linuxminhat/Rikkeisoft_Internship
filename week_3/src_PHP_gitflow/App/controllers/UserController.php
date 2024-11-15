<?php

namespace App\Controllers;

use Framework\User;
use Framework\Validation;
use Framework\Session;

class UserController
{
    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new User($config);
    }

    /**
     * Show the login form
     *
     * @return void
     */
    public function login()
    {
        loadView('users/login');
    }

    /**
     * Show the register form
     *
     * @return void
     */
    public function create()
    {
        loadView('users/create');
    }

    /**
     * Store a new user
     *
     * @return void
     */
    public function store()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $password = $_POST['password'];
        $password_confirm = $_POST['password_confirmation'];

        $errors = [];

        if (!Validation::email($email)) {
            $errors['email'] = 'Invalid email address.';
        }

        if (!Validation::string($name, 1, 50)) {
            $errors['name'] = 'Name must be between 1 and 50 characters.';
        }

        if (!Validation::string($password, 6, 50)) {
            $errors['password'] = 'Password must be between 6 and 50 characters.';
        }
        if (!Validation::match($password, $password_confirm)) {
            $errors['password_confirm'] = 'Passwords must match';
        }

        if (!empty($errors)) {
            loadView('users/create',
                [
                    'errors' => $errors,
                    'user' =>
                        [
                            'name' => $name,
                            'email' => $email,
                            'city' => $city,
                            'state' => $state]
                ]);
            exit;
        } else {
            $params = [
                'email' => $email
            ];

            $user = $this->db->getUserByEmail($email);
            if ($user) {
                $errors['email'] = 'Email already exists.';
                loadView('users/create',
                    [
                        'errors' => $errors,
                        'user' =>
                            [
                                'name' => $name,
                                'email' => $email,
                                'city' => $city,
                                'state' => $state]

                    ]);
                exit;
            }
            $params=[
                'name' => $name,
                'email' => $email,
                'city' => $city,
               'state' => $state,
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ];

            $this->db->createUser($params);

            $userId = $this->db->lastID();

            //Set user session
            Session::set('user', [
                'id' => $userId,
                'name' => $name,
                'email' => $email,
                'city' => $state,
                'state' => $state
            ]);
            redirect('/auth/login');


        }
    }

    /**
     * Logout user and kill session
     *
     * @return void
     */
    public function logout()
    {
        Session::clearAll();

        $params = session_get_cookie_params();
        setcookie('PHPSESSID','', time() - 86400,
            $params['path'],$params['domain']);

        redirect('/');
    }

    /**
     * Authenticate user with email and password
     *
     * @return void
     */
    public function authenticate()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $errors = [];

        //Validation
         if(!Validation::email($email)) {
            $errors['email'] = 'Invalid email address.';
        }
        if(!Validation::string($password, 6, 50)) {
            $errors['password'] = 'Password must be between 6 and 50 characters.';
        }

        if(!empty($errors)) {
            loadView('users/login', ['errors' => $errors]);
            exit;
        }

        $user = $this->db->getUserByEmail($email);
        if (!$user) {
            $errors['email'] = 'Email not found.';
            loadView('users/login', ['errors' => $errors]);
            exit;
        }

        if (!password_verify($password, $user->password)) {
            $errors['password'] = 'Password incorrect.';
            loadView('users/login', ['errors' => $errors]);
            exit;
        }

        //Set user session
        Session::set('user', [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'city' => $user->city,
            'state' => $user->state
        ]);

        redirect('/');
    }
}