<?php


use App\Models\Task;
use Illuminate\Support\Facades\Route;
//xóa list tasks ->
Route::get('/',function(){
    $tasks = Task::latest()->get();
    return view('index',['tasks'=>$tasks]);
});
Route::get('/tasks/{id}',function($id){
    $task = Task::findOrFail($id);
    return view('detail',['task'=>$task]);
})->name('tasks.detail');
// class Task{
//     public function __construct(
//     public int $id,
//     public string $title,
//     public string $description,
//     public ?string $long_description,
//     public bool $completed)
//     {
//     }
// }
// $tasks = [
//     new Task(1,'Uống đủ nước','Uống 4 lít mỗi ngày',null,false),
//     new Task(2,'Dậy lúc 6h30','Dậy lúc 6h30',null,true),
//     new Task(3,'Làm bài tập về nhà','Làm bài tập php',null,false),
//     new Task(4,'Học từ vựng tiếng anh','Học 100 từ mỗi tuần',null,true),
// ];
// Route::get('/', function ()use($tasks) {
//     return view('index',['tasks' => $tasks]);
// });

// Route::get('/tasks/{id}',function ($id) use ($tasks){
//     $task = collect($tasks)->firstwhere('id',$id);
//     if(!$task){
//         return redirect('404');//redirect đến trang 404
//     }
//     return view('detail',['task'=>$task]);
// })->name('tasks.detail');

// Route::fallback(function(){
//     return "Không tìm thấy trang";
// })->name('404');//set cái name
// // Route::get('/about',function(){
// //     return view('index',['name' => ' Gia']);
// // });
