<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMEGAPARIPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 1
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI is an international gambling provider offering sports betting and casino games. The company was founded in Cyprus and obtained a license in Curaçao, after which it actively entered the global market. Today, players from Europe, Canada, Asia, and several African countries can easily place sports bets and enjoy real money games like blackjack, roulette, and slots."}',
             'value_es' => '{"0":"MEGAPARI es un proveedor internacional de juegos de azar que ofrece apuestas deportivas y juegos de casino. La empresa fue fundada en Chipre y obtuvo una licencia en Curazao, tras lo cual se expandió activamente al mercado global. Hoy en día, jugadores de Europa, Canadá, Asia y varios países africanos pueden apostar fácilmente en deportes y disfrutar de juegos con dinero real como blackjack, ruleta y tragamonedas."}',
             'value_fr' => '{"0":"MEGAPARI est un fournisseur international de jeux d\'argent proposant des paris sportifs et des jeux de casino. L\'entreprise a été fondée à Chypre et a obtenu une licence à Curaçao, avant de s\'étendre activement sur le marché mondial. Aujourd\'hui, les joueurs d\'Europe, du Canada, d\'Asie et de plusieurs pays africains peuvent facilement parier sur le sport et profiter de jeux en argent réel comme le blackjack, la roulette et les machines à sous."}',
             'value_pt' => '{"0":"MEGAPARI é um provedor internacional de jogos de azar que oferece apostas esportivas e jogos de cassino. A empresa foi fundada no Chipre e obteve licença em Curaçao, expandindo-se ativamente para o mercado global. Atualmente, jogadores da Europa, Canadá, Ásia e de vários países africanos podem fazer apostas esportivas com facilidade e aproveitar jogos com dinheiro real, como blackjack, roleta e slots."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 2
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In addition, users have access to special bonuses for sports and casino games. Below, we’ll explain how to get the most out of them. All you need to do is register with our promo code :promocode."}',
             'value_es' => '{"0":"Además, los usuarios tienen acceso a bonos especiales para apuestas deportivas y juegos de casino. A continuación, te explicamos cómo aprovecharlos al máximo. Todo lo que necesitas es registrarte con nuestro código promocional :promocode."}',
             'value_fr' => '{"0":"De plus, les utilisateurs ont accès à des bonus spéciaux pour les paris sportifs et les jeux de casino. Ci-dessous, nous vous expliquons comment en profiter au maximum. Il vous suffit de vous inscrire avec notre code promo :promocode."}',
             'value_pt' => '{"0":"Além disso, os usuários têm acesso a bônus especiais para apostas esportivas e jogos de cassino. Abaixo, explicamos como aproveitá-los ao máximo. Tudo o que você precisa fazer é se registrar com nosso código promocional :promocode."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 3
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 4
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
                'value_en' => '{"0":"Why Use the MEGAPARI Promo Code?"}',
                'value_es' => '{"0":"¿Por qué usar el código promocional de MEGAPARI?"}',
                'value_fr' => '{"0":"Pourquoi utiliser le code promo MEGAPARI ?"}',
                'value_pt' => '{"0":"Por que usar o código promocional da MEGAPARI?"}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 5
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI offers a first deposit bonus. This welcome offer gives you 100% of your first deposit"}',
             'value_es' => '{"0":"MEGAPARI ofrece un bono por el primer depósito. Esta oferta de bienvenida te da el 100% de tu primer ingreso"}',
             'value_fr' => '{"0":"MEGAPARI propose un bonus sur le premier dépôt. Cette offre de bienvenue vous permet d\'obtenir 100 % de votre premier dépôt"}',
             'value_pt' => '{"0":"A MEGAPARI oferece um bônus de primeiro depósito. Esta oferta de boas-vindas concede 100% do valor do seu primeiro depósito"}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 6
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"If you enter the promo code :promocode during registration, you will receive an additional 30% on your first deposit. As a result, your total bonus will be 130% of your initial deposit on the platform. Keep in mind that this extra 30% applies to the maximum bonus amount offered by Megapari’s standard welcome offer. For example, if you receive the maximum bonus of 130 EUR, thanks to :promocode you will get an additional 40 EUR."}',
             'value_es' => '{"0":"Si introduces el código promocional :promocode durante el registro, recibirás un 30% adicional sobre tu primer depósito. Como resultado, tu bono total será del 130% de tu depósito inicial en la plataforma. Ten en cuenta que este 30% extra se aplica a la cantidad máxima del bono ofrecido por la oferta de bienvenida estándar de Megapari. Por ejemplo, si recibes el bono máximo de 130 EUR, gracias a :promocode obtendrás 40 EUR adicionales."}',
             'value_fr' => '{"0":"Si vous saisissez le code promo :promocode lors de votre inscription, vous recevrez 30 % supplémentaires sur votre premier dépôt. Ainsi, votre bonus total représentera 130 % de votre dépôt initial sur la plateforme. Notez que ces 30 % supplémentaires s’appliquent au montant maximal du bonus prévu par l’offre de bienvenue standard de Megapari. Par exemple, si vous recevez le bonus maximal de 130 EUR, grâce à :promocode vous obtiendrez 40 EUR supplémentaires."}',
             'value_pt' => '{"0":"Se você inserir o código promocional :promocode durante o registro, receberá 30% adicionais no seu primeiro depósito. Como resultado, seu bônus total será de 130% do seu depósito inicial na plataforma. Lembre-se de que esses 30% extras são aplicados ao valor máximo do bônus oferecido pela oferta de boas-vindas padrão da Megapari. Por exemplo, se você receber o bônus máximo de 130 EUR, graças ao :promocode receberá 40 EUR adicionais."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 7
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
                'value_en' => '{"0":"How To Benefit From the MEGAPARI Bonus"}',
                'value_es' => '{"0":"Cómo beneficiarse del bono de MEGAPARI"}',
                'value_fr' => '{"0":"Comment profiter du bonus MEGAPARI"}',
                'value_pt' => '{"0":"Como aproveitar o bônus da MEGAPARI"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 8
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Activating an extra 30% welcome bonus on your first deposit using the MEGAPARI promo code :promocode is very simple. Essentially, this offer follows the standard terms that apply to all new players. The main difference is that during registration you must enter the promo code :promocode — this is one of the mandatory requirements. You can read more details about the entire process below."}',
             'value_es' => '{"0":"Activar un 30% adicional de bono de bienvenida en tu primer depósito usando el código promocional :promocode de MEGAPARI es muy sencillo. Básicamente, esta oferta se rige por los términos estándar que aplican a todos los nuevos jugadores. La principal diferencia es que durante el registro debes ingresar el código promocional :promocode, que es uno de los requisitos obligatorios. Más abajo encontrarás más detalles sobre todo el proceso"}',
             'value_fr' => '{"0":"Activer un bonus de bienvenue supplémentaire de 30 % sur votre premier dépôt en utilisant le code promo MEGAPARI :promocode est très simple. En fait, cette offre suit les conditions standards applicables à tous les nouveaux joueurs. La principale différence est qu’il faut saisir le code promo :promocode lors de l’inscription — c’est l’une des conditions obligatoires. Vous trouverez plus de détails sur l’ensemble du processus ci-dessous."}',
             'value_pt' => '{"0":"Ativar um bônus de boas-vindas extra de 30% no seu primeiro depósito usando o código promocional MEGAPARI :promocode é muito simples. Essencialmente, esta oferta segue os termos padrão que se aplicam a todos os novos jogadores. A principal diferença é que, durante o registro, você deve inserir o código promocional :promocode — este é um dos requisitos obrigatórios. Abaixo você pode ler mais detalhes sobre todo o processo."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 9
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
                'value_en' => '{"0":"Head over to the MEGAPARI site"}',
                'value_es' => '{"0":"Ve al sitio web de MEGAPARI"}',
                'value_fr' => '{"0":"Rendez-vous sur le site de MEGAPARI"}',
                'value_pt' => '{"0":"Acesse o site da MEGAPARI"}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 10
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Open the official MEGAPARI website using the link we provided at the top of this review and click the «Register» button."}',
             'value_es' => '{"0":"Abre el sitio oficial de MEGAPARI usando el enlace que dejamos al inicio de esta reseña y haz clic en el botón «Registro»."}',
             'value_fr' => '{"0":"Ouvrez le site officiel de MEGAPARI en utilisant le lien que nous avons laissé en haut de cette revue et cliquez sur le bouton « Inscription »."}',
             'value_pt' => '{"0":"Abra o site oficial da MEGAPARI usando o link que deixamos no topo desta avaliação e clique no botão «Registrar»."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 11
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
                'value_en' => '{"0":"Fill in the registration form"}',
                'value_es' => '{"0":"Rellena el formulario de registro"}',
                'value_fr' => '{"0":"Remplissez le formulaire d\'inscription"}',
                'value_pt' => '{"0":"Preencha o formulário de registro"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 12
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Choose any of the available registration methods — by phone, email, or a social media account. Each method has its own form to fill out: some require more personal information, while others, like social media, automatically retrieve the necessary data. In any case, be sure to enter :promocode in the PROMO CODE field."}',
             'value_es' => '{"0":"Elija cualquiera de los métodos de registro disponibles: por teléfono, correo electrónico o cuenta de redes sociales. Cada método tiene su propio formulario para completar: algunos requieren más información personal, mientras que otros, como las redes sociales, obtienen automáticamente los datos necesarios. En cualquier caso, asegúrese de ingresar :promocode en el campo CÓDIGO PROMOCIONAL."}',
             'value_fr' => '{"0":"Choisissez l’une des méthodes d’inscription disponibles — par téléphone, e-mail ou compte de réseau social. Chaque méthode a son propre formulaire à remplir : certaines demandent plus d’informations personnelles, tandis que d’autres, comme les réseaux sociaux, récupèrent automatiquement les données nécessaires. Dans tous les cas, veillez à saisir :promocode dans le champ CODE PROMO."}',
             'value_pt' => '{"0":"Escolha qualquer um dos métodos de registro disponíveis — por telefone, e-mail ou conta de rede social. Cada método tem seu próprio formulário para preencher: alguns exigem mais informações pessoais, enquanto outros, como as redes sociais, recuperam automaticamente os dados necessários. Em qualquer caso, certifique-se de inserir :promocode no campo CÓDIGO PROMOCIONAL."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 13
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Don’t forget to select the currency — EUR, USD, or cryptocurrency. Your choice will determine the minimum deposit amount required to receive the welcome bonus."}',
             'value_es' => '{"0":"No olvide seleccionar la moneda — EUR, USD o criptomoneda. Su elección determinará el monto mínimo del depósito requerido para recibir el bono de bienvenida."}',
             'value_fr' => '{"0":"N’oubliez pas de choisir la devise — EUR, USD ou cryptomonnaie. Votre choix déterminera le montant minimum du dépôt requis pour recevoir le bonus de bienvenue."}',
             'value_pt' => '{"0":"Não esqueça de escolher a moeda — EUR, USD ou criptomoeda. Sua escolha determinará o valor mínimo do depósito necessário para receber o bônus de boas-vindas."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 14
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Create a password and username to easily log in to the platform later. After that, click the «Register» button to complete the process. Wait for an activation link or SMS on your phone to confirm your registration."}',
             'value_es' => '{"0":"Cree una contraseña y un nombre de usuario para acceder fácilmente a la plataforma más adelante. Después, haga clic en el botón «Registrarse» para completar el proceso. Espere un enlace de activación o un SMS en su teléfono para confirmar su registro."}',
             'value_fr' => '{"0":"Créez un mot de passe et un nom d’utilisateur pour vous connecter facilement à la plateforme plus tard. Ensuite, cliquez sur le bouton « S’inscrire » pour terminer le processus. Attendez un lien d’activation ou un SMS sur votre téléphone pour confirmer votre inscription."}',
             'value_pt' => '{"0":"Crie uma senha e nome de usuário para acessar facilmente a plataforma depois. Depois disso, clique no botão «Registrar» para concluir o processo. Aguarde um link de ativação ou SMS no seu telefone para confirmar seu registro."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 15
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
                'value_en' => '{"0":"Make a deposit"}',
                'value_es' => '{"0":"Realizar un depósito"}',
                'value_fr' => '{"0":"Effectuer un dépôt"}',
                'value_pt' => '{"0":"Fazer um depósito"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 16
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The MEGAPARI welcome bonus is granted upon your first deposit. Therefore, to take advantage of this offer, you need not only to register as a new player but also to fund your account on the platform. The deposit process is very simple. The minimum deposit amount to participate in the promotion is 1 EUR."}',
             'value_es' => '{"0":"El bono de bienvenida de MEGAPARI se otorga al realizar el primer depósito. Por lo tanto, para aprovechar esta oferta, no solo debes registrarte como nuevo jugador, sino también depositar fondos en tu cuenta en la plataforma. El proceso de depósito es muy sencillo. La cantidad mínima de depósito para participar en la promoción es 1 EUR."}',
             'value_fr' => '{"0":"Le bonus de bienvenue MEGAPARI est accordé lors de votre premier dépôt. Ainsi, pour bénéficier de cette offre, vous devez non seulement vous inscrire en tant que nouveau joueur, mais aussi approvisionner votre compte sur la plateforme. Le processus de dépôt est très simple. Le montant minimum de dépôt pour participer à la promotion est de 1 EUR."}',
             'value_pt' => '{"0":"O bônus de boas-vindas da MEGAPARI é concedido no seu primeiro depósito. Portanto, para aproveitar esta oferta, você precisa não apenas se registrar como um novo jogador, mas também financiar sua conta na plataforma. O processo de depósito é muito simples. O valor mínimo para participar da promoção é de 1 EUR."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 17
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
                'value_en' => '{"0":"Receive your bonus"}',
                'value_es' => '{"0":"Recibe tu bono"}',
                'value_fr' => '{"0":"Recevez votre bonus"}',
                'value_pt' => '{"0":"Receba seu bônus"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 18
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
                'value_en' => '{"0":"What To Do if You Already Have an Account at MEGAPARI?"}',
                'value_es' => '{"0":"¿Qué hacer si ya tienes una cuenta en MEGAPARI?"}',
                'value_fr' => '{"0":"Que faire si vous avez déjà un compte sur MEGAPARI ?"}',
                'value_pt' => '{"0":"O que fazer se você já tem uma conta na MEGAPARI?"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 19
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Unfortunately, if you have already made a deposit on MEGAPARI, you will not be eligible for this welcome bonus. However, the platform still offers many other attractive promotions for existing users, including appealing reload bonuses such as «15% deposit bonus»."}',
                'value_es' => '{"0":"Lamentablemente, si ya has realizado un depósito en MEGAPARI, no podrás obtener este bono de bienvenida. Sin embargo, la plataforma sigue ofreciendo muchas otras promociones atractivas para usuarios existentes, incluyendo bonos de recarga como «Bono del depósito del 15 %»."}',
                'value_fr' => '{"0":"Malheureusement, si vous avez déjà effectué un dépôt sur MEGAPARI, vous ne pourrez pas bénéficier de ce bonus de bienvenue. Toutefois, la plateforme propose encore de nombreuses autres promotions intéressantes pour les utilisateurs existants, telles que les bonus de rechargement « Bonus de dépôt de 15 % » ."}',
                'value_pt' => '{"0":"Infelizmente, se você já fez um depósito na MEGAPARI, não poderá receber este bônus de boas-vindas. No entanto, a plataforma ainda oferece muitas outras promoções atraentes para usuários existentes, incluindo bônus de recarga como «Bónus de depósito de 15%». "}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 20
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
             'value_en' => '{"0":"img-2.webp"}',
             'value_es' => '{"0":"img-2.webp"}',
             'value_fr' => '{"0":"img-2.webp"}',
             'value_pt' => '{"0":"img-2.webp"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 21
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
                'value_en' => '{"0":"Is There a No-Deposit MEGAPARI Promo Code?"}',
                'value_es' => '{"0":"¿Existe un código promocional de MEGAPARI sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il un code promo MEGAPARI sans dépôt ?"}',
                'value_pt' => '{"0":"Existe um código promocional da MEGAPARI sem depósito?"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 22
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
                'value_en' => '{"0":"Unfortunately for sports betting fans, no-deposit bonuses from online bookmakers are quite rare. Although they haven’t disappeared completely, nowadays such bonuses are mostly related to casino games or offered only during specific sporting events. At the moment, MEGAPARI does not have any no-deposit promo codes or bonuses available for new or existing users."}',
                'value_es' => '{"0":"Lamentablemente, para los aficionados a las apuestas deportivas, los bonos sin depósito de los corredores de apuestas en línea son bastante raros. Aunque no han desaparecido por completo, hoy en día estos bonos están mayormente relacionados con juegos de casino o se ofrecen solo durante eventos deportivos específicos. Actualmente, MEGAPARI no tiene códigos promocionales ni bonos sin depósito disponibles para usuarios nuevos o existentes."}',
                'value_fr' => '{"0":"Malheureusement, pour les amateurs de paris sportifs, les bonus sans dépôt proposés par les bookmakers en ligne sont assez rares. Bien qu’ils n’aient pas complètement disparu, ces bonus sont aujourd’hui principalement liés aux jeux de casino ou offerts uniquement lors d’événements sportifs spécifiques. À l’heure actuelle, MEGAPARI ne propose aucun code promo ni bonus sans dépôt pour les nouveaux ou les anciens utilisateurs."}',
                'value_pt' => '{"0":"Infelizmente, para os fãs de apostas esportivas, os bônus sem depósito oferecidos por casas de apostas online são bastante raros. Embora não tenham desaparecido completamente, atualmente esses bônus estão principalmente relacionados a jogos de cassino ou são oferecidos apenas durante eventos esportivos específicos. No momento, a MEGAPARI não possui códigos promocionais ou bônus sem depósito disponíveis para novos ou atuais usuários."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 23
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Your birthday with MEGAPARI!"}',
             'value_es' => '{"0":"¡Su cumpleaños con MEGAPARI!"}',
             'value_fr' => '{"0":"Votre anniversaire avec MEGAPARI !"}',
             'value_pt' => '{"0":"O seu aniversário com a MEGAPARI!"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 24
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"On your birthday, visit MEGAPARI — a pleasant surprise in the form of a special bonus will be waiting for you. The gift may come as free spins, a cash reward, or even a real present delivered to your doorstep. To qualify for this offer, make sure to enter your correct date of birth during registration. You also need to deposit at least 100 EUR into your account."}',
             'value_es' => '{"0":"En tu cumpleaños, visita MEGAPARI: te espera una grata sorpresa en forma de un bono especial. El regalo puede consistir en giros gratis, una recompensa en efectivo o incluso un obsequio real enviado a tu domicilio. Para acceder a esta promoción, asegúrate de ingresar tu fecha de nacimiento correctamente al registrarte. También debes depositar al menos 100 EUR en tu cuenta."}',
             'value_fr' => '{"0":"Le jour de votre anniversaire, connectez-vous à MEGAPARI — une agréable surprise vous attend sous forme de bonus spécial. Le cadeau peut être des free spins, une récompense en argent ou même un cadeau réel livré à votre domicile. Pour bénéficier de cette offre, vous devez entrer votre date de naissance correcte lors de l\'inscription. Un dépôt minimum de 100 EUR est également requis."}',
             'value_pt' => '{"0":"No seu aniversário, acesse o MEGAPARI — uma surpresa especial estará esperando por você na forma de um bônus exclusivo. O presente pode ser rodadas grátis, um prêmio em dinheiro ou até um brinde físico entregue na sua casa. Para ter direito a esta oferta, certifique-se de inserir corretamente sua data de nascimento no momento do registro. Também é necessário fazer um depósito mínimo de 100 EUR."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 25
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
             'value_en' => '{"0":"img-3.webp"}',
             'value_es' => '{"0":"img-3.webp"}',
             'value_fr' => '{"0":"img-3.webp"}',
             'value_pt' => '{"0":"img-3.webp"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 26
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Mega Booster"}',
             'value_es' => '{"0":"Mega Booster"}',
             'value_fr' => '{"0":"Mega Booster"}',
             'value_pt' => '{"0":"Mega Booster"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 27
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI has prepared another profitable promotion for accumulator lovers. Every time you place a combined bet, you have a chance to boost your winnings by up to 200%. The bonus percentage depends on the number of selections in your bet: you need at least 4 events to get an extra 5%. To reach the maximum 200% boost, your accumulator must include at least 20 events."}',
             'value_es' => '{"0":"MEGAPARI ha preparado otra promoción rentable para los amantes de las apuestas combinadas. Cada vez que hagas una apuesta múltiple, tendrás la oportunidad de aumentar tus ganancias hasta en un 200%. El porcentaje del bono depende del número de selecciones en tu apuesta: necesitas al menos 4 eventos para recibir un 5% adicional. Para obtener el aumento máximo del 200%, el acumulador debe incluir al menos 20 eventos."}',
             'value_fr' => '{"0":"MEGAPARI a lancé une autre offre intéressante pour les amateurs de paris combinés. Chaque fois que vous placez un pari combiné, vous avez la possibilité d’augmenter vos gains jusqu’à 200%. Le pourcentage du bonus dépend du nombre de sélections dans votre pari: il faut au minimum 4 événements pour obtenir un bonus de 5%. Pour bénéficier de la majoration maximale de 200%, le combiné doit inclure au moins 20 événements."}',
             'value_pt' => '{"0":"A MEGAPARI preparou mais uma promoção vantajosa para os fãs de apostas acumuladas. Sempre que fizer uma aposta combinada, você terá a chance de aumentar seus lucros em até 200%. A porcentagem do bônus depende do número de seleções na sua aposta: é necessário incluir pelo menos 4 eventos para ganhar um acréscimo de 5%. Para alcançar o aumento máximo de 200%, o acumulador deve conter no mínimo 20 eventos."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 28
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
             'value_en' => '{"0":"img-4.webp"}',
             'value_es' => '{"0":"img-4.webp"}',
             'value_fr' => '{"0":"img-4.webp"}',
             'value_pt' => '{"0":"img-4.webp"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 29
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Accumulator of the Day"}',
             'value_es' => '{"0":"Combinada del día"}',
             'value_fr' => '{"0":"Pari Combiné du Jour"}',
             'value_pt' => '{"0":"Acumulador do Dia"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 30
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Every day, MEGAPARI offers a new selection of accumulator bets. Check out the options and place your bet to have a chance of getting an increased payout if all your predictions are correct. If your multiple bet wins, you will receive an additional 10% on your profit. You can find the daily accumulators in a dedicated section within the «Sports» menu."}',
             'value_es' => '{"0":"Cada día, MEGAPARI ofrece una nueva selección de apuestas combinadas. Consulta las opciones y haz tu apuesta para tener la oportunidad de obtener mayores ganancias si aciertas todos los pronósticos. Si tu apuesta combinada resulta ganadora, recibirás un 10% adicional sobre tus ganancias. Encuentra los acumuladores diarios en una sección especial del menú «Deportes»."}',
             'value_fr' => '{"0":"Chaque jour, MEGAPARI propose une nouvelle sélection de paris combinés. Consultez les options et placez votre pari pour tenter de remporter un gain accru si toutes vos prédictions sont correctes. Si votre pari multiple est gagnant, vous recevrez 10 % supplémentaires sur vos gains. Retrouvez les accumulateurs quotidiens dans une section dédiée du menu « Sport »."}',
             'value_pt' => '{"0":"Todos os dias, a MEGAPARI disponibiliza uma nova seleção de apostas múltiplas. Confira as opções e faça sua aposta para ter a chance de obter um lucro maior se acertar todos os resultados. Se a sua aposta combinada for vencedora, você receberá 10% extras sobre o seu lucro. Os acumuladores diários estão em uma seção especial no menu «Esportes»."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 31
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
             'value_en' => '{"0":"img-5.webp"}',
             'value_es' => '{"0":"img-5.webp"}',
             'value_fr' => '{"0":"img-5.webp"}',
             'value_pt' => '{"0":"img-5.webp"}',
             'order' => 31
            ]
        );
    }
}
