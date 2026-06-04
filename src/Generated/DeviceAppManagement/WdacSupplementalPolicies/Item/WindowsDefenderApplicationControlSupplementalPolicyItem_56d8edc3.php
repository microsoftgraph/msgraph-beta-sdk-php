<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item\Assign\AssignRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item\DeploySummary\DeploySummaryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item\DeviceStatuses\DeviceStatusesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsDefenderApplicationControlSupplementalPolicy;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the wdacSupplementalPolicies property of the microsoft.graph.deviceAppManagement entity. Original name: WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilder
*/
class WindowsDefenderApplicationControlSupplementalPolicyItem_56d8edc3 extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the assign method.
    */
    public function assign(): AssignRequestBuilder {
        return new AssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.windowsDefenderApplicationControlSupplementalPolicy entity.
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deploySummary property of the microsoft.graph.windowsDefenderApplicationControlSupplementalPolicy entity.
    */
    public function deploySummary(): DeploySummaryRequestBuilder {
        return new DeploySummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceStatuses property of the microsoft.graph.windowsDefenderApplicationControlSupplementalPolicy entity.
    */
    public function deviceStatuses(): DeviceStatusesRequestBuilder {
        return new DeviceStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WindowsDefenderApplicationControlSupplementalPolicyItem_56d8edc3 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement/wdacSupplementalPolicies/{windowsDefenderApplicationControlSupplementalPolicy%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property wdacSupplementalPolicies for deviceAppManagement
     * @param WindowsDefenderApplicationControlSupplementalPolicyItem_a32703f7|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?WindowsDefenderApplicationControlSupplementalPolicyItem_a32703f7 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The collection of Windows Defender Application Control Supplemental Policies.
     * @param WindowsDefenderApplicationControlSupplementalPolicyItem_8f6e012a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsDefenderApplicationControlSupplementalPolicy|null>
     * @throws Exception
    */
    public function get(?WindowsDefenderApplicationControlSupplementalPolicyItem_8f6e012a $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsDefenderApplicationControlSupplementalPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property wdacSupplementalPolicies in deviceAppManagement
     * @param WindowsDefenderApplicationControlSupplementalPolicy $body The request body
     * @param WindowsDefenderApplicationControlSupplementalPolicyItem_ce0a7832|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsDefenderApplicationControlSupplementalPolicy|null>
     * @throws Exception
    */
    public function patch(WindowsDefenderApplicationControlSupplementalPolicy $body, ?WindowsDefenderApplicationControlSupplementalPolicyItem_ce0a7832 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsDefenderApplicationControlSupplementalPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property wdacSupplementalPolicies for deviceAppManagement
     * @param WindowsDefenderApplicationControlSupplementalPolicyItem_a32703f7|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WindowsDefenderApplicationControlSupplementalPolicyItem_a32703f7 $requestConfiguration = null): RequestInformation {
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
     * The collection of Windows Defender Application Control Supplemental Policies.
     * @param WindowsDefenderApplicationControlSupplementalPolicyItem_8f6e012a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WindowsDefenderApplicationControlSupplementalPolicyItem_8f6e012a $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceAppManagement/wdacSupplementalPolicies/{windowsDefenderApplicationControlSupplementalPolicy%2Did}{?%24expand,%24select}';
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
     * Update the navigation property wdacSupplementalPolicies in deviceAppManagement
     * @param WindowsDefenderApplicationControlSupplementalPolicy $body The request body
     * @param WindowsDefenderApplicationControlSupplementalPolicyItem_ce0a7832|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(WindowsDefenderApplicationControlSupplementalPolicy $body, ?WindowsDefenderApplicationControlSupplementalPolicyItem_ce0a7832 $requestConfiguration = null): RequestInformation {
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
     * @return WindowsDefenderApplicationControlSupplementalPolicyItem_56d8edc3
    */
    public function withUrl(string $rawUrl): WindowsDefenderApplicationControlSupplementalPolicyItem_56d8edc3 {
        return new WindowsDefenderApplicationControlSupplementalPolicyItem_56d8edc3($rawUrl, $this->requestAdapter);
    }

}
