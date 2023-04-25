<?php

namespace Microsoft\Graph\Beta\Generated\Organization\Item\Settings\MicrosoftApplicationDataAccess;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MicrosoftApplicationDataAccessRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftApplicationDataAccessRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MicrosoftApplicationDataAccessRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new microsoftApplicationDataAccessRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftApplicationDataAccessRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftApplicationDataAccessRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new microsoftApplicationDataAccessRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MicrosoftApplicationDataAccessRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MicrosoftApplicationDataAccessRequestBuilderGetQueryParameters {
        return new MicrosoftApplicationDataAccessRequestBuilderGetQueryParameters($expand, $select);
    }

}
