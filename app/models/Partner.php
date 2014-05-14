<?php

class Partner extends Eloquent {

  protected $connection = 'local';
  protected $table = 'registrars';
  protected $guarded = array();
  public $timestamps = false;

  public static function email($partner)
  {
    $p = Partner::where('login_id', $partner)->first();
    if (count($p) > 0)
    {
      return $p->email;
    }
    else
    {
      return 'registrar@dot.ph';
    }
  }

  public static function getExpiringDomains15()
  {
    $query = "
      SELECT (d.name||d.extension) AS domain, d.expiry_date, r.login_id, r.representative, r.email AS partner_email, c.email AS contact_email FROM domains d
      LEFT JOIN registrars r ON r.id = d.registrar_id
      LEFT JOIN contacts c ON c.handle = d.registrant_handle
      INNER JOIN domain_status ds ON ds.domain_id = d.id
      WHERE current_date = (d.expiry_date - interval '15 days')::date
      AND ds.status NOT IN ('Server Hold', 'Redemption Grace', 'Pending Delete')
      AND current_timestamp < d.expiry_date
      ORDER BY r.login_id, d.name
    ";

    $result = DB::connection('local')->select($query);
    return $result;
  }

  public static function getExpiringDomains30()
  {
    $query = "
      SELECT (d.name||d.extension) AS domain, d.expiry_date, r.login_id, r.representative, r.email AS partner_email, c.email AS contact_email FROM domains d
      LEFT JOIN registrars r ON r.id = d.registrar_id
      LEFT JOIN contacts c ON c.handle = d.registrant_handle
      INNER JOIN domain_status ds ON ds.domain_id = d.id
      WHERE current_date = (d.expiry_date - interval '30 days')::date
      AND ds.status NOT IN ('Server Hold', 'Redemption Grace', 'Pending Delete')
      AND current_timestamp < d.expiry_date
      ORDER BY r.login_id, d.name
    ";

    $result = DB::connection('local')->select($query);
    return $result;
  }

  public static function getExpiringDomains90()
  {
    $query = "
      SELECT (d.name||d.extension) AS domain, d.expiry_date, r.login_id, r.representative, r.email AS partner_email, c.email AS contact_email FROM domains d
      LEFT JOIN registrars r ON r.id = d.registrar_id
      LEFT JOIN contacts c ON c.handle = d.registrant_handle
      INNER JOIN domain_status ds ON ds.domain_id = d.id
      WHERE current_date = (d.expiry_date - interval '90 days')::date
      AND ds.status NOT IN ('Server Hold', 'Redemption Grace', 'Pending Delete')
      AND current_timestamp < d.expiry_date
      ORDER BY r.login_id, d.name
    ";

    $result = DB::connection('local')->select($query);
    return $result;
  }

}