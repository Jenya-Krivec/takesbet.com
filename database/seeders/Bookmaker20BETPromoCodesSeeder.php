<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker20BETPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 1
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET is a popular international betting platform that welcomes users from many countries and offers a wide range of sports markets and an exciting online casino."}',
             'value_es' => '{"0":"20BET es una popular plataforma de apuestas internacional que acepta usuarios de numerosos países y ofrece una amplia gama de mercados deportivos y un emocionante casino online."}',
             'value_fr' => '{"0":"20BET est une plateforme de paris internationale populaire, accessible depuis de nombreux pays, offrant un large choix de marchés sportifs et un casino en ligne passionnant."}',
             'value_pt' => '{"0":"O 20BET é uma popular plataforma internacional de apostas que aceita usuários de diversos países e oferece uma ampla variedade de mercados esportivos e um emocionante cassino online."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 2
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"New players can use the promo code :promocode to get a 100% bonus on their first deposit, up to €100. Additionally, new casino users can claim 120 free spins — just sign up using the promo code :promocode."}',
             'value_es' => '{"0":"Los nuevos jugadores pueden utilizar el código promocional :promocode para obtener un bono del 100% en su primer depósito, hasta €100. Además, los nuevos usuarios del casino pueden recibir 120 giros gratis — solo deben registrarse usando el código promocional :promocode."}',
             'value_fr' => '{"0":"Les nouveaux joueurs peuvent utiliser le code promo :promocode pour recevoir un bonus de 100 % sur leur premier dépôt, jusqu’à 100 €. De plus, les nouveaux utilisateurs du casino peuvent obtenir 120 tours gratuits — il suffit de s’inscrire avec le code promo :promocode."}',
             'value_pt' => '{"0":"Novos jogadores podem usar o código promocional :promocode para receber um bônus de 100% no primeiro depósito, até €100. Além disso, novos usuários do cassino podem ganhar 120 rodadas grátis — basta se registrar usando o código :promocode."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 3
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
             'value_en' => '{"0":"img-1.jpg"}',
             'value_es' => '{"0":"img-1.jpg"}',
             'value_fr' => '{"0":"img-1.jpg"}',
             'value_pt' => '{"0":"img-1.jpg"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 4
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
                'value_en' => '{"0":"Why Use the 20BET Promo Code?"}',
                'value_es' => '{"0":"¿Por qué usar el código promocional de 20BET?"}',
                'value_fr' => '{"0":"Pourquoi utiliser le code promo 20BET ?"}',
                'value_pt' => '{"0":"Por que usar o código promocional da 20BET?"}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 5
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Takesbet, in collaboration with 20BET, offers the most up-to-date bonuses and promo codes for new users. We recommend using the promo code provided here, as it is valid for both sports betting and casino games, and guarantees an extra cash bonus upon registration."}',
             'value_es' => '{"0":"Takesbet, en colaboración con 20BET, ofrece los bonos y códigos promocionales más actualizados para nuevos usuarios. Recomendamos utilizar el código promocional que se encuentra aquí, ya que es válido tanto para apuestas deportivas como para juegos de casino, y garantiza un bono en efectivo adicional al registrarte."}',
             'value_fr' => '{"0":"Takesbet, en partenariat avec 20BET, propose les bonus et codes promo les plus récents pour les nouveaux utilisateurs. Nous vous recommandons d’utiliser le code promo fourni ici, car il est valable pour les paris sportifs et les jeux de casino, et vous garantit un bonus en argent supplémentaire lors de l’inscription."}',
             'value_pt' => '{"0":"A Takesbet, em parceria com a 20BET, oferece os bônus e códigos promocionais mais atualizados para novos usuários. Recomendamos o uso do código promocional fornecido aqui, pois ele é válido tanto para apostas esportivas quanto para jogos de cassino, e garante um bônus em dinheiro extra no momento do registro."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 6
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Our goal is to bring you the best offers from 20BET. Just follow the simple steps and claim your welcome bonus during registration!"}',
             'value_es' => '{"0":"Nuestro objetivo es brindarte las mejores ofertas de 20BET. ¡Sigue unos simples pasos y obtén tu bono de bienvenida al registrarte!"}',
             'value_fr' => '{"0":"Notre objectif est de vous offrir les meilleures offres de 20BET. Suivez simplement les étapes et recevez votre bonus de bienvenue dès l’inscription !"}',
             'value_pt' => '{"0":"Nosso objetivo é trazer as melhores ofertas da 20BET para você. Basta seguir os passos simples e garantir seu bônus de boas-vindas ao se cadastrar!"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 7
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
                'value_en' => '{"0":"How To Benefit From the 20BET Bonus"}',
                'value_es' => '{"0":"Cómo beneficiarse del bono de 20BET"}',
                'value_fr' => '{"0":"Comment profiter du bonus 20BET"}',
                'value_pt' => '{"0":"Como aproveitar o bônus da 20BET"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 8
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"To activate our exclusive promo code, you need to create an account at 20BET casino. The registration process won’t take much of your time. And to make it even easier, we’ve prepared a step-by-step guide for you:"}',
             'value_es' => '{"0":"Para activar nuestro código promocional exclusivo, necesitas crear una cuenta en el casino 20BET. El proceso de registro no te llevará mucho tiempo. Y para hacerlo aún más sencillo, hemos preparado una guía paso a paso para ti:"}',
             'value_fr' => '{"0":"Pour activer notre code promo exclusif, vous devez créer un compte sur le casino 20BET. Le processus d’inscription ne vous prendra pas beaucoup de temps. Et pour vous faciliter encore plus la tâche, nous avons préparé un guide étape par étape :"}',
             'value_pt' => '{"0":"Para ativar o nosso código promocional exclusivo, você precisa criar uma conta no cassino 20BET. O processo de registro não vai levar muito do seu tempo. E para facilitar ainda mais, preparamos um guia passo a passo para você:"}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 9
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h4',
                'value_en' => '{"0":"Head over to the 20BET site"}',
                'value_es' => '{"0":"Ve al sitio web de 20BET"}',
                'value_fr' => '{"0":"Rendez-vous sur le site de 20BET"}',
                'value_pt' => '{"0":"Acesse o site da 20BET"}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 10
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
                'value_en' => '{"0":"To activate the welcome bonus, simply click on one of the links provided in this review — you\'ll be instantly redirected to the official 20BET bookmaker page."}',
                'value_es' => '{"0":"Para activar el bono de bienvenida, simplemente haz clic en uno de los enlaces incluidos en esta reseña: serás redirigido de inmediato a la página oficial de la casa de apuestas 20BET."}',
                'value_fr' => '{"0":"Pour activer le bonus de bienvenue, il vous suffit de cliquer sur l’un des liens proposés dans cet article — vous serez immédiatement redirigé vers la page officielle du site de paris 20BET."}',
                'value_pt' => '{"0":"Para ativar o bônus de boas-vindas, basta clicar em um dos links fornecidos nesta análise — você será redirecionado imediatamente para a página oficial da casa de apostas 20BET."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 11
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h4',
                'value_en' => '{"0":"Fill in the registration form"}',
                'value_es' => '{"0":"Rellena el formulario de registro"}',
                'value_fr' => '{"0":"Remplissez le formulaire d\'inscription"}',
                'value_pt' => '{"0":"Preencha o formulário de registro"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 12
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"On the 20BET website, find and click the «SIGN UP» button in the top right corner. You will then need to complete a three-step registration form. We recommend providing accurate and up-to-date information, as it will need to be verified later."}',
             'value_es' => '{"0":"En el sitio web de 20BET, busca y haz clic en el botón «SIGN UP» en la esquina superior derecha. Luego deberás completar un formulario de registro en tres pasos. Recomendamos ingresar información actual y precisa, ya que será necesario verificarla más adelante."}',
             'value_fr' => '{"0":"Sur le site de 20BET, cliquez sur le bouton «SIGN UP» situé en haut à droite de l’écran. Vous devrez ensuite remplir un formulaire d’inscription en trois étapes. Nous vous recommandons de fournir des informations exactes et à jour, car elles devront être vérifiées par la suite."}',
             'value_pt' => '{"0":"No site da 20BET, localize e clique no botão «SIGN UP» no canto superior direito. Em seguida, será necessário preencher um formulário de registro em três etapas. Recomendamos inserir informações corretas e atualizadas, pois elas precisarão ser verificadas posteriormente."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 13
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account information"}',
                'value_es' => '{"0":"Verifica la información de tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez les informations de votre compte"}',
                'value_pt' => '{"0":"Verifique as informações da sua conta"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 14
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"After registering at 20BET casino, you need to activate your account in order to claim the first deposit bonus. To do this, open your email and click the link you received. The next step is to verify your identity in your account settings by uploading a photo of your passport or driver’s license."}',
             'value_es' => '{"0":"Después de registrarte en el casino 20BET, debes activar tu cuenta para poder obtener el bono por el primer depósito. Para ello, abre tu correo electrónico y haz clic en el enlace que has recibido. El siguiente paso es verificar tu identidad en la configuración de tu cuenta, subiendo una foto de tu pasaporte o licencia de conducir."}',
             'value_fr' => '{"0":"Après votre inscription au casino 20BET, vous devez activer votre compte pour pouvoir bénéficier du bonus sur le premier dépôt. Pour cela, ouvrez votre boîte mail et cliquez sur le lien reçu. L’étape suivante consiste à vérifier votre identité dans les paramètres du compte en téléchargeant une photo de votre passeport ou de votre permis de conduire."}',
             'value_pt' => '{"0":"Após se registrar no cassino 20BET, você precisa ativar sua conta para poder receber o bônus de primeiro depósito. Para isso, abra seu e-mail e clique no link que você recebeu. O próximo passo é verificar sua identidade nas configurações da conta, enviando uma foto do seu passaporte ou carteira de motorista."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 15
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h4',
                'value_en' => '{"0":"Make a deposit"}',
                'value_es' => '{"0":"Realizar un depósito"}',
                'value_fr' => '{"0":"Effectuer un dépôt"}',
                'value_pt' => '{"0":"Fazer um depósito"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 16
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
                'value_en' => '{"0":"The next step is to top up your 20BET gaming account! You can choose from several payment methods, and each of them qualifies for the welcome bonus, so you don’t have to worry about it."}',
                'value_es' => '{"0":"El siguiente paso es recargar tu cuenta de juego en 20BET. Puedes elegir entre varios métodos de pago, y todos ellos califican para el bono de bienvenida, así que no tienes que preocuparte por eso."}',
                'value_fr' => '{"0":"L’étape suivante consiste à recharger votre compte de jeu sur 20BET ! Vous pouvez choisir parmi plusieurs méthodes de paiement, chacune donnant droit au bonus de bienvenue, donc vous n’avez pas à vous en soucier."}',
                'value_pt' => '{"0":"O próximo passo é recarregar sua conta de jogo na 20BET! Você pode escolher entre vários métodos de pagamento, e todos eles dão direito ao bônus de boas-vindas, então não precisa se preocupar com isso."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 17
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
                'value_en' => '{"0":"Receive your bonus"}',
                'value_es' => '{"0":"Recibe tu bono"}',
                'value_fr' => '{"0":"Recevez votre bonus"}',
                'value_pt' => '{"0":"Receba seu bônus"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 18
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
                'value_en' => '{"0":"What To Do if You Already Have an Account at 20BET?"}',
                'value_es' => '{"0":"¿Qué hacer si ya tienes una cuenta en 20BET?"}',
                'value_fr' => '{"0":"Que faire si vous avez déjà un compte sur 20BET ?"}',
                'value_pt' => '{"0":"O que fazer se você já tem uma conta na 20BET?"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 19
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
                'value_en' => '{"0":"Unfortunately, if you have already made a deposit on 20BET, you will not be eligible for this welcome bonus. However, the platform still offers many other attractive promotions for existing users, including appealing reload bonuses such as «SECRET BONUS»."}',
                'value_es' => '{"0":"Lamentablemente, si ya has realizado un depósito en 20BET, no podrás obtener este bono de bienvenida. Sin embargo, la plataforma sigue ofreciendo muchas otras promociones atractivas para usuarios existentes, incluyendo bonos de recarga como «Bono Secreto»."}',
                'value_fr' => '{"0":"Malheureusement, si vous avez déjà effectué un dépôt sur 20BET, vous ne pourrez pas bénéficier de ce bonus de bienvenue. Toutefois, la plateforme propose encore de nombreuses autres promotions intéressantes pour les utilisateurs existants, telles que les bonus de rechargement « Bonus Secret »."}',
                'value_pt' => '{"0":"Infelizmente, se você já fez um depósito na 20BET, não poderá receber este bônus de boas-vindas. No entanto, a plataforma ainda oferece muitas outras promoções atraentes para usuários existentes, incluindo bônus de recarga como «Bónus Secreto»."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
                'order' => 20
            ],
            ['key' => '20bet',
                'bookmaker_id' => 12,
                'component' => 'h3',
                'value_en' => '{"0":"Is There a No-Deposit 20BET Promo Code?"}',
                'value_es' => '{"0":"¿Existe un código promocional de 20BET sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il un code promo 20BET sans dépôt ?"}',
                'value_pt' => '{"0":"Existe um código promocional da 20BET sem depósito?"}',
                'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
                'order' => 21
            ],
            ['key' => '20bet',
                'bookmaker_id' => 12,
                'component' => 'p',
                'value_en' => '{"0":"Currently, the no deposit bonus is not available at 20BET casino. However, sometimes no deposit bonus promo codes may appear. Therefore, we recommend following the official social media pages of the site so you don’t miss a 20BET bonus code that will allow you to get a no deposit bonus with a favorable maximum withdrawal limit."}',
                'value_es' => '{"0":"Actualmente, el bono sin depósito no está disponible en el casino 20BET. Sin embargo, a veces pueden aparecer códigos promocionales para bonos sin depósito. Por lo tanto, recomendamos seguir las páginas oficiales de redes sociales del sitio para no perderse un código de bono 20BET que le permita obtener un bono sin depósito con un límite máximo de retiro favorable."}',
                'value_fr' => '{"0":"Actuellement, le bonus sans dépôt n’est pas disponible au casino 20BET. Cependant, il peut arriver que des codes promotionnels pour un bonus sans dépôt soient proposés. Nous vous recommandons donc de suivre les pages officielles du site sur les réseaux sociaux afin de ne pas manquer un code bonus 20BET qui vous permettra d’obtenir un bonus sans dépôt avec une limite de retrait maximale avantageuse."}',
                'value_pt' => '{"0":"Atualmente, o bônus sem depósito não está disponível no cassino 20BET. No entanto, às vezes podem surgir códigos promocionais para bônus sem depósito. Portanto, recomendamos que você siga as páginas oficiais do site nas redes sociais para não perder um código bônus 20BET que permita obter um bônus sem depósito com um limite máximo de saque vantajoso."}',
                'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 22
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Forecasts"}',
             'value_es' => '{"0":"Pronósticos"}',
             'value_fr' => '{"0":"Pronostics"}',
             'value_pt' => '{"0":"Previsões"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 23
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"One of the most rewarding bonus offers on this site is the «Forecasts» promotion. This offer is designed for sports betting and is part of the VIP program for active players. With Forecasts, you can receive free bets worth up to €1000 simply by correctly predicting the outcomes of selected sports events."}',
             'value_es' => '{"0":"Una de las promociones más atractivas del sitio es la oferta «Pronósticos». Está destinada a las apuestas deportivas y forma parte del programa VIP para jugadores activos. Con Pronósticos, puedes ganar apuestas gratuitas por un valor de hasta €1000 simplemente acertando los resultados de eventos deportivos seleccionados."}',
             'value_fr' => '{"0":"L\'une des offres les plus intéressantes sur ce site est la promotion « Pronostics ». Elle est destinée aux paris sportifs et fait partie du programme VIP pour les joueurs actifs. Grâce à cette offre, vous pouvez recevoir des paris gratuits allant jusqu\'à 1000 € en devinant correctement les résultats d’événements sportifs sélectionnés."}',
             'value_pt' => '{"0":"Uma das promoções mais vantajosas do site é a campanha «Previsões». Esta oferta é destinada a apostas esportivas e faz parte do programa VIP para jogadores ativos. Com o Previsões, você pode ganhar apostas grátis de até €1000 simplesmente prevendo corretamente os resultados de eventos esportivos selecionados."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 24
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The main requirement is to have made a total deposit of at least €20 within the last 5 days. No bonus codes are needed! Just predict the results of 10 pre-selected events."}',
             'value_es' => '{"0":"El requisito principal es haber depositado al menos €20 en los últimos 5 días. ¡No necesitas ningún código promocional! Solo tienes que predecir los resultados de 10 eventos seleccionados."}',
             'value_fr' => '{"0":"La condition principale est d’avoir effectué un dépôt total d’au moins 20 € au cours des 5 derniers jours. Aucun code bonus n’est requis ! Il suffit de prédire les résultats de 10 événements présélectionnés."}',
             'value_pt' => '{"0":"O principal requisito é ter feito depósitos de pelo menos €20 nos últimos 5 dias. Não é necessário usar códigos promocionais! Basta prever os resultados de 10 eventos pré-selecionados."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 25
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
             'value_en' => '{"0":"img-2.jpg"}',
             'value_es' => '{"0":"img-2.jpg"}',
             'value_fr' => '{"0":"img-2.jpg"}',
             'value_pt' => '{"0":"img-2.jpg"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 26
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Saturday reload bonus"}',
             'value_es' => '{"0":"Bono de recarga del sábado"}',
             'value_fr' => '{"0":"Bonus de dépôt du samedi"}',
             'value_pt' => '{"0":"Bónus de recarga ao sábado"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 27
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"One of the popular bonuses at 20BET casino is the Saturday deposit reload bonus. To participate, you need to make a deposit of at least €20 on Saturday."}',
             'value_es' => '{"0":"Uno de los bonos populares en el casino 20BET es el bono de recarga por depósito del sábado. Para participar, debes hacer un depósito de al menos €20 el sábado."}',
             'value_fr' => '{"0":"L’un des bonus populaires au casino 20BET est le bonus de rechargement du samedi. Pour y participer, vous devez effectuer un dépôt d’au moins 20 € le samedi."}',
             'value_pt' => '{"0":"Um dos bônus populares no cassino 20BET é o bônus de recarga de depósito de sábado. Para participar, você precisa fazer um depósito de pelo menos €20 no sábado."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 28
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The bonus includes 50 free spins spread over two days. After successful activation, you will receive the first 25 free spins immediately, and the remaining 25 spins after 24 hours."}',
             'value_es' => '{"0":"El bono incluye 50 giros gratis repartidos en dos días. Después de la activación exitosa, recibirás los primeros 25 giros gratis inmediatamente y los 25 giros restantes después de 24 horas."}',
             'value_fr' => '{"0":"Le bonus comprend 50 tours gratuits répartis sur deux jours. Après activation réussie, vous recevrez immédiatement les 25 premiers tours gratuits, et les 25 restants après 24 heures."}',
             'value_pt' => '{"0":"O bônus inclui 50 giros grátis distribuídos em dois dias. Após a ativação bem-sucedida, você receberá imediatamente os primeiros 25 giros grátis e os 25 restantes após 24 horas."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 29
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Winnings from free spins have wagering requirements — you must wager them several times before withdrawing. The reload bonus can be claimed only once per week."}',
             'value_es' => '{"0":"Las ganancias de los giros gratis tienen requisitos de apuesta: debes apostar varias veces antes de retirarlas. El bono de recarga se puede reclamar solo una vez por semana."}',
             'value_fr' => '{"0":"Les gains issus des tours gratuits sont soumis à des exigences de mise — vous devez les rejouer plusieurs fois avant de pouvoir les retirer. Le bonus de rechargement ne peut être réclamé qu’une fois par semaine."}',
             'value_pt' => '{"0":"Os ganhos dos giros grátis têm requisitos de apostas — você deve apostá-los várias vezes antes de sacar. O bônus de recarga pode ser reivindicado apenas uma vez por semana."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 30
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
             'value_en' => '{"0":"img-3.jpg"}',
             'value_es' => '{"0":"img-3.jpg"}',
             'value_fr' => '{"0":"img-3.jpg"}',
             'value_pt' => '{"0":"img-3.jpg"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 31
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Casino VIP Program"}',
             'value_es' => '{"0":"Programa Vip De 20BET"}',
             'value_fr' => '{"0":"Programme Vip De 20BET"}',
             'value_pt' => '{"0":"Programa Vip Da 20BET"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 32
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The 20BET VIP program is one of the best we’ve seen among online casinos. It consists of six levels, and every player starts at level one. Once you collect 150 loyalty points, you will be promoted to level two. Your level is updated every month."}',
             'value_es' => '{"0":"El programa VIP de 20BET es uno de los mejores que hemos visto entre los casinos en línea. Consta de seis niveles, y todos los jugadores comienzan en el primer nivel. Una vez que acumules 150 puntos de fidelidad, pasarás al segundo nivel. Tu nivel se actualiza cada mes."}',
             'value_fr' => '{"0":"Le programme VIP de 20BET est l’un des meilleurs que nous ayons vus parmi les casinos en ligne. Il se compose de six niveaux, et chaque joueur commence au niveau un. Une fois que vous avez accumulé 150 points de fidélité, vous passez au deuxième niveau. Votre niveau est réinitialisé chaque mois."}',
             'value_pt' => '{"0":"O programa VIP da 20BET é um dos melhores que já vimos entre os cassinos online. Ele é composto por seis níveis, e todos os jogadores começam no nível um. Ao acumular 150 pontos de fidelidade, você passa para o segundo nível. Seu nível é atualizado todos os meses."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 33
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"By earning enough points, you gain access to attractive bonuses. As a 20BET VIP member, you receive not only casino bonuses but also free spins, reload bonuses, and other great perks. Please note that free bets from the VIP program can be used only once and are valid for 5 days."}',
             'value_es' => '{"0":"Al acumular suficientes puntos, obtendrás acceso a bonificaciones atractivas. Como miembro VIP de 20BET, recibirás no solo bonos de casino, sino también giros gratis, bonificaciones por recarga y otros beneficios exclusivos. Ten en cuenta que las apuestas gratis del programa VIP solo se pueden usar una vez y son válidas durante 5 días."}',
             'value_fr' => '{"0":"En accumulant suffisamment de points, vous accédez à des bonus attractifs. En tant que membre VIP de 20BET, vous bénéficiez non seulement de bonus de casino, mais aussi de tours gratuits, de bonus de recharge et d’autres avantages intéressants. Veuillez noter que les paris gratuits obtenus via le programme VIP ne peuvent être utilisés qu’une seule fois et sont valables pendant 5 jours."}',
             'value_pt' => '{"0":"Ao conquistar pontos suficientes, você ganha acesso a bônus atrativos. Como membro VIP da 20BET, você recebe não apenas bônus de cassino, mas também rodadas grátis, bônus de recarga e outros benefícios especiais. Atenção: as apostas grátis do programa VIP podem ser utilizadas apenas uma vez e são válidas por 5 dias."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 34
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
             'value_en' => '{"0":"img-4.jpg"}',
             'value_es' => '{"0":"img-4.jpg"}',
             'value_fr' => '{"0":"img-4.jpg"}',
             'value_pt' => '{"0":"img-4.jpg"}',
             'order' => 34
            ]
        );
    }
}
