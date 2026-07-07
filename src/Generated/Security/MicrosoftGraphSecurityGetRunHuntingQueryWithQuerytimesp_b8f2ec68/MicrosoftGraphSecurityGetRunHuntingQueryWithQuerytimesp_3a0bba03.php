<?php

namespace Microsoft\Graph\Beta\Generated\Security\MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_b8f2ec68;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphSecurityGetRunHuntingQueryWithQuerytimespanTimespanWithWorkspaceIdRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_3a0bba03 extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_c5230b30|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_c5230b30 $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_3a0bba03 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_c5230b30|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_c5230b30 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_c5230b30.
     * @param string|null $timespan Usage: timespan='@timespan'
     * @param string|null $workspaceId Usage: workspaceId=@workspaceId
     * @return MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_c5230b30
    */
    public static function createQueryParameters(?string $timespan = null, ?string $workspaceId = null): MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_c5230b30 {
        return new MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_c5230b30($timespan, $workspaceId);
    }

}
