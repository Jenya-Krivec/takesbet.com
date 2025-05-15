<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bookmaker;

class BookmakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bookmaker::query()->updateOrCreate(
            ['key' => 'betwinner'],
            ['key' => 'betwinner',
             'name' => 'Betwinner',
             'url' => 'prmbw.com/bw-sport/?p=/user/registration/',
             'logo' => 'betwinner.svg',
             'logo_color' => '#1a674b',
             'promo_code' => 'NEWBONUS',
             'bonus_available' => 0,
             'bonus_label_1_en' => '$130 Free Bet',
             'bonus_label_2_en' => 'Use code NEWBONUS for $130 bonus',
             'bonus_label_1_es' => 'Apuesta gratuita de $130',
             'bonus_label_2_es' => 'Usa el código NEWBONUS para obtener un bono de $130',
             'bonus_label_1_fr' => 'Pari gratuit de $130',
             'bonus_label_2_fr' => 'Utilisez le code NEWBONUS pour un bonus de $130',
             'bonus_label_1_pt' => 'Aposta grátis de $130',
             'bonus_label_2_pt' => 'Use o código NEWBONUS para ganhar um bônus de $130',
             'warning_en' => '18+ only. Gamble responsibly. Ts and Cs apply',
             'warning_es' => 'Solo para mayores de 18 años. Juega con responsabilidad. Aplican términos y condiciones',
             'warning_fr' => "Réservé aux 18 ans et plus. Jouez de manière responsable. Termes et conditions s'appliquent",
             'warning_pt' => 'Apenas para maiores de 18 anos. Jogue com responsabilidade. Aplicam-se termos e condições',
             'active' => 1,
            ]
        );
        Bookmaker::query()->updateOrCreate(
            ['key' => 'melbet'],
            ['key' => 'melbet',
             'name' => 'MelBet',
             'url' => 'melbet-077269.top',
             'logo' => 'melbet.svg',
             'logo_color' => '#10B981FF',
             'promo_code' => 'NEWBONUS',
             'bonus_available' => 0,
             'bonus_label_1_en' => '$130 Bonus - 30% extra',
             'bonus_label_2_en' => 'Use code NEWBONUS',
             'bonus_label_1_es' => '$130 Bono - 30% extra',
             'bonus_label_2_es' => 'Usa el código NEWBONUS',
             'bonus_label_1_fr' => '$130 Bonus - 30% supplémentaire',
             'bonus_label_2_fr' => 'Utilisez le code NEWBONUS',
             'bonus_label_1_pt' => '$130 Bônus - 30% extra',
             'bonus_label_2_pt' => 'Use o código NEWBONUS',
             'warning_en' => 'Use the MelBet Promo code NEWBONUS to get 30% extra. 18+',
             'warning_es' => 'Usa el código promocional de MelBet NEWBONUS para obtener un 30% extra. 18+',
             'warning_fr' => 'Utilisez le code promo MelBet NEWBONUS pour obtenir 30% de bonus supplémentaire. 18+',
             'warning_pt' => 'Use o código promocional da MELBET “NEWBONUS” para ganhar 30% extra. 18+',
             'active' => 1,
             ]
        );
        Bookmaker::query()->updateOrCreate(
            ['key' => '888starz'],
            ['key' => '888starz',
             'name' => '888starz',
             'url' => 'hopufoa6.site/registration',
             'logo' => '888starz.svg',
             'logo_color' => '#0f0710',
             'promo_code' => 'NEWBONUS',
             'bonus_available' => 0,
             'bonus_label_1_en' => 'Deposit €130 Get €130',
             'bonus_label_2_en' => 'Use promo code NEWBONUS',
             'bonus_label_1_es' => 'Deposita €130 y recibe €130',
             'bonus_label_2_es' => 'Usa el código promocional NEWBONUS',
             'bonus_label_1_fr' => 'Déposez €130 et recevez €130',
             'bonus_label_2_fr' => 'Utilisez le code promo NEWBONUS',
             'bonus_label_1_pt' => 'Deposite €130 e receba €130',
             'bonus_label_2_pt' => 'Use o código promocional NEWBONUS',
             'warning_en' => '18+ only. T&Cs apply. Register with promo code NEWBONUS and unlock the 100% 1st deposit welcome bonus up to €/$130 from 888starz.bet',
             'warning_es' => 'Solo para mayores de 18 años. Aplican términos y condiciones. Regístrate con el código promocional NEWBONUS y desbloquea el bono de bienvenida del 100% en tu primer depósito, hasta €/$130 en 888starz.bet',
             'warning_fr' => "Réservé aux 18 ans et plus. Termes et conditions s'appliquent. Inscrivez-vous avec le code promo NEWBONUS et débloquez le bonus de bienvenue de 100% sur le premier dépôt, jusqu'à €/$130. sur 888starz.bet",
             'warning_pt' => 'Apenas para maiores de 18 anos. Aplicam-se termos e condições. Registe-se com o código promocional NEWBONUS e desbloqueie o bônus de boas-vindas de 100% no primeiro depósito, até €/$130 no 888starz.bet',
             'active' => 1,
                ]
        );
        Bookmaker::query()->updateOrCreate(
            ['key' => 'linebet'],
            ['key' => 'linebet',
             'name' => 'Linebet',
             'url' => 'linebet.com',
             'logo' => 'linebet.svg',
             'logo_color' => '#204f14',
             'promo_code' => 'NEWBONUS',
             'bonus_available' => 1,
             'bonus_label_1_en' => '$130 Bonus',
             'bonus_label_2_en' => 'Use promo code NEWBONUS',
             'bonus_label_1_es' => 'Bono de $130',
             'bonus_label_2_es' => 'Usa el código promocional NEWBONUS',
             'bonus_label_1_fr' => 'Bonus de $130',
             'bonus_label_2_fr' => 'Utilisez le code promo NEWBONUS',
             'bonus_label_1_pt' => 'Bônus de $130',
             'bonus_label_2_pt' => 'Use o código promocional NEWBONUS',
             'warning_en' => 'Register with Promo code NEWBONUS. 18+. T&Cs apply',
             'warning_es' => 'Regístrate con el código promocional NEWBONUS. 18+. Aplican términos y condiciones',
             'warning_fr' => "Inscrivez-vous avec le code promo NEWBONUS. 18+. Termes et conditions s'appliquent",
             'warning_pt' => 'Registe-se com o código promocional NEWBONUS. 18+. Aplicam-se termos e condições',
             'active' => 1,
             ]
        );
        Bookmaker::query()->updateOrCreate(
            ['key' => '1win'],
            ['key' => '1win',
                'name' => '1win',
                'url' => 'www.1win.global',
                'logo' => '1win.svg',
                'logo_color' => '#1b243a',
                'promo_code' => 'XLBONUS',
                'bonus_available' => 0,
                'bonus_label_1_en' => '$205 Bonus',
                'bonus_label_2_en' => 'Use promo code XLBONUS',
                'bonus_label_1_es' => 'Bono de $205',
                'bonus_label_2_es' => 'Usa el código promocional XLBONUS',
                'bonus_label_1_fr' => 'Bonus de $205',
                'bonus_label_2_fr' => 'Utilisez le code promo XLBONUS',
                'bonus_label_1_pt' => 'Bônus de $205',
                'bonus_label_2_pt' => 'Use o código promocional XLBONUS',
                'warning_en' => 'Register with Promo code XLBONUS. 18+. T&Cs apply',
                'warning_es' => 'Regístrate con el código promocional XLBONUS. 18+. Aplican términos y condiciones',
                'warning_fr' => "Inscrivez-vous avec le code promo XLBONUS. 18+. Termes et conditions s'appliquent",
                'warning_pt' => 'Registe-se com o código promocional XLBONUS. 18+. Aplicam-se termos e condições',
                'active' => 1,
            ]
        );
    }
}
