<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanksTableSeeder extends Seeder {

	public function run()
	{
        $data[] = [
            'id' => 1,
            'name' => 'First Bank PLC',
            'nibss_id' => '011'
        ];
        $data[] = [
            'id' => 2,
            'name' => 'Union Bank of Nigeria PLC',
            'nibss_id' => '032'
        ];
        $data[] = [
            'id' => 3,
            'name' => 'Zenith Bank PLC',
            'nibss_id' => '057'
        ];
        $data[] = [
            'id' => 4,
            'name' => 'Fidelity Bank PLC',
            'nibss_id' => '070'
        ];
        $data[] = [
            'id' => 5,
            'name' => 'United Bank for Africa PLC',
            'nibss_id' => '033'
        ];
        $data[] = [
            'id' => 6,
            'name' => 'Skye Bank PLC',
            'nibss_id' => '076'
        ];
        $data[] = [
            'id' => 7,
            'name' => 'Keystone Bank PLC',
            'nibss_id' => '082'
        ];
        $data[] = [
            'id' => 8,
            'name' => 'Stanbic IBTC Bank PLC',
            'nibss_id' => '221'
        ];
        $data[] = [
            'id' => 9,
            'name' => 'GuarantyTrust Bank PLC',
            'nibss_id' => '058'
        ];
        $data[] = [
            'id' => 10,
            'name' => 'Diamond Bank PLC',
            'nibss_id' => '063'
        ];
        $data[] = [
            'id' => 11,
            'name' => 'Access Bank PLC',
            'nibss_id' => '044'
        ];
        $data[] = [
            'id' => 12,
            'name' => 'Standered Chartered Bank Nigeria LTD',
            'nibss_id' => '068'
        ];
        $data[] = [
            'id' => 13,
            'name' => 'Wema Bank PLC',
            'nibss_id' => '035'
        ];
        $data[] = [
            'id' => 14,
            'name' => 'Ecobank Nigeria PLC',
            'nibss_id' => '050'
        ];
        $data[] = [
            'id' => 15,
            'name' => 'Unity Bank PLC',
            'nibss_id' => '215'
        ];
        $data[] = [
            'id' => 16,
            'name' => 'Heritage Bank PLC',
            'nibss_id' => '030'
        ];
        $data[] = [
            'id' => 17,
            'name' => 'Afribank Nigeria PLC',
            'nibss_id' => '014'
        ];
        $data[] = [
            'id' => 18,
            'name' => 'Enterprise Bank LTD',
            'nibss_id' => '084'
        ];
        
         DB::table('banks')->insert($data);
    }

}