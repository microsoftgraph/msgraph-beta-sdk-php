<?php

namespace Microsoft\Graph\Beta\Generated\Directory\PendingExternalUserProfiles;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Directory\PendingExternalUserProfiles\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\PendingExternalUserProfiles\Item\PendingExternalUserProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\PendingExternalUserProfile;
use Microsoft\Graph\Beta\Generated\Models\PendingExternalUserProfileCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the pendingExternalUserProfiles property of the microsoft.graph.directory entity.
*/
class PendingExternalUserProfilesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the pendingExternalUserProfiles property of the microsoft.graph.directory entity.
     * @param string $pendingExternalUserProfileId The unique identifier of pendingExternalUserProfile
     * @return PendingExternalUserProfileItemRequestBuilder
    */
    public function byPendingExternalUserProfileId(string $pendingExternalUserProfileId): PendingExternalUserProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['pendingExternalUserProfile%2Did'] = $pendingExternalUserProfileId;
        return new PendingExternalUserProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PendingExternalUserProfilesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/pendingExternalUserProfiles{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the properties of all pendingExternalUserProfiles.
     * @param PendingExternalUserProfilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PendingExternalUserProfileCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/directory-list-pendingexternaluserprofile?view=graph-rest-1.0 Find more info here
    */
    public function get(?PendingExternalUserProfilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PendingExternalUserProfileCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new pendingExternalUserProfile object.
     * @param PendingExternalUserProfile $body The request body
     * @param PendingExternalUserProfilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PendingExternalUserProfile|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/directory-post-pendingexternaluserprofile?view=graph-rest-1.0 Find more info here
    */
    public function post(PendingExternalUserProfile $body, ?PendingExternalUserProfilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PendingExternalUserProfile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the properties of all pendingExternalUserProfiles.
     * @param PendingExternalUserProfilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PendingExternalUserProfilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new pendingExternalUserProfile object.
     * @param PendingExternalUserProfile $body The request body
     * @param PendingExternalUserProfilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PendingExternalUserProfile $body, ?PendingExternalUserProfilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/directory/pendingExternalUserProfiles';
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
     * @return PendingExternalUserProfilesRequestBuilder
    */
    public function withUrl(string $rawUrl): PendingExternalUserProfilesRequestBuilder {
        return new PendingExternalUserProfilesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
