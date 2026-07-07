<?php

namespace Microsoft\Graph\Beta\Generated\Reports\GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppIdRequestBuilderGetRequestConfiguration
*/
class GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId_c1ef340b extends BaseRequestConfiguration 
{
    /**
     * @var GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId_2c377b1e|null $queryParameters Request query parameters
    */
    public ?GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId_2c377b1e $queryParameters = null;
    
    /**
     * Instantiates a new GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId_c1ef340b and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId_2c377b1e|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId_2c377b1e $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId_2c377b1e.
     * @param string|null $appId Usage: appId='@appId'
     * @param string|null $period Usage: period='@period'
     * @param string|null $serviceArea Usage: serviceArea='@serviceArea'
     * @return GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId_2c377b1e
    */
    public static function createQueryParameters(?string $appId = null, ?string $period = null, ?string $serviceArea = null): GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId_2c377b1e {
        return new GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId_2c377b1e($appId, $period, $serviceArea);
    }

}
