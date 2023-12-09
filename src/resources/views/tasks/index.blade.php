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
    @error('task_name')
    <div class="">
      <p class="" style="color: red;">
        {{ $message }}
      </p>
    </div>
    @enderror

  </div>

</form>

@if ($tasks->isNotEmpty())
<table>
  <tbody>
    @foreach ($tasks as $item)
    <tr>
      <td>{{ $item->id }}</td>
      <td>{{ $item->name }}</td>
      <td>
        <form action="/tasks/{{ $item->id }}" method="post" class="inline-block text-gray-500 font-medium" role="menuitem" tabindex="-1">
          @csrf
          @method('PUT')
          <button type="submit" class="bg-emerald-700 py-4 w-20 text-white md:hover:bg-emerald-800 transition-colors">完了</button>
        </form>
      </td>
      <td>
        <a href="/tasks/{{ $item->id }}/edit/" class="inline-block text-center py-4 w-20 underline underline-offset-2 text-sky-600 md:hover:bg-sky-100 transition-colors">編集</a>
      </td>
      <td>
        <form action="/tasks/{{ $item->id }}" method="post" class="inline-block text-gray-500 font-medium" role="menuitem" tabindex="-1">
          @csrf
          @method('DELETE')
          <button type="submit" class="py-4 w-20 md:hover:bg-slate-200 transition-colors">削除</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif

@endsection

@include('layouts.footer')