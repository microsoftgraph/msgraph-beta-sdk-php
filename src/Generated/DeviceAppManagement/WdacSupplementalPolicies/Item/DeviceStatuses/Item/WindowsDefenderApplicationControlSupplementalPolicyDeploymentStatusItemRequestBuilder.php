<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item\DeviceStatuses\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item\DeviceStatuses\Item\Policy\PolicyRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceStatuses property of the microsoft.graph.windowsDefenderApplicationControlSupplementalPolicy entity.
*/
class WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the policy property of the microsoft.graph.windowsDefenderApplicationControlSupplementalPolicyDeploymentStatus entity.
    */
    public function policy(): PolicyRequestBuilder {
        return new PolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement/wdacSupplementalPolicies/{windowsDefenderApplicationControlSupplementalPolicy%2Did}/deviceStatuses/{windowsDefenderApplicationControlSupplementalPolicyDeploymentStatus%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property deviceStatuses for deviceAppManagement
     * @param WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The list of device deployment states for this WindowsDefenderApplicationControl supplemental policy.
     * @param WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus|null>
     * @throws Exception
    */
    public function get(?WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property deviceStatuses in deviceAppManagement
     * @param WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus $body The request body
     * @param WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus|null>
     * @throws Exception
    */
    public function patch(WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus $body, ?WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property deviceStatuses for deviceAppManagement
     * @param WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * The list of device deployment states for this WindowsDefenderApplicationControl supplemental policy.
     * @param WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property deviceStatuses in deviceAppManagement
     * @param WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus $body The request body
     * @param WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus $body, ?WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilder {
        return new WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
