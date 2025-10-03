<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\OnlineMeetings\Item\Recordings\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a callRecording object associated with a scheduled online meeting and an ad hoc call. This API supports the retrieval of call recordings from private chat meetings, channel meetings, ad hoc calls, including PSTN, 1:1, and group calls. Private channel meetings are not supported. For a recording, this API returns the metadata of the single recording associated with the online meeting or an ad hoc call. For the content of a recording, this API returns the stream of bytes associated with the recording.
*/
class CallRecordingItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new CallRecordingItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
