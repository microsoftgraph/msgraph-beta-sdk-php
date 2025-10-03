<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\AppleUserInitiatedEnrollmentProfiles;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\AppleUserInitiatedEnrollmentProfiles\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\AppleUserInitiatedEnrollmentProfiles\Item\AppleUserInitiatedEnrollmentProfileItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\AppleUserInitiatedEnrollmentProfile;
use Microsoft\\Graph\\Beta\\Generated\Models\AppleUserInitiatedEnrollmentProfileCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the appleUserInitiatedEnrollmentProfiles property of the microsoft.graph.deviceManagement entity.
*/
class AppleUserInitiatedEnrollmentProfilesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the appleUserInitiatedEnrollmentProfiles property of the microsoft.graph.deviceManagement entity.
     * @param string $appleUserInitiatedEnrollmentProfileId The unique identifier of appleUserInitiatedEnrollmentProfile
     * @return AppleUserInitiatedEnrollmentProfileItemRequestBuilder
    */
    public function byAppleUserInitiatedEnrollmentProfileId(string $appleUserInitiatedEnrollmentProfileId): AppleUserInitiatedEnrollmentProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appleUserInitiatedEnrollmentProfile%2Did'] = $appleUserInitiatedEnrollmentProfileId;
        return new AppleUserInitiatedEnrollmentProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AppleUserInitiatedEnrollmentProfilesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/appleUserInitiatedEnrollmentProfiles{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Apple user initiated enrollment profiles
     * @param AppleUserInitiatedEnrollmentProfilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AppleUserInitiatedEnrollmentProfileCollectionResponse|null>
     * @throws Exception
    */
    public function get(?AppleUserInitiatedEnrollmentProfilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AppleUserInitiatedEnrollmentProfileCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to appleUserInitiatedEnrollmentProfiles for deviceManagement
     * @param AppleUserInitiatedEnrollmentProfile $body The request body
     * @param AppleUserInitiatedEnrollmentProfilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AppleUserInitiatedEnrollmentProfile|null>
     * @throws Exception
    */
    public function post(AppleUserInitiatedEnrollmentProfile $body, ?AppleUserInitiatedEnrollmentProfilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AppleUserInitiatedEnrollmentProfile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Apple user initiated enrollment profiles
     * @param AppleUserInitiatedEnrollmentProfilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AppleUserInitiatedEnrollmentProfilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to appleUserInitiatedEnrollmentProfiles for deviceManagement
     * @param AppleUserInitiatedEnrollmentProfile $body The request body
     * @param AppleUserInitiatedEnrollmentProfilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AppleUserInitiatedEnrollmentProfile $body, ?AppleUserInitiatedEnrollmentProfilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AppleUserInitiatedEnrollmentProfilesRequestBuilder
    */
    public function withUrl(string $rawUrl): AppleUserInitiatedEnrollmentProfilesRequestBuilder {
        return new AppleUserInitiatedEnrollmentProfilesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
