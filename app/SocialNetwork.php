<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    public function show_social_networks()
    {
        return SocialNetwork::all();
    }
}
