<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class MobileController
{
    public function listenPoetry($poetry_id)
    {
        $poetry = DB::table('mv_poetry')->select('title','author','content','mp3_url')
            ->where('id','=',$poetry_id)->first();

        return view('mobile/index',
            [
                'poetry' => $poetry->content,
                'title' => $poetry->title,
                'author' => $poetry->author,
                'url' => $poetry->mp3_url,
            ]);
    }
}