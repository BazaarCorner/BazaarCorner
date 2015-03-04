<?php

namespace BazaarCorner;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    
    public function merchant()
    {
        $this->belongsTo("BazaarCorner\Merchant");
    }
    
    public function scopeRecentlyAdded($query)
    {
//        $query->where();
        //sample output
        return [
            [
                'name' => 'Striped Appeal',
                'logo' => 'img/recent_stuff/1st_item.jpg',
                'current_price' => 10,
                'last_price' => 35
            ],
            [
                'name' => 'Nikon Camera',
                'logo' => 'img/recent_stuff/2nd_item.jpg',
                'current_price' => 210,
                'last_price' => 350
            ],
            [
                'name' => 'Sala Set',
                'logo' => 'img/recent_stuff/3rd_item.jpg',
                'current_price' => 500,
                'last_price' => 650
            ],
            [
                'name' => 'Province Art Canvas',
                'logo' => 'img/recent_stuff/4th_item.jpg',
                'current_price' => 180,
                'last_price' => 240
            ],
            [
                'name' => 'Water Based Adhesive',
                'logo' => 'img/recent_stuff/5th_item.jpg',
                'current_price' => 20,
                'last_price' => 55
            ],
            [
                'name' => '3-days Boracay Escapade',
                'logo' => 'img/recent_stuff/6th_item.jpg',
                'current_price' => 280,
                'last_price' => 550
            ],
            [
                'name' => 'Striped Appeal',
                'logo' => 'img/recent_stuff/1st_item.jpg',
                'current_price' => 10,
                'last_price' => 35
            ],
            [
                'name' => 'Nikon Camera',
                'logo' => 'img/recent_stuff/2nd_item.jpg',
                'current_price' => 210,
                'last_price' => 350
            ],
            [
                'name' => 'Sala Set',
                'logo' => 'img/recent_stuff/3rd_item.jpg',
                'current_price' => 500,
                'last_price' => 650
            ],
            [
                'name' => 'Province Art Canvas',
                'logo' => 'img/recent_stuff/4th_item.jpg',
                'current_price' => 180,
                'last_price' => 240
            ],
            [
                'name' => 'Water Based Adhesive',
                'logo' => 'img/recent_stuff/5th_item.jpg',
                'current_price' => 20,
                'last_price' => 55
            ],
            [
                'name' => '3-days Boracay Escapade',
                'logo' => 'img/recent_stuff/6th_item.jpg',
                'current_price' => 280,
                'last_price' => 550
            ],
            [
                'name' => 'Striped Appeal',
                'logo' => 'img/recent_stuff/1st_item.jpg',
                'current_price' => 10,
                'last_price' => 35
            ],
            [
                'name' => 'Nikon Camera',
                'logo' => 'img/recent_stuff/2nd_item.jpg',
                'current_price' => 210,
                'last_price' => 350
            ],
            [
                'name' => 'Sala Set',
                'logo' => 'img/recent_stuff/3rd_item.jpg',
                'current_price' => 500,
                'last_price' => 650
            ],
            [
                'name' => 'Province Art Canvas',
                'logo' => 'img/recent_stuff/4th_item.jpg',
                'current_price' => 180,
                'last_price' => 240
            ],
            [
                'name' => 'Water Based Adhesive',
                'logo' => 'img/recent_stuff/5th_item.jpg',
                'current_price' => 20,
                'last_price' => 55
            ],
            [
                'name' => '3-days Boracay Escapade',
                'logo' => 'img/recent_stuff/6th_item.jpg',
                'current_price' => 280,
                'last_price' => 550
            ],
            [
                'name' => 'Striped Appeal',
                'logo' => 'img/recent_stuff/1st_item.jpg',
                'current_price' => 10,
                'last_price' => 35
            ],
            [
                'name' => 'Nikon Camera',
                'logo' => 'img/recent_stuff/2nd_item.jpg',
                'current_price' => 210,
                'last_price' => 350
            ],
            [
                'name' => 'Sala Set',
                'logo' => 'img/recent_stuff/3rd_item.jpg',
                'current_price' => 500,
                'last_price' => 650
            ]            
        ];
    }


    public function halfPriced()
    {
//        return $this->table->where('');
        
        //sample output
        return [
            [
                'name' => 'Fujitsu Laptop Tablet',
                'category' => 'Gadgets',
                'logo' => 'img/half_price/fujitsu_laptop.jpg',
                'current_price' => 300,
                'description' => "Lifebook T4220 Computer PC C2D Slate<br>Touchscreen Windows"
            ],
            [
                'name' => 'Vans Casual Men',
                'category' => 'Fashion',
                'logo' => 'img/half_price/vans.jpg',
                'current_price' => 35,
                'description' => "Era VN-0QFK7OT Pop Charcoal Red Canvas<br>Casual Shoes Men"
            ],
            [
                'name' => 'All Crystal Chandeliers',
                'category' => 'Homewares',
                'logo' => 'img/half_price/chandeliers.jpg',
                'current_price' => 100,
                'description' => "Fashion All Crystal Venetian Style Chandeliers<br>6 Lights Fixture Hallway 110V ER9"
            ],
            [
                'name' => 'Vans Casio G-Shock',
                'category' => 'Fashion',
                'logo' => 'img/half_price/g-shock.jpg',
                'current_price' => 45,
                'description' => "G Shock 1289 Classic Series DW-6900MS"
            ]
        ];
    }
}
