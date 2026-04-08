<?php

namespace Microsoft\Graph\Beta\Generated\Directory\TenantGovernance\GovernancePolicyTemplates;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Directory\TenantGovernance\GovernancePolicyTemplates\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\TenantGovernance\GovernancePolicyTemplates\Item\GovernancePolicyTemplateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\TenantGovernanceServices\GovernancePolicyTemplate;
use Microsoft\Graph\Beta\Generated\Models\TenantGovernanceServices\GovernancePolicyTemplateCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the governancePolicyTemplates property of the microsoft.graph.tenantGovernanceServices.tenantGovernance entity.
*/
class GovernancePolicyTemplatesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the governancePolicyTemplates property of the microsoft.graph.tenantGovernanceServices.tenantGovernance entity.
     * @param string $governancePolicyTemplateId The unique identifier of governancePolicyTemplate
     * @return GovernancePolicyTemplateItemRequestBuilder
    */
    public function byGovernancePolicyTemplateId(string $governancePolicyTemplateId): GovernancePolicyTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governancePolicyTemplate%2Did'] = $governancePolicyTemplateId;
        return new GovernancePolicyTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new GovernancePolicyTemplatesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/tenantGovernance/governancePolicyTemplates{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the governancePolicyTemplate objects and their properties. Policy templates define the configuration that is applied when establishing governance relationships.
     * @param GovernancePolicyTemplatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GovernancePolicyTemplateCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/tenantgovernanceservices-list-governancepolicytemplates?view=graph-rest-beta Find more info here
    */
    public function get(?GovernancePolicyTemplatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GovernancePolicyTemplateCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new governancePolicyTemplate that defines the configuration for establishing governance relationships, including role assignments and applications to provision.
     * @param GovernancePolicyTemplate $body The request body
     * @param GovernancePolicyTemplatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GovernancePolicyTemplate|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/tenantgovernanceservices-post-governancepolicytemplates?view=graph-rest-beta Find more info here
    */
    public function post(GovernancePolicyTemplate $body, ?GovernancePolicyTemplatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GovernancePolicyTemplate::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the governancePolicyTemplate objects and their properties. Policy templates define the configuration that is applied when establishing governance relationships.
     * @param GovernancePolicyTemplatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GovernancePolicyTemplatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new governancePolicyTemplate that defines the configuration for establishing governance relationships, including role assignments and applications to provision.
     * @param GovernancePolicyTemplate $body The request body
     * @param GovernancePolicyTemplatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GovernancePolicyTemplate $body, ?GovernancePolicyTemplatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GovernancePolicyTemplatesRequestBuilder
    */
    public function withUrl(string $rawUrl): GovernancePolicyTemplatesRequestBuilder {
        return new GovernancePolicyTemplatesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
