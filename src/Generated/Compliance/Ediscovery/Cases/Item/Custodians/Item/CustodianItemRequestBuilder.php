<?php

namespace Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Custodians\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Custodians\Item\LastIndexOperation\LastIndexOperationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Custodians\Item\MicrosoftGraphEdiscoveryActivate\MicrosoftGraphEdiscoveryActivateRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Custodians\Item\MicrosoftGraphEdiscoveryApplyHold\MicrosoftGraphEdiscoveryApplyHoldRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Custodians\Item\MicrosoftGraphEdiscoveryRelease\MicrosoftGraphEdiscoveryReleaseRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Custodians\Item\MicrosoftGraphEdiscoveryRemoveHold\MicrosoftGraphEdiscoveryRemoveHoldRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Custodians\Item\MicrosoftGraphEdiscoveryUpdateIndex\MicrosoftGraphEdiscoveryUpdateIndexRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Custodians\Item\SiteSources\SiteSourcesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Custodians\Item\UnifiedGroupSources\UnifiedGroupSourcesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Custodians\Item\UserSources\UserSourcesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Ediscovery\Custodian;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the custodians property of the microsoft.graph.ediscovery.case entity.
*/
class CustodianItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the lastIndexOperation property of the microsoft.graph.ediscovery.dataSourceContainer entity.
    */
    public function lastIndexOperation(): LastIndexOperationRequestBuilder {
        return new LastIndexOperationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the activate method.
    */
    public function microsoftGraphEdiscoveryActivate(): MicrosoftGraphEdiscoveryActivateRequestBuilder {
        return new MicrosoftGraphEdiscoveryActivateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the applyHold method.
    */
    public function microsoftGraphEdiscoveryApplyHold(): MicrosoftGraphEdiscoveryApplyHoldRequestBuilder {
        return new MicrosoftGraphEdiscoveryApplyHoldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the release method.
    */
    public function microsoftGraphEdiscoveryRelease(): MicrosoftGraphEdiscoveryReleaseRequestBuilder {
        return new MicrosoftGraphEdiscoveryReleaseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removeHold method.
    */
    public function microsoftGraphEdiscoveryRemoveHold(): MicrosoftGraphEdiscoveryRemoveHoldRequestBuilder {
        return new MicrosoftGraphEdiscoveryRemoveHoldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateIndex method.
    */
    public function microsoftGraphEdiscoveryUpdateIndex(): MicrosoftGraphEdiscoveryUpdateIndexRequestBuilder {
        return new MicrosoftGraphEdiscoveryUpdateIndexRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the siteSources property of the microsoft.graph.ediscovery.custodian entity.
    */
    public function siteSources(): SiteSourcesRequestBuilder {
        return new SiteSourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the unifiedGroupSources property of the microsoft.graph.ediscovery.custodian entity.
    */
    public function unifiedGroupSources(): UnifiedGroupSourcesRequestBuilder {
        return new UnifiedGroupSourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userSources property of the microsoft.graph.ediscovery.custodian entity.
    */
    public function userSources(): UserSourcesRequestBuilder {
        return new UserSourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CustodianItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/compliance/ediscovery/cases/{case%2Did}/custodians/{custodian%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property custodians for compliance
     * @param CustodianItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?CustodianItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a custodian object.
     * @param CustodianItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Custodian|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/ediscovery-custodian-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?CustodianItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Custodian::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a custodian object.
     * @param Custodian $body The request body
     * @param CustodianItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Custodian|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/ediscovery-custodian-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(Custodian $body, ?CustodianItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Custodian::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property custodians for compliance
     * @param CustodianItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CustodianItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a custodian object.
     * @param CustodianItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CustodianItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a custodian object.
     * @param Custodian $body The request body
     * @param CustodianItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Custodian $body, ?CustodianItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CustodianItemRequestBuilder
    */
    public function withUrl(string $rawUrl): CustodianItemRequestBuilder {
        return new CustodianItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
