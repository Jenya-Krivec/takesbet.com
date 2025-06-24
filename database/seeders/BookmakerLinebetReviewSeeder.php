<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerLinebetReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 1
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Linebet Review"}',
             'value_es' => '{"0":"Reseña de Linebet"}',
             'value_fr' => '{"0":"Avis sur Linebet"}',
             'value_pt' => '{"0":"Análise da Linebet"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 2
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet is a modern European bookmaker that provides high-quality online betting services. The platform is operated by Brukalka Ltd, a company registered in Cyprus and licensed in Curaçao."}',
             'value_es' => '{"0":"Linebet es una casa de apuestas europea moderna que ofrece un servicio de apuestas en línea de alta calidad. La plataforma es operada por Brukalka Ltd, una empresa registrada en Chipre con licencia en Curazao."}',
             'value_fr' => '{"0":"Linebet est un bookmaker européen moderne qui offre un service de paris en ligne de haute qualité. La plateforme est exploitée par Brukalka Ltd, une société enregistrée à Chypre et titulaire d\'une licence du Curaçao."}',
             'value_pt' => '{"0":"A Linebet é uma casa de apostas europeia moderna que oferece um serviço de apostas online de alta qualidade. A plataforma é operada pela Brukalka Ltd, uma empresa registrada no Chipre com licença de Curaçau."}',
             'order' => 2,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 3
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet offers over 1000 betting events every day, focusing on football, eSports, and other popular sports. Players can enjoy a variety of bonuses, including daily offers for eSports fans and special ACCA promotions. New users can claim a welcome bonus of up to $130. The platform already has over 500,000 registered players."}',
             'value_es' => '{"0":"Cada día, Linebet ofrece más de 1000 eventos deportivos para apostar, con especial atención al fútbol, los eSports y otros deportes populares. Los jugadores pueden aprovechar diversos bonos, incluyendo ofertas diarias para fanáticos de los eSports y promociones especiales para apuestas combinadas (ACCA). Los nuevos usuarios pueden obtener un bono de bienvenida de hasta $130. La plataforma ya cuenta con más de 500,000 jugadores registrados."}',
             'value_fr' => '{"0":"Chaque jour, Linebet propose plus de 1000 événements pour parier, en mettant l\'accent sur le football, l’e-sport et d\'autres disciplines sportives populaires. Les joueurs bénéficient de divers bonus, dont des offres quotidiennes pour les fans d’e-sport et des promotions spéciales sur les paris combinés (ACCA). Les nouveaux utilisateurs peuvent recevoir un bonus de bienvenue allant jusqu\'à 130$. La plateforme compte déjà plus de 500000 joueurs."}',
             'value_pt' => '{"0":"Todos os dias, a Linebet disponibiliza mais de 1000 eventos para apostas, com foco em futebol, eSports e outros esportes populares. Os jogadores podem aproveitar diversos bônus, incluindo ofertas diárias para fãs de eSports e promoções especiais para apostas múltiplas (ACCA). Novos usuários podem receber um bônus de boas-vindas de até $130. A plataforma já conta com mais de 500.000 jogadores."}',
             'order' => 3,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 4
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 5
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
                'value_en' => '{"0":"Linebet Verdict"}',
                'value_es' => '{"0":"Veredicto sobre Linebet"}',
                'value_fr' => '{"0":"Verdict sur Linebet"}',
                'value_pt' => '{"0":"Veredito sobre a Linebet"}',
             'order' => 5,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 6
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
                'value_en' => '{"0":"Why punters bet at Linebet"}',
                'value_es' => '{"0":"Por qué los apostadores apuestan en Linebet"}',
                'value_fr' => '{"0":"Pourquoi les parieurs misent sur Linebet"}',
                'value_pt' => '{"0":"Por que os apostadores apostam na Linebet"}',
             'order' => 6,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 7
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Standout Welcome Offer",
                                 "1":"Daily eSports Bonus Promotions",
                                 "2":"Excellent array of betting markets"},
                             "1":
                                {"0":"Not available for UK residents"}
                             }',
             'value_es' => '{"0":
                                {"0":"Oferta de bienvenida destacada",
                                 "1":"Promociones diarias de bonos para eSports",
                                 "2":"Excelente variedad de mercados de apuestas"},
                             "1":
                                {"0":"No disponible para residentes del Reino Unido"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Offre de bienvenue exceptionnelle",
                                 "1":"Promotions quotidiennes de bonus sur l’e-sport",
                                 "2":"Large choix de marchés de paris"},
                             "1":
                                {"0":"Non disponible pour les résidents du Royaume-Uni"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Oferta de boas-vindas de destaque",
                                 "1":"Promoções diárias de bônus para eSports",
                                 "2":"Excelente variedade de mercados de apostas"},
                             "1":
                                {"0":"Não disponível para residentes do Reino Unido"}
                             }',
             'order' => 7,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 8
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
                'value_en' => '{"0":"Linebet Odds & Markets"}',
                'value_es' => '{"0":"Cuotas y Mercados de Linebet"}',
                'value_fr' => '{"0":"Cotes et Marchés de Linebet"}',
                'value_pt' => '{"0":"Odds e Mercados da Linebet"}',
             'order' => 8,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 9
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"With over 1,000 sporting events every day, Linebet offers countless opportunities for betting. You\'ll have access to a wide range of markets — from American football to volleyball, as well as popular sports like football, tennis, basketball, and horse racing."}',
             'value_es' => '{"0":"Con más de 1 000 eventos deportivos cada día, Linebet ofrece innumerables oportunidades para apostar. Tendrás acceso a una amplia variedad de mercados, desde fútbol americano hasta voleibol, así como a deportes populares como fútbol, tenis, baloncesto y carreras de caballos."}',
             'value_fr' => '{"0":"Avec plus de 1 000 événements sportifs chaque jour, Linebet offre d’innombrables opportunités de paris. Vous aurez accès à une large gamme de marchés — du football américain au volley-ball, ainsi qu’à des sports populaires comme le football, le tennis, le basket-ball et les courses hippiques."}',
             'value_pt' => '{"0":"Com mais de 1 000 eventos esportivos por dia, a Linebet oferece inúmeras oportunidades para apostar. Você terá acesso a uma grande variedade de mercados — desde futebol americano até voleibol, além de esportes populares como futebol, tênis, basquete e corridas de cavalos."}',
             'order' => 9,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 10
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, Linebet is one of the leaders in eSports betting, with up-to-date odds available on daily events. Below, you’ll find the full list of sports you can bet on."}',
             'value_es' => '{"0":"Además, Linebet es uno de los líderes en apuestas de eSports, con cuotas actualizadas disponibles a diario. A continuación, encontrarás la lista completa de deportes en los que puedes apostar."}',
             'value_fr' => '{"0":"En outre, Linebet est l’un des leaders des paris sur l’e-sport, avec des cotes actualisées quotidiennement. Vous trouverez ci-dessous la liste complète des sports sur lesquels vous pouvez parier."}',
             'value_pt' => '{"0":"Além disso, a Linebet é uma das líderes em apostas em eSports, com odds atualizadas diariamente. Abaixo, você encontrará a lista completa de esportes disponíveis para apostas."}',
             'order' => 10,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 11
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 11,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 12
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
                'value_en' => '{"0":"Linebet Withdrawals & Deposits"}',
                'value_es' => '{"0":"Retiros y Depósitos en Linebet"}',
                'value_fr' => '{"0":"Retraits et Dépôts chez Linebet"}',
                'value_pt' => '{"0":"Levantamentos e Depósitos na Linebet"}',
             'order' => 12,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 13
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
                'value_en' => '{"0":"You certainly won’t have any trouble finding a convenient way to deposit or withdraw funds — Linebet has got you covered. This bookmaker supports a wide range of payment methods. There are so many available that listing them all would be difficult, so we’ve highlighted only the main ones below."}',
                'value_es' => '{"0":"Sin duda, no tendrás problemas para encontrar una forma conveniente de depositar o retirar fondos: Linebet lo tiene todo cubierto. Este operador acepta una amplia variedad de métodos de pago. Hay tantos que sería difícil enumerarlos todos, así que a continuación destacamos solo los principales."}',
                'value_fr' => '{"0":"Vous n’aurez certainement aucun mal à trouver un moyen pratique pour déposer ou retirer des fonds — Linebet propose un large éventail d’options. Ce bookmaker accepte de nombreux modes de paiement. Ils sont si nombreux qu’il serait difficile de tous les énumérer, alors nous avons mis en avant ci-dessous les plus importants."}',
                'value_pt' => '{"0":"Com certeza, você não terá dificuldades para encontrar uma forma prática de depositar ou sacar fundos — a Linebet oferece diversas opções. Esta casa de apostas aceita uma grande variedade de métodos de pagamento. São tantos que seria difícil listar todos, por isso destacamos abaixo apenas os principais."}',
             'order' => 13,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 14
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
                'value_en' => '{"0":"You can find more information about payment methods at the beginning of the review, in the «Linebet Quick Info»."}',
                'value_es' => '{"0":"Puedes encontrar más información sobre los métodos de pago al comienzo de la reseña, en la sección «Información rápida de Linebet»."}',
                'value_fr' => '{"0":"Vous pouvez trouver plus d’informations sur les méthodes de paiement au début de l’avis, dans la section « Infos rapides sur Linebet »."}',
                'value_pt' => '{"0":"Você pode encontrar mais informações sobre os métodos de pagamento no início da análise, na seção «Linebet rápidas da BetWinner»."}',
             'order' => 14,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 15
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 15,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 16
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
                'value_en' => '{"0":"Linebet Customer Service"}',
                'value_es' => '{"0":"Servicio al Cliente de Linebet"}',
                'value_fr' => '{"0":"Service Client Linebet"}',
                'value_pt' => '{"0":"Atendimento ao Cliente Linebet"}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 17
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
                'value_en' => '{"0":"There are a number of ways to get in touch with the customer services team if you have any questions regarding your account."}',
                'value_es' => '{"0":"Hay varias formas de ponerse en contacto con el equipo de atención al cliente si tiene alguna pregunta sobre su cuenta."}',
                'value_fr' => '{"0":"Il existe plusieurs façons de contacter le service client si vous avez des questions concernant votre compte."}',
                'value_pt' => '{"0":"Existem várias maneiras de entrar em contato com a equipe de atendimento ao cliente se você tiver alguma dúvida sobre sua conta."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 18
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'support',
             'value_en' => '{"0":"Live chat (on website)"}',
             'value_es' => '{"0":"Chat en vivo (en el sitio web)"}',
             'value_fr' => '{"0":"Chat en direct (sur le site web)"}',
             'value_pt' => '{"0":"Chat ao vivo (no site)"}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 19
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
                'value_en' => '{"0":"Linebet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de Linebet"}',
                'value_fr' => '{"0":"FAQ de Linebet"}',
                'value_pt' => '{"0":"Perguntas frequentes do Linebet"}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 20
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h4',
                'value_en' => '{"0":"Is Linebet legal?"}',
                'value_es' => '{"0":"¿Es Linebet legal?"}',
                'value_fr' => '{"0":"Linebet est-il légal ?"}',
                'value_pt' => '{"0":"A Linebet é legal?"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 21
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
                'value_en' => '{"0":"Yes. Linebet currently has a Curacao license and operates in over 90 countries around the world, boasting over one million customers."}',
                'value_es' => '{"0":"Sí. Linebet actualmente tiene una licencia de Curazao y opera en más de 90 países en todo el mundo, con más de un millón de clientes."}',
                'value_fr' => '{"0":"Oui. Linebet détient actuellement une licence de Curaçao et opère dans plus de 90 pays à travers le monde, avec plus d’un million de clients."}',
                'value_pt' => '{"0":"Sim. A Linebet atualmente possui uma licença de Curaçao e opera em mais de 90 países ao redor do mundo, contando com mais de um milhão de clientes."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 22
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h4',
                'value_en' => '{"0":"What is the minimum withdrawal I can make from my account?"}',
                'value_es' => '{"0":"¿Cuál es el retiro mínimo que puedo hacer desde mi cuenta?"}',
                'value_fr' => '{"0":"Quel est le retrait minimum que je peux effectuer depuis mon compte ?"}',
                'value_pt' => '{"0":"Qual é o valor mínimo de saque que posso fazer da minha conta?"}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 23
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
                'value_en' => '{"0":"That depends on what payment option you select. You can find out everything you need to know by visiting the «Payment Methods» section of the site."}',
                'value_es' => '{"0":"Eso depende del método de pago que elijas. Puedes encontrar toda la información necesaria visitando la sección de «Métodos de Pago» del sitio."}',
                'value_fr' => '{"0":"Cela dépend de l’option de paiement que vous choisissez. Vous pouvez tout savoir en consultant la section « Moyens de paiement » du site."}',
                'value_pt' => '{"0":"Isso depende da opção de pagamento que você escolher. Você pode encontrar todas as informações necessárias na seção «Métodos de Pagamento» do site."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 24
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h4',
                'value_en' => '{"0":"What cryptocurrencies does Linebet accept?"}',
                'value_es' => '{"0":"¿Qué criptomonedas acepta Linebet?"}',
                'value_fr' => '{"0":"Quelles cryptomonnaies sont acceptées par Linebet ?"}',
                'value_pt' => '{"0":"Quais criptomoedas a Linebet aceita?"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 25
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
                'value_en' => '{"0":"This operator accepts 20 cryptocurrencies in total including Bitcoin, Litecoin, Ethereum and Tron. Please note that there are no service charges for paying via crypto."}',
                'value_es' => '{"0":"Este operador acepta un total de 20 criptomonedas, incluyendo Bitcoin, Litecoin, Ethereum y Tron. Ten en cuenta que no se aplican cargos por servicio al pagar con criptomonedas."}',
                'value_fr' => '{"0":"Cet opérateur accepte un total de 20 cryptomonnaies, y compris le Bitcoin, le Litecoin, l’Ethereum et le Tron. Veuillez noter qu’aucun frais de service n’est appliqué pour les paiements en crypto."}',
                'value_pt' => '{"0":"Este operador aceita um total de 20 criptomoedas, incluindo Bitcoin, Litecoin, Ethereum e Tron. Observe que não há taxas de serviço para pagamentos com criptomoedas."}',
             'order' => 25
            ]
        );
    }
}
