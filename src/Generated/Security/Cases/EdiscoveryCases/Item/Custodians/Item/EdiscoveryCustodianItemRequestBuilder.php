<?php

namespace Microsoft\Graph\Beta\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\EdiscoveryCustodian;
use Microsoft\Graph\Beta\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\LastIndexOperation\LastIndexOperationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\SecurityActivate\SecurityActivateRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\SecurityApplyHold\SecurityApplyHoldRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\SecurityRelease\SecurityReleaseRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\SecurityRemoveHold\SecurityRemoveHoldRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\SecurityUpdateIndex\SecurityUpdateIndexRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\SiteSources\Item\SiteSourceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\SiteSources\SiteSourcesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\UnifiedGroupSources\Item\UnifiedGroupSourceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\UnifiedGroupSources\UnifiedGroupSourcesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\UserSources\Item\UserSourceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\UserSources\UserSourcesRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to manage the custodians property of the microsoft.graph.security.ediscoveryCase entity.
*/
class EdiscoveryCustodianItemRequestBuilder 
{
    /**
     * Provides operations to manage the lastIndexOperation property of the microsoft.graph.security.ediscoveryCustodian entity.
    */
    public function lastIndexOperation(): LastIndexOperationRequestBuilder {
        return new LastIndexOperationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to call the activate method.
    */
    public function securityActivate(): SecurityActivateRequestBuilder {
        return new SecurityActivateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the applyHold method.
    */
    public function securityApplyHold(): SecurityApplyHoldRequestBuilder {
        return new SecurityApplyHoldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the release method.
    */
    public function securityRelease(): SecurityReleaseRequestBuilder {
        return new SecurityReleaseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removeHold method.
    */
    public function securityRemoveHold(): SecurityRemoveHoldRequestBuilder {
        return new SecurityRemoveHoldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateIndex method.
    */
    public function securityUpdateIndex(): SecurityUpdateIndexRequestBuilder {
        return new SecurityUpdateIndexRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the siteSources property of the microsoft.graph.security.ediscoveryCustodian entity.
    */
    public function siteSources(): SiteSourcesRequestBuilder {
        return new SiteSourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the unifiedGroupSources property of the microsoft.graph.security.ediscoveryCustodian entity.
    */
    public function unifiedGroupSources(): UnifiedGroupSourcesRequestBuilder {
        return new UnifiedGroupSourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the userSources property of the microsoft.graph.security.ediscoveryCustodian entity.
    */
    public function userSources(): UserSourcesRequestBuilder {
        return new UserSourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new EdiscoveryCustodianItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/security/cases/ediscoveryCases/{ediscoveryCase%2Did}/custodians/{ediscoveryCustodian%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property custodians for security
     * @param EdiscoveryCustodianItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?EdiscoveryCustodianItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Returns a list of case ediscoveryCustodian objects for this case.
     * @param EdiscoveryCustodianItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?EdiscoveryCustodianItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EdiscoveryCustodian::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property custodians in security
     * @param EdiscoveryCustodian $body The request body
     * @param EdiscoveryCustodianItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(EdiscoveryCustodian $body, ?EdiscoveryCustodianItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EdiscoveryCustodian::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the siteSources property of the microsoft.graph.security.ediscoveryCustodian entity.
     * @param string $id Unique identifier of the item
     * @return SiteSourceItemRequestBuilder
    */
    public function siteSourcesById(string $id): SiteSourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['siteSource%2Did'] = $id;
        return new SiteSourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property custodians for security
     * @param EdiscoveryCustodianItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?EdiscoveryCustodianItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Returns a list of case ediscoveryCustodian objects for this case.
     * @param EdiscoveryCustodianItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EdiscoveryCustodianItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property custodians in security
     * @param EdiscoveryCustodian $body The request body
     * @param EdiscoveryCustodianItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(EdiscoveryCustodian $body, ?EdiscoveryCustodianItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Provides operations to manage the unifiedGroupSources property of the microsoft.graph.security.ediscoveryCustodian entity.
     * @param string $id Unique identifier of the item
     * @return UnifiedGroupSourceItemRequestBuilder
    */
    public function unifiedGroupSourcesById(string $id): UnifiedGroupSourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedGroupSource%2Did'] = $id;
        return new UnifiedGroupSourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the userSources property of the microsoft.graph.security.ediscoveryCustodian entity.
     * @param string $id Unique identifier of the item
     * @return UserSourceItemRequestBuilder
    */
    public function userSourcesById(string $id): UserSourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userSource%2Did'] = $id;
        return new UserSourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
