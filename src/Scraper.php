<?php

namespace Jinas\Covid19Scraper;

use Goutte\Client;

class Scraper
{
    private $client;

    /**
     * lookup.
     *
     * @var mixed
     */
    protected $lookup =
    [
        'cases'         => '.covid_table_row_item.case_id',
        'ages'          => '.covid_table_row_item.case_age',
        'genders'       => '.covid_table_row_item.case_gender',
        'nationalitys'  => '.covid_table_row_item.case_nationality',
        'conditions'    => '.covid_table_row_item.case_condition',
        'transmissions' => '.covid_table_row_item.case_infection',
        'clusters'      => '.covid_table_row_item.cluster',
        'confirmeds'    => '.covid_table_row_item.case_confirmed',
        'recovereds'    => '.covid_table_row_item.case_recovered',
        'dischargeds'   => '.covid_table_row_item.case_recovered',
        'deceaseds'     => '.covid_table_row_item.case_deceased',
    ];

    public function __construct()
    {
        $this->client = new Client();
    }

    public function GetTableData(): array
    {
        $crawler = $this->client->request('GET', 'https://covid19.health.gov.mv/dashboard/list/');

        foreach ($this->lookup as $key => $row) {
            $data[] = $crawler->filter($row)->extract(['_text']);
        }

        foreach ($data[0] as $key => $case) {
            $table[$key] = [
                'case'         => $case,
                'age'          => (int) $data[1][$key],
                'gender'       => $data[2][$key],
                'nationality'  => $data[3][$key],
                'condition'    => $data[4][$key],
                'transmission' => $data[5][$key],
                'cluster'      => $data[6][$key],
                'confirmed'    => $data[7][$key],
                'recovered'    => $data[8][$key],
                'discharged'   => $data[9][$key],
                'deceased'     => $data[10][$key],
            ];
        }

        return $table;
    }
}
