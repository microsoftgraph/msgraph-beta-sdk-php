<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\GetMobileAppCountWithStatus\GetMobileAppCountWithStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\GetTopMobileAppsWithStatusWithCount\GetTopMobileAppsWithStatusWithCountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\HasPayloadLinks\HasPayloadLinksRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\ManagedMobileLobApp\ManagedMobileLobAppRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\MobileLobApp\MobileLobAppRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\ValidateXml\ValidateXmlRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\MobileApp;
use Microsoft\Graph\Beta\Generated\Models\MobileAppCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class MobileAppsRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hasPayloadLinks method.
    */
    public function hasPayloadLinks(): HasPayloadLinksRequestBuilder {
        return new HasPayloadLinksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to managedMobileLobApp.
    */
    public function managedMobileLobApp(): ManagedMobileLobAppRequestBuilder {
        return new ManagedMobileLobAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to mobileLobApp.
    */
    public function mobileLobApp(): MobileLobAppRequestBuilder {
        return new MobileLobAppRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to call the validateXml method.
    */
    public function validateXml(): ValidateXmlRequestBuilder {
        return new ValidateXmlRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new MobileAppsRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceAppManagement/mobileApps{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * The mobile apps.
     * @param MobileAppsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?MobileAppsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to mobileApps for deviceAppManagement
     * @param MobileApp $body 
     * @param MobileAppsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPostRequestInformation(MobileApp $body, ?MobileAppsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->setContentFromScalar($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * The mobile apps.
     * @param MobileAppsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?MobileAppsRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [MobileAppCollectionResponse::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the getMobileAppCount method.
     * @param string $status Usage: status='{status}'
     * @return GetMobileAppCountWithStatusRequestBuilder
    */
    public function getMobileAppCountWithStatus(string $status): GetMobileAppCountWithStatusRequestBuilder {
        return new GetMobileAppCountWithStatusRequestBuilder($this->pathParameters, $this->requestAdapter, $status);
    }

    /**
     * Provides operations to call the getTopMobileApps method.
     * @param int $count Usage: count={count}
     * @param string $status Usage: status='{status}'
     * @return GetTopMobileAppsWithStatusWithCountRequestBuilder
    */
    public function getTopMobileAppsWithStatusWithCount(int $count, string $status): GetTopMobileAppsWithStatusWithCountRequestBuilder {
        return new GetTopMobileAppsWithStatusWithCountRequestBuilder($this->pathParameters, $this->requestAdapter, $count, $status);
    }

    /**
     * Create new navigation property to mobileApps for deviceAppManagement
     * @param MobileApp $body 
     * @param MobileAppsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function post(MobileApp $body, ?MobileAppsRequestBuilderPostRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [MobileApp::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
