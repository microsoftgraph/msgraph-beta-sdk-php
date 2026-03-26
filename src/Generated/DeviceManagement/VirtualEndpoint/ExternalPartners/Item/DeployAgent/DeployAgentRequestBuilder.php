<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ExternalPartners\Item\DeployAgent;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the deployAgent method.
*/
class DeployAgentRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DeployAgentRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/externalPartners/{cloudPcExternalPartner%2Did}/deployAgent');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Trigger agent deployment for a set of Windows 365 Cloud PCs that are provisioned, and return an activity ID. This API is supported when the connection is enabled and the agent setting is configured. Currently, only support Windows 365 business Cloud PC.
     * @param DeployAgentPostRequestBody $body The request body
     * @param DeployAgentRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeployAgentPostResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpcexternalpartner-deployagent?view=graph-rest-beta Find more info here
    */
    public function post(DeployAgentPostRequestBody $body, ?DeployAgentRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeployAgentPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Trigger agent deployment for a set of Windows 365 Cloud PCs that are provisioned, and return an activity ID. This API is supported when the connection is enabled and the agent setting is configured. Currently, only support Windows 365 business Cloud PC.
     * @param DeployAgentPostRequestBody $body The request body
     * @param DeployAgentRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeployAgentPostRequestBody $body, ?DeployAgentRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeployAgentRequestBuilder
    */
    public function withUrl(string $rawUrl): DeployAgentRequestBuilder {
        return new DeployAgentRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
