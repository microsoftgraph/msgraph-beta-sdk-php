<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\OnlineMeetingsWithJoinWebUrl;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\OnlineMeeting;
use Microsoft\Graph\Beta\Generated\Users\Item\OnlineMeetingsWithJoinWebUrl\GetVirtualAppointmentJoinWebUrl\GetVirtualAppointmentJoinWebUrlRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\OnlineMeetingsWithJoinWebUrl\SendVirtualAppointmentReminderSms\SendVirtualAppointmentReminderSmsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\OnlineMeetingsWithJoinWebUrl\SendVirtualAppointmentSms\SendVirtualAppointmentSmsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the onlineMeetings property of the microsoft.graph.user entity.
*/
class OnlineMeetingsWithJoinWebUrlRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the getVirtualAppointmentJoinWebUrl method.
    */
    public function getVirtualAppointmentJoinWebUrl(): GetVirtualAppointmentJoinWebUrlRequestBuilder {
        return new GetVirtualAppointmentJoinWebUrlRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sendVirtualAppointmentReminderSms method.
    */
    public function sendVirtualAppointmentReminderSms(): SendVirtualAppointmentReminderSmsRequestBuilder {
        return new SendVirtualAppointmentReminderSmsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sendVirtualAppointmentSms method.
    */
    public function sendVirtualAppointmentSms(): SendVirtualAppointmentSmsRequestBuilder {
        return new SendVirtualAppointmentSmsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new OnlineMeetingsWithJoinWebUrlRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $joinWebUrl Alternate key of onlineMeeting
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $joinWebUrl = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/onlineMeetings(joinWebUrl=\'{joinWebUrl}\'){?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['joinWebUrl'] = $joinWebUrl;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete an onlineMeeting object.
     * @param OnlineMeetingsWithJoinWebUrlRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/onlinemeeting-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?OnlineMeetingsWithJoinWebUrlRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Information about a meeting, including the URL used to join a meeting, the attendees list, and the description.
     * @param OnlineMeetingsWithJoinWebUrlRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OnlineMeeting|null>
     * @throws Exception
    */
    public function get(?OnlineMeetingsWithJoinWebUrlRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OnlineMeeting::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of the specified onlineMeeting object. Please see Request body section for the list of properties that support updating.
     * @param OnlineMeeting $body The request body
     * @param OnlineMeetingsWithJoinWebUrlRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OnlineMeeting|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/onlinemeeting-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(OnlineMeeting $body, ?OnlineMeetingsWithJoinWebUrlRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OnlineMeeting::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete an onlineMeeting object.
     * @param OnlineMeetingsWithJoinWebUrlRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?OnlineMeetingsWithJoinWebUrlRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Information about a meeting, including the URL used to join a meeting, the attendees list, and the description.
     * @param OnlineMeetingsWithJoinWebUrlRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OnlineMeetingsWithJoinWebUrlRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of the specified onlineMeeting object. Please see Request body section for the list of properties that support updating.
     * @param OnlineMeeting $body The request body
     * @param OnlineMeetingsWithJoinWebUrlRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(OnlineMeeting $body, ?OnlineMeetingsWithJoinWebUrlRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return OnlineMeetingsWithJoinWebUrlRequestBuilder
    */
    public function withUrl(string $rawUrl): OnlineMeetingsWithJoinWebUrlRequestBuilder {
        return new OnlineMeetingsWithJoinWebUrlRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
