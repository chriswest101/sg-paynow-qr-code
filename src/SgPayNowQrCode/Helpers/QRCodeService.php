<?php

namespace SgPayNowQrCode\Helpers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeService
{
    /**
     * Generate a QR code
     *
     * @param string $string
     * @return string
     */
    public static function generate(string $string, string $pathToImage): string
    {
        return base64_encode(QrCode::format('png')
                ->size(300)
                ->style('square', 0.8)
                ->margin(5)
                ->errorCorrection('H')
                ->mergeString($pathToImage, .2)
                ->color(124, 26, 120)
                ->generate($string));
    }
}
