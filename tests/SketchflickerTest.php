<?php
/**
 * Tests for SketchFlicker
 */

use PHPUnit\Framework\TestCase;
use Sketchflicker\Sketchflicker;

class SketchflickerTest extends TestCase {
    private Sketchflicker $instance;

    protected function setUp(): void {
        $this->instance = new Sketchflicker(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Sketchflicker::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
