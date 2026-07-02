<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessCrossTenantAccessReportWithS_2c36c1b1;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphNetworkaccessCrossTenantAccessReportWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphNetworkaccessCrossTenantAccessReportWithS_3f3981c6 extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphNetworkaccessCrossTenantAccessReportWithS_082cd9e1|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphNetworkaccessCrossTenantAccessReportWithS_082cd9e1 $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessCrossTenantAccessReportWithS_3f3981c6 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphNetworkaccessCrossTenantAccessReportWithS_082cd9e1|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphNetworkaccessCrossTenantAccessReportWithS_082cd9e1 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphNetworkaccessCrossTenantAccessReportWithS_082cd9e1.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftGraphNetworkaccessCrossTenantAccessReportWithS_082cd9e1
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): MicrosoftGraphNetworkaccessCrossTenantAccessReportWithS_082cd9e1 {
        return new MicrosoftGraphNetworkaccessCrossTenantAccessReportWithS_082cd9e1($count, $filter, $search, $skip, $top);
    }

}
