<?php

namespace Microsoft\Graph\Beta\Generated\Reports\GetMicrosoft365CopilotUsageUserDetailWithPeriodversionVersion;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetMicrosoft365CopilotUsageUserDetailWithPeriodversionVersionRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GetMicrosoft365CopilotUsageUserDetailWithPeriodversionVersionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetMicrosoft365CopilotUsageUserDetailWithPeriodversionVersionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GetMicrosoft365CopilotUsageUserDetailWithPeriodversionVersionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetMicrosoft365CopilotUsageUserDetailWithPeriodversionVersionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetMicrosoft365CopilotUsageUserDetailWithPeriodversionVersionRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetMicrosoft365CopilotUsageUserDetailWithPeriodversionVersionRequestBuilderGetQueryParameters.
     * @param string|null $version Usage: version='@version'
     * @return GetMicrosoft365CopilotUsageUserDetailWithPeriodversionVersionRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $version = null): GetMicrosoft365CopilotUsageUserDetailWithPeriodversionVersionRequestBuilderGetQueryParameters {
        return new GetMicrosoft365CopilotUsageUserDetailWithPeriodversionVersionRequestBuilderGetQueryParameters($version);
    }

}
