<?php

namespace Microsoft\\Graph\\Beta\\Generated\AuditLogs\SignInEventsAppSummary\Item\Application;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\AuditLogs\SignInEventsAppSummary\Item\Application\Logo\LogoRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\Application;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the application property of the microsoft.graph.signInEventsAppActivity entity.
*/
class ApplicationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the media for the auditLogRoot entity.
    */
    public function logo(): LogoRequestBuilder {
        return new LogoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ApplicationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auditLogs/signInEventsAppSummary/{signInEventsAppActivity%2DappId}/application{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Represents an application registered in Microsoft Entra ID.
     * @param ApplicationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Application|null>
     * @throws Exception
    */
    public function get(?ApplicationRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Application::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Represents an application registered in Microsoft Entra ID.
     * @param ApplicationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ApplicationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ApplicationRequestBuilder
    */
    public function withUrl(string $rawUrl): ApplicationRequestBuilder {
        return new ApplicationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
