<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsFeatureUpdateProfiles\Item\Assignments\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsFeatureUpdateProfileAssignment;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the assignments property of the microsoft.graph.windowsFeatureUpdateProfile entity.
*/
class WindowsFeatureUpdateProfileAssignmentItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WindowsFeatureUpdateProfileAssignmentItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/windowsFeatureUpdateProfiles/{windowsFeatureUpdateProfile%2Did}/assignments/{windowsFeatureUpdateProfileAssignment%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property assignments for deviceManagement
     * @param WindowsFeatureUpdateProfileAssignmentItemRequestBuilder_0c097272|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?WindowsFeatureUpdateProfileAssignmentItemRequestBuilder_0c097272 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The list of group assignments of the profile.
     * @param WindowsFeatureUpdateProfileAssignmentItemRequestBuilder_1c06c7bc|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsFeatureUpdateProfileAssignment|null>
     * @throws Exception
    */
    public function get(?WindowsFeatureUpdateProfileAssignmentItemRequestBuilder_1c06c7bc $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsFeatureUpdateProfileAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property assignments in deviceManagement
     * @param WindowsFeatureUpdateProfileAssignment $body The request body
     * @param WindowsFeatureUpdateProfileAssignmentItemRequestBuilder_bd64bd48|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsFeatureUpdateProfileAssignment|null>
     * @throws Exception
    */
    public function patch(WindowsFeatureUpdateProfileAssignment $body, ?WindowsFeatureUpdateProfileAssignmentItemRequestBuilder_bd64bd48 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsFeatureUpdateProfileAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property assignments for deviceManagement
     * @param WindowsFeatureUpdateProfileAssignmentItemRequestBuilder_0c097272|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WindowsFeatureUpdateProfileAssignmentItemRequestBuilder_0c097272 $requestConfiguration = null): RequestInformation {
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
     * The list of group assignments of the profile.
     * @param WindowsFeatureUpdateProfileAssignmentItemRequestBuilder_1c06c7bc|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WindowsFeatureUpdateProfileAssignmentItemRequestBuilder_1c06c7bc $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/windowsFeatureUpdateProfiles/{windowsFeatureUpdateProfile%2Did}/assignments/{windowsFeatureUpdateProfileAssignment%2Did}{?%24expand,%24select}';
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
     * @param WindowsFeatureUpdateProfileAssignment $body The request body
     * @param WindowsFeatureUpdateProfileAssignmentItemRequestBuilder_bd64bd48|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(WindowsFeatureUpdateProfileAssignment $body, ?WindowsFeatureUpdateProfileAssignmentItemRequestBuilder_bd64bd48 $requestConfiguration = null): RequestInformation {
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
     * @return WindowsFeatureUpdateProfileAssignmentItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WindowsFeatureUpdateProfileAssignmentItemRequestBuilder {
        return new WindowsFeatureUpdateProfileAssignmentItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
