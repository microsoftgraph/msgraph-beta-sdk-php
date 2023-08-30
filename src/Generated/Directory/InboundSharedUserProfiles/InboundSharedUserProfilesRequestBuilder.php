<?php

namespace Microsoft\Graph\Beta\Generated\Directory\InboundSharedUserProfiles;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Directory\InboundSharedUserProfiles\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\InboundSharedUserProfiles\Item\InboundSharedUserProfileUserItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\InboundSharedUserProfile;
use Microsoft\Graph\Beta\Generated\Models\InboundSharedUserProfileCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the inboundSharedUserProfiles property of the microsoft.graph.directory entity.
*/
class InboundSharedUserProfilesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the inboundSharedUserProfiles property of the microsoft.graph.directory entity.
     * @param string $inboundSharedUserProfileUserId The unique identifier of inboundSharedUserProfile
     * @return InboundSharedUserProfileUserItemRequestBuilder
    */
    public function byInboundSharedUserProfileUserId(string $inboundSharedUserProfileUserId): InboundSharedUserProfileUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['inboundSharedUserProfile%2DuserId'] = $inboundSharedUserProfileUserId;
        return new InboundSharedUserProfileUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new InboundSharedUserProfilesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/inboundSharedUserProfiles{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the properties of all inboundSharedUserProfiles.
     * @param InboundSharedUserProfilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/directory-list-inboundshareduserprofiles?view=graph-rest-1.0 Find more info here
    */
    public function get(?InboundSharedUserProfilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [InboundSharedUserProfileCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create new navigation property to inboundSharedUserProfiles for directory
     * @param InboundSharedUserProfile $body The request body
     * @param InboundSharedUserProfilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function post(InboundSharedUserProfile $body, ?InboundSharedUserProfilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [InboundSharedUserProfile::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Retrieve the properties of all inboundSharedUserProfiles.
     * @param InboundSharedUserProfilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?InboundSharedUserProfilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Create new navigation property to inboundSharedUserProfiles for directory
     * @param InboundSharedUserProfile $body The request body
     * @param InboundSharedUserProfilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(InboundSharedUserProfile $body, ?InboundSharedUserProfilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return InboundSharedUserProfilesRequestBuilder
    */
    public function withUrl(string $rawUrl): InboundSharedUserProfilesRequestBuilder {
        return new InboundSharedUserProfilesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
