<?php

namespace App\StorableEvents;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class VoteSubmitted extends ShouldBeStored
{
    public function __construct(public string $voterUuid, public string $userUuid)
    {
    }
}
