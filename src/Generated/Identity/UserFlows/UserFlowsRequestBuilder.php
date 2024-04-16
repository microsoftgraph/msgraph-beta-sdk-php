<?php

namespace Microsoft\Graph\Beta\Generated\Identity\UserFlows;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Identity\UserFlows\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Identity\UserFlows\Item\IdentityUserFlowItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\IdentityUserFlow;
use Microsoft\Graph\Beta\Generated\Models\IdentityUserFlowCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userFlows property of the microsoft.graph.identityContainer entity.
*/
class UserFlowsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userFlows property of the microsoft.graph.identityContainer entity.
     * @param string $identityUserFlowId The unique identifier of identityUserFlow
     * @return IdentityUserFlowItemRequestBuilder
    */
    public function byIdentityUserFlowId(string $identityUserFlowId): IdentityUserFlowItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityUserFlow%2Did'] = $identityUserFlowId;
        return new IdentityUserFlowItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserFlowsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/userFlows{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of userflows.
     * @param UserFlowsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityUserFlowCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identityuserflow-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?UserFlowsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityUserFlowCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new userFlow object.
     * @param IdentityUserFlow $body The request body
     * @param UserFlowsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityUserFlow|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identityuserflow-post-userflows?view=graph-rest-1.0 Find more info here
    */
    public function post(IdentityUserFlow $body, ?UserFlowsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityUserFlow::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of userflows.
     * @param UserFlowsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserFlowsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new userFlow object.
     * @param IdentityUserFlow $body The request body
     * @param UserFlowsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(IdentityUserFlow $body, ?UserFlowsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UserFlowsRequestBuilder
    */
    public function withUrl(string $rawUrl): UserFlowsRequestBuilder {
        return new UserFlowsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
