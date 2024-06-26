<?php

namespace Microsoft\Graph\Beta\Generated\PrivilegedSignupStatus;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\PrivilegedSignupStatus;
use Microsoft\Graph\Beta\Generated\Models\PrivilegedSignupStatusCollectionResponse;
use Microsoft\Graph\Beta\Generated\PrivilegedSignupStatus\CanSignUp\CanSignUpRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedSignupStatus\CompleteSetup\CompleteSetupRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedSignupStatus\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedSignupStatus\IsSignedUp\IsSignedUpRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedSignupStatus\Item\PrivilegedSignupStatusItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedSignupStatus\SignUp\SignUpRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collection of privilegedSignupStatus entities.
*/
class PrivilegedSignupStatusRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the canSignUp method.
    */
    public function canSignUp(): CanSignUpRequestBuilder {
        return new CanSignUpRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the completeSetup method.
    */
    public function completeSetup(): CompleteSetupRequestBuilder {
        return new CompleteSetupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isSignedUp method.
    */
    public function isSignedUp(): IsSignedUpRequestBuilder {
        return new IsSignedUpRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the signUp method.
    */
    public function signUp(): SignUpRequestBuilder {
        return new SignUpRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of privilegedSignupStatus entities.
     * @param string $privilegedSignupStatusId The unique identifier of privilegedSignupStatus
     * @return PrivilegedSignupStatusItemRequestBuilder
    */
    public function byPrivilegedSignupStatusId(string $privilegedSignupStatusId): PrivilegedSignupStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['privilegedSignupStatus%2Did'] = $privilegedSignupStatusId;
        return new PrivilegedSignupStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PrivilegedSignupStatusRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/privilegedSignupStatus{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get entities from privilegedSignupStatus
     * @param PrivilegedSignupStatusRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PrivilegedSignupStatusCollectionResponse|null>
     * @throws Exception
    */
    public function get(?PrivilegedSignupStatusRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PrivilegedSignupStatusCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Add new entity to privilegedSignupStatus
     * @param PrivilegedSignupStatus $body The request body
     * @param PrivilegedSignupStatusRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PrivilegedSignupStatus|null>
     * @throws Exception
    */
    public function post(PrivilegedSignupStatus $body, ?PrivilegedSignupStatusRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PrivilegedSignupStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get entities from privilegedSignupStatus
     * @param PrivilegedSignupStatusRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PrivilegedSignupStatusRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Add new entity to privilegedSignupStatus
     * @param PrivilegedSignupStatus $body The request body
     * @param PrivilegedSignupStatusRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PrivilegedSignupStatus $body, ?PrivilegedSignupStatusRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PrivilegedSignupStatusRequestBuilder
    */
    public function withUrl(string $rawUrl): PrivilegedSignupStatusRequestBuilder {
        return new PrivilegedSignupStatusRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
