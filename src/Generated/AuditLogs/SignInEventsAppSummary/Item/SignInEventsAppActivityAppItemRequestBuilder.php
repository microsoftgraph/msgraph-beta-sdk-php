<?php

namespace Microsoft\Graph\Beta\Generated\AuditLogs\SignInEventsAppSummary\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\AuditLogs\SignInEventsAppSummary\Item\Application\ApplicationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\SignInEventsAppActivity;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the signInEventsAppSummary property of the microsoft.graph.auditLogRoot entity.
*/
class SignInEventsAppActivityAppItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the application property of the microsoft.graph.signInEventsAppActivity entity.
    */
    public function application(): ApplicationRequestBuilder {
        return new ApplicationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new SignInEventsAppActivityAppItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auditLogs/signInEventsAppSummary/{signInEventsAppActivity%2DappId}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property signInEventsAppSummary for auditLogs
     * @param SignInEventsAppActivityAppItemRequestBuilderDeleteReque_0e62ff5b|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?SignInEventsAppActivityAppItemRequestBuilderDeleteReque_0e62ff5b $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Represents the number of sign-in events for a specific application.
     * @param SignInEventsAppActivityAppItemRequestBuilderGetRequestC_eae4649a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SignInEventsAppActivity|null>
     * @throws Exception
    */
    public function get(?SignInEventsAppActivityAppItemRequestBuilderGetRequestC_eae4649a $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SignInEventsAppActivity::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property signInEventsAppSummary in auditLogs
     * @param SignInEventsAppActivity $body The request body
     * @param SignInEventsAppActivityAppItemRequestBuilderPatchReques_1290e517|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SignInEventsAppActivity|null>
     * @throws Exception
    */
    public function patch(SignInEventsAppActivity $body, ?SignInEventsAppActivityAppItemRequestBuilderPatchReques_1290e517 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SignInEventsAppActivity::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property signInEventsAppSummary for auditLogs
     * @param SignInEventsAppActivityAppItemRequestBuilderDeleteReque_0e62ff5b|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?SignInEventsAppActivityAppItemRequestBuilderDeleteReque_0e62ff5b $requestConfiguration = null): RequestInformation {
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
     * Represents the number of sign-in events for a specific application.
     * @param SignInEventsAppActivityAppItemRequestBuilderGetRequestC_eae4649a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SignInEventsAppActivityAppItemRequestBuilderGetRequestC_eae4649a $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property signInEventsAppSummary in auditLogs
     * @param SignInEventsAppActivity $body The request body
     * @param SignInEventsAppActivityAppItemRequestBuilderPatchReques_1290e517|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(SignInEventsAppActivity $body, ?SignInEventsAppActivityAppItemRequestBuilderPatchReques_1290e517 $requestConfiguration = null): RequestInformation {
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
     * @return SignInEventsAppActivityAppItemRequestBuilder
    */
    public function withUrl(string $rawUrl): SignInEventsAppActivityAppItemRequestBuilder {
        return new SignInEventsAppActivityAppItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
