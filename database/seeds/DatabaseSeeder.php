<?php

use App\Model\Distributor;
use App\Model\Listings;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class,5)->create();
        factory(\App\Model\BookGenresParent::class,100)->create();
        factory(\App\Model\BookGenres::class,100)->create();
        factory(\App\Model\BookLanguage::class,5)->create();
        factory(\App\Model\Author::class,50)->create();
        factory(App\Model\Distributor::class,10)->create();
        factory(\App\Model\Book::class,100)->create();
        factory(\App\AuthorBook::class,100)->create();
        factory(\App\Model\Listings::class,100)->create();
        factory(\App\Model\HelpModel\BookGenreKey::class,300)->create();

    }
}
