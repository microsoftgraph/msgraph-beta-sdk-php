<?php

namespace Microsoft\Graph\Beta\Generated\Reports\CredentialUserRegistrationDetails;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CredentialUserRegistrationDetails;
use Microsoft\Graph\Beta\Generated\Models\CredentialUserRegistrationDetailsCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Reports\CredentialUserRegistrationDetails\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\CredentialUserRegistrationDetails\Item\CredentialUserRegistrationDetailsItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the credentialUserRegistrationDetails property of the microsoft.graph.reportRoot entity.
*/
class CredentialUserRegistrationDetailsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the credentialUserRegistrationDetails property of the microsoft.graph.reportRoot entity.
     * @param string $credentialUserRegistrationDetailsId The unique identifier of credentialUserRegistrationDetails
     * @return CredentialUserRegistrationDetailsItemRequestBuilder
    */
    public function byCredentialUserRegistrationDetailsId(string $credentialUserRegistrationDetailsId): CredentialUserRegistrationDetailsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['credentialUserRegistrationDetails%2Did'] = $credentialUserRegistrationDetailsId;
        return new CredentialUserRegistrationDetailsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CredentialUserRegistrationDetailsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/credentialUserRegistrationDetails{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of credentialUserRegistrationDetails objects for a given tenant.
     * @param CredentialUserRegistrationDetailsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CredentialUserRegistrationDetailsCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/reportroot-list-credentialuserregistrationdetails?view=graph-rest-1.0 Find more info here
    */
    public function get(?CredentialUserRegistrationDetailsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CredentialUserRegistrationDetailsCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to credentialUserRegistrationDetails for reports
     * @param CredentialUserRegistrationDetails $body The request body
     * @param CredentialUserRegistrationDetailsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CredentialUserRegistrationDetails|null>
     * @throws Exception
    */
    public function post(CredentialUserRegistrationDetails $body, ?CredentialUserRegistrationDetailsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CredentialUserRegistrationDetails::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of credentialUserRegistrationDetails objects for a given tenant.
     * @param CredentialUserRegistrationDetailsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CredentialUserRegistrationDetailsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to credentialUserRegistrationDetails for reports
     * @param CredentialUserRegistrationDetails $body The request body
     * @param CredentialUserRegistrationDetailsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CredentialUserRegistrationDetails $body, ?CredentialUserRegistrationDetailsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CredentialUserRegistrationDetailsRequestBuilder
    */
    public function withUrl(string $rawUrl): CredentialUserRegistrationDetailsRequestBuilder {
        return new CredentialUserRegistrationDetailsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
