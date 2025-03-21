<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>To do app</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            {{-- <th>DESCRIPTION</th>
            <th>LONG DESCRIPTON</th> --}}
            <th>STATUS</th>
            <th>ACTION</th>
        </tr>
        <tr>
            @if(count($tasks)>0)
            @foreach($tasks as $task)
            <tr>
                <td>{{$task->id}}</td>
                <td>{{$task->title}}</td>
                {{-- <td>{{$task->description}}</td>
                <td>{{$task->long_description}}</td> --}}
                <td>{{$task->completed==true?'COMPLETED':'UNCOMPLETED'}}</td>
                <td><a href="{{route('tasks.detail',['id'=>$task->id])}}">Detail</a></td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="5">No task found</td>
            </tr>
            @endif
        </tr>
    </table>
    @isset($name)
        <h1>I'm{{$name}}</h1>
    @endisset
</body>
</html>
