<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\MicrosoftTunnelConfigurations\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\MicrosoftTunnelConfiguration;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the microsoftTunnelConfigurations property of the microsoft.graph.deviceManagement entity.
*/
class MicrosoftTunnelConfigurationItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftTunnelConfigurationItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/microsoftTunnelConfigurations/{microsoftTunnelConfiguration%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property microsoftTunnelConfigurations for deviceManagement
     * @param MicrosoftTunnelConfigurationItemRequestBuilderDeleteReq_b0e2f8f9|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?MicrosoftTunnelConfigurationItemRequestBuilderDeleteReq_b0e2f8f9 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Collection of MicrosoftTunnelConfiguration settings associated with account.
     * @param MicrosoftTunnelConfigurationItemRequestBuilderGetReques_f27c54e0|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MicrosoftTunnelConfiguration|null>
     * @throws Exception
    */
    public function get(?MicrosoftTunnelConfigurationItemRequestBuilderGetReques_f27c54e0 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MicrosoftTunnelConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property microsoftTunnelConfigurations in deviceManagement
     * @param MicrosoftTunnelConfiguration $body The request body
     * @param MicrosoftTunnelConfigurationItemRequestBuilderPatchRequ_a6a4f360|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MicrosoftTunnelConfiguration|null>
     * @throws Exception
    */
    public function patch(MicrosoftTunnelConfiguration $body, ?MicrosoftTunnelConfigurationItemRequestBuilderPatchRequ_a6a4f360 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MicrosoftTunnelConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property microsoftTunnelConfigurations for deviceManagement
     * @param MicrosoftTunnelConfigurationItemRequestBuilderDeleteReq_b0e2f8f9|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?MicrosoftTunnelConfigurationItemRequestBuilderDeleteReq_b0e2f8f9 $requestConfiguration = null): RequestInformation {
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
     * Collection of MicrosoftTunnelConfiguration settings associated with account.
     * @param MicrosoftTunnelConfigurationItemRequestBuilderGetReques_f27c54e0|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftTunnelConfigurationItemRequestBuilderGetReques_f27c54e0 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property microsoftTunnelConfigurations in deviceManagement
     * @param MicrosoftTunnelConfiguration $body The request body
     * @param MicrosoftTunnelConfigurationItemRequestBuilderPatchRequ_a6a4f360|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(MicrosoftTunnelConfiguration $body, ?MicrosoftTunnelConfigurationItemRequestBuilderPatchRequ_a6a4f360 $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftTunnelConfigurationItemRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftTunnelConfigurationItemRequestBuilder {
        return new MicrosoftTunnelConfigurationItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
