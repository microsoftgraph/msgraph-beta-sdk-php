<?php

namespace Microsoft\Graph\Beta\Generated\PrivilegedSignupStatus;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
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
        parent::__construct($requestAdapter, [], '{+baseurl}/privilegedSignupStatus{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get entities from privilegedSignupStatus
     * @param PrivilegedSignupStatusRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?PrivilegedSignupStatusRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [PrivilegedSignupStatusCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Add new entity to privilegedSignupStatus
     * @param PrivilegedSignupStatus $body The request body
     * @param PrivilegedSignupStatusRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function post(PrivilegedSignupStatus $body, ?PrivilegedSignupStatusRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [PrivilegedSignupStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
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
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
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
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
