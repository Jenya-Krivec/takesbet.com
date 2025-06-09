<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1winMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 1
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Review on 1win betting mobile app"}',
             'value_es' => '{"0":"Reseña de la aplicación móvil de apuestas de 1win"}',
             'value_fr' => '{"0":"Avis sur l’application mobile de paris 1win"}',
             'value_pt' => '{"0":"Análise do aplicativo móvel de apostas da 1win"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 2
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win is available worldwide, and you can play or place bets on both your computer and mobile device."}',
             'value_es' => '{"0":"1win está disponible en todo el mundo, y puedes jugar o apostar tanto desde tu ordenador como desde tu dispositivo móvil."}',
             'value_fr' => '{"0":"1win est disponible partout dans le monde, et vous pouvez jouer ou parier depuis votre ordinateur ou votre appareil mobile."}',
             'value_pt' => '{"0":"O 1win está disponível em todo o mundo, e você pode jogar ou apostar tanto no computador quanto no dispositivo móvel."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 3
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Convenient and user-friendly interface",
                                 "1":"Wide selection of sports and esports events",
                                 "2":"Attractive bonuses and promotions"},
                             "1":
                                {"0":"Not always stable performance with poor internet connection",
                                 "1":"Withdrawal restrictions in some countries"}
                             }',
             'value_es' => '{"0":
                                {"0":"Interfaz cómoda e intuitiva",
                                 "1":"Amplia selección de eventos deportivos y de esports",
                                 "2":"Bonos y promociones atractivos"},
                             "1":
                                {"0":"Funcionamiento no siempre estable con una mala conexión a internet",
                                 "1":"Restricciones de retiro en algunos países"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Interface pratique et intuitive",
                                 "1":"Large choix d’événements sportifs et e-sportifs",
                                 "2":"Bonus et promotions avantageux"},
                             "1":
                                {"0":"Fonctionnement parfois instable avec une mauvaise connexion Internet",
                                 "1":"Restrictions de retrait dans certains pays"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Interface conveniente e intuitiva",
                                 "1":"Ampla variedade de eventos esportivos e de eSports",
                                 "2":"Bônus e promoções atrativos"},
                             "1":
                                {"0":"Funcionamento nem sempre estável com conexão de internet ruim",
                                 "1":"Restrições de saque em alguns países"}
                             }',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 4
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
                'value_en' => '{"0":"Download 1win on Android"}',
                'value_es' => '{"0":"Descarga 1win en Android"}',
                'value_fr' => '{"0":"Téléchargez 1win sur Android"}',
                'value_pt' => '{"0":"Baixe o 1win no Android"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 5
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"To install the 1win mobile app, you need to visit the official 1win website and download the APK file to your device."}',
             'value_es' => '{"0":"Para instalar la aplicación móvil de 1win, debes acceder al sitio web oficial de 1win y descargar el archivo APK en tu dispositivo."}',
             'value_fr' => '{"0":"Pour installer l\'application mobile 1win, vous devez vous rendre sur le site officiel de 1win et télécharger le fichier APK sur votre appareil."}',
             'value_pt' => '{"0":"Para instalar o aplicativo móvel da 1win, você precisa acessar o site oficial da 1win e baixar o arquivo APK para o seu dispositivo."}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 6
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
                'value_en' => '{"0":"How to install the 1win app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación de 1win en Android?"}',
                'value_fr' => '{"0":"Comment installer l\'application 1win sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da 1win no Android?"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 7
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"It will only take a few minutes to start using the 1win mobile app. Here are the steps you need to follow:"}',
             'value_es' => '{"0":"Solo te tomará unos minutos empezar a usar la aplicación móvil de 1win. Estos son los pasos que debes seguir:"}',
             'value_fr' => '{"0":"Il ne vous faudra que quelques minutes pour commencer à utiliser l\'application mobile de 1win. Voici les étapes à suivre :"}',
             'value_pt' => '{"0":"Você só precisará de alguns minutos para começar a usar o aplicativo móvel da 1win. Veja os passos que você deve seguir:"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 8
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h4',
                'value_en' => '{"0":"Follow the link"}',
                'value_es' => '{"0":"Sigue el enlace"}',
                'value_fr' => '{"0":"Suivez le lien"}',
                'value_pt' => '{"0":"Siga o link"}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 9
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Just follow the link to the 1win betting site provided at the top of this review."}',
             'value_es' => '{"0":"Solo haz clic en el enlace al sitio de apuestas de 1win que se encuentra en la parte superior de esta reseña."}',
             'value_fr' => '{"0":"Il vous suffit de cliquer sur le lien vers le site de paris 1win situé en haut de cet avis."}',
             'value_pt' => '{"0":"Basta clicar no link para o site de apostas da 1win que está no topo desta análise."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 10
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h4',
                'value_en' => '{"0":"Download the APK file"}',
                'value_es' => '{"0":"Descarga el archivo APK"}',
                'value_fr' => '{"0":"Téléchargez le fichier APK"}',
                'value_pt' => '{"0":"Baixe o arquivo APK"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 11
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"In the bottom right corner of the 1win website, there is a link to the page where you can download the mobile app. Go to that page and download the APK file."}',
             'value_es' => '{"0":"En la esquina inferior derecha del sitio web de 1win hay un enlace a la página donde puedes descargar la aplicación móvil. Ve a esa página y descarga el archivo APK."}',
             'value_fr' => '{"0":"Dans le coin inférieur droit du site de 1win, il y a un lien vers la page où vous pouvez télécharger l\'application mobile. Rendez-vous sur cette page et téléchargez le fichier APK."}',
             'value_pt' => '{"0":"No canto inferior direito do site da 1win, há um link para a página onde você pode baixar o aplicativo móvel. Acesse essa página e baixe o arquivo APK."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 12
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h4',
                'value_en' => '{"0":"Set up your mobile device"}',
                'value_es' => '{"0":"Configura tu dispositivo móvil"}',
                'value_fr' => '{"0":"Configurez votre appareil mobile"}',
                'value_pt' => '{"0":"Configure seu dispositivo móvel"}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 13
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"Open the «Settings» section, go to the «Security» menu, and check the box next to «Allow installation from unknown sources». Save the changes."}',
                'value_es' => '{"0":"Abre la sección «Configuración», ve al menú «Seguridad» y marca la casilla junto a «Permitir instalación de fuentes desconocidas». Guarda los cambios."}',
                'value_fr' => '{"0":"Ouvrez la section « Paramètres », allez dans le menu « Sécurité » et cochez la case « Autoriser l’installation de sources inconnues ». Enregistrez les modifications."}',
                'value_pt' => '{"0":"Abra a seção «Configurações», vá ao menu «Segurança» e marque a opção «Permitir instalação de fontes desconhecidas». Salve as alterações."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 14
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
                'value_en' => '{"0":"Install the app"}',
                'value_es' => '{"0":"Instala la aplicación"}',
                'value_fr' => '{"0":"Installez l’application"}',
                'value_pt' => '{"0":"Instale o aplicativo"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 15
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Tap the downloaded file to start installing the mobile app. Wait a couple of minutes, and the app will be installed."}',
             'value_es' => '{"0":"Pulsa el archivo descargado para comenzar la instalación de la aplicación móvil. Espera unos minutos y la aplicación se instalará."}',
             'value_fr' => '{"0":"Appuyez sur le fichier téléchargé pour commencer l\'installation de l\'application mobile. Patientez quelques minutes et l\'application sera installée."}',
             'value_pt' => '{"0":"Toque no arquivo baixado para iniciar a instalação do aplicativo móvel. Aguarde alguns minutos e o app será instalado."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 16
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account"}',
                'value_es' => '{"0":"Verifica tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez votre compte"}',
                'value_pt' => '{"0":"Verifique sua conta"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 17
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"All that\'s left is to set up your mobile app. To do this, log in with your existing 1win account or go through the simple registration process to create a new one. Top up your balance and enjoy the game."}',
             'value_es' => '{"0":"Solo queda configurar la aplicación móvil. Para ello, inicia sesión con tu cuenta existente de 1win o completa el sencillo proceso de registro para nuevos usuarios. Recarga tu saldo y disfruta jugando."}',
             'value_fr' => '{"0":"Il ne vous reste plus qu’à configurer votre application mobile. Connectez-vous avec votre compte 1win existant ou suivez la procédure simple d’inscription pour les nouveaux utilisateurs. Approvisionnez votre compte et profitez du jeu."}',
             'value_pt' => '{"0":"Agora só falta configurar o aplicativo móvel. Faça login com sua conta existente da 1win ou realize o simples processo de registro para novos usuários. Deposite fundos e divirta-se jogando."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 18
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
                'value_en' => '{"0":"Download the 1win mobile app on iOS"}',
                'value_es' => '{"0":"Descarga la aplicación móvil de 1win en iOS"}',
                'value_fr' => '{"0":"Téléchargez l\'application mobile 1win sur iOS"}',
                'value_pt' => '{"0":"Baixe o aplicativo móvel 1win no iOS"}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 19
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"iPhone and iPad users can also enjoy everything 1win has to offer. Below you\'ll find a step-by-step guide on how to install the app on your device."}',
                'value_es' => '{"0":"Los usuarios de iPhone y iPad también pueden disfrutar de todo lo que ofrece 1win. A continuación, encontrarás una guía paso a paso para instalar la aplicación en tu dispositivo."}',
                'value_fr' => '{"0":"Les utilisateurs d’iPhone et d’iPad peuvent eux aussi profiter de toutes les fonctionnalités de 1win. Vous trouverez ci-dessous un guide étape par étape pour installer l’application sur votre appareil."}',
                'value_pt' => '{"0":"Os usuários de iPhone e iPad também podem aproveitar todos os recursos do 1win. Abaixo, você encontrará um guia passo a passo para instalar o aplicativo no seu dispositivo."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 20
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
             'value_en' => '{"0":"img-1.jpg"}',
             'value_es' => '{"0":"img-1.jpg"}',
             'value_fr' => '{"0":"img-1.jpg"}',
             'value_pt' => '{"0":"img-1.jpg"}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 21
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
                'value_en' => '{"0":"How to install the 1win mobile app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación móvil de 1win en iOS?"}',
                'value_fr' => '{"0":"Comment installer l\'application mobile 1win sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo móvel da 1win no iOS?"}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 22
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Unfortunately, the 1win mobile app is currently not available on the App Store. However, you can download the installation file for your device from the official 1win website. Just follow the link at the top."}',
             'value_es' => '{"0":"Lamentablemente, la aplicación móvil de 1win no está disponible actualmente en la App Store. Sin embargo, puedes descargar el archivo de instalación en tu dispositivo desde el sitio web oficial de 1win. Solo haz clic en el enlace que se encuentra arriba."}',
             'value_fr' => '{"0":"Malheureusement, l’application mobile 1win n’est pas disponible pour le moment sur l’App Store. Cependant, vous pouvez télécharger le fichier d’installation sur votre appareil depuis le site officiel de 1win. Il vous suffit de suivre le lien en haut de cette page."}',
             'value_pt' => '{"0":"Infelizmente, o aplicativo móvel da 1win não está disponível na App Store no momento. No entanto, você pode baixar o arquivo de instalação para o seu dispositivo no site oficial da 1win. Basta clicar no link no topo da página."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 23
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h4',
                'value_en' => '{"0":"Go to the 1win homepage using the link"}',
                'value_es' => '{"0":"Ve a la página principal de 1win utilizando el enlace"}',
                'value_fr' => '{"0":"Accédez à la page d’accueil de 1win en utilisant le lien"}',
                'value_pt' => '{"0":"Acesse a página inicial da 1win através do link"}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 24
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"Go to the 1win homepage by clicking the «Download» button at the top of the page."}',
                'value_es' => '{"0":"Ve a la página principal de 1win haciendo clic en el botón «Descargar» en la parte superior de la página."}',
                'value_fr' => '{"0":"Accédez à la page d’accueil de 1win en cliquant sur le bouton «Télécharger» en haut de la page."}',
                'value_pt' => '{"0":"Acesse a página inicial da 1win clicando no botão «Baixar» no topo da página."}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 25
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h4',
                'value_en' => '{"0":"Fill in the sign-up form"}',
                'value_es' => '{"0":"Rellena el formulario de registro"}',
                'value_fr' => '{"0":"Remplissez le formulaire d’inscription"}',
                'value_pt' => '{"0":"Preencha o formulário de registro"}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 26
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"Also, double-check that all your personal details are filled in correctly."}',
                'value_es' => '{"0":"También verifica que todos tus datos personales estén correctamente ingresados."}',
                'value_fr' => '{"0":"Vérifiez également que toutes vos informations personnelles sont correctement renseignées."}',
                'value_pt' => '{"0":"Verifique também se todos os seus dados pessoais foram preenchidos corretamente."}',
             'order' => 26
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 27
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account and make your first deposit"}',
                'value_es' => '{"0":"Verifica tu cuenta y realiza tu primer depósito"}',
                'value_fr' => '{"0":"Vérifiez votre compte et effectuez votre premier dépôt"}',
                'value_pt' => '{"0":"Verifique sua conta e faça seu primeiro depósito"}',
             'order' => 27
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 28
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
                'value_en' => '{"0":"We recommend verifying your account as soon as possible, as it may sometimes be a requirement for making a deposit."}',
                'value_es' => '{"0":"Te recomendamos verificar tu cuenta lo antes posible, ya que en algunos casos puede ser un requisito para realizar un depósito."}',
                'value_fr' => '{"0":"Nous vous conseillons de vérifier votre compte dès que possible, car cela peut parfois être nécessaire pour effectuer un dépôt."}',
                'value_pt' => '{"0":"Recomendamos que verifique sua conta o quanto antes, pois em alguns casos isso pode ser necessário para realizar um depósito."}',
             'order' => 28
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 29
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
                'value_en' => '{"0":"The features of the 1win mobile app"}',
                'value_es' => '{"0":"Las funciones de la aplicación móvil de 1win"}',
                'value_fr' => '{"0":"Les fonctionnalités de l’application mobile 1win"}',
                'value_pt' => '{"0":"Os recursos do aplicativo móvel da 1win"}',
             'order' => 29
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 30
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'list_v2',
             'value_en' => '{"0":"Place bets on all types of events, both in pre-match and live mode",
                             "1":"Withdraw winnings and top up your account",
                             "2":"Receive bonuses offered by the bookmaker",
                             "3":"Contact customer support, available 24/7",
                             "4":"Watch live video streams of matches"}',
             'value_es' => '{"0":"Apostar en todo tipo de eventos, tanto en prematch como en vivo",
                             "1":"Retirar ganancias y recargar tu cuenta",
                             "2":"Recibir bonos ofrecidos por la casa de apuestas",
                             "3":"Contactar con el servicio de atención al cliente disponible las 24 horas",
                             "4":"Ver transmisiones en vivo de los partidos"}',
             'value_fr' => '{"0":"Placer des paris sur tous types d’événements, en pré-match et en direct",
                             "1":"Retirer vos gains et recharger votre compte",
                             "2":"Recevoir les bonus offerts par le bookmaker",
                             "3":"Contacter le service client disponible 24h/24 et 7j/7",
                             "4":"Regarder les retransmissions en direct des matchs"}',
             'value_pt' => '{"0":"Fazer apostas em todos os tipos de eventos, tanto no pré-jogo quanto ao vivo",
                             "1":"Sacar ganhos e recarregar sua conta",
                             "2":"Receber bônus oferecidos pela casa de apostas",
                             "3":"Entrar em contato com o suporte ao cliente disponível 24 horas por dia",
                             "4":"Assistir transmissões ao vivo das partidas"}',
             'order' => 30
            ]
        );
    }
}
