<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Mixed Drinks
        $product = new \App\Product([
            'imagePath' => 'http://www.prohibitionjunction.com/pj/wp-content/uploads/2016/11/Moscow-Mule-200x200.jpg',
            'title' => 'Moscow Mule',
            'description' => 'A cocktail made with vodka, spicy ginger beer, and lime juice, garnished with a slice or wedge of lime.',
            'price' => '6.00'  ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://static.wixstatic.com/media/78e446_dac6fc8741ec43f8bae1d14643af3c05~mv2.jpg/v1/fill/w_200,h_200,al_c,q_90/file.jpg',
            'title' => 'Sex on the Beach',
            'description' => 'A refreshing cocktail made with Smirnoff Vodka, peach schnapps, cranberry, and orange juice.',
            'price' => '7.00',
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://mmac-geckowebdevelopm1.netdna-ssl.com/images/cocktails/6777/200_200_screwdriver.jpg',
            'title' => 'Screwdriver',
            'description' => 'This is a delicious, citrus cocktail made with Florida Orange Juice and Smirnoff Vodka.',
            'price' => '6.00'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://mmac-geckowebdevelopm1.netdna-ssl.com/images/cocktails/7385/200_200_sourapplemartini.jpg',
            'title' => 'Apple Martini',
            'description' => 'A crisp cocktail made with Smirnoff vodka, apple juice, and apple brandy.',
            'price' => '7.00'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://www.recipe4living.com/assets/itemimages/200/200/3/default_7ab82206f4a671670fcd6a671c1b56f4_shirley%20temple%20dreamstimesmall_57474255.jpg',
            'title' => 'Dirty Shirley',
            'description' => 'An elegant drink with ginger ale, Smirnoff Vodka, and a splash of grenadine.',
            'price' => '6.00'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://i.pinimg.com/736x/ab/35/5d/ab355d53451dd1ee9172b8088e7cc22f--cocktail-recipes-drink-recipes.jpg',
            'title' => 'Crown and Coke',
            'description' => 'Drink like a King with Crown Royal Whisky and Coca Cola on the rocks.',
            'price' => '5.00'
        ]);
        $product->save();

        //SHOTS

        $product = new \App\Product([
            'imagePath' => 'https://www.birthdaycakes1.net/wp-content/uploads/2017/07/simple-birthday-cake-shot-2014-12-18-stiehl-boozy-birthday-cocktails-white-chocolate-cake-shots-lxrQEa-1-200x200.jpg',
            'title' => 'Chocolate Cake',
            'description' => 'This shot tastes just like chocolate cake. Made with Smirnoff Vanilla Vodka and Frangelico Hazelnut liqueur with a sprinkles rim.',
            'price' => '6.00'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://b.zmtcdn.com/data/reviews_photos/1fd/8920c2ed9b5c4f679879ac983bec31fd.jpg?fit=around%7C200%3A200&crop=200%3A200%3B%2A%2C%2A',
            'title' => 'Frootloop',
            'description' => 'This shot is a delicious mix made from Rum Chata, Pinnacle Whipped Vodka and Three Olives Loopy Vodka.',
            'price' => '6.00'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://s-media-cache-ak0.pinimg.com/236x/c3/bc/b4/c3bcb41dda7ad4b4a969e556d0d0e3cd--cocktail-drinks-summer-cocktails.jpg',
            'title' => 'Lemon Drop',
            'description' => 'Made with Smirnoff Lemon Vodka, Triple Sec and fresh-squeezed lemon juice served with a sugar rim and lemon slice.',
            'price' => '6.00'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://i.pinimg.com/236x/a5/b3/cd/a5b3cd79d6bfb3f0bda81b2f484ba056--bushmills-weed.jpg',
            'title' => 'Vegas Bomb',
            'description' => 'A delicious shot with Crown Royal Whisky, DeKuyper butterscoth liqueur and Red Bull energy drink.',
            'price' => '6.00'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://lh4.googleusercontent.com/-SDm4X-mTjZw/TX8raixyzaI/AAAAAAAAAhc/9lOr_vP2-FE/s200/jager-bomb-shot-200X200.jpg',
            'title' => 'Yager Bomb',
            'description' => 'This shot packs a punch. Made with Yager Meister and Red Bull energy drink.',
            'price' => '6.00'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://www.robbendranken.nl/media/catalog/product/cache/1/small_image/210x/9df78eab33525d08d6e5fb8d27136e95/s/m/smirnoff_red_robben_dranken.jpg',
            'title' => 'Smirnoff Vodka',
            'description' => 'Flavors: Green Apple, Strawberry, Tropical Fruit, Ice Peach Bellini, Lemon, Vanilla and Mango.',
            'price' => '5.00'
        ]);
        $product->save();

        //Beers


        $product = new \App\Product([
            'imagePath' => 'https://www.brandsoftheworld.com/sites/default/files/styles/logo-thumbnail/public/0020/3129/brand.gif?itok=a5h-X32-',
            'title' => 'Bud Light',
            'description' => '12oz',
            'price' => '4.00'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://media.licdn.com/mpr/mpr/shrink_200_200/AAEAAQAAAAAAAAffAAAAJDBiYTFlNDllLWM2MWMtNDYzMS1hMzU0LTE1OGZjNTZiOGI4OQ.png',
            'title' => 'Heineken',
            'description' => '12oz',
            'price' => '4.00'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.brandsoftheworld.com/sites/default/files/styles/logo-thumbnail/public/0010/7406/brand.gif?itok=ghm2fdkJ',
            'title' => 'Michelob',
            'description' => '12oz',
            'price' => '4.00'
        ]);
        $product->save();


    }
}
