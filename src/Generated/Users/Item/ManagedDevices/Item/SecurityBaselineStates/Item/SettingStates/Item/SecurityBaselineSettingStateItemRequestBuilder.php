<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\Item\SecurityBaselineStates\Item\SettingStates\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\SecurityBaselineSettingState;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the settingStates property of the microsoft.graph.securityBaselineState entity.
*/
class SecurityBaselineSettingStateItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SecurityBaselineSettingStateItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/managedDevices/{managedDevice%2Did}/securityBaselineStates/{securityBaselineState%2Did}/settingStates/{securityBaselineSettingState%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property settingStates for users
     * @param SecurityBaselineSettingStateItemRequestBuilderDeleteReq_d94f062c|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?SecurityBaselineSettingStateItemRequestBuilderDeleteReq_d94f062c $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The security baseline state for different settings for a device
     * @param SecurityBaselineSettingStateItemRequestBuilderGetReques_2fd40eca|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SecurityBaselineSettingState|null>
     * @throws Exception
    */
    public function get(?SecurityBaselineSettingStateItemRequestBuilderGetReques_2fd40eca $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SecurityBaselineSettingState::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property settingStates in users
     * @param SecurityBaselineSettingState $body The request body
     * @param SecurityBaselineSettingStateItemRequestBuilderPatchRequ_fad69b8e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SecurityBaselineSettingState|null>
     * @throws Exception
    */
    public function patch(SecurityBaselineSettingState $body, ?SecurityBaselineSettingStateItemRequestBuilderPatchRequ_fad69b8e $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SecurityBaselineSettingState::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property settingStates for users
     * @param SecurityBaselineSettingStateItemRequestBuilderDeleteReq_d94f062c|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?SecurityBaselineSettingStateItemRequestBuilderDeleteReq_d94f062c $requestConfiguration = null): RequestInformation {
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
     * The security baseline state for different settings for a device
     * @param SecurityBaselineSettingStateItemRequestBuilderGetReques_2fd40eca|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SecurityBaselineSettingStateItemRequestBuilderGetReques_2fd40eca $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property settingStates in users
     * @param SecurityBaselineSettingState $body The request body
     * @param SecurityBaselineSettingStateItemRequestBuilderPatchRequ_fad69b8e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(SecurityBaselineSettingState $body, ?SecurityBaselineSettingStateItemRequestBuilderPatchRequ_fad69b8e $requestConfiguration = null): RequestInformation {
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
     * @return SecurityBaselineSettingStateItemRequestBuilder
    */
    public function withUrl(string $rawUrl): SecurityBaselineSettingStateItemRequestBuilder {
        return new SecurityBaselineSettingStateItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
