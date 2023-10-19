<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'md emon hossen',
            'email' => 'mdemon@gmail.com',
            'password' => Hash::make(123456),
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
        User::create([
            'name' => 'mst fatema jinnat',
            'email' => 'fatema@gmail.com',
            'password' => Hash::make(123456),
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
        User::create([
            'name' => 'md rimon hossen',
            'email' => 'mdrimon@gmail.com',
            'password' => Hash::make(123456),
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
        User::create([
            'name' => 'md rifat hossen',
            'email' => 'mdrifat@gmail.com',
            'password' => Hash::make(123456),
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
        User::create([
            'name' => 'md alamin hossen',
            'email' => 'mdalamin@gmail.com',
            'password' => Hash::make(123456),
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
        User::create([
            'name' => 'md shohag hossen',
            'email' => 'mdshohag@gmail.com',
            'password' => Hash::make(123456),
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
        User::create([
            'name' => 'md rafin hossen',
            'email' => 'mdrafin@gmail.com',
            'password' => Hash::make(123456),
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
        User::create([
            'name' => 'md ridoy hossen',
            'email' => 'mdridoy@gmail.com',
            'password' => Hash::make(123456),
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
        User::create([
            'name' => 'md hadi hossen',
            'email' => 'mdhadi@gmail.com',
            'password' => Hash::make(123456),
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
        User::create([
            'name' => 'md mahdi hossen',
            'email' => 'mdmahdi@gmail.com',
            'password' => Hash::make(123456),
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
        User::create([
            'name' => 'md akash hossen',
            'email' => 'mdakash@gmail.com',
            'password' => Hash::make(123456),
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
        User::create([
            'name' => 'md rashel hossen',
            'email' => 'mdrashel@gmail.com',
            'password' => Hash::make(123456),
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
        User::create([
            'name' => 'md munna hossen',
            'email' => 'mdmunna@gmail.com',
            'password' => Hash::make(123456),
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
        User::create([
            'name' => 'md rima hossen',
            'email' => 'mdrima@gmail.com',
            'password' => Hash::make(123456),
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
        User::create([
            'name' => 'md asma hossen',
            'email' => 'mdasma@gmail.com',
            'password' => Hash::make(123456),
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
    }
}
