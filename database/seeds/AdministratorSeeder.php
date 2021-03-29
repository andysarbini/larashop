<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator ->username = "administrator";
        $administrator ->name = "Site Administrator";
        $administrator ->email = "administrator@larashop.test";
        $administrator ->roles = json_encode(["Admin"]);
        $administrator ->password = \Hash::make("larashop");
        $administrator ->avatar = "saat-ini-tidak-ada-file.png";
        $administrator ->address = "Sarmili, Bintaro, Tangerang Selatan";
        $administrator ->save();

        $this->command->info("User Admin berhasil di insert");
    }
}
