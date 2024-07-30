<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Authentication\Fido2Methods\CreationOptionsWithChallengeTimeoutInMinutes;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CreationOptionsWithChallengeTimeoutInMinutesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CreationOptionsWithChallengeTimeoutInMinutesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CreationOptionsWithChallengeTimeoutInMinutesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CreationOptionsWithChallengeTimeoutInMinutesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CreationOptionsWithChallengeTimeoutInMinutesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CreationOptionsWithChallengeTimeoutInMinutesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CreationOptionsWithChallengeTimeoutInMinutesRequestBuilderGetQueryParameters.
     * @param int|null $challengeTimeoutInMinutes Usage: challengeTimeoutInMinutes=@challengeTimeoutInMinutes
     * @return CreationOptionsWithChallengeTimeoutInMinutesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $challengeTimeoutInMinutes = null): CreationOptionsWithChallengeTimeoutInMinutesRequestBuilderGetQueryParameters {
        return new CreationOptionsWithChallengeTimeoutInMinutesRequestBuilderGetQueryParameters($challengeTimeoutInMinutes);
    }

}
