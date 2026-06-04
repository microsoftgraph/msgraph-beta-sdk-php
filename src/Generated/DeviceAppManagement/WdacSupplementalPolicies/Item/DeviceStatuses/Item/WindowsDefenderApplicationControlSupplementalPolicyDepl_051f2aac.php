<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item\DeviceStatuses\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item\DeviceStatuses\Item\Policy\PolicyRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsDefenderApplicationControlSupplementalPolicyDepl_cf10f8b0;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceStatuses property of the microsoft.graph.windowsDefenderApplicationControlSupplementalPolicy entity. Original name: WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilder
*/
class WindowsDefenderApplicationControlSupplementalPolicyDepl_051f2aac extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the policy property of the microsoft.graph.windowsDefenderApplicationControlSupplementalPolicyDeploymentStatus entity.
    */
    public function policy(): PolicyRequestBuilder {
        return new PolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WindowsDefenderApplicationControlSupplementalPolicyDepl_051f2aac and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement/wdacSupplementalPolicies/{windowsDefenderApplicationControlSupplementalPolicy%2Did}/deviceStatuses/{windowsDefenderApplicationControlSupplementalPolicyDeploymentStatus%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property deviceStatuses for deviceAppManagement
     * @param WindowsDefenderApplicationControlSupplementalPolicyDepl_0ee8ec3d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?WindowsDefenderApplicationControlSupplementalPolicyDepl_0ee8ec3d $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The list of device deployment states for this WindowsDefenderApplicationControl supplemental policy.
     * @param WindowsDefenderApplicationControlSupplementalPolicyDepl_1eeb2cdd|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsDefenderApplicationControlSupplementalPolicyDepl_cf10f8b0|null>
     * @throws Exception
    */
    public function get(?WindowsDefenderApplicationControlSupplementalPolicyDepl_1eeb2cdd $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsDefenderApplicationControlSupplementalPolicyDepl_cf10f8b0::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property deviceStatuses in deviceAppManagement
     * @param WindowsDefenderApplicationControlSupplementalPolicyDepl_cf10f8b0 $body The request body
     * @param WindowsDefenderApplicationControlSupplementalPolicyDepl_c4815c07|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsDefenderApplicationControlSupplementalPolicyDepl_cf10f8b0|null>
     * @throws Exception
    */
    public function patch(WindowsDefenderApplicationControlSupplementalPolicyDepl_cf10f8b0 $body, ?WindowsDefenderApplicationControlSupplementalPolicyDepl_c4815c07 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsDefenderApplicationControlSupplementalPolicyDepl_cf10f8b0::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property deviceStatuses for deviceAppManagement
     * @param WindowsDefenderApplicationControlSupplementalPolicyDepl_0ee8ec3d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WindowsDefenderApplicationControlSupplementalPolicyDepl_0ee8ec3d $requestConfiguration = null): RequestInformation {
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
     * The list of device deployment states for this WindowsDefenderApplicationControl supplemental policy.
     * @param WindowsDefenderApplicationControlSupplementalPolicyDepl_1eeb2cdd|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WindowsDefenderApplicationControlSupplementalPolicyDepl_1eeb2cdd $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceAppManagement/wdacSupplementalPolicies/{windowsDefenderApplicationControlSupplementalPolicy%2Did}/deviceStatuses/{windowsDefenderApplicationControlSupplementalPolicyDeploymentStatus%2Did}{?%24expand,%24select}';
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
     * @param WindowsDefenderApplicationControlSupplementalPolicyDepl_cf10f8b0 $body The request body
     * @param WindowsDefenderApplicationControlSupplementalPolicyDepl_c4815c07|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(WindowsDefenderApplicationControlSupplementalPolicyDepl_cf10f8b0 $body, ?WindowsDefenderApplicationControlSupplementalPolicyDepl_c4815c07 $requestConfiguration = null): RequestInformation {
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
     * @return WindowsDefenderApplicationControlSupplementalPolicyDepl_051f2aac
    */
    public function withUrl(string $rawUrl): WindowsDefenderApplicationControlSupplementalPolicyDepl_051f2aac {
        return new WindowsDefenderApplicationControlSupplementalPolicyDepl_051f2aac($rawUrl, $this->requestAdapter);
    }

}
