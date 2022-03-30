<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceManagementScripts\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceManagementScripts\Item\Assign\AssignRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceManagementScripts\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceManagementScripts\Item\Assignments\Item\DeviceManagementScriptAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceManagementScripts\Item\DeviceRunStates\DeviceRunStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceManagementScripts\Item\DeviceRunStates\Item\DeviceManagementScriptDeviceStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceManagementScripts\Item\GroupAssignments\GroupAssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceManagementScripts\Item\GroupAssignments\Item\DeviceManagementScriptGroupAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceManagementScripts\Item\RunSummary\RunSummaryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceManagementScripts\Item\UserRunStates\Item\DeviceManagementScriptUserStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceManagementScripts\Item\UserRunStates\UserRunStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\DeviceManagementScript;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DeviceManagementScriptItemRequestBuilder 
{
    public function assign(): AssignRequestBuilder {
        return new AssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function deviceRunStates(): DeviceRunStatesRequestBuilder {
        return new DeviceRunStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function groupAssignments(): GroupAssignmentsRequestBuilder {
        return new GroupAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    public function runSummary(): RunSummaryRequestBuilder {
        return new RunSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    public function userRunStates(): UserRunStatesRequestBuilder {
        return new UserRunStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.deviceManagementScripts.item.assignments.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceManagementScriptAssignmentItemRequestBuilder
    */
    public function assignmentsById(string $id): DeviceManagementScriptAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementScriptAssignment_id'] = $id;
        return new DeviceManagementScriptAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeviceManagementScriptItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/deviceManagementScripts/{deviceManagementScript_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property deviceManagementScripts for deviceManagement
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * The list of device management scripts associated with the tenant.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property deviceManagementScripts in deviceManagement
     * @param DeviceManagementScript $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(DeviceManagementScript $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Delete navigation property deviceManagementScripts for deviceManagement
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.deviceManagementScripts.item.deviceRunStates.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceManagementScriptDeviceStateItemRequestBuilder
    */
    public function deviceRunStatesById(string $id): DeviceManagementScriptDeviceStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementScriptDeviceState_id'] = $id;
        return new DeviceManagementScriptDeviceStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The list of device management scripts associated with the tenant.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, DeviceManagementScript::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.deviceManagementScripts.item.groupAssignments.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceManagementScriptGroupAssignmentItemRequestBuilder
    */
    public function groupAssignmentsById(string $id): DeviceManagementScriptGroupAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementScriptGroupAssignment_id'] = $id;
        return new DeviceManagementScriptGroupAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property deviceManagementScripts in deviceManagement
     * @param DeviceManagementScript $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(DeviceManagementScript $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.deviceManagementScripts.item.userRunStates.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceManagementScriptUserStateItemRequestBuilder
    */
    public function userRunStatesById(string $id): DeviceManagementScriptUserStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementScriptUserState_id'] = $id;
        return new DeviceManagementScriptUserStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
