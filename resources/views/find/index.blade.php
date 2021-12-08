@extends('layouts.default')
<style>
  .find__wrap {
    border: solid 2px;
    padding: 50px 50px;
  }
  label {
    font-weight: bold;
  }
  input:not(.input__gender, .find__btn) {
    height: 40px;
    border-radius: 4px;
    border: 1px solid darkgray;
    margin: 10px;
    width: 200px;
  }
  .input__gender {
    margin: 30px;
  }
  .find__btn {
    display: block;
    border-radius: 4px;
    color: white;
    background: black;
    padding: 3px 35px;
    margin: 20px auto 0;
  }
  .find__reset {
    display: block;
    text-align: center;
    margin: 5px;
  }
  .pagination {
    text-align: right;
  }
  .list__table {
  }
  th, td {
    text-align: left;
  }
</style>

@section('content')
<h1>管理システム</h1>
<div class='find__wrap'>
<form action="/" method="POST">
  @csrf
  <label>お名前
    <input type='text' name='fullname'>
  </label>
  <label>性別
    <input class='input__gender' type='radio' name='gender' value='male' style='transform:scale(2.5);' checked="checked">全て
    <input class='input__gender' type='radio' name='gender' value='male' style='transform:scale(2.5);'>男性
    <input class='input__gender' type='radio' name='gender' value='female' style='transform:scale(2.5);'>女性
  </label><br>
  <label>登録日
    <input type='text' name='date'><span>〜</span><input type='text' name='date'>
  </label><br>
  <label>メールアドレス
    <input type='email' name='email'> 
  </label>
  <input class='find__btn' type='submit' value='検索'>
  <a class='find__reset' href="{{ route('find') }}">リセット</a>
</form>
</div>
  
<div class='pagination'>{{ $items->links() }}</div>

<div class='list__table'>
  <table>
    <tr>
      <th>ID</th>
      <th>お名前</th>
      <th>性別</th>
      <th>メールアドレス</th>
      <th>ご意見</th>
    </tr>
    @foreach ($items as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->fullname}}</td>
      <td>{{$item->gender}}</td>
      <td>{{$item->email}}</td>
      <td>{{Str::limit($item->opinion, 25, ' (...)')}}</td>
    </tr>
    @endforeach
  </table>
</div>
@endsection