<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1XBETMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 1
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"Review on 1XBET betting mobile app"}',
             'value_es' => '{"0":"Reseña de la aplicación móvil de apuestas de 1XBET"}',
             'value_fr' => '{"0":"Avis sur l’application mobile de paris 1XBET"}',
             'value_pt' => '{"0":"Análise do aplicativo móvel de apostas da 1XBET"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 2
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Love placing bets from your phone? Then you should definitely install the 1xBet app! The 1xBet mobile app is considered one of the best available in India — offering great promotions, competitive odds, and even live streaming features."}',
             'value_es' => '{"0":"¿Te gusta apostar desde tu teléfono? ¡Entonces definitivamente deberías instalar la aplicación de 1xBet! La app móvil de 1xBet es considerada una de las mejores disponibles en la India, con promociones atractivas, cuotas competitivas y funciones como la transmisión en vivo."}',
             'value_fr' => '{"0":"Vous aimez parier depuis votre téléphone ? Alors vous devez absolument installer l’application 1xBet ! L’application mobile 1xBet est considérée comme l’une des meilleures en Inde — elle propose des promotions avantageuses, des cotes compétitives et même la diffusion en direct."}',
             'value_pt' => '{"0":"Gosta de apostar pelo telefone? Então você precisa instalar o app da 1xBet! O aplicativo móvel da 1xBet é considerado um dos melhores disponíveis na Índia, oferecendo promoções atrativas, odds competitivas e até transmissões ao vivo."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 3
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"New users can also receive a generous welcome bonus after making their first deposit through the app. Don’t miss out!"}',
             'value_es' => '{"0":"Además, los nuevos usuarios pueden recibir un generoso bono de bienvenida tras realizar su primer depósito en la app. ¡Aprovecha esta oportunidad!"}',
             'value_fr' => '{"0":"Les nouveaux utilisateurs peuvent également bénéficier d’un généreux bonus de bienvenue après leur premier dépôt via l’application. Profitez-en dès maintenant !"}',
             'value_pt' => '{"0":"Novos usuários também podem receber um generoso bônus de boas-vindas após o primeiro depósito no app. Aproveite agora mesmo!"}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 4
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Best odds available in the Indian market",
                                 "1":"Esports and cricket sections with live streaming",
                                 "2":"30+ promotions available to users",
                                 "3":"One of the highest welcome bonuses available"},
                             "1":
                                {"0":"Rollover requirements restricted to using accumulator bets"}
                             }',
             'value_es' => '{"0":
                                {"0":"Las mejores cuotas disponibles en el mercado indio",
                                 "1":"Secciones de deportes electrónicos y críquet con transmisión en vivo",
                                 "2":"Más de 30 promociones disponibles para los usuarios",
                                 "3":"Uno de los bonos de bienvenida más altos disponibles"},
                             "1":
                                {"0":"Requisitos de apuesta limitados a apuestas combinadas"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Meilleures cotes disponibles sur le marché indien",
                                 "1":"Sections e-sport et cricket avec streaming en direct",
                                 "2":"Plus de 30 promotions disponibles pour les utilisateurs",
                                 "3":"L’un des bonus de bienvenue les plus élevés disponibles"},
                             "1":
                                {"0":"Conditions de mise limitées aux paris combinés"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Melhores odds disponíveis no mercado indiano",
                                 "1":"Seções de eSports e críquete com transmissão ao vivo",
                                 "2":"Mais de 30 promoções disponíveis para os usuários",
                                 "3":"Um dos maiores bônus de boas-vindas disponíveis"},
                             "1":
                                {"0":"Requisitos de aposta limitados a apostas múltiplas (acumuladores)"}
                             }',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 5
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"Download 1XBET on Android"}',
             'value_es' => '{"0":"Descarga 1XBET en Android"}',
             'value_fr' => '{"0":"Téléchargez 1XBET sur Android"}',
             'value_pt' => '{"0":"Baixe o 1XBET no Android"}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 6
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"For Android users, 1XBET has created a convenient mobile app that allows you to place sports bets anytime and anywhere. With its user-friendly interface, you can view odds, place bets, and even watch live sports events. With the 1XBET app, you’re always in the game — even without access to a computer."}',
             'value_es' => '{"0":"Para los usuarios de Android, 1XBET ha creado una práctica aplicación móvil que permite apostar en deportes en cualquier momento y lugar. Gracias a su interfaz intuitiva, podrás consultar cuotas, realizar apuestas e incluso ver eventos deportivos en directo. Con la app de 1XBET, siempre estarás en el juego, incluso sin acceso a un ordenador."}',
             'value_fr' => '{"0":"Pour les utilisateurs Android, 1XBET a développé une application mobile pratique qui permet de parier sur le sport à tout moment et en tout lieu. Grâce à son interface conviviale, vous pouvez consulter les cotes, placer des paris et même regarder des événements sportifs en direct. Avec l\'application 1XBET, vous restez toujours dans le jeu — même sans accès à un ordinateur."}',
             'value_pt' => '{"0":"Para os usuários de Android, a 1XBET criou um aplicativo móvel prático que permite fazer apostas esportivas a qualquer hora e em qualquer lugar. Com uma interface intuitiva, você pode visualizar as odds, fazer apostas e até assistir a eventos esportivos ao vivo. Com o app da 1XBET, você está sempre no jogo — mesmo sem acesso a um computador."}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 7
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"How to install the 1XBET app on Android?"}',
             'value_es' => '{"0":"¿Cómo instalar la aplicación de 1XBET en Android?"}',
             'value_fr' => '{"0":"Comment installer l\'application 1XBET sur Android ?"}',
             'value_pt' => '{"0":"Como instalar o aplicativo da 1XBET no Android?"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 8
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"It will only take a few minutes to get the 1xBet sports betting app up-and-running on your Android device. Below we lay out the steps that you will have to follow:"}',
             'value_es' => '{"0":"Solo te tomará unos minutos tener la aplicación de apuestas deportivas de 1xBet funcionando en tu dispositivo Android. A continuación, te mostramos los pasos que debes seguir:"}',
             'value_fr' => '{"0":"Il ne vous faudra que quelques minutes pour installer et lancer l’application de paris sportifs 1xBet sur votre appareil Android. Voici les étapes à suivre:"}',
             'value_pt' => '{"0":"Levará apenas alguns minutos para colocar o aplicativo de apostas esportivas da 1xBet funcionando no seu dispositivo Android. Abaixo estão os passos que você deve seguir:"}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 9
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"Follow the link"}',
             'value_es' => '{"0":"Sigue el enlace"}',
             'value_fr' => '{"0":"Suivez le lien"}',
             'value_pt' => '{"0":"Siga o link"}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 10
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The first step is simply to follow the link to the 1xBet betting site. Once on the homepage, you’ll be able to create an account, claim a generous welcome bonus, and gain access to some of the most competitive odds on the market."}',
             'value_es' => '{"0":"El primer paso es simplemente seguir el enlace al sitio de apuestas de 1xBet. Una vez en la página principal, podrás crear una cuenta, aprovechar un generoso bono de bienvenida y acceder a algunas de las cuotas más competitivas del mercado."}',
             'value_fr' => '{"0":"La première étape consiste simplement à suivre le lien vers le site de paris de 1xBet. Une fois sur la page d\'accueil, vous pourrez créer un compte, profiter d\'un généreux bonus de bienvenue et accéder à certaines des cotes les plus avantageuses du marché."}',
             'value_pt' => '{"0":"O primeiro passo é simplesmente seguir o link para o site de apostas da 1xBet. Ao acessar a página inicial, você poderá criar uma conta, aproveitar um generoso bônus de boas-vindas e ter acesso a algumas das melhores odds do mercado."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 13
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"Search for the 1XBET app in the Play Store"}',
             'value_es' => '{"0":"Busca la aplicación de 1XBET en la Play Store"}',
             'value_fr' => '{"0":"Recherchez l\'application 1XBET dans le Play Store"}',
             'value_pt' => '{"0":"Procure o aplicativo da 1XBET na Play Store"}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 14
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"After completing your registration, open the Google Play Store and search for «1XBET sports betting». You can also use the direct download link available on the official 1XBET website."}',
             'value_es' => '{"0":"Después de completar el registro, abre la Google Play Store y busca «1XBET sports betting». También puedes utilizar el enlace de descarga directa disponible en el sitio web oficial de 1XBET."}',
             'value_fr' => '{"0":"Une fois votre inscription terminée, ouvrez le Google Play Store et recherchez «1XBET sports betting». Vous pouvez également utiliser le lien de téléchargement direct disponible sur le site officiel de 1XBET."}',
             'value_pt' => '{"0":"Após concluir o registro, abra a Google Play Store e procure por «1XBET sports betting». Você também pode usar o link de download direto disponível no site oficial da 1XBET."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 15
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"Download the 1XBET mobile app"}',
             'value_es' => '{"0":"Descarga la aplicación móvil de 1XBET"}',
             'value_fr' => '{"0":"Téléchargez l\'application mobile 1XBET"}',
             'value_pt' => '{"0":"Baixe o aplicativo móvel da 1XBET"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 16
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Before installing, make sure you\'ve selected the correct app by checking the publisher\'s name. Then download it to your smartphone or tablet."}',
             'value_es' => '{"0":"Antes de instalar, asegúrate de haber seleccionado la aplicación correcta comprobando el nombre del desarrollador. Luego descárgala en tu teléfono inteligente o tablet."}',
             'value_fr' => '{"0":"Avant l\'installation, assurez-vous d\'avoir sélectionné la bonne application en vérifiant le nom de l\'éditeur. Ensuite, téléchargez-la sur votre smartphone ou tablette."}',
             'value_pt' => '{"0":"Antes de instalar, certifique-se de que escolheu o aplicativo correto verificando o nome do desenvolvedor. Em seguida, faça o download no seu smartphone ou tablet."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 17
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"Verify your account"}',
             'value_es' => '{"0":"Verifica tu cuenta"}',
             'value_fr' => '{"0":"Vérifiez votre compte"}',
             'value_pt' => '{"0":"Verifique sua conta"}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 18
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"At the final step, log into your new account through the mobile app. In the «My Account» section, you can complete verification by providing a valid ID and proof of residence."}',
             'value_es' => '{"0":"En el paso final, inicia sesión en tu nueva cuenta a través de la aplicación móvil. En la sección «Mi cuenta», podrás completar la verificación proporcionando un documento de identidad válido y un comprobante de domicilio."}',
             'value_fr' => '{"0":"À l\'étape finale, connectez-vous à votre nouveau compte via l\'application mobile. Dans la section «Mon compte», vous pourrez compléter la vérification en fournissant une pièce d\'identité valide et un justificatif de domicile."}',
             'value_pt' => '{"0":"Na etapa final, faça login na sua nova conta pelo aplicativo móvel. Na seção «Minha Conta», você poderá concluir a verificação fornecendo um documento de identidade válido e um comprovante de residência."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 19
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"How to install the 1XBET mobile app APK if it\'s not on the Play Store?"}',
             'value_es' => '{"0":"¿Cómo instalar el archivo APK de la aplicación móvil de 1XBET si no está disponible en la Play Store?"}',
             'value_fr' => '{"0":"Comment installer le fichier APK de l\'application mobile 1XBET si elle n\'est pas disponible sur le Play Store ?"}',
             'value_pt' => '{"0":"Como instalar o APK do aplicativo móvel da 1XBET se ele não estiver disponível na Play Store?"}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 20
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Sometimes, the 1XBET sports betting app may not be available for download in the Google Play Store. This can be due to regional restrictions affecting search results. In such cases, simply visit the official 1XBET website, where a direct download link is provided."}',
             'value_es' => '{"0":"A veces, la aplicación de apuestas deportivas de 1XBET puede no estar disponible para su descarga en Google Play Store. Esto puede deberse a restricciones regionales en los resultados de búsqueda. En ese caso, simplemente visita el sitio web oficial de 1XBET, donde encontrarás un enlace directo para descargar la aplicación."}',
             'value_fr' => '{"0":"Parfois, l\'application de paris sportifs 1XBET peut ne pas être disponible au téléchargement sur le Google Play Store. Cela peut être dû à des restrictions régionales affectant les résultats de recherche. Dans ce cas, rendez-vous simplement sur le site officiel de 1XBET, où un lien de téléchargement direct est disponible."}',
             'value_pt' => '{"0":"Às vezes, o aplicativo de apostas esportivas da 1XBET pode não estar disponível para download na Google Play Store. Isso pode ocorrer devido a restrições regionais nos resultados de busca. Nesse caso, basta acessar o site oficial da 1XBET, onde há um link direto para baixar o aplicativo."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 21
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"If you\'re unable to install the app through the Play Store or other sources, no worries — all of 1XBET’s features are available through the mobile version of the website. It closely mirrors the desktop version, offers full functionality, and runs smoothly and efficiently on mobile devices."}',
             'value_es' => '{"0":"Si no puedes instalar la app desde Play Store u otras fuentes, no te preocupes: todas las funciones de 1XBET están disponibles en la versión móvil del sitio web. Esta versión refleja casi por completo la de escritorio, ofrece todas las funcionalidades y funciona de manera rápida y fluida en dispositivos móviles."}',
             'value_fr' => '{"0":"Si vous ne pouvez pas installer l\'application via le Play Store ou d\'autres sources, pas de souci — toutes les fonctionnalités de 1XBET sont accessibles via la version mobile du site. Elle reproduit fidèlement la version bureau, propose toutes les fonctionnalités, et fonctionne de manière fluide et rapide sur les appareils mobiles."}',
             'value_pt' => '{"0":"Se você não conseguir instalar o app pela Play Store ou por outras fontes, não se preocupe — todos os recursos da 1XBET estão disponíveis na versão móvel do site. Ela é muito semelhante à versão para desktop, oferece todas as funcionalidades e funciona de forma rápida e estável em dispositivos móveis."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 22
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"Download the 1XBET mobile app on iOS"}',
             'value_es' => '{"0":"Descarga la aplicación móvil de 1XBET en iOS"}',
             'value_fr' => '{"0":"Téléchargez l\'application mobile 1XBET sur iOS"}',
             'value_pt' => '{"0":"Baixe o aplicativo móvel 1XBET no iOS"}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 23
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"iPhone and iPad users can also enjoy everything 1XBET has to offer. Below you\'ll find a step-by-step guide on how to install the app on your device."}',
             'value_es' => '{"0":"Los usuarios de iPhone y iPad también pueden disfrutar de todo lo que ofrece 1XBET. A continuación, encontrarás una guía paso a paso para instalar la aplicación en tu dispositivo."}',
             'value_fr' => '{"0":"Les utilisateurs d’iPhone et d’iPad peuvent eux aussi profiter de toutes les fonctionnalités de 1XBET. Vous trouverez ci-dessous un guide étape par étape pour installer l’application sur votre appareil."}',
             'value_pt' => '{"0":"Os usuários de iPhone e iPad também podem aproveitar todos os recursos do 1XBET. Abaixo, você encontrará um guia passo a passo para instalar o aplicativo no seu dispositivo."}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 24
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 25
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"How to install the 1XBET mobile app on iOS?"}',
             'value_es' => '{"0":"¿Cómo instalar la aplicación móvil de 1XBET en iOS?"}',
             'value_fr' => '{"0":"Comment installer l\'application mobile 1XBET sur iOS ?"}',
             'value_pt' => '{"0":"Como instalar o aplicativo móvel da 1XBET no iOS?"}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 26
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The method of installing the 1xBet mobile app onto your Apple device is similar to the Android version. Here\'s how to go about it:"}',
             'value_es' => '{"0":"El método para instalar la aplicación móvil de 1xBet en tu dispositivo Apple es similar al de la versión para Android. Aquí te explicamos cómo hacerlo:"}',
             'value_fr' => '{"0":"La méthode d\'installation de l\'application mobile 1xBet sur votre appareil Apple est similaire à celle de la version Android. Voici comment procéder:"}',
             'value_pt' => '{"0":"O método de instalação do aplicativo móvel da 1xBet no seu dispositivo Apple é semelhante ao da versão Android. Veja como fazer:"}',
             'order' => 26
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 27
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"Go to the 1XBET homepage using the link"}',
             'value_es' => '{"0":"Ve a la página principal de 1XBET utilizando el enlace"}',
             'value_fr' => '{"0":"Accédez à la page d’accueil de 1XBET en utilisant le lien"}',
             'value_pt' => '{"0":"Acesse a página inicial da 1XBET através do link"}',
             'order' => 27
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 28
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Go to the 1XBET homepage by clicking the «Download» button at the top of the page."}',
             'value_es' => '{"0":"Ve a la página principal de 1XBET haciendo clic en el botón «Descargar» en la parte superior de la página."}',
             'value_fr' => '{"0":"Accédez à la page d’accueil de 1XBET en cliquant sur le bouton «Télécharger» en haut de la page."}',
             'value_pt' => '{"0":"Acesse a página inicial da 1XBET clicando no botão «Baixar» no topo da página."}',
             'order' => 28
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 29
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"Fill in the sign-up form"}',
             'value_es' => '{"0":"Rellena el formulario de registro"}',
             'value_fr' => '{"0":"Remplissez le formulaire d’inscription"}',
             'value_pt' => '{"0":"Preencha o formulário de registro"}',
             'order' => 29
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 30
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Also, double-check that all your personal details are filled in correctly."}',
             'value_es' => '{"0":"También verifica que todos tus datos personales estén correctamente ingresados."}',
             'value_fr' => '{"0":"Vérifiez également que toutes vos informations personnelles sont correctement renseignées."}',
             'value_pt' => '{"0":"Verifique também se todos os seus dados pessoais foram preenchidos corretamente."}',
             'order' => 30
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 31
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"Search for «1XBET sports betting» in the App Store or download it directly from the 1XBET website."}',
             'value_es' => '{"0":"Busca «1XBET sports betting» en la App Store o descárgalo directamente desde el sitio web de 1XBET."}',
             'value_fr' => '{"0":"Recherchez «1XBET sports betting» dans l\'App Store ou téléchargez-le directement depuis le site officiel de 1XBET."}',
             'value_pt' => '{"0":"Procure por «1XBET sports betting» na App Store ou faça o download diretamente no site da 1XBET."}',
             'order' => 31
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 32
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"You can download the 1xBet mobile app for iOS by searching for it in the App Store or by scrolling to the bottom of the 1XBET homepage and selecting the «iOS» tab in the «Apps» section."}',
             'value_es' => '{"0":"Puedes descargar la aplicación móvil de 1xBet para iOS buscándola en la App Store o desplazándote hasta el final de la página principal de 1XBET y seleccionando la pestaña «iOS» en la sección «Aplicaciones»."}',
             'value_fr' => '{"0":"Vous pouvez télécharger l\'application mobile 1xBet pour iOS en la recherchant dans l\'App Store ou en faisant défiler la page d\'accueil de 1XBET jusqu\'en bas et en sélectionnant l\'onglet «iOS» dans la section «Applications»."}',
             'value_pt' => '{"0":"Você pode baixar o aplicativo móvel da 1xBet para iOS pesquisando na App Store ou rolando até o final da página inicial da 1XBET e selecionando a aba «iOS» na seção «Aplicativos»."}',
             'order' => 32
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 33
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"Verify your account and make your first deposit"}',
             'value_es' => '{"0":"Verifica tu cuenta y realiza tu primer depósito"}',
             'value_fr' => '{"0":"Vérifiez votre compte et effectuez votre premier dépôt"}',
             'value_pt' => '{"0":"Verifique sua conta e faça seu primeiro depósito"}',
             'order' => 33
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 34
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"We recommend verifying your account as soon as possible, as it may sometimes be a requirement for making a deposit."}',
             'value_es' => '{"0":"Te recomendamos verificar tu cuenta lo antes posible, ya que en algunos casos puede ser un requisito para realizar un depósito."}',
             'value_fr' => '{"0":"Nous vous conseillons de vérifier votre compte dès que possible, car cela peut parfois être nécessaire pour effectuer un dépôt."}',
             'value_pt' => '{"0":"Recomendamos que verifique sua conta o quanto antes, pois em alguns casos isso pode ser necessário para realizar um depósito."}',
             'order' => 34
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 35
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"The features of the 1XBET mobile app"}',
             'value_es' => '{"0":"Las funciones de la aplicación móvil de 1XBET"}',
             'value_fr' => '{"0":"Les fonctionnalités de l’application mobile 1XBET"}',
             'value_pt' => '{"0":"Os recursos do aplicativo móvel da 1XBET"}',
             'order' => 35
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 36
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"By installing the 1XBET mobile betting app, you can place sports bets anywhere you have internet access. Over 1000 sports events are available daily, including one of the best selections of cricket and football bets. The app offers the same features as the desktop version: promotions, bonuses, deposit and withdrawal methods, as well as a variety of bet types."}',
             'value_es' => '{"0":"Al instalar la aplicación móvil de apuestas 1XBET, podrás realizar apuestas deportivas en cualquier lugar donde tengas acceso a internet. Más de 1000 eventos deportivos están disponibles diariamente, incluyendo una de las mejores selecciones de apuestas en cricket y fútbol. La aplicación ofrece las mismas funciones que la versión de escritorio: promociones, bonos, métodos de depósito y retiro, así como una variedad de tipos de apuestas."}',
             'value_fr' => '{"0":"En installant l\'application mobile de paris sportifs 1XBET, vous pouvez placer vos paris sportifs où que vous soyez avec une connexion Internet. Plus de 1000 événements sportifs sont disponibles chaque jour, y compris l\'une des meilleures sélections de paris sur le cricket et le football. L\'application offre les mêmes fonctionnalités que la version bureau : promotions, bonus, méthodes de dépôt et de retrait, ainsi qu\'une variété de types de paris."}',
             'value_pt' => '{"0":"Ao instalar o aplicativo móvel de apostas esportivas 1XBET, você poderá fazer apostas esportivas em qualquer lugar com acesso à internet. Mais de 1000 eventos esportivos estão disponíveis diariamente, incluindo uma das melhores seleções de apostas em críquete e futebol. O aplicativo oferece os mesmos recursos da versão para desktop: promoções, bônus, métodos de depósito e saque, além de diversos tipos de apostas."}',
             'order' => 36
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 37
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Here\'s a closer look at what you can expect:"}',
             'value_es' => '{"0":"Aquí tienes un vistazo más detallado de lo que puedes esperar:"}',
             'value_fr' => '{"0":"Voici un aperçu plus détaillé de ce à quoi vous pouvez vous attendre :"}',
             'value_pt' => '{"0":"Aqui está uma visão mais detalhada do que você pode esperar:"}',
             'order' => 37
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 38
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'list_v2',
             'value_en' => '{"0":"Early cash out",
                             "1":"Bet builder",
                             "2":"Casino and slots and live dealer games",
                             "3":"Multi-LIVE feature",
                             "4":"Dedicated Esports betting section «Esports Zone»",
                             "5":"Over 50 available sports to choose from",
                             "6":"Over 1000 football events from around the globe",
                             "7":"Hundreds of live streaming events available at any given hour",
                             "8":"Live betting with close to 1000 open events at any time",
                             "9":"Dedicated cricket section with hundreds of events",
                             "10":"VIP Cashback program for high-volume bettors"}',
             'value_es' => '{"0":"Retiro anticipado",
                             "1":"Constructor de apuestas",
                             "2":"Casino, tragamonedas y juegos con crupier en vivo",
                             "3":"Función Multi-LIVE",
                             "4":"Sección dedicada a apuestas de esports «Zona Esports»",
                             "5":"Más de 50 deportes disponibles para elegir",
                             "6":"Más de 1000 eventos de fútbol de todo el mundo",
                             "7":"Cientos de eventos con transmisión en vivo disponibles en cualquier momento",
                             "8":"Apuestas en vivo con cerca de 1000 eventos abiertos en todo momento",
                             "9":"Sección dedicada al cricket con cientos de eventos",
                             "10":"Programa VIP de reembolso para apostadores de alto volumen"}',
             'value_fr' => '{"0":"Encaissement anticipé",
                             "1":"Créateur de paris",
                             "2":"Casino, machines à sous et jeux avec croupier en direct",
                             "3":"Fonction Multi-LIVE",
                             "4":"Section dédiée aux paris Esports «Esports Zone»",
                             "5":"Plus de 50 sports disponibles au choix",
                             "6":"Plus de 1000 événements de football à travers le monde",
                             "7":"Des centaines d’événements en streaming disponibles à tout moment",
                             "8":"Paris en direct avec près de 1 000 événements ouverts à tout moment",
                             "9":"Section dédiée au cricket avec des centaines d’événements",
                             "10":"Programme de cashback VIP pour les parieurs à gros volume"}',
             'value_pt' => '{"0":"Saque antecipado",
                             "1":"Construtor de apostas",
                             "2":"Cassino, caça-níqueis e jogos com dealer ao vivo",
                             "3":"Recurso Multi-LIVE",
                             "4":"Seção dedicada a apostas em Esports «Zona Esports»",
                             "5":"Mais de 50 esportes disponíveis para escolher",
                             "6":"Mais de 1000 eventos de futebol de todo o mundo",
                             "7":"Centenas de eventos com transmissão ao vivo disponíveis a qualquer hora",
                             "8":"Apostas ao vivo com quase 1000 eventos abertos a qualquer momento",
                             "9":"Seção dedicada ao críquete com centenas de eventos",
                             "10":"Programa VIP de cashback para apostadores de alto volume"}',
             'order' => 38
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 39
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Overall, we consider the 1XBET mobile app to be one of the best options for sports betting enthusiasts. To access all the features mentioned and receive a lucrative first deposit bonus for new users with the promo code NEWBONUS, simply register an account with 1XBET."}',
             'value_es' => '{"0":"En general, consideramos que la aplicación móvil 1XBET es una de las mejores opciones para los aficionados a las apuestas deportivas. Para acceder a todas las funciones mencionadas y recibir un atractivo bono de primer depósito para nuevos usuarios con el código promocional NEWBONUS, simplemente registre una cuenta en 1XBET."}',
             'value_fr' => '{"0":"Dans l’ensemble, nous considérons que l’application mobile 1XBET est l’une des meilleures options pour les amateurs de paris sportifs. Pour profiter de toutes les fonctionnalités mentionnées et bénéficier d’un bonus avantageux sur le premier dépôt pour les nouveaux utilisateurs avec le code promo NEWBONUS, il suffit de créer un compte chez 1XBET."}',
             'value_pt' => '{"0":"No geral, consideramos o aplicativo móvel 1XBET uma das melhores opções para os fãs de apostas esportivas. Para acessar todos os recursos mencionados e receber um bônus atraente no primeiro depósito para novos usuários com o código promocional NEWBONUS, basta registrar uma conta na 1XBET."}',
             'order' => 39
            ]
        );
    }
}
