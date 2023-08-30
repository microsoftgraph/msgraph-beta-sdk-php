<?php

namespace Microsoft\Graph\Beta\Generated\TrustFramework\KeySets\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\TrustFrameworkKeySet;
use Microsoft\Graph\Beta\Generated\TrustFramework\KeySets\Item\GenerateKey\GenerateKeyRequestBuilder;
use Microsoft\Graph\Beta\Generated\TrustFramework\KeySets\Item\GetActiveKey\GetActiveKeyRequestBuilder;
use Microsoft\Graph\Beta\Generated\TrustFramework\KeySets\Item\UploadCertificate\UploadCertificateRequestBuilder;
use Microsoft\Graph\Beta\Generated\TrustFramework\KeySets\Item\UploadPkcs12\UploadPkcs12RequestBuilder;
use Microsoft\Graph\Beta\Generated\TrustFramework\KeySets\Item\UploadSecret\UploadSecretRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the keySets property of the microsoft.graph.trustFramework entity.
*/
class TrustFrameworkKeySetItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the generateKey method.
    */
    public function generateKey(): GenerateKeyRequestBuilder {
        return new GenerateKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getActiveKey method.
    */
    public function getActiveKey(): GetActiveKeyRequestBuilder {
        return new GetActiveKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the uploadCertificate method.
    */
    public function uploadCertificate(): UploadCertificateRequestBuilder {
        return new UploadCertificateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the uploadPkcs12 method.
    */
    public function uploadPkcs12(): UploadPkcs12RequestBuilder {
        return new UploadPkcs12RequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the uploadSecret method.
    */
    public function uploadSecret(): UploadSecretRequestBuilder {
        return new UploadSecretRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new TrustFrameworkKeySetItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/trustFramework/keySets/{trustFrameworkKeySet%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a trustFrameworkKeySet.
     * @param TrustFrameworkKeySetItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/trustframeworkkeyset-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?TrustFrameworkKeySetItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Retrieve the properties and associations for a Trustframeworkkeyset.
     * @param TrustFrameworkKeySetItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/trustframeworkkeyset-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?TrustFrameworkKeySetItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [TrustFrameworkKeySet::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the properties of a trustFrameworkKeyset. This operation will replace the content of an existing keyset. Specifying the ID in the request payload is optional.
     * @param TrustFrameworkKeySet $body The request body
     * @param TrustFrameworkKeySetItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/trustframeworkkeyset-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(TrustFrameworkKeySet $body, ?TrustFrameworkKeySetItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [TrustFrameworkKeySet::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete a trustFrameworkKeySet.
     * @param TrustFrameworkKeySetItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?TrustFrameworkKeySetItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Retrieve the properties and associations for a Trustframeworkkeyset.
     * @param TrustFrameworkKeySetItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TrustFrameworkKeySetItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a trustFrameworkKeyset. This operation will replace the content of an existing keyset. Specifying the ID in the request payload is optional.
     * @param TrustFrameworkKeySet $body The request body
     * @param TrustFrameworkKeySetItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(TrustFrameworkKeySet $body, ?TrustFrameworkKeySetItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return TrustFrameworkKeySetItemRequestBuilder
    */
    public function withUrl(string $rawUrl): TrustFrameworkKeySetItemRequestBuilder {
        return new TrustFrameworkKeySetItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
