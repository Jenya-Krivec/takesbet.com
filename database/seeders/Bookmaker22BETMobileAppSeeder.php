<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker22BETMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 1
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Review on 22BET betting mobile app"}',
             'value_es' => '{"0":"Reseña de la aplicación móvil de apuestas de 22BET"}',
             'value_fr' => '{"0":"Avis sur l’application mobile de paris 22BET"}',
             'value_pt' => '{"0":"Análise do aplicativo móvel de apostas da 22BET"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 2
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Want to play casino games and bet on sports from your smartphone? Then 22BET is exactly what you need! The 22BET mobile app and optimized website version provide full access to all platform features. In this review, we’ll explain how to install the mobile app and start playing."}',
             'value_es' => '{"0":"¿Quieres jugar en el casino y apostar en deportes desde tu teléfono inteligente? ¡Entonces 22BET es justo lo que necesitas! La aplicación móvil de 22BET y la versión adaptada del sitio web te dan acceso completo a todas las funciones de la plataforma. En esta reseña, te explicaremos cómo instalar la aplicación móvil y comenzar a jugar."}',
             'value_fr' => '{"0":"Vous souhaitez jouer au casino et parier sur le sport depuis votre smartphone ? Alors 22BET est exactement ce qu’il vous faut ! L’application mobile de 22BET et la version optimisée du site offrent un accès complet à toutes les fonctionnalités de la plateforme. Dans cet article, nous vous expliquerons comment installer l’application mobile et commencer à jouer."}',
             'value_pt' => '{"0":"Quer jogar em cassino e apostar em esportes pelo seu smartphone? Então o 22BET é exatamente o que você precisa! O aplicativo móvel do 22BET e a versão otimizada do site oferecem acesso completo a todas as funcionalidades da plataforma. Nesta análise, vamos explicar como instalar o aplicativo móvel e começar a jogar."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 3
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"The installation of the 22BET application is very easy for players",
                                 "1":"Mobile app available for both Android and iOS users",
                                 "2":"The mobile app has notifications and many other features",
                                 "3":"Good bonuses in the app for punters",
                                 "4":"Great client care in the app",
                                 "5":"Easy-to-use app, easy to find anything you want"},
                             "1":
                                {"0":"You need to constantly update the application"}
                             }',
             'value_es' => '{"0":
                                {"0":"La instalación de la aplicación de 22BET es muy fácil para los jugadores",
                                 "1":"La app móvil está disponible tanto para usuarios de Android como de iOS",
                                 "2":"La app móvil tiene notificaciones y muchas otras funciones",
                                 "3":"Buenos bonos en la app para los apostadores",
                                 "4":"Excelente atención al cliente en la app",
                                 "5":"Aplicación fácil de usar, es fácil encontrar lo que buscas"},
                             "1":
                                {"0":"Es necesario actualizar la aplicación constantemente"}
                             }',
             'value_fr' => '{"0":
                                {"0":"L\'installation de l\'application 22BET est très facile pour les joueurs",
                                 "1":"Application mobile disponible pour les utilisateurs Android et iOS",
                                 "2":"L\'application mobile propose des notifications et de nombreuses autres fonctionnalités",
                                 "3":"De bons bonus dans l\'application pour les parieurs",
                                 "4":"Excellent service client dans l\'application",
                                 "5":"Application facile à utiliser, tout est simple à trouver"},
                             "1":
                                {"0":"Vous devez mettre l\'application à jour régulièrement"}
                             }',
             'value_pt' => '{"0":
                                {"0":"A instalação do aplicativo 22BET é muito fácil para os jogadores",
                                 "1":"Aplicativo móvel disponível para usuários de Android e iOS",
                                 "2":"O app possui notificações e muitos outros recursos",
                                 "3":"Bons bônus no app para os apostadores",
                                 "4":"Excelente atendimento ao cliente no app",
                                 "5":"Aplicativo fácil de usar, é fácil encontrar tudo o que você procura"},
                             "1":
                                {"0":"É necessário atualizar o aplicativo constantemente"}
                             }',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 4
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
                'value_en' => '{"0":"Download 22BET on Android"}',
                'value_es' => '{"0":"Descarga 22BET en Android"}',
                'value_fr' => '{"0":"Téléchargez 22BET sur Android"}',
                'value_pt' => '{"0":"Baixe o 22BET no Android"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 5
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
                'value_en' => '{"0":"To download 22BET on Android, you should use the official website of the bookmaker, where the installation file is distributed. Due to restrictions on gambling software imposed by Google, it is currently not possible to download and install the 22BET app via the Play Market."}',
                'value_es' => '{"0":"Para descargar 22BET en Android, debes utilizar el sitio web oficial de la casa de apuestas, donde se distribuye el archivo de instalación. Debido a las restricciones impuestas por Google sobre software de apuestas, actualmente no es posible descargar e instalar la aplicación de 22BET a través de Play Market."}',
                'value_fr' => '{"0":"Pour télécharger 22BET sur Android, vous devez utiliser le site officiel du bookmaker, où le fichier d\'installation est disponible. En raison des restrictions imposées par Google sur les logiciels de jeux d\'argent, il n’est actuellement pas possible de télécharger et d’installer l’application 22BET via le Play Market."}',
                'value_pt' => '{"0":"Para baixar o 22BET no Android, você deve usar o site oficial da casa de apostas, onde o arquivo de instalação é disponibilizado. Devido às restrições da Google quanto à distribuição de softwares de apostas, atualmente não é possível baixar e instalar o aplicativo da 22BET pela Play Store."}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 6
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
                'value_en' => '{"0":"Therefore, to use the app, you need to download the 22BET APK installer to your smartphone or tablet. The download is carried out from the official 22BET website, where a direct link is available in the mobile section."}',
                'value_es' => '{"0":"Por lo tanto, para usar la aplicación, debes descargar el instalador APK de 22BET en tu smartphone o tablet. La descarga se realiza desde el sitio oficial de 22BET, donde hay un enlace directo en la sección móvil."}',
                'value_fr' => '{"0":"Ainsi, pour utiliser l’application, vous devez télécharger le fichier APK de 22BET sur votre smartphone ou tablette. Le téléchargement se fait depuis le site officiel de 22BET, où un lien direct est disponible dans la section mobile."}',
                'value_pt' => '{"0":"Portanto, para usar o aplicativo, é necessário baixar o instalador APK da 22BET no seu smartphone ou tablet. O download é feito a partir do site oficial da 22BET, onde há um link direto na seção móvel."}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 7
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
                'value_en' => '{"0":"How to install the 22BET app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación de 22BET en Android?"}',
                'value_fr' => '{"0":"Comment installer l\'application 22BET sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da 22BET no Android?"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 8
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h4',
                'value_en' => '{"0":"Follow the link"}',
                'value_es' => '{"0":"Sigue el enlace"}',
                'value_fr' => '{"0":"Suivez le lien"}',
                'value_pt' => '{"0":"Siga o link"}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 9
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
                'value_en' => '{"0":"The first step is simply to follow the link to the 22BET betting site. Once on the homepage, you’ll be able to create an account, claim a generous welcome bonus, and gain access to some of the most competitive odds on the market."}',
                'value_es' => '{"0":"El primer paso es simplemente seguir el enlace al sitio de apuestas de 22BET. Una vez en la página principal, podrás crear una cuenta, aprovechar un generoso bono de bienvenida y acceder a algunas de las cuotas más competitivas del mercado."}',
                'value_fr' => '{"0":"La première étape consiste simplement à suivre le lien vers le site de paris de 22BET. Une fois sur la page d\'accueil, vous pourrez créer un compte, profiter d\'un généreux bonus de bienvenue et accéder à certaines des cotes les plus avantageuses du marché."}',
                'value_pt' => '{"0":"O primeiro passo é simplesmente seguir o link para o site de apostas da 22BET. Ao acessar a página inicial, você poderá criar uma conta, aproveitar um generoso bônus de boas-vindas e ter acesso a algumas das melhores odds do mercado."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 10
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h4',
                'value_en' => '{"0":"Download the APK file"}',
                'value_es' => '{"0":"Descarga el archivo APK"}',
                'value_fr' => '{"0":"Téléchargez le fichier APK"}',
                'value_pt' => '{"0":"Baixe o arquivo APK"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 11
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
                'value_en' => '{"0":"At the top of the 22BET mobile app review page, we’ve placed a link where you can quickly find the APK file to download to your mobile device. Just click the «Download» button."}',
                'value_es' => '{"0":"En la parte superior de la página de revisión de la aplicación móvil de 22BET, hemos colocado un enlace donde puedes encontrar rápidamente el archivo APK para descargarlo en tu dispositivo móvil. Solo haz clic en el botón «Descargar»."}',
                'value_fr' => '{"0":"En haut de la page de présentation de l’application mobile 22BET, nous avons placé un lien permettant de trouver rapidement le fichier APK à télécharger sur votre appareil mobile. Il vous suffit de cliquer sur le bouton « Télécharger »."}',
                'value_pt' => '{"0":"No topo da página de análise do aplicativo móvel da 22BET, colocamos um link onde você pode encontrar rapidamente o arquivo APK para baixar no seu dispositivo móvel. Basta clicar no botão «Baixar»."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 12
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h4',
                'value_en' => '{"0":"Set up your mobile device"}',
                'value_es' => '{"0":"Configura tu dispositivo móvil"}',
                'value_fr' => '{"0":"Configurez votre appareil mobile"}',
                'value_pt' => '{"0":"Configure seu dispositivo móvel"}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 13
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
                'value_en' => '{"0":"Open the «Settings» section, go to the «Security» menu, and check the box next to «Allow installation from unknown sources». Save the changes."}',
                'value_es' => '{"0":"Abre la sección «Configuración», ve al menú «Seguridad» y marca la casilla junto a «Permitir instalación de fuentes desconocidas». Guarda los cambios."}',
                'value_fr' => '{"0":"Ouvrez la section « Paramètres », allez dans le menu « Sécurité » et cochez la case « Autoriser l’installation de sources inconnues ». Enregistrez les modifications."}',
                'value_pt' => '{"0":"Abra a seção «Configurações», vá ao menu «Segurança» e marque a opção «Permitir instalação de fontes desconhecidas». Salve as alterações."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 14
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h4',
                'value_en' => '{"0":"Install the app"}',
                'value_es' => '{"0":"Instala la aplicación"}',
                'value_fr' => '{"0":"Installez l’application"}',
                'value_pt' => '{"0":"Instale o aplicativo"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 15
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
                'value_en' => '{"0":"Tap on the downloaded APK file and press the «Install» button. Wait a few minutes for the app to be installed on your mobile device."}',
                'value_es' => '{"0":"Toca el archivo APK descargado y pulsa el botón «Instalar». Espera unos minutos mientras la aplicación se instala en tu dispositivo móvil."}',
                'value_fr' => '{"0":"Appuyez sur le fichier APK téléchargé, puis sur le bouton « Installer ». Patientez quelques minutes pendant que l’application s’installe sur votre appareil mobile."}',
                'value_pt' => '{"0":"Toque no arquivo APK baixado e pressione o botão «Instalar». Aguarde alguns minutos enquanto o aplicativo é instalado no seu dispositivo móvel."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 16
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account"}',
                'value_es' => '{"0":"Verifica tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez votre compte"}',
                'value_pt' => '{"0":"Verifique sua conta"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 17
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
                'value_en' => '{"0":"In the final step, you need to open the installed app and enter the login details you created in the first step. Now you can place sports bets and enjoy the game from your mobile device!"}',
                'value_es' => '{"0":"En el último paso, debes abrir la aplicación instalada e ingresar los datos de acceso que creaste en el primer paso. ¡Ahora puedes hacer apuestas deportivas y disfrutar del juego desde tu dispositivo móvil!"}',
                'value_fr' => '{"0":"À la dernière étape, vous devez ouvrir l’application installée et saisir les identifiants que vous avez créés lors de la première étape. Vous pouvez maintenant parier sur le sport et profiter du jeu depuis votre appareil mobile !"}',
                'value_pt' => '{"0":"Na etapa final, você deve abrir o aplicativo instalado e inserir os dados de login que criou na primeira etapa. Agora você pode fazer apostas esportivas e aproveitar o jogo no seu dispositivo móvel!"}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 18
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
                'value_en' => '{"0":"Download the 22BET mobile app on iOS"}',
                'value_es' => '{"0":"Descarga la aplicación móvil de 22BET en iOS"}',
                'value_fr' => '{"0":"Téléchargez l\'application mobile 22BET sur iOS"}',
                'value_pt' => '{"0":"Baixe o aplicativo móvel 22BET no iOS"}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 19
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The 22BET mobile app for iOS is one of the best we’ve ever seen. It can be easily downloaded and installed via the App Store."}',
             'value_es' => '{"0":"La aplicación móvil de 22BET para iOS es una de las mejores que hemos visto. Se puede descargar e instalar fácilmente desde la App Store."}',
             'value_fr' => '{"0":"L’application mobile 22BET pour iOS est l’une des meilleures que nous ayons vues. Elle peut être facilement téléchargée et installée via l’App Store."}',
             'value_pt' => '{"0":"O aplicativo móvel da 22BET para iOS é um dos melhores que já vimos. Ele pode ser facilmente baixado e instalado pela App Store."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 20
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"It’s worth noting — the app has an attractive appearance. It combines a stylish design with user-friendly navigation and offers all the essential features. You will get access to casino games, sports betting, bonus offers, and many other features. Below, we’ll explain how to start using the 22BET mobile app."}',
             'value_es' => '{"0":"Cabe destacar que la app tiene un aspecto muy atractivo. Combina un diseño elegante con una navegación intuitiva y ofrece todas las funciones esenciales. Tendrás acceso a juegos de casino, apuestas deportivas, promociones y muchas otras funciones. A continuación, te explicaremos cómo empezar a usar la aplicación móvil de 22BET."}',
             'value_fr' => '{"0":"Il convient de souligner que l’application a une apparence attrayante. Elle allie un design élégant à une navigation fluide, et propose toutes les fonctionnalités clés. Vous aurez accès aux jeux de casino, aux paris sportifs, aux offres de bonus et à bien d’autres fonctionnalités. Ci-dessous, nous vous expliquerons comment commencer à utiliser l’application mobile 22BET."}',
             'value_pt' => '{"0":"Vale destacar — o app tem uma aparência muito atraente. Ele combina um design elegante com navegação intuitiva e oferece todos os recursos essenciais. Você terá acesso a jogos de cassino, apostas esportivas, ofertas de bônus e muito mais. A seguir, explicaremos como começar a usar o aplicativo móvel da 22BET."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 21
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 22
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
                'value_en' => '{"0":"How to install the 22BET mobile app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación móvil de 22BET en iOS?"}',
                'value_fr' => '{"0":"Comment installer l\'application mobile 22BET sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo móvel da 22BET no iOS?"}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 23
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h4',
                'value_en' => '{"0":"Follow the link"}',
                'value_es' => '{"0":"Sigue el enlace"}',
                'value_fr' => '{"0":"Suivez le lien"}',
                'value_pt' => '{"0":"Siga o link"}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 24
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
                'value_en' => '{"0":"If you haven’t created an account on the 22BET website yet, we recommend doing so."}',
                'value_es' => '{"0":"Si aún no has creado una cuenta en el sitio web de 22BET, te recomendamos que lo hagas."}',
                'value_fr' => '{"0":"Si vous n’avez pas encore créé de compte sur le site de 22BET, nous vous recommandons de le faire."}',
                'value_pt' => '{"0":"Se ainda não criou uma conta no site da 22BET, recomendamos que o faça."}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 25
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h4',
                'value_en' => '{"0":"Search for the 22BET app in the App Store"}',
                'value_es' => '{"0":"Busca la aplicación de 22BET en la App Store"}',
                'value_fr' => '{"0":"Recherchez l\'application 22BET dans le App Store"}',
                'value_pt' => '{"0":"Procure o aplicativo da 22BET na App Store"}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 26
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
                'value_en' => '{"0":"Installing the mobile app for iOS devices is even easier than for Android, as it is available for download on the App Store. All you need to do is follow the direct link we provided at the top of our review and install the app on your iOS device."}',
                'value_es' => '{"0":"Instalar la aplicación móvil en dispositivos iOS es aún más fácil que en Android, ya que está disponible para su descarga en la App Store. Solo tienes que seguir el enlace directo que dejamos en la parte superior de nuestra reseña e instalar la app en tu dispositivo iOS."}',
                'value_fr' => '{"0":"Installer l’application mobile sur les appareils iOS est encore plus simple que sur Android, car elle est disponible en téléchargement sur l’App Store. Il vous suffit de suivre le lien direct que nous avons placé en haut de notre avis et d’installer l’application sur votre appareil iOS."}',
                'value_pt' => '{"0":"Instalar o aplicativo móvel em dispositivos iOS é ainda mais fácil do que no Android, pois ele está disponível para download na App Store. Tudo o que você precisa fazer é seguir o link direto que deixamos no topo da nossa análise e instalar o app no seu dispositivo iOS."}',
             'order' => 26
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 27
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account"}',
                'value_es' => '{"0":"Verifica tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez votre compte"}',
                'value_pt' => '{"0":"Verifique sua conta"}',
             'order' => 27
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 28
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
                'value_en' => '{"0":"In the final step, you need to open the installed app and enter the login details you created in the first step. Now you can place sports bets and enjoy the game from your mobile device!"}',
                'value_es' => '{"0":"En el último paso, debes abrir la aplicación instalada e ingresar los datos de acceso que creaste en el primer paso. ¡Ahora puedes hacer apuestas deportivas y disfrutar del juego desde tu dispositivo móvil!"}',
                'value_fr' => '{"0":"À la dernière étape, vous devez ouvrir l’application installée et saisir les identifiants que vous avez créés lors de la première étape. Vous pouvez maintenant parier sur le sport et profiter du jeu depuis votre appareil mobile !"}',
                'value_pt' => '{"0":"Na etapa final, você deve abrir o aplicativo instalado e inserir os dados de login que criou na primeira etapa. Agora você pode fazer apostas esportivas e aproveitar o jogo no seu dispositivo móvel!"}',
             'order' => 28
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 29
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
                'value_en' => '{"0":"The features of the 22BET mobile app"}',
                'value_es' => '{"0":"Las funciones de la aplicación móvil de 22BET"}',
                'value_fr' => '{"0":"Les fonctionnalités de l’application mobile 22BET"}',
                'value_pt' => '{"0":"Os recursos do aplicativo móvel da 22BET"}',
             'order' => 29
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 30
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The app has several features that truly impressed us. It’s thanks to these features that many users prefer the app over the mobile version of the site."}',
             'value_es' => '{"0":"La aplicación tiene varias funciones que realmente nos impresionaron. Gracias a estas características, muchos usuarios prefieren la app en lugar de la versión móvil del sitio web."}',
             'value_fr' => '{"0":"L’application propose plusieurs fonctionnalités qui nous ont vraiment impressionnés. C’est grâce à ces éléments que de nombreux utilisateurs préfèrent l’application à la version mobile du site."}',
             'value_pt' => '{"0":"O aplicativo possui vários recursos que realmente nos impressionaram. É por causa dessas funcionalidades que muitos usuários preferem o app à versão móvel do site."}',
             'order' => 30
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 31
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'list_v2',
             'value_en' => '{"0":"Notifications about sports events, promotions, etc.",
                             "1":"Live streaming",
                             "2":"Live event betting",
                             "3":"Cash-out",
                             "4":"Live sports results"}',
             'value_es' => '{"0":"Notificaciones sobre eventos deportivos, promociones, etc.",
                             "1":"Transmisiones en vivo",
                             "2":"Apuestas en eventos en vivo",
                             "3":"Retiro anticipado (Cash-out)",
                             "4":"Resultados deportivos en tiempo real"}',
             'value_fr' => '{"0":"Notifications sur les événements sportifs, promotions, etc.",
                             "1":"Diffusions en direct",
                             "2":"Paris sur événements en direct",
                             "3":"Encaissement anticipé (Cash-out)",
                             "4":"Résultats sportifs en temps réel"}',
             'value_pt' => '{"0":"Notificações sobre eventos esportivos, promoções, etc.",
                             "1":"Transmissões ao vivo",
                             "2":"Apostas em eventos ao vivo",
                             "3":"Saque antecipado (Cash-out)",
                             "4":"Resultados esportivos em tempo real"}',
             'order' => 31
            ]
        );
    }
}
