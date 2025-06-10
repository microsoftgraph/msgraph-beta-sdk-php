<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyMigrationReports\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyMigrationReports\Item\GroupPolicySettingMappings\GroupPolicySettingMappingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyMigrationReports\Item\UnsupportedGroupPolicyExtensions\UnsupportedGroupPolicyExtensionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyMigrationReports\Item\UpdateScopeTags\UpdateScopeTagsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyMigrationReport;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the groupPolicyMigrationReports property of the microsoft.graph.deviceManagement entity.
*/
class GroupPolicyMigrationReportItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the groupPolicySettingMappings property of the microsoft.graph.groupPolicyMigrationReport entity.
    */
    public function groupPolicySettingMappings(): GroupPolicySettingMappingsRequestBuilder {
        return new GroupPolicySettingMappingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the unsupportedGroupPolicyExtensions property of the microsoft.graph.groupPolicyMigrationReport entity.
    */
    public function unsupportedGroupPolicyExtensions(): UnsupportedGroupPolicyExtensionsRequestBuilder {
        return new UnsupportedGroupPolicyExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateScopeTags method.
    */
    public function updateScopeTags(): UpdateScopeTagsRequestBuilder {
        return new UpdateScopeTagsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new GroupPolicyMigrationReportItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/groupPolicyMigrationReports/{groupPolicyMigrationReport%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property groupPolicyMigrationReports for deviceManagement
     * @param GroupPolicyMigrationReportItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?GroupPolicyMigrationReportItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * A list of Group Policy migration reports.
     * @param GroupPolicyMigrationReportItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GroupPolicyMigrationReport|null>
     * @throws Exception
    */
    public function get(?GroupPolicyMigrationReportItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GroupPolicyMigrationReport::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property groupPolicyMigrationReports in deviceManagement
     * @param GroupPolicyMigrationReport $body The request body
     * @param GroupPolicyMigrationReportItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GroupPolicyMigrationReport|null>
     * @throws Exception
    */
    public function patch(GroupPolicyMigrationReport $body, ?GroupPolicyMigrationReportItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GroupPolicyMigrationReport::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property groupPolicyMigrationReports for deviceManagement
     * @param GroupPolicyMigrationReportItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?GroupPolicyMigrationReportItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * A list of Group Policy migration reports.
     * @param GroupPolicyMigrationReportItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GroupPolicyMigrationReportItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
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
     * Update the navigation property groupPolicyMigrationReports in deviceManagement
     * @param GroupPolicyMigrationReport $body The request body
     * @param GroupPolicyMigrationReportItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(GroupPolicyMigrationReport $body, ?GroupPolicyMigrationReportItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GroupPolicyMigrationReportItemRequestBuilder
    */
    public function withUrl(string $rawUrl): GroupPolicyMigrationReportItemRequestBuilder {
        return new GroupPolicyMigrationReportItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
