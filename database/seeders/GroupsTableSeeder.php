<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
            // Data untuk seeding
            $data = [];

            // Sparta groups (101-110)
            for ($i = 101; $i <= 110; $i++) {
                $data[] = [
                    'id' => $i,
                    'group_name' => 'Sparta '.($i-100)
                ];
            }

            // Ninja groups (201-210)
            for ($i = 201; $i <= 210; $i++) {
                $data[] = [
                    'id' => $i,
                    'group_name' => 'Ninja '.($i-200)
                ];
            }

            // Apache groups (301-310)
            for ($i = 301; $i <= 310; $i++) {
                $data[] = [
                    'id' => $i,
                    'group_name' => 'Apache '.($i-300)
                ];
            }

            // Musketeer groups (401-410)
            for ($i = 401; $i <= 410; $i++) {
                $data[] = [
                    'id' => $i,
                    'group_name' => 'Musketeer '.($i-400)
                ];
            }

            // Insert data ke dalam tabel groups
            DB::table('group')->insert($data);
        }
    }

