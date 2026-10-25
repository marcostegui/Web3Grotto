<?php
/**
 * Tests for Web3Grotto
 */

use PHPUnit\Framework\TestCase;
use Web3grotto\Web3grotto;

class Web3grottoTest extends TestCase {
    private Web3grotto $instance;

    protected function setUp(): void {
        $this->instance = new Web3grotto(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Web3grotto::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
