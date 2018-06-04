
<?php


?>
@foreach ( $tasks as $task)

    <td class="table-text"><div>{{ $task->text }}</div></td>
    <td class="table-text"><div>{{ $task->id }}</div></td>
 @endforeach

