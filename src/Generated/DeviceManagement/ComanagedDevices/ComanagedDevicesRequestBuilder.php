<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\AppDiagnosticsWithUpn\AppDiagnosticsWithUpnRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\BulkReprovisionCloudPc\BulkReprovisionCloudPcRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\BulkRestoreCloudPc\BulkRestoreCloudPcRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\BulkSetCloudPcReviewStatus\BulkSetCloudPcReviewStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\DownloadAppDiagnostics\DownloadAppDiagnosticsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\ExecuteAction\ExecuteActionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\MoveDevicesToOU\MoveDevicesToOURequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ManagedDevice;
use Microsoft\Graph\Beta\Generated\Models\ManagedDeviceCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ComanagedDevicesRequestBuilder 
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
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to call the appDiagnostics method.
     * @param string $upn Usage: upn='{upn}'
     * @return AppDiagnosticsWithUpnRequestBuilder
    */
    public function appDiagnosticsWithUpn(string $upn): AppDiagnosticsWithUpnRequestBuilder {
        return new AppDiagnosticsWithUpnRequestBuilder($this->pathParameters, $this->requestAdapter, $upn);
    }

    /**
     * Instantiates a new ComanagedDevicesRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/comanagedDevices{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * The list of co-managed devices report
     * @param ComanagedDevicesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?ComanagedDevicesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
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
     * Create new navigation property to comanagedDevices for deviceManagement
     * @param ManagedDevice $body 
     * @param ComanagedDevicesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPostRequestInformation(ManagedDevice $body, ?ComanagedDevicesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * The list of co-managed devices report
     * @param ComanagedDevicesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?ComanagedDevicesRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ManagedDeviceCollectionResponse::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create new navigation property to comanagedDevices for deviceManagement
     * @param ManagedDevice $body 
     * @param ComanagedDevicesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function post(ManagedDevice $body, ?ComanagedDevicesRequestBuilderPostRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ManagedDevice::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
