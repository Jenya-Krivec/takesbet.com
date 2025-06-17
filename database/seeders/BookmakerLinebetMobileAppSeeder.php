<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerLinebetMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 1
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Review on Linebet betting mobile app"}',
             'value_es' => '{"0":"Reseña de la aplicación móvil de apuestas de Linebet"}',
             'value_fr' => '{"0":"Avis sur l’application mobile de paris Linebet"}',
             'value_pt' => '{"0":"Análise do aplicativo móvel de apostas da Linebet"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 2
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The Linebet mobile app offers nearly the same functionality as the website but is better optimized for mobile device screens. Users can place bets on over 40 sports, as well as on TV shows, political events, esports, and virtual sports. Although the app doesn’t feature any unique functions, this is actually an advantage — the interface is user-friendly and intuitive, and all core features work reliably."}',
             'value_es' => '{"0":"La aplicación móvil de Linebet ofrece casi la misma funcionalidad que el sitio web, pero está mejor optimizada para las pantallas de los dispositivos móviles. Los usuarios pueden apostar en más de 40 deportes, así como en programas de televisión, eventos políticos, deportes electrónicos y deportes virtuales. Aunque la aplicación no tiene funciones exclusivas, esto puede considerarse una ventaja: la interfaz es cómoda, intuitiva y todas las funciones principales funcionan de forma estable."}',
             'value_fr' => '{"0":"L\'application mobile Linebet propose pratiquement les mêmes fonctionnalités que le site web, mais elle est mieux adaptée aux écrans des appareils mobiles. Les utilisateurs peuvent parier sur plus de 40 sports, ainsi que sur des émissions télévisées, des événements politiques, des sports électroniques et des sports virtuels. Bien que l\'application ne propose pas de fonctionnalités uniques, cela peut être vu comme un avantage : l\'interface est conviviale et intuitive, et toutes les fonctions principales sont stables."}',
             'value_pt' => '{"0":"O aplicativo móvel da Linebet oferece praticamente as mesmas funcionalidades do site, mas é melhor otimizado para as telas de dispositivos móveis. Os usuários podem apostar em mais de 40 esportes, além de programas de TV, eventos políticos, eSports e esportes virtuais. Embora o app não tenha funções exclusivas, isso pode ser considerado uma vantagem — a interface é amigável, intuitiva e todos os recursos principais funcionam de forma estável."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 3
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Registration available",
                                 "1":"Convenient deposits and withdrawals",
                                 "2":"View statistics",
                                 "3":"Language options",
                                 "4":"Customer support",
                                 "5":"Live video streaming"},
                             "1":
                                {"0":"Additional phone settings may be required during installation"}
                             }',
             'value_es' => '{"0":
                                {"0":"Posibilidad de registrarse",
                                 "1":"Depósitos y retiros convenientes",
                                 "2":"Visualización de estadísticas",
                                 "3":"Opciones de idioma",
                                 "4":"Soporte al cliente",
                                 "5":"Transmisiones en vivo"},
                             "1":
                                {"0":"Es posible que se requieran ajustes adicionales en el teléfono durante la instalación"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Possibilité de s\'inscrire",
                                 "1":"Dépôts et retraits pratiques",
                                 "2":"Consultation des statistiques",
                                 "3":"Choix de langues",
                                 "4":"Service client",
                                 "5":"Diffusions vidéo en direct"},
                             "1":
                                {"0":"Des réglages supplémentaires peuvent être nécessaires lors de l\'installation"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Possibilidade de registro",
                                 "1":"Depósitos e saques convenientes",
                                 "2":"Visualização de estatísticas",
                                 "3":"Opções de idioma",
                                 "4":"Suporte ao cliente",
                                 "5":"Transmissões de vídeo ao vivo"},
                             "1":
                                {"0":"Pode ser necessário ajustar configurações adicionais do telefone durante a instalação"}
                             }',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 4
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
                'value_en' => '{"0":"Download Linebet on Android"}',
                'value_es' => '{"0":"Descarga Linebet en Android"}',
                'value_fr' => '{"0":"Téléchargez Linebet sur Android"}',
                'value_pt' => '{"0":"Baixe o Linebet no Android"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 5
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'p',
                'value_en' => '{"0":"To download Linebet on Android, you should use the official website of the bookmaker, where the installation file is distributed. Due to restrictions on gambling software imposed by Google, it is currently not possible to download and install the Linebet app via the Play Market."}',
                'value_es' => '{"0":"Para descargar Linebet en Android, debes utilizar el sitio web oficial de la casa de apuestas, donde se distribuye el archivo de instalación. Debido a las restricciones impuestas por Google sobre software de apuestas, actualmente no es posible descargar e instalar la aplicación de Linebet a través de Play Market."}',
                'value_fr' => '{"0":"Pour télécharger Linebet sur Android, vous devez utiliser le site officiel du bookmaker, où le fichier d\'installation est disponible. En raison des restrictions imposées par Google sur les logiciels de jeux d\'argent, il n’est actuellement pas possible de télécharger et d’installer l’application Linebet via le Play Market."}',
                'value_pt' => '{"0":"Para baixar o Linebet no Android, você deve usar o site oficial da casa de apostas, onde o arquivo de instalação é disponibilizado. Devido às restrições da Google quanto à distribuição de softwares de apostas, atualmente não é possível baixar e instalar o aplicativo da Linebet pela Play Store."}',
                'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 6
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'p',
                'value_en' => '{"0":"Therefore, to use the app, you need to download the Linebet APK installer to your smartphone or tablet. The download is carried out from the official Linebet website, where a direct link is available in the mobile section."}',
                'value_es' => '{"0":"Por lo tanto, para usar la aplicación, debes descargar el instalador APK de Linebet en tu smartphone o tablet. La descarga se realiza desde el sitio oficial de Linebet, donde hay un enlace directo en la sección móvil."}',
                'value_fr' => '{"0":"Ainsi, pour utiliser l’application, vous devez télécharger le fichier APK de Linebet sur votre smartphone ou tablette. Le téléchargement se fait depuis le site officiel de Linebet, où un lien direct est disponible dans la section mobile."}',
                'value_pt' => '{"0":"Portanto, para usar o aplicativo, é necessário baixar o instalador APK da Linebet no seu smartphone ou tablet. O download é feito a partir do site oficial da Linebet, onde há um link direto na seção móvel."}',
                'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 7
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'h3',
                'value_en' => '{"0":"How to install the Linebet app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación de Linebet en Android?"}',
                'value_fr' => '{"0":"Comment installer l\'application Linebet sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da Linebet no Android?"}',
                'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 8
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'h4',
                'value_en' => '{"0":"Follow the link"}',
                'value_es' => '{"0":"Sigue el enlace"}',
                'value_fr' => '{"0":"Suivez le lien"}',
                'value_pt' => '{"0":"Siga o link"}',
                'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 9
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'p',
                'value_en' => '{"0":"The first step is simply to follow the link to the Linebet betting site. Once on the homepage, you’ll be able to create an account, claim a generous welcome bonus, and gain access to some of the most competitive odds on the market."}',
                'value_es' => '{"0":"El primer paso es simplemente seguir el enlace al sitio de apuestas de Linebet. Una vez en la página principal, podrás crear una cuenta, aprovechar un generoso bono de bienvenida y acceder a algunas de las cuotas más competitivas del mercado."}',
                'value_fr' => '{"0":"La première étape consiste simplement à suivre le lien vers le site de paris de Linebet. Une fois sur la page d\'accueil, vous pourrez créer un compte, profiter d\'un généreux bonus de bienvenue et accéder à certaines des cotes les plus avantageuses du marché."}',
                'value_pt' => '{"0":"O primeiro passo é simplesmente seguir o link para o site de apostas da Linebet. Ao acessar a página inicial, você poderá criar uma conta, aproveitar um generoso bônus de boas-vindas e ter acesso a algumas das melhores odds do mercado."}',
                'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 10
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'h4',
                'value_en' => '{"0":"Download the APK file"}',
                'value_es' => '{"0":"Descarga el archivo APK"}',
                'value_fr' => '{"0":"Téléchargez le fichier APK"}',
                'value_pt' => '{"0":"Baixe o arquivo APK"}',
                'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 11
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'p',
                'value_en' => '{"0":"At the top of the Linebet mobile app review page, we’ve placed a link where you can quickly find the APK file to download to your mobile device. Just click the «Download» button."}',
                'value_es' => '{"0":"En la parte superior de la página de revisión de la aplicación móvil de Linebet, hemos colocado un enlace donde puedes encontrar rápidamente el archivo APK para descargarlo en tu dispositivo móvil. Solo haz clic en el botón «Descargar»."}',
                'value_fr' => '{"0":"En haut de la page de présentation de l’application mobile Linebet, nous avons placé un lien permettant de trouver rapidement le fichier APK à télécharger sur votre appareil mobile. Il vous suffit de cliquer sur le bouton « Télécharger »."}',
                'value_pt' => '{"0":"No topo da página de análise do aplicativo móvel da Linebet, colocamos um link onde você pode encontrar rapidamente o arquivo APK para baixar no seu dispositivo móvel. Basta clicar no botão «Baixar»."}',
                'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 12
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'h4',
                'value_en' => '{"0":"Set up your mobile device"}',
                'value_es' => '{"0":"Configura tu dispositivo móvil"}',
                'value_fr' => '{"0":"Configurez votre appareil mobile"}',
                'value_pt' => '{"0":"Configure seu dispositivo móvel"}',
                'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 13
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'p',
                'value_en' => '{"0":"Open the «Settings» section, go to the «Security» menu, and check the box next to «Allow installation from unknown sources». Save the changes."}',
                'value_es' => '{"0":"Abre la sección «Configuración», ve al menú «Seguridad» y marca la casilla junto a «Permitir instalación de fuentes desconocidas». Guarda los cambios."}',
                'value_fr' => '{"0":"Ouvrez la section « Paramètres », allez dans le menu « Sécurité » et cochez la case « Autoriser l’installation de sources inconnues ». Enregistrez les modifications."}',
                'value_pt' => '{"0":"Abra a seção «Configurações», vá ao menu «Segurança» e marque a opção «Permitir instalação de fontes desconhecidas». Salve as alterações."}',
                'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 14
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'h4',
                'value_en' => '{"0":"Install the app"}',
                'value_es' => '{"0":"Instala la aplicación"}',
                'value_fr' => '{"0":"Installez l’application"}',
                'value_pt' => '{"0":"Instale o aplicativo"}',
                'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 15
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'p',
                'value_en' => '{"0":"Tap on the downloaded APK file and press the «Install» button. Wait a few minutes for the app to be installed on your mobile device."}',
                'value_es' => '{"0":"Toca el archivo APK descargado y pulsa el botón «Instalar». Espera unos minutos mientras la aplicación se instala en tu dispositivo móvil."}',
                'value_fr' => '{"0":"Appuyez sur le fichier APK téléchargé, puis sur le bouton « Installer ». Patientez quelques minutes pendant que l’application s’installe sur votre appareil mobile."}',
                'value_pt' => '{"0":"Toque no arquivo APK baixado e pressione o botão «Instalar». Aguarde alguns minutos enquanto o aplicativo é instalado no seu dispositivo móvel."}',
                'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 16
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'h4',
                'value_en' => '{"0":"Verify your account"}',
                'value_es' => '{"0":"Verifica tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez votre compte"}',
                'value_pt' => '{"0":"Verifique sua conta"}',
                'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 17
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'p',
                'value_en' => '{"0":"In the final step, you need to open the installed app and enter the login details you created in the first step. Now you can place sports bets and enjoy the game from your mobile device!"}',
                'value_es' => '{"0":"En el último paso, debes abrir la aplicación instalada e ingresar los datos de acceso que creaste en el primer paso. ¡Ahora puedes hacer apuestas deportivas y disfrutar del juego desde tu dispositivo móvil!"}',
                'value_fr' => '{"0":"À la dernière étape, vous devez ouvrir l’application installée et saisir les identifiants que vous avez créés lors de la première étape. Vous pouvez maintenant parier sur le sport et profiter du jeu depuis votre appareil mobile !"}',
                'value_pt' => '{"0":"Na etapa final, você deve abrir o aplicativo instalado e inserir os dados de login que criou na primeira etapa. Agora você pode fazer apostas esportivas e aproveitar o jogo no seu dispositivo móvel!"}',
                'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 18
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'h3',
                'value_en' => '{"0":"Download the Linebet mobile app on iOS"}',
                'value_es' => '{"0":"Descarga la aplicación móvil de Linebet en iOS"}',
                'value_fr' => '{"0":"Téléchargez l\'application mobile Linebet sur iOS"}',
                'value_pt' => '{"0":"Baixe o aplicativo móvel Linebet no iOS"}',
                'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 19
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'p',
                'value_en' => '{"0":"The Linebet mobile app for iOS is one of the best we’ve ever seen. It can be easily downloaded and installed via the App Store."}',
                'value_es' => '{"0":"La aplicación móvil de Linebet para iOS es una de las mejores que hemos visto. Se puede descargar e instalar fácilmente desde la App Store."}',
                'value_fr' => '{"0":"L’application mobile Linebet pour iOS est l’une des meilleures que nous ayons vues. Elle peut être facilement téléchargée et installée via l’App Store."}',
                'value_pt' => '{"0":"O aplicativo móvel da Linebet para iOS é um dos melhores que já vimos. Ele pode ser facilmente baixado e instalado pela App Store."}',
                'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 20
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'p',
                'value_en' => '{"0":"It’s worth noting — the app has an attractive appearance. It combines a stylish design with user-friendly navigation and offers all the essential features. You will get access to casino games, sports betting, bonus offers, and many other features. Below, we’ll explain how to start using the Linebet mobile app."}',
                'value_es' => '{"0":"Cabe destacar que la app tiene un aspecto muy atractivo. Combina un diseño elegante con una navegación intuitiva y ofrece todas las funciones esenciales. Tendrás acceso a juegos de casino, apuestas deportivas, promociones y muchas otras funciones. A continuación, te explicaremos cómo empezar a usar la aplicación móvil de Linebet."}',
                'value_fr' => '{"0":"Il convient de souligner que l’application a une apparence attrayante. Elle allie un design élégant à une navigation fluide, et propose toutes les fonctionnalités clés. Vous aurez accès aux jeux de casino, aux paris sportifs, aux offres de bonus et à bien d’autres fonctionnalités. Ci-dessous, nous vous expliquerons comment commencer à utiliser l’application mobile Linebet."}',
                'value_pt' => '{"0":"Vale destacar — o app tem uma aparência muito atraente. Ele combina um design elegante com navegação intuitiva e oferece todos os recursos essenciais. Você terá acesso a jogos de cassino, apostas esportivas, ofertas de bônus e muito mais. A seguir, explicaremos como começar a usar o aplicativo móvel da Linebet."}',
                'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 21
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
                'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 22
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'h3',
                'value_en' => '{"0":"How to install the Linebet mobile app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación móvil de Linebet en iOS?"}',
                'value_fr' => '{"0":"Comment installer l\'application mobile Linebet sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo móvel da Linebet no iOS?"}',
                'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 23
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'h4',
                'value_en' => '{"0":"Follow the link"}',
                'value_es' => '{"0":"Sigue el enlace"}',
                'value_fr' => '{"0":"Suivez le lien"}',
                'value_pt' => '{"0":"Siga o link"}',
                'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 24
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'p',
                'value_en' => '{"0":"If you haven’t created an account on the Linebet website yet, we recommend doing so."}',
                'value_es' => '{"0":"Si aún no has creado una cuenta en el sitio web de Linebet, te recomendamos que lo hagas."}',
                'value_fr' => '{"0":"Si vous n’avez pas encore créé de compte sur le site de Linebet, nous vous recommandons de le faire."}',
                'value_pt' => '{"0":"Se ainda não criou uma conta no site da Linebet, recomendamos que o faça."}',
                'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 25
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'h4',
                'value_en' => '{"0":"Search for the Linebet app in the App Store"}',
                'value_es' => '{"0":"Busca la aplicación de Linebet en la App Store"}',
                'value_fr' => '{"0":"Recherchez l\'application Linebet dans le App Store"}',
                'value_pt' => '{"0":"Procure o aplicativo da Linebet na App Store"}',
                'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 26
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'p',
                'value_en' => '{"0":"Installing the mobile app for iOS devices is even easier than for Android, as it is available for download on the App Store. All you need to do is follow the direct link we provided at the top of our review and install the app on your iOS device."}',
                'value_es' => '{"0":"Instalar la aplicación móvil en dispositivos iOS es aún más fácil que en Android, ya que está disponible para su descarga en la App Store. Solo tienes que seguir el enlace directo que dejamos en la parte superior de nuestra reseña e instalar la app en tu dispositivo iOS."}',
                'value_fr' => '{"0":"Installer l’application mobile sur les appareils iOS est encore plus simple que sur Android, car elle est disponible en téléchargement sur l’App Store. Il vous suffit de suivre le lien direct que nous avons placé en haut de notre avis et d’installer l’application sur votre appareil iOS."}',
                'value_pt' => '{"0":"Instalar o aplicativo móvel em dispositivos iOS é ainda mais fácil do que no Android, pois ele está disponível para download na App Store. Tudo o que você precisa fazer é seguir o link direto que deixamos no topo da nossa análise e instalar o app no seu dispositivo iOS."}',
                'order' => 26
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 27
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'h4',
                'value_en' => '{"0":"Verify your account"}',
                'value_es' => '{"0":"Verifica tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez votre compte"}',
                'value_pt' => '{"0":"Verifique sua conta"}',
                'order' => 27
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 28
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'p',
                'value_en' => '{"0":"In the final step, you need to open the installed app and enter the login details you created in the first step. Now you can place sports bets and enjoy the game from your mobile device!"}',
                'value_es' => '{"0":"En el último paso, debes abrir la aplicación instalada e ingresar los datos de acceso que creaste en el primer paso. ¡Ahora puedes hacer apuestas deportivas y disfrutar del juego desde tu dispositivo móvil!"}',
                'value_fr' => '{"0":"À la dernière étape, vous devez ouvrir l’application installée et saisir les identifiants que vous avez créés lors de la première étape. Vous pouvez maintenant parier sur le sport et profiter du jeu depuis votre appareil mobile !"}',
                'value_pt' => '{"0":"Na etapa final, você deve abrir o aplicativo instalado e inserir os dados de login que criou na primeira etapa. Agora você pode fazer apostas esportivas e aproveitar o jogo no seu dispositivo móvel!"}',
                'order' => 28
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 29
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'h3',
                'value_en' => '{"0":"The features of the Linebet mobile app"}',
                'value_es' => '{"0":"Las funciones de la aplicación móvil de Linebet"}',
                'value_fr' => '{"0":"Les fonctionnalités de l’application mobile Linebet"}',
                'value_pt' => '{"0":"Os recursos do aplicativo móvel da Linebet"}',
                'order' => 29
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 30
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'p',
                'value_en' => '{"0":"The app has several features that truly impressed us. It’s thanks to these features that many users prefer the app over the mobile version of the site."}',
                'value_es' => '{"0":"La aplicación tiene varias funciones que realmente nos impresionaron. Gracias a estas características, muchos usuarios prefieren la app en lugar de la versión móvil del sitio web."}',
                'value_fr' => '{"0":"L’application propose plusieurs fonctionnalités qui nous ont vraiment impressionnés. C’est grâce à ces éléments que de nombreux utilisateurs préfèrent l’application à la version mobile du site."}',
                'value_pt' => '{"0":"O aplicativo possui vários recursos que realmente nos impressionaram. É por causa dessas funcionalidades que muitos usuários preferem o app à versão móvel do site."}',
                'order' => 30
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 31
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'list_v2',
             'value_en' => '{"0":"Betting on sports, esports, casino, and live events",
                             "1":"Convenience and mobility",
                             "2":"Interface adapted for touchscreens",
                             "3":"Fast loading and stable performance",
                             "4":"Push notifications",
                             "5":"Live streaming",
                             "6":"Secure deposits and withdrawals"}',
             'value_es' => '{"0":"Apuestas en deportes, deportes electrónicos, casino y eventos en vivo",
                             "1":"Comodidad y movilidad",
                             "2":"Interfaz adaptada para pantallas táctiles",
                             "3":"Carga rápida y funcionamiento estable",
                             "4":"Notificaciones push",
                             "5":"Transmisiones en vivo",
                             "6":"Depósitos y retiros seguros"}',
             'value_fr' => '{"0":"Paris sur le sport, l’e-sport, le casino et les événements en direct",
                             "1":"Commodité et mobilité",
                             "2":"Interface adaptée aux écrans tactiles",
                             "3":"Chargement rapide et fonctionnement stable",
                             "4":"Notifications push",
                             "5":"Diffusions en direct",
                             "6":"Dépôts et retraits sécurisés"}',
             'value_pt' => '{"0":"Apostas em esportes, eSports, cassino e eventos ao vivo",
                             "1":"Comodidade e mobilidade",
                             "2":"Interface adaptada para telas sensíveis ao toque",
                             "3":"Carregamento rápido e desempenho estável",
                             "4":"Notificações push",
                             "5":"Transmissões ao vivo",
                             "6":"Depósitos e saques seguros"}',
             'order' => 31
            ]
        );
    }
}
