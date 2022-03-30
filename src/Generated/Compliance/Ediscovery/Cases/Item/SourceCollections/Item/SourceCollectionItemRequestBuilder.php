<?php

namespace Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\SourceCollections\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\SourceCollections\Item\AdditionalSources\AdditionalSourcesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\SourceCollections\Item\AdditionalSources\Item\DataSourceItemRequestBuilder as MicrosoftGraphBetaGeneratedComplianceEdiscoveryCasesItemSourceCollectionsItemAdditionalSourcesItemDataSourceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\SourceCollections\Item\AddToReviewSetOperation\AddToReviewSetOperationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\SourceCollections\Item\CustodianSources\CustodianSourcesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\SourceCollections\Item\CustodianSources\Item\DataSourceItemRequestBuilder as MicrosoftGraphBetaGeneratedComplianceEdiscoveryCasesItemSourceCollectionsItemCustodianSourcesItemDataSourceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\SourceCollections\Item\EstimateStatistics\EstimateStatisticsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\SourceCollections\Item\LastEstimateStatisticsOperation\LastEstimateStatisticsOperationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\SourceCollections\Item\NoncustodialSources\Item\NoncustodialDataSourceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\SourceCollections\Item\NoncustodialSources\NoncustodialSourcesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\SourceCollections\Item\PurgeData\PurgeDataRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Ediscovery\SourceCollection;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class SourceCollectionItemRequestBuilder 
{
    public function additionalSources(): AdditionalSourcesRequestBuilder {
        return new AdditionalSourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function addToReviewSetOperation(): AddToReviewSetOperationRequestBuilder {
        return new AddToReviewSetOperationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function custodianSources(): CustodianSourcesRequestBuilder {
        return new CustodianSourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function estimateStatistics(): EstimateStatisticsRequestBuilder {
        return new EstimateStatisticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function lastEstimateStatisticsOperation(): LastEstimateStatisticsOperationRequestBuilder {
        return new LastEstimateStatisticsOperationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function noncustodialSources(): NoncustodialSourcesRequestBuilder {
        return new NoncustodialSourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    public function purgeData(): PurgeDataRequestBuilder {
        return new PurgeDataRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.compliance.ediscovery.cases.item.sourceCollections.item.additionalSources.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedComplianceEdiscoveryCasesItemSourceCollectionsItemAdditionalSourcesItemDataSourceItemRequestBuilder
    */
    public function additionalSourcesById(string $id): MicrosoftGraphBetaGeneratedComplianceEdiscoveryCasesItemSourceCollectionsItemAdditionalSourcesItemDataSourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['dataSource_id'] = $id;
        return new MicrosoftGraphBetaGeneratedComplianceEdiscoveryCasesItemSourceCollectionsItemAdditionalSourcesItemDataSourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SourceCollectionItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/compliance/ediscovery/cases/{case_id}/sourceCollections/{sourceCollection_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property sourceCollections for compliance
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Returns a list of sourceCollection objects associated with this case.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property sourceCollections in compliance
     * @param SourceCollection $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(SourceCollection $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.compliance.ediscovery.cases.item.sourceCollections.item.custodianSources.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedComplianceEdiscoveryCasesItemSourceCollectionsItemCustodianSourcesItemDataSourceItemRequestBuilder
    */
    public function custodianSourcesById(string $id): MicrosoftGraphBetaGeneratedComplianceEdiscoveryCasesItemSourceCollectionsItemCustodianSourcesItemDataSourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['dataSource_id'] = $id;
        return new MicrosoftGraphBetaGeneratedComplianceEdiscoveryCasesItemSourceCollectionsItemCustodianSourcesItemDataSourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property sourceCollections for compliance
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Returns a list of sourceCollection objects associated with this case.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, SourceCollection::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.compliance.ediscovery.cases.item.sourceCollections.item.noncustodialSources.item collection
     * @param string $id Unique identifier of the item
     * @return NoncustodialDataSourceItemRequestBuilder
    */
    public function noncustodialSourcesById(string $id): NoncustodialDataSourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['noncustodialDataSource_id'] = $id;
        return new NoncustodialDataSourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property sourceCollections in compliance
     * @param SourceCollection $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(SourceCollection $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
