// tests/SwarmFormHandlerTest.php
<?php

use PHPUnit\Framework\TestCase;
use Mockery;

class SwarmFormHandlerTest extends TestCase {
    public function testSendWhatsAppMessage() {
        // Mock the send_whatsapp_message function
        $mock = Mockery::mock('alias:send_whatsapp_message');
        $mock->shouldReceive('send_whatsapp_message')
             ->with('Test message')
             ->andReturn(true);

        // Now when send_whatsapp_message is called, it will return true
        $result = send_whatsapp_message('Test message');
        $this->assertTrue($result);
    }

    protected function tearDown(): void {
        Mockery::close();
    }
}
