<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerPARIPESAPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 1
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"A special promo code from PARIPESA is available for you, unlocking the best bonus opportunities on the site. The promo code r will help boost your winnings and guarantee great conditions and exclusive offers for new PARIPESA users. Don’t forget to use it! By using this promo code, you’ll receive a first deposit bonus of 130 euros."}',
             'value_es' => '{"0":"Tienes disponible un código promocional especial de PARIPESA que te dará acceso a los mejores bonos del sitio. El código :promocode aumentará tus ganancias y te garantizará condiciones favorables y ofertas exclusivas para nuevos usuarios de PARIPESA. ¡No olvides utilizarlo! Con este código, recibirás un bono de 130 euros en tu primer depósito."}',
             'value_fr' => '{"0":"Un code promo spécial de PARIPESA est disponible pour vous, vous donnant accès aux meilleures offres de bonus sur le site. Le code :promocode vous aidera à augmenter vos gains et vous garantira des conditions avantageuses ainsi que des offres exclusives réservées aux nouveaux utilisateurs de PARIPESA. N\'oubliez pas de l\'utiliser ! En saisissant ce code, vous recevrez un bonus de 130 euros sur votre premier dépôt."}',
             'value_pt' => '{"0":"Você tem à sua disposição um código promocional especial da PARIPESA que desbloqueia as melhores ofertas de bônus do site. O código :promocode vai aumentar seus ganhos e garantir condições vantajosas e ofertas exclusivas para novos usuários da PARIPESA. Não se esqueça de usá-lo! Com este código, você receberá um bônus de 130 euros no seu primeiro depósito."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 2
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Please note the conditions: you must be at least 18 years old and a new user of the platform. The promo code must be entered during registration."}',
             'value_es' => '{"0":"Ten en cuenta las condiciones: debes tener al menos 18 años y ser un nuevo usuario de la plataforma. El código debe ingresarse durante el registro."}',
             'value_fr' => '{"0":"Veuillez noter les conditions : vous devez avoir au moins 18 ans et être un nouvel utilisateur de la plateforme. Le code promo doit être saisi lors de l\'inscription."}',
             'value_pt' => '{"0":"Atenção às condições: você deve ter pelo menos 18 anos e ser um novo usuário da plataforma. O código promocional deve ser inserido durante o registro."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 3
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 4
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
                'value_en' => '{"0":"Why Use the PARIPESA Promo Code?"}',
                'value_es' => '{"0":"¿Por qué usar el código promocional de PARIPESA?"}',
                'value_fr' => '{"0":"Pourquoi utiliser le code promo PARIPESA ?"}',
                'value_pt' => '{"0":"Por que usar o código promocional da PARIPESA?"}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 5
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Use the exclusive :promocode promo code from Takesbet and get a €130 welcome bonus on your first deposit! This is your chance to double your balance even before placing your first bet — don’t miss out."}',
             'value_es' => '{"0":"¡Usa el código promocional exclusivo :promocode de Takesbet y recibe un bono de bienvenida de 130€ en tu primer depósito! Esta es tu oportunidad de duplicar tu saldo incluso antes de realizar tu primera apuesta — ¡no la dejes pasar!"}',
             'value_fr' => '{"0":"Utilisez le code promo exclusif :promocode de Takesbet et recevez un bonus de bienvenue de 130€ sur votre premier dépôt ! C’est votre chance de doubler votre solde avant même de placer votre premier pari — ne la manquez pas."}',
             'value_pt' => '{"0":"Use o código promocional exclusivo :promocode da Takesbet e receba um bônus de boas-vindas de 130€ no seu primeiro depósito! Esta é a sua chance de dobrar o saldo antes mesmo de fazer a primeira aposta — não perca!"}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 6
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Offers like this don’t come around often, so be sure to take advantage. It’s a great way to boost your starting deposit!"}',
             'value_es' => '{"0":"Ofertas como esta no aparecen con frecuencia, así que asegúrate de aprovecharla. ¡Es una excelente forma de aumentar tu depósito inicial!"}',
             'value_fr' => '{"0":"Ce genre d’offre est rare, alors profitez-en. C’est un excellent moyen de booster votre dépôt initial !"}',
             'value_pt' => '{"0":"Ofertas como esta são raras, então aproveite. É uma ótima forma de aumentar seu depósito inicial!"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 7
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
                'value_en' => '{"0":"How To Benefit From the PARIPESA Bonus"}',
                'value_es' => '{"0":"Cómo beneficiarse del bono de PARIPESA"}',
                'value_fr' => '{"0":"Comment profiter du bonus PARIPESA"}',
                'value_pt' => '{"0":"Como aproveitar o bônus da PARIPESA"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 8
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"How to activate the PARIPESA promo code? It’s very easy! You won’t need much time or effort. All you have to do is follow a few simple steps during the registration process."}',
             'value_es' => '{"0":"¿Cómo activar el código promocional de PARIPESA? ¡Muy fácil! No necesitas mucho tiempo ni esfuerzo. Solo tienes que seguir unos simples pasos durante el proceso de registro."}',
             'value_fr' => '{"0":"Comment activer le code promo PARIPESA ? C’est très simple ! Cela ne vous prendra ni beaucoup de temps ni d’efforts. Il vous suffit de suivre quelques étapes simples lors de l’inscription."}',
             'value_pt' => '{"0":"Como ativar o código promocional da PARIPESA? É muito simples! Você não vai precisar de muito tempo ou esforço. Basta seguir alguns passos durante o processo de registro."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 9
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Go to the official PARIPESA website and click the «Registration» button in the top corner. Enter the promo code :promocode. Make your first deposit starting from $1, but remember — the higher your first deposit, the bigger the bonus you’ll receive."}',
             'value_es' => '{"0":"Ve al sitio web oficial de PARIPESA y haz clic en el botón «Registro» en la esquina superior. Ingresa el código promocional :promocode. Haz tu primer depósito desde 1$, pero recuerda: cuanto mayor sea el depósito, ¡mayor será el bono que recibirás!"}',
             'value_fr' => '{"0":"Rendez-vous sur le site officiel de PARIPESA et cliquez sur le bouton « Inscription » en haut de la page. Saisissez le code promo :promocode. Effectuez un premier dépôt à partir de 1$ — mais n’oubliez pas : plus le dépôt est élevé, plus le bonus sera important."}',
             'value_pt' => '{"0":"Acesse o site oficial da PARIPESA e clique no botão «Registro» no canto superior. Digite o código promocional :promocode. Faça seu primeiro depósito a partir de 1$, mas lembre-se: quanto maior o valor do primeiro depósito, maior será o bônus que você receberá."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 10
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"As you can see, everything is simple and fast. Activate the promo code and enjoy the game right away!"}',
             'value_es' => '{"0":"Como puedes ver, todo es rápido y sencillo. ¡Activa el código y empieza a disfrutar del juego ahora mismo!"}',
             'value_fr' => '{"0":"Comme vous le voyez, c’est rapide et facile. Activez le code promo et commencez à jouer dès maintenant !"}',
             'value_pt' => '{"0":"Como você pode ver, tudo é fácil e rápido. Ative o código e comece a jogar agora mesmo!"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 11
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
                'value_en' => '{"0":"Make a deposit"}',
                'value_es' => '{"0":"Realizar un depósito"}',
                'value_fr' => '{"0":"Effectuer un dépôt"}',
                'value_pt' => '{"0":"Fazer um depósito"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 12
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA offers a wide range of account funding options, including cryptocurrencies. After registering on the site, you will receive simple instructions for making your first deposit in the «Cashier» section. Withdrawals can be made just as easily."}',
             'value_es' => '{"0":"PARIPESA ofrece una amplia variedad de métodos para depositar fondos en la cuenta, incluyendo criptomonedas. Después de registrarte en el sitio, recibirás instrucciones sencillas para hacer tu primer depósito en la sección «Caja». Los retiros también se pueden realizar fácilmente."}',
             'value_fr' => '{"0":"PARIPESA propose une large gamme de méthodes pour approvisionner votre compte, y compris les cryptomonnaies. Après votre inscription sur le site, vous recevrez des instructions simples pour effectuer votre premier dépôt dans la section « Caisse ». Les retraits sont tout aussi faciles à réaliser."}',
             'value_pt' => '{"0":"PARIPESA oferece uma ampla variedade de métodos para financiar sua conta, incluindo criptomoedas. Após o registro no site, você receberá instruções simples para fazer seu primeiro depósito na seção «Caixa». As retiradas também podem ser feitas com facilidade."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 13
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Deposits are credited instantly and without fees. For withdrawals, it is recommended to use the same method as for deposits. You can withdraw up to $/€100,000 (or the equivalent in your currency) at once, also without any additional charges."}',
             'value_es' => '{"0":"Los depósitos se acreditan al instante y sin comisiones. Para los retiros, se recomienda usar el mismo método que usaste para depositar. Puedes retirar hasta $/€100,000 (o el equivalente en tu moneda) de una sola vez, también sin cargos adicionales."}',
             'value_fr' => '{"0":"Les dépôts sont crédités instantanément et sans frais. Pour les retraits, il est recommandé d’utiliser la même méthode que pour le dépôt. Vous pouvez retirer jusqu’à 100 000 $/€ (ou l’équivalent dans votre devise) en une seule fois, également sans frais supplémentaires."}',
             'value_pt' => '{"0":"Os depósitos são creditados instantaneamente e sem taxas. Para retiradas, recomenda-se usar o mesmo método do depósito. É possível sacar até $/€100.000 (ou equivalente em sua moeda) de uma só vez, também sem cobranças adicionais."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 14
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
                'value_en' => '{"0":"Is There a No-Deposit PARIPESA Promo Code?"}',
                'value_es' => '{"0":"¿Existe un código promocional de PARIPESA sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il un code promo PARIPESA sans dépôt ?"}',
                'value_pt' => '{"0":"Existe um código promocional da PARIPESA sem depósito?"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 15
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"Unfortunately for sports betting fans, no-deposit bonuses from online bookmakers are quite rare. Although they haven’t disappeared completely, nowadays such bonuses are mostly related to casino games or offered only during specific sporting events. At the moment, PARIPESA does not have any no-deposit promo codes or bonuses available for new or existing users."}',
                'value_es' => '{"0":"Lamentablemente, para los aficionados a las apuestas deportivas, los bonos sin depósito de los corredores de apuestas en línea son bastante raros. Aunque no han desaparecido por completo, hoy en día estos bonos están mayormente relacionados con juegos de casino o se ofrecen solo durante eventos deportivos específicos. Actualmente, PARIPESA no tiene códigos promocionales ni bonos sin depósito disponibles para usuarios nuevos o existentes."}',
                'value_fr' => '{"0":"Malheureusement, pour les amateurs de paris sportifs, les bonus sans dépôt proposés par les bookmakers en ligne sont assez rares. Bien qu’ils n’aient pas complètement disparu, ces bonus sont aujourd’hui principalement liés aux jeux de casino ou offerts uniquement lors d’événements sportifs spécifiques. À l’heure actuelle, PARIPESA ne propose aucun code promo ni bonus sans dépôt pour les nouveaux ou les anciens utilisateurs."}',
                'value_pt' => '{"0":"Infelizmente, para os fãs de apostas esportivas, os bônus sem depósito oferecidos por casas de apostas online são bastante raros. Embora não tenham desaparecido completamente, atualmente esses bônus estão principalmente relacionados a jogos de cassino ou são oferecidos apenas durante eventos esportivos específicos. No momento, a PARIPESA não possui códigos promocionais ou bônus sem depósito disponíveis para novos ou atuais usuários."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 16
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
                'value_en' => '{"0":"What To Do if You Already Have an Account at PARIPESA?"}',
                'value_es' => '{"0":"¿Qué hacer si ya tienes una cuenta en PARIPESA?"}',
                'value_fr' => '{"0":"Que faire si vous avez déjà un compte sur PARIPESA ?"}',
                'value_pt' => '{"0":"O que fazer se você já tem uma conta na PARIPESA?"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 17
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The PARIPESA welcome bonus is only available to new users who have not yet made a deposit. If you already have an account and have previously made a deposit, this bonus will not be available to you. However, this does not mean there are no other attractive offers. Visit the PARIPESA promotions page where you will find various bonuses. For example, on the second deposit, PARIPESA offers a 50% bonus."}',
             'value_es' => '{"0":"El bono de bienvenida de PARIPESA está disponible solo para nuevos usuarios que aún no hayan realizado un depósito. Si ya tienes una cuenta y has hecho depósitos anteriormente, este bono no estará disponible para ti. Sin embargo, esto no significa que no haya otras ofertas atractivas. Visita la página de promociones de PARIPESA, donde encontrarás varios bonos. Por ejemplo, en el segundo depósito, PARIPESA ofrece un bono del 50%."}',
             'value_fr' => '{"0":"Le bonus de bienvenue PARIPESA est uniquement disponible pour les nouveaux utilisateurs qui n\'ont pas encore effectué de dépôt. Si vous avez déjà un compte et que vous avez déjà effectué un dépôt, ce bonus ne vous sera pas accessible. Cependant, cela ne signifie pas qu\'il n\'y a pas d\'autres offres intéressantes. Rendez-vous sur la page des promotions de PARIPESA où vous trouverez différents bonus. Par exemple, sur le deuxième dépôt, PARIPESA offre un bonus de 50 %."}',
             'value_pt' => '{"0":"O bônus de boas-vindas da PARIPESA está disponível apenas para novos usuários que ainda não tenham feito um depósito. Se você já tem uma conta e já fez depósitos anteriormente, este bônus não estará disponível para você. No entanto, isso não significa que não existam outras ofertas atraentes. Visite a página de promoções da PARIPESA, onde encontrará vários bônus. Por exemplo, no segundo depósito, a PARIPESA oferece um bônus de 50%."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 18
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The wagering requirements for this bonus are similar to the welcome bonus: you need to place bets totaling five times the bonus amount, with accumulator bets consisting of three events, each with odds of at least 1.40."}',
             'value_es' => '{"0":"Los requisitos de apuesta para este bono son similares al bono de bienvenida: debes realizar apuestas por un total de cinco veces el monto del bono, con apuestas acumuladas que consistan en tres eventos, cada uno con una cuota mínima de 1.40."}',
             'value_fr' => '{"0":"Les conditions de mise pour ce bonus sont similaires à celles du bonus de bienvenue : vous devez placer des paris dont le total correspond à cinq fois le montant du bonus, avec des paris combinés composés de trois événements, chacun avec une cote minimale de 1,40."}',
             'value_pt' => '{"0":"Os requisitos de aposta para este bônus são semelhantes aos do bônus de boas-vindas: é necessário fazer apostas que totalizem cinco vezes o valor do bônus, com apostas acumuladas compostas por três eventos, cada um com odds de pelo menos 1,40."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 19
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
             'value_en' => '{"0":"img-2.webp"}',
             'value_es' => '{"0":"img-2.webp"}',
             'value_fr' => '{"0":"img-2.webp"}',
             'value_pt' => '{"0":"img-2.webp"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 20
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Welcome package"}',
             'value_es' => '{"0":"Paquete de bienvenida"}',
             'value_fr' => '{"0":"Pack de bienvenue"}',
             'value_pt' => '{"0":"Pacote de boas-vindas"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 21
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"New players at PARIPESA can enjoy an impressive welcome bonus! This offer is split into four stages — one for each of the first four deposits. The bonus is activated with your very first deposit. New users can receive up to $150 for club casino games and 150 free spins on the most popular slots."}',
             'value_es' => '{"0":"¡Los nuevos jugadores en PARIPESA pueden disfrutar de un increíble bono de bienvenida! Esta oferta se divide en cuatro etapas, una para cada uno de los primeros cuatro depósitos. El bono se activa con el primer depósito. Los nuevos usuarios pueden recibir hasta 150$ para juegos de casino y 150 giros gratis en las tragamonedas más populares."}',
             'value_fr' => '{"0":"Les nouveaux joueurs sur PARIPESA peuvent profiter d’un bonus de bienvenue impressionnant ! Cette offre est répartie en quatre étapes — une pour chacun des quatre premiers dépôts. Le bonus s’active dès le premier dépôt. Les nouveaux utilisateurs peuvent recevoir jusqu’à 150$ pour les jeux de casino club, ainsi que 150 tours gratuits sur les machines à sous les plus populaires."}',
             'value_pt' => '{"0":"Os novos jogadores da PARIPESA podem aproveitar um incrível bônus de boas-vindas! Essa oferta está dividida em quatro etapas — uma para cada um dos quatro primeiros depósitos. O bônus é ativado com o seu primeiro depósito. Os novos usuários podem receber até $150 para jogos de cassino e 150 rodadas grátis nas slots mais populares."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 22
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Before withdrawing any winnings, the bonus must be wagered 35 times within 7 days."}',
             'value_es' => '{"0":"Antes de retirar las ganancias, el bono debe apostarse 35 veces en un plazo de 7 días."}',
             'value_fr' => '{"0":"Avant de pouvoir retirer vos gains, vous devez miser le montant du bonus 35 fois en 7 jours."}',
             'value_pt' => '{"0":"Antes de sacar os ganhos, é necessário apostar o valor do bônus 35 vezes dentro de 7 dias."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 23
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"You can activate the first bonus even without a promo code, but with :promocode, the conditions become much more attractive. Don’t miss this opportunity!"}',
             'value_es' => '{"0":"Puedes activar el primer bono incluso sin un código promocional, pero con :promocode, las condiciones serán mucho más favorables. ¡No pierdas esta oportunidad!"}',
             'value_fr' => '{"0":"Vous pouvez activer le premier bonus même sans code promo, mais avec :promocode, les conditions sont bien plus avantageuses. Ne manquez pas cette opportunité !"}',
             'value_pt' => '{"0":"Você pode ativar o primeiro bônus mesmo sem um código promocional, mas com o código :promocode, as condições ficam ainda mais vantajosas. Não perca essa chance!"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 24
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
             'value_en' => '{"0":"img-3.webp"}',
             'value_es' => '{"0":"img-3.webp"}',
             'value_fr' => '{"0":"img-3.webp"}',
             'value_pt' => '{"0":"img-3.webp"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 25
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Accumulator Bonus"}',
             'value_es' => '{"0":"BONO DE COMBINADA"}',
             'value_fr' => '{"0":"BONUS COMBINÉ"}',
             'value_pt' => '{"0":"BÓNUS DE ACUMULADOR"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 26
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Accumulator bet fans will definitely appreciate the opportunity offered by PARIPESA! Every day, you have access to unique accumulators with an additional +10% bonus if your bet wins! These special bets are called the «Accumulator of the Day», and they’re easy to find — simply scroll down to the bottom of the sportsbook main page."}',
             'value_es' => '{"0":"¡Los aficionados a las apuestas combinadas definitivamente apreciarán la oportunidad que ofrece PARIPESA! Cada día, tienes acceso a combinadas únicas con un bono adicional del +10% si tu apuesta resulta ganadora. Estas apuestas especiales se llaman «Combinada del Día» y son muy fáciles de encontrar: solo tienes que desplazarte hasta la parte inferior de la página principal de apuestas."}',
             'value_fr' => '{"0":"Les amateurs de paris combinés apprécieront sans aucun doute l’opportunité offerte par PARIPESA ! Chaque jour, vous avez accès à des combinés uniques avec un bonus supplémentaire de +10 % en cas de gain ! Ces paris spéciaux sont appelés « Combiné du jour », et vous pouvez les trouver facilement en faisant simplement défiler la page principale des paris vers le bas."}',
             'value_pt' => '{"0":"Os fãs de apostas múltiplas com certeza vão gostar da oportunidade oferecida pela PARIPESA! Todos os dias, você tem acesso a apostas combinadas exclusivas com um bônus adicional de +10% se a aposta for vencedora! Essas apostas especiais são chamadas de «Acumulador do Dia» e são fáceis de encontrar — basta rolar até o final da página principal de apostas."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 27
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"You’ll find up to 40 different accumulators covering a wide range of sports and betting markets. It’s a great way to discover new leagues or sports you might not have followed before."}',
             'value_es' => '{"0":"Allí encontrarás hasta 40 apuestas combinadas diferentes que cubren una gran variedad de deportes y mercados. Es una excelente oportunidad para descubrir nuevas ligas o disciplinas deportivas que quizás no conocías."}',
             'value_fr' => '{"0":"Vous y trouverez jusqu’à 40 paris combinés différents couvrant une grande variété de sports et de marchés. C’est une excellente occasion de découvrir de nouveaux championnats ou disciplines sportives que vous ne connaissiez peut-être pas."}',
             'value_pt' => '{"0":"Você encontrará até 40 acumuladores diferentes cobrindo uma ampla variedade de esportes e mercados. É uma ótima chance de conhecer novos campeonatos ou modalidades esportivas que talvez ainda não acompanhasse."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 28
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
             'value_en' => '{"0":"img-4.webp"}',
             'value_es' => '{"0":"img-4.webp"}',
             'value_fr' => '{"0":"img-4.webp"}',
             'value_pt' => '{"0":"img-4.webp"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 29
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Bonus for a series of losing bets"}',
             'value_es' => '{"0":"Bono por una serie de apuestas perdidas"}',
             'value_fr' => '{"0":"Bonus pour une série de paris perdants"}',
             'value_pt' => '{"0":"Bónus por uma série de apostas perdedoras"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 30
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"A losing streak is never pleasant, but PARIPESA has a nice bonus for you. If you lose 20 bets in a row, you have a chance to receive special compensation!"}',
             'value_es' => '{"0":"Una racha de pérdidas nunca es agradable, pero PARIPESA tiene un bono especial para ti. Si pierdes 20 apuestas consecutivas, ¡tienes la oportunidad de recibir una compensación especial!"}',
             'value_fr' => '{"0":"Une série de paris perdants, ce n’est jamais agréable, mais PARIPESA vous réserve un bonus intéressant. Si vous perdez 20 paris consécutifs, vous pouvez bénéficier d’une compensation spéciale !"}',
             'value_pt' => '{"0":"Uma sequência de apostas perdidas nunca é agradável, mas a PARIPESA tem um bónus especial para si. Se perder 20 apostas seguidas, pode receber uma compensação especial!"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 31
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"To take advantage of this offer, a few conditions must be met. All 20 bets must be placed within 30 days. The minimum stake for each bet is €5, and the odds must not exceed 3.00. Only single and accumulator bets qualify for this promotion."}',
             'value_es' => '{"0":"Para aprovechar esta promoción, debes cumplir algunas condiciones: las 20 apuestas deben realizarse en un plazo de 30 días, el importe mínimo de cada apuesta es de 5 € y la cuota no debe superar 3.00. Solo se tienen en cuenta las apuestas simples y combinadas."}',
             'value_fr' => '{"0":"Pour profiter de cette offre, quelques conditions s’appliquent : les 20 paris doivent être effectués dans un délai de 30 jours, chaque mise doit être d’au moins 5 € et la cote ne doit pas dépasser 3.00. Seuls les paris simples et combinés sont éligibles."}',
             'value_pt' => '{"0":"Para aproveitar esta oferta, é necessário cumprir algumas condições: as 20 apostas devem ser feitas no prazo de 30 dias, o valor mínimo por aposta é de €5 e as odds não devem ultrapassar 3.00. Apenas apostas simples e acumuladas são elegíveis."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 32
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Even if luck isn’t on your side for a while, PARIPESA makes sure you stay in the game!"}',
             'value_es' => '{"0":"Aunque la suerte no esté de tu lado por un tiempo, ¡PARIPESA se asegura de que sigas en el juego!"}',
             'value_fr' => '{"0":"Même si la chance vous tourne le dos, PARIPESA veille à ce que vous restiez dans le jeu !"}',
             'value_pt' => '{"0":"Mesmo que a sorte não esteja do seu lado por um tempo, a PARIPESA garante que você continue no jogo!"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 33
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
             'value_en' => '{"0":"img-5.webp"}',
             'value_es' => '{"0":"img-5.webp"}',
             'value_fr' => '{"0":"img-5.webp"}',
             'value_pt' => '{"0":"img-5.webp"}',
             'order' => 33
            ]
        );
    }
}
