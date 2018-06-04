


{{--// ВЫНОСИТ КНОПКУ УДАЛИТЬ ПОСТ   И ПЕРЕНОСИТ В ПАПКУ TASK ФАЙЛ    TASKS.BLADE.PHP--}}

<form action="{{ url('task/'.$task->id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <button type="submit" class="btn btn-danger">
        <i class="fa fa-btn fa-trash"></i>Delete
    </button>
</form>