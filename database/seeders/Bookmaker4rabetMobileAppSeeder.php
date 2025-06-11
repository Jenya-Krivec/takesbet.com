<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker4rabetMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 1
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"Review on 4rabet betting mobile app"}',
             'value_es' => '{"0":"Reseña de la aplicación móvil de apuestas de 4rabet"}',
             'value_fr' => '{"0":"Avis sur l’application mobile de paris 4rabet"}',
             'value_pt' => '{"0":"Análise do aplicativo móvel de apostas da 4rabet"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 2
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The 4rabet mobile app is a convenient platform for sports betting and gambling, primarily targeting markets in South Asia, the CIS, and other regions. However, despite this, you can still access the platform using a VPN. The app allows users to place bets on various sports events, play casino games, participate in live games, and enjoy the full functionality of the bookmaker platform without the need to use a browser."}',
             'value_es' => '{"0":"La aplicación móvil de 4rabet es una plataforma cómoda para apuestas deportivas y juegos de azar, dirigida principalmente a los mercados del sur de Asia, la CEI y otras regiones. Sin embargo, a pesar de esto, puedes acceder a la plataforma utilizando una VPN. La aplicación permite a los usuarios apostar en diversos eventos deportivos, jugar en el casino, participar en juegos en vivo y disfrutar de toda la funcionalidad de la plataforma de apuestas sin necesidad de usar un navegador."}',
             'value_fr' => '{"0":"L\'application mobile 4rabet est une plateforme pratique pour les paris sportifs et les jeux d\'argent, principalement destinée aux marchés d\'Asie du Sud, de la CEI et d\'autres régions. Cependant, malgré cela, vous pouvez accéder à la plateforme en utilisant un VPN. L\'application permet aux utilisateurs de parier sur divers événements sportifs, de jouer à des jeux de casino, de participer à des jeux en direct et de profiter de toutes les fonctionnalités de la plateforme de paris sans avoir besoin d\'utiliser un navigateur."}',
             'value_pt' => '{"0":"O aplicativo móvel 4rabet é uma plataforma conveniente para apostas esportivas e jogos de azar, voltada principalmente para os mercados do Sul da Ásia, da CEI e de outras regiões. No entanto, apesar disso, você pode acessar a plataforma usando uma VPN. O aplicativo permite que os usuários façam apostas em diversos eventos esportivos, joguem em cassinos, participem de jogos ao vivo e aproveitem toda a funcionalidade da plataforma de apostas sem precisar usar um navegador."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 3
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Intuitive interface",
                                 "1":"Support for live betting and streaming",
                                 "2":"Wide selection of events",
                                 "3":"Fast performance",
                                 "4":"Casino and slots",
                                 "5":"Bonuses upon download"},
                             "1":
                                {"0":"Not available on Google Play",
                                 "1":"Requires a stable internet connection"}
                             }',
             'value_es' => '{"0":
                                {"0":"Interfaz intuitiva",
                                 "1":"Soporte para apuestas en vivo y transmisiones",
                                 "2":"Amplia selección de eventos",
                                 "3":"Rendimiento rápido",
                                 "4":"Casino y tragamonedas",
                                 "5":"Bonos al descargar"},
                             "1":
                                {"0":"No disponible en Google Play",
                                 "1":"Requiere una conexión a internet estable"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Interface intuitive",
                                 "1":"Prise en charge des paris en direct et des diffusions",
                                 "2":"Large choix d’événements",
                                 "3":"Performance rapide",
                                 "4":"Casino et machines à sous",
                                 "5":"Bonus lors du téléchargement"},
                             "1":
                                {"0":"Non disponible sur Google Play",
                                 "1":"Nécessite une connexion Internet stable"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Interface intuitiva",
                                 "1":"Suporte para apostas ao vivo e transmissões",
                                 "2":"Grande variedade de eventos",
                                 "3":"Desempenho rápido",
                                 "4":"Cassino e caça-níqueis",
                                 "5":"Bônus ao fazer o download"},
                             "1":
                                {"0":"Não disponível na Google Play",
                                 "1":"Requer uma conexão de internet estável"}
                             }',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 4
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
                'value_en' => '{"0":"Download 4rabet on Android"}',
                'value_es' => '{"0":"Descarga 4rabet en Android"}',
                'value_fr' => '{"0":"Téléchargez 4rabet sur Android"}',
                'value_pt' => '{"0":"Baixe o 4rabet no Android"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 5
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Since Google Play\'s policy restricts the placement of gambling apps, 4rabet is not available on the Play Market. Therefore, it must be downloaded from the official website in the form of an APK file."}',
             'value_es' => '{"0":"Dado que la política de Google Play restringe la publicación de aplicaciones de apuestas, 4rabet no está disponible en Play Market. Por lo tanto, debe descargarse desde el sitio web oficial en formato APK."}',
             'value_fr' => '{"0":"La politique de Google Play limitant la publication des applications de jeux d\'argent, 4rabet n\'est pas disponible sur le Play Market. Il doit donc être téléchargé depuis le site officiel sous forme de fichier APK."}',
             'value_pt' => '{"0":"Como a política do Google Play restringe a distribuição de aplicativos de apostas, o 4rabet não está disponível na Play Market. Portanto, deve ser baixado no site oficial em formato APK."}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 6
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
                'value_en' => '{"0":"How to install the 4rabet app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación de 4rabet en Android?"}',
                'value_fr' => '{"0":"Comment installer l\'application 4rabet sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da 4rabet no Android?"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 7
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Although the mobile app is not available on the Play Market, the installation process won’t take much time. Here is the installation guide:"}',
             'value_es' => '{"0":"Aunque la aplicación móvil no está disponible en Play Market, el proceso de instalación no tomará mucho tiempo. Aquí tienes la guía de instalación:"}',
             'value_fr' => '{"0":"Bien que l\'application mobile ne soit pas disponible sur le Play Market, le processus d\'installation ne prend pas beaucoup de temps. Voici le guide d\'installation :"}',
             'value_pt' => '{"0":"Embora o aplicativo móvel não esteja disponível na Play Market, o processo de instalação não levará muito tempo. Aqui está o guia de instalação:"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 8
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h4',
                'value_en' => '{"0":"Follow the link"}',
                'value_es' => '{"0":"Sigue el enlace"}',
                'value_fr' => '{"0":"Suivez le lien"}',
                'value_pt' => '{"0":"Siga o link"}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 9
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"To begin, open the browser on your phone and go to the link we provided at the top of our review."}',
             'value_es' => '{"0":"Para comenzar, abre el navegador en tu teléfono y ve al enlace que dejamos en la parte superior de nuestra reseña."}',
             'value_fr' => '{"0":"Pour commencer, ouvrez le navigateur sur votre téléphone et accédez au lien que nous avons laissé en haut de notre avis."}',
             'value_pt' => '{"0":"Para começar, abra o navegador no seu telefone e acesse o link que deixamos no topo da nossa análise."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 10
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h4',
                'value_en' => '{"0":"Download the APK file"}',
                'value_es' => '{"0":"Descarga el archivo APK"}',
                'value_fr' => '{"0":"Téléchargez le fichier APK"}',
                'value_pt' => '{"0":"Baixe o arquivo APK"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 11
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"On the official 4rabet website, there is a link to download the APK file — it is located at the very bottom of the site on the right. Just click the «Download» button for your device."}',
             'value_es' => '{"0":"En el sitio web oficial de 4rabet, hay un enlace para descargar el archivo APK — se encuentra en la parte inferior derecha del sitio. Simplemente haz clic en el botón «Descargar» para tu dispositivo."}',
             'value_fr' => '{"0":"Sur le site officiel de 4rabet, il y a un lien pour télécharger le fichier APK — il se trouve tout en bas du site, à droite. Il suffit de cliquer sur le bouton « Télécharger » correspondant à votre appareil."}',
             'value_pt' => '{"0":"No site oficial da 4rabet, há um link para baixar o arquivo APK — ele está localizado na parte inferior direita do site. Basta clicar no botão «Baixar» correspondente ao seu dispositivo."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 12
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h4',
                'value_en' => '{"0":"Set up your mobile device"}',
                'value_es' => '{"0":"Configura tu dispositivo móvil"}',
                'value_fr' => '{"0":"Configurez votre appareil mobile"}',
                'value_pt' => '{"0":"Configure seu dispositivo móvel"}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 13
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
                'value_en' => '{"0":"Open the «Settings» section, go to the «Security» menu, and check the box next to «Allow installation from unknown sources». Save the changes."}',
                'value_es' => '{"0":"Abre la sección «Configuración», ve al menú «Seguridad» y marca la casilla junto a «Permitir instalación de fuentes desconocidas». Guarda los cambios."}',
                'value_fr' => '{"0":"Ouvrez la section « Paramètres », allez dans le menu « Sécurité » et cochez la case « Autoriser l’installation de sources inconnues ». Enregistrez les modifications."}',
                'value_pt' => '{"0":"Abra a seção «Configurações», vá ao menu «Segurança» e marque a opção «Permitir instalação de fontes desconhecidas». Salve as alterações."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 14
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h4',
                'value_en' => '{"0":"Install the app"}',
                'value_es' => '{"0":"Instala la aplicación"}',
                'value_fr' => '{"0":"Installez l’application"}',
                'value_pt' => '{"0":"Instale o aplicativo"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 15
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Open the downloaded file located in the Downloads folder. Tap «Install» and wait a couple of minutes."}',
             'value_es' => '{"0":"Abre el archivo descargado que se encuentra en la carpeta de Descargas. Pulsa «Instalar» y espera un par de minutos."}',
             'value_fr' => '{"0":"Ouvrez le fichier téléchargé qui se trouve dans le dossier Téléchargements. Appuyez sur «Installer» et attendez quelques minutes."}',
             'value_pt' => '{"0":"Abra o arquivo baixado que está na pasta Downloads. Toque em «Instalar» e aguarde alguns minutos."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 16
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account"}',
                'value_es' => '{"0":"Verifica tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez votre compte"}',
                'value_pt' => '{"0":"Verifique sua conta"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 17
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"After installation, launch the app and log into your account or register a new one."}',
             'value_es' => '{"0":"Después de la instalación, abre la aplicación e inicia sesión en tu cuenta o regístrate si aún no tienes una."}',
             'value_fr' => '{"0":"Une fois l\'installation terminée, lancez l\'application et connectez-vous à votre compte ou créez-en un nouveau."}',
             'value_pt' => '{"0":"Após a instalação, abra o aplicativo e entre na sua conta ou registre uma nova."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 18
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
                'value_en' => '{"0":"Download the 4rabet mobile app on iOS"}',
                'value_es' => '{"0":"Descarga la aplicación móvil de 4rabet en iOS"}',
                'value_fr' => '{"0":"Téléchargez l\'application mobile 4rabet sur iOS"}',
                'value_pt' => '{"0":"Baixe o aplicativo móvel 4rabet no iOS"}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 19
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4rabet is a multifunctional platform for sports betting, live betting, and casino games. Despite certain gambling restrictions in the App Store, the app can be installed through several officially approved methods."}',
             'value_es' => '{"0":"4rabet es una plataforma multifuncional para apuestas deportivas, apuestas en vivo y juegos de casino. A pesar de ciertas restricciones sobre juegos de azar en la App Store, la aplicación se puede instalar mediante varios métodos oficialmente permitidos."}',
             'value_fr' => '{"0":"4rabet est une plateforme multifonctionnelle pour les paris sportifs, les paris en direct et les jeux de casino. Malgré certaines restrictions liées aux jeux d\'argent dans l\'App Store, l\'application peut être installée par plusieurs méthodes officiellement autorisées."}',
             'value_pt' => '{"0":"A 4rabet é uma plataforma multifuncional para apostas esportivas, apostas ao vivo e jogos de cassino. Apesar de algumas restrições relacionadas a jogos de azar na App Store, o aplicativo pode ser instalado por meio de vários métodos oficialmente permitidos."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 20
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
             'value_en' => '{"0":"img-1.jpg"}',
             'value_es' => '{"0":"img-1.jpg"}',
             'value_fr' => '{"0":"img-1.jpg"}',
             'value_pt' => '{"0":"img-1.jpg"}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 21
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
                'value_en' => '{"0":"How to install the 4rabet mobile app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación móvil de 4rabet en iOS?"}',
                'value_fr' => '{"0":"Comment installer l\'application mobile 4rabet sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo móvel da 4rabet no iOS?"}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 22
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"As of today, the 4rabet app is not always available on the App Store due to Apple’s policy regarding gambling products. However, in some countries, it is possible to download it from the App Store. If you are unable to do so, you can download the mobile app from the official website. Here are the main download options:"}',
             'value_es' => '{"0":"A día de hoy, la aplicación 4rabet no siempre está disponible en la App Store debido a la política de Apple sobre productos de apuestas. Sin embargo, en algunos países es posible descargarla desde la App Store. Si no puedes hacerlo, puedes descargar la aplicación móvil desde el sitio web oficial. Estas son las principales opciones de descarga:"}',
             'value_fr' => '{"0":"À ce jour, l\'application 4rabet n\'est pas toujours disponible sur l\'App Store en raison de la politique d\'Apple concernant les produits de jeu. Cependant, dans certains pays, il est possible de la télécharger depuis l\'App Store. Si cela ne fonctionne pas pour vous, vous pouvez télécharger l\'application mobile depuis le site officiel. Voici les principales méthodes de téléchargement :"}',
             'value_pt' => '{"0":"Atualmente, o aplicativo 4rabet nem sempre está disponível na App Store devido à política da Apple em relação a produtos de apostas. No entanto, em alguns países, é possível baixá-lo diretamente da App Store. Se você não conseguir, pode baixar o aplicativo móvel pelo site oficial. Aqui estão as principais formas de download:"}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 23
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h4',
             'value_en' => '{"0":"Installing the app via the App Store"}',
             'value_es' => '{"0":"Instalación de la aplicación a través de la App Store"}',
             'value_fr' => '{"0":"Installation de l\'application via l\'App Store"}',
             'value_pt' => '{"0":"Instalação do aplicativo pela App Store"}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 24
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The installation procedure for the 4rabet mobile app from the App Store is very simple. You just need to find the app and install it."}',
             'value_es' => '{"0":"El procedimiento para instalar la aplicación móvil 4rabet desde la App Store es muy sencillo. Solo necesitas buscar la aplicación e instalarla."}',
             'value_fr' => '{"0":"La procédure d\'installation de l\'application mobile 4rabet depuis l\'App Store est très simple. Il suffit de trouver l\'application et de l\'installer."}',
             'value_pt' => '{"0":"O procedimento para instalar o aplicativo móvel 4rabet na App Store é muito simples. Basta encontrar o aplicativo e instalá-lo."}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 25
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h4',
             'value_en' => '{"0":"Downloading via browser"}',
             'value_es' => '{"0":"Descarga a través del navegador"}',
             'value_fr' => '{"0":"Téléchargement via le navigateur"}',
             'value_pt' => '{"0":"Download via navegador"}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 26
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"At the top of this review, we have placed a link so you can quickly access and download the mobile app from the official 4rabet website. On the 4rabet site, tap the «Share» icon in the menu at the bottom of the screen. Select «Add to Home Screen», then tap «Done». After that, the app will be successfully installed on your phone."}',
             'value_es' => '{"0":"En la parte superior de esta reseña hemos colocado un enlace para que puedas acceder rápidamente y descargar la aplicación móvil desde el sitio oficial de 4rabet. En el sitio de 4rabet, toca el ícono de «Compartir» en el menú inferior de la pantalla. Selecciona «Añadir a la pantalla de inicio» y luego toca «Listo». Después de eso, la aplicación se instalará correctamente en tu teléfono."}',
             'value_fr' => '{"0":"En haut de cet avis, nous avons placé un lien pour que vous puissiez rapidement accéder et télécharger l’application mobile depuis le site officiel de 4rabet. Sur le site de 4rabet, appuyez sur l’icône « Partager » dans le menu en bas de l’écran. Sélectionnez « Ajouter à l’écran d’accueil », puis appuyez sur « Terminé ». Après cela, l’application sera installée avec succès sur votre téléphone."}',
             'value_pt' => '{"0":"No topo desta análise, colocamos um link para que você possa acessar rapidamente e baixar o aplicativo móvel no site oficial da 4rabet. No site da 4rabet, toque no ícone «Compartilhar» no menu na parte inferior da tela. Selecione «Adicionar à tela inicial» e depois toque em «Concluído». Depois disso, o aplicativo será instalado com sucesso no seu telefone."}',
             'order' => 26
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 27
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The app will appear as an icon on your screen. This is a web application that mimics the functionality of a native app."}',
             'value_es' => '{"0":"La aplicación aparecerá como un ícono en tu pantalla. Es una aplicación web que simula el funcionamiento de una aplicación nativa."}',
             'value_fr' => '{"0":"L’application apparaîtra sous forme d’icône sur votre écran. Il s’agit d’une application web qui imite le fonctionnement d’une application native."}',
             'value_pt' => '{"0":"O aplicativo aparecerá como um ícone na sua tela. Trata-se de um aplicativo web que simula o funcionamento de um app nativo."}',
             'order' => 27
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 28
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account and make your first deposit"}',
                'value_es' => '{"0":"Verifica tu cuenta y realiza tu primer depósito"}',
                'value_fr' => '{"0":"Vérifiez votre compte et effectuez votre premier dépôt"}',
                'value_pt' => '{"0":"Verifique sua conta e faça seu primeiro depósito"}',
             'order' => 28
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 29
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
                'value_en' => '{"0":"We recommend verifying your account as soon as possible, as it may sometimes be a requirement for making a deposit."}',
                'value_es' => '{"0":"Te recomendamos verificar tu cuenta lo antes posible, ya que en algunos casos puede ser un requisito para realizar un depósito."}',
                'value_fr' => '{"0":"Nous vous conseillons de vérifier votre compte dès que possible, car cela peut parfois être nécessaire pour effectuer un dépôt."}',
                'value_pt' => '{"0":"Recomendamos que verifique sua conta o quanto antes, pois em alguns casos isso pode ser necessário para realizar um depósito."}',
             'order' => 29
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 30
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
                'value_en' => '{"0":"The features of the 4rabet mobile app"}',
                'value_es' => '{"0":"Las funciones de la aplicación móvil de 4rabet"}',
                'value_fr' => '{"0":"Les fonctionnalités de l’application mobile 4rabet"}',
                'value_pt' => '{"0":"Os recursos do aplicativo móvel da 4rabet"}',
             'order' => 30
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 31
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
                'value_en' => '{"0":"The 4rabet application has been present on the market of betting apps for years, and has managed to get numerous features that some of the betting apps lack. For example, the 4rabet app has:"}',
                'value_es' => '{"0":"La aplicación de 4rabet ha estado presente en el mercado de las apps de apuestas durante años y ha logrado incorporar numerosas funciones que otras aplicaciones no tienen. Por ejemplo, la app de 4rabet ofrece:"}',
                'value_fr' => '{"0":"L’application 4rabet est présente sur le marché des applications de paris depuis des années et a réussi à intégrer de nombreuses fonctionnalités que certaines autres applications n’ont pas. Par exemple, l’application 4rabet propose :"}',
                'value_pt' => '{"0":"O aplicativo da 4rabet está presente no mercado de apps de apostas há anos e conseguiu reunir diversos recursos que alguns concorrentes ainda não oferecem. Por exemplo, o app da 4rabet possui:"}',
             'order' => 31
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 32
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'list_v2',
             'value_en' => '{"0":"Live bets with real-time odds updates",
                             "1":"Match predictions and statistics for analysis",
                             "2":"Live streaming",
                             "3":"A wide selection of casino games: roulette, poker, blackjack, slots from leading developers",
                             "4":"Welcome bonus for new users when registering via the app",
                             "5":"Regular promotions, cashbacks, tournaments, and free bets",
                             "6":"Loyalty program with points accumulation",
                             "7":"Deposit and withdrawal management",
                             "8":"Online chat with customer support",
                             "9":"Ability to enable push notifications about results, bonuses, and promotions"}',
             'value_es' => '{"0":"Apuestas en vivo con actualizaciones de cuotas en tiempo real",
                             "1":"Pronósticos y estadísticas de partidos para análisis",
                             "2":"Transmisiones en vivo",
                             "3":"Gran variedad de juegos de casino: ruleta, póker, blackjack, tragamonedas de desarrolladores líderes",
                             "4":"Bono de bienvenida para nuevos usuarios al registrarse a través de la aplicación",
                             "5":"Promociones regulares, reembolsos, torneos y apuestas gratis",
                             "6":"Programa de lealtad con acumulación de puntos",
                             "7":"Gestión de depósitos y retiros",
                             "8":"Chat en línea con atención al cliente",
                             "9":"Posibilidad de activar notificaciones push sobre resultados, bonos y promociones"}',
             'value_fr' => '{"0":"Paris en direct avec mise à jour des cotes en temps réel",
                             "1":"Prédictions et statistiques des matchs pour analyse",
                             "2":"Diffusions en direct",
                             "3":"Large choix de jeux de casino : roulette, poker, blackjack, machines à sous des principaux développeurs",
                             "4":"Bonus de bienvenue pour les nouveaux utilisateurs lors de l\'inscription via l\'application",
                             "5":"Promotions régulières, cashback, tournois et paris gratuits",
                             "6":"Programme de fidélité avec accumulation de points",
                             "7":"Gestion des dépôts et des retraits",
                             "8":"Chat en ligne avec le service client",
                             "9":"Possibilité d’activer les notifications push concernant les résultats, bonus et promotions."}',
             'value_pt' => '{"0":"Apostas ao vivo com atualizações de odds em tempo real",
                             "1":"Previsões e estatísticas das partidas para análise",
                             "2":"Transmissões ao vivo",
                             "3":"Grande variedade de jogos de cassino: roleta, pôquer, blackjack, slots de desenvolvedores líderes",
                             "4":"Bônus de boas-vindas para novos usuários ao se registrar pelo app",
                             "5":"Promoções regulares, cashbacks, torneios e apostas grátis",
                             "6":"Programa de fidelidade com acumulação de pontos",
                             "7":"Gerenciamento de depósitos e saques",
                             "8":"Chat online com suporte ao cliente",
                             "9":"Possibilidade de ativar notificações push sobre resultados, bônus e promoções"}',
             'order' => 32
            ]
        );
    }
}
