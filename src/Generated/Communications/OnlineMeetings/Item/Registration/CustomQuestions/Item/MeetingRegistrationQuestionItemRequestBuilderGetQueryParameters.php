<?php

namespace Microsoft\Graph\Beta\Generated\Communications\OnlineMeetings\Item\Registration\CustomQuestions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a custom registration question associated with a meetingRegistration object on behalf of the organizer. This API is available in the following national cloud deployments.
*/
class MeetingRegistrationQuestionItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new MeetingRegistrationQuestionItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
