<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
  protected $fillable = ['title','user_id','body','user_id','parent_id','send_date','is_sent'];

  public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
  {
      return $this->belongsTo(User::class);
  }
}
