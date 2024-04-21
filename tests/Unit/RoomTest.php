<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

// Import the room
use App\Room;
class RoomTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_room_has(): void
    {
        $room = new Room(["Jack", "Peter", "Amy"]); // Create a new room
        $this->assertTrue($room->has("Jack")); // Expect true
        $this->assertFalse($room->has("Eric")); // Expect false
    }
    
}
