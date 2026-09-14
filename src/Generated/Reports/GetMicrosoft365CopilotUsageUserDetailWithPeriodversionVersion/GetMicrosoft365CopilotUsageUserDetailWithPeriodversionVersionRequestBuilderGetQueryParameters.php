<?php

namespace Microsoft\Graph\Beta\Generated\Reports\GetMicrosoft365CopilotUsageUserDetailWithPeriodversionVersion;

/**
 * Get the most recent activity data for enabled users of Microsoft 365 Copilot apps.
*/
class GetMicrosoft365CopilotUsageUserDetailWithPeriodversionVersionRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $version Usage: version='@version'
    */
    public ?string $version = null;
    
    /**
     * Instantiates a new GetMicrosoft365CopilotUsageUserDetailWithPeriodversionVersionRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $version Usage: version='@version'
    */
    public function __construct(?string $version = null) {
        $this->version = $version;
    }

}
