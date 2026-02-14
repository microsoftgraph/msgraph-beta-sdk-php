<?php

namespace Microsoft\Graph\Beta\Generated\Admin\CloudLicensing\AssignmentErrors\Item\UsageRight;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UsageRightRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UsageRightRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UsageRightRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UsageRightRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UsageRightRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UsageRightRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UsageRightRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UsageRightRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UsageRightRequestBuilderGetQueryParameters {
        return new UsageRightRequestBuilderGetQueryParameters($expand, $select);
    }

}
