<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MeetingRegistrantBase extends Entity implements Parsable 
{
    /**
     * @var string|null $joinWebUrl A unique web URL for the registrant to join the meeting. Read-only.
    */
    private ?string $joinWebUrl = null;
    
    /**
     * Instantiates a new meetingRegistrantBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.meetingRegistrantBase');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MeetingRegistrantBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MeetingRegistrantBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.externalMeetingRegistrant': return new ExternalMeetingRegistrant();
                case '#microsoft.graph.meetingRegistrant': return new MeetingRegistrant();
            }
        }
        return new MeetingRegistrantBase();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'joinWebUrl' => fn(ParseNode $n) => $o->setJoinWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the joinWebUrl property value. A unique web URL for the registrant to join the meeting. Read-only.
     * @return string|null
    */
    public function getJoinWebUrl(): ?string {
        return $this->joinWebUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('joinWebUrl', $this->joinWebUrl);
    }

    /**
     * Sets the joinWebUrl property value. A unique web URL for the registrant to join the meeting. Read-only.
     *  @param string|null $value Value to set for the joinWebUrl property.
    */
    public function setJoinWebUrl(?string $value ): void {
        $this->joinWebUrl = $value;
    }

}
