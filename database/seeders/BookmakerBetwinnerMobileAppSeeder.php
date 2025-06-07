<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBetwinnerMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 1
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"Review on Betwinner betting mobile app"}',
             'value_es' => '{"0":"Reseña de la aplicación móvil de apuestas de Betwinner"}',
             'value_fr' => '{"0":"Avis sur l’application mobile de paris Betwinner"}',
             'value_pt' => '{"0":"Análise do aplicativo móvel de apostas da Betwinner"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 2
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Do you enjoy betting from your smartphone? Try the Betwinner app — you can download it by clicking the button at the top of the page. Without exaggeration, it\'s one of the best sports betting apps out there!"}',
             'value_es' => '{"0":"¿Te gusta apostar desde tu smartphone? Prueba la app de Betwinner. Puedes descargarla haciendo clic en el botón en la parte superior de la página. ¡Sin exagerar, es una de las mejores aplicaciones de apuestas deportivas!"}',
             'value_fr' => '{"0":"Vous aimez parier depuis votre smartphone ? Essayez l’application Betwinner. Vous pouvez la télécharger en cliquant sur le bouton en haut de la page. Sans exagération, c’est l’une des meilleures applications de paris sportifs !"}',
             'value_pt' => '{"0":"Gosta de apostar pelo smartphone? Experimente o app da Betwinner. Você pode baixá-lo clicando no botão no topo da página. Sem exagero, é um dos melhores aplicativos de apostas esportivas!"}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 3
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Don\'t waste any time — install the Betwinner app today!"}',
             'value_es' => '{"0":"¡No pierdas tiempo — instala la app de Betwinner hoy mismo!"}',
             'value_fr' => '{"0":"Ne perdez pas de temps — installez l’application Betwinner dès aujourd’hui !"}',
             'value_pt' => '{"0":"Não perca tempo — instale o app da Betwinner agora mesmo!"}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 4
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Great features fully compatible with the app, such as Multi-LIVE",
                                 "1":"Huge selection of promotions for both new and existing users",
                                 "2":"One of the widest selections of sports and leagues",
                                 "3":"30% boost to the standard welcome bonus with a promo code"},
                             "1":
                                {"0":"Bonus rollover applies only to parlay bets"}
                             }',
             'value_es' => '{"0":
                                {"0":"Funciones destacadas totalmente compatibles con la app, como Multi-LIVE",
                                 "1":"Gran variedad de promociones para nuevos y antiguos usuarios",
                                 "2":"Una de las selecciones más amplias de deportes y ligas",
                                 "3":"Bono de bienvenida mejorado en un 30% con código promocional"},
                             "1":
                                {"0":"El requisito de apuesta del bono se limita solo a apuestas combinadas (parlays)"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Excellentes fonctionnalités entièrement compatibles avec l\'application, comme le Multi-LIVE",
                                 "1":"Large choix de promotions pour les nouveaux comme les anciens utilisateurs",
                                 "2":"L\'une des offres les plus complètes en matière de sports et de ligues",
                                 "3":"Bonus de bienvenue majoré de 30% avec un code promo"},
                             "1":
                                {"0":"Conditions de mise du bonus valables uniquement pour les paris combinés (parlays)"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Ótimos recursos totalmente compatíveis com o app, como o Multi-LIVE",
                                 "1":"Grande variedade de promoções para novos e antigos usuários",
                                 "2":"Uma das maiores seleções de esportes e ligas disponíveis",
                                 "3":"Bônus de boas-vindas aumentado em 30% com código promocional"},
                             "1":
                                {"0":"O rollover do bônus é válido apenas para apostas múltiplas (parlays)"}
                             }',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 5
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
                'value_en' => '{"0":"Download Betwinner on Android"}',
                'value_es' => '{"0":"Descarga Betwinner en Android"}',
                'value_fr' => '{"0":"Téléchargez Betwinner sur Android"}',
                'value_pt' => '{"0":"Baixe o Betwinner no Android"}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 6
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Android users will be pleased to know that they can easily place sports bets from their smartphones thanks to the Betwinner app. The majority of online sports bets are placed via mobile devices, and Betwinner has made sure its mobile platform is as user-friendly and efficient as possible. Read on to find out how to quickly install the app and get started."}',
             'value_es' => '{"0":"Los usuarios de Android estarán encantados de saber que pueden realizar apuestas deportivas fácilmente desde sus teléfonos inteligentes gracias a la aplicación de Betwinner. La mayoría de las apuestas deportivas en línea se realizan desde dispositivos móviles, y Betwinner se ha asegurado de que su plataforma móvil sea lo más cómoda y eficiente posible. Sigue leyendo para saber cómo instalar la app y empezar a jugar."}',
             'value_fr' => '{"0":"Les utilisateurs Android seront ravis d’apprendre qu’ils peuvent facilement parier sur le sport depuis leur smartphone grâce à l’application Betwinner. La majorité des paris sportifs en ligne sont effectués via des appareils mobiles, et Betwinner a veillé à ce que sa plateforme mobile soit aussi pratique qu\'efficace. Découvrez ci-dessous comment installer rapidement l’application et commencer à jouer."}',
             'value_pt' => '{"0":"Os usuários de Android ficarão felizes em saber que podem fazer apostas esportivas com facilidade a partir de seus smartphones graças ao aplicativo da Betwinner. A maioria das apostas esportivas online é feita por meio de dispositivos móveis, e a Betwinner garantiu que sua plataforma móvel seja o mais prática e eficiente possível. Continue lendo para saber como instalar o app e começar a apostar."}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 7
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
                'value_en' => '{"0":"How to install the Betwinner app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación de Betwinner en Android?"}',
                'value_fr' => '{"0":"Comment installer l\'application Betwinner sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo da Betwinner no Android?"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 8
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Installing the Betwinner app is very easy and won’t take much of your time. Just follow a few simple steps to start playing."}',
             'value_es' => '{"0":"Instalar la aplicación de Betwinner es muy sencillo y no te llevará mucho tiempo. Solo sigue unos pocos pasos para empezar a jugar."}',
             'value_fr' => '{"0":"L’installation de l’application Betwinner est très simple et ne vous prendra que quelques minutes. Suivez ces quelques étapes pour commencer à jouer."}',
             'value_pt' => '{"0":"Instalar o aplicativo da Betwinner é muito fácil e não vai tomar muito do seu tempo. Basta seguir alguns passos simples para começar a jogar."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 9
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
                'value_en' => '{"0":"The first step is simply to follow the link to the Betwinner betting site. Once on the homepage, you’ll be able to create an account, claim a generous welcome bonus, and gain access to some of the most competitive odds on the market."}',
                'value_es' => '{"0":"El primer paso es simplemente seguir el enlace al sitio de apuestas de Betwinner. Una vez en la página principal, podrás crear una cuenta, aprovechar un generoso bono de bienvenida y acceder a algunas de las cuotas más competitivas del mercado."}',
                'value_fr' => '{"0":"La première étape consiste simplement à suivre le lien vers le site de paris de Betwinner. Une fois sur la page d\'accueil, vous pourrez créer un compte, profiter d\'un généreux bonus de bienvenue et accéder à certaines des cotes les plus avantageuses du marché."}',
                'value_pt' => '{"0":"O primeiro passo é simplesmente seguir o link para o site de apostas da Betwinner. Ao acessar a página inicial, você poderá criar uma conta, aproveitar um generoso bônus de boas-vindas e ter acesso a algumas das melhores odds do mercado."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 10
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
                'value_en' => '{"0":"Search for the Betwinner app in the Play Store"}',
                'value_es' => '{"0":"Busca la aplicación de Betwinner en la Play Store"}',
                'value_fr' => '{"0":"Recherchez l\'application Betwinner dans le Play Store"}',
                'value_pt' => '{"0":"Procure o aplicativo da Betwinner na Play Store"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 11
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Head into the Google Play Store and search for the Betwinner app. Make sure the app is published by the official developer, then download it. Thanks to its small size, the file will be downloaded in just a few seconds."}',
             'value_es' => '{"0":"Entra en Google Play Store y busca la aplicación de Betwinner. Asegúrate de que la aplicación esté publicada por el desarrollador oficial y descárgala. Gracias a su tamaño reducido, la descarga tomará solo unos segundos."}',
             'value_fr' => '{"0":"Rendez-vous sur le Google Play Store et recherchez l\'application Betwinner. Assurez-vous que l\'application est publiée par le développeur officiel, puis téléchargez-la. Grâce à sa petite taille, le fichier se téléchargera en quelques secondes."}',
             'value_pt' => '{"0":"Acesse a Google Play Store e procure pelo aplicativo da Betwinner. Certifique-se de que o aplicativo foi publicado pelo desenvolvedor oficial e faça o download. Devido ao seu tamanho reduzido, o arquivo será baixado em apenas alguns segundos."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 12
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account"}',
                'value_es' => '{"0":"Verifica tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez votre compte"}',
                'value_pt' => '{"0":"Verifique sua conta"}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 13
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"To have full access to all platform features, including withdrawing funds and certain deposit methods, it is recommended to verify your account as soon as possible. You will need to provide a valid ID and a proof of address. After your identity is verified, go to your profile and choose a convenient deposit method. Important: deposits made via cryptocurrency do not count toward the welcome bonus."}',
             'value_es' => '{"0":"Para tener acceso completo a todas las funciones de la plataforma, incluyendo el retiro de fondos y algunos métodos de depósito, se recomienda verificar su cuenta lo antes posible. Deberá proporcionar una identificación válida y un comprobante de domicilio. Una vez que su identidad sea verificada, vaya a su perfil y elija un método de depósito conveniente. Importante: los depósitos realizados mediante criptomonedas no cuentan para el bono de bienvenida."}',
             'value_fr' => '{"0":"Pour avoir un accès complet à toutes les fonctionnalités de la plateforme, y compris le retrait des fonds et certaines méthodes de dépôt, il est recommandé de vérifier votre compte dès que possible. Vous devrez fournir une pièce d’identité valide et un justificatif de domicile. Une fois votre identité vérifiée, rendez-vous dans votre profil et choisissez un mode de dépôt adapté. Important : les dépôts effectués via la cryptomonnaie ne sont pas pris en compte pour le bonus de bienvenue."}',
             'value_pt' => '{"0":"Para ter acesso completo a todas as funcionalidades da plataforma, incluindo levantamento de fundos e alguns métodos de depósito, recomenda-se verificar a sua conta o mais rápido possível. Será necessário fornecer um documento de identificação válido e uma prova de morada. Depois de verificar a sua identidade, aceda ao seu perfil e escolha um método de depósito conveniente. Importante: os depósitos feitos através de criptomoedas não contam para o bónus de boas-vindas."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 14
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
                'value_en' => '{"0":"How to install the Betwinner mobile app APK if it\'s not on the Play Store?"}',
                'value_es' => '{"0":"¿Cómo instalar el archivo APK de la aplicación móvil de Betwinner si no está disponible en la Play Store?"}',
                'value_fr' => '{"0":"Comment installer le fichier APK de l\'application mobile Betwinner si elle n\'est pas disponible sur le Play Store ?"}',
                'value_pt' => '{"0":"Como instalar o APK do aplicativo móvel da Betwinner se ele não estiver disponível na Play Store?"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 15
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Sometimes the Betwinner mobile app may not appear in the Google Play Store. Don’t worry — there is an alternative way to download it. Just visit the official Betwinner website and use the direct download link."}',
             'value_es' => '{"0":"A veces la aplicación móvil de Betwinner puede no aparecer en Google Play Store. No te preocupes, hay una forma alternativa de descargarla. Simplemente visita el sitio oficial de Betwinner y utiliza el enlace de descarga directa."}',
             'value_fr' => '{"0":"Il arrive parfois que l’application mobile Betwinner n’apparaisse pas sur le Google Play Store. Ne vous inquiétez pas — il existe une autre façon de la télécharger. Il vous suffit de visiter le site officiel de Betwinner et d’utiliser le lien de téléchargement direct."}',
             'value_pt' => '{"0":"Às vezes, o aplicativo móvel Betwinner pode não aparecer na Google Play Store. Não se preocupe — existe uma maneira alternativa de baixá-lo. Basta visitar o site oficial da Betwinner e usar o link de download direto."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 16
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"If you prefer not to download the app from Google Play or any other source, you can always use the mobile version of the Betwinner site for betting. It is well optimized and very similar to the desktop version, so all features and betting tools remain available."}',
             'value_es' => '{"0":"Si prefieres no descargar la aplicación ni desde Google Play ni desde otras fuentes, siempre puedes usar la versión móvil del sitio de Betwinner para apostar. Está bien optimizada y es muy similar a la versión de escritorio, por lo que todas las funciones y herramientas de apuestas están disponibles."}',
             'value_fr' => '{"0":"Si vous ne souhaitez pas télécharger l’application depuis Google Play ou d’autres sources, vous pouvez toujours utiliser la version mobile du site Betwinner pour parier. Elle est bien optimisée et très similaire à la version desktop, donc toutes les fonctionnalités et outils de pari restent disponibles."}',
             'value_pt' => '{"0":"Se preferir não baixar o aplicativo pela Google Play ou outras fontes, você sempre pode usar a versão móvel do site Betwinner para fazer suas apostas. Ela é bem otimizada e muito semelhante à versão para desktop, portanto, todas as funcionalidades e ferramentas de apostas continuam disponíveis."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 17
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
                'value_en' => '{"0":"Download the Betwinner mobile app on iOS"}',
                'value_es' => '{"0":"Descarga la aplicación móvil de Betwinner en iOS"}',
                'value_fr' => '{"0":"Téléchargez l\'application mobile Betwinner sur iOS"}',
                'value_pt' => '{"0":"Baixe o aplicativo móvel Betwinner no iOS"}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 18
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
                'value_en' => '{"0":"iPhone and iPad users can also enjoy everything Betwinner has to offer. Below you\'ll find a step-by-step guide on how to install the app on your device."}',
                'value_es' => '{"0":"Los usuarios de iPhone y iPad también pueden disfrutar de todo lo que ofrece Betwinner. A continuación, encontrarás una guía paso a paso para instalar la aplicación en tu dispositivo."}',
                'value_fr' => '{"0":"Les utilisateurs d’iPhone et d’iPad peuvent eux aussi profiter de toutes les fonctionnalités de Betwinner. Vous trouverez ci-dessous un guide étape par étape pour installer l’application sur votre appareil."}',
                'value_pt' => '{"0":"Os usuários de iPhone e iPad também podem aproveitar todos os recursos do Betwinner. Abaixo, você encontrará um guia passo a passo para instalar o aplicativo no seu dispositivo."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 19
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
             'value_en' => '{"0":"img-1.jpg"}',
             'value_es' => '{"0":"img-1.jpg"}',
             'value_fr' => '{"0":"img-1.jpg"}',
             'value_pt' => '{"0":"img-1.jpg"}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 20
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
                'value_en' => '{"0":"How to install the Betwinner mobile app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación móvil de Betwinner en iOS?"}',
                'value_fr' => '{"0":"Comment installer l\'application mobile Betwinner sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo móvel da Betwinner no iOS?"}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 21
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Just like with the Android app, iOS users can install the mobile app either through the Apple App Store or download it directly from the official Betwinner website. Here is a step-by-step guide:"}',
             'value_es' => '{"0":"Al igual que con la aplicación para Android, los usuarios de iOS pueden instalar la aplicación móvil a través de la Apple App Store o descargarla directamente desde el sitio oficial de Betwinner. Aquí tienes una guía paso a paso:"}',
             'value_fr' => '{"0":"Tout comme pour l’application Android, les utilisateurs iOS peuvent installer l’application mobile via l’Apple App Store ou la télécharger directement depuis le site officiel de Betwinner. Voici un guide étape par étape :"}',
             'value_pt' => '{"0":"Assim como no aplicativo Android, os usuários iOS podem instalar o aplicativo móvel pela Apple App Store ou baixá-lo diretamente do site oficial da Betwinner. Aqui está um guia passo a passo:"}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 22
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
                'value_en' => '{"0":"Go to the Betwinner homepage using the link"}',
                'value_es' => '{"0":"Ve a la página principal de Betwinner utilizando el enlace"}',
                'value_fr' => '{"0":"Accédez à la page d’accueil de Betwinner en utilisant le lien"}',
                'value_pt' => '{"0":"Acesse a página inicial da Betwinner através do link"}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 23
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"All the links on this page are reliable and lead directly to the Betwinner website. This allows you to quickly and easily register and become eligible for a fantastic 100% welcome bonus."}',
             'value_es' => '{"0":"Todos los enlaces en esta página son confiables y te llevan directamente al sitio web de Betwinner. Esto te permite registrarte rápida y fácilmente y obtener derecho a un fantástico bono de bienvenida del 100%."}',
             'value_fr' => '{"0":"Tous les liens sur cette page sont fiables et mènent directement au site Betwinner. Cela vous permet de vous inscrire rapidement et facilement et d’être éligible à un fantastique bonus de bienvenue de 100 %."}',
             'value_pt' => '{"0":"Todos os links nesta página são confiáveis e levam diretamente ao site da Betwinner. Isso permite que você se registre rápida e facilmente e tenha direito a um fantástico bônus de boas-vindas de 100%."}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 24
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
                'value_en' => '{"0":"Go to the Betwinner homepage using the link"}',
                'value_es' => '{"0":"Ve a la página principal de Betwinner utilizando el enlace"}',
                'value_fr' => '{"0":"Accédez à la page d’accueil de Betwinner en utilisant le lien"}',
                'value_pt' => '{"0":"Acesse a página inicial da Betwinner através do link"}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 25
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
                'value_en' => '{"0":"Go to the Betwinner homepage by clicking the «Download» button at the top of the page."}',
                'value_es' => '{"0":"Ve a la página principal de 1XBET haciendo clic en el botón «Descargar» en la parte superior de la página."}',
                'value_fr' => '{"0":"Accédez à la page d’accueil de Betwinner en cliquant sur le bouton «Télécharger» en haut de la page."}',
                'value_pt' => '{"0":"Acesse a página inicial da Betwinner clicando no botão «Baixar» no topo da página."}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 26
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
                'value_en' => '{"0":"Fill in the sign-up form"}',
                'value_es' => '{"0":"Rellena el formulario de registro"}',
                'value_fr' => '{"0":"Remplissez le formulaire d’inscription"}',
                'value_pt' => '{"0":"Preencha o formulário de registro"}',
             'order' => 26
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 27
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"When registering your Betwinner account, you will need to choose the type of bonus you want. Don’t forget to select the bonus for sports betting."}',
             'value_es' => '{"0":"Al registrarte en tu cuenta de Betwinner, deberás elegir el tipo de bono que deseas. No olvides seleccionar el bono para apuestas deportivas."}',
             'value_fr' => '{"0":"Lors de l\'inscription de votre compte Betwinner, vous devrez choisir le type de bonus que vous souhaitez. N\'oubliez pas de sélectionner le bonus pour les paris sportifs."}',
             'value_pt' => '{"0":"Ao registrar sua conta Betwinner, você precisará escolher o tipo de bônus que deseja. Não se esqueça de selecionar o bônus para apostas esportivas."}',
             'order' => 27
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 28
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account and make your first deposit"}',
                'value_es' => '{"0":"Verifica tu cuenta y realiza tu primer depósito"}',
                'value_fr' => '{"0":"Vérifiez votre compte et effectuez votre premier dépôt"}',
                'value_pt' => '{"0":"Verifique sua conta e faça seu primeiro depósito"}',
             'order' => 28
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 29
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"All that’s left is to log into your account and go to the cashier to choose a convenient deposit method. Keep in mind that deposits made with cryptocurrency are not eligible for the welcome bonus. Therefore, we recommend choosing another deposit method to fully take advantage of this lucrative bonus offer."}',
             'value_es' => '{"0":"Solo queda ingresar a tu cuenta y dirigirte a la caja para elegir un método de depósito conveniente. Ten en cuenta que los depósitos realizados con criptomonedas no son elegibles para el bono de bienvenida. Por lo tanto, recomendamos elegir otro método de depósito para aprovechar al máximo esta oferta de bonificación rentable."}',
             'value_fr' => '{"0":"Il ne vous reste plus qu’à vous connecter à votre compte et à vous rendre à la caisse pour choisir une méthode de dépôt pratique. Notez que les dépôts effectués en cryptomonnaies ne donnent pas droit au bonus de bienvenue. Nous vous recommandons donc de choisir un autre mode de dépôt afin de profiter pleinement de cette offre de bonus avantageuse."}',
             'value_pt' => '{"0":"Tudo o que resta é entrar na sua conta e ir ao caixa para escolher um método de depósito conveniente. Tenha em mente que depósitos feitos com criptomoedas não são elegíveis para o bônus de boas-vindas. Portanto, recomendamos escolher outro método de depósito para aproveitar ao máximo esta oferta lucrativa de bônus."}',
             'order' => 29
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 30
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
                'value_en' => '{"0":"The features of the Betwinner mobile app"}',
                'value_es' => '{"0":"Las funciones de la aplicación móvil de Betwinner"}',
                'value_fr' => '{"0":"Les fonctionnalités de l’application mobile Betwinner"}',
                'value_pt' => '{"0":"Os recursos do aplicativo móvel da Betwinner"}',
             'order' => 30
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 31
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The Betwinner mobile betting app offers a range of key features that make it a great choice both for users looking for a new primary sportsbook and for those who want more betting options. Betwinner’s main strength lies in its wide selection of football and cricket bets. Additionally, the app includes many useful tools and features designed with the needs of true sports enthusiasts in mind."}',
             'value_es' => '{"0":"La aplicación móvil de apuestas Betwinner ofrece una serie de funciones clave que la convierten en una excelente opción tanto para usuarios que buscan una nueva casa de apuestas principal como para aquellos que desean más opciones de apuestas. La principal ventaja de Betwinner es su amplia selección de apuestas en fútbol y cricket. Además, la aplicación incluye muchas herramientas y funciones útiles diseñadas pensando en las necesidades de los verdaderos aficionados al deporte."}',
             'value_fr' => '{"0":"L’application mobile de paris Betwinner propose une série de fonctionnalités clés qui en font un excellent choix, tant pour les utilisateurs à la recherche d’un nouveau site principal de paris sportifs que pour ceux qui souhaitent disposer de plus d’options de paris. Le principal atout de Betwinner réside dans sa large sélection de paris sur le football et le cricket. De plus, l’application contient de nombreux outils et fonctionnalités utiles conçus en tenant compte des besoins des vrais passionnés de sport."}',
             'value_pt' => '{"0":"O aplicativo móvel de apostas Betwinner oferece uma série de recursos importantes que o tornam uma ótima escolha tanto para usuários que procuram uma nova casa de apostas principal quanto para aqueles que desejam mais opções de apostas. A principal vantagem da Betwinner está na ampla seleção de apostas em futebol e críquete. Além disso, o aplicativo inclui muitas ferramentas e recursos úteis, desenvolvidos pensando nas necessidades dos verdadeiros fãs de esportes."}',
             'order' => 31
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 32
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Below is a detailed overview of what to expect:"}',
             'value_es' => '{"0":"A continuación, encontrará un detalle más completo de lo que puede esperar:"}',
             'value_fr' => '{"0":"Voici un aperçu détaillé de ce qui vous attend :"}',
             'value_pt' => '{"0":"Abaixo está uma visão detalhada do que esperar:"}',
             'order' => 32
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 33
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'list_v2',
             'value_en' => '{"0":"Huge promotion list, continuously updated throughout the year",
                             "1":"Reload and free bet promos for existing users",
                             "2":"Early cash out feature",
                             "3":"Casino and live dealer games",
                             "4":"24/7 support and live chat",
                             "5":"Multi-LIVE feature for live betting",
                             "6":"Multiple «Accumulator of the Day» bets with boosted odds",
                             "7":"One-click registration",
                             "8":"One of the best Esports betting selections that we have come across",
                             "9":"Extensive football betting selection with over 60 countries represented",
                             "10":"All of the world’s biggest cricket events"}',
             'value_es' => '{"0":"Gran lista de promociones, actualizada continuamente durante todo el año",
                             "1":"Promociones de recarga y apuestas gratuitas para usuarios existentes",
                             "2":"Función de retiro anticipado",
                             "3":"Casino y juegos con crupier en vivo",
                             "4":"Soporte 24/7 y chat en vivo",
                             "5":"Función Multi-LIVE para apuestas en vivo",
                             "6":"Múltiples apuestas «Combinada del Día» con cuotas aumentadas",
                             "7":"Registro con un solo clic",
                             "8":"Una de las mejores selecciones de apuestas en Esports que hemos visto",
                             "9":"Amplia selección de apuestas de fútbol con más de 60 países representados",
                             "10":"Todos los principales eventos de cricket del mundo"}',
             'value_fr' => '{"0":"Grande liste de promotions, mise à jour en continu tout au long de l’année",
                             "1":"Promotions de rechargement et paris gratuits pour les utilisateurs existants",
                             "2":"Fonction de retrait anticipé",
                             "3":"Jeux de casino et croupiers en direct",
                             "4":"Support 24/7 et chat en direct",
                             "5":"Fonction Multi-LIVE pour les paris en direct",
                             "6":"Multiples paris «Pari Combiné du Jour» avec cotes boostées",
                             "7":"Inscription en un clic",
                             "8":"Une des meilleures sélections de paris Esports que nous ayons rencontrées",
                             "9":"Large sélection de paris football avec plus de 60 pays représentés",
                             "10":"Tous les plus grands événements mondiaux de cricket"}',
             'value_pt' => '{"0":"Grande lista de promoções, atualizada continuamente ao longo do ano",
                             "1":"Promoções de recarga e apostas grátis para usuários existentes",
                             "2":"Função de saque antecipado",
                             "3":"Cassino e jogos com dealer ao vivo",
                             "4":"Suporte 24/7 e chat ao vivo",
                             "5":"Função Multi-LIVE para apostas ao vivo",
                             "6":"Múltiplas apostas «Acumulador do Dia» com odds aumentadas",
                             "7":"Registro com um clique",
                             "8":"Uma das melhores seleções de apostas em Esports que já vimos",
                             "9":"Extensa seleção de apostas de futebol com mais de 60 países representados",
                             "10":"Todos os maiores eventos de críquete do mundo"}',
             'order' => 33
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 34
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Betwinner has several features that clearly set this sportsbook apart from others. In particular, the Multi-LIVE feature is an excellent tool for those who enjoy live betting, as it allows you to conveniently track multiple events at once. Another highlight is the «Accumulator of the Day» — a selection of interesting parlays across different leagues and sports with an additional 10% bonus from Betwinner. Register today to experience all the advantages Betwinner has to offer!"}',
             'value_es' => '{"0":"Betwinner cuenta con varias características que claramente distinguen a esta casa de apuestas de las demás. En particular, la función Multi-LIVE es una herramienta excelente para quienes disfrutan apostar en directo, ya que permite seguir varios eventos simultáneamente de manera cómoda. Otro punto destacado es el «Combinada del Día»: una selección de combinadas interesantes en distintas ligas y deportes con un bono adicional del 10% por parte de Betwinner. ¡Regístrate hoy para experimentar todas las ventajas que Betwinner ofrece!"}',
             'value_fr' => '{"0":"Betwinner dispose de plusieurs fonctionnalités qui distinguent clairement ce bookmaker des autres. En particulier, la fonction Multi-LIVE est un excellent outil pour ceux qui aiment parier en direct, car elle permet de suivre plusieurs événements simultanément de manière pratique. Un autre point fort est «Pari Combiné du Jour» — une sélection de paris combinés intéressants sur différentes ligues et sports avec un bonus supplémentaire de 10% offert par Betwinner. Inscrivez-vous dès aujourd’hui pour découvrir tous les avantages que Betwinner propose !"}',
             'value_pt' => '{"0":"Betwinner possui várias características que claramente destacam esta casa de apostas das outras. Em particular, o recurso Multi-LIVE é uma ferramenta excelente para quem gosta de apostar ao vivo, pois permite acompanhar vários eventos simultaneamente de forma prática. Outro destaque é o «Acumulador do Dia» — uma seleção de apostas combinadas interessantes em diferentes ligas e esportes com um bônus adicional de 10% oferecido pela Betwinner. Registre-se hoje para experimentar todas as vantagens que a Betwinner oferece!"}',
             'order' => 34
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 0
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 0
            ]
        );
    }
}
