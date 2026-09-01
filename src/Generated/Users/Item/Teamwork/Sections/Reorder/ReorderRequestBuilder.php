<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Teamwork\Sections\Reorder;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the reorder method.
*/
class ReorderRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ReorderRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/teamwork/sections/reorder');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Reorder the sections in a user's teamwork. The sectionsOrder collection must contain every section ID returned by List sections, exactly once. If the collection contains the *QuickViews* system section, that section must be first.
     * @param ReorderPostRequestBody $body The request body
     * @param ReorderRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ReorderPostResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/teamworksection-reorder?view=graph-rest-beta Find more info here
    */
    public function post(ReorderPostRequestBody $body, ?ReorderRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ReorderPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Reorder the sections in a user's teamwork. The sectionsOrder collection must contain every section ID returned by List sections, exactly once. If the collection contains the *QuickViews* system section, that section must be first.
     * @param ReorderPostRequestBody $body The request body
     * @param ReorderRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ReorderPostRequestBody $body, ?ReorderRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return ReorderRequestBuilder
    */
    public function withUrl(string $rawUrl): ReorderRequestBuilder {
        return new ReorderRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
