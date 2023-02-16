<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\Team\PrimaryChannel\FilesFolder;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FilesFolderRequestBuilderGetRequestConfiguration 
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
     * @var FilesFolderRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FilesFolderRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new filesFolderRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FilesFolderRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): FilesFolderRequestBuilderGetQueryParameters {
        return new FilesFolderRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new filesFolderRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param FilesFolderRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FilesFolderRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
