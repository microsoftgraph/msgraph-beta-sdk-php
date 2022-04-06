<?php

namespace Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Synchronization\Templates\Item\Schema;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\SynchronizationSchema;
use Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Synchronization\Templates\Item\Schema\Directories\DirectoriesRequestBuilder;
use Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Synchronization\Templates\Item\Schema\Directories\Item\DirectoryDefinitionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Synchronization\Templates\Item\Schema\FilterOperators\FilterOperatorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Synchronization\Templates\Item\Schema\Functions\FunctionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Synchronization\Templates\Item\Schema\ParseExpression\ParseExpressionRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class SchemaRequestBuilder 
{
    /**
     * The directories property
    */
    public function directories(): DirectoriesRequestBuilder {
        return new DirectoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The parseExpression property
    */
    public function parseExpression(): ParseExpressionRequestBuilder {
        return new ParseExpressionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new SchemaRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/servicePrincipals/{servicePrincipal_id}/synchronization/templates/{synchronizationTemplate_id}/schema{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property schema for servicePrincipals
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Default synchronization schema for the jobs based on this template.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property schema in servicePrincipals
     * @param SynchronizationSchema $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(SynchronizationSchema $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Delete navigation property schema for servicePrincipals
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.servicePrincipals.item.synchronization.templates.item.schema.directories.item collection
     * @param string $id Unique identifier of the item
     * @return DirectoryDefinitionItemRequestBuilder
    */
    public function directoriesById(string $id): DirectoryDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryDefinition_id'] = $id;
        return new DirectoryDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to call the filterOperators method.
     * @return FilterOperatorsRequestBuilder
    */
    public function filterOperators(): FilterOperatorsRequestBuilder {
        return new FilterOperatorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the functions method.
     * @return FunctionsRequestBuilder
    */
    public function functions(): FunctionsRequestBuilder {
        return new FunctionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Default synchronization schema for the jobs based on this template.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, SynchronizationSchema::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property schema in servicePrincipals
     * @param SynchronizationSchema $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(SynchronizationSchema $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
