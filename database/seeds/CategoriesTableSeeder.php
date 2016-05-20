<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function alias($str){
        $rep = array( 'a' => 'A|a|Ă|ă|Â|â||Á|á|À|à|Ả|ả|Ã|ã|Ạ|ạ|Ắ|ắ|Ằ|ằ|Ẵ|ẵ|Ẳ|ẳ|Ặ|ặ|Ấ|ấ|Ẫ|ầ|Ầ|ẫ|Ậ|ậ|Ẩ|ẩ',
                      'd' => 'D|Đ|đ',
                      'i' => 'I|Í|í|Ì|ì|Ĩ|ĩ|Ỉ|ỉ|Ị|ị',
                      'e' => 'E|e|Ê|ê|É|é|È|è|Ẻ|ẻ|Ẽ|ẽ|Ẹ|ẹ|Ế|ế|Ề|ề|Ể|ễ|Ễ|ể|Ệ|ệ',
                      'o' => 'O|Ô|ô|Ơ|ơ|Ó|ó|Ò|ò|Õ|õ|Ỏ|ỏ|Ọ|ọ|Ố|ố|Ồ|ồ|Ổ|ỗ|Ỗ|ổ|Ộ|ộ|Ớ|ơ|Ờ|ờ|Ỡ|ỡ|Ở|ở|Ợ|ợ',
                      'u' => 'U|Ư|ư|Ú|ù|Ù|ũ|Ũ|ủ|Ủ|ú|Ụ|ụ|Ứ|ứ|Ừ|ừ|Ử|ử|Ữ|ữ|Ự|ự',
                      'y' => 'Y|Ý|ý|Ỳ|ỳ|Ỹ|ỹ|Ỷ|ỷ|Ỵ|ỵ' 
            );
        foreach ($rep as $key => $value) {
            $str = str_replace($value , $key, $str);
        }
        $str = strtolower($str);
        $str = preg_replace('/[_\.?\$=\|\'\"\#]+/', '', $str);
        $str = preg_replace('/\s/', '-', $str);
        return $str;
    }

    public function run()
    {
        $faker = Faker\Factory::create();
        for( $i = 0; $i < 10; $i++){
            Category::create([
                'catename' => $faker->sentence,
                'alias' => $this->alias($faker->sentence),
                'description' => $faker->sentence,
                'status' => '0',
                ]);
        }
    }
}
