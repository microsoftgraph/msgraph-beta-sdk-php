<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OrganizerMeetingInfo extends MeetingInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var IdentitySet|null $organizer The organizer property
    */
    private ?IdentitySet $organizer = null;
    
    /**
     * Instantiates a new OrganizerMeetingInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizerMeetingInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizerMeetingInfo {
        return new OrganizerMeetingInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'organizer' => function (ParseNode $n) use ($o) { $o->setOrganizer($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the organizer property value. The organizer property
     * @return IdentitySet|null
    */
    public function getOrganizer(): ?IdentitySet {
        return $this->organizer;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('organizer', $this->organizer);
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
     * Sets the organizer property value. The organizer property
     *  @param IdentitySet|null $value Value to set for the organizer property.
    */
    public function setOrganizer(?IdentitySet $value ): void {
        $this->organizer = $value;
    }

}
