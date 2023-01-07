<?php

namespace Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Close\CloseRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Custodians\CustodiansRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Custodians\Item\CustodianItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\LegalHolds\Item\LegalHoldItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\LegalHolds\LegalHoldsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\NoncustodialDataSources\Item\NoncustodialDataSourceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\NoncustodialDataSources\NoncustodialDataSourcesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Operations\Item\CaseOperationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Reopen\ReopenRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\ReviewSets\Item\ReviewSetItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\ReviewSets\ReviewSetsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Settings\SettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\SourceCollections\Item\SourceCollectionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\SourceCollections\SourceCollectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Tags\Item\TagItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Tags\TagsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Ediscovery\EscapedCase;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class CaseItemRequestBuilder 
{
    /**
     * Provides operations to call the close method.
    */
    public function close(): CloseRequestBuilder {
        return new CloseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the custodians property of the microsoft.graph.ediscovery.case entity.
    */
    public function custodians(): CustodiansRequestBuilder {
        return new CustodiansRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the legalHolds property of the microsoft.graph.ediscovery.case entity.
    */
    public function legalHolds(): LegalHoldsRequestBuilder {
        return new LegalHoldsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the noncustodialDataSources property of the microsoft.graph.ediscovery.case entity.
    */
    public function noncustodialDataSources(): NoncustodialDataSourcesRequestBuilder {
        return new NoncustodialDataSourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the operations property of the microsoft.graph.ediscovery.case entity.
    */
    public function operations(): OperationsRequestBuilder {
        return new OperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to call the reopen method.
    */
    public function reopen(): ReopenRequestBuilder {
        return new ReopenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the reviewSets property of the microsoft.graph.ediscovery.case entity.
    */
    public function reviewSets(): ReviewSetsRequestBuilder {
        return new ReviewSetsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the settings property of the microsoft.graph.ediscovery.case entity.
    */
    public function settings(): SettingsRequestBuilder {
        return new SettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sourceCollections property of the microsoft.graph.ediscovery.case entity.
    */
    public function sourceCollections(): SourceCollectionsRequestBuilder {
        return new SourceCollectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tags property of the microsoft.graph.ediscovery.case entity.
    */
    public function tags(): TagsRequestBuilder {
        return new TagsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new CaseItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/compliance/ediscovery/cases/{case%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property cases for compliance
     * @param CaseItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?CaseItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Get cases from compliance
     * @param CaseItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?CaseItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
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
     * Update the navigation property cases in compliance
     * @param EscapedCase $body The request body
     * @param CaseItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(EscapedCase $body, ?CaseItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Provides operations to manage the custodians property of the microsoft.graph.ediscovery.case entity.
     * @param string $id Unique identifier of the item
     * @return CustodianItemRequestBuilder
    */
    public function custodiansById(string $id): CustodianItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['custodian%2Did'] = $id;
        return new CustodianItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property cases for compliance
     * @param CaseItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?CaseItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get cases from compliance
     * @param CaseItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?CaseItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EscapedCase::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the legalHolds property of the microsoft.graph.ediscovery.case entity.
     * @param string $id Unique identifier of the item
     * @return LegalHoldItemRequestBuilder
    */
    public function legalHoldsById(string $id): LegalHoldItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['legalHold%2Did'] = $id;
        return new LegalHoldItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the noncustodialDataSources property of the microsoft.graph.ediscovery.case entity.
     * @param string $id Unique identifier of the item
     * @return NoncustodialDataSourceItemRequestBuilder
    */
    public function noncustodialDataSourcesById(string $id): NoncustodialDataSourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['noncustodialDataSource%2Did'] = $id;
        return new NoncustodialDataSourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the operations property of the microsoft.graph.ediscovery.case entity.
     * @param string $id Unique identifier of the item
     * @return CaseOperationItemRequestBuilder
    */
    public function operationsById(string $id): CaseOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['caseOperation%2Did'] = $id;
        return new CaseOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property cases in compliance
     * @param EscapedCase $body The request body
     * @param CaseItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(EscapedCase $body, ?CaseItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EscapedCase::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the reviewSets property of the microsoft.graph.ediscovery.case entity.
     * @param string $id Unique identifier of the item
     * @return ReviewSetItemRequestBuilder
    */
    public function reviewSetsById(string $id): ReviewSetItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['reviewSet%2Did'] = $id;
        return new ReviewSetItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the sourceCollections property of the microsoft.graph.ediscovery.case entity.
     * @param string $id Unique identifier of the item
     * @return SourceCollectionItemRequestBuilder
    */
    public function sourceCollectionsById(string $id): SourceCollectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sourceCollection%2Did'] = $id;
        return new SourceCollectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the tags property of the microsoft.graph.ediscovery.case entity.
     * @param string $id Unique identifier of the item
     * @return TagItemRequestBuilder
    */
    public function tagsById(string $id): TagItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tag%2Did'] = $id;
        return new TagItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
