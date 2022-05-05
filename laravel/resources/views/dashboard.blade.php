<a href="{{route('tasks.create')}}">Add task</a>
<h2>User tasks:</h2>

<ul>
    @foreach($tasks as $task)
        <li>{{$task->name}}</li>
    @endforeach
</ul>

