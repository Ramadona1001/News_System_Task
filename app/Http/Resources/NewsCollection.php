<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class NewsCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'date' => $this->created_at,
            'title' => $this->title,
            'short description' => $this->short_desc,
            'text' => $this->content
        ];
        //return parent::toArray($request);
    }
}
