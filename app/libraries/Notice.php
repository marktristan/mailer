<?php

class Notice {
  
  public static function send15()
  {
    $expiring = Partner::getExpiringDomains15();
    if (count($expiring) > 0)
    {
      $tmpData = array();
      foreach ($expiring as $row)
      {
        $tmpData[$row->login_id][] = array(
          'domains' => $row->domain,
          'expiry_date' => $row->expiry_date,
          'partner_email' => $row->partner_email,
          'contact_email' => $row->contact_email
        );
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
              $domains[$val2['domains']] = $val2['expiry_date'];
            }
          }

          $data = array('partner' => $key, 'domains' => $domains, 'days' => 15);
          //print_r($data);

          //send email here
          Mail::queue('emails.notice', $data, function($message)
          {
            $message->from('us@example.com', 'Laravel');
            $message->to('mt.victorio@dot.ph');
            $message->subject('dotPH Notification - Expiring Domains');
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
      foreach ($expiring as $row)
      {
        $tmpData[$row->login_id][] = array(
          'domains' => $row->domain,
          'expiry_date' => $row->expiry_date,
          'partner_email' => $row->partner_email,
          'contact_email' => $row->contact_email
        );
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
              $domains[$val2['domains']] = $val2['expiry_date'];
            }
          }

          $data = array('partner' => $key, 'domains' => $domains, 'days' => 30);
          //print_r($data);

          //send email here
          Mail::queue('emails.notice', $data, function($message)
          {
            $message->from('us@example.com', 'Laravel');
            $message->to('mt.victorio@dot.ph');
            $message->subject('dotPH Notification - Expiring Domains');
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
      foreach ($expiring as $row)
      {
        $tmpData[$row->login_id][] = array(
          'domains' => $row->domain,
          'expiry_date' => $row->expiry_date,
          'partner_email' => $row->partner_email,
          'contact_email' => $row->contact_email
        );
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
              $domains[$val2['domains']] = $val2['expiry_date'];
            }
          }

          $data = array('partner' => $key, 'domains' => $domains, 'days' => 90);
          //print_r($data);

          //send email here
          Mail::queue('emails.notice', $data, function($message)
          {
            $message->from('us@example.com', 'Laravel');
            $message->to('mt.victorio@dot.ph');
            $message->subject('dotPH Notification - Expiring Domains');
          });
        }
      }
    }
  }

}