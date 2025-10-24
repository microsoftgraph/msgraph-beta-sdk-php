<?php

namespace Microsoft\\Graph\\Beta\\Generated\Admin\Windows\Updates\Products\Item\Revisions\Item\KnowledgeBaseArticle;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class KnowledgeBaseArticleRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var KnowledgeBaseArticleRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?KnowledgeBaseArticleRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new KnowledgeBaseArticleRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param KnowledgeBaseArticleRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?KnowledgeBaseArticleRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new KnowledgeBaseArticleRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return KnowledgeBaseArticleRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): KnowledgeBaseArticleRequestBuilderGetQueryParameters {
        return new KnowledgeBaseArticleRequestBuilderGetQueryParameters($expand, $select);
    }

}
