<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\FileUpload\InputFile;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramBotController extends Controller
{
    //
    public function updatedActivity()
    {

        try
        {
            $this->response = Telegram::sendPhoto([

                // $this->item->channel->username like a @channel_username
                'chat_id' => $this->item->channel->username,

                // storage_path() . '/images/' . $this->item->photo->name
                // output like a
                // /home/vagrant/code/project/storage/app/images/10XiNsijJ9aCI5ZBLEMC81jLzeTWD7RC.jpg
                'photo'   => storage_path() . '/images/' . $this->item->photo->name,

                // $this->item->message_for_photo_caption returns text with
                // str_limit(strip_tags($text), 200, "")
                'caption' => $this->item->message_for_photo_caption,
            ]);
        }
        catch (\Exception $e)
        {
            $this->telegram_error_message = $e->getMessage();
            $this->telegram_error_code    = $e->getCode();

            $this->response =  false;
        }
    }
}
