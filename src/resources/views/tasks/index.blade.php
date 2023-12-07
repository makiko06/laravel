@extends('layouts.common')

@include('layouts.header')

@section('content')
<form action="/tasks" method="post" class="mt-10">
  @csrf

  <div>
    <p>今日何する？</p>
    <label>
      <input placeholder="洗濯物をする..." type="text" name="task_name" />
    </label>

    <button type="submit">追加する</button>
    <div>{{ $task_name }}</div>
  </div>

</form>
@endsection

@include('layouts.footer')