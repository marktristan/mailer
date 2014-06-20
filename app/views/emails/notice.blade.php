<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <div style="font-size:12px;">
    Dear {{{ $representative }}},
    <br /><br />
    Please be informed that registration for the ff. domain/s will expire {{{ $days }}}:
    <br /><br />
    <table style="font-size:12px;">
      <thead>
        <tr>
          <th style="text-align:left;padding-right:20px;">Domain Name</th>
          <th style="text-align:left;">Expiry Date</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($domains as $dom => $exp)
        <tr>
          <td style="padding-right:20px;">{{{ $dom }}}</td><td>{{{ $exp }}}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
    <br /><br />
    We urge you to contact your clients in order to renew their registrations. Failure to renew the domain before expiry will cause all Web and Mail service to be disabled.<br />
    This means that their Website will be down and they will be unable to receive e-mail.<br />
    <br />
    Please help us ensure that their services remain uninterrupted by getting them to renew as soon as possible.<br /><br />
    You may renew the domains on behalf of your clients by logging in through the Partner link on our website <a href="www.dot.ph">www.dot.ph</a> or by clicking on the ff. link:<br />
    <a href="https://partner.dotphstaging.ph">https://partner.dotphstaging.ph</a><br /><br />
    Once you are logged in, click on the domain you want to renew and follow the instructions.<br /><br />
    For inquiries or further clarification please call us at +632 637-2104 to 05 or e-mail us at: <address>athelpdesk@dot.ph</address><br />
    Thank you.<br />
    <br /><br />
    Best regards,
    <br /><br />
    dotPH<br />
    <a href="www.dot.ph">www.dot.ph</a>
  </div>
</body>
</html>
