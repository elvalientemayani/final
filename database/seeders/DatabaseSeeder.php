<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Sale;
use App\Models\Stock;
use App\Models\Supplier;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);  

        User::create([
            'name'=>'admin',
            'email'=>'admin@example.com',
            'password'=>bcrypt('password'),
            'role'=>'admin',
        ]);

        User::create([
            'name'=>'cashier',
            'email'=>'cashier@example.com',
            'password'=>bcrypt('password'),
            'role'=>'cashier',
        ]);

        User::create([
            'name'=>'cashier2',
            'email'=>'cashier2@example.com',
            'password'=>bcrypt('password'),
            'role'=>'cashier',
        ]);

        
        Product::factory(20)->create();
        Purchase::factory(20)->create();
        Category::factory(20)->create();
        Sale::factory(20)->create();
        Order::factory(20)->create();
        Customer::factory(20)->create();
        Stock::factory(20)->create();
        Supplier::factory(20)->create();

    }
}
