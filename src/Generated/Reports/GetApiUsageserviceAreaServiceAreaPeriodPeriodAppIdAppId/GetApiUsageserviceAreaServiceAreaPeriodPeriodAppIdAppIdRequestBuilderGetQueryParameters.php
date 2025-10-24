<?php

namespace Microsoft\\Graph\\Beta\\Generated\Reports\GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId;

/**
 * Get the tenant and app API usage for Microsoft Graph services.
*/
class GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppIdRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $appId Usage: appId='@appId'
    */
    public ?string $appId = null;
    
    /**
     * @var string|null $period Usage: period='@period'
    */
    public ?string $period = null;
    
    /**
     * @var string|null $serviceArea Usage: serviceArea='@serviceArea'
    */
    public ?string $serviceArea = null;
    
    /**
     * Instantiates a new GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppIdRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $appId Usage: appId='@appId'
     * @param string|null $period Usage: period='@period'
     * @param string|null $serviceArea Usage: serviceArea='@serviceArea'
    */
    public function __construct(?string $appId = null, ?string $period = null, ?string $serviceArea = null) {
        $this->appId = $appId;
        $this->period = $period;
        $this->serviceArea = $serviceArea;
    }

}
