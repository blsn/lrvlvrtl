<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Post extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [ // return specific fields
            'id'        => $this->id,
            'title'     => $this->title,
            'body'      => $this->body,
            'user_id'   => $this->user_id
        ];            
    }

    public function with($request) { // get additional data 
        return [
            'version' => '1.0.0',
            'author_url' => url('http://mysite.com')
        ];
    }    
}
