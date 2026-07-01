<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Authentication\Fido2Methods\CreationOptionsWithChallengeTimeoutInMinutes;

/**
 * Retrieve creation options required to generate and register a Microsoft Entra ID-compatible passkey. Self-service operations aren't supported.   Original name: creationOptionsWithChallengeTimeoutInMinutesRequestBuilderGetQueryParameters
*/
class CreationOptionsWithChallengeTimeoutInMinutesRequestBuil_0e13070b 
{
    /**
     * @var int|null $challengeTimeoutInMinutes Usage: challengeTimeoutInMinutes=@challengeTimeoutInMinutes
    */
    public ?int $challengeTimeoutInMinutes = null;
    
    /**
     * Instantiates a new CreationOptionsWithChallengeTimeoutInMinutesRequestBuil_0e13070b and sets the default values.
     * @param int|null $challengeTimeoutInMinutes Usage: challengeTimeoutInMinutes=@challengeTimeoutInMinutes
    */
    public function __construct(?int $challengeTimeoutInMinutes = null) {
        $this->challengeTimeoutInMinutes = $challengeTimeoutInMinutes;
    }

}
