<?php

namespace Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item\ProfileStatus;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ProfileStatusRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ProfileStatusRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ProfileStatusRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new profileStatusRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ProfileStatusRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ProfileStatusRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new profileStatusRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ProfileStatusRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ProfileStatusRequestBuilderGetQueryParameters {
        return new ProfileStatusRequestBuilderGetQueryParameters($expand, $select);
    }

}
