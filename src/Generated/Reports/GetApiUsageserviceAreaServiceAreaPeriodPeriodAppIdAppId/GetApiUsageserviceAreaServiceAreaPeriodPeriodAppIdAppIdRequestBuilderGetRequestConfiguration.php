<?php

namespace Microsoft\\Graph\\Beta\\Generated\Reports\GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppIdRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppIdRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppIdRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppIdRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppIdRequestBuilderGetQueryParameters.
     * @param string|null $appId Usage: appId='@appId'
     * @param string|null $period Usage: period='@period'
     * @param string|null $serviceArea Usage: serviceArea='@serviceArea'
     * @return GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppIdRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $appId = null, ?string $period = null, ?string $serviceArea = null): GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppIdRequestBuilderGetQueryParameters {
        return new GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppIdRequestBuilderGetQueryParameters($appId, $period, $serviceArea);
    }

}
