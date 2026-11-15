<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Support\ShopRules;

final class Anggota2WhiteBoxTest extends TestCase {
    public function test_diskon_non_member_di_atas_ambang(): void {
        $this->assertSame(7500, ShopRules::discount(150000, false));
    }
}