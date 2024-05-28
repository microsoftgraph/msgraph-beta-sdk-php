<?php

namespace Microsoft\Graph\Beta\Generated\Storage\FileStorage\Containers\Item\Drive\Items\Item\Workbook\Worksheets\Item\Tasks\Item\Comment;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CommentRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CommentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CommentRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CommentRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CommentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CommentRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CommentRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CommentRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CommentRequestBuilderGetQueryParameters {
        return new CommentRequestBuilderGetQueryParameters($expand, $select);
    }

}
