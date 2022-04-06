<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\Assign\AssignRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\Assignments\Item\DeviceManagementIntentAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\Categories\CategoriesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\Categories\Item\DeviceManagementIntentSettingCategoryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\CompareWithTemplateId\CompareWithTemplateIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\CreateCopy\CreateCopyRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\DeviceSettingStateSummaries\DeviceSettingStateSummariesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\DeviceSettingStateSummaries\Item\DeviceManagementIntentDeviceSettingStateSummaryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\DeviceStates\DeviceStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\DeviceStates\Item\DeviceManagementIntentDeviceStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\DeviceStateSummary\DeviceStateSummaryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\MigrateToTemplate\MigrateToTemplateRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\Settings\Item\DeviceManagementSettingInstanceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\Settings\SettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\UpdateSettings\UpdateSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\UserStates\Item\DeviceManagementIntentUserStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\UserStates\UserStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\UserStateSummary\UserStateSummaryRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementIntent;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DeviceManagementIntentItemRequestBuilder 
{
    /**
     * The assign property
    */
    public function assign(): AssignRequestBuilder {
        return new AssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The assignments property
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The categories property
    */
    public function categories(): CategoriesRequestBuilder {
        return new CategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The createCopy property
    */
    public function createCopy(): CreateCopyRequestBuilder {
        return new CreateCopyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceSettingStateSummaries property
    */
    public function deviceSettingStateSummaries(): DeviceSettingStateSummariesRequestBuilder {
        return new DeviceSettingStateSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceStates property
    */
    public function deviceStates(): DeviceStatesRequestBuilder {
        return new DeviceStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceStateSummary property
    */
    public function deviceStateSummary(): DeviceStateSummaryRequestBuilder {
        return new DeviceStateSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The migrateToTemplate property
    */
    public function migrateToTemplate(): MigrateToTemplateRequestBuilder {
        return new MigrateToTemplateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The settings property
    */
    public function settings(): SettingsRequestBuilder {
        return new SettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The updateSettings property
    */
    public function updateSettings(): UpdateSettingsRequestBuilder {
        return new UpdateSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * The userStates property
    */
    public function userStates(): UserStatesRequestBuilder {
        return new UserStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The userStateSummary property
    */
    public function userStateSummary(): UserStateSummaryRequestBuilder {
        return new UserStateSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.intents.item.assignments.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceManagementIntentAssignmentItemRequestBuilder
    */
    public function assignmentsById(string $id): DeviceManagementIntentAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementIntentAssignment_id'] = $id;
        return new DeviceManagementIntentAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.intents.item.categories.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceManagementIntentSettingCategoryItemRequestBuilder
    */
    public function categoriesById(string $id): DeviceManagementIntentSettingCategoryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementIntentSettingCategory_id'] = $id;
        return new DeviceManagementIntentSettingCategoryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to call the compare method.
     * @param string $templateId Usage: templateId='{templateId}'
     * @return CompareWithTemplateIdRequestBuilder
    */
    public function compareWithTemplateId(string $templateId): CompareWithTemplateIdRequestBuilder {
        return new CompareWithTemplateIdRequestBuilder($this->pathParameters, $this->requestAdapter, $templateId);
    }

    /**
     * Instantiates a new DeviceManagementIntentItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/intents/{deviceManagementIntent_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property intents for deviceManagement
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
     * The device management intents
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
     * Update the navigation property intents in deviceManagement
     * @param DeviceManagementIntent $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(DeviceManagementIntent $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete navigation property intents for deviceManagement
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.intents.item.deviceSettingStateSummaries.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceManagementIntentDeviceSettingStateSummaryItemRequestBuilder
    */
    public function deviceSettingStateSummariesById(string $id): DeviceManagementIntentDeviceSettingStateSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementIntentDeviceSettingStateSummary_id'] = $id;
        return new DeviceManagementIntentDeviceSettingStateSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.intents.item.deviceStates.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceManagementIntentDeviceStateItemRequestBuilder
    */
    public function deviceStatesById(string $id): DeviceManagementIntentDeviceStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementIntentDeviceState_id'] = $id;
        return new DeviceManagementIntentDeviceStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The device management intents
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, DeviceManagementIntent::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property intents in deviceManagement
     * @param DeviceManagementIntent $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(DeviceManagementIntent $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.intents.item.settings.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceManagementSettingInstanceItemRequestBuilder
    */
    public function settingsById(string $id): DeviceManagementSettingInstanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementSettingInstance_id'] = $id;
        return new DeviceManagementSettingInstanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.intents.item.userStates.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceManagementIntentUserStateItemRequestBuilder
    */
    public function userStatesById(string $id): DeviceManagementIntentUserStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementIntentUserState_id'] = $id;
        return new DeviceManagementIntentUserStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
