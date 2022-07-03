<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodMenu;

class FoodMenuController extends Controller
{

    public function index(){
        return FoodMenu::all();
    
    }

    public function show($id)
    {
        return FoodMenu::find($id);
    }


    public function store(Request $request){

        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'description' => ['required', 'string', 'max:255'],
        //     'image_url' => ['required',  'string', 'max:255'],
        //     'category' => ['required',  'string', 'max:255'],
        // ]);

        
        $postInput = file_get_contents('php://input');
        $data = json_decode($postInput, true);
        $new_item = $data;
        $item = FoodMenu::create($new_item);
        return response()->json($item, 201);


    }

    public function destroy($id){
        $item = FoodMenu::find($id);
        $item->delete();
        return response()->json($item, 204);
    }


}
