<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $user=new User();
        $user->name='administrador';
        $user->email='admin@correo.local';
        $user->email_verified_at=now();//En caso de que no requieras validar el correo.
        $user->password=Hash::make('1234567890');
        if(config('app.env') == 'production'){
            $user->email='tu@correo.com';
            $user->password=Hash::make('SuperContra');
        }
        $user->save();
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }
}
    

