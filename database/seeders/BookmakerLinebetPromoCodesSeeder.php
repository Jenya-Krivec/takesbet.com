<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerLinebetPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 1
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Looking for a reliable Linebet promo code for 2025? Use :promocode during registration and get a 100% sports bonus of up to $130 on your first deposit. Please note that the :promocode promo code can only be used once when creating an account."}',
             'value_es' => '{"0":"¿Buscas un código promocional confiable de Linebet para 2025? Usa :promocode al registrarte y obtén un bono del 100% en deportes de hasta $130 en tu primer depósito. Ten en cuenta que el código :promocode solo se puede utilizar una vez al crear la cuenta."}',
             'value_fr' => '{"0":"Vous cherchez un code promo fiable pour Linebet en 2025 ? Utilisez :promocode lors de votre inscription et recevez un bonus de bienvenue de 100 % jusqu’à 130 $ sur votre premier dépôt. Attention : le code promo :promocode ne peut être utilisé qu\'une seule fois lors de la création du compte."}',
             'value_pt' => '{"0":"Procurando um código promocional confiável da Linebet para 2025? Use :promocode no momento do cadastro e receba um bônus esportivo de 100% até $130 no seu primeiro depósito. Atenção: o código :promocode só pode ser usado uma vez ao criar a conta."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 2
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"In this guide, we explain how the Linebet welcome bonus works for new users and what you should pay attention to."}',
             'value_es' => '{"0":"En esta guía, explicamos cómo funciona el bono de bienvenida de Linebet para nuevos usuarios y en qué debes fijarte."}',
             'value_fr' => '{"0":"Dans ce guide, nous expliquons comment fonctionne le bonus de bienvenue Linebet pour les nouveaux utilisateurs et les points importants à connaître."}',
             'value_pt' => '{"0":"Neste guia, explicamos como funciona o bônus de boas-vindas da Linebet para novos usuários e o que você deve observar."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 3
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"To claim the bonus, register on the platform, enter the :promocode promo code, verify your account, and make a minimum deposit of $1. This offer is available only once per new player."}',
             'value_es' => '{"0":"Para obtener el bono, regístrate en la plataforma, ingresa el código promocional :promocode, verifica tu cuenta y realiza un depósito mínimo de $1. Esta oferta está disponible solo una vez por nuevo jugador."}',
             'value_fr' => '{"0":"Pour obtenir le bonus, inscrivez-vous sur la plateforme, entrez le code promo :promocode, vérifiez votre compte et effectuez un dépôt minimum de 1 $. Cette offre n’est valable qu’une seule fois par nouveau joueur."}',
             'value_pt' => '{"0":"Para receber o bônus, cadastre-se na plataforma, insira o código promocional :promocode, verifique sua conta e faça um depósito mínimo de $1. Esta oferta está disponível apenas uma vez por novo jogador."}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 4
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 5
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
                'value_en' => '{"0":"Why use the Linebet promo code?"}',
                'value_es' => '{"0":"¿Por qué usar el código promocional de Linebet?"}',
                'value_fr' => '{"0":"Pourquoi utiliser le code promo Linebet ?"}',
                'value_pt' => '{"0":"Por que usar o código promocional da Linebet?"}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 6
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
                'value_en' => '{"0":"When choosing a new bookmaker, it\'s important to feel a sense of trust. Our review of the Linebet betting site will give confidence to those considering creating an account."}',
                'value_es' => '{"0":"A la hora de elegir una nueva casa de apuestas, es importante sentir confianza. Nuestra reseña sobre Linebet brinda seguridad a quienes están considerando crear una cuenta."}',
                'value_fr' => '{"0":"Lorsqu\'on choisit un nouveau bookmaker, il est important de se sentir en confiance. Notre avis sur Linebet apportera de l’assurance à ceux qui envisagent d’ouvrir un compte."}',
                'value_pt' => '{"0":"Ao escolher uma nova casa de apostas, é importante ter uma sensação de confiança. Nossa análise da Linebet ajuda a dar segurança para quem está pensando em criar uma conta."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 7
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
                'value_en' => '{"0":"In addition, it\'s a great opportunity to take full advantage of Linebet’s welcome offer. By using the promo code :promocode during registration, you’ll receive a 100% bonus on your first deposit."}',
                'value_es' => '{"0":"Además, es una excelente oportunidad para aprovechar al máximo la oferta de bienvenida de Linebet. Al usar el código promocional :promocode durante el registro, recibirás un bono del 100% en tu primer depósito."}',
                'value_fr' => '{"0":"De plus, c’est une excellente occasion de profiter pleinement de l’offre de bienvenue de Linebet. En utilisant le code promo :promocode lors de l’inscription, vous recevrez un bonus de 100 % sur votre premier dépôt."}',
                'value_pt' => '{"0":"Além disso, é uma ótima chance de aproveitar ao máximo a oferta de boas-vindas da Linebet. Ao utilizar o código promocional :promocode no momento do cadastro, você recebe um bônus de 100% no primeiro depósito."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 8
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
                'value_en' => '{"0":"How to benefit from the Linebet promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de Linebet?"}',
                'value_fr' => '{"0":"Comment profiter du code promo Linebet ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da Linebet?"}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 9
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
                'value_en' => '{"0":"In this section, we’ll explain in detail the exact steps you need to follow to take advantage of this impressive offer. This will help you complete the process more quickly and avoid any potential issues or mistakes."}',
                'value_es' => '{"0":"En esta sección, detallaremos los pasos que debes seguir para aprovechar esta increíble oferta. Esto te ayudará a completar el proceso más rápidamente y evitar posibles errores o inconvenientes."}',
                'value_fr' => '{"0":"Dans cette section, nous décrirons en détail les étapes à suivre pour profiter de cette offre exceptionnelle. Cela vous permettra de gagner du temps et d’éviter d’éventuelles erreurs ou complications."}',
                'value_pt' => '{"0":"Nesta seção, explicaremos em detalhes os passos que você deve seguir para aproveitar esta oferta impressionante. Isso ajudará você a concluir o processo mais rapidamente e evitar possíveis erros ou contratempos."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 10
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h4',
                'value_en' => '{"0":"Click on the promo link"}',
                'value_es' => '{"0":"Haz clic en el enlace promocional"}',
                'value_fr' => '{"0":"Cliquez sur le lien promotionnel"}',
                'value_pt' => '{"0":"Clique no link promocional"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 11
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Go to the official website by clicking the «Registration» button at the top of this page. Then, on the official Linebet site, click the green «Registration» button and choose a convenient sign-up method — for example, one-click registration."}',
             'value_es' => '{"0":"Ve al sitio web oficial haciendo clic en el botón «Registro» en la parte superior de esta página. Luego, en el sitio oficial de Linebet, haz clic en el botón verde «Registro» y elige el método de registro que prefieras, por ejemplo, el registro con un solo clic."}',
             'value_fr' => '{"0":"Accédez au site officiel en cliquant sur le bouton « Inscription » en haut de cette page. Ensuite, sur le site officiel de Linebet, cliquez sur le bouton vert « Inscription » et choisissez une méthode d\'inscription pratique, par exemple l\'inscription en un clic."}',
             'value_pt' => '{"0":"Acesse o site oficial clicando no botão «Registro» no topo desta página. Em seguida, no site oficial da Linebet, clique no botão verde «Registro» e escolha o método de cadastro mais conveniente — por exemplo, o registro com um clique."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 12
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h4',
                'value_en' => '{"0":"Fill in the Linebet registration form with the code :promocode"}',
                'value_es' => '{"0":"Rellena el formulario de registro de Linebet con el código :promocode"}',
                'value_fr' => '{"0":"Remplissez le formulaire d’inscription Linebet avec le code :promocode"}',
                'value_pt' => '{"0":"Preencha o formulário de registro da Linebet com o código :promocode"}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 13
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
                'value_en' => '{"0":"Fill in the form carefully, providing only accurate information. Any mistakes or incorrect details may significantly complicate the next steps of the registration process, especially step three."}',
                'value_es' => '{"0":"Completa el formulario con cuidado, asegurándote de proporcionar solo información precisa. Los errores o datos incorrectos pueden dificultar seriamente los siguientes pasos del proceso de registro, especialmente el tercer paso."}',
                'value_fr' => '{"0":"Remplissez ce formulaire avec soin en fournissant uniquement des informations exactes. Toute erreur ou information incorrecte pourrait compliquer sérieusement les étapes suivantes de l’inscription, en particulier la troisième."}',
                'value_pt' => '{"0":"Preencha o formulário com atenção, fornecendo apenas informações corretas. Qualquer erro ou dado incorreto pode dificultar bastante as próximas etapas do processo de registro, especialmente a terceira."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 14
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your new account"}',
                'value_es' => '{"0":"Verifica tu nueva cuenta"}',
                'value_fr' => '{"0":"Vérifiez votre nouveau compte"}',
                'value_pt' => '{"0":"Verifique sua nova conta"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 15
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"After that, don’t forget to verify your account — fill in your personal details, including your name, date of birth, permanent address, and upload a photo of an official ID document. To do this, click on the profile icon at the top of the page and go to the «Personal Profile» section."}',
             'value_es' => '{"0":"Después de eso, no olvides verificar tu cuenta — completa tus datos personales, incluyendo tu nombre, fecha de nacimiento, dirección de residencia permanente, y sube una foto de un documento oficial de identidad. Para hacerlo, haz clic en el ícono de perfil en la parte superior de la página y accede a la sección «Perfil personal»."}',
             'value_fr' => '{"0":"Ensuite, n\'oubliez pas de vérifier votre compte — remplissez vos informations personnelles, y compris votre nom, date de naissance, adresse permanente, et téléchargez une photo d’un document d’identité officiel. Pour cela, cliquez sur l’icône de profil en haut de la page et accédez à la section « Profil personnel »."}',
             'value_pt' => '{"0":"Depois disso, não se esqueça de verificar sua conta — preencha seus dados pessoais, incluindo nome, data de nascimento, endereço permanente e envie uma foto de um documento oficial de identidade. Para isso, clique no ícone de perfil no topo da página e vá até a seção «Perfil Pessoal»."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 16
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h4',
                'value_en' => '{"0":"Make your first deposit with Linebet"}',
                'value_es' => '{"0":"Haz tu primer depósito en Linebet"}',
                'value_fr' => '{"0":"Effectuez votre premier dépôt sur Linebet"}',
                'value_pt' => '{"0":"Faça o seu primeiro depósito na Linebet"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 17
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
                'value_en' => '{"0":"To take advantage of Linebet’s bonus offer, you first need to make a deposit. The minimum deposit is $1, but to get the most value, it’s recommended to deposit a larger amount — as close to the maximum limit as possible."}',
                'value_es' => '{"0":"Para aprovechar la oferta de bonificación de Linebet, primero debes realizar un depósito. El depósito mínimo es de $1, pero para obtener el mayor beneficio, se recomienda ingresar una cantidad mayor, lo más cercana posible al límite máximo."}',
                'value_fr' => '{"0":"Pour bénéficier de l’offre de bonus de Linebet, vous devez d’abord effectuer un dépôt. Le dépôt minimum est de 1 $, mais pour maximiser vos avantages, il est conseillé de déposer un montant plus élevé, aussi proche que possible de la limite maximale."}',
                'value_pt' => '{"0":"Para aproveitar a oferta de bônus da Linebet, primeiro você precisa fazer um depósito. O valor mínimo é de $1, mas para aproveitar ao máximo, é recomendável depositar uma quantia maior — o mais próximo possível do valor máximo."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 18
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
                'value_en' => '{"0":"Linebet offers a 100% bonus for those who deposit the maximum amount, so it\'s best to invest as much as you\'re comfortable with. Remember to gamble responsibly: never deposit more than you can afford to lose. Even a $1 deposit qualifies for the bonus."}',
                'value_es' => '{"0":"Linebet ofrece un bono del 100% para quienes realicen el depósito máximo, por lo que conviene invertir lo que te resulte cómodo. Recuerda jugar con responsabilidad: no ingreses más de lo que puedas permitirte perder. Incluso con solo $1 ya puedes activar el bono."}',
                'value_fr' => '{"0":"Linebet offre un bonus de 100 % à ceux qui effectuent un dépôt maximal, donc mieux vaut investir une somme avec laquelle vous êtes à l’aise. Jouez de manière responsable : ne déposez jamais plus que ce que vous pouvez vous permettre de perdre. Même un dépôt de 1 $ permet de bénéficier du bonus."}',
                'value_pt' => '{"0":"A Linebet oferece um bônus de 100% para quem deposita o valor máximo, então invista apenas o que estiver dentro do seu orçamento. Jogue com responsabilidade: nunca deposite mais do que pode perder. Mesmo com $1, você já pode ativar o bônus."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 19
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
                'value_en' => '{"0":"What if you are already registered at Linebet?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en Linebet?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur Linebet ?"}',
                'value_pt' => '{"0":"E se você já for registrado na Linebet?"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 20
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"If you’re already registered on the Linebet platform, you won’t be able to use the promo code. However, Linebet offers more than 10 betting promotions, including, for example, weekly cashback. In this guide, we’ve collected the best offers available for both new and existing users."}',
             'value_es' => '{"0":"Si ya estás registrado en la plataforma de Linebet, no podrás usar el código promocional. Sin embargo, Linebet ofrece más de 10 promociones para apuestas, incluyendo, por ejemplo, un reembolso semanal. En este análisis hemos reunido las mejores ofertas disponibles tanto para nuevos como para usuarios habituales."}',
             'value_fr' => '{"0":"Si vous êtes déjà inscrit sur la plateforme Linebet, vous ne pourrez pas utiliser le code promo. Cependant, Linebet propose plus de 10 offres promotionnelles pour les paris, comme par exemple un cashback hebdomadaire. Dans ce guide, nous avons rassemblé les meilleures offres disponibles pour les nouveaux comme pour les utilisateurs réguliers."}',
             'value_pt' => '{"0":"Se você já está registrado na plataforma Linebet, não poderá usar o código promocional. No entanto, a Linebet oferece mais de 10 promoções de apostas, incluindo, por exemplo, cashback semanal. Neste guia, reunimos as melhores ofertas disponíveis tanto para novos quanto para usuários frequentes."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 21
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Weekly Cashback"}',
             'value_es' => '{"0":"Devolución semanal"}',
             'value_fr' => '{"0":"Cashback hebdomadaire"}',
             'value_pt' => '{"0":"Cashback semanal"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 22
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Love sports betting and just getting started? Linebet has a great cashback bonus for you. Every week, the bookmaker returns 0.3% of your total bet amount, up to $1,000. The funds are credited every Wednesday. To qualify, place bets with odds of at least 1.50."}',
             'value_es' => '{"0":"¿Te gustan las apuestas deportivas y estás comenzando? Linebet tiene un excelente bono de reembolso para ti. Cada semana, el operador devuelve el 0,3% del total apostado, hasta $1.000. Los fondos se acreditan cada miércoles. Para calificar, realiza apuestas con cuotas mínimas de 1.50."}',
             'value_fr' => '{"0":"Vous aimez les paris sportifs et débutez tout juste ? Linebet vous propose un excellent bonus cashback. Chaque semaine, le bookmaker vous rembourse 0,3 % du montant total de vos mises, jusqu’à 1 000 $. Les fonds sont crédités chaque mercredi. Pour en bénéficier, il faut effectuer des paris avec une cote minimale de 1.50."}',
             'value_pt' => '{"0":"Gosta de apostas esportivas e está começando agora? A Linebet tem um ótimo bônus de cashback para você. Toda semana, a casa devolve 0,3% do valor total das apostas, até $1.000. Os fundos são creditados toda quarta-feira. Para se qualificar, faça apostas com cota mínima de 1.50."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 23
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
             'value_en' => '{"0":"img-2.webp"}',
             'value_es' => '{"0":"img-2.webp"}',
             'value_fr' => '{"0":"img-2.webp"}',
             'value_pt' => '{"0":"img-2.webp"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 24
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Accumulator Of The Day"}',
             'value_es' => '{"0":"Combinada del día"}',
             'value_fr' => '{"0":"Pari Combiné du Jour"}',
             'value_pt' => '{"0":"Acumulador do Dia"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 25
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Choose the «Accumulator of the Day» on Linebet and get +10% to your winnings if the bet wins! Simply log in to your account, place a bet on the recommended acca — and enjoy boosted odds. Important: You cannot change the events in the accumulator."}',
             'value_es' => '{"0":"Elige el «Combinada del día» en Linebet y recibe un 10% extra en tus ganancias si tu apuesta resulta ganadora. Solo inicia sesión, apuesta en el acumulador recomendado ¡y aprovecha las cuotas mejoradas! Importante: no se permite modificar los eventos del acumulador."}',
             'value_fr' => '{"0":"Choisissez l’« Pari Combiné du Jour » sur Linebet et obtenez +10 % sur vos gains si le pari est gagnant ! Connectez-vous simplement à votre compte, pariez sur l’accumulateur recommandé — et profitez de cotes boostées. Important : il est interdit de modifier les événements de l’accumulateur."}',
             'value_pt' => '{"0":"Escolha o «Acumulador do Dia» na Linebet e ganhe +10% nos seus lucros se a aposta for vencedora! Basta fazer login na sua conta, apostar no acumulador recomendado — e aproveitar as odds aumentadas. Importante: não é permitido alterar os eventos do acumulador."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 26
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
             'value_en' => '{"0":"img-3.webp"}',
             'value_es' => '{"0":"img-3.webp"}',
             'value_fr' => '{"0":"img-3.webp"}',
             'value_pt' => '{"0":"img-3.webp"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 27
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"LUCKY MONDAY PROMO"}',
             'value_es' => '{"0":"PROMOCIÓN LUNES DE LA SUERTE"}',
             'value_fr' => '{"0":"PROMO LUNDI CHANCEUX"}',
             'value_pt' => '{"0":"PROMOÇÃO SEGUNDA-FEIRA AFORTUNADA"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 28
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet offers a 100% deposit bonus every Monday — up to $100. To take part in this promotion, you must have a verified account and deposit at least $1."}',
             'value_es' => '{"0":"Linebet ofrece un bono del 100% sobre tu depósito cada lunes — hasta $100. Para participar en esta promoción, debes tener una cuenta verificada y hacer un depósito mínimo de $1."}',
             'value_fr' => '{"0":"Linebet offre un bonus de dépôt de 100 % chaque lundi — jusqu’à 100 $. Pour participer à cette promotion, vous devez avoir un compte vérifié et effectuer un dépôt minimum de 1 $."}',
             'value_pt' => '{"0":"A Linebet oferece um bônus de 100% no depósito todas as segundas-feiras — até $100. Para participar da promoção, você deve ter uma conta verificada e depositar no mínimo $1."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 29
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"To withdraw the bonus, you must place accumulator bets with at least three events, each having minimum odds of 1.40. The bonus is valid for 24 hours after it’s credited. Cryptocurrency deposits are not eligible for this offer."}',
             'value_es' => '{"0":"Para retirar el bono, debes realizar apuestas combinadas con al menos tres eventos, cada uno con una cuota mínima de 1.40. El bono es válido durante 24 horas después de ser acreditado. Los depósitos en criptomonedas no califican para esta promoción."}',
             'value_fr' => '{"0":"Pour retirer le bonus, vous devez placer des paris combinés avec au moins trois événements, chacun avec une cote minimale de 1.40. Le bonus est valable pendant 24 heures après son attribution. Les dépôts en cryptomonnaie ne sont pas éligibles à cette offre."}',
             'value_pt' => '{"0":"Para sacar o bônus, é necessário apostar em acumuladores com pelo menos três eventos, cada um com odds mínimas de 1.40. O bônus é válido por 24 horas após ser creditado. Depósitos em criptomoeda não são elegíveis para esta oferta."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 30
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
             'value_en' => '{"0":"img-4.webp"}',
             'value_es' => '{"0":"img-4.webp"}',
             'value_fr' => '{"0":"img-4.webp"}',
             'value_pt' => '{"0":"img-4.webp"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 31
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Casino VIP Cashback"}',
             'value_es' => '{"0":"Devolución VIP en Casino"}',
             'value_fr' => '{"0":"Cashback VIP Casino"}',
             'value_pt' => '{"0":"Cashback VIP do casino"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 32
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The Linebet loyalty program offers VIP cashback, exclusive bonuses, and personalized promotions. All users start at Level 1 – «Copper», and move up the tiers as they place active bets."}',
             'value_es' => '{"0":"El programa de fidelidad de Linebet ofrece cashback VIP, bonos exclusivos y promociones personalizadas. Todos los usuarios comienzan en el Nivel 1 – «Cobre» y ascienden de nivel a medida que realizan apuestas activas."}',
             'value_fr' => '{"0":"Le programme de fidélité de Linebet propose du cashback VIP, des bonus exclusifs et des offres personnalisées. Tous les utilisateurs commencent au niveau 1 – « Cuivre » – et montent en grade à mesure qu’ils placent des paris actifs."}',
             'value_pt' => '{"0":"O programa de fidelidade da Linebet oferece cashback VIP, bônus exclusivos e promoções personalizadas. Todos os usuários começam no Nível 1 — «Cobre» — e sobem de nível conforme fazem apostas ativas."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 33
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The higher your level, the greater your cashback rate — for example, 5% at «Copper», 8% at «Gold», and up to 11% at «Diamond». Once you reach VIP status, cashback is calculated based on your total betting volume, not on your net losses."}',
             'value_es' => '{"0":"Cuanto más alto sea tu nivel, mayor será el porcentaje de reembolso: por ejemplo, 5% en «Cobre», 8% en «Oro» y hasta 11% en «Diamante». Una vez alcanzado el estatus VIP, el cashback se calcula en función del volumen total de apuestas, no de las pérdidas netas."}',
             'value_fr' => '{"0":"Plus le niveau est élevé, plus le pourcentage de cashback augmente — par exemple, 5 % au niveau « Cuivre », 8 % au niveau « Or » et jusqu’à 11 % au niveau « Diamant ». Une fois le statut VIP atteint, le cashback est calculé sur le volume total des mises et non sur les pertes nettes."}',
             'value_pt' => '{"0":"Quanto maior o seu nível, maior o percentual de cashback: por exemplo, 5% no nível «Cobre», 8% no «Ouro» e até 11% no «Diamante». Após atingir o status VIP, o cashback é calculado com base no volume total de apostas, e não nas perdas líquidas."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 34
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
             'value_en' => '{"0":"img-5.webp"}',
             'value_es' => '{"0":"img-5.webp"}',
             'value_fr' => '{"0":"img-5.webp"}',
             'value_pt' => '{"0":"img-5.webp"}',
             'order' => 34
            ]
        );
    }
}
