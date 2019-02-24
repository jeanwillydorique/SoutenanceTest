<?php

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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => "admin",
            'email' => "admin@admin.com",
            'password' => bcrypt('admin'),
            'role_id' => 1,
            'job_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => "employee",
            'email' => "employee@employee.com",
            'password' => bcrypt('employee'),
            'role_id' => 2,
            'job_id' => 2,
        ]);
        DB::table('roles')->insert([
            'name' => "admin",
        ]);
        DB::table('roles')->insert([
            'name' => "employe",
        ]);
        DB::table('jobs')->insert([
            'name' => "webmaster",
        ]);
        DB::table('jobs')->insert([
            'name' => "vendeur",
        ]);
        DB::table('authors')->insert([

            ['name' => "J.K. Rowling"],
            ['name' => "Michel Houellebecq"],
            ['name' => "Guillaume Musso"],
        ]);
        DB::table('author_book')->insert([

            ['author_id' => 1, 'book_id' => 1],
            ['author_id' => 1, 'book_id' => 2],
            ['author_id' => 1, 'book_id' => 3],
            ['author_id' => 2, 'book_id' => 4],
            ['author_id' => 3, 'book_id' => 5],

        ]);
        DB::table('categories')->insert([
            ['name' => "Fantastique"],
            ['name' => "Politique"],
            ['name' => "Thriller"],
        ]);
        DB::table('book_category')->insert([

            ['book_id' => 1, 'category_id' => 1],
            ['book_id' => 2, 'category_id' => 1],
            ['book_id' => 3, 'category_id' => 1],
            ['book_id' => 4, 'category_id' => 2],
            ['book_id' => 5, 'category_id' => 3],
            
        ]);
        DB::table('creators')->insert([
            ['name' => "Pottermore Publishing"],
            ['name' => "FLAMMARION"],
            ['name' => "Calmann-Lévy"],
            ['name' => "Monopoly"],
            ['name' => "Dujardin"],
            ['name' => "Hasbro Gaming"],
        ]);
        DB::table('book_creator')->insert([

            ['book_id' => 1, 'creator_id' => 1],
            ['book_id' => 2, 'creator_id' => 1],
            ['book_id' => 3, 'creator_id' => 1],
            ['book_id' => 4, 'creator_id' => 2],
            ['book_id' => 5, 'creator_id' => 3],
            
        ]);

        DB::table('creator_game')->insert([

            ['creator_id' => 4, 'game_id' => 2],
            ['creator_id' => 5, 'game_id' => 3],
            ['creator_id' => 6, 'game_id' => 1],
            
        ]);

        DB::table('classes')->insert([
            ['name' => "3 ans"],
            ['name' => "7 ans"],
            ['name' => "12 ans"],
            ['name' => "18 ans"],
        ]);
        DB::table('books')->insert([

            ['title' => "Harry Potter à L'école des Sorciers",
            'stock' => 100,
            'classe_id' => 2,
            'description' => "Le jour de ses onze ans, Harry Potter, un orphelin élevé par un oncle et une tante qui le détestent, voit son existence bouleversée. Un géant vient le chercher pour l’emmener à Poudlard, une école de sorcellerie! Voler en balai, jeter des sorts, combattre les trolls : Harry Potter se révèle un sorcier doué. Mais un mystère entoure sa naissance et l’effroyable V..., le mage dont personne n’ose prononcer le nom. Amitié, surprises, dangers, scènes comiques, Harry découvre ses pouvoirs et la vie à Poudlard. Le premier tome des aventures du jeune héros vous ensorcelle aussitôt!",
            'date' => '26 juin 1997',
            'page' => 322,
            'img' => "https://books.google.fr/books/content?id=nvijsUyJYR4C&printsec=frontcover&img=1&zoom=5&edge=curl&imgtk=AFLRE70FlDDNw7b0x8iGZpCG-hMNlOhPrSQj6wXoKMKj-QxWd1mWuBPDrNP3J9SMZWZgkC5I6Ckzx02ZHCGPfy4nxnQ865Ib2Wi10mN2KCkvZO8PPwJXCVgq_C0JdOCwrgwGREDEdPaZ"],

            ['title' => "Harry Potter et la Chambre des Secrets",
            'stock' => 100,
            'classe_id' => 2,
            'description' => "Une rentrée fracassante en voiture volante, une étrange malédiction qui s’abat sur les élèves, cette deuxième année à l’école des sorciers ne s’annonce pas de tout repos! Entre les cours de potions magiques, les matches de Quidditch et les combats de mauvais sorts, Harry et ses amis Ron et Hermione trouveront-ils le temps de percer le mystère de la Chambre des Secrets? Le deuxiè me volume des aventures de Harry Potter : un livre magique pour sorciers confirmés.",
            'date' => '2 juillet 1998',
            'page' => 364,
            'img' => "https://books.google.fr/books/content?id=GBl6MWssicEC&printsec=frontcover&img=1&zoom=5&edge=curl&imgtk=AFLRE73r5ognx9KDNi0AZ7Whiyi-AnN_pA6zbRESX_G4iPpiiqfjm2ZzqIA2DR2xG8uySaUz87--J6kQ1UMQ7rPJB6seMuIR7FS8VD0FvRna9eH7D6MlQeI2zseVFfOMh5gg8B3T0x-W"],


            ['title' => "Harry Potter et le Prisonnier d'Azkaban",
            'stock' => 100,
            'classe_id' => 2,
            'description' => "Sirius Black, le dangereux criminel qui s’est échappé de la forteresse d’Azkaban, recherche Harry Potter. C’est donc sous bonne garde que l’apprenti sorcier fait sa troisième rentrée. Au programme : des cours de divination, la fabrication d’une potion de Ratatinage, le dressage des hippogriffes... Mais Harry est-il vraiment à l’abri du danger qui le menace? Le troisième tome des aventures de Harry Potter vous emportera dans un tourbillon de surprises et d’émotions. Frissons et humour garantis!",
            'date' => '19 octobre 1999',
            'page' => 474,
            'img' => "https://books.google.fr/books/content?id=vWxokFDTpy4C&printsec=frontcover&img=1&zoom=5&edge=curl&imgtk=AFLRE70f7pN5vc72J6ddxoGxUEnysdwmsT4iD_AZUuAGDUmupBkElC4A8_M7h0uJxHn00eZoTKUjbmWFXfDV7GT2ftrTEp6An84DFBK6HXchmPp-0iEHW8YBkUsRWmEpFCvz6rfiOXq_"],

            ['title' => "Sérotonine",
            'stock' => 100,
            'classe_id' => 3,
            'description' => "« Mes croyances sont limitées, mais elles sont violentes. Je crois à la possibilité du royaume restreint. Je crois à l'amour » écrivait récemment Michel Houellebecq. Le narrateur de Sérotonine approuverait sans réserve. Son récit traverse une France qui piétine ses traditions, banalise ses villes, détruit ses campagnes au bord de la révolte. Il raconte sa vie d'ingénieur agronome, son amitié pour un aristocrate agriculteur (un inoubliable personnage de roman son double inversé), l'échec des idéaux de leur jeunesse, l'espoir peut-être insensé de retrouver une femme perdue. Ce roman sur les ravages d'un monde sans bonté, sans solidarité, aux mutations devenues incontrôlables, est aussi un roman sur le remords et le regret.",
            'date' => '4 janvier 2019',
            'page' => 352,
            'img' => "https://images-na.ssl-images-amazon.com/images/I/31nCl%2BhBrcL._SX319_BO1,204,203,200_.jpg"],

            ['title' => "La Jeune Fille et la nuit",
            'stock' => 100,
            'classe_id' => 3,
            'description' => "  Un campus prestigieux figé sous la neige
                                Trois amis liés par un secret tragique
                                Une jeune fille emportée par la nuit
                                Côte d’Azur - Hiver 1992
                                Une nuit glaciale, alors que le campus de son lycée est paralysé par une tempête de neige, Vinca Rockwell, 19 ans, l’une des plus brillantes élèves de classes prépas, s’enfuit avec son professeur de philo avec qui elle entretenait une relation secrète. Pour la jeune fille, « l’amour est tout ou il n’est rien ».
                                Personne ne la reverra jamais.
                                Côte d’Azur - Printemps 2017
                                Autrefois inséparables, Fanny, Thomas et Maxime – les meilleurs amis de Vinca – ne se sont plus parlé depuis la fin de leurs études. Ils se retrouvent lors d’une réunion d’anciens élèves. Vingt-cinq ans plus tôt, dans des circonstances terribles, ils ont tous les trois commis un meurtre et emmuré le cadavre dans le gymnase du lycée. Celui que l’on doit entièrement détruire aujourd’hui pour construire un autre bâtiment.
                                Dès lors, plus rien ne s’oppose à ce qu’éclate la vérité.
                                Dérangeante
                                Douloureuse
                                Démoniaque…",
            'date' => '24 avril 2018',
            'page' => 386,
            'img' => "https://images-na.ssl-images-amazon.com/images/I/31nCl%2BhBrcL._SX319_BO1,204,203,200_.jpg"],
        ]);

        DB::table('games')->insert([

            ['name' => 'La Bonne Paye',
            'stock' => 50,
            'classe_id' => 2,
            'description' => 'Mais qui paiera la facture ? A vous la belle vie si vous gérez bien votre argent avec le jeu de société incontournable La Bonne Paye ! Si vous savez bien gérer votre argent et que vous avez un peu de chance aussi , vous allez pouvoir aller jusqu\'au bout du mois mais attention aux factures !'],

            ['name' => 'Monopoly Tricheurs',
            'stock' => 50,
            'classe_id' => 3,
            'description' => "50% des partie de Monopoly se terminent mal… l'édition tricheurs de Monopoly va vous faire jouer sur le thème des tricheurs. Que vous aimiez ou pas tricher, vous aurez votre rôle à jouer ! que les tricheurs fassent attention rien ne sera simple !"],

            ['name' => 'Burger Quiz',
            'stock' => 50,
            'classe_id' => 3,
            'description' => "  Jouez à toutes les épreuves du jeu le plus marrant et inventif de la TV : BURGER QUIZ. 
                                Pour jouer, il vous faut :
                                - Des gens (Vous, Famille, Amis ou d'autres Gens que vous ne connaissez pas ça marche aussi).
                                - Cette Boite de Jeu.
                                ET C'EST TOUT !
                                2 Equipes : Ketchup et Mayo
                                4 épreuves : les Nuggets, le Sel ou Poivre, les Menus et l’Addition, c’est encore mieux que le jeu TV parce que là, c’est VOUS qui jouez – même à “Chewbacca Songs“ ! 
                                Gagnez 25 Miam et tentez de remporter le BURGER DE LA MORT !!! (En majuscules ça fait plus peur)
                                Alors, prêtes et prêts pour le JEU où la gagne, la pop culture, la mauvaise foi, les imitations, la musique et les vannes cohabitent dans le plus joyeux des chaos ?
                                La boîte de jeu Burger Quiz se joue de 2 à autant de joueurs que vous voulez ! Mais au-dessus de 15, pensez à aérer la pièce."],

        ]);

        DB::table('customers')->insert([

            ['firstname' => "Soubeyrand",
            'lastname' => "Léanne",
            'mail' => "l.soub@gmail.com"],

            ['firstname' => "Dorique",
            'lastname' => "Willy",
            'mail' => "w.dorique@gmail.com"]

        ]);

        DB::table('book_customer')->insert([

            ['book_id' => 1, 'customer_id' => 1],
            ['book_id' => 3, 'customer_id' => 1],
            ['book_id' => 2, 'customer_id' => 1],
            ['book_id' => 3, 'customer_id' => 2],
            ['book_id' => 5, 'customer_id' => 2,],

        ]);

        DB::table('customer_game')->insert([

            ['customer_id' => 1, 'game_id' => 2,],
            ['customer_id' => 1, 'game_id' => 3,],
            ['customer_id' => 2, 'game_id' => 1,]
            
        ]);
    }
}
