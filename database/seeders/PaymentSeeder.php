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
             'icon' => 'mastercard',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'visa'],
            ['key' => 'visa',
             'name' => 'VISA',
             'url' => 'visa.com',
             'logo' => 'visa',
             'icon' => 'visa',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'visacheckout'],
            ['key' => 'visacheckout',
             'name' => 'VISA Checkout',
             'url' => 'visa.com',
             'logo' => 'visa',
             'icon' => 'visa',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'paypal'],
            ['key' => 'paypal',
             'name' => 'PayPal',
             'url' => 'www.paypal.com',
             'logo' => 'paypal',
             'icon' => 'paypal',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'poli'],
            ['key' => 'poli',
             'name' => 'POLi',
             'url' => '',
             'logo' => '',
             'icon' => 'poli',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'bitcoin'],
            ['key' => 'bitcoin',
             'name' => 'Bitcoin',
             'url' => 'bitcoin.com',
             'logo' => 'bitcoin',
             'icon' => 'bitcoin',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'ethereum'],
            ['key' => 'ethereum',
             'name' => 'Ethereum',
             'url' => '',
             'logo' => '',
             'icon' => 'ethereum',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'litecoin'],
            ['key' => 'litecoin',
             'name' => 'LTC (Litecoin)',
             'url' => '',
             'logo' => '',
             'icon' => 'litecoin',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'dogecoin'],
            ['key' => 'dogecoin',
             'name' => 'DOGE (Dogecoin)',
             'url' => '',
             'logo' => '',
             'icon' => 'dogecoin',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'usdcoin'],
            ['key' => 'usdcoin',
             'name' => 'USD Coin',
             'url' => '',
             'logo' => '',
             'icon' => 'usdcoin',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => '1pay'],
            ['key' => '1pay',
             'name' => '1-Pay',
             'url' => '',
             'logo' => '',
             'icon' => '1pay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => '8pay'],
            ['key' => '8pay',
             'name' => '8Pay',
             'url' => '',
             'logo' => '',
             'icon' => '8pay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'abaqoos'],
            ['key' => 'abaqoos',
             'name' => 'Abaqoos',
             'url' => '',
             'logo' => '',
             'icon' => 'abaqoos',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'airtelmoney'],
            ['key' => 'airtelmoney',
             'name' => 'Airtel Money',
             'url' => '',
             'logo' => '',
             'icon' => 'airtelmoney',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'applepay'],
            ['key' => 'applepay',
             'name' => 'Apple Pay',
             'url' => '',
             'logo' => '',
             'icon' => 'applepay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'bancontact'],
            ['key' => 'bancontact',
             'name' => 'Bancontact',
             'url' => '',
             'logo' => '',
             'icon' => 'bancontact',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'bankwiretransfer'],
            ['key' => 'bankwiretransfer',
             'name' => 'Bank Wire Transfer',
             'url' => '',
             'logo' => '',
             'icon' => 'bankwiretransfer',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'bitcoingold'],
            ['key' => 'bitcoingold',
             'name' => 'Bitcoin Gold',
             'url' => 'bitcoin.com',
             'logo' => 'bitcoin',
             'icon' => 'bitcoin',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'bitshares'],
            ['key' => 'bitshares',
             'name' => 'Bitshares',
             'url' => '',
             'logo' => '',
             'icon' => 'bitshares',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'boku'],
            ['key' => 'boku',
             'name' => 'Boku',
             'url' => '',
             'logo' => '',
             'icon' => 'boku',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'cash'],
            ['key' => 'cash',
             'name' => 'Cash',
             'url' => '',
             'logo' => '',
             'icon' => 'cash',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'cashmaal'],
            ['key' => 'cashmaal',
             'name' => 'Cashmaal',
             'url' => '',
             'logo' => '',
             'icon' => 'cashmaal',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'cashtocode'],
            ['key' => 'cashtocode',
             'name' => 'CashToCode',
             'url' => '',
             'logo' => '',
             'icon' => 'cashtocode',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'chainlink'],
            ['key' => 'chainlink',
             'name' => 'Chainlink',
             'url' => '',
             'logo' => '',
             'icon' => 'chainlink',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'cheque'],
            ['key' => 'cheque',
             'name' => 'Cheque',
             'url' => '',
             'logo' => '',
             'icon' => 'cheque',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'citadel'],
            ['key' => 'citadel',
             'name' => 'Citadel',
             'url' => '',
             'logo' => '',
             'icon' => 'citadel',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'click2pay'],
            ['key' => 'click2pay',
             'name' => 'Click2Pay',
             'url' => '',
             'logo' => '',
             'icon' => 'click2pay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'clickandbuy'],
            ['key' => 'clickandbuy',
             'name' => 'ClickandBuy',
             'url' => '',
             'logo' => '',
             'icon' => 'click2pay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'connectpay'],
            ['key' => 'connectpay',
             'name' => 'ConnectPay',
             'url' => '',
             'logo' => '',
             'icon' => 'connectpay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'maestro'],
            ['key' => 'maestro',
             'name' => 'Maestro',
             'url' => '',
             'logo' => '',
             'icon' => 'maestro',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'dankort'],
            ['key' => 'dankort',
             'name' => 'Dankort',
             'url' => '',
             'logo' => '',
             'icon' => 'dankort',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'debitcards'],
            ['key' => 'debitcards',
             'name' => 'Debit Cards',
             'url' => '',
             'logo' => '',
             'icon' => 'debitcards',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'digibyte'],
            ['key' => 'digibyte',
             'name' => 'DigiByte',
             'url' => '',
             'logo' => '',
             'icon' => 'digibyte',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'dinersclub'],
            ['key' => 'dinersclub',
             'name' => 'Diners Club',
             'url' => '',
             'logo' => '',
             'icon' => 'dinersclub',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'echeck'],
            ['key' => 'echeck',
             'name' => 'eCheck',
             'url' => '',
             'logo' => '',
             'icon' => 'echeck',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'payz'],
            ['key' => 'payz',
             'name' => 'Payz',
             'url' => '',
             'logo' => '',
             'icon' => 'payz',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'ekonto'],
            ['key' => 'ekonto',
             'name' => 'eKonto',
             'url' => '',
             'logo' => '',
             'icon' => 'ekonto',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'elv'],
            ['key' => 'elv',
             'name' => 'ELV',
             'url' => '',
             'logo' => '',
             'icon' => 'elv',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'emoney'],
            ['key' => 'emoney',
             'name' => 'Emoney',
             'url' => '',
             'logo' => '',
             'icon' => 'emoney',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'enets'],
            ['key' => 'enets',
             'name' => 'eNets',
             'url' => '',
             'logo' => '',
             'icon' => 'enets',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'entropay'],
            ['key' => 'entropay',
             'name' => 'entropay',
             'url' => '',
             'logo' => '',
             'icon' => 'entropay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'epay'],
            ['key' => 'epay',
             'name' => 'Epay',
             'url' => '',
             'logo' => '',
             'icon' => 'epay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'eps'],
            ['key' => 'eps',
             'name' => 'EPS',
             'url' => '',
             'logo' => '',
             'icon' => 'eps',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'fastpay'],
            ['key' => 'fastpay',
             'name' => 'Fast Pay',
             'url' => '',
             'logo' => '',
             'icon' => 'fastpay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'fastbanktransfer'],
            ['key' => 'fastbanktransfer',
             'name' => 'Fastbank Transfer',
             'url' => '',
             'logo' => '',
             'icon' => 'fastbanktransfer',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'flexepin'],
            ['key' => 'flexepin',
             'name' => 'flexepin',
             'url' => '',
             'logo' => '',
             'icon' => 'flexepin',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'giftcards'],
            ['key' => 'giftcards',
             'name' => 'Gift Cards',
             'url' => '',
             'logo' => '',
             'icon' => 'giftcards',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'giropay'],
            ['key' => 'giropay',
                'name' => 'giropay',
                'url' => 'www.girocard.eu',
                'logo' => 'giropay',
                'icon' => 'giropay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'ideal'],
            ['key' => 'ideal',
             'name' => 'iDeal',
             'url' => 'www.ideal.nl',
             'logo' => 'ideal',
             'icon' => 'ideal',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'idebit'],
            ['key' => 'idebit',
             'name' => 'iDebit',
             'url' => '',
             'logo' => '',
             'icon' => 'idebit',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'instantbanking'],
            ['key' => 'instantbanking',
             'name' => 'Instant Banking',
             'url' => '',
             'logo' => '',
             'icon' => 'instantbanking',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'interac'],
            ['key' => 'interac',
             'name' => 'Interac',
             'url' => '',
             'logo' => '',
             'icon' => 'interac',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'jetonwallet'],
            ['key' => 'jetonwallet',
             'name' => 'Jeton Wallet',
             'url' => '',
             'logo' => '',
             'icon' => 'jetonwallet',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'klarna'],
            ['key' => 'klarna',
             'name' => 'Klarna',
             'url' => 'klarna.com',
             'logo' => 'klarna',
             'icon' => 'klarna',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'laser'],
            ['key' => 'laser',
             'name' => 'Laser',
             'url' => '',
             'logo' => '',
             'icon' => 'laser',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'monero'],
            ['key' => 'monero',
             'name' => 'Monero',
             'url' => '',
             'logo' => '',
             'icon' => 'monero',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'monetaru'],
            ['key' => 'monetaru',
             'name' => 'Moneta.ru',
             'url' => '',
             'logo' => '',
             'icon' => 'monetaru',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'moneyorder'],
            ['key' => 'moneyorder',
             'name' => 'Money Order',
             'url' => '',
             'logo' => '',
             'icon' => 'moneyorder',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'monzo'],
            ['key' => 'monzo',
             'name' => 'Monzo',
             'url' => '',
             'logo' => '',
             'icon' => 'monzo',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'moonpay'],
            ['key' => 'moonpay',
             'name' => 'Moonpay',
             'url' => '',
             'logo' => '',
             'icon' => 'moonpay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'mtnairtime'],
            ['key' => 'mtnairtime',
             'name' => 'MTN Airtime',
             'url' => '',
             'logo' => '',
             'icon' => 'mtnairtime',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'muchBetter'],
            ['key' => 'muchBetter',
             'name' => 'MuchBetter',
             'url' => '',
             'logo' => '',
             'icon' => 'muchBetter',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'multibanco'],
            ['key' => 'multibanco',
             'name' => 'Multibanco',
             'url' => '',
             'logo' => '',
             'icon' => 'bancontact',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'neteller'],
            ['key' => 'neteller',
             'name' => 'Neteller',
             'url' => 'neteller.com',
             'logo' => 'neteller',
             'icon' => 'neteller',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'netpay'],
            ['key' => 'netpay',
             'name' => 'Netpay',
             'url' => '',
             'logo' => '',
             'icon' => 'netpay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'nordea'],
            ['key' => 'nordea',
             'name' => 'Nordea',
             'url' => '',
             'logo' => '',
             'icon' => 'nordea',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'omisego'],
            ['key' => 'omisego',
             'name' => 'OmiseGO',
             'url' => '',
             'logo' => '',
             'icon' => 'omisego',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'ozow'],
            ['key' => 'ozow',
             'name' => 'Ozow',
             'url' => '',
             'logo' => '',
             'icon' => 'ozow',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'pay4fun'],
            ['key' => 'pay4fun',
             'name' => 'Pay4Fun',
             'url' => '',
             'logo' => '',
             'icon' => 'pay4fun',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'paybox'],
            ['key' => 'paybox',
             'name' => 'Paybox',
             'url' => '',
             'logo' => '',
             'icon' => 'paybox',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'paydunya'],
            ['key' => 'paydunya',
             'name' => 'Paydunya',
             'url' => '',
             'logo' => '',
             'icon' => 'paydunya',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'payeer'],
            ['key' => 'payeer',
             'name' => 'Payeer',
             'url' => '',
             'logo' => '',
             'icon' => 'payeer',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'payfast'],
            ['key' => 'payfast',
             'name' => 'Payfast',
             'url' => '',
             'logo' => '',
             'icon' => 'payfast',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'paynearme'],
            ['key' => 'paynearme',
             'name' => 'PayNearMe',
             'url' => '',
             'logo' => '',
             'icon' => 'paynearme',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'paypoint'],
            ['key' => 'paypoint',
             'name' => 'PayPoint',
             'url' => '',
             'logo' => '',
             'icon' => 'paypoint',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'paysafecard'],
            ['key' => 'paysafecard',
             'name' => 'paysafecard',
             'url' => 'paysafecard.com',
             'logo' => 'paysafecard',
             'icon' => 'paysafecard',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'paytm'],
            ['key' => 'paytm',
             'name' => 'Paytm',
             'url' => '',
             'logo' => '',
             'icon' => 'paytm',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'perfectmoney'],
            ['key' => 'perfectmoney',
             'name' => 'Perfect Money',
             'url' => '',
             'logo' => '',
             'icon' => 'perfectmoney',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'persontoperson'],
            ['key' => 'persontoperson',
             'name' => 'Person to Person',
             'url' => '',
             'logo' => '',
             'icon' => 'persontoperson',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'pingit'],
            ['key' => 'pingit',
             'name' => 'Pingit',
             'url' => '',
             'logo' => '',
             'icon' => 'pingit',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'pipay'],
            ['key' => 'pipay',
             'name' => 'PiPay',
             'url' => '',
             'logo' => '',
             'icon' => 'pipay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'postepay'],
            ['key' => 'postepay',
             'name' => 'Poste Pay',
             'url' => '',
             'logo' => '',
             'icon' => 'postepay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'przelewy24'],
            ['key' => 'przelewy24',
             'name' => 'Przelewy24',
             'url' => '',
             'logo' => '',
             'icon' => 'przelewy24',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'qiwi'],
            ['key' => 'qiwi',
             'name' => 'QIWI',
             'url' => '',
             'logo' => '',
             'icon' => 'qiwi',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'qtum'],
            ['key' => 'qtum',
             'name' => 'QTum',
             'url' => '',
             'logo' => '',
             'icon' => 'qtum',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'quickcash'],
            ['key' => 'quickcash',
             'name' => 'Quickcash',
             'url' => '',
             'logo' => '',
             'icon' => 'quickcash',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'revolut'],
            ['key' => 'revolut',
             'name' => 'Revolut',
             'url' => '',
             'logo' => '',
             'icon' => 'revolut',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'runpaywallet'],
            ['key' => 'runpaywallet',
             'name' => 'Runpay Wallet',
             'url' => '',
             'logo' => '',
             'icon' => 'runpaywallet',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'sirumobile'],
            ['key' => 'sirumobile',
             'name' => 'Siru Mobile',
             'url' => '',
             'logo' => '',
             'icon' => 'sirumobile',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'skrill'],
            ['key' => 'skrill',
             'name' => 'Skrill',
             'url' => 'skrill.com',
             'logo' => 'skrill',
             'icon' => 'skrill',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'sofort'],
            ['key' => 'sofort',
             'name' => 'Sofort',
             'url' => '',
             'logo' => '',
             'icon' => 'sofort',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'speedcard'],
            ['key' => 'speedcard',
             'name' => 'Speedcard',
             'url' => '',
             'logo' => '',
             'icon' => 'speedcard',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'sticpay'],
            ['key' => 'sticpay',
             'name' => 'Stic Pay',
             'url' => '',
             'logo' => '',
             'icon' => 'sticpay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'teleingreso'],
            ['key' => 'teleingreso',
             'name' => 'Teleingreso',
             'url' => '',
             'logo' => '',
             'icon' => 'teleingreso',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'thawte'],
            ['key' => 'thawte',
             'name' => 'Thawte',
             'url' => '',
             'logo' => '',
             'icon' => 'thawte',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'tigo'],
            ['key' => 'tigo',
             'name' => 'Tigo',
             'url' => '',
             'logo' => '',
             'icon' => 'tigo',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'truetsd'],
            ['key' => 'truetsd',
             'name' => 'TrueTSD',
             'url' => '',
             'logo' => '',
             'icon' => 'truetsd',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'trustly'],
            ['key' => 'trustly',
             'name' => 'Trustly',
             'url' => '',
             'logo' => '',
             'icon' => 'trustly',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'ukash'],
            ['key' => 'ukash',
             'name' => 'UKash',
             'url' => '',
             'logo' => '',
             'icon' => 'ukash',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'unionpay'],
            ['key' => 'unionpay',
             'name' => 'UnionPay',
             'url' => '',
             'logo' => '',
             'icon' => 'unionpay',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'upi'],
            ['key' => 'upi',
             'name' => 'UPI',
             'url' => '',
             'logo' => '',
             'icon' => 'upi',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'usemyfunds'],
            ['key' => 'usemyfunds',
             'name' => 'Use My Funds',
             'url' => '',
             'logo' => '',
             'icon' => 'usemyfunds',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'verge'],
            ['key' => 'verge',
             'name' => 'Verge',
             'url' => '',
             'logo' => '',
             'icon' => 'verge',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'vodacom'],
            ['key' => 'vodacom',
             'name' => 'Vodacom',
             'url' => '',
             'logo' => '',
             'icon' => 'vodacom',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'voucherdeposit'],
            ['key' => 'voucherdeposit',
             'name' => 'Voucher Deposit',
             'url' => '',
             'logo' => '',
             'icon' => 'voucherdeposit',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'webmoney'],
            ['key' => 'webmoney',
             'name' => 'Webmoney',
             'url' => '',
             'logo' => '',
             'icon' => 'webmoney',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'westernunion'],
            ['key' => 'westernunion',
             'name' => 'Western Union',
             'url' => '',
             'logo' => '',
             'icon' => 'westernunion',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'yandexmoney'],
            ['key' => 'yandexmoney',
             'name' => 'Yandex Money',
             'url' => '',
             'logo' => '',
             'icon' => 'yandexmoney',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'zapper'],
            ['key' => 'zapper',
             'name' => 'Zapper',
             'url' => '',
             'logo' => '',
             'icon' => 'zapper',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'zcash'],
            ['key' => 'zcash',
             'name' => 'Zcash',
             'url' => '',
             'logo' => '',
             'icon' => 'zcash',
            ]
        );
        Payment::query()->updateOrCreate(
            ['key' => 'zimpler'],
            ['key' => 'zimpler',
             'name' => 'Zimpler',
             'url' => '',
             'logo' => '',
             'icon' => 'zimpler',
            ]
        );
    }
}
