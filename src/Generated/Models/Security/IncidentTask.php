<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IncidentTask extends Entity implements Parsable 
{
    /**
     * Instantiates a new IncidentTask and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IncidentTask
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IncidentTask {
        return new IncidentTask();
    }

    /**
     * Gets the actionStatus property value. The actionStatus property
     * @return IncidentTaskActionStatus|null
    */
    public function getActionStatus(): ?IncidentTaskActionStatus {
        $val = $this->getBackingStore()->get('actionStatus');
        if (is_null($val) || $val instanceof IncidentTaskActionStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionStatus'");
    }

    /**
     * Gets the actionType property value. The actionType property
     * @return IncidentTaskActionType|null
    */
    public function getActionType(): ?IncidentTaskActionType {
        $val = $this->getBackingStore()->get('actionType');
        if (is_null($val) || $val instanceof IncidentTaskActionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionType'");
    }

    /**
     * Gets the createdByDisplayName property value. The createdByDisplayName property
     * @return string|null
    */
    public function getCreatedByDisplayName(): ?string {
        $val = $this->getBackingStore()->get('createdByDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdByDisplayName'");
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionStatus' => fn(ParseNode $n) => $o->setActionStatus($n->getEnumValue(IncidentTaskActionStatus::class)),
            'actionType' => fn(ParseNode $n) => $o->setActionType($n->getEnumValue(IncidentTaskActionType::class)),
            'createdByDisplayName' => fn(ParseNode $n) => $o->setCreatedByDisplayName($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'incident' => fn(ParseNode $n) => $o->setIncident($n->getObjectValue([Incident::class, 'createFromDiscriminatorValue'])),
            'lastModifiedByDisplayName' => fn(ParseNode $n) => $o->setLastModifiedByDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'responseAction' => fn(ParseNode $n) => $o->setResponseAction($n->getObjectValue([IncidentTaskResponseAction::class, 'createFromDiscriminatorValue'])),
            'source' => fn(ParseNode $n) => $o->setSource($n->getEnumValue(IncidentTaskSource::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(IncidentTaskStatus::class)),
        ]);
    }

    /**
     * Gets the incident property value. The incident property
     * @return Incident|null
    */
    public function getIncident(): ?Incident {
        $val = $this->getBackingStore()->get('incident');
        if (is_null($val) || $val instanceof Incident) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'incident'");
    }

    /**
     * Gets the lastModifiedByDisplayName property value. The lastModifiedByDisplayName property
     * @return string|null
    */
    public function getLastModifiedByDisplayName(): ?string {
        $val = $this->getBackingStore()->get('lastModifiedByDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedByDisplayName'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the responseAction property value. The responseAction property
     * @return IncidentTaskResponseAction|null
    */
    public function getResponseAction(): ?IncidentTaskResponseAction {
        $val = $this->getBackingStore()->get('responseAction');
        if (is_null($val) || $val instanceof IncidentTaskResponseAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'responseAction'");
    }

    /**
     * Gets the source property value. The source property
     * @return IncidentTaskSource|null
    */
    public function getSource(): ?IncidentTaskSource {
        $val = $this->getBackingStore()->get('source');
        if (is_null($val) || $val instanceof IncidentTaskSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'source'");
    }

    /**
     * Gets the status property value. The status property
     * @return IncidentTaskStatus|null
    */
    public function getStatus(): ?IncidentTaskStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof IncidentTaskStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('actionStatus', $this->getActionStatus());
        $writer->writeEnumValue('actionType', $this->getActionType());
        $writer->writeStringValue('createdByDisplayName', $this->getCreatedByDisplayName());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('incident', $this->getIncident());
        $writer->writeStringValue('lastModifiedByDisplayName', $this->getLastModifiedByDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeObjectValue('responseAction', $this->getResponseAction());
        $writer->writeEnumValue('source', $this->getSource());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the actionStatus property value. The actionStatus property
     * @param IncidentTaskActionStatus|null $value Value to set for the actionStatus property.
    */
    public function setActionStatus(?IncidentTaskActionStatus $value): void {
        $this->getBackingStore()->set('actionStatus', $value);
    }

    /**
     * Sets the actionType property value. The actionType property
     * @param IncidentTaskActionType|null $value Value to set for the actionType property.
    */
    public function setActionType(?IncidentTaskActionType $value): void {
        $this->getBackingStore()->set('actionType', $value);
    }

    /**
     * Sets the createdByDisplayName property value. The createdByDisplayName property
     * @param string|null $value Value to set for the createdByDisplayName property.
    */
    public function setCreatedByDisplayName(?string $value): void {
        $this->getBackingStore()->set('createdByDisplayName', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
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
     * Sets the incident property value. The incident property
     * @param Incident|null $value Value to set for the incident property.
    */
    public function setIncident(?Incident $value): void {
        $this->getBackingStore()->set('incident', $value);
    }

    /**
     * Sets the lastModifiedByDisplayName property value. The lastModifiedByDisplayName property
     * @param string|null $value Value to set for the lastModifiedByDisplayName property.
    */
    public function setLastModifiedByDisplayName(?string $value): void {
        $this->getBackingStore()->set('lastModifiedByDisplayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the responseAction property value. The responseAction property
     * @param IncidentTaskResponseAction|null $value Value to set for the responseAction property.
    */
    public function setResponseAction(?IncidentTaskResponseAction $value): void {
        $this->getBackingStore()->set('responseAction', $value);
    }

    /**
     * Sets the source property value. The source property
     * @param IncidentTaskSource|null $value Value to set for the source property.
    */
    public function setSource(?IncidentTaskSource $value): void {
        $this->getBackingStore()->set('source', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param IncidentTaskStatus|null $value Value to set for the status property.
    */
    public function setStatus(?IncidentTaskStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
