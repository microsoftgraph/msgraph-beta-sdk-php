<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Deployments\Item\Audience\UpdateAudienceById;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class UpdateAudienceByIdRequestBuilder 
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
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new UpdateAudienceByIdRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/admin/windows/updates/deployments/{deployment%2Did}/audience/microsoft.graph.windowsUpdates.updateAudienceById';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Update the members and exclusions collections of a deploymentAudience with updatableAsset resources of the same type. Adding an azureADDevice to the members or exclusions collections of a deployment audience automatically creates an Azure AD device object if it does not already exist. If the same updatableAsset gets included in the **exclusions** and **members** collections of a **deploymentAudience**, deployment will not apply to that asset. You can also use the method updateAudience to update the **deploymentAudience**.
     * @param UpdateAudienceByIdPostRequestBody $body 
     * @param UpdateAudienceByIdRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPostRequestInformation(UpdateAudienceByIdPostRequestBody $body, ?UpdateAudienceByIdRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * Update the members and exclusions collections of a deploymentAudience with updatableAsset resources of the same type. Adding an azureADDevice to the members or exclusions collections of a deployment audience automatically creates an Azure AD device object if it does not already exist. If the same updatableAsset gets included in the **exclusions** and **members** collections of a **deploymentAudience**, deployment will not apply to that asset. You can also use the method updateAudience to update the **deploymentAudience**.
     * @param UpdateAudienceByIdPostRequestBody $body 
     * @param UpdateAudienceByIdRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function post(UpdateAudienceByIdPostRequestBody $body, ?UpdateAudienceByIdRequestBuilderPostRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPostRequestInformation($body, $requestConfiguration);
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

}
