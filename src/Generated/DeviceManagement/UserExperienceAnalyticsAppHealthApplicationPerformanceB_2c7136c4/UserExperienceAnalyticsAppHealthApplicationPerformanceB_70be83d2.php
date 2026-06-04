<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceB_2c7136c4;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceB_2c7136c4\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceB_2c7136c4\Item\UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_874a4be5;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_c8b0b104;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion property of the microsoft.graph.deviceManagement entity. Original name: UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionRequestBuilder
*/
class UserExperienceAnalyticsAppHealthApplicationPerformanceB_70be83d2 extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion property of the microsoft.graph.deviceManagement entity.
     * @param string $userExperienceAnalyticsAppHealthAppPerformanceByAppVersionId The unique identifier of userExperienceAnalyticsAppHealthAppPerformanceByAppVersion
     * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_874a4be5
    */
    public function byUserExperienceAnalyticsAppHealthAppPerformanceByAppVersionId(string $userExperienceAnalyticsAppHealthAppPerformanceByAppVersionId): UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_874a4be5 {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsAppHealthAppPerformanceByAppVersion%2Did'] = $userExperienceAnalyticsAppHealthAppPerformanceByAppVersionId;
        return new UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_874a4be5($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthApplicationPerformanceB_70be83d2 and sets the default values.
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
     * User experience analytics appHealth Application Performance by App Version
     * @param UserExperienceAnalyticsAppHealthApplicationPerformanceB_393d295e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_c8b0b104|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsAppHealthApplicationPerformanceB_393d295e $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_c8b0b104::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion for deviceManagement
     * @param UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion $body The request body
     * @param UserExperienceAnalyticsAppHealthApplicationPerformanceB_4f0568a8|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion|null>
     * @throws Exception
    */
    public function post(UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion $body, ?UserExperienceAnalyticsAppHealthApplicationPerformanceB_4f0568a8 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * User experience analytics appHealth Application Performance by App Version
     * @param UserExperienceAnalyticsAppHealthApplicationPerformanceB_393d295e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsAppHealthApplicationPerformanceB_393d295e $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}';
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
     * Create new navigation property to userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion for deviceManagement
     * @param UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion $body The request body
     * @param UserExperienceAnalyticsAppHealthApplicationPerformanceB_4f0568a8|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion $body, ?UserExperienceAnalyticsAppHealthApplicationPerformanceB_4f0568a8 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion';
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
     * @return UserExperienceAnalyticsAppHealthApplicationPerformanceB_70be83d2
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsAppHealthApplicationPerformanceB_70be83d2 {
        return new UserExperienceAnalyticsAppHealthApplicationPerformanceB_70be83d2($rawUrl, $this->requestAdapter);
    }

}
