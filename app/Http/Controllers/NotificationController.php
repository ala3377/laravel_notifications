<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\SendSmsNotification;

class NotificationController extends Controller
{
    public function sendSms()
    {
        $user = User::find(1); // Change to the desired user ID

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $user->notify(new SendSmsNotification());

        return response()->json(['message' => 'SMS sent!']);
    }
}
