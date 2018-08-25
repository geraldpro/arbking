<?php

use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       DB::table('matches')->insert(array(

           array(
               'id' => 1,
               'home_team' => 'manchester united',
               'away_team' => 'tontenham hotspur',
               'league' => 'bercklay premiership',
               'selected_market' => 'home win',
               'selected_odd' => '2.25'
              ),

              array(
                  'id' => 2,
                  'home_team' => 'Ac Milan',
                  'away_team' => 'Juventus',
                  'league' => 'Italian',
                  'selected_market' => 'both team to score',
                  'selected_odd' => '2.42'
                 ),
                 array(
                     'id' => 3,
                     'home_team' => 'Real Madrid',
                     'away_team' => 'Athletico Madrid',
                     'league' => 'Spanish League',
                     'selected_market' => 'Away win',
                     'selected_odd' => '2.32',
                    ),
                    array(
                        'id' => 4,
                        'home_team' => 'Real Madrid',
                        'away_team' => 'Bercelonia',
                        'league' => 'Spanish League',
                        'selected_market' => 'Home win',
                        'selected_odd' => '2.29'
                       ),
         ));
     }

}
