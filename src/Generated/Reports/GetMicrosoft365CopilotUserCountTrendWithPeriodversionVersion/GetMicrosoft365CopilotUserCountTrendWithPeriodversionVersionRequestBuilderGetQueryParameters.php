<?php

namespace Microsoft\Graph\Beta\Generated\Reports\GetMicrosoft365CopilotUserCountTrendWithPeriodversionVersion;

/**
 * Get the trend in the daily number of active and enabled users of Microsoft 365 Copilot for a specified time period.
*/
class GetMicrosoft365CopilotUserCountTrendWithPeriodversionVersionRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $version Usage: version='@version'
    */
    public ?string $version = null;
    
    /**
     * Instantiates a new GetMicrosoft365CopilotUserCountTrendWithPeriodversionVersionRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $version Usage: version='@version'
    */
    public function __construct(?string $version = null) {
        $this->version = $version;
    }

}
