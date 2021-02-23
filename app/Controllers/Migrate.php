<?php

// Browsing to this file/url executes the migrations

namespace App\Controllers;

class Migrate extends \CodeIgniter\Controller
{
        public function index()
        {
                $migrate = \Config\Services::migrations();

                try
                {
                        $migrate->latest();
                        echo "Migration executed";
                }
                catch (\Throwable $e)
                {
                        var_dump($e);
                        // Do something with the error here...
                }
        }
}