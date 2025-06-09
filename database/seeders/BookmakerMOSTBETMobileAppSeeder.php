<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMOSTBETMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 1
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"Review on MOSTBET betting mobile app"}',
             'value_es' => '{"0":"Reseña de la aplicación móvil de apuestas de MOSTBET"}',
             'value_fr' => '{"0":"Avis sur l’application mobile de paris MOSTBET"}',
             'value_pt' => '{"0":"Análise do aplicativo móvel de apostas da MOSTBET"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 2
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The MOSTBET mobile app is designed to provide players with maximum comfort while using the service. With a smartphone or tablet, users can access all the platform’s features anytime and anywhere with an internet connection."}',
             'value_es' => '{"0":"La aplicación móvil de MOSTBET está diseñada para ofrecer la máxima comodidad a los jugadores mientras utilizan el servicio. Con un teléfono inteligente o una tableta, los usuarios pueden acceder a todas las funciones de la plataforma en cualquier momento y lugar con conexión a Internet."}',
             'value_fr' => '{"0":"L\'application mobile MOSTBET est conçue pour offrir un maximum de confort aux joueurs lors de l\'utilisation du service. Avec un smartphone ou une tablette, les utilisateurs peuvent accéder à toutes les fonctionnalités de la plateforme à tout moment et en tout lieu avec une connexion Internet."}',
             'value_pt' => '{"0":"O aplicativo móvel da MOSTBET foi desenvolvido para oferecer o máximo de conforto aos jogadores ao utilizar o serviço. Com um smartphone ou tablet, os usuários podem acessar todos os recursos da plataforma a qualquer hora e em qualquer lugar com conexão à Internet."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 3
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Minimal internet traffic consumption",
                                 "1":"Simple and intuitive user interface",
                                 "2":"Convenient search using keyword queries",
                                 "3":"High odds on popular sports events"},
                             "1":
                                {"0":"No live match broadcasts",
                                 "1":"No access to technical support",
                                 "2":"No match center",
                                 "3":"No password recovery option"}
                             }',
             'value_es' => '{"0":
                                {"0":"Consumo mínimo de tráfico de Internet",
                                 "1":"Interfaz de usuario simple e intuitiva",
                                 "2":"Búsqueda conveniente con palabras clave",
                                 "3":"Cuotas altas en eventos deportivos populares"},
                             "1":
                                {"0":"No hay transmisiones en vivo de partidos",
                                 "1":"No hay acceso al soporte técnico",
                                 "2":"No hay centro de partidos",
                                 "3":"No hay opción para recuperar la contraseña"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Consommation minimale de données Internet",
                                 "1":"Interface utilisateur simple et intuitive",
                                 "2":"Recherche pratique avec des mots-clés",
                                 "3":"Cotes élevées sur les événements sportifs populaires"},
                             "1":
                                {"0":"Pas de diffusion en direct des matchs",
                                 "1":"Pas d’assistance technique disponible",
                                 "2":"Pas de centre de match",
                                 "3":"Pas d’option de récupération de mot de passe"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Consumo mínimo de dados de internet",
                                 "1":"Interface de usuário simples e intuitiva",
                                 "2":"Busca prática por palavras-chave",
                                 "3":"Altas probabilidades em eventos esportivos populares"},
                             "1":
                                {"0":"Sem transmissões ao vivo dos jogos",
                                 "1":"Sem suporte técnico disponível",
                                 "2":"Sem centro de partidas",
                                 "3":"Sem opção de recuperação de senha"}
                             }',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 4
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
                'value_en' => '{"0":"Download MOSTBET on Android"}',
                'value_es' => '{"0":"Descarga MOSTBET en Android"}',
                'value_fr' => '{"0":"Téléchargez MOSTBET sur Android"}',
                'value_pt' => '{"0":"Baixe o MOSTBET no Android"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 5
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The official MOSTBET Android app is not available on the Google Play Store due to Google\'s policy prohibiting gambling-related software on its platform. However, you can download the MOSTBET Android app directly from the official bookmaker’s website."}',
             'value_es' => '{"0":"La aplicación oficial de MOSTBET para Android no está disponible en la tienda Google Play debido a la política de Google que prohíbe el software relacionado con juegos de azar en su plataforma. Sin embargo, puedes descargar la aplicación de MOSTBET para Android directamente desde el sitio web oficial de la casa de apuestas."}',
             'value_fr' => '{"0":"L\'application officielle MOSTBET pour Android n\'est pas disponible sur le Google Play Store en raison de la politique de Google qui interdit les logiciels liés aux jeux d\'argent sur sa plateforme. Cependant, vous pouvez télécharger l\'application MOSTBET pour Android directement depuis le site officiel du bookmaker."}',
             'value_pt' => '{"0":"O aplicativo oficial da MOSTBET para Android não está disponível na Google Play Store devido à política do Google que proíbe softwares relacionados a jogos de azar em sua plataforma. No entanto, você pode baixar o aplicativo MOSTBET para Android diretamente no site oficial da casa de apostas."}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 6
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
                'value_en' => '{"0":"How to install the MOSTBET app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación de MOSTBET en Android?"}',
                'value_fr' => '{"0":"Comment installer l\'application MOSTBET sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da MOSTBET no Android?"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 7
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"To do this, follow these steps:"}',
             'value_es' => '{"0":"Para ello, sigue estos pasos:"}',
             'value_fr' => '{"0":"Pour cela, suivez ces étapes :"}',
             'value_pt' => '{"0":"Para isso, siga os seguintes passos:"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 8
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h4',
                'value_en' => '{"0":"Follow the link"}',
                'value_es' => '{"0":"Sigue el enlace"}',
                'value_fr' => '{"0":"Suivez le lien"}',
                'value_pt' => '{"0":"Siga o link"}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 9
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Go to the official bookmaker’s website using the browser on your mobile device. We have placed a link at the top for quick access to the MOSTBET site."}',
             'value_es' => '{"0":"Accede al sitio web oficial de la casa de apuestas utilizando el navegador de tu dispositivo móvil. Hemos dejado un enlace en la parte superior para un acceso rápido al sitio de MOSTBET."}',
             'value_fr' => '{"0":"Accédez au site officiel du bookmaker en utilisant le navigateur de votre appareil mobile. Nous avons placé un lien en haut pour un accès rapide au site MOSTBET."}',
             'value_pt' => '{"0":"Acesse o site oficial da casa de apostas usando o navegador do seu dispositivo móvel. Deixamos um link no topo para acesso rápido ao site MOSTBET."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 10
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h4',
                'value_en' => '{"0":"Download the APK file"}',
                'value_es' => '{"0":"Descarga el archivo APK"}',
                'value_fr' => '{"0":"Téléchargez le fichier APK"}',
                'value_pt' => '{"0":"Baixe o arquivo APK"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 11
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Download the APK file to your mobile device. The download doesn’t take long since the file size is small."}',
             'value_es' => '{"0":"Descarga el archivo APK en tu dispositivo móvil. La descarga no tarda mucho porque el tamaño del archivo es pequeño."}',
             'value_fr' => '{"0":"Téléchargez le fichier APK sur votre appareil mobile. Le téléchargement est rapide car la taille du fichier est petite."}',
             'value_pt' => '{"0":"Baixe o arquivo APK para o seu dispositivo móvel. O download não demora muito, pois o tamanho do arquivo é pequeno."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 12
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h4',
                'value_en' => '{"0":"Set up your mobile device"}',
                'value_es' => '{"0":"Configura tu dispositivo móvil"}',
                'value_fr' => '{"0":"Configurez votre appareil mobile"}',
                'value_pt' => '{"0":"Configure seu dispositivo móvel"}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 13
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
                'value_en' => '{"0":"Open the «Settings» section, go to the «Security» menu, and check the box next to «Allow installation from unknown sources». Save the changes."}',
                'value_es' => '{"0":"Abre la sección «Configuración», ve al menú «Seguridad» y marca la casilla junto a «Permitir instalación de fuentes desconocidas». Guarda los cambios."}',
                'value_fr' => '{"0":"Ouvrez la section « Paramètres », allez dans le menu « Sécurité » et cochez la case « Autoriser l’installation de sources inconnues ». Enregistrez les modifications."}',
                'value_pt' => '{"0":"Abra a seção «Configurações», vá ao menu «Segurança» e marque a opção «Permitir instalação de fontes desconhecidas». Salve as alterações."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 14
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h4',
                'value_en' => '{"0":"Install the app"}',
                'value_es' => '{"0":"Instala la aplicación"}',
                'value_fr' => '{"0":"Installez l’application"}',
                'value_pt' => '{"0":"Instale o aplicativo"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 15
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
                'value_en' => '{"0":"Tap on the downloaded APK file and press the «Install» button. Wait a few minutes for the app to be installed on your mobile device."}',
                'value_es' => '{"0":"Toca el archivo APK descargado y pulsa el botón «Instalar». Espera unos minutos mientras la aplicación se instala en tu dispositivo móvil."}',
                'value_fr' => '{"0":"Appuyez sur le fichier APK téléchargé, puis sur le bouton « Installer ». Patientez quelques minutes pendant que l’application s’installe sur votre appareil mobile."}',
                'value_pt' => '{"0":"Toque no arquivo APK baixado e pressione o botão «Instalar». Aguarde alguns minutos enquanto o aplicativo é instalado no seu dispositivo móvel."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 16
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account"}',
                'value_es' => '{"0":"Verifica tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez votre compte"}',
                'value_pt' => '{"0":"Verifique sua conta"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 17
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"After installing the mobile app on your device, you can start using it immediately. To do this, log in using your MOSTBET account credentials or complete a simple registration process if you are a new user."}',
             'value_es' => '{"0":"Después de instalar la aplicación móvil en tu dispositivo, puedes comenzar a usarla de inmediato. Para ello, inicia sesión con tus datos de MOSTBET o realiza un sencillo proceso de registro si eres un nuevo usuario."}',
             'value_fr' => '{"0":"Après avoir installé l’application mobile sur votre appareil, vous pouvez l’utiliser immédiatement. Pour cela, connectez-vous avec vos identifiants MOSTBET ou procédez à une inscription simple si vous êtes un nouvel utilisateur."}',
             'value_pt' => '{"0":"Após instalar o aplicativo móvel no seu dispositivo, você pode começar a usá-lo imediatamente. Para isso, faça login usando suas credenciais MOSTBET ou realize um processo simples de registro se você for um novo usuário."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 18
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
                'value_en' => '{"0":"Download the MOSTBET mobile app on iOS"}',
                'value_es' => '{"0":"Descarga la aplicación móvil de MOSTBET en iOS"}',
                'value_fr' => '{"0":"Téléchargez l\'application mobile MOSTBET sur iOS"}',
                'value_pt' => '{"0":"Baixe o aplicativo móvel MOSTBET no iOS"}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 19
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
                'value_en' => '{"0":"iPhone and iPad users can also enjoy everything MOSTBET has to offer. Below you\'ll find a step-by-step guide on how to install the app on your device."}',
                'value_es' => '{"0":"Los usuarios de iPhone y iPad también pueden disfrutar de todo lo que ofrece MOSTBET. A continuación, encontrarás una guía paso a paso para instalar la aplicación en tu dispositivo."}',
                'value_fr' => '{"0":"Les utilisateurs d’iPhone et d’iPad peuvent eux aussi profiter de toutes les fonctionnalités de MOSTBET. Vous trouverez ci-dessous un guide étape par étape pour installer l’application sur votre appareil."}',
                'value_pt' => '{"0":"Os usuários de iPhone e iPad também podem aproveitar todos os recursos do MOSTBET. Abaixo, você encontrará um guia passo a passo para instalar o aplicativo no seu dispositivo."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 20
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
             'value_en' => '{"0":"img-1.jpg"}',
             'value_es' => '{"0":"img-1.jpg"}',
             'value_fr' => '{"0":"img-1.jpg"}',
             'value_pt' => '{"0":"img-1.jpg"}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 21
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h4',
                'value_en' => '{"0":"Follow the link"}',
                'value_es' => '{"0":"Sigue el enlace"}',
                'value_fr' => '{"0":"Suivez le lien"}',
                'value_pt' => '{"0":"Siga o link"}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 22
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
                'value_en' => '{"0":"The first step is simply to follow the link to the MOSTBET betting site. Once on the homepage, you’ll be able to create an account, claim a generous welcome bonus, and gain access to some of the most competitive odds on the market."}',
                'value_es' => '{"0":"El primer paso es simplemente seguir el enlace al sitio de apuestas de MOSTBET. Una vez en la página principal, podrás crear una cuenta, aprovechar un generoso bono de bienvenida y acceder a algunas de las cuotas más competitivas del mercado."}',
                'value_fr' => '{"0":"La première étape consiste simplement à suivre le lien vers le site de paris de MOSTBET. Une fois sur la page d\'accueil, vous pourrez créer un compte, profiter d\'un généreux bonus de bienvenue et accéder à certaines des cotes les plus avantageuses du marché."}',
                'value_pt' => '{"0":"O primeiro passo é simplesmente seguir o link para o site de apostas da MOSTBET. Ao acessar a página inicial, você poderá criar uma conta, aproveitar um generoso bônus de boas-vindas e ter acesso a algumas das melhores odds do mercado."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 23
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h4',
                'value_en' => '{"0":"Search for «MOSTBET» in the App Store."}',
                'value_es' => '{"0":"Busca «MOSTBET» en la App Store."}',
                'value_fr' => '{"0":"Recherchez «MOSTBET» dans l\'App Store."}',
                'value_pt' => '{"0":"Procure por «MOSTBET» na App Store."}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 24
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Installing the mobile app for iOS is easier than for Android because users can find and download the app directly from the App Store."}',
             'value_es' => '{"0":"La instalación de la aplicación móvil para iOS es más sencilla que para Android, ya que los usuarios pueden encontrar y descargar la aplicación directamente desde la App Store."}',
             'value_fr' => '{"0":"L\'installation de l\'application mobile pour iOS est plus simple que pour Android, car les utilisateurs peuvent trouver et télécharger l\'application directement depuis l\'App Store."}',
             'value_pt' => '{"0":"A instalação do aplicativo móvel para iOS é mais fácil do que para Android, pois os usuários podem encontrar e baixar o aplicativo diretamente na App Store."}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 25
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account and make your first deposit"}',
                'value_es' => '{"0":"Verifica tu cuenta y realiza tu primer depósito"}',
                'value_fr' => '{"0":"Vérifiez votre compte et effectuez votre premier dépôt"}',
                'value_pt' => '{"0":"Verifique sua conta e faça seu primeiro depósito"}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 26
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
                'value_en' => '{"0":"We recommend verifying your account as soon as possible, as it may sometimes be a requirement for making a deposit."}',
                'value_es' => '{"0":"Te recomendamos verificar tu cuenta lo antes posible, ya que en algunos casos puede ser un requisito para realizar un depósito."}',
                'value_fr' => '{"0":"Nous vous conseillons de vérifier votre compte dès que possible, car cela peut parfois être nécessaire pour effectuer un dépôt."}',
                'value_pt' => '{"0":"Recomendamos que verifique sua conta o quanto antes, pois em alguns casos isso pode ser necessário para realizar um depósito."}',
             'order' => 26
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 27
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
                'value_en' => '{"0":"The features of the MOSTBET mobile app"}',
                'value_es' => '{"0":"Las funciones de la aplicación móvil de MOSTBET"}',
                'value_fr' => '{"0":"Les fonctionnalités de l’application mobile MOSTBET"}',
                'value_pt' => '{"0":"Os recursos do aplicativo móvel da MOSTBET"}',
             'order' => 27
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 28
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The MOSTBET mobile app allows you to place bets on various sports such as cricket, football, tennis, horse racing, and esports. The convenient and intuitive interface ensures a comfortable live betting experience, making every sporting event even more exciting."}',
             'value_es' => '{"0":"La aplicación móvil de MOSTBET permite realizar apuestas en diversos deportes como cricket, fútbol, tenis, carreras de caballos y deportes electrónicos. La interfaz cómoda e intuitiva garantiza una experiencia de apuestas en vivo confortable, haciendo que cada evento deportivo sea aún más emocionante."}',
             'value_fr' => '{"0":"L’application mobile MOSTBET permet de parier sur divers sports tels que le cricket, le football, le tennis, les courses hippiques et l’esport. L’interface conviviale et intuitive offre une expérience de paris en direct confortable, rendant chaque événement sportif encore plus passionnant."}',
             'value_pt' => '{"0":"O aplicativo móvel MOSTBET permite fazer apostas em diversos esportes, como críquete, futebol, tênis, corridas de cavalos e esports. A interface conveniente e intuitiva garante uma experiência confortável de apostas ao vivo, tornando cada evento esportivo ainda mais emocionante."}',
             'order' => 28
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 29
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Key advantages:"}',
             'value_es' => '{"0":"Ventajas principales:"}',
             'value_fr' => '{"0":"Principaux avantages :"}',
             'value_pt' => '{"0":"Principais vantagens:"}',
             'order' => 29
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 30
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'list_v2',
             'value_en' => '{"0":"A wide variety of games, including live dealers, slots, and roulette from leading providers",
                             "1":"Advanced algorithms for calculating odds, allowing personalized bets with high winning potential",
                             "2":"Fast and convenient financial transactions",
                             "3":"Instant event notifications"}',
             'value_es' => '{"0":"Gran variedad de juegos, incluyendo crupieres en vivo, tragamonedas y ruleta de los principales proveedores",
                             "1":"Algoritmos avanzados para calcular cuotas, que permiten apuestas personalizadas con alto potencial de ganancia",
                             "2":"Operaciones financieras rápidas y convenientes",
                             "3":"Notificaciones instantáneas de eventos"}',
             'value_fr' => '{"0":"Large choix de jeux, incluant des croupiers en direct, des machines à sous et la roulette provenant de fournisseurs de premier plan",
                             "1":"Algorithmes avancés pour le calcul des cotes, permettant des paris personnalisés avec un fort potentiel de gain",
                             "2":"Transactions financières rapides et pratiques",
                             "3":"Notifications instantanées des événements"}',
             'value_pt' => '{"0":"Grande variedade de jogos, incluindo dealers ao vivo, slots e roleta dos principais fornecedores",
                             "1":"Algoritmos avançados para cálculo de odds, permitindo apostas personalizadas com alto potencial de ganho",
                             "2":"Transações financeiras rápidas e convenientes",
                             "3":"Notificações instantâneas de eventos"}',
             'order' => 30
            ]
        );
    }
}
