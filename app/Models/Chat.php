<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ChatMessage;
class Chat extends Model
{
    use HasFactory;
    protected $table = "chats";

    public function users(){
        return $this->belongsToMany(User::class, 'chat_user', 'chat_id', 'user_id');
    }
    public function messages(){
        return $this->hasMany(ChatMessage::class, 'chat_id', 'id');
    }
    public function isGroupChat(){
        return $this->group_chat === 1;
    }
}
