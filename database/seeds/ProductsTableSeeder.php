<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Analogue
        for ($i=1; $i <= 30; $i++) {
            Product::create([
                'name' => 'Analogue '.$i,
                'slug' => 'analogue-'.$i,
                'details' => 'High skill watcher for everybody',
                'price' => 25999,
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);//->categories()->attach(1);
        }

        // Make Laptop 1 a Desktop as well. Just to test multiple categories
        //$product = Product::find(1);
        //$product->categories()->attach(2);

        // Digitals
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Digital ' . $i,
                'slug' => 'digital-' . $i,
                'details' => 'High skill watcher for everybody',
                'price' => 25999,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);//->categories()->attach(2);
        }

        // clocks
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Clock ' . $i,
                'slug' => 'clock-' . $i,
                'details' => 'High skill watcher for everybody',
                'price' => 25999,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);//->categories()->attach(3);
        }

        // Dualtimes
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Dualtime ' . $i,
                'slug' => 'dualtime-' . $i,
                'details' => 'High skill watcher for everybody',
                'price' => 25999,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);//->categories()->attach(4);
        }

        // Pockets
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Pocket ' . $i,
                'slug' => 'pocket-' . $i,
                'details' => 'High skill watcher for everybody',
                'price' => 25999,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);//->categories()->attach(5);
        }

        // Sports
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Sport ' . $i,
                'slug' => 'sport-' . $i,
                'details' => 'High skill watcher for everybody',
                'price' => 25999,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);//->categories()->attach(6);
        }

        // Gold
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Gold ' . $i,
                'slug' => 'gold-' . $i,
                'details' => 'High skill watcher for everybody',
                'price' => 25999,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);//->categories()->attach(7);
        }

        // Select random entries to be featured and onsale
        Product::whereIn('id', [1, 12, 22, 31, 41, 43, 47, 51, 53, 61])->update(['featured' => true]);
        // Select random entries to be featured
        Product::whereIn('id', [4, 13, 24, 30, 14, 45, 49, 55, 59, 62])->update(['onsale' => true]);
    }
}