<?php
use App\Task;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
Route::get('/', function () {
    return view('welcome');
});*/

//顯示所有任務的清單
Route::get('/',function (){
    return view('tasks');
});

//增加新的任務
Route::post('/task',function (Request $request){
    $task = new Task;
    $task->name = $request->name;
    $task->save();
    return redirect('/');
});

//刪除任務
Route::delete('/task/{task}',function (Task $task){
    //
});
