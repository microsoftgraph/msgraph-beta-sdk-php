<?php

namespace Microsoft\Graph\Beta\Generated\Security\ContentManagement\Repositories\Item\MicrosoftGraphSecurityContentManagementDisconnect;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\ContentManagement\RepositoryDisconnectResult;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the disconnect method.
*/
class MicrosoftGraphSecurityContentManagementDisconnectRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphSecurityContentManagementDisconnectRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/contentManagement/repositories/{contentManagementRepository%2Did}/microsoft.graph.security.contentManagement.disconnect');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Disconnect a repository. Always removes the connection on the Sentinel side.The provider credential is optional: when supplied, repository-side artifacts(the deployment identity and setup pipeline) are cleaned up on a best-effort basis;when omitted, or if cleanup fails, the connection is still removed and any repository-sideartifacts that could not be removed are reported in the result. Disconnecting without acredential does not stop the repository from pushing until its identity is removed.
     * @param DisconnectPostRequestBody $body The request body
     * @param MicrosoftGraphSecurityContentManagementDisconnectRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RepositoryDisconnectResult|null>
     * @throws Exception
    */
    public function post(DisconnectPostRequestBody $body, ?MicrosoftGraphSecurityContentManagementDisconnectRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RepositoryDisconnectResult::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Disconnect a repository. Always removes the connection on the Sentinel side.The provider credential is optional: when supplied, repository-side artifacts(the deployment identity and setup pipeline) are cleaned up on a best-effort basis;when omitted, or if cleanup fails, the connection is still removed and any repository-sideartifacts that could not be removed are reported in the result. Disconnecting without acredential does not stop the repository from pushing until its identity is removed.
     * @param DisconnectPostRequestBody $body The request body
     * @param MicrosoftGraphSecurityContentManagementDisconnectRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DisconnectPostRequestBody $body, ?MicrosoftGraphSecurityContentManagementDisconnectRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphSecurityContentManagementDisconnectRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphSecurityContentManagementDisconnectRequestBuilder {
        return new MicrosoftGraphSecurityContentManagementDisconnectRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
