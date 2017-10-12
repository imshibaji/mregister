<?php

namespace Medust\Leads\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
  /**
   * Get the user that owns the phone.
   */
  public function user()
  {
      return $this->belongsTo('App\Models\User');
  }
}
