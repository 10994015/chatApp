<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Chat extends Model
{
    use HasFactory;
    protected $table = "chats";

    public function users(){
        return $this->belongsToMany(User::class, 'chat_user', 'chat_id', 'user_id');
    }
}
