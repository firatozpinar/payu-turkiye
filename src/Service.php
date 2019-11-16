<?php

namespace PayuTurkiye;

abstract class Service
{
    /**
     * Istek atilacak servis linki
     *
     * @var string
     */
    protected $endPoint;

    /**
     * İşyerini ID bilgisidir. Üye İşyeri Kontrol Paneli’nde, hesap ayarları sayfasında bulunmaktadır
     *
     * @var string
     */
    protected $merchant;

    /**
     * İşyerini sifre bilgisidir. Üye İşyeri Kontrol Paneli’nde, hesap ayarları sayfasında bulunmaktadır
     *
     * @var string
     */
    protected $secretKey;
}