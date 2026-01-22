<?php

namespace Database\Seeders;

use App\Models\Bookmaker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UpdateBookmakersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bookmaker::query()->where('key', '=', '1xbet')->update(
            ['bonus_casino_en' => 'Activate the promo code GENER55 during registration and receive a generous bonus of $1950 and 150 free spins that can be used for casino play.',
             'bonus_casino_es' => 'Activa el código promocional GENER55 durante el registro y recibe un generoso bono de $1950 y 150 giros gratis que pueden utilizarse para jugar en el casino.',
             'bonus_casino_fr' => 'Activez le code promo GENER55 lors de l’inscription et recevez un généreux bonus de 1950 $ ainsi que 150 tours gratuits à utiliser au casino.',
             'bonus_casino_pt' => 'Ative o código promocional GENER55 durante o registo e receba um bónus generoso de $1950 e 150 rodadas grátis que podem ser usadas no casino.',
            ]
        );
        Bookmaker::query()->where('key', '=', 'melbet')->update(
            ['bonus_casino_en' => 'Check out the выгодний casino welcome package with a 450% bonus, which allows you to get up to $2000 and 250 free spins for casino play.',
             'bonus_casino_es' => 'Descubre el atractivo paquete de bienvenida del casino con un bono del 450%, que te permite obtener hasta $2000 y 250 giros gratis para jugar en el casino.',
             'bonus_casino_fr' => 'Découvrez le pack de bienvenue avantageux du casino avec un bonus de 450 %, qui vous permet d’obtenir jusqu’à 2000 $ et 250 tours gratuits pour jouer au casino.',
             'bonus_casino_pt' => 'Confira o pacote de boas-vindas vantajoso do casino com um bónus de 450%, que permite obter até $2000 e 250 rodadas grátis para jogar no casino.',
            ]
        );
        Bookmaker::query()->where('key', '=', 'betwinner')->update(
            ['bonus_casino_en' => 'Top up your gaming account and take advantage of a bonus of up to $1500, as well as receive 150 free spins that can be used to play your favorite casino slots.',
             'bonus_casino_es' => 'Recarga tu cuenta de juego y aprovecha un bono de hasta $1500, además de recibir 150 giros gratis que puedes usar para jugar en tus tragamonedas favoritas del casino.',
             'bonus_casino_fr' => 'Rechargez votre compte de jeu et profitez d’un bonus allant jusqu’à 1500 $, ainsi que de 150 tours gratuits à utiliser pour jouer à vos machines à sous préférées du casino.',
             'bonus_casino_pt' => 'Recarregue sua conta de jogo e aproveite um bônus de até $1500, além de receber 150 rodadas grátis que podem ser usadas para jogar em seus slots favoritos do casino.',
            ]
        );
        Bookmaker::query()->where('key', '=', '1win')->update(
            ['bonus_casino_en' => 'Use the promo code 1W500GAX during registration to receive a generous 500% bonus, which can reach up to $1025.',
             'bonus_casino_es' => 'Utiliza el código promocional 1W500GAX durante el registro para recibir un generoso bono del 500%, que puede alcanzar hasta $1025.',
             'bonus_casino_fr' => 'Utilisez le code promo 1W500GAX lors de l’inscription pour recevoir un généreux bonus de 500 %, pouvant atteindre jusqu’à 1025 $.',
             'bonus_casino_pt' => 'Use o código promocional 1W500GAX durante o registo para receber um generoso bónus de 500%, que pode chegar até $1025.',
            ]
        );
        Bookmaker::query()->where('key', '=', 'mostbet')->update(
            ['bonus_casino_en' => 'Use the promo code HUGE during registration at the casino and make a deposit of at least $10 to receive a generous 125% bonus, as well as 250 free spins that can be used to play your favorite slots.',
             'bonus_casino_es' => 'Utiliza el código promocional HUGE durante el registro en el casino y realiza un depósito de al menos $10 para recibir un generoso bono del 125%, además de 250 giros gratis que puedes usar para jugar en tus tragamonedas favoritas.',
             'bonus_casino_fr' => 'Utilisez le code promo HUGE lors de votre inscription au casino et effectuez un dépôt d’au moins 10 $ pour recevoir un généreux bonus de 125 %, ainsi que 250 tours gratuits à utiliser sur vos machines à sous préférées.',
             'bonus_casino_pt' => 'Use o código promocional HUGE durante o registo no casino e faça um depósito de pelo menos $10 para receber um generoso bónus de 125%, além de 250 rodadas grátis que podem ser usadas nos seus slots favoritos.',
            ]
        );
        Bookmaker::query()->where('key', '=', 'paripesa')->update(
            ['bonus_casino_en' => 'Use the promo code TOPBONUS and receive a generous welcome package of up to $1500, as well as 150 free spins that can be used to play slots.',
             'bonus_casino_es' => 'Utiliza el código promocional TOPBONUS y recibe un generoso paquete de bienvenida de hasta $1500, además de 150 giros gratis que puedes usar para jugar en las tragamonedas.',
             'bonus_casino_fr' => 'Utilisez le code promo TOPBONUS et recevez un généreux pack de bienvenue allant jusqu’à 1500 $, ainsi que 150 tours gratuits à utiliser pour jouer aux machines à sous.',
             'bonus_casino_pt' => 'Use o código promocional TOPBONUS e receba um generoso pacote de boas-vindas de até $1500, além de 150 rodadas grátis que podem ser usadas para jogar nos slots.',
            ]
        );
        Bookmaker::query()->where('key', '=', '4RABET')->update(
            ['bonus_casino_en' => 'Top up your account and receive a generous 150% bonus on your first deposit. Enjoy playing the best Live Casino games with live dealers, experience the atmosphere of a real casino, and increase your chances of winning.',
             'bonus_casino_es' => 'Recarga tu cuenta y recibe un generoso bono del 150% en tu primer depósito. Disfruta de los mejores juegos de Live Casino con crupieres en vivo, experimenta la atmósfera de un casino real y aumenta tus posibilidades de ganar.',
             'bonus_casino_fr' => 'Approvisionnez votre compte et recevez un généreux bonus de 150 % sur votre premier dépôt. Profitez des meilleurs jeux de Live Casino avec des croupiers en direct, ressentez l’atmosphère d’un vrai casino et augmentez vos chances de gain.',
             'bonus_casino_pt' => 'Recarregue sua conta e receba um generoso bônus de 150% no seu primeiro depósito. Desfrute dos melhores jogos de Live Casino com dealers ao vivo, sinta a atmosfera de um cassino real e aumente suas chances de ganhar.',
            ]
        );
        Bookmaker::query()->where('key', '=', '888starz')->update(
            ['bonus_casino_en' => 'Use the promo code WORLDCUP and receive a generous welcome package of up to $1500, as well as 150 free spins that can be used to play your favorite casino slots.',
             'bonus_casino_es' => 'Utiliza el código promocional WORLDCUP y recibe un generoso paquete de bienvenida de hasta $1500, además de 150 giros gratis que puedes usar para jugar en tus tragamonedas favoritas del casino.',
             'bonus_casino_fr' => 'Utilisez le code promo WORLDCUP et recevez un généreux pack de bienvenue allant jusqu’à 1500 $, ainsi que 150 tours gratuits à utiliser pour jouer à vos machines à sous préférées du casino.',
             'bonus_casino_pt' => 'Use o código promocional WORLDCUP e receba um generoso pacote de boas-vindas de até $1500, além de 150 rodadas grátis que podem ser usadas para jogar nos seus slots favoritos do casino.',
            ]
        );
        Bookmaker::query()->where('key', '=', 'megapari')->update(
            ['bonus_casino_en' => 'Receive a generous welcome package of up to $1500 and 150 free spins, which can be used to play a variety of casino slots.',
             'bonus_casino_es' => 'Recibe un generoso paquete de bienvenida de hasta $1500 y 150 giros gratis, que se pueden usar para jugar en una variedad de tragamonedas del casino.',
             'bonus_casino_fr' => 'Recevez un généreux pack de bienvenue allant jusqu’à 1500 $ ainsi que 150 tours gratuits, utilisables pour jouer à une variété de machines à sous du casino.',
             'bonus_casino_pt' => 'Receba um generoso pacote de boas-vindas de até $1500 e 150 rodadas grátis, que podem ser usadas para jogar em uma variedade de slots de casino.',
            ]
        );
        Bookmaker::query()->where('key', '=', '22bet')->update(
            ['bonus_casino_en' => 'Use the promo code HUGE during registration and receive a bonus of $300, as well as 30 free spins that can be used to play your favorite casino slots.',
             'bonus_casino_es' => 'Utiliza el código promocional HUGE durante el registro y recibe un bono de $300, además de 30 giros gratis que puedes usar para jugar en tus tragamonedas favoritas del casino.',
             'bonus_casino_fr' => 'Utilisez le code promo HUGE lors de l’inscription et recevez un bonus de 300 $, ainsi que 30 tours gratuits à utiliser pour jouer à vos machines à sous préférées du casino.',
             'bonus_casino_pt' => 'Use o código promocional HUGE durante o registo e receba um bónus de $300, além de 30 rodadas grátis que podem ser usadas para jogar nos seus slots favoritos do casino.',
            ]
        );
        Bookmaker::query()->where('key', '=', 'linebet')->update(
            ['bonus_casino_en' => 'Use the promo code BNB777 and receive a generous welcome package of up to $1750, as well as 150 free spins.',
             'bonus_casino_es' => 'Utiliza el código promocional BNB777 y recibe un generoso paquete de bienvenida de hasta $1750, además de 150 giros gratis.',
             'bonus_casino_fr' => 'Utilisez le code promo BNB777 et recevez un généreux pack de bienvenue allant jusqu’à 1750 $, ainsi que 150 tours gratuits.',
             'bonus_casino_pt' => 'Use o código promocional BNB777 e receba um generoso pacote de boas-vindas de até $1750, além de 150 rodadas grátis.',
            ]
        );
        Bookmaker::query()->where('key', '=', '20bet')->update(
            ['bonus_casino_en' => 'Top up your account and use the promo code MISSING to receive a 100% bonus on your first deposit up to $120.',
             'bonus_casino_es' => 'Recarga tu cuenta y utiliza el código promocional MISSING para recibir un bono del 100% en tu primer depósito de hasta $120.',
             'bonus_casino_fr' => 'Approvisionnez votre compte et utilisez le code promo MISSING pour recevoir un bonus de 100 % sur votre premier dépôt jusqu’à 120 $.',
             'bonus_casino_pt' => 'Recarregue sua conta e use o código promocional MISSING para receber um bónus de 100% no seu primeiro depósito de até $120.',
            ]
        );
        Bookmaker::query()->where('key', '=', 'betandyou')->update(
            ['bonus_casino_en' => 'Top up your account and receive additional bonuses in the form of a welcome package of up to $1500 and 150 free spins.',
             'bonus_casino_es' => 'Recarga tu cuenta y recibe bonos adicionales en forma de un paquete de bienvenida de hasta $1500 y 150 giros gratis.',
             'bonus_casino_fr' => 'Approvisionnez votre compte et recevez des bonus supplémentaires sous forme d’un pack de bienvenue allant jusqu’à 1500 $ et 150 tours gratuits.',
             'bonus_casino_pt' => 'Recarregue sua conta e receba bônus adicionais na forma de um pacote de boas-vindas de até $1500 e 150 rodadas grátis.',
            ]
        );
        Bookmaker::query()->where('key', '=', 'ivibet')->update(
            ['bonus_casino_en' => 'Top up your account and use the promo code MAXBONUS during registration to receive a 100% bonus on your first deposit up to $100, as well as 120 free spins for casino games.',
             'bonus_casino_es' => 'Recarga tu cuenta y utiliza el código promocional MAXBONUS durante el registro para recibir un bono del 100% en tu primer depósito de hasta $100, además de 120 giros gratis para juegos de casino.',
             'bonus_casino_fr' => 'Approvisionnez votre compte et utilisez le code promo MAXBONUS lors de l’inscription pour recevoir un bonus de 100 % sur votre premier dépôt jusqu’à 100 $, ainsi que 120 tours gratuits pour les jeux de casino.',
             'bonus_casino_pt' => 'Recarregue sua conta e use o código promocional MAXBONUS durante o registo para receber um bónus de 100% no seu primeiro depósito até $100, além de 120 rodadas grátis para jogos de casino.',
            ]
        );
        Bookmaker::query()->where('key', '=', '1xbit')->update(
            ['bonus_casino_en' => 'Top up your account and enter the promo code MAXBONUS during registration to receive a 100% bonus on your first deposit up to $100, as well as 120 free spins for casino games.',
             'bonus_casino_es' => 'Recarga tu cuenta e ingresa el código promocional MAXBONUS durante el registro para recibir un bono del 100% en tu primer depósito de hasta $100, además de 120 giros gratis para juegos de casino.',
             'bonus_casino_fr' => 'Approvisionnez votre compte et saisissez le code promo MAXBONUS lors de l’inscription pour recevoir un bonus de 100 % sur votre premier dépôt jusqu’à 100 $, ainsi que 120 tours gratuits pour les jeux de casino.',
             'bonus_casino_pt' => 'Recarregue sua conta e insira o código promocional MAXBONUS durante o registo para receber um bónus de 100% no seu primeiro depósito até $100, além de 120 rodadas grátis para jogos de casino.',
            ]
        );
    }
}
