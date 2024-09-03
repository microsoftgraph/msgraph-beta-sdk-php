<?php

namespace Microsoft\Graph\Beta\Generated\Security\Partner\SecurityScore\Requirements;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Partner\Security\SecurityRequirement;
use Microsoft\Graph\Beta\Generated\Models\Partner\Security\SecurityRequirementCollectionResponse;
use Microsoft\Graph\Beta\Generated\Security\Partner\SecurityScore\Requirements\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Partner\SecurityScore\Requirements\Item\SecurityRequirementItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the requirements property of the microsoft.graph.partner.security.partnerSecurityScore entity.
*/
class RequirementsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the requirements property of the microsoft.graph.partner.security.partnerSecurityScore entity.
     * @param string $securityRequirementId The unique identifier of securityRequirement
     * @return SecurityRequirementItemRequestBuilder
    */
    public function bySecurityRequirementId(string $securityRequirementId): SecurityRequirementItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['securityRequirement%2Did'] = $securityRequirementId;
        return new SecurityRequirementItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RequirementsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/partner/securityScore/requirements{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of securityRequirement objects and their properties.
     * @param RequirementsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SecurityRequirementCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/partner-security-partnersecurityscore-list-requirements?view=graph-rest-beta Find more info here
    */
    public function get(?RequirementsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SecurityRequirementCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to requirements for security
     * @param SecurityRequirement $body The request body
     * @param RequirementsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SecurityRequirement|null>
     * @throws Exception
    */
    public function post(SecurityRequirement $body, ?RequirementsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SecurityRequirement::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of securityRequirement objects and their properties.
     * @param RequirementsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RequirementsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to requirements for security
     * @param SecurityRequirement $body The request body
     * @param RequirementsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SecurityRequirement $body, ?RequirementsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RequirementsRequestBuilder
    */
    public function withUrl(string $rawUrl): RequirementsRequestBuilder {
        return new RequirementsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
