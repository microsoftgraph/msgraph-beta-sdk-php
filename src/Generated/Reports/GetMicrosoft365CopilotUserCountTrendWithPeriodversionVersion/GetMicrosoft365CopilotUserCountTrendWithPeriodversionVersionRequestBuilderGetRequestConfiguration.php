<?php

namespace Microsoft\Graph\Beta\Generated\Reports\GetMicrosoft365CopilotUserCountTrendWithPeriodversionVersion;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetMicrosoft365CopilotUserCountTrendWithPeriodversionVersionRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GetMicrosoft365CopilotUserCountTrendWithPeriodversionVersionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetMicrosoft365CopilotUserCountTrendWithPeriodversionVersionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GetMicrosoft365CopilotUserCountTrendWithPeriodversionVersionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetMicrosoft365CopilotUserCountTrendWithPeriodversionVersionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetMicrosoft365CopilotUserCountTrendWithPeriodversionVersionRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetMicrosoft365CopilotUserCountTrendWithPeriodversionVersionRequestBuilderGetQueryParameters.
     * @param string|null $version Usage: version='@version'
     * @return GetMicrosoft365CopilotUserCountTrendWithPeriodversionVersionRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $version = null): GetMicrosoft365CopilotUserCountTrendWithPeriodversionVersionRequestBuilderGetQueryParameters {
        return new GetMicrosoft365CopilotUserCountTrendWithPeriodversionVersionRequestBuilderGetQueryParameters($version);
    }

}
