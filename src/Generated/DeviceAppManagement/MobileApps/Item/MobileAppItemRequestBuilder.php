<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\Assign\AssignRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\Assignments\Item\MobileAppAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\Categories\CategoriesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\Categories\Item\MobileAppCategoryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\DeviceStatuses\DeviceStatusesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\DeviceStatuses\Item\MobileAppInstallStatusItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\GetRelatedAppStatesWithUserPrincipalNameWithDeviceId\GetRelatedAppStatesWithUserPrincipalNameWithDeviceIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\InstallSummary\InstallSummaryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\IosVppApp\IosVppAppRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\Relationships\Item\MobileAppRelationshipItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\Relationships\RelationshipsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\UpdateRelationships\UpdateRelationshipsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\UserStatuses\Item\UserAppInstallStatusItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\UserStatuses\UserStatusesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\MobileApp;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class MobileAppItemRequestBuilder 
{
    public function assign(): AssignRequestBuilder {
        return new AssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function categories(): CategoriesRequestBuilder {
        return new CategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function deviceStatuses(): DeviceStatusesRequestBuilder {
        return new DeviceStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function installSummary(): InstallSummaryRequestBuilder {
        return new InstallSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function iosVppApp(): IosVppAppRequestBuilder {
        return new IosVppAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    public function relationships(): RelationshipsRequestBuilder {
        return new RelationshipsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    public function updateRelationships(): UpdateRelationshipsRequestBuilder {
        return new UpdateRelationshipsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    public function userStatuses(): UserStatusesRequestBuilder {
        return new UserStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.mobileApps.item.assignments.item collection
     * @param string $id Unique identifier of the item
     * @return MobileAppAssignmentItemRequestBuilder
    */
    public function assignmentsById(string $id): MobileAppAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileAppAssignment_id'] = $id;
        return new MobileAppAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.mobileApps.item.categories.item collection
     * @param string $id Unique identifier of the item
     * @return MobileAppCategoryItemRequestBuilder
    */
    public function categoriesById(string $id): MobileAppCategoryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileAppCategory_id'] = $id;
        return new MobileAppCategoryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MobileAppItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceAppManagement/mobileApps/{mobileApp_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property mobileApps for deviceAppManagement
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
     * The mobile apps.
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
     * Update the navigation property mobileApps in deviceAppManagement
     * @param MobileApp $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(MobileApp $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete navigation property mobileApps for deviceAppManagement
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.mobileApps.item.deviceStatuses.item collection
     * @param string $id Unique identifier of the item
     * @return MobileAppInstallStatusItemRequestBuilder
    */
    public function deviceStatusesById(string $id): MobileAppInstallStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileAppInstallStatus_id'] = $id;
        return new MobileAppInstallStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The mobile apps.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, MobileApp::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the getRelatedAppStates method.
     * @param string $deviceId Usage: deviceId='{deviceId}'
     * @param string $userPrincipalName Usage: userPrincipalName='{userPrincipalName}'
     * @return GetRelatedAppStatesWithUserPrincipalNameWithDeviceIdRequestBuilder
    */
    public function getRelatedAppStatesWithUserPrincipalNameWithDeviceId(string $deviceId, string $userPrincipalName): GetRelatedAppStatesWithUserPrincipalNameWithDeviceIdRequestBuilder {
        return new GetRelatedAppStatesWithUserPrincipalNameWithDeviceIdRequestBuilder($this->pathParameters, $this->requestAdapter, $deviceId, $userPrincipalName);
    }

    /**
     * Update the navigation property mobileApps in deviceAppManagement
     * @param MobileApp $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(MobileApp $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.mobileApps.item.relationships.item collection
     * @param string $id Unique identifier of the item
     * @return MobileAppRelationshipItemRequestBuilder
    */
    public function relationshipsById(string $id): MobileAppRelationshipItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileAppRelationship_id'] = $id;
        return new MobileAppRelationshipItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.mobileApps.item.userStatuses.item collection
     * @param string $id Unique identifier of the item
     * @return UserAppInstallStatusItemRequestBuilder
    */
    public function userStatusesById(string $id): UserAppInstallStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userAppInstallStatus_id'] = $id;
        return new UserAppInstallStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
