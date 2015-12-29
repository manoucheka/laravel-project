<?php 
class UsersTableSeeder extends Seeder {
  public function run(){
  $user = new User;
  $user->firstname ='Marcellus';
  $user->lastname ='Jeanbernard';
$user->email ='marcellus@jeanbernard.com';
 $user->password =Hash::make('welcome123!');
$user->telephone = '50947433859';
$user->admin =1;
$user->save();

   }

}
