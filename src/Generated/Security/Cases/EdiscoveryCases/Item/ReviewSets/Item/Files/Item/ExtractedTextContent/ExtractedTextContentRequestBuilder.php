<?php

namespace Microsoft\Graph\Beta\Generated\Security\Cases\EdiscoveryCases\Item\ReviewSets\Item\Files\Item\ExtractedTextContent;

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
use Psr\Http\Message\StreamInterface;

class ExtractedTextContentRequestBuilder 
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
     * Instantiates a new ExtractedTextContentRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/security/cases/ediscoveryCases/{ediscoveryCase%2Did}/reviewSets/{ediscoveryReviewSet%2Did}/files/{ediscoveryFile%2Did}/extractedTextContent';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get extractedTextContent for the navigation property files from security
     * @param ExtractedTextContentRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?ExtractedTextContentRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update extractedTextContent for the navigation property files in security
     * @param StreamInterface $body Binary request body
     * @param ExtractedTextContentRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPutRequestInformation(StreamInterface $body, ?ExtractedTextContentRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setStreamContent($body);
        return $requestInfo;
    }

    /**
     * Get extractedTextContent for the navigation property files from security
     * @param ExtractedTextContentRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?ExtractedTextContentRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update extractedTextContent for the navigation property files in security
     * @param StreamInterface $body Binary request body
     * @param ExtractedTextContentRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function put(StreamInterface $body, ?ExtractedTextContentRequestBuilderPutRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPutRequestInformation($body, $requestConfiguration);
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
