<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsFeatureUpdateProfiles\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsFeatureUpdateProfiles\Item\Assign\AssignRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsFeatureUpdateProfiles\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsFeatureUpdateProfile;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the windowsFeatureUpdateProfiles property of the microsoft.graph.deviceManagement entity.
*/
class WindowsFeatureUpdateProfileItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the assign method.
    */
    public function assign(): AssignRequestBuilder {
        return new AssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.windowsFeatureUpdateProfile entity.
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WindowsFeatureUpdateProfileItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/windowsFeatureUpdateProfiles/{windowsFeatureUpdateProfile%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property windowsFeatureUpdateProfiles for deviceManagement
     * @param WindowsFeatureUpdateProfileItemRequestBuilderDeleteRequ_979604d4|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?WindowsFeatureUpdateProfileItemRequestBuilderDeleteRequ_979604d4 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * A collection of windows feature update profiles
     * @param WindowsFeatureUpdateProfileItemRequestBuilderGetRequest_ff60639f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsFeatureUpdateProfile|null>
     * @throws Exception
    */
    public function get(?WindowsFeatureUpdateProfileItemRequestBuilderGetRequest_ff60639f $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsFeatureUpdateProfile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property windowsFeatureUpdateProfiles in deviceManagement
     * @param WindowsFeatureUpdateProfile $body The request body
     * @param WindowsFeatureUpdateProfileItemRequestBuilderPatchReque_f60d16a9|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsFeatureUpdateProfile|null>
     * @throws Exception
    */
    public function patch(WindowsFeatureUpdateProfile $body, ?WindowsFeatureUpdateProfileItemRequestBuilderPatchReque_f60d16a9 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsFeatureUpdateProfile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property windowsFeatureUpdateProfiles for deviceManagement
     * @param WindowsFeatureUpdateProfileItemRequestBuilderDeleteRequ_979604d4|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WindowsFeatureUpdateProfileItemRequestBuilderDeleteRequ_979604d4 $requestConfiguration = null): RequestInformation {
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
     * A collection of windows feature update profiles
     * @param WindowsFeatureUpdateProfileItemRequestBuilderGetRequest_ff60639f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WindowsFeatureUpdateProfileItemRequestBuilderGetRequest_ff60639f $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property windowsFeatureUpdateProfiles in deviceManagement
     * @param WindowsFeatureUpdateProfile $body The request body
     * @param WindowsFeatureUpdateProfileItemRequestBuilderPatchReque_f60d16a9|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(WindowsFeatureUpdateProfile $body, ?WindowsFeatureUpdateProfileItemRequestBuilderPatchReque_f60d16a9 $requestConfiguration = null): RequestInformation {
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
     * @return WindowsFeatureUpdateProfileItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WindowsFeatureUpdateProfileItemRequestBuilder {
        return new WindowsFeatureUpdateProfileItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
