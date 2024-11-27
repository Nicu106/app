<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InstagramPost extends Component
{
    public $username;
    public $profilePic;
    public $postImage;
    public $description;
    public $likes;
    public $price;

    public function __construct($username, $profilePic, $postImage, $description, $likes, $price)
    {
        $this->username = $username;
        $this->profilePic = $profilePic;
        $this->postImage = $postImage;
        $this->description = $description;
        $this->likes = $likes;
        $this->price = $price;
    }

    public function render()
    {
        return view('components.instagram-post');
    }
}
