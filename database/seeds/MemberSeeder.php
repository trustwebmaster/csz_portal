<?php

use Illuminate\Database\Seeder;
use App\Members;
use App\User;
use Carbon\Carbon;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get users to create members for (excluding admin)
        $users = User::where('role', 'user')->get();

        // Create members for each user
        foreach ($users as $user) {
            Members::create([
                'firstName' => explode(' ', $user->name)[0],
                'lastName' => explode(' ', $user->name)[1] ?? 'Doe',
                'email' => $user->email,
                'address1' => $this->getRandomAddress(),
                'address2' => $this->getRandomAddress2(),
                'postcode' => $this->getRandomPostcode(),
                'DOB' => Carbon::now()->subYears(rand(20, 60))->format('Y-m-d'),
                'phone' => $this->getRandomPhone(),
                'subscription' => $this->getRandomSubscription(),
            ]);
        }

        // Create additional standalone members (not tied to users)
        Members::create([
            'firstName' => 'Sarah',
            'lastName' => 'Johnson',
            'email' => 'sarah.johnson@example.com',
            'address1' => '456 Oak Street',
            'address2' => 'Apt 2B',
            'postcode' => 'SW1A 1AA',
            'DOB' => '1985-03-15',
            'phone' => '+44 20 7946 0958',
            'subscription' => 'A',
        ]);

        Members::create([
            'firstName' => 'Michael',
            'lastName' => 'Brown',
            'email' => 'michael.brown@example.com',
            'address1' => '789 Pine Avenue',
            'address2' => '',
            'postcode' => 'M1 1AA',
            'DOB' => '1990-07-22',
            'phone' => '+44 161 496 0123',
            'subscription' => 'B',
        ]);
    }

    private function getRandomAddress()
    {
        $addresses = [
            '123 Main Street',
            '456 High Road',
            '789 Church Lane',
            '321 Victoria Road',
            '654 King Street',
            '987 Queen Avenue'
        ];
        return $addresses[array_rand($addresses)];
    }

    private function getRandomAddress2()
    {
        $address2Options = ['', 'Flat 1', 'Apt 2A', 'Unit 5', 'Suite 10'];
        return $address2Options[array_rand($address2Options)];
    }

    private function getRandomPostcode()
    {
        $postcodes = [
            'SW1A 1AA',
            'M1 1AA',
            'B33 8TH',
            'W1A 0AX',
            'LS1 1UR',
            'CF10 1EP'
        ];
        return $postcodes[array_rand($postcodes)];
    }

    private function getRandomPhone()
    {
        return '+44 ' . rand(10, 99) . ' ' . rand(1000, 9999) . ' ' . rand(1000, 9999);
    }

    private function getRandomSubscription()
    {
        $subscriptions = ['A', 'B', 'C'];
        return $subscriptions[array_rand($subscriptions)];
    }
}
