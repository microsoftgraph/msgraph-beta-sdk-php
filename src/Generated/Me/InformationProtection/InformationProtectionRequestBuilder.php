<?php

namespace Microsoft\Graph\Beta\Generated\Me\InformationProtection;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Me\InformationProtection\Bitlocker\BitlockerRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\InformationProtection\DataLossPreventionPolicies\DataLossPreventionPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\InformationProtection\DataLossPreventionPolicies\Item\DataLossPreventionPolicyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\InformationProtection\DecryptBuffer\DecryptBufferRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\InformationProtection\EncryptBuffer\EncryptBufferRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\InformationProtection\Policy\PolicyRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\InformationProtection\SensitivityLabels\Item\SensitivityLabelItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\InformationProtection\SensitivityLabels\SensitivityLabelsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\InformationProtection\SensitivityPolicySettings\SensitivityPolicySettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\InformationProtection\SignDigest\SignDigestRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\InformationProtection\ThreatAssessmentRequests\Item\ThreatAssessmentRequestItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\InformationProtection\ThreatAssessmentRequests\ThreatAssessmentRequestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\InformationProtection\VerifySignature\VerifySignatureRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\InformationProtection;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class InformationProtectionRequestBuilder 
{
    /**
     * The bitlocker property
    */
    public function bitlocker(): BitlockerRequestBuilder {
        return new BitlockerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The dataLossPreventionPolicies property
    */
    public function dataLossPreventionPolicies(): DataLossPreventionPoliciesRequestBuilder {
        return new DataLossPreventionPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The decryptBuffer property
    */
    public function decryptBuffer(): DecryptBufferRequestBuilder {
        return new DecryptBufferRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The encryptBuffer property
    */
    public function encryptBuffer(): EncryptBufferRequestBuilder {
        return new EncryptBufferRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The policy property
    */
    public function policy(): PolicyRequestBuilder {
        return new PolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The sensitivityLabels property
    */
    public function sensitivityLabels(): SensitivityLabelsRequestBuilder {
        return new SensitivityLabelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The sensitivityPolicySettings property
    */
    public function sensitivityPolicySettings(): SensitivityPolicySettingsRequestBuilder {
        return new SensitivityPolicySettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The signDigest property
    */
    public function signDigest(): SignDigestRequestBuilder {
        return new SignDigestRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The threatAssessmentRequests property
    */
    public function threatAssessmentRequests(): ThreatAssessmentRequestsRequestBuilder {
        return new ThreatAssessmentRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * The verifySignature property
    */
    public function verifySignature(): VerifySignatureRequestBuilder {
        return new VerifySignatureRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new InformationProtectionRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me/informationProtection{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property informationProtection for me
     * @param InformationProtectionRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?InformationProtectionRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Get informationProtection from me
     * @param InformationProtectionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?InformationProtectionRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property informationProtection in me
     * @param InformationProtection $body 
     * @param InformationProtectionRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(InformationProtection $body, ?InformationProtectionRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.informationProtection.dataLossPreventionPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return DataLossPreventionPolicyItemRequestBuilder
    */
    public function dataLossPreventionPoliciesById(string $id): DataLossPreventionPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['dataLossPreventionPolicy%2Did'] = $id;
        return new DataLossPreventionPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property informationProtection for me
     * @param InformationProtectionRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?InformationProtectionRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
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
     * Get informationProtection from me
     * @param InformationProtectionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?InformationProtectionRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(InformationProtection::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property informationProtection in me
     * @param InformationProtection $body 
     * @param InformationProtectionRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(InformationProtection $body, ?InformationProtectionRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.informationProtection.sensitivityLabels.item collection
     * @param string $id Unique identifier of the item
     * @return SensitivityLabelItemRequestBuilder
    */
    public function sensitivityLabelsById(string $id): SensitivityLabelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sensitivityLabel%2Did'] = $id;
        return new SensitivityLabelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.informationProtection.threatAssessmentRequests.item collection
     * @param string $id Unique identifier of the item
     * @return ThreatAssessmentRequestItemRequestBuilder
    */
    public function threatAssessmentRequestsById(string $id): ThreatAssessmentRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['threatAssessmentRequest%2Did'] = $id;
        return new ThreatAssessmentRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
