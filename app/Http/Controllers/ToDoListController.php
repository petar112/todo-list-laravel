<?php
/**
 * Created by PhpStorm.
 * User: vivify
 * Date: 28.6.18.
 * Time: 14.45
 */

namespace App\Http\Controllers;


use App\Http\Requests\StoreTaskValidation;
use App\ToDoItem;
use Illuminate\Http\Validator;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    public function delete(Request $request) {
        $toDoItem = ToDoItem::find($request->id);
        $toDoItem->delete();

        return $toDoItem;
    }

    public function insert(StoreTaskValidation $request) {
        $toDoItem = new ToDoItem();
        $toDoItem->description = $request->description;
        $toDoItem->completed = $request->completed;
        $toDoItem->priority = $request->priority;
        $toDoItem->public = $request->public;
        $toDoItem->save();

        return $toDoItem;
    }

    public function update(StoreTaskValidation $request){
        $toDoItem = ToDoItem::find($request->id);
        $toDoItem->description = $request->description;
        $toDoItem->completed = $request->completed;
        $toDoItem->priority = $request->priority;
        $toDoItem->public = $request->public;
        $toDoItem->update();

        return $toDoItem;
    }

    public function getTasks() {
        $tasks = ToDoItem::all();

        return $tasks;
    }
}