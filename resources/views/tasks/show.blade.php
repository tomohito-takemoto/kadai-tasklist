@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} の詳細</h1>

    <table class="table table-bordered">
        <tr>
            <th>番号</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タイトル</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>内容</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    {{-- メッセージ編集ページへのリンク --}}
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}
    {{-- メッセージ削除フォーム --}}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection