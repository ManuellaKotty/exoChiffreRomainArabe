<?php

use PHPUnit\ChiffreArabeRomain;
use PHPUnit\Framework\TestCase;


class ChiffreArabeRomainTest extends Case
{
    // Tester que le chiffre 1 soit traduit I en romain
    function unDoitEtreTraduitEnRomain () {
        // Given
            $chiffreArabeRomain = new ChiffreArabeRomain();

        // When
            $chiffreArabeRomain = unArabeDevientUnRomain();
        // Then
            $this->assertEquals("I", $chiffreArabeRomain);
    }
}
