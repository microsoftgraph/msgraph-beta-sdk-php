<?php

namespace Microsoft\Graph\Beta\Generated\Education\Me\Assignments\Item\Publish;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\EducationAssignment;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the publish method.
*/
class PublishRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new PublishRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/me/assignments/{educationAssignment%2Did}/publish');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Change the status of an educationAssignment from its original draft status to the published status.  You can change the status from draft to scheduled if the assignment is scheduled for a future date.  Only a teacher in the class can make this call. When an assignment is in draft status, students will not see the assignment, nor will there be any submission objects. When you call this API, educationSubmission objects are created and the assignment appears in the student's list. The status of the assignment goes back to draft if there is any backend failure during publish process. To update the properties of a published assignment, see update an assignment. To update the properties of a published assignment, see update an assignment.
     * @param PublishRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationAssignment|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/educationassignment-publish?view=graph-rest-beta Find more info here
    */
    public function post(?PublishRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Change the status of an educationAssignment from its original draft status to the published status.  You can change the status from draft to scheduled if the assignment is scheduled for a future date.  Only a teacher in the class can make this call. When an assignment is in draft status, students will not see the assignment, nor will there be any submission objects. When you call this API, educationSubmission objects are created and the assignment appears in the student's list. The status of the assignment goes back to draft if there is any backend failure during publish process. To update the properties of a published assignment, see update an assignment. To update the properties of a published assignment, see update an assignment.
     * @param PublishRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?PublishRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return PublishRequestBuilder
    */
    public function withUrl(string $rawUrl): PublishRequestBuilder {
        return new PublishRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
