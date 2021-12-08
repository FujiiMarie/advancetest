@extends('layouts.default')
<style>
    p {
      text-align: center;
      color: red;
    }
    table {
      margin: 0px auto;
    }
    th {
      display: flex;
      text-align: left;
      padding: 10px 20px 20px;
    }
    .th-column-red:after {
      content: '※';
      color: red;
      margin-left: 3px;
    }
    td {
      text-align: left;
    }
    .contents-input {
      border-radius: 4px;
      border: 1px solid darkgray;
      padding: 10px;
      width: 400px;
    }
    .contents-input-gender {
      border: 1px solid darkgray;
      width: 100px;
    }
    .contents-input-opinion {
      border-radius: 4px;
      border: 1px solid darkgray;
      padding: 10px;
      height: 100px;
      width: 400px;
    }
    .submit {
      display: block;
      border-radius: 4px;
      color: white;
      background: black;
      padding: 3px 35px;
      margin: 20px auto 0;
    }
    .error {
      color: red;
      font-size: small;
    }
    .example {
      color: darkgray;
      margin: 5px 20px;
    }

</style>
@section('content')
  <h1>{{$txt}}</h1>
  @if (count($errors) > 0)
    <p>入力に問題があります</p>
  @endif
  <form action='/' method='POST'>
    <table>
      @csrf
      @error('fullname')
        <tr>
          <th class='error'>ERROR</th><td class='error'>{{$message}}</td>
        </tr>
      @enderror
      <tr>
        <th class='th-column-red'>お名前</th>
        <td><input class='contents-input' type="text" name="fullname"><br><div class='example'>例）山田　太郎</div></td>
      </tr>
      @error('gender')
        <tr>
          <th class='error'>ERROR</th><td class='error'>{{$message}}</td>
        </tr>
      @enderror
      <tr>
        <th class='th-column-red'>性別</th>
        <td>
          <input class='contents-input-gender' type="radio" name="gender" value='male' style='transform:scale(2.5);' checked="checked">男性
          <input class='contents-input-gender' type="radio" name="gender" value='female' style='transform:scale(2.5);'>女性</td>
      </tr>
      @error ('email')
        <tr>
          <th class='error'>ERROR</th><td class='error'>{{$message}}</td>
        </tr>
      @enderror
      <tr>
        <th class='th-column-red'>メールアドレス</th>
        <td><input class='contents-input' type="email" name="email"><br><div class='example'>例）test@example.com</div></td>
      </tr>
      @error ('postcode')
        <tr>
          <th class='error'>ERROR</th><td class='error'>{{$message}}</td>
        </tr>
      @enderror
      <tr>
        <th class='th-column-red'>郵便番号</th>
        <td><input class='contents-input' type="postal-code" name="postcode"><br><div class='example'>例）1234567</div></td>
      </tr>
      @error ('address1')
        <tr>
          <th class='error'>ERROR</th><td class='error'>{{$message}}</td>
        </tr>
      @enderror
      <tr>
        <th class='th-column-red'>住所</th>
        <td><input class='contents-input' type="address-line1" name="address1"><br><div class='example'>例）東京都渋谷区千駄ヶ谷1-2-3</div></td>
      </tr>
      <tr>
        <th class='th-column'>建物名</th>
        <td><input class='contents-input' type="address-line2" name="address2"><br><div class='example'>例）千駄ヶ谷マンション101</div></td>
      </tr>
      @error ('opinion')
        <tr>
          <th class='error'>ERROR</th><td class='error'>{{$message}}</td>
        </tr>
      @enderror
      <tr>
        <th class='th-column-red'>ご意見</th>
        <td><textarea class='contents-input-opinion' type="text" name="opinion" maxlength="120"></textarea></td>
      </tr>
    </table>
    <input class='submit' type="submit" value="確認">
  </form>
@endsection
