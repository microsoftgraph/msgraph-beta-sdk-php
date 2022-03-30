<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosLobAppProvisioningConfigurations\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosLobAppProvisioningConfigurations\Item\Assign\AssignRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosLobAppProvisioningConfigurations\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosLobAppProvisioningConfigurations\Item\Assignments\Item\IosLobAppProvisioningConfigurationAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosLobAppProvisioningConfigurations\Item\DeviceStatuses\DeviceStatusesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosLobAppProvisioningConfigurations\Item\DeviceStatuses\Item\ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosLobAppProvisioningConfigurations\Item\GroupAssignments\GroupAssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosLobAppProvisioningConfigurations\Item\GroupAssignments\Item\MobileAppProvisioningConfigGroupAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosLobAppProvisioningConfigurations\Item\UserStatuses\Item\ManagedDeviceMobileAppConfigurationUserStatusItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosLobAppProvisioningConfigurations\Item\UserStatuses\UserStatusesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\IosLobAppProvisioningConfiguration;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class IosLobAppProvisioningConfigurationItemRequestBuilder 
{
    public function assign(): AssignRequestBuilder {
        return new AssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function deviceStatuses(): DeviceStatusesRequestBuilder {
        return new DeviceStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function groupAssignments(): GroupAssignmentsRequestBuilder {
        return new GroupAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    public function userStatuses(): UserStatusesRequestBuilder {
        return new UserStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.iosLobAppProvisioningConfigurations.item.assignments.item collection
     * @param string $id Unique identifier of the item
     * @return IosLobAppProvisioningConfigurationAssignmentItemRequestBuilder
    */
    public function assignmentsById(string $id): IosLobAppProvisioningConfigurationAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['iosLobAppProvisioningConfigurationAssignment_id'] = $id;
        return new IosLobAppProvisioningConfigurationAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new IosLobAppProvisioningConfigurationItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceAppManagement/iosLobAppProvisioningConfigurations/{iosLobAppProvisioningConfiguration_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property iosLobAppProvisioningConfigurations for deviceAppManagement
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
     * The IOS Lob App Provisioning Configurations.
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
     * Update the navigation property iosLobAppProvisioningConfigurations in deviceAppManagement
     * @param IosLobAppProvisioningConfiguration $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(IosLobAppProvisioningConfiguration $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete navigation property iosLobAppProvisioningConfigurations for deviceAppManagement
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.iosLobAppProvisioningConfigurations.item.deviceStatuses.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilder
    */
    public function deviceStatusesById(string $id): ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDeviceMobileAppConfigurationDeviceStatus_id'] = $id;
        return new ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The IOS Lob App Provisioning Configurations.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, IosLobAppProvisioningConfiguration::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.iosLobAppProvisioningConfigurations.item.groupAssignments.item collection
     * @param string $id Unique identifier of the item
     * @return MobileAppProvisioningConfigGroupAssignmentItemRequestBuilder
    */
    public function groupAssignmentsById(string $id): MobileAppProvisioningConfigGroupAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileAppProvisioningConfigGroupAssignment_id'] = $id;
        return new MobileAppProvisioningConfigGroupAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property iosLobAppProvisioningConfigurations in deviceAppManagement
     * @param IosLobAppProvisioningConfiguration $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(IosLobAppProvisioningConfiguration $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.iosLobAppProvisioningConfigurations.item.userStatuses.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceMobileAppConfigurationUserStatusItemRequestBuilder
    */
    public function userStatusesById(string $id): ManagedDeviceMobileAppConfigurationUserStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDeviceMobileAppConfigurationUserStatus_id'] = $id;
        return new ManagedDeviceMobileAppConfigurationUserStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
