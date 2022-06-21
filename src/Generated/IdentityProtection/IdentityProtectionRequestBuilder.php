<?php

namespace Microsoft\Graph\Beta\Generated\IdentityProtection;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\IdentityProtection\RiskDetections\Item\RiskDetectionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityProtection\RiskDetections\RiskDetectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityProtection\RiskyServicePrincipals\Item\RiskyServicePrincipalItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityProtection\RiskyServicePrincipals\RiskyServicePrincipalsRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityProtection\RiskyUsers\Item\RiskyUserItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityProtection\RiskyUsers\RiskyUsersRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityProtection\ServicePrincipalRiskDetections\Item\ServicePrincipalRiskDetectionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityProtection\ServicePrincipalRiskDetections\ServicePrincipalRiskDetectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\IdentityProtectionRoot;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class IdentityProtectionRequestBuilder 
{
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The riskDetections property
    */
    public function riskDetections(): RiskDetectionsRequestBuilder {
        return new RiskDetectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The riskyServicePrincipals property
    */
    public function riskyServicePrincipals(): RiskyServicePrincipalsRequestBuilder {
        return new RiskyServicePrincipalsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The riskyUsers property
    */
    public function riskyUsers(): RiskyUsersRequestBuilder {
        return new RiskyUsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The servicePrincipalRiskDetections property
    */
    public function servicePrincipalRiskDetections(): ServicePrincipalRiskDetectionsRequestBuilder {
        return new ServicePrincipalRiskDetectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new IdentityProtectionRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/identityProtection{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get identityProtection
     * @param IdentityProtectionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?IdentityProtectionRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update identityProtection
     * @param IdentityProtectionRoot $body 
     * @param IdentityProtectionRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(IdentityProtectionRoot $body, ?IdentityProtectionRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * Get identityProtection
     * @param IdentityProtectionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?IdentityProtectionRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(IdentityProtectionRoot::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update identityProtection
     * @param IdentityProtectionRoot $body 
     * @param IdentityProtectionRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(IdentityProtectionRoot $body, ?IdentityProtectionRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.identityProtection.riskDetections.item collection
     * @param string $id Unique identifier of the item
     * @return RiskDetectionItemRequestBuilder
    */
    public function riskDetectionsById(string $id): RiskDetectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['riskDetection%2Did'] = $id;
        return new RiskDetectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.identityProtection.riskyServicePrincipals.item collection
     * @param string $id Unique identifier of the item
     * @return RiskyServicePrincipalItemRequestBuilder
    */
    public function riskyServicePrincipalsById(string $id): RiskyServicePrincipalItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['riskyServicePrincipal%2Did'] = $id;
        return new RiskyServicePrincipalItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.identityProtection.riskyUsers.item collection
     * @param string $id Unique identifier of the item
     * @return RiskyUserItemRequestBuilder
    */
    public function riskyUsersById(string $id): RiskyUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['riskyUser%2Did'] = $id;
        return new RiskyUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.identityProtection.servicePrincipalRiskDetections.item collection
     * @param string $id Unique identifier of the item
     * @return ServicePrincipalRiskDetectionItemRequestBuilder
    */
    public function servicePrincipalRiskDetectionsById(string $id): ServicePrincipalRiskDetectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['servicePrincipalRiskDetection%2Did'] = $id;
        return new ServicePrincipalRiskDetectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
