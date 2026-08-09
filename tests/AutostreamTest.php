<?php
/**
 * Tests for AutoStream
 */

use PHPUnit\Framework\TestCase;
use Autostream\Autostream;

class AutostreamTest extends TestCase {
    private Autostream $instance;

    protected function setUp(): void {
        $this->instance = new Autostream(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Autostream::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
