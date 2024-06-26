<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\MobileAppIntentAndStates;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\MobileAppIntentAndState;
use Microsoft\Graph\Beta\Generated\Models\MobileAppIntentAndStateCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Users\Item\MobileAppIntentAndStates\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\MobileAppIntentAndStates\Item\MobileAppIntentAndStateItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mobileAppIntentAndStates property of the microsoft.graph.user entity.
*/
class MobileAppIntentAndStatesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mobileAppIntentAndStates property of the microsoft.graph.user entity.
     * @param string $mobileAppIntentAndStateId The unique identifier of mobileAppIntentAndState
     * @return MobileAppIntentAndStateItemRequestBuilder
    */
    public function byMobileAppIntentAndStateId(string $mobileAppIntentAndStateId): MobileAppIntentAndStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileAppIntentAndState%2Did'] = $mobileAppIntentAndStateId;
        return new MobileAppIntentAndStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MobileAppIntentAndStatesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/mobileAppIntentAndStates{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The list of troubleshooting events for this user.
     * @param MobileAppIntentAndStatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MobileAppIntentAndStateCollectionResponse|null>
     * @throws Exception
    */
    public function get(?MobileAppIntentAndStatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MobileAppIntentAndStateCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to mobileAppIntentAndStates for users
     * @param MobileAppIntentAndState $body The request body
     * @param MobileAppIntentAndStatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MobileAppIntentAndState|null>
     * @throws Exception
    */
    public function post(MobileAppIntentAndState $body, ?MobileAppIntentAndStatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MobileAppIntentAndState::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The list of troubleshooting events for this user.
     * @param MobileAppIntentAndStatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MobileAppIntentAndStatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to mobileAppIntentAndStates for users
     * @param MobileAppIntentAndState $body The request body
     * @param MobileAppIntentAndStatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MobileAppIntentAndState $body, ?MobileAppIntentAndStatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MobileAppIntentAndStatesRequestBuilder
    */
    public function withUrl(string $rawUrl): MobileAppIntentAndStatesRequestBuilder {
        return new MobileAppIntentAndStatesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
