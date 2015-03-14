<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use BazaarCorner\ProductCategory;
use BazaarCorner\MainCategory;

abstract class AbstractTableSeeder extends Seeder
{
    protected $table;
    
    /**
     * 
     * @throws \Exception
     */
    public function run()
    {
        $table = DB::table($this->table);
        
        // Truncate table records
        $table->delete();
        
        if (empty($this->insertRows())) {
            throw new \Exception("Cannot insert empty row values");
        }
        
        $table->insert($this->insertRows());
    }
    
    /**
     * Provide default data
     * 
     * @return Array
     */
    abstract protected function insertRows();
}


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        $this->call('BazaarCategoryTableSeeder');
        $this->call('CategoryTableSeeder');
        $this->call('MainCategoryTableSeeder');
        $this->call('ShoppingCategoryTableSeeder');
        
        
        $this->call('BrandTableSeeder');
        
//        $this->call('ProductStoreCategoryTableSeeder');        
//        $this->call('ProductSubcategoryTableSeeder');
//        $this->call('BrandTableSeeder');
        
//        $this->call('UserTableSeeder');
//        $this->call('MerchantTableSeeder');
//        $this->call('CategoryTableSeeder');
    }
}

/**
 * Default store categories
 */
class BazaarCategoryTableSeeder extends AbstractTableSeeder
{
    protected $table = 'bazaar_categories';
    
    protected function insertRows()
    {
        return [
            ['store_id'=>'BC01', 'name'=>'Arts and Design', 'slug'=>'arts_and_design', 'is_active'=> true],
            ['store_id'=>'BC02', 'name'=>'Automobiles, Boats and Airplanes', 'slug'=>'automobiles-comma-_boats_and_airplanes', 'is_active'=> true],
            ['store_id'=>'BC03', 'name'=>'Pampered Kids', 'slug'=>'pampered_kids', 'is_active'=> true],
            ['store_id'=>'BC04', 'name'=>'Books and Media', 'slug'=>'books_and_media', 'is_active'=> true],
//            ['store_id'=>'BC05', 'name'=>'DIY', 'slug'=>'do_it_yourself', 'is_active'=> true],
            ['store_id'=>'BC06', 'name'=>'Fashion', 'slug'=>'fashion', 'is_active'=> true],
            ['store_id'=>'BC06-100', 'name'=>'Fashion Men', 'slug'=>'fashion/men', 'is_active'=> false],
            ['store_id'=>'BC06-200', 'name'=>'Fashion Women', 'slug'=>'fashion/women', 'is_active'=> false],
            ['store_id'=>'BC06-300', 'name'=>'Fashion Kids', 'slug'=>'fashion/kids', 'is_active'=> false],
            ['store_id'=>'BC07', 'name'=>'Gadgets and Electronics', 'slug'=>'gadgets_and_electronics', 'is_active'=> true],
            ['store_id'=>'BC08', 'name'=>'Homewares', 'slug'=>'homewares', 'is_active'=> true],
            ['store_id'=>'BC09', 'name'=>'Toys', 'slug'=>'toys', 'is_active'=> true],
            ['store_id'=>'BC10', 'name'=>'Sporting Equipment', 'slug'=>'sporting_equipment', 'is_active'=> true],
            ['store_id'=>'BC11', 'name'=>'Travel and Tours', 'slug'=>'travel_and_tours', 'is_active'=> true]
        ];
    }
}


/**
 * Default product categories
 */
class CategoryTableSeeder extends AbstractTableSeeder
{
    protected $table = 'categories';
    
    protected function insertRows()
    {
        return [
            ['name'=>'Men', 'slug'=> 'men', 'is_active' => true],
            ['name'=>'Women', 'slug'=> 'women', 'is_active' => true],
            ['name'=>'Art', 'slug'=> 'art', 'is_active' => true],
            ['name'=>'Design', 'slug'=> 'design', 'is_active' => true],
            ['name'=>'Automobile', 'slug'=> 'automobile', 'is_active' => true],
            ['name'=>'Auto', 'slug'=> 'auto', 'is_active' => true],
            ['name'=>'Mobile', 'slug'=> 'mobile', 'is_active' => true],
            ['name'=>'Boat', 'slug'=> 'boat', 'is_active' => true],
            ['name'=>'Fashion', 'slug'=> 'fashion', 'is_active' => true],
            ['name'=>'Kid', 'slug'=> 'kid', 'is_active' => true],
            ['name'=>'Adult', 'slug'=> 'adult', 'is_active' => true],
            ['name'=>'Todler', 'slug'=> 'todler', 'is_active' => true],
            ['name'=>'Teen', 'slug'=> 'teen', 'is_active' => true],
            ['name'=>'Accessory', 'slug'=> 'accessory', 'is_active' => true],
        ];
    }
}


class MainCategoryTableSeeder extends AbstractTableSeeder
{
    protected $table = 'main_categories';
    
    protected function insertRows()
    {
        return [
            // Fashion
            ['name'=>'Clothing', 'slug'=> 'clothing', 'is_active' => true],
            ['name'=>'Accessories', 'slug'=> 'accessories', 'is_active' => true],
            ['name'=>'Shoes', 'slug'=> 'shoes', 'is_active' => true],
            ['name'=>'Bags', 'slug'=> 'bags', 'is_active' => true],
            ['name'=>'Sports', 'slug'=> 'sports', 'is_active' => false],
//            ['name'=>'DIY', 'slug'=> 'design', 'is_active' => false],
        ];
    }
}

class ShoppingCategoryTableSeeder extends AbstractTableSeeder
{
    protected $table = 'shopping_categories';
    
    protected function getStoreCategoriesMapping()
    {
        return [
            // FASHION Men
            [
                'store_id' => 'BC06-100',
                'categories' => [
                    ['name' => 'Clothing', 'is_active' => true],
                    ['name' => 'Accessories', 'is_active' => true],
                    ['name' => 'Shoes', 'is_active' => true],
                ]
            ],
            // FASHION Women
            [
                'store_id' => 'BC06-200',
                'categories' => [
                    ['name' => 'Clothing', 'is_active' => true],
                    ['name' => 'Accessories', 'is_active' => true],
                    ['name' => 'Shoes', 'is_active' => true],
                ]
            ],
            // FASHION Kids
            [
                'store_id' => 'BC06-300',
                'categories' => [
                    ['name' => 'Clothing', 'is_active' => true],
                    ['name' => 'Accessories', 'is_active' => true],
                    ['name' => 'Shoes', 'is_active' => true],
                ]
            ],
            
            //APPEND OTHER STORES HERE
            
        ];
    }

    
    protected function insertRows()
    {
        $store_categories = [];
        // Loops every category per store
        foreach ($this->getStoreCategoriesMapping() as $store) {     
            
            foreach ($store['categories'] as $category) {
        
                $category_id = MainCategory::where('name', $category['name'])->first()->main_category_id;
                
                // Append category listing information
                $store_categories[] = [
                    'store_id' => $store['store_id'],
                    'main_category_id' => $category_id,
                    'store_shopping_category_id' => $store['store_id'].'_'. "MCXXX-" .$category_id,
                    'is_active' => $category['is_active']
                ];
            }
        }
        
        return $store_categories;
    }    
}


class ProductStoreCategoryTableSeeder extends AbstractTableSeeder
{
    protected $table = 'product_store_categories';
    
    protected function getStoreCategoriesMapping()
    {
        return [
            // FASHION
            [
                'store_id' => 'BC06',
                'categories' => [
                    ['name' => 'Men', 'is_active' => true],
                    ['name' => 'Women', 'is_active' => true],
                ]
            ]
            
            //APPEND OTHER STORES HERE
            
        ];
    }

    
    protected function insertRows()
    {
        $store_categories = [];
        // Loops every category per store
        foreach ($this->getStoreCategoriesMapping() as $store) {     
            
            foreach ($store['categories'] as $category) {
        
                $category_id = ProductCategory::where('name', $category['name'])->first()->category_id;
                
                // Append category listing information
                $store_categories[] = [
                    'store_id' => $store['store_id'],
                    'category_id' => $category_id,
                    'product_store_category_id' => $store['store_id'].'_'. "CXX-" .$category_id,
                    'is_active' => $category['is_active']
                ];
            }
        }
        
        return $store_categories;
    }
}


class SubcategoryTableSeeder extends AbstractTableSeeder
{
    protected $table = 'subcategories';
    
    protected function insertRows()
    {
        return [
            ['name'=>'Fashion Men', 'slug'=>'fashion/men', 'is_active'=>true],
            ['name'=>'Fashion Women', 'slug'=>'fashion/women', 'is_active'=>true]
        ];
    }
}


class BrandTableSeeder extends AbstractTableSeeder
{
    protected $table = 'brands';
    
    protected function insertRows()
    {
        return [
            ['name'=>'Ray Ban', 'slug'=>'ray_ban', 'is_active'=>true, 'image' => 'assets/img/sample/logo/ray-ban.jpg'],
            ['name'=>'Alchemist London', 'slug'=>'alchemist_london', 'is_active'=>true, 'image' => 'assets/img/sample/logo/Alchemist-London.gif'],
            ['name'=>'Ambiance Design', 'slug'=>'ambiance_design', 'is_active'=>true, 'image' => 'assets/img/sample/logo/Ambiance-Design.gif'],
            ['name'=>'Bee Charming', 'slug'=>'bee_charming', 'is_active'=>true, 'image' => 'assets/img/sample/logo/Bee-Charming.gif'],
            ['name'=>'BOSS', 'slug'=>'boss', 'is_active'=>true, 'image' => 'assets/img/sample/logo/boss.jpg'],
            ['name'=>'Chanel', 'slug'=>'chanel', 'is_active'=>true, 'image' => 'assets/img/sample/logo/chanel.jpg'],
            ['name'=>'Fuzzy Ink', 'slug'=>'fuzzy_ink', 'is_active'=>true, 'image' => 'assets/img/sample/logo/Fuzzy-Ink.gif'],
            ['name'=>'Good Art HLYWD', 'slug'=>'good_art_hlywd', 'is_active'=>true, 'image' => 'assets/img/sample/logo/Good-Art-HLYWD.gif'],
            ['name'=>'Hearts', 'slug'=>'hearts', 'is_active'=>true, 'image' => 'assets/img/sample/logo/Hearts.gif'],
            ['name'=>'Heartstrings', 'slug'=>'heartstrings', 'is_active'=>true, 'image' => 'assets/img/sample/logo/heartstrings.png'],
            ['name'=>'Jet Setter', 'slug'=>'jetsetter', 'is_active'=>true, 'image' => 'assets/img/sample/logo/jetsetter.gif'],
            ['name'=>'Louis Vuitton', 'slug'=>'louis_vuitton', 'is_active'=>true, 'image' => 'assets/img/sample/logo/louis-vuitton.jpg'],
            ['name'=>'Nike', 'slug'=>'nike', 'is_active'=>true, 'image' => 'assets/img/sample/logo/nike.jpg'],
            ['name'=>'Paul Smith', 'slug'=>'paul_smith', 'is_active'=>true, 'image' => 'assets/img/sample/logo/paul-smith.jpg'],
            ['name'=>'Paul Prada', 'slug'=>'prada', 'is_active'=>true, 'image' => 'assets/img/sample/logo/prada.jpg'],
        ];
    }
}


class MerchantTableSeeder extends AbstractTableSeeder
{
    protected $table = 'merchants';
    
    protected function insertRows()
    {
        return [
            ['name'=>"21dgrs",'username'=>'21dgrs','password'=>Hash::make('password')],
            ['name'=>"25togo Design",'username'=>'25togo_design','password'=>Hash::make('password')],
            ['name'=>"2Flamingos",'username'=>'2flamingos','password'=>Hash::make('password')],
            ['name'=>"2times",'username'=>'2times','password'=>Hash::make('password')],
            ['name'=>"3 D Intelligent Interior",'username'=>'3_d_intelligent_interior','password'=>Hash::make('password')],
        ];
    }
}


class ProductSubcategoryTableSeeder extends AbstractTableSeeder
{
    protected $table = 'product_subcategories';
    
    protected function insertRows()
    {
        return [];
    }
}


class BrandsTableSeeder extends AbstractTableSeeder
{
    protected $table = 'brands';
    
    protected function insertRows()
    {
        return [
            ['name' => '21dgrs', 'slug' => '21dgrs', 'is_active' => true],
            ['name' => '43 Cycles', 'slug' => '43_cycles', 'is_active' => true],
            ['name' => 'Accessorability', 'slug' => 'accessorability', 'is_active' => true],
            ['name' => 'Accessory Artists', 'slug' => 'accessory_artists', 'is_active' => true],
            ['name' => 'Always Fits', 'slug' => 'always_fits', 'is_active' => true],
            ['name' => 'Alyssa Nicole', 'slug' => 'alyssa_nicole', 'is_active' => true],
            ['name' => 'Anti-Anti', 'slug' => 'anti-minus-anti', 'is_active' => true],
            ['name' => 'Apolis', 'slug' => 'apolis', 'is_active' => true],
            ['name' => 'ASTALI', 'slug' => 'astali', 'is_active' => true],
            ['name' => 'Vvego International', 'slug' => 'vvego_international', 'is_active' => true],
            
            
            ['name' => '25togo Design', 'slug' => '25togo_design', 'is_active' => true],
            ['name' => '2Flamingos', 'slug' => '2flamingos', 'is_active' => true],
            ['name' => '3 D Intelligent Interior', 'slug' => '3_d_intelligent_interior', 'is_active' => true],
            ['name' => '360 DEGREES Weblog', 'slug' => '360_degrees_weblog', 'is_active' => true],
            ['name' => 'A + R Store', 'slug' => 'a_-plus-_r_store', 'is_active' => true],
            ['name' => 'AAA Sports Memorabilia', 'slug' => 'aaa_sports_memorabilia', 'is_active' => true],
            ['name' => 'Abe Lincoln Jr', 'slug' => 'abe_lincoln_jr', 'is_active' => true],
            ['name' => 'AllPopArt', 'slug' => 'allpopart', 'is_active' => true],
            ['name' => 'Alrightok', 'slug' => 'alrightok', 'is_active' => true],
            ['name' => 'Ambiance Design', 'slug' => 'ambiance_design', 'is_active' => true],
            ['name' => 'Amika', 'slug' => 'amika', 'is_active' => true],
            ['name' => 'Another Studio', 'slug' => 'another_studio', 'is_active' => true],
            ['name' => 'Anyes Galleani', 'slug' => 'anyes_galleani', 'is_active' => true],
            ['name' => 'ANYGIVENNAME', 'slug' => 'anygivenname', 'is_active' => true],
            ['name' => 'Archello', 'slug' => 'archello', 'is_active' => true],
            ['name' => 'AREAWARE', 'slug' => 'areaware', 'is_active' => true],
            ['name' => 'Art. Lebedev Studio', 'slug' => 'art-dot-_lebedev_studio', 'is_active' => true],
            ['name' => 'Artbird', 'slug' => 'artbird', 'is_active' => true],
            ['name' => 'Artspace', 'slug' => 'artspace', 'is_active' => true],
            ['name' => 'Arwey', 'slug' => 'arwey', 'is_active' => true],
            ['name' => 'ASHKAHN', 'slug' => 'ashkahn', 'is_active' => true],
            ['name' => 'Atypyk', 'slug' => 'atypyk', 'is_active' => true],
            ['name' => 'UrbanWalls', 'slug' => 'urbanwalls', 'is_active' => true],
            ['name' => 'URT Clothing', 'slug' => 'urt_cloting', 'is_active' => true],
            ['name' => 'Yanko Design', 'slug' => 'yanko_design', 'is_active' => true],
            ['name' => 'ycollective', 'slug' => 'ycollective', 'is_active' => true],
            
                        
            ['name' => '2times', 'slug' => '2times', 'is_active' => true],
            ['name' => '3ANDIT', 'slug' => '3andit', 'is_active' => true],
            ['name' => '4649worldwide', 'slug' => '4649worldwide', 'is_active' => true],
            ['name' => '80s Purple', 'slug' => '80s_purple', 'is_active' => true],
            ['name' => 'A Better Tomorrow', 'slug' => 'a_better_tomorrow', 'is_active' => true],
            ['name' => 'A Fancy Mess', 'slug' => 'a_fancy_mess', 'is_active' => true],
            ['name' => 'a.louise', 'slug' => 'a-dot-_louise', 'is_active' => true],
            
//            ['name' => 'A.P.C.', 'slug' => '', 'is_active' => true],
//            ['name' => 'A8 New York', 'slug' => '', 'is_active' => true],
//            ['name' => 'Abaci', 'slug' => '', 'is_active' => true],
//            ['name' => 'Abbacino', 'slug' => '', 'is_active' => true],
//            ['name' => 'Acapulco Gold', 'slug' => '', 'is_active' => true],
//            ['name' => 'Acne', 'slug' => '', 'is_active' => true],
//            ['name' => 'ACRIMONY', 'slug' => '', 'is_active' => true],
//            ['name' => 'Activist Eyewear', 'slug' => '', 'is_active' => true],
//            ['name' => 'Adore Me', 'slug' => '', 'is_active' => true],
//            ['name' => 'Adorn', 'slug' => '', 'is_active' => true],
//            ['name' => 'African Lookbook', 'slug' => '', 'is_active' => true],
//            ['name' => 'After Eleven Apparel', 'slug' => '', 'is_active' => true],
//            ['name'=>'After Hours Agenda', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Agent Provocateur', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Agnès B.', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'AHAlife', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'AKSEL PARIS', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>"Al Duca d'Aosta", 'slug'=> '', 'is_active'=>true],
//            ['name'=>'Albam Clothing', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Alberto Guardiani', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Alchemist', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Alene Too', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Alexa Leigh', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Alexander McQueen', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'alexandra ferguson', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Alice + Olivia', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'ALKEMi Apparel', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'All Bodyboarders Clothing', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'alphabowties', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Altadena Works', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'American Apparel', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Ames Bros', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Ames Soles', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Amongst Friends', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Amour Vert | eco-fashion', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'ampersand AS apostrophe', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Angara.com', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'angelrox', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Ani Lee', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Aniika', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'ANKR', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'AnOther Magazine', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Anthem Wares', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Anthropologie', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Apliiq', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Archiduchesse', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Argento', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'ARIELLE DE PINTO', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Arm the Animals', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Arquebus Clothing', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Arriquitaun', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'BAGGU', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Balsamroot Ranch Jewelry', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Barrett Alley', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Bassdrop Clothing', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Beardhead', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Unotre', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Up There', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Urban Boulder', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Urban Cricket', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Urban Outfitters', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Urbantrait', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'V Nunes', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'V Nunes', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'V Nunes', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Vaya Bags', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Victoria Desemone Accessories', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>"Victoria's Secret", 'slug' => '', 'is_active'=>true],
//            ['name'=>'ViewSPORT', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Vim Beget', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Vintage Frames Company', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Vintage Style Me', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'vivre', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Vogmask', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Vogue', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Volcom', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Volga Verdi', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'VoyVoy Clothing', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Vrients', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Wanted Wallets', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Warby Parker', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'warmi', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'We Are All Smith', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'We Are Selecters', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Wellen', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'What Goes Around Comes Around', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'White Collar Crime Clothing', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Wholesale-dress.net', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Wicked Clothes', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Wicked Quick', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Wildfox Couture', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'winterfiber', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Wolsey', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Wolves Vs Lions', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Wood Wood', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Woodwear Sunglasses', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Woolrich', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Woouf', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'WORDS BRAND', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'WorldofWatches.com', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Woven Society', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'WrecordsByMonkey', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Wrong Weather', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Wysiwatch', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'YLANG | 23', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Yosi Samra', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'You Organic Skincare', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Young & Fierce', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'YOURS shoes/footwear', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Zappos', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Zeugari', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Zonkey Boot', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Zoo Uniform', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'zuzii', 'slug'=> ' ', 'is_active'=>true],
//            /*GADGETS AND ELECTRONICS*/
//            ['name'=>'AC Gears', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Applydea', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Astrojax', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Audiowood', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'AViiQ', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Valentine Goods', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Walnut Studiolo', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'werd', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Wishlantern', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'X-Mini', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Yofo', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Zero Gravity', 'slug'=> ' ', 'is_active'=>true],
//            /*HOMEWARES*/
//            ['name'=>'Aesthetic Correlation', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Aether', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Alessi', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Analogue Life', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Apartment 528', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'apartment therapy', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'BBQs 2U', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'BDDW', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Veinticuatrodientes', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Vertigo Home', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Vetted', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Victory', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Villains Attic', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Vinyl Impression', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Wannekes', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'west elm', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Wheatpaste Art Collective', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'WhiteyBoard', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Wicker Paradise', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'WineCaddys.com', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Wintercheck Factory', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Woodies', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Workerman', 'slug'=> ' ', 'is_active'=>true],
//            ['name'=>'Yube Cube', 'slug'=> ' ', 'is_active'=>true],
            
            // Append brands here
        ];
    }
}


class MerchantsTableSeeder extends AbstractTableSeeder
{
    protected $table = 'merchants';
    
    protected function insertRows()
    {
        return [
            ['name'=>"21dgrs",'username'=>'21dgrs','password'=>Hash::make('password')],
            ['name'=>"25togo Design",'username'=>'25togo_design','password'=>Hash::make('password')],
            ['name'=>"2Flamingos",'username'=>'2flamingos','password'=>Hash::make('password')],
            ['name'=>"2times",'username'=>'2times','password'=>Hash::make('password')],
            ['name'=>"3 D Intelligent Interior",'username'=>'3_d_intelligent_interior','password'=>Hash::make('password')],
            
            
//            ['name'=>"360 DEGREES Weblog",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"360INTEREST",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"3ANDIT",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"43 Cycles",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"4649 Worldwide",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"604 Republic",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"80s Purple",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"A + R Store",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"A Better Tomorrow",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"A Fancy Mess",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"a.louise",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"A.P.C.",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"A8 New York",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"AAA Sports Memorabilia",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Abaci",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Abbacino",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Abe Lincoln Jr",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"AC Gears",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Acapulco Gold",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Accessorability",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Accessory Artists",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"ACRIMONY",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"ActiveDogToys.com",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Activist Eyewear",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Adore Me",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Adorn",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Aesthetic Correlation",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Aether",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"African Lookbook",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"After Eleven Apparel",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"After Hours Agenda",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Agent Provocateur",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Agnès B.",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"AHAlife",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"AKSEL PARIS",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Al Duca d'Aosta",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Albam Clothing",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Alberto Guardiani",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Alchemist",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Alene Too",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Alessi",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Alexa Leigh",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Alexander McQueen",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"alexandra ferguson",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Alfred Julius",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Alice + Olivia",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"ALKEMi Apparel",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"All Bodyboarders Clothing",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"All Saints",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"AllPopArt",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"alphabowties",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Alrightok",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Altadena Works",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Always Fits",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Alyssa Nicole",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Amazon",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Ambiance Design",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"American Apparel",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"American Express",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Ames Bros",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Ames Soles",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"amika",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Amongst Friends",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Amour Vert | eco-fashion",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"ampersand AS apostrophe",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Analogue Life",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Anax Clothing",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Angara.com",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"angelrox",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Ani Lee",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Aniika",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"ANKR",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"AnOther Magazine",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Another Studio",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Anthem Wares",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Anthropologie",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Anti-Anti",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Anyes Galleani",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"ANYGIVENNAME",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Apartment 528",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"apartment therapy",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Apliiq",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Apolis",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Applydea",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Archello",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Archiduchesse",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"AREAWARE",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Argento",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"ARIELLE DE PINTO",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Arm the Animals",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Arquebus Clothing",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Arriquitaun",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Art. Lebedev Studio",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Artbird",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Artspace",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Arwey",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"ASHKAHN",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"ASTALI",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Astrojax",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Atypyk",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"AudioCubes",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Audiowood",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"August Man",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"AViiQ",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"awesomobile",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Axis Maps",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Aylio Fitness",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"b!POP Ventures",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"B&H Photo",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"BAGGU",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Bakerella",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Balsamroot Ranch Jewelry",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"BAM! It's Bernie",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Bamarang UK",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"barley & birch",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Barrett Alley",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Basic Needs",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Bassdrop Clothing",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"BBQs 2U",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"BDDW",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Be A Headcase",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Beardhead",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Unotre",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"uNu",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Up There",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Upon a Fold",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Urban Boulder",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Urban Cricket",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Urban Mercenaries",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Urban Outfitters",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"UrbanDaddy",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Urbantrait",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"UrbanWalls",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"URT Clothing",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"V Nunes",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Valentine Goods",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Vaya Bags",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Veda",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Veinticuatridientes",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Veinticuatrodientes",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Velocity Clip",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Velvet Radical",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Vertigo Home",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Vetted",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"via Licentia",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Vicious History",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Victoria Desemone Accessories",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Victoria's Secret",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"VICTORY BRAND",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Viento",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"ViewSPORT",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Villains Attic",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Vim Beget",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Vintage Frames Company",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Vintage Mavens",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Vintage Style Me",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Vinyl Impression",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Viparo",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"virtual FUN ZONE",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"VITAband",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Vivarati",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Vivienne Kelly",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"vivre",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"vkoo",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Vogmask",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Vogue",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Volcom",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Volga Verdi",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Volvo",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"VoyVoy Clothing",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Vrients",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Vusion",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Vvego International",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Wall Sushi",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Walnut Studiolo",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Wanderlust",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Wannekes",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Wanted Wallets",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Warby Parker",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"warmi",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"We Are All Smith",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"We Are Selecters",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Wellen",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"werd",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"west elm",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"What Goes Around Comes Around",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Wheatpaste Art Collective",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"White Collar Crime Clothing",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"WhiteyBoard",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Wholesale-dress.net",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Wicked Clothes",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Wicked Quick",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Wicker Paradise",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Wildfox Couture",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Williams-Sonoma",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"WineCaddys.com",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Wintercheck Factory",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"winterfiber",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Wipit",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Wishful Thinking Studios",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Wishlantern",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Wolsey",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Wolves Vs Lions",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Wood Wood",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Woodies",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Woodwear Sunglasses",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Woolrich",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Woouf",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"WORDS BRAND",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Workerman",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"WorldofWatches.com",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Woven Society",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"WRDBNR",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"WrecordsByMonkey",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Wren",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Wrong Weather",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"www.theloyalsubjects.com",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"WYMAKEIT",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Wysiwatch",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"X-Mini",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Yanko Design",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"ycollective",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"YLANG | 23",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Yofo",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Yosi Samra",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"You Organic Skincare",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Young & Fierce",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"YOURS shoes/footwear",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Yube Cube",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Yves Saint Laurent",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Zagat",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Zappos",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Zero Gravity",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Zeugari",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Zonkey Boot",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"Zoo Uniform",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
//            ['name'=>"zuzii",'username'=>uniqid('user_'),'password'=>Hash::make('password')],
        ];
    }
}



//
//class UserTableSeeder extends AbstractTableSeeder
//{
//    protected $table = 'users';
//    
//    protected function insertRows()
//    {
//        return [
//            []
//        ];
//    }
//}
//
