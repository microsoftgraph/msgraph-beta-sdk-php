<?php

namespace Microsoft\Graph\Beta\Generated\Admin\CloudLicensing;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\CloudLicensing\Allotments\AllotmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\CloudLicensing\AssignmentErrors\AssignmentErrorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\CloudLicensing\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CloudLicensing\AdminCloudLicensing;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the cloudLicensing property of the microsoft.graph.admin entity.
*/
class CloudLicensingRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the allotments property of the microsoft.graph.cloudLicensing.adminCloudLicensing entity.
    */
    public function allotments(): AllotmentsRequestBuilder {
        return new AllotmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignmentErrors property of the microsoft.graph.cloudLicensing.adminCloudLicensing entity.
    */
    public function assignmentErrors(): AssignmentErrorsRequestBuilder {
        return new AssignmentErrorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.cloudLicensing.adminCloudLicensing entity.
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CloudLicensingRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/cloudLicensing{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property cloudLicensing for admin
     * @param CloudLicensingRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?CloudLicensingRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The root of the cloud licensing API for the entire organization. Read-only.
     * @param CloudLicensingRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AdminCloudLicensing|null>
     * @throws Exception
    */
    public function get(?CloudLicensingRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AdminCloudLicensing::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property cloudLicensing in admin
     * @param AdminCloudLicensing $body The request body
     * @param CloudLicensingRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AdminCloudLicensing|null>
     * @throws Exception
    */
    public function patch(AdminCloudLicensing $body, ?CloudLicensingRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AdminCloudLicensing::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property cloudLicensing for admin
     * @param CloudLicensingRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CloudLicensingRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The root of the cloud licensing API for the entire organization. Read-only.
     * @param CloudLicensingRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CloudLicensingRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property cloudLicensing in admin
     * @param AdminCloudLicensing $body The request body
     * @param CloudLicensingRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AdminCloudLicensing $body, ?CloudLicensingRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CloudLicensingRequestBuilder
    */
    public function withUrl(string $rawUrl): CloudLicensingRequestBuilder {
        return new CloudLicensingRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
