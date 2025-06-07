<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMelBetMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 1
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Review on MelBet betting mobile app"}',
             'value_es' => '{"0":"Reseña de la aplicación móvil de apuestas de MelBet"}',
             'value_fr' => '{"0":"Avis sur l’application mobile de paris MelBet"}',
             'value_pt' => '{"0":"Análise do aplicativo móvel de apostas da MelBet"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 2
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The MelBet app is a favorite among many bettors. Find out how to download and install the mobile app right now!"}',
             'value_es' => '{"0":"La aplicación de MelBet es la favorita de muchos apostadores. ¡Descubre cómo descargar e instalar la aplicación móvil ahora mismo!"}',
             'value_fr' => '{"0":"L\'application MelBet est la préférée de nombreux parieurs. Découvrez comment télécharger et installer l\'application mobile dès maintenant !"}',
             'value_pt' => '{"0":"O aplicativo da MelBet é o favorito de muitos apostadores. Saiba como baixar e instalar o aplicativo móvel agora mesmo!"}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 3
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
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
            ['key' => 'melbet',
             'order' => 4
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
                'value_en' => '{"0":"Download MelBet on Android"}',
                'value_es' => '{"0":"Descarga MelBet en Android"}',
                'value_fr' => '{"0":"Téléchargez MelBet sur Android"}',
                'value_pt' => '{"0":"Baixe o MelBet no Android"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 5
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"To download MelBet on Android, you should use the official website of the bookmaker, where the installation file is distributed. Due to restrictions on gambling software imposed by Google, it is currently not possible to download and install the MelBet app via the Play Market."}',
             'value_es' => '{"0":"Para descargar MelBet en Android, debes utilizar el sitio web oficial de la casa de apuestas, donde se distribuye el archivo de instalación. Debido a las restricciones impuestas por Google sobre software de apuestas, actualmente no es posible descargar e instalar la aplicación de MelBet a través de Play Market."}',
             'value_fr' => '{"0":"Pour télécharger MelBet sur Android, vous devez utiliser le site officiel du bookmaker, où le fichier d\'installation est disponible. En raison des restrictions imposées par Google sur les logiciels de jeux d\'argent, il n’est actuellement pas possible de télécharger et d’installer l’application MelBet via le Play Market."}',
             'value_pt' => '{"0":"Para baixar o MelBet no Android, você deve usar o site oficial da casa de apostas, onde o arquivo de instalação é disponibilizado. Devido às restrições da Google quanto à distribuição de softwares de apostas, atualmente não é possível baixar e instalar o aplicativo da MelBet pela Play Store."}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 5
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Therefore, to use the app, you need to download the MelBet APK installer to your smartphone or tablet. The download is carried out from the official MelBet website, where a direct link is available in the mobile section."}',
             'value_es' => '{"0":"Por lo tanto, para usar la aplicación, debes descargar el instalador APK de MelBet en tu smartphone o tablet. La descarga se realiza desde el sitio oficial de MelBet, donde hay un enlace directo en la sección móvil."}',
             'value_fr' => '{"0":"Ainsi, pour utiliser l’application, vous devez télécharger le fichier APK de MelBet sur votre smartphone ou tablette. Le téléchargement se fait depuis le site officiel de MelBet, où un lien direct est disponible dans la section mobile."}',
             'value_pt' => '{"0":"Portanto, para usar o aplicativo, é necessário baixar o instalador APK da MelBet no seu smartphone ou tablet. O download é feito a partir do site oficial da MelBet, onde há um link direto na seção móvel."}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 6
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
                'value_en' => '{"0":"How to install the MelBet app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación de MelBet en Android?"}',
                'value_fr' => '{"0":"Comment installer l\'application MelBet sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da MelBet no Android?"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 7
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
                'value_en' => '{"0":"Follow the link"}',
                'value_es' => '{"0":"Sigue el enlace"}',
                'value_fr' => '{"0":"Suivez le lien"}',
                'value_pt' => '{"0":"Siga o link"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 8
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"The first step is simply to follow the link to the MelBet betting site. Once on the homepage, you’ll be able to create an account, claim a generous welcome bonus, and gain access to some of the most competitive odds on the market."}',
                'value_es' => '{"0":"El primer paso es simplemente seguir el enlace al sitio de apuestas de MelBet. Una vez en la página principal, podrás crear una cuenta, aprovechar un generoso bono de bienvenida y acceder a algunas de las cuotas más competitivas del mercado."}',
                'value_fr' => '{"0":"La première étape consiste simplement à suivre le lien vers le site de paris de MelBet. Une fois sur la page d\'accueil, vous pourrez créer un compte, profiter d\'un généreux bonus de bienvenue et accéder à certaines des cotes les plus avantageuses du marché."}',
                'value_pt' => '{"0":"O primeiro passo é simplesmente seguir o link para o site de apostas da MelBet. Ao acessar a página inicial, você poderá criar uma conta, aproveitar um generoso bônus de boas-vindas e ter acesso a algumas das melhores odds do mercado."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 11
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
             'value_en' => '{"0":"Download the APK file"}',
             'value_es' => '{"0":"Descarga el archivo APK"}',
             'value_fr' => '{"0":"Téléchargez le fichier APK"}',
             'value_pt' => '{"0":"Baixe o arquivo APK"}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 12
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"At the top of the MelBet mobile app review page, we’ve placed a link where you can quickly find the APK file to download to your mobile device. Just click the «Download» button."}',
             'value_es' => '{"0":"En la parte superior de la página de revisión de la aplicación móvil de MelBet, hemos colocado un enlace donde puedes encontrar rápidamente el archivo APK para descargarlo en tu dispositivo móvil. Solo haz clic en el botón «Descargar»."}',
             'value_fr' => '{"0":"En haut de la page de présentation de l’application mobile MelBet, nous avons placé un lien permettant de trouver rapidement le fichier APK à télécharger sur votre appareil mobile. Il vous suffit de cliquer sur le bouton « Télécharger »."}',
             'value_pt' => '{"0":"No topo da página de análise do aplicativo móvel da MelBet, colocamos um link onde você pode encontrar rapidamente o arquivo APK para baixar no seu dispositivo móvel. Basta clicar no botão «Baixar»."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 13
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
             'value_en' => '{"0":"Set up your mobile device"}',
             'value_es' => '{"0":"Configura tu dispositivo móvil"}',
             'value_fr' => '{"0":"Configurez votre appareil mobile"}',
             'value_pt' => '{"0":"Configure seu dispositivo móvel"}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 14
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Open the «Settings» section, go to the «Security» menu, and check the box next to «Allow installation from unknown sources». Save the changes."}',
             'value_es' => '{"0":"Abre la sección «Configuración», ve al menú «Seguridad» y marca la casilla junto a «Permitir instalación de fuentes desconocidas». Guarda los cambios."}',
             'value_fr' => '{"0":"Ouvrez la section « Paramètres », allez dans le menu « Sécurité » et cochez la case « Autoriser l’installation de sources inconnues ». Enregistrez les modifications."}',
             'value_pt' => '{"0":"Abra a seção «Configurações», vá ao menu «Segurança» e marque a opção «Permitir instalação de fontes desconhecidas». Salve as alterações."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 15
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
             'value_en' => '{"0":"Install the app"}',
             'value_es' => '{"0":"Instala la aplicación"}',
             'value_fr' => '{"0":"Installez l’application"}',
             'value_pt' => '{"0":"Instale o aplicativo"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 16
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Tap on the downloaded APK file and press the «Install» button. Wait a few minutes for the app to be installed on your mobile device."}',
             'value_es' => '{"0":"Toca el archivo APK descargado y pulsa el botón «Instalar». Espera unos minutos mientras la aplicación se instala en tu dispositivo móvil."}',
             'value_fr' => '{"0":"Appuyez sur le fichier APK téléchargé, puis sur le bouton « Installer ». Patientez quelques minutes pendant que l’application s’installe sur votre appareil mobile."}',
             'value_pt' => '{"0":"Toque no arquivo APK baixado e pressione o botão «Instalar». Aguarde alguns minutos enquanto o aplicativo é instalado no seu dispositivo móvel."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 17
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account"}',
                'value_es' => '{"0":"Verifica tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez votre compte"}',
                'value_pt' => '{"0":"Verifique sua conta"}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 18
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"At the final step, log into your new account through the mobile app. In the «My Account» section, you can complete verification by providing a valid ID and proof of residence."}',
                'value_es' => '{"0":"En el paso final, inicia sesión en tu nueva cuenta a través de la aplicación móvil. En la sección «Mi cuenta», podrás completar la verificación proporcionando un documento de identidad válido y un comprobante de domicilio."}',
                'value_fr' => '{"0":"À l\'étape finale, connectez-vous à votre nouveau compte via l\'application mobile. Dans la section «Mon compte», vous pourrez compléter la vérification en fournissant une pièce d\'identité valide et un justificatif de domicile."}',
                'value_pt' => '{"0":"Na etapa final, faça login na sua nova conta pelo aplicativo móvel. Na seção «Minha Conta», você poderá concluir a verificação fornecendo um documento de identidade válido e um comprovante de residência."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 19
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
                'value_en' => '{"0":"Download the MelBet mobile app on iOS"}',
                'value_es' => '{"0":"Descarga la aplicación móvil de MelBet en iOS"}',
                'value_fr' => '{"0":"Téléchargez l\'application mobile MelBet sur iOS"}',
                'value_pt' => '{"0":"Baixe o aplicativo móvel MelBet no iOS"}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 20
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"iPhone and iPad users can also enjoy everything MelBet has to offer. Below you\'ll find a step-by-step guide on how to install the app on your device."}',
                'value_es' => '{"0":"Los usuarios de iPhone y iPad también pueden disfrutar de todo lo que ofrece MelBet. A continuación, encontrarás una guía paso a paso para instalar la aplicación en tu dispositivo."}',
                'value_fr' => '{"0":"Les utilisateurs d’iPhone et d’iPad peuvent eux aussi profiter de toutes les fonctionnalités de MelBet. Vous trouverez ci-dessous un guide étape par étape pour installer l’application sur votre appareil."}',
                'value_pt' => '{"0":"Os usuários de iPhone e iPad também podem aproveitar todos os recursos do MelBet. Abaixo, você encontrará um guia passo a passo para instalar o aplicativo no seu dispositivo."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 21
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
             'value_en' => '{"0":"img-1.jpg"}',
             'value_es' => '{"0":"img-1.jpg"}',
             'value_fr' => '{"0":"img-1.jpg"}',
             'value_pt' => '{"0":"img-1.jpg"}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 22
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
                'value_en' => '{"0":"How to install the MelBet mobile app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación móvil de MelBet en iOS?"}',
                'value_fr' => '{"0":"Comment installer l\'application mobile MelBet sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo móvel da MelBet no iOS?"}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 23
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Unlike installing the app on Android, the iOS version can be downloaded from the App Store. Next, we’ll explain how to do it."}',
             'value_es' => '{"0":"A diferencia de la instalación en Android, la aplicación para iOS se puede descargar desde la App Store. A continuación, te explicamos cómo hacerlo."}',
             'value_fr' => '{"0":"Contrairement à l’installation sur Android, l’application iOS peut être téléchargée depuis l’App Store. Nous allons maintenant vous expliquer comment procéder."}',
             'value_pt' => '{"0":"Ao contrário da instalação no Android, o aplicativo para iOS pode ser baixado pela App Store. A seguir, explicamos como fazer isso."}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 24
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
                'value_en' => '{"0":"Go to the MelBet homepage using the link"}',
                'value_es' => '{"0":"Ve a la página principal de MelBet utilizando el enlace"}',
                'value_fr' => '{"0":"Accédez à la page d’accueil de MelBet en utilisant le lien"}',
                'value_pt' => '{"0":"Acesse a página inicial da MelBet através do link"}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 25
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"Go to the MelBet homepage by clicking the «Download» button at the top of the page."}',
                'value_es' => '{"0":"Ve a la página principal de MelBet haciendo clic en el botón «Descargar» en la parte superior de la página."}',
                'value_fr' => '{"0":"Accédez à la page d’accueil de MelBet en cliquant sur le bouton «Télécharger» en haut de la page."}',
                'value_pt' => '{"0":"Acesse a página inicial da MelBet clicando no botão «Baixar» no topo da página."}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 26
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
                'value_en' => '{"0":"Fill in the sign-up form"}',
                'value_es' => '{"0":"Rellena el formulario de registro"}',
                'value_fr' => '{"0":"Remplissez le formulaire d’inscription"}',
                'value_pt' => '{"0":"Preencha o formulário de registro"}',
             'order' => 26
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 27
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"Also, double-check that all your personal details are filled in correctly."}',
                'value_es' => '{"0":"También verifica que todos tus datos personales estén correctamente ingresados."}',
                'value_fr' => '{"0":"Vérifiez également que toutes vos informations personnelles sont correctement renseignées."}',
                'value_pt' => '{"0":"Verifique também se todos os seus dados pessoais foram preenchidos corretamente."}',
             'order' => 27
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
                'order' => 28
            ],
            ['key' => 'melbet',
                'bookmaker_id' => 2,
                'component' => 'h4',
                'value_en' => '{"0":"Set up your App Store account"}',
                'value_es' => '{"0":"Configura tu cuenta de App Store"}',
                'value_fr' => '{"0":"Configurez votre compte App Store"}',
                'value_pt' => '{"0":"Configure sua conta da App Store"}',
                'order' => 28
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
                'order' => 29
            ],
            ['key' => 'melbet',
                'bookmaker_id' => 2,
                'component' => 'p',
                'value_en' => '{"0":"Open the App Store and go to your account by tapping on your name. Then, you need to change the country. To do this, select «Country/Region», then «Change Country or Region». Choose one of the following countries: Senegal, India, Vietnam, or Mongolia. Next, accept the user agreement terms. The next step is to fill in the address fields. We recommend entering the information as shown below:"}',
                'value_es' => '{"0":"Abre la App Store y ve a tu cuenta tocando tu nombre. Luego, debes cambiar el país. Para ello, selecciona «País/región» y después «Cambiar país o región». Elige uno de los siguientes países: Senegal, India, Vietnam o Mongolia. A continuación, acepta los términos del acuerdo de usuario. El siguiente paso es completar los campos de dirección. Recomendamos rellenarlos con los datos que se muestran a continuación:"}',
                'value_fr' => '{"0":"Ouvrez l’App Store et accédez à votre compte en appuyant sur votre nom. Ensuite, vous devez changer de pays. Pour cela, sélectionnez « Pays/Région », puis « Changer de pays ou de région ». Choisissez l’un des pays suivants : Sénégal, Inde, Vietnam ou Mongolie. Ensuite, acceptez les conditions d\'utilisation. L’étape suivante consiste à remplir les champs d’adresse. Nous vous recommandons d’utiliser les informations indiquées ci-dessous :"}',
                'value_pt' => '{"0":"Abra a App Store e acesse sua conta tocando no seu nome. Em seguida, você precisa mudar o país. Para isso, selecione «País/Região» e depois «Alterar país ou região». Escolha um dos seguintes países: Senegal, Índia, Vietnã ou Mongólia. Depois, aceite os termos do contrato de usuário. O próximo passo é preencher os campos de endereço. Recomendamos usar as informações mostradas abaixo:"}',
                'order' => 29
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 30
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'list_v2',
                'value_en' => '{"0":"Street: Avenue Cheikh Anta Diop",
                                "1":"City: Dakar",
                                "2":"Postal code: 12300",
                                "3":"Phone: +221331234567"}',
                'value_es' => '{"0":"Calle: Avenue Cheikh Anta Diop",
                                "1":"Ciudad: Dakar",
                                "2":"Código postal: 12300",
                                "3":"Teléfono: +221331234567"}',
                'value_fr' => '{"0":"Rue: Avenue Cheikh Anta Diop",
                                "1":"Ville: Dakar",
                                "2":"Code postal: 12300",
                                "3":"Téléphone: +221331234567"}',
                'value_pt' => '{"0":"Rua: Avenue Cheikh Anta Diop",
                                "1":"Cidade: Dakar",
                                "2":"Código postal: 12300",
                                "3":"Telefone: +221331234567"}',
             'order' => 30
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 31
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"From the list of payment methods, select «None» and click the «Next» button."}',
                'value_es' => '{"0":"En la lista de métodos de pago, selecciona «Ninguno» y pulsa el botón «Siguiente»."}',
                'value_fr' => '{"0":"Dans la liste des moyens de paiement, sélectionnez « Aucun » et appuyez sur le bouton « Suivant »."}',
                'value_pt' => '{"0":"Na lista de métodos de pagamento, selecione «Nenhum» e toque no botão «Avançar»."}',
             'order' => 31
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 32
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
                'value_en' => '{"0":"Search for «MelBet» in the App Store or download it directly from the MelBet website."}',
                'value_es' => '{"0":"Busca «MelBet» en la App Store o descárgalo directamente desde el sitio web de MelBet."}',
                'value_fr' => '{"0":"Recherchez «MelBet» dans l\'App Store ou téléchargez-le directement depuis le site officiel de MelBet."}',
                'value_pt' => '{"0":"Procure por «MelBet» na App Store ou faça o download diretamente no site da MelBet."}',
             'order' => 32
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 33
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"You can download the MelBet mobile app for iOS by searching for it in the App Store or by scrolling to the bottom of the MelBet homepage and selecting the «iOS» tab in the «Apps» section."}',
                'value_es' => '{"0":"Puedes descargar la aplicación móvil de MelBet para iOS buscándola en la App Store o desplazándote hasta el final de la página principal de MelBet y seleccionando la pestaña «iOS» en la sección «Aplicaciones»."}',
                'value_fr' => '{"0":"Vous pouvez télécharger l\'application mobile MelBet pour iOS en la recherchant dans l\'App Store ou en faisant défiler la page d\'accueil de MelBet jusqu\'en bas et en sélectionnant l\'onglet «iOS» dans la section «Applications»."}',
                'value_pt' => '{"0":"Você pode baixar o aplicativo móvel da MelBet para iOS pesquisando na App Store ou rolando até o final da página inicial da MelBet e selecionando a aba «iOS» na seção «Aplicativos»."}',
             'order' => 33
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 34
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account and make your first deposit"}',
                'value_es' => '{"0":"Verifica tu cuenta y realiza tu primer depósito"}',
                'value_fr' => '{"0":"Vérifiez votre compte et effectuez votre premier dépôt"}',
                'value_pt' => '{"0":"Verifique sua conta e faça seu primeiro depósito"}',
             'order' => 34
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 35
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"We recommend verifying your account as soon as possible, as it may sometimes be a requirement for making a deposit."}',
                'value_es' => '{"0":"Te recomendamos verificar tu cuenta lo antes posible, ya que en algunos casos puede ser un requisito para realizar un depósito."}',
                'value_fr' => '{"0":"Nous vous conseillons de vérifier votre compte dès que possible, car cela peut parfois être nécessaire pour effectuer un dépôt."}',
                'value_pt' => '{"0":"Recomendamos que verifique sua conta o quanto antes, pois em alguns casos isso pode ser necessário para realizar um depósito."}',
             'order' => 35
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 36
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
                'value_en' => '{"0":"The features of the MelBet mobile app"}',
                'value_es' => '{"0":"Las funciones de la aplicación móvil de MelBet"}',
                'value_fr' => '{"0":"Les fonctionnalités de l’application mobile MelBet"}',
                'value_pt' => '{"0":"Os recursos do aplicativo móvel da MelBet"}',
             'order' => 36
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 37
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The MelBet application has been present on the market of betting apps for years, and has managed to get numerous features that some of the betting apps lack. For example, the MelBet app has:"}',
             'value_es' => '{"0":"La aplicación de MelBet ha estado presente en el mercado de las apps de apuestas durante años y ha logrado incorporar numerosas funciones que otras aplicaciones no tienen. Por ejemplo, la app de MelBet ofrece:"}',
             'value_fr' => '{"0":"L’application MelBet est présente sur le marché des applications de paris depuis des années et a réussi à intégrer de nombreuses fonctionnalités que certaines autres applications n’ont pas. Par exemple, l’application MelBet propose :"}',
             'value_pt' => '{"0":"O aplicativo da MelBet está presente no mercado de apps de apostas há anos e conseguiu reunir diversos recursos que alguns concorrentes ainda não oferecem. Por exemplo, o app da MelBet possui:"}',
             'order' => 37
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 38
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'list_v2',
             'value_en' => '{"0":"Low battery consumption",
                             "1":"Push notifications",
                             "2":"Auto updating",
                             "3":"Quick access to bet history",
                             "4":"Wide selection of LIVE events"}',
             'value_es' => '{"0":"Bajo consumo de batería",
                             "1":"Notificaciones push",
                             "2":"Actualización automática",
                             "3":"Acceso rápido al historial de apuestas",
                             "4":"Gran selección de eventos en vivo"}',
             'value_fr' => '{"0":"Faible consommation de batterie",
                             "1":"Notifications push",
                             "2":"Mise à jour automatique",
                             "3":"Accès rapide à l’historique des paris",
                             "4":"Large sélection d’événements en direct"}',
             'value_pt' => '{"0":"Baixo consumo de bateria",
                             "1":"Notificações push",
                             "2":"Atualização automática",
                             "3":"Acesso rápido ao histórico de apostas",
                             "4":"Grande variedade de eventos AO VIVO"}',
             'order' => 38
            ]
        );
    }
}
