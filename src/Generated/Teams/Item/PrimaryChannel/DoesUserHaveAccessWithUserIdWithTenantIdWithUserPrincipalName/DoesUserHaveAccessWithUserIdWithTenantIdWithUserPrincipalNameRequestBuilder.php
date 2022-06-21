<?php

namespace Microsoft\Graph\Beta\Generated\Teams\Item\PrimaryChannel\DoesUserHaveAccessWithUserIdWithTenantIdWithUserPrincipalName;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DoesUserHaveAccessWithUserIdWithTenantIdWithUserPrincipalNameRequestBuilder 
{
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new DoesUserHaveAccessWithUserIdWithTenantIdWithUserPrincipalNameRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $tenantId Usage: tenantId='{tenantId}'
     * @param string|null $userId Usage: userId='{userId}'
     * @param string|null $userPrincipalName Usage: userPrincipalName='{userPrincipalName}'
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter, ?string $tenantId = null, ?string $userId = null, ?string $userPrincipalName = null) {
        $this->urlTemplate = '{+baseurl}/teams/{team_id}/primaryChannel/microsoft.graph.doesUserHaveAccess(userId=\'{userId}\',tenantId=\'{tenantId}\',userPrincipalName=\'{userPrincipalName}\')';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
        $urlTplParams = $pathParameters;
        $urlTplParams['tenantId'] = $tenantId;
        $urlTplParams['userId'] = $userId;
        $urlTplParams['userPrincipalName'] = $userPrincipalName;
        $this->pathParameters = array_merge($this->pathParameters, $urlTplParams);
    }

    /**
     * Invoke function doesUserHaveAccess
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Invoke function doesUserHaveAccess
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, DoesUserHaveAccessWithUserIdWithTenantIdWithUserPrincipalNameResponse::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
