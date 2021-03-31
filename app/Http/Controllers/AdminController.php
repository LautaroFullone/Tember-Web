<?php

namespace App\Http\Controllers;

use App\User;
use App\Item;

class AdminController extends Controller
{

    public function showCreateAcuerdo(){
        $clients = User::where('admin',false)->get();
        $items = Item::all();

        return view('backend.create-acuerdo', array(
            'clients' => $clients,
            'items' => $items
        ));
    }
}
