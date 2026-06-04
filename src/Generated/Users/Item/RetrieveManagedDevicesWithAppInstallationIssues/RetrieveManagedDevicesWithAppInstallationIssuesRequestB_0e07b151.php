<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\RetrieveManagedDevicesWithAppInstallationIssues;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: retrieveManagedDevicesWithAppInstallationIssuesRequestBuilderGetRequestConfiguration
*/
class RetrieveManagedDevicesWithAppInstallationIssuesRequestB_0e07b151 extends BaseRequestConfiguration 
{
    /**
     * @var RetrieveManagedDevicesWithAppInstallationIssuesRequestB_df0fe139|null $queryParameters Request query parameters
    */
    public ?RetrieveManagedDevicesWithAppInstallationIssuesRequestB_df0fe139 $queryParameters = null;
    
    /**
     * Instantiates a new RetrieveManagedDevicesWithAppInstallationIssuesRequestB_0e07b151 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RetrieveManagedDevicesWithAppInstallationIssuesRequestB_df0fe139|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RetrieveManagedDevicesWithAppInstallationIssuesRequestB_df0fe139 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RetrieveManagedDevicesWithAppInstallationIssuesRequestB_df0fe139.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return RetrieveManagedDevicesWithAppInstallationIssuesRequestB_df0fe139
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): RetrieveManagedDevicesWithAppInstallationIssuesRequestB_df0fe139 {
        return new RetrieveManagedDevicesWithAppInstallationIssuesRequestB_df0fe139($count, $filter, $search, $skip, $top);
    }

}
