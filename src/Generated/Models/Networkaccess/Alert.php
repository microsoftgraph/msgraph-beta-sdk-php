<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Alert extends Entity implements Parsable 
{
    /**
     * Instantiates a new Alert and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Alert
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Alert {
        return new Alert();
    }

    /**
     * Gets the actions property value. The actions property
     * @return array<AlertAction>|null
    */
    public function getActions(): ?array {
        $val = $this->getBackingStore()->get('actions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AlertAction::class);
            /** @var array<AlertAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actions'");
    }

    /**
     * Gets the alertType property value. The alertType property
     * @return AlertType|null
    */
    public function getAlertType(): ?AlertType {
        $val = $this->getBackingStore()->get('alertType');
        if (is_null($val) || $val instanceof AlertType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertType'");
    }

    /**
     * Gets the creationDateTime property value. The creationDateTime property
     * @return DateTime|null
    */
    public function getCreationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('creationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creationDateTime'");
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
     * Gets the detectionTechnology property value. The detectionTechnology property
     * @return string|null
    */
    public function getDetectionTechnology(): ?string {
        $val = $this->getBackingStore()->get('detectionTechnology');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectionTechnology'");
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
            'actions' => fn(ParseNode $n) => $o->setActions($n->getCollectionOfObjectValues([AlertAction::class, 'createFromDiscriminatorValue'])),
            'alertType' => fn(ParseNode $n) => $o->setAlertType($n->getEnumValue(AlertType::class)),
            'creationDateTime' => fn(ParseNode $n) => $o->setCreationDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'detectionTechnology' => fn(ParseNode $n) => $o->setDetectionTechnology($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'policy' => fn(ParseNode $n) => $o->setPolicy($n->getObjectValue([FilteringPolicy::class, 'createFromDiscriminatorValue'])),
            'relatedResources' => fn(ParseNode $n) => $o->setRelatedResources($n->getCollectionOfObjectValues([RelatedResource::class, 'createFromDiscriminatorValue'])),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(AlertSeverity::class)),
            'vendorName' => fn(ParseNode $n) => $o->setVendorName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the policy property value. The policy property
     * @return FilteringPolicy|null
    */
    public function getPolicy(): ?FilteringPolicy {
        $val = $this->getBackingStore()->get('policy');
        if (is_null($val) || $val instanceof FilteringPolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policy'");
    }

    /**
     * Gets the relatedResources property value. The relatedResources property
     * @return array<RelatedResource>|null
    */
    public function getRelatedResources(): ?array {
        $val = $this->getBackingStore()->get('relatedResources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RelatedResource::class);
            /** @var array<RelatedResource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'relatedResources'");
    }

    /**
     * Gets the severity property value. The severity property
     * @return AlertSeverity|null
    */
    public function getSeverity(): ?AlertSeverity {
        $val = $this->getBackingStore()->get('severity');
        if (is_null($val) || $val instanceof AlertSeverity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'severity'");
    }

    /**
     * Gets the vendorName property value. The vendorName property
     * @return string|null
    */
    public function getVendorName(): ?string {
        $val = $this->getBackingStore()->get('vendorName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vendorName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('actions', $this->getActions());
        $writer->writeEnumValue('alertType', $this->getAlertType());
        $writer->writeDateTimeValue('creationDateTime', $this->getCreationDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('detectionTechnology', $this->getDetectionTechnology());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('policy', $this->getPolicy());
        $writer->writeCollectionOfObjectValues('relatedResources', $this->getRelatedResources());
        $writer->writeEnumValue('severity', $this->getSeverity());
        $writer->writeStringValue('vendorName', $this->getVendorName());
    }

    /**
     * Sets the actions property value. The actions property
     * @param array<AlertAction>|null $value Value to set for the actions property.
    */
    public function setActions(?array $value): void {
        $this->getBackingStore()->set('actions', $value);
    }

    /**
     * Sets the alertType property value. The alertType property
     * @param AlertType|null $value Value to set for the alertType property.
    */
    public function setAlertType(?AlertType $value): void {
        $this->getBackingStore()->set('alertType', $value);
    }

    /**
     * Sets the creationDateTime property value. The creationDateTime property
     * @param DateTime|null $value Value to set for the creationDateTime property.
    */
    public function setCreationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('creationDateTime', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the detectionTechnology property value. The detectionTechnology property
     * @param string|null $value Value to set for the detectionTechnology property.
    */
    public function setDetectionTechnology(?string $value): void {
        $this->getBackingStore()->set('detectionTechnology', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the policy property value. The policy property
     * @param FilteringPolicy|null $value Value to set for the policy property.
    */
    public function setPolicy(?FilteringPolicy $value): void {
        $this->getBackingStore()->set('policy', $value);
    }

    /**
     * Sets the relatedResources property value. The relatedResources property
     * @param array<RelatedResource>|null $value Value to set for the relatedResources property.
    */
    public function setRelatedResources(?array $value): void {
        $this->getBackingStore()->set('relatedResources', $value);
    }

    /**
     * Sets the severity property value. The severity property
     * @param AlertSeverity|null $value Value to set for the severity property.
    */
    public function setSeverity(?AlertSeverity $value): void {
        $this->getBackingStore()->set('severity', $value);
    }

    /**
     * Sets the vendorName property value. The vendorName property
     * @param string|null $value Value to set for the vendorName property.
    */
    public function setVendorName(?string $value): void {
        $this->getBackingStore()->set('vendorName', $value);
    }

}
