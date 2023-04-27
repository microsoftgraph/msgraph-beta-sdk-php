<?php

namespace Microsoft\Graph\Beta\Generated\InformationProtection;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\InformationProtection\Bitlocker\BitlockerRequestBuilder;
use Microsoft\Graph\Beta\Generated\InformationProtection\DataLossPreventionPolicies\DataLossPreventionPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\InformationProtection\DecryptBuffer\DecryptBufferRequestBuilder;
use Microsoft\Graph\Beta\Generated\InformationProtection\EncryptBuffer\EncryptBufferRequestBuilder;
use Microsoft\Graph\Beta\Generated\InformationProtection\Policy\PolicyRequestBuilder;
use Microsoft\Graph\Beta\Generated\InformationProtection\SensitivityLabels\SensitivityLabelsRequestBuilder;
use Microsoft\Graph\Beta\Generated\InformationProtection\SensitivityPolicySettings\SensitivityPolicySettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\InformationProtection\SignDigest\SignDigestRequestBuilder;
use Microsoft\Graph\Beta\Generated\InformationProtection\ThreatAssessmentRequests\ThreatAssessmentRequestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\InformationProtection\VerifySignature\VerifySignatureRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\InformationProtection;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the informationProtection singleton.
*/
class InformationProtectionRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the bitlocker property of the microsoft.graph.informationProtection entity.
    */
    public function bitlocker(): BitlockerRequestBuilder {
        return new BitlockerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the dataLossPreventionPolicies property of the microsoft.graph.informationProtection entity.
    */
    public function dataLossPreventionPolicies(): DataLossPreventionPoliciesRequestBuilder {
        return new DataLossPreventionPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the decryptBuffer method.
    */
    public function decryptBuffer(): DecryptBufferRequestBuilder {
        return new DecryptBufferRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the encryptBuffer method.
    */
    public function encryptBuffer(): EncryptBufferRequestBuilder {
        return new EncryptBufferRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the policy property of the microsoft.graph.informationProtection entity.
    */
    public function policy(): PolicyRequestBuilder {
        return new PolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sensitivityLabels property of the microsoft.graph.informationProtection entity.
    */
    public function sensitivityLabels(): SensitivityLabelsRequestBuilder {
        return new SensitivityLabelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sensitivityPolicySettings property of the microsoft.graph.informationProtection entity.
    */
    public function sensitivityPolicySettings(): SensitivityPolicySettingsRequestBuilder {
        return new SensitivityPolicySettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the signDigest method.
    */
    public function signDigest(): SignDigestRequestBuilder {
        return new SignDigestRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the threatAssessmentRequests property of the microsoft.graph.informationProtection entity.
    */
    public function threatAssessmentRequests(): ThreatAssessmentRequestsRequestBuilder {
        return new ThreatAssessmentRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the verifySignature method.
    */
    public function verifySignature(): VerifySignatureRequestBuilder {
        return new VerifySignatureRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new InformationProtectionRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/informationProtection{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get informationProtection
     * @param InformationProtectionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?InformationProtectionRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [InformationProtection::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update informationProtection
     * @param InformationProtection $body The request body
     * @param InformationProtectionRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(InformationProtection $body, ?InformationProtectionRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [InformationProtection::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get informationProtection
     * @param InformationProtectionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?InformationProtectionRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update informationProtection
     * @param InformationProtection $body The request body
     * @param InformationProtectionRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(InformationProtection $body, ?InformationProtectionRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
