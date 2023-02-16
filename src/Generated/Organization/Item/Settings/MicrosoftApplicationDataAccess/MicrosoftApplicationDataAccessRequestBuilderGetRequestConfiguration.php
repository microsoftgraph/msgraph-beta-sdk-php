<?php

namespace Microsoft\Graph\Beta\Generated\Organization\Item\Settings\MicrosoftApplicationDataAccess;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MicrosoftApplicationDataAccessRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var MicrosoftApplicationDataAccessRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MicrosoftApplicationDataAccessRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new microsoftApplicationDataAccessRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MicrosoftApplicationDataAccessRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): MicrosoftApplicationDataAccessRequestBuilderGetQueryParameters {
        return new MicrosoftApplicationDataAccessRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new microsoftApplicationDataAccessRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param MicrosoftApplicationDataAccessRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftApplicationDataAccessRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
