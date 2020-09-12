<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsItem extends Post implements Feedable
{
    //
    public static function getFeedItems()
    {
       return NewsItem::all();
    }
    }
}
