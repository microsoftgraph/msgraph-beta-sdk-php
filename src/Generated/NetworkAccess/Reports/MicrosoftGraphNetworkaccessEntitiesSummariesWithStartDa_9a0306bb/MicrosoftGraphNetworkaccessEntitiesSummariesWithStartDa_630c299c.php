<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_9a0306bb;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphNetworkaccessEntitiesSummariesWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_630c299c extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_f0323d90|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_f0323d90 $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_630c299c and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_f0323d90|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_f0323d90 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_f0323d90.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_f0323d90
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_f0323d90 {
        return new MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_f0323d90($count, $filter, $search, $skip, $top);
    }

}
