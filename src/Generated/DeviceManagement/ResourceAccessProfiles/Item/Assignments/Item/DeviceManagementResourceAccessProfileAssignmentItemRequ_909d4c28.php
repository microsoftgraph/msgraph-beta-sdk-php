<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ResourceAccessProfiles\Item\Assignments\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementResourceAccessProfileAssignment;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the assignments property of the microsoft.graph.deviceManagementResourceAccessProfileBase entity. Original name: DeviceManagementResourceAccessProfileAssignmentItemRequestBuilder
*/
class DeviceManagementResourceAccessProfileAssignmentItemRequ_909d4c28 extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DeviceManagementResourceAccessProfileAssignmentItemRequ_909d4c28 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/resourceAccessProfiles/{deviceManagementResourceAccessProfileBase%2Did}/assignments/{deviceManagementResourceAccessProfileAssignment%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property assignments for deviceManagement
     * @param DeviceManagementResourceAccessProfileAssignmentItemRequ_36411373|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?DeviceManagementResourceAccessProfileAssignmentItemRequ_36411373 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The list of assignments for the device configuration profile.
     * @param DeviceManagementResourceAccessProfileAssignmentItemRequ_f5990736|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementResourceAccessProfileAssignment|null>
     * @throws Exception
    */
    public function get(?DeviceManagementResourceAccessProfileAssignmentItemRequ_f5990736 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementResourceAccessProfileAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property assignments in deviceManagement
     * @param DeviceManagementResourceAccessProfileAssignment $body The request body
     * @param DeviceManagementResourceAccessProfileAssignmentItemRequ_f3753c6a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementResourceAccessProfileAssignment|null>
     * @throws Exception
    */
    public function patch(DeviceManagementResourceAccessProfileAssignment $body, ?DeviceManagementResourceAccessProfileAssignmentItemRequ_f3753c6a $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementResourceAccessProfileAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property assignments for deviceManagement
     * @param DeviceManagementResourceAccessProfileAssignmentItemRequ_36411373|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DeviceManagementResourceAccessProfileAssignmentItemRequ_36411373 $requestConfiguration = null): RequestInformation {
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
     * The list of assignments for the device configuration profile.
     * @param DeviceManagementResourceAccessProfileAssignmentItemRequ_f5990736|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceManagementResourceAccessProfileAssignmentItemRequ_f5990736 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property assignments in deviceManagement
     * @param DeviceManagementResourceAccessProfileAssignment $body The request body
     * @param DeviceManagementResourceAccessProfileAssignmentItemRequ_f3753c6a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceManagementResourceAccessProfileAssignment $body, ?DeviceManagementResourceAccessProfileAssignmentItemRequ_f3753c6a $requestConfiguration = null): RequestInformation {
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
     * @return DeviceManagementResourceAccessProfileAssignmentItemRequ_909d4c28
    */
    public function withUrl(string $rawUrl): DeviceManagementResourceAccessProfileAssignmentItemRequ_909d4c28 {
        return new DeviceManagementResourceAccessProfileAssignmentItemRequ_909d4c28($rawUrl, $this->requestAdapter);
    }

}
