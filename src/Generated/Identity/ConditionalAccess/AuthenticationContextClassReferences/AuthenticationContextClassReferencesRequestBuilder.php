<?php

namespace Microsoft\Graph\Beta\Generated\Identity\ConditionalAccess\AuthenticationContextClassReferences;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Identity\ConditionalAccess\AuthenticationContextClassReferences\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Identity\ConditionalAccess\AuthenticationContextClassReferences\Item\AuthenticationContextClassReferenceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\AuthenticationContextClassReference;
use Microsoft\Graph\Beta\Generated\Models\AuthenticationContextClassReferenceCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the authenticationContextClassReferences property of the microsoft.graph.conditionalAccessRoot entity.
*/
class AuthenticationContextClassReferencesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the authenticationContextClassReferences property of the microsoft.graph.conditionalAccessRoot entity.
     * @param string $authenticationContextClassReferenceId The unique identifier of authenticationContextClassReference
     * @return AuthenticationContextClassReferenceItemRequestBuilder
    */
    public function byAuthenticationContextClassReferenceId(string $authenticationContextClassReferenceId): AuthenticationContextClassReferenceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['authenticationContextClassReference%2Did'] = $authenticationContextClassReferenceId;
        return new AuthenticationContextClassReferenceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AuthenticationContextClassReferencesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/conditionalAccess/authenticationContextClassReferences{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of authenticationContextClassReference objects.
     * @param AuthenticationContextClassReferencesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationContextClassReferenceCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/conditionalaccessroot-list-authenticationcontextclassreferences?view=graph-rest-beta Find more info here
    */
    public function get(?AuthenticationContextClassReferencesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationContextClassReferenceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new authenticationContextClassReference.
     * @param AuthenticationContextClassReference $body The request body
     * @param AuthenticationContextClassReferencesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationContextClassReference|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/conditionalaccessroot-post-authenticationcontextclassreferences?view=graph-rest-beta Find more info here
    */
    public function post(AuthenticationContextClassReference $body, ?AuthenticationContextClassReferencesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationContextClassReference::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of authenticationContextClassReference objects.
     * @param AuthenticationContextClassReferencesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AuthenticationContextClassReferencesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new authenticationContextClassReference.
     * @param AuthenticationContextClassReference $body The request body
     * @param AuthenticationContextClassReferencesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AuthenticationContextClassReference $body, ?AuthenticationContextClassReferencesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AuthenticationContextClassReferencesRequestBuilder
    */
    public function withUrl(string $rawUrl): AuthenticationContextClassReferencesRequestBuilder {
        return new AuthenticationContextClassReferencesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
