<?php

namespace Microsoft\\Graph\\Beta\\Generated\Users\Item\AdhocCalls\Item\Transcripts\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve a callTranscript object associated with a scheduled onlineMeeting and an ad hoc call. This API supports the retrieval of call transcripts from private chat meetings and channel meetings, and ad hoc calls including PSTN, 1:1, and group calls. Private channel meetings are not supported.  Retrieving the transcript returns the metadata of the single transcript associated with an online meeting or an ad hoc call. Retrieving the content of the transcript returns the stream of text associated with the transcript.
*/
class CallTranscriptItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new CallTranscriptItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
