<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VirtualEvent extends Entity implements Parsable 
{
    /**
     * Instantiates a new virtualEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualEvent {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.virtualEventWebinar': return new VirtualEventWebinar();
            }
        }
        return new VirtualEvent();
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return CommunicationsIdentitySet|null
    */
    public function getCreatedBy(): ?CommunicationsIdentitySet {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the endDateTime property value. The endDateTime property
     * @return DateTimeTimeZone|null
    */
    public function getEndDateTime(): ?DateTimeTimeZone {
        return $this->getBackingStore()->get('endDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([CommunicationsIdentitySet::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'presenters' => fn(ParseNode $n) => $o->setPresenters($n->getCollectionOfObjectValues([VirtualEventPresenter::class, 'createFromDiscriminatorValue'])),
            'sessions' => fn(ParseNode $n) => $o->setSessions($n->getCollectionOfObjectValues([VirtualEventSession::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(VirtualEventStatus::class)),
        ]);
    }

    /**
     * Gets the presenters property value. The presenters property
     * @return array<VirtualEventPresenter>|null
    */
    public function getPresenters(): ?array {
        return $this->getBackingStore()->get('presenters');
    }

    /**
     * Gets the sessions property value. The sessions property
     * @return array<VirtualEventSession>|null
    */
    public function getSessions(): ?array {
        return $this->getBackingStore()->get('sessions');
    }

    /**
     * Gets the startDateTime property value. The startDateTime property
     * @return DateTimeTimeZone|null
    */
    public function getStartDateTime(): ?DateTimeTimeZone {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Gets the status property value. The status property
     * @return VirtualEventStatus|null
    */
    public function getStatus(): ?VirtualEventStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('endDateTime', $this->getEndDateTime());
        $writer->writeCollectionOfObjectValues('presenters', $this->getPresenters());
        $writer->writeCollectionOfObjectValues('sessions', $this->getSessions());
        $writer->writeObjectValue('startDateTime', $this->getStartDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the createdBy property value. The createdBy property
     * @param CommunicationsIdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?CommunicationsIdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the endDateTime property value. The endDateTime property
     * @param DateTimeTimeZone|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the presenters property value. The presenters property
     * @param array<VirtualEventPresenter>|null $value Value to set for the presenters property.
    */
    public function setPresenters(?array $value): void {
        $this->getBackingStore()->set('presenters', $value);
    }

    /**
     * Sets the sessions property value. The sessions property
     * @param array<VirtualEventSession>|null $value Value to set for the sessions property.
    */
    public function setSessions(?array $value): void {
        $this->getBackingStore()->set('sessions', $value);
    }

    /**
     * Sets the startDateTime property value. The startDateTime property
     * @param DateTimeTimeZone|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param VirtualEventStatus|null $value Value to set for the status property.
    */
    public function setStatus(?VirtualEventStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
