<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\HardwareConfigurations\Item\UserRunStates;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\HardwareConfigurations\Item\UserRunStates\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\HardwareConfigurations\Item\UserRunStates\Item\HardwareConfigurationUserStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\HardwareConfigurationUserState;
use Microsoft\Graph\Beta\Generated\Models\HardwareConfigurationUserStateCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userRunStates property of the microsoft.graph.hardwareConfiguration entity.
*/
class UserRunStatesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userRunStates property of the microsoft.graph.hardwareConfiguration entity.
     * @param string $hardwareConfigurationUserStateId The unique identifier of hardwareConfigurationUserState
     * @return HardwareConfigurationUserStateItemRequestBuilder
    */
    public function byHardwareConfigurationUserStateId(string $hardwareConfigurationUserStateId): HardwareConfigurationUserStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['hardwareConfigurationUserState%2Did'] = $hardwareConfigurationUserStateId;
        return new HardwareConfigurationUserStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserRunStatesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/hardwareConfigurations/{hardwareConfiguration%2Did}/userRunStates{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List of run states for the hardware configuration across all users. Read-Only.
     * @param UserRunStatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<HardwareConfigurationUserStateCollectionResponse|null>
     * @throws Exception
    */
    public function get(?UserRunStatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [HardwareConfigurationUserStateCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userRunStates for deviceManagement
     * @param HardwareConfigurationUserState $body The request body
     * @param UserRunStatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<HardwareConfigurationUserState|null>
     * @throws Exception
    */
    public function post(HardwareConfigurationUserState $body, ?UserRunStatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [HardwareConfigurationUserState::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List of run states for the hardware configuration across all users. Read-Only.
     * @param UserRunStatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserRunStatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to userRunStates for deviceManagement
     * @param HardwareConfigurationUserState $body The request body
     * @param UserRunStatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(HardwareConfigurationUserState $body, ?UserRunStatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UserRunStatesRequestBuilder
    */
    public function withUrl(string $rawUrl): UserRunStatesRequestBuilder {
        return new UserRunStatesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
