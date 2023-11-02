<?php

namespace Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item\EducationSynchronizationProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\EducationSynchronizationProfile;
use Microsoft\Graph\Beta\Generated\Models\EducationSynchronizationProfileCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the synchronizationProfiles property of the microsoft.graph.educationRoot entity.
*/
class SynchronizationProfilesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the synchronizationProfiles property of the microsoft.graph.educationRoot entity.
     * @param string $educationSynchronizationProfileId The unique identifier of educationSynchronizationProfile
     * @return EducationSynchronizationProfileItemRequestBuilder
    */
    public function byEducationSynchronizationProfileId(string $educationSynchronizationProfileId): EducationSynchronizationProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationSynchronizationProfile%2Did'] = $educationSynchronizationProfileId;
        return new EducationSynchronizationProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SynchronizationProfilesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/synchronizationProfiles{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the collection of school data synchronization profiles in the tenant. This API is available in the following national cloud deployments.
     * @param SynchronizationProfilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationSynchronizationProfileCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/educationsynchronizationprofile-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?SynchronizationProfilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationSynchronizationProfileCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to synchronizationProfiles for education
     * @param EducationSynchronizationProfile $body The request body
     * @param SynchronizationProfilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationSynchronizationProfile|null>
     * @throws Exception
    */
    public function post(EducationSynchronizationProfile $body, ?SynchronizationProfilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationSynchronizationProfile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the collection of school data synchronization profiles in the tenant. This API is available in the following national cloud deployments.
     * @param SynchronizationProfilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SynchronizationProfilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Create new navigation property to synchronizationProfiles for education
     * @param EducationSynchronizationProfile $body The request body
     * @param SynchronizationProfilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EducationSynchronizationProfile $body, ?SynchronizationProfilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return SynchronizationProfilesRequestBuilder
    */
    public function withUrl(string $rawUrl): SynchronizationProfilesRequestBuilder {
        return new SynchronizationProfilesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
