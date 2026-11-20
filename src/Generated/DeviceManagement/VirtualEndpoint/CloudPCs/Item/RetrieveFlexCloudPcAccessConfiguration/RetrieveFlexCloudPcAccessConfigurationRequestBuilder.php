<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\RetrieveFlexCloudPcAccessConfiguration;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CloudPcFlexAccessConfiguration;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the retrieveFlexCloudPcAccessConfiguration method.
*/
class RetrieveFlexCloudPcAccessConfigurationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RetrieveFlexCloudPcAccessConfigurationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/cloudPCs/{cloudPC%2Did}/retrieveFlexCloudPcAccessConfiguration()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the current access configuration of a Windows 365 Flex (formerly Windows 365 Frontline) Cloud PC. The cloudPcFlexAccessConfiguration response contains the live accessState of the Cloud PC. Use the /me endpoint to retrieve the access configuration of a Cloud PC that belongs to the signed-in user. An administrator or application can use the /deviceManagement/virtualEndpoint endpoint to retrieve the access configuration of a targeted Cloud PC.
     * @param RetrieveFlexCloudPcAccessConfigurationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcFlexAccessConfiguration|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpc-retrieveflexcloudpcaccessconfiguration?view=graph-rest-beta Find more info here
    */
    public function get(?RetrieveFlexCloudPcAccessConfigurationRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcFlexAccessConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the current access configuration of a Windows 365 Flex (formerly Windows 365 Frontline) Cloud PC. The cloudPcFlexAccessConfiguration response contains the live accessState of the Cloud PC. Use the /me endpoint to retrieve the access configuration of a Cloud PC that belongs to the signed-in user. An administrator or application can use the /deviceManagement/virtualEndpoint endpoint to retrieve the access configuration of a targeted Cloud PC.
     * @param RetrieveFlexCloudPcAccessConfigurationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RetrieveFlexCloudPcAccessConfigurationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return RetrieveFlexCloudPcAccessConfigurationRequestBuilder
    */
    public function withUrl(string $rawUrl): RetrieveFlexCloudPcAccessConfigurationRequestBuilder {
        return new RetrieveFlexCloudPcAccessConfigurationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
