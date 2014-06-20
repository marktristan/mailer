<?php

class Notice {

  public static function send00()
  {
    $expiring = Partner::getExpiredDomainsToday();
    if (count($expiring) > 0)
    {
      $tmpData = array();
      $tmpName = array();
      $tmpEmail = array();
      foreach ($expiring as $row)
      {
        $tmpData[$row->login_id][] = array(
          'domains' => $row->domain,
          'expiry_date' => $row->expiry_date,
          'contact_email' => $row->contact_email
        );

        $tmpName[$row->login_id] = $row->representative;
        $tmpEmail[$row->login_id] = $row->partner_email;
      }

      if (count($tmpData) > 0)
      {
        foreach ($tmpData as $key => $val)
        {
          $domains = array();
          if (count($val) > 0)
          {
            foreach ($val as $key2 => $val2)
            {
              $domains[$val2['domains']] = date('Y-m-d', strtotime($val2['expiry_date']));
            }
          }

          $data = array('partner' => $key, 'representative' => $tmpName[$key], 'domains' => $domains, 'days' => 'today');

          $email = $tmpEmail[$key];

          // Send email here
          Mail::queue('emails.notice', $data, function($message) use ($key, $email)
          {
            $message->from('registrar@dot.ph', 'dotPH');
            $message->to($email);
            $message->subject("$key - expiration today");
          });
        }
      }
    }
  }

  public static function send15()
  {
    $expiring = Partner::getExpiringDomains15();
    if (count($expiring) > 0)
    {
      $tmpData = array();
      $tmpName = array();
      $tmpEmail = array();
      foreach ($expiring as $row)
      {
        $tmpData[$row->login_id][] = array(
          'domains' => $row->domain,
          'expiry_date' => $row->expiry_date,
          'contact_email' => $row->contact_email
        );

        $tmpName[$row->login_id] = $row->representative;
        $tmpEmail[$row->login_id] = $row->partner_email;
      }

      if (count($tmpData) > 0)
      {
        foreach ($tmpData as $key => $val)
        {
          $domains = array();
          if (count($val) > 0)
          {
            foreach ($val as $key2 => $val2)
            {
              $domains[$val2['domains']] = date('Y-m-d', strtotime($val2['expiry_date']));
            }
          }

          $data = array('partner' => $key, 'representative' => $tmpName[$key], 'domains' => $domains, 'days' => 'in 15 days');

          $email = $tmpEmail[$key];

          // Send email here
          Mail::queue('emails.notice', $data, function($message) use ($key, $email)
          {
            $message->from('registrar@dot.ph', 'dotPH');
            $message->to($email);
            $message->subject("$key - 15 days before expiration");
          });
        }
      }
    }
  }

  public static function send30()
  {
    $expiring = Partner::getExpiringDomains30();
    if (count($expiring) > 0)
    {
      $tmpData = array();
      $tmpName = array();
      $tmpEmail = array();
      foreach ($expiring as $row)
      {
        $tmpData[$row->login_id][] = array(
          'domains' => $row->domain,
          'expiry_date' => $row->expiry_date,
          'contact_email' => $row->contact_email
        );

        $tmpName[$row->login_id] = $row->representative;
        $tmpEmail[$row->login_id] = $row->partner_email;
      }

      if (count($tmpData) > 0)
      {
        foreach ($tmpData as $key => $val)
        {
          $domains = array();
          if (count($val) > 0)
          {
            foreach ($val as $key2 => $val2)
            {
              $domains[$val2['domains']] = date('Y-m-d', strtotime($val2['expiry_date']));
            }
          }

          $data = array('partner' => $key, 'representative' => $tmpName[$key], 'domains' => $domains, 'days' => 'in 30 days');

          $email = $tmpEmail[$key];

          // Send email here
          Mail::queue('emails.notice', $data, function($message) use ($key, $email)
          {
            $message->from('registrar@dot.ph', 'dotPH');
            $message->to($email);
            $message->subject("$key - 30 days before expiration");
          });
        }
      }
    }
  }

  public static function send90()
  {
    $expiring = Partner::getExpiringDomains90();
    if (count($expiring) > 0)
    {
      $tmpData = array();
      $tmpName = array();
      $tmpEmail = array();
      foreach ($expiring as $row)
      {
        $tmpData[$row->login_id][] = array(
          'domains' => $row->domain,
          'expiry_date' => $row->expiry_date,
          'contact_email' => $row->contact_email
        );

        $tmpName[$row->login_id] = $row->representative;
        $tmpEmail[$row->login_id] = $row->partner_email;
      }

      if (count($tmpData) > 0)
      {
        foreach ($tmpData as $key => $val)
        {
          $domains = array();
          if (count($val) > 0)
          {
            foreach ($val as $key2 => $val2)
            {
              $domains[$val2['domains']] = date('Y-m-d', strtotime($val2['expiry_date']));
            }
          }

          $data = array('partner' => $key, 'representative' => $tmpName[$key], 'domains' => $domains, 'days' => 'in 90 days');

          $email = $tmpEmail[$key];

          // Send email here
          Mail::queue('emails.notice', $data, function($message) use ($key, $email)
          {
            $message->from('registrar@dot.ph', 'dotPH');
            $message->to($email);
            $message->subject("$key - 90 days before expiration");
          });
        }
      }
    }
  }

}
