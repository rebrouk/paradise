

{{--ВЫВОД КОЛОНКИ КУДА ЗАПИСЫВАТЬ ЗАДАЧУ И КНОПКА ДОБАВЛЕНИЯ ЗАДАЧИ  В ФАЙЛЕ TASKS--}}

<div class="form-group">
    <label for="task-name" class="col-sm-3 control-label">Task</label>

    <div class="col-sm-6">
        <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
    </div>
</div>

<!-- Add Task Button -->
<div class="form-group">
    <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-default">
            <i class="fa fa-btn fa-plus"></i>Add Task
        </button>
    </div>
</div>
</form>
</div>
</div>