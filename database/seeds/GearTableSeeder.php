<?php

use App\Models\Gear;
use Illuminate\Database\Seeder;

class GearTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $seeded = (Gear::count() > 0);
        if ($seeded)
            return;

        // generate and populate the gear table
        foreach ($this->gearList() as $gear)
        {
            Gear::create([
                'name' => $gear[0],
                'description' => $gear[1],
                'category' => $gear[2]
            ]);
        }
    }

    private function gearList()
    {
        return array(
            ['Rope 30m', null, 'essentials'],
            ['Rope 40m', null, 'essentials'],
            ['Rope 60m', null, 'essentials'],
            ['Rope 70m', null, 'essentials'],
            ['Rope 80m', null, 'essentials'],
            ['Rope 100m', null, 'essentials'],
            ['Prussik', null, 'essentials'],
            ['Locking Carabiners', null, 'essentials'],
            ['Non-Locking Carabiners', null, 'essentials'],
            ['Quickdraws', null, 'essentials'],
            ['Ohm', null, 'essentials'],
            ['Nylon Slings', null, 'essentials'],
            ['Dyneema Slings', null, 'essentials'],
            ['Webbing', null, 'essentials'],
            ['Beal Escaper', null, 'essentials'],
            ['Static Cord', null, 'essentials'],
            ['Helmet', null, 'essentials'],
            ['Maillon', null, 'essentials'],

            ['Single Rack', null, 'trad & aid'],
            ['Double Rack', null, 'trad & aid'],
            ['Nut Tool', null, 'trad & aid'],
            ['Piton', null, 'trad & aid'],
            ['Swivel', null, 'trad & aid'],
            ['Cams', null, 'trad & aid'],
            ['Hexes', null, 'trad & aid'],
            ['Nuts', null, 'trad & aid'],
            ['Alien', null, 'trad & aid'],
            ['Haul Bag', null, 'trad & aid'],
            ['Portaledge', null, 'trad & aid'],
            ['Bolt Hanger', null, 'trad & aid'],
            ['Rap Rings', null, 'trad & aid'],
            ['Belay/Rap Station', null, 'trad & aid'],
            ['Ascender', null, 'trad & aid'],
            ['Jumar', null, 'trad & aid'],
            ['Pulley', null, 'trad & aid'],

            ['Ice Axe', null, 'ice'],
            ['Technical Ice Tool', null, 'ice'],
            ['Hammer Ice Tool', null, 'ice'],
            ['Crampons', null, 'ice'],
            ['Ice Screws', null, 'ice'],
            ['Ice Piton', null, 'ice'],
            ['Racking Clip', null, 'ice'],
            ['Picket Snow Anchor', null, 'ice']
        );
    }
}
