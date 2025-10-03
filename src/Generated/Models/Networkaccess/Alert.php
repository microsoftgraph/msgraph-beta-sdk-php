<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Networkaccess;

use DateTime;
use Microsoft\\Graph\\Beta\\Generated\Models\Entity;
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
     * Gets the actions property value. List of possible action items to take based on the alert (if applicable).
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
     * Gets the categories property value. Categories associated with the alert.
     * @return array<IntentCategory>|null
    */
    public function getCategories(): ?array {
        $val = $this->getBackingStore()->get('categories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IntentCategory::class);
            /** @var array<IntentCategory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'categories'");
    }

    /**
     * Gets the componentName property value. Component name related to the alert.
     * @return string|null
    */
    public function getComponentName(): ?string {
        $val = $this->getBackingStore()->get('componentName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'componentName'");
    }

    /**
     * Gets the creationDateTime property value. The time the alert was created in the system. Required.
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
     * Gets the description property value. Text description explaining the alert.
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
     * Gets the detectionTechnology property value. Alert detection technology.
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
     * Gets the displayName property value. The display name of the alert. Required.
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
     * Gets the extendedProperties property value. Extended properties for the alert.
     * @return ExtendedProperties|null
    */
    public function getExtendedProperties(): ?ExtendedProperties {
        $val = $this->getBackingStore()->get('extendedProperties');
        if (is_null($val) || $val instanceof ExtendedProperties) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extendedProperties'");
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
            'categories' => fn(ParseNode $n) => $o->setCategories($n->getCollectionOfEnumValues(IntentCategory::class)),
            'componentName' => fn(ParseNode $n) => $o->setComponentName($n->getStringValue()),
            'creationDateTime' => fn(ParseNode $n) => $o->setCreationDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'detectionTechnology' => fn(ParseNode $n) => $o->setDetectionTechnology($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'extendedProperties' => fn(ParseNode $n) => $o->setExtendedProperties($n->getObjectValue([ExtendedProperties::class, 'createFromDiscriminatorValue'])),
            'firstActivityDateTime' => fn(ParseNode $n) => $o->setFirstActivityDateTime($n->getDateTimeValue()),
            'isPreview' => fn(ParseNode $n) => $o->setIsPreview($n->getBooleanValue()),
            'lastActivityDateTime' => fn(ParseNode $n) => $o->setLastActivityDateTime($n->getDateTimeValue()),
            'policy' => fn(ParseNode $n) => $o->setPolicy($n->getObjectValue([FilteringPolicy::class, 'createFromDiscriminatorValue'])),
            'productName' => fn(ParseNode $n) => $o->setProductName($n->getStringValue()),
            'relatedResources' => fn(ParseNode $n) => $o->setRelatedResources($n->getCollectionOfObjectValues([RelatedResource::class, 'createFromDiscriminatorValue'])),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(AlertSeverity::class)),
            'subTechniques' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSubTechniques($val);
            },
            'techniques' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTechniques($val);
            },
            'vendorName' => fn(ParseNode $n) => $o->setVendorName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the firstActivityDateTime property value. The time of the first activity related to the alert.
     * @return DateTime|null
    */
    public function getFirstActivityDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('firstActivityDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firstActivityDateTime'");
    }

    /**
     * Gets the isPreview property value. Indicates if the alert is a preview.
     * @return bool|null
    */
    public function getIsPreview(): ?bool {
        $val = $this->getBackingStore()->get('isPreview');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPreview'");
    }

    /**
     * Gets the lastActivityDateTime property value. The time of the last activity related to the alert.
     * @return DateTime|null
    */
    public function getLastActivityDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastActivityDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastActivityDateTime'");
    }

    /**
     * Gets the policy property value. The filtering policy associated with the alert. This relationship allows you to retrieve or manage the filtering policy that triggered or is related to the alert instance.
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
     * Gets the productName property value. The name of the product that raised the alert.
     * @return string|null
    */
    public function getProductName(): ?string {
        $val = $this->getBackingStore()->get('productName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productName'");
    }

    /**
     * Gets the relatedResources property value. List of related resources to the alert (if applicable).
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
     * Gets the subTechniques property value. Sub-techniques associated with the alert.
     * @return array<string>|null
    */
    public function getSubTechniques(): ?array {
        $val = $this->getBackingStore()->get('subTechniques');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subTechniques'");
    }

    /**
     * Gets the techniques property value. Techniques associated with the alert.
     * @return array<string>|null
    */
    public function getTechniques(): ?array {
        $val = $this->getBackingStore()->get('techniques');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'techniques'");
    }

    /**
     * Gets the vendorName property value. The name of the vendor that raised the alert.
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
        $writer->writeCollectionOfEnumValues('categories', $this->getCategories());
        $writer->writeStringValue('componentName', $this->getComponentName());
        $writer->writeDateTimeValue('creationDateTime', $this->getCreationDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('detectionTechnology', $this->getDetectionTechnology());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('extendedProperties', $this->getExtendedProperties());
        $writer->writeDateTimeValue('firstActivityDateTime', $this->getFirstActivityDateTime());
        $writer->writeBooleanValue('isPreview', $this->getIsPreview());
        $writer->writeDateTimeValue('lastActivityDateTime', $this->getLastActivityDateTime());
        $writer->writeObjectValue('policy', $this->getPolicy());
        $writer->writeStringValue('productName', $this->getProductName());
        $writer->writeCollectionOfObjectValues('relatedResources', $this->getRelatedResources());
        $writer->writeEnumValue('severity', $this->getSeverity());
        $writer->writeCollectionOfPrimitiveValues('subTechniques', $this->getSubTechniques());
        $writer->writeCollectionOfPrimitiveValues('techniques', $this->getTechniques());
        $writer->writeStringValue('vendorName', $this->getVendorName());
    }

    /**
     * Sets the actions property value. List of possible action items to take based on the alert (if applicable).
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
     * Sets the categories property value. Categories associated with the alert.
     * @param array<IntentCategory>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value): void {
        $this->getBackingStore()->set('categories', $value);
    }

    /**
     * Sets the componentName property value. Component name related to the alert.
     * @param string|null $value Value to set for the componentName property.
    */
    public function setComponentName(?string $value): void {
        $this->getBackingStore()->set('componentName', $value);
    }

    /**
     * Sets the creationDateTime property value. The time the alert was created in the system. Required.
     * @param DateTime|null $value Value to set for the creationDateTime property.
    */
    public function setCreationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('creationDateTime', $value);
    }

    /**
     * Sets the description property value. Text description explaining the alert.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the detectionTechnology property value. Alert detection technology.
     * @param string|null $value Value to set for the detectionTechnology property.
    */
    public function setDetectionTechnology(?string $value): void {
        $this->getBackingStore()->set('detectionTechnology', $value);
    }

    /**
     * Sets the displayName property value. The display name of the alert. Required.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the extendedProperties property value. Extended properties for the alert.
     * @param ExtendedProperties|null $value Value to set for the extendedProperties property.
    */
    public function setExtendedProperties(?ExtendedProperties $value): void {
        $this->getBackingStore()->set('extendedProperties', $value);
    }

    /**
     * Sets the firstActivityDateTime property value. The time of the first activity related to the alert.
     * @param DateTime|null $value Value to set for the firstActivityDateTime property.
    */
    public function setFirstActivityDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstActivityDateTime', $value);
    }

    /**
     * Sets the isPreview property value. Indicates if the alert is a preview.
     * @param bool|null $value Value to set for the isPreview property.
    */
    public function setIsPreview(?bool $value): void {
        $this->getBackingStore()->set('isPreview', $value);
    }

    /**
     * Sets the lastActivityDateTime property value. The time of the last activity related to the alert.
     * @param DateTime|null $value Value to set for the lastActivityDateTime property.
    */
    public function setLastActivityDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastActivityDateTime', $value);
    }

    /**
     * Sets the policy property value. The filtering policy associated with the alert. This relationship allows you to retrieve or manage the filtering policy that triggered or is related to the alert instance.
     * @param FilteringPolicy|null $value Value to set for the policy property.
    */
    public function setPolicy(?FilteringPolicy $value): void {
        $this->getBackingStore()->set('policy', $value);
    }

    /**
     * Sets the productName property value. The name of the product that raised the alert.
     * @param string|null $value Value to set for the productName property.
    */
    public function setProductName(?string $value): void {
        $this->getBackingStore()->set('productName', $value);
    }

    /**
     * Sets the relatedResources property value. List of related resources to the alert (if applicable).
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
     * Sets the subTechniques property value. Sub-techniques associated with the alert.
     * @param array<string>|null $value Value to set for the subTechniques property.
    */
    public function setSubTechniques(?array $value): void {
        $this->getBackingStore()->set('subTechniques', $value);
    }

    /**
     * Sets the techniques property value. Techniques associated with the alert.
     * @param array<string>|null $value Value to set for the techniques property.
    */
    public function setTechniques(?array $value): void {
        $this->getBackingStore()->set('techniques', $value);
    }

    /**
     * Sets the vendorName property value. The name of the vendor that raised the alert.
     * @param string|null $value Value to set for the vendorName property.
    */
    public function setVendorName(?string $value): void {
        $this->getBackingStore()->set('vendorName', $value);
    }

}
