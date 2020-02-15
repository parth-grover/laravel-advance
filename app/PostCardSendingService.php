<?php
namespace App;

class PostCardSendingService
{
    private $country;
    private $width;
    private $height;

    public function __construct($country,$width,$height)
    {
        $this->country = $country;
        $this->width = $width;
        $this->height = $height;
    }


    public function hello($message,$email)
    {
        dd('Mail sent with Message'.$message.' to '. $email);
    }

}

