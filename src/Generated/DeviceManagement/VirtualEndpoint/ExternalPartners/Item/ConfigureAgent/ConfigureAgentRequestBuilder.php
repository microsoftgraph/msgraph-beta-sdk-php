<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ExternalPartners\Item\ConfigureAgent;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the configureAgent method.
*/
class ConfigureAgentRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ConfigureAgentRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/externalPartners/{cloudPcExternalPartner%2Did}/configureAgent');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Configure the cloudPcExternalPartnerAgentSetting of the cloudPcExternalPartner object. This setting is used for RMM partner agent installation. RMM partners must contact the Microsoft team to complete onboarding and add the agent URL prefix to the allow list before using this API. If autoDeploymentEnabled is enabled, the new provisioned Cloud PC is triggered agent deployment automatically. Currently supports only Windows 365 Business Cloud PC.
     * @param ConfigureAgentPostRequestBody $body The request body
     * @param ConfigureAgentRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpcexternalpartner-configureagent?view=graph-rest-beta Find more info here
    */
    public function post(ConfigureAgentPostRequestBody $body, ?ConfigureAgentRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Configure the cloudPcExternalPartnerAgentSetting of the cloudPcExternalPartner object. This setting is used for RMM partner agent installation. RMM partners must contact the Microsoft team to complete onboarding and add the agent URL prefix to the allow list before using this API. If autoDeploymentEnabled is enabled, the new provisioned Cloud PC is triggered agent deployment automatically. Currently supports only Windows 365 Business Cloud PC.
     * @param ConfigureAgentPostRequestBody $body The request body
     * @param ConfigureAgentRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ConfigureAgentPostRequestBody $body, ?ConfigureAgentRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ConfigureAgentRequestBuilder
    */
    public function withUrl(string $rawUrl): ConfigureAgentRequestBuilder {
        return new ConfigureAgentRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
