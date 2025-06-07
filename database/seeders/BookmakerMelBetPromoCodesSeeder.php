<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMelBetPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 1
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"With the promo code :promocode, users can receive an incredible welcome bonus of up to 100% plus $30 as a gift. Simply enter the promo code :promocode when creating a new MelBet account to get an extra bonus on your first deposit!"}',
             'value_es' => '{"0":"Con el código promocional :promocode, los usuarios pueden obtener un increíble bono de bienvenida de hasta el 100% más $30 de regalo. Solo tienes que introducir el código :promocode al crear una nueva cuenta en MelBet para recibir un bono adicional en tu primer depósito."}',
             'value_fr' => '{"0":"Avec le code promo :promocode, les utilisateurs peuvent recevoir un incroyable bonus de bienvenue allant jusqu’à 100% plus 30 $ offerts. Il suffit d’entrer le code :promocode lors de la création d’un nouveau compte MelBet pour bénéficier d’un bonus supplémentaire sur votre premier dépôt !"}',
             'value_pt' => '{"0":"Com o código promocional :promocode, os usuários podem receber um incrível bônus de boas-vindas de até 100% mais $30 de presente. Basta inserir o código :promocode ao criar uma nova conta na MelBet para obter um bônus extra no primeiro depósito!"}',
             'order' => 1,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 2
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet’s standard welcome offer includes a three-tier bonus. But with our :promocode code, you can enjoy an improved offer — 100% first deposit bonus plus $30 as a gift. It’s a great way to start playing with one of the top bookmakers."}',
             'value_es' => '{"0":"La oferta estándar de bienvenida de MelBet incluye un bono en tres etapas. Pero con nuestro código :promocode, puedes acceder a una promoción mejorada: 100% de bono en tu primer depósito más $30 de regalo. Es una excelente manera de comenzar a jugar con uno de los mejores operadores."}',
             'value_fr' => '{"0":"L’offre de bienvenue standard de MelBet comprend un bonus en trois étapes. Mais avec notre code :promocode, vous bénéficiez d’une offre améliorée : 100% de bonus sur le premier dépôt + 30 $ offerts. Une excellente façon de commencer à jouer avec l’un des meilleurs bookmakers."}',
             'value_pt' => '{"0":"A oferta padrão de boas-vindas da MelBet inclui um bônus em três etapas. Mas com o nosso código :promocode, você aproveita uma oferta melhorada: bônus de 100% no primeiro depósito mais $30 de presente. É uma ótima maneira de começar a apostar com uma das melhores casas do mercado."}',
             'order' => 2,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 3
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
             'value_en' => '{"0":"img-1.jpg"}',
             'value_es' => '{"0":"img-1.jpg"}',
             'value_fr' => '{"0":"img-1.jpg"}',
             'value_pt' => '{"0":"img-1.jpg"}',
             'order' => 3,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 4
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Why use the MelBet promo code?"}',
             'value_es' => '{"0":"¿Por qué usar el código promocional de MelBet?"}',
             'value_fr' => '{"0":"Pourquoi utiliser le code promo MelBet ?"}',
             'value_pt' => '{"0":"Por que usar o código promocional da MelBet?"}',
             'order' => 4,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 5
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"When choosing a new bookmaker, it\'s important to feel a sense of trust. Our review of the MelBet betting site will give confidence to those considering creating an account."}',
             'value_es' => '{"0":"A la hora de elegir una nueva casa de apuestas, es importante sentir confianza. Nuestra reseña sobre MelBet brinda seguridad a quienes están considerando crear una cuenta."}',
             'value_fr' => '{"0":"Lorsqu\'on choisit un nouveau bookmaker, il est important de se sentir en confiance. Notre avis sur MelBet apportera de l’assurance à ceux qui envisagent d’ouvrir un compte."}',
             'value_pt' => '{"0":"Ao escolher uma nova casa de apostas, é importante ter uma sensação de confiança. Nossa análise da MelBet ajuda a dar segurança para quem está pensando em criar uma conta."}',
             'order' => 5,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 6
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"In addition, it\'s a great opportunity to take full advantage of MelBet’s welcome offer. By using the promo code :promocode during registration, you’ll receive a 100% bonus on your first deposit plus $30 as a gift."}',
             'value_es' => '{"0":"Además, es una excelente oportunidad para aprovechar al máximo la oferta de bienvenida de MelBet. Al usar el código promocional :promocode durante el registro, recibirás un bono del 100% en tu primer depósito más $30 de regalo."}',
             'value_fr' => '{"0":"De plus, c’est une excellente occasion de profiter pleinement de l’offre de bienvenue de MelBet. En utilisant le code promo :promocode lors de l’inscription, vous recevrez un bonus de 100 % sur votre premier dépôt ainsi que 30 $ offerts."}',
             'value_pt' => '{"0":"Além disso, é uma ótima chance de aproveitar ao máximo a oferta de boas-vindas da MelBet. Ao utilizar o código promocional :promocode no momento do cadastro, você recebe um bônus de 100% no primeiro depósito mais $30 de presente."}',
             'order' => 6,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 7
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"How to benefit from the Melbet promo code?"}',
             'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de Melbet?"}',
             'value_fr' => '{"0":"Comment profiter du code promo Melbet ?"}',
             'value_pt' => '{"0":"Como se beneficiar do código promocional da Melbet?"}',
             'order' => 7,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 8
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"In this section, we’ll explain in detail the exact steps you need to follow to take advantage of this impressive offer. This will help you complete the process more quickly and avoid any potential issues or mistakes."}',
                'value_es' => '{"0":"En esta sección, detallaremos los pasos que debes seguir para aprovechar esta increíble oferta. Esto te ayudará a completar el proceso más rápidamente y evitar posibles errores o inconvenientes."}',
                'value_fr' => '{"0":"Dans cette section, nous décrirons en détail les étapes à suivre pour profiter de cette offre exceptionnelle. Cela vous permettra de gagner du temps et d’éviter d’éventuelles erreurs ou complications."}',
                'value_pt' => '{"0":"Nesta seção, explicaremos em detalhes os passos que você deve seguir para aproveitar esta oferta impressionante. Isso ajudará você a concluir o processo mais rapidamente e evitar possíveis erros ou contratempos."}',
                'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 9
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
             'value_en' => '{"0":"Click on the promo link"}',
             'value_es' => '{"0":"Haz clic en el enlace promocional"}',
             'value_fr' => '{"0":"Cliquez sur le lien promotionnel"}',
             'value_pt' => '{"0":"Clique no link promocional"}',
             'order' => 9,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 10
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Click the «Register» button at the top of our review to visit the MelBet website and dive into the world of sports betting."}',
             'value_es' => '{"0":"Haz clic en el botón «Registro» en la parte superior de nuestra reseña para visitar el sitio web de MelBet y sumergirte en el mundo de las apuestas deportivas."}',
             'value_fr' => '{"0":"Cliquez sur le bouton «Inscription» en haut de notre avis pour accéder au site de MelBet et plonger dans l’univers des paris sportifs."}',
             'value_pt' => '{"0":"Clique no botão «Registro» no topo da nossa análise para acessar o site da MelBet e mergulhar no mundo das apostas esportivas."}',
             'order' => 10,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 11
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
             'value_en' => '{"0":"Fill in the MelBet registration form with the code :promocode"}',
             'value_es' => '{"0":"Rellena el formulario de registro de MelBet con el código :promocode"}',
             'value_fr' => '{"0":"Remplissez le formulaire d’inscription MelBet avec le code :promocode"}',
             'value_pt' => '{"0":"Preencha o formulário de registro da MelBet com o código :promocode"}',
             'order' => 11,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 12
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"When you click the link and open the MelBet homepage, look at the top right corner. There you’ll find a yellow button that says «Registration». Click on it, and the account creation form will appear."}',
             'value_es' => '{"0":"Cuando hagas clic en el enlace y se abra la página principal de MelBet, mira en la esquina superior derecha. Allí verás un botón amarillo que dice «Registro». Haz clic en él y aparecerá el formulario para crear una cuenta."}',
             'value_fr' => '{"0":"Lorsque vous cliquez sur le lien et accédez à la page d’accueil de MelBet, regardez dans le coin supérieur droit. Vous y verrez un bouton jaune portant la mention «Inscription». Cliquez dessus pour faire apparaître le formulaire de création de compte."}',
             'value_pt' => '{"0":"Ao clicar no link e abrir a página inicial da MelBet, olhe no canto superior direito. Lá você verá um botão amarelo com a palavra «Registro». Clique nele para abrir o formulário de criação de conta."}',
             'order' => 12,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 13
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Fill in the form carefully, providing only accurate information. Any mistakes or incorrect details may significantly complicate the next steps of the registration process, especially step three."}',
             'value_es' => '{"0":"Completa el formulario con cuidado, asegurándote de proporcionar solo información precisa. Los errores o datos incorrectos pueden dificultar seriamente los siguientes pasos del proceso de registro, especialmente el tercer paso."}',
             'value_fr' => '{"0":"Remplissez ce formulaire avec soin en fournissant uniquement des informations exactes. Toute erreur ou information incorrecte pourrait compliquer sérieusement les étapes suivantes de l’inscription, en particulier la troisième."}',
             'value_pt' => '{"0":"Preencha o formulário com atenção, fornecendo apenas informações corretas. Qualquer erro ou dado incorreto pode dificultar bastante as próximas etapas do processo de registro, especialmente a terceira."}',
             'order' => 13,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 14
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
             'value_en' => '{"0":"Verify your new account"}',
             'value_es' => '{"0":"Verifica tu nueva cuenta"}',
             'value_fr' => '{"0":"Vérifiez votre nouveau compte"}',
             'value_pt' => '{"0":"Verifique sua nova conta"}',
             'order' => 14,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 15
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"All bookmaker companies, regardless of the country, are required to verify the identity of their customers. When registering with MelBet, you will need to provide your full name, residential address, and phone number. Additionally, the company may ask for extra documents to confirm your identity."}',
             'value_es' => '{"0":"Todas las casas de apuestas, sin importar el país, están obligadas a verificar la identidad de sus clientes. Al registrarte en MelBet, deberás proporcionar tu nombre completo, dirección y número de teléfono. Además, la empresa puede solicitar documentos adicionales para confirmar tu identidad."}',
             'value_fr' => '{"0":"Toutes les sociétés de paris, quel que soit le pays, sont tenues d’identifier leurs clients. Lors de votre inscription sur MelBet, vous devrez indiquer votre nom complet, votre adresse de résidence et votre numéro de téléphone. L’entreprise peut également demander des documents supplémentaires pour vérifier votre identité."}',
             'value_pt' => '{"0":"Todas as casas de apostas, independentemente do país, são obrigadas a identificar seus clientes. Ao se registrar na MelBet, você precisará fornecer seu nome completo, endereço residencial e número de telefone. A empresa também pode solicitar documentos adicionais para confirmar sua identidade."}',
             'order' => 15,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 16
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"This is a standard procedure in line with international regulations — bookmakers must ensure their users are of legal age and do not violate the platform\'s rules. If false information is provided, MelBet’s system will detect it, and you will be required to verify your identity."}',
             'value_es' => '{"0":"Este es un procedimiento estándar según las normas internacionales: los operadores deben asegurarse de que sus usuarios sean mayores de edad y cumplan con las reglas de la plataforma. Si proporcionas información falsa, el sistema de MelBet lo detectará y deberás verificar tu identidad."}',
             'value_fr' => '{"0":"Il s’agit d’une procédure standard conforme aux réglementations internationales — les bookmakers doivent s’assurer que les utilisateurs sont majeurs et respectent les règles de la plateforme. Si vous fournissez de fausses informations, le système de MelBet les détectera et vous devrez prouver votre identité."}',
             'value_pt' => '{"0":"Esse é um procedimento padrão conforme as normas internacionais — os operadores devem garantir que seus usuários sejam maiores de idade e sigam as regras da plataforma. Se você fornecer informações falsas, o sistema da MelBet detectará isso e será necessário verificar sua identidade."}',
             'order' => 16,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 17
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"In most cases, you’ll be asked to send a copy of a valid ID, such as a passport. The photo must be clear, with all four corners of the document visible. Failure to follow the verification requirements may result in the loss of bonuses or even account suspension."}',
             'value_es' => '{"0":"En la mayoría de los casos, se te pedirá que envíes una copia de un documento de identidad válido, como un pasaporte. La imagen debe ser clara y mostrar las cuatro esquinas del documento. Si no cumples con los requisitos de verificación, podrías perder tus bonos o que tu cuenta sea bloqueada."}',
             'value_fr' => '{"0":"Dans la plupart des cas, on vous demandera une copie d’un document d’identité valide, comme un passeport. La photo doit être nette et les quatre coins du document bien visibles. Le non-respect des règles de vérification peut entraîner la perte de bonus ou la suspension du compte."}',
             'value_pt' => '{"0":"Na maioria dos casos, será solicitado o envio de uma cópia de um documento de identidade válido, como um passaporte. A foto deve estar nítida e mostrar os quatro cantos do documento. O não cumprimento das exigências de verificação pode resultar na perda de bônus ou no bloqueio imediato da conta."}',
             'order' => 17,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 18
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet\'s website states: the information must be «exactly as it appears in the passport and in the language of the issuing country»."}',
             'value_es' => '{"0":"En el sitio web de MelBet se especifica que la información debe ser «exactamente como aparece en el pasaporte y en el idioma del país emisor»."}',
             'value_fr' => '{"0":"Le site de MelBet précise que les informations doivent être «exactement telles qu’elles figurent sur le passeport et dans la langue du pays émetteur»."}',
             'value_pt' => '{"0":"No site da MelBet, é destacado que as informações devem estar «exatamente como aparecem no passaporte e no idioma do país emissor»."}',
             'order' => 18,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 19
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
             'value_en' => '{"0":"Make your first deposit with MelBet"}',
             'value_es' => '{"0":"Haz tu primer depósito en MelBet"}',
             'value_fr' => '{"0":"Effectuez votre premier dépôt sur MelBet"}',
             'value_pt' => '{"0":"Faça o seu primeiro depósito na MelBet"}',
             'order' => 19,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 20
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"To take advantage of MelBet’s bonus offer, you first need to make a deposit. The minimum deposit is $1, but to get the most value, it’s recommended to deposit a larger amount — as close to the maximum limit as possible."}',
             'value_es' => '{"0":"Para aprovechar la oferta de bonificación de MelBet, primero debes realizar un depósito. El depósito mínimo es de $1, pero para obtener el mayor beneficio, se recomienda ingresar una cantidad mayor, lo más cercana posible al límite máximo."}',
             'value_fr' => '{"0":"Pour bénéficier de l’offre de bonus de MelBet, vous devez d’abord effectuer un dépôt. Le dépôt minimum est de 1 $, mais pour maximiser vos avantages, il est conseillé de déposer un montant plus élevé, aussi proche que possible de la limite maximale."}',
             'value_pt' => '{"0":"Para aproveitar a oferta de bônus da MelBet, primeiro você precisa fazer um depósito. O valor mínimo é de $1, mas para aproveitar ao máximo, é recomendável depositar uma quantia maior — o mais próximo possível do valor máximo."}',
             'order' => 20,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 21
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet offers a 100% bonus for those who deposit the maximum amount, so it\'s best to invest as much as you\'re comfortable with. Remember to gamble responsibly: never deposit more than you can afford to lose. Even a $1 deposit qualifies for the bonus."}',
             'value_es' => '{"0":"MelBet ofrece un bono del 100% para quienes realicen el depósito máximo, por lo que conviene invertir lo que te resulte cómodo. Recuerda jugar con responsabilidad: no ingreses más de lo que puedas permitirte perder. Incluso con solo $1 ya puedes activar el bono."}',
             'value_fr' => '{"0":"MelBet offre un bonus de 100 % à ceux qui effectuent un dépôt maximal, donc mieux vaut investir une somme avec laquelle vous êtes à l’aise. Jouez de manière responsable : ne déposez jamais plus que ce que vous pouvez vous permettre de perdre. Même un dépôt de 1 $ permet de bénéficier du bonus."}',
             'value_pt' => '{"0":"A MelBet oferece um bônus de 100% para quem deposita o valor máximo, então invista apenas o que estiver dentro do seu orçamento. Jogue com responsabilidade: nunca deposite mais do que pode perder. Mesmo com $1, você já pode ativar o bônus."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 22
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet offers three bonus levels:"}',
             'value_es' => '{"0":"MelBet ofrece tres niveles de bonificación:"}',
             'value_fr' => '{"0":"MelBet propose trois niveaux de bonus :"}',
             'value_pt' => '{"0":"A MelBet oferece três níveis de bônus:"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 23
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'list_v2',
             'value_en' => '{"0":"Deposit from $1 to $100 — 100% bonus",
                             "1":"Deposit from $100 to $200 — 125% bonus",
                             "2":"Deposit from $200 to $500 — 150% bonus"}',
             'value_es' => '{"0":"Depósito de $1 a $100 — bono del 100%",
                             "1":"Depósito de $100 a $200 — bono del 125%",
                             "2":"Depósito de $200 a $500 — bono del 150%"}',
             'value_fr' => '{"0":"Dépôt de 1 $ à 100 $ — bonus de 100 %",
                             "1":"Dépôt de 100 $ à 200 $ — bonus de 125 %",
                             "2":"Dépôt de 200 $ à 500 $ — bonus de 150 %"}',
             'value_pt' => '{"0":"Depósito de $1 a $100 — bônus de 100%",
                             "1":"Depósito de $100 a $200 — bônus de 125%",
                             "2":"Depósito de $200 a $500 — bônus de 150%"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 24
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"To get the best offer, make sure to enter the promo code :promocode during registration."}',
             'value_es' => '{"0":"Para obtener la mejor oferta, asegúrate de ingresar el código promocional :promocode al registrarte."}',
             'value_fr' => '{"0":"Pour profiter de la meilleure offre, n’oubliez pas de saisir le code promo :promocode lors de votre inscription."}',
             'value_pt' => '{"0":"Para garantir a melhor oferta, não se esqueça de inserir o código promocional :promocode durante o cadastro."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 25
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
             'value_en' => '{"0":"Meet the set wagering requirements on the offer"}',
             'value_es' => '{"0":"Cumple con los requisitos de apuesta establecidos en la oferta"}',
             'value_fr' => '{"0":"Remplissez les conditions de mise prévues par l’offre"}',
             'value_pt' => '{"0":"Atenda aos requisitos de apostas definidos na oferta"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 26
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"You have 30 days to use the MelBet welcome bonus. During this period, you must meet the wagering requirement of 5X, 7X, or 10X, depending on the size of your initial deposit."}',
             'value_es' => '{"0":"Tienes 30 días para utilizar el bono de bienvenida de MelBet. Durante este período, debes cumplir con el requisito de apuesta de 5X, 7X o 10X, según el monto de tu depósito inicial."}',
             'value_fr' => '{"0":"Vous disposez de 30 jours pour utiliser le bonus de bienvenue MelBet. Pendant cette période, vous devez remplir les conditions de mise de 5X, 7X ou 10X, selon le montant de votre dépôt initial."}',
             'value_pt' => '{"0":"Você tem 30 dias para usar o bônus de boas-vindas da MelBet. Durante esse período, é necessário cumprir o requisito de aposta de 5X, 7X ou 10X, dependendo do valor do depósito inicial."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 27
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"If you deposit between $1 and $100, you’ll need to wager five times the deposit amount. These bets must be placed as accumulators with at least three events, and at least three of them must have odds of 1.4 or higher."}',
             'value_es' => '{"0":"Si depositas entre $1 y $100, deberás apostar cinco veces el monto del depósito en apuestas combinadas con al menos tres selecciones, y tres de ellas deben tener cuotas de 1.4 o superiores."}',
             'value_fr' => '{"0":"Si vous déposez entre 1 $ et 100 $, vous devrez miser cinq fois le montant du dépôt sous forme de paris combinés comprenant au moins trois événements, dont trois avec une cote de 1.4 ou plus."}',
             'value_pt' => '{"0":"Se você depositar entre $1 e $100, precisará apostar cinco vezes o valor do depósito em apostas múltiplas com pelo menos três seleções, sendo que três devem ter odds de 1.4 ou mais."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 28
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"If you deposit between $100 and $200, the wagering requirement increases to 7X under the same accumulator conditions."}',
             'value_es' => '{"0":"Para depósitos entre $100 y $200, el requisito de apuesta es 7X, con las mismas condiciones sobre las combinadas."}',
             'value_fr' => '{"0":"Pour les dépôts entre 100 $ et 200 $, l’exigence de mise est de 7X, avec les mêmes conditions concernant les combinés."}',
             'value_pt' => '{"0":"Para depósitos entre $100 e $200, o requisito sobe para 7X, com as mesmas regras para apostas múltiplas."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 29
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"For deposits of $200 or more, you must wager both the deposit and bonus amount ten times (10X) with accumulators containing at least three events, each at odds of 1.4 or above."}',
             'value_es' => '{"0":"Si depositas $200 o más, deberás apostar diez veces (10X) la suma del depósito y el bono en apuestas combinadas de mínimo tres selecciones con cuotas de al menos 1.4."}',
             'value_fr' => '{"0":"Si vous déposez 200 $ ou plus, vous devrez miser dix fois (10X) le montant total du dépôt et du bonus sur des paris combinés avec au moins trois sélections ayant chacune une cote d’au moins 1.4."}',
             'value_pt' => '{"0":"Depósitos de $200 ou mais exigem que você aposte dez vezes (10X) o valor do depósito e do bônus em apostas múltiplas com no mínimo três seleções e odds de pelo menos 1.4."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 30
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"You can place your bonus bets either pre-match or live."}',
             'value_es' => '{"0":"Puedes realizar las apuestas tanto en eventos pre-partido como en vivo."}',
             'value_fr' => '{"0":"Les mises peuvent être placées avant le match ou en direct."}',
             'value_pt' => '{"0":"Você pode realizar essas apostas tanto pré-jogo quanto ao vivo."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 31
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Note: Until you meet the wagering requirements, only the original deposit amount will be available for withdrawal."}',
             'value_es' => '{"0":"Importante: hasta que no cumplas los requisitos de apuesta, solo podrás retirar el monto de tu depósito inicial."}',
             'value_fr' => '{"0":"Remarque : tant que les conditions de mise ne sont pas remplies, seul le montant du dépôt initial pourra être retiré."}',
             'value_pt' => '{"0":"Atenção: até que os requisitos de aposta sejam atendidos, apenas o valor do depósito original poderá ser sacado."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 32
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"What if you are already registered at MelBet?"}',
             'value_es' => '{"0":"¿Qué pasa si ya estás registrado en MelBet?"}',
             'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur MelBet ?"}',
             'value_pt' => '{"0":"E se você já for registrado na MelBet?"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 33
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"All bookmakers take a firm stance on this matter. If you already have or previously had an account with MelBet, you will not be able to create a new one to claim the welcome bonus. Even if the account belongs to another member of your household, it is very likely that a second account will be rejected — there is a strict rule allowing only one account per IP address. This policy is common across most betting sites."}',
             'value_es' => '{"0":"Todos los operadores de apuestas tienen una postura clara al respecto. Si ya tienes o tuviste una cuenta en MelBet, no podrás crear otra para aprovechar el bono de bienvenida. Incluso si la cuenta está a nombre de otro miembro de tu familia, es muy probable que no te permitan abrir una nueva — existe una regla estricta que permite solo una cuenta por dirección IP. Esta práctica es común en la mayoría de los sitios de apuestas."}',
             'value_fr' => '{"0":"Tous les bookmakers sont très clairs à ce sujet. Si vous avez déjà un compte chez MelBet, ou en avez eu un dans le passé, vous ne pourrez pas en créer un nouveau pour profiter du bonus de bienvenue. Même si un autre membre de votre foyer possède un compte, il est fort probable qu’un second compte ne soit pas autorisé — une règle stricte limite à un seul compte par adresse IP. Cette politique est courante sur la plupart des sites de paris."}',
             'value_pt' => '{"0":"Todos os sites de apostas têm uma posição clara sobre esse assunto. Se você já tem ou teve uma conta na MelBet, não poderá criar outra para aproveitar o bônus de boas-vindas. Mesmo que a conta pertença a outro membro da sua família, é muito provável que a criação de uma segunda conta não seja permitida — existe uma regra rigorosa que permite apenas uma conta por endereço IP. Essa política é comum entre os sites de apostas."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 34
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"If you\'re unsure whether you\'ve registered before, or can\'t remember your login details, contact customer support — the team will do their best to help you recover access."}',
             'value_es' => '{"0":"Si no estás seguro de haber creado una cuenta antes o no recuerdas tus datos de acceso, contacta con el servicio de atención al cliente; harán lo posible por ayudarte a recuperar el acceso."}',
             'value_fr' => '{"0":"Si vous pensez avoir déjà créé un compte mais ne vous souvenez plus des identifiants, contactez le service client — ils feront leur possible pour vous aider à récupérer l’accès."}',
             'value_pt' => '{"0":"Se você acha que já teve uma conta, mas não se lembra dos dados de acesso, entre em contato com o suporte ao cliente — eles farão o possível para ajudá-lo a recuperar o acesso."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 35
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Existing users still benefit from many other perks offered by MelBet: regular promotions, special offers, and loyalty programs. So, there’s no point in breaking the rules just to get the sign-up bonus. Plus, there are plenty of attractive offers available for current users as well."}',
             'value_es' => '{"0":"Los usuarios que ya tienen cuenta en MelBet pueden disfrutar de muchas ventajas: promociones periódicas, ofertas especiales y programas de fidelidad. Así que no vale la pena romper las reglas solo por el bono de bienvenida. Además, hay muchas otras promociones interesantes disponibles para los usuarios existentes."}',
             'value_fr' => '{"0":"Les utilisateurs ayant déjà un compte peuvent bénéficier de nombreux avantages proposés par MelBet : promotions régulières, offres spéciales et programmes de fidélité. Il n’est donc pas nécessaire d’enfreindre les règles pour obtenir un second compte. De plus, le site propose de nombreuses autres opportunités intéressantes pour les clients existants."}',
             'value_pt' => '{"0":"Para quem já tem uma conta, a MelBet oferece diversas vantagens: promoções regulares, ofertas especiais e programas de fidelidade. Por isso, não vale a pena burlar as regras apenas para obter o bônus de registro. Além disso, há muitas outras promoções atrativas disponíveis para usuários já registrados."}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 36
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
             'value_en' => '{"0":"img-2.jpg"}',
             'value_es' => '{"0":"img-2.jpg"}',
             'value_fr' => '{"0":"img-2.jpg"}',
             'value_pt' => '{"0":"img-2.jpg"}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 37
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Why register with MelBet?"}',
             'value_es' => '{"0":"¿Por qué registrarse en MelBet?"}',
             'value_fr' => '{"0":"Pourquoi s’inscrire sur MelBet ?"}',
             'value_pt' => '{"0":"Por que se registrar na MelBet?"}',
             'order' => 37
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 38
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"We hope that our MelBet review has given you a complete picture of this bookmaker and convinced you that it’s worth creating your own account by clicking on one of the links on this page."}',
             'value_es' => '{"0":"Esperamos que nuestra reseña de MelBet le haya dado una imagen completa de este operador y le haya convencido de que vale la pena crear su propia cuenta haciendo clic en uno de los enlaces en esta página."}',
             'value_fr' => '{"0":"Nous espérons que notre revue de MelBet vous a donné une image complète de ce bookmaker et vous a convaincu qu\'il vaut la peine de créer votre propre compte en cliquant sur l\'un des liens de cette page."}',
             'value_pt' => '{"0":"Esperamos que a nossa análise do MelBet lhe tenha dado uma visão completa deste bookmaker e o tenha convencido de que vale a pena criar a sua própria conta clicando num dos links nesta página."}',
             'order' => 38
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 39
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet is a reliable company that continuously improves its product, offering users a safe betting platform with attractive odds. The brand has been around since 2012, which means stability, experience, and a long-term presence in the market."}',
             'value_es' => '{"0":"Melbet es una empresa confiable que mejora continuamente su producto, ofreciendo a los usuarios una plataforma segura para apostar con cuotas atractivas. La marca existe desde 2012, lo que significa estabilidad, experiencia y una presencia a largo plazo en el mercado."}',
             'value_fr' => '{"0":"Melbet est une entreprise fiable qui améliore continuellement son produit, offrant aux utilisateurs une plateforme de paris sécurisée avec des cotes attractives. La marque existe depuis 2012, ce qui signifie stabilité, expérience et présence à long terme sur le marché."}',
             'value_pt' => '{"0":"Melbet é uma empresa confiável que melhora continuamente o seu produto, oferecendo aos usuários uma plataforma de apostas segura com odds atrativas. A marca existe desde 2012, o que significa estabilidade, experiência e uma presença a longo prazo no mercado."}',
             'order' => 39
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 40
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"At the time of preparing this review, over 20 active bonuses were available to users, which clearly sets MelBet apart from competitors with more limited offers."}',
             'value_es' => '{"0":"Al momento de preparar esta reseña, había más de 20 bonos activos disponibles para los usuarios, lo que claramente diferencia a MelBet de sus competidores con ofertas más limitadas."}',
             'value_fr' => '{"0":"Au moment de la préparation de cette revue, plus de 20 bonus actifs étaient disponibles pour les utilisateurs, ce qui distingue clairement MelBet de ses concurrents avec des offres plus limitées."}',
             'value_pt' => '{"0":"No momento da preparação desta análise, havia mais de 20 bónus ativos disponíveis para os usuários, o que claramente diferencia o MelBet dos concorrentes com ofertas mais limitadas."}',
             'order' => 40
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 41
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Add to this a wide range of betting markets and a large number of live events, and MelBet truly meets the expectations of even the most demanding users. So don’t hesitate — register now and use the promo code :promocode for maximum benefits."}',
             'value_es' => '{"0":"Si a esto le sumamos una amplia variedad de mercados de apuestas y una gran cantidad de eventos en vivo, MelBet realmente satisface las expectativas incluso de los usuarios más exigentes. Así que no espere más: regístrese ahora y use el código promocional :promocode para obtener los máximos beneficios."}',
             'value_fr' => '{"0":"Ajoutez à cela une large gamme de marchés de paris et un grand nombre d\'événements en direct, et MelBet répond vraiment aux attentes des utilisateurs les plus exigeants. Alors n’hésitez pas — inscrivez-vous maintenant et utilisez le code promo :promocode pour bénéficier au maximum."}',
             'value_pt' => '{"0":"Junte a isso uma ampla gama de mercados de apostas e um grande número de eventos ao vivo, e o MelBet realmente satisfaz as expectativas até dos usuários mais exigentes. Então, não hesite — registe-se agora e use o código promocional :promocode para obter os máximos benefícios."}',
             'order' => 41
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 42
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Go For Longer"}',
             'value_es' => '{"0":"No pare"}',
             'value_fr' => '{"0":"Vous pourrez jouer plus longtemps"}',
             'value_pt' => '{"0":"Vá mais além"}',
             'order' => 42
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 43
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"This promotion is perfect for players who bet daily. For 42 consecutive days, you need to place winning bets, with six bonus milestones along the way. Place an accumulator bet each day that includes three or more selections (sports or live). At least one of the selections must have odds of 2.0 or higher. If you miss even one day or place a losing bet, you’ll have to start over."}',
             'value_es' => '{"0":"Esta promoción es ideal para los jugadores que apuestan a diario. Durante 42 días consecutivos, deberás realizar apuestas ganadoras, con seis etapas de bonificación en el camino. Coloca una apuesta combinada cada día que incluya tres o más selecciones (deportes o en vivo). Al menos una de las selecciones debe tener una cuota mínima de 2.0. Si fallas un solo día o la apuesta no gana, deberás comenzar desde cero."}',
             'value_fr' => '{"0":"Cette promotion est idéale pour les joueurs qui misent chaque jour. Pendant 42 jours consécutifs, vous devez placer des paris gagnants, avec six étapes bonus à franchir. Placez chaque jour un pari combiné comprenant au moins trois sélections (sport ou en direct). Au moins une des sélections doit avoir une cote minimale de 2.0. Si vous manquez un jour ou que le pari est perdant, vous devrez recommencer depuis le début."}',
             'value_pt' => '{"0":"Esta promoção é perfeita para jogadores que apostam todos os dias. Durante 42 dias consecutivos, deve fazer apostas vencedoras, com seis etapas de bónus ao longo do caminho. Aposte diariamente em acumuladores com três ou mais seleções (desportos ou apostas ao vivo). Pelo menos uma seleção deve ter odds mínimas de 2.0. Se falhar um único dia ou fizer uma aposta perdedora, terá de começar de novo."}',
             'order' => 43
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 44
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Important: Bets placed using bonus funds do not count. Promo codes received must be used within 7 days."}',
             'value_es' => '{"0":"Importante: Las apuestas realizadas con fondos de bonificación no cuentan. Los códigos promocionales deben utilizarse en un plazo de 7 días desde su recepción."}',
             'value_fr' => '{"0":"Important : Les paris effectués avec des fonds bonus ne comptent pas. Les codes promo doivent être utilisés dans les 7 jours suivant leur réception."}',
             'value_pt' => '{"0":"Importante: As apostas feitas com fundos de bónus não são contabilizadas. Os códigos promocionais devem ser usados no prazo de 7 dias após serem recebidos."}',
             'order' => 44
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 45
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
             'value_en' => '{"0":"img-3.jpg"}',
             'value_es' => '{"0":"img-3.jpg"}',
             'value_fr' => '{"0":"img-3.jpg"}',
             'value_pt' => '{"0":"img-3.jpg"}',
             'order' => 45
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 46
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Royal Monday"}',
             'value_es' => '{"0":"Lunes de Reyes"}',
             'value_fr' => '{"0":"Royal Monday"}',
             'value_pt' => '{"0":"Segunda-feira Régia"}',
             'order' => 46
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 47
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Every Monday, all Melbet users from India can take advantage of a 100% deposit bonus for sports betting. The bonus must be wagered within 24 hours after being credited — by placing accumulator bets worth six times the bonus amount. Each accumulator must include at least three events with odds of 1.65 or higher. All selected events must take place within 24 hours of the deposit; otherwise, they will not count toward fulfilling the bonus conditions. Withdrawals are only allowed after the full bonus has been wagered."}',
             'value_es' => '{"0":"Todos los lunes, los usuarios de Melbet en la India pueden aprovechar una bonificación del 100% sobre el depósito para apuestas deportivas. El bono debe apostarse dentro de las 24 horas posteriores a su acreditación, realizando apuestas combinadas por un valor seis veces superior al monto del bono. Cada apuesta combinada debe incluir al menos tres selecciones con cuotas de 1.65 o superiores. Todos los eventos deben tener lugar dentro de las 24 horas posteriores al depósito, de lo contrario, no se contabilizarán para cumplir los requisitos del bono. Los retiros solo están permitidos una vez que se haya cumplido completamente con el requisito de apuesta."}',
             'value_fr' => '{"0":"Chaque lundi, tous les utilisateurs de Melbet en Inde peuvent bénéficier d’un bonus de 100 % sur leur dépôt pour les paris sportifs. Le bonus doit être misé dans les 24 heures suivant son attribution — en plaçant des paris combinés d’un montant équivalant à six fois le bonus. Chaque combiné doit comporter au moins trois sélections avec des cotes d’au moins 1.65. Tous les événements sélectionnés doivent avoir lieu dans les 24 heures suivant le dépôt, sinon ils ne seront pas pris en compte pour remplir les conditions de la promotion. Les retraits sont autorisés uniquement après avoir respecté intégralement les exigences de mise."}',
             'value_pt' => '{"0":"Todas as segundas-feiras, os usuários da Melbet na Índia podem aproveitar um bônus de 100% sobre o valor do depósito para apostas esportivas. O bônus deve ser apostado dentro de 24 horas após o crédito — por meio de apostas acumuladas no valor de seis vezes o valor do bônus. Cada aposta acumulada deve conter pelo menos três seleções com odds de 1.65 ou superiores. Todos os eventos selecionados devem ocorrer dentro de 24 horas após o depósito; caso contrário, não serão contabilizados para cumprir os requisitos da promoção. Saques só serão permitidos após o cumprimento total das exigências de aposta."}',
             'order' => 47
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 48
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Important: Handicap and total bets are not allowed in these accumulators."}',
             'value_es' => '{"0":"Importante: No se permiten apuestas a hándicaps ni totales en estas combinadas."}',
             'value_fr' => '{"0":"Important : les paris sur les handicaps et les totaux sont interdits dans ces combinés."}',
             'value_pt' => '{"0":"Importante: Apostas em totais e handicaps não são permitidas nessas acumuladas."}',
             'order' => 48
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 49
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
             'value_en' => '{"0":"img-4.jpg"}',
             'value_es' => '{"0":"img-4.jpg"}',
             'value_fr' => '{"0":"img-4.jpg"}',
             'value_pt' => '{"0":"img-4.jpg"}',
             'order' => 49
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 50
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"TOTO"}',
             'value_es' => '{"0":"TOTO"}',
             'value_fr' => '{"0":"TOTO"}',
             'value_pt' => '{"0":"TOTO"}',
             'order' => 50
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 51
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"TOTO is a popular prediction game known by many names around the world. Every day, MelBet selects a list of 12 sporting events, and your task is to predict the outcome of each one: home win, away win, or draw. Each user can make one free prediction per day in TOTO. To confirm participation, you need to place a qualifying bet with odds of 2.0 or higher. If you correctly predict at least eight results, you will receive bonus points that can be used in MelBet’s promo store. These points can be exchanged for various rewards — including free bets, casino free spins, and more. The rewards are available for many sports and can be used for both single and accumulator bets."}',
             'value_es' => '{"0":"TOTO es un juego de predicciones popular que recibe diferentes nombres en todo el mundo. Cada día, MelBet selecciona una lista de 12 eventos deportivos, y tu tarea es predecir el resultado de cada uno: victoria local, victoria visitante o empate. Cada usuario puede hacer una predicción gratuita por día en TOTO. Para confirmar tu participación, debes realizar una apuesta con una cuota mínima de 2.0. Si aciertas al menos ocho resultados, recibirás puntos de bonificación que podrás utilizar en la tienda de promociones de MelBet. Estos puntos se pueden canjear por diferentes recompensas —incluyendo apuestas gratuitas, giros gratis en el casino y más—. Los premios están disponibles para muchos deportes y se pueden usar tanto en apuestas simples como combinadas."}',
             'value_fr' => '{"0":"TOTO est un jeu de pronostics populaire, connu sous différents noms à travers le monde. Chaque jour, MelBet sélectionne une liste de 12 événements sportifs, et votre objectif est de prédire le résultat de chacun : victoire à domicile, victoire à l’extérieur ou match nul. Chaque utilisateur peut faire un pronostic gratuit par jour dans TOTO. Pour valider votre participation, vous devez placer un pari avec une cote minimale de 2.0. Si vous devinez correctement au moins huit résultats, vous recevrez des points bonus que vous pourrez échanger dans la boutique promo de MelBet. Ces points peuvent être échangés contre diverses récompenses — paris gratuits, tours gratuits de casino, etc. Les récompenses sont disponibles pour de nombreux sports et peuvent être utilisées pour des paris simples ou combinés."}',
             'value_pt' => '{"0":"TOTO é um jogo de previsões popular conhecido por vários nomes em todo o mundo. Todos os dias, a MelBet seleciona uma lista com 12 eventos esportivos, e a sua tarefa é prever o resultado de cada um: vitória do mandante, vitória do visitante ou empate. Cada usuário pode fazer uma previsão gratuita por dia no TOTO. Para confirmar a participação, é necessário fazer uma aposta com odds de pelo menos 2.0. Se você acertar pelo menos oito resultados, receberá pontos de bônus que podem ser usados na loja de promoções da MelBet. Esses pontos podem ser trocados por recompensas como apostas grátis, rodadas grátis em jogos de cassino, entre outros. As recompensas estão disponíveis para diversos esportes e podem ser usadas tanto em apostas simples quanto acumuladas."}',
             'order' => 51
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 52
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
             'value_en' => '{"0":"img-5.jpg"}',
             'value_es' => '{"0":"img-5.jpg"}',
             'value_fr' => '{"0":"img-5.jpg"}',
             'value_pt' => '{"0":"img-5.jpg"}',
             'order' => 52
            ]
        );
    }
}
