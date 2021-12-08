<!-- <!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <h1>{{$txt}}</h1>
  @if (count($errors) > 0)
    <p>入力に問題があります</p>
  @endif
  <form action="/" method="POST">
    <table>
      @csrf
      @error('fullname')
        <tr>
          <th>ERROR</th>
          <td>{{$message}}</td>
        </tr>
      @enderror
      <tr>
        <th>お名前</th>
        <td><input type="text" name="fullname"></td>
      </tr>
      @error('gender')
        <tr>
          <th>ERROR</th>
          <td>{{$message}}</td>
        </tr>
      @enderror
      <tr>
        <th>性別</th>
        <td><input type="radio" name="gender"></td>
      </tr>
      @error ('email')
        <tr>
          <th>ERROR</th>
          <td>{{$message}}</td>
        </tr>
      @enderror
      <tr>
        <th>メールアドレス</th>
        <td><input type="email" name="email"></td>
      </tr>
      @error ('postcode')
        <tr>
          <th>ERROR</th>
          <td>{{$message}}</td>
        </tr>
      @enderror
      <tr>
        <th>郵便番号</th>
        <td><input type="postal-code" name="postcode"></td>
      </tr>
      @error ('address1')
        <tr>
          <th>ERROR</th>
          <td>{{$message}}</td>
        </tr>
      @enderror
      <tr>
        <th>住所</th>
        <td><input type="address-line1" name="address1"></td>
      </tr>
      <tr>
        <th>建物</th>
        <td><input type="address-line2" name="address2"></td>
      </tr>
      @error ('opinion')
        <tr>
          <th>ERROR</th>
          <td>{{$message}}</td>
        </tr>
      @enderror
      <tr>
        <th>ご意見</th>
        <td><input type="text" name="opinion"></td>
      </tr>
    </table>
    <input type="submit" value="確認">
  </form>
</body>
</html> -->