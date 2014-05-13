<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <div>
    <p style="font-size:14px;">
      Dear {{{ $partner }}},
      <br /><br />
      You have domains that will expire within {{{ $days }}} days:
      <br /><br />
      @foreach ($domains as $dom => $exp)
        {{{ $dom }}}<br />
      @endforeach
      <br /><br /><br />
      Best regards,
      <br /><br />
      dotPH
    </p>
  </div>
</body>
</html>