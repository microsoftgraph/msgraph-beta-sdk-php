<?php

namespace Microsoft\Graph\Beta\Generated\TrustFramework\KeySets\Item\UploadSecret;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\TrustFrameworkKey;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the uploadSecret method.
*/
class UploadSecretRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UploadSecretRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/trustFramework/keySets/{trustFrameworkKeySet%2Did}/uploadSecret');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Upload a plain text secret to a trustFrameworkKeyset. Examples of secrets are application secrets in Microsoft Entra ID, Google, Facebook, or any other identity provider. his method returns trustFrameworkKey.
     * @param UploadSecretPostRequestBody $body The request body
     * @param UploadSecretRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TrustFrameworkKey|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/trustframeworkkeyset-uploadsecret?view=graph-rest-beta Find more info here
    */
    public function post(UploadSecretPostRequestBody $body, ?UploadSecretRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TrustFrameworkKey::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Upload a plain text secret to a trustFrameworkKeyset. Examples of secrets are application secrets in Microsoft Entra ID, Google, Facebook, or any other identity provider. his method returns trustFrameworkKey.
     * @param UploadSecretPostRequestBody $body The request body
     * @param UploadSecretRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UploadSecretPostRequestBody $body, ?UploadSecretRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UploadSecretRequestBuilder
    */
    public function withUrl(string $rawUrl): UploadSecretRequestBuilder {
        return new UploadSecretRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
