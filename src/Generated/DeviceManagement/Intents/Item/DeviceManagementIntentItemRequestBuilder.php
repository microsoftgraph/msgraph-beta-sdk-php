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
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\GetCustomizedSettings\GetCustomizedSettingsRequestBuilder;
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
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the intents property of the microsoft.graph.deviceManagement entity.
*/
class DeviceManagementIntentItemRequestBuilder 
{
    /**
     * Provides operations to call the assign method.
    */
    public function assign(): AssignRequestBuilder {
        return new AssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.deviceManagementIntent entity.
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the categories property of the microsoft.graph.deviceManagementIntent entity.
    */
    public function categories(): CategoriesRequestBuilder {
        return new CategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createCopy method.
    */
    public function createCopy(): CreateCopyRequestBuilder {
        return new CreateCopyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceSettingStateSummaries property of the microsoft.graph.deviceManagementIntent entity.
    */
    public function deviceSettingStateSummaries(): DeviceSettingStateSummariesRequestBuilder {
        return new DeviceSettingStateSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceStates property of the microsoft.graph.deviceManagementIntent entity.
    */
    public function deviceStates(): DeviceStatesRequestBuilder {
        return new DeviceStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceStateSummary property of the microsoft.graph.deviceManagementIntent entity.
    */
    public function deviceStateSummary(): DeviceStateSummaryRequestBuilder {
        return new DeviceStateSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCustomizedSettings method.
    */
    public function getCustomizedSettings(): GetCustomizedSettingsRequestBuilder {
        return new GetCustomizedSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the migrateToTemplate method.
    */
    public function migrateToTemplate(): MigrateToTemplateRequestBuilder {
        return new MigrateToTemplateRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to manage the settings property of the microsoft.graph.deviceManagementIntent entity.
    */
    public function settings(): SettingsRequestBuilder {
        return new SettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateSettings method.
    */
    public function updateSettings(): UpdateSettingsRequestBuilder {
        return new UpdateSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the userStates property of the microsoft.graph.deviceManagementIntent entity.
    */
    public function userStates(): UserStatesRequestBuilder {
        return new UserStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userStateSummary property of the microsoft.graph.deviceManagementIntent entity.
    */
    public function userStateSummary(): UserStateSummaryRequestBuilder {
        return new UserStateSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.deviceManagementIntent entity.
     * @param string $id Unique identifier of the item
     * @return DeviceManagementIntentAssignmentItemRequestBuilder
    */
    public function assignmentsById(string $id): DeviceManagementIntentAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementIntentAssignment%2Did'] = $id;
        return new DeviceManagementIntentAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the categories property of the microsoft.graph.deviceManagementIntent entity.
     * @param string $id Unique identifier of the item
     * @return DeviceManagementIntentSettingCategoryItemRequestBuilder
    */
    public function categoriesById(string $id): DeviceManagementIntentSettingCategoryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementIntentSettingCategory%2Did'] = $id;
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
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/intents/{deviceManagementIntent%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property intents for deviceManagement
     * @param DeviceManagementIntentItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?DeviceManagementIntentItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
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
     * Provides operations to manage the deviceSettingStateSummaries property of the microsoft.graph.deviceManagementIntent entity.
     * @param string $id Unique identifier of the item
     * @return DeviceManagementIntentDeviceSettingStateSummaryItemRequestBuilder
    */
    public function deviceSettingStateSummariesById(string $id): DeviceManagementIntentDeviceSettingStateSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementIntentDeviceSettingStateSummary%2Did'] = $id;
        return new DeviceManagementIntentDeviceSettingStateSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the deviceStates property of the microsoft.graph.deviceManagementIntent entity.
     * @param string $id Unique identifier of the item
     * @return DeviceManagementIntentDeviceStateItemRequestBuilder
    */
    public function deviceStatesById(string $id): DeviceManagementIntentDeviceStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementIntentDeviceState%2Did'] = $id;
        return new DeviceManagementIntentDeviceStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The device management intents
     * @param DeviceManagementIntentItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?DeviceManagementIntentItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementIntent::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property intents in deviceManagement
     * @param DeviceManagementIntent $body The request body
     * @param DeviceManagementIntentItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(DeviceManagementIntent $body, ?DeviceManagementIntentItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementIntent::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the settings property of the microsoft.graph.deviceManagementIntent entity.
     * @param string $id Unique identifier of the item
     * @return DeviceManagementSettingInstanceItemRequestBuilder
    */
    public function settingsById(string $id): DeviceManagementSettingInstanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementSettingInstance%2Did'] = $id;
        return new DeviceManagementSettingInstanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property intents for deviceManagement
     * @param DeviceManagementIntentItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DeviceManagementIntentItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The device management intents
     * @param DeviceManagementIntentItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceManagementIntentItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property intents in deviceManagement
     * @param DeviceManagementIntent $body The request body
     * @param DeviceManagementIntentItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceManagementIntent $body, ?DeviceManagementIntentItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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

    /**
     * Provides operations to manage the userStates property of the microsoft.graph.deviceManagementIntent entity.
     * @param string $id Unique identifier of the item
     * @return DeviceManagementIntentUserStateItemRequestBuilder
    */
    public function userStatesById(string $id): DeviceManagementIntentUserStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementIntentUserState%2Did'] = $id;
        return new DeviceManagementIntentUserStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
