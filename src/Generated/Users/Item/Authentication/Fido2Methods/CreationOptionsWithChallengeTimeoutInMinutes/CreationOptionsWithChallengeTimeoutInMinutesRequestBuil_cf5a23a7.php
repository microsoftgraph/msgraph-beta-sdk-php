<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Authentication\Fido2Methods\CreationOptionsWithChallengeTimeoutInMinutes;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: creationOptionsWithChallengeTimeoutInMinutesRequestBuilderGetRequestConfiguration
*/
class CreationOptionsWithChallengeTimeoutInMinutesRequestBuil_cf5a23a7 extends BaseRequestConfiguration 
{
    /**
     * @var CreationOptionsWithChallengeTimeoutInMinutesRequestBuil_0e13070b|null $queryParameters Request query parameters
    */
    public ?CreationOptionsWithChallengeTimeoutInMinutesRequestBuil_0e13070b $queryParameters = null;
    
    /**
     * Instantiates a new CreationOptionsWithChallengeTimeoutInMinutesRequestBuil_cf5a23a7 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CreationOptionsWithChallengeTimeoutInMinutesRequestBuil_0e13070b|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CreationOptionsWithChallengeTimeoutInMinutesRequestBuil_0e13070b $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CreationOptionsWithChallengeTimeoutInMinutesRequestBuil_0e13070b.
     * @param int|null $challengeTimeoutInMinutes Usage: challengeTimeoutInMinutes=@challengeTimeoutInMinutes
     * @return CreationOptionsWithChallengeTimeoutInMinutesRequestBuil_0e13070b
    */
    public static function createQueryParameters(?int $challengeTimeoutInMinutes = null): CreationOptionsWithChallengeTimeoutInMinutesRequestBuil_0e13070b {
        return new CreationOptionsWithChallengeTimeoutInMinutesRequestBuil_0e13070b($challengeTimeoutInMinutes);
    }

}
