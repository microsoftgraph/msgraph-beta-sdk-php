<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Outlook;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\OutlookUser;
use Microsoft\Graph\Beta\Generated\Users\Item\Outlook\MasterCategories\MasterCategoriesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Outlook\SupportedLanguages\SupportedLanguagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Outlook\SupportedTimeZones\SupportedTimeZonesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Outlook\SupportedTimeZonesWithTimeZoneStandard\SupportedTimeZonesWithTimeZoneStandardRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Outlook\TaskFolders\TaskFoldersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Outlook\TaskGroups\TaskGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Outlook\Tasks\TasksRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the outlook property of the microsoft.graph.user entity.
*/
class OutlookRequestBuilder 
{
    /**
     * Provides operations to manage the masterCategories property of the microsoft.graph.outlookUser entity.
    */
    public function masterCategories(): MasterCategoriesRequestBuilder {
        return new MasterCategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to call the supportedLanguages method.
    */
    public function supportedLanguages(): SupportedLanguagesRequestBuilder {
        return new SupportedLanguagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the supportedTimeZones method.
    */
    public function supportedTimeZones(): SupportedTimeZonesRequestBuilder {
        return new SupportedTimeZonesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the taskFolders property of the microsoft.graph.outlookUser entity.
    */
    public function taskFolders(): TaskFoldersRequestBuilder {
        return new TaskFoldersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the taskGroups property of the microsoft.graph.outlookUser entity.
    */
    public function taskGroups(): TaskGroupsRequestBuilder {
        return new TaskGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tasks property of the microsoft.graph.outlookUser entity.
    */
    public function tasks(): TasksRequestBuilder {
        return new TasksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new OutlookRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/users/{user%2Did}/outlook{?%24select}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Selective Outlook services available to the user. Read-only. Nullable.
     * @param OutlookRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?OutlookRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [OutlookUser::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the supportedTimeZones method.
     * @param string $timeZoneStandard Usage: TimeZoneStandard='{TimeZoneStandard}'
     * @return SupportedTimeZonesWithTimeZoneStandardRequestBuilder
    */
    public function supportedTimeZonesWithTimeZoneStandard(string $timeZoneStandard): SupportedTimeZonesWithTimeZoneStandardRequestBuilder {
        return new SupportedTimeZonesWithTimeZoneStandardRequestBuilder($this->pathParameters, $this->requestAdapter, $timeZoneStandard);
    }

    /**
     * Selective Outlook services available to the user. Read-only. Nullable.
     * @param OutlookRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OutlookRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

}
