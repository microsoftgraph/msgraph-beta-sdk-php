<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory\Item\UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistor_5feb7d32;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistor_22e8f99a;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory property of the microsoft.graph.deviceManagement entity. Original name: UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistoryRequestBuilder
*/
class UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistor_0792f10d extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory property of the microsoft.graph.deviceManagement entity.
     * @param string $userExperienceAnalyticsBatteryHealthDeviceRuntimeHistoryId The unique identifier of userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory
     * @return UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistor_5feb7d32
    */
    public function byUserExperienceAnalyticsBatteryHealthDeviceRuntimeHistoryId(string $userExperienceAnalyticsBatteryHealthDeviceRuntimeHistoryId): UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistor_5feb7d32 {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory%2Did'] = $userExperienceAnalyticsBatteryHealthDeviceRuntimeHistoryId;
        return new UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistor_5feb7d32($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistor_0792f10d and sets the default values.
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
     * User Experience Analytics Battery Health Device Runtime History
     * @param UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistor_62cacfe0|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistor_22e8f99a|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistor_62cacfe0 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistor_22e8f99a::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory for deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory $body The request body
     * @param UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistor_8e288481|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory|null>
     * @throws Exception
    */
    public function post(UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory $body, ?UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistor_8e288481 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * User Experience Analytics Battery Health Device Runtime History
     * @param UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistor_62cacfe0|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistor_62cacfe0 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}';
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
     * Create new navigation property to userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory for deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory $body The request body
     * @param UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistor_8e288481|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory $body, ?UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistor_8e288481 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory';
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
     * @return UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistor_0792f10d
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistor_0792f10d {
        return new UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistor_0792f10d($rawUrl, $this->requestAdapter);
    }

}
