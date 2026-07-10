<?php

namespace Microsoft\Graph\Beta\Generated\Security\MicrosoftGraphSecurityGetHuntingSchema;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\HuntingSchemaResult;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getHuntingSchema method.
*/
class MicrosoftGraphSecurityGetHuntingSchemaRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphSecurityGetHuntingSchemaRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/microsoft.graph.security.getHuntingSchema()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the advanced hunting schema accessible to the signed-in user, including the tables and functions the user is authorized to query and invoke in advanced hunting with Microsoft Defender XDR. The returned schema reflects the user's effective permissions. Each user within a tenant may have a different effective schema depending on their role and access level. Common use cases include:
     * @param MicrosoftGraphSecurityGetHuntingSchemaRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<HuntingSchemaResult|null>
     * @throws Exception
    */
    public function get(?MicrosoftGraphSecurityGetHuntingSchemaRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [HuntingSchemaResult::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the advanced hunting schema accessible to the signed-in user, including the tables and functions the user is authorized to query and invoke in advanced hunting with Microsoft Defender XDR. The returned schema reflects the user's effective permissions. Each user within a tenant may have a different effective schema depending on their role and access level. Common use cases include:
     * @param MicrosoftGraphSecurityGetHuntingSchemaRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphSecurityGetHuntingSchemaRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphSecurityGetHuntingSchemaRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphSecurityGetHuntingSchemaRequestBuilder {
        return new MicrosoftGraphSecurityGetHuntingSchemaRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
