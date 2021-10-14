<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Carbon;
// use Orion\Concerns\DiableAuthorization;
use Orion\Http\Controllers\Controller;

class ItemController extends Controller
{
    
    // use DiableAuthorization;
    protected $model = Item::class;

    // public function index(){
    //     return Item::orderBy('created_at','DESC')->get();
    // }

    // public function store(Request $request)
    // {
    //     $newTodo = new Item;
    //     $newTodo->name = $request->item["name"];
    //     $newTodo->save();

    //     return $newTodo;
    // }
    // public function update(Request $request, $id)
    // {
    //     $exitingTodo = Item::find($id);
        
    //     if($exitingTodo){
    //         $exitingTodo->completed = $request->item['completed'] ? true :false;
    //         $exitingTodo->completed_at = $request->item['completed'] ? Carbon::now() :null;
    //         $exitingTodo->save();

    //         return $exitingTodo;
    //     }
    //     return "Item not found" ;
    // }

    // public function destroy(Request $request, $id)
    // {
    //     $exitingTodo = Item::find($id);
        
    //     if($exitingTodo){
    //         $exitingTodo->delete();
    //         return "Item deleted successfully";
    //     }
    //     return "Item not found" ;
    // }
}
