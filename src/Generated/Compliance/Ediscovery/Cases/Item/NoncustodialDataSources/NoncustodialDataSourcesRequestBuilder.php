<?php

namespace Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\NoncustodialDataSources;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\NoncustodialDataSources\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\NoncustodialDataSources\Item\NoncustodialDataSourceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\NoncustodialDataSources\MicrosoftGraphEdiscoveryApplyHold\MicrosoftGraphEdiscoveryApplyHoldRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\NoncustodialDataSources\MicrosoftGraphEdiscoveryRemoveHold\MicrosoftGraphEdiscoveryRemoveHoldRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Ediscovery\NoncustodialDataSource;
use Microsoft\Graph\Beta\Generated\Models\Ediscovery\NoncustodialDataSourceCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the noncustodialDataSources property of the microsoft.graph.ediscovery.case entity.
*/
class NoncustodialDataSourcesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the applyHold method.
    */
    public function microsoftGraphEdiscoveryApplyHold(): MicrosoftGraphEdiscoveryApplyHoldRequestBuilder {
        return new MicrosoftGraphEdiscoveryApplyHoldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removeHold method.
    */
    public function microsoftGraphEdiscoveryRemoveHold(): MicrosoftGraphEdiscoveryRemoveHoldRequestBuilder {
        return new MicrosoftGraphEdiscoveryRemoveHoldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the noncustodialDataSources property of the microsoft.graph.ediscovery.case entity.
     * @param string $noncustodialDataSourceId The unique identifier of noncustodialDataSource
     * @return NoncustodialDataSourceItemRequestBuilder
    */
    public function byNoncustodialDataSourceId(string $noncustodialDataSourceId): NoncustodialDataSourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['noncustodialDataSource%2Did'] = $noncustodialDataSourceId;
        return new NoncustodialDataSourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new NoncustodialDataSourcesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/compliance/ediscovery/cases/{case%2Did}/noncustodialDataSources{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the noncustodialDataSource objects and their properties.
     * @param NoncustodialDataSourcesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<NoncustodialDataSourceCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/ediscovery-noncustodialdatasource-list?view=graph-rest-beta Find more info here
    */
    public function get(?NoncustodialDataSourcesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [NoncustodialDataSourceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new noncustodialDataSource object.
     * @param NoncustodialDataSource $body The request body
     * @param NoncustodialDataSourcesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<NoncustodialDataSource|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/ediscovery-noncustodialdatasource-post?view=graph-rest-beta Find more info here
    */
    public function post(NoncustodialDataSource $body, ?NoncustodialDataSourcesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [NoncustodialDataSource::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the noncustodialDataSource objects and their properties.
     * @param NoncustodialDataSourcesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?NoncustodialDataSourcesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new noncustodialDataSource object.
     * @param NoncustodialDataSource $body The request body
     * @param NoncustodialDataSourcesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(NoncustodialDataSource $body, ?NoncustodialDataSourcesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return NoncustodialDataSourcesRequestBuilder
    */
    public function withUrl(string $rawUrl): NoncustodialDataSourcesRequestBuilder {
        return new NoncustodialDataSourcesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
