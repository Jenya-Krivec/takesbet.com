<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMEGAPARIMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 1
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Review on MEGAPARI betting mobile app"}',
             'value_es' => '{"0":"Reseña de la aplicación móvil de apuestas de MEGAPARI"}',
             'value_fr' => '{"0":"Avis sur l’application mobile de paris MEGAPARI"}',
             'value_pt' => '{"0":"Análise do aplicativo móvel de apostas da MEGAPARI"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 2
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI fully caters to the needs of mobile users. Thanks to its convenient and functional mobile service, the operator has strengthened its position as one of the leaders in sports betting and online casino gaming. For user convenience, MEGAPARI offers an Android app compatible with most smartphones and tablets, an iOS app, and a mobile website version that works on all types of mobile devices."}',
             'value_es' => '{"0":"MEGAPARI satisface plenamente las necesidades de los usuarios móviles. Gracias a su servicio móvil cómodo y funcional, el operador ha consolidado su posición como uno de los líderes en apuestas deportivas y juegos de casino en línea. Para mayor comodidad, MEGAPARI ofrece una aplicación para Android compatible con la mayoría de smartphones y tabletas, una aplicación para iOS y una versión móvil del sitio web que funciona en todo tipo de dispositivos móviles."}',
             'value_fr' => '{"0":"MEGAPARI répond parfaitement aux besoins des utilisateurs mobiles. Grâce à son service mobile pratique et performant, l’opérateur a renforcé sa position comme l’un des leaders des paris sportifs et des jeux de casino en ligne. Pour plus de confort, MEGAPARI propose une application Android compatible avec la majorité des smartphones et tablettes, une application iOS ainsi qu’une version mobile du site accessible depuis tous les types d’appareils mobiles."}',
             'value_pt' => '{"0":"A MEGAPARI atende completamente às necessidades dos usuários móveis. Com um serviço móvel prático e funcional, o operador reforçou sua posição como um dos líderes em apostas esportivas e jogos de cassino online. Para maior conveniência, a MEGAPARI oferece um aplicativo para Android compatível com a maioria dos smartphones e tablets, um aplicativo para iOS e uma versão móvel do site que funciona em todos os tipos de dispositivos móveis."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 3
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"We have thoroughly analyzed both the mobile apps and the browser version of the platform, and compiled a list of the main pros and cons of each option. After reviewing it, you’ll be able to make an informed decision — whether to use the mobile app or stick with the desktop version of the website."}',
             'value_es' => '{"0":"Hemos analizado en detalle tanto las aplicaciones móviles como la versión del navegador de la plataforma y hemos elaborado una lista con las principales ventajas y desventajas de cada opción. Tras revisarla, podrás tomar una decisión informada: usar la app móvil o seguir utilizando la versión de escritorio del sitio web."}',
             'value_fr' => '{"0":"Nous avons analysé en détail les applications mobiles ainsi que la version navigateur de la plateforme, et dressé une liste des principaux avantages et inconvénients de chaque option. Après l’avoir consultée, vous pourrez prendre une décision éclairée : utiliser l’application mobile ou rester sur la version de bureau du site."}',
             'value_pt' => '{"0":"Analisámos cuidadosamente tanto os aplicativos móveis quanto a versão do navegador da plataforma, e compilámos uma lista com as principais vantagens e desvantagens de cada opção. Após analisá-la, você poderá tomar uma decisão informada — utilizar o aplicativo móvel ou continuar com a versão para computador do site."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 4
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"MEGAPARI offers apps for Android and iOS",
                                 "1":"The mobile website is well optimized",
                                 "2":"The MEGAPARI mobile app runs fast and smoothly",
                                 "3":"Full access to all platform features",
                                 "4":"Welcome bonus for new players"},
                             "1":
                                {"0":"No push notification support"}
                             }',
             'value_es' => '{"0":
                                {"0":"MEGAPARI ofrece aplicaciones para Android e iOS",
                                 "1":"La versión móvil del sitio está bien adaptada",
                                 "2":"La aplicación móvil de MEGAPARI funciona de manera rápida y estable",
                                 "3":"Acceso completo a todas las funciones de la plataforma",
                                 "4":"Bono de bienvenida para nuevos jugadores"},
                             "1":
                                {"0":"Sin soporte para notificaciones push"}
                             }',
             'value_fr' => '{"0":
                                {"0":"MEGAPARI propose des applications pour Android et iOS",
                                 "1":"La version mobile du site est bien optimisée",
                                 "2":"L\'application mobile MEGAPARI fonctionne rapidement et de manière fluide",
                                 "3":"Accès complet à toutes les fonctionnalités de la plateforme",
                                 "4":"Bonus de bienvenue pour les nouveaux joueurs"},
                             "1":
                                {"0":"Pas de prise en charge des notifications push"}
                             }',
             'value_pt' => '{"0":
                                {"0":"A MEGAPARI oferece aplicativos para Android e iOS",
                                 "1":"A versão móvel do site é bem adaptada",
                                 "2":"O aplicativo móvel da MEGAPARI é rápido e estável",
                                 "3":"Acesso total a todos os recursos da plataforma",
                                 "4":"Bônus de boas-vindas para novos jogadores"},
                             "1":
                                {"0":"Sem suporte para notificações push"}
                             }',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 5
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
                'value_en' => '{"0":"Download MEGAPARI on Android"}',
                'value_es' => '{"0":"Descarga MEGAPARI en Android"}',
                'value_fr' => '{"0":"Téléchargez MEGAPARI sur Android"}',
                'value_pt' => '{"0":"Baixe o MEGAPARI no Android"}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 6
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"To be able to place sports bets and play casino games from an Android device, you need to install the official MEGAPARI app. It’s very easy, and to make it even more convenient for you, we have prepared a step-by-step guide. Follow it to easily add the bookmaker’s app to your smartphone."}',
             'value_es' => '{"0":"Para poder hacer apuestas deportivas y jugar en el casino desde un dispositivo Android, necesitas instalar la aplicación oficial de MEGAPARI. Es muy sencillo, y para facilitarte aún más, hemos preparado una guía paso a paso. Síguela para añadir fácilmente la aplicación del operador a tu smartphone."}',
             'value_fr' => '{"0":"Pour pouvoir parier sur les sports et jouer au casino depuis un appareil Android, vous devez installer l’application officielle MEGAPARI. C’est très simple, et pour vous faciliter encore plus la tâche, nous avons préparé un guide étape par étape. Suivez-le pour ajouter facilement l’application du bookmaker sur votre smartphone."}',
             'value_pt' => '{"0":"Para poder fazer apostas esportivas e jogar no cassino a partir de um dispositivo Android, você precisa instalar o aplicativo oficial MEGAPARI. É muito fácil, e para tornar tudo ainda mais conveniente, preparamos um guia passo a passo. Siga-o para adicionar facilmente o aplicativo da casa de apostas ao seu smartphone."}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 7
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
                'value_en' => '{"0":"How to install the MEGAPARI app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación de MEGAPARI en Android?"}',
                'value_fr' => '{"0":"Comment installer l\'application MEGAPARI sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da MEGAPARI no Android?"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 8
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
                'value_en' => '{"0":"Follow the link"}',
                'value_es' => '{"0":"Sigue el enlace"}',
                'value_fr' => '{"0":"Suivez le lien"}',
                'value_pt' => '{"0":"Siga o link"}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 9
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
                'value_en' => '{"0":"The first step is simply to follow the link to the MEGAPARI betting site. Once on the homepage, you’ll be able to create an account, claim a generous welcome bonus, and gain access to some of the most competitive odds on the market."}',
                'value_es' => '{"0":"El primer paso es simplemente seguir el enlace al sitio de apuestas de MEGAPARI. Una vez en la página principal, podrás crear una cuenta, aprovechar un generoso bono de bienvenida y acceder a algunas de las cuotas más competitivas del mercado."}',
                'value_fr' => '{"0":"La première étape consiste simplement à suivre le lien vers le site de paris de MEGAPARI. Une fois sur la page d\'accueil, vous pourrez créer un compte, profiter d\'un généreux bonus de bienvenue et accéder à certaines des cotes les plus avantageuses du marché."}',
                'value_pt' => '{"0":"O primeiro passo é simplesmente seguir o link para o site de apostas da MEGAPARI. Ao acessar a página inicial, você poderá criar uma conta, aproveitar um generoso bônus de boas-vindas e ter acesso a algumas das melhores odds do mercado."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 10
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
                'value_en' => '{"0":"Download the APK file"}',
                'value_es' => '{"0":"Descarga el archivo APK"}',
                'value_fr' => '{"0":"Téléchargez le fichier APK"}',
                'value_pt' => '{"0":"Baixe o arquivo APK"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 11
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
                'value_en' => '{"0":"At the top of the MEGAPARI mobile app review page, we’ve placed a link where you can quickly find the APK file to download to your mobile device. Just click the «Download» button."}',
                'value_es' => '{"0":"En la parte superior de la página de revisión de la aplicación móvil de MEGAPARI, hemos colocado un enlace donde puedes encontrar rápidamente el archivo APK para descargarlo en tu dispositivo móvil. Solo haz clic en el botón «Descargar»."}',
                'value_fr' => '{"0":"En haut de la page de présentation de l’application mobile MEGAPARI, nous avons placé un lien permettant de trouver rapidement le fichier APK à télécharger sur votre appareil mobile. Il vous suffit de cliquer sur le bouton « Télécharger »."}',
                'value_pt' => '{"0":"No topo da página de análise do aplicativo móvel da MEGAPARI, colocamos um link onde você pode encontrar rapidamente o arquivo APK para baixar no seu dispositivo móvel. Basta clicar no botão «Baixar»."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 12
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
                'value_en' => '{"0":"Set up your mobile device"}',
                'value_es' => '{"0":"Configura tu dispositivo móvil"}',
                'value_fr' => '{"0":"Configurez votre appareil mobile"}',
                'value_pt' => '{"0":"Configure seu dispositivo móvel"}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 13
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
                'value_en' => '{"0":"Open the «Settings» section, go to the «Security» menu, and check the box next to «Allow installation from unknown sources». Save the changes."}',
                'value_es' => '{"0":"Abre la sección «Configuración», ve al menú «Seguridad» y marca la casilla junto a «Permitir instalación de fuentes desconocidas». Guarda los cambios."}',
                'value_fr' => '{"0":"Ouvrez la section « Paramètres », allez dans le menu « Sécurité » et cochez la case « Autoriser l’installation de sources inconnues ». Enregistrez les modifications."}',
                'value_pt' => '{"0":"Abra a seção «Configurações», vá ao menu «Segurança» e marque a opção «Permitir instalação de fontes desconhecidas». Salve as alterações."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 14
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
                'value_en' => '{"0":"Install the app"}',
                'value_es' => '{"0":"Instala la aplicación"}',
                'value_fr' => '{"0":"Installez l’application"}',
                'value_pt' => '{"0":"Instale o aplicativo"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 15
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
                'value_en' => '{"0":"Tap on the downloaded APK file and press the «Install» button. Wait a few minutes for the app to be installed on your mobile device."}',
                'value_es' => '{"0":"Toca el archivo APK descargado y pulsa el botón «Instalar». Espera unos minutos mientras la aplicación se instala en tu dispositivo móvil."}',
                'value_fr' => '{"0":"Appuyez sur le fichier APK téléchargé, puis sur le bouton « Installer ». Patientez quelques minutes pendant que l’application s’installe sur votre appareil mobile."}',
                'value_pt' => '{"0":"Toque no arquivo APK baixado e pressione o botão «Instalar». Aguarde alguns minutos enquanto o aplicativo é instalado no seu dispositivo móvel."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 16
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account"}',
                'value_es' => '{"0":"Verifica tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez votre compte"}',
                'value_pt' => '{"0":"Verifique sua conta"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 17
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
                'value_en' => '{"0":"In the final step, you need to open the installed app and enter the login details you created in the first step. Now you can place sports bets and enjoy the game from your mobile device!"}',
                'value_es' => '{"0":"En el último paso, debes abrir la aplicación instalada e ingresar los datos de acceso que creaste en el primer paso. ¡Ahora puedes hacer apuestas deportivas y disfrutar del juego desde tu dispositivo móvil!"}',
                'value_fr' => '{"0":"À la dernière étape, vous devez ouvrir l’application installée et saisir les identifiants que vous avez créés lors de la première étape. Vous pouvez maintenant parier sur le sport et profiter du jeu depuis votre appareil mobile !"}',
                'value_pt' => '{"0":"Na etapa final, você deve abrir o aplicativo instalado e inserir os dados de login que criou na primeira etapa. Agora você pode fazer apostas esportivas e aproveitar o jogo no seu dispositivo móvel!"}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 18
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
                'value_en' => '{"0":"Download the MEGAPARI mobile app on iOS"}',
                'value_es' => '{"0":"Descarga la aplicación móvil de MEGAPARI en iOS"}',
                'value_fr' => '{"0":"Téléchargez l\'application mobile MEGAPARI sur iOS"}',
                'value_pt' => '{"0":"Baixe o aplicativo móvel MEGAPARI no iOS"}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 19
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"iPhone and iPad users are advised to download the official MEGAPARI app, specially designed for the iOS mobile operating system."}',
             'value_es' => '{"0":"Se recomienda a los usuarios de iPhone y iPad descargar la aplicación oficial de MEGAPARI, diseñada especialmente para el sistema operativo móvil iOS."}',
             'value_fr' => '{"0":"Les utilisateurs d’iPhone et d’iPad sont invités à télécharger l’application officielle MEGAPARI, spécialement conçue pour le système d’exploitation mobile iOS."}',
             'value_pt' => '{"0":"Recomenda-se que os usuários de iPhone e iPad baixem o aplicativo oficial MEGAPARI, desenvolvido especialmente para o sistema operacional móvel iOS."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 20
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
             'value_en' => '{"0":"img-1.jpg"}',
             'value_es' => '{"0":"img-1.jpg"}',
             'value_fr' => '{"0":"img-1.jpg"}',
             'value_pt' => '{"0":"img-1.jpg"}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 21
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Unlike Android users, the process of downloading the MEGAPARI app for iOS is much simpler. Many steps required for Android users are not necessary for Apple device owners since the native MEGAPARI app apk file for iOS is available in the App Store."}',
             'value_es' => '{"0":"A diferencia de los usuarios de Android, el proceso de descarga de la aplicación MEGAPARI para iOS es mucho más sencillo. Muchos de los pasos que deben seguir los usuarios de Android no son necesarios para los propietarios de dispositivos Apple, ya que el archivo apk de la aplicación nativa de MEGAPARI para iOS está disponible en la App Store."}',
             'value_fr' => '{"0":"Contrairement aux utilisateurs Android, le processus de téléchargement de l’application MEGAPARI pour iOS est beaucoup plus simple. De nombreuses étapes nécessaires aux utilisateurs Android ne sont pas requises pour les propriétaires d’appareils Apple, car le fichier apk de l’application native MEGAPARI pour iOS est disponible sur l’App Store."}',
             'value_pt' => '{"0":"Ao contrário dos usuários de Android, o processo para baixar o aplicativo MEGAPARI para iOS é muito mais simples. Muitas das etapas que os usuários de Android precisam seguir não são necessárias para os proprietários de dispositivos Apple, pois o arquivo apk do aplicativo nativo MEGAPARI para iOS está disponível na App Store."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 22
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"However, since this review is primarily intended for new players, we have also prepared detailed download instructions for iPhone and iPad users. Below is what you need to do to install the official app on iOS devices:"}',
             'value_es' => '{"0":"Sin embargo, dado que esta reseña está destinada principalmente a nuevos jugadores, también hemos preparado instrucciones detalladas de descarga para usuarios de iPhone y iPad. A continuación, se explica qué deben hacer para instalar la aplicación oficial en dispositivos iOS:"}',
             'value_fr' => '{"0":"Cependant, comme cette revue s’adresse principalement aux nouveaux joueurs, nous avons également préparé des instructions détaillées pour le téléchargement pour les utilisateurs d’iPhone et d’iPad. Voici ce qu’il faut faire pour installer l’application officielle sur les appareils iOS :"}',
             'value_pt' => '{"0":"No entanto, como esta análise é principalmente para novos jogadores, também preparamos instruções detalhadas de download para usuários de iPhone e iPad. A seguir, veja o que é preciso fazer para instalar o aplicativo oficial em dispositivos iOS:"}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 23
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
                'value_en' => '{"0":"How to install the MEGAPARI mobile app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación móvil de MEGAPARI en iOS?"}',
                'value_fr' => '{"0":"Comment installer l\'application mobile MEGAPARI sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo móvel da MEGAPARI no iOS?"}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 24
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
                'value_en' => '{"0":"Follow the link"}',
                'value_es' => '{"0":"Sigue el enlace"}',
                'value_fr' => '{"0":"Suivez le lien"}',
                'value_pt' => '{"0":"Siga o link"}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 25
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
                'value_en' => '{"0":"If you haven’t created an account on the MEGAPARI website yet, we recommend doing so."}',
                'value_es' => '{"0":"Si aún no has creado una cuenta en el sitio web de MEGAPARI, te recomendamos que lo hagas."}',
                'value_fr' => '{"0":"Si vous n’avez pas encore créé de compte sur le site de MEGAPARI, nous vous recommandons de le faire."}',
                'value_pt' => '{"0":"Se ainda não criou uma conta no site da MEGAPARI, recomendamos que o faça."}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 26
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
                'value_en' => '{"0":"Search for the MEGAPARI app in the App Store"}',
                'value_es' => '{"0":"Busca la aplicación de MEGAPARI en la App Store"}',
                'value_fr' => '{"0":"Recherchez l\'application MEGAPARI dans le App Store"}',
                'value_pt' => '{"0":"Procure o aplicativo da MEGAPARI na App Store"}',
             'order' => 26
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 26
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
                'value_en' => '{"0":"Installing the mobile app for iOS devices is even easier than for Android, as it is available for download on the App Store. All you need to do is follow the direct link we provided at the top of our review and install the app on your iOS device."}',
                'value_es' => '{"0":"Instalar la aplicación móvil en dispositivos iOS es aún más fácil que en Android, ya que está disponible para su descarga en la App Store. Solo tienes que seguir el enlace directo que dejamos en la parte superior de nuestra reseña e instalar la app en tu dispositivo iOS."}',
                'value_fr' => '{"0":"Installer l’application mobile sur les appareils iOS est encore plus simple que sur Android, car elle est disponible en téléchargement sur l’App Store. Il vous suffit de suivre le lien direct que nous avons placé en haut de notre avis et d’installer l’application sur votre appareil iOS."}',
                'value_pt' => '{"0":"Instalar o aplicativo móvel em dispositivos iOS é ainda mais fácil do que no Android, pois ele está disponível para download na App Store. Tudo o que você precisa fazer é seguir o link direto que deixamos no topo da nossa análise e instalar o app no seu dispositivo iOS."}',
             'order' => 26
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 27
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account"}',
                'value_es' => '{"0":"Verifica tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez votre compte"}',
                'value_pt' => '{"0":"Verifique sua conta"}',
             'order' => 27
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 28
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
                'value_en' => '{"0":"In the final step, you need to open the installed app and enter the login details you created in the first step. Now you can place sports bets and enjoy the game from your mobile device!"}',
                'value_es' => '{"0":"En el último paso, debes abrir la aplicación instalada e ingresar los datos de acceso que creaste en el primer paso. ¡Ahora puedes hacer apuestas deportivas y disfrutar del juego desde tu dispositivo móvil!"}',
                'value_fr' => '{"0":"À la dernière étape, vous devez ouvrir l’application installée et saisir les identifiants que vous avez créés lors de la première étape. Vous pouvez maintenant parier sur le sport et profiter du jeu depuis votre appareil mobile !"}',
                'value_pt' => '{"0":"Na etapa final, você deve abrir o aplicativo instalado e inserir os dados de login que criou na primeira etapa. Agora você pode fazer apostas esportivas e aproveitar o jogo no seu dispositivo móvel!"}',
             'order' => 28
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 29
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
                'value_en' => '{"0":"The features of the MEGAPARI mobile app"}',
                'value_es' => '{"0":"Las funciones de la aplicación móvil de MEGAPARI"}',
                'value_fr' => '{"0":"Les fonctionnalités de l’application mobile MEGAPARI"}',
                'value_pt' => '{"0":"Os recursos do aplicativo móvel da MEGAPARI"}',
             'order' => 29
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 30
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
                'value_en' => '{"0":"Here\'s a closer look at what you can expect:"}',
                'value_es' => '{"0":"Aquí tienes un vistazo más detallado de lo que puedes esperar:"}',
                'value_fr' => '{"0":"Voici un aperçu plus détaillé de ce à quoi vous pouvez vous attendre :"}',
                'value_pt' => '{"0":"Aqui está uma visão mais detalhada do que você pode esperar:"}',
             'order' => 30
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 31
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'list_v2',
             'value_en' => '{"0":"User-friendly interface adapted for mobile devices",
                             "1":"Access to betting and casino anywhere",
                             "2":"Access to all sports markets, casino games, bonuses, and other services",
                             "3":"The app runs fast, without freezes or errors",
                             "4":"Reliable protection of personal data and financial transactions",
                             "5":"Automatic app updates",
                             "6":"Support for popular payment systems",
                             "7":"Welcome bonuses for new users"}',
             'value_es' => '{"0":"Interfaz cómoda adaptada para dispositivos móviles",
                             "1":"Acceso a apuestas y casino en cualquier lugar",
                             "2":"Acceso a todos los mercados deportivos, juegos de casino, bonos y otros servicios",
                             "3":"La aplicación funciona rápido, sin bloqueos ni errores",
                             "4":"Protección confiable de datos personales y transacciones financieras",
                             "5":"Actualizaciones automáticas de la aplicación",
                             "6":"Soporte para los sistemas de pago más populares",
                             "7":"Bonos de bienvenida para nuevos usuarios"}',
             'value_fr' => '{"0":"Interface conviviale adaptée aux appareils mobiles",
                             "1":"Accès aux paris et au casino partout",
                             "2":"Accès à tous les marchés sportifs, jeux de casino, bonus et autres services",
                             "3":"L’application fonctionne rapidement, sans blocages ni erreurs",
                             "4":"Protection fiable des données personnelles et des transactions financières",
                             "5":"Mises à jour automatiques de l’application",
                             "6":"Prise en charge des systèmes de paiement populaires",
                             "7":"Bonus de bienvenue pour les nouveaux utilisateurs"}',
             'value_pt' => '{"0":"Interface amigável adaptada para dispositivos móveis",
                             "1":"Acesso a apostas e cassino em qualquer lugar",
                             "2":"Acesso a todos os mercados esportivos, jogos de cassino, bônus e outros serviços",
                             "3":"O aplicativo funciona rapidamente, sem travamentos ou erros",
                             "4":"Proteção confiável de dados pessoais e transações financeiras",
                             "5":"Atualizações automáticas do aplicativo",
                             "6":"Suporte para os sistemas de pagamento mais populares",
                             "7":"Bônus de boas-vindas para novos usuários"}',
             'order' => 31
            ]
        );
    }
}
