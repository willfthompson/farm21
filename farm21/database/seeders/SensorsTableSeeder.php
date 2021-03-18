<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sensor;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $sensor = new Sensor;
        $sensor->name = "Sensor 1";
        $sensor->long = '52.39733888301664';
        $sensor->lat = '4.874127686380618';
        $sensor->status = 'Connected';
        $sensor->save();

        $sensor = new Sensor;
        $sensor->name = "Sensor 2";
        $sensor->long = '52.355903488756866';
        $sensor->lat = '4.930541483624561';
        $sensor->status = 'Connected';
        $sensor->save();


   

    }
}
