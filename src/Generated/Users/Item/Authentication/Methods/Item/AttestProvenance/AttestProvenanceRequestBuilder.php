<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Authentication\Methods\Item\AttestProvenance;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CredentialProvenance;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the attestProvenance method.
*/
class AttestProvenanceRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AttestProvenanceRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/authentication/methods/{authenticationMethod%2Did}/attestProvenance');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Apply an administrative attestation to the credential provenance of an authenticationMethod. Credential provenance is currently supported for FIDO2 authentication methods. Classification, actor information, and timestamps are managed by the service and aren't request parameters.
     * @param AttestProvenancePostRequestBody $body The request body
     * @param AttestProvenanceRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CredentialProvenance|null>
     * @throws Exception
    */
    public function post(AttestProvenancePostRequestBody $body, ?AttestProvenanceRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CredentialProvenance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Apply an administrative attestation to the credential provenance of an authenticationMethod. Credential provenance is currently supported for FIDO2 authentication methods. Classification, actor information, and timestamps are managed by the service and aren't request parameters.
     * @param AttestProvenancePostRequestBody $body The request body
     * @param AttestProvenanceRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AttestProvenancePostRequestBody $body, ?AttestProvenanceRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AttestProvenanceRequestBuilder
    */
    public function withUrl(string $rawUrl): AttestProvenanceRequestBuilder {
        return new AttestProvenanceRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
