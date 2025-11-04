<?php

namespace Microsoft\\Graph\\Beta\\Generated\Directory\InboundSharedUserProfiles;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Directory\InboundSharedUserProfiles\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Directory\InboundSharedUserProfiles\Item\InboundSharedUserProfileUserItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\InboundSharedUserProfile;
use Microsoft\\Graph\\Beta\\Generated\Models\InboundSharedUserProfileCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
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
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/inboundSharedUserProfiles{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the properties of all inboundSharedUserProfiles.
     * @param InboundSharedUserProfilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<InboundSharedUserProfileCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/directory-list-inboundshareduserprofiles?view=graph-rest-beta Find more info here
    */
    public function get(?InboundSharedUserProfilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [InboundSharedUserProfileCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to inboundSharedUserProfiles for directory
     * @param InboundSharedUserProfile $body The request body
     * @param InboundSharedUserProfilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<InboundSharedUserProfile|null>
     * @throws Exception
    */
    public function post(InboundSharedUserProfile $body, ?InboundSharedUserProfilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [InboundSharedUserProfile::class, 'createFromDiscriminatorValue'], $errorMappings);
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
     * @return InboundSharedUserProfilesRequestBuilder
    */
    public function withUrl(string $rawUrl): InboundSharedUserProfilesRequestBuilder {
        return new InboundSharedUserProfilesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
