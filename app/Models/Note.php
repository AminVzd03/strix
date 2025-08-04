<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
  protected $fillable = ['title','user_id','body','recipient_email','parent_id','send_date','is_sent'];

  public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
  {
      return $this->belongsTo(User::class);
  }
  public function replies(): \Illuminate\Database\Eloquent\Relations\HasMany
  {
      return $this->hasMany(Note::class, 'parent_id');
  }
  public function parent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
  {
      return $this->belongsTo(Note::class, 'parent_id');
  }
  public function scopeReplies()
  {
      return $this->query()->with('replies');
  }
}
