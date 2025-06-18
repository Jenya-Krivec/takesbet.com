<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker20BETMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 1
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Review on 20BET betting mobile app"}',
             'value_es' => '{"0":"Reseña de la aplicación móvil de apuestas de 20BET"}',
             'value_fr' => '{"0":"Avis sur l’application mobile de paris 20BET"}',
             'value_pt' => '{"0":"Análise do aplicativo móvel de apostas da 20BET"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 2
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET offers a convenient app for Android users. Players can place bets and play games from their smartphones or tablets. Unfortunately, the mobile app is not yet available for iOS users, but you can install the PWA version on your device. The mobile website version also provides full functionality, just like the desktop version."}',
             'value_es' => '{"0":"20BET ofrece una aplicación cómoda para usuarios de Android. Los usuarios pueden hacer apuestas y jugar desde sus teléfonos inteligentes o tabletas. Lamentablemente, la app aún no está disponible para usuarios de iOS, pero puedes instalar la versión PWA en tu dispositivo. La versión móvil del sitio web también ofrece todas las funciones disponibles en la versión de escritorio."}',
             'value_fr' => '{"0":"20BET propose une application pratique pour les utilisateurs Android. Les utilisateurs peuvent parier et jouer depuis leur smartphone ou leur tablette. Malheureusement, l’application mobile n’est pas encore disponible pour les utilisateurs iOS, mais vous pouvez installer la version PWA sur votre appareil. La version mobile du site propose également toutes les fonctionnalités de la version bureau."}',
             'value_pt' => '{"0":"A 20BET oferece um aplicativo prático para usuários de Android. Os usuários podem fazer apostas e jogar diretamente de seus smartphones ou tablets. Infelizmente, o aplicativo ainda não está disponível para usuários de iOS, mas você pode instalar a versão PWA no seu dispositivo. A versão móvel do site também oferece todas as funcionalidades da versão desktop."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 3
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"With the app, you can deposit and withdraw funds, place live bets, and play popular slots. The app’s interface is modern, simple, and user-friendly, with intuitive navigation. You can also track your active bets in real-time. In this review, we’ll explain how to install the app and start playing from your mobile device."}',
             'value_es' => '{"0":"Con la aplicación, puedes depositar y retirar dinero, hacer apuestas en vivo y jugar a las tragamonedas más populares. La interfaz es moderna, sencilla y fácil de usar, con una navegación intuitiva. También puedes seguir tus apuestas activas en tiempo real. En esta reseña te explicaremos cómo instalar la app y comenzar a jugar desde tu dispositivo móvil."}',
             'value_fr' => '{"0":"Grâce à l\'application, vous pouvez déposer et retirer de l\'argent, faire des paris en direct et jouer aux machines à sous populaires. L’interface est moderne, simple et facile à utiliser, avec une navigation intuitive. Vous pouvez également suivre vos paris actifs en temps réel. Dans cette revue, nous vous expliquons comment installer l’application et commencer à jouer depuis votre appareil mobile."}',
             'value_pt' => '{"0":"Com o aplicativo, é possível depositar e sacar dinheiro, fazer apostas ao vivo e jogar os slots mais populares. A interface é moderna, simples e fácil de usar, com navegação intuitiva. Você também pode acompanhar suas apostas ativas em tempo real. Neste review, explicamos como instalar o aplicativo e começar a jogar no seu dispositivo móvel."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 4
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Ease of use",
                                 "1":"Full access to all website features",
                                 "2":"Live betting and streaming",
                                 "3":"Secure encryption of financial transactions and personal information"},
                             "1":
                                {"0":"No fully functional iOS app",
                                 "1":"Possible restrictions in certain countries"}
                             }',
             'value_es' => '{"0":
                                {"0":"Facilidad de uso",
                                 "1":"Acceso completo a todas las funciones del sitio web",
                                 "2":"Apuestas en vivo y transmisiones",
                                 "3":"Cifrado seguro de transacciones financieras e información personal"},
                             "1":
                                {"0":"No hay una aplicación completa para iOS",
                                 "1":"Posibles restricciones en ciertos países"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Facilité d\'utilisation",
                                 "1":"Accès complet à toutes les fonctionnalités du site",
                                 "2":"Paris en direct et retransmissions",
                                 "3":"Chiffrement sécurisé des transactions financières et des données personnelles"},
                             "1":
                                {"0":"Pas d’application iOS entièrement fonctionnelle",
                                 "1":"Restrictions possibles dans certains pays"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Facilidade de uso",
                                 "1":"Acesso completo a todas as funcionalidades do site",
                                 "2":"Apostas ao vivo e transmissões",
                                 "3":"Criptografia segura para transações financeiras e dados pessoais"},
                             "1":
                                {"0":"Ausência de um aplicativo iOS totalmente funcional",
                                 "1":"Possíveis restrições em alguns países"}
                             }',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 5
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
                'value_en' => '{"0":"Download 20BET on Android"}',
                'value_es' => '{"0":"Descarga 20BET en Android"}',
                'value_fr' => '{"0":"Téléchargez 20BET sur Android"}',
                'value_pt' => '{"0":"Baixe o 20BET no Android"}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 6
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"To start placing bets from your mobile device on 20BET, simply open a browser on your Android device and go to the official website. One of the main advantages of the app is constant access to the latest version. Installing the app is easy — just follow a few simple steps."}',
             'value_es' => '{"0":"Para empezar a apostar desde tu dispositivo móvil en 20BET, simplemente abre un navegador en tu dispositivo Android y accede al sitio web oficial. Una de las principales ventajas de la aplicación es el acceso constante a la versión más reciente. Instalar la aplicación es sencillo, solo hay que seguir unos pocos pasos."}',
             'value_fr' => '{"0":"Pour commencer à parier depuis votre appareil mobile sur 20BET, il vous suffit d’ouvrir un navigateur sur votre appareil Android et de vous rendre sur le site officiel. L’un des principaux avantages de l’application est l’accès constant à la version la plus récente. L’installation est simple — il suffit de suivre quelques étapes."}',
             'value_pt' => '{"0":"Para começar a fazer apostas no 20BET a partir do seu dispositivo móvel, basta abrir um navegador no seu dispositivo Android e acessar o site oficial. Uma das principais vantagens do aplicativo é o acesso constante à versão mais recente. A instalação é simples — basta seguir alguns passos."}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 7
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
                'value_en' => '{"0":"How to install the 20BET app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación de 20BET en Android?"}',
                'value_fr' => '{"0":"Comment installer l\'application 20BET sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da 20BET no Android?"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
                'order' => 8
            ],
            ['key' => '20bet',
                'bookmaker_id' => 12,
                'component' => 'h4',
                'value_en' => '{"0":"Follow the link"}',
                'value_es' => '{"0":"Sigue el enlace"}',
                'value_fr' => '{"0":"Suivez le lien"}',
                'value_pt' => '{"0":"Siga o link"}',
                'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
                'order' => 9
            ],
            ['key' => '20bet',
                'bookmaker_id' => 12,
                'component' => 'p',
                'value_en' => '{"0":"The first step is simply to follow the link to the 20BET betting site. Once on the homepage, you’ll be able to create an account, claim a generous welcome bonus, and gain access to some of the most competitive odds on the market."}',
                'value_es' => '{"0":"El primer paso es simplemente seguir el enlace al sitio de apuestas de 20BET. Una vez en la página principal, podrás crear una cuenta, aprovechar un generoso bono de bienvenida y acceder a algunas de las cuotas más competitivas del mercado."}',
                'value_fr' => '{"0":"La première étape consiste simplement à suivre le lien vers le site de paris de 20BET. Une fois sur la page d\'accueil, vous pourrez créer un compte, profiter d\'un généreux bonus de bienvenue et accéder à certaines des cotes les plus avantageuses du marché."}',
                'value_pt' => '{"0":"O primeiro passo é simplesmente seguir o link para o site de apostas da 20BET. Ao acessar a página inicial, você poderá criar uma conta, aproveitar um generoso bônus de boas-vindas e ter acesso a algumas das melhores odds do mercado."}',
                'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
                'order' => 10
            ],
            ['key' => '20bet',
                'bookmaker_id' => 12,
                'component' => 'h4',
                'value_en' => '{"0":"Download the APK file"}',
                'value_es' => '{"0":"Descarga el archivo APK"}',
                'value_fr' => '{"0":"Téléchargez le fichier APK"}',
                'value_pt' => '{"0":"Baixe o arquivo APK"}',
                'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
                'order' => 11
            ],
            ['key' => '20bet',
                'bookmaker_id' => 12,
                'component' => 'p',
                'value_en' => '{"0":"At the top of the 20BET mobile app review page, we’ve placed a link where you can quickly find the APK file to download to your mobile device. Just click the «Download» button."}',
                'value_es' => '{"0":"En la parte superior de la página de revisión de la aplicación móvil de 20BET, hemos colocado un enlace donde puedes encontrar rápidamente el archivo APK para descargarlo en tu dispositivo móvil. Solo haz clic en el botón «Descargar»."}',
                'value_fr' => '{"0":"En haut de la page de présentation de l’application mobile 20BET, nous avons placé un lien permettant de trouver rapidement le fichier APK à télécharger sur votre appareil mobile. Il vous suffit de cliquer sur le bouton « Télécharger »."}',
                'value_pt' => '{"0":"No topo da página de análise do aplicativo móvel da 20BET, colocamos um link onde você pode encontrar rapidamente o arquivo APK para baixar no seu dispositivo móvel. Basta clicar no botão «Baixar»."}',
                'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
                'order' => 12
            ],
            ['key' => '20bet',
                'bookmaker_id' => 12,
                'component' => 'h4',
                'value_en' => '{"0":"Set up your mobile device"}',
                'value_es' => '{"0":"Configura tu dispositivo móvil"}',
                'value_fr' => '{"0":"Configurez votre appareil mobile"}',
                'value_pt' => '{"0":"Configure seu dispositivo móvel"}',
                'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
                'order' => 13
            ],
            ['key' => '20bet',
                'bookmaker_id' => 12,
                'component' => 'p',
                'value_en' => '{"0":"Open the «Settings» section, go to the «Security» menu, and check the box next to «Allow installation from unknown sources». Save the changes."}',
                'value_es' => '{"0":"Abre la sección «Configuración», ve al menú «Seguridad» y marca la casilla junto a «Permitir instalación de fuentes desconocidas». Guarda los cambios."}',
                'value_fr' => '{"0":"Ouvrez la section « Paramètres », allez dans le menu « Sécurité » et cochez la case « Autoriser l’installation de sources inconnues ». Enregistrez les modifications."}',
                'value_pt' => '{"0":"Abra a seção «Configurações», vá ao menu «Segurança» e marque a opção «Permitir instalação de fontes desconhecidas». Salve as alterações."}',
                'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
                'order' => 14
            ],
            ['key' => '20bet',
                'bookmaker_id' => 12,
                'component' => 'h4',
                'value_en' => '{"0":"Install the app"}',
                'value_es' => '{"0":"Instala la aplicación"}',
                'value_fr' => '{"0":"Installez l’application"}',
                'value_pt' => '{"0":"Instale o aplicativo"}',
                'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
                'order' => 15
            ],
            ['key' => '20bet',
                'bookmaker_id' => 12,
                'component' => 'p',
                'value_en' => '{"0":"Tap on the downloaded APK file and press the «Install» button. Wait a few minutes for the app to be installed on your mobile device."}',
                'value_es' => '{"0":"Toca el archivo APK descargado y pulsa el botón «Instalar». Espera unos minutos mientras la aplicación se instala en tu dispositivo móvil."}',
                'value_fr' => '{"0":"Appuyez sur le fichier APK téléchargé, puis sur le bouton « Installer ». Patientez quelques minutes pendant que l’application s’installe sur votre appareil mobile."}',
                'value_pt' => '{"0":"Toque no arquivo APK baixado e pressione o botão «Instalar». Aguarde alguns minutos enquanto o aplicativo é instalado no seu dispositivo móvel."}',
                'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
                'order' => 16
            ],
            ['key' => '20bet',
                'bookmaker_id' => 12,
                'component' => 'h4',
                'value_en' => '{"0":"Verify your account"}',
                'value_es' => '{"0":"Verifica tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez votre compte"}',
                'value_pt' => '{"0":"Verifique sua conta"}',
                'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
                'order' => 17
            ],
            ['key' => '20bet',
                'bookmaker_id' => 12,
                'component' => 'p',
                'value_en' => '{"0":"After installation, launch the app and log into your account or register a new one."}',
                'value_es' => '{"0":"Después de la instalación, abre la aplicación e inicia sesión en tu cuenta o regístrate si aún no tienes una."}',
                'value_fr' => '{"0":"Une fois l\'installation terminée, lancez l\'application et connectez-vous à votre compte ou créez-en un nouveau."}',
                'value_pt' => '{"0":"Após a instalação, abra o aplicativo e entre na sua conta ou registre uma nova."}',
                'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 18
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
             'value_en' => '{"0":"img-1.jpg"}',
             'value_es' => '{"0":"img-1.jpg"}',
             'value_fr' => '{"0":"img-1.jpg"}',
             'value_pt' => '{"0":"img-1.jpg"}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 19
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
                'value_en' => '{"0":"Download the 20BET mobile app on iOS"}',
                'value_es' => '{"0":"Descarga la aplicación móvil de 20BET en iOS"}',
                'value_fr' => '{"0":"Téléchargez l\'application mobile 20BET sur iOS"}',
                'value_pt' => '{"0":"Baixe o aplicativo móvel 20BET no iOS"}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 20
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Now is the perfect time to install the 20BET mobile app on your iOS device if you haven’t done so yet. The app constantly updates match information and results in real time, so you can stay up to date anytime, anywhere."}',
             'value_es' => '{"0":"Es el momento perfecto para instalar la aplicación móvil de 20BET en tu dispositivo iOS si aún no lo has hecho. La aplicación actualiza constantemente la información de los partidos y los resultados en tiempo real, por lo que estarás al tanto de todo en cualquier momento y lugar."}',
             'value_fr' => '{"0":"C’est le moment idéal pour installer l’application mobile 20BET sur votre appareil iOS si ce n’est pas encore fait. L’application met à jour en temps réel les informations sur les matchs et les résultats, ce qui vous permet de rester informé où que vous soyez et à tout moment."}',
             'value_pt' => '{"0":"Agora é o momento ideal para instalar o aplicativo móvel da 20BET no seu dispositivo iOS, se ainda não o fez. O app atualiza constantemente as informações das partidas e os resultados em tempo real, para que você esteja sempre por dentro, onde e quando quiser."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 21
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"As we mentioned earlier, there is no fully functional iOS app, but thanks to the «Add to Home Screen» feature, iPhone and iPad users can easily add the 20BET PWA app to their device\'s home screen."}',
             'value_es' => '{"0":"Como mencionamos anteriormente, no existe una aplicación iOS completa, pero gracias a la función «Agregar a la pantalla de inicio», los usuarios de iPhone o iPad pueden añadir fácilmente la aplicación PWA de 20BET a la pantalla principal de su dispositivo."}',
             'value_fr' => '{"0":"Comme nous l’avons mentionné plus tôt, il n’existe pas d’application iOS complète, mais grâce à la fonction « Ajouter à l’écran d’accueil », les utilisateurs d’iPhone ou d’iPad peuvent facilement ajouter l’application PWA de 20BET à l’écran principal de leur appareil."}',
             'value_pt' => '{"0":"Como mencionamos anteriormente, não existe um aplicativo iOS completo, mas com a função «Adicionar à tela inicial», os usuários de iPhone ou iPad podem facilmente adicionar o aplicativo PWA da 20BET à tela inicial de seus dispositivos."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 22
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'list_v2',
             'value_en' => '{"0":"Press the Download button",
                             "1":"Click on the «Bookmark feature» button as seen in image",
                             "2":"Click on «Add to Home Screen»",
                             "3":"Tap «Add» 20BET App",
                             "4":"The icon will be added to the Home screen of your device. Now you have quick access to 20BET",
                             "5":"Start your sports betting or casino games"}',
             'value_es' => '{"0":"Pulsa el botón Descargar",
                             "1":"Haz clic en el botón de la función «Marcador» como se muestra en la imagen",
                             "2":"Haz clic en «Agregar a la pantalla de inicio»",
                             "3":"Pulsa «Agregar» 20BET App",
                             "4":"El icono se añadirá a la pantalla de inicio de tu dispositivo. Ahora tendrás acceso rápido a 20BET",
                             "5":"Comienza tus apuestas deportivas o juegos de casino"}',
             'value_fr' => '{"0":"Appuyez sur le bouton Télécharger",
                             "1":"Cliquez sur le bouton «Ajouter un signet» comme indiqué sur l’image",
                             "2":"Cliquez sur «Ajouter à l’écran d’accueil»",
                             "3":"Touchez «Ajouter» l’application 20BET",
                             "4":"L’icône sera ajoutée à l’écran d’accueil de votre appareil. Vous avez maintenant un accès rapide à 20BET",
                             "5":"Commencez vos paris sportifs ou vos jeux de casino"}',
             'value_pt' => '{"0":"Pressione o botão Baixar",
                             "1":"Clique no botão «Adicionar aos favoritos», como mostrado na imagem",
                             "2":"Clique em «Adicionar à tela inicial»",
                             "3":"Toque em «Adicionar» App 20BET",
                             "4":"O ícone será adicionado à tela inicial do seu dispositivo. Agora você terá acesso rápido ao 20BET",
                             "5":"Comece suas apostas esportivas ou jogos de cassino"}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 23
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
                'value_en' => '{"0":"The features of the 20BET mobile app"}',
                'value_es' => '{"0":"Las funciones de la aplicación móvil de 20BET"}',
                'value_fr' => '{"0":"Les fonctionnalités de l’application mobile 20BET"}',
                'value_pt' => '{"0":"Os recursos do aplicativo móvel da 20BET"}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 24
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
                'value_en' => '{"0":"The 20BET application has been present on the market of betting apps for years, and has managed to get numerous features that some of the betting apps lack. For example, the 20BET app has:"}',
                'value_es' => '{"0":"La aplicación de 20BET ha estado presente en el mercado de las apps de apuestas durante años y ha logrado incorporar numerosas funciones que otras aplicaciones no tienen. Por ejemplo, la app de 20BET ofrece:"}',
                'value_fr' => '{"0":"L’application 20BET est présente sur le marché des applications de paris depuis des années et a réussi à intégrer de nombreuses fonctionnalités que certaines autres applications n’ont pas. Par exemple, l’application 20BET propose :"}',
                'value_pt' => '{"0":"O aplicativo da 20BET está presente no mercado de apps de apostas há anos e conseguiu reunir diversos recursos que alguns concorrentes ainda não oferecem. Por exemplo, o app da 20BET possui:"}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 25
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'list_v2',
                'value_en' => '{"0":"Low battery consumption",
                             "1":"Auto updating",
                             "2":"Quick access to bet history",
                             "3":"Wide selection of LIVE events"}',
                'value_es' => '{"0":"Bajo consumo de batería",
                             "1":"Actualización automática",
                             "2":"Acceso rápido al historial de apuestas",
                             "3":"Gran selección de eventos en vivo"}',
                'value_fr' => '{"0":"Faible consommation de batterie",
                             "1":"Mise à jour automatique",
                             "2":"Accès rapide à l’historique des paris",
                             "3":"Large sélection d’événements en direct"}',
                'value_pt' => '{"0":"Baixo consumo de bateria",
                             "1":"Atualização automática",
                             "2":"Acesso rápido ao histórico de apostas",
                             "3":"Grande variedade de eventos AO VIVO"}',
             'order' => 25
            ]
        );
    }
}
