<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id'         => $this->id,
            'title'      => $this->title  ,
            'summary'    => $this->summary ,
            'content'    => $this->content ,
            'pinned'     => $this->pinned ,
            'author'     => $this->author ,
            'img'        => '/images/articles/'.$this->img,
            'created_at' => $this->created_at,
        ];
    }
}
