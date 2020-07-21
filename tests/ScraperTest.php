<?php

use Jinas\Covid19Scraper\Scraper;
use PHPUnit\Framework\TestCase;

class ScraperTest extends TestCase
{
    /** @test */
    public function scraper_returns_an_array_of_table_data()
    {
        $data = (new Scraper())->GetTableData();

        $this->assertIsArray($data);

        $this->assertArrayHasKey('case', $data[0]);
        $this->assertArrayHasKey('age', $data[0]);
        $this->assertArrayHasKey('gender', $data[0]);
        $this->assertArrayHasKey('nationality', $data[0]);
        $this->assertArrayHasKey('condition', $data[0]);
        $this->assertArrayHasKey('transmission', $data[0]);
        $this->assertArrayHasKey('cluster', $data[0]);
        $this->assertArrayHasKey('confirmed', $data[0]);
        $this->assertArrayHasKey('recovered', $data[0]);
        $this->assertArrayHasKey('discharged', $data[0]);
        $this->assertArrayHasKey('deceased', $data[0]);

        $this->assertEquals('MAV0001', array_reverse($data)[0]['case']);
    }
}
