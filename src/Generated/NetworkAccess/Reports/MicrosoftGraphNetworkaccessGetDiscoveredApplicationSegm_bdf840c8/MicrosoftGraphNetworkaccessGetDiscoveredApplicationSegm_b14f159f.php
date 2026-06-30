<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessGetDiscoveredApplicationSegm_bdf840c8;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphNetworkaccessGetDiscoveredApplicationSegmentReportWithStartDateTimeWithEndDateTimeuserIdUserIdRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphNetworkaccessGetDiscoveredApplicationSegm_b14f159f extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphNetworkaccessGetDiscoveredApplicationSegm_d742e723|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphNetworkaccessGetDiscoveredApplicationSegm_d742e723 $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetDiscoveredApplicationSegm_b14f159f and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphNetworkaccessGetDiscoveredApplicationSegm_d742e723|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphNetworkaccessGetDiscoveredApplicationSegm_d742e723 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetDiscoveredApplicationSegm_d742e723.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @param string|null $userId Usage: userId='@userId'
     * @return MicrosoftGraphNetworkaccessGetDiscoveredApplicationSegm_d742e723
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null, ?string $userId = null): MicrosoftGraphNetworkaccessGetDiscoveredApplicationSegm_d742e723 {
        return new MicrosoftGraphNetworkaccessGetDiscoveredApplicationSegm_d742e723($count, $filter, $search, $skip, $top, $userId);
    }

}
