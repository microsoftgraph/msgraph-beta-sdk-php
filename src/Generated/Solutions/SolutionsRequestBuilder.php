<?php

namespace Microsoft\Graph\Beta\Generated\Solutions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\SolutionsRoot;
use Microsoft\Graph\Beta\Generated\Solutions\Approval\ApprovalRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\BackupRestoreRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\BookingBusinesses\BookingBusinessesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\BookingCurrencies\BookingCurrenciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\BusinessScenarios\BusinessScenariosRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\BusinessScenariosWithUniqueName\BusinessScenariosWithUniqueNameRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\VirtualEvents\VirtualEventsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the solutionsRoot singleton.
*/
class SolutionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the approval property of the microsoft.graph.solutionsRoot entity.
    */
    public function approval(): ApprovalRequestBuilder {
        return new ApprovalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the backupRestore property of the microsoft.graph.solutionsRoot entity.
    */
    public function backupRestore(): BackupRestoreRequestBuilder {
        return new BackupRestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the bookingBusinesses property of the microsoft.graph.solutionsRoot entity.
    */
    public function bookingBusinesses(): BookingBusinessesRequestBuilder {
        return new BookingBusinessesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the bookingCurrencies property of the microsoft.graph.solutionsRoot entity.
    */
    public function bookingCurrencies(): BookingCurrenciesRequestBuilder {
        return new BookingCurrenciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the businessScenarios property of the microsoft.graph.solutionsRoot entity.
    */
    public function businessScenarios(): BusinessScenariosRequestBuilder {
        return new BusinessScenariosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the virtualEvents property of the microsoft.graph.solutionsRoot entity.
    */
    public function virtualEvents(): VirtualEventsRequestBuilder {
        return new VirtualEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the businessScenarios property of the microsoft.graph.solutionsRoot entity.
     * @param string $uniqueName Alternate key of businessScenario
     * @return BusinessScenariosWithUniqueNameRequestBuilder
    */
    public function businessScenariosWithUniqueName(string $uniqueName): BusinessScenariosWithUniqueNameRequestBuilder {
        return new BusinessScenariosWithUniqueNameRequestBuilder($this->pathParameters, $this->requestAdapter, $uniqueName);
    }

    /**
     * Instantiates a new SolutionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get solutions
     * @param SolutionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SolutionsRoot|null>
     * @throws Exception
    */
    public function get(?SolutionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SolutionsRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update solutions
     * @param SolutionsRoot $body The request body
     * @param SolutionsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SolutionsRoot|null>
     * @throws Exception
    */
    public function patch(SolutionsRoot $body, ?SolutionsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SolutionsRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get solutions
     * @param SolutionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SolutionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update solutions
     * @param SolutionsRoot $body The request body
     * @param SolutionsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(SolutionsRoot $body, ?SolutionsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SolutionsRequestBuilder
    */
    public function withUrl(string $rawUrl): SolutionsRequestBuilder {
        return new SolutionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
