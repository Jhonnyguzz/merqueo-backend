<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UpperCase extends Model
{
    protected $table = 'uppercase';
    //
    protected $fillable = [
        'document_id','user_name', 'length', 'value'
    ];

    public function readFile($file) {
        $lines = file($file);

        $max_word = "";
        foreach ($lines as $line) {
            $word = "";
            for ($i = 0; $i < strlen($line);$i++) {
                $word .= ctype_upper($line[$i]) ? $line[$i] : "";
            }

            if(strlen($word) > strlen($max_word)) {
                $max_word = $word;
            }
        }

        $upper = new UpperCase();

        $upper->document_id = Auth::user()->document_id;
        $upper->user_name = Auth::user()->name;
        $upper->length = strlen($max_word);
        $upper->value = $max_word;

        $upper->save();
    }
}
