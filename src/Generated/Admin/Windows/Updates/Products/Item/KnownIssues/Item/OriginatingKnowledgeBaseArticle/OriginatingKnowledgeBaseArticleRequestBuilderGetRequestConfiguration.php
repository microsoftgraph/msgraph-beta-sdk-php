<?php

namespace Microsoft\\Graph\\Beta\\Generated\Admin\Windows\Updates\Products\Item\KnownIssues\Item\OriginatingKnowledgeBaseArticle;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OriginatingKnowledgeBaseArticleRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OriginatingKnowledgeBaseArticleRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OriginatingKnowledgeBaseArticleRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OriginatingKnowledgeBaseArticleRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OriginatingKnowledgeBaseArticleRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OriginatingKnowledgeBaseArticleRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OriginatingKnowledgeBaseArticleRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OriginatingKnowledgeBaseArticleRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OriginatingKnowledgeBaseArticleRequestBuilderGetQueryParameters {
        return new OriginatingKnowledgeBaseArticleRequestBuilderGetQueryParameters($expand, $select);
    }

}
