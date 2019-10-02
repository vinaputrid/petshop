<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Customer;
use App\Food;
use App\Grooming;

class FoodController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        try {
            // code to get data from database
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function show($id) 
    {
        try {
            /// code to get data from database
        } catch (\Exception $e) {
            return $e->getMessage();
        }
       
    }

    public function store()
    {
        try {
            // code to get data from database
        } catch (\Exception $e) {
        
            return $e->getMessage();
        }
    }

    public function edit($id)
    {
        try {
            // code to get data from database
        } catch (\Exception $e) {
            return $e->getMessage();
        }
       
    }

    public function update(Request $request, $id) 
    {
        try {
            // code to get data from database
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function create(Request $request)
    {
        try {
            // code to get data from database
        } catch (\Exception $e) {
        
            return $e->getMessage();
        }
    }

    public function destroy ($id) 
    {
        try {
            // code to get data from database
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
