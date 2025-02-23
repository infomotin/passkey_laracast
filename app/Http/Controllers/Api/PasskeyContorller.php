<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\Event\Runtime\PHP;
use Webauthn\PublicKeyCredentialCreationOptions;
use Webauthn\PublicKeyCredentialRpEntity;
use Webauthn\PublicKeyCredentialUserEntity;
use Illuminate\Support\Str;

class PasskeyContorller extends Controller
{
    public function registerOptions(Request $request)
    {
        $options = new PublicKeyCredentialCreationOptions(
            rp: new PublicKeyCredentialRpEntity(
                name:config('app.name'),
                id: parse_url(config('app.url'),PHP_URL_HOST)
            ),
            user: new PublicKeyCredentialUserEntity(
                id: $request->user()->id,
                name: $request->user()->email,
                displayName: $request->user()->name,
            ),
            challenge: Str::random(32),
            

        );
        return response()->json($options);
    }
}
