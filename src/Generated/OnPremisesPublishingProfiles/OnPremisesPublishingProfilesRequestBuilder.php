<?php

namespace Microsoft\\Graph\\Beta\\Generated\OnPremisesPublishingProfiles;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Models\OnPremisesPublishingProfile;
use Microsoft\\Graph\\Beta\\Generated\Models\OnPremisesPublishingProfileCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\OnPremisesPublishingProfiles\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\OnPremisesPublishingProfiles\Item\OnPremisesPublishingProfileItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collection of onPremisesPublishingProfile entities.
*/
class OnPremisesPublishingProfilesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of onPremisesPublishingProfile entities.
     * @param string $onPremisesPublishingProfileId The unique identifier of onPremisesPublishingProfile
     * @return OnPremisesPublishingProfileItemRequestBuilder
    */
    public function byOnPremisesPublishingProfileId(string $onPremisesPublishingProfileId): OnPremisesPublishingProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onPremisesPublishingProfile%2Did'] = $onPremisesPublishingProfileId;
        return new OnPremisesPublishingProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new OnPremisesPublishingProfilesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/onPremisesPublishingProfiles{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get entities from onPremisesPublishingProfiles
     * @param OnPremisesPublishingProfilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OnPremisesPublishingProfileCollectionResponse|null>
     * @throws Exception
    */
    public function get(?OnPremisesPublishingProfilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OnPremisesPublishingProfileCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Add new entity to onPremisesPublishingProfiles
     * @param OnPremisesPublishingProfile $body The request body
     * @param OnPremisesPublishingProfilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OnPremisesPublishingProfile|null>
     * @throws Exception
    */
    public function post(OnPremisesPublishingProfile $body, ?OnPremisesPublishingProfilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OnPremisesPublishingProfile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get entities from onPremisesPublishingProfiles
     * @param OnPremisesPublishingProfilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OnPremisesPublishingProfilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Add new entity to onPremisesPublishingProfiles
     * @param OnPremisesPublishingProfile $body The request body
     * @param OnPremisesPublishingProfilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(OnPremisesPublishingProfile $body, ?OnPremisesPublishingProfilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return OnPremisesPublishingProfilesRequestBuilder
    */
    public function withUrl(string $rawUrl): OnPremisesPublishingProfilesRequestBuilder {
        return new OnPremisesPublishingProfilesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
