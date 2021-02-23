@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>タスク一覧</h2>
        </div>
    @if (count($tasks) > 0)
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>タイトル</th>
                        <th>内容</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        {{-- メッセージ詳細ページへのリンク --}}
                        <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
    </br>
    {{-- タスク作成ページへのリンク --}}
    {!! link_to_route('tasks.create', '新規タスクの投稿', [], ['class' => 'btn btn-primary']) !!}

@endsection