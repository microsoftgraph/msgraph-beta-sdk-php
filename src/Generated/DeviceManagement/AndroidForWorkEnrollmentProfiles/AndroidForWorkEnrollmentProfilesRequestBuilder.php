<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidForWorkEnrollmentProfiles;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidForWorkEnrollmentProfiles\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidForWorkEnrollmentProfiles\Item\AndroidForWorkEnrollmentProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\AndroidForWorkEnrollmentProfile;
use Microsoft\Graph\Beta\Generated\Models\AndroidForWorkEnrollmentProfileCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the androidForWorkEnrollmentProfiles property of the microsoft.graph.deviceManagement entity.
*/
class AndroidForWorkEnrollmentProfilesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the androidForWorkEnrollmentProfiles property of the microsoft.graph.deviceManagement entity.
     * @param string $androidForWorkEnrollmentProfileId The unique identifier of androidForWorkEnrollmentProfile
     * @return AndroidForWorkEnrollmentProfileItemRequestBuilder
    */
    public function byAndroidForWorkEnrollmentProfileId(string $androidForWorkEnrollmentProfileId): AndroidForWorkEnrollmentProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['androidForWorkEnrollmentProfile%2Did'] = $androidForWorkEnrollmentProfileId;
        return new AndroidForWorkEnrollmentProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AndroidForWorkEnrollmentProfilesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Android for Work enrollment profile entities.
     * @param AndroidForWorkEnrollmentProfilesRequestBuilderGetReques_8b920548|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AndroidForWorkEnrollmentProfileCollectionResponse|null>
     * @throws Exception
    */
    public function get(?AndroidForWorkEnrollmentProfilesRequestBuilderGetReques_8b920548 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AndroidForWorkEnrollmentProfileCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to androidForWorkEnrollmentProfiles for deviceManagement
     * @param AndroidForWorkEnrollmentProfile $body The request body
     * @param AndroidForWorkEnrollmentProfilesRequestBuilderPostReque_f9aa6344|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AndroidForWorkEnrollmentProfile|null>
     * @throws Exception
    */
    public function post(AndroidForWorkEnrollmentProfile $body, ?AndroidForWorkEnrollmentProfilesRequestBuilderPostReque_f9aa6344 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AndroidForWorkEnrollmentProfile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Android for Work enrollment profile entities.
     * @param AndroidForWorkEnrollmentProfilesRequestBuilderGetReques_8b920548|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AndroidForWorkEnrollmentProfilesRequestBuilderGetReques_8b920548 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/androidForWorkEnrollmentProfiles{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}';
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
     * Create new navigation property to androidForWorkEnrollmentProfiles for deviceManagement
     * @param AndroidForWorkEnrollmentProfile $body The request body
     * @param AndroidForWorkEnrollmentProfilesRequestBuilderPostReque_f9aa6344|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AndroidForWorkEnrollmentProfile $body, ?AndroidForWorkEnrollmentProfilesRequestBuilderPostReque_f9aa6344 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/androidForWorkEnrollmentProfiles';
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
     * @return AndroidForWorkEnrollmentProfilesRequestBuilder
    */
    public function withUrl(string $rawUrl): AndroidForWorkEnrollmentProfilesRequestBuilder {
        return new AndroidForWorkEnrollmentProfilesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
