<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\UserStateSummary;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserStateSummaryRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UserStateSummaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserStateSummaryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UserStateSummaryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserStateSummaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserStateSummaryRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserStateSummaryRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserStateSummaryRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserStateSummaryRequestBuilderGetQueryParameters {
        return new UserStateSummaryRequestBuilderGetQueryParameters($expand, $select);
    }

}
