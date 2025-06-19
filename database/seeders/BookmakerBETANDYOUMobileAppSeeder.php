<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBETANDYOUMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 1
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"Review on BETANDYOU betting mobile app"}',
             'value_es' => '{"0":"Reseña de la aplicación móvil de apuestas de BETANDYOU"}',
             'value_fr' => '{"0":"Avis sur l’application mobile de paris BETANDYOU"}',
             'value_pt' => '{"0":"Análise do aplicativo móvel de apostas da BETANDYOU"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 2
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"To make the gaming experience more convenient and allow you to bet on sports anytime and anywhere, BETANDYOU offers a mobile app for Android and iOS. With the mobile application, players get the same features as in the full version: depositing and withdrawing funds, participating in promotions, placing bets, and playing in the casino."}',
             'value_es' => '{"0":"Para que la experiencia de juego sea más cómoda y puedas apostar en cualquier momento y lugar, BETANDYOU ofrece una aplicación móvil para Android e iOS. Con la app, los jugadores obtienen las mismas funciones que en la versión completa: depositar y retirar fondos, participar en promociones, hacer apuestas y jugar en el casino."}',
             'value_fr' => '{"0":"Pour rendre le jeu plus confortable et permettre de parier sur le sport à tout moment et en tout lieu, BETANDYOU propose une application mobile pour Android et iOS. Grâce à l\'application, les joueurs bénéficient des mêmes fonctionnalités que sur la version complète : déposer et retirer des fonds, participer aux promotions, placer des paris et jouer au casino."}',
             'value_pt' => '{"0":"Para tornar o jogo mais confortável e permitir apostas esportivas em qualquer hora e lugar, a BETANDYOU oferece um aplicativo móvel para Android e iOS. Com o aplicativo, os jogadores têm acesso às mesmas funcionalidades da versão completa: depositar e retirar fundos, participar de promoções, fazer apostas e jogar no cassino."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 3
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Convenient access to sports betting, casino, and live events",
                                 "1":"Full functionality identical to the website",
                                 "2":"Interface optimized for touchscreens",
                                 "3":"Push notifications",
                                 "4":"Low data consumption"},
                             "1":
                                {"0":"Android version requires manual updates",
                                 "1":"Large app size"}
                             }',
             'value_es' => '{"0":
                                {"0":"Acceso conveniente a apuestas deportivas, casino y eventos en vivo",
                                 "1":"Funcionalidad idéntica a la del sitio web",
                                 "2":"Interfaz optimizada para pantallas táctiles",
                                 "3":"Notificaciones push",
                                 "4":"Bajo consumo de datos"},
                             "1":
                                {"0":"La versión para Android requiere actualizaciones manuales",
                                 "1":"Tamaño grande de la aplicación"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Accès pratique aux paris sportifs, au casino et aux événements en direct",
                                 "1":"Fonctionnalité identique à celle du site web",
                                 "2":"Interface optimisée pour les écrans tactiles",
                                 "3":"Notifications push",
                                 "4":"Faible consommation de données"},
                             "1":
                                {"0":"La version Android nécessite des mises à jour manuelles",
                                 "1":"Taille importante de l\'application"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Acesso conveniente a apostas esportivas, cassino e eventos ao vivo",
                                 "1":"Funcionalidade idêntica à do site",
                                 "2":"Interface otimizada para telas sensíveis ao toque",
                                 "3":"Notificações push",
                                 "4":"Baixo consumo de dados"},
                             "1":
                                {"0":"A versão Android requer atualizações manuais",
                                 "1":"Tamanho grande do aplicativo"}
                             }',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 4
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
                'value_en' => '{"0":"Download BETANDYOU on Android"}',
                'value_es' => '{"0":"Descarga BETANDYOU en Android"}',
                'value_fr' => '{"0":"Téléchargez BETANDYOU sur Android"}',
                'value_pt' => '{"0":"Baixe o BETANDYOU no Android"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 5
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU offers a free mobile app for the most popular platforms, including Android. Downloading it is simple — just click the corresponding icon on the official bookmaker’s website. The app includes all the essential features for a smooth gaming experience. Moreover, it helps save mobile data and allows you to place bets even if the BETANDYOU official website is temporarily unavailable."}',
             'value_es' => '{"0":"BETANDYOU ofrece una aplicación móvil gratuita para las plataformas más populares, incluido Android. Descargarla es muy fácil: solo tienes que hacer clic en el icono correspondiente en el sitio web oficial de la casa de apuestas. La app incluye todas las funciones necesarias para una experiencia de juego cómoda. Además, ayuda a ahorrar datos móviles y permite hacer apuestas incluso cuando el sitio oficial de BETANDYOU no está disponible temporalmente."}',
             'value_fr' => '{"0":"BETANDYOU propose une application mobile gratuite pour les plateformes les plus populaires, y compris Android. Il est facile de la télécharger — il suffit de cliquer sur l’icône correspondante sur le site officiel du bookmaker. L’application offre toutes les fonctionnalités nécessaires pour une expérience de jeu confortable. De plus, elle permet d’économiser des données mobiles et de continuer à parier même lorsque le site officiel de BETANDYOU est temporairement indisponible."}',
             'value_pt' => '{"0":"A BETANDYOU oferece um aplicativo móvel gratuito para as plataformas mais populares, incluindo Android. É fácil fazer o download — basta clicar no ícone correspondente no site oficial da casa de apostas. O app oferece todas as funcionalidades necessárias para uma experiência de jogo confortável. Além disso, ajuda a economizar dados móveis e permite fazer apostas mesmo quando o site oficial da BETANDYOU está temporariamente indisponível."}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 6
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
                'value_en' => '{"0":"How to install the BETANDYOU app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación de BETANDYOU en Android?"}',
                'value_fr' => '{"0":"Comment installer l\'application BETANDYOU sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da BETANDYOU no Android?"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
                'order' => 7
            ],
            ['key' => 'betandyou',
                'bookmaker_id' => 13,
                'component' => 'h4',
                'value_en' => '{"0":"Follow the link"}',
                'value_es' => '{"0":"Sigue el enlace"}',
                'value_fr' => '{"0":"Suivez le lien"}',
                'value_pt' => '{"0":"Siga o link"}',
                'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
                'order' => 8
            ],
            ['key' => 'betandyou',
                'bookmaker_id' => 13,
                'component' => 'p',
                'value_en' => '{"0":"The first step is simply to follow the link to the BETANDYOU betting site. Once on the homepage, you’ll be able to create an account, claim a generous welcome bonus, and gain access to some of the most competitive odds on the market."}',
                'value_es' => '{"0":"El primer paso es simplemente seguir el enlace al sitio de apuestas de BETANDYOU. Una vez en la página principal, podrás crear una cuenta, aprovechar un generoso bono de bienvenida y acceder a algunas de las cuotas más competitivas del mercado."}',
                'value_fr' => '{"0":"La première étape consiste simplement à suivre le lien vers le site de paris de BETANDYOU. Une fois sur la page d\'accueil, vous pourrez créer un compte, profiter d\'un généreux bonus de bienvenue et accéder à certaines des cotes les plus avantageuses du marché."}',
                'value_pt' => '{"0":"O primeiro passo é simplesmente seguir o link para o site de apostas da BETANDYOU. Ao acessar a página inicial, você poderá criar uma conta, aproveitar um generoso bônus de boas-vindas e ter acesso a algumas das melhores odds do mercado."}',
                'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
                'order' => 9
            ],
            ['key' => 'betandyou',
                'bookmaker_id' => 13,
                'component' => 'h4',
                'value_en' => '{"0":"Download the APK file"}',
                'value_es' => '{"0":"Descarga el archivo APK"}',
                'value_fr' => '{"0":"Téléchargez le fichier APK"}',
                'value_pt' => '{"0":"Baixe o arquivo APK"}',
                'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
                'order' => 10
            ],
            ['key' => 'betandyou',
                'bookmaker_id' => 13,
                'component' => 'p',
                'value_en' => '{"0":"At the top of the BETANDYOU mobile app review page, we’ve placed a link where you can quickly find the APK file to download to your mobile device. Just click the «Download» button."}',
                'value_es' => '{"0":"En la parte superior de la página de revisión de la aplicación móvil de BETANDYOU, hemos colocado un enlace donde puedes encontrar rápidamente el archivo APK para descargarlo en tu dispositivo móvil. Solo haz clic en el botón «Descargar»."}',
                'value_fr' => '{"0":"En haut de la page de présentation de l’application mobile BETANDYOU, nous avons placé un lien permettant de trouver rapidement le fichier APK à télécharger sur votre appareil mobile. Il vous suffit de cliquer sur le bouton « Télécharger »."}',
                'value_pt' => '{"0":"No topo da página de análise do aplicativo móvel da BETANDYOU, colocamos um link onde você pode encontrar rapidamente o arquivo APK para baixar no seu dispositivo móvel. Basta clicar no botão «Baixar»."}',
                'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
                'order' => 11
            ],
            ['key' => 'betandyou',
                'bookmaker_id' => 13,
                'component' => 'h4',
                'value_en' => '{"0":"Set up your mobile device"}',
                'value_es' => '{"0":"Configura tu dispositivo móvil"}',
                'value_fr' => '{"0":"Configurez votre appareil mobile"}',
                'value_pt' => '{"0":"Configure seu dispositivo móvel"}',
                'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
                'order' => 12
            ],
            ['key' => 'betandyou',
                'bookmaker_id' => 13,
                'component' => 'p',
                'value_en' => '{"0":"Open the «Settings» section, go to the «Security» menu, and check the box next to «Allow installation from unknown sources». Save the changes."}',
                'value_es' => '{"0":"Abre la sección «Configuración», ve al menú «Seguridad» y marca la casilla junto a «Permitir instalación de fuentes desconocidas». Guarda los cambios."}',
                'value_fr' => '{"0":"Ouvrez la section « Paramètres », allez dans le menu « Sécurité » et cochez la case « Autoriser l’installation de sources inconnues ». Enregistrez les modifications."}',
                'value_pt' => '{"0":"Abra a seção «Configurações», vá ao menu «Segurança» e marque a opção «Permitir instalação de fontes desconhecidas». Salve as alterações."}',
                'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
                'order' => 13
            ],
            ['key' => 'betandyou',
                'bookmaker_id' => 13,
                'component' => 'h4',
                'value_en' => '{"0":"Install the app"}',
                'value_es' => '{"0":"Instala la aplicación"}',
                'value_fr' => '{"0":"Installez l’application"}',
                'value_pt' => '{"0":"Instale o aplicativo"}',
                'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
                'order' => 14
            ],
            ['key' => 'betandyou',
                'bookmaker_id' => 13,
                'component' => 'p',
                'value_en' => '{"0":"Tap on the downloaded APK file and press the «Install» button. Wait a few minutes for the app to be installed on your mobile device."}',
                'value_es' => '{"0":"Toca el archivo APK descargado y pulsa el botón «Instalar». Espera unos minutos mientras la aplicación se instala en tu dispositivo móvil."}',
                'value_fr' => '{"0":"Appuyez sur le fichier APK téléchargé, puis sur le bouton « Installer ». Patientez quelques minutes pendant que l’application s’installe sur votre appareil mobile."}',
                'value_pt' => '{"0":"Toque no arquivo APK baixado e pressione o botão «Instalar». Aguarde alguns minutos enquanto o aplicativo é instalado no seu dispositivo móvel."}',
                'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
                'order' => 15
            ],
            ['key' => 'betandyou',
                'bookmaker_id' => 13,
                'component' => 'h4',
                'value_en' => '{"0":"Verify your account"}',
                'value_es' => '{"0":"Verifica tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez votre compte"}',
                'value_pt' => '{"0":"Verifique sua conta"}',
                'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 16
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
                'value_en' => '{"0":"After installation, launch the app and log into your account or register a new one."}',
                'value_es' => '{"0":"Después de la instalación, abre la aplicación e inicia sesión en tu cuenta o regístrate si aún no tienes una."}',
                'value_fr' => '{"0":"Une fois l\'installation terminée, lancez l\'application et connectez-vous à votre compte ou créez-en un nouveau."}',
                'value_pt' => '{"0":"Após a instalação, abra o aplicativo e entre na sua conta ou registre uma nova."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 17
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
                'value_en' => '{"0":"Download the BETANDYOU mobile app on iOS"}',
                'value_es' => '{"0":"Descarga la aplicación móvil de BETANDYOU en iOS"}',
                'value_fr' => '{"0":"Téléchargez l\'application mobile BETANDYOU sur iOS"}',
                'value_pt' => '{"0":"Baixe o aplicativo móvel BETANDYOU no iOS"}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 18
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU also has an app for iOS! You can download it from the official website or the App Store. In addition, BETANDYOU offers special prize draws for players who download the mobile app."}',
             'value_es' => '{"0":"¡BETANDYOU también tiene una aplicación para iOS! Puedes descargarla desde el sitio web oficial o desde la App Store. Además, BETANDYOU ofrece sorteos promocionales para los jugadores que descargan la aplicación móvil."}',
             'value_fr' => '{"0":"BETANDYOU propose également une application pour iOS ! Vous pouvez la télécharger depuis le site officiel ou l\'App Store. De plus, BETANDYOU organise des tirages au sort pour les joueurs qui téléchargent l\'application mobile."}',
             'value_pt' => '{"0":"A BETANDYOU também tem um aplicativo para iOS! Você pode baixá-lo no site oficial ou na App Store. Além disso, a BETANDYOU realiza sorteios promocionais para os jogadores que baixam o aplicativo móvel."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 19
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
             'value_en' => '{"0":"img-1.jpg"}',
             'value_es' => '{"0":"img-1.jpg"}',
             'value_fr' => '{"0":"img-1.jpg"}',
             'value_pt' => '{"0":"img-1.jpg"}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
                'order' => 20
            ],
            ['key' => 'betandyou',
                'bookmaker_id' => 13,
                'component' => 'p',
                'value_en' => '{"0":"Unlike Android users, the process of downloading the BETANDYOU app for iOS is much simpler. Many steps required for Android users are not necessary for Apple device owners since the native BETANDYOU app apk file for iOS is available in the App Store."}',
                'value_es' => '{"0":"A diferencia de los usuarios de Android, el proceso de descarga de la aplicación BETANDYOU para iOS es mucho más sencillo. Muchos de los pasos que deben seguir los usuarios de Android no son necesarios para los propietarios de dispositivos Apple, ya que el archivo apk de la aplicación nativa de BETANDYOU para iOS está disponible en la App Store."}',
                'value_fr' => '{"0":"Contrairement aux utilisateurs Android, le processus de téléchargement de l’application BETANDYOU pour iOS est beaucoup plus simple. De nombreuses étapes nécessaires aux utilisateurs Android ne sont pas requises pour les propriétaires d’appareils Apple, car le fichier apk de l’application native BETANDYOU pour iOS est disponible sur l’App Store."}',
                'value_pt' => '{"0":"Ao contrário dos usuários de Android, o processo para baixar o aplicativo BETANDYOU para iOS é muito mais simples. Muitas das etapas que os usuários de Android precisam seguir não são necessárias para os proprietários de dispositivos Apple, pois o arquivo apk do aplicativo nativo BETANDYOU para iOS está disponível na App Store."}',
                'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 21
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
                'value_en' => '{"0":"How to install the BETANDYOU mobile app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación móvil de BETANDYOU en iOS?"}',
                'value_fr' => '{"0":"Comment installer l\'application mobile BETANDYOU sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo móvel da BETANDYOU no iOS?"}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
                'order' => 22
            ],
            ['key' => 'betandyou',
                'bookmaker_id' => 13,
                'component' => 'h4',
                'value_en' => '{"0":"Follow the link"}',
                'value_es' => '{"0":"Sigue el enlace"}',
                'value_fr' => '{"0":"Suivez le lien"}',
                'value_pt' => '{"0":"Siga o link"}',
                'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
                'order' => 23
            ],
            ['key' => 'betandyou',
                'bookmaker_id' => 13,
                'component' => 'p',
                'value_en' => '{"0":"If you haven’t created an account on the BETANDYOU website yet, we recommend doing so."}',
                'value_es' => '{"0":"Si aún no has creado una cuenta en el sitio web de BETANDYOU, te recomendamos que lo hagas."}',
                'value_fr' => '{"0":"Si vous n’avez pas encore créé de compte sur le site de BETANDYOU, nous vous recommandons de le faire."}',
                'value_pt' => '{"0":"Se ainda não criou uma conta no site da BETANDYOU, recomendamos que o faça."}',
                'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
                'order' => 24
            ],
            ['key' => 'betandyou',
                'bookmaker_id' => 13,
                'component' => 'h4',
                'value_en' => '{"0":"Search for the BETANDYOU app in the App Store"}',
                'value_es' => '{"0":"Busca la aplicación de BETANDYOU en la App Store"}',
                'value_fr' => '{"0":"Recherchez l\'application BETANDYOU dans le App Store"}',
                'value_pt' => '{"0":"Procure o aplicativo da BETANDYOU na App Store"}',
                'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
                'order' => 25
            ],
            ['key' => 'betandyou',
                'bookmaker_id' => 13,
                'component' => 'p',
                'value_en' => '{"0":"Installing the mobile app for iOS devices is even easier than for Android, as it is available for download on the App Store. All you need to do is follow the direct link we provided at the top of our review and install the app on your iOS device."}',
                'value_es' => '{"0":"Instalar la aplicación móvil en dispositivos iOS es aún más fácil que en Android, ya que está disponible para su descarga en la App Store. Solo tienes que seguir el enlace directo que dejamos en la parte superior de nuestra reseña e instalar la app en tu dispositivo iOS."}',
                'value_fr' => '{"0":"Installer l’application mobile sur les appareils iOS est encore plus simple que sur Android, car elle est disponible en téléchargement sur l’App Store. Il vous suffit de suivre le lien direct que nous avons placé en haut de notre avis et d’installer l’application sur votre appareil iOS."}',
                'value_pt' => '{"0":"Instalar o aplicativo móvel em dispositivos iOS é ainda mais fácil do que no Android, pois ele está disponível para download na App Store. Tudo o que você precisa fazer é seguir o link direto que deixamos no topo da nossa análise e instalar o app no seu dispositivo iOS."}',
                'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
                'order' => 26
            ],
            ['key' => 'betandyou',
                'bookmaker_id' => 13,
                'component' => 'h4',
                'value_en' => '{"0":"Verify your account"}',
                'value_es' => '{"0":"Verifica tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez votre compte"}',
                'value_pt' => '{"0":"Verifique sua conta"}',
                'order' => 26
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
                'order' => 27
            ],
            ['key' => 'betandyou',
                'bookmaker_id' => 13,
                'component' => 'p',
                'value_en' => '{"0":"In the final step, you need to open the installed app and enter the login details you created in the first step. Now you can place sports bets and enjoy the game from your mobile device!"}',
                'value_es' => '{"0":"En el último paso, debes abrir la aplicación instalada e ingresar los datos de acceso que creaste en el primer paso. ¡Ahora puedes hacer apuestas deportivas y disfrutar del juego desde tu dispositivo móvil!"}',
                'value_fr' => '{"0":"À la dernière étape, vous devez ouvrir l’application installée et saisir les identifiants que vous avez créés lors de la première étape. Vous pouvez maintenant parier sur le sport et profiter du jeu depuis votre appareil mobile !"}',
                'value_pt' => '{"0":"Na etapa final, você deve abrir o aplicativo instalado e inserir os dados de login que criou na primeira etapa. Agora você pode fazer apostas esportivas e aproveitar o jogo no seu dispositivo móvel!"}',
                'order' => 27
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 28
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
                'value_en' => '{"0":"The features of the BETANDYOU mobile app"}',
                'value_es' => '{"0":"Las funciones de la aplicación móvil de BETANDYOU"}',
                'value_fr' => '{"0":"Les fonctionnalités de l’application mobile BETANDYOU"}',
                'value_pt' => '{"0":"Os recursos do aplicativo móvel da BETANDYOU"}',
             'order' => 28
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 29
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
                'value_en' => '{"0":"Here\'s a closer look at what you can expect:"}',
                'value_es' => '{"0":"Aquí tienes un vistazo más detallado de lo que puedes esperar:"}',
                'value_fr' => '{"0":"Voici un aperçu plus détaillé de ce à quoi vous pouvez vous attendre :"}',
                'value_pt' => '{"0":"Aqui está uma visão mais detalhada do que você pode esperar:"}',
             'order' => 29
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 30
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'list_v2',
             'value_en' => '{"0":"Access to sports betting, casino, and financial transactions",
                             "1":"Ability to participate in promotions and bonuses",
                             "2":"Place bets anytime and from anywhere",
                             "3":"Fast navigation",
                             "4":"Works stably even with a weak internet connection",
                             "5":"Push notifications about bonuses, winnings, and sports events",
                             "6":"Saves data compared to the browser version",
                             "7":"Accessible even when the website is blocked"}',
             'value_es' => '{"0":"Acceso a apuestas deportivas, casino y transacciones financieras",
                             "1":"Posibilidad de participar en promociones y bonificaciones",
                             "2":"Realiza apuestas en cualquier momento y desde cualquier lugar",
                             "3":"Navegación rápida",
                             "4":"Funciona de forma estable incluso con una conexión débil",
                             "5":"Notificaciones push sobre bonos, ganancias y eventos deportivos",
                             "6":"Ahorro de datos en comparación con la versión del navegador",
                             "7":"Acceso incluso cuando el sitio web está bloqueado"}',
             'value_fr' => '{"0":"Accès aux paris sportifs, au casino et aux opérations financières",
                             "1":"Possibilité de participer aux promotions et bonus",
                             "2":"Placer des paris à tout moment et depuis n\'importe où",
                             "3":"Navigation rapide",
                             "4":"Fonctionne de manière stable même avec une connexion Internet faible",
                             "5":"Notifications push concernant les bonus, les gains et les événements sportifs",
                             "6":"Économie de données par rapport à la version navigateur",
                             "7":"Accessible même lorsque le site est bloqué"}',
             'value_pt' => '{"0":"Acesso a apostas esportivas, cassino e transações financeiras",
                             "1":"Possibilidade de participar de promoções e bônus",
                             "2":"Aposte a qualquer hora e de qualquer lugar",
                             "3":"Navegação rápida",
                             "4":"Funciona de forma estável mesmo com conexão fraca à internet",
                             "5":"Notificações push sobre bônus, ganhos e eventos esportivos",
                             "6":"Economia de dados em comparação com a versão no navegador",
                             "7":"Acesso garantido mesmo quando o site está bloqueado"}',
             'order' => 30
            ]
        );
    }
}
