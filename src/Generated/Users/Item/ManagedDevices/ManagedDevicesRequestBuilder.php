<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ManagedDevice;
use Microsoft\Graph\Beta\Generated\Models\ManagedDeviceCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\AppDiagnosticsWithUpn\AppDiagnosticsWithUpnRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\DownloadAppDiagnostics\DownloadAppDiagnosticsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\DownloadPowerliftAppDiagnostic\DownloadPowerliftAppDiagnosticRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\ExecuteAction\ExecuteActionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\Item\ManagedDeviceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\MoveDevicesToOU\MoveDevicesToOURequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\RetrievePowerliftAppDiagnosticsDetailsWithUserPrincipalName\RetrievePowerliftAppDiagnosticsDetailsWithUserPrincipalNameRequestBuilder;
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
     * Provides operations to call the downloadPowerliftAppDiagnostic method.
    */
    public function downloadPowerliftAppDiagnostic(): DownloadPowerliftAppDiagnosticRequestBuilder {
        return new DownloadPowerliftAppDiagnosticRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * @param string $managedDeviceId The unique identifier of managedDevice
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
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/managedDevices{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The managed devices associated with the user.
     * @param ManagedDevicesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedDeviceCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ManagedDevicesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedDeviceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to managedDevices for users
     * @param ManagedDevice $body The request body
     * @param ManagedDevicesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedDevice|null>
     * @throws Exception
    */
    public function post(ManagedDevice $body, ?ManagedDevicesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedDevice::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the retrievePowerliftAppDiagnosticsDetails method.
     * @param string $userPrincipalName Usage: userPrincipalName='{userPrincipalName}'
     * @return RetrievePowerliftAppDiagnosticsDetailsWithUserPrincipalNameRequestBuilder
    */
    public function retrievePowerliftAppDiagnosticsDetailsWithUserPrincipalName(string $userPrincipalName): RetrievePowerliftAppDiagnosticsDetailsWithUserPrincipalNameRequestBuilder {
        return new RetrievePowerliftAppDiagnosticsDetailsWithUserPrincipalNameRequestBuilder($this->pathParameters, $this->requestAdapter, $userPrincipalName);
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
     * @return ManagedDevicesRequestBuilder
    */
    public function withUrl(string $rawUrl): ManagedDevicesRequestBuilder {
        return new ManagedDevicesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
