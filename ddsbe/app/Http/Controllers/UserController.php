<?php
namespace App\Models\User;

use Illuminate\Http\Controllers;
use App\User;

Class UserController extends Controller 
{
    private $request;

    public function __construct(Request $request)
    {
         $this->request = $request;
    }

    public function getUsers()
    {
        $users = User::all();
        return response()->json($users, 200);
    }
}