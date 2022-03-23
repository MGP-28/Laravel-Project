<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function PHPUnit\Framework\lessThanOrEqual;

class AudiController extends Controller
{
    public function index()
    {
       return view('audi.index',[
           'imagesCarousel' => ['https://i.pinimg.com/originals/d7/40/90/d74090219d43026afe3e20fbe6035607.jpg' ,
                                'https://wallpapersmug.com/download/1600x900/4730bb/off-road-audi-rs7.jpg',
                                'https://eskipaper.com/images/audi-wallpaper-95.jpg'],
           'imagesCard' => ['https://www.teahub.io/photos/full/41-417289_wallpaper-audi-rs5-tuning-audi-wallpaper-4k.jpg',
               'https://images.hdqwalls.com/download/audi-rs6-4k-zx-2560x1440.jpg',
               'https://wallpapersmug.com/download/1600x900/d060a3/black-audi-rs6-avant.jpg',
               'https://data.1freewallpapers.com/download/audi-r8-v10-performance-spyder-1-4k-5k-cars-2560x1440.jpg',
               'https://www.wallpaperflare.com/static/710/605/96/audi-a6-2018-cars-4k-red-wallpaper.jpg',
               'https://www.pixel4k.com/wp-content/uploads/2018/11/audi-r8-spyder-v10-2019-front_1541968954.jpg'
           ],
           'titles' => [ 'Title 1','Title 2','Title 3','Title 4','Title 5','Title 6'
           ],
           'descriptions' => [ 'Desc 1','Desc 2','Desc 3','Desc 4','Desc 5','Desc 6'
           ],
           'imagesText' => ['https://i.pinimg.com/originals/d7/40/90/d74090219d43026afe3e20fbe6035607.jpg',
                            'https://wallpapersmug.com/download/1600x900/4730bb/off-road-audi-rs7.jpg'
            ],
           'texts' => [ 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, cumque debitis dolor ducimus expedita facilis fuga inventore laudantium, nesciunt nihil obcaecati officia qui quisquam repellat temporibus voluptate voluptates! Vitae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid animi autem commodi dolorem, eveniet illo molestiae, neque non qui quo rem sed suscipit ullam veritatis? Quaerat sed temporibus tenetur!',
                        'Corporis ea ex facere id laboriosam libero magnam molestiae nam nesciunt nisi, nobis officiis pariatur perferendis porro quibusdam rerum suscipit voluptatem. Consectetur! Ab assumenda atque blanditiis commodi consequatur culpa expedita hic incidunt iste necessitatibus nihil non, nostrum officiis sapiente similique soluta tempora ullam, voluptas.'
           ],
           'isTextLeftArray' => [true, false]
       ]);
    }
}
