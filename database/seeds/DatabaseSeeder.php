<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
//use HomeMusic\User;
//use HomeMusic\Albums;
//use HomeMusic\Songs;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
		 $this->call('UserTableSeeder');
                $this->command->info('User table seeded.');
		$this->call('AlbumTableSeeder');
		$this->command->info('Album table seeded ');
		$this->call('SongTableSeeder');
		$this->command->info('Song table seeded ');
	}

}

class SongTableSeeder extends Seeder 
{
	public function run()
	{
		DB::table('songs')->truncate();
		DB::table('songs')->insert([
		'name' => 'Motion Is Beautiful',
		'file_name' => '1 - Mount Pagan - Motion Is Beautiful.mp3', 
		'album_id' => '1', 
		'song_length' => '2:00',
		]);

		DB::table('songs')->insert([
                'name' => 'A Very Narrow Field',
                'file_name' => '2 - Mount Pagan - A Very Narrow Field.mp3',
                'album_id' => '1',
                'song_length' => '2:59',
                ]);


		DB::table('songs')->insert([
                'name' => 'Gimme All Your Fate',
                'file_name' => '3 - Mount Pagan - Gimme All Your Fate.mp3',
                'album_id' => '1',
                'song_length' => '',
                ]);


		DB::table('songs')->insert([
                'name' => 'Box Of Justifications',
                'file_name' => '4 - Mount Pagan - Box Of Justifications.mp3',
                'album_id' => '1',
                'song_length' => '',
                ]);


		DB::table('songs')->insert([
                'name' => 'Living Through It',
                'file_name' => '5 - Mount Pagan - Living Through It.mp3',
                'album_id' => '1',
                'song_length' => '',
                ]);


		DB::table('songs')->insert([
                'name' => 'Accusations Happen All The Time',
                'file_name' => '6 - Mount Pagan - Accusations Happen All The Time.mp3',
                'album_id' => '1',
                'song_length' => '',
                ]);


		DB::table('songs')->insert([
                'name' => 'Disco Fairness',
                'file_name' => '7 - Mount Pagan - Disco Fairness.mp3',
                'album_id' => '1',
                'song_length' => '',
                ]);


		DB::table('songs')->insert([
                'name' => 'Plenty Of Musings',
                'file_name' => '8 - Mount Pagan - Plenty Of Musings.mp3',
                'album_id' => '1',
                'song_length' => '',
                ]);


		DB::table('songs')->insert([
                'name' => 'Bleeding Prison',
                'file_name' => '9 - Mount Pagan - Bleeding Prison.mp3',
                'album_id' => '1',
                'song_length' => '',
                ]);
		
		DB::table('songs')->insert([
                'name' => 'Find a New One',
                'file_name' => '10 - Mount Pagan - Find a New One.mp3',
                'album_id' => '1',
                'song_length' => '',
                ]);


		DB::table('songs')->insert([
                'name' => 'Motion Is Beautiful',
                'file_name' => '11 - Mount Pagan - Motion Is Beautiful.mp3',
                'album_id' => '1',
                'song_length' => '',
                ]);


		DB::table('songs')->insert([
                'name' => 'Lock Up The Unity',
                'file_name' => '12 - Mount Pagan - Lock Up The Unity.mp3',
                'album_id' => '1',
                'song_length' => '',
                ]);


		DB::table('songs')->insert([
                'name' => 'Screaming Emotion',
                'file_name' => '13 - Mount Pagan - Screaming Emotion.mp3',
                'album_id' => '1',
                'song_length' => '',
                ]);

		DB::table('songs')->insert([
                'name' => 'Lessons In Wisdom',
                'file_name' => '1 - Lita Rosa - Lessons In Wisdom.mp3',
                'album_id' => '2',
                'song_length' => '',
                ]);


		DB::table('songs')->insert([
                'name' => 'I\'ve Only Got One Heart',
                'file_name' => '1 - Tomtenisse - I\'ve Only Got One Heart.mp3',
                'album_id' => '3',
                'song_length' => '',
                ]);


		DB::table('songs')->insert([
                'name' => 'Solutions Only Make You Stronger',
                'file_name' => '1 - Anacetin - Solutions Only Make You Stronger.mp3',
                'album_id' => '4',
                'song_length' => '',
                ]);


		DB::table('songs')->insert([
                'name' => 'By First Name',
                'file_name' => '1 - Fort Worth Marathon - By First Name.mp3',
                'album_id' => '5',
                'song_length' => '',
                ]);


		DB::table('songs')->insert([
                'name' => 'Troubled Injuries',
                'file_name' => '2 - Fort Worth Marathon - Troubled Injuries.mp3',
                'album_id' => '5',
                'song_length' => '',
                ]);

		DB::table('songs')->insert([
                'name' => 'Friendly Truth',
                'file_name' => '1 - Federal Register - Friendly Truth.mp3',
                'album_id' => '6',
                'song_length' => '',
                ]);

		DB::table('songs')->insert([
                'name' => 'Raw Tears',
                'file_name' => '1 - Loda Niemirzanka - Raw Tears.mp3',
                'album_id' => '7',
                'song_length' => '',
                ]);


		DB::table('songs')->insert([
                'name' => 'Secrets Of The Adoration',
                'file_name' => '2 - Loda Niemirzanka - Secrets Of The Adoration.mp3',
                'album_id' => '7',
                'song_length' => '',
                ]);

		DB::table('songs')->insert([
                'name' => '2D Passion',
                'file_name' => '3 - Loda Niemirzanka - 2D Passion.mp3',
                'album_id' => '7',
                'song_length' => '',
                ]);

	}
}

class AlbumTableSeeder extends Seeder 
{
	public function run()
	{
		DB::table('albums')->truncate();

		DB::table('albums')->insert([
		'album_name' => 'Hillcrest',
		'artist_name' => 'Mount Pagan', 
		'logo' => '1269'
		]);	

		DB::table('albums')->insert([
                'album_name' => 'Magic Party',
                'artist_name' => 'Lita Rosa',
                'logo' => '1134',
                ]);

		DB::table('albums')->insert([
                'album_name' => 'Pay Attention',
                'artist_name' => 'Tomtenisse',
                'logo' => '1294',
                ]);

		DB::table('albums')->insert([
                'album_name' => 'More Mojo',
                'artist_name' => 'Anacetin',
                'logo' => '134',
                ]);

		DB::table('albums')->insert([
                'album_name' => 'First Name',
                'artist_name' => 'Fort Worth Marathon',
                'logo' => '935',
                ]);

		DB::table('albums')->insert([
                'album_name' => 'A Touch of Your Punk',
                'artist_name' => 'Loda Niemirzanka',
                'logo' => '1239',
                ]);

		DB::table('albums')->insert([
                'album_name' => 'Disco Girl',
                'artist_name' => 'Federal Register',
                'logo' => '1235',
                ]);
	}
}

class UserTableSeeder extends Seeder
{
        public function run()
        {
                DB::table('users')->truncate();
//              User::create(['email' => 'foo@bar.com']);

                DB::table('users')->insert([
                'name' => 'admin',
                'password' => Hash::make('admin159'),
                ]);

		for($x=0; $x<20; $x++)
                {
                        $type='club';
                        if($x>10)
                        {
                                $type='judge';
                        }
                        $username=$type.$x;
                         DB::table('users')->insert([
                            'name' => $username,
                            'email' => $username.'@test.com',
                            'password' => Hash::make($username),
                        ]);

                }


	}
}
