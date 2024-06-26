<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\WindowsInformationProtectionWipeActions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WindowsInformationProtectionWipeActions\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WindowsInformationProtectionWipeActions\Item\WindowsInformationProtectionWipeActionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsInformationProtectionWipeAction;
use Microsoft\Graph\Beta\Generated\Models\WindowsInformationProtectionWipeActionCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the windowsInformationProtectionWipeActions property of the microsoft.graph.deviceAppManagement entity.
*/
class WindowsInformationProtectionWipeActionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsInformationProtectionWipeActions property of the microsoft.graph.deviceAppManagement entity.
     * @param string $windowsInformationProtectionWipeActionId The unique identifier of windowsInformationProtectionWipeAction
     * @return WindowsInformationProtectionWipeActionItemRequestBuilder
    */
    public function byWindowsInformationProtectionWipeActionId(string $windowsInformationProtectionWipeActionId): WindowsInformationProtectionWipeActionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsInformationProtectionWipeAction%2Did'] = $windowsInformationProtectionWipeActionId;
        return new WindowsInformationProtectionWipeActionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WindowsInformationProtectionWipeActionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement/windowsInformationProtectionWipeActions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Windows information protection wipe actions.
     * @param WindowsInformationProtectionWipeActionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsInformationProtectionWipeActionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?WindowsInformationProtectionWipeActionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsInformationProtectionWipeActionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to windowsInformationProtectionWipeActions for deviceAppManagement
     * @param WindowsInformationProtectionWipeAction $body The request body
     * @param WindowsInformationProtectionWipeActionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsInformationProtectionWipeAction|null>
     * @throws Exception
    */
    public function post(WindowsInformationProtectionWipeAction $body, ?WindowsInformationProtectionWipeActionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsInformationProtectionWipeAction::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Windows information protection wipe actions.
     * @param WindowsInformationProtectionWipeActionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WindowsInformationProtectionWipeActionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to windowsInformationProtectionWipeActions for deviceAppManagement
     * @param WindowsInformationProtectionWipeAction $body The request body
     * @param WindowsInformationProtectionWipeActionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WindowsInformationProtectionWipeAction $body, ?WindowsInformationProtectionWipeActionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return WindowsInformationProtectionWipeActionsRequestBuilder
    */
    public function withUrl(string $rawUrl): WindowsInformationProtectionWipeActionsRequestBuilder {
        return new WindowsInformationProtectionWipeActionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
