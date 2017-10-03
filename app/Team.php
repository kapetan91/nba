<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
   protected $fillable = ['name'];

   static function getTeams(){
   	return self::where('name', 1)->get();
   }

  public function player()
    {
     return $this->belongsTo(Player::class, 'team_id');   
    }
}