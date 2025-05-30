<?php

namespace Microsoft\Graph\Beta\Generated\Education\Classes\Item\AssignmentSettings;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Education\Classes\Item\AssignmentSettings\DefaultGradingScheme\DefaultGradingSchemeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\Classes\Item\AssignmentSettings\GradingCategories\GradingCategoriesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\Classes\Item\AssignmentSettings\GradingSchemes\GradingSchemesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\EducationAssignmentSettings;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the assignmentSettings property of the microsoft.graph.educationClass entity.
*/
class AssignmentSettingsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the defaultGradingScheme property of the microsoft.graph.educationAssignmentSettings entity.
    */
    public function defaultGradingScheme(): DefaultGradingSchemeRequestBuilder {
        return new DefaultGradingSchemeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the gradingCategories property of the microsoft.graph.educationAssignmentSettings entity.
    */
    public function gradingCategories(): GradingCategoriesRequestBuilder {
        return new GradingCategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the gradingSchemes property of the microsoft.graph.educationAssignmentSettings entity.
    */
    public function gradingSchemes(): GradingSchemesRequestBuilder {
        return new GradingSchemesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AssignmentSettingsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/classes/{educationClass%2Did}/assignmentSettings{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property assignmentSettings for education
     * @param AssignmentSettingsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?AssignmentSettingsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of an educationAssignmentSettings object. Only teachers can perform this operation.
     * @param AssignmentSettingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationAssignmentSettings|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/educationassignmentsettings-get?view=graph-rest-beta Find more info here
    */
    public function get(?AssignmentSettingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationAssignmentSettings::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of an educationAssignmentSettings object. Only teachers can update these settings.
     * @param EducationAssignmentSettings $body The request body
     * @param AssignmentSettingsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationAssignmentSettings|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/educationassignmentsettings-update?view=graph-rest-beta Find more info here
    */
    public function patch(EducationAssignmentSettings $body, ?AssignmentSettingsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationAssignmentSettings::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property assignmentSettings for education
     * @param AssignmentSettingsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AssignmentSettingsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Read the properties and relationships of an educationAssignmentSettings object. Only teachers can perform this operation.
     * @param AssignmentSettingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AssignmentSettingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of an educationAssignmentSettings object. Only teachers can update these settings.
     * @param EducationAssignmentSettings $body The request body
     * @param AssignmentSettingsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(EducationAssignmentSettings $body, ?AssignmentSettingsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AssignmentSettingsRequestBuilder
    */
    public function withUrl(string $rawUrl): AssignmentSettingsRequestBuilder {
        return new AssignmentSettingsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
