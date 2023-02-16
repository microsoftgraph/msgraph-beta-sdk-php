<?php

namespace Microsoft\Graph\Beta\Generated\Me\Outlook;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Me\Outlook\MasterCategories\Item\OutlookCategoryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Outlook\MasterCategories\MasterCategoriesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Outlook\MicrosoftGraphSupportedLanguages\MicrosoftGraphSupportedLanguagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Outlook\MicrosoftGraphSupportedTimeZones\MicrosoftGraphSupportedTimeZonesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Outlook\MicrosoftGraphSupportedTimeZonesWithTimeZoneStandard\MicrosoftGraphSupportedTimeZonesWithTimeZoneStandardRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Outlook\TaskFolders\Item\OutlookTaskFolderItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Outlook\TaskFolders\TaskFoldersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Outlook\TaskGroups\Item\OutlookTaskGroupItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Outlook\TaskGroups\TaskGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Outlook\Tasks\Item\OutlookTaskItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Outlook\Tasks\TasksRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\OutlookUser;
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
     * Provides operations to call the supportedLanguages method.
    */
    public function microsoftGraphSupportedLanguages(): MicrosoftGraphSupportedLanguagesRequestBuilder {
        return new MicrosoftGraphSupportedLanguagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the supportedTimeZones method.
    */
    public function microsoftGraphSupportedTimeZones(): MicrosoftGraphSupportedTimeZonesRequestBuilder {
        return new MicrosoftGraphSupportedTimeZonesRequestBuilder($this->pathParameters, $this->requestAdapter);
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
        $this->urlTemplate = '{+baseurl}/me/outlook{?%24select}';
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
     * Provides operations to manage the masterCategories property of the microsoft.graph.outlookUser entity.
     * @param string $id Unique identifier of the item
     * @return OutlookCategoryItemRequestBuilder
    */
    public function masterCategoriesById(string $id): OutlookCategoryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['outlookCategory%2Did'] = $id;
        return new OutlookCategoryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to call the supportedTimeZones method.
     * @param string $timeZoneStandard Usage: TimeZoneStandard='{TimeZoneStandard}'
     * @return MicrosoftGraphSupportedTimeZonesWithTimeZoneStandardRequestBuilder
    */
    public function microsoftGraphSupportedTimeZonesWithTimeZoneStandard(string $timeZoneStandard): MicrosoftGraphSupportedTimeZonesWithTimeZoneStandardRequestBuilder {
        return new MicrosoftGraphSupportedTimeZonesWithTimeZoneStandardRequestBuilder($this->pathParameters, $this->requestAdapter, $timeZoneStandard);
    }

    /**
     * Provides operations to manage the taskFolders property of the microsoft.graph.outlookUser entity.
     * @param string $id Unique identifier of the item
     * @return OutlookTaskFolderItemRequestBuilder
    */
    public function taskFoldersById(string $id): OutlookTaskFolderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['outlookTaskFolder%2Did'] = $id;
        return new OutlookTaskFolderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the taskGroups property of the microsoft.graph.outlookUser entity.
     * @param string $id Unique identifier of the item
     * @return OutlookTaskGroupItemRequestBuilder
    */
    public function taskGroupsById(string $id): OutlookTaskGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['outlookTaskGroup%2Did'] = $id;
        return new OutlookTaskGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the tasks property of the microsoft.graph.outlookUser entity.
     * @param string $id Unique identifier of the item
     * @return OutlookTaskItemRequestBuilder
    */
    public function tasksById(string $id): OutlookTaskItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['outlookTask%2Did'] = $id;
        return new OutlookTaskItemRequestBuilder($urlTplParams, $this->requestAdapter);
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
