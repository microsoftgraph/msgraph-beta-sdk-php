<?php

namespace Microsoft\\Graph\\Beta\\Generated\Security\IncidentTasks\Item\MicrosoftGraphSecurityExecuteResponseAction;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the executeResponseAction method.
*/
class MicrosoftGraphSecurityExecuteResponseActionRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphSecurityExecuteResponseActionRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/incidentTasks/{incidentTask%2Did}/microsoft.graph.security.executeResponseAction');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Execute a remediation action on a Microsoft Defender XDR incident task. Only the following actionType values are supported for automated execution: collectInvestigationPackage, isolateDevice, unRestrictAppExecution, unIsolateDevice, restrictAppExecution, runAntiVirusScan, stopAndQuarantineFile, submitIocRule.
     * @param MicrosoftGraphSecurityExecuteResponseActionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-incidenttask-executeresponseaction?view=graph-rest-beta Find more info here
    */
    public function post(?MicrosoftGraphSecurityExecuteResponseActionRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Execute a remediation action on a Microsoft Defender XDR incident task. Only the following actionType values are supported for automated execution: collectInvestigationPackage, isolateDevice, unRestrictAppExecution, unIsolateDevice, restrictAppExecution, runAntiVirusScan, stopAndQuarantineFile, submitIocRule.
     * @param MicrosoftGraphSecurityExecuteResponseActionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?MicrosoftGraphSecurityExecuteResponseActionRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphSecurityExecuteResponseActionRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphSecurityExecuteResponseActionRequestBuilder {
        return new MicrosoftGraphSecurityExecuteResponseActionRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
