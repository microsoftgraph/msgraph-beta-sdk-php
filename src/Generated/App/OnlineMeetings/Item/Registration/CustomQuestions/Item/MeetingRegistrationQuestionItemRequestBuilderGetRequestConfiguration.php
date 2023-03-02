<?php

namespace Microsoft\Graph\Beta\Generated\App\OnlineMeetings\Item\Registration\CustomQuestions\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MeetingRegistrationQuestionItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var MeetingRegistrationQuestionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MeetingRegistrationQuestionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MeetingRegistrationQuestionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MeetingRegistrationQuestionItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): MeetingRegistrationQuestionItemRequestBuilderGetQueryParameters {
        return new MeetingRegistrationQuestionItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new MeetingRegistrationQuestionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param MeetingRegistrationQuestionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MeetingRegistrationQuestionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
