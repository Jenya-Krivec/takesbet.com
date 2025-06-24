<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker888starzMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 1
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"Review on 888starz betting mobile app"}',
             'value_es' => '{"0":"Reseña de la aplicación móvil de apuestas de 888starz"}',
             'value_fr' => '{"0":"Avis sur l’application mobile de paris 888starz"}',
             'value_pt' => '{"0":"Análise do aplicativo móvel de apostas da 888starz"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 2
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The 888starz mobile app for Android and iOS is a modern platform designed for convenient betting and gaming right from your smartphone. You can easily enjoy sports betting, live games, or slots — everything you need is always at your fingertips. Let\'s take a closer look at the features of the 888starz mobile application."}',
             'value_es' => '{"0":"La aplicación móvil de 888starz para Android e iOS es una plataforma moderna diseñada para realizar apuestas y jugar cómodamente desde tu smartphone. Puedes disfrutar fácilmente de las apuestas deportivas, los juegos en vivo o las tragamonedas: todo lo que necesitas está siempre al alcance de tu mano. Echemos un vistazo más detallado a las funciones de la aplicación móvil de 888starz."}',
             'value_fr' => '{"0":"L\'application mobile 888starz pour Android et iOS est une plateforme moderne conçue pour parier et jouer en toute simplicité depuis votre smartphone. Vous pouvez facilement profiter des paris sportifs, des jeux en direct ou des machines à sous — tout ce dont vous avez besoin est toujours à portée de main. Découvrons de plus près les fonctionnalités de l\'application mobile 888starz."}',
             'value_pt' => '{"0":"O aplicativo móvel 888starz para Android e iOS é uma plataforma moderna projetada para apostas e jogos com praticidade diretamente do seu smartphone. Você pode aproveitar facilmente as apostas esportivas, jogos ao vivo ou slots — tudo o que precisa está sempre à mão. Vamos dar uma olhada mais detalhada nos recursos do aplicativo móvel 888starz."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 3
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Intuitive interface",
                                 "1":"Access to sports betting, live games, slots, and casino",
                                 "2":"Fast page loading",
                                 "3":"Push notifications",
                                 "4":"Special offers for mobile users"},
                             "1":
                                {"0":"Installation restrictions in some countries"}
                             }',
             'value_es' => '{"0":
                                {"0":"Interfaz intuitiva",
                                 "1":"Acceso a apuestas deportivas, juegos en vivo, tragamonedas y casino",
                                 "2":"Carga rápida de páginas",
                                 "3":"Notificaciones push",
                                 "4":"Ofertas especiales para usuarios móviles"},
                             "1":
                                {"0":"Restricciones de instalación en algunos países"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Interface intuitive",
                                 "1":"Accès aux paris sportifs, jeux en direct, machines à sous et casino",
                                 "2":"Chargement rapide des pages",
                                 "3":"Notifications push",
                                 "4":"Offres spéciales pour les utilisateurs mobiles"},
                             "1":
                                {"0":"Restrictions d\'installation dans certains pays"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Interface intuitiva",
                                 "1":"Acesso a apostas esportivas, jogos ao vivo, slots e cassino",
                                 "2":"Carregamento rápido das páginas",
                                 "3":"Notificações push",
                                 "4":"Ofertas especiais para usuários móveis"},
                             "1":
                                {"0":"Restrições de instalação em alguns países"}
                             }',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 4
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
                'value_en' => '{"0":"Download 888starz on Android"}',
                'value_es' => '{"0":"Descarga 888starz en Android"}',
                'value_fr' => '{"0":"Téléchargez 888starz sur Android"}',
                'value_pt' => '{"0":"Baixe o 888starz no Android"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 5
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"It’s worth noting that the 888starz app for Android is one of the best mobile applications we’ve ever come across. It runs smoothly, allowing users to place sports bets, play casino games, enjoy welcome bonuses, and much more."}',
             'value_es' => '{"0":"Cabe destacar que la aplicación 888starz para Android es una de las mejores que hemos visto. Funciona de forma estable y permite realizar apuestas deportivas, jugar en el casino, aprovechar los bonos de bienvenida y muchas otras funciones."}',
             'value_fr' => '{"0":"Il convient de souligner que l\'application 888starz pour Android est l\'une des meilleures que nous ayons vues. Elle fonctionne de manière fluide, permet de parier sur le sport, de jouer au casino, de profiter des bonus de bienvenue et bien plus encore."}',
             'value_pt' => '{"0":"Vale destacar que o aplicativo 888starz para Android é um dos melhores que já vimos. Ele funciona de forma estável e permite fazer apostas esportivas, jogar no cassino, aproveitar bônus de boas-vindas e muito mais."}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 6
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
                'value_en' => '{"0":"How to install the 888starz app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación de 888starz en Android?"}',
                'value_fr' => '{"0":"Comment installer l\'application 888starz sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da 888starz no Android?"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 7
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Although the mobile app is not available on the Play Market, downloading the 888starz app for Android is quite simple. Just follow a few easy steps we’ve prepared for you:"}',
             'value_es' => '{"0":"Aunque la aplicación móvil no está disponible en Play Market, descargar la app de 888starz para Android es muy sencillo. Solo tienes que seguir unos pocos pasos fáciles que hemos preparado para ti:"}',
             'value_fr' => '{"0":"Bien que l\'application mobile ne soit pas disponible sur le Play Market, il est très facile de télécharger l\'application 888starz pour Android. Il suffit de suivre quelques étapes simples que nous avons préparées pour vous :"}',
             'value_pt' => '{"0":"Embora o aplicativo móvel não esteja disponível na Play Store, baixar o app 888starz para Android é muito simples. Basta seguir alguns passos fáceis que preparamos para você:"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 8
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h4',
                'value_en' => '{"0":"Follow the link"}',
                'value_es' => '{"0":"Sigue el enlace"}',
                'value_fr' => '{"0":"Suivez le lien"}',
                'value_pt' => '{"0":"Siga o link"}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 9
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"The first step is simply to follow the link to the 888starz betting site. Once on the homepage, you’ll be able to create an account, claim a generous welcome bonus, and gain access to some of the most competitive odds on the market."}',
                'value_es' => '{"0":"El primer paso es simplemente seguir el enlace al sitio de apuestas de 888starz. Una vez en la página principal, podrás crear una cuenta, aprovechar un generoso bono de bienvenida y acceder a algunas de las cuotas más competitivas del mercado."}',
                'value_fr' => '{"0":"La première étape consiste simplement à suivre le lien vers le site de paris de 888starz. Une fois sur la page d\'accueil, vous pourrez créer un compte, profiter d\'un généreux bonus de bienvenue et accéder à certaines des cotes les plus avantageuses du marché."}',
                'value_pt' => '{"0":"O primeiro passo é simplesmente seguir o link para o site de apostas da 888starz. Ao acessar a página inicial, você poderá criar uma conta, aproveitar um generoso bônus de boas-vindas e ter acesso a algumas das melhores odds do mercado."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 10
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h4',
                'value_en' => '{"0":"Download the APK file"}',
                'value_es' => '{"0":"Descarga el archivo APK"}',
                'value_fr' => '{"0":"Téléchargez le fichier APK"}',
                'value_pt' => '{"0":"Baixe o arquivo APK"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 11
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"At the top of this page, you’ll find a direct link to the official 888starz website, where you can download the APK file to install on your device."}',
             'value_es' => '{"0":"En la parte superior de esta página encontrarás un enlace directo al sitio web oficial de 888starz, donde puedes descargar el archivo APK para instalarlo en tu dispositivo."}',
             'value_fr' => '{"0":"En haut de cette page, vous trouverez un lien direct vers le site officiel de 888starz, où vous pouvez télécharger le fichier APK pour l’installer sur votre appareil."}',
             'value_pt' => '{"0":"No topo desta página, você encontrará um link direto para o site oficial da 888starz, onde pode baixar o arquivo APK para instalar no seu dispositivo."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 12
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h4',
                'value_en' => '{"0":"Set up your mobile device"}',
                'value_es' => '{"0":"Configura tu dispositivo móvil"}',
                'value_fr' => '{"0":"Configurez votre appareil mobile"}',
                'value_pt' => '{"0":"Configure seu dispositivo móvel"}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 13
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"Open the «Settings» section, go to the «Security» menu, and check the box next to «Allow installation from unknown sources». Save the changes."}',
                'value_es' => '{"0":"Abre la sección «Configuración», ve al menú «Seguridad» y marca la casilla junto a «Permitir instalación de fuentes desconocidas». Guarda los cambios."}',
                'value_fr' => '{"0":"Ouvrez la section « Paramètres », allez dans le menu « Sécurité » et cochez la case « Autoriser l’installation de sources inconnues ». Enregistrez les modifications."}',
                'value_pt' => '{"0":"Abra a seção «Configurações», vá ao menu «Segurança» e marque a opção «Permitir instalação de fontes desconhecidas». Salve as alterações."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 14
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h4',
                'value_en' => '{"0":"Install the app"}',
                'value_es' => '{"0":"Instala la aplicación"}',
                'value_fr' => '{"0":"Installez l’application"}',
                'value_pt' => '{"0":"Instale o aplicativo"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 15
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"Open the downloaded file located in the Downloads folder. Tap «Install» and wait a couple of minutes."}',
                'value_es' => '{"0":"Abre el archivo descargado que se encuentra en la carpeta de Descargas. Pulsa «Instalar» y espera un par de minutos."}',
                'value_fr' => '{"0":"Ouvrez le fichier téléchargé qui se trouve dans le dossier Téléchargements. Appuyez sur «Installer» et attendez quelques minutes."}',
                'value_pt' => '{"0":"Abra o arquivo baixado que está na pasta Downloads. Toque em «Instalar» e aguarde alguns minutos."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 16
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account"}',
                'value_es' => '{"0":"Verifica tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez votre compte"}',
                'value_pt' => '{"0":"Verifique sua conta"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 17
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"In the final step, you need to open the installed app and enter the login details you created in the first step. Now you can place sports bets and enjoy the game from your mobile device!"}',
             'value_es' => '{"0":"En el último paso, debes abrir la aplicación instalada e ingresar los datos de acceso que creaste en el primer paso. ¡Ahora puedes hacer apuestas deportivas y disfrutar del juego desde tu dispositivo móvil!"}',
             'value_fr' => '{"0":"À la dernière étape, vous devez ouvrir l’application installée et saisir les identifiants que vous avez créés lors de la première étape. Vous pouvez maintenant parier sur le sport et profiter du jeu depuis votre appareil mobile !"}',
             'value_pt' => '{"0":"Na etapa final, você deve abrir o aplicativo instalado e inserir os dados de login que criou na primeira etapa. Agora você pode fazer apostas esportivas e aproveitar o jogo no seu dispositivo móvel!"}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 18
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
                'value_en' => '{"0":"Download the 888starz mobile app on iOS"}',
                'value_es' => '{"0":"Descarga la aplicación móvil de 888starz en iOS"}',
                'value_fr' => '{"0":"Téléchargez l\'application mobile 888starz sur iOS"}',
                'value_pt' => '{"0":"Baixe o aplicativo móvel 888starz no iOS"}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 19
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"When it comes to the 888starz app for iOS, it’s worth noting that using it is truly a pleasure. It runs smoothly and without any issues. The app offers access to casino games, sports betting, a first deposit bonus, live streaming, as well as the ability to make deposits and withdraw funds."}',
             'value_es' => '{"0":"Cuando se trata de la aplicación 888starz para iOS, vale la pena destacar que usarla es un verdadero placer. Funciona de manera estable y sin fallos. La app ofrece acceso a juegos de casino, apuestas deportivas, bono por primer depósito, transmisiones en vivo y la posibilidad de hacer depósitos y retiros de dinero."}',
             'value_fr' => '{"0":"Lorsqu’il s’agit de l’application 888starz pour iOS, il convient de souligner que l’utiliser est un vrai plaisir. Elle fonctionne de manière stable et fluide. L’application permet d’accéder à des jeux de casino, aux paris sportifs, au bonus de premier dépôt, au streaming en direct, ainsi qu’aux dépôts et retraits d’argent."}',
             'value_pt' => '{"0":"Quando se trata do aplicativo 888starz para iOS, vale dizer que utilizá-lo é realmente um prazer. Ele funciona de forma estável e sem falhas. O app oferece acesso a jogos de cassino, apostas esportivas, bônus no primeiro depósito, transmissões ao vivo e a possibilidade de fazer depósitos e saques."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 20
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The overall experience with the iOS version is positive, mainly thanks to its intuitive interface that makes navigation easy. This app gives full access to all features, allowing users to enjoy the game without any hassle."}',
             'value_es' => '{"0":"La experiencia general con la versión para iOS es positiva, especialmente gracias a su interfaz intuitiva que facilita la navegación. Esta aplicación brinda acceso completo a todas las funciones, permitiéndote disfrutar del juego sin complicaciones."}',
             'value_fr' => '{"0":"L’expérience générale avec la version iOS est positive, notamment grâce à son interface intuitive qui facilite la navigation. Cette application offre un accès complet à toutes les fonctionnalités, vous permettant de profiter du jeu sans aucun souci."}',
             'value_pt' => '{"0":"A experiência geral com a versão para iOS é positiva, principalmente graças à sua interface intuitiva, que facilita a navegação. Este aplicativo oferece acesso total a todos os recursos, permitindo que você aproveite o jogo sem preocupações."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 21
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 22
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
                'value_en' => '{"0":"How to install the 888starz mobile app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación móvil de 888starz en iOS?"}',
                'value_fr' => '{"0":"Comment installer l\'application mobile 888starz sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo móvel da 888starz no iOS?"}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 23
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h4',
                'value_en' => '{"0":"Follow the link"}',
                'value_es' => '{"0":"Sigue el enlace"}',
                'value_fr' => '{"0":"Suivez le lien"}',
                'value_pt' => '{"0":"Siga o link"}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 24
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"If you haven’t created an account on the 888starz website yet, we recommend doing so."}',
                'value_es' => '{"0":"Si aún no has creado una cuenta en el sitio web de 888starz, te recomendamos que lo hagas."}',
                'value_fr' => '{"0":"Si vous n’avez pas encore créé de compte sur le site de 888starz, nous vous recommandons de le faire."}',
                'value_pt' => '{"0":"Se ainda não criou uma conta no site da 888starz, recomendamos que o faça."}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 25
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h4',
                'value_en' => '{"0":"Search for the 888starz app in the App Store"}',
                'value_es' => '{"0":"Busca la aplicación de 888starz en la App Store"}',
                'value_fr' => '{"0":"Recherchez l\'application 888starz dans le App Store"}',
                'value_pt' => '{"0":"Procure o aplicativo da 888starz na App Store"}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 26
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Installing the mobile app for iOS devices is even easier than for Android, as it is available for download on the App Store. All you need to do is follow the direct link we provided at the top of our review and install the app on your iOS device."}',
             'value_es' => '{"0":"Instalar la aplicación móvil en dispositivos iOS es aún más fácil que en Android, ya que está disponible para su descarga en la App Store. Solo tienes que seguir el enlace directo que dejamos en la parte superior de nuestra reseña e instalar la app en tu dispositivo iOS."}',
             'value_fr' => '{"0":"Installer l’application mobile sur les appareils iOS est encore plus simple que sur Android, car elle est disponible en téléchargement sur l’App Store. Il vous suffit de suivre le lien direct que nous avons placé en haut de notre avis et d’installer l’application sur votre appareil iOS."}',
             'value_pt' => '{"0":"Instalar o aplicativo móvel em dispositivos iOS é ainda mais fácil do que no Android, pois ele está disponível para download na App Store. Tudo o que você precisa fazer é seguir o link direto que deixamos no topo da nossa análise e instalar o app no seu dispositivo iOS."}',
             'order' => 26
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 27
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account"}',
                'value_es' => '{"0":"Verifica tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez votre compte"}',
                'value_pt' => '{"0":"Verifique sua conta"}',
             'order' => 27
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 28
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"In the final step, you need to open the installed app and enter the login details you created in the first step. Now you can place sports bets and enjoy the game from your mobile device!"}',
                'value_es' => '{"0":"En el último paso, debes abrir la aplicación instalada e ingresar los datos de acceso que creaste en el primer paso. ¡Ahora puedes hacer apuestas deportivas y disfrutar del juego desde tu dispositivo móvil!"}',
                'value_fr' => '{"0":"À la dernière étape, vous devez ouvrir l’application installée et saisir les identifiants que vous avez créés lors de la première étape. Vous pouvez maintenant parier sur le sport et profiter du jeu depuis votre appareil mobile !"}',
                'value_pt' => '{"0":"Na etapa final, você deve abrir o aplicativo instalado e inserir os dados de login que criou na primeira etapa. Agora você pode fazer apostas esportivas e aproveitar o jogo no seu dispositivo móvel!"}',
             'order' => 28
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 29
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
                'value_en' => '{"0":"The features of the 888starz mobile app"}',
                'value_es' => '{"0":"Las funciones de la aplicación móvil de 888starz"}',
                'value_fr' => '{"0":"Les fonctionnalités de l’application mobile 888starz"}',
                'value_pt' => '{"0":"Os recursos do aplicativo móvel da 888starz"}',
             'order' => 29
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 30
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"Here\'s a closer look at what you can expect:"}',
                'value_es' => '{"0":"Aquí tienes un vistazo más detallado de lo que puedes esperar:"}',
                'value_fr' => '{"0":"Voici un aperçu plus détaillé de ce à quoi vous pouvez vous attendre :"}',
                'value_pt' => '{"0":"Aqui está uma visão mais detalhada do que você pode esperar:"}',
             'order' => 30
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 31
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'list_v2',
             'value_en' => '{"0":"Access to pre-match and live betting",
                             "1":"Choice of odds, bet types, and real-time statistics",
                             "2":"Casino and live casino",
                             "3":"Live event streaming",
                             "4":"Exclusive promotions and bonuses for mobile users",
                             "5":"Deposit and withdrawal directly from the app",
                             "6":"Support for various payment methods, including cryptocurrency",
                             "7":"Push notifications",
                             "8":"Intuitive and fast interface"}',
             'value_es' => '{"0":"Acceso a apuestas previas al partido y en vivo",
                             "1":"Elección de cuotas, tipos de apuestas y estadísticas en tiempo real",
                             "2":"Casino y casino en vivo",
                             "3":"Transmisión en vivo de eventos",
                             "4":"Promociones y bonos exclusivos para usuarios móviles",
                             "5":"Depósitos y retiros directamente desde la app",
                             "6":"Soporte para varios métodos de pago, incluyendo criptomonedas",
                             "7":"Notificaciones push",
                             "8":"Interfaz intuitiva y rápida"}',
             'value_fr' => '{"0":"Accès aux paris avant le match et en direct",
                             "1":"Choix des cotes, types de paris et statistiques en temps réel",
                             "2":"Casino et casino en direct",
                             "3":"Streaming en direct des événements",
                             "4":"Promotions et bonus exclusifs pour les utilisateurs mobiles",
                             "5":"Dépôt et retrait directement depuis l’application",
                             "6":"Prise en charge de plusieurs méthodes de paiement, y compris les cryptomonnaies",
                             "7":"Notifications push",
                             "8":"Interface intuitive et rapide"}',
             'value_pt' => '{"0":"Acesso a apostas pré-jogo e ao vivo",
                             "1":"Escolha de odds, tipos de apostas e estatísticas em tempo real",
                             "2":"Cassino e cassino ao vivo",
                             "3":"Transmissão ao vivo de eventos",
                             "4":"Promoções e bônus exclusivos para usuários móveis",
                             "5":"Depósitos e saques diretamente no aplicativo",
                             "6":"Suporte para vários métodos de pagamento, incluindo criptomoedas",
                             "7":"Notificações push",
                             "8":"Interface intuitiva e rápida"}',
             'order' => 31
            ]
        );
    }
}
