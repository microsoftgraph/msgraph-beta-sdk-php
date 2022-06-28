<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MeetingInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowConversationWithoutHost The allowConversationWithoutHost property
    */
    private ?bool $allowConversationWithoutHost = null;
    
    /**
     * Instantiates a new meetingInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MeetingInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MeetingInfo {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.joinMeetingIdMeetingInfo': return new JoinMeetingIdMeetingInfo();
                case '#microsoft.graph.organizerMeetingInfo': return new OrganizerMeetingInfo();
                case '#microsoft.graph.tokenMeetingInfo': return new TokenMeetingInfo();
            }
        }
        return new MeetingInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowConversationWithoutHost property value. The allowConversationWithoutHost property
     * @return bool|null
    */
    public function getAllowConversationWithoutHost(): ?bool {
        return $this->allowConversationWithoutHost;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowConversationWithoutHost' => function (ParseNode $n) use ($o) { $o->setAllowConversationWithoutHost($n->getBooleanValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowConversationWithoutHost', $this->allowConversationWithoutHost);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the allowConversationWithoutHost property value. The allowConversationWithoutHost property
     *  @param bool|null $value Value to set for the allowConversationWithoutHost property.
    */
    public function setAllowConversationWithoutHost(?bool $value ): void {
        $this->allowConversationWithoutHost = $value;
    }

}
