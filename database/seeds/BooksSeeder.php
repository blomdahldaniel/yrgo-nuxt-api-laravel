<?php

use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
          [
            'user_id'           => 1,
            'title'             => 'Miljonär innan 30 och pensionär innan 40',
            'author'            => 'Bloggaren Miljonär innan 30',
            'image_path'        => 'https://sternersforlag.se/wp-content/uploads/2017/04/Ska%CC%88rmklipp-2017-04-18-15.08.39-e1492521113943.png',
            'vendor_link'       => 'https://sternersforlag.se/produkt/miljonar-innan-30-och-pensionar-innan-40/',
            'description'       => 'Det kan väl inte vara möjligt. Jodå, och det levande beviset är författaren till denna bok. De första miljonerna är redan klara och om ett par år går han i mål som 40-åring med friheten att göra vad han vill resten av livet.',
            'started_at'        => null,
            'finished_at'       => null,
            'created_at'        => '2018-05-07',
        ],
        [
            'user_id'           => 1,
            'title'             => 'Den enkla vägen bli rik och fri med aktier',
            'author'            => 'Marcus Hernhag & Arne Kavastu Talving',
            'image_path'        => 'https://sternersforlag.se/wp-content/uploads/2018/04/Herhag-o-Talving-omslag-la%CC%8Ag.jpg',
            'vendor_link'       => 'https://sternersforlag.se/produkt/den-enkla-vagen-bli-rik-och-fri-med-aktier/',
            'description'       => 'Två börsgiganter i samma bok – Marcus Hernhag och Arne ´Kavastu´ Talving. De har en sak gemensamt. De började med två tomma händer men med en stark vilja att förändra sin ekonomi. I dag har de byggt upp rejäla förmögenheter på aktiemarknaden – eller ett liv i frihet om du så vill.',
            'started_at'        => null,
            'finished_at'       => null,
            'created_at'        => '2018-05-07',
        ],
        [
            'user_id'           => 1,
            'title'             => "Willpower Doesn't Work: Discover the Hidden Keys to Success",
            'author'            => 'Benjamin Hardy',
            'image_path'        => 'https://images-na.ssl-images-amazon.com/images/I/51Un6IHaKML._SX329_BO1,204,203,200_.jpg',
            'vendor_link'       => 'https://www.amazon.com/Willpower-Doesnt-Work-Discover-Success/dp/0316441325',
            'description'       => "We rely on willpower to create change in our lives...but what if we're thinking about it all wrong? In Willpower Doesn't Work, Benjamin Hardy explains that willpower is nothing more than a dangerous fad-one that is bound to lead to failure. Instead of \"white-knuckling\" your way to change, you need to instead alter your surroundings to support your goals. This book shows you how.",
            'started_at'        => '2018-02-18',
            'finished_at'       => null,
            'created_at'        => '2018-02-18',
        ],
        [
            'user_id'           => 1,
            'title'             => "Beer For Dummies ",
            'author'            => 'Marty Nachel, Steve Ettlinger',
            'image_path'        => 'https://images-na.ssl-images-amazon.com/images/I/51FA8ZkoydL._SX396_BO1,204,203,200_.jpg',
            'vendor_link'       => 'https://www.amazon.com/Beer-Dummies-Marty-Nachel/dp/1118120302',
            'description'       => "Beer has always been one of the world's most popular beverages; but recently, people have embraced the rich complexities of beer's many varieties. Now, with Beer For Dummies you can quickly and enjoyably educate your palate—from recognizing the characteristics of ales, lagers, and other beer styles to understanding how to taste and evaluate beer.",
            'started_at'        => null,
            'finished_at'       => null,
            'created_at'        => '2018-02-18',
        ],
        [
            'user_id'           => 1,
            'title'             => "Eloquent JavaScript - 1a utgåvan",
            'author'            => 'Marijn Haverbeke',
            'image_path'        => 'https://campusbokhandeln.se/images/books/9781593275846.jpg',
            'vendor_link'       => 'https://campusbokhandeln.se/b/9781593275846/eloquent-javascript?utm_source=kelkoose&utm_medium=cpc&utm_campaign=kelkooclick&utm_term=Pagina+F%C3%B6rlags+AB+Eloquent+JavaScript',
            'description'       => "This is a book about JavaScript, programming, and the wonders of the digital.",
            'started_at'        => '2015-08-18',
            'finished_at'       => null,
            'created_at'        => '2015-08-18',
        ],
        [
            'user_id'           => 1,
            'title'             => 'Jag är Zlatan',
            'author'            => 'Zlatan Ibrahimovic, David Lagercrantz',
            'image_path'        => 'https://s2.adlibris.com/images/284584/jag-ar-zlatan-ibrahimovic-min-historia.jpg',
            'vendor_link'       => 'https://www.adlibris.com/se/bok/jag-ar-zlatan-ibrahimovic-min-historia-9789175032849',
            'description'       => 'I Jag är Zlatan Ibrahimovic ger han en helt ny och skakande bild av uppväxten i Rosengård. Med sina egna ord berättar han om papporna från den fina sidan av stan som försöker få honom utslängd från Malmö FF.',
            'started_at'        => '2013-01-23',
            'finished_at'       => '2013-05-07',
            'created_at'        => '2013-01-23',
        ],
        [
            'user_id'           => 1,
            'title'             => 'Stora boken med norgehistorier och annat kjempeskoj',
            'author'            => 'Marianne Lilliér',
            'image_path'        => 'https://image.bokus.com/images/9789155234577_200x_stora-boken-med-norgehistorier-och-annat-kjempeskoj',
            'vendor_link'       => 'https://www.bokus.com/bok/9789155234577/stora-boken-med-norgehistorier-och-annat-kjempeskoj/',
            'description'       => ' Vet du varför norrmännen visslar när dom går på toa?\n - Nej.\n
- För att dom ska veta vilken ände dom ska torka sej i.\n\n Det är aldrig fel med en rolig historia, särskilt inte om den handlar om våra grannar i väster. I denna samling, med 666 vitsar, hittar du bästa dråpligheterna om Ole, Vegard, Bjarne och deras landsmän och landsmaninnor. Dessutom innehåller boken en rad andra roliga historier - om familjeliv, skolvärlden, läkarbesök och mycket annat. Illustrationer av humormästarna Jonas Darnell och Henrik Lange.',
            'started_at'        => null,
            'finished_at'       => null,
            'created_at'        => '2013-01-23',
        ],
        [
            'user_id'           => 1,
            'title'             => 'Kallocain',
            'author'            => 'Karin Boye',
            'image_path'        => 'https://s2.adlibris.com/images/481048/kallocain.jpg',
            'vendor_link'       => 'https://www.adlibris.com/se/bok/kallocain-9789174290875',
            'description'       => 'Kallocain är en framtidvision över ett polisstyrt och militariserat övervakningssamhälle. Med sin sanningsdroghar kemisten Leo Kall funnit en väg in till medborgarnas själar.',
            'started_at'        => '2009-10-12',
            'finished_at'       => '2009-12-02',
            'created_at'        => '2009-10-12',
        ],
        [
            'user_id'           => 1,
            'title'             => '1984',
            'author'            => 'George Orwell',
            'image_path'        => 'https://s2.adlibris.com/images/30669255/1984.jpg',
            'vendor_link'       => 'https://www.adlibris.com/se/bok/1984-9788205508163',
            'description'       => '984 er utpekt som en av de hundre beste bøkene på engelsk gjennom tidene. Winston Smith jobber for Sannhetsdepartementet i London, viktigste by i Flystripe Én, den mest folkerike provinsen i Oceania. Overalt rundt ham er det plakater av Storebror, og tankepolitiet er parat til å avsløre ethvert svik mot Partiet, hvis slagord lyder: KRIG ER FRED, FRIHET ER SLAVERI, UVITENHET ER STYRKE.',
            'started_at'        => '2010-01-14',
            'finished_at'       => '2010-03-10',
            'created_at'        => '2010-01-14',
        ],
      ]);
    }
}
