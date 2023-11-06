<?php

namespace App\Helpers;

use App\Models\Base\ApiDate;
use App\Models\Base\Game;
use Carbon\Carbon;

class ApiHelper {
    public static function getGamefiles($game_id){

    }

    public static function getGames(){
        $url = config('app.api_url').'/games/'.ApiHelper::getApiDate('gamelist');
        $json = json_decode(file_get_contents($url),true);

        foreach ($json['data'] as $item){
            $data = Game::whereGameId($item['id'])->first();
            if($data){
                $data->title = $item['title'];
                $data->subtitle = $item['subtitle'];
                $data->desc = $item['desc_html'];
                $data->website_url = $item['website_url'];
                $data->release_type = $item['release_type'];
                $data->api_date = Carbon::now();
                $data->maker_id = $item['maker_id'];
                $data->is_banned = $item['is_banned'];
                $data->release_date = $item['release_date'];
                $data->invisible_on_start_page = $item['invisible_on_start_page'];
                $data->views = $item['views'];
                $data->save();
            }else{
                $newData = new Game;
                $newData->game_id = $item['id'];
                $newData->title = $item['title'];
                $newData->subtitle = $item['subtitle'];
                $newData->desc = $item['desc_html'];
                $newData->website_url = $item['website_url'];
                $newData->release_type = $item['release_type'];
                $newData->api_date = Carbon::now();
                $newData->maker_id = $item['maker_id'];
                $newData->is_banned = $item['is_banned'];
                $newData->release_date = $item['release_date'];
                $newData->invisible_on_start_page = $item['invisible_on_start_page'];
                $newData->views = $item['views'];
                $newData->save();
            }
        }

        ApiHelper::setApiDate('gamelist');

        return $json;
    }

    public static function setApiDate($endpoint){
        $date = ApiDate::whereEndpoint($endpoint)->first();

        if($date){
            $date->last_update = Carbon::now();
            $date->save;
        }else{
            $newDate = new ApiDate;
            $newDate->endpoint = $endpoint;
            $newDate->last_update = Carbon::now();
            $newDate->save();
        }

        return Carbon::now();
    }

    public static function getApiDate($endpoint){
        $date = ApiDate::whereEndpoint($endpoint)->first();

        $ret = 0;
        if(!$date){
            $ret = '2000-01-01 00:00:01';
        }else{
            $ret = $date->last_update;
        }

        return Carbon::parse($ret)->timestamp;
    }
}
