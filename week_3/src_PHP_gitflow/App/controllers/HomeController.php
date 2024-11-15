<?php

namespace App\Controllers;

use Framework\Listing;

class HomeController
{
    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Listing($config);
    }

    public function index()
    {
        $listings = $this->db->getAllListings();

        loadView('home', [
            'listings' => $listings
        ]);

    }
}
