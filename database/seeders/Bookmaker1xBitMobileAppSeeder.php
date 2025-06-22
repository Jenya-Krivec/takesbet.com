<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1xBitMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 1
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'h3',
                'value_en' => '{"0":"Review on 1xBit betting mobile app"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de apuestas de 1xBit"}',
                'value_fr' => '{"0":"Avis sur l’application mobile de paris 1xBit"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel de apostas da 1xBit"}',
                'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 2
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'p',
                'value_en' => '{"0":"The 1xBit app is a favorite among many bettors. Find out how to download and install the mobile app right now!"}',
                'value_es' => '{"0":"La aplicación de 1xBit es la favorita de muchos apostadores. ¡Descubre cómo descargar e instalar la aplicación móvil ahora mismo!"}',
                'value_fr' => '{"0":"L\'application 1xBit est la préférée de nombreux parieurs. Découvrez comment télécharger et installer l\'application mobile dès maintenant !"}',
                'value_pt' => '{"0":"O aplicativo da 1xBit é o favorito de muitos apostadores. Saiba como baixar e instalar o aplicativo móvel agora mesmo!"}',
                'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 3
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'table_v1',
                'value_en' => '{"0":
                                {"0":"The app is well optimized and supports even older versions of Android and iOS",
                                 "1":"High betting odds",
                                 "2":"User-friendly app. Great for beginners",
                                 "3":"Simple download and installation process"},
                             "1":
                                {"0":"You cannot claim both welcome bonuses at the same time",
                                 "1":"Free space is required on your phone"}
                             }',
                'value_es' => '{"0":
                                {"0":"La aplicación está bien optimizada y es compatible incluso con versiones antiguas de Android e iOS",
                                 "1":"Cuotas de apuestas altas",
                                 "2":"Aplicación fácil de usar. Ideal para principiantes",
                                 "3":"Proceso de descarga e instalación sencillo"},
                             "1":
                                {"0":"No puedes reclamar ambos bonos de bienvenida al mismo tiempo",
                                 "1":"Se requiere espacio libre en el teléfono"}
                             }',
                'value_fr' => '{"0":
                                {"0":"L\'application est bien optimisée et compatible même avec les anciennes versions d\'Android et d\'iOS",
                                 "1":"Cotes de paris élevées",
                                 "2":"Application conviviale. Idéale pour les débutants",
                                 "3":"Procédure de téléchargement et d\'installation simple"},
                             "1":
                                {"0":"Vous ne pouvez pas réclamer les deux bonus de bienvenue en même temps",
                                 "1":"Un espace libre est requis sur votre téléphone"}
                             }',
                'value_pt' => '{"0":
                                {"0":"O aplicativo é bem otimizado e compatível até com versões antigas do Android e iOS",
                                 "1":"Altas cotações de apostas",
                                 "2":"Aplicativo fácil de usar. Ótimo para iniciantes",
                                 "3":"Processo simples de download e instalação"},
                             "1":
                                {"0":"Você não pode reivindicar os dois bônus de boas-vindas ao mesmo tempo",
                                 "1":"É necessário espaço livre no telefone"}
                             }',
                'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 4
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'h3',
                'value_en' => '{"0":"Download 1xBit on Android"}',
                'value_es' => '{"0":"Descarga 1xBit en Android"}',
                'value_fr' => '{"0":"Téléchargez 1xBit sur Android"}',
                'value_pt' => '{"0":"Baixe o 1xBit no Android"}',
                'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 5
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'p',
                'value_en' => '{"0":"To download 1xBit on Android, you should use the official website of the bookmaker, where the installation file is distributed. Due to restrictions on gambling software imposed by Google, it is currently not possible to download and install the 1xBit app via the Play Market."}',
                'value_es' => '{"0":"Para descargar 1xBit en Android, debes utilizar el sitio web oficial de la casa de apuestas, donde se distribuye el archivo de instalación. Debido a las restricciones impuestas por Google sobre software de apuestas, actualmente no es posible descargar e instalar la aplicación de 1xBit a través de Play Market."}',
                'value_fr' => '{"0":"Pour télécharger 1xBit sur Android, vous devez utiliser le site officiel du bookmaker, où le fichier d\'installation est disponible. En raison des restrictions imposées par Google sur les logiciels de jeux d\'argent, il n’est actuellement pas possible de télécharger et d’installer l’application 1xBit via le Play Market."}',
                'value_pt' => '{"0":"Para baixar o 1xBit no Android, você deve usar o site oficial da casa de apostas, onde o arquivo de instalação é disponibilizado. Devido às restrições da Google quanto à distribuição de softwares de apostas, atualmente não é possível baixar e instalar o aplicativo da 1xBit pela Play Store."}',
                'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 6
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'p',
                'value_en' => '{"0":"Therefore, to use the app, you need to download the 1xBit APK installer to your smartphone or tablet. The download is carried out from the official 1xBit website, where a direct link is available in the mobile section."}',
                'value_es' => '{"0":"Por lo tanto, para usar la aplicación, debes descargar el instalador APK de 1xBit en tu smartphone o tablet. La descarga se realiza desde el sitio oficial de 1xBit, donde hay un enlace directo en la sección móvil."}',
                'value_fr' => '{"0":"Ainsi, pour utiliser l’application, vous devez télécharger le fichier APK de 1xBit sur votre smartphone ou tablette. Le téléchargement se fait depuis le site officiel de 1xBit, où un lien direct est disponible dans la section mobile."}',
                'value_pt' => '{"0":"Portanto, para usar o aplicativo, é necessário baixar o instalador APK da 1xBit no seu smartphone ou tablet. O download é feito a partir do site oficial da 1xBit, onde há um link direto na seção móvel."}',
                'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 7
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'h3',
                'value_en' => '{"0":"How to install the 1xBit app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación de 1xBit en Android?"}',
                'value_fr' => '{"0":"Comment installer l\'application 1xBit sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da 1xBit no Android?"}',
                'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 8
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'h4',
                'value_en' => '{"0":"Follow the link"}',
                'value_es' => '{"0":"Sigue el enlace"}',
                'value_fr' => '{"0":"Suivez le lien"}',
                'value_pt' => '{"0":"Siga o link"}',
                'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 9
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'p',
                'value_en' => '{"0":"The first step is simply to follow the link to the 1xBit betting site. Once on the homepage, you’ll be able to create an account, claim a generous welcome bonus, and gain access to some of the most competitive odds on the market."}',
                'value_es' => '{"0":"El primer paso es simplemente seguir el enlace al sitio de apuestas de 1xBit. Una vez en la página principal, podrás crear una cuenta, aprovechar un generoso bono de bienvenida y acceder a algunas de las cuotas más competitivas del mercado."}',
                'value_fr' => '{"0":"La première étape consiste simplement à suivre le lien vers le site de paris de 1xBit. Une fois sur la page d\'accueil, vous pourrez créer un compte, profiter d\'un généreux bonus de bienvenue et accéder à certaines des cotes les plus avantageuses du marché."}',
                'value_pt' => '{"0":"O primeiro passo é simplesmente seguir o link para o site de apostas da 1xBit. Ao acessar a página inicial, você poderá criar uma conta, aproveitar um generoso bônus de boas-vindas e ter acesso a algumas das melhores odds do mercado."}',
                'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 10
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'h4',
                'value_en' => '{"0":"Download the APK file"}',
                'value_es' => '{"0":"Descarga el archivo APK"}',
                'value_fr' => '{"0":"Téléchargez le fichier APK"}',
                'value_pt' => '{"0":"Baixe o arquivo APK"}',
                'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 11
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'p',
                'value_en' => '{"0":"At the top of the 1xBit mobile app review page, we’ve placed a link where you can quickly find the APK file to download to your mobile device. Just click the «Download» button."}',
                'value_es' => '{"0":"En la parte superior de la página de revisión de la aplicación móvil de 1xBit, hemos colocado un enlace donde puedes encontrar rápidamente el archivo APK para descargarlo en tu dispositivo móvil. Solo haz clic en el botón «Descargar»."}',
                'value_fr' => '{"0":"En haut de la page de présentation de l’application mobile 1xBit, nous avons placé un lien permettant de trouver rapidement le fichier APK à télécharger sur votre appareil mobile. Il vous suffit de cliquer sur le bouton « Télécharger »."}',
                'value_pt' => '{"0":"No topo da página de análise do aplicativo móvel da 1xBit, colocamos um link onde você pode encontrar rapidamente o arquivo APK para baixar no seu dispositivo móvel. Basta clicar no botão «Baixar»."}',
                'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 12
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'h4',
                'value_en' => '{"0":"Set up your mobile device"}',
                'value_es' => '{"0":"Configura tu dispositivo móvil"}',
                'value_fr' => '{"0":"Configurez votre appareil mobile"}',
                'value_pt' => '{"0":"Configure seu dispositivo móvel"}',
                'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 13
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'p',
                'value_en' => '{"0":"Open the «Settings» section, go to the «Security» menu, and check the box next to «Allow installation from unknown sources». Save the changes."}',
                'value_es' => '{"0":"Abre la sección «Configuración», ve al menú «Seguridad» y marca la casilla junto a «Permitir instalación de fuentes desconocidas». Guarda los cambios."}',
                'value_fr' => '{"0":"Ouvrez la section « Paramètres », allez dans le menu « Sécurité » et cochez la case « Autoriser l’installation de sources inconnues ». Enregistrez les modifications."}',
                'value_pt' => '{"0":"Abra a seção «Configurações», vá ao menu «Segurança» e marque a opção «Permitir instalação de fontes desconhecidas». Salve as alterações."}',
                'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 14
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'h4',
                'value_en' => '{"0":"Install the app"}',
                'value_es' => '{"0":"Instala la aplicación"}',
                'value_fr' => '{"0":"Installez l’application"}',
                'value_pt' => '{"0":"Instale o aplicativo"}',
                'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 15
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'p',
                'value_en' => '{"0":"Tap on the downloaded APK file and press the «Install» button. Wait a few minutes for the app to be installed on your mobile device."}',
                'value_es' => '{"0":"Toca el archivo APK descargado y pulsa el botón «Instalar». Espera unos minutos mientras la aplicación se instala en tu dispositivo móvil."}',
                'value_fr' => '{"0":"Appuyez sur le fichier APK téléchargé, puis sur le bouton « Installer ». Patientez quelques minutes pendant que l’application s’installe sur votre appareil mobile."}',
                'value_pt' => '{"0":"Toque no arquivo APK baixado e pressione o botão «Instalar». Aguarde alguns minutos enquanto o aplicativo é instalado no seu dispositivo móvel."}',
                'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 16
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'h4',
                'value_en' => '{"0":"Verify your account"}',
                'value_es' => '{"0":"Verifica tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez votre compte"}',
                'value_pt' => '{"0":"Verifique sua conta"}',
                'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 17
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'p',
                'value_en' => '{"0":"In the final step, you need to open the installed app and enter the login details you created in the first step. Now you can place sports bets and enjoy the game from your mobile device!"}',
                'value_es' => '{"0":"En el último paso, debes abrir la aplicación instalada e ingresar los datos de acceso que creaste en el primer paso. ¡Ahora puedes hacer apuestas deportivas y disfrutar del juego desde tu dispositivo móvil!"}',
                'value_fr' => '{"0":"À la dernière étape, vous devez ouvrir l’application installée et saisir les identifiants que vous avez créés lors de la première étape. Vous pouvez maintenant parier sur le sport et profiter du jeu depuis votre appareil mobile !"}',
                'value_pt' => '{"0":"Na etapa final, você deve abrir o aplicativo instalado e inserir os dados de login que criou na primeira etapa. Agora você pode fazer apostas esportivas e aproveitar o jogo no seu dispositivo móvel!"}',
                'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 18
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
                'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 19
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'h3',
                'value_en' => '{"0":"Download the 1xBit mobile app on iOS"}',
                'value_es' => '{"0":"Descarga la aplicación móvil de 1xBit en iOS"}',
                'value_fr' => '{"0":"Téléchargez l\'application mobile 1xBit sur iOS"}',
                'value_pt' => '{"0":"Baixe o aplicativo móvel 1xBit no iOS"}',
                'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 20
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'p',
                'value_en' => '{"0":"iPhone and iPad users are advised to download the official 1xBit app, specially designed for the iOS mobile operating system."}',
                'value_es' => '{"0":"Se recomienda a los usuarios de iPhone y iPad descargar la aplicación oficial de 1xBit, diseñada especialmente para el sistema operativo móvil iOS."}',
                'value_fr' => '{"0":"Les utilisateurs d’iPhone et d’iPad sont invités à télécharger l’application officielle 1xBit, spécialement conçue pour le système d’exploitation mobile iOS."}',
                'value_pt' => '{"0":"Recomenda-se que os usuários de iPhone e iPad baixem o aplicativo oficial 1xBit, desenvolvido especialmente para o sistema operacional móvel iOS."}',
                'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 21
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'p',
                'value_en' => '{"0":"Unlike Android users, the process of downloading the 1xBit app for iOS is much simpler. Many steps required for Android users are not necessary for Apple device owners since the native 1xBit app apk file for iOS is available in the App Store."}',
                'value_es' => '{"0":"A diferencia de los usuarios de Android, el proceso de descarga de la aplicación 1xBit para iOS es mucho más sencillo. Muchos de los pasos que deben seguir los usuarios de Android no son necesarios para los propietarios de dispositivos Apple, ya que el archivo apk de la aplicación nativa de 1xBit para iOS está disponible en la App Store."}',
                'value_fr' => '{"0":"Contrairement aux utilisateurs Android, le processus de téléchargement de l’application 1xBit pour iOS est beaucoup plus simple. De nombreuses étapes nécessaires aux utilisateurs Android ne sont pas requises pour les propriétaires d’appareils Apple, car le fichier apk de l’application native 1xBit pour iOS est disponible sur l’App Store."}',
                'value_pt' => '{"0":"Ao contrário dos usuários de Android, o processo para baixar o aplicativo 1xBit para iOS é muito mais simples. Muitas das etapas que os usuários de Android precisam seguir não são necessárias para os proprietários de dispositivos Apple, pois o arquivo apk do aplicativo nativo 1xBit para iOS está disponível na App Store."}',
                'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 22
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'p',
                'value_en' => '{"0":"However, since this review is primarily intended for new players, we have also prepared detailed download instructions for iPhone and iPad users. Below is what you need to do to install the official app on iOS devices:"}',
                'value_es' => '{"0":"Sin embargo, dado que esta reseña está destinada principalmente a nuevos jugadores, también hemos preparado instrucciones detalladas de descarga para usuarios de iPhone y iPad. A continuación, se explica qué deben hacer para instalar la aplicación oficial en dispositivos iOS:"}',
                'value_fr' => '{"0":"Cependant, comme cette revue s’adresse principalement aux nouveaux joueurs, nous avons également préparé des instructions détaillées pour le téléchargement pour les utilisateurs d’iPhone et d’iPad. Voici ce qu’il faut faire pour installer l’application officielle sur les appareils iOS :"}',
                'value_pt' => '{"0":"No entanto, como esta análise é principalmente para novos jogadores, também preparamos instruções detalhadas de download para usuários de iPhone e iPad. A seguir, veja o que é preciso fazer para instalar o aplicativo oficial em dispositivos iOS:"}',
                'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 23
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'h3',
                'value_en' => '{"0":"How to install the 1xBit mobile app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación móvil de 1xBit en iOS?"}',
                'value_fr' => '{"0":"Comment installer l\'application mobile 1xBit sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo móvel da 1xBit no iOS?"}',
                'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 24
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'h4',
                'value_en' => '{"0":"Follow the link"}',
                'value_es' => '{"0":"Sigue el enlace"}',
                'value_fr' => '{"0":"Suivez le lien"}',
                'value_pt' => '{"0":"Siga o link"}',
                'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 25
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'p',
                'value_en' => '{"0":"If you haven’t created an account on the 1xBit website yet, we recommend doing so."}',
                'value_es' => '{"0":"Si aún no has creado una cuenta en el sitio web de 1xBit, te recomendamos que lo hagas."}',
                'value_fr' => '{"0":"Si vous n’avez pas encore créé de compte sur le site de 1xBit, nous vous recommandons de le faire."}',
                'value_pt' => '{"0":"Se ainda não criou uma conta no site da 1xBit, recomendamos que o faça."}',
                'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 26
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'h4',
                'value_en' => '{"0":"Search for the 1xBit app in the App Store"}',
                'value_es' => '{"0":"Busca la aplicación de 1xBit en la App Store"}',
                'value_fr' => '{"0":"Recherchez l\'application 1xBit dans le App Store"}',
                'value_pt' => '{"0":"Procure o aplicativo da 1xBit na App Store"}',
                'order' => 26
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 27
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'p',
                'value_en' => '{"0":"Installing the mobile app for iOS devices is even easier than for Android, as it is available for download on the App Store. All you need to do is follow the direct link we provided at the top of our review and install the app on your iOS device."}',
                'value_es' => '{"0":"Instalar la aplicación móvil en dispositivos iOS es aún más fácil que en Android, ya que está disponible para su descarga en la App Store. Solo tienes que seguir el enlace directo que dejamos en la parte superior de nuestra reseña e instalar la app en tu dispositivo iOS."}',
                'value_fr' => '{"0":"Installer l’application mobile sur les appareils iOS est encore plus simple que sur Android, car elle est disponible en téléchargement sur l’App Store. Il vous suffit de suivre le lien direct que nous avons placé en haut de notre avis et d’installer l’application sur votre appareil iOS."}',
                'value_pt' => '{"0":"Instalar o aplicativo móvel em dispositivos iOS é ainda mais fácil do que no Android, pois ele está disponível para download na App Store. Tudo o que você precisa fazer é seguir o link direto que deixamos no topo da nossa análise e instalar o app no seu dispositivo iOS."}',
                'order' => 27
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 28
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'h4',
                'value_en' => '{"0":"Verify your account"}',
                'value_es' => '{"0":"Verifica tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez votre compte"}',
                'value_pt' => '{"0":"Verifique sua conta"}',
                'order' => 28
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 29
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'p',
                'value_en' => '{"0":"In the final step, you need to open the installed app and enter the login details you created in the first step. Now you can place sports bets and enjoy the game from your mobile device!"}',
                'value_es' => '{"0":"En el último paso, debes abrir la aplicación instalada e ingresar los datos de acceso que creaste en el primer paso. ¡Ahora puedes hacer apuestas deportivas y disfrutar del juego desde tu dispositivo móvil!"}',
                'value_fr' => '{"0":"À la dernière étape, vous devez ouvrir l’application installée et saisir les identifiants que vous avez créés lors de la première étape. Vous pouvez maintenant parier sur le sport et profiter du jeu depuis votre appareil mobile !"}',
                'value_pt' => '{"0":"Na etapa final, você deve abrir o aplicativo instalado e inserir os dados de login que criou na primeira etapa. Agora você pode fazer apostas esportivas e aproveitar o jogo no seu dispositivo móvel!"}',
                'order' => 29
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 30
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'h3',
                'value_en' => '{"0":"The features of the 1xBit mobile app"}',
                'value_es' => '{"0":"Las funciones de la aplicación móvil de 1xBit"}',
                'value_fr' => '{"0":"Les fonctionnalités de l’application mobile 1xBit"}',
                'value_pt' => '{"0":"Os recursos do aplicativo móvel da 1xBit"}',
                'order' => 30
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 31
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'p',
                'value_en' => '{"0":"Here\'s a closer look at what you can expect:"}',
                'value_es' => '{"0":"Aquí tienes un vistazo más detallado de lo que puedes esperar:"}',
                'value_fr' => '{"0":"Voici un aperçu plus détaillé de ce à quoi vous pouvez vous attendre :"}',
                'value_pt' => '{"0":"Aqui está uma visão mais detalhada do que você pode esperar:"}',
                'order' => 31
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 32
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
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
                'order' => 32
            ]
        );
    }
}
