<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ManagedDevice;
use Microsoft\Graph\Beta\Generated\Models\ManagedDeviceCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\AppDiagnosticsWithUpn\AppDiagnosticsWithUpnRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\BulkReprovisionCloudPc\BulkReprovisionCloudPcRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\BulkRestoreCloudPc\BulkRestoreCloudPcRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\BulkSetCloudPcReviewStatus\BulkSetCloudPcReviewStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\DownloadAppDiagnostics\DownloadAppDiagnosticsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\ExecuteAction\ExecuteActionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\Item\ManagedDeviceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\MoveDevicesToOU\MoveDevicesToOURequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the managedDevices property of the microsoft.graph.user entity.
*/
class ManagedDevicesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the bulkReprovisionCloudPc method.
    */
    public function bulkReprovisionCloudPc(): BulkReprovisionCloudPcRequestBuilder {
        return new BulkReprovisionCloudPcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bulkRestoreCloudPc method.
    */
    public function bulkRestoreCloudPc(): BulkRestoreCloudPcRequestBuilder {
        return new BulkRestoreCloudPcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bulkSetCloudPcReviewStatus method.
    */
    public function bulkSetCloudPcReviewStatus(): BulkSetCloudPcReviewStatusRequestBuilder {
        return new BulkSetCloudPcReviewStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the downloadAppDiagnostics method.
    */
    public function downloadAppDiagnostics(): DownloadAppDiagnosticsRequestBuilder {
        return new DownloadAppDiagnosticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the executeAction method.
    */
    public function executeAction(): ExecuteActionRequestBuilder {
        return new ExecuteActionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the moveDevicesToOU method.
    */
    public function moveDevicesToOU(): MoveDevicesToOURequestBuilder {
        return new MoveDevicesToOURequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the appDiagnostics method.
     * @param string $upn Usage: upn='{upn}'
     * @return AppDiagnosticsWithUpnRequestBuilder
    */
    public function appDiagnosticsWithUpn(string $upn): AppDiagnosticsWithUpnRequestBuilder {
        return new AppDiagnosticsWithUpnRequestBuilder($this->pathParameters, $this->requestAdapter, $upn);
    }

    /**
     * Provides operations to manage the managedDevices property of the microsoft.graph.user entity.
     * @param string $managedDeviceId Unique identifier of the item
     * @return ManagedDeviceItemRequestBuilder
    */
    public function byManagedDeviceId(string $managedDeviceId): ManagedDeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDevice%2Did'] = $managedDeviceId;
        return new ManagedDeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ManagedDevicesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/managedDevices{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The managed devices associated with the user.
     * @param ManagedDevicesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?ManagedDevicesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ManagedDeviceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create new navigation property to managedDevices for users
     * @param ManagedDevice $body The request body
     * @param ManagedDevicesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function post(ManagedDevice $body, ?ManagedDevicesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ManagedDevice::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * The managed devices associated with the user.
     * @param ManagedDevicesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ManagedDevicesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Create new navigation property to managedDevices for users
     * @param ManagedDevice $body The request body
     * @param ManagedDevicesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ManagedDevice $body, ?ManagedDevicesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
