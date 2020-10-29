<?php

namespace App\Helpers;

use App\Mail\RegisterConfirmation;
use App\Models\MailAudit;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class MailHelper
{
    public static function sendAccountConfirmation($userID) {
        $user = User::find($userID);
        try {
            Mail::to($user->email)->later(10, new RegisterConfirmation($user));
            $e = null;
            $success = 1;
        } catch (\Exception $e) {
            $success = 0;
        }
        self::addMailAudit($user->email, 'account-confirmation: '.$userID, $success, $e);
    }

    public static function addMailAudit($email, $action, $success, $e) {
        MailAudit::insert(['email_to' => $email, 'email_action_type' => $action, 'successful' => $success, 'error_message' => $e, 'created_at' => Carbon::now()]);
    }
}
