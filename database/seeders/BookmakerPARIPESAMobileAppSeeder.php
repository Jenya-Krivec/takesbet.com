<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerPARIPESAMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 1
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Review on PARIPESA betting mobile app"}',
             'value_es' => '{"0":"Reseña de la aplicación móvil de apuestas de PARIPESA"}',
             'value_fr' => '{"0":"Avis sur l’application mobile de paris PARIPESA"}',
             'value_pt' => '{"0":"Análise do aplicativo móvel de apostas da PARIPESA"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 1
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA is a modern bookmaker that appeared on the global online betting market at the beginning of 2019. Since then, this bookmaker has rapidly developed and has every chance to become one of the leading international bookmakers. In this review, you will find all the necessary information! We will explain how to install the app and share other important details."}',
             'value_es' => '{"0":"PARIPESA es una casa de apuestas moderna que apareció en el mercado global de apuestas en línea a principios de 2019. Desde entonces, esta casa de apuestas se ha desarrollado rápidamente y tiene todas las oportunidades de convertirse en una de las principales casas de apuestas internacionales. En esta reseña encontrarás toda la información necesaria. ¡Te explicaremos cómo instalar la aplicación y compartiremos otros detalles importantes!"}',
             'value_fr' => '{"0":"PARIPESA est un bookmaker moderne qui est apparu sur le marché mondial des paris en ligne au début de 2019. Depuis lors, ce bookmaker s’est rapidement développé et a toutes les chances de devenir l’un des principaux bookmakers internationaux. Dans cette revue, vous trouverez toutes les informations nécessaires ! Nous expliquerons comment installer l’application et partagerons d’autres détails importants."}',
             'value_pt' => '{"0":"PARIPESA é uma casa de apostas moderna que surgiu no mercado global de apostas online no início de 2019. Desde então, esta casa de apostas tem se desenvolvido rapidamente e tem todas as chances de se tornar uma das principais casas de apostas internacionais. Nesta avaliação, você encontrará todas as informações necessárias! Vamos explicar como instalar o aplicativo e compartilhar outros detalhes importantes."}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 2
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Easy navigation tailored for new users",
                                 "1":"Provides betting on 500 daily events and 8,000+ casino games",
                                 "2":"Available in 50+ languages",
                                 "3":"Provides notifications to inform players about bonuses and games"},
                             "1":
                                {"0":"Needs more than 100 MB of space"}
                             }',
             'value_es' => '{"0":
                                {"0":"Navegación fácil diseñada para nuevos usuarios",
                                 "1":"Ofrece apuestas en 500 eventos diarios y más de 8,000 juegos de casino",
                                 "2":"Disponible en más de 50 idiomas",
                                 "3":"Proporciona notificaciones para informar a los jugadores sobre bonos y juegos"},
                             "1":
                                {"0":"Necesita más de 100 MB de espacio"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Navigation facile adaptée aux nouveaux utilisateurs",
                                 "1":"Propose des paris sur 500 événements quotidiens et plus de 8 000 jeux de casino",
                                 "2":"Disponible en plus de 50 langues",
                                 "3":"Fournit des notifications pour informer les joueurs des bonus et des jeux"},
                             "1":
                                {"0":"Nécessite plus de 100 Mo d’espace"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Navegação fácil, adaptada para novos usuários",
                                 "1":"Oferece apostas em 500 eventos diários e mais de 8.000 jogos de cassino",
                                 "2":"Disponível em mais de 50 idiomas",
                                 "3":"Fornece notificações para informar os jogadores sobre bônus e jogos"},
                             "1":
                                {"0":"Requer mais de 100 MB de espaço"}
                             }',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 3
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
                'value_en' => '{"0":"Download PARIPESA on Android"}',
                'value_es' => '{"0":"Descarga PARIPESA en Android"}',
                'value_fr' => '{"0":"Téléchargez PARIPESA sur Android"}',
                'value_pt' => '{"0":"Baixe o PARIPESA no Android"}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 4
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA offers a modern Android app that provides access to games, sports betting, and promotions. The app functions well, without bugs or technical issues, and its design adapts seamlessly to any device, regardless of screen size. All games and bonuses remain available to users. PARIPESA is compatible with Android devices, although certain technical requirements must be met. All necessary details for downloading the app will be provided below."}',
             'value_es' => '{"0":"PARIPESA ofrece una aplicación moderna para Android que brinda acceso a juegos, apuestas deportivas y promociones. La aplicación funciona bien, sin errores ni problemas técnicos, y su diseño se adapta perfectamente a cualquier dispositivo, sin importar el tamaño de la pantalla. Todos los juegos y bonificaciones siguen estando disponibles para los usuarios. PARIPESA es compatible con dispositivos Android, aunque se deben cumplir ciertos requisitos técnicos. Se proporcionarán todos los detalles necesarios para descargar la aplicación a continuación."}',
             'value_fr' => '{"0":"PARIPESA propose une application moderne pour Android qui permet d\'accéder aux jeux, aux paris sportifs et aux promotions. L\'application fonctionne bien, sans bugs ni problèmes techniques, et son design s\'adapte parfaitement à tout appareil, quelle que soit la taille de l\'écran. Tous les jeux et bonus restent accessibles aux utilisateurs. PARIPESA est compatible avec les appareils Android, bien que certaines exigences techniques doivent être respectées. Tous les détails nécessaires pour le téléchargement de l\'application seront fournis ci-dessous."}',
             'value_pt' => '{"0":"PARIPESA oferece um aplicativo moderno para Android que proporciona acesso a jogos, apostas esportivas e promoções. O aplicativo funciona bem, sem bugs ou problemas técnicos, e seu design se adapta perfeitamente a qualquer dispositivo, independentemente do tamanho da tela. Todos os jogos e bônus continuam disponíveis para os usuários. PARIPESA é compatível com dispositivos Android, embora alguns requisitos técnicos precisem ser atendidos. Todos os detalhes necessários para o download do aplicativo serão fornecidos abaixo."}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 5
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
                'value_en' => '{"0":"How to install the PARIPESA app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación de PARIPESA en Android?"}',
                'value_fr' => '{"0":"Comment installer l\'application PARIPESA sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da PARIPESA no Android?"}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 6
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h4',
                'value_en' => '{"0":"Follow the link"}',
                'value_es' => '{"0":"Sigue el enlace"}',
                'value_fr' => '{"0":"Suivez le lien"}',
                'value_pt' => '{"0":"Siga o link"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 7
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"The first step is simply to follow the link to the PARIPESA betting site. Once on the homepage, you’ll be able to create an account, claim a generous welcome bonus, and gain access to some of the most competitive odds on the market."}',
                'value_es' => '{"0":"El primer paso es simplemente seguir el enlace al sitio de apuestas de PARIPESA. Una vez en la página principal, podrás crear una cuenta, aprovechar un generoso bono de bienvenida y acceder a algunas de las cuotas más competitivas del mercado."}',
                'value_fr' => '{"0":"La première étape consiste simplement à suivre le lien vers le site de paris de PARIPESA. Une fois sur la page d\'accueil, vous pourrez créer un compte, profiter d\'un généreux bonus de bienvenue et accéder à certaines des cotes les plus avantageuses du marché."}',
                'value_pt' => '{"0":"O primeiro passo é simplesmente seguir o link para o site de apostas da PARIPESA. Ao acessar a página inicial, você poderá criar uma conta, aproveitar um generoso bônus de boas-vindas e ter acesso a algumas das melhores odds do mercado."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 8
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h4',
                'value_en' => '{"0":"Download the APK file"}',
                'value_es' => '{"0":"Descarga el archivo APK"}',
                'value_fr' => '{"0":"Téléchargez le fichier APK"}',
                'value_pt' => '{"0":"Baixe o arquivo APK"}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 9
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"At the top of the PARIPESA mobile app review page, we’ve placed a link where you can quickly find the APK file to download to your mobile device. Just click the «Download» button."}',
                'value_es' => '{"0":"En la parte superior de la página de revisión de la aplicación móvil de PARIPESA, hemos colocado un enlace donde puedes encontrar rápidamente el archivo APK para descargarlo en tu dispositivo móvil. Solo haz clic en el botón «Descargar»."}',
                'value_fr' => '{"0":"En haut de la page de présentation de l’application mobile PARIPESA, nous avons placé un lien permettant de trouver rapidement le fichier APK à télécharger sur votre appareil mobile. Il vous suffit de cliquer sur le bouton « Télécharger »."}',
                'value_pt' => '{"0":"No topo da página de análise do aplicativo móvel da PARIPESA, colocamos um link onde você pode encontrar rapidamente o arquivo APK para baixar no seu dispositivo móvel. Basta clicar no botão «Baixar»."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 10
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h4',
                'value_en' => '{"0":"Set up your mobile device"}',
                'value_es' => '{"0":"Configura tu dispositivo móvil"}',
                'value_fr' => '{"0":"Configurez votre appareil mobile"}',
                'value_pt' => '{"0":"Configure seu dispositivo móvel"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 11
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"Open the «Settings» section, go to the «Security» menu, and check the box next to «Allow installation from unknown sources». Save the changes."}',
                'value_es' => '{"0":"Abre la sección «Configuración», ve al menú «Seguridad» y marca la casilla junto a «Permitir instalación de fuentes desconocidas». Guarda los cambios."}',
                'value_fr' => '{"0":"Ouvrez la section « Paramètres », allez dans le menu « Sécurité » et cochez la case « Autoriser l’installation de sources inconnues ». Enregistrez les modifications."}',
                'value_pt' => '{"0":"Abra a seção «Configurações», vá ao menu «Segurança» e marque a opção «Permitir instalação de fontes desconhecidas». Salve as alterações."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 12
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h4',
                'value_en' => '{"0":"Install the app"}',
                'value_es' => '{"0":"Instala la aplicación"}',
                'value_fr' => '{"0":"Installez l’application"}',
                'value_pt' => '{"0":"Instale o aplicativo"}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 13
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"Tap on the downloaded APK file and press the «Install» button. Wait a few minutes for the app to be installed on your mobile device."}',
                'value_es' => '{"0":"Toca el archivo APK descargado y pulsa el botón «Instalar». Espera unos minutos mientras la aplicación se instala en tu dispositivo móvil."}',
                'value_fr' => '{"0":"Appuyez sur le fichier APK téléchargé, puis sur le bouton « Installer ». Patientez quelques minutes pendant que l’application s’installe sur votre appareil mobile."}',
                'value_pt' => '{"0":"Toque no arquivo APK baixado e pressione o botão «Instalar». Aguarde alguns minutos enquanto o aplicativo é instalado no seu dispositivo móvel."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 14
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account"}',
                'value_es' => '{"0":"Verifica tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez votre compte"}',
                'value_pt' => '{"0":"Verifique sua conta"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 15
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"At the final step, you simply need to open the app and enter your PARIPESA account credentials."}',
             'value_es' => '{"0":"En el último paso, solo necesitas abrir la aplicación e ingresar tus credenciales de cuenta de PARIPESA."}',
             'value_fr' => '{"0":"À la dernière étape, il vous suffit d\'ouvrir l\'application et de saisir vos identifiants de compte PARIPESA."}',
             'value_pt' => '{"0":"Na etapa final, basta abrir o aplicativo e inserir suas credenciais de conta PARIPESA."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 16
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
                'value_en' => '{"0":"Download the PARIPESA mobile app on iOS"}',
                'value_es' => '{"0":"Descarga la aplicación móvil de PARIPESA en iOS"}',
                'value_fr' => '{"0":"Téléchargez l\'application mobile PARIPESA sur iOS"}',
                'value_pt' => '{"0":"Baixe o aplicativo móvel PARIPESA no iOS"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 17
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The PARIPESA mobile app is also available for iOS users. During testing, the app demonstrated excellent performance—fast loading, seamless operation, and convenient access to all games, sports betting, as well as provider bonuses and promotions. Below, you will find recommendations on how to install the mobile app on your device."}',
             'value_es' => '{"0":"La aplicación móvil PARIPESA también está disponible para usuarios de iOS. Durante las pruebas, la aplicación mostró un rendimiento excelente: carga rápida, funcionamiento sin problemas y acceso conveniente a todos los juegos, apuestas deportivas, así como a los bonos y promociones del proveedor. A continuación, encontrarás recomendaciones sobre cómo instalar la aplicación móvil en tu dispositivo."}',
             'value_fr' => '{"0":"L\'application mobile PARIPESA est également disponible pour les utilisateurs d\'iOS. Lors des tests, l\'application a démontré une excellente performance—chargement rapide, fonctionnement fluide et accès pratique à tous les jeux, paris sportifs, ainsi qu\'aux bonus et promotions du fournisseur. Ci-dessous, vous trouverez des recommandations pour installer l\'application mobile sur votre appareil."}',
             'value_pt' => '{"0":"O aplicativo móvel PARIPESA também está disponível para usuários de iOS. Durante os testes, o aplicativo apresentou um excelente desempenho—carregamento rápido, operação fluida e acesso conveniente a todos os jogos, apostas esportivas, além de bônus e promoções do provedor. Abaixo, você encontrará recomendações sobre como instalar o aplicativo móvel no seu dispositivo."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 18
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 19
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
                'value_en' => '{"0":"How to install the PARIPESA mobile app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación móvil de PARIPESA en iOS?"}',
                'value_fr' => '{"0":"Comment installer l\'application mobile PARIPESA sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo móvel da PARIPESA no iOS?"}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 20
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"Unlike installing the app on Android, the iOS version can be downloaded from the App Store. Next, we’ll explain how to do it."}',
                'value_es' => '{"0":"A diferencia de la instalación en Android, la aplicación para iOS se puede descargar desde la App Store. A continuación, te explicamos cómo hacerlo."}',
                'value_fr' => '{"0":"Contrairement à l’installation sur Android, l’application iOS peut être téléchargée depuis l’App Store. Nous allons maintenant vous expliquer comment procéder."}',
                'value_pt' => '{"0":"Ao contrário da instalação no Android, o aplicativo para iOS pode ser baixado pela App Store. A seguir, explicamos como fazer isso."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 21
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h4',
                'value_en' => '{"0":"Go to the PARIPESA homepage using the link"}',
                'value_es' => '{"0":"Ve a la página principal de PARIPESA utilizando el enlace"}',
                'value_fr' => '{"0":"Accédez à la page d’accueil de PARIPESA en utilisant le lien"}',
                'value_pt' => '{"0":"Acesse a página inicial da PARIPESA através do link"}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 22
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"Go to the PARIPESA homepage by clicking the «Download» button at the top of the page."}',
                'value_es' => '{"0":"Ve a la página principal de PARIPESA haciendo clic en el botón «Descargar» en la parte superior de la página."}',
                'value_fr' => '{"0":"Accédez à la page d’accueil de PARIPESA en cliquant sur le bouton «Télécharger» en haut de la page."}',
                'value_pt' => '{"0":"Acesse a página inicial da PARIPESA clicando no botão «Baixar» no topo da página."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 23
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h4',
                'value_en' => '{"0":"Set up your App Store account"}',
                'value_es' => '{"0":"Configura tu cuenta de App Store"}',
                'value_fr' => '{"0":"Configurez votre compte App Store"}',
                'value_pt' => '{"0":"Configure sua conta da App Store"}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 24
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"Open the App Store and go to your account by tapping on your name. Then, you need to change the country. To do this, select «Country/Region», then «Change Country or Region». Choose one of the following countries: Nigeria. Next, accept the user agreement terms. The next step is to fill in the address fields. We recommend entering the information as shown below:"}',
                'value_es' => '{"0":"Abre la App Store y ve a tu cuenta tocando tu nombre. Luego, debes cambiar el país. Para ello, selecciona «País/región» y después «Cambiar país o región». Elige uno de los siguientes países: Nigeria. A continuación, acepta los términos del acuerdo de usuario. El siguiente paso es completar los campos de dirección. Recomendamos rellenarlos con los datos que se muestran a continuación:"}',
                'value_fr' => '{"0":"Ouvrez l’App Store et accédez à votre compte en appuyant sur votre nom. Ensuite, vous devez changer de pays. Pour cela, sélectionnez « Pays/Région », puis « Changer de pays ou de région ». Choisissez l’un des pays suivants : Nigéria. Ensuite, acceptez les conditions d\'utilisation. L’étape suivante consiste à remplir les champs d’adresse. Nous vous recommandons d’utiliser les informations indiquées ci-dessous :"}',
                'value_pt' => '{"0":"Abra a App Store e acesse sua conta tocando no seu nome. Em seguida, você precisa mudar o país. Para isso, selecione «País/Região» e depois «Alterar país ou região». Escolha um dos seguintes países: Nigéria. Depois, aceite os termos do contrato de usuário. O próximo passo é preencher os campos de endereço. Recomendamos usar as informações mostradas abaixo:"}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 25
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'list_v2',
                'value_en' => '{"0":"Street: No 34 Adesanya ikeja",
                                "1":"City: Ikeja",
                                "2":"Postal code: 234",
                                "3":"Phone: 2348073560000"}',
                'value_es' => '{"0":"Calle: No 34 Adesanya ikeja",
                                "1":"Ciudad: Ikeja",
                                "2":"Código postal: 234",
                                "3":"Teléfono: 2348073560000"}',
                'value_fr' => '{"0":"Rue: No 34 Adesanya ikeja",
                                "1":"Ville: Ikeja",
                                "2":"Code postal: 234",
                                "3":"Téléphone: 2348073560000"}',
                'value_pt' => '{"0":"Rua: No 34 Adesanya ikeja",
                                "1":"Cidade: Ikeja",
                                "2":"Código postal: 234",
                                "3":"Telefone: 2348073560000"}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 26
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"From the list of payment methods, select «None» and click the «Next» button."}',
                'value_es' => '{"0":"En la lista de métodos de pago, selecciona «Ninguno» y pulsa el botón «Siguiente»."}',
                'value_fr' => '{"0":"Dans la liste des moyens de paiement, sélectionnez « Aucun » et appuyez sur le bouton « Suivant »."}',
                'value_pt' => '{"0":"Na lista de métodos de pagamento, selecione «Nenhum» e toque no botão «Avançar»."}',
             'order' => 26
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 27
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h4',
                'value_en' => '{"0":"Search for «PARIPESA» in the App Store or download it directly from the PARIPESA website."}',
                'value_es' => '{"0":"Busca «PARIPESA» en la App Store o descárgalo directamente desde el sitio web de PARIPESA."}',
                'value_fr' => '{"0":"Recherchez «PARIPESA» dans l\'App Store ou téléchargez-le directement depuis le site officiel de PARIPESA."}',
                'value_pt' => '{"0":"Procure por «PARIPESA» na App Store ou faça o download diretamente no site da PARIPESA."}',
             'order' => 27
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 28
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"You can download the PARIPESA mobile app for iOS by searching for it in the App Store or by scrolling to the bottom of the PARIPESA homepage and selecting the «iOS» tab in the «Apps» section."}',
                'value_es' => '{"0":"Puedes descargar la aplicación móvil de PARIPESA para iOS buscándola en la App Store o desplazándote hasta el final de la página principal de PARIPESA y seleccionando la pestaña «iOS» en la sección «Aplicaciones»."}',
                'value_fr' => '{"0":"Vous pouvez télécharger l\'application mobile PARIPESA pour iOS en la recherchant dans l\'App Store ou en faisant défiler la page d\'accueil de PARIPESA jusqu\'en bas et en sélectionnant l\'onglet «iOS» dans la section «Applications»."}',
                'value_pt' => '{"0":"Você pode baixar o aplicativo móvel da PARIPESA para iOS pesquisando na App Store ou rolando até o final da página inicial da PARIPESA e selecionando a aba «iOS» na seção «Aplicativos»."}',
             'order' => 28
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 29
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account and make your first deposit"}',
                'value_es' => '{"0":"Verifica tu cuenta y realiza tu primer depósito"}',
                'value_fr' => '{"0":"Vérifiez votre compte et effectuez votre premier dépôt"}',
                'value_pt' => '{"0":"Verifique sua conta e faça seu primeiro depósito"}',
             'order' => 29
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 30
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
                'value_en' => '{"0":"We recommend verifying your account as soon as possible, as it may sometimes be a requirement for making a deposit."}',
                'value_es' => '{"0":"Te recomendamos verificar tu cuenta lo antes posible, ya que en algunos casos puede ser un requisito para realizar un depósito."}',
                'value_fr' => '{"0":"Nous vous conseillons de vérifier votre compte dès que possible, car cela peut parfois être nécessaire pour effectuer un dépôt."}',
                'value_pt' => '{"0":"Recomendamos que verifique sua conta o quanto antes, pois em alguns casos isso pode ser necessário para realizar um depósito."}',
             'order' => 30
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 31
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
                'value_en' => '{"0":"The features of the PARIPESA mobile app"}',
                'value_es' => '{"0":"Las funciones de la aplicación móvil de PARIPESA"}',
                'value_fr' => '{"0":"Les fonctionnalités de l’application mobile PARIPESA"}',
                'value_pt' => '{"0":"Os recursos do aplicativo móvel da PARIPESA"}',
             'order' => 31
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 32
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Using the PARIPESA mobile app provides users with the following advantages:"}',
             'value_es' => '{"0":"El uso de la aplicación móvil PARIPESA ofrece a los usuarios las siguientes ventajas:"}',
             'value_fr' => '{"0":"L\'utilisation de l\'application mobile PARIPESA offre aux utilisateurs les avantages suivants :"}',
             'value_pt' => '{"0":"O uso do aplicativo móvel PARIPESA oferece aos usuários as seguintes vantagens:"}',
             'order' => 32
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 33
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'list_v2',
             'value_en' => '{"0":"The ability to bet on sports from anywhere in the world",
                             "1":"A wide selection of betting and casino games",
                             "2":"An adaptive interface that works well on different types of devices",
                             "3":"Simple and fast installation process of the PARIPESA APK",
                             "4":"A variety of deposit and withdrawal methods, including popular e-wallets and bank transfers",
                             "5":"Generous PARIPESA bonus for all categories of players",
                             "6":"Quick access to current news and information about upcoming games",
                             "7":"High-quality software optimization, smooth and fast operation of all functions"}',
             'value_es' => '{"0":"La posibilidad de apostar en deportes desde cualquier parte del mundo",
                             "1":"Una amplia selección de apuestas y juegos de casino",
                             "2":"Una interfaz adaptable que funciona bien en diferentes tipos de dispositivos",
                             "3":"Proceso de instalación del archivo APK de PARIPESA simple y rápido",
                             "4":"Diversos métodos de depósito y retiro, incluidas billeteras electrónicas populares y transferencias bancarias",
                             "5":"Bonificación generosa de PARIPESA para todas las categorías de jugadores",
                             "6":"Acceso rápido a noticias actuales e información sobre los próximos partidos",
                             "7":"Optimización de software de alta calidad, funcionamiento fluido y rápido de todas las funciones"}',
             'value_fr' => '{"0":"La possibilité de parier sur le sport depuis n\'importe où dans le monde",
                             "1":"Un large choix de paris et de jeux de casino",
                             "2":"Une interface adaptative qui fonctionne bien sur différents types d\'appareils",
                             "3":"Un processus d\'installation simple et rapide du fichier APK PARIPESA",
                             "4":"Une variété de méthodes de dépôt et de retrait, y compris les portefeuilles électroniques populaires et les virements bancaires",
                             "5":"Un bonus généreux de PARIPESA pour toutes les catégories de joueurs",
                             "6":"Un accès rapide aux actualités et informations sur les jeux à venir",
                             "7":"Une optimisation logicielle de qualité, avec un fonctionnement fluide et rapide de toutes les fonctionnalités"}',
             'value_pt' => '{"0":"A capacidade de apostar em esportes de qualquer lugar do mundo",
                             "1":"Uma ampla seleção de apostas e jogos de cassino",
                             "2":"Uma interface adaptável que funciona bem em diferentes tipos de dispositivos",
                             "3":"Processo de instalação simples e rápido do APK do PARIPESA",
                             "4":"Vários métodos de depósito e saque, incluindo carteiras digitais populares e transferências bancárias",
                             "5":"Bônus generoso do PARIPESA para todas as categorias de jogadores",
                             "6":"Acesso rápido a notícias atuais e informações sobre os jogos futuros",
                             "7":"Otimização de software de alta qualidade, funcionamento suave e rápido de todas as funções"}',
             'order' => 33
            ]
        );
    }
}
