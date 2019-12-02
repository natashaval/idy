<?php
declare(strict_types=1);

use \PHPUnit\Framework\TestCase;
use \Idy\Idea\Domain\Model\Rating;
use \Idy\Idea\Domain\Model\RatingId;
use \Idy\Idea\Domain\Model\RatingValue;
use \Idy\Idea\Domain\Model\IdeaId;

class RatingTest extends TestCase
{
    public function testCanBeInstantiated() : void
    {
        $rating = new Rating(
            new RatingId(),
            "bebek@bebek.com",
            new RatingValue(4),
            new IdeaId(1)
        );

        $this->assertInstanceOf(Rating::class, null);
    }
}