<?php

namespace Microsoft\\Graph\\Beta\\Generated\Admin\Windows\Updates\Products\Item\KnownIssues\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Admin\Windows\Updates\Products\Item\KnownIssues\Item\OriginatingKnowledgeBaseArticle\OriginatingKnowledgeBaseArticleRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Admin\Windows\Updates\Products\Item\KnownIssues\Item\ResolvingKnowledgeBaseArticle\ResolvingKnowledgeBaseArticleRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Models\WindowsUpdates\KnownIssue;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the knownIssues property of the microsoft.graph.windowsUpdates.product entity.
*/
class KnownIssueItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the originatingKnowledgeBaseArticle property of the microsoft.graph.windowsUpdates.knownIssue entity.
    */
    public function originatingKnowledgeBaseArticle(): OriginatingKnowledgeBaseArticleRequestBuilder {
        return new OriginatingKnowledgeBaseArticleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the resolvingKnowledgeBaseArticle property of the microsoft.graph.windowsUpdates.knownIssue entity.
    */
    public function resolvingKnowledgeBaseArticle(): ResolvingKnowledgeBaseArticleRequestBuilder {
        return new ResolvingKnowledgeBaseArticleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new KnownIssueItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/windows/updates/products/{product%2Did}/knownIssues/{knownIssue%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property knownIssues for admin
     * @param KnownIssueItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?KnownIssueItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Represents a known issue related to a Windows product.
     * @param KnownIssueItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<KnownIssue|null>
     * @throws Exception
    */
    public function get(?KnownIssueItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [KnownIssue::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property knownIssues in admin
     * @param KnownIssue $body The request body
     * @param KnownIssueItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<KnownIssue|null>
     * @throws Exception
    */
    public function patch(KnownIssue $body, ?KnownIssueItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [KnownIssue::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property knownIssues for admin
     * @param KnownIssueItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?KnownIssueItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Represents a known issue related to a Windows product.
     * @param KnownIssueItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?KnownIssueItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Update the navigation property knownIssues in admin
     * @param KnownIssue $body The request body
     * @param KnownIssueItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(KnownIssue $body, ?KnownIssueItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return KnownIssueItemRequestBuilder
    */
    public function withUrl(string $rawUrl): KnownIssueItemRequestBuilder {
        return new KnownIssueItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
