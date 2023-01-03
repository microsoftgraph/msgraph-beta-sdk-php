<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceShellScripts\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceShellScripts\Item\Assign\AssignRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceShellScripts\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceShellScripts\Item\Assignments\Item\DeviceManagementScriptAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceShellScripts\Item\DeviceRunStates\DeviceRunStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceShellScripts\Item\DeviceRunStates\Item\DeviceManagementScriptDeviceStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceShellScripts\Item\GroupAssignments\GroupAssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceShellScripts\Item\GroupAssignments\Item\DeviceManagementScriptGroupAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceShellScripts\Item\RunSummary\RunSummaryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceShellScripts\Item\UserRunStates\Item\DeviceManagementScriptUserStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceShellScripts\Item\UserRunStates\UserRunStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceShellScript;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DeviceShellScriptItemRequestBuilder 
{
    /**
     * Provides operations to call the assign method.
    */
    public function assign(): AssignRequestBuilder {
        return new AssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.deviceShellScript entity.
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceRunStates property of the microsoft.graph.deviceShellScript entity.
    */
    public function deviceRunStates(): DeviceRunStatesRequestBuilder {
        return new DeviceRunStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the groupAssignments property of the microsoft.graph.deviceShellScript entity.
    */
    public function groupAssignments(): GroupAssignmentsRequestBuilder {
        return new GroupAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to manage the runSummary property of the microsoft.graph.deviceShellScript entity.
    */
    public function runSummary(): RunSummaryRequestBuilder {
        return new RunSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the userRunStates property of the microsoft.graph.deviceShellScript entity.
    */
    public function userRunStates(): UserRunStatesRequestBuilder {
        return new UserRunStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.deviceShellScript entity.
     * @param string $id Unique identifier of the item
     * @return DeviceManagementScriptAssignmentItemRequestBuilder|null
    */
    public function assignmentsById(string $id): ?DeviceManagementScriptAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementScriptAssignment%2Did'] = $id;
        return new DeviceManagementScriptAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeviceShellScriptItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/deviceShellScripts/{deviceShellScript%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property deviceShellScripts for deviceManagement
     * @param DeviceShellScriptItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?DeviceShellScriptItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * The list of device shell scripts associated with the tenant.
     * @param DeviceShellScriptItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?DeviceShellScriptItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
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
     * Update the navigation property deviceShellScripts in deviceManagement
     * @param DeviceShellScript $body The request body
     * @param DeviceShellScriptItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(DeviceShellScript $body, ?DeviceShellScriptItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Delete navigation property deviceShellScripts for deviceManagement
     * @param DeviceShellScriptItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?DeviceShellScriptItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the deviceRunStates property of the microsoft.graph.deviceShellScript entity.
     * @param string $id Unique identifier of the item
     * @return DeviceManagementScriptDeviceStateItemRequestBuilder|null
    */
    public function deviceRunStatesById(string $id): ?DeviceManagementScriptDeviceStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementScriptDeviceState%2Did'] = $id;
        return new DeviceManagementScriptDeviceStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The list of device shell scripts associated with the tenant.
     * @param DeviceShellScriptItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?DeviceShellScriptItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DeviceShellScript::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the groupAssignments property of the microsoft.graph.deviceShellScript entity.
     * @param string $id Unique identifier of the item
     * @return DeviceManagementScriptGroupAssignmentItemRequestBuilder|null
    */
    public function groupAssignmentsById(string $id): ?DeviceManagementScriptGroupAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementScriptGroupAssignment%2Did'] = $id;
        return new DeviceManagementScriptGroupAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property deviceShellScripts in deviceManagement
     * @param DeviceShellScript $body The request body
     * @param DeviceShellScriptItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(DeviceShellScript $body, ?DeviceShellScriptItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DeviceShellScript::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the userRunStates property of the microsoft.graph.deviceShellScript entity.
     * @param string $id Unique identifier of the item
     * @return DeviceManagementScriptUserStateItemRequestBuilder|null
    */
    public function userRunStatesById(string $id): ?DeviceManagementScriptUserStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementScriptUserState%2Did'] = $id;
        return new DeviceManagementScriptUserStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
