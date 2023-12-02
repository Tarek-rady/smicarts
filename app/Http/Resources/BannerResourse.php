<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BannerResourse extends JsonResource
{

    public function toArray($request)
    {

        return [
            'id' => $this->id ,
            'name' => $this->name ,
            'img' => url('Attachments/banners/'.$this->img) ,
            'company_id' => $this->company_id ,
            'category_id' => $this->category_id ,
            'url' => $this->url ,
            'banner_type' => $this->banner_type ,

            'company' =>new CompanyResourse($this->company),
            'category' => new DefultResource($this->category) ,


        ];
    }
}
