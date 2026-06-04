<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthRuntimeDetails;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsBatteryHealthRuntimeDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsBatteryHealthRuntimeDetails property of the microsoft.graph.deviceManagement entity.
*/
class UserExperienceAnalyticsBatteryHealthRuntimeDetailsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthRuntimeDetailsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsBatteryHealthRuntimeDetails');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property userExperienceAnalyticsBatteryHealthRuntimeDetails for deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_8e4b334e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_8e4b334e $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * User Experience Analytics Battery Health Runtime Details
     * @param UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_e6265bae|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsBatteryHealthRuntimeDetails|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_e6265bae $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsBatteryHealthRuntimeDetails::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property userExperienceAnalyticsBatteryHealthRuntimeDetails in deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthRuntimeDetails $body The request body
     * @param UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_873d27c5|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsBatteryHealthRuntimeDetails|null>
     * @throws Exception
    */
    public function patch(UserExperienceAnalyticsBatteryHealthRuntimeDetails $body, ?UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_873d27c5 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsBatteryHealthRuntimeDetails::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property userExperienceAnalyticsBatteryHealthRuntimeDetails for deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_8e4b334e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_8e4b334e $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * User Experience Analytics Battery Health Runtime Details
     * @param UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_e6265bae|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_e6265bae $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/userExperienceAnalyticsBatteryHealthRuntimeDetails{?%24expand,%24select}';
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
     * Update the navigation property userExperienceAnalyticsBatteryHealthRuntimeDetails in deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthRuntimeDetails $body The request body
     * @param UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_873d27c5|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(UserExperienceAnalyticsBatteryHealthRuntimeDetails $body, ?UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_873d27c5 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return UserExperienceAnalyticsBatteryHealthRuntimeDetailsRequestBuilder
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsBatteryHealthRuntimeDetailsRequestBuilder {
        return new UserExperienceAnalyticsBatteryHealthRuntimeDetailsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
