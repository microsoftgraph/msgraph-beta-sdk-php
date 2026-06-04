<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\TermsAndConditions\Item\GroupAssignments\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\TermsAndConditions\Item\GroupAssignments\Item\TermsAndConditions\TermsAndConditionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\TermsAndConditionsGroupAssignment;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the groupAssignments property of the microsoft.graph.termsAndConditions entity.
*/
class TermsAndConditionsGroupAssignmentItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the termsAndConditions property of the microsoft.graph.termsAndConditionsGroupAssignment entity.
    */
    public function termsAndConditions(): TermsAndConditionsRequestBuilder {
        return new TermsAndConditionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new TermsAndConditionsGroupAssignmentItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/termsAndConditions/{termsAndConditions%2Did}/groupAssignments/{termsAndConditionsGroupAssignment%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property groupAssignments for deviceManagement
     * @param TermsAndConditionsGroupAssignmentItemRequestBuilderDele_18d168e3|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?TermsAndConditionsGroupAssignmentItemRequestBuilderDele_18d168e3 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The list of group assignments for this T&C policy.
     * @param TermsAndConditionsGroupAssignmentItemRequestBuilderGetR_f5153f09|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TermsAndConditionsGroupAssignment|null>
     * @throws Exception
    */
    public function get(?TermsAndConditionsGroupAssignmentItemRequestBuilderGetR_f5153f09 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TermsAndConditionsGroupAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property groupAssignments in deviceManagement
     * @param TermsAndConditionsGroupAssignment $body The request body
     * @param TermsAndConditionsGroupAssignmentItemRequestBuilderPatc_c390cdce|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TermsAndConditionsGroupAssignment|null>
     * @throws Exception
    */
    public function patch(TermsAndConditionsGroupAssignment $body, ?TermsAndConditionsGroupAssignmentItemRequestBuilderPatc_c390cdce $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TermsAndConditionsGroupAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property groupAssignments for deviceManagement
     * @param TermsAndConditionsGroupAssignmentItemRequestBuilderDele_18d168e3|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?TermsAndConditionsGroupAssignmentItemRequestBuilderDele_18d168e3 $requestConfiguration = null): RequestInformation {
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
     * The list of group assignments for this T&C policy.
     * @param TermsAndConditionsGroupAssignmentItemRequestBuilderGetR_f5153f09|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TermsAndConditionsGroupAssignmentItemRequestBuilderGetR_f5153f09 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/termsAndConditions/{termsAndConditions%2Did}/groupAssignments/{termsAndConditionsGroupAssignment%2Did}{?%24expand,%24select}';
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
     * Update the navigation property groupAssignments in deviceManagement
     * @param TermsAndConditionsGroupAssignment $body The request body
     * @param TermsAndConditionsGroupAssignmentItemRequestBuilderPatc_c390cdce|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(TermsAndConditionsGroupAssignment $body, ?TermsAndConditionsGroupAssignmentItemRequestBuilderPatc_c390cdce $requestConfiguration = null): RequestInformation {
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
     * @return TermsAndConditionsGroupAssignmentItemRequestBuilder
    */
    public function withUrl(string $rawUrl): TermsAndConditionsGroupAssignmentItemRequestBuilder {
        return new TermsAndConditionsGroupAssignmentItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
