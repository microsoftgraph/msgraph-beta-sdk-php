<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessGetEnterpriseApplicationRepo_7ee1907f;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphNetworkaccessGetEnterpriseApplicationReportWithStartDateTimeWithEndDateTimeuserIdUserIdRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphNetworkaccessGetEnterpriseApplicationRepo_68c0f16d extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphNetworkaccessGetEnterpriseApplicationRepo_00b8240b|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphNetworkaccessGetEnterpriseApplicationRepo_00b8240b $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetEnterpriseApplicationRepo_68c0f16d and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphNetworkaccessGetEnterpriseApplicationRepo_00b8240b|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphNetworkaccessGetEnterpriseApplicationRepo_00b8240b $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetEnterpriseApplicationRepo_00b8240b.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @param string|null $userId Usage: userId='@userId'
     * @return MicrosoftGraphNetworkaccessGetEnterpriseApplicationRepo_00b8240b
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null, ?string $userId = null): MicrosoftGraphNetworkaccessGetEnterpriseApplicationRepo_00b8240b {
        return new MicrosoftGraphNetworkaccessGetEnterpriseApplicationRepo_00b8240b($count, $filter, $search, $skip, $top, $userId);
    }

}
