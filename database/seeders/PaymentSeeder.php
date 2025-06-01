<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Payment::query()->updateOrCreate(
            ['key' => 'mastercard'],
            ['key' => 'mastercard',
             'name' => 'Mastercard',
             'url' => 'mastercard.com',
             'logo' => 'mastercard',
             'logo_color' => 'white',
             'icon' => 'mastercard',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'visa'],
            ['key' => 'visa',
             'name' => 'VISA',
             'url' => 'visa.com',
             'logo' => 'visa',
             'logo_color' => 'white',
             'icon' => 'visa',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'visacheckout'],
            ['key' => 'visacheckout',
             'name' => 'VISA Checkout',
             'url' => 'visa.com',
             'logo' => 'visa',
             'logo_color' => 'white',
             'icon' => 'visa',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'paypal'],
            ['key' => 'paypal',
             'name' => 'PayPal',
             'url' => 'www.paypal.com',
             'logo' => 'paypal',
             'logo_color' => 'white',
             'icon' => 'paypal',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'poli'],
            ['key' => 'poli',
             'name' => 'POLi',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'poli',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'bitcoin'],
            ['key' => 'bitcoin',
             'name' => 'Bitcoin',
             'url' => 'bitcoin.com',
             'logo' => 'bitcoin',
             'logo_color' => 'white',
             'icon' => 'bitcoin',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'ethereum'],
            ['key' => 'ethereum',
             'name' => 'Ethereum',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'ethereum',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'litecoin'],
            ['key' => 'litecoin',
             'name' => 'LTC (Litecoin)',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'litecoin',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'dogecoin'],
            ['key' => 'dogecoin',
             'name' => 'DOGE (Dogecoin)',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'dogecoin',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'usdcoin'],
            ['key' => 'usdcoin',
             'name' => 'USD Coin',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'usdcoin',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => '1pay'],
            ['key' => '1pay',
             'name' => '1-Pay',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => '1pay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => '8pay'],
            ['key' => '8pay',
             'name' => '8Pay',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => '8pay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'abaqoos'],
            ['key' => 'abaqoos',
             'name' => 'Abaqoos',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'abaqoos',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'airtelmoney'],
            ['key' => 'airtelmoney',
             'name' => 'Airtel Money',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'airtelmoney',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'applepay'],
            ['key' => 'applepay',
             'name' => 'Apple Pay',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'applepay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'bancontact'],
            ['key' => 'bancontact',
             'name' => 'Bancontact',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'bancontact',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'bankwiretransfer'],
            ['key' => 'bankwiretransfer',
             'name' => 'Bank Wire Transfer',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'bankwiretransfer',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'bitcoingold'],
            ['key' => 'bitcoingold',
             'name' => 'Bitcoin Gold',
             'url' => 'bitcoin.com',
             'logo' => 'bitcoin',
             'logo_color' => 'white',
             'icon' => 'bitcoingold',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'bitshares'],
            ['key' => 'bitshares',
             'name' => 'Bitshares',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'bitshares',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'boku'],
            ['key' => 'boku',
             'name' => 'Boku',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'boku',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'cash'],
            ['key' => 'cash',
             'name' => 'Cash',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'cash',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'cashmaal'],
            ['key' => 'cashmaal',
             'name' => 'Cashmaal',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'cashmaal',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'cashtocode'],
            ['key' => 'cashtocode',
             'name' => 'CashToCode',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'cashtocode',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'chainlink'],
            ['key' => 'chainlink',
             'name' => 'Chainlink',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'chainlink',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'cheque'],
            ['key' => 'cheque',
             'name' => 'Cheque',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'cheque',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'citadel'],
            ['key' => 'citadel',
             'name' => 'Citadel',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'citadel',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'click2pay'],
            ['key' => 'click2pay',
             'name' => 'Click2Pay',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'click2pay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'clickandbuy'],
            ['key' => 'clickandbuy',
             'name' => 'ClickandBuy',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'click2pay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'connectpay'],
            ['key' => 'connectpay',
             'name' => 'ConnectPay',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'connectpay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'maestro'],
            ['key' => 'maestro',
             'name' => 'Maestro',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'maestro',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'dankort'],
            ['key' => 'dankort',
             'name' => 'Dankort',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'dankort',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'debitcards'],
            ['key' => 'debitcards',
             'name' => 'Debit Cards',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'debitcards',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'digibyte'],
            ['key' => 'digibyte',
             'name' => 'DigiByte',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'digibyte',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'dinersclub'],
            ['key' => 'dinersclub',
             'name' => 'Diners Club',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'dinersclub',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'echeck'],
            ['key' => 'echeck',
             'name' => 'eCheck',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'echeck',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'payz'],
            ['key' => 'payz',
             'name' => 'Payz',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'payz',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'ekonto'],
            ['key' => 'ekonto',
             'name' => 'eKonto',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'ekonto',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'elv'],
            ['key' => 'elv',
             'name' => 'ELV',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'elv',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'emoney'],
            ['key' => 'emoney',
             'name' => 'Emoney',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'emoney',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'enets'],
            ['key' => 'enets',
             'name' => 'eNets',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'enets',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'entropay'],
            ['key' => 'entropay',
             'name' => 'entropay',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'entropay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'epay'],
            ['key' => 'epay',
             'name' => 'Epay',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'epay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'eps'],
            ['key' => 'eps',
             'name' => 'EPS',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'eps',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'fastpay'],
            ['key' => 'fastpay',
             'name' => 'Fast Pay',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'fastpay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'fastbanktransfer'],
            ['key' => 'fastbanktransfer',
             'name' => 'Fastbank Transfer',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'fastbanktransfer',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'flexepin'],
            ['key' => 'flexepin',
             'name' => 'flexepin',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'flexepin',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'giftcards'],
            ['key' => 'giftcards',
             'name' => 'Gift Cards',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'giftcards',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'giropay'],
            ['key' => 'giropay',
             'name' => 'giropay',
             'url' => 'www.girocard.eu',
             'logo' => 'giropay',
             'logo_color' => 'white',
             'icon' => 'giropay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'ideal'],
            ['key' => 'ideal',
             'name' => 'iDeal',
             'url' => 'www.ideal.nl',
             'logo' => 'ideal',
             'logo_color' => 'white',
             'icon' => 'ideal',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'idebit'],
            ['key' => 'idebit',
             'name' => 'iDebit',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'idebit',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'instantbanking'],
            ['key' => 'instantbanking',
             'name' => 'Instant Banking',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'instantbanking',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'interac'],
            ['key' => 'interac',
             'name' => 'Interac',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'interac',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'jetonwallet'],
            ['key' => 'jetonwallet',
             'name' => 'Jeton Wallet',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'jetonwallet',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'klarna'],
            ['key' => 'klarna',
             'name' => 'Klarna',
             'url' => 'klarna.com',
             'logo' => 'klarna',
             'logo_color' => '#FFA8CDFF',
             'icon' => 'klarna',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'laser'],
            ['key' => 'laser',
             'name' => 'Laser',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'laser',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'monero'],
            ['key' => 'monero',
             'name' => 'Monero',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'monero',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'monetaru'],
            ['key' => 'monetaru',
             'name' => 'Moneta.ru',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'monetaru',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'moneyorder'],
            ['key' => 'moneyorder',
             'name' => 'Money Order',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'moneyorder',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'monzo'],
            ['key' => 'monzo',
             'name' => 'Monzo',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'monzo',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'moonpay'],
            ['key' => 'moonpay',
             'name' => 'Moonpay',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'moonpay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'mtnairtime'],
            ['key' => 'mtnairtime',
             'name' => 'MTN Airtime',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'mtnairtime',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'muchbetter'],
            ['key' => 'muchbetter',
             'name' => 'MuchBetter',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'muchBetter',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'multibanco'],
            ['key' => 'multibanco',
             'name' => 'Multibanco',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'bancontact',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'neteller'],
            ['key' => 'neteller',
             'name' => 'Neteller',
             'url' => 'neteller.com',
             'logo' => 'neteller',
             'logo_color' => '#336633',
             'icon' => 'neteller',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'netpay'],
            ['key' => 'netpay',
             'name' => 'Netpay',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'netpay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'nordea'],
            ['key' => 'nordea',
             'name' => 'Nordea',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'nordea',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'omisego'],
            ['key' => 'omisego',
             'name' => 'OmiseGO',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'omisego',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'ozow'],
            ['key' => 'ozow',
             'name' => 'Ozow',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'ozow',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'pay4fun'],
            ['key' => 'pay4fun',
             'name' => 'Pay4Fun',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'pay4fun',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'paybox'],
            ['key' => 'paybox',
             'name' => 'Paybox',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'paybox',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'paydunya'],
            ['key' => 'paydunya',
             'name' => 'Paydunya',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'paydunya',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'payeer'],
            ['key' => 'payeer',
             'name' => 'Payeer',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'payeer',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'payfast'],
            ['key' => 'payfast',
             'name' => 'Payfast',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'payfast',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'paynearme'],
            ['key' => 'paynearme',
             'name' => 'PayNearMe',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'paynearme',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'paypoint'],
            ['key' => 'paypoint',
             'name' => 'PayPoint',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'paypoint',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'paysafecard'],
            ['key' => 'paysafecard',
             'name' => 'paysafecard',
             'url' => 'paysafecard.com',
             'logo' => 'paysafecard',
             'logo_color' => '#3200ff',
             'icon' => 'paysafecard',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'paytm'],
            ['key' => 'paytm',
             'name' => 'Paytm',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'paytm',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'perfectmoney'],
            ['key' => 'perfectmoney',
             'name' => 'Perfect Money',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'perfectmoney',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'persontoperson'],
            ['key' => 'persontoperson',
             'name' => 'Person to Person',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'persontoperson',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'pingit'],
            ['key' => 'pingit',
             'name' => 'Pingit',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'pingit',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'pipay'],
            ['key' => 'pipay',
             'name' => 'PiPay',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'pipay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'postepay'],
            ['key' => 'postepay',
             'name' => 'Poste Pay',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'postepay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'przelewy24'],
            ['key' => 'przelewy24',
             'name' => 'Przelewy24',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'przelewy24',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'qiwi'],
            ['key' => 'qiwi',
             'name' => 'QIWI',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'qiwi',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'qtum'],
            ['key' => 'qtum',
             'name' => 'QTum',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'qtum',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'quickcash'],
            ['key' => 'quickcash',
             'name' => 'Quickcash',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'quickcash',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'revolut'],
            ['key' => 'revolut',
             'name' => 'Revolut',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'revolut',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'runpaywallet'],
            ['key' => 'runpaywallet',
             'name' => 'Runpay Wallet',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'runpaywallet',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'sirumobile'],
            ['key' => 'sirumobile',
             'name' => 'Siru Mobile',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'sirumobile',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'skrill'],
            ['key' => 'skrill',
             'name' => 'Skrill',
             'url' => 'skrill.com',
             'logo' => 'skrill',
             'logo_color' => '#910590',
             'icon' => 'skrill',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'sofort'],
            ['key' => 'sofort',
             'name' => 'Sofort',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'sofort',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'speedcard'],
            ['key' => 'speedcard',
             'name' => 'Speedcard',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'speedcard',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'sticpay'],
            ['key' => 'sticpay',
             'name' => 'Stic Pay',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'sticpay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'teleingreso'],
            ['key' => 'teleingreso',
             'name' => 'Teleingreso',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'teleingreso',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'thawte'],
            ['key' => 'thawte',
             'name' => 'Thawte',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'thawte',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'tigo'],
            ['key' => 'tigo',
             'name' => 'Tigo',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'tigo',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'truetsd'],
            ['key' => 'truetsd',
             'name' => 'TrueTSD',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'truetsd',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'trustly'],
            ['key' => 'trustly',
             'name' => 'Trustly',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'trustly',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'ukash'],
            ['key' => 'ukash',
             'name' => 'UKash',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'ukash',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'unionpay'],
            ['key' => 'unionpay',
             'name' => 'UnionPay',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'unionpay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'upi'],
            ['key' => 'upi',
             'name' => 'UPI',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'upi',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'usemyfunds'],
            ['key' => 'usemyfunds',
             'name' => 'Use My Funds',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'usemyfunds',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'verge'],
            ['key' => 'verge',
             'name' => 'Verge',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'verge',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'vodacom'],
            ['key' => 'vodacom',
             'name' => 'Vodacom',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'vodacom',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'voucherdeposit'],
            ['key' => 'voucherdeposit',
             'name' => 'Voucher Deposit',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'voucherdeposit',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'webmoney'],
            ['key' => 'webmoney',
             'name' => 'Webmoney',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'webmoney',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'westernunion'],
            ['key' => 'westernunion',
             'name' => 'Western Union',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'westernunion',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'yandexmoney'],
            ['key' => 'yandexmoney',
             'name' => 'Yandex Money',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'yandexmoney',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'zapper'],
            ['key' => 'zapper',
             'name' => 'Zapper',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'zapper',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'zcash'],
            ['key' => 'zcash',
             'name' => 'Zcash',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'zcash',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'zimpler'],
            ['key' => 'zimpler',
             'name' => 'Zimpler',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'zimpler',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'amazonpay'],
            ['key' => 'amazonpay',
             'name' => 'Amazon Pay',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'amazonpay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'astropaycard'],
            ['key' => 'astropaycard',
             'name' => 'AstroPay Card',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'astropaycard',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'googlepay'],
            ['key' => 'googlepay',
             'name' => 'Google Pay',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'googlepay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'indiannetbanking'],
            ['key' => 'indiannetbanking',
             'name' => 'Indian Net Banking',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'indiannetbanking',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'jiopay'],
            ['key' => 'jiopay',
             'name' => 'Jiopay',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'jiopay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'phonepe'],
            ['key' => 'phonepe',
             'name' => 'PhonePe',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'phonepe',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'samsungpay'],
            ['key' => 'samsungpay',
             'name' => 'Samsung Pay',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'samsungpay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'bitcoincash'],
            ['key' => 'bitcoincash',
             'name' => 'Bitcoin Cash',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'bitcoincash',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'polkadot'],
            ['key' => 'polkadot',
             'name' => 'Polkadot',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'polkadot',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'ethereumclassic'],
            ['key' => 'ethereumclassic',
             'name' => 'Ethereum Classic',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'ethereumclassic',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'airtm'],
            ['key' => 'airtm',
             'name' => 'AirTM',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'airtm',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'basicattentiontoken'],
            ['key' => 'basicattentiontoken',
             'name' => 'Basic Attention Token',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'basicattentiontoken',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'binancesmartchain'],
            ['key' => 'binancesmartchain',
             'name' => 'Binance Smart Chain',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'binancesmartchain',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'cardano'],
            ['key' => 'cardano',
             'name' => 'Cardano',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'cardano',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'dai'],
            ['key' => 'dai',
             'name' => 'DAI',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'dai',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'dash'],
            ['key' => 'dash',
             'name' => 'Dash',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'dash',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'eos'],
            ['key' => 'eos',
             'name' => 'EOS',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'eos',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'nem'],
            ['key' => 'nem',
             'name' => 'NEM',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'nem',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'paxos'],
            ['key' => 'paxos',
             'name' => 'Paxos',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'paxos',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'ripple'],
            ['key' => 'ripple',
             'name' => 'Ripple',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'ripple',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'shibainu'],
            ['key' => 'shibainu',
             'name' => 'SHIBA INU',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'shibainu',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'tether'],
            ['key' => 'tether',
             'name' => 'Tether',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'tether',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'tetherontron'],
            ['key' => 'tetherontron',
             'name' => 'Tether on Tron',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'tetherontron',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'tron'],
            ['key' => 'tron',
             'name' => 'Tron',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'tron',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'truemoney'],
            ['key' => 'truemoney',
             'name' => 'TrueMoney',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'truemoney',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'wrappedbitcoin'],
            ['key' => 'wrappedbitcoin',
             'name' => 'Wrapped Bitcoin',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'wrappedbitcoin',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'mts'],
            ['key' => 'mts',
             'name' => 'MTS',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'mts',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'beeline'],
            ['key' => 'beeline',
             'name' => 'Beeline',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'beeline',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'tele2'],
            ['key' => 'tele2',
             'name' => 'TELE2',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'tele2',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'banktransfer'],
            ['key' => 'banktransfer',
             'name' => 'Bank Transfer',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'banktransfer',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'ecopayz'],
            ['key' => 'ecopayz',
             'name' => 'ecoPayz',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'ecopayz',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'bnb'],
            ['key' => 'bnb',
             'name' => 'BNB',
             'url' => '',
             'logo' => '',
             'logo_color' => '',
             'icon' => 'bnb',
            ]
        );
    }
}
