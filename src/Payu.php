<?php

namespace PayuTurkiye;

use PayuTurkiye\Services\AluService;
use PayuTurkiye\Services\BinService;
use PayuTurkiye\Services\CardService;
use PayuTurkiye\Services\CheckoutService;
use PayuTurkiye\Services\IdnService;
use PayuTurkiye\Services\IosService;
use PayuTurkiye\Services\IpnService;
use PayuTurkiye\Services\IrnService;
use PayuTurkiye\Services\LuService;
use PayuTurkiye\Services\PointService;
use PayuTurkiye\Services\ReportService;

/**
 * Class Payu
 *
 * @see https://payuturkiye.github.io/PayU-Turkiye-Entegrasyon-Dokumani/
 */
class Payu
{
    /**
     * ALU v3(API) Entegrasyonu
     *
     * @see https://payuturkiye.github.io/PayU-Turkiye-Entegrasyon-Dokumani/#alu-v3-api-entegrasyonu
     * @return AluService
     */
    public function alu(): AluService
    {
        return new AluService;
    }

    /**
     * LU(Ortak Ödeme Sayfası) Entegrasyonu
     *
     * @see https://payuturkiye.github.io/PayU-Turkiye-Entegrasyon-Dokumani/#lu-ortak-odeme-sayfasi-entegrasyonu
     * @return AluService
     */
    public function lu(): LuService
    {
        return new LuService;
    }

    /**
     * PayU Checkout Entegrasyonu
     *
     * @see https://payuturkiye.github.io/PayU-Turkiye-Entegrasyon-Dokumani/#payu-checkout-entegrasyonu
     * @return CheckoutService
     */
    public function checkout(): CheckoutService
    {
        return new CheckoutService;
    }

    /**
     * Kart Saklama
     *
     * @see https://payuturkiye.github.io/PayU-Turkiye-Entegrasyon-Dokumani/#kart-saklama
     * @return CardService
     */
    public function card(): CardService
    {
        return new CardService;
    }

    /**
     * IPN Servisi(Asenkron Bildirim Servisi)
     *
     * @see https://payuturkiye.github.io/PayU-Turkiye-Entegrasyon-Dokumani/#ipn-servisi-asenkron-bildirim-servisi
     * @return IpnService
     */
    public function ipn(): IpnService
    {
        return new IpnService;
    }

    /**
     * IOS Servisi(İşlem Sorgu Servisi)
     *
     * @see https://payuturkiye.github.io/PayU-Turkiye-Entegrasyon-Dokumani/#ios-servisi-islem-sorgu-servisi
     * @return IosService
     */
    public function ios(): IosService
    {
        return new IosService;
    }

    /**
     * IRN Servisi(İptal/İade Servisi)
     *
     * @see https://payuturkiye.github.io/PayU-Turkiye-Entegrasyon-Dokumani/#irn-servisi-iptal-iade-servisi
     * @return IrnService
     */
    public function irn(): IrnService
    {
        return new IrnService;
    }

    /**
     * BIN Servisi
     *
     * @see https://payuturkiye.github.io/PayU-Turkiye-Entegrasyon-Dokumani/#bin-servisi
     * @return BinService
     */
    public function bin(): BinService
    {
        return new BinService;
    }

    /**
     * Puan Sorgu Servisi ve Puan Kullanımı
     *
     * @see https://payuturkiye.github.io/PayU-Turkiye-Entegrasyon-Dokumani/#puan-sorgu-servisi-ve-puan-kullanimi
     * @return PointService
     */
    public function point(): PointService
    {
        return new PointService;
    }

    /**
     * IDN Servisi(Konfirmasyon Servisi)
     *
     * @see https://payuturkiye.github.io/PayU-Turkiye-Entegrasyon-Dokumani/#idn-servisi-konfirmasyon-servisi
     * @return IdnService
     */
    public function idn(): IdnService
    {
        return new IdnService;
    }

    /**
     * Rapor Servisi
     *
     * @see https://payuturkiye.github.io/PayU-Turkiye-Entegrasyon-Dokumani/#rapor-servisi
     * @return ReportService
     */
    public function report(): ReportService
    {
        return new ReportService;
    }
}