<?php

namespace Microsoft\Graph\Beta\Generated\Directory\CertificateAuthorities\CertificateBasedApplicationConfigurations\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Directory\CertificateAuthorities\CertificateBasedApplicationConfigurations\Item\TrustedCertificateAuthorities\TrustedCertificateAuthoritiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CertificateBasedApplicationConfiguration;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the certificateBasedApplicationConfigurations property of the microsoft.graph.certificateAuthorityPath entity.
*/
class CertificateBasedApplicationConfigurationItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the trustedCertificateAuthorities property of the microsoft.graph.trustedCertificateAuthorityAsEntityBase entity.
    */
    public function trustedCertificateAuthorities(): TrustedCertificateAuthoritiesRequestBuilder {
        return new TrustedCertificateAuthoritiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CertificateBasedApplicationConfigurationItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/certificateAuthorities/certificateBasedApplicationConfigurations/{certificateBasedApplicationConfiguration%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete the properties and relationships of a certificateBasedApplicationConfiguration object.
     * @param CertificateBasedApplicationConfigurationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/certificatebasedapplicationconfiguration-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?CertificateBasedApplicationConfigurationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a certificateBasedApplicationConfiguration object.
     * @param CertificateBasedApplicationConfigurationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CertificateBasedApplicationConfiguration|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/certificatebasedapplicationconfiguration-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?CertificateBasedApplicationConfigurationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CertificateBasedApplicationConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a certificateBasedApplicationConfiguration object. To update the trustedCertificateAuthorities within a certificateBasedApplicationConfiguration object, use the Update certificateAuthorityAsEntity operation.
     * @param CertificateBasedApplicationConfiguration $body The request body
     * @param CertificateBasedApplicationConfigurationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CertificateBasedApplicationConfiguration|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/certificatebasedapplicationconfiguration-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(CertificateBasedApplicationConfiguration $body, ?CertificateBasedApplicationConfigurationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CertificateBasedApplicationConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete the properties and relationships of a certificateBasedApplicationConfiguration object.
     * @param CertificateBasedApplicationConfigurationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CertificateBasedApplicationConfigurationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Read the properties and relationships of a certificateBasedApplicationConfiguration object.
     * @param CertificateBasedApplicationConfigurationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CertificateBasedApplicationConfigurationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a certificateBasedApplicationConfiguration object. To update the trustedCertificateAuthorities within a certificateBasedApplicationConfiguration object, use the Update certificateAuthorityAsEntity operation.
     * @param CertificateBasedApplicationConfiguration $body The request body
     * @param CertificateBasedApplicationConfigurationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CertificateBasedApplicationConfiguration $body, ?CertificateBasedApplicationConfigurationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return CertificateBasedApplicationConfigurationItemRequestBuilder
    */
    public function withUrl(string $rawUrl): CertificateBasedApplicationConfigurationItemRequestBuilder {
        return new CertificateBasedApplicationConfigurationItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
