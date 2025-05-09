<?php

namespace Microsoft\Graph\Beta\Generated\CertificateAuthorities\CertificateBasedApplicationConfigurations;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\CertificateAuthorities\CertificateBasedApplicationConfigurations\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\CertificateAuthorities\CertificateBasedApplicationConfigurations\Item\CertificateBasedApplicationConfigurationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CertificateBasedApplicationConfiguration;
use Microsoft\Graph\Beta\Generated\Models\CertificateBasedApplicationConfigurationCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the certificateBasedApplicationConfigurations property of the microsoft.graph.certificateAuthorityPath entity.
*/
class CertificateBasedApplicationConfigurationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the certificateBasedApplicationConfigurations property of the microsoft.graph.certificateAuthorityPath entity.
     * @param string $certificateBasedApplicationConfigurationId The unique identifier of certificateBasedApplicationConfiguration
     * @return CertificateBasedApplicationConfigurationItemRequestBuilder
    */
    public function byCertificateBasedApplicationConfigurationId(string $certificateBasedApplicationConfigurationId): CertificateBasedApplicationConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['certificateBasedApplicationConfiguration%2Did'] = $certificateBasedApplicationConfigurationId;
        return new CertificateBasedApplicationConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CertificateBasedApplicationConfigurationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/certificateAuthorities/certificateBasedApplicationConfigurations{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Defines the trusted certificate authorities for certificates that can be added to apps and service principals in the tenant.
     * @param CertificateBasedApplicationConfigurationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CertificateBasedApplicationConfigurationCollectionResponse|null>
     * @throws Exception
    */
    public function get(?CertificateBasedApplicationConfigurationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CertificateBasedApplicationConfigurationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to certificateBasedApplicationConfigurations for certificateAuthorities
     * @param CertificateBasedApplicationConfiguration $body The request body
     * @param CertificateBasedApplicationConfigurationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CertificateBasedApplicationConfiguration|null>
     * @throws Exception
    */
    public function post(CertificateBasedApplicationConfiguration $body, ?CertificateBasedApplicationConfigurationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CertificateBasedApplicationConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Defines the trusted certificate authorities for certificates that can be added to apps and service principals in the tenant.
     * @param CertificateBasedApplicationConfigurationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CertificateBasedApplicationConfigurationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to certificateBasedApplicationConfigurations for certificateAuthorities
     * @param CertificateBasedApplicationConfiguration $body The request body
     * @param CertificateBasedApplicationConfigurationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CertificateBasedApplicationConfiguration $body, ?CertificateBasedApplicationConfigurationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CertificateBasedApplicationConfigurationsRequestBuilder
    */
    public function withUrl(string $rawUrl): CertificateBasedApplicationConfigurationsRequestBuilder {
        return new CertificateBasedApplicationConfigurationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
