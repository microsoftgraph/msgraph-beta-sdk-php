<?php

namespace Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Operations\Item\MicrosoftGraphEdiscoveryCaseExportOperation;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Operations\Item\MicrosoftGraphEdiscoveryCaseExportOperation\ReviewSet\ReviewSetRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Ediscovery\CaseExportOperation;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Casts the previous resource to caseExportOperation.
*/
class MicrosoftGraphEdiscoveryCaseExportOperationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the reviewSet property of the microsoft.graph.ediscovery.caseExportOperation entity.
    */
    public function reviewSet(): ReviewSetRequestBuilder {
        return new ReviewSetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new MicrosoftGraphEdiscoveryCaseExportOperationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/compliance/ediscovery/cases/{case%2Did}/operations/{caseOperation%2Did}/microsoft.graph.ediscovery.caseExportOperation{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the item of type microsoft.graph.ediscovery.caseOperation as microsoft.graph.ediscovery.caseExportOperation
     * @param MicrosoftGraphEdiscoveryCaseExportOperationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CaseExportOperation|null>
     * @throws Exception
    */
    public function get(?MicrosoftGraphEdiscoveryCaseExportOperationRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CaseExportOperation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the item of type microsoft.graph.ediscovery.caseOperation as microsoft.graph.ediscovery.caseExportOperation
     * @param MicrosoftGraphEdiscoveryCaseExportOperationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphEdiscoveryCaseExportOperationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MicrosoftGraphEdiscoveryCaseExportOperationRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphEdiscoveryCaseExportOperationRequestBuilder {
        return new MicrosoftGraphEdiscoveryCaseExportOperationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
