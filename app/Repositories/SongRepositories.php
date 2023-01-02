<?php

namespace App\Repositories;

use App\Models\Slide;
use App\Models\Song;
use App\Models\Tone;
use Illuminate\Support\Str;

class SongRepositories implements SongRepositoryInterface
{
    protected $modelSong;
    protected $modelTone;
    protected $modelSlide;

    public function __construct()
    {
        $this->modelSong = Song::class;
        $this->modelTone = Tone::class;
        $this->modelSlide = Slide::class;
    }

    public function getFile($file)
    {
        // TODO: Implement getFile() method.
    }

    public function create($payload)
    {
        // TODO: Implement create() method.
        $song = $this->storeSong($payload);
        $tone = $this->storeTone($payload,$song);
        $slide = $payload->all();
        foreach ($slide as $key => $value)
        {
            $a = $key;
        }

//        return $slide;
    }
    public function storeSlide($payload,$song){
        $dataSlide = new $this->modelSlide;
        $file = $payload->file();
        return $file;
    }
    public function storeTone($payload,$song)
    {
        $dataTone = new $this->modelTone;
        $dataTone->name = $payload->tone_name;
        return $song->tone()->save($dataTone);
    }

    public function storeSong($payload)
    {
        $dataSong = new $this->modelSong;
        $dataSong->name = $payload->name;
        $dataSong->user_id = 1;
        $dataSong->tune_id = 1;
        $dataSong->author = $payload->author;
        $dataSong->singer = $payload->singer;
        $dataSong->total_search = 0;
        $dataSong->path =  'slide/'.str_replace(' ','',$this->vn_str_filter($dataSong->name)).'_'.Str::random(2);
        $dataSong->short_lyrics = $payload->short_lyrics;
        $dataSong->save();
        return $dataSong;
    }
    public function vn_str_filter($str){
        $unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd'=>'đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i'=>'í|ì|ỉ|ĩ|ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
            'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'D'=>'Đ',
            'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
            'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );

        foreach($unicode as $nonUnicode=>$uni){
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
        }
        return $str;
    }
}
