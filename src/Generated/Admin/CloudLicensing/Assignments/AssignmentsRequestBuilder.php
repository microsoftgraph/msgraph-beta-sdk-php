<?php

namespace Microsoft\Graph\Beta\Generated\Admin\CloudLicensing\Assignments;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\CloudLicensing\Assignments\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\CloudLicensing\Assignments\Item\AssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\CloudLicensing\Assignments\MicrosoftGraphCloudLicensingReprocessAssignments\MicrosoftGraphCloudLicensingReprocessAssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CloudLicensing\Assignment;
use Microsoft\Graph\Beta\Generated\Models\CloudLicensing\AssignmentCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the assignments property of the microsoft.graph.cloudLicensing.adminCloudLicensing entity.
*/
class AssignmentsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reprocessAssignments method.
    */
    public function microsoftGraphCloudLicensingReprocessAssignments(): MicrosoftGraphCloudLicensingReprocessAssignmentsRequestBuilder {
        return new MicrosoftGraphCloudLicensingReprocessAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.cloudLicensing.adminCloudLicensing entity.
     * @param string $assignmentId The unique identifier of assignment
     * @return AssignmentItemRequestBuilder
    */
    public function byAssignmentId(string $assignmentId): AssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['assignment%2Did'] = $assignmentId;
        return new AssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AssignmentsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/cloudLicensing/assignments{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of license assignment objects within an organization.
     * @param AssignmentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AssignmentCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudlicensing-admincloudlicensing-list-assignments?view=graph-rest-beta Find more info here
    */
    public function get(?AssignmentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AssignmentCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new license assignment by posting to the assignments collection of an organization. An assignment must always have a direct relationship to an allotment and to a user or group. If an assignment is created by posting to the central assignments collection located at /admin/cloudLicensing/assignments, both of those relationships must be established in the request body. Assignments can also be created by posting to the assignments collection of an allotment, the assignments collection of a user or the assignments collection of a group.
     * @param Assignment $body The request body
     * @param AssignmentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Assignment|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudlicensing-admincloudlicensing-post-assignments?view=graph-rest-beta Find more info here
    */
    public function post(Assignment $body, ?AssignmentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Assignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of license assignment objects within an organization.
     * @param AssignmentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AssignmentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new license assignment by posting to the assignments collection of an organization. An assignment must always have a direct relationship to an allotment and to a user or group. If an assignment is created by posting to the central assignments collection located at /admin/cloudLicensing/assignments, both of those relationships must be established in the request body. Assignments can also be created by posting to the assignments collection of an allotment, the assignments collection of a user or the assignments collection of a group.
     * @param Assignment $body The request body
     * @param AssignmentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(Assignment $body, ?AssignmentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AssignmentsRequestBuilder
    */
    public function withUrl(string $rawUrl): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
