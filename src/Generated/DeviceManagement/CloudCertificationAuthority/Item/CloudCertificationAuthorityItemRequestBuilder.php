<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\ChangeCloudCertificationAuthorityStatus\ChangeCloudCertificationAuthorityStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\CloudCertificationAuthorityLeafCertificate\CloudCertificationAuthorityLeafCertificateRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\GetAllCloudCertificationAuthority\GetAllCloudCertificationAuthorityRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\GetAllCloudCertificationAuthorityLeafCertificates\GetAllCloudCertificationAuthorityLeafCertificatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\GetCloudCertificationAuthority\GetCloudCertificationAuthorityRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\PatchCloudCertificationAuthority\PatchCloudCertificationAuthorityRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\PostCloudCertificationAuthority\PostCloudCertificationAuthorityRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\RevokeCloudCertificationAuthorityCertificate\RevokeCloudCertificationAuthorityCertificateRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\RevokeLeafCertificate\RevokeLeafCertificateRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\UploadExternallySignedCertificationAuthorityCertificate\UploadExternallySignedCertificationAuthorityCertificateRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CloudCertificationAuthority;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the cloudCertificationAuthority property of the microsoft.graph.deviceManagement entity.
*/
class CloudCertificationAuthorityItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the changeCloudCertificationAuthorityStatus method.
    */
    public function changeCloudCertificationAuthorityStatus(): ChangeCloudCertificationAuthorityStatusRequestBuilder {
        return new ChangeCloudCertificationAuthorityStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cloudCertificationAuthorityLeafCertificate property of the microsoft.graph.cloudCertificationAuthority entity.
    */
    public function cloudCertificationAuthorityLeafCertificate(): CloudCertificationAuthorityLeafCertificateRequestBuilder {
        return new CloudCertificationAuthorityLeafCertificateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAllCloudCertificationAuthority method.
    */
    public function getAllCloudCertificationAuthority(): GetAllCloudCertificationAuthorityRequestBuilder {
        return new GetAllCloudCertificationAuthorityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAllCloudCertificationAuthorityLeafCertificates method.
    */
    public function getAllCloudCertificationAuthorityLeafCertificates(): GetAllCloudCertificationAuthorityLeafCertificatesRequestBuilder {
        return new GetAllCloudCertificationAuthorityLeafCertificatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCloudCertificationAuthority method.
    */
    public function getCloudCertificationAuthority(): GetCloudCertificationAuthorityRequestBuilder {
        return new GetCloudCertificationAuthorityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the patchCloudCertificationAuthority method.
    */
    public function patchCloudCertificationAuthority(): PatchCloudCertificationAuthorityRequestBuilder {
        return new PatchCloudCertificationAuthorityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the postCloudCertificationAuthority method.
    */
    public function postCloudCertificationAuthority(): PostCloudCertificationAuthorityRequestBuilder {
        return new PostCloudCertificationAuthorityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the revokeCloudCertificationAuthorityCertificate method.
    */
    public function revokeCloudCertificationAuthorityCertificate(): RevokeCloudCertificationAuthorityCertificateRequestBuilder {
        return new RevokeCloudCertificationAuthorityCertificateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the revokeLeafCertificate method.
    */
    public function revokeLeafCertificate(): RevokeLeafCertificateRequestBuilder {
        return new RevokeLeafCertificateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the uploadExternallySignedCertificationAuthorityCertificate method.
    */
    public function uploadExternallySignedCertificationAuthorityCertificate(): UploadExternallySignedCertificationAuthorityCertificateRequestBuilder {
        return new UploadExternallySignedCertificationAuthorityCertificateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CloudCertificationAuthorityItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/cloudCertificationAuthority/{cloudCertificationAuthority%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property cloudCertificationAuthority for deviceManagement
     * @param CloudCertificationAuthorityItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?CloudCertificationAuthorityItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Collection of CloudCertificationAuthority records associated with account.
     * @param CloudCertificationAuthorityItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudCertificationAuthority|null>
     * @throws Exception
    */
    public function get(?CloudCertificationAuthorityItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudCertificationAuthority::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property cloudCertificationAuthority in deviceManagement
     * @param CloudCertificationAuthority $body The request body
     * @param CloudCertificationAuthorityItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudCertificationAuthority|null>
     * @throws Exception
    */
    public function patch(CloudCertificationAuthority $body, ?CloudCertificationAuthorityItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudCertificationAuthority::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property cloudCertificationAuthority for deviceManagement
     * @param CloudCertificationAuthorityItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CloudCertificationAuthorityItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Collection of CloudCertificationAuthority records associated with account.
     * @param CloudCertificationAuthorityItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CloudCertificationAuthorityItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property cloudCertificationAuthority in deviceManagement
     * @param CloudCertificationAuthority $body The request body
     * @param CloudCertificationAuthorityItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CloudCertificationAuthority $body, ?CloudCertificationAuthorityItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CloudCertificationAuthorityItemRequestBuilder
    */
    public function withUrl(string $rawUrl): CloudCertificationAuthorityItemRequestBuilder {
        return new CloudCertificationAuthorityItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
