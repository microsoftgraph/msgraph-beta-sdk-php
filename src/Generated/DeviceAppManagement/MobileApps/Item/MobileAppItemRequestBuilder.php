<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\Assignments\Item\MobileAppAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\Categories\CategoriesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\Categories\Item\MobileAppCategoryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\DeviceStatuses\DeviceStatusesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\DeviceStatuses\Item\MobileAppInstallStatusItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\InstallSummary\InstallSummaryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\MicrosoftGraphAssign\MicrosoftGraphAssignRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\MicrosoftGraphGetRelatedAppStatesWithUserPrincipalNameWithDeviceId\MicrosoftGraphGetRelatedAppStatesWithUserPrincipalNameWithDeviceIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\MicrosoftGraphManagedMobileLobApp\MicrosoftGraphManagedMobileLobAppRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\MicrosoftGraphMobileLobApp\MicrosoftGraphMobileLobAppRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\MicrosoftGraphUpdateRelationships\MicrosoftGraphUpdateRelationshipsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\Relationships\Item\MobileAppRelationshipItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\Relationships\RelationshipsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\UserStatuses\Item\UserAppInstallStatusItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\UserStatuses\UserStatusesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\MobileApp;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the mobileApps property of the microsoft.graph.deviceAppManagement entity.
*/
class MobileAppItemRequestBuilder 
{
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.mobileApp entity.
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the categories property of the microsoft.graph.mobileApp entity.
    */
    public function categories(): CategoriesRequestBuilder {
        return new CategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceStatuses property of the microsoft.graph.mobileApp entity.
    */
    public function deviceStatuses(): DeviceStatusesRequestBuilder {
        return new DeviceStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the installSummary property of the microsoft.graph.mobileApp entity.
    */
    public function installSummary(): InstallSummaryRequestBuilder {
        return new InstallSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the assign method.
    */
    public function microsoftGraphAssign(): MicrosoftGraphAssignRequestBuilder {
        return new MicrosoftGraphAssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to managedMobileLobApp.
    */
    public function microsoftGraphManagedMobileLobApp(): MicrosoftGraphManagedMobileLobAppRequestBuilder {
        return new MicrosoftGraphManagedMobileLobAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to mobileLobApp.
    */
    public function microsoftGraphMobileLobApp(): MicrosoftGraphMobileLobAppRequestBuilder {
        return new MicrosoftGraphMobileLobAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateRelationships method.
    */
    public function microsoftGraphUpdateRelationships(): MicrosoftGraphUpdateRelationshipsRequestBuilder {
        return new MicrosoftGraphUpdateRelationshipsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the relationships property of the microsoft.graph.mobileApp entity.
    */
    public function relationships(): RelationshipsRequestBuilder {
        return new RelationshipsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the userStatuses property of the microsoft.graph.mobileApp entity.
    */
    public function userStatuses(): UserStatusesRequestBuilder {
        return new UserStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.mobileApp entity.
     * @param string $id Unique identifier of the item
     * @return MobileAppAssignmentItemRequestBuilder
    */
    public function assignmentsById(string $id): MobileAppAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileAppAssignment%2Did'] = $id;
        return new MobileAppAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the categories property of the microsoft.graph.mobileApp entity.
     * @param string $id Unique identifier of the item
     * @return MobileAppCategoryItemRequestBuilder
    */
    public function categoriesById(string $id): MobileAppCategoryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileAppCategory%2Did'] = $id;
        return new MobileAppCategoryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MobileAppItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceAppManagement/mobileApps/{mobileApp%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property mobileApps for deviceAppManagement
     * @param MobileAppItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?MobileAppItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
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
     * Provides operations to manage the deviceStatuses property of the microsoft.graph.mobileApp entity.
     * @param string $id Unique identifier of the item
     * @return MobileAppInstallStatusItemRequestBuilder
    */
    public function deviceStatusesById(string $id): MobileAppInstallStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileAppInstallStatus%2Did'] = $id;
        return new MobileAppInstallStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The mobile apps.
     * @param MobileAppItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?MobileAppItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [MobileApp::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the getRelatedAppStates method.
     * @param string $deviceId Usage: deviceId='{deviceId}'
     * @param string $userPrincipalName Usage: userPrincipalName='{userPrincipalName}'
     * @return MicrosoftGraphGetRelatedAppStatesWithUserPrincipalNameWithDeviceIdRequestBuilder
    */
    public function microsoftGraphGetRelatedAppStatesWithUserPrincipalNameWithDeviceId(string $deviceId, string $userPrincipalName): MicrosoftGraphGetRelatedAppStatesWithUserPrincipalNameWithDeviceIdRequestBuilder {
        return new MicrosoftGraphGetRelatedAppStatesWithUserPrincipalNameWithDeviceIdRequestBuilder($this->pathParameters, $this->requestAdapter, $deviceId, $userPrincipalName);
    }

    /**
     * Update the navigation property mobileApps in deviceAppManagement
     * @param MobileApp $body The request body
     * @param MobileAppItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(MobileApp $body, ?MobileAppItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [MobileApp::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the relationships property of the microsoft.graph.mobileApp entity.
     * @param string $id Unique identifier of the item
     * @return MobileAppRelationshipItemRequestBuilder
    */
    public function relationshipsById(string $id): MobileAppRelationshipItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileAppRelationship%2Did'] = $id;
        return new MobileAppRelationshipItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property mobileApps for deviceAppManagement
     * @param MobileAppItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?MobileAppItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The mobile apps.
     * @param MobileAppItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MobileAppItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property mobileApps in deviceAppManagement
     * @param MobileApp $body The request body
     * @param MobileAppItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(MobileApp $body, ?MobileAppItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Provides operations to manage the userStatuses property of the microsoft.graph.mobileApp entity.
     * @param string $id Unique identifier of the item
     * @return UserAppInstallStatusItemRequestBuilder
    */
    public function userStatusesById(string $id): UserAppInstallStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userAppInstallStatus%2Did'] = $id;
        return new UserAppInstallStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
