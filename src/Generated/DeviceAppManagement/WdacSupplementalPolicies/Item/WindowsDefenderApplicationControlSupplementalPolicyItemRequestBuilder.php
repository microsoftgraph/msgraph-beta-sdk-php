<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item\Assignments\Item\WindowsDefenderApplicationControlSupplementalPolicyAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item\DeploySummary\DeploySummaryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item\DeviceStatuses\DeviceStatusesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item\DeviceStatuses\Item\WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item\MicrosoftGraphAssign\MicrosoftGraphAssignRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsDefenderApplicationControlSupplementalPolicy;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the wdacSupplementalPolicies property of the microsoft.graph.deviceAppManagement entity.
*/
class WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilder 
{
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
     * Provides operations to call the assign method.
    */
    public function microsoftGraphAssign(): MicrosoftGraphAssignRequestBuilder {
        return new MicrosoftGraphAssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.windowsDefenderApplicationControlSupplementalPolicy entity.
     * @param string $id Unique identifier of the item
     * @return WindowsDefenderApplicationControlSupplementalPolicyAssignmentItemRequestBuilder
    */
    public function assignmentsById(string $id): WindowsDefenderApplicationControlSupplementalPolicyAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsDefenderApplicationControlSupplementalPolicyAssignment%2Did'] = $id;
        return new WindowsDefenderApplicationControlSupplementalPolicyAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceAppManagement/wdacSupplementalPolicies/{windowsDefenderApplicationControlSupplementalPolicy%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property wdacSupplementalPolicies for deviceAppManagement
     * @param WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the deviceStatuses property of the microsoft.graph.windowsDefenderApplicationControlSupplementalPolicy entity.
     * @param string $id Unique identifier of the item
     * @return WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilder
    */
    public function deviceStatusesById(string $id): WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsDefenderApplicationControlSupplementalPolicyDeploymentStatus%2Did'] = $id;
        return new WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The collection of Windows Defender Application Control Supplemental Policies.
     * @param WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [WindowsDefenderApplicationControlSupplementalPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property wdacSupplementalPolicies in deviceAppManagement
     * @param WindowsDefenderApplicationControlSupplementalPolicy $body The request body
     * @param WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(WindowsDefenderApplicationControlSupplementalPolicy $body, ?WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [WindowsDefenderApplicationControlSupplementalPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property wdacSupplementalPolicies for deviceAppManagement
     * @param WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * The collection of Windows Defender Application Control Supplemental Policies.
     * @param WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property wdacSupplementalPolicies in deviceAppManagement
     * @param WindowsDefenderApplicationControlSupplementalPolicy $body The request body
     * @param WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(WindowsDefenderApplicationControlSupplementalPolicy $body, ?WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
