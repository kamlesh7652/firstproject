<?php

namespace Database\Seeders;
Use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\AssignOp\Concat;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'test',
            'email'=>'test@gmail.com',
            'password'=>bcrypt('password')
        ]);
        Contact::create([
            'user_id'=>1,
            'phoneno'=>'5568987896',
            'address'=>'Address test'
        ]);
    }
}
