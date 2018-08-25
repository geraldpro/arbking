<?php
/**
 * Returns application constants
 */
return [
	'pwc_merchant_key' => '57b4b58df07f191100e37908',
	'type' => [
		'card' => 0,
		'withdrawal' => 1,
		'deposit' => 2,
		'transfer' => 3,
	],
	't_text' => [
		'0' => ['name' => 'Credit/Debit Card', 'value' => 'card'],
		'1' => 'withdrawal',
		'2' => ['name' => 'Bank Deposit', 'value' => 'deposit'],
		'3' => ['name' => 'Online Transfer', 'value' => 'transfer'],
	],
	'resolve_status' => [
		'default' => 0,
		'resolved' => 1,
	],
	'status' => [
		'pending' => 0,
		'confirmed' => 1,
		'cancelled' => 2
	],
	'status_text' => [
		'0' => 'pending',
		'1' => 'confirmed',
		'2'   => 'cancelled',
	],	
	'roles' => [
		'admin'     => 1,
		'senior'   => 2,
		'junior'    => 3,
		'user' => 4,
	],
	'role_name' => [
		'1'     => 'admin',
		'2'   => 'senior',
		'3'    => 'junior',
		'4' => 'user',
	],
	'account_status' => [
		'inactive' => 1,
		'active' => 2,
		'shielded' => 3,
		'semi-active' => 4
	],
	'confirmation_status' => [
		'pending' => 0,
		'confirmed' => 1,
	],
	'withdrawal_status' => [
		'pending' => 0,
		'paid' => 1,
		'cancelled' => 5,
	],
	'stake_status' => [
		'inactive' => 0,
		'disabled' => 1,
		'staked'   => 2,
		'lost'	   => 3,
		'won'      => 4,
		'cancelled' => 5,
	],
	'stake_text' => [
		'0' => 'inactive',
		'1' => 'disabled',
		'2'   => 'pending',
		'3'	   => 'lost',
		'4'      => 'won',
		'5' => 'cancelled',
	],
	'withdrawal_text' => [
		'0' => 'pending',
		'1' => 'paid',
		'2'   => 'cancelled',
	],
	'confirmation_text' => [
		'0' => 'pending',
		'1' => 'confirmed',
	],
	'funding_text' => [
		'2' => ['name' => 'Bank Deposit', 'value' => 'deposit'],
		'3' => ['name' => 'Online Transfer', 'value' => 'transfer'],
		'0' => ['name' => 'Credit/Debit Card', 'value' => 'card'],
	],
	'funding_type' => [
		'deposit' => 2,
		'transfer' => 3,
		'card'   => 0,
	],	
];